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
        Schema::create('mission_content', function (Blueprint $table) {
            $table->id();

            // Title fields (bilingual)
            $table->string('title_vi')->nullable();
            $table->string('title_en')->nullable();

            // Description fields (bilingual)
            $table->text('description_vi')->nullable();
            $table->text('description_en')->nullable();

            // Feature fields (bilingual)
            $table->string('feature_1_vi')->nullable();
            $table->string('feature_1_en')->nullable();
            $table->string('feature_2_vi')->nullable();
            $table->string('feature_2_en')->nullable();
            $table->string('feature_3_vi')->nullable();
            $table->string('feature_3_en')->nullable();
            $table->string('feature_4_vi')->nullable();
            $table->string('feature_4_en')->nullable();

            // Background image
            $table->string('background_image_path')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mission_content');
    }
};
