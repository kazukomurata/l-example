<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sample',
  [\App\Http\Controllers\Sample\IndexController::class, 'show']
);
Route::get('/sample/{id}',
  [\App\Http\Controllers\Sample\IndexController::class, 'showId']
);
Route::get('/tweet', \App\Http\Controllers\Tweet\IndexController::class)
  ->name('tweet.index');
Route::post('/tweet/create',
  \App\Http\Controllers\Tweet\CreateController::class
)->name('tweet.create');
