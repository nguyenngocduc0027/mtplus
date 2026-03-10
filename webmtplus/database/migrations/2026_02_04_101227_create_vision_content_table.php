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
        Schema::create('vision_content', function (Blueprint $table) {
            $table->id();

            // Title fields (bilingual)
            $table->string('title_vi')->nullable();
            $table->string('title_en')->nullable();

            // Description fields (bilingual)
            $table->text('description_vi')->nullable();
            $table->text('description_en')->nullable();

            // Timeline fields (bilingual)
            $table->string('timeline_1_vi')->nullable();
            $table->string('timeline_1_en')->nullable();
            $table->string('timeline_2_vi')->nullable();
            $table->string('timeline_2_en')->nullable();
            $table->string('timeline_3_vi')->nullable();
            $table->string('timeline_3_en')->nullable();
            $table->string('timeline_4_vi')->nullable();
            $table->string('timeline_4_en')->nullable();

            // Main image
            $table->string('image_path')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vision_content');
    }
};
