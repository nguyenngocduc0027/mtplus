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
        Schema::create('home_awards_sections', function (Blueprint $table) {
            $table->id();

            // Header Section
            $table->string('subtitle_vi')->nullable();
            $table->string('subtitle_en')->nullable();
            $table->text('heading_vi')->nullable();
            $table->text('heading_en')->nullable();

            // Award 1
            $table->string('award_1_icon')->nullable();
            $table->string('award_1_year')->nullable();
            $table->string('award_1_title_vi')->nullable();
            $table->string('award_1_title_en')->nullable();

            // Award 2
            $table->string('award_2_icon')->nullable();
            $table->string('award_2_year')->nullable();
            $table->string('award_2_title_vi')->nullable();
            $table->string('award_2_title_en')->nullable();

            // Award 3
            $table->string('award_3_icon')->nullable();
            $table->string('award_3_year')->nullable();
            $table->string('award_3_title_vi')->nullable();
            $table->string('award_3_title_en')->nullable();

            // Award 4
            $table->string('award_4_icon')->nullable();
            $table->string('award_4_year')->nullable();
            $table->string('award_4_title_vi')->nullable();
            $table->string('award_4_title_en')->nullable();

            // Award 5
            $table->string('award_5_icon')->nullable();
            $table->string('award_5_year')->nullable();
            $table->string('award_5_title_vi')->nullable();
            $table->string('award_5_title_en')->nullable();

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_awards_sections');
    }
};
