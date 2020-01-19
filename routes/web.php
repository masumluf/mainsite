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



Route::view('/','Theme.index');
Route::view('/about','Theme.aboutus');
Route::view('/price','Theme.price');
Route::view('/contact','Theme.contact');
Route::post('/sendform','ContactController@sendForm')->name('contactForm');
