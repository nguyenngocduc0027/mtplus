<?php

namespace App\Http\Controllers;

use App\Models\AboutContent;
use App\Models\CoreValuesContent;
use App\Models\MissionContent;
use App\Models\VisionContent;
use App\Models\CapabilitiesContent;
use App\Models\HomeProjectSection;
use App\Models\HomeTeamSection;
use App\Models\HomeAwardsSection;
use App\Models\HomeTestimonialsSection;
use App\Models\HomeNewsSection;
use App\Models\HomeContactSection;
use App\Models\TeamMember;
use App\Models\AreasOperationSection;
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
        $sections = AreasOperationSection::orderBy('section_number')->get();
        return view('frontend.pages.about.areas-operation', compact('sections'));
    }

    public function mission()
    {
        $missionContent = MissionContent::first();
        return view('frontend.pages.about.mission', compact('missionContent'));
    }

    public function vision()
    {
        $visionContent = VisionContent::first();
        return view('frontend.pages.about.vision', compact('visionContent'));
    }

    public function coreValues()
    {
        $coreValuesContent = CoreValuesContent::first();
        return view('frontend.pages.about.core-values', compact('coreValuesContent'));
    }

    public function capabilitiesAndExperience()
    {
        $capabilitiesContent = CapabilitiesContent::first();
        return view('frontend.pages.about.capabilities-and-experience', compact('capabilitiesContent'));
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

    public function service($slug)
    {
        $service = \App\Models\Service::active()->where('slug', $slug)->firstOrFail();
        return view('frontend.pages.service.index', compact('service'));
    }

    public function project()
    {
        $projects = \App\Models\Project::active()->ordered()->paginate(9);
        return view('frontend.pages.project.index', compact('projects'));
    }

    public function detailProject(\App\Models\Project $project)
    {
        return view('frontend.pages.project.detail-project', compact('project'));
    }

    public function news(Request $request)
    {
        $query = \App\Models\News::with(['category', 'tags'])
            ->active()
            ->published();

        // Filter by category slug
        if ($request->filled('category')) {
            $query->whereHas('category', function($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        // Filter by tag slug
        if ($request->filled('tag')) {
            $query->whereHas('tags', function($q) use ($request) {
                $q->where('news_tags.slug', $request->tag);
            });
        }

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title_vi', 'like', "%{$search}%")
                  ->orWhere('title_en', 'like', "%{$search}%")
                  ->orWhere('excerpt_vi', 'like', "%{$search}%")
                  ->orWhere('excerpt_en', 'like', "%{$search}%");
            });
        }

        $news = $query->latest('published_at')->paginate(9);
        $categories = \App\Models\NewsCategory::active()->ordered()->get();
        $tags = \App\Models\NewsTag::all();
        $featuredNews = \App\Models\News::active()->published()->featured()->latest('published_at')->take(3)->get();

        return view('frontend.pages.news.index', compact('news', 'categories', 'tags', 'featuredNews'));
    }

    public function detailNews($slug)
    {
        $news = \App\Models\News::where('slug', $slug)
            ->active()
            ->published()
            ->firstOrFail();

        // Increment view count
        $news->incrementViewCount();

        // Load relationships
        $news->load(['category', 'tags', 'comments' => function($query) {
            $query->approved()->topLevel()->recent();
        }]);

        // Get related news (same category)
        $relatedNews = \App\Models\News::where('category_id', $news->category_id)
            ->where('id', '!=', $news->id)
            ->active()
            ->published()
            ->latest('published_at')
            ->take(3)
            ->get();

        // Get data for sidebar
        $categories = \App\Models\NewsCategory::active()->ordered()->get();
        $tags = \App\Models\NewsTag::all();
        $featuredNews = \App\Models\News::active()->published()->featured()->latest('published_at')->take(5)->get();

        return view('frontend.pages.news.detail-news', compact('news', 'relatedNews', 'categories', 'tags', 'featuredNews'));
    }

    public function career()
    {
        $careers = \App\Models\Career::active()->open()->ordered()->paginate(9);
        return view('frontend.pages.career.index', compact('careers'));
    }

    public function careerDetail($slug)
    {
        $career = \App\Models\Career::active()->where('slug', $slug)->firstOrFail();
        return view('frontend.pages.career.detailCareer', compact('career'));
    }

    public function contact()
    {
        return view('frontend.pages.contact.index');
    }
}
