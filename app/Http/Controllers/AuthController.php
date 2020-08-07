<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    public function login()
    {
        return view('auth.login');
    }

    public function login_action(Request $request){

        $email= $request->email;
        $password = $request->password;

        $user = User::where('email',$email)->first();

        if($user) {
            if(password_verify($request->password,$user->password)){

            }

            else{
                redirect('/auth/login')->with('error','email / password anda salah');
            }
        }

        else{
            redirect('/auth/login')->with('error','email / password anda salah');
        }

    }
}