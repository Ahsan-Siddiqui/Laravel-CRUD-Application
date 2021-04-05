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
// In route there have two parameters one is url and other is call back function //
// Route::get('/', function () {return view('welcome');});
// Route::get('/hello', function () {return "Hello world";});
// Route::get('/user/{id}', function ($id) {return "Your id is : ".$id;});


//name is use to define just like location of page
Route::get('/','StudentController@index')->name('home');
Route::get('/create','StudentController@create')->name('create');
Route::post('/create','StudentController@store')->name('store');
Route::get('/edit/{id}','StudentController@edit')->name('edit');
Route::post('/update/{id}','StudentController@update')->name('update');
Route::delete('/delete/{id}','StudentController@delete')->name('delete');

