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
        Schema::create('genere_video_gioco', function (Blueprint $table) {
            $table->id();
            $table->foreignId('video_gioco_id')->constrained('video_giochi')->cascadeOnDelete();
            $table->foreignId('genere_id')->constrained('generi')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genere_video_gioco');
    }
};
