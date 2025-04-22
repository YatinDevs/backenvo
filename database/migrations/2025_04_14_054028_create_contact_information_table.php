<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contact_informations', function (Blueprint $table) {
            $table->id();
            
            // Contact Information
            $table->string('tel_number')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('email')->nullable();
            $table->string('whatsapp_number')->nullable();
            
            // Corporate Office
            $table->string('corporate_address_line1')->nullable();
            $table->string('corporate_address_line2')->nullable();
            $table->string('corporate_address_line3')->nullable();
            $table->string('corporate_address_line4')->nullable();
            $table->string('corporate_address_line5')->nullable();
            
            // Factory Address
            $table->string('factory_address_line1')->nullable();
            $table->string('factory_address_line2')->nullable();
            $table->string('factory_address_line3')->nullable();
            $table->string('factory_address_line4')->nullable();
            $table->string('factory_address_line5')->nullable();
            
            // Outlet Address
            $table->string('outlet_address_line1')->nullable();
            $table->string('outlet_address_line2')->nullable();
            $table->string('outlet_address_line3')->nullable();
            $table->string('outlet_address_line4')->nullable();
            $table->string('outlet_address_line5')->nullable();
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_informations');
    }
};