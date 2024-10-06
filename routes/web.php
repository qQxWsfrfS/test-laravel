<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', fn()=>view('home'));

Route::group(['prefix'=>'services'], function(){
    Route::get('/', fn()=>view('services'));
});










Route::group(['prefix'=>'register'], function (){
    Route::get('/', fn()=>view('register'));
    Route::post('/', [UserController::class, 'register']);

    Route::get('/success', [UserController::class, 'success_register'])->name('success_register');
});
