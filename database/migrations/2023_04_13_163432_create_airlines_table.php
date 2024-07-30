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
        Schema::create('airlines', function (Blueprint $table) {
            $table->integer('id', true)->comment('編碼');
            $table->string('iata_code', 2)->nullable()->comment('國際航空代碼');
            $table->string('icao_code', 3)->nullable()->comment('國際民航組織代碼');
            $table->string('name_in_en', 32)->nullable()->comment('英文名稱');
            $table->string('alias_name_in_en', 32)->nullable()->comment('英文別名');
            $table->string('name_in_zh_tw', 20)->nullable()->comment('繁體中文名稱');
            $table->string('alias_name_in_zh_tw', 6)->nullable()->comment('繁體中文別名');
            $table->string('address', 48)->nullable()->comment('地址');
            $table->string('telephone', 12)->nullable()->comment('電話');
            $table->string('nationality', 2)->nullable()->comment('國籍');
            $table->string('updated_at', 25)->nullable()->comment('更新時間');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airlines');
    }
};
