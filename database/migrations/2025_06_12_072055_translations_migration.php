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
        Schema::table('banners', function (Blueprint $table) {
            $table->text('title')->nullable()->change();
            $table->text('button_text')->nullable()->change();
        });

        Schema::table('testimonials', function (Blueprint $table) {
            $table->text('name')->nullable()->change();
            $table->text('position')->nullable()->change();
            $table->text('company')->nullable()->change();
            $table->text('content')->nullable()->change();
            $table->text('image')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->text('title')->change();
            $table->text('button_text')->change();
        });

        Schema::table('testimonials', function (Blueprint $table) {
            $table->text('name')->change();
            $table->text('position')->change();
            $table->text('company')->change();
            $table->text('content')->change();
            $table->text('image')->change();
        });
    }
};
