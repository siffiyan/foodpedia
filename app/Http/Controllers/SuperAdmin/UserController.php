<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Models\UserLevel;
use App\Models\Users;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['level'] = UserLevel::all();
		$data['user'] = DB::table('users as a')
        ->Join('user_levels as b', 'a.id_user_level', '=', 'b.id_user_level')
        ->get();
		return view('admin.management_user.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Users::create([
			'id_user' => $request->id_user,
			'nama_user' => $request->nama_user,
			'isactive' => $request->isactive,
			'id_user_level' => $request->id_user_level,
			'password_user' => Hash::make($request->password_user),
		]);
		
		return redirect('/admin/management_user')->with('msg','data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['user'] = DB::table('users as a')
                ->leftJoin('user_levels as b', 'a.id_user_level', '=', 'b.id_user_level')
                ->where('id_user', $id)
                ->first();
        return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {   
        DB::table('users')->where('id_user', $request->id)->delete();

        return redirect('/admin/management_user')->with('msg','data berhasil ditambahkan');
    }

    public function inactive(Request $request, $id)
    {
        DB::table('users')
        ->where('id_user', $id)
        ->update(['isactive' => 0]);

        return redirect('/admin/management_user')->with('msg','data berhasil di Non-aktifkan');

    }

    public function active(Request $request, $id)
    {
        DB::table('users')
        ->where('id_user', $id)
        ->update(['isactive' => 1]);

        return redirect('/admin/management_user')->with('msg','data berhasil di Non-aktifkan');
    }
}
