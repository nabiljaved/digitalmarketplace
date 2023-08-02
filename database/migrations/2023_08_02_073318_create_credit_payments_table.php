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
        Schema::create('credit_payments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('address');
            $table->string('phone');
            $table->date('date');
            $table->decimal('totalPrice', 8, 2);
            $table->string('servicetitle');
            $table->unsignedBigInteger('user_id');
            $table->decimal('service_charge', 8, 2);
            $table->decimal('coupon_charge', 8, 2)->nullable();
            $table->unsignedBigInteger('service_id'); 

            $table->timestamps();

            // Define foreign key constraint for user_id column
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credit_payments');
    }
};
