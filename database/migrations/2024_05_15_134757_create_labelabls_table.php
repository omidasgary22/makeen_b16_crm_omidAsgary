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
        Schema::create('labelabls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('label_id');
            $table->foreign('label_id')->on('labels')->references('id')->onDelete('cascade');
            $table->morphs('labelabl');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('labelabls');
    }
};
