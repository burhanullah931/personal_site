<?php

namespace App\Http\Controllers\Sale;

use App\Sale;
use App\User;
use validate;
use App\Consultant;
use App\JobCategory;
use Mautic\MauticApi;
use SendGrid\Mail\Mail;
use Mautic\Auth\ApiAuth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SaleController extends Controller
{
    public function index()
    {
        $industries = JobCategory::all(); 
        return view('sales.index', compact('industries'));
    }
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'email' => 'required',
            'industry' => 'required',
            
        ]);
        $checkUser = User::where(['email' => $request->email, 'status'=> false])->first();
        if($checkUser){
            return redirect()->route('sale.screen2',$checkUser->id);

        }else{
            $user = new User();
            $user->email = $request->email;
            $user->save();

            $user->assignRole('consultant');

            $consultant = new Consultant();
            $consultant->user_id = $user->id;
            $consultant->industry = $request->industry;
            $consultant->save();

            return redirect()->route('sale.screen2',$user->id);
        }
    }
    public function scree2($id)
    {
        $user = User::findOrFail($id);
        return view('sales.screen2', compact('user'));
    }
    public function screen2Update(Request $request)
    {
        dd($request);
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'industry' => 'required',
            'password' => 'required|confirmed'
            
        ]);
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


        $user = User::findOrFail($request->user_id);
        $user->update([
            'status' => true,
            'name' => $request->first_name. ' '. $request->last_name,
            'password' => bcrypt($request->password)
        ]);
        $consultant = Consultant::where('user_id', $request->user_id)->first();
        $consultant->update([
            'industry' => $request->industry,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name
        ]);
        // return $user->email. $user->password;
        auth()->login($user);

        $contactApi = $api->newApi("contacts", $auth, $apiUrl);
                    $data_array = array(
                    'firstname' => $consultant['first_name'],
                    'lastname'  => $consultant['last_name'],
                    'email'     => $user['email'],
                    'ipAddress' => $_SERVER['REMOTE_ADDR'],
                    'overwriteWithBlank' => true,
                );

        $contact = $contactApi->create($data_array);

        $data = array(
            'first_name' => $consultant['first_name'],
            'to' => $user['email']
        );

        \Mail::send('emails.register-consultant', $data, function($message)  use ($data) {

            $message->to($data['to'], 'PersonalSite Inc.')
                    ->from('support@personalsite.com', 'PersonalSite Inc.')
                    ->subject('PersonalSite Registration');
        });
       
        return redirect()->route('sale.edit', $consultant->id);
    }
    public function editSale($id)
    {
        // dd($id);
        $consultant = Consultant::findOrFail($id);
        return view('sales.edit-sale', compact('consultant'));
    }
}
