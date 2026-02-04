@extends('backend.layouts.app')
@props(['pageTitle' => 'Chi tiết thành viên'])
@push('styles')
    <style>
        .member-photo {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #fff;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease;
        }

        .member-photo:hover {
            transform: scale(1.05);
        }

        .profile-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 20px;
            padding: 40px 30px 30px;
            position: relative;
            overflow: hidden;
        }

        .profile-card::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: pulse 15s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1) rotate(0deg); }
            50% { transform: scale(1.1) rotate(180deg); }
        }

        .profile-content {
            position: relative;
            z-index: 1;
        }

        .member-name {
            color: #fff;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .info-card {
            background: #fff;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.12);
        }

        .info-label {
            font-weight: 600;
            color: #495057;
            margin-bottom: 5px;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .info-value {
            color: #212529;
            margin-bottom: 15px;
        }

        .badge-ceo {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: #fff;
            font-size: 13px;
            padding: 8px 20px;
            border-radius: 50px;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(245, 87, 108, 0.4);
            display: inline-block;
            margin-bottom: 20px;
        }

        .position-box {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 20px;
            margin-top: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .position-label {
            color: rgba(255, 255, 255, 0.8);
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .position-value {
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            line-height: 1.4;
        }

        .experience-badge {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: #fff;
            padding: 12px 24px;
            border-radius: 50px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 15px;
        }

        .status-badge {
            padding: 8px 20px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 13px;
            display: inline-block;
        }

        .status-badge.active {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        .status-badge.inactive {
            background: #f1f3f5;
            color: #868e96;
        }
        .social-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            margin: 0 5px;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 18px;
        }
        .social-link:hover {
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            background: rgba(255, 255, 255, 0.35);
            color: white;
        }
        .social-link.facebook:hover { background: #3b5998; border-color: #3b5998; }
        .social-link.twitter:hover { background: #1da1f2; border-color: #1da1f2; }
        .social-link.linkedin:hover { background: #0077b5; border-color: #0077b5; }
        .social-link.instagram:hover {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            border-color: #f5576c;
        }

        .language-tabs {
            border-bottom: 2px solid #e0e0e0;
            margin-bottom: 20px;
        }

        .language-tabs .nav-link {
            border: none;
            color: #666;
            padding: 10px 20px;
            cursor: pointer;
            font-weight: 500;
        }

        .language-tabs .nav-link.active {
            border-bottom: 3px solid #007bff;
            color: #007bff;
            font-weight: bold;
        }
    </style>
@endpush
@section('content-backend')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 mt-1">
                        <h3 class="mb-0">Chi tiết thành viên</h3>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb align-items-center mb-0 lh-1">
                                <li class="breadcrumb-item">
                                    <a href="index.html" class="d-flex align-items-center text-decoration-none">
                                        <i class="ri-home-8-line fs-15 text-primary me-1"></i>
                                        <span class="text-body fs-14 hover">Quản lý</span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <span>Quản lý thành viên</span>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <span class="text-secondary">Chi tiết thành viên</span>
                                </li>
                            </ol>
                        </nav>
                    </div>

    <div class="row">
        <!-- Left Column -->
        <div class="col-lg-4">
            <!-- Photo & Basic Info -->
            <div class="profile-card mb-4">
                <div class="profile-content text-center">
                    @if($team->photo)
                        <img src="{{ $team->photo }}" alt="{{ $team->name }}" class="member-photo mb-4">
                    @else
                        <div class="member-photo mb-4 d-flex align-items-center justify-content-center bg-white">
                            <i class="ri-user-line" style="font-size: 80px; color: #ddd;"></i>
                        </div>
                    @endif

                    <h4 class="member-name">{{ $team->name }}</h4>

                    @if($team->is_featured)
                        <span class="badge-ceo">
                            <i class="ri-vip-crown-line"></i> CEO
                        </span>
                    @endif

                    <div class="position-box">
                        <div class="mb-3">
                            <div class="position-label">🇻🇳 Chức vụ</div>
                            <div class="position-value">{{ $team->position_vi }}</div>
                        </div>

                        <div class="mb-0">
                            <div class="position-label">🇬🇧 Position</div>
                            <div class="position-value">{{ $team->position_en }}</div>
                        </div>
                    </div>

                    @if($team->experience_years)
                        <div class="experience-badge">
                            <i class="ri-award-line fs-18"></i>
                            <span>{{ $team->experience_years }} năm kinh nghiệm</span>
                        </div>
                    @endif

                    <!-- Status -->
                    <div class="mt-4">
                        @if($team->is_active)
                            <span class="status-badge active">
                                <i class="ri-check-line me-1"></i>Đang hoạt động
                            </span>
                        @else
                            <span class="status-badge inactive">
                                <i class="ri-pause-line me-1"></i>Tạm dừng
                            </span>
                        @endif
                    </div>

                    <!-- Social Links -->
                    @if($team->facebook_url || $team->twitter_url || $team->linkedin_url || $team->instagram_url)
                        <div class="mt-4 pt-4" style="border-top: 1px solid rgba(255,255,255,0.2);">
                            @if($team->facebook_url)
                                <a href="{{ $team->facebook_url }}" target="_blank" class="social-link facebook">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            @endif
                            @if($team->twitter_url)
                                <a href="{{ $team->twitter_url }}" target="_blank" class="social-link twitter">
                                    <i class="ri-twitter-x-line"></i>
                                </a>
                            @endif
                            @if($team->linkedin_url)
                                <a href="{{ $team->linkedin_url }}" target="_blank" class="social-link linkedin">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                            @endif
                            @if($team->instagram_url)
                                <a href="{{ $team->instagram_url }}" target="_blank" class="social-link instagram">
                                    <i class="ri-instagram-line"></i>
                                </a>
                            @endif
                        </div>
                    @endif
                </div>
            </div>

            <!-- Contact Info -->
            <div class="info-card">
                <h5 class="fw-bold mb-4" style="color: #667eea;">
                    <i class="ri-contacts-line me-2"></i>Thông tin liên hệ
                </h5>

                @if($team->phone)
                    <div class="mb-3 d-flex align-items-start">
                        <div class="d-flex align-items-center justify-content-center"
                             style="width: 40px; height: 40px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                                    border-radius: 10px; flex-shrink: 0;">
                            <i class="ri-phone-line text-white fs-18"></i>
                        </div>
                        <div class="ms-3 flex-grow-1">
                            <div class="info-label">Điện thoại</div>
                            <div class="info-value">
                                <a href="tel:{{ $team->phone }}" style="color: #667eea; text-decoration: none; font-weight: 500;">
                                    {{ $team->phone }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endif

                @if($team->email)
                    <div class="mb-3 d-flex align-items-start">
                        <div class="d-flex align-items-center justify-content-center"
                             style="width: 40px; height: 40px; background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
                                    border-radius: 10px; flex-shrink: 0;">
                            <i class="ri-mail-line text-white fs-18"></i>
                        </div>
                        <div class="ms-3 flex-grow-1">
                            <div class="info-label">Email</div>
                            <div class="info-value">
                                <a href="mailto:{{ $team->email }}" style="color: #f5576c; text-decoration: none; font-weight: 500;">
                                    {{ $team->email }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endif

                @if($team->fax)
                    <div class="mb-3 d-flex align-items-start">
                        <div class="d-flex align-items-center justify-content-center"
                             style="width: 40px; height: 40px; background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
                                    border-radius: 10px; flex-shrink: 0;">
                            <i class="ri-printer-line text-white fs-18"></i>
                        </div>
                        <div class="ms-3 flex-grow-1">
                            <div class="info-label">Fax</div>
                            <div class="info-value">{{ $team->fax }}</div>
                        </div>
                    </div>
                @endif

                @if($team->address)
                    <div class="mb-0 d-flex align-items-start">
                        <div class="d-flex align-items-center justify-content-center"
                             style="width: 40px; height: 40px; background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
                                    border-radius: 10px; flex-shrink: 0;">
                            <i class="ri-map-pin-line text-white fs-18"></i>
                        </div>
                        <div class="ms-3 flex-grow-1">
                            <div class="info-label">Địa chỉ</div>
                            <div class="info-value">{{ $team->address }}</div>
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <!-- Right Column -->
        <div class="col-lg-8">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <!-- Language Tabs -->
                    <ul class="nav nav-tabs language-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="vi-tab" data-bs-toggle="tab"
                                data-bs-target="#vi-content" type="button" role="tab">
                                🇻🇳 Tiếng Việt
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="en-tab" data-bs-toggle="tab"
                                data-bs-target="#en-content" type="button" role="tab">
                                🇬🇧 English
                            </button>
                        </li>
                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content">
                        <!-- Vietnamese Content -->
                        <div class="tab-pane fade show active" id="vi-content" role="tabpanel">
                            @if($team->detailed_position_vi)
                                <div class="mb-4">
                                    <h6 class="fw-bold mb-2"><i class="ri-briefcase-line me-2"></i>Chức vụ chi tiết</h6>
                                    <div class="info-value">{{ $team->detailed_position_vi }}</div>
                                </div>
                            @endif

                            @if($team->bio_vi)
                                <div class="mb-4">
                                    <h6 class="fw-bold mb-2"><i class="ri-file-text-line me-2"></i>Tiểu sử ngắn</h6>
                                    <div class="info-value">{{ $team->bio_vi }}</div>
                                </div>
                            @endif

                            @if($team->detailed_bio_vi)
                                <div class="mb-4">
                                    <h6 class="fw-bold mb-2"><i class="ri-article-line me-2"></i>Tiểu sử chi tiết</h6>
                                    <div class="info-value">{{ $team->detailed_bio_vi }}</div>
                                </div>
                            @endif

                            @if($team->location_vi)
                                <div class="mb-4">
                                    <h6 class="fw-bold mb-2"><i class="ri-map-pin-2-line me-2"></i>Địa điểm</h6>
                                    <div class="info-value">{{ $team->location_vi }}</div>
                                </div>
                            @endif

                            @if($team->field_of_activity_vi)
                                <div class="mb-4">
                                    <h6 class="fw-bold mb-2"><i class="ri-building-line me-2"></i>Lĩnh vực hoạt động</h6>
                                    <div class="info-value">{{ $team->field_of_activity_vi }}</div>
                                </div>
                            @endif

                            @if($team->specialties_vi && count($team->specialties_vi) > 0)
                                <div class="mb-4">
                                    <h6 class="fw-bold mb-2"><i class="ri-star-line me-2"></i>Kỹ năng chuyên môn</h6>
                                    <ul class="list-unstyled mb-0">
                                        @foreach($team->specialties_vi as $specialty)
                                            <li class="mb-2"><i class="ri-check-line text-success me-2"></i>{{ $specialty }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if($team->experience_list_vi && count($team->experience_list_vi) > 0)
                                <div class="mb-0">
                                    <h6 class="fw-bold mb-2"><i class="ri-lightbulb-line me-2"></i>Kinh nghiệm nổi bật</h6>
                                    <ul class="list-unstyled mb-0">
                                        @foreach($team->experience_list_vi as $experience)
                                            <li class="mb-2"><i class="ri-arrow-right-s-line text-primary me-2"></i>{{ $experience }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if(!$team->detailed_position_vi && !$team->bio_vi && !$team->detailed_bio_vi &&
                                !$team->location_vi && !$team->field_of_activity_vi &&
                                (!$team->specialties_vi || count($team->specialties_vi) == 0) &&
                                (!$team->experience_list_vi || count($team->experience_list_vi) == 0))
                                <div class="text-center py-5 text-muted">
                                    <i class="ri-information-line fs-1"></i>
                                    <p class="mt-3">Chưa có thông tin tiếng Việt</p>
                                </div>
                            @endif
                        </div>

                        <!-- English Content -->
                        <div class="tab-pane fade" id="en-content" role="tabpanel">
                            @if($team->detailed_position_en)
                                <div class="mb-4">
                                    <h6 class="fw-bold mb-2"><i class="ri-briefcase-line me-2"></i>Detailed Position</h6>
                                    <div class="info-value">{{ $team->detailed_position_en }}</div>
                                </div>
                            @endif

                            @if($team->bio_en)
                                <div class="mb-4">
                                    <h6 class="fw-bold mb-2"><i class="ri-file-text-line me-2"></i>Short Biography</h6>
                                    <div class="info-value">{{ $team->bio_en }}</div>
                                </div>
                            @endif

                            @if($team->detailed_bio_en)
                                <div class="mb-4">
                                    <h6 class="fw-bold mb-2"><i class="ri-article-line me-2"></i>Detailed Biography</h6>
                                    <div class="info-value">{{ $team->detailed_bio_en }}</div>
                                </div>
                            @endif

                            @if($team->location_en)
                                <div class="mb-4">
                                    <h6 class="fw-bold mb-2"><i class="ri-map-pin-2-line me-2"></i>Location</h6>
                                    <div class="info-value">{{ $team->location_en }}</div>
                                </div>
                            @endif

                            @if($team->field_of_activity_en)
                                <div class="mb-4">
                                    <h6 class="fw-bold mb-2"><i class="ri-building-line me-2"></i>Field of Activity</h6>
                                    <div class="info-value">{{ $team->field_of_activity_en }}</div>
                                </div>
                            @endif

                            @if($team->specialties_en && count($team->specialties_en) > 0)
                                <div class="mb-4">
                                    <h6 class="fw-bold mb-2"><i class="ri-star-line me-2"></i>Professional Skills</h6>
                                    <ul class="list-unstyled mb-0">
                                        @foreach($team->specialties_en as $specialty)
                                            <li class="mb-2"><i class="ri-check-line text-success me-2"></i>{{ $specialty }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if($team->experience_list_en && count($team->experience_list_en) > 0)
                                <div class="mb-0">
                                    <h6 class="fw-bold mb-2"><i class="ri-lightbulb-line me-2"></i>Notable Experience</h6>
                                    <ul class="list-unstyled mb-0">
                                        @foreach($team->experience_list_en as $experience)
                                            <li class="mb-2"><i class="ri-arrow-right-s-line text-primary me-2"></i>{{ $experience }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if(!$team->detailed_position_en && !$team->bio_en && !$team->detailed_bio_en &&
                                !$team->location_en && !$team->field_of_activity_en &&
                                (!$team->specialties_en || count($team->specialties_en) == 0) &&
                                (!$team->experience_list_en || count($team->experience_list_en) == 0))
                                <div class="text-center py-5 text-muted">
                                    <i class="ri-information-line fs-1"></i>
                                    <p class="mt-3">No English information available</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
@endpush
