@extends('backend.layouts.app')
@props(['pageTitle' => 'Thêm Dự án mới'])
@section('content-backend')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 mt-1">
        <h3 class="mb-0">{{ $pageTitle }}</h3>
        <x-admin.ui.breadcrumb :pageTitle="$pageTitle" parentTitle="Quản lý Dự án" :parentRoute="route('admin.projects.index')" />
    </div>

    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data" id="projectForm">
        @csrf

        <div class="row">
            <div class="col-lg-8">
                <!-- Thông tin cơ bản -->
                <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                    <h4 class="mb-3"><i class="ri-information-line me-2"></i>Thông tin cơ bản</h4>

                    <!-- Language Tabs -->
                    <ul class="nav nav-tabs mb-3" id="basicInfoTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="vi-basic-tab" data-bs-toggle="tab" data-bs-target="#vi-basic" type="button">
                                <i class="ri-translate me-1"></i> Tiếng Việt
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="en-basic-tab" data-bs-toggle="tab" data-bs-target="#en-basic" type="button">
                                <i class="ri-global-line me-1"></i> English
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content" id="basicInfoTabContent">
                        <!-- Tiếng Việt Tab -->
                        <div class="tab-pane fade show active" id="vi-basic" role="tabpanel">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Tiêu đề <span class="text-danger">*</span></label>
                                <input type="text" name="title_vi" class="form-control @error('title_vi') is-invalid @enderror"
                                       value="{{ old('title_vi') }}" required>
                                @error('title_vi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Loại dự án</label>
                                <input type="text" name="project_type_vi" class="form-control @error('project_type_vi') is-invalid @enderror"
                                       value="{{ old('project_type_vi') }}" placeholder="VD: Xây dựng">
                                @error('project_type_vi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Mô tả ngắn</label>
                                <textarea name="short_description_vi" rows="3" class="form-control @error('short_description_vi') is-invalid @enderror">{{ old('short_description_vi') }}</textarea>
                                @error('short_description_vi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Địa điểm</label>
                                <input type="text" name="location_vi" class="form-control @error('location_vi') is-invalid @enderror"
                                       value="{{ old('location_vi') }}">
                                @error('location_vi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- English Tab -->
                        <div class="tab-pane fade" id="en-basic" role="tabpanel">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Title <span class="text-danger">*</span></label>
                                <input type="text" name="title_en" class="form-control @error('title_en') is-invalid @enderror"
                                       value="{{ old('title_en') }}" required>
                                @error('title_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Project Type</label>
                                <input type="text" name="project_type_en" class="form-control @error('project_type_en') is-invalid @enderror"
                                       value="{{ old('project_type_en') }}" placeholder="E.g: Building">
                                @error('project_type_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Short Description</label>
                                <textarea name="short_description_en" rows="3" class="form-control @error('short_description_en') is-invalid @enderror">{{ old('short_description_en') }}</textarea>
                                @error('short_description_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Location</label>
                                <input type="text" name="location_en" class="form-control @error('location_en') is-invalid @enderror"
                                       value="{{ old('location_en') }}">
                                @error('location_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Common Fields (không phụ thuộc ngôn ngữ) -->
                    <hr class="my-4">

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Số dự án</label>
                            <input type="text" name="project_number" class="form-control @error('project_number') is-invalid @enderror"
                                   value="{{ old('project_number') }}" placeholder="Tự động tạo">
                            <small class="text-muted">VD: 01, 02, 03...</small>
                            @error('project_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Trạng thái <span class="text-danger">*</span></label>
                            <select name="status" class="form-select @error('status') is-invalid @enderror" required>
                                <option value="in_progress" {{ old('status') === 'in_progress' ? 'selected' : '' }}>Đang thực hiện</option>
                                <option value="completed" {{ old('status') === 'completed' ? 'selected' : '' }}>Hoàn thành</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Ngày khởi công</label>
                            <input type="date" name="commencement_date" class="form-control @error('commencement_date') is-invalid @enderror"
                                   value="{{ old('commencement_date') }}">
                            @error('commencement_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Ngày hoàn thành</label>
                            <input type="date" name="completion_date" class="form-control @error('completion_date') is-invalid @enderror"
                                   value="{{ old('completion_date') }}">
                            @error('completion_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Nội dung chi tiết -->
                <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                    <h4 class="mb-3"><i class="ri-file-text-line me-2"></i>Nội dung chi tiết</h4>

                    <!-- Description Tabs -->
                    <ul class="nav nav-tabs mb-3" id="descriptionTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="vi-desc-tab" data-bs-toggle="tab" data-bs-target="#vi-desc" type="button">
                                <i class="ri-translate me-1"></i> Tiếng Việt
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="en-desc-tab" data-bs-toggle="tab" data-bs-target="#en-desc" type="button">
                                <i class="ri-global-line me-1"></i> English
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content" id="descriptionTabContent">
                        <!-- Tiếng Việt -->
                        <div class="tab-pane fade show active" id="vi-desc" role="tabpanel">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Mô tả chi tiết</label>
                                <textarea name="description_vi" id="tyni-vi" rows="10" class="form-control @error('description_vi') is-invalid @enderror">{{ old('description_vi') }}</textarea>
                                @error('description_vi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- English -->
                        <div class="tab-pane fade" id="en-desc" role="tabpanel">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Detailed Description</label>
                                <textarea name="description_en" id="tyni-en" rows="10" class="form-control @error('description_en') is-invalid @enderror">{{ old('description_en') }}</textarea>
                                @error('description_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Đặc điểm -->
                <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                    <h4 class="mb-3"><i class="ri-list-check me-2"></i>Đặc điểm dự án</h4>

                    <!-- Features Tabs -->
                    <ul class="nav nav-tabs mb-3" id="featuresTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="vi-features-tab" data-bs-toggle="tab" data-bs-target="#vi-features" type="button">
                                <i class="ri-translate me-1"></i> Tiếng Việt
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="en-features-tab" data-bs-toggle="tab" data-bs-target="#en-features" type="button">
                                <i class="ri-global-line me-1"></i> English
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content" id="featuresTabContent">
                        <!-- Tiếng Việt -->
                        <div class="tab-pane fade show active" id="vi-features" role="tabpanel">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Đặc điểm</label>
                                <div id="features_vi_container">
                                    <div class="input-group mb-2">
                                        <input type="text" name="features_vi[]" class="form-control" placeholder="Nhập đặc điểm">
                                        <button type="button" class="btn btn-primary" onclick="addFeature('vi')">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- English -->
                        <div class="tab-pane fade" id="en-features" role="tabpanel">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Features</label>
                                <div id="features_en_container">
                                    <div class="input-group mb-2">
                                        <input type="text" name="features_en[]" class="form-control" placeholder="Enter feature">
                                        <button type="button" class="btn btn-primary" onclick="addFeature('en')">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Hình ảnh -->
                <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                    <h4 class="mb-3"><i class="ri-image-line me-2"></i>Hình ảnh</h4>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Ảnh chính</label>
                        <input type="file" name="main_image" class="form-control @error('main_image') is-invalid @enderror"
                               accept="image/*" onchange="previewImage(this, 'mainImagePreview')">
                        <div id="mainImagePreview" class="mt-2"></div>
                        @error('main_image')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Thư viện ảnh</label>
                        <input type="file" name="gallery_images[]" class="form-control @error('gallery_images.*') is-invalid @enderror"
                               accept="image/*" multiple onchange="previewGallery(this)">
                        <div id="galleryPreview" class="mt-2 row g-2"></div>
                        @error('gallery_images.*')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Thông tin bổ sung -->
                <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                    <h4 class="mb-3"><i class="ri-information-line me-2"></i>Thông tin bổ sung</h4>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Tên khách hàng</label>
                        <input type="text" name="client_name" class="form-control @error('client_name') is-invalid @enderror"
                               value="{{ old('client_name') }}">
                        @error('client_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Ngân sách (VND)</label>
                        <input type="number" name="budget" class="form-control @error('budget') is-invalid @enderror"
                               value="{{ old('budget') }}" step="0.01" min="0">
                        @error('budget')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Diện tích</label>
                        <input type="text" name="area" class="form-control @error('area') is-invalid @enderror"
                               value="{{ old('area') }}" placeholder="VD: 5000 m²">
                        @error('area')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Thứ tự</label>
                        <input type="number" name="order" class="form-control @error('order') is-invalid @enderror"
                               value="{{ old('order', 0) }}" min="0">
                        @error('order')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" name="is_featured" id="is_featured"
                               {{ old('is_featured') ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_featured">
                            <i class="ri-star-line me-1"></i>Dự án nổi bật
                        </label>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="is_active" id="is_active"
                               {{ old('is_active', true) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active">
                            <i class="ri-eye-line me-1"></i>Hiển thị
                        </label>
                    </div>
                </div>

                <!-- Submit buttons -->
                <div class="card bg-white rounded-10 border border-white p-20">
                    <button type="submit" class="btn btn-primary w-100 mb-2">
                        <i class="ri-save-line me-2"></i>Lưu dự án
                    </button>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-secondary w-100">
                        <i class="ri-arrow-left-line me-2"></i>Quay lại
                    </a>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        // Initialize TinyMCE
        tinymce.init({
            selector: '.tinymce',
            height: 400,
            menubar: false,
            plugins: 'lists link image code',
            toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright | bullist numlist | link image | code'
        });

        // Preview main image
        function previewImage(input, previewId) {
            const preview = document.getElementById(previewId);
            preview.innerHTML = '';

            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.innerHTML = `<img src="${e.target.result}" class="img-fluid rounded" style="max-height: 200px;">`;
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        // Preview gallery images
        function previewGallery(input) {
            const preview = document.getElementById('galleryPreview');
            preview.innerHTML = '';

            if (input.files) {
                Array.from(input.files).forEach((file, index) => {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const col = document.createElement('div');
                        col.className = 'col-6';
                        col.innerHTML = `<img src="${e.target.result}" class="img-fluid rounded" style="height: 100px; object-fit: cover;">`;
                        preview.appendChild(col);
                    }
                    reader.readAsDataURL(file);
                });
            }
        }

        // Add feature field
        function addFeature(lang) {
            const container = document.getElementById(`features_${lang}_container`);
            const div = document.createElement('div');
            div.className = 'input-group mb-2';
            div.innerHTML = `
                <input type="text" name="features_${lang}[]" class="form-control" placeholder="${lang === 'vi' ? 'Nhập đặc điểm' : 'Enter feature'}">
                <button type="button" class="btn btn-danger" onclick="this.parentElement.remove()">
                    <i class="ri-delete-bin-line"></i>
                </button>
            `;
            container.appendChild(div);
        }
    </script>
@endpush
