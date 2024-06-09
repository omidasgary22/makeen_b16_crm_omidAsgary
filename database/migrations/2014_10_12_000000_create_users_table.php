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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id')->constrained()->restrictOnDelete()->restrictOnUpdate();
            $table->string('first_name');
            $table->string('last_name');
            $table->bigInteger('phone_number');
            $table->string('email')->unique();
            $table->string('Country');
            $table->enum('gender',['زن','مرد']);
            $table->string('Address');
            $table->string('password');
            $table->string('image_user');
            $table->unsignedBigInteger('team_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
