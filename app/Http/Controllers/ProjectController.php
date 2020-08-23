<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Termin;
use App\Models\Project;

class ProjectController extends Controller
{

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

       return redirect()->back();

    }
}
