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
        // Add indexes to news table for better search performance
        Schema::table('news', function (Blueprint $table) {
            // Index for slug lookups (already unique, but explicitly indexed)
            if (!Schema::hasIndex('news', 'news_slug_index')) {
                $table->index('slug');
            }

            // Index for status and published_at (used in active/published scopes)
            if (!Schema::hasIndex('news', 'news_status_published_at_index')) {
                $table->index(['status', 'published_at']);
            }

            // Index for category_id (used in related news queries)
            if (!Schema::hasIndex('news', 'news_category_id_index')) {
                $table->index('category_id');
            }

            // Fulltext index for search (title and excerpt)
            if (!Schema::hasIndex('news', 'news_search_fulltext')) {
                $table->fulltext(['title_vi', 'title_en', 'excerpt_vi', 'excerpt_en'], 'news_search_fulltext');
            }

            // Index for featured news queries
            if (!Schema::hasIndex('news', 'news_is_featured_index')) {
                $table->index('is_featured');
            }
        });

        // Add indexes to news_categories table
        Schema::table('news_categories', function (Blueprint $table) {
            if (!Schema::hasIndex('news_categories', 'news_categories_slug_index')) {
                $table->index('slug');
            }

            if (!Schema::hasIndex('news_categories', 'news_categories_is_active_index')) {
                $table->index('is_active');
            }
        });

        // Add indexes to news_tags table
        Schema::table('news_tags', function (Blueprint $table) {
            if (!Schema::hasIndex('news_tags', 'news_tags_slug_index')) {
                $table->index('slug');
            }
        });

        // Add indexes to news_comments table
        Schema::table('news_comments', function (Blueprint $table) {
            if (!Schema::hasIndex('news_comments', 'news_comments_news_id_index')) {
                $table->index('news_id');
            }

            if (!Schema::hasIndex('news_comments', 'news_comments_parent_id_index')) {
                $table->index('parent_id');
            }

            if (!Schema::hasIndex('news_comments', 'news_comments_is_approved_index')) {
                $table->index('is_approved');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropIndex('news_slug_index');
            $table->dropIndex('news_status_published_at_index');
            $table->dropIndex('news_category_id_index');
            $table->dropFullText('news_search_fulltext');
            $table->dropIndex('news_is_featured_index');
        });

        Schema::table('news_categories', function (Blueprint $table) {
            $table->dropIndex('news_categories_slug_index');
            $table->dropIndex('news_categories_is_active_index');
        });

        Schema::table('news_tags', function (Blueprint $table) {
            $table->dropIndex('news_tags_slug_index');
        });

        Schema::table('news_comments', function (Blueprint $table) {
            $table->dropIndex('news_comments_news_id_index');
            $table->dropIndex('news_comments_parent_id_index');
            $table->dropIndex('news_comments_is_approved_index');
        });
    }
};
