<?php

Route::view("/", "index");
Route::get('/dashboard', 'DashboardController@show');
Route::post('/dashboard/new', 'DashboardController@store')->name('BroadcastSimpan');