<form id="commitment-form" enctype="multipart/form-data">
    @csrf

    <!-- Status Toggle -->
    <div class="form-group mb-4">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="is_active" id="commitment_is_active"
                {{ old('is_active', $commitmentSection->is_active ?? true) ? 'checked' : '' }}>
            <label class="form-check-label" for="commitment_is_active">
                Kích hoạt section
            </label>
        </div>
    </div>

    <!-- Language Tabs -->
    <ul class="nav nav-tabs language-tabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="commitment-vi-tab" data-bs-toggle="tab" data-bs-target="#commitment-vi-content"
                type="button" role="tab">
                🇻🇳 Tiếng Việt
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="commitment-en-tab" data-bs-toggle="tab" data-bs-target="#commitment-en-content"
                type="button" role="tab">
                🇬🇧 English
            </button>
        </li>
    </ul>

    <div class="tab-content">
        <!-- Vietnamese Content -->
        <div class="tab-pane fade show active" id="commitment-vi-content" role="tabpanel">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Phụ đề (Tiếng Việt) *</label>
                    <input type="text" class="form-control" name="subtitle_vi"
                        value="{{ old('subtitle_vi', $commitmentSection->subtitle_vi ?? 'Cam kết của chúng tôi') }}"
                        placeholder="Cam kết của chúng tôi">
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Tiêu đề chính (Tiếng Việt) *</label>
                    <textarea class="form-control" name="heading_vi" rows="2"
                        placeholder="GIÁ TRỊ BỀN VỮNG...">{{ old('heading_vi', $commitmentSection->heading_vi ?? 'GIÁ TRỊ BỀN VỮNG - CAM KẾT ĐỒNG HÀNH CÙNG THÀNH CÔNG') }}</textarea>
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Mô tả (Tiếng Việt) *</label>
                    <textarea class="form-control" name="description_vi" rows="3"
                        placeholder="Tại MT Plus...">{{ old('description_vi', $commitmentSection->description_vi ?? 'Tại MT Plus, cam kết của chúng tôi vượt xa những giao dịch thương mại thông thường - đó là sự xây dựng niềm tin, minh bạch và mang lại những kết quả vượt trội cho đối tác.') }}</textarea>
                </div>
            </div>
        </div>

        <!-- English Content -->
        <div class="tab-pane fade" id="commitment-en-content" role="tabpanel">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Phụ đề (English) *</label>
                    <input type="text" class="form-control" name="subtitle_en"
                        value="{{ old('subtitle_en', $commitmentSection->subtitle_en ?? 'Our Commitment') }}"
                        placeholder="Our Commitment">
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Tiêu đề chính (English) *</label>
                    <textarea class="form-control" name="heading_en" rows="2"
                        placeholder="SUSTAINABLE VALUE...">{{ old('heading_en', $commitmentSection->heading_en ?? 'SUSTAINABLE VALUE - COMMITTED TO YOUR SUCCESS') }}</textarea>
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Mô tả (English) *</label>
                    <textarea class="form-control" name="description_en" rows="3"
                        placeholder="At MT Plus...">{{ old('description_en', $commitmentSection->description_en ?? 'At MT Plus, our commitment goes beyond simple transactions - it\'s about building trust, transparency, and delivering exceptional results for our partners.') }}</textarea>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-4">

    <!-- Feature Items -->
    <h5 class="fw-bold mb-3">4 Tính năng cam kết</h5>

    <!-- Feature 1 -->
    <div class="card mb-3 p-3 bg-light">
        <h6 class="fw-bold mb-3">Tính năng 1</h6>
        <div class="row">
            <div class="col-md-4 mb-3">
                <label class="form-label">Icon</label>
                <input type="file" class="form-control" name="feature_1_icon" accept="image/*,image/svg+xml,.svg"
                    onchange="previewImage(this, 'feature_1_icon_preview2')">
                @if($commitmentSection && $commitmentSection->feature_1_icon)
                <img id="feature_1_icon_preview2" src="{{ asset($commitmentSection->feature_1_icon) }}"
                    alt="Preview" class="image-preview img-fluid" style="max-width: 100px;">
                @else
                <img id="feature_1_icon_preview2" src="{{ asset('/frontend/assets/img/about/feature-icon-5.png') }}"
                    alt="Preview" class="image-preview img-fluid" style="max-width: 100px;">
                @endif
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Tiêu đề (Tiếng Việt)</label>
                <input type="text" class="form-control" name="feature_1_title_vi"
                    value="{{ old('feature_1_title_vi', $commitmentSection->feature_1_title_vi ?? 'Trách nhiệm doanh nghiệp') }}">
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Tiêu đề (English)</label>
                <input type="text" class="form-control" name="feature_1_title_en"
                    value="{{ old('feature_1_title_en', $commitmentSection->feature_1_title_en ?? 'Corporate Responsibility') }}">
            </div>
        </div>
    </div>

    <!-- Feature 2 -->
    <div class="card mb-3 p-3 bg-light">
        <h6 class="fw-bold mb-3">Tính năng 2</h6>
        <div class="row">
            <div class="col-md-4 mb-3">
                <label class="form-label">Icon</label>
                <input type="file" class="form-control" name="feature_2_icon" accept="image/*,image/svg+xml,.svg"
                    onchange="previewImage(this, 'feature_2_icon_preview2')">
                @if($commitmentSection && $commitmentSection->feature_2_icon)
                <img id="feature_2_icon_preview2" src="{{ asset($commitmentSection->feature_2_icon) }}"
                    alt="Preview" class="image-preview img-fluid" style="max-width: 100px;">
                @else
                <img id="feature_2_icon_preview2" src="{{ asset('/frontend/assets/img/about/feature-icon-6.png') }}"
                    alt="Preview" class="image-preview img-fluid" style="max-width: 100px;">
                @endif
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Tiêu đề (Tiếng Việt)</label>
                <input type="text" class="form-control" name="feature_2_title_vi"
                    value="{{ old('feature_2_title_vi', $commitmentSection->feature_2_title_vi ?? 'Đội ngũ tâm huyết và trách nhiệm') }}">
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Tiêu đề (English)</label>
                <input type="text" class="form-control" name="feature_2_title_en"
                    value="{{ old('feature_2_title_en', $commitmentSection->feature_2_title_en ?? 'Dedicated Team and Leadership') }}">
            </div>
        </div>
    </div>

    <!-- Feature 3 -->
    <div class="card mb-3 p-3 bg-light">
        <h6 class="fw-bold mb-3">Tính năng 3</h6>
        <div class="row">
            <div class="col-md-4 mb-3">
                <label class="form-label">Icon</label>
                <input type="file" class="form-control" name="feature_3_icon" accept="image/*,image/svg+xml,.svg"
                    onchange="previewImage(this, 'feature_3_icon_preview3')">
                @if($commitmentSection && $commitmentSection->feature_3_icon)
                <img id="feature_3_icon_preview3" src="{{ asset($commitmentSection->feature_3_icon) }}"
                    alt="Preview" class="image-preview img-fluid" style="max-width: 100px;">
                @else
                <img id="feature_3_icon_preview3" src="{{ asset('/frontend/assets/img/about/feature-icon-7.png') }}"
                    alt="Preview" class="image-preview img-fluid" style="max-width: 100px;">
                @endif
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Tiêu đề (Tiếng Việt)</label>
                <input type="text" class="form-control" name="feature_3_title_vi"
                    value="{{ old('feature_3_title_vi', $commitmentSection->feature_3_title_vi ?? 'Minh bạch & Chính trực') }}">
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Tiêu đề (English)</label>
                <input type="text" class="form-control" name="feature_3_title_en"
                    value="{{ old('feature_3_title_en', $commitmentSection->feature_3_title_en ?? 'Integrity & Transparency') }}">
            </div>
        </div>
    </div>

    <!-- Feature 4 -->
    <div class="card mb-3 p-3 bg-light">
        <h6 class="fw-bold mb-3">Tính năng 4</h6>
        <div class="row">
            <div class="col-md-4 mb-3">
                <label class="form-label">Icon</label>
                <input type="file" class="form-control" name="feature_4_icon" accept="image/*,image/svg+xml,.svg"
                    onchange="previewImage(this, 'feature_4_icon_preview1')">
                @if($commitmentSection && $commitmentSection->feature_4_icon)
                <img id="feature_4_icon_preview1" src="{{ asset($commitmentSection->feature_4_icon) }}"
                    alt="Preview" class="image-preview img-fluid" style="max-width: 100px;">
                @else
                <img id="feature_4_icon_preview1" src="{{ asset('/frontend/assets/img/about/feature-icon-8.png') }}"
                    alt="Preview" class="image-preview img-fluid" style="max-width: 100px;">
                @endif
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Tiêu đề (Tiếng Việt)</label>
                <input type="text" class="form-control" name="feature_4_title_vi"
                    value="{{ old('feature_4_title_vi', $commitmentSection->feature_4_title_vi ?? 'Hợp tác bền vững thành công') }}">
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Tiêu đề (English)</label>
                <input type="text" class="form-control" name="feature_4_title_en"
                    value="{{ old('feature_4_title_en', $commitmentSection->feature_4_title_en ?? 'Long-term Success Partnership') }}">
            </div>
        </div>
    </div>

    <hr class="my-4">

    <!-- Button URL -->
    <h5 class="fw-bold mb-3">Button</h5>
    <div class="row">
        <div class="col-md-6 mb-4">
            <label class="form-label fw-bold">Đường dẫn Button "Tìm hiểu thêm"</label>
            <input type="text" class="form-control" name="button_url"
                value="{{ old('button_url', $commitmentSection->button_url ?? 'javascript:void(0)') }}"
                placeholder="javascript:void(0)">
        </div>
    </div>

    <hr class="my-4">

    <!-- Rating Box Section -->
    <h5 class="fw-bold mb-3">Hộp đánh giá</h5>
    <div class="row">
        <div class="col-md-4 mb-4">
            <label class="form-label fw-bold">Điểm đánh giá</label>
            <input type="text" class="form-control" name="rating_score"
                value="{{ old('rating_score', $commitmentSection->rating_score ?? '4.8') }}"
                placeholder="4.8">
        </div>
        <div class="col-md-4 mb-4">
            <label class="form-label fw-bold">Số lượng khách hàng</label>
            <input type="text" class="form-control" name="customer_count"
                value="{{ old('customer_count', $commitmentSection->customer_count ?? '300+') }}"
                placeholder="300+">
        </div>
        <div class="col-md-6 mb-4">
            <label class="form-label fw-bold">Text (Tiếng Việt)</label>
            <input type="text" class="form-control" name="customer_text_vi"
                value="{{ old('customer_text_vi', $commitmentSection->customer_text_vi ?? 'Khách hàng hài lòng') }}"
                placeholder="Khách hàng hài lòng">
        </div>
        <div class="col-md-6 mb-4">
            <label class="form-label fw-bold">Text (English)</label>
            <input type="text" class="form-control" name="customer_text_en"
                value="{{ old('customer_text_en', $commitmentSection->customer_text_en ?? 'Satisfied Customers') }}"
                placeholder="Satisfied Customers">
        </div>
    </div>

    <hr class="my-4">

    <!-- Images Section -->
    <h5 class="fw-bold mb-3">Hình ảnh</h5>
    <div class="row">
        <div class="col-md-6 mb-4">
            <label class="form-label fw-bold">Hình ảnh Chính</label>
            <input type="file" class="form-control" name="main_image" accept="image/*,image/svg+xml,.svg"
                onchange="previewImage(this, 'main_image_preview2')">
            @if($commitmentSection && $commitmentSection->main_image)
            <img id="main_image_preview2" src="{{ asset($commitmentSection->main_image) }}"
                alt="Preview" class="image-preview img-fluid">
            @else
            <img id="main_image_preview2" src="{{ asset('/frontend/assets/img/about/wh-img-3.jpg') }}"
                alt="Preview" class="image-preview img-fluid">
            @endif
        </div>

        <div class="col-md-6 mb-4">
            <label class="form-label fw-bold">Hình ảnh Phụ</label>
            <input type="file" class="form-control" name="thumb_image" accept="image/*,image/svg+xml,.svg"
                onchange="previewImage(this, 'thumb_image_preview2')">
            @if($commitmentSection && $commitmentSection->thumb_image)
            <img id="thumb_image_preview2" src="{{ asset($commitmentSection->thumb_image) }}"
                alt="Preview" class="image-preview img-fluid">
            @else
            <img id="thumb_image_preview2" src="{{ asset('/frontend/assets/img/about/wh-thumb-3.jpg') }}"
                alt="Preview" class="image-preview img-fluid">
            @endif
        </div>
    </div>

    <hr class="my-4">

    <!-- Submit Button -->
    <div class="d-flex gap-3 justify-content-end">
        <button type="submit" class="btn btn-primary fw-normal text-white">
            <i class="ri-save-line"></i> Lưu Commitment Section
        </button>
    </div>
</form>

@push('scripts')
<script>
    document.getElementById('commitment-form')?.addEventListener('submit', function(e) {
        e.preventDefault();

        const form = this;
        const formData = new FormData(form);
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalBtnText = submitBtn.innerHTML;

        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="ri-loader-4-line"></i> Đang lưu...';

        fetch("{{ route('content-setup.home.update-commitment') }}", {
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
                    text: data.message || 'Cập nhật Commitment Section thành công!',
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
