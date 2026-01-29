@extends('admin.index')

@section('contentadmin')
<div class="main-content-container overflow-hidden">
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 mt-1">
        <h3 class="mb-0">Chỉnh sửa Khu vực Hoạt động</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb align-items-center mb-0 lh-1">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center text-decoration-none">
                        <i class="ri-home-8-line fs-15 text-primary me-1"></i>
                        <span class="text-body fs-14 hover">Bảng điều khiển</span>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('admin.operation_areas.index') }}" class="text-decoration-none">
                        <span>Khu vực Hoạt động</span>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <span class="text-secondary">Chỉnh sửa</span>
                </li>
            </ol>
        </nav>
    </div>

    <div class="card bg-white rounded-10 border border-white mb-4">
        <div class="p-20">
            <form action="{{ route('admin.operation_areas.update', $operationArea->slug) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    {{-- Thông tin Chính --}}
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Tiêu đề</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $operationArea->title) }}" required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="subtitle" class="form-label">Tiêu đề phụ</label>
                            <input type="text" class="form-control @error('subtitle') is-invalid @enderror" id="subtitle" name="subtitle" value="{{ old('subtitle', $operationArea->subtitle) }}">
                            @error('subtitle')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- Nội dung --}}
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="content" class="form-label">Nội dung</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="6">{{ old('content', $operationArea->content) }}</textarea>
                            @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- Tải lên Hình ảnh --}}
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="image_path" class="form-label">Hình ảnh (Chính)</label>
                            <input type="file" class="form-control @error('image_path') is-invalid @enderror" id="image_path" name="image_path">
                            @error('image_path')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            @if ($operationArea->image_path)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $operationArea->image_path) }}" alt="Ảnh chính hiện tại" style="max-width: 150px; height: auto;">
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="image_path_2" class="form-label">Hình ảnh (Phụ)</label>
                            <input type="file" class="form-control @error('image_path_2') is-invalid @enderror" id="image_path_2" name="image_path_2">
                            @error('image_path_2')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            @if ($operationArea->image_path_2)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $operationArea->image_path_2) }}" alt="Ảnh phụ hiện tại" style="max-width: 150px; height: auto;">
                                </div>
                            @endif
                        </div>
                    </div>

                    {{-- Văn bản Thẻ --}}
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="card_1_text" class="form-label">Văn bản Thẻ 1</label>
                            <input type="text" class="form-control @error('card_1_text') is-invalid @enderror" id="card_1_text" name="card_1_text" value="{{ old('card_1_text', $operationArea->card_1_text) }}">
                            @error('card_1_text')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="card_2_text" class="form-label">Văn bản Thẻ 2</label>
                            <input type="text" class="form-control @error('card_2_text') is-invalid @enderror" id="card_2_text" name="card_2_text" value="{{ old('card_2_text', $operationArea->card_2_text) }}">
                            @error('card_2_text')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="card_3_text" class="form-label">Văn bản Thẻ 3</label>
                            <input type="text" class="form-control @error('card_3_text') is-invalid @enderror" id="card_3_text" name="card_3_text" value="{{ old('card_3_text', $operationArea->card_3_text) }}">
                            @error('card_3_text')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end gap-3 mt-4">
                    <a href="{{ route('admin.operation_areas.index') }}" class="btn btn-secondary">Quay lại danh sách Lĩnh vực Hoạt động</a>
                    <button type="submit" class="btn btn-primary">Cập nhật Khu vực Hoạt động</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection