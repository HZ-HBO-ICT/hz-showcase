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

Route::get('/dd', 'RequestController@dd');

//Route::get('/', function () {
//    return view('welcome', [ 'records' =>  ]);
//});

Route::get('/', 'RequestController@index');


Route::get('details', 'RequestController@index2');

//Route::get('details', function () {
//    return view('details');
//});
