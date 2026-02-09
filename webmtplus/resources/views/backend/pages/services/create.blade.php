@extends('backend.layouts.app')
@props(['pageTitle' => __('admin.services.add_service')])
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

        #upload-box-icon,
        #upload-box-image {
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
            <strong>{{ __('admin.services.error_heading') }}</strong> {{ __('admin.services.please_fix_errors') }}
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
            <form id="service-create-form" enctype="multipart/form-data">
                @csrf

             

                <!-- Language Tabs -->
                <ul class="nav nav-tabs language-tabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="vi-tab" data-bs-toggle="tab"
                            data-bs-target="#vi-content" type="button" role="tab">
                            🇻🇳 {{ __('admin.services.vietnamese') }}
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="en-tab" data-bs-toggle="tab" data-bs-target="#en-content"
                            type="button" role="tab">
                            🇬🇧 {{ __('admin.services.english') }}
                        </button>
                    </li>
                </ul>

                <div class="tab-content">
                    <!-- Vietnamese Content -->
                    <div class="tab-pane fade show active" id="vi-content" role="tabpanel">
                        <div class="mb-4">
                            <label class="form-label fw-bold">{{ __('admin.services.title_vi') }} *</label>
                            <input type="text" class="form-control" id="title-vi" name="title_vi"
                                value="{{ old('title_vi') }}" placeholder="{{ __('admin.services.title_vi_placeholder') }}" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">{{ __('admin.services.slug_label') }}</label>
                            <input type="text" class="form-control bg-light" id="slug" name="slug"
                                value="{{ old('slug') }}" placeholder="{{ __('admin.services.slug_placeholder') }}" readonly>
                            <small class="text-muted">{{ __('admin.services.slug_help') }}</small>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">{{ __('admin.services.short_description_vi') }}</label>
                            <input type="text" class="form-control" name="short_description_vi"
                                value="{{ old('short_description_vi') }}" placeholder="{{ __('admin.services.short_description_placeholder') }}" maxlength="255">
                            <small class="text-muted">{{ __('admin.services.max_255_chars') }}</small>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">{{ __('admin.services.content_vi') }}</label>
                            <textarea class="form-control" id="tyni-vi" name="content_vi" rows="10" placeholder="{{ __('admin.services.content_placeholder') }}">{{ old('content_vi') }}</textarea>
                        </div>
                    </div>

                    <!-- English Content -->
                    <div class="tab-pane fade" id="en-content" role="tabpanel">
                        <div class="mb-4">
                            <label class="form-label fw-bold">{{ __('admin.services.title_en') }} *</label>
                            <input type="text" class="form-control" name="title_en"
                                value="{{ old('title_en') }}" placeholder="{{ __('admin.services.title_en_placeholder') }}" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">{{ __('admin.services.short_description_en') }}</label>
                            <input type="text" class="form-control" name="short_description_en"
                                value="{{ old('short_description_en') }}" placeholder="{{ __('admin.services.short_description_en_placeholder') }}" maxlength="255">
                            <small class="text-muted">{{ __('admin.services.max_255_chars_en') }}</small>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">{{ __('admin.services.content_en') }}</label>
                            <textarea class="form-control" id="tyni-en" name="content_en" rows="10" placeholder="{{ __('admin.services.content_en_placeholder') }}">{{ old('content_en') }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- Settings -->
                <hr class="my-4">
                <h5 class="fw-bold mb-3">{{ __('admin.services.settings') }}</h5>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-check form-switch mt-4">
                            <input class="form-check-input" type="checkbox" name="is_featured" id="is_featured"
                                {{ old('is_featured') ? 'checked' : '' }}>
                            <label class="form-check-label fw-bold" for="is_featured">
                                <i class="ri-star-line"></i> {{ __('admin.services.mark_featured') }}
                            </label>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-check form-switch mt-4">
                            <input class="form-check-input" type="checkbox" name="is_active" id="is_active"
                                {{ old('is_active', true) ? 'checked' : '' }}>
                            <label class="form-check-label fw-bold" for="is_active">
                                <i class="ri-checkbox-circle-line"></i> {{ __('admin.services.active_status') }}
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Submit Buttons -->
                <div class="d-flex justify-content-end gap-2 mt-4">
                    <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
                        <i class="ri-arrow-left-line"></i> {{ __('admin.services.cancel') }}
                    </a>
                    <button type="submit" class="btn btn-primary fw-normal text-white">
                        <i class="ri-save-line"></i> {{ __('admin.services.save_service') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        // Initialize TinyMCE
        tinymce.init({
            selector: '.tinymce-editor',
            height: 400,
            menubar: false,
            plugins: [
                'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount'
            ],
            toolbar: 'undo redo | blocks | ' +
                'bold italic underline strikethrough | forecolor backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | link image | code',
            content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; font-size: 14px }',
            relative_urls: false,
            remove_script_host: false,
            convert_urls: true,
        });

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
                const validTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif', 'image/svg+xml', 'image/webp', 'image/avif', 'image/bmp', 'image/x-icon', 'image/tiff'];
                if (!validTypes.includes(file.type)) {
                    alert('{{ __('admin.services.invalid_image_alert') }}');
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
        document.getElementById('service-create-form').addEventListener('submit', function(e) {
            e.preventDefault();

            // Sync TinyMCE content
            tinymce.triggerSave();

            const formData = new FormData(this);
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;

            // Disable button and show loading
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="ri-loader-4-line spinner-border spinner-border-sm"></i> {{ __('admin.services.saving') }}';

            fetch('{{ route('admin.services.store') }}', {
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
                        throw new Error(data.message || '{{ __('admin.services.error_occurred') }}');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    let errorMessage = '{{ __('admin.services.error_occurred') }}';

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
                        <strong>{{ __('admin.services.error_heading') }}</strong> ${errorMessage}
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
