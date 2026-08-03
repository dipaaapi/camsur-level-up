<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('press_releases', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt');
            $table->longText('content')->nullable();
            $table->string('author'); // Office / Department Name
            $table->string('category'); // e.g. Governance, Health, Infrastructure
            $table->json('sdgs'); // Array of SDGs e.g. ["SDG 9: Innovation", "SDG 16: Governance"]
            $table->string('image')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->timestamp('published_at');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('press_releases');
    }
};