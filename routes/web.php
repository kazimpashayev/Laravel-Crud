<?php

use Illuminate\Support\Facades\Route;

// Back

Route::name('admin.')->prefix('admin')->group(function(){
    Route::get('/', 'App\Http\Controllers\Back\Dashboard@index')->name('dashboard');
    Route::resource('posts', 'App\Http\Controllers\Back\PostController');
    Route::get('/deletepost/{id}', 'App\Http\Controllers\Back\PostController@delete')->name('delete.post');
});

// Front

Route::get('/', 'App\Http\Controllers\Front\Homepage@index')->name('home');
