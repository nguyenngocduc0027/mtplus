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
        Schema::table('home_hero_sections', function (Blueprint $table) {
            $table->dropColumn(['subtitle_icon', 'circle_text_image']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('home_hero_sections', function (Blueprint $table) {
            $table->string('subtitle_icon')->default('/frontend/assets/img/icons/star-2.svg');
            $table->string('circle_text_image')->default('/frontend/assets/img/hero/circle-text-1.svg');
        });
    }
};
