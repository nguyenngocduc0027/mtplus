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
        Schema::create('team_members', function (Blueprint $table) {
            $table->id();

            // Basic Info
            $table->string('name');
            $table->string('position_vi');
            $table->string('position_en');
            $table->string('photo')->nullable();

            // Biography
            $table->text('bio_vi')->nullable();
            $table->text('bio_en')->nullable();

            // Social Links
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('instagram_url')->nullable();

            // Display Options
            $table->boolean('is_featured')->default(false); // CEO/Featured member
            $table->integer('order')->default(0); // Display order
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_members');
    }
};
