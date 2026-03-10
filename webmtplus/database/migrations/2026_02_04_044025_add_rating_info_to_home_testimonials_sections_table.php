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
        Schema::table('home_testimonials_sections', function (Blueprint $table) {
            // Rating Box Info
            $table->string('rating_score')->default('4.8')->after('heading_en');
            $table->string('customer_count')->default('300+')->after('rating_score');
            $table->string('customer_text_vi')->default('Khách hàng hài lòng')->after('customer_count');
            $table->string('customer_text_en')->default('Satisfied Customers')->after('customer_text_vi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('home_testimonials_sections', function (Blueprint $table) {
            $table->dropColumn(['rating_score', 'customer_count', 'customer_text_vi', 'customer_text_en']);
        });
    }
};
