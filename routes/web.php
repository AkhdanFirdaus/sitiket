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

Route::get('/', 'PagesController@index')->name('welcome');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('ticket', 'TicketController');

Route::resource('event', 'EventController', ['parameters' => ['event' => 'slug']]);

Route::resource('order', 'OrderController', ['parameters' => ['order' => 'order_code']]);
