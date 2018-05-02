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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'manualauth@getLogin');
Route::post('/login', 'manualauth@postLogin')->name('post.login');
Route::get('/register', 'manualauth@getRegister');
Route::post('/register', 'manualauth@postRegister')->name('post.register');
