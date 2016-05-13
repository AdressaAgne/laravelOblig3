<?php


Route::get('/', 'MainController@index');
Route::resource('items', 'MainController');

Route::get('category', 'CategoryController@main');
Route::get('category/{slug}', 'CategoryController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/api/items', 'MainController@api_items');
Route::get('/api/tags', 'MainController@api_tags');
