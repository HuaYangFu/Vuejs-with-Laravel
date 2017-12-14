<?php

Route::get('/users', 'ApiTestController@index');
Route::get('/users/{id}', 'ApiTestController@find');
Route::post('/users', 'ApiTestController@create');
Route::put('/users/{id}', 'ApiTestController@update');
Route::delete('/users/{id}', 'ApiTestController@delete');
