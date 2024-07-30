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
        Schema::create('taiwan_public_toilets', function (Blueprint $table) {
            $table->string('id', 10)->primary()->comment('編號');
            $table->string('name', 45)->comment('名稱');
            $table->string('type', 6)->comment('類別');
            $table->string('category', 17)->comment('類型');
            $table->string('country', 3)->comment('縣市名稱');
            $table->string('city', 4)->comment('鄉鎮市名稱');
            $table->string('village', 5)->comment('村里名稱');
            $table->string('address', 44)->nullable()->comment('地址');
            $table->string('authority', 12)->comment('主管機關');
            $table->decimal('latitude', 11, 8)->comment('緯度');
            $table->decimal('longitude', 11, 7)->comment('經度');
            $table->string('grade', 3)->comment('等級');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taiwan_public_toilets');
    }
};
