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
                        ->select('termins.*','tagihans.no_tagihan')
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

        return redirect('/management_project/termin/'.$request->project_id)->with('msg','no tagihan berhasil ditambahkan');

    }

    //Tagihan

    public function store_detail_tagihan(Request $request){
        $id = DB::table('detail_tagihans')->insertGetId(['tagihan_id'=>$request->tagihan_id,'nilai_per_kode_lokasi'=>$request->nilai_per_kode_lokasi,'kode_lokasi'=>$request->kode_lokasi]);
        DB::table('uraian_tagihans')->insert(['detail_tagihan_id'=>$id,'nama_uraian'=>$request->nama_uraian,'nilai_uraian'=>$request->nilai_uraian]);
       return redirect()->back()->with('msg','Detail tagihan berhasil ditambahkan');

    }
}
