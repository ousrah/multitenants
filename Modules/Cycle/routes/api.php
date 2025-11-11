<?php

use Illuminate\Support\Facades\Route;
use Modules\Cycle\Http\Controllers\CycleController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('cycles', CycleController::class)->names('cycle');
});
