<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Models\UserLevel;
use App\Models\Users;

class ManajemenUserController extends Controller
{

	public function index(){

		$data['level'] = UserLevel::all();
		$data['user'] = Users::all();
		return view('admin.manajemen_user.index',$data);

	}

	public function store(Request $request){

		$data = $request->all();
		$data['password_user'] = Hash::make($request->password_user);
		
		return redirect('/admin/manajemen_user')->with('msg','data berhasil ditambahkan');

	}

	public function edit($id){

		$data = Users::findOrFail($id);
		return response()->json($data);

	}

	public function edit_action(Request $request){

		$id = $request->id;
		$data = Users::findOrFail($id);

		$data->update($request->all());
		return redirect('/admin/manajemen_user')->with('msg','data berhasil edit');

	}

	 public function delete(Request $request){

    	$id = $request->id;

    	$data = Users::findOrFail($id);
    	$data->delete();

    	return redirect('/admin/manajemen_user')->with('msg','data berhasil edit');

    }

}