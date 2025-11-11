<?php

use Illuminate\Support\Facades\Route;
use Modules\School\Http\Controllers\SchoolController;

Route::middleware(['web', 'tenant', 'auth'])->prefix('admin')->group(function () {
    Route::get('/schools', [SchoolController::class, 'index'])->name('schools.index');
});