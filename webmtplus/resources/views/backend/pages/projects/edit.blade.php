@extends('backend.layouts.app')
@props(['pageTitle' => __('admin.projects.edit_project')])
@section('content-backend')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 mt-1">
        <h3 class="mb-0">{{ $pageTitle }}</h3>
        <x-admin.ui.breadcrumb :pageTitle="$pageTitle" :parentTitle="__('admin.projects.all_projects')" :parentRoute="route('admin.projects.index')" />
    </div>

    <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST" enctype="multipart/form-data" id="projectForm">
        @method('PUT')
        @csrf

        <div class="row">
            <div class="col-lg-8">
                <!-- Thông tin cơ bản -->
                <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                    <h4 class="mb-3"><i class="ri-information-line me-2"></i>{{ __('admin.projects.basic_info') }}</h4>

                    <!-- Tabs for Basic Info -->
                    <ul class="nav nav-tabs mb-3" id="basicInfoTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="vi-basic-tab" data-bs-toggle="tab" data-bs-target="#vi-basic" type="button" role="tab">
                                Tiếng Việt
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="en-basic-tab" data-bs-toggle="tab" data-bs-target="#en-basic" type="button" role="tab">
                                English
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content" id="basicInfoTabContent">
                        <!-- Vietnamese Tab -->
                        <div class="tab-pane fade show active" id="vi-basic" role="tabpanel">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Tiêu đề (VI) <span class="text-danger">*</span></label>
                                <input type="text" name="title_vi" class="form-control @error('title_vi') is-invalid @enderror"
                                       value="{{ old('title_vi', $project->title_vi) }}" required>
                                @error('title_vi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Loại dự án (VI)</label>
                                <input type="text" name="project_type_vi" class="form-control @error('project_type_vi') is-invalid @enderror"
                                       value="{{ old('project_type_vi', $project->project_type_vi) }}" placeholder="VD: Xây dựng">
                                @error('project_type_vi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Mô tả ngắn (VI)</label>
                                <textarea name="short_description_vi" rows="3" class="form-control @error('short_description_vi') is-invalid @enderror">{{ old('short_description_vi', $project->short_description_vi) }}</textarea>
                                @error('short_description_vi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Địa điểm (VI)</label>
                                <input type="text" name="location_vi" class="form-control @error('location_vi') is-invalid @enderror"
                                       value="{{ old('location_vi', $project->location_vi) }}">
                                @error('location_vi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- English Tab -->
                        <div class="tab-pane fade" id="en-basic" role="tabpanel">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Tiêu đề (EN) <span class="text-danger">*</span></label>
                                <input type="text" name="title_en" class="form-control @error('title_en') is-invalid @enderror"
                                       value="{{ old('title_en', $project->title_en) }}" required>
                                @error('title_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Loại dự án (EN)</label>
                                <input type="text" name="project_type_en" class="form-control @error('project_type_en') is-invalid @enderror"
                                       value="{{ old('project_type_en', $project->project_type_en) }}" placeholder="E.g: Building">
                                @error('project_type_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Mô tả ngắn (EN)</label>
                                <textarea name="short_description_en" rows="3" class="form-control @error('short_description_en') is-invalid @enderror">{{ old('short_description_en', $project->short_description_en) }}</textarea>
                                @error('short_description_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Địa điểm (EN)</label>
                                <input type="text" name="location_en" class="form-control @error('location_en') is-invalid @enderror"
                                       value="{{ old('location_en', $project->location_en) }}">
                                @error('location_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <!-- Common Fields (not language-specific) -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">{{ __("admin.projects.project_number_label") }}</label>
                            <input type="text" name="project_number" class="form-control @error('project_number') is-invalid @enderror"
                                   value="{{ old('project_number', $project->project_number) }}" placeholder="{{ __("admin.projects.project_number_placeholder") }}">
                            <small class="text-muted">{{ __("admin.projects.project_number_help") }}</small>
                            @error('project_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">{{ __("admin.projects.status_label") }} <span class="text-danger">*</span></label>
                            <select name="status" class="form-select form-control @error('status') is-invalid @enderror" required>
                                <option value="in_progress" {{ old('status', $project->status) === 'in_progress' ? 'selected' : '' }}>{{ __("admin.projects.status_in_progress_option") }}</option>
                                <option value="completed" {{ old('status', $project->status) === 'completed' ? 'selected' : '' }}>{{ __("admin.projects.status_completed_option") }}</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">{{ __("admin.projects.commencement_date_label") }}</label>
                            <input type="date" name="commencement_date" class="form-control @error('commencement_date') is-invalid @enderror"
                                   value="{{ old('commencement_date', optional($project->commencement_date)->format('Y-m-d')) }}">
                            @error('commencement_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">{{ __("admin.projects.completion_date_label") }}</label>
                            <input type="date" name="completion_date" class="form-control @error('completion_date') is-invalid @enderror"
                                   value="{{ old('completion_date', optional($project->completion_date)->format('Y-m-d')) }}">
                            @error('completion_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Nội dung chi tiết -->
                <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                    <h4 class="mb-3"><i class="ri-file-text-line me-2"></i>{{ __("admin.projects.detailed_content") }}</h4>

                    <!-- Tabs for Description -->
                    <ul class="nav nav-tabs mb-3" id="descriptionTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="vi-desc-tab" data-bs-toggle="tab" data-bs-target="#vi-desc" type="button" role="tab">
                                Tiếng Việt
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="en-desc-tab" data-bs-toggle="tab" data-bs-target="#en-desc" type="button" role="tab">
                                English
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content" id="descriptionTabContent">
                        <!-- Vietnamese Tab -->
                        <div class="tab-pane fade show active" id="vi-desc" role="tabpanel">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Mô tả chi tiết (VI)</label>
                                <textarea name="description_vi" id="tyni-vi" rows="10" class="form-control @error('description_vi') is-invalid @enderror">{{ old('description_vi', $project->description_vi) }}</textarea>
                                @error('description_vi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- English Tab -->
                        <div class="tab-pane fade" id="en-desc" role="tabpanel">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Mô tả chi tiết (EN)</label>
                                <textarea name="description_en" id="tyni-en" rows="10" class="form-control @error('description_en') is-invalid @enderror">{{ old('description_en', $project->description_en) }}</textarea>
                                @error('description_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Đặc điểm -->
                <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                    <h4 class="mb-3"><i class="ri-list-check me-2"></i>{{ __("admin.projects.features") }}</h4>

                    <!-- Tabs for Features -->
                    <ul class="nav nav-tabs mb-3" id="featuresTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="vi-features-tab" data-bs-toggle="tab" data-bs-target="#vi-features" type="button" role="tab">
                                Tiếng Việt
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="en-features-tab" data-bs-toggle="tab" data-bs-target="#en-features" type="button" role="tab">
                                English
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content" id="featuresTabContent">
                        <!-- Vietnamese Tab -->
                        <div class="tab-pane fade show active" id="vi-features" role="tabpanel">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Đặc điểm (VI)</label>
                                <div id="features_vi_container">
                                    @if($project->features_vi && count($project->features_vi) > 0)
                                        @foreach($project->features_vi as $feature)
                                            <div class="input-group mb-2">
                                                <input type="text" name="features_vi[]" class="form-control" placeholder="Nhập đặc điểm" value="{{ $feature }}">
                                                <button type="button" class="btn btn-danger" onclick="this.parentElement.remove()">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        @endforeach
                                    @endif
                                    <div class="input-group mb-2">
                                        <input type="text" name="features_vi[]" class="form-control" placeholder="Nhập đặc điểm">
                                        <button type="button" class="btn btn-primary" onclick="addFeature('vi')">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- English Tab -->
                        <div class="tab-pane fade" id="en-features" role="tabpanel">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Đặc điểm (EN)</label>
                                <div id="features_en_container">
                                    @if($project->features_en && count($project->features_en) > 0)
                                        @foreach($project->features_en as $feature)
                                            <div class="input-group mb-2">
                                                <input type="text" name="features_en[]" class="form-control" placeholder="Enter feature" value="{{ $feature }}">
                                                <button type="button" class="btn btn-danger" onclick="this.parentElement.remove()">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        @endforeach
                                    @endif
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
                    <h4 class="mb-3"><i class="ri-image-line me-2"></i>{{ __("admin.projects.images") }}</h4>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">{{ __("admin.projects.main_image") }}</label>
                        @if($project->main_image)
                            <div class="mb-2">
                                <img src="{{ $project->main_image }}" class="img-fluid rounded" style="max-height: 200px;">
                                <p class="text-muted small mt-1">{{ __("admin.projects.current_image") }}</p>
                            </div>
                        @endif
                        <input type="file" name="main_image" class="form-control @error('main_image') is-invalid @enderror"
                               accept="image/*" onchange="previewImage(this, 'mainImagePreview')">
                        <small class="text-muted">{{ __("admin.projects.select_new_image") }}</small>
                        <div id="mainImagePreview" class="mt-2"></div>
                        @error('main_image')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">{{ __("admin.projects.gallery_images") }}</label>
                        @if($project->gallery_images && count($project->gallery_images) > 0)
                            <div class="mb-2 row g-2">
                                @foreach($project->gallery_images as $image)
                                    <div class="col-6">
                                        <img src="{{ $image }}" class="img-fluid rounded" style="height: 100px; object-fit: cover;">
                                    </div>
                                @endforeach
                            </div>
                            <p class="text-muted small">Ảnh hiện tại</p>
                        @endif
                        <input type="file" name="gallery_images[]" class="form-control @error('gallery_images.*') is-invalid @enderror"
                               accept="image/*" multiple onchange="previewGallery(this)">
                        <small class="text-muted">{{ __("admin.projects.select_new_image") }}</small>
                        <div class="form-check mt-2">
                            <input type="checkbox" name="delete_gallery_images" id="delete_gallery" class="form-check-input">
                            <label for="delete_gallery" class="form-check-label">{{ __("admin.projects.delete_old_images") }}</label>
                        </div>
                        <div id="galleryPreview" class="mt-2 row g-2"></div>
                        @error('gallery_images.*')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Thông tin bổ sung -->
                <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                    <h4 class="mb-3"><i class="ri-information-line me-2"></i>{{ __("admin.projects.additional_info") }}</h4>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">{{ __("admin.projects.client_name") }}</label>
                        <input type="text" name="client_name" class="form-control @error('client_name') is-invalid @enderror"
                               value="{{ old('client_name', $project->client_name) }}">
                        @error('client_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">{{ __("admin.projects.budget") }}</label>
                        <input type="number" name="budget" class="form-control @error('budget') is-invalid @enderror"
                               value="{{ old('budget', $project->budget) }}" step="0.01" min="0">
                        @error('budget')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">{{ __("admin.projects.area") }}</label>
                        <input type="text" name="area" class="form-control @error('area') is-invalid @enderror"
                               value="{{ old('area', $project->area) }}" placeholder="{{ __("admin.projects.area_placeholder") }}">
                        @error('area')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">{{ __("admin.projects.order") }}</label>
                        <input type="number" name="order" class="form-control @error('order') is-invalid @enderror"
                               value="{{ old('order', $project->order) }}" min="0">
                        @error('order')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" name="is_featured" id="is_featured"
                               {{ old('is_featured', $project->is_featured) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_featured">
                            <i class="ri-star-line me-1"></i>{{ __("admin.projects.featured_project") }}
                        </label>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="is_active" id="is_active"
                               {{ old('is_active', $project->is_active) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active">
                            <i class="ri-eye-line me-1"></i>{{ __("admin.projects.show_project") }}
                        </label>
                    </div>
                </div>

                <!-- Submit buttons -->
                <div class="card bg-white rounded-10 border border-white p-20">
                    <button type="submit" class="btn btn-primary w-100 mb-2">
                        <i class="ri-save-line me-2"></i>{{ __("admin.projects.save_project") }}
                    </button>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-secondary w-100">
                        <i class="ri-arrow-left-line me-2"></i>{{ __("admin.projects.back") }}
                    </a>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <script>
      

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
