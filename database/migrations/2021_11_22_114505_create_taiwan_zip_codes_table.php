<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaiwanZipCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taiwan_zip_codes', function (Blueprint $table) {
            $table->integer('zip_code');
            $table->string('city', 3);
            $table->string('area', 4);
            $table->string('road', 15);
            $table->string('scope', 23);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taiwan_zip_codes');
    }
}
