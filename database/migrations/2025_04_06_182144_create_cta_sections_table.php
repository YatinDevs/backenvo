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
        Schema::create('cta_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->string('phone_number');
            $table->string('phone_hours');
            $table->string('image_url');
            $table->string('call_button_text')->default('CALL');
            $table->string('contact_button_text')->default('CONTACT US');
            $table->string('contact_button_link')->default('/contactus');
            $table->string('background_color')->default('bg-blue-800');
            $table->string('text_color')->default('text-white');
            $table->string('hover_color')->default('hover:bg-white hover:text-blue-800');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cta_sections');
    }
};
