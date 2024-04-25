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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('menu_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('image')->nullable();
            $table->string('name')->nullable();
            $table->string('name_in_he')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->decimal('price', 11, 2)->nullable();
            $table->decimal('sale_price', 11, 2)->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
