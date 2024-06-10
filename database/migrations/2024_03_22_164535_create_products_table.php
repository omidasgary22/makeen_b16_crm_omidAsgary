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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('model');
            $table->string('ram');
            $table->string('graphics');
            $table->string('memory');
            $table->bigInteger('price');
<<<<<<< HEAD
           // $table->string('image_path')->nullable();
=======
            $table->string('image_path')->nullable();
>>>>>>> 8a75532e2b5e4731f0f64291fbcca5caa6c95c25
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
