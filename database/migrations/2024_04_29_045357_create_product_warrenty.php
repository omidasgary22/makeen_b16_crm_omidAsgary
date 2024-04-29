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
            $table->foreignId('product_id')->constrained();
            $table->foreignId('warrenty_id')->constrained();
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
