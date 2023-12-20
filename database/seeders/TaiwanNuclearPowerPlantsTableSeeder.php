<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaiwanNuclearPowerPlantsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('taiwan_nuclear_power_plants')->delete();
        DB::table('taiwan_nuclear_power_plants')->insert([
            0 => 
            [
                'id' => 1,
                'name' => '核一廠',
                'unit' => '1號機',
                'address' => '新北市石門區乾華里小坑12號',
                'telephone' => '02-26383501',
                'fax' => '02-26382111',
                'business_date' => '1978.12.10',
                'installed_capacity' => 636,
            ],
            1 => 
            [
                'id' => 2,
                'name' => '核一廠',
                'unit' => '2號機',
                'address' => '新北市石門區乾華里小坑12號',
                'telephone' => '02-26383501',
                'fax' => '02-26382111',
                'business_date' => '1979.07.15',
                'installed_capacity' => 636,
            ],
            2 => 
            [
                'id' => 3,
                'name' => '核二廠',
                'unit' => '1號機',
                'address' => '新北市萬里區野柳里八斗60號',
                'telephone' => '02-24985990',
                'fax' => '02-24982624',
                'business_date' => '1981.12.28',
                'installed_capacity' => 985,
            ],
            3 => 
            [
                'id' => 4,
                'name' => '核二廠',
                'unit' => '2號機',
                'address' => '新北市萬里區野柳里八斗60號',
                'telephone' => '02-24985990',
                'fax' => '02-24982624',
                'business_date' => '1983.03.16',
                'installed_capacity' => 985,
            ],
            4 => 
            [
                'id' => 5,
                'name' => '核三廠',
                'unit' => '1號機',
                'address' => '屏東縣恆春鎮南灣路387號',
                'telephone' => '08-8893470',
                'fax' => '08-8894637',
                'business_date' => '1984.07.27',
                'installed_capacity' => 951,
            ],
            5 => 
            [
                'id' => 6,
                'name' => '核三廠',
                'unit' => '2號機',
                'address' => '屏東縣恆春鎮南灣路387號',
                'telephone' => '08-8893470',
                'fax' => '08-8894637',
                'business_date' => '1985.05.18',
                'installed_capacity' => 951,
            ],
            6 => 
            [
                'id' => 7,
                'name' => '龍門廠',
                'unit' => '1號機',
                'address' => '新北市貢寮區仁里里研海街62號',
                'telephone' => '02-24903550',
                'fax' => '02-24903138',
                'business_date' => '封存中',
                'installed_capacity' => 1350,
            ],
            7 => 
            [
                'id' => 8,
                'name' => '龍門廠',
                'unit' => '2號機',
                'address' => '新北市貢寮區仁里里研海街62號',
                'telephone' => '02-24903550',
                'fax' => '02-24903138',
                'business_date' => '封存中',
                'installed_capacity' => 1350,
            ],
        ]);
    }
}