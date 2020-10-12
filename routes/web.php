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


Route::get('/welcome', function () {
    return view('welcome');
});
Route::post('welcome/create','Admin\ReservationController@create');

Route::get('/dashboard','Admin\DashboardController@index');

Route::get('reservation','Admin\ReservationController@index')->name('reservation.index');
Route::get('/reservation/{id}/edit','Admin\ReservationController@edit');
Route::post('/reservation/{id}/update','Admin\ReservationController@update');
Route::post('/reservation/{id}','Admin\ReservationController@status')->name('reservation.status');



Route::get('/','AuthController@index')->name('login');
Route::get('/logout','AuthController@logout');
Route::post('/postlogin','AuthController@postlogin');

Route::get('slider','Admin\SliderController@index');
Route::post('slider/create','Admin\SliderController@create');
Route::resource('slider','Admin\SliderController');

Route::get('/slider/{id}/edit','Admin\SliderController@edit');
Route::get('/slider/{id}/destroy','Admin\SliderController@destroy');
Route::post('/slider/{id}/update','Admin\SliderController@update');
