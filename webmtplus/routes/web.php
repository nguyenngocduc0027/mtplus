<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/* Switch language route could be here */
Route::get('lang/{locale}', function ($locale) {
    if (! in_array($locale, ['vi', 'en'])) {
        abort(404);
    }

    session(['locale' => $locale]);
    app()->setLocale($locale);

    return redirect()->back();
});


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/areas-of-operation', [HomeController::class, 'areasOfOperation'])->name('areas-of-operation');
Route::get('/mission', [HomeController::class, 'mission'])->name('mission');
Route::get('/vision', [HomeController::class, 'vision'])->name('vision');
Route::get('/core-values', [HomeController::class, 'coreValues'])->name('core-values');
Route::get('/capabilities-and-experience', [HomeController::class, 'capabilitiesAndExperience'])->name('capabilities-and-experience');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/project', [HomeController::class, 'project'])->name('project');
