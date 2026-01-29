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
            <div class="col-xl-4 col-md-6">
                <div class="project-card style-four bg-3 position-relative overflow-hidden z-1 round-10 mb-45">
                    <span class="project-status transition">Under Construction</span>
                    <span class="project-counter text-center font-secondary fw-semibold d-block lh-1 transition">01</span>
                    <div class="project-title d-flex flex-wrap align-items-center justify-content-between">
                        <h3 class="fs-24 fw-semibold mb-0"><a href="project-single.html"
                                class="text-title hover-text-primary transition">Greenview Apartments</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="project-card style-four bg-3 position-relative overflow-hidden z-1 round-10 mb-45">
                    <span class="project-status transition">Completed</span>
                    <span class="project-counter text-center font-secondary fw-semibold d-block lh-1 transition">02</span>
                    <div class="project-title d-flex flex-wrap align-items-center justify-content-between">
                        <h3 class="fs-24 fw-semibold mb-0"><a href="project-single.html"
                                class="text-title hover-text-primary transition">Premier Office Tower</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="project-card style-four bg-3 position-relative overflow-hidden z-1 round-10 mb-45">
                    <span class="project-status transition">Under Construction</span>
                    <span class="project-counter text-center font-secondary fw-semibold d-block lh-1 transition">03</span>
                    <div class="project-title d-flex flex-wrap align-items-center justify-content-between">
                        <h3 class="fs-24 fw-semibold mb-0"><a href="project-single.html"
                                class="text-title hover-text-primary transition">Urban height Residence</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="project-card style-four bg-3 position-relative overflow-hidden z-1 round-10 mb-45">
                    <span class="project-status transition">Completed</span>
                    <span class="project-counter text-center font-secondary fw-semibold d-block lh-1 transition">04</span>
                    <div class="project-title d-flex flex-wrap align-items-center justify-content-between">
                        <h3 class="fs-24 fw-semibold mb-0"><a href="project-single.html"
                                class="text-title hover-text-primary transition">Hitech Eco Tower</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="project-card style-four bg-3 position-relative overflow-hidden z-1 round-10 mb-45">
                    <span class="project-status transition">Under Construction</span>
                    <span class="project-counter text-center font-secondary fw-semibold d-block lh-1 transition">05</span>
                    <div class="project-title d-flex flex-wrap align-items-center justify-content-between">
                        <h3 class="fs-24 fw-semibold mb-0"><a href="project-single.html"
                                class="text-title hover-text-primary transition">St. Height Residence</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="project-card style-four bg-3 position-relative overflow-hidden z-1 round-10 mb-45">
                    <span class="project-status transition">Completed</span>
                    <span class="project-counter text-center font-secondary fw-semibold d-block lh-1 transition">06</span>
                    <div class="project-title d-flex flex-wrap align-items-center justify-content-between">
                        <h3 class="fs-24 fw-semibold mb-0"><a href="project-single.html"
                                class="text-title hover-text-primary transition">Turkin Tower</a></h3>
                    </div>
                </div>
            </div>
        </div>
        <ul class="page-nav pagination justify-content-center mb-0 mt-lg-4">
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
        </ul>
    </div>

    <!-- Project Section End -->
@endsection
