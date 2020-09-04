<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogController extends Controller
{
    public function index()
    {
        $data['log_status'] = DB::table('log_status as a')
                                    ->Join('termins as b', 'a.tagihan_id', '=', 'b.tagihan_id')
                                    ->join('projects as c', 'b.project_id', '=', 'c.id_kontrak')
                                    ->get();

        return view('manager.log.log_tagihan_project',$data);
    }
}
