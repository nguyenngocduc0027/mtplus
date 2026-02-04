<?php

namespace App\Http\Controllers;

use App\Models\AboutContent;
use App\Models\CoreValuesContent;
use App\Models\MissionContent;
use App\Models\VisionContent;
use App\Models\HomeProjectSection;
use App\Models\HomeTeamSection;
use App\Models\HomeAwardsSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function home()
    {
        $projectSection = HomeProjectSection::where('is_active', true)->first();
        $teamSection = HomeTeamSection::where('is_active', true)->first();
        $awardsSection = HomeAwardsSection::where('is_active', true)->first();
        return view('frontend.pages.home.index', compact('projectSection', 'teamSection', 'awardsSection'));
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

    public function detailNews()
    {
        return view('frontend.pages.news.detail-news');
    }

    public function career()
    {
        return view('frontend.pages.career.index');
    }

    public function careerDetail()
    {
        return view('frontend.pages.career.detailCareer');
    }

    public function contact()
    {
        return view('frontend.pages.contact.index');
    }
}
