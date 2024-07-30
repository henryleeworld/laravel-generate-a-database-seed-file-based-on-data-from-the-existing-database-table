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
        Schema::create('taiwan_campsites', function (Blueprint $table) {
            $table->integer('id')->primary()->comment('編號');
            $table->string('name', 24)->comment('名稱');
            $table->string('city', 3)->comment('縣市別');
            $table->string('region', 4)->nullable()->comment('鄉鎮市區');
            $table->string('address', 124)->nullable()->comment('地址');
            $table->string('phone', 39)->nullable()->comment('電話');
            $table->string('operating_status', 3)->comment('營業狀態');
            $table->string('operating_status_type', 10)->comment('營業狀態類別');
            $table->string('is_urban_land_development', 14)->nullable()->comment('都市土地／非都市土地');
            $table->string('is_indigenous_area', 12)->nullable()->comment('是否為原住民地區');
            $table->string('is_public', 1)->nullable()->comment('是否為公有合法');
            $table->string('is_national_park', 1)->nullable()->comment('是否為國家公園');
            $table->string('is_national_scenic_area', 1)->nullable()->comment('是否為國家風景區');
            $table->string('is_national_forest_recreation_area', 1)->nullable()->comment('是否為國家森林遊樂區');
            $table->string('longitude_and_latitude', 75)->nullable()->comment('經緯度');
            $table->string('complied_regulation', 70)->nullable()->comment('符合相關法規');
            $table->string('violated_regulation', 191)->nullable()->comment('違反相關法規');
            $table->string('land_location_id', 122)->nullable()->comment('土地座落地號');
            $table->string('land_type', 29)->nullable()->comment('用地類別');
            $table->string('website', 317)->nullable()->comment('網站');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taiwan_campsites');
    }
};
