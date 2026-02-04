<?php

namespace App\Http\Controllers;

use App\Models\AboutContent;
use App\Models\CoreValuesContent;
use App\Models\MissionContent;
use App\Models\VisionContent;
use App\Models\HomeProjectSection;
use App\Models\HomeTeamSection;
use App\Models\HomeAwardsSection;
use App\Models\HomeTestimonialsSection;
use App\Models\HomeNewsSection;
use App\Models\HomeContactSection;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function home()
    {
        $projectSection = HomeProjectSection::where('is_active', true)->first();
        $teamSection = HomeTeamSection::where('is_active', true)->first();
        $awardsSection = HomeAwardsSection::where('is_active', true)->first();
        $testimonialsSection = HomeTestimonialsSection::where('is_active', true)->first();
        $newsSection = HomeNewsSection::where('is_active', true)->first();
        $contactSection = HomeContactSection::where('is_active', true)->first();
        return view('frontend.pages.home.index', compact('projectSection', 'teamSection', 'awardsSection', 'testimonialsSection', 'newsSection', 'contactSection'));
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
        $featuredMember = TeamMember::active()->featured()->first();
        $teamMembers = TeamMember::active()->where('is_featured', false)->ordered()->get();
        return view('frontend.pages.team.index', compact('featuredMember', 'teamMembers'));
    }

    public function teamDetail($slug)
    {
        $member = TeamMember::active()->where('slug', $slug)->firstOrFail();
        return view('frontend.pages.team.detail', compact('member'));
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
