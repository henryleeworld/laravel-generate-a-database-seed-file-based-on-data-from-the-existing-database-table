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
        Schema::create('world_cities', function (Blueprint $table) {
            $table->string('name', 49);
            $table->string('country', 44);
            $table->string('sub_country', 56)->nullable();
            $table->integer('geo_name_id')->primary();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('world_cities');
    }
};