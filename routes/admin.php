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
    Route::get('customers','admin\DashboardController@customers')->name('admin.customers');
    Route::get('/','admin\DistributorController@index')->name('dashboard');
    Route::get('admin_download_pdf/{name}/{id}','admin\DashboardController@downloadPdf')->name('admin.pdf');
    Route::get('select_coupons','admin\CouponSelectionController@createSale')->name('coupon_selections.index');
    Route::match(['get','post'],'select_coupons/create','admin\CouponSelectionController@createSale')->name('coupon_selections.create');
    Route::post('coupon_transaction_save', 'admin\CouponSelectionController@coupon_transaction_save')->name('coupon_transaction_save');	

    Route::get('getreport','admin\ReportController@index')->name('getreport');
    Route::post('getreports', 'admin\ReportController@getreports')->name('getreports');	
    Route::match(['get','post'],'change-password','admin\AdminLoginController@changePassword')->name('admin.changepassword');
    Route::get('logout','admin\AdminLoginController@logout')->name('admin.logout');
    Route::match(['get','post'],'change-distributor_password','admin\AdminLoginController@distributor_changePassword')->name('admin.distributor_changepassword');


    Route::group([ 'prefix' => 'distributors',], function () {
        Route::get('/', 'admin\DistributorController@index')->name('distributor.index');
        Route::match(['get','post'],'/create','admin\DistributorController@create')->name('distributor.create');
        Route::match(['get','post'],'/{distributor}/edit','admin\DistributorController@edit')->name('distributor.edit')->where('id', '[0-9]+');
        Route::get('/tag/{distributor}','admin\DistributorController@destroy')->name('distributor.destroy')->where('id', '[0-9]+');
    });

    Route::group(['prefix' => 'distributor_coupons'], function () {
        Route::get('/', 'admin\DistributorCouponController@index')->name('distributor_coupon.distributor_coupons.index');
        Route::match(['get','post'],'/create','admin\DistributorCouponController@create')->name('distributor_coupon.distributor_coupons.create');
        Route::match(['get','put'],'/{distributorCoupon}/edit','admin\DistributorCouponController@edit')->name('distributor_coupon.distributor_coupons.edit')->where('id', '[0-9]+');
        Route::delete('/distributor_coupon/{distributorCoupon}','admin\DistributorCouponController@destroy')->name('distributor_coupon.distributor_coupons.destroy')->where('id', '[0-9]+');
    });
});
