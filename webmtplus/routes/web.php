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
Route::get('/team/{slug}', [HomeController::class, 'teamDetail'])->name('team.detail');
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
    Route::post('/content-setup/home/update-testimonials', [AdminController::class, 'updateHomeTestimonials'])->name('content-setup.home.testimonials.update');
    Route::post('/content-setup/home/update-news', [AdminController::class, 'updateHomeNews'])->name('content-setup.home.news.update');
    Route::post('/content-setup/home/update-contact', [AdminController::class, 'updateHomeContact'])->name('content-setup.home.contact.update');

    // Areas of Operation Management
    Route::get('/admin/areas-operation', [\App\Http\Controllers\Admin\AreasOperationController::class, 'index'])->name('admin.areas-operation.index');
    Route::post('/admin/areas-operation/{section}', [\App\Http\Controllers\Admin\AreasOperationController::class, 'update'])->name('admin.areas-operation.update');

    // Mission Content Management
    Route::get('/admin/mission', [\App\Http\Controllers\Admin\MissionContentController::class, 'index'])->name('admin.mission.index');
    Route::post('/admin/mission', [\App\Http\Controllers\Admin\MissionContentController::class, 'update'])->name('admin.mission.update');

    // Vision Content Management
    Route::get('/admin/vision', [\App\Http\Controllers\Admin\VisionContentController::class, 'index'])->name('admin.vision.index');
    Route::post('/admin/vision', [\App\Http\Controllers\Admin\VisionContentController::class, 'update'])->name('admin.vision.update');

    // Core Values Content Management
    Route::get('/admin/core-values', [\App\Http\Controllers\Admin\CoreValuesContentController::class, 'index'])->name('admin.core-values.index');
    Route::post('/admin/core-values/update', [\App\Http\Controllers\Admin\CoreValuesContentController::class, 'update'])->name('admin.core-values.update');

    // Capabilities and Experience Content Management
    Route::get('/admin/capabilities', [\App\Http\Controllers\Admin\CapabilitiesContentController::class, 'index'])->name('admin.capabilities.index');
    Route::post('/admin/capabilities/update', [\App\Http\Controllers\Admin\CapabilitiesContentController::class, 'update'])->name('admin.capabilities.update');

    // Team Management
    Route::get('admin/team-members', [\App\Http\Controllers\Admin\TeamMemberController::class, 'index'])->name('admin.team.index');
    Route::get('admin/team-members/create', [\App\Http\Controllers\Admin\TeamMemberController::class, 'create'])->name('admin.team.create');
    Route::post('admin/team-members', [\App\Http\Controllers\Admin\TeamMemberController::class, 'store'])->name('admin.team.store');
    Route::get('admin/team-members/{team:slug}', [\App\Http\Controllers\Admin\TeamMemberController::class, 'show'])->name('admin.team.show');
    Route::get('admin/team-members/{team:slug}/edit', [\App\Http\Controllers\Admin\TeamMemberController::class, 'edit'])->name('admin.team.edit');
    Route::put('admin/team-members/{team:slug}', [\App\Http\Controllers\Admin\TeamMemberController::class, 'update'])->name('admin.team.update');
    Route::delete('admin/team-members/{team:slug}', [\App\Http\Controllers\Admin\TeamMemberController::class, 'destroy'])->name('admin.team.destroy');
});

