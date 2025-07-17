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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->json('title')->comment('Job title');
            $table->json('slug')->comment('Job slug for URL');
            $table->json('description')->comment('Job description');
            $table->string('department_id')->comment('Department ID');
            $table->boolean('is_full_time')->default(true)->comment('Is the job full-time?');
            $table->boolean('is_active')->default(true)->comment('Is the job active?');
            $table->string('job_url')->nullable()->comment('External job application URL');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
