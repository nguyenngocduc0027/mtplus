<?php

namespace App\Http\Controllers;

use App\Models\AboutContent;
use App\Models\CoreValuesContent;
use App\Models\MissionContent;
use App\Models\VisionContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function home()
    {
        $locale = app()->getLocale();
        $aboutContent = AboutContent::where('locale', $locale)->first();

        // Fallback to Vietnamese if content not found
        if (!$aboutContent) {
            $aboutContent = AboutContent::where('locale', 'vi')->first();
        }

        return view('frontend.pages.home.index', compact('aboutContent'));
    }

    public function areasOfOperation()
    {
        return view('frontend.pages.about.areas-operation');
    }

    public function mission()
    {
        $locale = app()->getLocale();
        $aboutContent = AboutContent::where('locale', $locale)->first();
        $missionContent = MissionContent::where('locale', $locale)->first();

        // Fallback to Vietnamese if content not found
        if (!$aboutContent) {
            $aboutContent = AboutContent::where('locale', 'vi')->first();
        }
        if (!$missionContent) {
            $missionContent = MissionContent::where('locale', 'vi')->first();
        }

        return view('frontend.pages.about.mission', [
            'aboutContent' => $aboutContent,
            'missionContent' => $missionContent
        ]);
    }

    public function vision()
    {
        $locale = app()->getLocale();
        $aboutContent = AboutContent::where('locale', $locale)->first();
        $visionContent = VisionContent::where('locale', $locale)->first();

        // Fallback to Vietnamese if content not found
        if (!$aboutContent) {
            $aboutContent = AboutContent::where('locale', 'vi')->first();
        }
        if (!$visionContent) {
            $visionContent = VisionContent::where('locale', 'vi')->first();
        }

        return view('frontend.pages.about.vision', [
            'aboutContent' => $aboutContent,
            'visionContent' => $visionContent
        ]);
    }

    public function coreValues()
    {
        $locale = app()->getLocale();
        $aboutContent = AboutContent::where('locale', $locale)->first();
        $coreValuesContent = CoreValuesContent::where('locale', $locale)->first();

        // Fallback to Vietnamese if content not found
        if (!$aboutContent) {
            $aboutContent = AboutContent::where('locale', 'vi')->first();
        }
        if (!$coreValuesContent) {
            $coreValuesContent = CoreValuesContent::where('locale', 'vi')->first();
        }

        return view('frontend.pages.about.core-values', compact('aboutContent', 'coreValuesContent'));
    }

    public function capabilitiesAndExperience()
    {
        $locale = app()->getLocale();
        $aboutContent = AboutContent::where('locale', $locale)->first();

        // Fallback to Vietnamese if content not found
        if (!$aboutContent) {
            $aboutContent = AboutContent::where('locale', 'vi')->first();
        }

        return view('frontend.pages.about.capabilities-and-experience', compact('aboutContent'));
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
