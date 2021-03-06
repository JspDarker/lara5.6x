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

Route::group(['prefix'=>'tgdd', 'middleware' => 'web'], function() {
    Route::get('/', 'PhoneController@index')->name('phone');
    Route::get('/{type}','PhoneController@girdProducts')->name('phone.girds');

    Route::get('/{type}/{alias}/{id}','PhoneController@singleProduct')->name('phone.single');
});
