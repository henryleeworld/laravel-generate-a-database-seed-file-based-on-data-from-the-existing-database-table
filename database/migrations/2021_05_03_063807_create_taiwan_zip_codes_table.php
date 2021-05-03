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
            $table->string('city', 100);
            $table->string('area', 100);
            $table->string('road', 100)->nullable();
            $table->string('scope', 100)->nullable();
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
