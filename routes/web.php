<?php

use Barryvdh\DomPDF\Facade as PDF;

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
//Route::get('/site', 'HomeController@test')->name('sunakh.index');
Route::get('/cust_payment', 'MainController@index')->name('index');
Route::post('/payment', 'MainController@payment')->name('payment');
Route::post('/pay', 'MainController@pay')->name('pay');
Route::get('/success', 'MainController@success')->name('success');




Route::get('/', function () {
    return view('sunakh.index');
});

Auth::routes([
  'register' => false, // Registration Routes...
  'reset' => false, // Password Reset Routes...
  'verify' => false, // Email Verification Routes...
]);
Route::match(['get','post'],'change-password','HomeController@changePassword')->name('user.changepassword');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('sale_coupons','SaleCouponController@index')->name('salecoupon.index')->middleware('auth');
Route::match(['get','post'],'sale_coupons/create','SaleCouponController@createSale')->name('salecoupon.create')->middleware('auth');
Route::get('winners_coupon','HomeController@couponTransaction')->name('winners_coupon');
Route::get('winners_status/{id}','HomeController@updateWinnerStatus')->name('winner_status');


