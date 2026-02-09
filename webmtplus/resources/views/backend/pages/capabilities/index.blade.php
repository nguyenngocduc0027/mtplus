@extends('backend.layouts.app')
@props(['pageTitle' => __('admin.capabilities.page_title')])
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

        .upload-box-compact {
            min-height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px dashed #dee2e6;
            border-radius: 8px;
            background: #f8f9fa;
            transition: all 0.3s;
        }

        .upload-box-compact:hover {
            border-color: #007bff;
            background: #f0f7ff;
        }

        .image-preview-container {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .image-preview {
            max-width: 100%;
            max-height: 150px;
            object-fit: contain;
        }

        .remove-photo-btn {
            width: 28px;
            height: 28px;
            padding: 0;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        }

        .remove-photo-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 12px rgba(220, 53, 69, 0.3);
        }

        .cursor-pointer {
            cursor: pointer;
        }

        .section-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.08);
            margin-bottom: 24px;
            overflow: hidden;
        }

        .section-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px 24px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .section-header i {
            font-size: 24px;
        }

        .section-body {
            padding: 24px;
            background: white;
        }

        .accordion-button:not(.collapsed) {
            background-color: #e7f3ff;
            color: #0066cc;
        }

        .accordion-button:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.15);
        }

        .feature-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            background: #007bff;
            color: white;
            border-radius: 50%;
            font-weight: bold;
            font-size: 14px;
        }

        .progress-bar-item {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 12px;
            border-left: 4px solid #007bff;
        }

        .upload-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 16px;
        }

        .compact-upload-label {
            font-size: 13px;
            font-weight: 600;
            color: #495057;
            margin-bottom: 8px;
            display: block;
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
        <form id="capabilities-form" enctype="multipart/form-data">
            @csrf

            <!-- Section 1: Title Section -->
            <div class="section-card">
                <div class="section-header">
                    <i class="ri-text"></i>
                    <div>
                        <h5 class="mb-0">{{ __('admin.capabilities.section_1_heading') }}</h5>
                        <small class="opacity-90">{{ __('admin.capabilities.section_1_description') }}</small>
                    </div>
                </div>
                <div class="section-body">
                    <ul class="nav nav-tabs language-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="section1-vi-tab" data-bs-toggle="tab"
                                data-bs-target="#section1-vi-content" type="button" role="tab">
                                🇻🇳 {{ __('admin.capabilities.vietnamese') }}
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="section1-en-tab" data-bs-toggle="tab"
                                data-bs-target="#section1-en-content" type="button" role="tab">
                                🇬🇧 {{ __('admin.capabilities.english') }}
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="section1-vi-content" role="tabpanel">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">{{ __('admin.capabilities.main_title') }} *</label>
                                <input type="text" class="form-control" name="section_1_title_vi"
                                    value="{{ old('section_1_title_vi', $capabilitiesContent->section_1_title_vi ?? '') }}"
                                    placeholder="Ví dụ: Đối tác chân thực trong mọi khía cạnh phát triển">
                            </div>
                        </div>

                        <div class="tab-pane fade" id="section1-en-content" role="tabpanel">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">{{ __('admin.capabilities.main_title_en') }} *</label>
                                <input type="text" class="form-control" name="section_1_title_en"
                                    value="{{ old('section_1_title_en', $capabilitiesContent->section_1_title_en ?? '') }}"
                                    placeholder="Example: Genuine Partner In Every Aspect Of Development">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 2: 4 Features -->
            <div class="section-card">
                <div class="section-header">
                    <i class="ri-star-line"></i>
                    <div>
                        <h5 class="mb-0">{{ __('admin.capabilities.section_2_heading') }}</h5>
                        <small class="opacity-90">{{ __('admin.capabilities.section_2_description') }}</small>
                    </div>
                </div>
                <div class="section-body">
                    <div class="accordion" id="featuresAccordion">
                        @for ($i = 1; $i <= 4; $i++)
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header">
                                    <button class="accordion-button {{ $i == 1 ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#feature{{ $i }}">
                                        <span class="feature-badge me-2">{{ $i }}</span>
                                        <strong>{{ __('admin.capabilities.feature') }} {{ $i }}</strong>
                                    </button>
                                </h2>
                                <div id="feature{{ $i }}" class="accordion-collapse collapse {{ $i == 1 ? 'show' : '' }}" data-bs-parent="#featuresAccordion">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <!-- Icon Upload - Left Side -->
                                            <div class="col-md-4">
                                                <label class="compact-upload-label">
                                                    <i class="ri-image-line"></i> {{ __('admin.capabilities.icon_label') }}
                                                </label>
                                                <div class="upload-box-compact position-relative">
                                                    <div class="product-upload" id="default-feature-{{ $i }}-upload-ui">
                                                        <label class="file-upload mb-0 text-center">
                                                            <i class="ri-upload-cloud-line text-primary fs-32 d-block mb-2"></i>
                                                            <span class="d-block text-body fs-13">{{ __('admin.capabilities.choose_or_drag') }}</span>
                                                            <span class="d-block text-muted fs-11 mt-1">PNG, SVG (Max: 2MB)</span>
                                                        </label>
                                                        <label class="position-absolute top-0 bottom-0 start-0 end-0 cursor">
                                                            <input class="form__file" id="feature-{{ $i }}-icon-input" name="feature_{{ $i }}_icon" type="file" accept="image/*" onchange="handleImageUpload(this, {{ $i }}, 'feature')">
                                                        </label>
                                                    </div>
                                                    <div class="image-preview-container" id="feature-{{ $i }}-preview-container" style="display: {{ $capabilitiesContent->{'feature_' . $i . '_icon_path'} ? 'flex' : 'none' }};">
                                                        <div class="position-relative">
                                                            <img id="feature-{{ $i }}-preview" src="{{ $capabilitiesContent->{'feature_' . $i . '_icon_path'} ? asset($capabilitiesContent->{'feature_' . $i . '_icon_path'}) : '' }}" alt="Preview" class="image-preview cursor-pointer" onclick="document.getElementById('feature-{{ $i }}-icon-input').click()">
                                                            <button type="button" class="btn btn-danger btn-sm remove-photo-btn position-absolute" style="top: 5px; right: 5px;" onclick="removeImage({{ $i }}, 'feature')">
                                                                <i class="ri-close-line"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Content Fields - Right Side -->
                                            <div class="col-md-8">
                                                <ul class="nav nav-tabs language-tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#feature-{{ $i }}-vi">🇻🇳 {{ __('admin.capabilities.vietnamese') }}</button>
                                                    </li>
                                                    <li class="nav-item">
                                                        <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#feature-{{ $i }}-en">🇬🇧 {{ __('admin.capabilities.english') }}</button>
                                                    </li>
                                                </ul>

                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="feature-{{ $i }}-vi">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-semibold">{{ __('admin.capabilities.title') }}</label>
                                                            <input type="text" class="form-control" name="feature_{{ $i }}_title_vi"
                                                                value="{{ old('feature_' . $i . '_title_vi', $capabilitiesContent->{'feature_' . $i . '_title_vi'} ?? '') }}"
                                                                placeholder="{{ __('admin.capabilities.enter_title') }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label fw-semibold">{{ __('admin.capabilities.description') }}</label>
                                                            <textarea class="form-control" name="feature_{{ $i }}_description_vi" rows="3"
                                                                placeholder="{{ __('admin.capabilities.enter_description') }}">{{ old('feature_' . $i . '_description_vi', $capabilitiesContent->{'feature_' . $i . '_description_vi'} ?? '') }}</textarea>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="feature-{{ $i }}-en">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-semibold">{{ __('admin.capabilities.title_en') }}</label>
                                                            <input type="text" class="form-control" name="feature_{{ $i }}_title_en"
                                                                value="{{ old('feature_' . $i . '_title_en', $capabilitiesContent->{'feature_' . $i . '_title_en'} ?? '') }}"
                                                                placeholder="{{ __('admin.capabilities.enter_title') }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label fw-semibold">{{ __('admin.capabilities.description_en') }}</label>
                                                            <textarea class="form-control" name="feature_{{ $i }}_description_en" rows="3"
                                                                placeholder="{{ __('admin.capabilities.enter_brief_description') }}">{{ old('feature_' . $i . '_description_en', $capabilitiesContent->{'feature_' . $i . '_description_en'} ?? '') }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>

            <!-- Section 3: Experience Section -->
            <div class="section-card">
                <div class="section-header">
                    <i class="ri-award-line"></i>
                    <div>
                        <h5 class="mb-0">{{ __('admin.capabilities.section_3_heading') }}</h5>
                        <small class="opacity-90">{{ __('admin.capabilities.section_3_description') }}</small>
                    </div>
                </div>
                <div class="section-body">
                    <!-- Images Upload Grid -->
                    <div class="row mb-4">
                        <div class="col-md-6 mb-3">
                            <label class="compact-upload-label">
                                <i class="ri-image-2-line"></i> {{ __('admin.capabilities.main_image') }}
                            </label>
                            <div class="upload-box-compact position-relative">
                                <div class="product-upload" id="default-main-upload-ui">
                                    <label class="file-upload mb-0 text-center">
                                        <i class="ri-upload-cloud-line text-primary fs-32 d-block mb-2"></i>
                                        <span class="d-block text-body fs-13">{{ __('admin.capabilities.choose_or_drag_file') }}</span>
                                        <span class="d-block text-muted fs-11 mt-1">JPG, PNG (Max: 2MB)</span>
                                    </label>
                                    <label class="position-absolute top-0 bottom-0 start-0 end-0 cursor">
                                        <input class="form__file" id="main-image-input" name="main_image" type="file" accept="image/*" onchange="handleMainImageUpload(this)">
                                    </label>
                                </div>
                                <div class="image-preview-container" id="main-preview-container" style="display: {{ $capabilitiesContent->main_image_path ? 'flex' : 'none' }};">
                                    <div class="position-relative">
                                        <img id="main-preview" src="{{ $capabilitiesContent->main_image_path ? asset($capabilitiesContent->main_image_path) : '' }}" alt="Preview" class="image-preview cursor-pointer" onclick="document.getElementById('main-image-input').click()">
                                        <button type="button" class="btn btn-danger btn-sm remove-photo-btn position-absolute" style="top: 5px; right: 5px;" onclick="removeMainImage()">
                                            <i class="ri-close-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="compact-upload-label">
                                <i class="ri-gallery-line"></i> {{ __('admin.capabilities.thumbnail_image') }}
                            </label>
                            <div class="upload-box-compact position-relative">
                                <div class="product-upload" id="default-thumbnail-upload-ui">
                                    <label class="file-upload mb-0 text-center">
                                        <i class="ri-upload-cloud-line text-primary fs-32 d-block mb-2"></i>
                                        <span class="d-block text-body fs-13">{{ __('admin.capabilities.choose_or_drag_file') }}</span>
                                        <span class="d-block text-muted fs-11 mt-1">JPG, PNG (Max: 2MB)</span>
                                    </label>
                                    <label class="position-absolute top-0 bottom-0 start-0 end-0 cursor">
                                        <input class="form__file" id="thumbnail-image-input" name="thumbnail_image" type="file" accept="image/*" onchange="handleThumbnailImageUpload(this)">
                                    </label>
                                </div>
                                <div class="image-preview-container" id="thumbnail-preview-container" style="display: {{ $capabilitiesContent->thumbnail_image_path ? 'flex' : 'none' }};">
                                    <div class="position-relative">
                                        <img id="thumbnail-preview" src="{{ $capabilitiesContent->thumbnail_image_path ? asset($capabilitiesContent->thumbnail_image_path) : '' }}" alt="Preview" class="image-preview cursor-pointer" onclick="document.getElementById('thumbnail-image-input').click()">
                                        <button type="button" class="btn btn-danger btn-sm remove-photo-btn position-absolute" style="top: 5px; right: 5px;" onclick="removeThumbnailImage()">
                                            <i class="ri-close-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Fields -->
                    <ul class="nav nav-tabs language-tabs" role="tablist">
                        <li class="nav-item">
                            <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#section3-vi">🇻🇳 {{ __('admin.capabilities.vietnamese') }}</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#section3-en">🇬🇧 {{ __('admin.capabilities.english') }}</button>
                        </li>
                    </ul>

                    <div class="tab-content mb-4">
                        <div class="tab-pane fade show active" id="section3-vi">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">{{ __('admin.capabilities.title') }} *</label>
                                <input type="text" class="form-control" name="section_3_title_vi"
                                    value="{{ old('section_3_title_vi', $capabilitiesContent->section_3_title_vi ?? '') }}"
                                    placeholder="{{ __('admin.capabilities.enter_title') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">{{ __('admin.capabilities.description') }} *</label>
                                <textarea class="form-control" name="section_3_description_vi" rows="3"
                                    placeholder="{{ __('admin.capabilities.enter_description') }}">{{ old('section_3_description_vi', $capabilitiesContent->section_3_description_vi ?? '') }}</textarea>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="section3-en">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">{{ __('admin.capabilities.title_en') }} *</label>
                                <input type="text" class="form-control" name="section_3_title_en"
                                    value="{{ old('section_3_title_en', $capabilitiesContent->section_3_title_en ?? '') }}"
                                    placeholder="{{ __('admin.capabilities.enter_title') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">{{ __('admin.capabilities.description_en') }} *</label>
                                <textarea class="form-control" name="section_3_description_en" rows="3"
                                    placeholder="{{ __('admin.capabilities.enter_brief_description') }}">{{ old('section_3_description_en', $capabilitiesContent->section_3_description_en ?? '') }}</textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Progress Bars -->
                    <h6 class="fw-bold text-secondary mb-3">
                        <i class="ri-bar-chart-horizontal-line"></i> {{ __('admin.capabilities.progress_bars') }}
                    </h6>
                    @for ($j = 1; $j <= 3; $j++)
                        <div class="progress-bar-item">
                            <div class="d-flex align-items-center mb-2">
                                <span class="feature-badge me-2" style="width: 24px; height: 24px; font-size: 12px;">{{ $j }}</span>
                                <strong class="text-dark">{{ __('admin.capabilities.progress_bar') }} {{ $j }}</strong>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="text" class="form-control form-control-sm" name="progress_{{ $j }}_title_vi"
                                        value="{{ old('progress_' . $j . '_title_vi', $capabilitiesContent->{'progress_' . $j . '_title_vi'} ?? '') }}"
                                        placeholder="🇻🇳 {{ __('admin.capabilities.vietnamese_title') }}">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control form-control-sm" name="progress_{{ $j }}_title_en"
                                        value="{{ old('progress_' . $j . '_title_en', $capabilitiesContent->{'progress_' . $j . '_title_en'} ?? '') }}"
                                        placeholder="🇬🇧 {{ __('admin.capabilities.english_title') }}">
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group input-group-sm">
                                        <input type="number" class="form-control" name="progress_{{ $j }}_percentage" min="0" max="100"
                                            value="{{ old('progress_' . $j . '_percentage', $capabilitiesContent->{'progress_' . $j . '_percentage'} ?? 0) }}">
                                        <span class="input-group-text">%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>

            <!-- Submit Button -->
            <div class="d-flex justify-content-between align-items-center mt-4 p-3 bg-light rounded">
                <div class="text-muted">
                    <i class="ri-information-line"></i> {{ __('admin.capabilities.check_before_save') }}
                </div>
                <div class="d-flex gap-2">
                    <button type="button" class="btn btn-secondary" onclick="location.reload()">
                        <i class="ri-refresh-line"></i> {{ __('admin.capabilities.refresh') }}
                    </button>
                    <button type="submit" class="btn btn-primary fw-normal text-white px-4">
                        <i class="ri-save-line"></i> {{ __('admin.capabilities.save_changes') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
@push('scripts')
    <script>
        // Handle feature icon uploads
        function handleImageUpload(input, featureNumber, type) {
            if (input.files && input.files[0]) {
                const file = input.files[0];

                // Validate file type
                const validTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif', 'image/svg+xml'];
                if (!validTypes.includes(file.type)) {
                    alert('{{ __('admin.capabilities.invalid_image_svg') }}');
                    input.value = '';
                    return;
                }


                // Show preview
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById(`${type}-${featureNumber}-preview`).src = e.target.result;
                    document.getElementById(`${type}-${featureNumber}-preview-container`).style.display = 'flex';
                    document.getElementById(`default-${type}-${featureNumber}-upload-ui`).style.display = 'none';
                }
                reader.readAsDataURL(file);
            }
        }

        // Remove feature icon
        function removeImage(featureNumber, type) {
            document.getElementById(`${type}-${featureNumber}-icon-input`).value = '';
            document.getElementById(`${type}-${featureNumber}-preview`).src = '';
            document.getElementById(`${type}-${featureNumber}-preview-container`).style.display = 'none';
            document.getElementById(`default-${type}-${featureNumber}-upload-ui`).style.display = 'block';
        }

        // Handle main image upload
        function handleMainImageUpload(input) {
            if (input.files && input.files[0]) {
                const file = input.files[0];

                // Validate file type
                const validTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
                if (!validTypes.includes(file.type)) {
                    alert('{{ __('admin.capabilities.invalid_image') }}');
                    input.value = '';
                    return;
                }


                // Show preview
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('main-preview').src = e.target.result;
                    document.getElementById('main-preview-container').style.display = 'flex';
                    document.getElementById('default-main-upload-ui').style.display = 'none';
                }
                reader.readAsDataURL(file);
            }
        }

        // Remove main image
        function removeMainImage() {
            document.getElementById('main-image-input').value = '';
            document.getElementById('main-preview').src = '';
            document.getElementById('main-preview-container').style.display = 'none';
            document.getElementById('default-main-upload-ui').style.display = 'block';
        }

        // Handle thumbnail image upload
        function handleThumbnailImageUpload(input) {
            if (input.files && input.files[0]) {
                const file = input.files[0];

                // Validate file type
                const validTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
                if (!validTypes.includes(file.type)) {
                    alert('{{ __('admin.capabilities.invalid_image') }}');
                    input.value = '';
                    return;
                }


                // Show preview
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('thumbnail-preview').src = e.target.result;
                    document.getElementById('thumbnail-preview-container').style.display = 'flex';
                    document.getElementById('default-thumbnail-upload-ui').style.display = 'none';
                }
                reader.readAsDataURL(file);
            }
        }

        // Remove thumbnail image
        function removeThumbnailImage() {
            document.getElementById('thumbnail-image-input').value = '';
            document.getElementById('thumbnail-preview').src = '';
            document.getElementById('thumbnail-preview-container').style.display = 'none';
            document.getElementById('default-thumbnail-upload-ui').style.display = 'block';
        }

        // Initialize: hide default UI if there's a current image
        document.addEventListener('DOMContentLoaded', function() {
            // For features
            for (let i = 1; i <= 4; i++) {
                const previewContainer = document.getElementById(`feature-${i}-preview-container`);
                if (previewContainer.style.display === 'flex') {
                    document.getElementById(`default-feature-${i}-upload-ui`).style.display = 'none';
                }
            }

            // For main image
            const mainPreviewContainer = document.getElementById('main-preview-container');
            if (mainPreviewContainer.style.display === 'flex') {
                document.getElementById('default-main-upload-ui').style.display = 'none';
            }

            // For thumbnail image
            const thumbnailPreviewContainer = document.getElementById('thumbnail-preview-container');
            if (thumbnailPreviewContainer.style.display === 'flex') {
                document.getElementById('default-thumbnail-upload-ui').style.display = 'none';
            }
        });

        // Form submission
        document.getElementById('capabilities-form').addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;

            // Disable button and show loading
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> {{ __('admin.capabilities.saving') }}';

            fetch('{{ route('admin.capabilities.update') }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Show SweetAlert success message
                        Swal.fire({
                            icon: 'success',
                            title: '{{ __('admin.capabilities.success') }}',
                            text: data.message,
                            timer: 2000,
                            showConfirmButton: false
                        });
                    } else {
                        throw new Error(data.message || '{{ __('admin.capabilities.error_occurred') }}');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire({
                        icon: 'error',
                        title: '{{ __('admin.capabilities.error') }}',
                        text: error.message || '{{ __('admin.capabilities.update_error') }}',
                    });
                })
                .finally(() => {
                    // Re-enable button
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalBtnText;
                });
        });
    </script>
@endpush
