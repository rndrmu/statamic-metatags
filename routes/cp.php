<?php

use Http\Controllers\SettingsController;
use Http\Controllers\DefaultsController;
use Tags\MetatagsTags;

/**
 * 
 * Route::view('metatags', 'statamic-metatags::index')->name('metatags.index');

Route::get('metatags/settings', [SettingsController::edit])->name('metatags.settings');
Route::post('metatags/settings', [SettingsController::update])->name('metatags.settings.update');

Route::get('metatags/defaults', [DefaultsController::edit])->name('metatags.defaults');
Route::post('metatags/defaults', [DefaultsController::update])->name('metatags.defaults.update');
 * 
 */


// Laravel 9 way
Route::view('metatags', [MetatagsTags::class, 'index'])->name('metatags.index');


// Laravel 9 way
Route::get('metatags/settings', [DefaultsController::class, 'edit'])->name('metatags.settings');
Route::post('metatags/settings', [DefaultsController::class, 'update'])->name('metatags.settings.update');


// Laravel 9 way
Route::get('metatags/defaults', [DefaultsController::class, 'edit'])->name('metatags.defaults');
Route::post('metatags/defaults', [DefaultsController::class, 'update'])->name('metatags.defaults.update');
