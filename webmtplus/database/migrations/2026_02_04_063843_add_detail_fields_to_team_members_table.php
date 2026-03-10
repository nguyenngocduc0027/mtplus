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
        Schema::table('team_members', function (Blueprint $table) {
            // Detailed Position
            $table->string('detailed_position_vi')->nullable()->after('position_en');
            $table->string('detailed_position_en')->nullable()->after('detailed_position_vi');

            // Experience & Location
            $table->integer('experience_years')->nullable()->after('detailed_position_en');
            $table->string('location_vi')->nullable()->after('experience_years');
            $table->string('location_en')->nullable()->after('location_vi');
            $table->string('field_of_activity_vi')->nullable()->after('location_en');
            $table->string('field_of_activity_en')->nullable()->after('field_of_activity_vi');

            // Contact Details
            $table->text('address')->nullable()->after('field_of_activity_en');
            $table->string('phone')->nullable()->after('address');
            $table->string('email')->nullable()->after('phone');
            $table->string('fax')->nullable()->after('email');

            // Detailed Content
            $table->text('detailed_bio_vi')->nullable()->after('bio_en');
            $table->text('detailed_bio_en')->nullable()->after('detailed_bio_vi');
            $table->json('specialties_vi')->nullable()->after('detailed_bio_en'); // Array of specialties
            $table->json('specialties_en')->nullable()->after('specialties_vi');
            $table->json('experience_list_vi')->nullable()->after('specialties_en'); // Array of experience items
            $table->json('experience_list_en')->nullable()->after('experience_list_vi');

            // Slug for detail page URL
            $table->string('slug')->unique()->nullable()->after('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('team_members', function (Blueprint $table) {
            $table->dropColumn([
                'slug',
                'detailed_position_vi',
                'detailed_position_en',
                'experience_years',
                'location_vi',
                'location_en',
                'field_of_activity_vi',
                'field_of_activity_en',
                'address',
                'phone',
                'email',
                'fax',
                'detailed_bio_vi',
                'detailed_bio_en',
                'specialties_vi',
                'specialties_en',
                'experience_list_vi',
                'experience_list_en',
            ]);
        });
    }
};
