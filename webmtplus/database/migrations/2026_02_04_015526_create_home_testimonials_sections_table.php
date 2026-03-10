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
        Schema::create('home_testimonials_sections', function (Blueprint $table) {
            $table->id();

            // Header Section
            $table->string('subtitle_vi')->nullable();
            $table->string('subtitle_en')->nullable();
            $table->text('heading_vi')->nullable();
            $table->text('heading_en')->nullable();

            // Testimonial 1
            $table->string('testimonial_1_name')->nullable();
            $table->string('testimonial_1_position_vi')->nullable();
            $table->string('testimonial_1_position_en')->nullable();
            $table->string('testimonial_1_company')->nullable();
            $table->string('testimonial_1_avatar')->nullable();
            $table->text('testimonial_1_quote_vi')->nullable();
            $table->text('testimonial_1_quote_en')->nullable();
            $table->integer('testimonial_1_rating')->default(5);

            // Testimonial 2
            $table->string('testimonial_2_name')->nullable();
            $table->string('testimonial_2_position_vi')->nullable();
            $table->string('testimonial_2_position_en')->nullable();
            $table->string('testimonial_2_company')->nullable();
            $table->string('testimonial_2_avatar')->nullable();
            $table->text('testimonial_2_quote_vi')->nullable();
            $table->text('testimonial_2_quote_en')->nullable();
            $table->integer('testimonial_2_rating')->default(5);

            // Testimonial 3
            $table->string('testimonial_3_name')->nullable();
            $table->string('testimonial_3_position_vi')->nullable();
            $table->string('testimonial_3_position_en')->nullable();
            $table->string('testimonial_3_company')->nullable();
            $table->string('testimonial_3_avatar')->nullable();
            $table->text('testimonial_3_quote_vi')->nullable();
            $table->text('testimonial_3_quote_en')->nullable();
            $table->integer('testimonial_3_rating')->default(5);

            // Testimonial 4
            $table->string('testimonial_4_name')->nullable();
            $table->string('testimonial_4_position_vi')->nullable();
            $table->string('testimonial_4_position_en')->nullable();
            $table->string('testimonial_4_company')->nullable();
            $table->string('testimonial_4_avatar')->nullable();
            $table->text('testimonial_4_quote_vi')->nullable();
            $table->text('testimonial_4_quote_en')->nullable();
            $table->integer('testimonial_4_rating')->default(5);

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_testimonials_sections');
    }
};
