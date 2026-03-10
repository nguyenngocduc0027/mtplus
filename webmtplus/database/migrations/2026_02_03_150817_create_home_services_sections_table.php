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
        Schema::create('home_services_sections', function (Blueprint $table) {
            $table->id();

            // Header Section
            $table->string('subtitle_vi')->nullable();
            $table->string('subtitle_en')->nullable();
            $table->text('heading_vi')->nullable();
            $table->text('heading_en')->nullable();

            // Service Card 1
            $table->string('service_1_title_vi')->nullable();
            $table->string('service_1_title_en')->nullable();
            $table->text('service_1_desc_vi')->nullable();
            $table->text('service_1_desc_en')->nullable();
            $table->string('service_1_image')->nullable();
            $table->string('service_1_url')->nullable();

            // Service Card 2
            $table->string('service_2_title_vi')->nullable();
            $table->string('service_2_title_en')->nullable();
            $table->text('service_2_desc_vi')->nullable();
            $table->text('service_2_desc_en')->nullable();
            $table->string('service_2_image')->nullable();
            $table->string('service_2_url')->nullable();

            // Service Card 3
            $table->string('service_3_title_vi')->nullable();
            $table->string('service_3_title_en')->nullable();
            $table->text('service_3_desc_vi')->nullable();
            $table->text('service_3_desc_en')->nullable();
            $table->string('service_3_image')->nullable();
            $table->string('service_3_url')->nullable();

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_services_sections');
    }
};
