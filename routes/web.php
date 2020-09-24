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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/layanan', function () {
//     return view('layanan');
// });

Route::get('/' , 'PageController@home');
Route::get('/layanan' , 'PageController@layanan');
Route::get('/barang' , 'BarangController@index');
Route::get('/barang/create' , 'BarangController@create');
Route::post('/barang' , 'BarangController@store');
Route::delete('/barang/{brg}' , 'BarangController@destroy');
Route::get('/barang/{brg}/edit', 'BarangController@edit');

Route::get("/addmore","ProductAddMoreController@index");
Route::post("/addmore","ProductAddMoreController@store");