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

class ManagementUserController extends Controller
{

	public function index(){

		$data['level'] = UserLevel::all();
		$data['user'] = Users::all();
		return view('admin.management_user.index',$data);

	}

	public function store(Request $request){

		Users::create([
			'id_user' => $request->id_user,
			'nama_user' => $request->nama_user,
			'isactive' => $request->isactive,
			'id_user_level' => $request->id_user_level,
			'password_user' => Hash::make($request->password_user),
		]);
		
		return redirect('/admin/management_user')->with('msg','data berhasil ditambahkan');

	}

	public function edit($id){

		$data = Users::findOrFail($id);
		return response()->json($data);

	}

	public function edit_action(Request $request){

		$id = $request->id;
		$data = Users::findOrFail($id);

		$data->update($request->all());
		return redirect('/admin/management_user')->with('msg','data berhasil edit');

	}

	 public function delete(Request $request){

    	$id = $request->id;

    	$data = Users::findOrFail($id);
    	$data->delete();

    	return redirect('/admin/management_user')->with('msg','data berhasil edit');

    }

}