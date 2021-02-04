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

Route::get('/', function () {
    return view('main.index');
});

Route::get('/form/get', 'FormController@getForm')->name('get.form');
Route::post('/form/store', 'FormController@formStore')->name('form.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
