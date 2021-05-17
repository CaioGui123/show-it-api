<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Auth Routes
Route::namespace('Auth')->group(function () {
    Route::post('login', 'AuthController@login');

    Route::middleware('auth.jwt')->group(function () {
        Route::post('logout', 'AuthController@logout');
    });
});

// Auth Routes

// User Routes
Route::middleware('auth.jwt')->namespace('Admin')->group(function () {


    // User Routes
    Route::resource('users', 'UserController');
    Route::resource('posts', 'PostController');
    Route::resource('likes', 'LikeController');
    Route::resource('comments', 'CommentController');
});
