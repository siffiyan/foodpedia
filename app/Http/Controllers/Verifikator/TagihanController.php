<?php

namespace App\Http\Controllers\Verifikator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class TagihanController extends Controller
{
    public function index()
    {
        return view('verifikator.management_project.index');
    }
}
