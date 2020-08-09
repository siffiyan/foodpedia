<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Auth;
use App\Models\User;

class AuthController extends Controller
{
    
    public function login()
    {
        return view('auth.login');
    }

    public function login_action(Request $request){


        $user= $request->username;
        $password = $request->password;

        $user = User::where([['username',$user],['password',$password]])->first();

        if($user) {
            Session::put('nama_user',$user->nama_user);
            Session::put('login',TRUE);
            return redirect('/dashboard')->with('msg','Anda berhasil Login');
        }
        else{
            return redirect('/auth/login')->with('error','email / password anda salah');
        }

    }
}