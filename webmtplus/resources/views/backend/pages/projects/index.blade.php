@extends('backend.layouts.app')
@props(['pageTitle' => 'Quản lý Dự án'])
@push('styles')
    <style>
        .project-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .badge-featured {
            background-color: #ffc107;
            color: #000;
            font-weight: bold;
            font-size: 11px;
            padding: 4px 8px;
        }
        .badge-completed {
            background-color: #28a745;
            color: #fff;
        }
        .badge-in-progress {
            background-color: #17a2b8;
            color: #fff;
        }
    </style>
@endpush
@section('content-backend')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 mt-1">
        <h3 class="mb-0">{{ $pageTitle }}</h3>
        <x-admin.ui.breadcrumb :pageTitle="$pageTitle" />
    </div>

    <div class="card bg-white rounded-10 border border-white p-20 mb-4">
        <div class="d-flex flex-wrap gap-2 justify-content-between align-items-center">
            <a href="{{ route('admin.projects.create') }}" class="text-primary fs-16 text-decoration-none">
                <i class="ri-add-line"></i> Thêm dự án mới
            </a>
            <form class="table-src-form position-relative m-0" id="searchForm">
                <input type="text" class="form-control" id="searchInput" placeholder="Tìm kiếm dự án...">
                <div class="src-btn position-absolute top-50 start-0 translate-middle-y bg-transparent p-0 border-0">
                    <span class="material-symbols-outlined">search</span>
                </div>
            </form>
        </div>
    </div>

    <div class="row" id="projectsGrid">
        @forelse($projects as $project)
            <div class="col-xxl-4 col-lg-6 col-md-6 project-card"
                 data-title="{{ strtolower($project->title_vi . ' ' . $project->title_en) }}"
                 data-number="{{ $project->project_number }}">
                <div class="card bg-white rounded-10 border border-white mb-4 overflow-hidden">
                    @if($project->main_image)
                        <img src="{{ $project->main_image }}" class="project-image" alt="{{ $project->title_vi }}">
                    @else
                        <div class="project-image bg-light d-flex align-items-center justify-content-center">
                            <i class="ri-image-line fs-48 text-secondary"></i>
                        </div>
                    @endif

                    <div class="p-20">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div class="flex-grow-1">
                                <div class="d-flex gap-2 mb-2 flex-wrap">
                                    <span class="badge {{ $project->status === 'completed' ? 'badge-completed' : 'badge-in-progress' }}">
                                        {{ $project->status === 'completed' ? 'Hoàn thành' : 'Đang thực hiện' }}
                                    </span>
                                    @if($project->is_featured)
                                        <span class="badge badge-featured">
                                            <i class="ri-star-line"></i> Nổi bật
                                        </span>
                                    @endif
                                    @if(!$project->is_active)
                                        <span class="badge bg-secondary">Ẩn</span>
                                    @endif
                                </div>
                                <h4 class="mb-1 fs-18">{{ $project->title_vi }}</h4>
                                <p class="fs-14 text-secondary mb-1">{{ $project->title_en }}</p>
                                @if($project->project_number)
                                    <span class="badge bg-light text-dark">Số: {{ $project->project_number }}</span>
                                @endif
                            </div>

                            <div class="dropdown select-dropdown without-border">
                                <button class="bg-transparent border-0 p-0 text-body" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="material-symbols-outlined fs-24 text-secondary">more_horiz</i>
                                </button>

                                <ul class="dropdown-menu dropdown-menu-end bg-white border-0 box-shadow rounded-10">
                                    <li>
                                        <a class="dropdown-item text-secondary" href="{{ route('admin.projects.show', $project->slug) }}">
                                            <i class="ri-eye-line me-2"></i>Xem chi tiết
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-secondary" href="{{ route('admin.projects.edit', $project->slug) }}">
                                            <i class="ri-edit-line me-2"></i>Chỉnh sửa
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <form action="{{ route('admin.projects.destroy', $project->slug) }}"
                                              method="POST"
                                              class="delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item text-danger">
                                                <i class="ri-delete-bin-line me-2"></i>Xóa
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <ul class="p-0 mb-3 list-unstyled">
                            @if($project->project_type_vi)
                                <li class="mb-2 text-secondary fs-14">
                                    <i class="ri-briefcase-line me-2"></i>
                                    <strong>Loại:</strong> {{ $project->project_type_vi }}
                                </li>
                            @endif
                            @if($project->location_vi)
                                <li class="mb-2 text-secondary fs-14">
                                    <i class="ri-map-pin-line me-2"></i>
                                    <strong>Địa điểm:</strong> {{ $project->location_vi }}
                                </li>
                            @endif
                            @if($project->commencement_date)
                                <li class="mb-2 text-secondary fs-14">
                                    <i class="ri-calendar-line me-2"></i>
                                    <strong>Ngày khởi công:</strong> {{ $project->commencement_date->format('d/m/Y') }}
                                </li>
                            @endif
                        </ul>

                        <div class="d-flex gap-2">
                            <a href="{{ route('admin.projects.edit', $project->slug) }}"
                               class="btn btn-outline-primary btn-sm flex-grow-1">
                                <i class="ri-edit-line"></i> Sửa
                            </a>
                            <a href="{{ route('admin.projects.show', $project->slug) }}"
                               class="btn btn-primary btn-sm flex-grow-1">
                                <i class="ri-eye-line"></i> Xem
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="card bg-white p-20 rounded-10 text-center">
                    <i class="ri-folder-open-line fs-48 text-secondary mb-3"></i>
                    <p class="text-secondary">Chưa có dự án nào.
                        <a href="{{ route('admin.projects.create') }}" class="text-primary">Thêm dự án mới</a>
                    </p>
                </div>
            </div>
        @endforelse
    </div>

    @if($projects->hasPages())
        <div class="d-flex justify-content-center mt-4">
            {{ $projects->links() }}
        </div>
    @endif
@endsection

@push('scripts')
    <script>
        // Search functionality
        document.getElementById('searchInput').addEventListener('keyup', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const cards = document.querySelectorAll('.project-card');

            cards.forEach(card => {
                const title = card.dataset.title;
                const number = card.dataset.number;
                const searchText = title + ' ' + number;

                if (searchText.includes(searchTerm)) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        });

        // Delete confirmation
        document.querySelectorAll('.delete-form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                if (confirm('Bạn có chắc chắn muốn xóa dự án này?')) {
                    this.submit();
                }
            });
        });
    </script>
@endpush
