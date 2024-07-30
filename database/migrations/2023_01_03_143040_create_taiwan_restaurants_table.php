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
        Schema::create('taiwan_restaurants', function (Blueprint $table) {
            $table->string('id', 20)->primary();
            $table->string('name', 45);
            $table->string('description', 815);
            $table->string('address', 42);
            $table->integer('zip_code')->nullable();
            $table->string('region', 3)->nullable();
            $table->string('town', 4)->nullable();
            $table->string('telephone', 36);
            $table->string('open_time', 203)->nullable();
            $table->string('website', 122)->nullable();
            $table->string('picture_1', 115)->nullable();
            $table->string('picture_description_1', 200)->nullable();
            $table->string('picture_2', 115)->nullable();
            $table->string('picture_description_2', 165)->nullable();
            $table->string('picture_3', 115)->nullable();
            $table->string('picture_description_3', 166)->nullable();
            $table->decimal('latitude', 10, 6);
            $table->decimal('longitude', 9, 6);
            $table->integer('class')->nullable();
            $table->string('map', 100)->nullable();
            $table->string('parking', 93)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taiwan_restaurants');
    }
};
