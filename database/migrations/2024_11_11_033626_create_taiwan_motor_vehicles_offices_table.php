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
        Schema::create('taiwan_motor_vehicles_offices', function (Blueprint $table) {
            $table->mediumInteger('id', true)->comment('編號');
            $table->string('office', 7)->comment('監理所名稱');
            $table->string('station', 6)->comment('監理（分）站名稱');
            $table->string('address', 16)->comment('地址');
            $table->string('telephone', 12)->comment('電話');
            $table->string('fax', 12)->comment('傳真');
            $table->string('precinct', 117)->comment('所轄區域（縣（市）、鄉鎮（市））');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taiwan_motor_vehicles_offices');
    }
};
