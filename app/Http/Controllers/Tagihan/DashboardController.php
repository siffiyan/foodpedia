<?php

namespace App\Http\Controllers\Tagihan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['request'] = DB::table('tagihans as a')
                                ->join('termins as b', 'a.id', '=', 'b.tagihan_id')
                                ->join('projects as c', 'b.project_id', '=', 'c.id_kontrak')
                                ->where(['status_tagihan' => 'tagihan diterima','status_dokumen' => 'incomplete'])
                                ->get();

        $data['total_checklist_dok'] = DB::table('tagihans')
                                            ->where(['status_tagihan' => 'tagihan diterima','status_dokumen' => 'incomplete'])  
                                            ->count();
        
        return view('tagihan.index',$data);
    }
}
