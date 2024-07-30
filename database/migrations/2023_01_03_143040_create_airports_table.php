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
        Schema::create('airports', function (Blueprint $table) {
            $table->string('no', 7)->primary();
            $table->string('type', 14);
            $table->string('name', 80);
            $table->integer('elevation_ft')->nullable();
            $table->string('continent', 2);
            $table->string('iso_country', 2);
            $table->string('iso_region', 7);
            $table->string('municipality', 60)->nullable();
            $table->string('gps_code', 4)->nullable();
            $table->string('iata_code', 3)->nullable();
            $table->string('local_code', 7)->nullable();
            $table->string('coordinates', 43);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airports');
    }
};
