<?php
namespace App\Http\Controllers\Company;


use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CompanyRegisterController extends Controller
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

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'title' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:companies'],
            'phone' => ['required', 'string', 'max:255', 'unique:companies'],
            'address' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function register(Request $request)
    {
        $data =  $this->validator($request->all())->validate();
        $data = $this->create($data) ;
        return view('company.showcode')->with('code' , $data->code) ;
    }
    protected function create(array $data)
    {
        $digits = 4;
        $code = rand(pow(10, $digits-1), pow(10, $digits)-1);
        $data['code'] = $code ;
        $company =  Company::create([
            'title' => $data['title'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'code' => $data['code'] ,
            'password' => Hash::make($data['password']),
        ]);
        return $company ;
    }
    public function showRegistrationForm()
    {
        return view('auth.company_register');
    }
}
