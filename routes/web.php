<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


//Route::get('/', function () {
    //return view('welcome');
//});

Route::post('store','TodoController@store')->name('todo.store'); 
Route::get('/','TodoController@index');
Route::delete('/del/{id}','TodoController@destroy')->name('todo.destroy');
Route::get('/display/{id}','TodoController@edit')->name('todo.edit');
Route::put('/update/{id}','TodoController@update')->name('todo.update');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
