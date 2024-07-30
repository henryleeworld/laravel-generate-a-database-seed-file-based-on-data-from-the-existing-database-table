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
        Schema::create('taiwan_reservoirs', function (Blueprint $table) {
            $table->integer('id')->primary()->comment('編號');
            $table->string('name', 6)->comment('名稱');
            $table->string('rivers', 23)->comment('河川');
            $table->string('areas', 14)->comment('鄉鎮市區');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taiwan_reservoirs');
    }
};
