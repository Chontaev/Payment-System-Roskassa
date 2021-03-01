<?php

use Illuminate\Support\Facades\Route;

//Пользовательские страницы

Route::get('/','App\Http\Controllers\MainController@index')->name('index');

Route::resource('main',App\Http\Controllers\MainController::class);

Route::get('payment','App\Http\Controllers\PaymentController@payment')->name('payment');

//Ответы от Roskassa

Route::post('success',function(){return view('main.success');})->name('success');

Route::post('fail',function(){return view('main.fail');})->name('fail');

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
    
});


