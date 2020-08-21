<?php

namespace App\Http\Controllers\Pengadaan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Termin;
use App\Models\Project;
use App\Models\Tagihan;

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

        return view('pengadaan.management_project.termin.index',$data);
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
<<<<<<< HEAD:app/Http/Controllers/SuperAdmin/TerminController.php
        $data['termin'] = DB::table('termins')
                        ->leftJoin('tagihans','termins.tagihan_id','tagihans.id')
                        ->where('project_id', $id)
                        ->select('termins.*','tagihans.no_tagihan')
                        ->orderBy('termins.no_termin','asc')
                        ->get();

=======
        $data['termin'] = DB::table('termins')->where('project_id', $id)->get();
>>>>>>> 2d9663b2fbc738ad4075409e602859e5b4b4afce:app/Http/Controllers/Pengadaan/TerminController.php
        $data['project'] = DB::table('projects')->where('id_kontrak', $id)->first();
        return view('pengadaan.management_project.project.termin',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['termin'] = DB::table('termins')->where('id_termin', $id)
                        ->join('tagihans','termins.tagihan_id','tagihans.id')
                        ->select('*')
                        ->first();
        return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = Tagihan::findOrFail($request->id_tagihan);
        $data->no_tagihan = $request->no_tagihan;
        $data->status_tagihan = "tagihan diterima";
        $data->update();

        return redirect('/management_project/termin/'.$request->project_id)->with('msg','no tagihan berhasil ditambahkan');

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
}
