<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaiwanEmergencyOperationCentersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('taiwan_emergency_operation_centers')->delete();
        DB::table('taiwan_emergency_operation_centers')->insert([
            0 => 
            [
                'id' => 1,
                'name' => '基隆市政府災害應變中心',
                'address' => '基隆市中正區信二路299號2樓',
                'telephone' => '02-24272841',
                'same_location_as_the_fire_department' => '否（防災大樓）',
                'longitude' => '121.7462148',
                'latitude' => '25.13085737',
            ],
            1 => 
            [
                'id' => 2,
                'name' => '臺北市政府災害應變中心',
                'address' => '臺北市信義區莊敬路391巷11弄2號5樓',
            'telephone' => '02-87863119*8900(應變中心開設)、02-87863119*9(平時)',
                'same_location_as_the_fire_department' => '否',
                'longitude' => '121.5659130',
                'latitude' => '25.02890100',
            ],
            2 => 
            [
                'id' => 3,
                'name' => '新北市政府災害應變中心',
                'address' => '新北市板橋區中山路一段161號9樓',
                'telephone' => '02-80711020*1847-1851',
            'same_location_as_the_fire_department' => '否(市政府)',
                'longitude' => '121.4656240',
                'latitude' => '25.01208100',
            ],
            3 => 
            [
                'id' => 4,
                'name' => '桃園市政府災害應變中心',
                'address' => '桃園市桃園區力行路280號',
                'telephone' => '03-3377662',
                'same_location_as_the_fire_department' => '是',
                'longitude' => '121.2984950',
                'latitude' => '24.99971400',
            ],
            4 => 
            [
                'id' => 5,
                'name' => '新竹市災害應變中心',
                'address' => '新竹市西大路679號3樓',
                'telephone' => '03-5255388*201-240、03-5229508*434',
                'same_location_as_the_fire_department' => '是',
                'longitude' => '120.9576090',
                'latitude' => '24.81052400',
            ],
            5 => 
            [
                'id' => 6,
                'name' => '新竹縣政府災害應變中心',
                'address' => '新竹縣竹北市光明五街295號3樓',
                'telephone' => '03-5513522、03-5513520',
                'same_location_as_the_fire_department' => '是',
                'longitude' => '121.0111750',
                'latitude' => '24.82824700',
            ],
            6 => 
            [
                'id' => 7,
                'name' => '苗栗縣政府災害應變中心',
                'address' => '苗栗市經國路4段201號3樓',
                'telephone' => '037-271620',
                'same_location_as_the_fire_department' => '是',
                'longitude' => '120.8428100',
                'latitude' => '24.58183700',
            ],
            7 => 
            [
                'id' => 8,
                'name' => '臺中市政府災害應變中心',
                'address' => '臺中市南屯區文心南九路119號5樓',
                'telephone' => '04-23811119',
                'same_location_as_the_fire_department' => '是',
                'longitude' => '120.6431370',
                'latitude' => '24.12763000',
            ],
            8 => 
            [
                'id' => 9,
                'name' => '彰化縣政府災害應變中心',
                'address' => '彰化縣彰化市中央路1號5樓',
                'telephone' => '04-7512148、04-7514566、04-7515279、04-7517596',
                'same_location_as_the_fire_department' => '是',
                'longitude' => '120.5361440',
                'latitude' => '24.06368200',
            ],
            9 => 
            [
                'id' => 10,
                'name' => '雲林縣政府災害應變中心',
                'address' => '雲林縣斗六市公園路6號3樓',
                'telephone' => '05-5379409',
                'same_location_as_the_fire_department' => '是',
                'longitude' => '120.5305700',
                'latitude' => '23.69865900',
            ],
            10 => 
            [
                'id' => 11,
                'name' => '嘉義市政府災害應變中心',
                'address' => '嘉義市立學街16號2樓',
                'telephone' => '05-2782119',
                'same_location_as_the_fire_department' => '是',
                'longitude' => '120.4673500',
                'latitude' => '23.47242000',
            ],
            11 => 
            [
                'id' => 12,
                'name' => '嘉義縣政府災害應變中心',
                'address' => '嘉義縣太保市祥和二路東段6號',
                'telephone' => '05-3622119',
                'same_location_as_the_fire_department' => '是',
                'longitude' => '120.3219960',
                'latitude' => '23.45797400',
            ],
            12 => 
            [
                'id' => 13,
                'name' => '臺南市政府災害應變中心',
                'address' => '臺南市安平區永華路二段898號6樓',
                'telephone' => '06-2989119',
                'same_location_as_the_fire_department' => '是',
                'longitude' => '120.1666520',
                'latitude' => '22.99206500',
            ],
            13 => 
            [
                'id' => 14,
                'name' => '高雄市政府災害應變中心',
                'address' => '高雄市前鎮區凱旋四路119號7樓',
                'telephone' => '07-8316119',
                'same_location_as_the_fire_department' => '是',
                'longitude' => '120.3070190',
                'latitude' => '22.59345400',
            ],
            14 => 
            [
                'id' => 15,
                'name' => '屏東縣政府災害應變中心',
                'address' => '屏東市忠孝路226號',
                'telephone' => '08-766-2911',
                'same_location_as_the_fire_department' => '是',
                'longitude' => '120.4899390',
                'latitude' => '22.69356900',
            ],
            15 => 
            [
                'id' => 16,
                'name' => '宜蘭縣政府災害應變中心',
                'address' => '宜蘭縣宜蘭市舊城南路1號4樓',
                'telephone' => '03-9311294',
                'same_location_as_the_fire_department' => '是',
                'longitude' => '121.7554680',
                'latitude' => '24.75469100',
            ],
            16 => 
            [
                'id' => 17,
                'name' => '花蓮縣政府災害應變中心',
                'address' => '花蓮縣花蓮市中央路三段842號6樓',
                'telephone' => '03-8460599',
                'same_location_as_the_fire_department' => '是',
                'longitude' => '121.5927330',
                'latitude' => '23.99352800',
            ],
            17 => 
            [
                'id' => 18,
                'name' => '澎湖縣政府災害應變中心',
                'address' => '澎湖縣馬公市四維路320號5樓',
                'telephone' => '06-9277679',
                'same_location_as_the_fire_department' => '是',
                'longitude' => '119.5737460',
                'latitude' => '23.57839300',
            ],
            18 => 
            [
                'id' => 19,
                'name' => '金門縣政府災害應變中心',
                'address' => '金門縣金寧鄉頂林路315號',
                'telephone' => '082-324021',
                'same_location_as_the_fire_department' => '是',
                'longitude' => '118.3290890',
                'latitude' => '24.45760300',
            ],
            19 => 
            [
                'id' => 20,
                'name' => '連江縣政府災害應變中心',
                'address' => '連江縣南竿鄉清水村84-1號5樓',
                'telephone' => '083-623798',
                'same_location_as_the_fire_department' => '是',
                'longitude' => '119.9394000',
                'latitude' => '26.14714600',
            ],
            20 => 
            [
                'id' => 21,
                'name' => '南投縣政府災害應變中心',
                'address' => '南投縣南投市民族路494號',
                'telephone' => '049-2227119',
                'same_location_as_the_fire_department' => '是',
                'longitude' => '120.6800980',
                'latitude' => '23.90707600',
            ],
        ]);        
    }
}
