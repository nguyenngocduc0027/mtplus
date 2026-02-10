<form id="hero-form" enctype="multipart/form-data">
    @csrf

    <!-- Status Toggle -->
    <div class="form-group mb-4">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="is_active" id="is_active"
                {{ old('is_active', $heroSection->is_active ?? true) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_active">
                Kích hoạt section
            </label>
        </div>
    </div>

    <!-- Language Tabs -->
    <ul class="nav nav-tabs language-tabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="vi-tab" data-bs-toggle="tab" data-bs-target="#vi-content"
                type="button" role="tab">
                🇻🇳 Tiếng Việt
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="en-tab" data-bs-toggle="tab" data-bs-target="#en-content" type="button"
                role="tab">
                🇬🇧 English
            </button>
        </li>
    </ul>

    <div class="tab-content">
        <!-- Vietnamese Content -->
        <div class="tab-pane fade show active" id="vi-content" role="tabpanel">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Phụ đề (Tiếng Việt) *</label>
                    <input type="text" class="form-control @error('subtitle_vi') is-invalid @enderror"
                        name="subtitle_vi"
                        value="{{ old('subtitle_vi', $heroSection->subtitle_vi ?? 'khởi nguồn cơ hội - bứt phá tương lai') }}"
                        placeholder="khởi nguồn cơ hội - bứt phá tương lai">
                    @error('subtitle_vi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Tiêu đề chính (Tiếng Việt) *</label>
                    <textarea class="form-control" name="heading_vi" rows="3"
                        placeholder="Cung cấp GIẢI PHÁP THƯƠNG MẠI & DỊCH VỤ...">{{ old('heading_vi', $heroSection->heading_vi ?? 'Cung cấp GIẢI PHÁP THƯƠNG MẠI & DỊCH VỤ TẬN TÂM - TỐI ƯU!') }}</textarea>
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Mô tả (Tiếng Việt) *</label>
                    <textarea class="form-control" name="description_vi" rows="4" placeholder="Chúng tôi cung cấp các giải pháp...">{{ old('description_vi', $heroSection->description_vi ?? 'Chúng tôi cung cấp các giải pháp kinh doanh toàn diện dựa trên nền tảng minh bạch và chuyên môn cao, nhằm tạo ra giá trị bền vững cho doanh nghiệp của bạn.') }}</textarea>
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Đoạn văn phụ (Tiếng Việt)</label>
                    <textarea class="form-control" name="thumb_para_vi" rows="2"
                        placeholder="Giải pháp thông minh cho sự phát triển bền vững...">{{ old('thumb_para_vi', $heroSection->thumb_para_vi ?? 'Giải pháp thông minh cho sự phát triển bền vững của doanh nghiệp.') }}</textarea>
                </div>
            </div>
        </div>

        <!-- English Content -->
        <div class="tab-pane fade" id="en-content" role="tabpanel">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Phụ đề (English) *</label>
                    <input type="text" class="form-control" name="subtitle_en"
                        value="{{ old('subtitle_en', $heroSection->subtitle_en ?? 'Creating opportunities - breaking through to the future.') }}"
                        placeholder="Creating opportunities - breaking through to the future.">
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Tiêu đề chính (English) *</label>
                    <textarea class="form-control" name="heading_en" rows="3" placeholder="EXPERT TRADING & SERVICE SOLUTIONS...">{{ old('heading_en', $heroSection->heading_en ?? 'EXPERT TRADING & SERVICE SOLUTIONS TAILORED FOR SUCCESS!') }}</textarea>
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Mô tả (English) *</label>
                    <textarea class="form-control" name="description_en" rows="4"
                        placeholder="We provide comprehensive business solutions...">{{ old('description_en', $heroSection->description_en ?? 'We provide comprehensive business solutions based on transparency and expertise, creating long-term value and sustainable growth for your business.') }}</textarea>
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Đoạn văn phụ (English)</label>
                    <textarea class="form-control" name="thumb_para_en" rows="2"
                        placeholder="Innovative Solutions For Your Sustainable Business Growth...">{{ old('thumb_para_en', $heroSection->thumb_para_en ?? 'Innovative Solutions For Your Sustainable Business Growth.') }}</textarea>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-4">

    <!-- Images Section -->
    <h5 class="fw-bold mb-3">Hình ảnh & Media</h5>
    <div class="row">
        <div class="col-md-6 mb-4">
            <label class="form-label fw-bold">Hình ảnh Slide Hero</label>
            <input type="file" class="form-control" name="hero_slide_image" accept="image/*,image/svg+xml,.svg"
                onchange="previewImage(this, 'hero_slide_preview')">
            @if ($heroSection && $heroSection->hero_slide_image)
                <img id="hero_slide_preview" src="{{ asset($heroSection->hero_slide_image) }}" alt="Preview"
                    class="image-preview img-fluid">
            @else
                <img id="hero_slide_preview" src="{{ asset('/frontend/assets/img/hero/hero-slide-1.jpg') }}"
                    alt="Preview" class="image-preview img-fluid">
            @endif
        </div>

        <div class="col-md-6 mb-4">
            <label class="form-label fw-bold">Hình ảnh Chính Hero</label>
            <input type="file" class="form-control" name="hero_main_image" accept="image/*,image/svg+xml,.svg"
                onchange="previewImage(this, 'hero_main_preview')">
            @if ($heroSection && $heroSection->hero_main_image)
                <img id="hero_main_preview" src="{{ asset($heroSection->hero_main_image) }}" alt="Preview"
                    class="image-preview img-fluid">
            @else
                <img id="hero_main_preview" src="{{ asset('/frontend/assets/img/hero/hero-img-1.png') }}"
                    alt="Preview" class="image-preview img-fluid">
            @endif
        </div>
    </div>

    <hr class="my-4">

    <!-- Links & URLs Section -->
    <h5 class="fw-bold mb-3">Liên kết & URLs</h5>
    <div class="row">
        <div class="col-md-4 mb-4">
            <label class="form-label fw-bold">Đường dẫn Video</label>
            <input type="url" class="form-control" name="video_url"
                value="{{ old('video_url', $heroSection->video_url ?? 'https://www.youtube.com/watch?v=FlUIhTFuDes') }}"
                placeholder="https://www.youtube.com/watch?v=...">
        </div>

        <div class="col-md-4 mb-4">
            <label class="form-label fw-bold">Đường dẫn Tìm hiểu thêm</label>
            <input type="text" class="form-control" name="learn_more_url"
                value="{{ old('learn_more_url', $heroSection->learn_more_url ?? 'javascript:void(0)') }}"
                placeholder="javascript:void(0)">
        </div>

        <div class="col-md-4 mb-4">
            <label class="form-label fw-bold">Đường dẫn Xem thêm</label>
            <input type="text" class="form-control" name="read_more_url"
                value="{{ old('read_more_url', $heroSection->read_more_url ?? 'javascript:void(0)') }}"
                placeholder="javascript:void(0)">
        </div>
    </div>

    <hr class="my-4">

    <!-- Submit Button -->
    <div class="d-flex gap-3 justify-content-end">
        <button type="submit" class="btn btn-primary fw-normal text-white">
            <i class="ri-save-line"></i> Lưu Hero Section
        </button>
    </div>
</form>

@push('scripts')
    <script>
        document.getElementById('hero-form')?.addEventListener('submit', function(e) {
            e.preventDefault();

            const form = this;
            const formData = new FormData(form);
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;

            // Disable button and show loading
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="ri-loader-4-line"></i> Đang lưu...';

            fetch("{{ route('content-setup.home.update-hero') }}", {
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json',
                    },
                    body: formData
                })
                .then(async response => {
                    const data = await response.json();
                    if (!response.ok) throw data;
                    return data;
                })
                .then(data => {
                    Swal.fire({
                        icon: 'success',
                        title: 'Thành công!',
                        text: data.message || 'Cập nhật Hero Section thành công!',
                        timer: 2000,
                        showConfirmButton: false
                    }).then(() => {
                        window.location.reload();
                    });
                })
                .catch(error => {
                    // Enable button
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalBtnText;

                    // Show validation errors
                    if (error.errors) {
                        let errorMessages = '';
                        Object.values(error.errors).forEach(messages => {
                            messages.forEach(message => {
                                errorMessages += `<li>${message}</li>`;
                            });
                        });

                        Swal.fire({
                            icon: 'error',
                            title: 'Có lỗi xảy ra!',
                            html: `<ul class="text-start">${errorMessages}</ul>`,
                            confirmButtonText: 'Đóng'
                        });
                    } else {
                        Toastify({
                            text: error.message || 'Có lỗi xảy ra khi cập nhật!',
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "#dc3545",
                            close: true
                        }).showToast();
                    }
                });
        });
    </script>
@endpush
