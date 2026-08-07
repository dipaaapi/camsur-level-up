<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('job_postings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('department_or_company');
            $table->enum('type', ['government', 'private_local', 'overseas', 'spes']);
            $table->string('location')->nullable()->default('Camarines Sur');
            $table->string('employment_type')->nullable()->default('Full-time');

            // Civil Service Eligibility: True/False flag (Applicable for Government posts)
            $table->boolean('csc_eligibility_required')->default(false);

            $table->text('description');
            $table->text('requirements')->nullable(); // Optional detailed requirements (bullets/list)
            $table->string('application_link_or_email')->nullable(); // Email, Contact Number, or Direct Link
            $table->string('image')->nullable(); // Optional Image Banner / Pubmat path

            // Date-based dynamic active status
            $table->timestamp('posted_at')->useCurrent();
            $table->dateTime('deadline')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_postings');
    }
};
