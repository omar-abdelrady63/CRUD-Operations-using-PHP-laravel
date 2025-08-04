<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/include', function () {
    return view('include_test');
});

Route::get('/user', [UserController::class, 'show']);






Route::resource('posts', PostController::class);






