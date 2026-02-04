<form id="awards-form" enctype="multipart/form-data">
    @csrf

    <!-- Status Toggle -->
    <div class="form-group mb-4">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="is_active" id="awards_is_active"
                {{ old('is_active', $awardsSection->is_active ?? true) ? 'checked' : '' }}>
            <label class="form-check-label" for="awards_is_active">
                Kích hoạt section
            </label>
        </div>
    </div>

    <!-- Language Tabs -->
    <ul class="nav nav-tabs language-tabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="awards-vi-tab" data-bs-toggle="tab" data-bs-target="#awards-vi-content"
                type="button" role="tab">
                🇻🇳 Tiếng Việt
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="awards-en-tab" data-bs-toggle="tab" data-bs-target="#awards-en-content"
                type="button" role="tab">
                🇬🇧 English
            </button>
        </li>
    </ul>

    <div class="tab-content">
        <!-- Vietnamese Content -->
        <div class="tab-pane fade show active" id="awards-vi-content" role="tabpanel">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Phụ đề (Tiếng Việt) *</label>
                    <input type="text" class="form-control" name="subtitle_vi"
                        value="{{ old('subtitle_vi', $awardsSection->subtitle_vi ?? 'Giải thưởng của chúng tôi') }}"
                        placeholder="Giải thưởng của chúng tôi">
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Tiêu đề chính (Tiếng Việt) *</label>
                    <textarea class="form-control" name="heading_vi" rows="2"
                        placeholder="THÀNH TỰU VƯỢT TRỘI...">{{ old('heading_vi', $awardsSection->heading_vi ?? 'THÀNH TỰU VƯỢT TRỘI - ĐẲNG CẤP QUỐC TẾ') }}</textarea>
                </div>
            </div>
        </div>

        <!-- English Content -->
        <div class="tab-pane fade" id="awards-en-content" role="tabpanel">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Phụ đề (English) *</label>
                    <input type="text" class="form-control" name="subtitle_en"
                        value="{{ old('subtitle_en', $awardsSection->subtitle_en ?? 'Our Awards') }}"
                        placeholder="Our Awards">
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Tiêu đề chính (English) *</label>
                    <textarea class="form-control" name="heading_en" rows="2"
                        placeholder="OUTSTANDING ACHIEVEMENTS...">{{ old('heading_en', $awardsSection->heading_en ?? 'OUTSTANDING ACHIEVEMENTS - INTERNATIONAL STANDARD') }}</textarea>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-4">

    <!-- Awards Items -->
    <h5 class="fw-bold mb-3">5 Giải thưởng</h5>

    @for($i = 1; $i <= 5; $i++)
    <!-- Award {{ $i }} -->
    <div class="card mb-3 p-3 bg-light">
        <h6 class="fw-bold mb-3">Giải thưởng {{ $i }}</h6>
        <div class="row">
            <div class="col-md-3 mb-3">
                <label class="form-label">Icon</label>
                <input type="file" class="form-control" name="award_{{ $i }}_icon" accept="image/*"
                    onchange="previewImage(this, 'award_{{ $i }}_icon_preview')">
                @if($awardsSection && $awardsSection->{'award_' . $i . '_icon'})
                <img id="award_{{ $i }}_icon_preview" src="{{ asset($awardsSection->{'award_' . $i . '_icon'}) }}"
                    alt="Preview" class="image-preview img-fluid mt-2" style="max-width: 100px;">
                @else
                <img id="award_{{ $i }}_icon_preview" src="{{ asset('/frontend/assets/img/badges/badge-' . $i . '.svg') }}"
                    alt="Preview" class="image-preview img-fluid mt-2" style="max-width: 100px;">
                @endif
            </div>

            <div class="col-md-3 mb-3">
                <label class="form-label">Năm</label>
                <input type="text" class="form-control" name="award_{{ $i }}_year"
                    value="{{ old('award_' . $i . '_year', $awardsSection->{'award_' . $i . '_year'} ?? '') }}"
                    placeholder="2024">
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Tiêu đề (Tiếng Việt)</label>
                <input type="text" class="form-control" name="award_{{ $i }}_title_vi"
                    value="{{ old('award_' . $i . '_title_vi', $awardsSection->{'award_' . $i . '_title_vi'} ?? '') }}"
                    placeholder="Tên giải thưởng...">
            </div>

            <div class="col-md-12 mb-3">
                <label class="form-label">Tiêu đề (English)</label>
                <input type="text" class="form-control" name="award_{{ $i }}_title_en"
                    value="{{ old('award_' . $i . '_title_en', $awardsSection->{'award_' . $i . '_title_en'} ?? '') }}"
                    placeholder="Award title...">
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
    document.getElementById('awards-form').addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);
        const submitBtn = this.querySelector('button[type="submit"]');
        const originalBtnText = submitBtn.innerHTML;

        // Disable button and show loading
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Đang lưu...';

        fetch('{{ route("content-setup.home.awards.update") }}', {
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
