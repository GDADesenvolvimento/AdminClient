<?php
Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/clients', ['as' => 'clients', 'uses' => '\GdaDesenv\AdminClient\Controllers\ClientController@clients']);
    Route::get('/client/form', ['as' => 'client.form', 'uses' => '\GdaDesenv\AdminClient\Controllers\ClientController@form']);
    Route::post('/client/create', ['as' => 'client.create', 'uses' => '\GdaDesenv\AdminClient\Controllers\ClientController@create']);
    Route::get('/client/edit/{id}', ['as' => 'client.edit', 'uses' => '\GdaDesenv\AdminClient\Controllers\ClientController@edit']);
    Route::put('/client/put', ['as' => 'client.update', 'uses' => '\GdaDesenv\AdminClient\Controllers\ClientController@update']);
    Route::get('/client/delete/{id}', ['as' => 'client.delete', 'uses' => '\GdaDesenv\AdminClient\Controllers\ClientController@delete']);
});