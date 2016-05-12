<?php


Route::get('/', 'MainController@index');
Route::resource('items', 'MainController');

Route::get('category', 'CategoryController@main');
Route::get('category/{slug}', 'CategoryController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
