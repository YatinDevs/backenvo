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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->date('date')->nullable()->index(); // Added index for faster queries
            $table->json('author')->nullable(); // Storing author details as JSON
            $table->string('reading_time')->nullable();
            $table->json('tags')->nullable();
            $table->json('categories')->nullable();
            $table->string('banner_image')->nullable();
            $table->json('meta')->nullable();
            $table->json('sections')->nullable();
            $table->json('faqs')->nullable();
            $table->json('related_blogs')->nullable();
            $table->json('comments')->nullable(); // Storing comments inside blogs
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
