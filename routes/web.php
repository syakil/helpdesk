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

use Illuminate\Support\Facades\Redirect;

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['web', 'ceklevel:1']], function(){

});
Route::group(['middleware' => ['web', 'ceklevel:2']], function(){

});
Route::group(['middleware' => ['web', 'ceklevel:3']], function(){

});
Route::group(['middleware' => ['web', 'ceklevel:4']], function(){

});