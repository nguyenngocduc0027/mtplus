<form id="about-form" enctype="multipart/form-data">
    @csrf

    <!-- Status Toggle -->
    <div class="form-group mb-4">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="is_active" id="about_is_active"
                {{ old('is_active', $aboutSection->is_active ?? true) ? 'checked' : '' }}>
            <label class="form-check-label" for="about_is_active">
                Kích hoạt section
            </label>
        </div>
    </div>

    <!-- Language Tabs -->
    <ul class="nav nav-tabs language-tabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="about-vi-tab" data-bs-toggle="tab" data-bs-target="#about-vi-content"
                type="button" role="tab">
                🇻🇳 Tiếng Việt
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="about-en-tab" data-bs-toggle="tab" data-bs-target="#about-en-content"
                type="button" role="tab">
                🇬🇧 English
            </button>
        </li>
    </ul>

    <div class="tab-content">
        <!-- Vietnamese Content -->
        <div class="tab-pane fade show active" id="about-vi-content" role="tabpanel">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Tiêu đề chính (Tiếng Việt) *</label>
                    <textarea class="form-control" name="heading_vi" rows="3" placeholder="MT Plus cung cấp giải pháp...">{{ old('heading_vi', $aboutSection->heading_vi ?? 'MT Plus cung cấp giải pháp thương mại, dịch vụ tin cậy, lấy sự minh bạch và giá trị thực làm nền tảng phát triển.') }}</textarea>
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Mô tả (Tiếng Việt) *</label>
                    <textarea class="form-control" name="description_vi" rows="4" placeholder="Lorem ipsum dolor sit...">{{ old('description_vi', $aboutSection->description_vi ?? 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.') }}</textarea>
                </div>
            </div>
        </div>

        <!-- English Content -->
        <div class="tab-pane fade" id="about-en-content" role="tabpanel">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Tiêu đề chính (English) *</label>
                    <textarea class="form-control" name="heading_en" rows="3" placeholder="MT Plus provides reliable...">{{ old('heading_en', $aboutSection->heading_en ?? 'MT Plus provides reliable trade and service solutions, transparency & long-term value for sustainable growth.') }}</textarea>
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Mô tả (English) *</label>
                    <textarea class="form-control" name="description_en" rows="4" placeholder="Lorem ipsum dolor sit...">{{ old('description_en', $aboutSection->description_en ?? 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.') }}</textarea>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-4">

    <!-- Counter Cards -->
    <h5 class="fw-bold mb-3">Counter Cards (3 thẻ thống kê)</h5>
    <div class="row">
        <div class="col-lg-6">
            <!-- Counter 1 -->
            <div class="card mb-3 p-3 bg-light">
                <h6 class="fw-bold mb-3">Counter 1</h6>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Tiêu đề (Tiếng Việt)</label>
                        <input type="text" class="form-control" name="counter_1_title_vi"
                            value="{{ old('counter_1_title_vi', $aboutSection->counter_1_title_vi ?? 'ĐỐI TÁC CHIẾN LƯỢC') }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Tiêu đề (English)</label>
                        <input type="text" class="form-control" name="counter_1_title_en"
                            value="{{ old('counter_1_title_en', $aboutSection->counter_1_title_en ?? 'STRATEGIC PARTNERS') }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Số</label>
                        <input type="text" class="form-control" name="counter_1_number"
                            value="{{ old('counter_1_number', $aboutSection->counter_1_number ?? '20') }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Hậu tố (+ hoặc % hoặc năm|year)</label>
                        <input type="text" class="form-control" name="counter_1_suffix"
                            value="{{ old('counter_1_suffix', $aboutSection->counter_1_suffix ?? '+') }}"
                            placeholder="+">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Mô tả (Tiếng Việt)</label>
                        <input type="text" class="form-control" name="counter_1_desc_vi"
                            value="{{ old('counter_1_desc_vi', $aboutSection->counter_1_desc_vi ?? 'Tập đoàn và công ty hàng đầu') }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Mô tả (English)</label>
                        <input type="text" class="form-control" name="counter_1_desc_en"
                            value="{{ old('counter_1_desc_en', $aboutSection->counter_1_desc_en ?? 'Corporations and companies') }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <!-- Counter 2 -->
            <div class="card mb-3 p-3 bg-light">
                <h6 class="fw-bold mb-3">Counter 2</h6>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Tiêu đề (Tiếng Việt)</label>
                        <input type="text" class="form-control" name="counter_2_title_vi"
                            value="{{ old('counter_2_title_vi', $aboutSection->counter_2_title_vi ?? 'CHUYÊN GIA TƯ VẤN') }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Tiêu đề (English)</label>
                        <input type="text" class="form-control" name="counter_2_title_en"
                            value="{{ old('counter_2_title_en', $aboutSection->counter_2_title_en ?? 'CONSULTING EXPERTS') }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Số</label>
                        <input type="text" class="form-control" name="counter_2_number"
                            value="{{ old('counter_2_number', $aboutSection->counter_2_number ?? '10') }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Hậu tố (+ hoặc % hoặc năm|year)</label>
                        <input type="text" class="form-control" name="counter_2_suffix"
                            value="{{ old('counter_2_suffix', $aboutSection->counter_2_suffix ?? 'năm|year') }}"
                            placeholder="năm|year">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Mô tả (Tiếng Việt)</label>
                        <input type="text" class="form-control" name="counter_2_desc_vi"
                            value="{{ old('counter_2_desc_vi', $aboutSection->counter_2_desc_vi ?? 'Kinh nghiệm chuyên sâu') }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Mô tả (English)</label>
                        <input type="text" class="form-control" name="counter_2_desc_en"
                            value="{{ old('counter_2_desc_en', $aboutSection->counter_2_desc_en ?? 'Extensive experience') }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <!-- Counter 3 -->
            <div class="card mb-3 p-3 bg-light">
                <h6 class="fw-bold mb-3">Counter 3</h6>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Tiêu đề (Tiếng Việt)</label>
                        <input type="text" class="form-control" name="counter_3_title_vi"
                            value="{{ old('counter_3_title_vi', $aboutSection->counter_3_title_vi ?? 'TĂNG TRƯỞNG Trong NĂM') }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Tiêu đề (English)</label>
                        <input type="text" class="form-control" name="counter_3_title_en"
                            value="{{ old('counter_3_title_en', $aboutSection->counter_3_title_en ?? 'ANNUAL GROWTH RATE') }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Số</label>
                        <input type="text" class="form-control" name="counter_3_number"
                            value="{{ old('counter_3_number', $aboutSection->counter_3_number ?? '20') }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Hậu tố (+ hoặc % hoặc năm|year)</label>
                        <input type="text" class="form-control" name="counter_3_suffix"
                            value="{{ old('counter_3_suffix', $aboutSection->counter_3_suffix ?? '%') }}"
                            placeholder="%">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Mô tả (Tiếng Việt)</label>
                        <input type="text" class="form-control" name="counter_3_desc_vi"
                            value="{{ old('counter_3_desc_vi', $aboutSection->counter_3_desc_vi ?? 'Mức tăng trưởng kì vọng') }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Mô tả (English)</label>
                        <input type="text" class="form-control" name="counter_3_desc_en"
                            value="{{ old('counter_3_desc_en', $aboutSection->counter_3_desc_en ?? 'Expected growth rate of the year') }}">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <hr class="my-4">

    <!-- Images Section -->
    <h5 class="fw-bold mb-3">Hình ảnh</h5>
    <div class="row">
        <div class="col-md-6 mb-4">
            <label class="form-label fw-bold">Hình ảnh Chính About</label>
            <input type="file" class="form-control" name="about_main_image" accept="image/*,image/svg+xml,.svg"
                onchange="previewImage(this, 'about_main_preview')">
            @if ($aboutSection && $aboutSection->about_main_image)
                <img id="about_main_preview" src="{{ asset($aboutSection->about_main_image) }}" alt="Preview"
                    class="image-preview img-fluid">
            @else
                <img id="about_main_preview" src="{{ asset('/frontend/assets/img/about/about-img-1.jpg') }}"
                    alt="Preview" class="image-preview img-fluid">
            @endif
        </div>

        <div class="col-md-6 mb-4">
            <label class="form-label fw-bold">Hình ảnh Phụ About</label>
            <input type="file" class="form-control" name="about_thumb_image" accept="image/*,image/svg+xml,.svg"
                onchange="previewImage(this, 'about_thumb_preview')">
            @if ($aboutSection && $aboutSection->about_thumb_image)
                <img id="about_thumb_preview" src="{{ asset($aboutSection->about_thumb_image) }}" alt="Preview"
                    class="image-preview img-fluid">
            @else
                <img id="about_thumb_preview" src="{{ asset('/frontend/assets/img/about/about-bg-1.jpg') }}"
                    alt="Preview" class="image-preview img-fluid">
            @endif
        </div>
    </div>

    <hr class="my-4">

    <!-- Button URL -->
    <h5 class="fw-bold mb-3">Button</h5>
    <div class="row">
        <div class="col-md-12 mb-4">
            <label class="form-label fw-bold">Đường dẫn Button "Tìm hiểu thêm"</label>
            <input type="text" class="form-control" name="button_url"
                value="{{ old('button_url', $aboutSection->button_url ?? '/areas-of-operation') }}"
                placeholder="/areas-of-operation">
        </div>
    </div>

    <hr class="my-4">

    <!-- Submit Button -->
    <div class="d-flex gap-3 justify-content-end">
        <button type="submit" class="btn btn-primary fw-normal text-white">
            <i class="ri-save-line"></i> Lưu About Section
        </button>
    </div>
</form>

@push('scripts')
    <script>
        document.getElementById('about-form')?.addEventListener('submit', function(e) {
            e.preventDefault();

            const form = this;
            const formData = new FormData(form);
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;

            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="ri-loader-4-line"></i> Đang lưu...';

            fetch("{{ route('content-setup.home.update-about') }}", {
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
                        text: data.message || 'Cập nhật About Section thành công!',
                        timer: 2000,
                        showConfirmButton: false
                    }).then(() => {
                        window.location.reload();
                    });
                })
                .catch(error => {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalBtnText;

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
