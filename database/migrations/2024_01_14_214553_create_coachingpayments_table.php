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
        Schema::create('coachingpayments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('coaching_id');
            $table->string('name');
            $table->string('skype_id');
            $table->string('discord_username');
            $table->string('available_time');
            $table->text('account_data');
            $table->string('payment_method');
            $table->string('total_amount');
            $table->string('order_status');
            $table->foreign('coaching_id')->references('id')->on('coachings');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coachingpayments');
    }
};
