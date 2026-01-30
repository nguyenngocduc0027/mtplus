<?php

use App\Http\Controllers\Admin\AboutContentController;
use App\Http\Controllers\Admin\CoreValuesContentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ImageUploadController;
use App\Http\Controllers\Admin\MissionContentController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\VisionContentController;
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
    Route::prefix('operation-areas')->name('admin.operation_areas.')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\OperationAreaController::class, 'index'])->name('index');
        Route::get('/create', [\App\Http\Controllers\Admin\OperationAreaController::class, 'create'])->name('create');
        Route::post('/', [\App\Http\Controllers\Admin\OperationAreaController::class, 'store'])->name('store');
        Route::get('/{operation_area:slug}', [\App\Http\Controllers\Admin\OperationAreaController::class, 'show'])->name('show');
        Route::get('/{operation_area:slug}/edit', [\App\Http\Controllers\Admin\OperationAreaController::class, 'edit'])->name('edit');
        Route::put('/{operation_area:slug}', [\App\Http\Controllers\Admin\OperationAreaController::class, 'update'])->name('update');
        Route::delete('/{operation_area:slug}', [\App\Http\Controllers\Admin\OperationAreaController::class, 'destroy'])->name('destroy');
    });

    // Mission Content Routes
    Route::get('/mission-content/edit', [MissionContentController::class, 'edit'])->name('admin.mission_content.edit');
    Route::put('/mission-content', [MissionContentController::class, 'update'])->name('admin.mission_content.update');

    // Vision Content Routes
    Route::get('/vision-content/edit', [VisionContentController::class, 'edit'])->name('admin.vision_content.edit');
    Route::put('/vision-content', [VisionContentController::class, 'update'])->name('admin.vision_content.update');

    // About Content Routes
    Route::get('/about-content/edit', [AboutContentController::class, 'edit'])->name('admin.about_content.edit');
    Route::put('/about-content', [AboutContentController::class, 'update'])->name('admin.about_content.update');

    // Core Values Content Routes
    Route::get('/core-values-content/edit', [CoreValuesContentController::class, 'edit'])->name('admin.core_values_content.edit');
    Route::put('/core-values-content', [CoreValuesContentController::class, 'update'])->name('admin.core_values_content.update');
});
