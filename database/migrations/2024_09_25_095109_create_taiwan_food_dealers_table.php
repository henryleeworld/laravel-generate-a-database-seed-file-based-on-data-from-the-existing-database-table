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
        Schema::create('taiwan_food_dealers', function (Blueprint $table) {
            $table->integer('certificate_no')->primary()->comment('登記證證號');
            $table->string('name', 25)->comment('公司或商號名稱');
            $table->string('address', 153)->comment('營業地址');
            $table->string('city', 3)->comment('縣市');
            $table->string('area', 4)->comment('鄉鎮');
            $table->string('telephone', 30)->nullable()->comment('電話號碼');
            $table->string('business_types', 40)->nullable()->comment('經營業務種類');
            $table->string('food_categories', 13)->nullable()->comment('經營糧食種類');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taiwan_food_dealers');
    }
};
