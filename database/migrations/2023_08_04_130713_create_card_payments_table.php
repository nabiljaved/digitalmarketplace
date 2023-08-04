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
        Schema::create('card_payments', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('message');
            $table->string('payment_id');
            $table->unsignedBigInteger('userid');
            $table->unsignedBigInteger('service_id');
            $table->integer('amount_captured');
            $table->float('service_charge');
            $table->float('coupon_charge')->nullable();
            $table->string('payment_method');
            $table->string('card_brand')->nullable();
            $table->string('card_country')->nullable();
            $table->string('currency');
            $table->timestamps();

               // Foreign key constraints
               $table->foreign('userid')->references('id')->on('users');
               // Add other foreign key constraints if necessary

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_payments');
    }
};
