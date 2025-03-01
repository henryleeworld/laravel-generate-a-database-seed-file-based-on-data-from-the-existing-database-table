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
            TaiwanReservoirsTableSeeder::class,
            TaiwanRestaurantsTableSeeder::class,
            TaiwanMovieTheatersTableSeeder::class,
            TaiwanMuseumsTableSeeder::class,
            TaiwanLibrariesTableSeeder::class,
            TaiwanFinancialInstitutionsTableSeeder::class,
            TaiwanContractedMedicalFacilitiesTableSeeder::class,
            TaiwanCampsitesTableSeeder::class,
            TaiwanPublicToiletsTableSeeder::class,
            TaiwanEmergencyOperationCentersTableSeeder::class,
            TaiwanEntertainmentSoftwareTableSeeder::class,
            TaiwanEvacuationSheltersTableSeeder::class,
            TaiwanFireStationsTableSeeder::class,
            TaiwanPoliceStationsTableSeeder::class,
            TaiwanSpeedCamerasTableSeeder::class,
            TaiwanPoliticalPartiesTableSeeder::class,
            TaiwanBuskersTableSeeder::class,
            TaiwanBuskerPerformanceVenuesTableSeeder::class,
            TaiwanVegetarianRestaurantsTableSeeder::class,
            TaiwanFuneralFacilitiesTableSeeder::class,
            TaiwanGolfCoursesTableSeeder::class,
            TaiwanRadioStationsTableSeeder::class,
            TaiwanTowingFieldsTableSeeder::class,
            TaiwanPesticidesTableSeeder::class,
            TaiwanNuclearPowerPlantsTableSeeder::class,
            TaiwanFoodDealersTableSeeder::class,
            TaiwanMotorVehiclesOfficesTableSeeder::class,
            TaiwanMotorVehiclesInspectionAgenciesTableSeeder::class,
            TaiwanDrivingSchoolsTableSeeder::class,
        ]);
    }
}
