@extends('backend.layouts.app')
@props(['pageTitle' => $news->title_vi])
@section('content-backend')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 mt-1">
        <h3 class="mb-0">{{ __('admin.news.view_news') }}</h3>
        <x-admin.ui.breadcrumb :pageTitle="__('admin.news.view_news')" />
    </div>

    <div class="row">
        <div class="col-lg-8">
            <!-- Main Content -->
            <div class="card bg-white rounded-10 border border-white mb-4">
                <div class="card-body p-20">
                    <!-- Status & Meta -->
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            @if($news->status === 'published')
                                <span class="badge bg-success">{{ __('admin.news.status_published') }}</span>
                            @elseif($news->status === 'draft')
                                <span class="badge bg-secondary">{{ __('admin.news.status_draft') }}</span>
                            @elseif($news->status === 'scheduled')
                                <span class="badge bg-warning">{{ __('admin.news.status_scheduled') }}</span>
                            @else
                                <span class="badge bg-dark">{{ __('admin.news.status_archived') }}</span>
                            @endif

                            @if(!$news->is_active)
                                <span class="badge bg-secondary ms-1">{{ __('admin.news.hidden') }}</span>
                            @endif

                            @if($news->is_featured)
                                <span class="badge bg-warning text-dark ms-1">
                                    <i class="ri-star-fill"></i> {{ __('admin.news.featured') }}
                                </span>
                            @endif

                            @if($news->is_trending)
                                <span class="badge bg-danger ms-1">
                                    <i class="ri-fire-fill"></i> {{ __('admin.news.trending') }}
                                </span>
                            @endif
                        </div>

                        <div class="btn-group">
                            <a href="{{ route('admin.news.edit', $news->slug) }}" class="btn btn-sm btn-primary">
                                <i class="ri-edit-line"></i> {{ __('admin.news.edit') }}
                            </a>
                            <form action="{{ route('admin.news.destroy', $news->slug) }}" method="POST" class="delete-form d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="ri-delete-bin-line"></i> {{ __('admin.news.delete') }}
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Language Tabs -->
                    <ul class="nav nav-tabs mb-3" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="vi-tab" data-bs-toggle="tab" data-bs-target="#vi-content" type="button" role="tab">
                                <i class="ri-flag-fill"></i> Tiếng Việt
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="en-tab" data-bs-toggle="tab" data-bs-target="#en-content" type="button" role="tab">
                                <i class="ri-flag-line"></i> English
                            </button>
                        </li>
                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content">
                        <!-- Vietnamese Content -->
                        <div class="tab-pane fade show active" id="vi-content" role="tabpanel">
                            <h2 class="mb-3">{{ $news->title_vi }}</h2>

                            @if($news->featured_image)
                                <img src="{{ $news->featured_image }}" class="img-fluid rounded mb-4" alt="{{ $news->title_vi }}">
                            @endif

                            @if($news->excerpt_vi)
                                <div class="alert alert-info mb-4">
                                    <strong>{{ __('admin.news.excerpt') }}:</strong>
                                    <p class="mb-0 mt-2">{{ $news->excerpt_vi }}</p>
                                </div>
                            @endif

                            @if($news->content_vi)
                                <div class="content-body">
                                    {!! $news->content_vi !!}
                                </div>
                            @endif
                        </div>

                        <!-- English Content -->
                        <div class="tab-pane fade" id="en-content" role="tabpanel">
                            <h2 class="mb-3">{{ $news->title_en }}</h2>

                            @if($news->featured_image)
                                <img src="{{ $news->featured_image }}" class="img-fluid rounded mb-4" alt="{{ $news->title_en }}">
                            @endif

                            @if($news->excerpt_en)
                                <div class="alert alert-info mb-4">
                                    <strong>{{ __('admin.news.excerpt') }}:</strong>
                                    <p class="mb-0 mt-2">{{ $news->excerpt_en }}</p>
                                </div>
                            @endif

                            @if($news->content_en)
                                <div class="content-body">
                                    {!! $news->content_en !!}
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>

            <!-- SEO Information -->
            <div class="card bg-white rounded-10 border border-white mb-4">
                <div class="card-header bg-transparent border-bottom p-20">
                    <h5 class="mb-0">{{ __('admin.news.seo_information') }}</h5>
                </div>
                <div class="card-body p-20">
                    <ul class="nav nav-tabs mb-3" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="seo-vi-tab" data-bs-toggle="tab" data-bs-target="#seo-vi-content" type="button" role="tab">
                                Tiếng Việt
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="seo-en-tab" data-bs-toggle="tab" data-bs-target="#seo-en-content" type="button" role="tab">
                                English
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <!-- Vietnamese SEO -->
                        <div class="tab-pane fade show active" id="seo-vi-content" role="tabpanel">
                            <div class="mb-3">
                                <strong>{{ __('admin.news.meta_title') }}:</strong>
                                <p class="mb-0">{{ $news->meta_title_vi ?? '-' }}</p>
                            </div>
                            <div class="mb-3">
                                <strong>{{ __('admin.news.meta_description') }}:</strong>
                                <p class="mb-0">{{ $news->meta_description_vi ?? '-' }}</p>
                            </div>
                            <div class="mb-0">
                                <strong>{{ __('admin.news.meta_keywords') }}:</strong>
                                <p class="mb-0">{{ $news->meta_keywords_vi ?? '-' }}</p>
                            </div>
                        </div>

                        <!-- English SEO -->
                        <div class="tab-pane fade" id="seo-en-content" role="tabpanel">
                            <div class="mb-3">
                                <strong>{{ __('admin.news.meta_title') }}:</strong>
                                <p class="mb-0">{{ $news->meta_title_en ?? '-' }}</p>
                            </div>
                            <div class="mb-3">
                                <strong>{{ __('admin.news.meta_description') }}:</strong>
                                <p class="mb-0">{{ $news->meta_description_en ?? '-' }}</p>
                            </div>
                            <div class="mb-0">
                                <strong>{{ __('admin.news.meta_keywords') }}:</strong>
                                <p class="mb-0">{{ $news->meta_keywords_en ?? '-' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comments -->
            @if($news->allow_comments && $news->comments->count() > 0)
                <div class="card bg-white rounded-10 border border-white mb-4">
                    <div class="card-header bg-transparent border-bottom p-20">
                        <h5 class="mb-0">{{ __('admin.news.comments') }} ({{ $news->comments->count() }})</h5>
                    </div>
                    <div class="card-body p-20">
                        @foreach($news->comments()->topLevel()->recent()->get() as $comment)
                            <div class="border-bottom pb-3 mb-3">
                                <div class="d-flex align-items-start gap-3">
                                    <img src="{{ $comment->avatar }}" class="rounded-circle" width="40" height="40" alt="{{ $comment->author_name }}">
                                    <div class="flex-grow-1">
                                        <div class="d-flex justify-content-between align-items-start mb-2">
                                            <div>
                                                <strong>{{ $comment->author_name }}</strong>
                                                @if(!$comment->is_approved)
                                                    <span class="badge bg-warning text-dark ms-2">{{ __('admin.news.pending_approval') }}</span>
                                                @endif
                                            </div>
                                            <small class="text-muted">{{ $comment->formatted_date }}</small>
                                        </div>
                                        <p class="mb-0">{{ $comment->content }}</p>

                                        @if($comment->replies->count() > 0)
                                            <div class="ms-4 mt-3">
                                                @foreach($comment->replies as $reply)
                                                    <div class="d-flex align-items-start gap-3 mb-3">
                                                        <img src="{{ $reply->avatar }}" class="rounded-circle" width="32" height="32" alt="{{ $reply->author_name }}">
                                                        <div class="flex-grow-1">
                                                            <div class="d-flex justify-content-between align-items-start mb-2">
                                                                <strong>{{ $reply->author_name }}</strong>
                                                                <small class="text-muted">{{ $reply->formatted_date }}</small>
                                                            </div>
                                                            <p class="mb-0">{{ $reply->content }}</p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>

        <div class="col-lg-4">
            <!-- Publishing Info -->
            <div class="card bg-white rounded-10 border border-white mb-4">
                <div class="card-header bg-transparent border-bottom p-20">
                    <h5 class="mb-0">{{ __('admin.news.publishing_info') }}</h5>
                </div>
                <div class="card-body p-20">
                    <div class="mb-3">
                        <strong>{{ __('admin.news.author') }}:</strong>
                        <p class="mb-0">{{ $news->author_name }}</p>
                    </div>
                    <div class="mb-3">
                        <strong>{{ __('admin.news.published_at') }}:</strong>
                        <p class="mb-0">{{ $news->published_at ? $news->published_at->format('d/m/Y H:i') : '-' }}</p>
                    </div>
                    <div class="mb-3">
                        <strong>{{ __('admin.news.created_at') }}:</strong>
                        <p class="mb-0">{{ $news->created_at->format('d/m/Y H:i') }}</p>
                    </div>
                    <div class="mb-3">
                        <strong>{{ __('admin.news.updated_at') }}:</strong>
                        <p class="mb-0">{{ $news->updated_at->format('d/m/Y H:i') }}</p>
                    </div>
                    <div class="mb-0">
                        <strong>{{ __('admin.news.slug') }}:</strong>
                        <p class="mb-0"><code>{{ $news->slug }}</code></p>
                    </div>
                </div>
            </div>

            <!-- Category & Tags -->
            <div class="card bg-white rounded-10 border border-white mb-4">
                <div class="card-header bg-transparent border-bottom p-20">
                    <h5 class="mb-0">{{ __('admin.news.categorization') }}</h5>
                </div>
                <div class="card-body p-20">
                    <div class="mb-3">
                        <strong>{{ __('admin.news.category') }}:</strong>
                        <p class="mb-0">
                            @if($news->category)
                                <span class="badge bg-info">{{ $news->category->name }}</span>
                            @else
                                -
                            @endif
                        </p>
                    </div>
                    <div class="mb-0">
                        <strong>{{ __('admin.news.tags') }}:</strong>
                        <p class="mb-0">
                            @forelse($news->tags as $tag)
                                <span class="badge bg-secondary">{{ $tag->name }}</span>
                            @empty
                                -
                            @endforelse
                        </p>
                    </div>
                </div>
            </div>

            <!-- Statistics -->
            <div class="card bg-white rounded-10 border border-white mb-4">
                <div class="card-header bg-transparent border-bottom p-20">
                    <h5 class="mb-0">{{ __('admin.news.statistics') }}</h5>
                </div>
                <div class="card-body p-20">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span><i class="ri-eye-line text-primary"></i> {{ __('admin.news.views') }}</span>
                        <strong>{{ $news->view_count }}</strong>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span><i class="ri-message-2-line text-success"></i> {{ __('admin.news.comments') }}</span>
                        <strong>{{ $news->comment_count }}</strong>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <span><i class="ri-time-line text-info"></i> {{ __('admin.news.reading_time') }}</span>
                        <strong>{{ $news->reading_time }}</strong>
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="card bg-white rounded-10 border border-white mb-4">
                <div class="card-body p-20">
                    <a href="{{ route('admin.news.edit', $news->slug) }}" class="btn btn-primary w-100 mb-2">
                        <i class="ri-edit-line"></i> {{ __('admin.news.edit') }}
                    </a>
                    <a href="{{ route('admin.news.index') }}" class="btn btn-secondary w-100">
                        <i class="ri-arrow-left-line"></i> {{ __('admin.news.back_to_list') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Delete confirmation
        document.querySelectorAll('.delete-form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: '{{ __('admin.news.confirm_delete_title') }}',
                    text: '{{ __('admin.news.confirm_delete_text') }}',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: '{{ __('admin.news.confirm_delete_button') }}',
                    cancelButtonText: '{{ __('admin.news.cancel_button') }}'
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.submit();
                    }
                });
            });
        });
    </script>
@endpush
