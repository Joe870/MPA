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
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('songName');
            $table->integer('durationLength');
            $table->string('artist_name');
            $table->foreignId('genres_id');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};


