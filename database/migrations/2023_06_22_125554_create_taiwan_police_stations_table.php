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
        Schema::create('taiwan_police_stations', function (Blueprint $table) {
            $table->integer('id', true)->comment('編號');
            $table->string('name', 9)->comment('中文名稱');
            $table->string('name_in_en', 55)->comment('英文名稱');
            $table->integer('zip_code')->comment('郵遞區號');
            $table->string('address', 22)->comment('地址');
            $table->string('telephone', 13)->comment('電話');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taiwan_police_stations');
    }
};
