<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('provincial_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('section_key')->unique(); // e.g., overview, history, vision, mission, geography, economy
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('content');
            $table->json('quick_facts')->nullable(); // Key-value data (Capital, Land Area, Municipalities, etc.)
            $table->string('image_path')->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('provincial_profiles');
    }
};