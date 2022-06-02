<?php

use App\Http\Controllers\emr\AccountController;
use App\Http\Controllers\emr\DashboardController;
use App\Http\Controllers\emr\PermissionController;
use App\Http\Controllers\LangController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/lang/{lang}', [LangController::class, 'changeLang'])->name('lang');


Route::prefix('/emr')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('emr.dashboard');
    # Route Account
    Route::prefix('/account')->controller(AccountController::class)->group(function(){
        Route::get('/', 'index')->name('account.index');
        Route::get('/add', 'create')->name('account.create');
        Route::post('/add', 'store')->name('account.store');
        Route::get('/{id}/edit', 'edit')->name('account.edit');
        Route::put('/{id}', 'update')->name('account.update');
        Route::delete('/destroy', 'destroy');
    });

    # Route Permission
    Route::prefix('/permission')->controller(PermissionController::class)->group(function(){
        Route::get('/', 'index')->name('permission.index');
        Route::get('/add', 'create')->name('permission.create');
        Route::post('/add', 'store')->name('permission.store');
        Route::get('/{id}/edit', 'edit')->name('permission.edit');
        Route::get('/{id}', 'show')->name('permission.show');
        Route::put('/{id}', 'update')->name('permission.update');
        Route::delete('/destroy', 'destroy');
    });
});
