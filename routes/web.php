<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware'=>['auth', 'isAdmin'],'prefix'=>'admin'],function () {
    Route::get('/deneme', function () {
        return ('Deneme Yazısı');
    });
});


Route::middleware(['auth:sanctum', 'verified'])->get('/panel', function () {
    return view('dashboard');
})->name('dashboard');
