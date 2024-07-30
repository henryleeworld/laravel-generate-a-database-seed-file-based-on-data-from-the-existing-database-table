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
        Schema::create('taiwan_emergency_operation_centers', function (Blueprint $table) {
            $table->mediumInteger('id', true)->comment('編號');
            $table->string('name', 11)->comment('名稱');
            $table->string('address', 20)->comment('地址');
            $table->string('telephone', 43)->comment('電話');
            $table->string('same_location_as_the_fire_department', 7)->comment('是否與消防局同位置');
            $table->decimal('longitude', 11, 7)->comment('經度');
            $table->decimal('latitude', 11, 8)->comment('緯度');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taiwan_emergency_operation_centers');
    }
};
