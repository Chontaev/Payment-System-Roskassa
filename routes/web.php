<?php

use Illuminate\Support\Facades\Route;

Route::get('/','App\Http\Controllers\MainController@index')->name('index');

// Route::post('/','App\Http\Controllers\PaymentController@setData')->name('setData');

Route::get('payment','App\Http\Controllers\PaymentController@payment')->name('payment');

Route::post('getPay','App\Http\Controllers\PaymentController@getData')->name('getPay');

Route::resource('main',App\Http\Controllers\MainController::class);

Route::get('login','App\Http\Controllers\AuthenController@login')->name('login');

Route::get('logout','App\Http\Controllers\AuthenController@logout')->name('logout');

Route::get('register','App\Http\Controllers\AuthenController@register')->name('register');

Route::post('store','App\Http\Controllers\AuthenController@store')->name('store');

Route::post('authenticate','App\Http\Controllers\AuthenController@authenticate')->name('authenticate');

Route::get('/success', function(){
    return view('success');
});

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


