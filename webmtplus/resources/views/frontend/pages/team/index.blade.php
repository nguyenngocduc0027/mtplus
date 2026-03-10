@extends('frontend.layouts.app')
@props([
    'pageTitle' => __('common.team'),
    'hidden' => true,
    'headerClass' => 'style-four',
    'logo' => '/frontend/assets/img/logo.png',
])
@section('content')
    <x-common.breadcrumb breadcrumbTitle="{{ __('common.team') }}" />

    <!-- About Section Start - Featured Member (CEO) -->
    @if($featuredMember)
        <div class="about-area style-one position-relative z-1 ptb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-5 col-lg-5">
                        <div class="about-img-wrap position-relative z-1 mb-md-30">
                            <img src="{{ $featuredMember->photo }}" alt="{{ $featuredMember->name }}"
                                 class="d-block tilt-img mx-auto object-fit-cover">
                            <img src="/frontend/assets/img/about/shape-1.png" alt="Shape"
                                class="about-shape position-absolute top-0 z-n1">
                        </div>
                    </div>
                    <div class="col-xxl-6 offset-xxl-1 col-lg-7 ps-xxl-3 ps-xl-4">
                        <div class="about-content position-relative">
                            <h5 class="style-two fs-16 ls-1 font-optional fw-bold text_primary mb-20">
                                {{ $featuredMember->getPosition() }}
                            </h5>
                            <h2 class="section-title style-one fw-normal text-title">
                                <a href="{{ route('team.detail', $featuredMember->slug) }}" class="text-title link-hover-primary transition">
                                    {{ $featuredMember->name }}
                                </a>
                            </h2>
                            <p class="mb-28">{{ $featuredMember->getBio() }}</p>
                            @if($featuredMember->getExperienceList())
                                <div class="row gx-xxl-45">
                                    @foreach($featuredMember->getExperienceList() as $experience)
                                        <div class="col-sm-6 mb-2">
                                            <div class="feature-item position-relative">
                                                <img src="/frontend/assets/img/about/feature-icon-{{ ($loop->index % 4) + 1 }}.png"
                                                     alt="Icon" class="feature-icon">
                                                <h3 class="fs-16 fw-semibold mt-2">{{ $experience }}</h3>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- About Section End -->

    <!-- Team Section Start -->
    @if($teamMembers->count() > 0)
        <div class="team-area style-one position-relative ptb-20">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach($teamMembers as $member)
                        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                            <div class="team-card style-one img-hover-zoom mb-45">
                               
                                    <div class="team-img round-10 img-zoom position-relative overflow-hidden">
                                        <img src="{{ $member->photo }}" alt="{{ $member->name }}"
                                            class="position-absolute top-0 bottom-0 start-0 end-0 z-1 round-10 transition object-fit-cover">
                                        <img src="{{ $member->photo }}" alt="{{ $member->name }}" class="round-10 transition">
                                    </div>
                               
                                <div class="team-info d-flex flex-wrap justify-content-between">
                                    <div>
                                        <h3 class="fw-bold mb-1">
                                           <di
                                               class="text-title link-hover-primary transition">{{ $member->name }}</di>
                                        </h3>
                                        <span>{{ $member->getPosition() }}</span>
                                    </div>
                                    <ul class="social-profile style-two list-unstyled mb-0">
                                        @if($member->facebook_url)
                                            <li><a href="{{ $member->facebook_url }}" target="_blank"
                                                    class="d-flex flex-column align-items-center justify-content-center rounded-circle">
                                                    <i class="ri-facebook-fill"></i></a>
                                            </li>
                                        @endif
                                        @if($member->twitter_url)
                                            <li><a href="{{ $member->twitter_url }}" target="_blank"
                                                    class="d-flex flex-column align-items-center justify-content-center rounded-circle">
                                                    <i class="ri-twitter-x-line"></i></a>
                                            </li>
                                        @endif
                                        @if($member->linkedin_url)
                                            <li><a href="{{ $member->linkedin_url }}" target="_blank"
                                                    class="d-flex flex-column align-items-center justify-content-center rounded-circle">
                                                    <i class="ri-linkedin-fill"></i></a>
                                            </li>
                                        @endif
                                        @if($member->instagram_url)
                                            <li><a href="{{ $member->instagram_url }}" target="_blank"
                                                    class="d-flex flex-column align-items-center justify-content-center rounded-circle">
                                                    <i class="ri-instagram-line"></i></a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <!-- Team Section End -->
@endsection
