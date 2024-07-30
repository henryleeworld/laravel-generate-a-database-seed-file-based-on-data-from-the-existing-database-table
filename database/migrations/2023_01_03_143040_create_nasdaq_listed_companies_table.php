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
        Schema::create('nasdaq_listed_companies', function (Blueprint $table) {
            $table->string('symbol', 5)->primary();
            $table->string('company_name', 80);
            $table->string('security_name', 170);
            $table->string('market_category', 1);
            $table->string('test_issue', 1);
            $table->string('financial_status', 1);
            $table->decimal('round_lot_size', 5, 1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nasdaq_listed_companies');
    }
};
