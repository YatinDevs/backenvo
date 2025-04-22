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
        Schema::create('video_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('paragraph1');
            $table->text('paragraph2');
            $table->text('paragraph3');
            $table->string('video_type')->default('youtube'); // 'youtube' or 'upload'
            $table->string('youtube_id')->nullable();
            $table->string('uploaded_video_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_sections');
    }
};
