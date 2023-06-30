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
        Schema::create('taiwan_speed_cameras', function (Blueprint $table) {
            $table->mediumInteger('id', true)->comment('編號');
            $table->string('speed_limit', 3)->comment('速限');
            $table->string('direction', 12)->comment('拍攝方向');
            $table->string('city', 4)->nullable()->comment('設置縣市');
            $table->string('region', 9)->nullable()->comment('設置市區鄉鎮');
            $table->string('address', 48)->comment('設置地址');
            $table->string('police_department', 8)->comment('管轄警局');
            $table->string('police_precinct', 8)->nullable()->comment('管轄分局');
            $table->decimal('longitude', 11, 7)->comment('經度');
            $table->decimal('latitude', 11, 8)->comment('緯度');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taiwan_speed_cameras');
    }
};
