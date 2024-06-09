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
        Schema::create('product_warrenty', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->foreign("product_id")->on('products')->references('id')->onDelete('cascade');
            $table->unsignedBigInteger('warrenty_id');
            $table->foreign("warrenty_id")->on('warrenties')->references('id')->onDelete('cascade');
            $table->unique(['product_id', 'warrenty_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_warrenty');
    }
};
