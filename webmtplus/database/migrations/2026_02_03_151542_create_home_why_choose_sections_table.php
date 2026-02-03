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
        Schema::create('home_why_choose_sections', function (Blueprint $table) {
            $table->id();

            // Header Section
            $table->string('subtitle_vi')->nullable();
            $table->string('subtitle_en')->nullable();
            $table->text('heading_vi')->nullable();
            $table->text('heading_en')->nullable();
            $table->text('description_vi')->nullable();
            $table->text('description_en')->nullable();

            // Feature Items (4 items with icon and title)
            $table->string('feature_1_icon')->nullable();
            $table->string('feature_1_title_vi')->nullable();
            $table->string('feature_1_title_en')->nullable();

            $table->string('feature_2_icon')->nullable();
            $table->string('feature_2_title_vi')->nullable();
            $table->string('feature_2_title_en')->nullable();

            $table->string('feature_3_icon')->nullable();
            $table->string('feature_3_title_vi')->nullable();
            $table->string('feature_3_title_en')->nullable();

            $table->string('feature_4_icon')->nullable();
            $table->string('feature_4_title_vi')->nullable();
            $table->string('feature_4_title_en')->nullable();

            // Button URL
            $table->string('button_url')->nullable();

            // CEO Message
            $table->string('ceo_avatar')->nullable();
            $table->text('ceo_quote_vi')->nullable();
            $table->text('ceo_quote_en')->nullable();
            $table->string('ceo_name')->nullable();
            $table->string('ceo_position_vi')->nullable();
            $table->string('ceo_position_en')->nullable();

            // Images
            $table->string('main_image')->nullable();
            $table->string('thumb_image')->nullable();

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_why_choose_sections');
    }
};
