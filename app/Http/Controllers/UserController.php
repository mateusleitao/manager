<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function LoginPage(){

        return view('login');
    }

    public function SingupPage(){
        $user = new User;


        return view('singup');

    }
}
