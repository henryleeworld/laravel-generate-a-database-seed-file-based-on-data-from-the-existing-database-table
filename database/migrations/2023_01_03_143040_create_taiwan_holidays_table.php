<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taiwan_holidays', function (Blueprint $table) {
            $table->date('date')->primary()->comment('日期');
            $table->string('name', 16)->nullable()->comment('節日或紀念日名稱');
            $table->string('is_holiday', 1)->comment('是否放假');
            $table->string('holiday_category', 9)->comment('放假類別');
            $table->string('description', 65)->nullable()->comment('說明');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taiwan_holidays');
    }
};
