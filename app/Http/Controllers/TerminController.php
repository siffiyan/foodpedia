<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Termin;
use App\Models\Project;
use App\Models\Vendor;
use App\Models\Tagihan;
use App\Models\logStatus;

class TerminController extends Controller
{
    public function index()
    {
        $data['termin'] = DB::table('termins')
                                ->Join('projects', 'termins.project_id', '=', 'projects.id_kontrak')
                                ->Join('tagihans', 'termins.tagihan_id', '=', 'tagihans.id')
                                ->get();

        return view('management_project.termin.index',$data);
    }

    public function show($id)
    {
        $data['termin'] = DB::table('termins')
                        ->leftJoin('tagihans','termins.tagihan_id','tagihans.id')
                        ->where('project_id', $id)
                        ->select('termins.*','tagihans.*')
                        ->orderBy('termins.no_termin','asc')
                        ->get();

        $data['project'] = DB::table('projects')->where('id_kontrak', $id)->first();
        return view('keuangan.management_project.project.termin',$data);
    }

    public function show_tagihan($id)
    {
        $data['termin'] = DB::table('termins')
                                ->join('tagihans', 'termins.tagihan_id', '=', 'tagihans.id')
                                ->where('termins.project_id', $id)->get();
        $data['project'] = DB::table('projects')->where('id_kontrak', $id)->first();
        return view('tagihan.management_project.project.termin',$data);
    }

    public function edit($id)
    {
        $data['termin'] = DB::table('termins')->where('id_termin', $id)
                        ->join('tagihans','termins.tagihan_id','tagihans.id')
                        ->select('*')
                        ->first();
        return $data;
    }

    public function update(Request $request)
    {
        $data = Tagihan::findOrFail($request->id_tagihan);
        $data->no_tagihan = $request->no_tagihan;
        $data->status_tagihan = "tagihan diterima";
        $data->update();

        LogStatus::create(['tagihan_id' => $request->id_tagihan, 'status' => 'tagihan diterima', 'updated_by' => session()->get('id_user')]);

        return redirect('/management_project/termin/'.$request->project_id)->with('msg','no tagihan berhasil ditambahkan');

    }

    //Tagihan

    public function store_detail_tagihan(Request $request){

        $tagihan_id = $request->tagihan_id;
        $kode_lokasi = $request->kode_lokasi;
        $nilai_per_kode_lokasi = $request->nilai_per_kode_lokasi;
        $nama_uraian = $request->nama_uraian;
        $nilai_uraian = $request->nilai_uraian;
        $nama_dok_duk_tagihan = $request->nama_dok_duk_tagihan;

        foreach ($nama_dok_duk_tagihan as $key => $value) {
        	DB::table('dok_dukung_tagihans')->insert([
        		'nama_dok_duk_tagihan'=>$value,
        		'tagihan_id'=>$tagihan_id
        	]);
        }

        foreach ($kode_lokasi as $key => $value) {

            $id = DB::table('detail_tagihans')->insertGetId(['tagihan_id'=>$tagihan_id,'nilai_per_kode_lokasi'=>$nilai_per_kode_lokasi[$key],'kode_lokasi'=>$value]);

            foreach ($nama_uraian[$key] as $key2 => $value2) {
               
                 DB::table('uraian_tagihans')->insert(['detail_tagihan_id'=>$id,
                                                    'nama_uraian'=>$value2,
                                                    'nilai_uraian'=>$nilai_uraian[$key][$key2]
                                                ]);
            }
        }

        DB::table('tagihans')
              ->where('id', $tagihan_id)
              ->update(['status_dokumen' => 'complete']);

       return redirect()->back()->with('msg','Dokumen berhasil ditambahkan');
    }

    public function index_tagihan_disetujui()
    {
        $data['tagihan'] = DB::table('termins as a')
                                ->join('projects as b', 'a.project_id', '=', 'b.id_kontrak')
                                ->join('vendors as c', 'b.id_vendor', '=', 'c.id_vendor')
                                ->join('tagihans as d', 'a.tagihan_id', '=', 'd.id')
                                ->where(['status_tagihan' => 'tagihan disetujui', 'status_dokumen' => 'complete'])
                                ->get();
        return view('tagihan.management_project.tagihan.index',$data);
    }

    public function detail_tagihan_disetujui($id)
    {
        $tagihan = Tagihan::findOrFail($id);

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

        return view('tagihan.management_project.tagihan.tagihan_disetujui',$data);
    }

    public function update_tagihan_disetujui(Request $request)
    {
        $id = $request->id;

        DB::table('tagihans')
                ->where('id',$id)
                ->update(['status_tagihan' => 'Tagihan dikirimkan ke Material Manajemen']);

        LogStatus::create(['tagihan_id' => $id, 'status' => 'Tagihan dikirimkan ke Material Manajemen', 'updated_by' => session()->get('id_user')]);

        return redirect()->back()->with('msg','Surat Rekomendasi Berhasil di Print');
    }

    //verifikator

    public function index_tagihan_diterima()
    {
        $data['tagihan'] = DB::table('termins as a')
                            ->join('projects as b', 'a.project_id', '=', 'b.id_kontrak')
                            ->join('vendors as c', 'b.id_vendor', '=', 'c.id_vendor')
                            ->join('tagihans as d', 'a.tagihan_id', '=', 'd.id')
                            ->where(['verifikator_id' => session()->get('id_user'), 'status_tagihan' => 'tagihan diterima', 'status_dokumen' => 'complete'])
                            ->get();

        return view('verifikator.management_project.tagihan.index',$data);
    }

    public function detail_tagihan_diterima($id)
    {
        $tagihan = Tagihan::findOrFail($id);

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

        $data['total'] = DB::table('dok_dukung_tagihans')
                                ->where(['tagihan_id' => $id, 'status_dok_duk_tagihan' => 'not_approval'])
                                ->count();

                                
        return view('verifikator.management_project.tagihan.checklist',$data);
    }

    public function store_surat_rekom(Request $request)
    {
        $id = $request->id;

        DB::table('tagihans')
                ->where('id',$id)
                ->update(['srt_rekomendasi_pembayaran' => $request->srt_rekom, 'status_tagihan' => 'tagihan terverifikasi']);

        LogStatus::create(['tagihan_id' => $id, 'status' => 'tagihan terverifikasi', 'updated_by' => session()->get('id_user')]);

        return redirect()->back()->with('msg','Surat Rekomendasi Berhasil di Inputkan');
    }

    public function approve_dok_tagihan(Request $request)
    {
        $id = $request->id;

        DB::table('dok_dukung_tagihans')
                ->where('id_dok_dukung_tagihan',$id)
                ->update(['status_dok_duk_tagihan' => 'approve']);

        return redirect()->back()->with('msg','Dokumen berhasil di approve');
    }

    //Manager

    public function index_manager_terverifikasi()
    {
        $data['tagihan'] = DB::table('termins as a')
                                ->join('projects as b', 'a.project_id', '=', 'b.id_kontrak')
                                ->join('vendors as c', 'b.id_vendor', '=', 'c.id_vendor')
                                ->join('tagihans as d', 'a.tagihan_id', '=', 'd.id')
                                ->where(['status_tagihan' => 'tagihan terverifikasi', 'status_dokumen' => 'complete'])
                                ->get();

        return view('manager.management_project.tagihan.index',$data);
    }

    public function detail_manager_terverifikasi($id)
    {
        $tagihan = Tagihan::findOrFail($id);

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

                                
        return view('manager.management_project.tagihan.persetujuan',$data);
    }

    public function update_manager_terverifikasi($id)
    {
        DB::table('tagihans')
                ->where('id',$id)
                ->update(['status_tagihan' => 'tagihan disetujui']);

        LogStatus::create(['tagihan_id' => $id, 'status' => 'tagihan disetujui', 'updated_by' => session()->get('id_user')]);

        return redirect()->back()->with('msg','Tagihan berhasil disetujui');
    }
    
    //Keuangan
    public function index_tagihan_keuangan()
    {
        $data['tagihan_material_management'] = DB::table('termins as a')
                                ->join('projects as b', 'a.project_id', '=', 'b.id_kontrak')
                                ->join('vendors as c', 'b.id_vendor', '=', 'c.id_vendor')
                                ->join('tagihans as d', 'a.tagihan_id', '=', 'd.id')
                                ->where(['status_tagihan' => 'Tagihan dikirimkan ke Material Manajemen', 'status_dokumen' => 'complete'])
                                ->get();

        $data['tagihan_usulan_pembayaran'] = DB::table('termins as a')
                                ->join('projects as b', 'a.project_id', '=', 'b.id_kontrak')
                                ->join('vendors as c', 'b.id_vendor', '=', 'c.id_vendor')
                                ->join('tagihans as d', 'a.tagihan_id', '=', 'd.id')
                                ->where(['status_tagihan' => 'Tagihan diterbitkan Usulan Pembayaran', 'status_dokumen' => 'complete'])
                                ->get();

        return view('keuangan.management_project.tagihan.index',$data);
    }

    public function detail_tagihan_keuangan($id)
    {
        $tagihan = Tagihan::findOrFail($id);

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

        return view('keuangan.management_project.tagihan.detail_tagihan',$data);
    }

    public function approve_terbitkan_usulan(Request $request)
    {
        $id = $request->id;

        DB::table('tagihans')
                ->where('id',$id)
                ->update(['status_tagihan' => 'Tagihan diterbitkan Usulan Pembayaran']);

        LogStatus::create(['tagihan_id' => $id, 'status' => 'Tagihan diterbitkan Usulan Pembayaran', 'updated_by' => session()->get('id_user')]);

        return redirect()->back()->with('msg','Tagihan berhasil diterbitkan usulan pembayaran');
    }

    public function approve_terbayar(Request $request)
    {
        $id = $request->id;

        DB::table('tagihans')
                ->where('id',$id)
                ->update(['status_tagihan' => 'Tagihan Terbayar']);

        LogStatus::create(['tagihan_id' => $id, 'status' => 'Tagihan Terbayar', 'updated_by' => session()->get('id_user')]);

        return redirect()->back()->with('msg','Tagihan berhasil terbayar');
    }

}
