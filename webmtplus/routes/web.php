<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ImageUploadController;

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
Route::get('/services/{slug}', [HomeController::class, 'service'])->name('services.index');
Route::get('/project', [HomeController::class, 'project'])->name('project');
Route::get('/project/{project:slug}', [HomeController::class, 'detailProject'])->name('detail-project');
Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/news/{slug}', [HomeController::class, 'detailNews'])->name('detail-news');
Route::get('/career', [HomeController::class, 'career'])->name('career');
Route::get('/career/{slug}', [HomeController::class, 'careerDetail'])->name('detail-career');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');


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

    // Services Management
    Route::get('admin/services', [\App\Http\Controllers\Admin\ServiceController::class, 'index'])->name('admin.services.index');
    Route::get('admin/services/create', [\App\Http\Controllers\Admin\ServiceController::class, 'create'])->name('admin.services.create');
    Route::post('admin/services', [\App\Http\Controllers\Admin\ServiceController::class, 'store'])->name('admin.services.store');
    Route::get('admin/services/{service:slug}', [\App\Http\Controllers\Admin\ServiceController::class, 'show'])->name('admin.services.show');
    Route::get('admin/services/{service:slug}/edit', [\App\Http\Controllers\Admin\ServiceController::class, 'edit'])->name('admin.services.edit');
    Route::put('admin/services/{service:slug}', [\App\Http\Controllers\Admin\ServiceController::class, 'update'])->name('admin.services.update');
    Route::delete('admin/services/{service:slug}', [\App\Http\Controllers\Admin\ServiceController::class, 'destroy'])->name('admin.services.destroy');

    // Projects Management
    Route::get('admin/projects', [\App\Http\Controllers\Admin\ProjectController::class, 'index'])->name('admin.projects.index');
    Route::get('admin/projects/create', [\App\Http\Controllers\Admin\ProjectController::class, 'create'])->name('admin.projects.create');
    Route::post('admin/projects', [\App\Http\Controllers\Admin\ProjectController::class, 'store'])->name('admin.projects.store');
    Route::get('admin/projects/{project:slug}', [\App\Http\Controllers\Admin\ProjectController::class, 'show'])->name('admin.projects.show');
    Route::get('admin/projects/{project:slug}/edit', [\App\Http\Controllers\Admin\ProjectController::class, 'edit'])->name('admin.projects.edit');
    Route::put('admin/projects/{project:slug}', [\App\Http\Controllers\Admin\ProjectController::class, 'update'])->name('admin.projects.update');
    Route::delete('admin/projects/{project:slug}', [\App\Http\Controllers\Admin\ProjectController::class, 'destroy'])->name('admin.projects.destroy');

    // Careers Management
    Route::get('admin/careers', [\App\Http\Controllers\Admin\CareerController::class, 'index'])->name('admin.careers.index');
    Route::get('admin/careers/create', [\App\Http\Controllers\Admin\CareerController::class, 'create'])->name('admin.careers.create');
    Route::post('admin/careers', [\App\Http\Controllers\Admin\CareerController::class, 'store'])->name('admin.careers.store');
    Route::get('admin/careers/{career:slug}', [\App\Http\Controllers\Admin\CareerController::class, 'show'])->name('admin.careers.show');
    Route::get('admin/careers/{career:slug}/edit', [\App\Http\Controllers\Admin\CareerController::class, 'edit'])->name('admin.careers.edit');
    Route::put('admin/careers/{career:slug}', [\App\Http\Controllers\Admin\CareerController::class, 'update'])->name('admin.careers.update');
    Route::delete('admin/careers/{career:slug}', [\App\Http\Controllers\Admin\CareerController::class, 'destroy'])->name('admin.careers.destroy');

    // News Categories Management (must be before news routes to avoid slug conflict)
    Route::get('admin/news/categories', [\App\Http\Controllers\Admin\NewsCategoryController::class, 'index'])->name('admin.news.categories.index');
    Route::get('admin/news/categories/create', [\App\Http\Controllers\Admin\NewsCategoryController::class, 'create'])->name('admin.news.categories.create');
    Route::post('admin/news/categories', [\App\Http\Controllers\Admin\NewsCategoryController::class, 'store'])->name('admin.news.categories.store');
    Route::get('admin/news/categories/{category}/edit', [\App\Http\Controllers\Admin\NewsCategoryController::class, 'edit'])->name('admin.news.categories.edit');
    Route::put('admin/news/categories/{category}', [\App\Http\Controllers\Admin\NewsCategoryController::class, 'update'])->name('admin.news.categories.update');
    Route::delete('admin/news/categories/{category}', [\App\Http\Controllers\Admin\NewsCategoryController::class, 'destroy'])->name('admin.news.categories.destroy');

    // News Tags Management
    Route::get('admin/news/tags', [\App\Http\Controllers\Admin\NewsTagController::class, 'index'])->name('admin.news.tags.index');
    Route::get('admin/news/tags/create', [\App\Http\Controllers\Admin\NewsTagController::class, 'create'])->name('admin.news.tags.create');
    Route::post('admin/news/tags', [\App\Http\Controllers\Admin\NewsTagController::class, 'store'])->name('admin.news.tags.store');
    Route::get('admin/news/tags/{tag}/edit', [\App\Http\Controllers\Admin\NewsTagController::class, 'edit'])->name('admin.news.tags.edit');
    Route::put('admin/news/tags/{tag}', [\App\Http\Controllers\Admin\NewsTagController::class, 'update'])->name('admin.news.tags.update');
    Route::delete('admin/news/tags/{tag}', [\App\Http\Controllers\Admin\NewsTagController::class, 'destroy'])->name('admin.news.tags.destroy');

    // News Management
    Route::get('admin/news', [\App\Http\Controllers\Admin\NewsController::class, 'index'])->name('admin.news.index');
    Route::get('admin/news/create', [\App\Http\Controllers\Admin\NewsController::class, 'create'])->name('admin.news.create');
    Route::post('admin/news', [\App\Http\Controllers\Admin\NewsController::class, 'store'])->name('admin.news.store');
    Route::get('admin/news/{news:slug}', [\App\Http\Controllers\Admin\NewsController::class, 'show'])->name('admin.news.show');
    Route::get('admin/news/{news:slug}/edit', [\App\Http\Controllers\Admin\NewsController::class, 'edit'])->name('admin.news.edit');
    Route::put('admin/news/{news:slug}', [\App\Http\Controllers\Admin\NewsController::class, 'update'])->name('admin.news.update');
    Route::delete('admin/news/{news:slug}', [\App\Http\Controllers\Admin\NewsController::class, 'destroy'])->name('admin.news.destroy');

    // Contacts Management
    Route::get('admin/contacts', [\App\Http\Controllers\Admin\ContactController::class, 'index'])->name('admin.contacts.index');
    Route::get('admin/contacts/{contact}', [\App\Http\Controllers\Admin\ContactController::class, 'show'])->name('admin.contacts.show');
    Route::put('admin/contacts/{contact}/status', [\App\Http\Controllers\Admin\ContactController::class, 'updateStatus'])->name('admin.contacts.update-status');
    Route::delete('admin/contacts/{contact}', [\App\Http\Controllers\Admin\ContactController::class, 'destroy'])->name('admin.contacts.destroy');
    Route::post('admin/contacts/bulk-delete', [\App\Http\Controllers\Admin\ContactController::class, 'bulkDelete'])->name('admin.contacts.bulk-delete');
});
Route::post('/admin/upload-image', [ImageUploadController::class, 'upload'])->name('admin.upload-image');
