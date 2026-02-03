<form id="why-choose-form" enctype="multipart/form-data">
    @csrf

    <!-- Status Toggle -->
    <div class="form-group mb-4">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="is_active" id="why_choose_is_active"
                {{ old('is_active', $whyChooseSection->is_active ?? true) ? 'checked' : '' }}>
            <label class="form-check-label" for="why_choose_is_active">
                Kích hoạt section
            </label>
        </div>
    </div>

    <!-- Language Tabs -->
    <ul class="nav nav-tabs language-tabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="why-choose-vi-tab" data-bs-toggle="tab" data-bs-target="#why-choose-vi-content"
                type="button" role="tab">
                🇻🇳 Tiếng Việt
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="why-choose-en-tab" data-bs-toggle="tab" data-bs-target="#why-choose-en-content"
                type="button" role="tab">
                🇬🇧 English
            </button>
        </li>
    </ul>

    <div class="tab-content">
        <!-- Vietnamese Content -->
        <div class="tab-pane fade show active" id="why-choose-vi-content" role="tabpanel">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Phụ đề (Tiếng Việt) *</label>
                    <input type="text" class="form-control" name="subtitle_vi"
                        value="{{ old('subtitle_vi', $whyChooseSection->subtitle_vi ?? 'Tại sao chọn chúng tôi') }}"
                        placeholder="Tại sao chọn chúng tôi">
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Tiêu đề chính (Tiếng Việt) *</label>
                    <textarea class="form-control" name="heading_vi" rows="2"
                        placeholder="ĐỐI TÁC TIN CẬY...">{{ old('heading_vi', $whyChooseSection->heading_vi ?? 'ĐỐI TÁC TIN CẬY CHO SỰ PHÁT TRIỂN BỀN VỮNG') }}</textarea>
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Mô tả (Tiếng Việt) *</label>
                    <textarea class="form-control" name="description_vi" rows="3"
                        placeholder="Với cam kết...">{{ old('description_vi', $whyChooseSection->description_vi ?? 'Với cam kết về sự xuất sắc và đam mê đổi mới, chúng tôi cung cấp các giải pháp được thiết kế riêng nhằm thúc đẩy thành công và tạo ra giá trị lâu dài cho khách hàng của mình.') }}</textarea>
                </div>
            </div>
        </div>

        <!-- English Content -->
        <div class="tab-pane fade" id="why-choose-en-content" role="tabpanel">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Phụ đề (English) *</label>
                    <input type="text" class="form-control" name="subtitle_en"
                        value="{{ old('subtitle_en', $whyChooseSection->subtitle_en ?? 'Why Choose Us') }}"
                        placeholder="Why Choose Us">
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Tiêu đề chính (English) *</label>
                    <textarea class="form-control" name="heading_en" rows="2"
                        placeholder="YOUR TRUSTED PARTNER...">{{ old('heading_en', $whyChooseSection->heading_en ?? 'YOUR TRUSTED PARTNER FOR SUSTAINABLE GROWTH') }}</textarea>
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Mô tả (English) *</label>
                    <textarea class="form-control" name="description_en" rows="3"
                        placeholder="With a commitment...">{{ old('description_en', $whyChooseSection->description_en ?? 'With a commitment to excellence and a passion for innovation, we deliver tailored solutions that drive success and create lasting value for our clients.') }}</textarea>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-4">

    <!-- Feature Items -->
    <h5 class="fw-bold mb-3">4 Tính năng nổi bật</h5>

    <!-- Feature 1 -->
    <div class="card mb-3 p-3 bg-light">
        <h6 class="fw-bold mb-3">Tính năng 1</h6>
        <div class="row">
            <div class="col-md-4 mb-3">
                <label class="form-label">Icon</label>
                <input type="file" class="form-control" name="feature_1_icon" accept="image/*"
                    onchange="previewImage(this, 'feature_1_icon_preview')">
                @if($whyChooseSection && $whyChooseSection->feature_1_icon)
                <img id="feature_1_icon_preview" src="{{ asset($whyChooseSection->feature_1_icon) }}"
                    alt="Preview" class="image-preview img-fluid" style="max-width: 100px;">
                @else
                <img id="feature_1_icon_preview" src="{{ asset('/frontend/assets/img/icons/house-thing.svg') }}"
                    alt="Preview" class="image-preview img-fluid" style="max-width: 100px;">
                @endif
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Tiêu đề (Tiếng Việt)</label>
                <input type="text" class="form-control" name="feature_1_title_vi"
                    value="{{ old('feature_1_title_vi', $whyChooseSection->feature_1_title_vi ?? 'Minh bạch và đạo đức nghề nghiệp vững chắc') }}">
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Tiêu đề (English)</label>
                <input type="text" class="form-control" name="feature_1_title_en"
                    value="{{ old('feature_1_title_en', $whyChooseSection->feature_1_title_en ?? 'Transparency and strong professional ethics') }}">
            </div>
        </div>
    </div>

    <!-- Feature 2 -->
    <div class="card mb-3 p-3 bg-light">
        <h6 class="fw-bold mb-3">Tính năng 2</h6>
        <div class="row">
            <div class="col-md-4 mb-3">
                <label class="form-label">Icon</label>
                <input type="file" class="form-control" name="feature_2_icon" accept="image/*"
                    onchange="previewImage(this, 'feature_2_icon_preview')">
                @if($whyChooseSection && $whyChooseSection->feature_2_icon)
                <img id="feature_2_icon_preview" src="{{ asset($whyChooseSection->feature_2_icon) }}"
                    alt="Preview" class="image-preview img-fluid" style="max-width: 100px;">
                @else
                <img id="feature_2_icon_preview" src="{{ asset('/frontend/assets/img/icons/mailbox.svg') }}"
                    alt="Preview" class="image-preview img-fluid" style="max-width: 100px;">
                @endif
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Tiêu đề (Tiếng Việt)</label>
                <input type="text" class="form-control" name="feature_2_title_vi"
                    value="{{ old('feature_2_title_vi', $whyChooseSection->feature_2_title_vi ?? 'Đội ngũ chuyên gia am hiểu thị trường') }}">
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Tiêu đề (English)</label>
                <input type="text" class="form-control" name="feature_2_title_en"
                    value="{{ old('feature_2_title_en', $whyChooseSection->feature_2_title_en ?? 'A team of experts with in-depth market knowledge') }}">
            </div>
        </div>
    </div>

    <!-- Feature 3 -->
    <div class="card mb-3 p-3 bg-light">
        <h6 class="fw-bold mb-3">Tính năng 3</h6>
        <div class="row">
            <div class="col-md-4 mb-3">
                <label class="form-label">Icon</label>
                <input type="file" class="form-control" name="feature_3_icon" accept="image/*"
                    onchange="previewImage(this, 'feature_3_icon_preview')">
                @if($whyChooseSection && $whyChooseSection->feature_3_icon)
                <img id="feature_3_icon_preview" src="{{ asset($whyChooseSection->feature_3_icon) }}"
                    alt="Preview" class="image-preview img-fluid" style="max-width: 100px;">
                @else
                <img id="feature_3_icon_preview" src="{{ asset('/frontend/assets/img/icons/antennas.svg') }}"
                    alt="Preview" class="image-preview img-fluid" style="max-width: 100px;">
                @endif
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Tiêu đề (Tiếng Việt)</label>
                <input type="text" class="form-control" name="feature_3_title_vi"
                    value="{{ old('feature_3_title_vi', $whyChooseSection->feature_3_title_vi ?? 'Chuẩn hóa, đảm bảo tính nhất quán và hiệu quả') }}">
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Tiêu đề (English)</label>
                <input type="text" class="form-control" name="feature_3_title_en"
                    value="{{ old('feature_3_title_en', $whyChooseSection->feature_3_title_en ?? 'Standardization, ensuring consistency and effectiveness') }}">
            </div>
        </div>
    </div>

    <!-- Feature 4 -->
    <div class="card mb-3 p-3 bg-light">
        <h6 class="fw-bold mb-3">Tính năng 4</h6>
        <div class="row">
            <div class="col-md-4 mb-3">
                <label class="form-label">Icon</label>
                <input type="file" class="form-control" name="feature_4_icon" accept="image/*"
                    onchange="previewImage(this, 'feature_4_icon_preview')">
                @if($whyChooseSection && $whyChooseSection->feature_4_icon)
                <img id="feature_4_icon_preview" src="{{ asset($whyChooseSection->feature_4_icon) }}"
                    alt="Preview" class="image-preview img-fluid" style="max-width: 100px;">
                @else
                <img id="feature_4_icon_preview" src="{{ asset('/frontend/assets/img/icons/skyline.svg') }}"
                    alt="Preview" class="image-preview img-fluid" style="max-width: 100px;">
                @endif
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Tiêu đề (Tiếng Việt)</label>
                <input type="text" class="form-control" name="feature_4_title_vi"
                    value="{{ old('feature_4_title_vi', $whyChooseSection->feature_4_title_vi ?? 'Xây dựng giá trị thực và hợp tác bền vững') }}">
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Tiêu đề (English)</label>
                <input type="text" class="form-control" name="feature_4_title_en"
                    value="{{ old('feature_4_title_en', $whyChooseSection->feature_4_title_en ?? 'Building real value and sustainable partnerships.') }}">
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
                value="{{ old('button_url', $whyChooseSection->button_url ?? 'javascript:void(0)') }}"
                placeholder="javascript:void(0)">
        </div>
    </div>

    <hr class="my-4">

    <!-- CEO Message Section -->
    <h5 class="fw-bold mb-3">Thông điệp từ CEO</h5>
    <div class="row">
        <div class="col-md-6 mb-4">
            <label class="form-label fw-bold">Ảnh đại diện CEO</label>
            <input type="file" class="form-control" name="ceo_avatar" accept="image/*"
                onchange="previewImage(this, 'ceo_avatar_preview')">
            @if($whyChooseSection && $whyChooseSection->ceo_avatar)
            <img id="ceo_avatar_preview" src="{{ asset($whyChooseSection->ceo_avatar) }}"
                alt="Preview" class="image-preview img-fluid">
            @else
            <img id="ceo_avatar_preview" src="{{ asset('/frontend/assets/img/about/ceo.jpg') }}"
                alt="Preview" class="image-preview img-fluid">
            @endif
        </div>
        <div class="col-md-6 mb-4">
            <label class="form-label fw-bold">Tên CEO</label>
            <input type="text" class="form-control" name="ceo_name"
                value="{{ old('ceo_name', $whyChooseSection->ceo_name ?? 'Edge Yu.') }}"
                placeholder="Edge Yu.">
        </div>
        <div class="col-md-6 mb-4">
            <label class="form-label fw-bold">Trích dẫn (Tiếng Việt)</label>
            <textarea class="form-control" name="ceo_quote_vi" rows="3"
                placeholder="Lorem ipsum...">{{ old('ceo_quote_vi', $whyChooseSection->ceo_quote_vi ?? '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."') }}</textarea>
        </div>
        <div class="col-md-6 mb-4">
            <label class="form-label fw-bold">Trích dẫn (English)</label>
            <textarea class="form-control" name="ceo_quote_en" rows="3"
                placeholder="Lorem ipsum...">{{ old('ceo_quote_en', $whyChooseSection->ceo_quote_en ?? '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."') }}</textarea>
        </div>
        <div class="col-md-6 mb-4">
            <label class="form-label fw-bold">Chức vụ (Tiếng Việt)</label>
            <input type="text" class="form-control" name="ceo_position_vi"
                value="{{ old('ceo_position_vi', $whyChooseSection->ceo_position_vi ?? 'Giám đốc, CEO') }}"
                placeholder="Giám đốc, CEO">
        </div>
        <div class="col-md-6 mb-4">
            <label class="form-label fw-bold">Chức vụ (English)</label>
            <input type="text" class="form-control" name="ceo_position_en"
                value="{{ old('ceo_position_en', $whyChooseSection->ceo_position_en ?? 'Director, CEO') }}"
                placeholder="Director, CEO">
        </div>
    </div>

    <hr class="my-4">

    <!-- Images Section -->
    <h5 class="fw-bold mb-3">Hình ảnh</h5>
    <div class="row">
        <div class="col-md-6 mb-4">
            <label class="form-label fw-bold">Hình ảnh Chính</label>
            <input type="file" class="form-control" name="main_image" accept="image/*"
                onchange="previewImage(this, 'main_image_preview')">
            @if($whyChooseSection && $whyChooseSection->main_image)
            <img id="main_image_preview" src="{{ asset($whyChooseSection->main_image) }}"
                alt="Preview" class="image-preview img-fluid">
            @else
            <img id="main_image_preview" src="{{ asset('/frontend/assets/img/about/wh-img-1.jpg') }}"
                alt="Preview" class="image-preview img-fluid">
            @endif
        </div>

        <div class="col-md-6 mb-4">
            <label class="form-label fw-bold">Hình ảnh Phụ</label>
            <input type="file" class="form-control" name="thumb_image" accept="image/*"
                onchange="previewImage(this, 'thumb_image_preview')">
            @if($whyChooseSection && $whyChooseSection->thumb_image)
            <img id="thumb_image_preview" src="{{ asset($whyChooseSection->thumb_image) }}"
                alt="Preview" class="image-preview img-fluid">
            @else
            <img id="thumb_image_preview" src="{{ asset('/frontend/assets/img/about/wh-img-1.jpg') }}"
                alt="Preview" class="image-preview img-fluid">
            @endif
        </div>
    </div>

    <hr class="my-4">

    <!-- Submit Button -->
    <div class="d-flex gap-3 justify-content-end">
        <button type="submit" class="btn btn-primary fw-normal text-white">
            <i class="ri-save-line"></i> Lưu Why Choose Us Section
        </button>
    </div>
</form>

@push('scripts')
<script>
    document.getElementById('why-choose-form')?.addEventListener('submit', function(e) {
        e.preventDefault();

        const form = this;
        const formData = new FormData(form);
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalBtnText = submitBtn.innerHTML;

        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="ri-loader-4-line"></i> Đang lưu...';

        fetch("{{ route('content-setup.home.update-why-choose') }}", {
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
                    text: data.message || 'Cập nhật Why Choose Us Section thành công!',
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
