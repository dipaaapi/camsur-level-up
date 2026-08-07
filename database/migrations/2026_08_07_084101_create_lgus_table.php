<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lgus', function (Blueprint $table) {
            $table->id();
            $table->string('lgu_id')->unique(); // e.g. 'cabusao', 'pili', 'naga'
            $table->string('name');
            $table->string('district'); // e.g. '1st District', '2nd District'
            $table->string('class'); // e.g. '1st Class Municipality'
            $table->string('area'); // e.g. '342.82 km²'
            $table->string('pop'); // e.g. '116,100'
            $table->text('map_url');
            $table->string('seal');
            $table->integer('evac_centers')->default(2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lgus');
    }
};
