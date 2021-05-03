<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaiwanHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taiwan_holidays', function (Blueprint $table) {
            $table->date('date')->primary();
            $table->string('name', 16)->nullable();
            $table->string('is_holiday', 1);
            $table->string('holiday_category', 9);
            $table->string('description', 65)->nullable();
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
}
