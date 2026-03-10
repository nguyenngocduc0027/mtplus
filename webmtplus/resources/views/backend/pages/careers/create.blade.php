@extends('backend.layouts.app')
@props(['pageTitle' => __('admin.careers.add_career')])
@section('content-backend')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 mt-1">
        <h3 class="mb-0">{{ $pageTitle }}</h3>
        <x-admin.ui.breadcrumb :pageTitle="$pageTitle" :parentTitle="__('admin.careers.all_careers')" :parentRoute="route('admin.careers.index')" />
    </div>

    <form action="{{ route('admin.careers.store') }}" method="POST" enctype="multipart/form-data" id="careerForm">
        @csrf

        <div class="row">
            <div class="col-lg-8">
                <!-- Basic Information -->
                <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                    <h4 class="mb-3"><i class="ri-information-line me-2"></i>{{ __('admin.careers.basic_info') }}</h4>

                    <!-- Language Tabs -->
                    <ul class="nav nav-tabs mb-3" id="basicInfoTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="vi-basic-tab" data-bs-toggle="tab" data-bs-target="#vi-basic" type="button">
                                <i class="ri-translate me-1"></i> {{ __('admin.careers.vietnamese') }}
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="en-basic-tab" data-bs-toggle="tab" data-bs-target="#en-basic" type="button">
                                <i class="ri-global-line me-1"></i> {{ __('admin.careers.english') }}
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content" id="basicInfoTabContent">
                        <!-- Vietnamese Tab -->
                        <div class="tab-pane fade show active" id="vi-basic" role="tabpanel">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">{{ __('admin.careers.title') }} <span class="text-danger">*</span></label>
                                <input type="text" name="title_vi" class="form-control @error('title_vi') is-invalid @enderror"
                                       value="{{ old('title_vi') }}" required>
                                @error('title_vi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">{{ __('admin.careers.location') }}</label>
                                <input type="text" name="location_vi" class="form-control @error('location_vi') is-invalid @enderror"
                                       value="{{ old('location_vi') }}" placeholder="{{ __('admin.careers.location_placeholder') }}">
                                @error('location_vi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">{{ __('admin.careers.department') }}</label>
                                <input type="text" name="department_vi" class="form-control @error('department_vi') is-invalid @enderror"
                                       value="{{ old('department_vi') }}" placeholder="{{ __('admin.careers.department_placeholder') }}">
                                @error('department_vi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">{{ __('admin.careers.description') }}</label>
                                <textarea name="description_vi" rows="4" class="form-control @error('description_vi') is-invalid @enderror">{{ old('description_vi') }}</textarea>
                                @error('description_vi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- English Tab -->
                        <div class="tab-pane fade" id="en-basic" role="tabpanel">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">{{ __('admin.careers.title') }} <span class="text-danger">*</span></label>
                                <input type="text" name="title_en" class="form-control @error('title_en') is-invalid @enderror"
                                       value="{{ old('title_en') }}" required>
                                @error('title_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">{{ __('admin.careers.location') }}</label>
                                <input type="text" name="location_en" class="form-control @error('location_en') is-invalid @enderror"
                                       value="{{ old('location_en') }}" placeholder="{{ __('admin.careers.location_placeholder_en') }}">
                                @error('location_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">{{ __('admin.careers.department') }}</label>
                                <input type="text" name="department_en" class="form-control @error('department_en') is-invalid @enderror"
                                       value="{{ old('department_en') }}" placeholder="{{ __('admin.careers.department_placeholder_en') }}">
                                @error('department_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">{{ __('admin.careers.description') }}</label>
                                <textarea name="description_en" rows="4" class="form-control @error('description_en') is-invalid @enderror">{{ old('description_en') }}</textarea>
                                @error('description_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Common Fields -->
                    <hr class="my-4">

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">{{ __('admin.careers.job_type') }} <span class="text-danger">*</span></label>
                            <select name="job_type" class="form-select form-control @error('job_type') is-invalid @enderror" required>
                                <option value="full-time" {{ old('job_type') === 'full-time' ? 'selected' : '' }}>{{ __('admin.careers.full_time') }}</option>
                                <option value="part-time" {{ old('job_type') === 'part-time' ? 'selected' : '' }}>{{ __('admin.careers.part_time') }}</option>
                                <option value="contract" {{ old('job_type') === 'contract' ? 'selected' : '' }}>{{ __('admin.careers.contract') }}</option>
                                <option value="internship" {{ old('job_type') === 'internship' ? 'selected' : '' }}>{{ __('admin.careers.internship') }}</option>
                            </select>
                            @error('job_type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">{{ __('admin.careers.experience_required') }}</label>
                            <input type="text" name="experience_required" class="form-control @error('experience_required') is-invalid @enderror"
                                   value="{{ old('experience_required') }}" placeholder="{{ __('admin.careers.experience_placeholder') }}">
                            @error('experience_required')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="form-label fw-semibold">{{ __('admin.careers.salary_display') }}</label>
                            <input type="text" name="salary_display" class="form-control @error('salary_display') is-invalid @enderror"
                                   value="{{ old('salary_display') }}" placeholder="{{ __('admin.careers.salary_display_placeholder') }}">
                            <small class="text-muted">{{ __('admin.careers.salary_display_help') }}</small>
                            @error('salary_display')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label fw-semibold">{{ __('admin.careers.salary_min') }}</label>
                            <input type="number" step="0.01" name="salary_min" class="form-control @error('salary_min') is-invalid @enderror"
                                   value="{{ old('salary_min') }}">
                            @error('salary_min')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label fw-semibold">{{ __('admin.careers.salary_max') }}</label>
                            <input type="number" step="0.01" name="salary_max" class="form-control @error('salary_max') is-invalid @enderror"
                                   value="{{ old('salary_max') }}">
                            @error('salary_max')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label fw-semibold">{{ __('admin.careers.salary_currency') }}</label>
                            <select name="salary_currency" class="form-select form-control @error('salary_currency') is-invalid @enderror">
                                <option value="VND" {{ old('salary_currency', 'VND') === 'VND' ? 'selected' : '' }}>VND</option>
                                <option value="USD" {{ old('salary_currency') === 'USD' ? 'selected' : '' }}>USD</option>
                            </select>
                            @error('salary_currency')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">{{ __('admin.careers.salary_period') }}</label>
                        <select name="salary_period" class="form-select form-control @error('salary_period') is-invalid @enderror">
                            <option value="monthly" {{ old('salary_period', 'monthly') === 'monthly' ? 'selected' : '' }}>{{ __('admin.careers.monthly') }}</option>
                            <option value="annually" {{ old('salary_period') === 'annually' ? 'selected' : '' }}>{{ __('admin.careers.annually') }}</option>
                            <option value="hourly" {{ old('salary_period') === 'hourly' ? 'selected' : '' }}>{{ __('admin.careers.hourly') }}</option>
                        </select>
                        @error('salary_period')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Responsibilities -->
                <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                    <h4 class="mb-3"><i class="ri-task-line me-2"></i>{{ __('admin.careers.responsibilities') }}</h4>

                    <ul class="nav nav-tabs mb-3" id="responsibilitiesTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="vi-resp-tab" data-bs-toggle="tab" data-bs-target="#vi-resp" type="button">
                                <i class="ri-translate me-1"></i> {{ __('admin.careers.vietnamese') }}
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="en-resp-tab" data-bs-toggle="tab" data-bs-target="#en-resp" type="button">
                                <i class="ri-global-line me-1"></i> {{ __('admin.careers.english') }}
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="vi-resp" role="tabpanel">
                            <div id="responsibilities-vi-list"></div>
                            <button type="button" class="btn btn-sm btn-outline-primary mt-2" onclick="addResponsibilityVI()">
                                + {{ __('admin.careers.add_responsibility') }}
                            </button>
                        </div>

                        <div class="tab-pane fade" id="en-resp" role="tabpanel">
                            <div id="responsibilities-en-list"></div>
                            <button type="button" class="btn btn-sm btn-outline-primary mt-2" onclick="addResponsibilityEN()">
                                + {{ __('admin.careers.add_responsibility') }}
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Qualifications -->
                <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                    <h4 class="mb-3"><i class="ri-file-list-line me-2"></i>{{ __('admin.careers.qualifications') }}</h4>

                    <ul class="nav nav-tabs mb-3" id="qualificationsTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="vi-qual-tab" data-bs-toggle="tab" data-bs-target="#vi-qual" type="button">
                                <i class="ri-translate me-1"></i> {{ __('admin.careers.vietnamese') }}
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="en-qual-tab" data-bs-toggle="tab" data-bs-target="#en-qual" type="button">
                                <i class="ri-global-line me-1"></i> {{ __('admin.careers.english') }}
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="vi-qual" role="tabpanel">
                            <div id="qualifications-vi-list"></div>
                            <button type="button" class="btn btn-sm btn-outline-primary mt-2" onclick="addQualificationVI()">
                                + {{ __('admin.careers.add_qualification') }}
                            </button>
                        </div>

                        <div class="tab-pane fade" id="en-qual" role="tabpanel">
                            <div id="qualifications-en-list"></div>
                            <button type="button" class="btn btn-sm btn-outline-primary mt-2" onclick="addQualificationEN()">
                                + {{ __('admin.careers.add_qualification') }}
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Benefits -->
                <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                    <h4 class="mb-3"><i class="ri-gift-line me-2"></i>{{ __('admin.careers.benefits') }}</h4>

                    <ul class="nav nav-tabs mb-3" id="benefitsTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="vi-ben-tab" data-bs-toggle="tab" data-bs-target="#vi-ben" type="button">
                                <i class="ri-translate me-1"></i> {{ __('admin.careers.vietnamese') }}
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="en-ben-tab" data-bs-toggle="tab" data-bs-target="#en-ben" type="button">
                                <i class="ri-global-line me-1"></i> {{ __('admin.careers.english') }}
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="vi-ben" role="tabpanel">
                            <div id="benefits-vi-list"></div>
                            <button type="button" class="btn btn-sm btn-outline-primary mt-2" onclick="addBenefitVI()">
                                + {{ __('admin.careers.add_benefit') }}
                            </button>
                        </div>

                        <div class="tab-pane fade" id="en-ben" role="tabpanel">
                            <div id="benefits-en-list"></div>
                            <button type="button" class="btn btn-sm btn-outline-primary mt-2" onclick="addBenefitEN()">
                                + {{ __('admin.careers.add_benefit') }}
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Application Details -->
                <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                    <h4 class="mb-3"><i class="ri-mail-send-line me-2"></i>{{ __('admin.careers.application_details') }}</h4>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">{{ __('admin.careers.application_email') }}</label>
                            <input type="email" name="application_email" class="form-control @error('application_email') is-invalid @enderror"
                                   value="{{ old('application_email') }}" placeholder="hr@company.com">
                            @error('application_email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">{{ __('admin.careers.application_deadline') }}</label>
                            <input type="date" name="application_deadline" class="form-control @error('application_deadline') is-invalid @enderror"
                                   value="{{ old('application_deadline') }}">
                            @error('application_deadline')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">{{ __('admin.careers.application_url') }}</label>
                        <input type="url" name="application_url" class="form-control @error('application_url') is-invalid @enderror"
                               value="{{ old('application_url') }}" placeholder="https://...">
                        <small class="text-muted">{{ __('admin.careers.application_url_help') }}</small>
                        @error('application_url')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">{{ __('admin.careers.positions_available') }}</label>
                        <input type="number" min="1" name="positions_available" class="form-control @error('positions_available') is-invalid @enderror"
                               value="{{ old('positions_available', 1) }}">
                        @error('positions_available')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Right Sidebar -->
            <div class="col-lg-4">
                <!-- Image -->
                <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                    <h4 class="mb-3"><i class="ri-image-line me-2"></i>{{ __('admin.careers.image') }}</h4>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">{{ __('admin.careers.main_image') }}</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" accept="image/*,image/svg+xml,.svg" onchange="previewImage(event)">
                        <small class="text-muted">{{ __('admin.careers.image_help') }}</small>
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        <div id="imagePreview" class="mt-3" style="display:none;">
                            <img id="preview" src="" class="img-fluid rounded" style="max-height: 200px;">
                        </div>
                    </div>
                </div>

                <!-- Settings -->
                <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                    <h4 class="mb-3"><i class="ri-settings-3-line me-2"></i>{{ __('admin.careers.settings') }}</h4>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">{{ __('admin.careers.order') }}</label>
                        <input type="number" name="order" class="form-control @error('order') is-invalid @enderror"
                               value="{{ old('order', 0) }}">
                        @error('order')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured" {{ old('is_featured') ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_featured">
                            {{ __('admin.careers.featured_career') }}
                        </label>
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" id="is_active" name="is_active" {{ old('is_active', true) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active">
                            {{ __('admin.careers.show_career') }}
                        </label>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                    <button type="submit" class="btn btn-primary w-100 mb-2">
                        <i class="ri-save-line me-1"></i> {{ __('admin.careers.save_career') }}
                    </button>
                    <a href="{{ route('admin.careers.index') }}" class="btn btn-secondary w-100">
                        <i class="ri-arrow-left-line me-1"></i> {{ __('admin.careers.back') }}
                    </a>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
<script>
function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function(){
        const preview = document.getElementById('preview');
        preview.src = reader.result;
        document.getElementById('imagePreview').style.display = 'block';
    }
    reader.readAsDataURL(event.target.files[0]);
}

// Dynamic list management
let respViCounter = 0;
let respEnCounter = 0;
let qualViCounter = 0;
let qualEnCounter = 0;
let benViCounter = 0;
let benEnCounter = 0;

function addResponsibilityVI() {
    const list = document.getElementById('responsibilities-vi-list');
    const div = document.createElement('div');
    div.className = 'input-group mb-2';
    div.innerHTML = `
        <input type="text" name="responsibilities_vi[]" class="form-control" placeholder="{{ __('admin.careers.enter_responsibility') }}">
        <button type="button" class="btn btn-outline-danger" onclick="this.parentElement.remove()">
            <i class="ri-delete-bin-line"></i>
        </button>
    `;
    list.appendChild(div);
    respViCounter++;
}

function addResponsibilityEN() {
    const list = document.getElementById('responsibilities-en-list');
    const div = document.createElement('div');
    div.className = 'input-group mb-2';
    div.innerHTML = `
        <input type="text" name="responsibilities_en[]" class="form-control" placeholder="{{ __('admin.careers.enter_responsibility') }}">
        <button type="button" class="btn btn-outline-danger" onclick="this.parentElement.remove()">
            <i class="ri-delete-bin-line"></i>
        </button>
    `;
    list.appendChild(div);
    respEnCounter++;
}

function addQualificationVI() {
    const list = document.getElementById('qualifications-vi-list');
    const div = document.createElement('div');
    div.className = 'input-group mb-2';
    div.innerHTML = `
        <input type="text" name="qualifications_vi[]" class="form-control" placeholder="{{ __('admin.careers.enter_qualification') }}">
        <button type="button" class="btn btn-outline-danger" onclick="this.parentElement.remove()">
            <i class="ri-delete-bin-line"></i>
        </button>
    `;
    list.appendChild(div);
    qualViCounter++;
}

function addQualificationEN() {
    const list = document.getElementById('qualifications-en-list');
    const div = document.createElement('div');
    div.className = 'input-group mb-2';
    div.innerHTML = `
        <input type="text" name="qualifications_en[]" class="form-control" placeholder="{{ __('admin.careers.enter_qualification') }}">
        <button type="button" class="btn btn-outline-danger" onclick="this.parentElement.remove()">
            <i class="ri-delete-bin-line"></i>
        </button>
    `;
    list.appendChild(div);
    qualEnCounter++;
}

function addBenefitVI() {
    const list = document.getElementById('benefits-vi-list');
    const div = document.createElement('div');
    div.className = 'input-group mb-2';
    div.innerHTML = `
        <input type="text" name="benefits_vi[]" class="form-control" placeholder="{{ __('admin.careers.enter_benefit') }}">
        <button type="button" class="btn btn-outline-danger" onclick="this.parentElement.remove()">
            <i class="ri-delete-bin-line"></i>
        </button>
    `;
    list.appendChild(div);
    benViCounter++;
}

function addBenefitEN() {
    const list = document.getElementById('benefits-en-list');
    const div = document.createElement('div');
    div.className = 'input-group mb-2';
    div.innerHTML = `
        <input type="text" name="benefits_en[]" class="form-control" placeholder="{{ __('admin.careers.enter_benefit') }}">
        <button type="button" class="btn btn-outline-danger" onclick="this.parentElement.remove()">
            <i class="ri-delete-bin-line"></i>
        </button>
    `;
    list.appendChild(div);
    benEnCounter++;
}

// Initialize with one field each
document.addEventListener('DOMContentLoaded', function() {
    addResponsibilityVI();
    addResponsibilityEN();
    addQualificationVI();
    addQualificationEN();
    addBenefitVI();
    addBenefitEN();
});
</script>
@endpush
