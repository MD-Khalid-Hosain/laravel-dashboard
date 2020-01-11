<?php

/*dashboard Area*/
Route::get('/ver1/dashboard', 'DashboardController@index')->name('dashboard_index');

/*end dashboard Area*/
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
