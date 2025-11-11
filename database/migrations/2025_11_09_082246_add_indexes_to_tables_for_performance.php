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
        // Add indexes to site_settings table
        Schema::table('site_settings', function (Blueprint $table) {
            $table->index('type');
            $table->index('group');
        });

        // Add indexes to before_afters table
        Schema::table('before_afters', function (Blueprint $table) {
            $table->index('is_active');
            $table->index('display_order');
            $table->index(['is_active', 'display_order']);
        });

        // Add indexes to testimonials table if exists
        if (Schema::hasTable('testimonials')) {
            Schema::table('testimonials', function (Blueprint $table) {
                if (!Schema::hasColumn('testimonials', 'is_approved_index')) {
                    $table->index('is_approved');
                    $table->index('featured');
                    $table->index('display_order');
                    $table->index(['is_approved', 'featured', 'display_order'], 'testimonials_composite_idx');
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('site_settings', function (Blueprint $table) {
            $table->dropIndex(['type']);
            $table->dropIndex(['group']);
        });

        Schema::table('before_afters', function (Blueprint $table) {
            $table->dropIndex(['is_active']);
            $table->dropIndex(['display_order']);
            $table->dropIndex(['is_active', 'display_order']);
        });

        if (Schema::hasTable('testimonials')) {
            Schema::table('testimonials', function (Blueprint $table) {
                $table->dropIndex(['is_approved']);
                $table->dropIndex(['featured']);
                $table->dropIndex(['display_order']);
                $table->dropIndex('testimonials_composite_idx');
            });
        }
    }
};
