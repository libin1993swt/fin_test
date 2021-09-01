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
    return redirect('admin/students');
});

Route::resource('admin/students', 'App\Http\Controllers\Admin\StudentsController');
Route::resource('admin/marks', 'App\Http\Controllers\Admin\MarksController');