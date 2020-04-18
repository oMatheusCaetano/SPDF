<?php

// REGISTER
Route::get('/register', 'Auth\RegisterController@index')->name('register.index');
Route::post('/register', 'Auth\RegisterController@store')->name('register.store');

// LOGIN
Route::get('/login', 'Auth\LoginController@index')->name('login.index');
Route::get('/logout', 'Auth\LoginController@logout')->name('login.logout');
Route::post('/login', 'Auth\LoginController@login')->name('login.login');

// USERS
Route::get('/users/{user}/edit', 'App\UsersController@edit')->name('users.edit');
Route::post('/users/{user}', 'App\UsersController@update')->name('users.update');

// COMPANIES
Route::get('/companies/create', 'App\CompaniesController@create')->name('companies.create');
Route::post('/companies/create/{user}', 'App\CompaniesController@store')->name('companies.store');

