<form id="testimonials-form" enctype="multipart/form-data">
    @csrf

    <!-- Status Toggle -->
    <div class="form-group mb-4">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="is_active" id="testimonials_is_active"
                {{ old('is_active', $testimonialsSection->is_active ?? true) ? 'checked' : '' }}>
            <label class="form-check-label" for="testimonials_is_active">
                Kích hoạt section
            </label>
        </div>
    </div>

    <!-- Language Tabs -->
    <ul class="nav nav-tabs language-tabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="testimonials-vi-tab" data-bs-toggle="tab"
                data-bs-target="#testimonials-vi-content" type="button" role="tab">
                🇻🇳 Tiếng Việt
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="testimonials-en-tab" data-bs-toggle="tab"
                data-bs-target="#testimonials-en-content" type="button" role="tab">
                🇬🇧 English
            </button>
        </li>
    </ul>

    <div class="tab-content">
        <!-- Vietnamese Content -->
        <div class="tab-pane fade show active" id="testimonials-vi-content" role="tabpanel">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Phụ đề (Tiếng Việt) *</label>
                    <input type="text" class="form-control" name="subtitle_vi"
                        value="{{ old('subtitle_vi', $testimonialsSection->subtitle_vi ?? 'Cảm nhận khách hàng') }}"
                        placeholder="Cảm nhận khách hàng">
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Tiêu đề chính (Tiếng Việt) *</label>
                    <textarea class="form-control" name="heading_vi" rows="2"
                        placeholder="Khách hàng nói gì về chúng tôi">{{ old('heading_vi', $testimonialsSection->heading_vi ?? 'KHÁCH HÀNG NÓI GÌ VỀ CHÚNG TÔI') }}</textarea>
                </div>
            </div>
        </div>

        <!-- English Content -->
        <div class="tab-pane fade" id="testimonials-en-content" role="tabpanel">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Phụ đề (English) *</label>
                    <input type="text" class="form-control" name="subtitle_en"
                        value="{{ old('subtitle_en', $testimonialsSection->subtitle_en ?? 'Testimonials') }}"
                        placeholder="Testimonials">
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Tiêu đề chính (English) *</label>
                    <textarea class="form-control" name="heading_en" rows="2"
                        placeholder="What Our Clients Say">{{ old('heading_en', $testimonialsSection->heading_en ?? 'WHAT OUR CLIENTS SAY ABOUT US') }}</textarea>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-4">

    <!-- Rating Box Info -->
    <h5 class="fw-bold mb-3">Thông tin Rating Box</h5>
    <div class="card mb-4 p-3 bg-light">
        <div class="row">
            <div class="col-md-3 mb-3">
                <label class="form-label">Điểm đánh giá</label>
                <input type="text" class="form-control" name="rating_score"
                    value="{{ old('rating_score', $testimonialsSection->rating_score ?? '4.8') }}"
                    placeholder="4.8">
                <small class="text-muted">Ví dụ: 4.8, 5.0</small>
            </div>

            <div class="col-md-3 mb-3">
                <label class="form-label">Số lượng khách hàng</label>
                <input type="text" class="form-control" name="customer_count"
                    value="{{ old('customer_count', $testimonialsSection->customer_count ?? '300+') }}"
                    placeholder="300+">
                <small class="text-muted">Ví dụ: 300+, 500+</small>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Text (Tiếng Việt)</label>
                <input type="text" class="form-control" name="customer_text_vi"
                    value="{{ old('customer_text_vi', $testimonialsSection->customer_text_vi ?? 'Khách hàng hài lòng') }}"
                    placeholder="Khách hàng hài lòng">
            </div>

            <div class="col-md-12 mb-3">
                <label class="form-label">Text (English)</label>
                <input type="text" class="form-control" name="customer_text_en"
                    value="{{ old('customer_text_en', $testimonialsSection->customer_text_en ?? 'Satisfied Customers') }}"
                    placeholder="Satisfied Customers">
            </div>
        </div>
    </div>

    <hr class="my-4">

    <!-- Testimonials Items -->
    <h5 class="fw-bold mb-3">4 Cảm nhận khách hàng</h5>

    @for ($i = 1; $i <= 4; $i++)
        <!-- Testimonial {{ $i }} -->
        <div class="card mb-3 p-3 bg-light">
            <h6 class="fw-bold mb-3">Testimonial {{ $i }}</h6>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label class="form-label">Tên khách hàng</label>
                    <input type="text" class="form-control" name="testimonial_{{ $i }}_name"
                        value="{{ old('testimonial_' . $i . '_name', $testimonialsSection->{'testimonial_' . $i . '_name'} ?? '') }}"
                        placeholder="Nguyễn Văn A">
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label">Công ty</label>
                    <input type="text" class="form-control" name="testimonial_{{ $i }}_company"
                        value="{{ old('testimonial_' . $i . '_company', $testimonialsSection->{'testimonial_' . $i . '_company'} ?? '') }}"
                        placeholder="ABC Corporation">
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label">Chức vụ (Tiếng Việt)</label>
                    <input type="text" class="form-control" name="testimonial_{{ $i }}_position_vi"
                        value="{{ old('testimonial_' . $i . '_position_vi', $testimonialsSection->{'testimonial_' . $i . '_position_vi'} ?? '') }}"
                        placeholder="Giám đốc điều hành">
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label">Chức vụ (English)</label>
                    <input type="text" class="form-control" name="testimonial_{{ $i }}_position_en"
                        value="{{ old('testimonial_' . $i . '_position_en', $testimonialsSection->{'testimonial_' . $i . '_position_en'} ?? '') }}"
                        placeholder="CEO">
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Cảm nhận (Tiếng Việt)</label>
                    <textarea class="form-control" name="testimonial_{{ $i }}_quote_vi" rows="3"
                        placeholder="Nhập cảm nhận của khách hàng...">{{ old('testimonial_' . $i . '_quote_vi', $testimonialsSection->{'testimonial_' . $i . '_quote_vi'} ?? '') }}</textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Cảm nhận (English)</label>
                    <textarea class="form-control" name="testimonial_{{ $i }}_quote_en" rows="3"
                        placeholder="Enter customer testimonial...">{{ old('testimonial_' . $i . '_quote_en', $testimonialsSection->{'testimonial_' . $i . '_quote_en'} ?? '') }}</textarea>
                </div>
            </div>
        </div>
    @endfor

    <!-- Submit Button -->
    <div class="d-flex justify-content-end gap-2 mt-4">
        <button type="button" class="btn btn-secondary" onclick="location.reload()">
            <i class="fas fa-redo"></i> Reset
        </button>
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Lưu thay đổi
        </button>
    </div>
</form>

<script>
    document.getElementById('testimonials-form').addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);
        const submitBtn = this.querySelector('button[type="submit"]');
        const originalBtnText = submitBtn.innerHTML;

        // Disable button and show loading
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Đang lưu...';

        fetch('{{ route('content-setup.home.testimonials.update') }}', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show success message
                    const alert = document.createElement('div');
                    alert.className = 'alert alert-success alert-dismissible fade show';
                    alert.innerHTML = `
                        ${data.message}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    `;
                    this.insertBefore(alert, this.firstChild);

                    // Auto dismiss after 3 seconds
                    setTimeout(() => {
                        alert.remove();
                    }, 3000);
                } else {
                    throw new Error(data.message || 'Có lỗi xảy ra');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                const alert = document.createElement('div');
                alert.className = 'alert alert-danger alert-dismissible fade show';
                alert.innerHTML = `
                    Có lỗi xảy ra: ${error.message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                `;
                this.insertBefore(alert, this.firstChild);
            })
            .finally(() => {
                // Re-enable button
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnText;
            });
    });
</script>
