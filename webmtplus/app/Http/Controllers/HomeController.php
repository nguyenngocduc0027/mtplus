<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.pages.home.index');
    }

    public function areasOfOperation()
    {
        return view('frontend.pages.about.areas-operation');
    }

    public function mission()
    {
        return view('frontend.pages.about.mission');
    }

    public function vision()
    {
        return view('frontend.pages.about.vision');
    }

    public function coreValues()
    {
        return view('frontend.pages.about.core-values');
    }

    public function capabilitiesAndExperience()
    {
        return view('frontend.pages.about.capabilities-and-experience');
    }

    public function team()
    {
        return view('frontend.pages.team.index');
    }

    public function service()
    {
        return view('frontend.pages.service.index');
    }

    public function project()
    {
        return view('frontend.pages.project.index');
    }

    public function detailProject()
    {
        return view('frontend.pages.project.detail-project');
    }

    public function news()
    {
        return view('frontend.pages.news.index');
    }
}
