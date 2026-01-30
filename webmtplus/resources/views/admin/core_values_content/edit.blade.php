@extends('admin.index')

@section('contentadmin')
<div class="main-content-container overflow-hidden">
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 mt-1">
        <h3 class="mb-0">Chỉnh sửa Giá Trị Cốt Lõi - {{ $locales[$locale] }}</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb align-items-center mb-0 lh-1">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center text-decoration-none">
                        <i class="ri-home-8-line fs-15 text-primary me-1"></i>
                        <span class="text-body fs-14 hover">Bảng điều khiển</span>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <span class="text-secondary">Giá Trị Cốt Lõi</span>
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
                    <a href="{{ route('admin.core_values_content.edit', ['locale' => $code]) }}"
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
            <form action="{{ route('admin.core_values_content.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="locale" value="{{ $locale }}">

                <h4 class="mb-3 mt-4">Nội dung chính</h4>
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
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="section_title" class="form-label">Tiêu đề chính</label>
                            <textarea class="form-control @error('section_title') is-invalid @enderror" id="section_title" name="section_title" rows="3">{{ old('section_title', $content->section_title) }}</textarea>
                            @error('section_title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- 4 Giá trị cốt lõi --}}
                <h4 class="mb-3 mt-4">Các Giá Trị Cốt Lõi</h4>
                <hr>

                @for($i = 1; $i <= 4; $i++)
                <div class="card border mb-4">
                    <div class="card-header bg-light">
                        <strong>Giá trị {{ $i }}</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="value_{{ $i }}_title" class="form-label">Tiêu đề</label>
                                    <input type="text" class="form-control @error('value_{{ $i }}_title') is-invalid @enderror" id="value_{{ $i }}_title" name="value_{{ $i }}_title" value="{{ old('value_' . $i . '_title', $content->{'value_' . $i . '_title'}) }}">
                                    @error('value_{{ $i }}_title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="value_{{ $i }}_icon" class="form-label">Icon</label>
                                    <input type="file" class="form-control @error('value_{{ $i }}_icon') is-invalid @enderror" id="value_{{ $i }}_icon" name="value_{{ $i }}_icon">
                                    @error('value_{{ $i }}_icon')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    @if($content->{'value_' . $i . '_icon'})
                                        <div class="mt-2">
                                            <img src="{{ str_starts_with($content->{'value_' . $i . '_icon'}, '/') ? asset($content->{'value_' . $i . '_icon'}) : asset('storage/' . $content->{'value_' . $i . '_icon'}) }}"
                                                 alt="Icon" style="max-width: 100px; height: auto;">
                                            <p class="text-muted small mt-1">{{ $content->{'value_' . $i . '_icon'} }}</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="value_{{ $i }}_description" class="form-label">Mô tả</label>
                                    <textarea class="form-control @error('value_{{ $i }}_description') is-invalid @enderror" id="value_{{ $i }}_description" name="value_{{ $i }}_description" rows="3">{{ old('value_' . $i . '_description', $content->{'value_' . $i . '_description'}) }}</textarea>
                                    @error('value_{{ $i }}_description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor

                <div class="d-flex justify-content-end gap-3 mt-4">
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Quay lại Bảng điều khiển</a>
                    <button type="submit" class="btn btn-primary">Cập nhật Nội dung</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
