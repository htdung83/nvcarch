<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::resources([
    'services' => ServiceController::class,
    'projects' => ServiceController::class,
    'project-categories' => ProjectCategoryController::class,
]);
