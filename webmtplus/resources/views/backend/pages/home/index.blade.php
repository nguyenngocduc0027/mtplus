@extends('backend.layouts.app')
@props(['pageTitle' => __('admin.content-setup.home')])
@push('styles')
    <style>
        .language-tabs {
            border-bottom: 2px solid #e0e0e0;
            margin-bottom: 20px;
        }

        .language-tabs .nav-link {
            border: none;
            color: #666;
            padding: 10px 20px;
            cursor: pointer;
        }

        .language-tabs .nav-link.active {
            border-bottom: 3px solid #007bff;
            color: #007bff;
            font-weight: bold;
        }

        .image-preview {
            max-width: 300px;
            margin-top: 10px;
            border: 1px solid #ddd;
            padding: 5px;
            border-radius: 4px;
        }
    </style>
@endpush
@section('content-backend')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 mt-1">
        <h3 class="mb-0">{{ $pageTitle }}</h3>
        <x-admin.ui.breadcrumb :pageTitle="$pageTitle" />
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card bg-white border border-white rounded-10 p-20">

        <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="hero-tab" data-bs-toggle="tab" data-bs-target="#hero-tab-pane"
                    type="button" role="tab" aria-controls="hero-tab-pane" aria-selected="true">Hero</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="about-tab" data-bs-toggle="tab" data-bs-target="#about-tab-pane" type="button"
                    role="tab" aria-controls="about-tab-pane" aria-selected="true">About</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="services-tab" data-bs-toggle="tab" data-bs-target="#services-tab-pane"
                    type="button" role="tab" aria-controls="services-tab-pane" aria-selected="true">Services</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="why-choose-tab" data-bs-toggle="tab" data-bs-target="#why-choose-tab-pane"
                    type="button" role="tab" aria-controls="why-choose-tab-pane" aria-selected="true">Why Choose
                    Us</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="commitment-tab" data-bs-toggle="tab" data-bs-target="#commitment-tab-pane"
                    type="button" role="tab" aria-controls="commitment-tab-pane"
                    aria-selected="true">Commitment</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="project-tab" data-bs-toggle="tab" data-bs-target="#project-tab-pane"
                    type="button" role="tab" aria-controls="project-tab-pane" aria-selected="true">Project</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="team-tab" data-bs-toggle="tab" data-bs-target="#team-tab-pane" type="button"
                    role="tab" aria-controls="team-tab-pane" aria-selected="true">Team</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="awards-tab" data-bs-toggle="tab" data-bs-target="#awards-tab-pane"
                    type="button" role="tab" aria-controls="awards-tab-pane" aria-selected="true">Awards</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="testimonials-tab" data-bs-toggle="tab" data-bs-target="#testimonials-tab-pane"
                    type="button" role="tab" aria-controls="testimonials-tab-pane"
                    aria-selected="true">Testimonials</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="news-tab" data-bs-toggle="tab" data-bs-target="#news-tab-pane"
                    type="button" role="tab" aria-controls="news-tab-pane" aria-selected="true">News</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                    type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="true">Contact</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="hero-tab-pane" role="tabpanel" aria-labelledby="hero-tab"
                tabindex="0">
                @include('backend.pages.home.partials.hero-form')
            </div>
            <div class="tab-pane fade show" id="about-tab-pane" role="tabpanel" aria-labelledby="about-tab"
                tabindex="0">
                @include('backend.pages.home.partials.about-form')
            </div>
            <div class="tab-pane fade show" id="services-tab-pane" role="tabpanel" aria-labelledby="services-tab"
                tabindex="0">
                @include('backend.pages.home.partials.services-form')
            </div>
            <div class="tab-pane fade show" id="why-choose-tab-pane" role="tabpanel" aria-labelledby="why-choose-tab"
                tabindex="0">
                @include('backend.pages.home.partials.why-choose-form')
            </div>
            <div class="tab-pane fade show" id="commitment-tab-pane" role="tabpanel" aria-labelledby="commitment-tab"
                tabindex="0">
                @include('backend.pages.home.partials.commitment-form')
            </div>
            <div class="tab-pane fade show" id="project-tab-pane" role="tabpanel" aria-labelledby="project-tab"
                tabindex="0">
                @include('backend.pages.home.partials.project-form')
            </div>
            <div class="tab-pane fade show" id="team-tab-pane" role="tabpanel" aria-labelledby="team-tab"
                tabindex="0">
                @include('backend.pages.home.partials.team-form')
            </div>
            <div class="tab-pane fade show" id="awards-tab-pane" role="tabpanel" aria-labelledby="awards-tab"
                tabindex="0">
                <p>This is some placeholder content the Awards tab's associated content. Clicking another tab will toggle
                    the visibility of this one for the next. The tab JavaScript swaps classes to control the content
                    visibility
                    and styling. You can use it with tabs, pills, and any other .nav-powered navigation.</p>
            </div>
            <div class="tab-pane fade show" id="testimonials-tab-pane" role="tabpanel"
                aria-labelledby="testimonials-tab" tabindex="0">
                <p>This is some placeholder content the Testimonials tab's associated content. Clicking another tab will
                    toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content
                    visibility and styling. You can use it with tabs, pills, and any other .nav-powered navigation.</p>
            </div>
            <div class="tab-pane fade show" id="news-tab-pane" role="tabpanel" aria-labelledby="news-tab"
                tabindex="0">
                <p>This is some placeholder content the News tab's associated content. Clicking another tab will toggle the
                    visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility
                    and styling. You can use it with tabs, pills, and any other .nav-powered navigation.</p>
            </div>
            <div class="tab-pane fade show" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                tabindex="0">
                <p>This is some placeholder content the Contact tab's associated content. Clicking another tab will toggle
                    the visibility of this one for the next. The tab JavaScript swaps classes to control the content
                    visibility
                    and styling. You can use it with tabs, pills, and any other .nav-powered navigation.</p>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        function previewImage(input, previewId) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById(previewId).src = e.target.result;
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endpush
