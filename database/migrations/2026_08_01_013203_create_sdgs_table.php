<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sdgs', function (Blueprint $table) {
            $table->id();
            $table->integer('number')->unique();
            $table->string('code');
            $table->string('name');
            $table->text('un_meaning');
            $table->text('camsur_commitment');
            $table->json('key_targets')->nullable(); // Mga partikular na probisyon o prayoridad
            $table->string('color_hex');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sdgs');
    }
};