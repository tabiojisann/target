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

Route::get('/', 'targetController@index')->name('target.index');

Route::get('/test', function() {
  return view('target.test');
})->name('target.test');

Route::resource('/target', 'targetController')->except('index');



