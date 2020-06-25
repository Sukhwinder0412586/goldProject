<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Route prifix is "admin-"
|
*/

Route::match(['get','post'],'login','admin\AdminLoginController@login')->name('admin.login');

Route::get('create','admin\AdminLoginController@create');

Route::group(['middleware'=>'adminm'], function() {
	// Route::view('/','admin.dashboard');
    Route::get('/','admin\DashboardController@index')->name('dashboard');
    Route::match(['get','post'],'change-password','admin\AdminLoginController@changePassword')->name('admin.changepassword');
    Route::get('logout','admin\AdminLoginController@logout')->name('admin.logout');
});