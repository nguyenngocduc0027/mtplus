<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

/* Switch language route could be here */
Route::get('lang/{locale}', function ($locale) {
    if (! in_array($locale, ['vi', 'en'])) {
        abort(404);
    }

    session(['locale' => $locale]);
    app()->setLocale($locale);

    return redirect()->back();
});

// Home and other pages routes
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/areas-of-operation', [HomeController::class, 'areasOfOperation'])->name('areas-of-operation');
Route::get('/mission', [HomeController::class, 'mission'])->name('mission');
Route::get('/vision', [HomeController::class, 'vision'])->name('vision');
Route::get('/core-values', [HomeController::class, 'coreValues'])->name('core-values');
Route::get('/capabilities-and-experience', [HomeController::class, 'capabilitiesAndExperience'])->name('capabilities-and-experience');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/project', [HomeController::class, 'project'])->name('project');
Route::get('/project/detail', [HomeController::class, 'detailProject'])->name('detail-project');
Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/news/detail', [HomeController::class, 'detailNews'])->name('detail-news');
Route::get('/career', [HomeController::class, 'career'])->name('career');
Route::get('/career/detail', [HomeController::class, 'careerDetail'])->name('detail-career');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');


// Auth routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin dashboard route
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    // Content Setup
    Route::get('/content-setup/home', [AdminController::class, 'contentSetupHome'])->name('content-setup.home');
    Route::post('/content-setup/home/update-hero', [AdminController::class, 'updateHomeHero'])->name('content-setup.home.update-hero');
    Route::post('/content-setup/home/update-about', [AdminController::class, 'updateHomeAbout'])->name('content-setup.home.update-about');
    Route::post('/content-setup/home/update-services', [AdminController::class, 'updateHomeServices'])->name('content-setup.home.update-services');
    Route::post('/content-setup/home/update-why-choose', [AdminController::class, 'updateHomeWhyChoose'])->name('content-setup.home.update-why-choose');
    Route::post('/content-setup/home/update-commitment', [AdminController::class, 'updateHomeCommitment'])->name('content-setup.home.update-commitment');
    Route::post('/content-setup/home/update-project', [AdminController::class, 'updateHomeProject'])->name('content-setup.home.project.update');
    Route::post('/content-setup/home/update-team', [AdminController::class, 'updateHomeTeam'])->name('content-setup.home.team.update');
    Route::post('/content-setup/home/update-awards', [AdminController::class, 'updateHomeAwards'])->name('content-setup.home.awards.update');
});

