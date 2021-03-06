<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Termin;
use App\Models\Project;
use App\Models\Vendor;
use App\Models\Tagihan;

class ProjectController extends Controller
{
    // GLOBAL

    public function index()
    {
		$data['project'] = DB::table('projects as a')
			->join('termins as b', 'a.id_kontrak', '=', 'b.project_id')
			->join('tagihans as c', 'b.tagihan_id', '=', 'c.id')
			->select('a.*',DB::raw('SUM(c.nilai_tagihan) as total'),DB::raw("ROUND((SELECT COUNT(id_termin) FROM termins JOIN tagihans ON termins.`id_termin` = tagihans.id WHERE termins.project_id = a.id_kontrak AND tagihans.status_tagihan = 'Tagihan Terbayar' )/a.`jumlah_periode`*100) AS presentase"),DB::raw("(SELECT COUNT(tagihans.`id`) FROM termins JOIN tagihans ON termins.`id_termin` = tagihans.id WHERE termins.project_id = a.`id_kontrak` AND tagihans.`status_tagihan` = 'Tagihan Terbayar') AS periode_selesai"))
			->groupBy('a.id_kontrak')
			->get();
		return view('management_project.project.index',$data);
	}

    public function detail($id)
    {
		$data['project'] = DB::table('projects')
								->join('vendors', 'projects.id_vendor', '=', 'vendors.id_vendor')
								->select('projects.*','vendors.nama_vendor')
								->where('id_kontrak',$id)
								->first();
								
		$data['termin'] = DB::table('termins')
								->join('tagihans', 'termins.tagihan_id', '=', 'tagihans.id')
								->where('project_id',$id)
								->get();


        return view('management_project.project.detail',$data);
	}
	
	public function detail_tagihan($id)
	{
		$data['project'] = DB::table('termins')
                                ->join('projects', 'termins.project_id', '=', 'projects.id_kontrak')
                                ->join('vendors', 'projects.id_vendor', '=', 'vendors.id_vendor')
                                ->join('tagihans', 'termins.tagihan_id', '=', 'tagihans.id')
                                ->where('tagihan_id',$id)
                                ->first();

        $data['dokumen'] = DB::table('dok_dukung_tagihans')->where('tagihan_id',$id)->get();

        $data['wbs'] = DB::table('detail_tagihans as a')
                            ->join('uraian_tagihans as b', 'a.id_detail_tagihan', '=', 'b.detail_tagihan_id')
                            ->where('tagihan_id',$id)
                            ->get();
								
		return response()->json($data);
	}

    //PENGADAAN

    public function create(){
		$data['vendor'] = Vendor::all();
		return view('management_project.project.create',$data);
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
