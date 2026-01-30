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
        Schema::table('mission_contents', function (Blueprint $table) {
            $table->dropColumn([
                'section_1_subtitle',
                'section_1_title',
                'section_1_description',
                'section_1_image_main',
                'section_1_image_small',
                'counter_1_title',
                'counter_1_number',
                'counter_1_description',
                'counter_2_title',
                'counter_2_number',
                'counter_2_description',
                'counter_3_title',
                'counter_3_number',
                'counter_3_description',
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mission_contents', function (Blueprint $table) {
            $table->string('section_1_subtitle')->nullable();
            $table->text('section_1_title')->nullable();
            $table->text('section_1_description')->nullable();
            $table->string('section_1_image_main')->nullable();
            $table->string('section_1_image_small')->nullable();
            $table->string('counter_1_title')->nullable();
            $table->string('counter_1_number')->nullable();
            $table->string('counter_1_description')->nullable();
            $table->string('counter_2_title')->nullable();
            $table->string('counter_2_number')->nullable();
            $table->string('counter_2_description')->nullable();
            $table->string('counter_3_title')->nullable();
            $table->string('counter_3_number')->nullable();
            $table->string('counter_3_description')->nullable();
        });
    }
};
