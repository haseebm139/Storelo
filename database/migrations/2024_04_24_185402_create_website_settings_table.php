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
        Schema::create('website_settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->longText('working_hours')->nullable();
            $table->longText('working_hours_in_hebrew')->nullable();
            $table->longText('contact')->nullable();
            $table->longText('email')->nullable();
            $table->longText('website_url')->nullable();
            $table->longText('address')->nullable();
            $table->longText('address_in_hebrew')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_settings');
    }
};
