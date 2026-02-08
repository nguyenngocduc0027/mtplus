@extends('backend.layouts.app')
@props(['pageTitle' => __('admin.projects.project_details')])
@section('content-backend')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 mt-1">
        <h3 class="mb-0">{{ $pageTitle }}</h3>
        <x-admin.ui.breadcrumb :pageTitle="$pageTitle" :parentTitle="__('admin.projects.all_projects')" :parentRoute="route('admin.projects.index')" />
    </div>

    <div class="row">
        <div class="col-lg-8">
            <!-- Main Image -->
            @if($project->main_image)
                <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                    <img src="{{ $project->main_image }}" class="img-fluid rounded" alt="{{ $project->title_vi }}">
                </div>
            @endif

            <!-- Basic Info -->
            <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                <h4 class="mb-3">{{ __('admin.projects.project_info') }}</h4>
                <table class="table">
                    <tr>
                        <th style="width: 200px;">Tiêu đề (VI):</th>
                        <td>{{ $project->title_vi }}</td>
                    </tr>
                    <tr>
                        <th>Tiêu đề (EN):</th>
                        <td>{{ $project->title_en }}</td>
                    </tr>
                    <tr>
                        <th>Số dự án:</th>
                        <td>{{ $project->project_number }}</td>
                    </tr>
                    <tr>
                        <th>Trạng thái:</th>
                        <td>
                            <span class="badge {{ $project->status === 'completed' ? 'bg-success' : 'bg-info' }}">
                                {{ $project->status === 'completed' ? __('admin.projects.status_completed') : __('admin.projects.status_in_progress') }}
                            </span>
                        </td>
                    </tr>
                    @if($project->project_type_vi)
                        <tr>
                            <th>Loại dự án:</th>
                            <td>{{ $project->project_type_vi }} / {{ $project->project_type_en }}</td>
                        </tr>
                    @endif
                    @if($project->location_vi)
                        <tr>
                            <th>Địa điểm:</th>
                            <td>{{ $project->location_vi }} / {{ $project->location_en }}</td>
                        </tr>
                    @endif
                    @if($project->commencement_date)
                        <tr>
                            <th>Ngày khởi công:</th>
                            <td>{{ $project->commencement_date->format('d/m/Y') }}</td>
                        </tr>
                    @endif
                    @if($project->completion_date)
                        <tr>
                            <th>Ngày hoàn thành:</th>
                            <td>{{ $project->completion_date->format('d/m/Y') }}</td>
                        </tr>
                    @endif
                    @if($project->client_name)
                        <tr>
                            <th>Khách hàng:</th>
                            <td>{{ $project->client_name }}</td>
                        </tr>
                    @endif
                    @if($project->budget)
                        <tr>
                            <th>Ngân sách:</th>
                            <td>{{ number_format($project->budget) }} VND</td>
                        </tr>
                    @endif
                    @if($project->area)
                        <tr>
                            <th>Diện tích:</th>
                            <td>{{ $project->area }}</td>
                        </tr>
                    @endif
                </table>
            </div>

            <!-- Description -->
            @if($project->description_vi || $project->description_en)
                <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                    <h4 class="mb-3">Mô tả chi tiết</h4>
                    @if($project->description_vi)
                        <h5 class="mt-3">Tiếng Việt:</h5>
                        <div class="content">{!! $project->description_vi !!}</div>
                    @endif
                    @if($project->description_en)
                        <h5 class="mt-3">English:</h5>
                        <div class="content">{!! $project->description_en !!}</div>
                    @endif
                </div>
            @endif

            <!-- Features -->
            @if($project->features_vi || $project->features_en)
                <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                    <h4 class="mb-3">{{ __('admin.projects.features') }}</h4>
                    @if($project->features_vi)
                        <h5>Tiếng Việt:</h5>
                        <ul>
                            @foreach($project->features_vi as $feature)
                                <li>{{ $feature }}</li>
                            @endforeach
                        </ul>
                    @endif
                    @if($project->features_en)
                        <h5 class="mt-3">English:</h5>
                        <ul>
                            @foreach($project->features_en as $feature)
                                <li>{{ $feature }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            @endif

            <!-- Gallery -->
            @if($project->gallery_images && count($project->gallery_images) > 0)
                <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                    <h4 class="mb-3">{{ __('admin.projects.gallery_images') }}</h4>
                    <div class="row g-3">
                        @foreach($project->gallery_images as $image)
                            <div class="col-md-4">
                                <img src="{{ $image }}" class="img-fluid rounded" alt="Gallery Image">
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>

        <div class="col-lg-4">
            <!-- Actions -->
            <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                <h4 class="mb-3">Hành động</h4>
                <a href="{{ route('admin.projects.edit', $project->slug) }}" class="btn btn-primary w-100 mb-2">
                    <i class="ri-edit-line me-2"></i>{{ __('admin.projects.edit') }}
                </a>
                <form action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger w-100 mb-2">
                        <i class="ri-delete-bin-line me-2"></i>Xóa dự án
                    </button>
                </form>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-secondary w-100">
                    <i class="ri-arrow-left-line me-2"></i>{{ __('admin.projects.back') }} danh sách
                </a>
            </div>

            <!-- Status -->
            <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                <h4 class="mb-3">Trạng thái</h4>
                <div class="mb-2">
                    <strong>Nổi bật:</strong>
                    <span class="badge {{ $project->is_featured ? 'bg-warning' : 'bg-secondary' }}">
                        {{ $project->is_featured ? 'Có' : 'Không' }}
                    </span>
                </div>
                <div class="mb-2">
                    <strong>Hiển thị:</strong>
                    <span class="badge {{ $project->is_active ? 'bg-success' : 'bg-secondary' }}">
                        {{ $project->is_active ? 'Có' : 'Không' }}
                    </span>
                </div>
                <div class="mb-2">
                    <strong>Thứ tự:</strong> {{ $project->order }}
                </div>
                <div class="mb-2">
                    <strong>Slug:</strong> <code>{{ $project->slug }}</code>
                </div>
            </div>

            <!-- Meta -->
            <div class="card bg-white rounded-10 border border-white p-20">
                <h4 class="mb-3">{{ __('admin.projects.system_info') }}</h4>
                <div class="mb-2">
                    <strong>ID:</strong> {{ $project->id }}
                </div>
                <div class="mb-2">
                    <strong>Ngày tạo:</strong> {{ $project->created_at->format('d/m/Y H:i') }}
                </div>
                <div>
                    <strong>Cập nhật lần cuối:</strong> {{ $project->updated_at->format('d/m/Y H:i') }}
                </div>
            </div>
        </div>
    </div>
@endsection
