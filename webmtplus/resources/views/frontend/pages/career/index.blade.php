@extends('frontend.layouts.app')
@props([
    'pageTitle' => __('common.career'),
    'hidden' => true,
    'headerClass' => 'style-four',
    'logo' => '/frontend/assets/img/logo.png',
])
@section('content')
    <x-common.breadcrumb breadcrumbTitle="{{ __('common.career') }}" />
    <!-- Career Section Start -->
    <div class="container ptb-120">
        <div class="row justify-content-center">
            @php
                $careers = [
                    [
                        'title' => 'Real Estate Sales Associates',
                        'location' => 'Lagos, Nigeria',
                        'type' => 'Full-Time',
                        'experience' => '4+ Years',
                        'salary' => '50K',
                        'linkCareer' => route('detail-career'),
                    ],
                    [
                        'title' => 'Marketing Manager',
                        'location' => 'Abuja, Nigeria',
                        'type' => 'Part-Time',
                        'experience' => '3+ Years',
                        'salary' => '40K',
                        'linkCareer' => route('detail-career'),
                    ],
                    [
                        'title' => 'Software Developer',
                        'location' => 'Remote',
                        'type' => 'Contract',
                        'experience' => '5+ Years',
                        'salary' => '60K',
                        'linkCareer' => route('detail-career'),
                    ],
                ];
            @endphp
            @foreach ($careers as $career)
                <x-ui.item-career
                    :title="$career['title']"
                    :location="$career['location']"
                    :type="$career['type']"
                    :experience="$career['experience']"
                    :salary="$career['salary']"
                    :linkCareer="$career['linkCareer']"
                />
            @endforeach
        </div>
        {{-- <ul class="page-nav pagination justify-content-center mb-0 mt-lg-5">
            <li class="page-item">
                <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                    href="careers.html" aria-label="Previous">
                    <img src="/frontend/assets/img/icons/left-long-arrow-gray.svg" alt="Icon">
                </a>
            </li>
            <li class="page-item"><a
                    class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle active"
                    href="careers.html">01</a></li>
            <li class="page-item"><a
                    class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                    href="careers.html">02</a></li>
            <li class="page-item"><a
                    class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                    href="careers.html">03</a></li>
            <li class="page-item">
                <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                    href="careers.html" aria-label="Next">
                    <img src="/frontend/assets/img/icons/right-long-arrow-gray.svg" alt="Icon">
                </a>
            </li>
        </ul> --}}
    </div>
    <!-- Career Section End -->
@endsection
