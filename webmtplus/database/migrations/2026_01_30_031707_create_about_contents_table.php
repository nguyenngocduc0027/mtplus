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
        Schema::create('about_contents', function (Blueprint $table) {
            $table->id();
            $table->string('locale', 10)->unique();
            // About Section
            $table->string('subtitle')->nullable();
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->string('image_main')->nullable();
            $table->string('image_small')->nullable();
            // Counter Cards
            $table->string('counter_1_title')->nullable();
            $table->string('counter_1_number')->nullable();
            $table->string('counter_1_description')->nullable();
            $table->string('counter_2_title')->nullable();
            $table->string('counter_2_number')->nullable();
            $table->string('counter_2_description')->nullable();
            $table->string('counter_3_title')->nullable();
            $table->string('counter_3_number')->nullable();
            $table->string('counter_3_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_contents');
    }
};
