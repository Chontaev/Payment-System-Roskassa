<?php

use Illuminate\Support\Facades\Route;
use App\Models\Payment;
//Пользовательские страницы

Route::get('/','App\Http\Controllers\MainController@index')->name('index');

Route::resource('main',App\Http\Controllers\MainController::class);
Route::get('ppp',function(){
  return view('success1');});

//Ответы от Roskassa

Route::post('response','App\Http\Controllers\PaymentController@setData')->name('setData');
Route::get('success',function(){return view('main.success');})->name('success');

Route::get('fail',function(){return view('main.fail');})->name('fail');

// Авторизация 

Route::get('login','App\Http\Controllers\AuthenController@login')->name('login');

Route::get('logout','App\Http\Controllers\AuthenController@logout')->name('logout');

Route::get('register','App\Http\Controllers\AuthenController@register')->name('register');

Route::post('store','App\Http\Controllers\AuthenController@store')->name('store');

Route::post('authenticate','App\Http\Controllers\AuthenController@authenticate')->name('authenticate');

Route::post('getPay','App\Http\Controllers\PaymentController@getData')->name('getPay');

//Админка
Route::group(
    ['middleware' => ['admin']],
    function(){
        Route::get(
            'dashboard', function(){ 
                return view('admin.dashboard'); 
        })->name('dashboard');
        
        Route::resource(
            'products'
            ,App\Http\Controllers\ProductController::class
        );
        Route::resource(
            'users', \App\Http\Controllers\UserController::class
        );
        Route::get('paymentList','App\Http\Controllers\PaymentController@show')->name('paymentList');
        Route::get('paymentListPayed','App\Http\Controllers\PaymentController@payed')->name('paymentListPayed');
        Route::get('paymentListNotPayed','App\Http\Controllers\PaymentController@notPayed')->name('paymentListNotPayed');
    
});


