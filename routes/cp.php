<?php

use rndrmu\StatamicMetatags\Http\Controllers\SettingsController;
use rndrmu\StatamicMetatags\Http\Controllers\DefaultsController;
use rndrmu\StatamicMetatags\Tags\MetatagsTags;




// Laravel 9 way
Route::view('metatags', [MetatagsTags::class, 'index'])->name('metatags.index');


// Laravel 9 way
Route::get('metatags/settings', [DefaultsController::class, 'edit'])->name('metatags.settings');
Route::post('metatags/settings', [DefaultsController::class, 'update'])->name('metatags.settings.update');


// Laravel 9 way
Route::get('metatags/defaults', [DefaultsController::class, 'edit'])->name('metatags.defaults');
Route::post('metatags/defaults', [DefaultsController::class, 'update'])->name('metatags.defaults.update');
