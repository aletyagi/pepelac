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

/*Route::get('/', function () { return view('welcome');}); */

Route::get('/', function () { return view('main');});

Route::get('/resume', function () { return view('resume');}); 

Route::get('/reg', function () { return view('reg');}); 

Route::resource('/images','ImageController');

//Route::get('/admin', 'AdminController@index'); 
//Route::get('admin', function () { return 'welcome jopajopa';}); 
