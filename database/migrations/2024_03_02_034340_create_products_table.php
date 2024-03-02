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
            $table->string('name');
            $table->enum('category_name', ['MICRONUTRIENTS', 'BIO-PESTICIDES', 'PESTICIDES'])->nullable()->default(null);
            $table->enum('menu_position', ['col1', 'col2', 'col3', 'col4'])->nullable()->default(null);
            $table->string('image');
            $table->string('micronutrient')->nullable()->default(null);
            $table->longText('major_ingredients')->nullable()->default(null);
            $table->longText('role_and_function')->nullable()->default(null);
            $table->string('use_recommendation')->nullable()->default(null);
            $table->string('available_pack')->nullable()->default(null);
            $table->longText('description')->nullable()->default(null);
            $table->boolean('status')->default(true);
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
