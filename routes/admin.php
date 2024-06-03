<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Lfm\UploadController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])
    ->name('dashboard');

// Route::any('admin/laravel-filemanager/upload', [UploadController::class, 'upload'])->name('unisharp.lfm.upload');

Route::get('/password', [PasswordController::class, 'create'])->name('password.create');
Route::post('/password', [PasswordController::class, 'store'])->name('password.store');

Route::resources([
    'services' => ServiceController::class,
    'projects' => ProjectController::class,
    'project-categories' => ProjectCategoryController::class,
    'about-us' => AboutUsController::class,
    'staff-members' => StaffMemberController::class,
    'testimonials' => TestimonialController::class,
    'banners' => BannerController::class,
    'post-categories' => PostCategoryController::class,
    'posts' => PostController::class,
    'users' => UserController::class,
]);
