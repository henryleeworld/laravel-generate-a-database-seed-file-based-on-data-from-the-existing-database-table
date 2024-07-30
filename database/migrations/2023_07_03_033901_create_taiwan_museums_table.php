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
        Schema::create('taiwan_museums', function (Blueprint $table) {
            $table->mediumInteger('id', true)->comment('編號');
            $table->string('name', 24)->comment('名稱');
            $table->string('name_in_en', 77)->nullable()->comment('英文名稱');
            $table->string('intro', 30)->nullable()->comment('簡介');
            $table->string('intro_in_en', 30)->nullable()->comment('英文簡介');
            $table->string('type', 5)->nullable()->comment('類別');
            $table->string('group_type', 3)->comment('群組類別');
            $table->string('main_type', 3)->comment('主類別');
            $table->string('main_type_pk', 36)->comment('主類別主鍵');
            $table->string('city', 3)->nullable()->comment('縣市');
            $table->string('address', 47)->nullable()->comment('地址');
            $table->decimal('longitude', 11, 7)->nullable()->comment('經度');
            $table->decimal('latitude', 11, 8)->nullable()->comment('緯度');
            $table->string('ticket_price', 896)->nullable()->comment('票價');
            $table->string('phone', 35)->nullable()->comment('電話');
            $table->string('email', 77)->nullable()->comment('電子郵件');
            $table->string('image', 30)->nullable()->comment('代表圖像');
            $table->decimal('version', 3, 1)->comment('版本');
            $table->integer('hit_rate')->comment('點閱數');
            $table->string('facebook', 206)->nullable()->comment('臉書');
            $table->string('website', 27)->comment('網站');
            $table->string('source_website', 69)->nullable()->comment('來源網站');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taiwan_museums');
    }
};
