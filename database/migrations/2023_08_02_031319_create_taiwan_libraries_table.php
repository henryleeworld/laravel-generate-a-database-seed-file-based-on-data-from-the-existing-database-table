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
        Schema::create('taiwan_libraries', function (Blueprint $table) {
            $table->mediumInteger('id', true)->comment('編號');
            $table->string('type', 16)->comment('類型');
            $table->string('name', 33)->comment('中文館名');
            $table->integer('zip_code')->comment('郵遞區號');
            $table->string('address', 38)->comment('中文地址');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taiwan_libraries');
    }
};
