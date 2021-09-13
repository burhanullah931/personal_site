<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\User;
use Socialite;
use File;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {

       
        $userdata = Socialite::driver($provider)->user();

        $user = User::where('email', $userdata->getEmail())->first();
        $new_user= false;
        if(!$user){
            $new_user =true;
            
            $fileContents = file_get_contents($userdata->avatar_original);
            $t =time();
            File::put(public_path() . '/storage/site/images/users/consultant/'.$t.".jpg", $fileContents);

            //To show picture 
            $picture = $t.".jpg";
            
        $user = User::create([
                'email' => $userdata->getEmail(),
                'name' => $userdata->getName(),
                'provider_id' => $userdata->getId(),
                'provider'=> $provider,
                'logo'=> $picture,
        ]);
    }else{
        if($user->provider!=$provider){
            
            return redirect('/login')->with('error','An account for that email already exists!');;
        }
    }
        // $user->token;

        Auth::login($user, true);
        if($new_user){
        return redirect('/userrole');}
        else{
            return redirect('/');
        }
    }


    protected function redirectTo()
    {

        if (\Auth::user()->hasRole('superadmin'))
            return '/dashboard/home';
        else if (\Auth::user()->hasRole('consultant'))
            // return '/consultant/'.Auth::id().'/edit';
            return '/dashboard/home';
        else
            return '/';
    }
    
   


}
