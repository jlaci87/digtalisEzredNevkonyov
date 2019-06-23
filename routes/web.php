<?php
use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@index')->name('index');


Route::get('/nevsor', 'SoldiersController@index')->name('soldiers.index');
Route::get('/rekord-feltoltes', 'SoldiersController@create')->name('soldiers.create');
Route::post('/rekord-tarolasa', 'SoldiersController@store')->name('soldiers.store');
Route::delete('/rekord-torlese/{soldierId}', 'SoldiersController@destroy')->name('soldiers.destroy');
Route::get('/rekord-modositas/{soldierId}', 'SoldiersController@edit')->name('soldiers.edit');
Route::patch('/rekord-modositas/{soldierId}', 'SoldiersController@update')->name('soldiers.update');

