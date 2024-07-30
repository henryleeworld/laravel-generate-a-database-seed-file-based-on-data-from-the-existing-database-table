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
        Schema::create('taiwan_towing_fields', function (Blueprint $table) {
            $table->mediumInteger('id', true)->comment('編號');
            $table->string('city', 5)->comment('縣市');
            $table->string('name', 18)->comment('名稱');
            $table->string('address', 35)->comment('地址');
            $table->string('telephone_1', 12)->comment('電話 1');
            $table->string('telephone_2', 13)->nullable()->comment('電話 2');
            $table->string('telephone_3', 11)->nullable()->comment('電話 3');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taiwan_towing_fields');
    }
};
