<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected function redirectTo(){
        if (auth()->user()->type == 'company') {
            return '/company';
        }elseif(auth()->user()->type == 'super_admin'){
            return '/admin';
        }
       elseif(auth()->user()->type == 'customer'){
            return '/site/customer/report';
        }
        elseif(auth()->user()->type == 'employee'){
            return '/site/employee/report';
        }
    }

    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            "code" => ['required' , 'string' , 'digits:4'],
            'password' => 'required|string',
        ]);
    }
    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password' , 'code' );
    }
    public function showCompanyLoginForm(){

        return view('auth.company_login');

    }


}
