@extends('admin.index')

@section('contentadmin')
    <div class="main-content-container overflow-hidden">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 mt-1">
            <h3 class="mb-0">Chi tiết Dịch vụ: {{ $service->title }}</h3>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb align-items-center mb-0 lh-1">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center text-decoration-none">
                            <i class="ri-home-8-line fs-15 text-primary me-1"></i>
                            <span class="text-body fs-14 hover">Bảng điều khiển</span>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('admin.services.index') }}"
                            class="d-flex align-items-center text-decoration-none">
                            <span class="text-body fs-14 hover">Dịch vụ</span>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span class="text-secondary">Chi tiết</span>
                    </li>
                </ol>
            </nav>
        </div>

        <div class="d-flex justify-content-end gap-3 mb-4">
            <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Quay lại danh sách Dịch vụ</a>
            <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-primary">Chỉnh sửa Dịch vụ</a>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="card bg-white rounded-10 border border-white mb-4">
                    <div class="p-20">
                        <h4 class="mb-3">Nội dung</h4>
                        <hr>
                        <div class="blog-content">
                            {!! $service->content !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card bg-white rounded-10 border border-white mb-4">
                    <div class="p-20">
                        <h4 class="mb-3">Thông tin cơ bản</h4>
                        <hr>
                        <div class="mb-3">
                            <strong>Tiêu đề:</strong>
                            <p>{{ $service->title }}</p>
                        </div>
                        <div class="mb-3">
                            <strong>Tiêu đề phụ:</strong>
                            <p>{{ $service->subtitle }}</p>
                        </div>
                        <div class="mb-3">
                            <strong>Mô tả:</strong>
                            <p>{{ $service->description }}</p>
                        </div>
                    </div>
                </div>

                <div class="card bg-white rounded-10 border border-white mb-4">
                    <div class="p-20">
                        <h4 class="mb-3">Thông tin Meta</h4>
                        <hr>
                        <div class="mb-3">
                            <strong>Meta Tiêu đề:</strong>
                            <p>{{ $service->metatitle }}</p>
                        </div>
                        <div class="mb-3">
                            <strong>Meta Mô tả:</strong>
                            <p>{{ $service->metadescription }}</p>
                        </div>
                    </div>
                </div>

                <div class="card bg-white rounded-10 border border-white mb-4">
                    <div class="p-20">
                        <h4 class="mb-3">Thời gian</h4>
                        <hr>
                        <div class="mb-3">
                            <strong>Ngày tạo:</strong>
                            <p>{{ $service->created_at->format('d M, Y H:i') }}</p>
                        </div>
                        <div class="mb-3">
                            <strong>Cập nhật lúc:</strong>
                            <p>{{ $service->updated_at->format('d M, Y H:i') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
