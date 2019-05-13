<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\RedirectsUsers;
use App\RegistroSocio;
use Auth;
class SociosLoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest:socios')->except('logout');
    }

   

    public function showLoginForm()
    {
        return view('socios_registro.socioform_iniciosesion');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    protected function guard() 
    { 
    	return Auth::guard('socios'); 
    }

    public function username()
    {
        return 'email';
    }

    

     protected function validateLogin(Request $request)
    {
        $request->validate(
            [
            $this->username() => 'required|string',
            'password' => 'required|string',
            ]
        );
    }


    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/inicia-sesion');
    }

   


    //protected $loginView = 'socios_registro.socioform_iniciosesion';
   // protected $guard = 'socios';
}
