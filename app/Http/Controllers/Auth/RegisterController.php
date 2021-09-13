<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Consultant;
use App\Recruiter;
use App\Dataoperator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Session;
use Mautic\MauticApi;
use Mautic\Auth\ApiAuth;
use Illuminate\Http\Request;



class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo ='/';


    protected function redirectTo()
    {

        if (\Auth::user()->hasRole('superadmin'))
            return '/dashboard/home';
        else if (\Auth::user()->hasRole('consultant'))
            return '/dashboard/home';
        else if (\Auth::user()->hasRole('recruiter'))
            return '/recruiter/'.Auth::id().'/edit';
        else
            return '/';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'role' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        // $initAuth->newAuth() will accept an array of OAuth settings
            $settings = [
                   'userName'   => 'personalsite',             // Create a new user
                    'password'   => 'Campaign2020*',             // Make it a secure password
            ];

            // Initiate the auth object
            $initAuth = new ApiAuth();
            $auth     = $initAuth->newAuth($settings, 'BasicAuth');

            $apiUrl     = "https://mailserver.personalsite.net/";
            $api        = new MauticApi();



         $user = User::create([
            'name' => $data['firstname'].' '.$data['lastname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $contactApi = $api->newApi("contacts", $auth, $apiUrl);
                    $data_array = array(
                    'firstname' => $data['firstname'],
                    'lastname'  => $data['lastname'],
                    'email'     => $data['email'],
                    'ipAddress' => $_SERVER['REMOTE_ADDR'],
                    'user_type' => ucwords($data['role']),
                    'overwriteWithBlank' => true,
                );

        $contact = $contactApi->create($data_array);

        $user_type = $data['role'];

        if ($user_type == 'consultant') {
            $user->assignRole('consultant');
            $consultant = new Consultant;
            $consultant->user_id = $user->id;
            $consultant->first_name = $data['firstname'];
            $consultant->last_name = $data['lastname'];
            $consultant->manual = 0;
            $consultant->active = 0;

            $user_slug = str_slug($user->name);
            $last_record = Consultant::find(\DB::table('consultant')->max('id'));
            if($last_record){
            $incremented_id = $last_record->id + 1;}
            else{ $incremented_id =1;}
            $user_exist = Consultant::where('slug', $user_slug)->first();
            if ($user_exist) {
                $consultant->slug = $user_slug . '-' . $incremented_id;
            } else {
                $consultant->slug = $user_slug;
            }
            Session::put('newuser', '1');
            $consultant->save();

            $data = array(
                'first_name' => $data['firstname'],
                'to' => $data['email']
            );

            try {
                \Mail::send('emails.register-consultant', $data, function($message)  use ($data) {

                    $message->to($data['to'], 'PersonalSite Inc.')
                            ->from('support@personalsite.com', 'PersonalSite Inc.')
                            ->subject('PersonalSite Registration');
                });
            } catch (\Throwable $th) {
                //throw $th;
            }


            $redirectTo ='/dashboard/home'.$consultant->id.'/edit';
            // return redirect()->route('dashboard');


        } else if ($user_type == 'recruiter') {
            $user->assignRole('recruiter');
            $recruiter = new Recruiter;
            $recruiter->user_id = $user->id;
            $recruiter->first_name = $data['firstname'];
            $recruiter->last_name = $data['lastname'];
            $recruiter->active = 0;

            $user_slug = str_slug($user->name);
            $last_record = Recruiter::find(\DB::table('recruiter')->max('id'));
            if($last_record){
                $incremented_id = $last_record->id + 1;}
                else{ $incremented_id =1;}
            $user_exist = Recruiter::where('slug', $user_slug)->first();
            if ($user_exist) {
                $recruiter->slug = $user_slug . '-' . $incremented_id;
            } else {
                $recruiter->slug = $user_slug;
            }
            Session::put('newuser', '1');
            $recruiter->save();

            $data = array(
                'first_name' => $data['firstname'],
                'to' => $data['email']
            );

            \Mail::send('emails.register-recruiter', $data, function($message)  use ($data) {

                $message->to($data['to'], 'PersonalSite Inc.')

                        ->subject('Welcome - Personalsite');
            });

        }



        return $user;

    }



    protected function reg_op(Request $request)
    {
         $user = User::create([
            'name' => $request->input('firstname').' '.$request->input('lastname'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        $role_exist = Role::where('name', 'dataop')->first();
        if(!$role_exist){
            $role = Role::create(['name' => 'dataop']);
        }
      
            $user->assignRole('dataop');
            $dop = new Dataoperator;
            $dop->user_id = $user->id;
            $dop->first_name = $request->input('firstname');
            $dop->last_name = $request->input('lastname');
            $dop->data_name = $request->input('data_oprator');           
            $dop->save();
            // $redirectTo ='/dataop/dashboard';      
        // return $user;
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            

            return redirect('/dataop/dashboard');

            }

    }
}
