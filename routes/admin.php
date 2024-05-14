<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Service\CreateServiceController;
use App\Http\Controllers\Admin\Service\ListServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::name('services.')
    ->prefix('services')
    ->group(function () {
        Route::get('/', [ListServicesController::class, 'showList'])->name('list');
        Route::get('/create', [CreateServiceController::class, 'showForm'])->name('create');
        Route::post('/store', [CreateServiceController::class, 'store'])->name('store');
    });
