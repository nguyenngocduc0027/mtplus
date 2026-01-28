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
