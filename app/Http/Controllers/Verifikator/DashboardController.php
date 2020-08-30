<?php

namespace App\Http\Controllers\Verifikator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $data['total_request'] = DB::table('termins as a')
                                ->join('projects as b', 'a.project_id', '=', 'b.id_kontrak')
                                ->join('vendors as c', 'b.id_vendor', '=', 'c.id_vendor')
                                ->join('tagihans as d', 'a.tagihan_id', '=', 'd.id')
                                ->join('detail_tagihans as e','d.id','=', 'e.tagihan_id')
                                ->where(['verifikator_id' => session()->get('id_user'), 'status_tagihan' => 'tagihan diterima', 'status_dokumen' => 'complete'])
                                ->count();

        return view('verifikator.index',$data);
    }
}
