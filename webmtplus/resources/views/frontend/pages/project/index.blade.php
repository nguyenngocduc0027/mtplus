@extends('frontend.layouts.app')
@props([
    'pageTitle' => __('common.project'),
    'hidden' => true,
    'headerClass' => 'style-four',
    'logo' => '/frontend/assets/img/logo.png',
])
@section('content')
    <x-common.breadcrumb breadcrumbTitle="{{ __('common.project') }}" />
    <!-- Project Section Start -->
    <div class="container ptb-120">
        <div class="row justify-content-center">
            @php
                $projects = [
                    [
                        'nameProject' => 'Metasoftware Building',
                        'counter' => '01',
                        'status' => 'Completed',
                        'linkProject' => route('detail-project'),
                    ],
                    [
                        'nameProject' => 'Metasoftware Office',
                        'counter' => '02',
                        'status' => 'In Progress',
                        'linkProject' => route('detail-project'),
                    ],
                    [
                        'nameProject' => 'Metasoftware Headquarters',
                        'counter' => '03',
                        'status' => 'Completed',
                        'linkProject' => route('detail-project'),
                    ],
                    [
                        'nameProject' => 'Metasoftware Building',
                        'counter' => '04',
                        'status' => 'Completed',
                        'linkProject' => route('detail-project'),
                    ],
                    [
                        'nameProject' => 'Metasoftware Office',
                        'counter' => '05',
                        'status' => 'In Progress',
                        'linkProject' => route('detail-project'),
                    ],
                    [
                        'nameProject' => 'Metasoftware Headquarters',
                        'counter' => '06',
                        'status' => 'Completed',
                        'linkProject' => route('detail-project'),
                    ],
                    [
                        'nameProject' => 'Metasoftware Building',
                        'counter' => '07',
                        'status' => 'Completed',
                        'linkProject' => route('detail-project'),
                    ],
                    [
                        'nameProject' => 'Metasoftware Office',
                        'counter' => '08',
                        'status' => 'In Progress',
                        'linkProject' => route('detail-project'),
                    ],
                    [
                        'nameProject' => 'Metasoftware Headquarters',
                        'counter' => '09',
                        'status' => 'Completed',
                        'linkProject' => route('detail-project'),
                    ],
                ];
            @endphp
            @foreach ($projects as $project)
                <x-ui.item-project :nameProject="$project['nameProject']" :counter="$project['counter']"
                    :status="$project['status']" :linkProject="$project['linkProject']" />
            @endforeach
        </div>
        {{-- <ul class="page-nav pagination justify-content-center mb-0 mt-lg-4">
            <li class="page-item">
                <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                    href="projects.html" aria-label="Previous">
                    <img src="/frontend/assets/img/icons/left-long-arrow-gray.svg" alt="Icon">
                </a>
            </li>
            <li class="page-item"><a
                    class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle active"
                    href="projects.html">01</a></li>
            <li class="page-item"><a
                    class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                    href="projects.html">02</a></li>
            <li class="page-item"><a
                    class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                    href="projects.html">03</a></li>
            <li class="page-item">
                <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                    href="projects.html" aria-label="Next">
                    <img src="/frontend/assets/img/icons/right-long-arrow-gray.svg" alt="Icon">
                </a>
            </li>
        </ul> --}}
    </div>

    <!-- Project Section End -->
@endsection
