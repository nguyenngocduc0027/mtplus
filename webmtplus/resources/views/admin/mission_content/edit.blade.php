@extends('admin.index')

@section('contentadmin')
<div class="main-content-container overflow-hidden">
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 mt-1">
        <h3 class="mb-0">Chỉnh sửa Nội dung Trang Sứ Mệnh - {{ $locales[$locale] }}</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb align-items-center mb-0 lh-1">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center text-decoration-none">
                        <i class="ri-home-8-line fs-15 text-primary me-1"></i>
                        <span class="text-body fs-14 hover">Bảng điều khiển</span>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <span class="text-secondary">Nội dung Trang Sứ Mệnh</span>
                </li>
            </ol>
        </nav>
    </div>

    {{-- Language Selector --}}
    <div class="card bg-white rounded-10 border border-white mb-4">
        <div class="p-20">
            <div class="d-flex align-items-center gap-3">
                <label class="mb-0 fw-semibold">Chọn ngôn ngữ:</label>
                @foreach($locales as $code => $name)
                    <a href="{{ route('admin.mission_content.edit', ['locale' => $code]) }}"
                       class="btn {{ $locale === $code ? 'btn-primary' : 'btn-outline-primary' }}">
                        {{ $name }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card bg-white rounded-10 border border-white mb-4">
        <div class="p-20">
            <form action="{{ route('admin.mission_content.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="locale" value="{{ $locale }}">

                <h4 class="mb-3 mt-4">Nội dung Sứ Mệnh</h4>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="section_2_subtitle" class="form-label">Tiêu đề phụ</label>
                            <input type="text" class="form-control @error('section_2_subtitle') is-invalid @enderror" id="section_2_subtitle" name="section_2_subtitle" value="{{ old('section_2_subtitle', $content->section_2_subtitle) }}">
                            @error('section_2_subtitle')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="section_2_title" class="form-label">Tiêu đề chính</label>
                            <input type="text" class="form-control @error('section_2_title') is-invalid @enderror" id="section_2_title" name="section_2_title" value="{{ old('section_2_title', $content->section_2_title) }}">
                            @error('section_2_title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="section_2_description" class="form-label">Mô tả chi tiết</label>
                            <textarea class="form-control @error('section_2_description') is-invalid @enderror" id="section_2_description" name="section_2_description" rows="6">{{ old('section_2_description', $content->section_2_description) }}</textarea>
                            @error('section_2_description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- Hình ảnh --}}
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="section_2_image" class="form-label">Ảnh nền</label>
                            <input type="file" class="form-control @error('section_2_image') is-invalid @enderror" id="section_2_image" name="section_2_image">
                            @error('section_2_image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            @if($content->section_2_image)
                                <div class="mt-2">
                                    <img src="{{ str_starts_with($content->section_2_image, '/') ? asset($content->section_2_image) : asset('storage/' . $content->section_2_image) }}"
                                         alt="Ảnh nền" style="max-width: 200px; height: auto;">
                                    <p class="text-muted small mt-1">{{ $content->section_2_image }}</p>
                                </div>
                            @endif
                        </div>
                    </div>

                    {{-- Danh sách tính năng --}}
                    <div class="col-12">
                        <h5 class="mb-3 mt-3">Danh sách tính năng</h5>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="feature_1" class="form-label">Tính năng 1</label>
                            <input type="text" class="form-control @error('feature_1') is-invalid @enderror" id="feature_1" name="feature_1" value="{{ old('feature_1', $content->feature_1) }}">
                            @error('feature_1')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="feature_2" class="form-label">Tính năng 2</label>
                            <input type="text" class="form-control @error('feature_2') is-invalid @enderror" id="feature_2" name="feature_2" value="{{ old('feature_2', $content->feature_2) }}">
                            @error('feature_2')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="feature_3" class="form-label">Tính năng 3</label>
                            <input type="text" class="form-control @error('feature_3') is-invalid @enderror" id="feature_3" name="feature_3" value="{{ old('feature_3', $content->feature_3) }}">
                            @error('feature_3')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="feature_4" class="form-label">Tính năng 4</label>
                            <input type="text" class="form-control @error('feature_4') is-invalid @enderror" id="feature_4" name="feature_4" value="{{ old('feature_4', $content->feature_4) }}">
                            @error('feature_4')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-3 mt-4">
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Quay lại Bảng điều khiển</a>
                    <button type="submit" class="btn btn-primary">Cập nhật Nội dung</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
