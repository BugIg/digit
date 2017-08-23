<?php

Route::post('/', 'ContactController@create');

Route::get('/{id}', 'ContactController@one');
Route::put('/{id}', 'ContactController@update');
Route::delete('/{id}', 'ContactController@delete');
Route::get('/{id}/people', 'ContactController@people');

Route::delete('/groups/{id}', 'ContactGroupController@delete');
Route::put('/groups/{id}', 'ContactGroupController@update');

Route::post('/people', 'ContactPersonController@create');
Route::put('/people/{id}', 'ContactPersonController@update');
Route::delete('/people/{id}', 'ContactPersonController@delete');