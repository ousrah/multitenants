<?php

use Illuminate\Support\Facades\Route;
use Modules\Cycle\Http\Controllers\CycleController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('cycles', CycleController::class)->names('cycle');
});
