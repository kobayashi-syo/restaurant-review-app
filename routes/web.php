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

Route::get('/review/create','App\Http\Controllers\ReviewController@reviewCreateGet')->name('review.create.get');
Route::post('/review/create','App\Http\Controllers\ReviewController@reviewCreatePost')->name('review.create.post');

Route::get('/review/confirmation','App\Http\Controllers\ReviewController@reviewConfirmationGet')->name('review.confirmation.get');
Route::post('/review/confirmation','App\Http\Controllers\ReviewController@reviewConfirmationPost')->name('review.confirmaiton.post');

Route::get('/review/complete','App\Http\Controllers\ReviewController@reviewComplete')->name('review.complete');

Route::get('/review/login','App\Http\Controllers\UserController@userLoginGet')->name('review.login.get');
Route::post('/review/login','App\Http\Controllers\UserController@userLoginPost')->name('review.login.post');

Route::get('/review/{id}/detail', 'App\Http\Controllers\UserController@reviewDetail')->name('review.Detail');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
