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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();
Route::get('/tiket', 'TiketController@index')->name('tiket.index');
Route::get('/jurnal', 'JurnalController@index')->name('jurnal.index');
Route::get('/detail_murabahah', 'DetailMurabahahController@index')->name('detail_murabahah.index');
Route::get('/wakalah', 'WakalahController@index')->name('wakalah.index');
Route::get('/angsuran', 'AngsuranController@index')->name('angsuran.index');
Route::get('/setoran', 'SetoranController@index')->name('setoran.index');
Route::get('/kasir', 'KasirController@index')->name('kasir.index');
Route::get('/kirim_barang', 'KirimBarangController@index')->name('kirim_barang.index');
Route::get('/terima_barang', 'TerimaBarangControoler@index')->name('terima_barang.index');


Route::group(['middleware' => ['web', 'checklevel:1']], function(){
    Route::get('/home', 'HomeController@index')->name('home');
});
Route::group(['middleware' => ['web', 'checklevel:2']], function(){

});
Route::group(['middleware' => ['web', 'checklevel:3']], function(){

});
Route::group(['middleware' => ['web', 'checklevel:4']], function(){

});