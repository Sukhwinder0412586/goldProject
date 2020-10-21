<?php

use Barryvdh\DomPDF\PDF;

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
Route::get('/', function () {
    return view('sunakh.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('sale_coupons','SaleCouponController@index')->name('salecoupon.index');
Route::match(['get','post'],'sale_coupons/create','SaleCouponController@createSale')->name('salecoupon.create');
Route::view('testing','pdf');
Route::get('test',function(){
	$pdf = App::make('dompdf.wrapper');
	$pdf->loadView('pdf');
	return $pdf->stream();
});

