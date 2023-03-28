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
        Schema::create('s_and_p_500_companies', function (Blueprint $table) {
            $table->string('symbol', 5)->primary();
            $table->string('name', 38);
            $table->string('sector', 26);
            $table->decimal('price', 7);
            $table->decimal('price_earnings', 7)->nullable();
            $table->decimal('dvidend_yield', 11, 9);
            $table->decimal('earnings_share', 6);
            $table->decimal('fifty_two_week_low', 8, 4);
            $table->decimal('fifty_two_week_high', 10, 6);
            $table->integer('market_cap');
            $table->string('ebitda', 16);
            $table->decimal('price_sales', 10, 8);
            $table->decimal('price_book', 7)->nullable();
            $table->string('sec_filings', 67);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('s_and_p_500_companies');
    }
};
