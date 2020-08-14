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
use App\Models\Vendor;

class VendorController extends Controller
{

	public function index(){

		$data['vendor'] = Vendor::all();
		return view('admin.manajement_list.vendor.index',$data);
	}

	public function store(Request $request){

		Vendor::create($request->all());
		return redirect('/admin/manajement_list/vendor')->with('msg','Data vendor berhasil ditambahkan');

	}

	public function edit($id){
		$data = Vendor::where(['id_vendor'=>$id])->first();
		return response()->json($data);
	}

	public function update(Request $request){

		$id = $request->id_vendor_edit;
		$data = Vendor::findOrFail($id);
		$data->update($request->except(['id_vendor_edit']));
		return redirect('/admin/manajement_list/vendor')->with('msg','Data vendor berhasil diedit');

	}

	public function destroy(Request $request){

		$id = $request->id;
		Vendor::destroy($id);
		return redirect('/admin/manajement_list/vendor')->with('msg','Data vendor berhasil dihapus');
	}

}