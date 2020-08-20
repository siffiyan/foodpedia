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
		$data['termin'] = Termin::all();
		return view('pengadaan.management_project.project.index',$data);
	}

	public function create(){
		$data['vendor'] = Vendor::all();
		return view('pengadaan.management_project.project.create',$data);
	}

	public function store(Request $request){

		$nilai_tagihan = $request->nilai_per_periode;
		// tanggal awal project

		$tanggal_awal = $request->tgl_mulai;
		$tanggal_akhir = $request->tanggal_akhir;

		// tanggal untuk termin
		$tanggal_awal_use = date('d',strtotime($tanggal_awal));
		$bulan_awal_use = date('m',strtotime($tanggal_awal));
		$tahun_awal_use = date('Y',strtotime($tanggal_awal));
		$tahun_akhir_use = date('Y',strtotime($tanggal_awal));

		$tanggal_akhir_use = date('d',strtotime($tanggal_akhir));
		$bulan_akhir_use = date('m', strtotime("+1 months", strtotime($tanggal_awal))); 

		// tanggal untuk tagihan
		$bulan_tagihan = $bulan_akhir_use;
		$tahun_tagihan = $tahun_akhir_use;
	
		$data = project::create($request->all());

		for ($i=0; $i <$request->jumlah_periode ; $i++){ 

			$date_awal_use = date($tahun_awal_use.'-'.$bulan_awal_use.'-'.$tanggal_awal_use);
			$date_akhir_use = date($tahun_akhir_use.'-'.$bulan_akhir_use.'-'.$tanggal_akhir_use);

			$tanggal_tagihan_awal_use =  date($tahun_tagihan.'-'.$bulan_tagihan.'-'.'01');
			$tanggal_tagihan_akhir_use =  date($tahun_tagihan.'-'.$bulan_tagihan.'-'.'10');

			$tagihan = Tagihan::create(['tanggal_tagihan_awal'=>$tanggal_tagihan_awal_use,'tanggal_tagihan_akhir'=>$tanggal_tagihan_akhir_use,'nilai_tagihan'=>$nilai_tagihan]);

			Termin::create(['no_termin'=>$i+1,'tgl_mulai'=>$date_awal_use,'tgl_akhir'=>$date_akhir_use,'project_id'=>$data->id_kontrak,'tagihan_id'=>$tagihan->id]);

			if($bulan_tagihan == 12) $tahun_tagihan++;
			$bulan_tagihan =  date('m', strtotime("+1 months", strtotime($tanggal_tagihan_awal_use))); 

			if($bulan_awal_use == 12){
				$tahun_awal_use=date('Y', strtotime('+1 year', strtotime($date_awal_use)) );
			}

			if($bulan_akhir_use == 12){
				$tahun_akhir_use=date('Y', strtotime('+1 year', strtotime($date_akhir_use)) );
			}	

			$bulan_awal_use =  date('m', strtotime("+1 months", strtotime($date_awal_use))); 
			$bulan_akhir_use =  date('m', strtotime("+1 months", strtotime($date_akhir_use)));


		}

		return redirect('/management_project')->with('msg','Data project berhasil ditambahkan');

	}

	public function get_termin_by_project($id){
		$data = Termin::where('project_id',$id)->get();
		return response()->json($data);
	}

}