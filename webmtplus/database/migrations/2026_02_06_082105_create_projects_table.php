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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title_vi');
            $table->string('title_en');
            $table->string('slug')->unique();
            $table->string('project_number')->nullable();
            $table->string('status')->default('in_progress'); // in_progress, completed
            $table->string('project_type_vi')->nullable();
            $table->string('project_type_en')->nullable();
            $table->date('commencement_date')->nullable();
            $table->date('completion_date')->nullable();
            $table->text('short_description_vi')->nullable();
            $table->text('short_description_en')->nullable();
            $table->longText('description_vi')->nullable();
            $table->longText('description_en')->nullable();
            $table->string('main_image')->nullable();
            $table->json('gallery_images')->nullable();
            $table->json('features_vi')->nullable();
            $table->json('features_en')->nullable();
            $table->string('location_vi')->nullable();
            $table->string('location_en')->nullable();
            $table->string('client_name')->nullable();
            $table->decimal('budget', 15, 2)->nullable();
            $table->string('area')->nullable(); // e.g., "5000 m2"
            $table->integer('order')->default(0);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->index('slug');
            $table->index('status');
            $table->index(['is_active', 'is_featured']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
