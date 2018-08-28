<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


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
    protected $redirectTo = '/pages/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider()
    {
        if(\App::environment('local')){
            Auth::loginUsingId(1, true);
            
            return redirect()->route('profile');
        }
        else{
            return Socialite::driver('google')->redirect();
        }
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();
        $gid = $user->getId();
        $email = $user->getEmail();
        $avatar = $user->getAvatar();


        $dbuser = \App\Models\Member::where('email', $email)->first();
        if ($dbuser === null){
            return $email;
        }
        else {
            Auth::login($dbuser);
            $dbuser->gavatar = $avatar;
            $dbuser->save();
            return redirect()->route('profile');
        }

    }
}
