<?php

Route::get('/', 'HomeController@index');
Route::get('/User/{id}', 'HomeController@delete');
Route::get('/Edit/{id}', 'HomeController@editView');
Route::post('/Edit', 'HomeController@edit');
Route::get('/CreateView', 'HomeController@createView');
Route::post('/Create', 'HomeController@create');

    