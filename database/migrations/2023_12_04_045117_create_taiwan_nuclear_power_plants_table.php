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
        Schema::create('taiwan_nuclear_power_plants', function (Blueprint $table) {
            $table->mediumInteger('id', true)->comment('編號');
            $table->string('name', 3)->comment('名稱');
            $table->string('unit', 3)->comment('機組');
            $table->string('address', 15)->comment('地址');
            $table->string('telephone', 11)->comment('連絡電話');
            $table->string('fax', 11)->comment('傳真電話');
            $table->string('business_date', 10)->comment('商轉日期');
            $table->integer('installed_capacity')->comment('裝置容量（MWe）');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taiwan_nuclear_power_plants');
    }
};
