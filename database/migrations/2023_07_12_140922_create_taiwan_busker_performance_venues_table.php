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
        Schema::create('taiwan_busker_performance_venues', function (Blueprint $table) {
            $table->mediumInteger('id', true)->comment('編號');
            $table->string('name', 86)->comment('地點名稱');
            $table->string('address', 144)->nullable()->comment('所在地址');
            $table->string('contactor', 20)->nullable()->comment('聯絡人');
            $table->string('phone', 48)->nullable()->comment('辦公室電話');
            $table->string('fax', 21)->nullable()->comment('傳真');
            $table->string('email', 31)->nullable()->comment('電子信箱');
            $table->string('image_url', 148)->nullable()->comment('圖片網址');
            $table->string('registration', 177)->nullable()->comment('受理登記');
            $table->string('application_unit', 23)->nullable()->comment('申請單位');
            $table->string('manager_unit', 23)->nullable()->comment('管理單位');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taiwan_busker_performance_venues');
    }
};
