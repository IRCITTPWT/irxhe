<?php

Route::view("/", "index");

Route::get('/dashboard', 'DashboardController@show');
Route::post('/dashboard/new', 'DashboardController@store')->name('BroadcastSimpan');
Route::get('/client/', 'ClientController@show')->name('client');

	
Auth::routes();