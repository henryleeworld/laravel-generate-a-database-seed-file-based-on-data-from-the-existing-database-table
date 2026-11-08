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
        Schema::create('taiwan_sports_venues', function (Blueprint $table) {
            $table->id();
            $table->integer('city')->comment('縣市');
            $table->string('district', 4)->comment('行政區');
            $table->string('name', 37)->comment('名稱');
            $table->string('type', 122)->comment('分類');
            $table->string('manager_name', 36)->nullable()->comment('實際管理人姓名');
            $table->string('manager_telephone', 19)->nullable()->comment('實際管理人電話');
            $table->string('website', 246)->nullable()->comment('官方網站');
            $table->string('address', 56)->comment('地址');
            $table->decimal('longitude', 11, 7)->nullable()->comment('經度');
            $table->decimal('latitude', 11, 8)->nullable()->comment('緯度');
            $table->string('facility_items', 122)->comment('設施項目');
            $table->string('availability_status', 8)->nullable()->comment('開放情形');
            $table->string('opening_hours', 7)->nullable()->comment('開放時間');
            $table->string('rental_info', 9)->nullable()->comment('租借資訊');
            $table->string('additional_info', 3082)->nullable()->comment('開放及休館時間補充說明');
            $table->string('parking_type', 9)->nullable()->comment('停車場種類');
            $table->string('overview', 2727)->nullable()->comment('運動場館介紹');
            $table->string('events_history', 20)->nullable()->comment('舉辦賽事經歷');
            $table->string('events_history_description', 673)->nullable()->comment('賽事經歷說明');
            $table->integer('opening_year')->comment('場館啟用年');
            $table->decimal('total_area', 12, 5)->comment('總運動空間面積（平方公尺）');
            $table->string('authority', 26)->comment('隸屬機關');
            $table->string('authority_attribute', 37)->comment('隸屬機關屬性');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taiwan_sports_venues');
    }
};
