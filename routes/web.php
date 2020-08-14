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
    Route::get('/manajemen_user', 'SuperAdmin\ManajemenUserController@index');
    Route::post('/manajemen_user/store', 'SuperAdmin\ManajemenUserController@store');

    Route::get('/project','SuperAdmin\ProjectController@index');
    Route::get('/project/create','SuperAdmin\ProjectController@create');
    Route::post('/project','SuperAdmin\ProjectController@store');


    Route::view('/project/termin','admin.project.termin');


    Route::get('/project/vendor','SuperAdmin\VendorController@index');
    Route::post('/project/vendor','SuperAdmin\VendorController@store');
    Route::get('/project/vendor/{id}/edit','SuperAdmin\VendorController@edit');
    Route::put('/project/vendor/edit_action','SuperAdmin\VendorController@update');
    Route::delete('/project/vendor/destroy','SuperAdmin\VendorController@destroy');
    
});


