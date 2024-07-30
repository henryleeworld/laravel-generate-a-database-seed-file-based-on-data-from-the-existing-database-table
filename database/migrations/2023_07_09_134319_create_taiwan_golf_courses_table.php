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
        Schema::create('taiwan_golf_courses', function (Blueprint $table) {
            $table->integer('id')->primary()->comment('編號');
            $table->string('name', 16)->comment('名稱');
            $table->string('city', 3)->comment('所在縣市');
            $table->string('address', 21)->comment('所在地');
            $table->integer('holes')->comment('洞數');
            $table->decimal('hectares', 10, 6)->comment('面積公頃');
            $table->string('document_number', 20)->comment('開放使用文號');
            $table->string('business_entity', 15)->comment('經營主體');
            $table->string('telephone', 14)->comment('連絡電話');
            $table->string('fax', 12)->comment('傳真');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taiwan_golf_courses');
    }
};
