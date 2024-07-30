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
        Schema::create('taiwan_pesticides', function (Blueprint $table) {
            $table->mediumInteger('id', true)->comment('編號');
            $table->string('name_in_zh_tw', 13)->comment('中文名稱');
            $table->string('name_in_en', 54)->nullable()->comment('英文名稱');
            $table->string('no', 4)->comment('農藥代號');
            $table->string('barcode', 90)->comment('農藥條碼資料');
            $table->string('permit_license', 92)->comment('許可證標示');
            $table->integer('permit_no')->comment('許可證號');
            $table->string('permit_type', 4)->comment('許可證字');
            $table->string('brand_name', 9)->nullable()->comment('廠牌名稱');
            $table->string('chemical_composition', 796)->comment('化學成分');
            $table->string('foreign_original_manufacturer', 64)->nullable()->comment('國外原製造廠商');
            $table->string('dosage_form', 3)->nullable()->comment('劑型');
            $table->string('strength', 21)->comment('含量');
            $table->string('expiration_date', 9)->comment('有效期限');
            $table->string('company_name', 20)->comment('廠商名稱');
            $table->string('fungicide_resistance', 4)->nullable()->comment('FRAC 殺菌劑抗藥性');
            $table->string('herbicide_resistance', 11)->nullable()->comment('HRAC 除草劑抗藥性');
            $table->string('insecticide_resistance', 3)->nullable()->comment('IRAC 殺蟲劑抗藥性');
            $table->string('revocation_type', 4)->nullable()->comment('撤銷類別');
            $table->string('revocation_date', 9)->nullable()->comment('撤銷日期');
            $table->string('scope', 85)->comment('農藥使用範圍');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taiwan_pesticides');
    }
};
