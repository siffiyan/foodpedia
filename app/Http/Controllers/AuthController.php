<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Models\Users;

class AuthController extends Controller
{
    
    public function login()
    {
        return view('auth.login');
    }

    public function login_action(Request $request){


        $user= $request->username;
        $password = $request->password;

        //$user = User::where([['username',$user],['password',$password]])->first();
        
        $users = DB::table('users as a')
            ->leftJoin('user_levels as b', 'a.id_user_level', '=', 'b.id_user_level')
            ->where([['nama_user',$user],['password_user',$password]],1)
            ->first();

        if($users) {
            if($users->isactive > 0){
                Session::put('nama_user',$users->nama_user);
                Session::put('login',TRUE);
                if($users->nama_user_level == 'Super Admin'){
                    return redirect('/admin/dashboard')->with('msg','Anda berhasil Login sebagai Admin');
                }else{
                    return redirect('/admin/dashboard')->with('msg','Anda berhasil Login');
                }       
            }else{
                return redirect('/auth/login')->with('error','akun anda tidak aktif hubungi admin untuk activated');
            }
        }
        else{
            return redirect('/auth/login')->with('error','email / password anda salah');
        }

    }
}