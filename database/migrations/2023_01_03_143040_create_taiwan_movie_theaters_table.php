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
        Schema::create('taiwan_movie_theaters', function (Blueprint $table) {
            $table->string('city', 3);
            $table->string('business_name', 24);
            $table->string('company_name', 20);
            $table->string('national_id_no', 8);
            $table->smallInteger('total_rooms');
            $table->string('address', 40);
            $table->string('telephone', 12);
            $table->string('remark', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taiwan_movie_theaters');
    }
};
