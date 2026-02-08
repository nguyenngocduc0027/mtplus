@extends('backend.layouts.app')
@props(['pageTitle' => __('admin.news_tags.create_tag')])
@section('content-backend')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 mt-1">
        <h3 class="mb-0">{{ $pageTitle }}</h3>
        <x-admin.ui.breadcrumb :pageTitle="$pageTitle" />
    </div>

    <form action="{{ route('admin.news.tags.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card bg-white rounded-10 border border-white mb-4">
                    <div class="card-header bg-transparent border-bottom p-20">
                        <h5 class="mb-0">{{ __('admin.news_tags.tag_information') }}</h5>
                    </div>
                    <div class="card-body p-20">
                        <!-- Language Tabs -->
                        <ul class="nav nav-tabs mb-3" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="vi-tab" data-bs-toggle="tab" data-bs-target="#vi-content" type="button" role="tab">
                                    <i class="ri-flag-fill"></i> Tiếng Việt
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="en-tab" data-bs-toggle="tab" data-bs-target="#en-content" type="button" role="tab">
                                    <i class="ri-flag-line"></i> English
                                </button>
                            </li>
                        </ul>

                        <!-- Tab Content -->
                        <div class="tab-content">
                            <!-- Vietnamese Content -->
                            <div class="tab-pane fade show active" id="vi-content" role="tabpanel">
                                <div class="mb-0">
                                    <label class="form-label">{{ __('admin.news_tags.name_vi') }} <span class="text-danger">*</span></label>
                                    <input type="text" name="name_vi" class="form-control @error('name_vi') is-invalid @enderror" value="{{ old('name_vi') }}" required>
                                    @error('name_vi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- English Content -->
                            <div class="tab-pane fade" id="en-content" role="tabpanel">
                                <div class="mb-0">
                                    <label class="form-label">{{ __('admin.news_tags.name_en') }} <span class="text-danger">*</span></label>
                                    <input type="text" name="name_en" class="form-control @error('name_en') is-invalid @enderror" value="{{ old('name_en') }}" required>
                                    @error('name_en')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Actions -->
                <div class="card bg-white rounded-10 border border-white mb-4">
                    <div class="card-body p-20">
                        <button type="submit" class="btn btn-primary me-2">
                            <i class="ri-save-line"></i> {{ __('admin.news_tags.save') }}
                        </button>
                        <a href="{{ route('admin.news.tags.index') }}" class="btn btn-secondary">
                            <i class="ri-arrow-left-line"></i> {{ __('admin.news_tags.back') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
