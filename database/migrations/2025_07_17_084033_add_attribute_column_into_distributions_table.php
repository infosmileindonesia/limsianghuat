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
        Schema::table('distributions', function (Blueprint $table) {
            $table->json('attribute')->nullable()->after('description')->comment('Additional attributes for the distribution');
        });

        // Add any additional logic needed after adding the column
        // For example, you might want to set a default value or migrate existing data
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('distributions', function (Blueprint $table) {
            $table->dropColumn('attribute');
        });

        // Add any additional logic needed after removing the column
        // For example, you might want to clean up or revert any changes made during the up method
    }
};
