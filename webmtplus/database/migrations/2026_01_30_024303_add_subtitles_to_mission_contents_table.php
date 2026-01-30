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
            $table->string('section_1_subtitle')->nullable()->after('section_1_title');
            $table->string('section_2_subtitle')->nullable()->after('section_2_title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mission_contents', function (Blueprint $table) {
            $table->dropColumn(['section_1_subtitle', 'section_2_subtitle']);
        });
    }
};
