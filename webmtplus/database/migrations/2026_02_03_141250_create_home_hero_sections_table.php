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
        Schema::create('home_hero_sections', function (Blueprint $table) {
            $table->id();

            // Subtitle with icon
            $table->string('subtitle_vi')->nullable();
            $table->string('subtitle_en')->nullable();
            $table->string('subtitle_icon')->default('/frontend/assets/img/icons/star-2.svg');

            // Main heading
            $table->text('heading_vi')->nullable();
            $table->text('heading_en')->nullable();

            // Description paragraph
            $table->text('description_vi')->nullable();
            $table->text('description_en')->nullable();

            // Hero images
            $table->string('hero_slide_image')->default('/frontend/assets/img/hero/hero-slide-1.jpg');
            $table->string('hero_main_image')->default('/frontend/assets/img/hero/hero-img-1.png');
            $table->string('circle_text_image')->default('/frontend/assets/img/hero/circle-text-1.svg');

            // Hero thumb paragraph
            $table->text('thumb_para_vi')->nullable();
            $table->text('thumb_para_en')->nullable();

            // Video URL
            $table->string('video_url')->nullable();

            // Learn more and read more buttons
            $table->string('learn_more_url')->default('javascript:void(0)');
            $table->string('read_more_url')->default('javascript:void(0)');

            // Status
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_hero_sections');
    }
};
