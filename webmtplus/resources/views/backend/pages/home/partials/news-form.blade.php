<form id="news-form" enctype="multipart/form-data">
    @csrf

    <!-- Status Toggle -->
    <div class="form-group mb-4">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="is_active" id="news_is_active"
                {{ old('is_active', $newsSection->is_active ?? true) ? 'checked' : '' }}>
            <label class="form-check-label" for="news_is_active">
                Kích hoạt section
            </label>
        </div>
    </div>

    <!-- Language Tabs -->
    <ul class="nav nav-tabs language-tabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="news-vi-tab" data-bs-toggle="tab" data-bs-target="#news-vi-content"
                type="button" role="tab">
                🇻🇳 Tiếng Việt
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="news-en-tab" data-bs-toggle="tab" data-bs-target="#news-en-content"
                type="button" role="tab">
                🇬🇧 English
            </button>
        </li>
    </ul>

    <div class="tab-content">
        <!-- Vietnamese Content -->
        <div class="tab-pane fade show active" id="news-vi-content" role="tabpanel">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Phụ đề (Tiếng Việt) *</label>
                    <input type="text" class="form-control" name="subtitle_vi"
                        value="{{ old('subtitle_vi', $newsSection->subtitle_vi ?? 'Tin tức') }}"
                        placeholder="Tin tức">
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Tiêu đề chính (Tiếng Việt) *</label>
                    <textarea class="form-control" name="heading_vi" rows="2"
                        placeholder="TIN TỨC & GÓC NHÌN CHIẾN LƯỢC">{{ old('heading_vi', $newsSection->heading_vi ?? 'TIN TỨC & GÓC NHÌN CHIẾN LƯỢC') }}</textarea>
                </div>
            </div>
        </div>

        <!-- English Content -->
        <div class="tab-pane fade" id="news-en-content" role="tabpanel">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Phụ đề (English) *</label>
                    <input type="text" class="form-control" name="subtitle_en"
                        value="{{ old('subtitle_en', $newsSection->subtitle_en ?? 'News') }}"
                        placeholder="News">
                </div>

                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold">Tiêu đề chính (English) *</label>
                    <textarea class="form-control" name="heading_en" rows="2"
                        placeholder="NEWS & STRATEGIC PERSPECTIVES">{{ old('heading_en', $newsSection->heading_en ?? 'NEWS & STRATEGIC PERSPECTIVES') }}</textarea>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-4">

    <!-- Note about News Items -->
    <div class="alert alert-info">
        <i class="fas fa-info-circle"></i>
        <strong>Lưu ý:</strong> Các bài viết tin tức sẽ được quản lý từ module News riêng. Section này chỉ quản lý tiêu đề của khu vực hiển thị tin tức.
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
    document.getElementById('news-form').addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);
        const submitBtn = this.querySelector('button[type="submit"]');
        const originalBtnText = submitBtn.innerHTML;

        // Disable button and show loading
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Đang lưu...';

        fetch('{{ route('content-setup.home.news.update') }}', {
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
