@extends('backend.layouts.app')
@props(['pageTitle' => __('admin.core_values.page_title')])
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

        .upload-box {
            min-height: 350px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .icon-preview-container {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .icon-preview {
            max-width: 100%;
            max-height: 280px;
            object-fit: contain;
        }

        .remove-photo-btn {
            width: 32px;
            height: 32px;
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

        .cursor-pointer:hover {
            opacity: 0.8;
            transition: opacity 0.3s;
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
        <form id="core-values-form" enctype="multipart/form-data">
            @csrf

            <div class="alert alert-info mb-4">
                <i class="fas fa-info-circle"></i> <strong>{{ __('admin.core_values.core_values_page') }}</strong> - {{ __('admin.core_values.page_management') }}
            </div>

            <!-- Language Tabs -->
            <ul class="nav nav-tabs language-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="vi-tab" data-bs-toggle="tab"
                        data-bs-target="#vi-content" type="button" role="tab">
                        🇻🇳 {{ __('admin.core_values.vietnamese') }}
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="en-tab" data-bs-toggle="tab"
                        data-bs-target="#en-content" type="button" role="tab">
                        🇬🇧 {{ __('admin.core_values.english') }}
                    </button>
                </li>
            </ul>

            <div class="tab-content">
                <!-- Vietnamese Content -->
                <div class="tab-pane fade show active" id="vi-content" role="tabpanel">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <label class="form-label fw-bold">{{ __('admin.core_values.section_subtitle_vi') }} *</label>
                            <input type="text" class="form-control" name="section_subtitle_vi"
                                value="{{ old('section_subtitle_vi', $coreValuesContent->section_subtitle_vi ?? '') }}"
                                placeholder="Ví dụ: Giá trị cốt lõi">
                        </div>

                        <div class="col-md-12 mb-4">
                            <label class="form-label fw-bold">{{ __('admin.core_values.section_title_vi') }} *</label>
                            <input type="text" class="form-control" name="section_title_vi"
                                value="{{ old('section_title_vi', $coreValuesContent->section_title_vi ?? '') }}"
                                placeholder="Ví dụ: Những giá trị định hướng phát triển">
                        </div>

                        <div class="col-md-12 mb-4">
                            <h6 class="fw-bold">{{ __('admin.core_values.core_values_vi') }}</h6>
                        </div>

                        <!-- Value 1 VI -->
                        <div class="col-md-12 mb-3">
                            <label class="form-label fw-bold">{{ __('admin.core_values.value_1_title') }}</label>
                            <input type="text" class="form-control" name="value_1_title_vi"
                                value="{{ old('value_1_title_vi', $coreValuesContent->value_1_title_vi ?? '') }}"
                                placeholder="Ví dụ: Chất lượng">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label">{{ __('admin.core_values.value_1_description') }}</label>
                            <textarea class="form-control" name="value_1_description_vi" rows="3"
                                placeholder="Nhập mô tả về giá trị...">{{ old('value_1_description_vi', $coreValuesContent->value_1_description_vi ?? '') }}</textarea>
                        </div>

                        <!-- Value 2 VI -->
                        <div class="col-md-12 mb-3">
                            <label class="form-label fw-bold">{{ __('admin.core_values.value_2_title') }}</label>
                            <input type="text" class="form-control" name="value_2_title_vi"
                                value="{{ old('value_2_title_vi', $coreValuesContent->value_2_title_vi ?? '') }}"
                                placeholder="Ví dụ: Uy tín">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label">{{ __('admin.core_values.value_2_description') }}</label>
                            <textarea class="form-control" name="value_2_description_vi" rows="3"
                                placeholder="Nhập mô tả về giá trị...">{{ old('value_2_description_vi', $coreValuesContent->value_2_description_vi ?? '') }}</textarea>
                        </div>

                        <!-- Value 3 VI -->
                        <div class="col-md-12 mb-3">
                            <label class="form-label fw-bold">{{ __('admin.core_values.value_3_title') }}</label>
                            <input type="text" class="form-control" name="value_3_title_vi"
                                value="{{ old('value_3_title_vi', $coreValuesContent->value_3_title_vi ?? '') }}"
                                placeholder="Ví dụ: Sáng tạo">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label">{{ __('admin.core_values.value_3_description') }}</label>
                            <textarea class="form-control" name="value_3_description_vi" rows="3"
                                placeholder="Nhập mô tả về giá trị...">{{ old('value_3_description_vi', $coreValuesContent->value_3_description_vi ?? '') }}</textarea>
                        </div>

                        <!-- Value 4 VI -->
                        <div class="col-md-12 mb-3">
                            <label class="form-label fw-bold">{{ __('admin.core_values.value_4_title') }}</label>
                            <input type="text" class="form-control" name="value_4_title_vi"
                                value="{{ old('value_4_title_vi', $coreValuesContent->value_4_title_vi ?? '') }}"
                                placeholder="Ví dụ: Trách nhiệm">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label">{{ __('admin.core_values.value_4_description') }}</label>
                            <textarea class="form-control" name="value_4_description_vi" rows="3"
                                placeholder="Nhập mô tả về giá trị...">{{ old('value_4_description_vi', $coreValuesContent->value_4_description_vi ?? '') }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- English Content -->
                <div class="tab-pane fade" id="en-content" role="tabpanel">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <label class="form-label fw-bold">{{ __('admin.core_values.section_subtitle_en') }} *</label>
                            <input type="text" class="form-control" name="section_subtitle_en"
                                value="{{ old('section_subtitle_en', $coreValuesContent->section_subtitle_en ?? '') }}"
                                placeholder="Example: Core Values">
                        </div>

                        <div class="col-md-12 mb-4">
                            <label class="form-label fw-bold">{{ __('admin.core_values.section_title_en') }} *</label>
                            <input type="text" class="form-control" name="section_title_en"
                                value="{{ old('section_title_en', $coreValuesContent->section_title_en ?? '') }}"
                                placeholder="Example: Values that guide our development">
                        </div>

                        <div class="col-md-12 mb-4">
                            <h6 class="fw-bold">{{ __('admin.core_values.core_values_en') }}</h6>
                        </div>

                        <!-- Value 1 EN -->
                        <div class="col-md-12 mb-3">
                            <label class="form-label fw-bold">{{ __('admin.core_values.value_1_title_en') }}</label>
                            <input type="text" class="form-control" name="value_1_title_en"
                                value="{{ old('value_1_title_en', $coreValuesContent->value_1_title_en ?? '') }}"
                                placeholder="Example: Quality">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label">{{ __('admin.core_values.value_1_description_en') }}</label>
                            <textarea class="form-control" name="value_1_description_en" rows="3"
                                placeholder="Enter value description...">{{ old('value_1_description_en', $coreValuesContent->value_1_description_en ?? '') }}</textarea>
                        </div>

                        <!-- Value 2 EN -->
                        <div class="col-md-12 mb-3">
                            <label class="form-label fw-bold">{{ __('admin.core_values.value_2_title_en') }}</label>
                            <input type="text" class="form-control" name="value_2_title_en"
                                value="{{ old('value_2_title_en', $coreValuesContent->value_2_title_en ?? '') }}"
                                placeholder="Example: Reputation">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label">{{ __('admin.core_values.value_2_description_en') }}</label>
                            <textarea class="form-control" name="value_2_description_en" rows="3"
                                placeholder="Enter value description...">{{ old('value_2_description_en', $coreValuesContent->value_2_description_en ?? '') }}</textarea>
                        </div>

                        <!-- Value 3 EN -->
                        <div class="col-md-12 mb-3">
                            <label class="form-label fw-bold">{{ __('admin.core_values.value_3_title_en') }}</label>
                            <input type="text" class="form-control" name="value_3_title_en"
                                value="{{ old('value_3_title_en', $coreValuesContent->value_3_title_en ?? '') }}"
                                placeholder="Example: Innovation">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label">{{ __('admin.core_values.value_3_description_en') }}</label>
                            <textarea class="form-control" name="value_3_description_en" rows="3"
                                placeholder="Enter value description...">{{ old('value_3_description_en', $coreValuesContent->value_3_description_en ?? '') }}</textarea>
                        </div>

                        <!-- Value 4 EN -->
                        <div class="col-md-12 mb-3">
                            <label class="form-label fw-bold">{{ __('admin.core_values.value_4_title_en') }}</label>
                            <input type="text" class="form-control" name="value_4_title_en"
                                value="{{ old('value_4_title_en', $coreValuesContent->value_4_title_en ?? '') }}"
                                placeholder="Example: Responsibility">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label">{{ __('admin.core_values.value_4_description_en') }}</label>
                            <textarea class="form-control" name="value_4_description_en" rows="3"
                                placeholder="Enter value description...">{{ old('value_4_description_en', $coreValuesContent->value_4_description_en ?? '') }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-4">

            <!-- Icon Upload Sections -->
            <h5 class="fw-bold mb-4">{{ __('admin.core_values.icons_heading') }}</h5>

            <div class="row">
                @for ($i = 1; $i <= 4; $i++)
                    <div class="col-lg-6 mb-4">
                        <div class="form-group only-file-upload" id="icon-{{ $i }}-upload">
                            <label class="label fs-16 fw-bold">{{ __('admin.core_values.icon_value') }} {{ $i }}</label>
                            <div class="form-control text-center position-relative upload-box">
                                <div class="product-upload" id="default-icon-{{ $i }}-upload-ui">
                                    <label class="file-upload mb-0">
                                        <i class="ri-image-line bg-primary bg-opacity-10 p-2 rounded-1 text-primary fs-24"></i>
                                        <span class="d-block text-body fs-14 mt-2">{{ __('admin.core_values.drag_drop') }} <span
                                                class="text-primary text-decoration-underline">{{ __('admin.core_values.choose_file') }}</span></span>
                                        <span class="d-block text-muted fs-12 mt-1">JPG, PNG, GIF (Max: 2MB) - 200x200px</span>
                                    </label>
                                    <label class="position-absolute top-0 bottom-0 start-0 end-0 cursor" id="icon-{{ $i }}-upload-container">
                                        <input class="form__file bottom-0" id="icon-{{ $i }}-input" name="value_{{ $i }}_icon" type="file" accept="image/*,image/svg+xml,.svg" onchange="handleIconUpload(this, {{ $i }})">
                                    </label>
                                </div>
                                <div id="icon-{{ $i }}-preview-container" class="icon-preview-container" style="display: {{ $coreValuesContent->{'value_' . $i . '_icon'} ? 'flex' : 'none' }};">
                                    <div class="position-relative">
                                        <img id="icon-{{ $i }}-preview" src="{{ $coreValuesContent->{'value_' . $i . '_icon'} ? asset($coreValuesContent->{'value_' . $i . '_icon'}) : '' }}" alt="Preview" class="icon-preview rounded cursor-pointer" onclick="document.getElementById('icon-{{ $i }}-input').click()">
                                        <button type="button" class="btn btn-danger remove-photo-btn position-absolute" style="top: 10px; right: 10px;" onclick="removeIcon({{ $i }})" title="{{ __('admin.core_values.delete_image') }}">
                                            <i class="ri-close-line fs-18"></i>
                                        </button>
                                    </div>
                                    <div class="position-absolute bottom-0 start-0 end-0 text-center mb-3">
                                        <span class="badge bg-dark bg-opacity-75 text-white px-3 py-2">
                                            <i class="ri-edit-line me-1"></i> {{ __('admin.core_values.click_to_change') }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>

            <!-- Submit Button -->
            <div class="d-flex justify-content-end gap-2 mt-4">
                <button type="button" class="btn btn-secondary" onclick="location.reload()">
                    <i class="fas fa-redo"></i> {{ __('admin.core_values.reset') }}
                </button>
                <button type="submit" class="btn btn-primary fw-normal text-white">
                    <i class="fas fa-save"></i> {{ __('admin.core_values.save_changes') }}
                </button>
            </div>
        </form>
    </div>
@endsection
@push('scripts')
    <script>
        // Handle icon upload and preview
        function handleIconUpload(input, iconNumber) {
            if (input.files && input.files[0]) {
                const file = input.files[0];

                // Validate file type
                const validTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif', 'image/svg+xml', 'image/webp', 'image/avif', 'image/bmp', 'image/x-icon', 'image/tiff'];
                if (!validTypes.includes(file.type)) {
                    alert('{{ __('admin.core_values.invalid_image') }}');
                    input.value = '';
                    return;
                }


                // Show preview
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('icon-' + iconNumber + '-preview').src = e.target.result;
                    document.getElementById('icon-' + iconNumber + '-preview-container').style.display = 'flex';
                    document.getElementById('default-icon-' + iconNumber + '-upload-ui').style.display = 'none';
                }
                reader.readAsDataURL(file);
            }
        }

        // Remove icon and reset upload box
        function removeIcon(iconNumber) {
            document.getElementById('icon-' + iconNumber + '-input').value = '';
            document.getElementById('icon-' + iconNumber + '-preview').src = '';
            document.getElementById('icon-' + iconNumber + '-preview-container').style.display = 'none';
            document.getElementById('default-icon-' + iconNumber + '-upload-ui').style.display = 'block';
        }

        // Initialize: hide default UI if there's a current image
        document.addEventListener('DOMContentLoaded', function() {
            for (let i = 1; i <= 4; i++) {
                const previewContainer = document.getElementById('icon-' + i + '-preview-container');

                if (previewContainer.style.display === 'flex') {
                    document.getElementById('default-icon-' + i + '-upload-ui').style.display = 'none';
                }
            }
        });

        // Form submission
        document.getElementById('core-values-form').addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;

            // Disable button and show loading
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> {{ __('admin.core_values.saving') }}';

            fetch('{{ route('admin.core-values.update') }}', {
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
                            title: '{{ __('admin.core_values.success') }}',
                            text: data.message,
                            timer: 2000,
                            showConfirmButton: false
                        });
                    } else {
                        throw new Error(data.message || '{{ __('admin.core_values.error_occurred') }}');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire({
                        icon: 'error',
                        title: '{{ __('admin.core_values.error') }}',
                        text: error.message || '{{ __('admin.core_values.update_error') }}',
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
