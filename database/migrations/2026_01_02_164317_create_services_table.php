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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('service_categories')->onDelete('cascade');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('tag')->nullable();
            $table->string('tag_color')->default('blue'); // blue, green, purple, orange, pink, etc.
            $table->string('icon')->default('fas fa-cog');
            $table->string('estimation')->nullable();
            $table->integer('price'); // Price in IDR (stored as integer)
            $table->string('price_display')->nullable(); // For display like "1.5JT"
            $table->string('price_unit')->default('IDR'); // IDR, /tugas, etc.
            $table->string('route_name'); // Laravel route name
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
