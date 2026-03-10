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
        Schema::create('core_values_content', function (Blueprint $table) {
            $table->id();

            // Section subtitle and title (bilingual)
            $table->string('section_subtitle_vi')->nullable();
            $table->string('section_subtitle_en')->nullable();
            $table->string('section_title_vi')->nullable();
            $table->string('section_title_en')->nullable();

            // Value 1 fields (bilingual)
            $table->string('value_1_title_vi')->nullable();
            $table->string('value_1_title_en')->nullable();
            $table->string('value_1_icon')->nullable();
            $table->text('value_1_description_vi')->nullable();
            $table->text('value_1_description_en')->nullable();

            // Value 2 fields (bilingual)
            $table->string('value_2_title_vi')->nullable();
            $table->string('value_2_title_en')->nullable();
            $table->string('value_2_icon')->nullable();
            $table->text('value_2_description_vi')->nullable();
            $table->text('value_2_description_en')->nullable();

            // Value 3 fields (bilingual)
            $table->string('value_3_title_vi')->nullable();
            $table->string('value_3_title_en')->nullable();
            $table->string('value_3_icon')->nullable();
            $table->text('value_3_description_vi')->nullable();
            $table->text('value_3_description_en')->nullable();

            // Value 4 fields (bilingual)
            $table->string('value_4_title_vi')->nullable();
            $table->string('value_4_title_en')->nullable();
            $table->string('value_4_icon')->nullable();
            $table->text('value_4_description_vi')->nullable();
            $table->text('value_4_description_en')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('core_values_content');
    }
};
