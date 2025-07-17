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
        Schema::create('career_levels', function (Blueprint $table) {
            $table->id();
            $table->json('name')->comment('Career level name');
            $table->json('slug')->comment('Career level slug for URL');
            $table->timestamps();
        });

        // Morph many relationship table
        Schema::create('career_level_career', function (Blueprint $table) {
            $table->id();
            $table->foreignId('career_id')->constrained('careers')->onDelete('cascade');
            $table->foreignId('career_level_id')->constrained('career_levels')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::dropIfExists('career_levels');
        Schema::dropIfExists('career_level_career');

        Schema::enableForeignKeyConstraints();
    }
};
