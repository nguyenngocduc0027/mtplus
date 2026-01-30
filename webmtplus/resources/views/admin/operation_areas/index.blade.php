@extends('admin.index')

@section('contentadmin')
    <div class="main-content-container overflow-hidden">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 mt-1">
            <h3 class="mb-0">Danh sách Khu vực Hoạt động</h3>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb align-items-center mb-0 lh-1">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center text-decoration-none">
                            <i class="ri-home-8-line fs-15 text-primary me-1"></i>
                            <span class="text-body fs-14 hover">Bảng điều khiển</span>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span>Khu vực Hoạt động</span>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span class="text-secondary">Danh sách</span>
                    </li>
                </ol>
            </nav>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card bg-white rounded-10 border border-white mb-4">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 p-20">
                <form class="table-src-form position-relative m-0" action="{{ route('admin.operation_areas.index') }}" method="GET">
                    <input type="text" class="form-control w-350" placeholder="Tìm kiếm khu vực hoạt động..." name="search" value="{{ request('search') }}">
                    <button type="submit" class="src-btn position-absolute top-50 start-0 translate-middle-y bg-transparent p-0 border-0">
                        <span class="material-symbols-outlined">search</span>
                    </button>
                </form>
                <a href="{{ route('admin.operation_areas.create') }}" class="text-primary text-decoration-none fs-16">+ Thêm Lĩnh vực Hoạt động Mới
                </a>
            </div>

            <div class="default-table-area mx-minus-1 table-contact-list">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col" class="fw-medium ps-3">#</th>
                                <th scope="col" class="fw-medium">Tiêu đề</th>
                                <th scope="col" class="fw-medium">Tiêu đề phụ</th>
                                <th scope="col" class="fw-medium">Slug</th>
                                <th scope="col" class="fw-medium">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($operationAreas as $area)
                                <tr>
                                    <td class="text-body ps-3">{{ $loop->iteration }}</td>
                                    <td class="text-secondary">{{ $area->title }}</td>
                                    <td class="text-body">{{ $area->subtitle }}</td>
                                    <td class="text-body">{{ $area->slug }}</td>
                                    <td>
                                        <div class="d-flex justify-content-end" style="gap: 12px;">
                                            <a href="{{ route('admin.operation_areas.show', $area->slug) }}"
                                                class="bg-transparent p-0 border-0 text-primary"
                                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Xem">
                                                <i class="material-symbols-outlined fs-16 fw-normal text-primary">visibility</i>
                                            </a>
                                            <a href="{{ route('admin.operation_areas.edit', $area->slug) }}"
                                                class="bg-transparent p-0 border-0 hover-text-success"
                                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Chỉnh sửa">
                                                <i class="material-symbols-outlined fs-16 fw-normal text-body">edit</i>
                                            </a>
                                            <form action="{{ route('admin.operation_areas.destroy', $area->slug) }}" method="POST"
                                                onsubmit="return confirm('Bạn có chắc chắn muốn xóa mục này không?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-transparent p-0 border-0 hover-text-danger"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Xóa">
                                                    <i
                                                        class="material-symbols-outlined fs-16 fw-normal text-body">delete</i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Không tìm thấy khu vực hoạt động nào.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- Pagination (removed for now, as controller does not paginate) --}}
                {{-- <div
                    class="d-flex justify-content-center justify-content-sm-between align-items-center text-center flex-wrap gap-2 showing-wrap pt-15 p-20">
                    <span class="fs-15">Hiển thị {{ $operationAreas->firstItem() }} đến {{ $operationAreas->lastItem() }} của
                        {{ $operationAreas->total() }} mục</span>

                    <nav class="custom-pagination" aria-label="Page navigation example">
                        {{ $operationAreas->appends(request()->query())->links('pagination::bootstrap-4') }}
                    </nav>
                </div> --}}
            </div>
        </div>
    </div>
@endsection