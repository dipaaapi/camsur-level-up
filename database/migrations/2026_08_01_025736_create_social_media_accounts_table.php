<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('social_media_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('platform');
            $table->string('office_name');
            $table->string('handle');
            $table->string('url');
            $table->text('description');
            $table->string('followers_count');
            $table->string('badge_category');
            $table->string('avatar_url')->nullable(); // 🌟 Logo URL Image Link
            $table->string('color_hex')->default('#1877F2');
            $table->boolean('is_verified')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('social_media_accounts');
    }
};