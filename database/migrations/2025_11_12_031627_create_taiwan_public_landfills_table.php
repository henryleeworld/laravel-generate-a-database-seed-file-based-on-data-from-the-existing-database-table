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
        Schema::create('taiwan_public_landfills', function (Blueprint $table) {
            $table->mediumInteger('id', true)->comment('編號');
            $table->string('name', 19)->comment('掩埋場名稱');
            $table->string('city', 3)->comment('縣市別');
            $table->string('region', 3)->comment('鄉鎮市別');
            $table->date('updated_at')->comment('更新時間');
            $table->decimal('design_capacity', 8, 1)->comment('設計容量（立方公尺）');
            $table->decimal('remaining_capacity', 9)->comment('剩餘容積（立方公尺）');
            $table->decimal('latitude', 11, 8)->comment('緯度');
            $table->decimal('longitude', 11, 7)->comment('經度');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taiwan_public_landfills');
    }
};
