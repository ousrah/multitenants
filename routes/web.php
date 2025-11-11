<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TenantController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::domain('manar.portal-edu.com')->group(function () {
    Route::get('/', function () {
        if (request()->path() !== 'loginadmin') {
            return redirect('/loginadmin');
        }
        return abort(404); // ou laisse Laravel gérer normalement
    });
     Route::get('/login', function () {
        if (request()->path() !== 'loginadmin') {
            return redirect('/loginadmin');
        }
        return abort(404); // ou laisse Laravel gérer normalement
    });

 Route::get('/logout', function () {
        if (request()->path() !== 'loginadmin') {
            return redirect('/logoutadmin');
        }
        return abort(404); // ou laisse Laravel gérer normalement
    });
 //   Route::get('/loginadmin', [\App\Http\Controllers\AuthController::class, 'loginadmin'])->name('loginadmin');
});

Route::middleware('guest')->group(function () {
    Route::get('/loginadmin', [\App\Http\Controllers\AuthController::class, 'loginadmin'])->name('loginadmin');
    Route::post('/loginadmin', [\App\Http\Controllers\AuthController::class, 'loginadminpost'])->name('loginadminpost');

});



Route::middleware('auth')->group(function () {
     Route::get('tenants/export', [TenantController::class, 'export'])->name('tenants.export');
    Route::resource('tenants', TenantController::class);
    
    Route::post('/logoutadmin', [\App\Http\Controllers\AuthController::class, 'logoutadmin'])->name('logoutadminpost');
    Route::get('/logoutadmin', [\App\Http\Controllers\AuthController::class, 'logoutadmin'])->name('logoutadmin');

    Route::get('/indexadmin', [DashboardController::class, 'index'])->name('indexadmin');
  
});

