<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $data['total_request'] = DB::table('tagihans')
                                        ->where('status_tagihan','tagihan_terverifikasi')
                                        ->count();
        return view('manager.index',$data);
    }
}
