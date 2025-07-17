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
        Schema::create('career_areas', function (Blueprint $table) {
            $table->id();
            $table->json('name')->comment('Career area name');
            $table->json('slug')->comment('Career area slug for URL');
            $table->timestamps();
        });

        // Morph many relationship table
        Schema::create('career_area_career', function (Blueprint $table) {
            $table->id();
            $table->foreignId('career_id')->constrained('careers')->onDelete('cascade');
            $table->foreignId('career_area_id')->constrained('career_areas')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::dropIfExists('career_areas');
        Schema::dropIfExists('career_area_career');

        Schema::enableForeignKeyConstraints();
    }
};
