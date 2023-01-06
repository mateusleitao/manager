<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function loginPage(){
        return view('loginPage');
    }
    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;

        $user = User::where('email', $email)->first();

        if($user){
            if(Hash::check($password, $user->password)){
                // as informações do usuário estão corretas, você pode fazer o login do usuário aqui
                return redirect('/singup');
            }else{
                // a senha está incorreta
                return back()->withErrors(['Senha incorreta']);
            }
        }else{
            // o usuário não foi encontrado
            return back()->withErrors(['Usuário não encontrado']);
        }
    }

    public function SingupPage(){

        return view('singup');

    }

    public function CreateUser(){
        return view('createUser');
    }

    public function create(){
        return view('createUser.create');
    }


    public function store(Request $request){

        $user = new User;
        $user->name = $request->name_user;
        $user->email = $request->email_user;
        $user->password = Hash::make($request->password_user);
        $user->birthday = $request->birthday_user;
        $user->company_name = $request->company_user;
        $user->cpf = $request->cpf_user;
        $user->profession = $request->profession_user;

        $user->save();

        return redirect('/');
    }
}


