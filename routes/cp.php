<?php

use App\Http\Controllers\SettingsController;
use App\Http\Controllers\DefaultsController;


Route::view('metatags', 'statamic-metatags::index')->name('metatags.index');

Route::get('metatags/settings', [SettingsController::class, 'edit'])->name('metatags.settings');
Route::post('metatags/settings', [SettingsController::class, 'update'])->name('metatags.settings.update');

Route::get('metatags/defaults', [DefaultsController::class, 'edit'])->name('metatags.defaults');
Route::post('metatags/defaults', [DefaultsController::class, 'update'])->name('metatags.defaults.update');