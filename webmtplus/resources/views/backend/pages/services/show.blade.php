@extends('backend.layouts.app')
@props(['pageTitle' => 'Chi tiết Dịch vụ'])
@push('styles')
    <style>
        .service-icon-display {
            max-width: 150px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .info-card {
            background: #f8f9fa;
            border-left: 4px solid #0d6efd;
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 0.5rem;
        }

        .info-label {
            font-weight: 600;
            color: #495057;
            margin-bottom: 0.5rem;
        }

        .info-value {
            color: #212529;
        }

        .content-preview {
            background: #fff;
            padding: 2rem;
            border: 1px solid #dee2e6;
            border-radius: 0.5rem;
            margin-top: 1.5rem;
        }

        .content-preview h1,
        .content-preview h2,
        .content-preview h3,
        .content-preview h4,
        .content-preview h5,
        .content-preview h6 {
            margin-top: 1.5rem;
            margin-bottom: 1rem;
        }

        .content-preview p {
            margin-bottom: 1rem;
            line-height: 1.8;
        }

        .content-preview ul {
            margin-bottom: 1rem;
        }

        .badge-large {
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
        }
    </style>
@endpush
@section('content-backend')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 mt-1">
        <h3 class="mb-0">{{ $pageTitle }}</h3>
        <x-admin.ui.breadcrumb :pageTitle="$pageTitle" />
    </div>

    <div class="card bg-white border-0 rounded-10 mb-4">
        <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="mb-0">{{ $service->title_vi }}</h4>
                <div class="d-flex gap-2">
                    <a href="{{ route('admin.services.edit', $service->slug) }}" class="btn btn-primary">
                        <i class="ri-edit-line"></i> Chỉnh sửa
                    </a>
                    <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
                        <i class="ri-arrow-left-line"></i> Quay lại
                    </a>
                </div>
            </div>

            <hr>

            <!-- Basic Information -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="info-card">
                        <div class="info-label">Slug</div>
                        <div class="info-value">
                            <span class="badge bg-info-10 text-info">{{ $service->slug }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-card">
                        <div class="info-label">Trạng thái</div>
                        <div class="info-value">
                            @if($service->is_active)
                                <span class="badge bg-success badge-large">
                                    <i class="ri-checkbox-circle-line"></i> Hoạt động
                                </span>
                            @else
                                <span class="badge bg-danger badge-large">
                                    <i class="ri-close-circle-line"></i> Tạm dừng
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-card">
                        <div class="info-label">Nổi bật</div>
                        <div class="info-value">
                            @if($service->is_featured)
                                <span class="badge bg-warning badge-large">
                                    <i class="ri-star-fill"></i> Nổi bật
                                </span>
                            @else
                                <span class="badge bg-secondary badge-large">Không</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Icon -->
            @if($service->icon_path)
                <div class="mb-4">
                    <h5 class="mb-3">Icon</h5>
                    <img src="{{ asset($service->icon_path) }}"
                         alt="{{ $service->title_vi }}"
                         class="service-icon-display">
                </div>
            @endif

            <!-- Vietnamese Content -->
            <div class="mb-4">
                <h5 class="mb-3">
                    <i class="ri-flag-line"></i> Nội dung Tiếng Việt
                </h5>

                <div class="info-card">
                    <div class="info-label">Tiêu đề</div>
                    <div class="info-value">{{ $service->title_vi }}</div>
                </div>

                @if($service->short_description_vi)
                    <div class="info-card">
                        <div class="info-label">Mô tả ngắn</div>
                        <div class="info-value">{{ $service->short_description_vi }}</div>
                    </div>
                @endif

                @if($service->content_vi)
                    <div class="info-card">
                        <div class="info-label">Nội dung chi tiết</div>
                        <div class="content-preview">
                            {!! $service->content_vi !!}
                        </div>
                    </div>
                @endif
            </div>

            <!-- English Content -->
            <div class="mb-4">
                <h5 class="mb-3">
                    <i class="ri-flag-line"></i> English Content
                </h5>

                <div class="info-card">
                    <div class="info-label">Title</div>
                    <div class="info-value">{{ $service->title_en }}</div>
                </div>

                @if($service->short_description_en)
                    <div class="info-card">
                        <div class="info-label">Short Description</div>
                        <div class="info-value">{{ $service->short_description_en }}</div>
                    </div>
                @endif

                @if($service->content_en)
                    <div class="info-card">
                        <div class="info-label">Content</div>
                        <div class="content-preview">
                            {!! $service->content_en !!}
                        </div>
                    </div>
                @endif
            </div>

            <!-- Metadata -->
            <div class="row">
                <div class="col-md-6">
                    <div class="info-card">
                        <div class="info-label">Ngày tạo</div>
                        <div class="info-value">
                            <i class="ri-calendar-line"></i>
                            {{ $service->created_at->format('d/m/Y H:i') }}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-card">
                        <div class="info-label">Cập nhật lần cuối</div>
                        <div class="info-value">
                            <i class="ri-calendar-line"></i>
                            {{ $service->updated_at->format('d/m/Y H:i') }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="d-flex justify-content-end gap-2 mt-4 pt-3 border-top">
                <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
                    <i class="ri-arrow-left-line"></i> Quay lại danh sách
                </a>
                <a href="{{ route('admin.services.edit', $service->slug) }}" class="btn btn-primary">
                    <i class="ri-edit-line"></i> Chỉnh sửa
                </a>
                
            </div>
        </div>
    </div>
@endsection
