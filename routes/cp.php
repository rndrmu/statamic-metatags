<?php


Route::view('metatags', 'statamic-metatags::index')->name('metatags.index');

Route::get('metatags/settings', 'App\Http\Controllers\SettingsController@edit')->name('metatags.settings');
Route::post('metatags/settings', 'App\Http\Controllers\SettingsController@update')->name('metatags.settings.update');

Route::get('metatags/defaults', 'App\Http\Controllers\DefaultsController@edit')->name('metatags.defaults');
Route::post('metatags/defaults', 'App\Http\Controllers\DefaultsController@update')->name('metatags.defaults.update');