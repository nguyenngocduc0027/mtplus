@extends('backend.layouts.app')
@props(['pageTitle' => __('admin.team.manage_members')])
@push('styles')
    <style>
        .member-photo {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
        .badge-ceo {
            background-color: #ffc107;
            color: #000;
            font-weight: bold;
            font-size: 11px;
            padding: 4px 8px;
        }
        .social-link {
            width: 24px;
            height: 24px;
            line-height: 24px;
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
            <a href="{{ route('admin.team.create') }}" class="text-primary fs-16 text-decoration-none">
                <i class="ri-add-line"></i> {{ __('admin.team.add_member') }}
            </a>
            <form class="table-src-form position-relative m-0" id="searchForm">
                <input type="text" class="form-control" id="searchInput" placeholder="{{ __('admin.team.search_placeholder') }}">
                <div class="src-btn position-absolute top-50 start-0 translate-middle-y bg-transparent p-0 border-0">
                    <span class="material-symbols-outlined">search</span>
                </div>
            </form>
        </div>
    </div>

    <div class="row" id="teamMembersGrid">
        @forelse($teamMembers as $member)
            <div class="col-xxl-3 col-lg-4 col-md-6 member-card" data-name="{{ strtolower($member->name) }}" data-position="{{ strtolower($member->getPosition()) }}">
                <div class="card bg-white p-20 rounded-10 border border-white mb-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="{{ $member->photo }}" class="member-photo rounded-circle" alt="{{ $member->name }}">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h4 class="mb-1 fs-18">{{ $member->name }}</h4>
                                <span class="fs-14 text-secondary">{{ $member->getPosition() }}</span>
                                @if($member->is_featured)
                                    <div class="mt-1">
                                        <span class="badge badge-ceo">
                                            <i class="ri-vip-crown-line"></i> {{ __('admin.team.ceo') }}
                                        </span>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="dropdown select-dropdown without-border">
                            <button class="bg-transparent border-0 p-0 text-body" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="material-symbols-outlined fs-24 text-secondary">more_horiz</i>
                            </button>

                            <ul class="dropdown-menu dropdown-menu-end bg-white border-0 box-shadow rounded-10">
                                <li>
                                    <a class="dropdown-item text-secondary" href="{{ route('admin.team.show', $member->slug) }}">
                                        <i class="ri-eye-line me-2"></i>{{ __('admin.team.view') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-secondary" href="{{ route('admin.team.edit', $member->slug) }}">
                                        <i class="ri-edit-line me-2"></i>{{ __('admin.team.edit') }}
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="{{ route('admin.team.destroy', $member->slug) }}"
                                          method="POST"
                                          class="delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item text-danger">
                                            <i class="ri-delete-bin-line me-2"></i>{{ __('admin.team.delete') }}
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <ul class="p-0 mb-3 list-unstyled">
                        <li class="fs-14 mb-2">
                            <i class="ri-time-line me-2 text-primary"></i>
                            {{ __('admin.team.experience') }}:
                            <span class="text-secondary">
                                @if($member->experience_years)
                                    {{ $member->experience_years }} {{ __('admin.team.years') }}
                                @else
                                    <em class="text-muted">{{ __('admin.team.updating') }}</em>
                                @endif
                            </span>
                        </li>
                        <li class="fs-14 mb-2">
                            <i class="ri-phone-line me-2 text-primary"></i>
                            {{ __('admin.team.phone') }}:
                            <span class="text-secondary">
                                @if($member->phone)
                                    {{ $member->phone }}
                                @else
                                    <em class="text-muted">{{ __('admin.team.updating') }}</em>
                                @endif
                            </span>
                        </li>
                        <li class="fs-14 mb-2">
                            <i class="ri-map-pin-line me-2 text-primary"></i>
                            {{ __('admin.team.location') }}:
                            <span class="text-secondary">
                                @if($member->getLocation())
                                    {{ $member->getLocation() }}
                                @else
                                    <em class="text-muted">{{ __('admin.team.updating') }}</em>
                                @endif
                            </span>
                        </li>
                        <li class="fs-14 mb-0">
                            <i class="ri-shield-check-line me-2 text-primary"></i>
                            {{ __('admin.team.status') }}:
                            @if($member->is_active)
                                <span class="badge bg-success-10 text-success">{{ __('admin.team.active') }}</span>
                            @else
                                <span class="badge bg-danger-10 text-danger">{{ __('admin.team.inactive') }}</span>
                            @endif
                        </li>
                    </ul>

                    @if($member->facebook_url || $member->twitter_url || $member->linkedin_url || $member->instagram_url)
                        <ul class="p-0 mb-0 list-unstyled d-flex" style="gap: 10px;">
                            @if($member->facebook_url)
                                <li>
                                    <a href="{{ $member->facebook_url }}" target="_blank"
                                       class="d-inline-block rounded-circle text-decoration-none text-center text-white transition-y fs-16 social-link"
                                       style="background-color: #3a559f;">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                            @endif
                            @if($member->twitter_url)
                                <li>
                                    <a href="{{ $member->twitter_url }}" target="_blank"
                                       class="d-inline-block rounded-circle text-decoration-none text-center text-white transition-y fs-16 social-link"
                                       style="background-color: #03a9f4;">
                                        <i class="ri-twitter-x-line"></i>
                                    </a>
                                </li>
                            @endif
                            @if($member->linkedin_url)
                                <li>
                                    <a href="{{ $member->linkedin_url }}" target="_blank"
                                       class="d-inline-block rounded-circle text-decoration-none text-center text-white transition-y fs-16 social-link"
                                       style="background-color: #007ab9;">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                            @endif
                            @if($member->instagram_url)
                                <li>
                                    <a href="{{ $member->instagram_url }}" target="_blank"
                                       class="d-inline-block rounded-circle text-decoration-none text-center text-white transition-y fs-16 social-link"
                                       style="background-color: #e4405f;">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    @endif
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="card bg-white p-20 rounded-10 border border-white">
                    <div class="text-center py-5">
                        <i class="ri-team-line" style="font-size: 64px; color: #ddd;"></i>
                        <p class="text-muted mt-3 mb-3">{{ __('admin.team.no_members') }}</p>
                        <a href="{{ route('admin.team.create') }}" class="btn btn-primary">
                            <i class="ri-add-line"></i> {{ __('admin.team.add_member') }}
                        </a>
                    </div>
                </div>
            </div>
        @endforelse
    </div>

    <!-- Pagination -->
    @if($teamMembers->hasPages())
        <div class="d-flex justify-content-between align-items-center mt-4">
            <div>
                {{ __('admin.team.showing') }} {{ $teamMembers->firstItem() ?? 0 }} {{ __('admin.team.to') }} {{ $teamMembers->lastItem() ?? 0 }}
                {{ __('admin.team.of') }} {{ $teamMembers->total() }} {{ __('admin.team.entries') }}
            </div>
            <div>
                {{ $teamMembers->links('pagination::bootstrap-4') }}
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
                    title: '{{ __("admin.team.success") }}',
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
        });

        // Search functionality
        document.getElementById('searchInput').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const memberCards = document.querySelectorAll('.member-card');

            memberCards.forEach(card => {
                const name = card.getAttribute('data-name');
                const position = card.getAttribute('data-position');

                if (name.includes(searchTerm) || position.includes(searchTerm)) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        });

        // Confirm delete with SweetAlert
        document.querySelectorAll('.delete-form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: '{{ __("admin.team.confirm_delete") }}',
                    text: '{{ __("admin.team.delete_warning") }}',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: '{{ __("admin.team.yes_delete") }}',
                    cancelButtonText: '{{ __("admin.team.cancel") }}'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endpush
