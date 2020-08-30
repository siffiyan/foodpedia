<?php

namespace App\Http\Controllers\Tagihan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Termin;
use App\Models\Project;
use App\Models\Vendor;
use App\Models\Tagihan;

class TagihanController extends Controller
{
    public function index()
    {
        // $data['tagihan'] = DB::table('tagihans')
        //                     ->leftjoin('termins', 'tagihans.id', '=', 'contacts.user_id')
        return view('tagihan.management_project.tagihan.index');
    }
}
