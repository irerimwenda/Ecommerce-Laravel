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
    return view('pages.welcome');
})->name('welcome');

Route::get('/products', 'PagesController@getProducts')->name('products');
Route::get('/contact', 'PagesController@getContact')->name('contact');
Route::get('/about', 'PagesController@getAbout')->name('about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
