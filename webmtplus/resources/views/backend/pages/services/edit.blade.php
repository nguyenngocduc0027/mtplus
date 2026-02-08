@extends('backend.layouts.app')
@props(['pageTitle' => __('admin.services.edit_service')])
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

        #upload-box-icon {
            min-height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
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
            max-height: 200px;
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

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Lỗi!</strong> Vui lòng sửa các lỗi sau:
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card bg-white border-0 rounded-10 mb-4">
        <div class="card-body p-4">
            <form id="service-edit-form" enctype="multipart/form-data">
                @csrf
                @method('PUT')

              

                <!-- Language Tabs -->
                <ul class="nav nav-tabs language-tabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="vi-tab" data-bs-toggle="tab"
                            data-bs-target="#vi-content" type="button" role="tab">
                            🇻🇳 Tiếng Việt
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="en-tab" data-bs-toggle="tab" data-bs-target="#en-content"
                            type="button" role="tab">
                            🇬🇧 English
                        </button>
                    </li>
                </ul>

                <div class="tab-content">
                    <!-- Vietnamese Content -->
                    <div class="tab-pane fade show active" id="vi-content" role="tabpanel">
                        <div class="mb-4">
                            <label class="form-label fw-bold">Tiêu đề (Tiếng Việt) *</label>
                            <input type="text" class="form-control" id="title-vi" name="title_vi"
                                value="{{ old('title_vi', $service->title_vi) }}" placeholder="Tư vấn xây dựng" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Slug (tự động)</label>
                            <input type="text" class="form-control bg-light" id="slug" name="slug"
                                value="{{ old('slug', $service->slug) }}" placeholder="tu-van-xay-dung" readonly>
                            <small class="text-muted">Tự động tạo từ tiêu đề tiếng Việt</small>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Mô tả ngắn (Tiếng Việt)</label>
                            <input type="text" class="form-control" name="short_description_vi"
                                value="{{ old('short_description_vi', $service->short_description_vi) }}" placeholder="Mô tả ngắn về dịch vụ..." maxlength="255">
                            <small class="text-muted">Tối đa 255 ký tự</small>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Nội dung chi tiết (Tiếng Việt)</label>
                            <textarea class="form-control " id="tyni-vi" name="content_vi" rows="10" placeholder="Nội dung chi tiết về dịch vụ...">{{ old('content_vi', $service->content_vi) }}</textarea>
                        </div>
                    </div>

                    <!-- English Content -->
                    <div class="tab-pane fade" id="en-content" role="tabpanel">
                        <div class="mb-4">
                            <label class="form-label fw-bold">Title (English) *</label>
                            <input type="text" class="form-control" name="title_en"
                                value="{{ old('title_en', $service->title_en) }}" placeholder="Construction Consulting" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Short Description (English)</label>
                            <input type="text" class="form-control" name="short_description_en"
                                value="{{ old('short_description_en', $service->short_description_en) }}" placeholder="Brief description of the service..." maxlength="255">
                            <small class="text-muted">Maximum 255 characters</small>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Content (English)</label>
                            <textarea class="form-control" id="tyni-en" name="content_en" rows="10" placeholder="Detailed content about the service...">{{ old('content_en', $service->content_en) }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- Settings -->
                <hr class="my-4">
                <h5 class="fw-bold mb-3">Cài đặt</h5>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-check form-switch mt-4">
                            <input class="form-check-input" type="checkbox" name="is_featured" id="is_featured"
                                {{ old('is_featured', $service->is_featured) ? 'checked' : '' }}>
                            <label class="form-check-label fw-bold" for="is_featured">
                                <i class="ri-star-line"></i> Đánh dấu nổi bật
                            </label>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-check form-switch mt-4">
                            <input class="form-check-input" type="checkbox" name="is_active" id="is_active"
                                {{ old('is_active', $service->is_active) ? 'checked' : '' }}>
                            <label class="form-check-label fw-bold" for="is_active">
                                <i class="ri-checkbox-circle-line"></i> Trạng thái hoạt động
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Submit Buttons -->
                <div class="d-flex justify-content-end gap-2 mt-4">
                    <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
                        <i class="ri-arrow-left-line"></i> Hủy
                    </a>
                    <button type="submit" class="btn btn-primary fw-normal text-white">
                        <i class="ri-save-line"></i> Cập nhật dịch vụ
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('scripts')
   
    <script>
       

        // Auto-generate slug from title_vi
        document.getElementById('title-vi').addEventListener('input', function() {
            const title = this.value;
            const slug = title
                .toLowerCase()
                .normalize('NFD')
                .replace(/[\u0300-\u036f]/g, '')
                .replace(/đ/g, 'd')
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-')
                .trim();
            document.getElementById('slug').value = slug;
        });

        // Handle image upload and preview
        function handleImageUpload(input, type) {
            if (input.files && input.files[0]) {
                const file = input.files[0];

                // Validate file type
                const validTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif', 'image/svg+xml'];
                if (!validTypes.includes(file.type)) {
                    alert('Vui lòng chọn file ảnh hợp lệ (JPG, PNG, GIF, SVG)');
                    input.value = '';
                    return;
                }

                // Validate file size (2MB)
                if (file.size > 2048 * 1024) {
                    alert('Kích thước file không được vượt quá 2MB');
                    input.value = '';
                    return;
                }

                // Show preview
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById(type + '-preview').src = e.target.result;
                    document.getElementById(type + '-preview-container').style.display = 'flex';
                    document.getElementById('default-upload-ui-' + type).style.display = 'none';
                }
                reader.readAsDataURL(file);
            }
        }

        // Remove image and reset upload box
        function removeImage(type) {
            document.getElementById(type + '-input').value = '';
            document.getElementById(type + '-preview').src = '';
            document.getElementById(type + '-preview-container').style.display = 'none';
            document.getElementById('default-upload-ui-' + type).style.display = 'block';
        }

        // AJAX Form Submit
        document.getElementById('service-edit-form').addEventListener('submit', function(e) {
            e.preventDefault();

            // Sync TinyMCE content
            tinymce.triggerSave();

            const formData = new FormData(this);
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;

            // Disable button and show loading
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="ri-loader-4-line spinner-border spinner-border-sm"></i> Đang cập nhật...';

            fetch('{{ route('admin.services.update', $service->slug) }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json',
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        return response.json().then(err => Promise.reject(err));
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        // Redirect to index with success message
                        window.location.href = '{{ route('admin.services.index') }}?success=' + encodeURIComponent(
                            data.message);
                    } else {
                        throw new Error(data.message || 'Có lỗi xảy ra');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    let errorMessage = 'Có lỗi xảy ra';

                    // Handle validation errors
                    if (error.errors) {
                        const errorList = Object.values(error.errors).flat();
                        errorMessage = '<ul class="mb-0">' + errorList.map(err => '<li>' + err + '</li>').join(
                            '') + '</ul>';
                    } else if (error.message) {
                        errorMessage = error.message;
                    }

                    const alert = document.createElement('div');
                    alert.className = 'alert alert-danger alert-dismissible fade show';
                    alert.innerHTML = `
                        <strong>Lỗi!</strong> ${errorMessage}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    `;
                    document.querySelector('.card-body').insertBefore(alert, document.querySelector(
                        '.card-body').firstChild);
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
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
