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
	return redirect('setfoo');
});

//Authentication routes
Route::get('setfoo', 'AuthController@index')->name('index');
Route::post('login', 'AuthController@login')->name('login');
Route::get('logout', 'AuthController@logout')->name('logout');

//Mail sender routes
Route::get('mailer', 'MailController@mailer')->name('mailer');
Route::get('sending', 'MailController@sending')->name('sending');


Route::middleware('validity')->group(function () {
    Route::get('dashboard', function () {
        return 'dashboard';
    });
    Route::get('home', function () {
        return 'home';
    });
});