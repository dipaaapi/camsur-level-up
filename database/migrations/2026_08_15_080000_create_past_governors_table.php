<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('past_governors', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('order_no')->unique();

            $table->string('name');
            $table->string('image_path')->nullable();

            $table->unsignedSmallInteger('term_start_year');
            $table->unsignedSmallInteger('term_end_year')->nullable();

            $table->json('party')->nullable(); // Array ng partido per term
            
            $table->string('era');
            $table->unsignedSmallInteger('era_start_year');
            $table->unsignedSmallInteger('era_end_year')->nullable();

            $table->unsignedTinyInteger('total_terms_served')->nullable();
            $table->unsignedTinyInteger('times_returned')->nullable();
            $table->unsignedTinyInteger('age_at_first_term')->nullable();
            $table->unsignedTinyInteger('age_at_return')->nullable();

            $table->longText('description_en')->nullable();
            $table->longText('description_tl')->nullable();
            $table->text('notes')->nullable(); // Positive distinctions

            $table->timestamps();

            $table->index(['term_start_year', 'term_end_year']);
            $table->index('era');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('past_governors');
    }
};
