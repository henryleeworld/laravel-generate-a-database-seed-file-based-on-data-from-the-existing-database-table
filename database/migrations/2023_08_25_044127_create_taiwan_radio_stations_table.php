<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taiwan_radio_stations', function (Blueprint $table) {
            $table->mediumInteger('id', true)->comment('編號');
            $table->string('type', 2)->comment('訊號種類');
            $table->string('name', 22)->comment('名稱');
            $table->string('class', 4)->comment('電臺類別');
            $table->float('frequency', 5, 1)->comment('頻率（kHz）');
            $table->string('transmitter_address', 32)->comment('發射機地址');
            $table->decimal('longitude', 10, 6)->comment('經度');
            $table->decimal('latitude', 9, 6)->comment('緯度');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taiwan_radio_stations');
    }
};
