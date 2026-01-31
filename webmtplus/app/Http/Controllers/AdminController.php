<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('backend.pages.dashboard');
    }

    public function contentSetupHome()
    {
        return view('backend.pages.home.index');
    }
}
