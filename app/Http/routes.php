<?php


Route::get('/', 'HomeController@index');

//Route::resource('items', 'ItemController');

Route::get('items', 'ItemController@index');

Route::post('items', [
    'middleware' => 'auth',
    'uses' => 'ItemController@store'
]);

Route::get('items/create', [
    'middleware' => 'auth',
    'uses' => 'ItemController@create'
]);

Route::patch('items/{items}', [
    'middleware' => 'auth',
    'uses' => 'ItemController@update'
]);

Route::delete('items/{items}/delete', [
    'middleware' => 'auth',
    'uses' => 'ItemController@destroy'
]);

Route::get('items/{items}', 'ItemController@show');

Route::get('items/{items}/edit', [
    'middleware' => 'auth',
    'uses' => 'ItemController@edit'
]);

Route::get('profile/{name}', 'ProfileController@index');

Route::get('category', 'CategoryController@main');
Route::get('category/{slug}', 'CategoryController@index');

Route::auth();

Route::get('message/', 'MessageController@index');
Route::get('message/sent', 'MessageController@sent');
Route::get('message/send', 'MessageController@send');
Route::post('message/send', 'MessageController@store');
Route::get('message/send/{user}/{Item?}', 'MessageController@sendTo');
Route::get('message/{message}', 'MessageController@message');

/**
*   Api
*/
Route::get('/api/items', 'ApiController@items');
Route::get('/api/tags', 'ApiController@tags');
