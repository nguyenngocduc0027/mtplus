@extends('admin.index')

@section('contentadmin')
<div class="main-content-container overflow-hidden">
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 mt-1">
        <h3 class="mb-0">Chỉnh sửa Nội dung Phần Giới Thiệu - {{ $locales[$locale] }}</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb align-items-center mb-0 lh-1">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center text-decoration-none">
                        <i class="ri-home-8-line fs-15 text-primary me-1"></i>
                        <span class="text-body fs-14 hover">Bảng điều khiển</span>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <span class="text-secondary">Nội dung Phần Giới Thiệu</span>
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
                    <a href="{{ route('admin.about_content.edit', ['locale' => $code]) }}"
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
            <form action="{{ route('admin.about_content.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="locale" value="{{ $locale }}">

                {{-- Nội dung chính --}}
                <h4 class="mb-3 mt-4">Nội dung Giới Thiệu</h4>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="subtitle" class="form-label">Tiêu đề phụ</label>
                            <input type="text" class="form-control @error('subtitle') is-invalid @enderror" id="subtitle" name="subtitle" value="{{ old('subtitle', $content->subtitle) }}">
                            @error('subtitle')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Tiêu đề chính</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $content->title) }}">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="description" class="form-label">Mô tả</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4">{{ old('description', $content->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- Hình ảnh --}}
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="image_main" class="form-label">Ảnh chính (Lớn)</label>
                            <input type="file" class="form-control @error('image_main') is-invalid @enderror" id="image_main" name="image_main">
                            @error('image_main')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            @if($content->image_main)
                                <div class="mt-2">
                                    <img src="{{ str_starts_with($content->image_main, '/') ? asset($content->image_main) : asset('storage/' . $content->image_main) }}"
                                         alt="Ảnh chính" style="max-width: 200px; height: auto;">
                                    <p class="text-muted small mt-1">{{ $content->image_main }}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="image_small" class="form-label">Ảnh phụ (Nhỏ)</label>
                            <input type="file" class="form-control @error('image_small') is-invalid @enderror" id="image_small" name="image_small">
                            @error('image_small')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            @if($content->image_small)
                                <div class="mt-2">
                                    <img src="{{ str_starts_with($content->image_small, '/') ? asset($content->image_small) : asset('storage/' . $content->image_small) }}"
                                         alt="Ảnh phụ" style="max-width: 200px; height: auto;">
                                    <p class="text-muted small mt-1">{{ $content->image_small }}</p>
                                </div>
                            @endif
                        </div>
                    </div>

                    {{-- Các thẻ thống kê --}}
                    <div class="col-12">
                        <h5 class="mb-3 mt-3">Thẻ thống kê</h5>
                    </div>

                    {{-- Thẻ 1 --}}
                    <div class="col-md-4">
                        <div class="card border mb-3">
                            <div class="card-header bg-light">
                                <strong>Thẻ 1</strong>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="counter_1_title" class="form-label">Tiêu đề</label>
                                    <input type="text" class="form-control @error('counter_1_title') is-invalid @enderror" id="counter_1_title" name="counter_1_title" value="{{ old('counter_1_title', $content->counter_1_title) }}">
                                    @error('counter_1_title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="counter_1_number" class="form-label">Số liệu</label>
                                    <input type="text" class="form-control @error('counter_1_number') is-invalid @enderror" id="counter_1_number" name="counter_1_number" value="{{ old('counter_1_number', $content->counter_1_number) }}">
                                    @error('counter_1_number')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="counter_1_description" class="form-label">Mô tả</label>
                                    <input type="text" class="form-control @error('counter_1_description') is-invalid @enderror" id="counter_1_description" name="counter_1_description" value="{{ old('counter_1_description', $content->counter_1_description) }}">
                                    @error('counter_1_description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Thẻ 2 --}}
                    <div class="col-md-4">
                        <div class="card border mb-3">
                            <div class="card-header bg-light">
                                <strong>Thẻ 2</strong>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="counter_2_title" class="form-label">Tiêu đề</label>
                                    <input type="text" class="form-control @error('counter_2_title') is-invalid @enderror" id="counter_2_title" name="counter_2_title" value="{{ old('counter_2_title', $content->counter_2_title) }}">
                                    @error('counter_2_title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="counter_2_number" class="form-label">Số liệu</label>
                                    <input type="text" class="form-control @error('counter_2_number') is-invalid @enderror" id="counter_2_number" name="counter_2_number" value="{{ old('counter_2_number', $content->counter_2_number) }}">
                                    @error('counter_2_number')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="counter_2_description" class="form-label">Mô tả</label>
                                    <input type="text" class="form-control @error('counter_2_description') is-invalid @enderror" id="counter_2_description" name="counter_2_description" value="{{ old('counter_2_description', $content->counter_2_description) }}">
                                    @error('counter_2_description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Thẻ 3 --}}
                    <div class="col-md-4">
                        <div class="card border mb-3">
                            <div class="card-header bg-light">
                                <strong>Thẻ 3</strong>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="counter_3_title" class="form-label">Tiêu đề</label>
                                    <input type="text" class="form-control @error('counter_3_title') is-invalid @enderror" id="counter_3_title" name="counter_3_title" value="{{ old('counter_3_title', $content->counter_3_title) }}">
                                    @error('counter_3_title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="counter_3_number" class="form-label">Số liệu</label>
                                    <input type="text" class="form-control @error('counter_3_number') is-invalid @enderror" id="counter_3_number" name="counter_3_number" value="{{ old('counter_3_number', $content->counter_3_number) }}">
                                    @error('counter_3_number')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="counter_3_description" class="form-label">Mô tả</label>
                                    <input type="text" class="form-control @error('counter_3_description') is-invalid @enderror" id="counter_3_description" name="counter_3_description" value="{{ old('counter_3_description', $content->counter_3_description) }}">
                                    @error('counter_3_description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
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
