<?php

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

// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('beranda');
//});
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {               //'auth' -> apakah user sudah login apa belum

    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/wisata', 'WisataController@index');
    Route::post('/wisata/create', 'WisataController@create');
    Route::get('/wisata/{id}/edit', 'WisataController@edit');
    Route::post('/wisata/{id}/update', 'WisataController@update');
    Route::get('/wisata/{id}/delete', 'WisataController@delete');
    Route::get('/wisata/{id}/profilewisata', 'WisataController@profilewisata');
});
Route::group(['middleware' => ['auth', 'checkRole:wisata']], function () {               //'auth' -> apakah user sudah login apa belum

    Route::get('/', 'BerandaController@index')->name('pengguna.beranda');


});
