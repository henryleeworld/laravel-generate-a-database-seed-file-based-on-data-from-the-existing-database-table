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
        Schema::create('taiwan_buskers', function (Blueprint $table) {
            $table->mediumInteger('id', true)->comment('編號');
            $table->string('city', 3)->comment('縣市');
            $table->string('name', 24)->comment('名稱');
            $table->string('theme', 259)->comment('展演項目主題');
            $table->string('act_type', 4)->comment('藝文活動類別');
            $table->string('image_url', 151)->nullable()->comment('圖片網址');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taiwan_buskers');
    }
};
