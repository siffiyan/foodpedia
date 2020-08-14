<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Models\vendor;
use App\Models\project;
use App\Models\Termin;
use App\Models\Tagihan;

class ProjectController extends Controller
{

	public function index(){	
		$data['project'] = Project::all();
		return view('admin.manajemen_project.index',$data);
	}

	public function create(){
		$data['vendor'] = Vendor::all();
		return view('admin.manajemen_project.create',$data);
	}

	public function store(Request $request){

		$tanggal_awal = $request->tgl_mulai;
		$tanggal_akhir = $request->tanggal_akhir;

		// $tanggal_awal_use = date('d',strtotime($tanggal_awal));
		// $tanggal_akhir_use =  date('d',strtotime($tanggal_akhir));
		// $bulan_awal_use = date('m',strtotime($tanggal_awal));

		project::create($request->all());
		foreach ($request->jumlah_periode as $key => $value) {
			// Termin::create(['no_termin'=>$key+1]);	
		}

		return redirect('/admin/manajemen_project')->with('msg','Data project berhasil ditambahkan');

	}

}