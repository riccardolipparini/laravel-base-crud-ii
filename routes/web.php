<?php

use Illuminate\Support\Facades\Route;


//home & show
Route::get('/',  'HomeController@home') -> name('home');
Route::get('/serietv/show/{id}',  'HomeController@show') -> name('show');

//create
Route::get('/serietv/create',  'HomeController@create') -> name('create');
Route::post('/serietv/store',  'HomeController@store') -> name('store');

//edit
Route::get('/serietv/edit/{id}',  'HomeController@edit') -> name('edit');
Route::post('/serietv/update/{id}',  'HomeController@update') -> name('update');

//delete
Route::get('/serietv/delete/{id}',  'HomeController@delete') -> name('delete');