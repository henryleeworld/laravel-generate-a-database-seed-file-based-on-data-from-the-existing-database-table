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
        Schema::create('taiwan_evacuation_shelters', function (Blueprint $table) {
            $table->integer('id')->primary()->comment('編號');
            $table->string('name', 58)->comment('名稱');
            $table->string('county', 7)->comment('縣市及鄉鎮市區');
            $table->string('ville', 8)->nullable()->comment('村里');
            $table->string('address', 84)->nullable()->comment('地址');
            $table->decimal('longitude', 11, 7)->comment('經度');
            $table->decimal('latitude', 11, 8)->comment('緯度');
            $table->string('default_ville', 135)->comment('預計收容村里');
            $table->integer('estimated_capacity')->comment('預計收容人數');
            $table->string('disaster_types', 22)->nullable()->comment('適用災害類別');
            $table->string('manager_name', 16)->comment('管理人姓名');
            $table->string('manager_telephone', 28)->comment('管理人電話');
            $table->boolean('is_indoor')->comment('是否室內');
            $table->boolean('is_outdoor')->comment('是否室外');
            $table->boolean('is_adaptable_for_weaker')->comment('適合避難弱者安置');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taiwan_evacuation_shelters');
    }
};
