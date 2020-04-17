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

Route::get('/system/supportstaff/login','LoginController@login');
Route::post('/system/supportstaff/login','LoginController@check');
Route::get('/system/register','LoginController@register')->name('login.register');
Route::post('/system/register','LoginController@registerCheck')->name('login.registerCheck');


Route::group(['middleware'=>['sess']],function(){
	Route::get('/home','HomeController@index')->name('home.index');
	Route::post('/home','HomeController@book')->name('home.book');
	Route::get('/system/BusSchedule','BusesScheduleController@index')->name('BusesSchedule.index');
	Route::get('/system/busesshedule/{id}/edit','BusesScheduleController@Edit')->name('BusesSchedule.Edit');
	Route::post('/system/busesshedule/{id}/edit','BusesScheduleController@EditSave')->name('BusesSchedule.EditSave');
	Route::get('/system/busesshedule/new','BusesScheduleController@add')->name('BusesSchedule.add');
	Route::post('/system/busesshedule/new','BusesScheduleController@insert')->name('BusesSchedule.insert');

	Route::get('/system/busesshedule/{id}/Delete','BusesScheduleController@Delete')->name('BusesSchedule.Delete');

	Route::get('/system/profile/{id}/profile','ProfileController@index')->name('Profile.index');
	Route::get('/system/profile/{id}/edit','ProfileController@Edit')->name('Profile.Edit');
	Route::post('/system/profile/{id}/edit','ProfileController@EditSave')->name('Profile.EditSave');

	Route::get('/system/bussummary','SummaryController@index')->name('Summary.index');
	Route::get('/system/bussummary/Search/{mon}','SummaryController@Search')->name('Summary.Search');
});


Route::get('/logout','LogoutController@index')->name('logout.index');
Route::get('/about',function(){
	return view("about");
});