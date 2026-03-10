@extends('backend.layouts.app')
@props(['pageTitle' => __('admin.mission.page_title')])
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

        #background-image-preview-container {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #background-image-preview {
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
        <form id="mission-form" enctype="multipart/form-data">
            @csrf

            <div class="alert alert-info mb-4">
                <i class="fas fa-info-circle"></i> <strong>{{ __('admin.mission.mission_page') }}</strong> - {{ __('admin.mission.page_management') }}
            </div>

            <!-- Background Image Section -->
         
            <div class="row mb-4">
                <div class="col-lg-12">
                    <div class="form-group mb-4 only-file-upload" id="background-image-upload">
                        <label class="label fs-16 fw-bold">{{ __('admin.mission.background_image') }}</label>
                        <div class="form-control text-center position-relative upload-box">
                            <div class="product-upload" id="default-background-upload-ui">
                                <label class="file-upload mb-0">
                                    <i class="ri-image-line bg-primary bg-opacity-10 p-2 rounded-1 text-primary fs-24"></i>
                                    <span class="d-block text-body fs-14 mt-2">{{ __('admin.mission.drag_drop') }} <span
                                            class="text-primary text-decoration-underline">{{ __('admin.mission.choose_file') }}</span></span>
                                    <span class="d-block text-muted fs-12 mt-1">JPG, PNG, GIF (Max: 2MB) - 1920x1080px</span>
                                </label>
                                <label class="position-absolute top-0 bottom-0 start-0 end-0 cursor" id="background-upload-container">
                                    <input class="form__file bottom-0" id="background-image-input" name="background_image" type="file" accept="image/*,image/svg+xml,.svg" onchange="handleBackgroundImageUpload(this)">
                                </label>
                            </div>
                            <div id="background-image-preview-container" style="display: {{ $missionContent->background_image_path ? 'flex' : 'none' }};">
                                <div class="position-relative">
                                    <img id="background-image-preview" src="{{ $missionContent->background_image_path ? asset($missionContent->background_image_path) : '' }}" alt="Preview" class="rounded cursor-pointer" onclick="document.getElementById('background-image-input').click()">
                                    <button type="button" class="btn btn-danger remove-photo-btn position-absolute" style="top: 10px; right: 10px;" onclick="removeBackgroundImage()" title="{{ __('admin.mission.delete_image') }}">
                                        <i class="ri-close-line fs-18"></i>
                                    </button>
                                </div>
                                <div class="position-absolute bottom-0 start-0 end-0 text-center mb-3">
                                    <span class="badge bg-dark bg-opacity-75 text-white px-3 py-2">
                                        <i class="ri-edit-line me-1"></i> {{ __('admin.mission.click_to_change') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-4">

            <!-- Language Tabs -->
            <ul class="nav nav-tabs language-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="vi-tab" data-bs-toggle="tab"
                        data-bs-target="#vi-content" type="button" role="tab">
                        🇻🇳 {{ __('admin.mission.vietnamese') }}
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="en-tab" data-bs-toggle="tab"
                        data-bs-target="#en-content" type="button" role="tab">
                        {{ __('admin.mission.english') }}
                    </button>
                </li>
            </ul>

            <div class="tab-content">
                <!-- Vietnamese Content -->
                <div class="tab-pane fade show active" id="vi-content" role="tabpanel">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <label class="form-label fw-bold">{{ __('admin.mission.title_vi') }} *</label>
                            <input type="text" class="form-control" name="title_vi"
                                value="{{ old('title_vi', $missionContent->title_vi ?? '') }}"
                                placeholder="Ví dụ: Sứ mệnh của chúng tôi">
                        </div>

                        <div class="col-md-12 mb-4">
                            <label class="form-label fw-bold">{{ __('admin.mission.description_vi') }} *</label>
                            <textarea class="form-control" name="description_vi" rows="5"
                                placeholder="Nhập mô tả chi tiết về sứ mệnh...">{{ old('description_vi', $missionContent->description_vi ?? '') }}</textarea>
                        </div>

                        <div class="col-md-12 mb-4">
                            <h6 class="fw-bold">{{ __('admin.mission.highlights_vi') }}</h6>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label">{{ __('admin.mission.highlight_1') }}</label>
                            <input type="text" class="form-control" name="feature_1_vi"
                                value="{{ old('feature_1_vi', $missionContent->feature_1_vi ?? '') }}"
                                placeholder="Ví dụ: Có giấy phép, bảo hiểm và tập trung vào an toàn">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label">{{ __('admin.mission.highlight_2') }}</label>
                            <input type="text" class="form-control" name="feature_2_vi"
                                value="{{ old('feature_2_vi', $missionContent->feature_2_vi ?? '') }}"
                                placeholder="Ví dụ: 10 năm kinh nghiệm trong ngành">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label">{{ __('admin.mission.highlight_3') }}</label>
                            <input type="text" class="form-control" name="feature_3_vi"
                                value="{{ old('feature_3_vi', $missionContent->feature_3_vi ?? '') }}"
                                placeholder="Ví dụ: Phương pháp tiếp cận lấy khách hàng làm trung tâm">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label">{{ __('admin.mission.highlight_4') }}</label>
                            <input type="text" class="form-control" name="feature_4_vi"
                                value="{{ old('feature_4_vi', $missionContent->feature_4_vi ?? '') }}"
                                placeholder="Ví dụ: Quản lý dự án toàn diện từ đầu đến cuối">
                        </div>
                    </div>
                </div>

                <!-- English Content -->
                <div class="tab-pane fade" id="en-content" role="tabpanel">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <label class="form-label fw-bold">{{ __('admin.mission.title_en') }} *</label>
                            <input type="text" class="form-control" name="title_en"
                                value="{{ old('title_en', $missionContent->title_en ?? '') }}"
                                placeholder="Example: Our Mission">
                        </div>

                        <div class="col-md-12 mb-4">
                            <label class="form-label fw-bold">{{ __('admin.mission.description_en') }} *</label>
                            <textarea class="form-control" name="description_en" rows="5"
                                placeholder="Enter detailed description about the mission...">{{ old('description_en', $missionContent->description_en ?? '') }}</textarea>
                        </div>

                        <div class="col-md-12 mb-4">
                            <h6 class="fw-bold">{{ __('admin.mission.features_en') }}</h6>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label">{{ __('admin.mission.feature_1') }}</label>
                            <input type="text" class="form-control" name="feature_1_en"
                                value="{{ old('feature_1_en', $missionContent->feature_1_en ?? '') }}"
                                placeholder="Example: Licensed, Insured, And Safety-Focused">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label">{{ __('admin.mission.feature_2') }}</label>
                            <input type="text" class="form-control" name="feature_2_en"
                                value="{{ old('feature_2_en', $missionContent->feature_2_en ?? '') }}"
                                placeholder="Example: 10 Years Of Industry Experience">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label">{{ __('admin.mission.feature_3') }}</label>
                            <input type="text" class="form-control" name="feature_3_en"
                                value="{{ old('feature_3_en', $missionContent->feature_3_en ?? '') }}"
                                placeholder="Example: Client-Centered Approach">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label">{{ __('admin.mission.feature_4') }}</label>
                            <input type="text" class="form-control" name="feature_4_en"
                                value="{{ old('feature_4_en', $missionContent->feature_4_en ?? '') }}"
                                placeholder="Example: End-to-End Project Management">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="d-flex justify-content-end gap-2 mt-4">
                <button type="button" class="btn btn-secondary" onclick="location.reload()">
                    <i class="fas fa-redo"></i> {{ __('admin.mission.reset') }}
                </button>
                <button type="submit" class="btn btn-primary fw-normal text-white">
                    <i class="fas fa-save"></i> {{ __('admin.mission.save_changes') }}
                </button>
            </div>
        </form>
    </div>
@endsection
@push('scripts')
    <script>
        // Handle background image upload and preview
        function handleBackgroundImageUpload(input) {
            if (input.files && input.files[0]) {
                const file = input.files[0];

                // Validate file type
                const validTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif', 'image/svg+xml', 'image/webp', 'image/avif', 'image/bmp', 'image/x-icon', 'image/tiff'];
                if (!validTypes.includes(file.type)) {
                    alert('{{ __('admin.mission.invalid_image') }}');
                    input.value = '';
                    return;
                }


                // Show preview
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('background-image-preview').src = e.target.result;
                    document.getElementById('background-image-preview-container').style.display = 'flex';
                    document.getElementById('default-background-upload-ui').style.display = 'none';
                }
                reader.readAsDataURL(file);
            }
        }

        // Remove background image and reset upload box
        function removeBackgroundImage() {
            document.getElementById('background-image-input').value = '';
            document.getElementById('background-image-preview').src = '';
            document.getElementById('background-image-preview-container').style.display = 'none';
            document.getElementById('default-background-upload-ui').style.display = 'block';
        }

        // Initialize: hide default UI if there's a current image
        document.addEventListener('DOMContentLoaded', function() {
            const backgroundPreviewContainer = document.getElementById('background-image-preview-container');

            if (backgroundPreviewContainer.style.display === 'flex') {
                document.getElementById('default-background-upload-ui').style.display = 'none';
            }
        });

        // Form submission
        document.getElementById('mission-form').addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;

            // Disable button and show loading
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> {{ __('admin.mission.saving') }}';

            fetch('{{ route('admin.mission.update') }}', {
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
                            title: '{{ __('admin.mission.success') }}',
                            text: data.message,
                            timer: 2000,
                            showConfirmButton: false
                        });
                    } else {
                        throw new Error(data.message || '{{ __('admin.mission.error_occurred') }}');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire({
                        icon: 'error',
                        title: '{{ __('admin.mission.error') }}',
                        text: error.message || '{{ __('admin.mission.update_error') }}',
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
