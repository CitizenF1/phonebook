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


Route::get('/', 'MainController@index')->name('home');

Route::get('/search', 'MainController@search')->name('search');

Route::post('/update/{$id}', 'contactController@updateContact')->name('update');

/*Route::get('/update/{$id}', function () {
    return view('update');
});*/

Route::post('/submit', 'contactController@submit')->name('contact-form');

Route::get('/delete/{$id}', 'contactController@deleteContact')->name('delete');
