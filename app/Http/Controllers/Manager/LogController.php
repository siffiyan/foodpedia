<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogController extends Controller
{
    public function index()
    {
        $data['project'] = DB::table('projects as a')
                        ->join('termins as b', 'a.id_kontrak', '=', 'b.project_id')
                        ->join('tagihans as c', 'b.tagihan_id', '=', 'c.id')
                        ->select('a.*',DB::raw('SUM(c.nilai_tagihan) as total'))
                        ->where('c.status_tagihan','Tagihan Terbayar')
                        ->groupBy('a.id_kontrak')
                        ->get();

        return view('manager.log.log_tagihan_project',$data);
    }
}
