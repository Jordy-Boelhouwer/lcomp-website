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

// Home routes
Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home.index'
]);

//Contact routes
Route::get('/contact', [
    'uses' => 'ContactController@index',
    'as' => 'contact.index'
]);

//About routes
Route::get('/over-ons', [
    'uses' => 'AboutController@index',
    'as' => 'about.index'
]);

Route::get('/werkwijze', [
    'uses' => 'AboutController@methods',
    'as' => 'about.methods'
]);
