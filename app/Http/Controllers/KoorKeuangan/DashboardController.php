<?php

namespace App\Http\Controllers\KoorKeuangan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        $data['total_material_pemb'] = DB::table('tagihans')
                                            ->where('status_tagihan','Tagihan dikirimkan ke Material Manajemen')
                                            ->count();

        $data['total_tagihan_terbayar'] = DB::table('tagihans')
                                                ->where('status_tagihan','Tagihan Terbayar')
                                                ->count();
        return view('keuangan.index',$data);
    }
}
