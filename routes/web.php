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
})->name('main');

Route::prefix('request')->group(function() {
    Route::get('/form/get', 'RequestMessageController@getForm')->name('request.form.get');
    Route::post('/form/store', 'RequestMessageController@storeForm')->name('request.form.store');
});


Route::prefix('question')->group(function() {
    Route::get('form/get', 'QuestionController@getForm')->name('question.form.get');
    Route::post('form/store', 'QuestionController@storeGuestQuestion')->name('question.form.store');
});

Route::prefix('offers')->group(function() {
   Route::get('/all', 'OffersController@activeAll')->name('offers.all.active');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
