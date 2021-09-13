<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Consultant;
use App\Recruiter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use Mautic\MauticApi;
use Mautic\Auth\ApiAuth;
class RoleAssignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('roleassign.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'password' => ['required', 'string', 'min:8'],
            'role' => 'required'

        ]);

        $user= User::where('id',Auth::id())->first();
        // dd($user);
        $user->password=  Hash::make($request->password);
        $user->save();
        $user_type = $request->input('role');
        $arr = explode(' ',trim($user->name));
                $first =$arr[0];
                $last =$arr[1];

            $settings = [
                   'userName'   => 'personalsite',             // Create a new user
                    'password'   => 'Campaign2020*',             // Make it a secure password
            ];

            // Initiate the auth object
            $initAuth = new ApiAuth();
            $auth     = $initAuth->newAuth($settings, 'BasicAuth');

            $apiUrl     = "https://mailserver.personalsite.net/";
            $api    = new MauticApi();
            $contactApi = $api->newApi("contacts", $auth, $apiUrl);
                    $data_array = array(
                    'firstname' => $first,
                    'lastname'  => $last,
                    'email'     => $user['email'],
                    'ipAddress' => $_SERVER['REMOTE_ADDR'],
                    'user_type' => ucwords($user_type),
                    'overwriteWithBlank' => true,
                );

        $contact = $contactApi->create($data_array);

        if ($user_type == 'consultant') {
            $user->assignRole('consultant');
            $consultant = new Consultant;
            $consultant->user_id = $user->id;

            $consultant->first_name =$first ;
            $consultant->last_name = $last;
            $consultant->logo = $user->logo;
            $consultant->manual = 0;
            $consultant->active = 0;

            $user_slug = str_slug($user->name);
            $consultant_exist = Consultant::where('slug', $user_slug)->first();

            if ($consultant_exist) {
                $last_record = Consultant::find(\DB::table('consultant')->max('id'));
                $incremented_id = $last_record->id + 1;
                $consultant->slug = $user_slug . '-' . $incremented_id;
            } else {
                $consultant->slug = $user_slug;
            }

            $consultant->save();
        return redirect()->route('consultant.edit',$user->id);
        }

        if ($user_type == 'recruiter') {
            $user->assignRole('recruiter');

            $recruiter = new Recruiter;
            $recruiter->user_id = $user->id;
            $recruiter->first_name = $first;
            $recruiter->last_name = $last;
            $recruiter->logo = $user->logo;


            $user_slug = str_slug($user->name);

            $recruiter_exist = Recruiter::where('slug', $user_slug)->first();

            if ($recruiter_exist) {
                $last_record = Recruiter::find(\DB::table('recruiter')->max('id'));
                $incremented_id = $last_record->id + 1;
                $recruiter->slug = $user_slug . '-' . $incremented_id;
            } else {
                $recruiter->slug = $user_slug;
            }
            $recruiter->save();
            return redirect()->route('recruiter.edit',$user->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
