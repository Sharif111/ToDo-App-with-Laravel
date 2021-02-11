<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;




Route::post('store','CustomerController@store')->name('customer.store');
Route::get('/','CustomerController@index');
Route::delete('/del/{id}','CustomerController@destroy')->name('customer.destroy');
Route::get('/display/{id}','CustomerController@edit')->name('customer.edit');
Route::post('/update/{id}','CustomerController@update')->name('customer.update');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
