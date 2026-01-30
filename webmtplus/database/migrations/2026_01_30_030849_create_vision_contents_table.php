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
        Schema::create('vision_contents', function (Blueprint $table) {
            $table->id();
            $table->string('locale', 10)->unique();
            // Section Vision
            $table->string('section_subtitle')->nullable();
            $table->text('section_title')->nullable();
            $table->text('section_description')->nullable();
            $table->string('section_image')->nullable();
            $table->text('timeline_1')->nullable();
            $table->text('timeline_2')->nullable();
            $table->text('timeline_3')->nullable();
            $table->text('timeline_4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vision_contents');
    }
};
