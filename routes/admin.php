<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Lfm\UploadController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])
    ->name('dashboard');

// Route::any('admin/laravel-filemanager/upload', [UploadController::class, 'upload'])->name('unisharp.lfm.upload');

Route::resources([
    'services' => ServiceController::class,
    'projects' => ProjectController::class,
    'project-categories' => ProjectCategoryController::class,
]);
