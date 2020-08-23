<?php

namespace App\Http\Controllers\Tagihan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Termin;
use App\Models\Project;

class TerminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['termin'] = DB::table('termins')
            ->leftJoin('projects', 'termins.project_id', '=', 'projects.id_kontrak')
            ->select('termins.*', 'projects.nama_project')
            ->get();

        return view('tagihan.management_project.termin.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['termin'] = DB::table('termins')->where('project_id', $id)->get();
        $data['project'] = DB::table('projects')->where('id_kontrak', $id)->first();
        return view('tagihan.management_project.project.termin',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['termin'] = DB::table('termins')->where('id_termin', $id)->first();
        return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function store_detail_tagihan(Request $request){

        $id = DB::table('detail_tagihans')->insertGetId(['tagihan_id'=>$request->tagihan_id,'nilai_per_kode_lokasi'=>$request->nilai_per_kode_lokasi,'kode_lokasi'=>$request->kode_lokasi]);

        DB::table('uraian_tagihans')->insert(['detail_tagihan_id'=>$id,'nama_uraian'=>$request->nama_uraian,'nilai_uraian'=>$request->nilai_uraian]);

       return redirect()->back();

    }
}
