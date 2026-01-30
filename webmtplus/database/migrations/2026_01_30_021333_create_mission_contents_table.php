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
        Schema::create('mission_contents', function (Blueprint $table) {
            $table->id();
            // Section 1 - About
            $table->text('section_1_title')->nullable();
            $table->text('section_1_description')->nullable();
            $table->string('section_1_image_main')->nullable(); // Ảnh chính about-img-1.jpg
            $table->string('section_1_image_small')->nullable(); // Ảnh nhỏ about-bg-1.jpg
            $table->string('counter_1_title')->nullable();
            $table->string('counter_1_number')->nullable();
            $table->string('counter_1_description')->nullable();
            $table->string('counter_2_title')->nullable();
            $table->string('counter_2_number')->nullable();
            $table->string('counter_2_description')->nullable();
            $table->string('counter_3_title')->nullable();
            $table->string('counter_3_number')->nullable();
            $table->string('counter_3_description')->nullable();
            // Section 2 - Mission
            $table->text('section_2_title')->nullable();
            $table->text('section_2_description')->nullable();
            $table->string('section_2_image')->nullable(); // Ảnh nền section mission
            $table->string('feature_1')->nullable();
            $table->string('feature_2')->nullable();
            $table->string('feature_3')->nullable();
            $table->string('feature_4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mission_contents');
    }
};
