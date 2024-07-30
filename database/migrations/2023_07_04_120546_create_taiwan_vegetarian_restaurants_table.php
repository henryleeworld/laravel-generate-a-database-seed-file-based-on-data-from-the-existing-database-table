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
        Schema::create('taiwan_vegetarian_restaurants', function (Blueprint $table) {
            $table->mediumInteger('id', true)->comment('編號');
            $table->string('name', 24)->comment('名稱');
            $table->string('types', 13)->nullable()->comment('素食種類');
            $table->string('language_services', 10)->nullable()->comment('服務語言');
            $table->string('phone', 36)->nullable()->comment('電話');
            $table->string('address', 24)->nullable()->comment('地址');
            $table->string('traffic_info', 25)->nullable()->comment('交通資訊');
            $table->string('business_hours', 59)->nullable()->comment('營業時間');
            $table->string('charge', 10)->nullable()->comment('消費價格');
            $table->string('longitude_and_latitude', 20)->nullable()->comment('經緯度');
            $table->string('website', 58)->nullable()->comment('網址');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taiwan_vegetarian_restaurants');
    }
};
