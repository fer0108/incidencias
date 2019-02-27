<?php
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('entidades/edit/{entidad}', 'EntidadController@edit');
Route::get('entidades/list', 'EntidadController@list');
Route::get('entidades/create', function () {
    return view('welcome');
});

Route::get('entidades', 'EntidadController@index');
Route::get('entidades/{entidad}', 'EntidadController@show');
Route::post('entidades', 'EntidadController@store');
Route::patch('entidades/{entidad}', 'EntidadController@update');
Route::delete('entidades/{entidad}', 'EntidadController@destroy');
















