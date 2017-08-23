<?php

Route::get('/', 'OrgController@index');
Route::post('/', 'OrgController@create');

Route::post('/logo','OrgController@uploadLogo');

Route::get('/{id}', 'OrgController@one');
Route::put('/{id}', 'OrgController@update');

Route::get('/{id}/contacts', 'OrgContactsController@contacts');

Route::post('/{id}/contact_groups', 'OrgContactsController@createContactGroup');
Route::get('/{id}/contact_groups', 'OrgContactsController@contactGroups');