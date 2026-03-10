@extends('backend.layouts.app')
@props(['pageTitle' => __('admin.news.create_news')])
@section('content-backend')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 mt-1">
        <h3 class="mb-0">{{ $pageTitle }}</h3>
        <x-admin.ui.breadcrumb :pageTitle="$pageTitle" />
    </div>

    <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-8">
                <div class="card bg-white rounded-10 border border-white mb-4">
                    <div class="card-header bg-transparent border-bottom p-20">
                        <h5 class="mb-0">{{ __('admin.news.news_information') }}</h5>
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
                                    <label class="form-label">{{ __('admin.news.title_vi') }} <span class="text-danger">*</span></label>
                                    <input type="text" name="title_vi" class="form-control @error('title_vi') is-invalid @enderror" value="{{ old('title_vi') }}" required>
                                    @error('title_vi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">{{ __('admin.news.excerpt_vi') }}</label>
                                    <textarea name="excerpt_vi" class="form-control @error('excerpt_vi') is-invalid @enderror" rows="3">{{ old('excerpt_vi') }}</textarea>
                                    @error('excerpt_vi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">{{ __('admin.news.content_vi') }}</label>
                                    <textarea name="content_vi" id="tyni-vi" class="form-control @error('content_vi') is-invalid @enderror">{{ old('content_vi') }}</textarea>
                                    @error('content_vi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- English Content -->
                            <div class="tab-pane fade" id="en-content" role="tabpanel">
                                <div class="mb-3">
                                    <label class="form-label">{{ __('admin.news.title_en') }} <span class="text-danger">*</span></label>
                                    <input type="text" name="title_en" class="form-control @error('title_en') is-invalid @enderror" value="{{ old('title_en') }}" required>
                                    @error('title_en')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">{{ __('admin.news.excerpt_en') }}</label>
                                    <textarea name="excerpt_en" class="form-control @error('excerpt_en') is-invalid @enderror" rows="3">{{ old('excerpt_en') }}</textarea>
                                    @error('excerpt_en')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">{{ __('admin.news.content_en') }}</label>
                                    <textarea name="content_en" id="tyni-en" class="form-control @error('content_en') is-invalid @enderror">{{ old('content_en') }}</textarea>
                                    @error('content_en')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SEO Section -->
                <div class="card bg-white rounded-10 border border-white mb-4">
                    <div class="card-header bg-transparent border-bottom p-20">
                        <h5 class="mb-0">{{ __('admin.news.seo_settings') }}</h5>
                    </div>
                    <div class="card-body p-20">
                        <ul class="nav nav-tabs mb-3" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="seo-vi-tab" data-bs-toggle="tab" data-bs-target="#seo-vi-content" type="button" role="tab">
                                    Tiếng Việt
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="seo-en-tab" data-bs-toggle="tab" data-bs-target="#seo-en-content" type="button" role="tab">
                                    English
                                </button>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <!-- Vietnamese SEO -->
                            <div class="tab-pane fade show active" id="seo-vi-content" role="tabpanel">
                                <div class="mb-3">
                                    <label class="form-label">{{ __('admin.news.meta_title_vi') }}</label>
                                    <input type="text" name="meta_title_vi" class="form-control" value="{{ old('meta_title_vi') }}" maxlength="60">
                                    <small class="text-muted">{{ __('admin.news.meta_title_help') }}</small>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">{{ __('admin.news.meta_description_vi') }}</label>
                                    <textarea name="meta_description_vi" class="form-control" rows="2" maxlength="160">{{ old('meta_description_vi') }}</textarea>
                                    <small class="text-muted">{{ __('admin.news.meta_description_help') }}</small>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">{{ __('admin.news.meta_keywords_vi') }}</label>
                                    <input type="text" name="meta_keywords_vi" class="form-control" value="{{ old('meta_keywords_vi') }}">
                                </div>
                            </div>

                            <!-- English SEO -->
                            <div class="tab-pane fade" id="seo-en-content" role="tabpanel">
                                <div class="mb-3">
                                    <label class="form-label">{{ __('admin.news.meta_title_en') }}</label>
                                    <input type="text" name="meta_title_en" class="form-control" value="{{ old('meta_title_en') }}" maxlength="60">
                                    <small class="text-muted">{{ __('admin.news.meta_title_help') }}</small>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">{{ __('admin.news.meta_description_en') }}</label>
                                    <textarea name="meta_description_en" class="form-control" rows="2" maxlength="160">{{ old('meta_description_en') }}</textarea>
                                    <small class="text-muted">{{ __('admin.news.meta_description_help') }}</small>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">{{ __('admin.news.meta_keywords_en') }}</label>
                                    <input type="text" name="meta_keywords_en" class="form-control" value="{{ old('meta_keywords_en') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Publishing -->
                <div class="card bg-white rounded-10 border border-white mb-4">
                    <div class="card-header bg-transparent border-bottom p-20">
                        <h5 class="mb-0">{{ __('admin.news.publishing') }}</h5>
                    </div>
                    <div class="card-body p-20">
                        <div class="mb-3">
                            <label class="form-label">{{ __('admin.news.status') }} <span class="text-danger">*</span></label>
                            <select name="status" class="form-select form-control @error('status') is-invalid @enderror" required>
                                <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>{{ __('admin.news.status_draft') }}</option>
                                <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>{{ __('admin.news.status_published') }}</option>
                                <option value="scheduled" {{ old('status') == 'scheduled' ? 'selected' : '' }}>{{ __('admin.news.status_scheduled') }}</option>
                                <option value="archived" {{ old('status') == 'archived' ? 'selected' : '' }}>{{ __('admin.news.status_archived') }}</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">{{ __('admin.news.published_at') }}</label>
                            <input type="datetime-local" name="published_at" class="form-control @error('published_at') is-invalid @enderror" value="{{ old('published_at') }}">
                            @error('published_at')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">{{ __('admin.news.author_name') }}</label>
                            <input type="text" name="author_name" class="form-control" value="{{ old('author_name', 'Admin') }}">
                        </div>

                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_active">
                                {{ __('admin.news.is_active') }}
                            </label>
                        </div>

                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" name="is_featured" id="is_featured" value="1" {{ old('is_featured') ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_featured">
                                <i class="ri-star-fill text-warning"></i> {{ __('admin.news.is_featured') }}
                            </label>
                        </div>

                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" name="is_trending" id="is_trending" value="1" {{ old('is_trending') ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_trending">
                                <i class="ri-fire-fill text-danger"></i> {{ __('admin.news.is_trending') }}
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="allow_comments" id="allow_comments" value="1" {{ old('allow_comments', true) ? 'checked' : '' }}>
                            <label class="form-check-label" for="allow_comments">
                                {{ __('admin.news.allow_comments') }}
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Category & Tags -->
                <div class="card bg-white rounded-10 border border-white mb-4">
                    <div class="card-header bg-transparent border-bottom p-20">
                        <h5 class="mb-0">{{ __('admin.news.categorization') }}</h5>
                    </div>
                    <div class="card-body p-20">
                        <div class="mb-3">
                            <label class="form-label">{{ __('admin.news.category') }} <span class="text-danger">*</span></label>
                            <select name="category_id" class="form-select form-control @error('category_id') is-invalid @enderror" required>
                                <option value="">{{ __('admin.news.select_category') }}</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-0">
                            <label class="form-label d-block mb-2">{{ __('admin.news.tags') }}</label>
                            @foreach($tags as $tag)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="tags[]" value="{{ $tag->id }}" id="tag_{{ $tag->id }}" {{ in_array($tag->id, old('tags', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="tag_{{ $tag->id }}">
                                        {{ $tag->name }}
                                    </label>
                                </div>
                            @endforeach
                            @error('tags')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Images -->
                <div class="card bg-white rounded-10 border border-white mb-4">
                    <div class="card-header bg-transparent border-bottom p-20">
                        <h5 class="mb-0">{{ __('admin.news.featured_image') }}</h5>
                    </div>
                    <div class="card-body p-20">
                        <div class="mb-0">
                            <label class="form-label">{{ __('admin.news.featured_image') }}</label>
                            <input type="file" name="featured_image" class="form-control @error('featured_image') is-invalid @enderror" accept="image/*,image/svg+xml,.svg" onchange="previewImage(this, 'featured-preview')">
                            <div id="featured-preview" class="mt-2"></div>
                            @error('featured_image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Actions -->
                <div class="card bg-white rounded-10 border border-white mb-4">
                    <div class="card-body p-20">
                        <button type="submit" class="btn btn-primary w-100 mb-2">
                            <i class="ri-save-line"></i> {{ __('admin.news.save') }}
                        </button>
                        <a href="{{ route('admin.news.index') }}" class="btn btn-secondary w-100">
                            <i class="ri-arrow-left-line"></i> {{ __('admin.news.back') }}
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
                preview.innerHTML = `<img src="${e.target.result}" class="img-thumbnail" style="max-width: 200px;">`;
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endpush
