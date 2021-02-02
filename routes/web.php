<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\RequestController;

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

Route::get('/', 'RequestController@index'); // Home-page

Route::get('/details/{id}', 'RequestController@show'); // Details page

//Route::get('/dd', 'RequestController@dd'); // Dump & Die page
