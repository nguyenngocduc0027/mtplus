@extends('backend.layouts.app')
@props(['pageTitle' => 'Areas of Operation Management'])
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
                <button class="nav-link active" id="section1-tab" data-bs-toggle="tab" data-bs-target="#section1-tab-pane"
                    type="button" role="tab" aria-controls="section1-tab-pane" aria-selected="true">Section 1</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="section2-tab" data-bs-toggle="tab" data-bs-target="#section2-tab-pane"
                    type="button" role="tab" aria-controls="section2-tab-pane" aria-selected="false">Section 2</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="section3-tab" data-bs-toggle="tab" data-bs-target="#section3-tab-pane"
                    type="button" role="tab" aria-controls="section3-tab-pane" aria-selected="false">Section 3</button>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="section1-tab-pane" role="tabpanel" aria-labelledby="section1-tab"
                tabindex="0">
                @include('backend.pages.areas-operation.partials.section-form', ['section' => $section1, 'sectionNumber' => 1])
            </div>
            <div class="tab-pane fade" id="section2-tab-pane" role="tabpanel" aria-labelledby="section2-tab"
                tabindex="0">
                @include('backend.pages.areas-operation.partials.section-form', ['section' => $section2, 'sectionNumber' => 2])
            </div>
            <div class="tab-pane fade" id="section3-tab-pane" role="tabpanel" aria-labelledby="section3-tab"
                tabindex="0">
                @include('backend.pages.areas-operation.partials.section-form', ['section' => $section3, 'sectionNumber' => 3])
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
