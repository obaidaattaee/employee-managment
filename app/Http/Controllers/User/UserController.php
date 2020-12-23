<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller{
    public function index ()  {
        $user = User::where('type' , 'company')->where('code' , auth()->user()->code)->first();
        return view('user.layouts.app') ;
    }
}
