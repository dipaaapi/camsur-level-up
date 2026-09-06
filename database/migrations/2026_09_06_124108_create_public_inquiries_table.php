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
        Schema::create('public_inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('page_context')->default('General'); // e.g. Mission and Vision, Profile, etc.
            $table->string('subject_title');
            $table->enum('feedback_type', ['comment', 'suggestion', 'complaint', 'inquiry'])->default('inquiry');
            $table->string('category')->default('general_inquiry');
            $table->string('sender_name')->nullable();
            $table->string('location_sector');
            $table->text('message');
            $table->string('attachment_path')->nullable();
            $table->string('attachment_name')->nullable();
            $table->enum('status', ['pending', 'under_review', 'resolved', 'archived'])->default('pending');
            $table->text('admin_notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('public_inquiries');
    }
};
