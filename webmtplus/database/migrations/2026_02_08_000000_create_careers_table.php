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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();

            // Basic Information
            $table->string('title_vi'); // Tiêu đề (VI)
            $table->string('title_en'); // Tiêu đề (EN)
            $table->string('slug')->unique(); // URL slug

            // Location & Type
            $table->string('location_vi')->nullable(); // Địa điểm (VI) - VD: Hà Nội, Việt Nam
            $table->string('location_en')->nullable(); // Địa điểm (EN) - VD: Hanoi, Vietnam
            $table->enum('job_type', ['full-time', 'part-time', 'contract', 'internship'])->default('full-time'); // Loại hình công việc

            // Experience & Salary
            $table->string('experience_required')->nullable(); // VD: 2+ Years, 3-5 Years
            $table->string('salary_display')->nullable(); // Hiển thị lương - VD: 50K, Negotiable
            $table->decimal('salary_min', 15, 2)->nullable(); // Lương tối thiểu
            $table->decimal('salary_max', 15, 2)->nullable(); // Lương tối đa
            $table->string('salary_currency', 10)->default('VND'); // Đơn vị tiền tệ
            $table->enum('salary_period', ['hourly', 'monthly', 'annually'])->default('monthly'); // Chu kỳ lương

            // Main Image
            $table->string('image')->nullable(); // Ảnh chính cho trang chi tiết

            // Job Description
            $table->text('description_vi')->nullable(); // Mô tả công việc (VI)
            $table->text('description_en')->nullable(); // Mô tả công việc (EN)

            // Responsibilities (Trách nhiệm)
            $table->json('responsibilities_vi')->nullable(); // Array của responsibilities (VI)
            $table->json('responsibilities_en')->nullable(); // Array của responsibilities (EN)

            // Qualifications (Yêu cầu)
            $table->json('qualifications_vi')->nullable(); // Array của qualifications (VI)
            $table->json('qualifications_en')->nullable(); // Array của qualifications (EN)

            // Benefits (Quyền lợi)
            $table->json('benefits_vi')->nullable(); // Array của benefits (VI)
            $table->json('benefits_en')->nullable(); // Array của benefits (EN)

            // Application Details
            $table->date('application_deadline')->nullable(); // Hạn nộp hồ sơ
            $table->string('application_email')->nullable(); // Email nhận hồ sơ
            $table->string('application_url')->nullable(); // Link form nộp hồ sơ (nếu có)

            // Additional Info
            $table->integer('positions_available')->default(1); // Số lượng tuyển
            $table->string('department_vi')->nullable(); // Phòng ban (VI)
            $table->string('department_en')->nullable(); // Phòng ban (EN)

            // SEO & Display
            $table->integer('order')->default(0); // Thứ tự hiển thị
            $table->boolean('is_featured')->default(false); // Vị trí nổi bật
            $table->boolean('is_active')->default(true); // Hiển thị/Ẩn

            $table->timestamps();

            // Indexes
            $table->index('slug');
            $table->index('job_type');
            $table->index('is_active');
            $table->index('application_deadline');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
