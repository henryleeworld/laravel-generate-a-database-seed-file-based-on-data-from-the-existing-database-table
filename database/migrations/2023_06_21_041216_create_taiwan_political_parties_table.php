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
        Schema::create('taiwan_political_parties', function (Blueprint $table) {
            $table->integer('id')->primary()->comment('編號');
            $table->string('name', 15)->comment('名稱');
            $table->string('establishment_date', 15)->comment('成立日期');
            $table->string('approval_date', 15)->comment('備案日期');
            $table->string('main_office_address', 25)->comment('主事務所地址');
            $table->string('phone', 35)->comment('聯絡電話');
            $table->string('leader', 20)->comment('負責人');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taiwan_political_parties');
    }
};
