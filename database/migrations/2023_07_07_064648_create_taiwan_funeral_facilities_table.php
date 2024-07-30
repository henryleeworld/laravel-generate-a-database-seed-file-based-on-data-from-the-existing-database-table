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
        Schema::create('taiwan_funeral_facilities', function (Blueprint $table) {
            $table->mediumInteger('id', true)->comment('編號');
            $table->string('name', 26)->comment('名稱');
            $table->string('type', 7)->comment('類別');
            $table->string('class', 2)->comment('類型');
            $table->string('telephone', 20)->nullable()->comment('電話');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taiwan_funeral_facilities');
    }
};
