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
        Schema::create('taiwan_incineration_plants', function (Blueprint $table) {
            $table->mediumInteger('id', true)->comment('編號');
            $table->string('name', 17)->comment('焚化廠名稱');
            $table->string('building_area', 30)->nullable()->comment('興建面積（公頃）');
            $table->string('address', 24)->comment('地址');
            $table->string('authority_in_charge', 3)->nullable()->comment('興建主辦機關');
            $table->date('start_date')->comment('開工日期');
            $table->string('completion_date', 10)->comment('完工日期');
            $table->string('opening_date', 8)->comment('開始營運年月');
            $table->string('operation_department', 17)->comment('操作單位');
            $table->string('operation_start_date', 10)->comment('開始操作日期');
            $table->decimal('construction_bonus', 9, 3)->nullable()->comment('建設勵金（千元）');
            $table->decimal('feedback_fund', 10, 3)->nullable()->comment('回饋設施經費（千元）');
            $table->integer('calorific_value')->comment('設計熱值（Kcal／Kg）');
            $table->integer('capacity')->comment('設計處理量（公噸／日）');
            $table->decimal('installed_capacity', 6, 3)->comment('發電機組裝置容量（百萬瓦）');
            $table->string('environmental_impact_assessment_notice_date', 10)->nullable()->comment('環評審查公告日期');
            $table->string('environmental_impact_assessment_conclusion_related_number', 20)->nullable()->comment('環評審查結論相關文號');
            $table->string('authority_department_of_environmental_protection', 6)->comment('主管環保局');
            $table->string('allocated_construction_costs_per_metric_ton', 30)->nullable()->comment('每公噸攤提建設費（元／公噸）');
            $table->integer('county_government_annual_guaranteed_capacity')->nullable()->comment('縣府提供年保證處理量（噸／年）');
            $table->integer('operation_maintenance_fee')->nullable()->comment('契約操作維護費（元／公噸）');
            $table->integer('waste_guaranteed_quantity')->nullable()->comment('一般事業廢棄物廠商保證量（公噸／年）');
            $table->integer('quantity')->comment('爐數');
            $table->string('url', 81)->comment('焚化廠網址');
            $table->string('type', 4)->comment('營運型態');
            $table->string('supervision_organization', 14)->comment('營運監督機構');
            $table->string('no', 8)->comment('系統代碼');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taiwan_incineration_plants');
    }
};
