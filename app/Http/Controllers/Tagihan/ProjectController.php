<?php

namespace App\Http\Controllers\Tagihan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Models\vendor;
use App\Models\project;
use App\Models\Termin;
use App\Models\Tagihan;

class ProjectController extends Controller
{

	public function index(){	
		$data['project'] = Project::all();
		$data['termin'] = Termin::all();
		return view('tagihan.management_project.project.index',$data);
	}

}