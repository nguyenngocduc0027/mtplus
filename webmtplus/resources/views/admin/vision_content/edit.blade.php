@extends('admin.index')

@section('contentadmin')
<div class="main-content-container overflow-hidden">
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 mt-1">
        <h3 class="mb-0">Chỉnh sửa Nội dung Trang Tầm Nhìn - {{ $locales[$locale] }}</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb align-items-center mb-0 lh-1">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center text-decoration-none">
                        <i class="ri-home-8-line fs-15 text-primary me-1"></i>
                        <span class="text-body fs-14 hover">Bảng điều khiển</span>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <span class="text-secondary">Nội dung Trang Tầm Nhìn</span>
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
                    <a href="{{ route('admin.vision_content.edit', ['locale' => $code]) }}"
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
            <form action="{{ route('admin.vision_content.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="locale" value="{{ $locale }}">

                {{-- Section Vision --}}
                <h4 class="mb-3 mt-4">Phần Tầm Nhìn</h4>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="section_subtitle" class="form-label">Tiêu đề phụ</label>
                            <input type="text" class="form-control @error('section_subtitle') is-invalid @enderror" id="section_subtitle" name="section_subtitle" value="{{ old('section_subtitle', $content->section_subtitle) }}">
                            @error('section_subtitle')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="section_title" class="form-label">Tiêu đề chính</label>
                            <input type="text" class="form-control @error('section_title') is-invalid @enderror" id="section_title" name="section_title" value="{{ old('section_title', $content->section_title) }}">
                            @error('section_title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="section_description" class="form-label">Mô tả</label>
                            <textarea class="form-control @error('section_description') is-invalid @enderror" id="section_description" name="section_description" rows="5">{{ old('section_description', $content->section_description) }}</textarea>
                            @error('section_description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- Image --}}
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="section_image" class="form-label">Hình ảnh</label>
                            <input type="file" class="form-control @error('section_image') is-invalid @enderror" id="section_image" name="section_image">
                            @error('section_image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            @if($content->section_image)
                                <div class="mt-2">
                                    <img src="{{ str_starts_with($content->section_image, '/') ? asset($content->section_image) : asset('storage/' . $content->section_image) }}"
                                         alt="Hình ảnh" style="max-width: 200px; height: auto;">
                                    <p class="text-muted small mt-1">{{ $content->section_image }}</p>
                                </div>
                            @endif
                        </div>
                    </div>

                    {{-- Timeline Items --}}
                    <div class="col-12">
                        <h5 class="mb-3 mt-3">Mục tiêu (Timeline)</h5>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="timeline_1" class="form-label">Mục tiêu 1</label>
                            <textarea class="form-control @error('timeline_1') is-invalid @enderror" id="timeline_1" name="timeline_1" rows="2">{{ old('timeline_1', $content->timeline_1) }}</textarea>
                            @error('timeline_1')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="timeline_2" class="form-label">Mục tiêu 2</label>
                            <textarea class="form-control @error('timeline_2') is-invalid @enderror" id="timeline_2" name="timeline_2" rows="2">{{ old('timeline_2', $content->timeline_2) }}</textarea>
                            @error('timeline_2')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="timeline_3" class="form-label">Mục tiêu 3</label>
                            <textarea class="form-control @error('timeline_3') is-invalid @enderror" id="timeline_3" name="timeline_3" rows="2">{{ old('timeline_3', $content->timeline_3) }}</textarea>
                            @error('timeline_3')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="timeline_4" class="form-label">Mục tiêu 4</label>
                            <textarea class="form-control @error('timeline_4') is-invalid @enderror" id="timeline_4" name="timeline_4" rows="2">{{ old('timeline_4', $content->timeline_4) }}</textarea>
                            @error('timeline_4')
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
