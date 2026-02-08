@extends('backend.layouts.app')
@props(['pageTitle' => __('admin.careers.career_details')])
@section('content-backend')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 mt-1">
        <h3 class="mb-0">{{ $pageTitle }}</h3>
        <x-admin.ui.breadcrumb :pageTitle="$pageTitle" :parentTitle="__('admin.careers.all_careers')" :parentRoute="route('admin.careers.index')" />
    </div>

    <div class="row">
        <div class="col-lg-8">
            <!-- Career Information -->
            <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                <h4 class="mb-3"><i class="ri-information-line me-2"></i>{{ __('admin.careers.career_info') }}</h4>

                @if($career->image)
                    <div class="mb-4">
                        <img src="{{ $career->image }}" class="img-fluid rounded" style="max-height: 300px;">
                    </div>
                @endif

                <table class="table table-bordered">
                    <tr>
                        <th width="30%" class="bg-light">{{ __('admin.careers.title') }} (VI)</th>
                        <td>{{ $career->title_vi }}</td>
                    </tr>
                    <tr>
                        <th class="bg-light">{{ __('admin.careers.title') }} (EN)</th>
                        <td>{{ $career->title_en }}</td>
                    </tr>
                    <tr>
                        <th class="bg-light">{{ __('admin.careers.location') }} (VI)</th>
                        <td>{{ $career->location_vi ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th class="bg-light">{{ __('admin.careers.location') }} (EN)</th>
                        <td>{{ $career->location_en ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th class="bg-light">{{ __('admin.careers.department') }} (VI)</th>
                        <td>{{ $career->department_vi ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th class="bg-light">{{ __('admin.careers.department') }} (EN)</th>
                        <td>{{ $career->department_en ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th class="bg-light">{{ __('admin.careers.job_type') }}</th>
                        <td><span class="badge bg-info">{{ $career->job_type_label }}</span></td>
                    </tr>
                    <tr>
                        <th class="bg-light">{{ __('admin.careers.experience_required') }}</th>
                        <td>{{ $career->experience_required ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th class="bg-light">{{ __('admin.careers.salary_display') }}</th>
                        <td>{{ $career->salary_display ?? '-' }}</td>
                    </tr>
                    @if($career->salary_min || $career->salary_max)
                        <tr>
                            <th class="bg-light">{{ __('admin.careers.salary_range') }}</th>
                            <td>
                                @if($career->salary_min)
                                    {{ number_format($career->salary_min, 0, ',', '.') }}
                                @endif
                                @if($career->salary_min && $career->salary_max)
                                    -
                                @endif
                                @if($career->salary_max)
                                    {{ number_format($career->salary_max, 0, ',', '.') }}
                                @endif
                                {{ $career->salary_currency }}
                                @if($career->salary_period)
                                    / {{ $career->salary_period }}
                                @endif
                            </td>
                        </tr>
                    @endif
                    <tr>
                        <th class="bg-light">{{ __('admin.careers.positions_available') }}</th>
                        <td>{{ $career->positions_available }}</td>
                    </tr>
                </table>

                @if($career->description_vi || $career->description_en)
                    <hr class="my-4">
                    <h5 class="mb-3">{{ __('admin.careers.description') }}</h5>

                    <ul class="nav nav-tabs mb-3" id="descTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="vi-desc-tab" data-bs-toggle="tab" data-bs-target="#vi-desc" type="button">
                                {{ __('admin.careers.vietnamese') }}
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="en-desc-tab" data-bs-toggle="tab" data-bs-target="#en-desc" type="button">
                                {{ __('admin.careers.english') }}
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="vi-desc" role="tabpanel">
                            <p class="text-body">{{ $career->description_vi ?? '-' }}</p>
                        </div>
                        <div class="tab-pane fade" id="en-desc" role="tabpanel">
                            <p class="text-body">{{ $career->description_en ?? '-' }}</p>
                        </div>
                    </div>
                @endif
            </div>

            <!-- Responsibilities -->
            @if($career->responsibilities_vi || $career->responsibilities_en)
                <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                    <h4 class="mb-3"><i class="ri-task-line me-2"></i>{{ __('admin.careers.responsibilities') }}</h4>

                    <ul class="nav nav-tabs mb-3" id="respTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="vi-resp-tab" data-bs-toggle="tab" data-bs-target="#vi-resp" type="button">
                                {{ __('admin.careers.vietnamese') }}
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="en-resp-tab" data-bs-toggle="tab" data-bs-target="#en-resp" type="button">
                                {{ __('admin.careers.english') }}
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="vi-resp" role="tabpanel">
                            @if($career->responsibilities_vi && is_array($career->responsibilities_vi))
                                <ul class="list-group">
                                    @foreach($career->responsibilities_vi as $resp)
                                        <li class="list-group-item">{{ $resp }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <p class="text-muted">{{ __('admin.careers.no_data') }}</p>
                            @endif
                        </div>
                        <div class="tab-pane fade" id="en-resp" role="tabpanel">
                            @if($career->responsibilities_en && is_array($career->responsibilities_en))
                                <ul class="list-group">
                                    @foreach($career->responsibilities_en as $resp)
                                        <li class="list-group-item">{{ $resp }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <p class="text-muted">{{ __('admin.careers.no_data') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endif

            <!-- Qualifications -->
            @if($career->qualifications_vi || $career->qualifications_en)
                <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                    <h4 class="mb-3"><i class="ri-file-list-line me-2"></i>{{ __('admin.careers.qualifications') }}</h4>

                    <ul class="nav nav-tabs mb-3" id="qualTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="vi-qual-tab" data-bs-toggle="tab" data-bs-target="#vi-qual" type="button">
                                {{ __('admin.careers.vietnamese') }}
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="en-qual-tab" data-bs-toggle="tab" data-bs-target="#en-qual" type="button">
                                {{ __('admin.careers.english') }}
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="vi-qual" role="tabpanel">
                            @if($career->qualifications_vi && is_array($career->qualifications_vi))
                                <ul class="list-group">
                                    @foreach($career->qualifications_vi as $qual)
                                        <li class="list-group-item">{{ $qual }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <p class="text-muted">{{ __('admin.careers.no_data') }}</p>
                            @endif
                        </div>
                        <div class="tab-pane fade" id="en-qual" role="tabpanel">
                            @if($career->qualifications_en && is_array($career->qualifications_en))
                                <ul class="list-group">
                                    @foreach($career->qualifications_en as $qual)
                                        <li class="list-group-item">{{ $qual }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <p class="text-muted">{{ __('admin.careers.no_data') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endif

            <!-- Benefits -->
            @if($career->benefits_vi || $career->benefits_en)
                <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                    <h4 class="mb-3"><i class="ri-gift-line me-2"></i>{{ __('admin.careers.benefits') }}</h4>

                    <ul class="nav nav-tabs mb-3" id="benTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="vi-ben-tab" data-bs-toggle="tab" data-bs-target="#vi-ben" type="button">
                                {{ __('admin.careers.vietnamese') }}
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="en-ben-tab" data-bs-toggle="tab" data-bs-target="#en-ben" type="button">
                                {{ __('admin.careers.english') }}
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="vi-ben" role="tabpanel">
                            @if($career->benefits_vi && is_array($career->benefits_vi))
                                <ul class="list-group">
                                    @foreach($career->benefits_vi as $ben)
                                        <li class="list-group-item">{{ $ben }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <p class="text-muted">{{ __('admin.careers.no_data') }}</p>
                            @endif
                        </div>
                        <div class="tab-pane fade" id="en-ben" role="tabpanel">
                            @if($career->benefits_en && is_array($career->benefits_en))
                                <ul class="list-group">
                                    @foreach($career->benefits_en as $ben)
                                        <li class="list-group-item">{{ $ben }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <p class="text-muted">{{ __('admin.careers.no_data') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endif

            <!-- Application Details -->
            <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                <h4 class="mb-3"><i class="ri-mail-send-line me-2"></i>{{ __('admin.careers.application_details') }}</h4>

                <table class="table table-bordered">
                    <tr>
                        <th width="30%" class="bg-light">{{ __('admin.careers.application_email') }}</th>
                        <td>
                            @if($career->application_email)
                                <a href="mailto:{{ $career->application_email }}">{{ $career->application_email }}</a>
                            @else
                                -
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th class="bg-light">{{ __('admin.careers.application_url') }}</th>
                        <td>
                            @if($career->application_url)
                                <a href="{{ $career->application_url }}" target="_blank">{{ $career->application_url }}</a>
                            @else
                                -
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th class="bg-light">{{ __('admin.careers.application_deadline') }}</th>
                        <td>
                            @if($career->application_deadline)
                                {{ $career->application_deadline->format('d/m/Y') }}
                                @if($career->is_open)
                                    <span class="badge bg-success ms-2">{{ __('admin.careers.open') }}</span>
                                @else
                                    <span class="badge bg-danger ms-2">{{ __('admin.careers.expired') }}</span>
                                @endif
                            @else
                                <span class="badge bg-secondary">{{ __('admin.careers.no_deadline') }}</span>
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- Right Sidebar -->
        <div class="col-lg-4">
            <!-- Actions -->
            <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                <h4 class="mb-3"><i class="ri-tools-line me-2"></i>{{ __('admin.careers.actions') }}</h4>

                <a href="{{ route('admin.careers.edit', $career->slug) }}" class="btn btn-primary w-100 mb-2">
                    <i class="ri-edit-line me-1"></i> {{ __('admin.careers.edit') }}
                </a>

                <form action="{{ route('admin.careers.destroy', $career->slug) }}" method="POST" class="delete-form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger w-100 mb-2">
                        <i class="ri-delete-bin-line me-1"></i> {{ __('admin.careers.delete') }}
                    </button>
                </form>

                <a href="{{ route('admin.careers.index') }}" class="btn btn-secondary w-100">
                    <i class="ri-arrow-left-line me-1"></i> {{ __('admin.careers.back') }}
                </a>
            </div>

            <!-- Status -->
            <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                <h4 class="mb-3"><i class="ri-settings-3-line me-2"></i>{{ __('admin.careers.status') }}</h4>

                <table class="table table-bordered mb-0">
                    <tr>
                        <th width="50%" class="bg-light">{{ __('admin.careers.order') }}</th>
                        <td>{{ $career->order }}</td>
                    </tr>
                    <tr>
                        <th class="bg-light">{{ __('admin.careers.featured') }}</th>
                        <td>
                            @if($career->is_featured)
                                <span class="badge bg-warning text-dark">
                                    <i class="ri-star-fill"></i> {{ __('admin.careers.yes') }}
                                </span>
                            @else
                                <span class="badge bg-secondary">{{ __('admin.careers.no') }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th class="bg-light">{{ __('admin.careers.visibility') }}</th>
                        <td>
                            @if($career->is_active)
                                <span class="badge bg-success">{{ __('admin.careers.visible') }}</span>
                            @else
                                <span class="badge bg-secondary">{{ __('admin.careers.hidden') }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th class="bg-light">Slug</th>
                        <td><code>{{ $career->slug }}</code></td>
                    </tr>
                </table>
            </div>

            <!-- System Information -->
            <div class="card bg-white rounded-10 border border-white p-20 mb-4">
                <h4 class="mb-3"><i class="ri-information-line me-2"></i>{{ __('admin.careers.system_info') }}</h4>

                <table class="table table-bordered mb-0">
                    <tr>
                        <th width="50%" class="bg-light">{{ __('admin.careers.created_at') }}</th>
                        <td>{{ $career->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                    <tr>
                        <th class="bg-light">{{ __('admin.careers.updated_at') }}</th>
                        <td>{{ $career->updated_at->format('d/m/Y H:i') }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Delete confirmation with SweetAlert
        document.querySelector('.delete-form')?.addEventListener('submit', function(e) {
            e.preventDefault();
            Swal.fire({
                title: '{{ __('admin.careers.confirm_delete_title') }}',
                text: '{{ __('admin.careers.confirm_delete_text') }}',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: '{{ __('admin.careers.confirm_delete_button') }}',
                cancelButtonText: '{{ __('admin.careers.cancel_button') }}'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            });
        });
    </script>
@endpush
