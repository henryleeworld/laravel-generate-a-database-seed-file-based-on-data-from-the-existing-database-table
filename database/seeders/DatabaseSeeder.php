<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AirportsTableSeeder::class,
            AirlinesTableSeeder::class,
            CountriesTableSeeder::class,
            CountriesInformationTableSeeder::class,
            CurrenciesTableSeeder::class,
            NasdaqListedCompaniesTableSeeder::class,
            SAndP500CompaniesTableSeeder::class,
            WorldCitiesTableSeeder::class,
            TaiwanHolidaysTableSeeder::class,
            TaiwanZipCodesTableSeeder::class,
            TaiwanRestaurantsTableSeeder::class,
            TaiwanMovieTheatersTableSeeder::class,
            TaiwanFinancialInstitutionsTableSeeder::class,
            TaiwanContractedMedicalFacilitiesTableSeeder::class,
            TaiwanEntertainmentSoftwareTableSeeder::class,
        ]);
    }
}
