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
        Schema::create('capabilities_content', function (Blueprint $table) {
            $table->id();

            // Section 1: Title section
            $table->string('section_1_title_vi')->nullable();
            $table->string('section_1_title_en')->nullable();

            // Section 2: 4 Features with icons
            // Feature 1
            $table->string('feature_1_icon_path')->nullable();
            $table->string('feature_1_title_vi')->nullable();
            $table->string('feature_1_title_en')->nullable();
            $table->text('feature_1_description_vi')->nullable();
            $table->text('feature_1_description_en')->nullable();

            // Feature 2
            $table->string('feature_2_icon_path')->nullable();
            $table->string('feature_2_title_vi')->nullable();
            $table->string('feature_2_title_en')->nullable();
            $table->text('feature_2_description_vi')->nullable();
            $table->text('feature_2_description_en')->nullable();

            // Feature 3
            $table->string('feature_3_icon_path')->nullable();
            $table->string('feature_3_title_vi')->nullable();
            $table->string('feature_3_title_en')->nullable();
            $table->text('feature_3_description_vi')->nullable();
            $table->text('feature_3_description_en')->nullable();

            // Feature 4
            $table->string('feature_4_icon_path')->nullable();
            $table->string('feature_4_title_vi')->nullable();
            $table->string('feature_4_title_en')->nullable();
            $table->text('feature_4_description_vi')->nullable();
            $table->text('feature_4_description_en')->nullable();

            // Section 3: Experience section
            $table->string('main_image_path')->nullable();
            $table->string('thumbnail_image_path')->nullable();
            $table->string('section_3_title_vi')->nullable();
            $table->string('section_3_title_en')->nullable();
            $table->text('section_3_description_vi')->nullable();
            $table->text('section_3_description_en')->nullable();

            // Progress bars
            $table->string('progress_1_title_vi')->nullable();
            $table->string('progress_1_title_en')->nullable();
            $table->integer('progress_1_percentage')->default(0);

            $table->string('progress_2_title_vi')->nullable();
            $table->string('progress_2_title_en')->nullable();
            $table->integer('progress_2_percentage')->default(0);

            $table->string('progress_3_title_vi')->nullable();
            $table->string('progress_3_title_en')->nullable();
            $table->integer('progress_3_percentage')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capabilities_content');
    }
};
