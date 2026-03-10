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
        Schema::create('home_project_sections', function (Blueprint $table) {
            $table->id();

            // Header Section - Only subtitle and heading, projects will be from separate table
            $table->string('subtitle_vi')->nullable();
            $table->string('subtitle_en')->nullable();
            $table->text('heading_vi')->nullable();
            $table->text('heading_en')->nullable();

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_project_sections');
    }
};
