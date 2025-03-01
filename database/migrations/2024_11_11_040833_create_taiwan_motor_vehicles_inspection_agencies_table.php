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
        Schema::create('taiwan_motor_vehicles_inspection_agencies', function (Blueprint $table) {
            $table->mediumInteger('id', true)->comment('編號');
            $table->string('name', 22)->comment('名稱');
            $table->string('address', 21)->comment('地址');
            $table->string('telephone', 18)->comment('電話');
            $table->string('fax', 12)->nullable()->comment('傳真');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taiwan_motor_vehicles_inspection_agencies');
    }
};
