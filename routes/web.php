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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/account', 'AccountController@index')->name('account')->middleware('auth');
Route::get('/account/edit/{user}', 'AccountController@edit')->name('account.edit')->middleware('auth');

Route::post('/account/{user}', 'AccountController@update')->name('account.update')->middleware('auth');

Route::get('/account/detail/{user}', 'AccountController@detail')->name('account.detail')->middleware('auth');
Route::get('/account/post/create', 'AccountController@createPost')->name('account.post.create')->middleware('auth');
Route::post('/account/post/create', 'ArticleController@store')->name('post.store')->middleware('auth');
