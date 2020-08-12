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

    Route::view('/project','admin.project.index');
    Route::view('/project/add','admin.project.add_project');
    Route::view('/project/vendor','admin.project.vendor');
    Route::view('/project/termin','admin.project.termin');
});


