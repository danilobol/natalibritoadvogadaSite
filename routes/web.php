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

//Route::get('/', function () {
//    return view('pages.home');
//});

Route::get('/', 'SiteController@home');
Route::get('sobre', 'SiteController@aboult');
Route::get('associados', 'SiteController@associados');
Route::get('contato', 'SiteController@contact');
