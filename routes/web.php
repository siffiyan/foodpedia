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
    Route::view('/dashboard', 'admin.index');
    Route::view('/administrator', 'admin.management_user.administrator');
    Route::view('/project', 'admin.project.project');
    Route::view('/project/list', 'admin.project.list');
});


