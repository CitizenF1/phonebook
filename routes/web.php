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

Route::get('/', 'MainController@index');

Route::get('/search', 'MainController@search')->name('search');

Route::get('/update/{$id}', 'contactController@updateContact')->name('contact-update');

Route::post('/submit', 'contactController@submit')->name('contact-form');
