<?php

namespace App\Http\Controllers\Web;

use App\Http\Middleware\AdminAccessMiddleware;
use Illuminate\Support\Facades\Route;

Route::name('web.')->group(function () {
    Route::get('/', [HomePageController::class, 'index'])->name('home');

    Route::get('bai-viet/{slug}', [PostController::class, 'show'])->name('post.show');
    Route::get('/loai-du-an/{slug}', [ProjectCategoryController::class, 'show'])->name('project-categories.show');
    Route::get('/du-an/{slug}', [ProjectController::class, 'show'])->name('projects.show');
});

Route::name('admin.')
    ->prefix('admin/')
    ->middleware([AdminAccessMiddleware::class])
    ->group(function () {
        include 'admin.php';
    });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web','auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
