@extends('backend.layouts.app')
@props(['pageTitle' => __('admin.news_categories.create_category')])
@section('content-backend')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 mt-1">
        <h3 class="mb-0">{{ $pageTitle }}</h3>
        <x-admin.ui.breadcrumb :pageTitle="$pageTitle" />
    </div>

    <form action="{{ route('admin.news.categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-8">
                <div class="card bg-white rounded-10 border border-white mb-4">
                    <div class="card-header bg-transparent border-bottom p-20">
                        <h5 class="mb-0">{{ __('admin.news_categories.category_information') }}</h5>
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
                                <div class="mb-3">
                                    <label class="form-label">{{ __('admin.news_categories.name_vi') }} <span class="text-danger">*</span></label>
                                    <input type="text" name="name_vi" class="form-control @error('name_vi') is-invalid @enderror" value="{{ old('name_vi') }}" required>
                                    @error('name_vi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-0">
                                    <label class="form-label">{{ __('admin.news_categories.description_vi') }}</label>
                                    <textarea name="description_vi" class="form-control @error('description_vi') is-invalid @enderror" rows="3">{{ old('description_vi') }}</textarea>
                                    @error('description_vi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- English Content -->
                            <div class="tab-pane fade" id="en-content" role="tabpanel">
                                <div class="mb-3">
                                    <label class="form-label">{{ __('admin.news_categories.name_en') }} <span class="text-danger">*</span></label>
                                    <input type="text" name="name_en" class="form-control @error('name_en') is-invalid @enderror" value="{{ old('name_en') }}" required>
                                    @error('name_en')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-0">
                                    <label class="form-label">{{ __('admin.news_categories.description_en') }}</label>
                                    <textarea name="description_en" class="form-control @error('description_en') is-invalid @enderror" rows="3">{{ old('description_en') }}</textarea>
                                    @error('description_en')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Settings -->
                <div class="card bg-white rounded-10 border border-white mb-4">
                    <div class="card-header bg-transparent border-bottom p-20">
                        <h5 class="mb-0">{{ __('admin.news_categories.settings') }}</h5>
                    </div>
                    <div class="card-body p-20">
                        <div class="mb-3">
                            <label class="form-label">{{ __('admin.news_categories.order') }}</label>
                            <input type="number" name="order" class="form-control" value="{{ old('order', 0) }}" min="0">
                            <small class="text-muted">{{ __('admin.news_categories.order_help') }}</small>
                        </div>

                        <div class="form-check mb-0">
                            <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_active">
                                {{ __('admin.news_categories.is_active') }}
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Icon -->
                <div class="card bg-white rounded-10 border border-white mb-4">
                    <div class="card-header bg-transparent border-bottom p-20">
                        <h5 class="mb-0">{{ __('admin.news_categories.icon') }}</h5>
                    </div>
                    <div class="card-body p-20">
                        <div class="mb-0">
                            <label class="form-label">{{ __('admin.news_categories.icon_label') }}</label>
                            <input type="file" name="icon" class="form-control @error('icon') is-invalid @enderror" accept="image/*,image/svg+xml,.svg" onchange="previewImage(this, 'icon-preview')">
                            <small class="text-muted">{{ __('admin.news_categories.icon_help') }}</small>
                            <div id="icon-preview" class="mt-2"></div>
                            @error('icon')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Actions -->
                <div class="card bg-white rounded-10 border border-white mb-4">
                    <div class="card-body p-20">
                        <button type="submit" class="btn btn-primary w-100 mb-2">
                            <i class="ri-save-line"></i> {{ __('admin.news_categories.save') }}
                        </button>
                        <a href="{{ route('admin.news.categories.index') }}" class="btn btn-secondary w-100">
                            <i class="ri-arrow-left-line"></i> {{ __('admin.news_categories.back') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
<script>
    // Image preview function
    function previewImage(input, previewId) {
        const preview = document.getElementById(previewId);
        preview.innerHTML = '';

        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.innerHTML = `<img src="${e.target.result}" class="img-thumbnail" style="max-width: 150px;">`;
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endpush
