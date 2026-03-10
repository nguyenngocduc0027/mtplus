<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Categories Table (Danh mục tin tức)
        Schema::create('news_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name_vi'); // Tên danh mục (VI)
            $table->string('name_en'); // Tên danh mục (EN)
            $table->string('slug')->unique(); // URL slug
            $table->text('description_vi')->nullable(); // Mô tả (VI)
            $table->text('description_en')->nullable(); // Mô tả (EN)
            $table->string('icon')->nullable(); // Icon cho category
            $table->integer('order')->default(0); // Thứ tự hiển thị
            $table->boolean('is_active')->default(true); // Hiển thị/Ẩn
            $table->timestamps();

            $table->index('slug');
            $table->index('is_active');
        });

        // Tags Table (Thẻ tag)
        Schema::create('news_tags', function (Blueprint $table) {
            $table->id();
            $table->string('name_vi'); // Tên tag (VI)
            $table->string('name_en'); // Tên tag (EN)
            $table->string('slug')->unique(); // URL slug
            $table->timestamps();

            $table->index('slug');
        });

        // News/Posts Table (Bài viết/Tin tức)
        Schema::create('news', function (Blueprint $table) {
            $table->id();

            // Basic Information
            $table->string('title_vi'); // Tiêu đề (VI)
            $table->string('title_en'); // Tiêu đề (EN)
            $table->string('slug')->unique(); // URL slug

            // Content
            $table->text('excerpt_vi')->nullable(); // Tóm tắt ngắn (VI)
            $table->text('excerpt_en')->nullable(); // Tóm tắt ngắn (EN)
            $table->longText('content_vi')->nullable(); // Nội dung đầy đủ (VI)
            $table->longText('content_en')->nullable(); // Nội dung đầy đủ (EN)

            // Media
            $table->string('featured_image')->nullable(); // Ảnh đại diện chính
            $table->string('thumbnail')->nullable(); // Ảnh thumbnail (cho list)
            $table->json('gallery_images')->nullable(); // Thư viện ảnh bổ sung

            // Author & Metadata
            $table->foreignId('author_id')->nullable()->constrained('users')->nullOnDelete(); // Tác giả (admin user)
            $table->string('author_name')->default('Admin'); // Tên tác giả hiển thị
            $table->foreignId('category_id')->nullable()->constrained('news_categories')->nullOnDelete(); // Danh mục chính

            // Engagement
            $table->integer('view_count')->default(0); // Số lượt xem
            $table->integer('comment_count')->default(0); // Số bình luận
            $table->integer('like_count')->default(0); // Số lượt thích

            // SEO
            $table->string('meta_title_vi')->nullable(); // Meta title (VI)
            $table->string('meta_title_en')->nullable(); // Meta title (EN)
            $table->text('meta_description_vi')->nullable(); // Meta description (VI)
            $table->text('meta_description_en')->nullable(); // Meta description (EN)
            $table->text('meta_keywords_vi')->nullable(); // Meta keywords (VI)
            $table->text('meta_keywords_en')->nullable(); // Meta keywords (EN)

            // Publishing
            $table->timestamp('published_at')->nullable(); // Ngày xuất bản
            $table->enum('status', ['draft', 'published', 'scheduled', 'archived'])->default('draft'); // Trạng thái

            // Display Settings
            $table->integer('order')->default(0); // Thứ tự hiển thị
            $table->boolean('is_featured')->default(false); // Tin nổi bật
            $table->boolean('is_trending')->default(false); // Tin thịnh hành
            $table->boolean('is_active')->default(true); // Hiển thị/Ẩn
            $table->boolean('allow_comments')->default(true); // Cho phép bình luận

            $table->timestamps();
            $table->softDeletes(); // Soft delete

            // Indexes
            $table->index('slug');
            $table->index('category_id');
            $table->index('status');
            $table->index('is_active');
            $table->index('is_featured');
            $table->index('published_at');
        });

        // Pivot table: News - Tags (Many-to-Many)
        Schema::create('news_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('news_id')->constrained('news')->cascadeOnDelete();
            $table->foreignId('tag_id')->constrained('news_tags')->cascadeOnDelete();
            $table->timestamps();

            $table->unique(['news_id', 'tag_id']);
        });

        // Comments Table (Bình luận)
        Schema::create('news_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('news_id')->constrained('news')->cascadeOnDelete();
            $table->foreignId('parent_id')->nullable()->constrained('news_comments')->cascadeOnDelete(); // For replies

            $table->string('author_name'); // Tên người bình luận
            $table->string('author_email'); // Email
            $table->string('author_website')->nullable(); // Website (optional)
            $table->text('content'); // Nội dung bình luận

            $table->boolean('is_approved')->default(false); // Đã duyệt
            $table->ipAddress('ip_address')->nullable(); // IP address
            $table->string('user_agent')->nullable(); // Browser info

            $table->timestamps();

            $table->index('news_id');
            $table->index('is_approved');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_comments');
        Schema::dropIfExists('news_tag');
        Schema::dropIfExists('news');
        Schema::dropIfExists('news_tags');
        Schema::dropIfExists('news_categories');
    }
};
