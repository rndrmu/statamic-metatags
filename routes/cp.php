<?php

use Http\Controllers\SettingsController;
use Http\Controllers\DefaultsController;
use Tags\MetatagsTags;


// Laravel 9 way
Route::view('metatags', [MetatagsTags::class, 'index'])->name('metatags.index');


// Laravel 9 way
Route::get('metatags/defaults', [DefaultsController::class, 'edit'])->name('metatags.defaults');
Route::post('metatags/defaults', [DefaultsController::class, 'update'])->name('metatags.defaults.update');


// Laravel 9 way
Route::get('metatags/defaults', [DefaultsController::class, 'edit'])->name('metatags.defaults');
Route::post('metatags/defaults', [DefaultsController::class, 'update'])->name('metatags.defaults.update');
