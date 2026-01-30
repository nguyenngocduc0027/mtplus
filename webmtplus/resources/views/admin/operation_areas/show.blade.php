@extends('admin.index')

@section('contentadmin')
    <div class="main-content-container overflow-hidden">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 mt-1">
            <h3 class="mb-0">Chi tiết Lĩnh vực hoạt động: {{ $operationArea->title }}</h3>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb align-items-center mb-0 lh-1">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center text-decoration-none">
                            <i class="ri-home-8-line fs-15 text-primary me-1"></i>
                            <span class="text-body fs-14 hover">Bảng điều khiển</span>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('admin.operation_areas.index') }}"
                            class="d-flex align-items-center text-decoration-none">
                            <span class="text-body fs-14 hover">Lĩnh vực hoạt động</span>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span class="text-secondary">Chi tiết</span>
                    </li>
                </ol>
            </nav>
        </div>

        <div class="d-flex justify-content-end gap-3 mb-4">
            <a href="{{ route('admin.operation_areas.index') }}" class="btn btn-secondary">Quay lại danh sách</a>
            <a href="{{ route('admin.operation_areas.edit', $operationArea->slug) }}" class="btn btn-primary">Chỉnh sửa</a>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="card bg-white rounded-10 border border-white mb-4">
                    <div class="p-20">
                        <h4 class="mb-3">Nội dung</h4>
                        <hr>
                        <div class="blog-content">
                            {!! $operationArea->content !!}
                        </div>
                    </div>
                </div>

                @if($operationArea->card_1_text || $operationArea->card_2_text || $operationArea->card_3_text)
                <div class="card bg-white rounded-10 border border-white mb-4">
                    <div class="p-20">
                        <h4 class="mb-3">Thẻ nội dung</h4>
                        <hr>
                        <div class="row">
                            @if($operationArea->card_1_text)
                            <div class="col-md-4 mb-3">
                                <div class="p-3 border rounded">
                                    <h6>Thẻ 1</h6>
                                    <p class="mb-0">{{ $operationArea->card_1_text }}</p>
                                </div>
                            </div>
                            @endif
                            @if($operationArea->card_2_text)
                            <div class="col-md-4 mb-3">
                                <div class="p-3 border rounded">
                                    <h6>Thẻ 2</h6>
                                    <p class="mb-0">{{ $operationArea->card_2_text }}</p>
                                </div>
                            </div>
                            @endif
                            @if($operationArea->card_3_text)
                            <div class="col-md-4 mb-3">
                                <div class="p-3 border rounded">
                                    <h6>Thẻ 3</h6>
                                    <p class="mb-0">{{ $operationArea->card_3_text }}</p>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endif
            </div>

            <div class="col-lg-4">
                <div class="card bg-white rounded-10 border border-white mb-4">
                    <div class="p-20">
                        <h4 class="mb-3">Thông tin cơ bản</h4>
                        <hr>
                        <div class="mb-3">
                            <strong>Tiêu đề:</strong>
                            <p>{{ $operationArea->title }}</p>
                        </div>
                        <div class="mb-3">
                            <strong>Tiêu đề phụ:</strong>
                            <p>{{ $operationArea->subtitle ?? 'N/A' }}</p>
                        </div>
                        <div class="mb-3">
                            <strong>Slug:</strong>
                            <p>{{ $operationArea->slug }}</p>
                        </div>
                    </div>
                </div>

                @if($operationArea->image_path || $operationArea->image_path_2)
                <div class="card bg-white rounded-10 border border-white mb-4">
                    <div class="p-20">
                        <h4 class="mb-3">Hình ảnh</h4>
                        <hr>
                        @if($operationArea->image_path)
                        <div class="mb-3">
                            <strong>Hình ảnh chính:</strong>
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $operationArea->image_path) }}"
                                     alt="{{ $operationArea->title }}"
                                     class="img-fluid rounded">
                            </div>
                        </div>
                        @endif
                        @if($operationArea->image_path_2)
                        <div class="mb-3">
                            <strong>Hình ảnh phụ:</strong>
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $operationArea->image_path_2) }}"
                                     alt="{{ $operationArea->title }}"
                                     class="img-fluid rounded">
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                @endif

                <div class="card bg-white rounded-10 border border-white mb-4">
                    <div class="p-20">
                        <h4 class="mb-3">Thời gian</h4>
                        <hr>
                        <div class="mb-3">
                            <strong>Ngày tạo:</strong>
                            <p>{{ $operationArea->created_at->format('d M, Y H:i') }}</p>
                        </div>
                        <div class="mb-3">
                            <strong>Cập nhật lúc:</strong>
                            <p>{{ $operationArea->updated_at->format('d M, Y H:i') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
