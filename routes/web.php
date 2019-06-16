<?php
use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@index')->name('index');
Route::get('/nevsor', 'SoldiersController@index')->name('soldiers.index');
Route::get('/rekord-feltoltes', 'SoldiersController@create')->name('soldiers.create');
Route::post('/rekord-tarolasa', 'SoldiersController@store')->name('soldiers.store');

