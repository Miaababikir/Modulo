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
    return view('index');
});

Auth::routes();

Route::view('/forms/show', 'forms.show');
Route::view('/forms/create', 'forms.create');
Route::view('/forms/edit', 'forms.edit');
Route::view('/forms', 'forms.index');

//Route::middleware('auth')->group(function () {
//    Route::get('/forms', 'FormController@index')->name('forms');
//    Route::post('/forms', 'FormController@store')->name('forms.store');
//    Route::get('/forms/{form}', 'FormController@show')->name('forms.show');
//    Route::put('/forms/{form}', 'FormController@update')->name('forms.update');
//    Route::delete('/forms/{form}', 'FormController@destroy')->name('forms.destroy');
//
//});

