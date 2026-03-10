<form id="services-form" enctype="multipart/form-data">
    @csrf

    <!-- Status Toggle -->
    <div class="form-group mb-4">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="is_active" id="services_is_active"
                {{ old('is_active', $servicesSection->is_active ?? true) ? 'checked' : '' }}>
            <label class="form-check-label" for="services_is_active">
                Kích hoạt section
            </label>
        </div>
    </div>

    <!-- Language Tabs -->
    <ul class="nav nav-tabs language-tabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="services-vi-tab" data-bs-toggle="tab" data-bs-target="#services-vi-content"
                type="button" role="tab">
                🇻🇳 Tiếng Việt
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="services-en-tab" data-bs-toggle="tab" data-bs-target="#services-en-content"
                type="button" role="tab">
                🇬🇧 English
            </button>
        </li>
    </ul>

    <div class="tab-content">
        <!-- Vietnamese Content -->
        <div class="tab-pane fade show active" id="services-vi-content" role="tabpanel">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Phụ đề (Tiếng Việt) *</label>
                    <input type="text" class="form-control" name="subtitle_vi"
                        value="{{ old('subtitle_vi', $servicesSection->subtitle_vi ?? 'Chúng tôi làm gì?') }}"
                        placeholder="Chúng tôi làm gì?">
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Tiêu đề chính (Tiếng Việt) *</label>
                    <textarea class="form-control" name="heading_vi" rows="3"
                        placeholder="Chúng tôi giúp doanh nghiệp...">{{ old('heading_vi', $servicesSection->heading_vi ?? 'Chúng tôi giúp doanh nghiệp tối ưu nguồn lực và mở rộng quy mô bằng các giải pháp trọng tâm') }}</textarea>
                </div>
            </div>
        </div>

        <!-- English Content -->
        <div class="tab-pane fade" id="services-en-content" role="tabpanel">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Phụ đề (English) *</label>
                    <input type="text" class="form-control" name="subtitle_en"
                        value="{{ old('subtitle_en', $servicesSection->subtitle_en ?? 'What do We Do?') }}"
                        placeholder="What do We Do?">
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Tiêu đề chính (English) *</label>
                    <textarea class="form-control" name="heading_en" rows="3"
                        placeholder="Empowering Business...">{{ old('heading_en', $servicesSection->heading_en ?? 'Empowering Business Excellence through Strategic & Core Solutions') }}</textarea>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-4">

    <!-- Service Cards -->
    <h5 class="fw-bold mb-3">3 Thẻ Dịch vụ</h5>

    <!-- Service Card 1 -->
    <div class="card mb-3 p-3 bg-light">
        <h6 class="fw-bold mb-3">Dịch vụ 1 - Tư vấn Đầu tư</h6>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Tiêu đề (Tiếng Việt)</label>
                <input type="text" class="form-control" name="service_1_title_vi"
                    value="{{ old('service_1_title_vi', $servicesSection->service_1_title_vi ?? 'Tư vấn Đầu tư') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Tiêu đề (English)</label>
                <input type="text" class="form-control" name="service_1_title_en"
                    value="{{ old('service_1_title_en', $servicesSection->service_1_title_en ?? 'Investment Consulting') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Mô tả (Tiếng Việt)</label>
                <textarea class="form-control" name="service_1_desc_vi" rows="3">{{ old('service_1_desc_vi', $servicesSection->service_1_desc_vi ?? 'Cung cấp chiến lược đầu tư thông minh và quản lý nguồn vốn hiệu quả để tối ưu hóa lợi nhuận dài hạn cho đối tác.') }}</textarea>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Mô tả (English)</label>
                <textarea class="form-control" name="service_1_desc_en" rows="3">{{ old('service_1_desc_en', $servicesSection->service_1_desc_en ?? 'Providing smart investment strategies and effective capital management to optimize long-term returns for partners.') }}</textarea>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Hình ảnh</label>
                <input type="file" class="form-control" name="service_1_image" accept="image/*,image/svg+xml,.svg"
                    onchange="previewImage(this, 'service_1_preview')">
                @if($servicesSection && $servicesSection->service_1_image)
                <img id="service_1_preview" src="{{ asset($servicesSection->service_1_image) }}"
                    alt="Preview" class="image-preview img-fluid">
                @else
                <img id="service_1_preview" src="{{ asset('/frontend/assets/img/features/feature-img-1.jpg') }}"
                    alt="Preview" class="image-preview img-fluid">
                @endif
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Đường dẫn URL</label>
                <input type="text" class="form-control" name="service_1_url"
                    value="{{ old('service_1_url', $servicesSection->service_1_url ?? 'javascript:void(0)') }}"
                    placeholder="javascript:void(0)">
            </div>
        </div>
    </div>

    <!-- Service Card 2 -->
    <div class="card mb-3 p-3 bg-light">
        <h6 class="fw-bold mb-3">Dịch vụ 2 - Thương mại và Phân phối</h6>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Tiêu đề (Tiếng Việt)</label>
                <input type="text" class="form-control" name="service_2_title_vi"
                    value="{{ old('service_2_title_vi', $servicesSection->service_2_title_vi ?? 'Thương mại và Phân phối') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Tiêu đề (English)</label>
                <input type="text" class="form-control" name="service_2_title_en"
                    value="{{ old('service_2_title_en', $servicesSection->service_2_title_en ?? 'Trade and Distribution') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Mô tả (Tiếng Việt)</label>
                <textarea class="form-control" name="service_2_desc_vi" rows="3">{{ old('service_2_desc_vi', $servicesSection->service_2_desc_vi ?? 'Số hóa quy trình vận hành và ứng dụng công nghệ tiên tiến nhằm nâng cao năng suất và lợi thế cạnh tranh số cho doanh nghiệp.') }}</textarea>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Mô tả (English)</label>
                <textarea class="form-control" name="service_2_desc_en" rows="3">{{ old('service_2_desc_en', $servicesSection->service_2_desc_en ?? 'Digitalizing operations and applying advanced technology to enhance productivity and digital competitive advantages for businesses.') }}</textarea>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Hình ảnh</label>
                <input type="file" class="form-control" name="service_2_image" accept="image/*,image/svg+xml,.svg"
                    onchange="previewImage(this, 'service_2_preview')">
                @if($servicesSection && $servicesSection->service_2_image)
                <img id="service_2_preview" src="{{ asset($servicesSection->service_2_image) }}"
                    alt="Preview" class="image-preview img-fluid">
                @else
                <img id="service_2_preview" src="{{ asset('/frontend/assets/img/features/feature-img-2.jpg') }}"
                    alt="Preview" class="image-preview img-fluid">
                @endif
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Đường dẫn URL</label>
                <input type="text" class="form-control" name="service_2_url"
                    value="{{ old('service_2_url', $servicesSection->service_2_url ?? 'javascript:void(0)') }}"
                    placeholder="javascript:void(0)">
            </div>
        </div>
    </div>

    <!-- Service Card 3 -->
    <div class="card mb-3 p-3 bg-light">
        <h6 class="fw-bold mb-3">Dịch vụ 3 - Giải pháp Công nghệ</h6>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Tiêu đề (Tiếng Việt)</label>
                <input type="text" class="form-control" name="service_3_title_vi"
                    value="{{ old('service_3_title_vi', $servicesSection->service_3_title_vi ?? 'Giải pháp Công nghệ') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Tiêu đề (English)</label>
                <input type="text" class="form-control" name="service_3_title_en"
                    value="{{ old('service_3_title_en', $servicesSection->service_3_title_en ?? 'Technology Solution') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Mô tả (Tiếng Việt)</label>
                <textarea class="form-control" name="service_3_desc_vi" rows="3">{{ old('service_3_desc_vi', $servicesSection->service_3_desc_vi ?? 'Chúng tôi giúp chuyên gia tìm dạng và đề xúc tìm dạng nhà đa quy mô') }}</textarea>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Mô tả (English)</label>
                <textarea class="form-control" name="service_3_desc_en" rows="3">{{ old('service_3_desc_en', $servicesSection->service_3_desc_en ?? 'We help you find and secure your ideal investment property') }}</textarea>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Hình ảnh</label>
                <input type="file" class="form-control" name="service_3_image" accept="image/*,image/svg+xml,.svg"
                    onchange="previewImage(this, 'service_3_preview')">
                @if($servicesSection && $servicesSection->service_3_image)
                <img id="service_3_preview" src="{{ asset($servicesSection->service_3_image) }}"
                    alt="Preview" class="image-preview img-fluid">
                @else
                <img id="service_3_preview" src="{{ asset('/frontend/assets/img/features/feature-img-3.jpg') }}"
                    alt="Preview" class="image-preview img-fluid">
                @endif
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Đường dẫn URL</label>
                <input type="text" class="form-control" name="service_3_url"
                    value="{{ old('service_3_url', $servicesSection->service_3_url ?? 'javascript:void(0)') }}"
                    placeholder="javascript:void(0)">
            </div>
        </div>
    </div>

    <hr class="my-4">

    <!-- Submit Button -->
    <div class="d-flex gap-3 justify-content-end">
        <button type="submit" class="btn btn-primary fw-normal text-white">
            <i class="ri-save-line"></i> Lưu Services Section
        </button>
    </div>
</form>

@push('scripts')
<script>
    document.getElementById('services-form')?.addEventListener('submit', function(e) {
        e.preventDefault();

        const form = this;
        const formData = new FormData(form);
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalBtnText = submitBtn.innerHTML;

        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="ri-loader-4-line"></i> Đang lưu...';

        fetch("{{ route('content-setup.home.update-services') }}", {
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
                    text: data.message || 'Cập nhật Services Section thành công!',
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
