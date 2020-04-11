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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login','LoginController@login');
Route::post('/login','LoginController@check');
Route::get('/system/supportstaff/add','LoginController@register')->name('login.register');
Route::post('/system/supportstaff/add','LoginController@registerCheck')->name('login.registerCheck');

Route::get('/home','HomeController@index')->name('home.index');
Route::get('/system/BusSchedule','BusesScheduleController@index')->name('BusesSchedule.index');
