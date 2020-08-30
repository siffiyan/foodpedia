<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Termin;
use App\Models\Project;
use App\Models\Vendor;
use App\Models\Tagihan;

class TerminController extends Controller
{
    public function index()
    {
        $data['termin'] = DB::table('termins')
        ->leftJoin('projects', 'termins.project_id', '=', 'projects.id_kontrak')
        ->select('termins.*', 'projects.nama_project')
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

    public function show_detail_tagihan($id)
    {

    }

    public function store_detail_tagihan(Request $request){

        $tagihan_id = $request->tagihan_id;
        $kode_lokasi = $request->kode_lokasi;
        $nilai_per_kode_lokasi = $request->nilai_per_kode_lokasi;
        $nama_uraian = $request->nama_uraian;
        $nilai_uraian = $request->nilai_uraian;

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

       return redirect()->back()->with('msg','Dokumen berhasil ditambahkan');;

    }

    //verifikator

    public function index_tagihan_diterima()
    {
        $data['tagihan'] = DB::table('termins as a')
                            ->join('projects as b', 'a.project_id', '=', 'b.id_kontrak')
                            ->join('vendors as c', 'b.id_vendor', '=', 'c.id_vendor')
                            ->join('tagihans as d', 'a.tagihan_id', '=', 'd.id')
                            ->join('detail_tagihans as e','d.id','=', 'e.tagihan_id')
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
                                ->where('tagihan_id',$id)
                                ->first();
        $data['dokumen'] = DB::table('dok_dukung_tagihans')->where('tagihan_id',$id)->get();
        $data['wbs'] = DB::table('detail_tagihans as a')
                            ->join('uraian_tagihans as b', 'a.id_detail_tagihan', '=', 'b.detail_tagihan_id')
                            ->where('tagihan_id',$id)
                            ->get();
        return view('verifikator.management_project.tagihan.checklist',$data);
    }
}
