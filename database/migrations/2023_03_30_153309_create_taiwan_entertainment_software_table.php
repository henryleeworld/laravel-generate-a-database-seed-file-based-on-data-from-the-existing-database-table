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
        Schema::create('taiwan_entertainment_software', function (Blueprint $table) {
            $table->increments('id')->comment('編號');
            $table->string('name', 90)->comment('產品名稱');
            $table->string('publisher_name', 50)->comment('廠商名稱');
            $table->string('platform', 10)->comment('遊戲平台');
            $table->string('rating', 5)->comment('級別');
            $table->string('content_descriptors', 30)->comment('情節');
            $table->date('released_at')->comment('上市日期');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taiwan_entertainment_software');
    }
};
