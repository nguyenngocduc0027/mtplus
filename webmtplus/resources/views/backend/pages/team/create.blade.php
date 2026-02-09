@extends('backend.layouts.app')
@props(['pageTitle' => __('admin.team.add_member')])
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

        .image-preview {
            max-width: 200px;
            margin-top: 10px;
            border: 1px solid #ddd;
            padding: 5px;
            border-radius: 4px;
        }

        .dynamic-list-item {
            position: relative;
            margin-bottom: 10px;
        }

        .remove-item-btn {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
        }

        #upload-box {
            min-height: 350px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #photo-preview-container {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #photo-preview {
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

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ __('admin.team.error') }}</strong> {{ __('admin.team.please_fix_errors') }}
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
            <form id="team-create-form" enctype="multipart/form-data">
                @csrf

                <!-- Basic Information -->
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label class="form-label fw-bold">{{ __('admin.team.name') }} *</label>
                        <input type="text" class="form-control" id="member-name" name="name"
                            value="{{ old('name') }}" placeholder="Nguyễn Văn A" required>
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label fw-bold">{{ __('admin.team.slug_auto') }}</label>
                        <input type="text" class="form-control bg-light" id="member-slug" name="slug"
                            value="{{ old('slug') }}" placeholder="nguyen-van-a" readonly>
                        <small class="text-muted">{{ __('admin.team.auto_generated_from_name') }}</small>
                    </div>
                </div>

                <!-- Photo Upload -->
                <div class="col-lg-12">
                    <div class="form-group mb-4 only-file-upload" id="file-upload">
                        <label class="label fs-16 fw-bold">{{ __('admin.team.photo') }}</label>
                        <div class="form-control text-center position-relative" id="upload-box">
                            <div class="product-upload" id="default-upload-ui">
                                <label class="file-upload mb-0">
                                    <i class="ri-image-line bg-primary bg-opacity-10 p-2 rounded-1 text-primary fs-24"></i>
                                    <span class="d-block text-body fs-14 mt-2">{{ __('admin.team.drag_drop_image') }} <span
                                            class="text-primary text-decoration-underline">{{ __('admin.team.choose_file') }}</span></span>
                                    <span class="d-block text-muted fs-12 mt-1">{{ __('admin.team.accepted_formats') }}</span>
                                </label>
                                <label class="position-absolute top-0 bottom-0 start-0 end-0 cursor" id="upload-container">
                                    <input class="form__file bottom-0" id="photo-input" name="photo" type="file" accept="image/*" onchange="handlePhotoUpload(this)">
                                </label>
                            </div>
                            <div id="photo-preview-container" style="display: none;">
                                <div class="position-relative">
                                    <img id="photo-preview" src="" alt="Preview" class="rounded cursor-pointer" onclick="document.getElementById('photo-input').click()">
                                    <button type="button" class="btn btn-danger remove-photo-btn position-absolute" style="top: 10px; right: 10px;" onclick="removePhoto()" title="{{ __('admin.team.remove_photo') }}">
                                        <i class="ri-close-line fs-18"></i>
                                    </button>
                                </div>
                                <div class="position-absolute bottom-0 start-0 end-0 text-center mb-3">
                                    <span class="badge bg-dark bg-opacity-75 text-white px-3 py-2">
                                        <i class="ri-edit-line me-1"></i> {{ __('admin.team.click_to_change') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Position & Experience -->
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label class="form-label fw-bold">{{ __('admin.team.position_vi') }} *</label>
                        <input type="text" class="form-control" name="position_vi" value="{{ old('position_vi') }}"
                            placeholder="Giám đốc điều hành" required>
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label fw-bold">{{ __('admin.team.position_en') }} *</label>
                        <input type="text" class="form-control" name="position_en" value="{{ old('position_en') }}"
                            placeholder="Chief Executive Officer" required>
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label fw-bold">{{ __('admin.team.detailed_position_vi') }}</label>
                        <input type="text" class="form-control" name="detailed_position_vi"
                            value="{{ old('detailed_position_vi') }}" placeholder="Chuyên gia Bất động sản">
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label fw-bold">{{ __('admin.team.detailed_position_en') }}</label>
                        <input type="text" class="form-control" name="detailed_position_en"
                            value="{{ old('detailed_position_en') }}" placeholder="Real Estate Specialist">
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label fw-bold">{{ __('admin.team.experience_years') }}</label>
                        <input type="number" class="form-control" name="experience_years"
                            value="{{ old('experience_years') }}" placeholder="15" min="0">
                    </div>
                </div>

                <!-- Bio Section -->
                <hr class="my-4">
                <h5 class="fw-bold mb-3">{{ __('admin.team.bio') }}</h5>

                <!-- Language Tabs for Bio -->
                <ul class="nav nav-tabs language-tabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="bio-vi-tab" data-bs-toggle="tab"
                            data-bs-target="#bio-vi-content" type="button" role="tab">
                            🇻🇳 Tiếng Việt
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="bio-en-tab" data-bs-toggle="tab" data-bs-target="#bio-en-content"
                            type="button" role="tab">
                            🇬🇧 English
                        </button>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="bio-vi-content" role="tabpanel">
                        <div class="mb-4">
                            <label class="form-label">{{ __('admin.team.bio_short_vi') }}</label>
                            <textarea class="form-control" name="bio_vi" rows="3" placeholder="Giới thiệu ngắn về thành viên...">{{ old('bio_vi') }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">{{ __('admin.team.bio_detail_vi') }}</label>
                            <textarea class="form-control" name="detailed_bio_vi" rows="5" placeholder="Tiểu sử chi tiết...">{{ old('detailed_bio_vi') }}</textarea>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="bio-en-content" role="tabpanel">
                        <div class="mb-4">
                            <label class="form-label">{{ __('admin.team.bio_short_en') }}</label>
                            <textarea class="form-control" name="bio_en" rows="3" placeholder="Brief introduction about the member...">{{ old('bio_en') }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">{{ __('admin.team.bio_detail_en') }}</label>
                            <textarea class="form-control" name="detailed_bio_en" rows="5" placeholder="Detailed biography...">{{ old('detailed_bio_en') }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- Location & Contact -->
                <hr class="my-4">
                <h5 class="fw-bold mb-3">{{ __('admin.team.location_contact') }}</h5>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label class="form-label">{{ __('admin.team.location_vi') }}</label>
                        <input type="text" class="form-control" name="location_vi" value="{{ old('location_vi') }}"
                            placeholder="New Jersey, New York">
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label">{{ __('admin.team.location_en') }}</label>
                        <input type="text" class="form-control" name="location_en" value="{{ old('location_en') }}"
                            placeholder="New Jersey, New York">
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label">{{ __('admin.team.field_of_activity_vi') }}</label>
                        <input type="text" class="form-control" name="field_of_activity_vi"
                            value="{{ old('field_of_activity_vi') }}" placeholder="Xây dựng và Phát triển Bất động sản">
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label">{{ __('admin.team.field_of_activity_en') }}</label>
                        <input type="text" class="form-control" name="field_of_activity_en"
                            value="{{ old('field_of_activity_en') }}"
                            placeholder="Construction and Real Estate Development">
                    </div>

                    <div class="col-md-12 mb-4">
                        <label class="form-label">{{ __('admin.team.address') }}</label>
                        <textarea class="form-control" name="address" rows="2" placeholder="Địa chỉ đầy đủ...">{{ old('address') }}</textarea>
                    </div>

                    <div class="col-md-4 mb-4">
                        <label class="form-label">{{ __('admin.team.phone') }}</label>
                        <input type="text" class="form-control" name="phone" value="{{ old('phone') }}"
                            placeholder="+84 123 456 789">
                    </div>

                    <div class="col-md-4 mb-4">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                            placeholder="nguyen.van.a@mtplus.vn">
                    </div>

                    <div class="col-md-4 mb-4">
                        <label class="form-label">Fax</label>
                        <input type="text" class="form-control" name="fax" value="{{ old('fax') }}"
                            placeholder="02412345678">
                    </div>
                </div>

                <!-- Specialties -->
                <hr class="my-4">
                <h5 class="fw-bold mb-3">{{ __('admin.team.specialties') }}</h5>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label class="form-label">{{ __('admin.team.specialties_vi') }}</label>
                        <div id="specialties-vi-container">
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" name="specialties_vi[]"
                                    placeholder="Kỹ năng chuyên môn">
                            </div>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-primary" onclick="addSpecialtyVi()">
                            <i class="ri-add-line"></i> {{ __('admin.team.add') }}
                        </button>
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label">{{ __('admin.team.specialties_en') }}</label>
                        <div id="specialties-en-container">
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" name="specialties_en[]"
                                    placeholder="Professional skill">
                            </div>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-primary" onclick="addSpecialtyEn()">
                            <i class="ri-add-line"></i> {{ __('admin.team.add') }}
                        </button>
                    </div>
                </div>

                <!-- Experience List -->
                <hr class="my-4">
                <h5 class="fw-bold mb-3">{{ __('admin.team.experience_highlights') }}</h5>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label class="form-label">{{ __('admin.team.experience_list_vi') }}</label>
                        <div id="experience-vi-container">
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" name="experience_list_vi[]"
                                    placeholder="Kinh nghiệm nổi bật">
                            </div>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-primary" onclick="addExperienceVi()">
                            <i class="ri-add-line"></i> {{ __('admin.team.add') }}
                        </button>
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label">{{ __('admin.team.experience_list_en') }}</label>
                        <div id="experience-en-container">
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" name="experience_list_en[]"
                                    placeholder="Notable experience">
                            </div>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-primary" onclick="addExperienceEn()">
                            <i class="ri-add-line"></i> {{ __('admin.team.add') }}
                        </button>
                    </div>
                </div>

                <!-- Social Media -->
                <hr class="my-4">
                <h5 class="fw-bold mb-3">{{ __('admin.team.social_media') }}</h5>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label class="form-label">Facebook URL</label>
                        <input type="url" class="form-control" name="facebook_url"
                            value="{{ old('facebook_url') }}" placeholder="https://facebook.com/username">
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label">Twitter URL</label>
                        <input type="url" class="form-control" name="twitter_url" value="{{ old('twitter_url') }}"
                            placeholder="https://twitter.com/username">
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label">LinkedIn URL</label>
                        <input type="url" class="form-control" name="linkedin_url"
                            value="{{ old('linkedin_url') }}" placeholder="https://linkedin.com/in/username">
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label">Instagram URL</label>
                        <input type="url" class="form-control" name="instagram_url"
                            value="{{ old('instagram_url') }}" placeholder="https://instagram.com/username">
                    </div>
                </div>

                <!-- Settings -->
                <hr class="my-4">
                <h5 class="fw-bold mb-3">{{ __('admin.team.settings') }}</h5>

                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="is_featured" id="is_featured"
                                {{ old('is_featured') ? 'checked' : '' }}>
                            <label class="form-check-label fw-bold" for="is_featured">
                                <i class="ri-vip-crown-line"></i> {{ __('admin.team.set_as_ceo') }}
                            </label>
                            <small class="d-block text-muted mt-1">
                                {{ __('admin.team.ceo_warning') }}
                            </small>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="is_active" id="is_active"
                                {{ old('is_active', true) ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_active">
                                {{ __('admin.team.active_status') }}
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Submit Buttons -->
                <div class="d-flex justify-content-end gap-2 mt-4">
                    <a href="{{ route('admin.team.index') }}" class="btn btn-secondary">
                        <i class="ri-arrow-left-line"></i> {{ __('admin.team.cancel') }}
                    </a>
                    <button type="submit" class="btn btn-primary fw-normal text-white">
                        <i class="ri-save-line"></i> {{ __('admin.team.save_member') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        // Auto-generate slug from name
        document.getElementById('member-name').addEventListener('input', function() {
            const name = this.value;
            const slug = name
                .toLowerCase()
                .normalize('NFD')
                .replace(/[\u0300-\u036f]/g, '')
                .replace(/đ/g, 'd')
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-')
                .trim();
            document.getElementById('member-slug').value = slug;
        });

        // Handle photo upload and preview
        function handlePhotoUpload(input) {
            if (input.files && input.files[0]) {
                const file = input.files[0];

                // Validate file type
                const validTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
                if (!validTypes.includes(file.type)) {
                    alert('{{ __("admin.team.invalid_file_type") }}');
                    input.value = '';
                    return;
                }


                // Show preview
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('photo-preview').src = e.target.result;
                    document.getElementById('photo-preview-container').style.display = 'flex';
                    document.getElementById('default-upload-ui').style.display = 'none';
                }
                reader.readAsDataURL(file);
            }
        }

        // Remove photo and reset upload box
        function removePhoto() {
            document.getElementById('photo-input').value = '';
            document.getElementById('photo-preview').src = '';
            document.getElementById('photo-preview-container').style.display = 'none';
            document.getElementById('default-upload-ui').style.display = 'block';
        }

        function addSpecialtyVi() {
            const container = document.getElementById('specialties-vi-container');
            const div = document.createElement('div');
            div.className = 'input-group mb-2';
            div.innerHTML = `
                <input type="text" class="form-control" name="specialties_vi[]" placeholder="Kỹ năng chuyên môn">
                <button type="button" class="btn btn-outline-danger" onclick="this.parentElement.remove()">
                    <i class="ri-delete-bin-line"></i>
                </button>
            `;
            container.appendChild(div);
        }

        function addSpecialtyEn() {
            const container = document.getElementById('specialties-en-container');
            const div = document.createElement('div');
            div.className = 'input-group mb-2';
            div.innerHTML = `
                <input type="text" class="form-control" name="specialties_en[]" placeholder="Professional skill">
                <button type="button" class="btn btn-outline-danger" onclick="this.parentElement.remove()">
                    <i class="ri-delete-bin-line"></i>
                </button>
            `;
            container.appendChild(div);
        }

        function addExperienceVi() {
            const container = document.getElementById('experience-vi-container');
            const div = document.createElement('div');
            div.className = 'input-group mb-2';
            div.innerHTML = `
                <input type="text" class="form-control" name="experience_list_vi[]" placeholder="Kinh nghiệm nổi bật">
                <button type="button" class="btn btn-outline-danger" onclick="this.parentElement.remove()">
                    <i class="ri-delete-bin-line"></i>
                </button>
            `;
            container.appendChild(div);
        }

        function addExperienceEn() {
            const container = document.getElementById('experience-en-container');
            const div = document.createElement('div');
            div.className = 'input-group mb-2';
            div.innerHTML = `
                <input type="text" class="form-control" name="experience_list_en[]" placeholder="Notable experience">
                <button type="button" class="btn btn-outline-danger" onclick="this.parentElement.remove()">
                    <i class="ri-delete-bin-line"></i>
                </button>
            `;
            container.appendChild(div);
        }

        // AJAX Form Submit
        document.getElementById('team-create-form').addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;

            // Disable button and show loading
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="ri-loader-4-line spinner-border spinner-border-sm"></i> {{ __("admin.team.saving") }}';

            fetch('{{ route('admin.team.store') }}', {
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
                        window.location.href = '{{ route('admin.team.index') }}?success=' + encodeURIComponent(
                            data.message);
                    } else {
                        throw new Error(data.message || 'Có lỗi xảy ra');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    let errorMessage = '{{ __("admin.team.error_occurred") }}';

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
                        <strong>{{ __("admin.team.error") }}</strong> ${errorMessage}
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
