@extends('admin.index')

@section('contentadmin')
    
            <div class="main-content-container overflow-hidden">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 mt-1">
                    <h3 class="mb-0">Tạo Dịch vụ Mới</h3>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb align-items-center mb-0 lh-1">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center text-decoration-none">
                                    <i class="ri-home-8-line fs-15 text-primary me-1"></i>
                                    <span class="text-body fs-14 hover">Bảng điều khiển</span>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <span>Dịch vụ</span>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <span class="text-secondary">Tạo mới</span>
                            </li>
                        </ol>
                    </nav>
                </div>

                <div class="card bg-white rounded-10 border border-white mb-4">
                    <div class="p-20">
                        <form action="{{ route('admin.services.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Tiêu đề</label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="subtitle" class="form-label">Tiêu đề phụ</label>
                                        <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ old('subtitle') }}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Mô tả</label>
                                        <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="content" class="form-label">Nội dung</label>
                                        <textarea class="form-control" id="tyni" name="content" rows="6">{{ old('content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="metatitle" class="form-label">Meta Tiêu đề</label>
                                        <input type="text" class="form-control" id="metatitle" name="metatitle" value="{{ old('metatitle') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="metadescription" class="form-label">Meta Mô tả</label>
                                        <input type="text" class="form-control" id="metadescription" name="metadescription" value="{{ old('metadescription') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end gap-3 mt-4">
                                <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Quay lại danh sách Dịch vụ</a>
                                <button type="submit" class="btn btn-primary">Lưu Dịch vụ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

          
@endsection
