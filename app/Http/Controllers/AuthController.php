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
        
        $users = DB::table('users')
            ->where([['nama_user',$user],['password_user',$password]])
            ->first();

        if($users) {
            if($users->isactive > 0){
                Session::put('id_user',$users->id_user);
                Session::put('id_user_level',$users->id_user_level);
                Session::put('nama_user',$users->nama_user);
                Session::put('login',TRUE);
                if($users->id_user_level == '1'){
                    return redirect('/admin/dashboard')->with('msg','Anda berhasil Login sebagai Admin');
                }else if($users->id_user_level == '2'){
                    return redirect('/pengadaan/dashboard')->with('msg','Anda berhasil Login sebagai Pengadaan'); 
                }else if($users->id_user_level == '3'){
                    return redirect('/keuangan/dashboard')->with('msg','Anda berhasil Login sebagai Koordinator Keuangan');
                }else if($users->id_user_level ==  '4'){
                    return redirect('/tagihan/dashboard')->with('msg','Anda berhasil Login sebagai PIC Tagihan');
                }else if($users->id_user_level == '5'){
                    return redirect('/verifikator/dashboard')->with('msg','Anda berhasil Login sebagai Verifikator');
                }else if($users->id_user_level == '6'){
                    return redirect('/manager/dashboard')->with('msg','Anda berhasil Login sebagai Manager');
                }
            }else{
                return redirect('/auth/login')->with('error','akun anda tidak aktif hubungi admin untuk activated');
            }
        }
        else{
            return redirect('/auth/login')->with('error','email / password anda salah');
        }
    }

    public function logout(Request $request){

		$request->session()->forget('email');
		$request->session()->forget('id');
		$request->session()->forget('nama');
        $request->session()->forget('login');
        $request->session()->flush();
        
	    return redirect('/auth/login')->with('success','Anda berhasil logout !');

	}
}