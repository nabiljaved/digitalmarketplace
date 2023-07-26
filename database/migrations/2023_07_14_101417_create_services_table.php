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
            $table->string('service_title');
            $table->decimal('service_price');
            $table->decimal('service_previous_price');
            $table->unsignedBigInteger('service_category');
            $table->string('service_slug')->unique();
            $table->foreign('service_category')->references('id')->on('categories');
            $table->boolean('service_isFeatured')->default(false);
            $table->boolean('service_isPopular')->default(false);
            $table->enum('service_status', ['pending', 'not active', 'active'])->default('pending');
            $table->text('service_detail');
            $table->text('service_url');
            $table->json('selected_images');
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
