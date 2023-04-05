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
        Schema::create('taiwan_zip_codes', function (Blueprint $table) {
            $table->increments('id')->comment('編號');
            $table->integer('zip_code')->comment('郵遞區號');
            $table->string('city', 3)->comment('縣市名稱');
            $table->string('area', 4)->comment('鄉鎮市區');
            $table->string('road', 15)->comment('原始路名');
            $table->string('scope', 23)->comment('投遞範圍');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taiwan_zip_codes');
    }
};
