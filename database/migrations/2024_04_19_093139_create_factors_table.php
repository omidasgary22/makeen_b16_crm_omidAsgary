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
        Schema::create('factors', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('user_id')->constrained()->restrictOnDelete()->restrictOnUpdate();
            $table->integer('Product_Code');
            $table->string('Description_of_goods');
            $table->string('Amount');
           $table->unsignedBigInteger('user_id');
           $table->unsignedBigInteger('order_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factors');
    }
};
