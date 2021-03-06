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

Route::get('/index', "AnasayfaController@index");

Route::get("/iletisim", "IletisiController@index");

// post metodu
/**
Route::post("iletisimgonder","IletisimController@iletisim")->name("iletisim.gonder");

Route::put("iletisimgonder","IletisimController@iletisimguncelle")->name("iletisim.gonder");
Route::update("iletisimgonder","IletisimController@iletisimguncelle")->name("iletisim.gonder");
*/

//resource

Route::resource("iletisim", "IletisiController");
