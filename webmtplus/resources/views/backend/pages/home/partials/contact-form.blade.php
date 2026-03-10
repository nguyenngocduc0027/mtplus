<form id="contact-form" enctype="multipart/form-data">
    @csrf

    <!-- Status Toggle -->
    <div class="form-group mb-4">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="is_active" id="contact_is_active"
                {{ old('is_active', $contactSection->is_active ?? true) ? 'checked' : '' }}>
            <label class="form-check-label" for="contact_is_active">
                Kích hoạt section
            </label>
        </div>
    </div>

    <!-- Language Tabs -->
    <ul class="nav nav-tabs language-tabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="contact-vi-tab" data-bs-toggle="tab" data-bs-target="#contact-vi-content"
                type="button" role="tab">
                🇻🇳 Tiếng Việt
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-en-tab" data-bs-toggle="tab" data-bs-target="#contact-en-content"
                type="button" role="tab">
                🇬🇧 English
            </button>
        </li>
    </ul>

    <div class="tab-content">
        <!-- Vietnamese Content -->
        <div class="tab-pane fade show active" id="contact-vi-content" role="tabpanel">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Phụ đề (Tiếng Việt) *</label>
                    <input type="text" class="form-control" name="subtitle_vi"
                        value="{{ old('subtitle_vi', $contactSection->subtitle_vi ?? 'Liên hệ') }}"
                        placeholder="Liên hệ">
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Tiêu đề chính (Tiếng Việt) *</label>
                    <textarea class="form-control" name="heading_vi" rows="2"
                        placeholder="KẾT NỐI CÙNG MT PLUS...">{{ old('heading_vi', $contactSection->heading_vi ?? 'KẾT NỐI CÙNG MT PLUS – KHỞI ĐẦU MỌI CƠ HỘI') }}</textarea>
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Mô tả (Tiếng Việt)</label>
                    <textarea class="form-control" name="description_vi" rows="3"
                        placeholder="Đừng ngần ngại liên hệ...">{{ old('description_vi', $contactSection->description_vi ?? 'Đừng ngần ngại liên hệ với đội ngũ chuyên gia của chúng tôi để bắt đầu kế hoạch bứt phá tương lai ngay hôm nay.') }}</textarea>
                </div>
            </div>
        </div>

        <!-- English Content -->
        <div class="tab-pane fade" id="contact-en-content" role="tabpanel">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Phụ đề (English) *</label>
                    <input type="text" class="form-control" name="subtitle_en"
                        value="{{ old('subtitle_en', $contactSection->subtitle_en ?? 'Contact') }}"
                        placeholder="Contact">
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Tiêu đề chính (English) *</label>
                    <textarea class="form-control" name="heading_en" rows="2"
                        placeholder="CONNECT WITH MT PLUS...">{{ old('heading_en', $contactSection->heading_en ?? 'CONNECT WITH MT PLUS – WHERE OPPORTUNITIES BEGIN') }}</textarea>
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Mô tả (English)</label>
                    <textarea class="form-control" name="description_en" rows="3"
                        placeholder="Don't hesitate to contact...">{{ old('description_en', $contactSection->description_en ?? "Don't hesitate to contact our expert team to start your future breakthrough plan today.") }}</textarea>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-4">

    <!-- Google Map URL -->
    <h5 class="fw-bold mb-3">Google Map</h5>
    <div class="card mb-4 p-3 bg-light">
        <div class="row">
            <div class="col-md-12 mb-3">
                <label class="form-label">Google Map Embed URL</label>
                <textarea class="form-control" name="map_url" rows="3"
                    placeholder="https://www.google.com/maps/embed?pb=...">{{ old('map_url', $contactSection->map_url ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4418.547012515451!2d105.80019557584068!3d20.993992088970764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab24c5621439%3A0xed7a32c6a7340f8e!2zQ8O0bmcgVHkgVE5ISCBHaeG6o2kgUGjDoXAgQ8O0bmcgTmdo4buHIE1ldGFTb2Z0!5e1!3m2!1svi!2s!4v1769661751238!5m2!1svi!2s') }}</textarea>
                <small class="text-muted">Lấy URL nhúng từ Google Maps (Share → Embed a map → Copy HTML)</small>
            </div>
        </div>
    </div>

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
    document.getElementById('contact-form').addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);
        const submitBtn = this.querySelector('button[type="submit"]');
        const originalBtnText = submitBtn.innerHTML;

        // Disable button and show loading
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Đang lưu...';

        fetch('{{ route('content-setup.home.contact.update') }}', {
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
