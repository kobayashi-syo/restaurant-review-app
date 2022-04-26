<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','App\Http\Controllers\ReviewController@index')->name('reviews.index');
Route::get('/review/create','App\Http\Controllers\ReviewController@reviewCreateGet')->name('review.create');
Route::post('/review/create','App\Http\Controllers\ReviewController@reviewCreatePost');
Route::get('/review/confirmation','App\Http\Controllers\ReviewController@reviewConfirmation')->name('review.confirmation');
Route::get('/review/{id}/detail','App\Http\Controllers\ReviewController@reviewDetail')->name('review.Detail');
Route::get('/review/complete','App\Http\Controllers\ReviewController@reviewComplete')->name('review.complete');
