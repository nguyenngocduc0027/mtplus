@extends('backend.layouts.app')
@props(['pageTitle' => 'Quản lý Dự án'])
@section('content-backend')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 mt-1">
        <h3 class="mb-0">{{ $pageTitle }}</h3>
        <x-admin.ui.breadcrumb :pageTitle="$pageTitle" />
    </div>

    <div class="card bg-white rounded-10 border border-white mb-4">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 p-20">
            <div class="d-flex flex-wrap gap-2 gap-xxl-5 align-items-center">
                <form class="table-src-form position-relative m-0">
                    <input type="text" class="form-control w-340" placeholder="Tìm kiếm..." id="searchInput">
                    <div class="src-btn position-absolute top-50 start-0 translate-middle-y bg-transparent p-0 border-0">
                        <span class="material-symbols-outlined">search</span>
                    </div>
                </form>
                <ul class="p-0 mb-0 list-unstyled d-flex align-items-center flex-wrap" style="gap: 20px;">
                    <li class="fs-16">
                        Tất cả dự án <span class="text-primary">({{ $projects->total() }})</span>
                    </li>
                    <li class="fs-16">
                        Đang hoạt động <span class="text-primary">({{ \App\Models\Project::active()->count() }})</span>
                    </li>
                    <li class="fs-16">
                        Hoàn thành <span class="text-primary">({{ \App\Models\Project::completed()->count() }})</span>
                    </li>
                </ul>
            </div>

            <a href="{{ route('admin.projects.create') }}" class="text-primary fs-16 text-decoration-none">
                + Thêm dự án mới
            </a>
        </div>

        <div class="default-table-area mx-minus-1 table-product-list">
            <div class="table-responsive">
                <table class="table align-middle" id="projectsTable">
                    <thead>
                        <tr>
                            <th scope="col" class="fw-medium ps-20">Số DA</th>
                            <th scope="col" class="fw-medium">Dự án</th>
                            <th scope="col" class="fw-medium">Loại</th>
                            <th scope="col" class="fw-medium">Địa điểm</th>
                            <th scope="col" class="fw-medium">Ngày khởi công</th>
                            <th scope="col" class="fw-medium">Trạng thái</th>
                            <th scope="col" class="fw-medium">Hiển thị</th>
                            <th scope="col" class="fw-medium">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($projects as $project)
                            <tr class="project-row"
                                data-search="{{ strtolower($project->title_vi . ' ' . $project->title_en . ' ' . $project->project_number . ' ' . $project->location_vi) }}">
                                <td class="text-body ps-20">
                                    <span class="badge bg-primary">{{ $project->project_number ?? '-' }}</span>
                                </td>
                                <td class="text-body">
                                    <div class="d-flex align-items-center">
                                        <a href="{{ route('admin.projects.show', $project->slug) }}" class="flex-shrink-0">
                                            @if($project->main_image)
                                                <img src="{{ $project->main_image }}" style="width: 50px; height: 50px; object-fit: cover;" class="rounded" alt="{{ $project->title_vi }}">
                                            @else
                                                <div style="width: 50px; height: 50px;" class="rounded bg-light d-flex align-items-center justify-content-center">
                                                    <i class="material-symbols-outlined text-secondary">apartment</i>
                                                </div>
                                            @endif
                                        </a>
                                        <div class="flex-grow-1 ms-12">
                                            <a href="{{ route('admin.projects.show', $project->slug) }}" class="fs-16 text-secondary text-decoration-none hover-text fw-medium d-block">
                                                {{ $project->title_vi }}
                                            </a>
                                            <span class="fs-13 text-body">{{ $project->title_en }}</span>
                                            @if($project->is_featured)
                                                <span class="badge bg-warning text-dark ms-2">
                                                    <i class="ri-star-fill"></i> Nổi bật
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td class="text-body">{{ $project->project_type_vi ?? '-' }}</td>
                                <td class="text-body">{{ $project->location_vi ?? '-' }}</td>
                                <td class="text-body">
                                    {{ $project->commencement_date ? $project->commencement_date->format('d/m/Y') : '-' }}
                                </td>
                                <td class="text-body">
                                    @if($project->status === 'completed')
                                        <span class="badge bg-success">Hoàn thành</span>
                                    @else
                                        <span class="badge bg-info">Đang thực hiện</span>
                                    @endif
                                </td>
                                <td class="text-body">
                                    @if($project->is_active)
                                        <span class="badge bg-success">Hiện</span>
                                    @else
                                        <span class="badge bg-secondary">Ẩn</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex justify-content-end" style="gap: 12px;">
                                        <a href="{{ route('admin.projects.show', $project->slug) }}" class="bg-transparent p-0 border-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Xem chi tiết">
                                            <i class="material-symbols-outlined fs-16 fw-normal text-primary">visibility</i>
                                        </a>
                                        <a href="{{ route('admin.projects.edit', $project->slug) }}" class="bg-transparent p-0 border-0 hover-text-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Chỉnh sửa">
                                            <i class="material-symbols-outlined fs-16 fw-normal text-body">edit</i>
                                        </a>
                                        <form action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST" class="delete-form d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-transparent p-0 border-0 hover-text-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Xóa">
                                                <i class="material-symbols-outlined fs-16 fw-normal text-body">delete</i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center py-5">
                                    <i class="ri-folder-open-line fs-48 text-secondary mb-3 d-block"></i>
                                    <p class="text-secondary mb-0">
                                        Chưa có dự án nào.
                                        <a href="{{ route('admin.projects.create') }}" class="text-primary">Thêm dự án mới</a>
                                    </p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        @if($projects->hasPages())
            <div class="p-20 pt-0">
                {{ $projects->links() }}
            </div>
        @endif
    </div>
@endsection

@push('scripts')
    <script>
        // Check for success message from URL parameter or session
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const successMessage = urlParams.get('success') || '{{ session('success') }}';

            if (successMessage && successMessage !== '') {
                Swal.fire({
                    icon: 'success',
                    title: 'Thành công!',
                    text: successMessage,
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#3085d6',
                    timer: 3000,
                    timerProgressBar: true
                });

                // Clean URL by removing success parameter
                if (urlParams.has('success')) {
                    const newUrl = window.location.pathname;
                    window.history.replaceState({}, document.title, newUrl);
                }
            }

            // Check for error message
            @if(session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Lỗi!',
                    text: '{{ session('error') }}',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#d33'
                });
            @endif

            // Check for validation errors
            @if($errors->any())
                Swal.fire({
                    icon: 'error',
                    title: 'Lỗi xác thực!',
                    html: '<ul style="text-align: left;">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#d33'
                });
            @endif
        });

        // Search functionality
        document.getElementById('searchInput').addEventListener('keyup', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const rows = document.querySelectorAll('.project-row');

            rows.forEach(row => {
                const searchData = row.dataset.search;
                if (searchData.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        // Delete confirmation with SweetAlert
        document.querySelectorAll('.delete-form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Xác nhận xóa?',
                    text: 'Bạn có chắc chắn muốn xóa dự án này? Hành động này không thể hoàn tác!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Xóa',
                    cancelButtonText: 'Hủy'
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.submit();
                    }
                });
            });
        });

        // Initialize tooltips
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
    </script>
@endpush
