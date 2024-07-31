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
        Schema::create('taiwan_holidays', function (Blueprint $table) {
            $table->date('date')->primary()->comment('日期');
            $table->integer('year')->comment('西元年');
            $table->string('name', 14)->nullable()->comment('節日或紀念日名稱');
            $table->string('is_holiday', 1)->comment('是否放假');
            $table->string('holiday_category', 9)->comment('放假類別');
            $table->string('description', 74)->nullable()->comment('說明');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taiwan_holidays');
    }
};
