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

Route::get('/login', 'manualauth@getLogin')->name('login')->middleware('guest');
Route::post('/login', 'manualauth@postLogin')->middleware('guest');
Route::get('/register', 'manualauth@getRegister')->name('register')->middleware('guest');
Route::post('/register', 'manualauth@postRegister')->middleware('guest');
Route::get('/home', function(){
	return view('home');
})->name('home')->middleware('auth');

Route::get('/logout', 'manualauth@logout')->name('logout')->middleware('auth');