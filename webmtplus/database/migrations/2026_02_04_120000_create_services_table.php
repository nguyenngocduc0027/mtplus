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
        Schema::create('services', function (Blueprint $table) {
            $table->id();

            // Title
            $table->string('title_vi');
            $table->string('title_en');
            $table->string('slug')->unique();

            // Short Description
            $table->string('short_description_vi', 255)->nullable();
            $table->string('short_description_en', 255)->nullable();

            // Content (for TinyMCE)
            $table->longText('content_vi')->nullable();
            $table->longText('content_en')->nullable();


            // Settings
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
