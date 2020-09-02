<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/login', 'AuthController@login');
Route::post('/auth/login_action', 'AuthController@login_action');
Route::get('/auth/logout', 'AuthController@logout');

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', 'SuperAdmin\DashboardController@index');

    Route::resource('management_user', 'SuperAdmin\UserController');
    Route::delete('management_user/destroy','SuperAdmin\UserController@destroy');
    Route::put('management_user/update','SuperAdmin\UserController@update');
    Route::put('management_user/inactive/{id}','SuperAdmin\UserController@inactive');
    Route::put('management_user/active/{id}','SuperAdmin\UserController@active');

    Route::get('management_master/vendor','SuperAdmin\VendorController@index');
    Route::post('management_master/vendor','SuperAdmin\VendorController@store');
    Route::get('management_master/vendor/{id}/edit','SuperAdmin\VendorController@edit');
    Route::put('management_master/vendor/edit_action','SuperAdmin\VendorController@update');
    Route::delete('management_master/vendor/destroy','SuperAdmin\VendorController@destroy');
});

Route::prefix('management_project')->group(function () {    
    Route::get('detail/{id}','ProjectController@detail');
    Route::get('detail_tagihan/{id}','ProjectController@detail_tagihan');
    
    Route::get('/','ProjectController@index');
    Route::get('create','ProjectController@create');
    Route::post('store','ProjectController@store');

    Route::get('termin','TerminController@index');
    Route::get('termin/{id}','TerminController@show');
    Route::get('termin/{id}/edit','TerminController@edit');
    Route::put('termin/update','TerminController@update');

    Route::get('termin_tagihan/{id}','TerminController@show_tagihan');
    Route::post('termin/detail_tagihan', 'TerminController@store_detail_tagihan');
    Route::post('termin/approve_dok_tagihan','TerminController@approve_dok_tagihan');
    Route::post('termin/srt_rekom','TerminController@store_surat_rekom');

});

Route::prefix('pengadaan')->group(function () {
    Route::get('dashboard', 'Pengadaan\DashboardController@index');
    Route::resource('penpp_vendor', 'Pengadaan\PenppVendorController');
});

Route::prefix('keuangan')->group(function () {
    Route::get('dashboard', 'KoorKeuangan\DashboardController@index');
    Route::get('termin_keuangan/{id}/edit','TerminController@edit');
    Route::get('tagihan','TerminController@index_tagihan_keuangan');
    Route::get('/tagihan_usulan/detail/{id}','TerminController@detail_tagihan_keuangan');
    Route::put('/tagihan/terbitkan_usulan','TerminController@approve_terbitkan_usulan');
    Route::put('/tagihan/terbayar','TerminController@approve_terbayar');
});

Route::prefix('tagihan')->group(function (){
    Route::get('dashboard', 'Tagihan\DashboardController@index');
    Route::post('termin_tagihan/detail_tagihan', 'ProjectController@store_detail_tagihan');
    Route::get('tagihan','Tagihan\TagihanController@index');
    Route::get('disetujui','TerminController@index_tagihan_disetujui');
    Route::get('detail/{id}','TerminController@detail_tagihan_disetujui');
    Route::put('print_disetujui','TerminController@update_tagihan_disetujui');
});

Route::prefix('verifikator')->group(function(){
    Route::get('dashboard', 'Verifikator\DashboardController@index');
    Route::get('tagihan','TerminController@index_tagihan_diterima');
    Route::get('checklist/{id}','TerminController@detail_tagihan_diterima');
});

Route::prefix('manager')->group(function(){
    Route::get('dashboard','Manager\DashboardController@index');
    Route::get('tagihan/terverifikasi','TerminController@index_manager_terverifikasi');
    Route::get('tagihan/terverifikasi/{id}','TerminController@detail_manager_terverifikasi');
    Route::put('tagihan/approve_tagihan/{id}','TerminController@update_manager_terverifikasi');

    Route::get('log_project','Manager\LogController@index');
});

