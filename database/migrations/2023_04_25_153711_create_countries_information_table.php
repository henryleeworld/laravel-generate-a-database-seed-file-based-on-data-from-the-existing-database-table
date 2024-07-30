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
        Schema::create('countries_information', function (Blueprint $table) {
            $table->string('name', 17)->primary()->comment('國家中文名稱');
            $table->string('name_in_en', 52)->comment('國家英文名稱');
            $table->string('short_name', 13)->comment('國家中文簡稱');
            $table->string('short_name_in_en', 28)->comment('國家英文簡稱');
            $table->string('capital', 163)->comment('首都中文名稱');
            $table->string('capital_in_en', 67)->nullable()->comment('首都英文簡稱');
            $table->string('national_day', 54)->nullable()->comment('國慶日');
            $table->string('join_un_day', 80)->nullable()->comment('加入聯合國日期');
            $table->string('area_size', 602)->comment('面積');
            $table->string('geographic', 374)->comment('地理位置');
            $table->string('religion', 153)->comment('宗教');
            $table->string('bilaterial_relations', 831)->nullable()->comment('雙邊關係');
            $table->string('main_bounds', 370)->comment('幣制');
            $table->string('exchange_rate', 324)->nullable()->comment('匯率');
            $table->string('flag_url_link', 103)->comment('國旗圖片連結位置');
            $table->boolean('is_diplomatic')->comment('是否與我國邦交（1為邦交國；0為非邦交國）');
            $table->string('language', 198)->comment('語言');
            $table->string('main_media', 1148)->nullable()->comment('主要媒體');
            $table->string('population', 184)->comment('人口');
            $table->string('voltage', 130)->nullable()->comment('電壓');
            $table->string('time_difference', 6)->nullable()->comment('與我國時差');
            $table->string('map_url_link', 102)->comment('地理圖示連結位置');
            $table->string('political_system', 631)->nullable()->comment('政治制度');
            $table->string('history_intro', 1462)->comment('建國簡史／歷史概況');
            $table->string('parliament', 718)->nullable()->comment('國會');
            $table->string('cabinet', 1485)->nullable()->comment('內閣制度');
            $table->string('judiciary', 254)->nullable()->comment('司法制度');
            $table->string('headman', 269)->nullable()->comment('元首');
            $table->string('fa_minister', 97)->nullable()->comment('外交部長');
            $table->string('major_political_parties', 733)->nullable()->comment('主要政黨');
            $table->string('financial_incoming', 578)->nullable()->comment('財政收支');
            $table->string('export_value', 239)->nullable()->comment('輸出總值');
            $table->string('import_value', 241)->nullable()->comment('輸入總值');
            $table->string('export_item', 190)->nullable()->comment('主要輸出項目');
            $table->string('import_item', 156)->nullable()->comment('主要輸入項目');
            $table->string('main_export_countries', 101)->nullable()->comment('主要出口國');
            $table->string('main_import_countries', 97)->nullable()->comment('主要進口國');
            $table->string('export_to', 296)->nullable()->comment('我對該國輸出');
            $table->string('import_from', 126)->nullable()->comment('我自該國輸入');
            $table->string('foreign_relationship', 1125)->nullable()->comment('與各國關係');
            $table->string('foreign_policy', 942)->nullable()->comment('對外政策');
            $table->string('time_range', 211)->nullable()->comment('時差');
            $table->string('resident', 182)->nullable()->comment('本國於該國之駐館（或兼轄該國館處）');
            $table->string('national_flag', 328)->nullable()->comment('國旗說明');
            $table->string('area_name', 11)->comment('國家所屬區域中文說明');
            $table->string('area_name_in_en', 27)->comment('國家所屬區域英文說明');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries_information');
    }
};
