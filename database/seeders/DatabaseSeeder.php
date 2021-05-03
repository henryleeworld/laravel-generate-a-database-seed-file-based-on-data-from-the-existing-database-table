<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AirportsTableSeeder::class,
            CountriesTableSeeder::class,
            CurrenciesTableSeeder::class,
            NasdaqListedCompaniesTableSeeder::class,
            SAndP500CompaniesTableSeeder::class,
            WorldCitiesTableSeeder::class,
            TaiwanHolidaysTableSeeder::class,
            TaiwanZipCodesTableSeeder::class,
        ]);
    }
}
