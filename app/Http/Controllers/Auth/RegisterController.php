<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
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

        return '/home';

    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        if (in_array($data['type'] , ['super_admin' , 'company'])) {
            return Validator::make($data, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'type' => ['required', 'string'],
                'phone' => ['required', 'string', 'max:255', 'unique:users'],
                'address' => ['required', 'string', 'max:255'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
        }
        else{
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'type' => ['required', 'string'],
            'phone' => ['required', 'string', 'max:255', 'unique:users'],
            'address' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'code' => ['required', 'string', 'digits:4', 'exists:users'],
        ]);
    }
}

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $digits = 4;
        $code = rand(pow(10, $digits-1), pow(10, $digits)-1);
        $data['code'] = $data['code'] ?? $code ;
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'type' => $data['type'],
            'code' => $data['code'] ,
            'password' => Hash::make($data['password']),
        ]);
    }
    public function showUserRegisterFrom()
    {
        return view('auth.user_register');
    }
    public function showCustomerRegisterFrom(){

        return view('auth.customer_register');

    }
    public function showCustomerLoginFrom(){

        return view('site.login');

    }

}
