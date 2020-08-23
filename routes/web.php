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
    Route::get('/','SuperAdmin\ProjectController@index');
    Route::get('/create','SuperAdmin\ProjectController@create');
    Route::post('/','SuperAdmin\ProjectController@store');
    
    Route::resource('termin','SuperAdmin\TerminController');
    Route::put('/termin/update','SuperAdmin\TerminController@update');

    });

Route::prefix('pengadaan')->group(function () {
    Route::get('dashboard', 'Pengadaan\DashboardController@index');
    Route::resource('penpp_vendor', 'Pengadaan\PenppVendorController');
    Route::resource('project_pengadaan', 'Pengadaan\ProjectController');
    Route::resource('termin_pengadaan', 'Pengadaan\TerminController');
    // Route::resource('project_pengadaan', 'Pengadaan\ProjectController');
    // Route::resource('termin', 'Pengadaan\TerminController');
    // Route::get('management_project','SuperAdmin\ProjectController@index');
    // Route::get('/create','SuperAdmin\ProjectController@create');
    // Route::post('/','SuperAdmin\ProjectController@store');
    // Route::view('coba','pengadaan.management_project.project.coba');
});

Route::prefix('keuangan')->group(function () {
    Route::get('dashboard', 'KoorKeuangan\DashboardController@index');
    Route::resource('project_keuangan', 'KoorKeuangan\ProjectController');
    Route::resource('termin_keuangan', 'KoorKeuangan\TerminController');
});

Route::prefix('tagihan')->group(function (){
    Route::get('dashboard', 'Tagihan\DashboardController@index');
    Route::resource('project_tagihan', 'Tagihan\ProjectController');
    Route::post('termin_tagihan/detail_tagihan', 'ProjectController@store_detail_tagihan');
    Route::resource('termin_tagihan', 'Tagihan\TerminController');

});

Route::prefix('verifikator')->group(function(){
    Route::view('tagihan','verifikator.management_project.tagihan.index');
    Route::view('checklist','verifikator.management_project.tagihan.checklist');
});

