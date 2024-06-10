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
<<<<<<<< HEAD:database/migrations/2024_05_15_134757_create_labelabls_table.php
        Schema::create('labelabls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('label_id');
            $table->foreign('label_id')->on('labels')->references('id')->onDelete('cascade');
            $table->morphs('labelabl');
========
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('file_name');
            $table->string('type');
            $table->integer('size');
            $table->string('ext');
>>>>>>>> 8a75532e2b5e4731f0f64291fbcca5caa6c95c25:database/migrations/2024_05_16_104301_create_media_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<<< HEAD:database/migrations/2024_05_15_134757_create_labelabls_table.php
        Schema::dropIfExists('labelabls');
========
        Schema::dropIfExists('media');
>>>>>>>> 8a75532e2b5e4731f0f64291fbcca5caa6c95c25:database/migrations/2024_05_16_104301_create_media_table.php
    }
};
