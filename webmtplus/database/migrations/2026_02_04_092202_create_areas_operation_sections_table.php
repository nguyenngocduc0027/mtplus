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
        Schema::create('areas_operation_sections', function (Blueprint $table) {
            $table->id();

            // Section identification
            $table->integer('section_number'); // 1, 2, or 3
            $table->enum('image_layout', ['left', 'right'])->default('left');

            // Images
            $table->string('main_image_path')->nullable();
            $table->string('thumbnail_image_path')->nullable();

            // Header content (bilingual)
            $table->string('subtitle_vi')->nullable();
            $table->string('subtitle_en')->nullable();
            $table->string('title_vi')->nullable();
            $table->string('title_en')->nullable();
            $table->text('description_vi')->nullable();
            $table->text('description_en')->nullable();

            // Card content (bilingual)
            $table->string('card_1_text_vi')->nullable();
            $table->string('card_1_text_en')->nullable();
            $table->string('card_2_text_vi')->nullable();
            $table->string('card_2_text_en')->nullable();
            $table->string('card_3_text_vi')->nullable();
            $table->string('card_3_text_en')->nullable();

            $table->timestamps();

            // Ensure unique section numbers
            $table->unique('section_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('areas_operation_sections');
    }
};
