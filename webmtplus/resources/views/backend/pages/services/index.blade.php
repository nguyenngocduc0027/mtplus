@extends('backend.layouts.app')
@props(['pageTitle' => 'Quản lý Dịch vụ'])
@push('styles')
    <style>
        .service-icon-sm {
            width: 35px;
            height: 35px;
            object-fit: contain;
            border-radius: 50%;
            background: #f8f9fa;
            padding: 5px;
        }
    </style>
@endpush
@section('content-backend')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 mt-1">
        <h3 class="mb-0">{{ $pageTitle }}</h3>
        <x-admin.ui.breadcrumb :pageTitle="$pageTitle" />
    </div>

    <div class="card bg-white rounded-10 border border-white mb-4">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 p-20">
            <form class="table-src-form position-relative m-0" id="searchForm">
                <input type="text" class="form-control w-350" id="searchInput" placeholder="Tìm kiếm dịch vụ...">
                <div class="src-btn position-absolute top-50 start-0 translate-middle-y bg-transparent p-0 border-0">
                    <span class="material-symbols-outlined">search</span>
                </div>
            </form>

            <a href="{{ route('admin.services.create') }}" class="text-primary fs-16 text-decoration-none">
                + Thêm dịch vụ mới
            </a>
        </div>

        <div class="default-table-area mx-minus-1 table-contact-list">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th scope="col" class="fw-medium">Slug</th>
                            <th scope="col" class="fw-medium">Dịch vụ</th>
                            <th scope="col" class="fw-medium">Tiêu đề (EN)</th>
                            <th scope="col" class="fw-medium">Mô tả ngắn</th>
                            <th scope="col" class="fw-medium">Trạng thái</th>
                            <th scope="col" class="fw-medium">Ngày tạo</th>
                            <th scope="col" class="fw-medium">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($services as $service)
                            <tr class="service-row"
                                data-title-vi="{{ strtolower($service->title_vi) }}"
                                data-title-en="{{ strtolower($service->title_en) }}">
                                <td class="text-body">
                                    <span class="badge bg-info-10 text-info">{{ $service->slug }}</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        @if($service->icon_path)
                                            <div class="flex-shrink-0">
                                                <img src="{{ asset($service->icon_path) }}"
                                                     class="service-icon-sm"
                                                     alt="{{ $service->title_vi }}">
                                            </div>
                                        @endif
                                        <div class="flex-grow-1 ms-12">
                                            <h4 class="fw-medium fs-16 mb-0">{{ $service->title_vi }}</h4>
                                            @if($service->is_featured)
                                                <span class="badge bg-warning text-dark fs-12 mt-1">
                                                    <i class="ri-star-fill"></i> Nổi bật
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td class="text-body">{{ $service->title_en }}</td>
                                <td class="text-secondary">
                                    @if($service->short_description_vi)
                                        {{ \Str::limit($service->short_description_vi, 40) }}
                                    @else
                                        <em class="text-muted">-</em>
                                    @endif
                                </td>
                                <td>
                                    @if($service->is_active)
                                        <span class="badge bg-success-10 text-success">Hoạt động</span>
                                    @else
                                        <span class="badge bg-danger-10 text-danger">Tạm dừng</span>
                                    @endif
                                </td>
                                <td class="text-body">{{ $service->created_at->format('d M, Y') }}</td>
                                <td>
                                    <div class="d-flex justify-content-end" style="gap: 12px;">
                                        <a href="{{ route('admin.services.show', $service->slug) }}"
                                           class="bg-transparent p-0 border-0 hover-text-success"
                                           data-bs-toggle="tooltip"
                                           data-bs-placement="top"
                                           data-bs-title="Xem chi tiết">
                                            <i class="material-symbols-outlined fs-16 fw-normal text-primary">visibility</i>
                                        </a>
                                        <a href="{{ route('admin.services.edit', $service->slug) }}"
                                           class="bg-transparent p-0 border-0 hover-text-primary"
                                           data-bs-toggle="tooltip"
                                           data-bs-placement="top"
                                           data-bs-title="Chỉnh sửa">
                                            <i class="material-symbols-outlined fs-16 fw-normal text-body">edit</i>
                                        </a>
                                        <form action="{{ route('admin.services.destroy', $service->slug) }}"
                                              method="POST"
                                              class="delete-form d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="bg-transparent p-0 border-0 hover-text-danger"
                                                    data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Xóa">
                                                <i class="material-symbols-outlined fs-16 fw-normal text-body">delete</i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-5">
                                    <i class="ri-service-line" style="font-size: 64px; color: #ddd;"></i>
                                    <p class="text-muted mt-3 mb-3">Chưa có dịch vụ nào. Thêm dịch vụ đầu tiên!</p>
                                    <a href="{{ route('admin.services.create') }}" class="btn btn-primary">
                                        <i class="ri-add-line"></i> Thêm dịch vụ mới
                                    </a>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    @if($services->hasPages())
        <div class="d-flex justify-content-between align-items-center mt-4">
            <div>
                Hiển thị {{ $services->firstItem() ?? 0 }} đến {{ $services->lastItem() ?? 0 }}
                trong tổng số {{ $services->total() }} bản ghi
            </div>
            <div>
                {{ $services->links() }}
            </div>
        </div>
    @endif
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

            // Initialize Bootstrap tooltips
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });

        // Search functionality
        document.getElementById('searchInput').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const serviceRows = document.querySelectorAll('.service-row');

            serviceRows.forEach(row => {
                const titleVi = row.getAttribute('data-title-vi');
                const titleEn = row.getAttribute('data-title-en');

                if (titleVi.includes(searchTerm) || titleEn.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        // Confirm delete with SweetAlert
        document.querySelectorAll('.delete-form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Xác nhận xóa?',
                    text: 'Bạn có chắc chắn muốn xóa dịch vụ này?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Xóa',
                    cancelButtonText: 'Hủy'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endpush
