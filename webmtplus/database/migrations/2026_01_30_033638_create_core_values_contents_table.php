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
        Schema::create('core_values_contents', function (Blueprint $table) {
            $table->id();
            $table->string('locale', 10)->unique();
            $table->string('section_subtitle')->nullable();
            $table->text('section_title')->nullable();
            // Value 1
            $table->string('value_1_title')->nullable();
            $table->text('value_1_description')->nullable();
            $table->string('value_1_icon')->nullable();
            // Value 2
            $table->string('value_2_title')->nullable();
            $table->text('value_2_description')->nullable();
            $table->string('value_2_icon')->nullable();
            // Value 3
            $table->string('value_3_title')->nullable();
            $table->text('value_3_description')->nullable();
            $table->string('value_3_icon')->nullable();
            // Value 4
            $table->string('value_4_title')->nullable();
            $table->text('value_4_description')->nullable();
            $table->string('value_4_icon')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('core_values_contents');
    }
};
