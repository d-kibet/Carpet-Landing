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
        Schema::table('gallery_media', function (Blueprint $table) {
            // Change category from enum to string for more flexibility
            $table->string('category')->default('carpet')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gallery_media', function (Blueprint $table) {
            // Revert back to enum (not recommended to run this)
            $table->enum('category', ['carpet', 'laundry', 'facility', 'before_after'])->default('carpet')->change();
        });
    }
};
