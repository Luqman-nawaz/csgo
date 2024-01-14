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
        Schema::create('boosts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('boost_id');
            $table->string('boost_type');
            $table->string('current_level');
            $table->string('desired_level');
            $table->boolean('solo_play');
            $table->boolean('priority_order');
            $table->boolean('play_with_booster');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('boost_id')->references('id')->on('boosttypes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boosts');
    }
};
