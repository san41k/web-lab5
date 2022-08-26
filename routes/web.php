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


Route::get('/', 'App\Http\Controllers\MyController@main');
Route::get('/main', 'App\Http\Controllers\MyController@main');
Route::get('/menu', 'App\Http\Controllers\MyController@menu');
Route::get('/about', 'App\Http\Controllers\MyController@about');
