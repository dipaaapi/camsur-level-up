<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('words_of_wisdom', function (Blueprint $table) {
            $table->id();
            $table->enum('category_type', ['all', 'government', 'private_local', 'overseas', 'spes'])->default('all');
            $table->text('quote');
            $table->string('author_or_source')->default('Provincial Government of Camarines Sur');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('words_of_wisdom');
    }
};
