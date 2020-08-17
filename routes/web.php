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

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', 'SuperAdmin\DashboardController@index');
    Route::get('/management_user', 'SuperAdmin\managementUserController@index');
    Route::post('/management_user/store', 'SuperAdmin\managementUserController@store');

    Route::get('/management_project','SuperAdmin\ProjectController@index');
    Route::get('/management_project/create','SuperAdmin\ProjectController@create');
    Route::post('/management_project','SuperAdmin\ProjectController@store');

    Route::resource('termin','SuperAdmin\TerminController');

    //Route::view('/management_project/pnpp_vendor','admin.management_project.pnpp_vendor');
    Route::resource('penpp_vendor', 'SuperAdmin\PenppVendorController');

    Route::get('/management_master/vendor','SuperAdmin\VendorController@index');
    Route::post('/management_master/vendor','SuperAdmin\VendorController@store');
    Route::get('/management_master/vendor/{id}/edit','SuperAdmin\VendorController@edit');
    Route::put('/management_master/vendor/edit_action','SuperAdmin\VendorController@update');
    Route::delete('/management_master/vendor/destroy','SuperAdmin\VendorController@destroy');

    Route::view('/management_master_wbs','admin.management_master.wbs.index');
    
});


