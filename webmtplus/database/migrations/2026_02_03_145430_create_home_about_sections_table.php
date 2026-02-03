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
        Schema::create('home_about_sections', function (Blueprint $table) {
            $table->id();

            // Main heading
            $table->text('heading_vi')->nullable();
            $table->text('heading_en')->nullable();

            // Description
            $table->text('description_vi')->nullable();
            $table->text('description_en')->nullable();

            // Images
            $table->string('about_main_image')->default('/frontend/assets/img/about/about-img-1.jpg');
            $table->string('about_thumb_image')->default('/frontend/assets/img/about/about-bg-1.jpg');

            // Button
            $table->string('button_url')->default('/areas-of-operation');

            // Counter Card 1
            $table->string('counter_1_title_vi')->nullable();
            $table->string('counter_1_title_en')->nullable();
            $table->string('counter_1_number')->nullable();
            $table->string('counter_1_suffix')->nullable(); // +, %, year, etc
            $table->string('counter_1_desc_vi')->nullable();
            $table->string('counter_1_desc_en')->nullable();

            // Counter Card 2
            $table->string('counter_2_title_vi')->nullable();
            $table->string('counter_2_title_en')->nullable();
            $table->string('counter_2_number')->nullable();
            $table->string('counter_2_suffix')->nullable();
            $table->string('counter_2_desc_vi')->nullable();
            $table->string('counter_2_desc_en')->nullable();

            // Counter Card 3
            $table->string('counter_3_title_vi')->nullable();
            $table->string('counter_3_title_en')->nullable();
            $table->string('counter_3_number')->nullable();
            $table->string('counter_3_suffix')->nullable();
            $table->string('counter_3_desc_vi')->nullable();
            $table->string('counter_3_desc_en')->nullable();

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
        Schema::dropIfExists('home_about_sections');
    }
};
