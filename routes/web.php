<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::get('/', ['uses' => 'ReviewController@index', 'as' => 'review.index']);
    Route::get('/display', ['uses' => 'ReviewController@display', 'as' => 'review.display']);
    Route::post('/store', ['uses' => 'ReviewController@store', 'as' => 'review.collect']);
});