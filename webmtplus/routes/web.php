<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home.index');
})->name('home');
Route::get('/contact', function () {
    return view('frontend.contact.index');
})->name('contact');


Route::prefix('/blogs')->group(function () {
    Route::get('/', function () {
        return view('frontend.blogs.index');
    })->name('blogs.index');
     Route::get('/chi-tiet', function () {
        return view('frontend.blogs.detail');
    })->name('blogs.detail');
});
Route::prefix('/projects')->group(function () {
    Route::get('/', function () {
        return view('frontend.projects.index');
    })->name('projects.index');
     Route::get('/chi-tiet', function () {
        return view('frontend.projects.detail');
    })->name('projects.detail');
});
Route::prefix('/properties')->group(function () {
    Route::get('/', function () {
        return view('frontend.properties.index');
    })->name('properties.index');
     Route::get('/chi-tiet', function () {
        return view('frontend.properties.detail');
    })->name('properties.detail');
});

Route::prefix('/services')->group(function () {
    Route::get('/', function () {
        return view('frontend.pages.services.index');
    })->name('services.index');
    Route::get('/chi-tiet', function () {
        return view('frontend.pages.services.detail');
    })->name('services.detail');
});
Route::prefix('/team')->group(function () {
    Route::get('/', function () {
        return view('frontend.pages.team.index');
    })->name('team.index');
    Route::get('/chi-tiet', function () {
        return view('frontend.pages.team.detail');
    })->name('team.detail');
});
Route::prefix('/careers')->group(function () {
    Route::get('/', function () {
        return view('frontend.pages.careers.index');
    })->name('careers.index');
    Route::get('/chi-tiet', function () {
        return view('frontend.pages.careers.detail');
    })->name('careers.detail');
});
Route::get('/abouts', function () {
    return view('frontend.pages.about.index');
})->name('abouts.index');

Route::get('/awards', function () {
    return view('frontend.pages.awards.index');
})->name('awards.index');

Route::get('/location', function () {
    return view('frontend.pages.location.index');
})->name('location.index');

Route::get('/pricing-plan', function () {
    return view('frontend.pages.pricing_plan.index');
})->name('pricingplan.index');

Route::get('/testimonials', function () {
    return view('frontend.pages.testimonials.index');
})->name('testimonials.index');

Route::get('/faqs', function () {
    return view('frontend.pages.faqs.index');
})->name('faqs.index');

Route::get('/terms-conditions', function () {
    return view('frontend.pages.terms_conditions.index');
})->name('termsconditions.index');

Route::get('/privacy-policy', function () {
    return view('frontend.pages.privacy_policy.index');
})->name('privacypolicy.index');
Route::get('/404-not-found', function () {
    return view('frontend.pages.404.index');
})->name('notfound.index');