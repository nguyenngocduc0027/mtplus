<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ImageUploadController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Route for image upload, outside of 'auth' middleware
Route::post('/admin/upload-image', [ImageUploadController::class, 'upload'])->name('admin.upload-image');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    // Service Routes
    Route::get('/services', [ServiceController::class, 'index'])->name('admin.services.index');
    Route::get('/services/create', [ServiceController::class, 'create'])->name('admin.services.create');
    Route::post('/services', [ServiceController::class, 'store'])->name('admin.services.store');
    Route::get('/services/{service}', [ServiceController::class, 'show'])->name('admin.services.show');
    Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])->name('admin.services.edit');
    Route::put('/services/{service}', [ServiceController::class, 'update'])->name('admin.services.update');
    Route::delete('/services/{service}', [ServiceController::class, 'destroy'])->name('admin.services.destroy');

    // OperationArea Routes
    Route::get('/operation-areas', [\App\Http\Controllers\Admin\OperationAreaController::class, 'index'])->name('admin.operation_areas.index');
    Route::get('/operation-areas/create', [\App\Http\Controllers\Admin\OperationAreaController::class, 'create'])->name('admin.operation_areas.create');
    Route::post('/operation-areas', [\App\Http\Controllers\Admin\OperationAreaController::class, 'store'])->name('admin.operation_areas.store');
    Route::get('/operation-areas/{operation_area:slug}', [\App\Http\Controllers\Admin\OperationAreaController::class, 'show'])->name('admin.operation_areas.show');
    Route::get('/operation-areas/{operation_area:slug}/edit', [\App\Http\Controllers\Admin\OperationAreaController::class, 'edit'])->name('admin.operation_areas.edit');
    Route::put('/operation-areas/{operation_area:slug}', [\App\Http\Controllers\Admin\OperationAreaController::class, 'update'])->name('admin.operation_areas.update');
    Route::delete('/operation-areas/{operation_area:slug}', [\App\Http\Controllers\Admin\OperationAreaController::class, 'destroy'])->name('admin.operation_areas.destroy');
});
