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
        Schema::create('taiwan_financial_institutions', function (Blueprint $table) {
            $table->string('code', 10)->comment('總機構代號');
            $table->string('branch_code', 7)->collation('utf8mb4_bin')->comment('分支機構代號');
            $table->char('type', 2)->nullable()->comment('機構類型。1：本國銀行；2：外國銀行；3：信用合作社；4：票券商；5：信用卡公司；6：金融控股公司；7：專營電子支付機構；8：外銀在臺辦事處；9：證券商；10：大陸地區銀行在臺分行');
            $table->string('name', 70)->nullable()->comment('機構名稱');
            $table->string('address', 120)->nullable()->comment('地址');
            $table->string('telephone', 20)->nullable()->comment('電話');
            $table->string('person_in_charge', 20)->nullable()->comment('負責人');
            $table->date('updated_at')->nullable()->comment('更新日期');
            $table->string('url', 89)->nullable()->comment('金融機構網址');
            $table->primary(['code', 'branch_code']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taiwan_financial_institutions');
    }
};
