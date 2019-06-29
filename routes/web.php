<?php
use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@index')->name('index');
Route::get('nevsor', 'SoldiersController@index')->name('soldiers.index');

Route::group(['namespace' => 'Admin'], function () {
    Route::get('admin', 'AdminController@index')->name('admin.index');

    Route::get('admin/nevsor', 'SoldiersController@index')->name('admin.soldiers.index');
    Route::get('admin/rekord/feltoltes', 'SoldiersController@create')->name('admin.soldiers.create');
    Route::post('admin/rekord/feltoltes', 'SoldiersController@store')->name('admin.soldiers.store');
    Route::get('admin/rekord/{soldierId}/modositas', 'SoldiersController@edit')->name('admin.soldiers.edit');
    Route::put('admin/rekord/{soldierId}/modositas', 'SoldiersController@update')->name('admin.soldiers.update');
    Route::delete('admin/rekord/{soldierId}/torlese', 'SoldiersController@destroy')->name('admin.soldiers.destroy');

    Route::get('admin/valtozok', 'PropertiesController@index')->name('admin.properties.index');
    Route::post('admin/valtozok/prefix-feltoltes/', 'PropertiesController@storePrefix')->name('admin.properties.store-prefix');
});

