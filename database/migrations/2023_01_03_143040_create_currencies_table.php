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
        Schema::create('currencies', function (Blueprint $table) {
            $table->string('entity', 58);
            $table->string('currency', 65);
            $table->string('alphabetic_code', 3);
            $table->integer('numeric_code')->nullable();
            $table->string('minor_unit', 1)->nullable();
            $table->string('withdrawal_date', 18)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('currencies');
    }
};
