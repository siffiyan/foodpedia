<?php

namespace App\Http\Controllers\Verifikator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        return view('verifikator.index');
    }
}
