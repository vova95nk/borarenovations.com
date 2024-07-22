<?php

use Illuminate\Support\Facades\Route;

/** @uses \App\Http\Controllers\MainController::maintenance() */
Route::get('/maintenance', '\App\Http\Controllers\MainController@maintenance')
    ->name('maintenance');

/** @uses \App\Http\Controllers\MainController::main() */
Route::get('/', '\App\Http\Controllers\MainController@main')
    ->middleware(\App\Http\Middleware\CheckMaintenance::class);

/** @uses \App\Http\Controllers\MainController::getQuote() */
Route::post('/get-quote', '\App\Http\Controllers\MainController@getQuote')
    ->withoutMiddleware(\App\Http\Middleware\CheckMaintenance::class);

/** @uses \App\Http\Controllers\MainController::sendFeedback() */
Route::post('/send-feedback', '\App\Http\Controllers\MainController@sendFeedback')
    ->withoutMiddleware(\App\Http\Middleware\CheckMaintenance::class);

/** @uses \App\Http\Controllers\MainController::part() */
Route::get('/{part}', '\App\Http\Controllers\MainController@part')
    ->middleware(\App\Http\Middleware\CheckMaintenance::class);

/** @uses \App\Http\Controllers\MainController::service() */
Route::get('/services/{service}', '\App\Http\Controllers\MainController@service')
    ->middleware(\App\Http\Middleware\CheckMaintenance::class);