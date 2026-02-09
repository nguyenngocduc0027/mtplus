<form id="section{{ $sectionNumber }}-form" enctype="multipart/form-data">
    @csrf

    <div class="alert alert-info mb-4">
        <i class="fas fa-info-circle"></i> <strong>{{ __('admin.areas_operation.section_' . $sectionNumber) }}</strong> - {{ __('admin.areas_operation.section_management') }} {{ $sectionNumber }} {{ __('admin.areas_operation.page_content') }}
    </div>

    <!-- Image Layout Selection -->
    <div class="form-group mb-4">
        <label class="form-label fw-bold">{{ __('admin.areas_operation.image_position') }} *</label>
        <div class="d-flex gap-3">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="image_layout" id="layout_left_{{ $sectionNumber }}"
                    value="left" {{ old('image_layout', $section->image_layout ?? 'left') == 'left' ? 'checked' : '' }}>
                <label class="form-check-label" for="layout_left_{{ $sectionNumber }}">
                    {{ __('admin.areas_operation.image_left') }}
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="image_layout" id="layout_right_{{ $sectionNumber }}"
                    value="right" {{ old('image_layout', $section->image_layout ?? 'left') == 'right' ? 'checked' : '' }}>
                <label class="form-check-label" for="layout_right_{{ $sectionNumber }}">
                    {{ __('admin.areas_operation.image_right') }}
                </label>
            </div>
        </div>
    </div>

    <hr class="my-4">

    <!-- Images Section -->
    <h5 class="fw-bold mb-3">{{ __('admin.areas_operation.images') }}</h5>
    <div class="row mb-4">
        <!-- Main Image -->
        <div class="col-lg-6">
            <div class="form-group mb-4 only-file-upload" id="main-image-upload-{{ $sectionNumber }}">
                <label class="label fs-16 fw-bold">{{ __('admin.areas_operation.main_image') }}</label>
                <div class="form-control text-center position-relative upload-box-{{ $sectionNumber }}">
                    <div class="product-upload" id="default-main-upload-ui-{{ $sectionNumber }}">
                        <label class="file-upload mb-0">
                            <i class="ri-image-line bg-primary bg-opacity-10 p-2 rounded-1 text-primary fs-24"></i>
                            <span class="d-block text-body fs-14 mt-2">{{ __('admin.areas_operation.drag_drop') }} <span
                                    class="text-primary text-decoration-underline">{{ __('admin.areas_operation.choose_file') }}</span></span>
                            <span class="d-block text-muted fs-12 mt-1">JPG, PNG, GIF (Max: 2MB) - 800x600px</span>
                        </label>
                        <label class="position-absolute top-0 bottom-0 start-0 end-0 cursor" id="main-upload-container-{{ $sectionNumber }}">
                            <input class="form__file bottom-0" id="main-image-input-{{ $sectionNumber }}" name="main_image" type="file" accept="image/*" onchange="handleMainImageUpload{{ $sectionNumber }}(this)">
                        </label>
                    </div>
                    <div id="main-image-preview-container-{{ $sectionNumber }}" style="display: {{ $section->main_image_path ? 'flex' : 'none' }};">
                        <div class="position-relative">
                            <img id="main-image-preview-{{ $sectionNumber }}" src="{{ $section->main_image_path ? asset($section->main_image_path) : '' }}" alt="Preview" class="rounded cursor-pointer" onclick="document.getElementById('main-image-input-{{ $sectionNumber }}').click()">
                            <button type="button" class="btn btn-danger remove-photo-btn position-absolute" style="top: 10px; right: 10px;" onclick="removeMainImage{{ $sectionNumber }}()" title="{{ __('admin.areas_operation.delete_image') }}">
                                <i class="ri-close-line fs-18"></i>
                            </button>
                        </div>
                        <div class="position-absolute bottom-0 start-0 end-0 text-center mb-3">
                            <span class="badge bg-dark bg-opacity-75 text-white px-3 py-2">
                                <i class="ri-edit-line me-1"></i> {{ __('admin.areas_operation.click_to_change') }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Thumbnail Image -->
        <div class="col-lg-6">
            <div class="form-group mb-4 only-file-upload" id="thumbnail-upload-{{ $sectionNumber }}">
                <label class="label fs-16 fw-bold">{{ __('admin.areas_operation.thumbnail_image') }}</label>
                <div class="form-control text-center position-relative upload-box-{{ $sectionNumber }}">
                    <div class="product-upload" id="default-thumbnail-upload-ui-{{ $sectionNumber }}">
                        <label class="file-upload mb-0">
                            <i class="ri-image-line bg-primary bg-opacity-10 p-2 rounded-1 text-primary fs-24"></i>
                            <span class="d-block text-body fs-14 mt-2">{{ __('admin.areas_operation.drag_drop') }} <span
                                    class="text-primary text-decoration-underline">{{ __('admin.areas_operation.choose_file') }}</span></span>
                            <span class="d-block text-muted fs-12 mt-1">JPG, PNG, GIF (Max: 2MB) - 400x300px</span>
                        </label>
                        <label class="position-absolute top-0 bottom-0 start-0 end-0 cursor" id="thumbnail-upload-container-{{ $sectionNumber }}">
                            <input class="form__file bottom-0" id="thumbnail-input-{{ $sectionNumber }}" name="thumbnail_image" type="file" accept="image/*" onchange="handleThumbnailUpload{{ $sectionNumber }}(this)">
                        </label>
                    </div>
                    <div id="thumbnail-preview-container-{{ $sectionNumber }}" style="display: {{ $section->thumbnail_image_path ? 'flex' : 'none' }};">
                        <div class="position-relative">
                            <img id="thumbnail-preview-{{ $sectionNumber }}" src="{{ $section->thumbnail_image_path ? asset($section->thumbnail_image_path) : '' }}" alt="Preview" class="rounded cursor-pointer" onclick="document.getElementById('thumbnail-input-{{ $sectionNumber }}').click()">
                            <button type="button" class="btn btn-danger remove-photo-btn position-absolute" style="top: 10px; right: 10px;" onclick="removeThumbnail{{ $sectionNumber }}()" title="{{ __('admin.areas_operation.delete_image') }}">
                                <i class="ri-close-line fs-18"></i>
                            </button>
                        </div>
                        <div class="position-absolute bottom-0 start-0 end-0 text-center mb-3">
                            <span class="badge bg-dark bg-opacity-75 text-white px-3 py-2">
                                <i class="ri-edit-line me-1"></i> {{ __('admin.areas_operation.click_to_change') }}
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
            <button class="nav-link active" id="section{{ $sectionNumber }}-vi-tab" data-bs-toggle="tab"
                data-bs-target="#section{{ $sectionNumber }}-vi-content" type="button" role="tab">
                {{ __('admin.areas_operation.vietnamese') }}
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="section{{ $sectionNumber }}-en-tab" data-bs-toggle="tab"
                data-bs-target="#section{{ $sectionNumber }}-en-content" type="button" role="tab">
                {{ __('admin.areas_operation.english') }}
            </button>
        </li>
    </ul>

    <div class="tab-content">
        <!-- Vietnamese Content -->
        <div class="tab-pane fade show active" id="section{{ $sectionNumber }}-vi-content" role="tabpanel">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">{{ __('admin.areas_operation.subtitle_vi') }} *</label>
                    <input type="text" class="form-control" name="subtitle_vi"
                        value="{{ old('subtitle_vi', $section->subtitle_vi ?? '') }}"
                        placeholder="Ví dụ: LĨNH VỰC HOẠT ĐỘNG">
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">{{ __('admin.areas_operation.title_vi') }} *</label>
                    <input type="text" class="form-control" name="title_vi"
                        value="{{ old('title_vi', $section->title_vi ?? '') }}"
                        placeholder="Ví dụ: Xây dựng dân dụng và công nghiệp">
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">{{ __('admin.areas_operation.description_vi') }}</label>
                    <textarea class="form-control" name="description_vi" rows="4"
                        placeholder="Nhập mô tả chi tiết về lĩnh vực hoạt động...">{{ old('description_vi', $section->description_vi ?? '') }}</textarea>
                </div>

                <div class="col-md-12 mb-4">
                    <h6 class="fw-bold">{{ __('admin.areas_operation.highlights_vi') }}</h6>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">{{ __('admin.areas_operation.highlight_1') }}</label>
                    <input type="text" class="form-control" name="card_1_text_vi"
                        value="{{ old('card_1_text_vi', $section->card_1_text_vi ?? '') }}"
                        placeholder="Ví dụ: Nhà ở cao tầng và biệt thự">
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">{{ __('admin.areas_operation.highlight_2') }}</label>
                    <input type="text" class="form-control" name="card_2_text_vi"
                        value="{{ old('card_2_text_vi', $section->card_2_text_vi ?? '') }}"
                        placeholder="Ví dụ: Trung tâm thương mại và văn phòng">
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">{{ __('admin.areas_operation.highlight_3') }}</label>
                    <input type="text" class="form-control" name="card_3_text_vi"
                        value="{{ old('card_3_text_vi', $section->card_3_text_vi ?? '') }}"
                        placeholder="Ví dụ: Nhà máy và kho bãi công nghiệp">
                </div>
            </div>
        </div>

        <!-- English Content -->
        <div class="tab-pane fade" id="section{{ $sectionNumber }}-en-content" role="tabpanel">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">{{ __('admin.areas_operation.subtitle_en') }} *</label>
                    <input type="text" class="form-control" name="subtitle_en"
                        value="{{ old('subtitle_en', $section->subtitle_en ?? '') }}"
                        placeholder="Example: AREAS OF OPERATION">
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">{{ __('admin.areas_operation.title_en') }} *</label>
                    <input type="text" class="form-control" name="title_en"
                        value="{{ old('title_en', $section->title_en ?? '') }}"
                        placeholder="Example: Residential and Industrial Construction">
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">{{ __('admin.areas_operation.description_en') }}</label>
                    <textarea class="form-control" name="description_en" rows="4"
                        placeholder="Enter detailed description about the area of operation...">{{ old('description_en', $section->description_en ?? '') }}</textarea>
                </div>

                <div class="col-md-12 mb-4">
                    <h6 class="fw-bold">{{ __('admin.areas_operation.highlights_en') }}</h6>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">{{ __('admin.areas_operation.key_highlight_1') }}</label>
                    <input type="text" class="form-control" name="card_1_text_en"
                        value="{{ old('card_1_text_en', $section->card_1_text_en ?? '') }}"
                        placeholder="Example: High-rise buildings and villas">
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">{{ __('admin.areas_operation.key_highlight_2') }}</label>
                    <input type="text" class="form-control" name="card_2_text_en"
                        value="{{ old('card_2_text_en', $section->card_2_text_en ?? '') }}"
                        placeholder="Example: Shopping centers and offices">
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">{{ __('admin.areas_operation.key_highlight_3') }}</label>
                    <input type="text" class="form-control" name="card_3_text_en"
                        value="{{ old('card_3_text_en', $section->card_3_text_en ?? '') }}"
                        placeholder="Example: Factories and industrial warehouses">
                </div>
            </div>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="d-flex justify-content-end gap-2 mt-4">
        <button type="button" class="btn btn-secondary" onclick="location.reload()">
            <i class="fas fa-redo"></i> {{ __('admin.areas_operation.reset') }}
        </button>
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> {{ __('admin.areas_operation.save_changes') }}
        </button>
    </div>
</form>

<style>
    .upload-box-{{ $sectionNumber }} {
        min-height: 350px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #main-image-preview-container-{{ $sectionNumber }},
    #thumbnail-preview-container-{{ $sectionNumber }} {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #main-image-preview-{{ $sectionNumber }},
    #thumbnail-preview-{{ $sectionNumber }} {
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

<script>
    // Handle main image upload and preview
    function handleMainImageUpload{{ $sectionNumber }}(input) {
        if (input.files && input.files[0]) {
            const file = input.files[0];

            // Validate file type
            const validTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
            if (!validTypes.includes(file.type)) {
                alert('{{ __('admin.areas_operation.invalid_image') }}');
                input.value = '';
                return;
            }


            // Show preview
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('main-image-preview-{{ $sectionNumber }}').src = e.target.result;
                document.getElementById('main-image-preview-container-{{ $sectionNumber }}').style.display = 'flex';
                document.getElementById('default-main-upload-ui-{{ $sectionNumber }}').style.display = 'none';
            }
            reader.readAsDataURL(file);
        }
    }

    // Remove main image and reset upload box
    function removeMainImage{{ $sectionNumber }}() {
        document.getElementById('main-image-input-{{ $sectionNumber }}').value = '';
        document.getElementById('main-image-preview-{{ $sectionNumber }}').src = '';
        document.getElementById('main-image-preview-container-{{ $sectionNumber }}').style.display = 'none';
        document.getElementById('default-main-upload-ui-{{ $sectionNumber }}').style.display = 'block';
    }

    // Handle thumbnail upload and preview
    function handleThumbnailUpload{{ $sectionNumber }}(input) {
        if (input.files && input.files[0]) {
            const file = input.files[0];

            // Validate file type
            const validTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
            if (!validTypes.includes(file.type)) {
                alert('{{ __('admin.areas_operation.invalid_image') }}');
                input.value = '';
                return;
            }


            // Show preview
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('thumbnail-preview-{{ $sectionNumber }}').src = e.target.result;
                document.getElementById('thumbnail-preview-container-{{ $sectionNumber }}').style.display = 'flex';
                document.getElementById('default-thumbnail-upload-ui-{{ $sectionNumber }}').style.display = 'none';
            }
            reader.readAsDataURL(file);
        }
    }

    // Remove thumbnail and reset upload box
    function removeThumbnail{{ $sectionNumber }}() {
        document.getElementById('thumbnail-input-{{ $sectionNumber }}').value = '';
        document.getElementById('thumbnail-preview-{{ $sectionNumber }}').src = '';
        document.getElementById('thumbnail-preview-container-{{ $sectionNumber }}').style.display = 'none';
        document.getElementById('default-thumbnail-upload-ui-{{ $sectionNumber }}').style.display = 'block';
    }

    // Initialize: hide default UI if there's a current image
    document.addEventListener('DOMContentLoaded', function() {
        const mainPreviewContainer = document.getElementById('main-image-preview-container-{{ $sectionNumber }}');
        const thumbnailPreviewContainer = document.getElementById('thumbnail-preview-container-{{ $sectionNumber }}');

        if (mainPreviewContainer.style.display === 'flex') {
            document.getElementById('default-main-upload-ui-{{ $sectionNumber }}').style.display = 'none';
        }

        if (thumbnailPreviewContainer.style.display === 'flex') {
            document.getElementById('default-thumbnail-upload-ui-{{ $sectionNumber }}').style.display = 'none';
        }
    });

    // Form submission
    document.getElementById('section{{ $sectionNumber }}-form').addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);
        const submitBtn = this.querySelector('button[type="submit"]');
        const originalBtnText = submitBtn.innerHTML;

        // Disable button and show loading
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> {{ __('admin.areas_operation.saving') }}';

        fetch('{{ route('admin.areas-operation.update', $sectionNumber) }}', {
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
                        title: '{{ __('admin.areas_operation.success') }}',
                        text: data.message,
                        timer: 2000,
                        showConfirmButton: false
                    });
                } else {
                    throw new Error(data.message || '{{ __('admin.areas_operation.error_occurred') }}');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    icon: 'error',
                    title: '{{ __('admin.areas_operation.error') }}',
                    text: error.message || '{{ __('admin.areas_operation.update_error') }}',
                });
            })
            .finally(() => {
                // Re-enable button
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnText;
            });
    });
</script>
