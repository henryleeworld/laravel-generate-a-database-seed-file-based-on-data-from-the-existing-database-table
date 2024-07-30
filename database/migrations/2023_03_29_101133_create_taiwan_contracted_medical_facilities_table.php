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
        Schema::create('taiwan_contracted_medical_facilities', function (Blueprint $table) {
            $table->string('id', 10)->primary()->comment('醫事機構代碼');
            $table->string('name', 30)->comment('醫事機構名稱');
            $table->char('type', 1)->nullable()->comment('1：藥局；2：醫學中心；3：診所；4：區域醫院；5：地區醫院');
            $table->string('category', 50)->comment('醫事機構種類');
            $table->string('telephone', 14)->comment('電話');
            $table->string('address', 60)->comment('地址');
            $table->string('branch', 5)->comment('分區業務組');
            $table->string('service', 200)->nullable()->comment('服務項目');
            $table->string('division', 200)->nullable()->comment('診療科別');
            $table->string('expired_at', 30)->nullable()->comment('終止合約或歇業日期');
            $table->string('business_hours', 180)->nullable()->comment('固定看診時段');
            $table->string('remark', 80)->nullable()->comment('備註');
            $table->integer('county_code')->comment('縣市別代碼');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taiwan_contracted_medical_facilities');
    }
};
