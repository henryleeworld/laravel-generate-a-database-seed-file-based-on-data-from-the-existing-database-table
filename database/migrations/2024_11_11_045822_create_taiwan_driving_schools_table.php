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
        Schema::create('taiwan_driving_schools', function (Blueprint $table) {
            $table->mediumInteger('id', true)->comment('編號');
            $table->string('office', 7)->comment('監理所名稱');
            $table->string('station', 7)->comment('監理（分）站名稱');
            $table->string('name', 18)->comment('名稱');
            $table->string('address', 41)->comment('地址');
            $table->string('telephone', 11)->comment('電話');
            $table->string('fax', 11)->nullable()->comment('傳真');
            $table->string('is_recruiting_students', 1)->comment('是否招生中');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taiwan_driving_schools');
    }
};
