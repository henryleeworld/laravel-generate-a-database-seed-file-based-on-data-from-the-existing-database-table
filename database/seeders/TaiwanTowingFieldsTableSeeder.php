<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaiwanTowingFieldsTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('taiwan_towing_fields')->delete();
        DB::table('taiwan_towing_fields')->insert([
            0 => 
            [
                'id' => 1,
                'city' => '金門縣',
                'name' => '金城分局金城派出所',
                'address' => '金門縣金城鎮民生路15號',
                'telephone_1' => '082-325539',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            1 => 
            [
                'id' => 2,
                'city' => '金門縣',
                'name' => '金湖分局金湖派出所',
                'address' => '金門縣金城鎮黃海路90-3號',
                'telephone_1' => '082-332559',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            2 => 
            [
                'id' => 3,
                'city' => '金門縣',
                'name' => '金門縣警察局綜合勤務大樓',
                'address' => '金門縣金寧鄉頂林路317號',
                'telephone_1' => '082-320870',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            3 => 
            [
                'id' => 4,
                'city' => '宜蘭縣',
                'name' => '宜蘭保管場',
                'address' => '宜蘭縣宜蘭市南津里建南北路66號',
                'telephone_1' => '03-9255818',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            4 => 
            [
                'id' => 5,
                'city' => '宜蘭縣',
                'name' => '宜蘭縣政府警察局拖吊車輛保管場',
                'address' => '宜蘭縣宜蘭市建蘭北路66號',
                'telephone_1' => '03-9255818',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            5 => 
            [
                'id' => 6,
                'city' => '新竹縣',
                'name' => '新竹縣政府警察局竹北車輛移置保管場',
                'address' => '新竹縣竹北市環北路三段200號',
                'telephone_1' => '03-5545119',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            6 => 
            [
                'id' => 7,
                'city' => '苗栗縣',
                'name' => '苗栗拖吊場',
                'address' => '苗栗縣後龍鎮豐富里新東路46-6號',
                'telephone_1' => '037-724908',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            7 => 
            [
                'id' => 8,
                'city' => '苗栗縣',
                'name' => '竹南拖吊場',
                'address' => '苗栗縣竹南鎮大埔里2鄰大埔八街2號',
                'telephone_1' => '037-585061',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            8 => 
            [
                'id' => 9,
                'city' => '彰化縣',
                'name' => '彰化縣警察局交通隊彰化拖吊車輛保管場',
                'address' => '500彰化縣彰化市金馬路一段70巷',
                'telephone_1' => '04-7373683',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            9 => 
            [
                'id' => 10,
                'city' => '彰化縣',
                'name' => '彰化縣警察局交通隊員林拖吊車輛保管場',
                'address' => '510彰化縣員林市員水路二段110巷1號',
                'telephone_1' => '04-8336107',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            10 => 
            [
                'id' => 11,
                'city' => '南投縣',
                'name' => '埔里鎮違規車輛保管場',
                'address' => '南投縣埔里鎮溪南里珠生路110號',
                'telephone_1' => '049-2904996',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            11 => 
            [
                'id' => 12,
                'city' => '南投縣',
                'name' => '草屯鎮違規車輛保管場',
                'address' => '南投縣草屯鎮中投公路15K橋下（墩煌路四段近溪南路口，烏溪南岸堤防旁）',
                'telephone_1' => '049-2319687',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            12 => 
            [
                'id' => 13,
                'city' => '雲林縣',
                'name' => '斗六拖吊保管場',
                'address' => '雲林縣斗六市仁愛路300號',
                'telephone_1' => '05-5362970',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            13 => 
            [
                'id' => 14,
                'city' => '嘉義縣',
                'name' => '埤頭保管場',
                'address' => '嘉義縣新港鄉埤子村2鄰32號',
                'telephone_1' => '05-3760853',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            14 => 
            [
                'id' => 15,
                'city' => '嘉義縣',
                'name' => '石弄保管場',
                'address' => '嘉義縣中埔鄉石弄村石弄57號',
                'telephone_1' => '05-2531204',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            15 => 
            [
                'id' => 16,
                'city' => '嘉義縣',
                'name' => '竹崎分局保管場',
                'address' => '嘉義縣竹崎鄉中山路72號',
                'telephone_1' => '05-2614876',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            16 => 
            [
                'id' => 17,
                'city' => '嘉義縣',
                'name' => '柳溝保管場',
                'address' => '嘉義縣溪口鄉柳溝村阿連庄7號',
                'telephone_1' => '05-2691182',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            17 => 
            [
                'id' => 18,
                'city' => '嘉義縣',
                'name' => '中埔保管場',
                'address' => '嘉義縣中埔鄉中埔村中正路66號',
                'telephone_1' => '05-2531203',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            18 => 
            [
                'id' => 19,
                'city' => '嘉義縣',
                'name' => '嘉義縣廢棄暨違規車保管場',
                'address' => '嘉義縣鹿草鄉豐稠村馬稠後農場51號',
                'telephone_1' => '05-3621720',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            19 => 
            [
                'id' => 20,
                'city' => '嘉義縣',
                'name' => '嘉義縣警察局交通隊保管場',
                'address' => '嘉義縣太保市安仁里祥和一路東段3號',
                'telephone_1' => '05-3620229',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            20 => 
            [
                'id' => 21,
                'city' => '屏東縣',
                'name' => '屏東縣交通隊托吊保管場',
                'address' => '屏東市和生路1段509號',
                'telephone_1' => '08-7550211',
                'telephone_2' => '08-7533110',
                'telephone_3' => '08-7512645',
            ],
            21 => 
            [
                'id' => 22,
                'city' => '臺東縣',
                'name' => '臺東縣妨害交通車輛拖吊保管場',
                'address' => '臺東市新站路349號',
                'telephone_1' => '089-231010',
                'telephone_2' => '089-328344',
                'telephone_3' => '089-325801',
            ],
            22 => 
            [
                'id' => 23,
                'city' => '花蓮縣',
                'name' => '花蓮違規車輛拖吊保管場',
                'address' => '花蓮市民權八街26號',
                'telephone_1' => '03-8224984',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            23 => 
            [
                'id' => 24,
                'city' => '澎湖縣',
                'name' => '澎湖縣妨害交通移置保管場',
                'address' => '馬公市五德里41-1號',
                'telephone_1' => '06-9952723',
                'telephone_2' => '06-9950434',
                'telephone_3' => NULL,
            ],
            24 => 
            [
                'id' => 25,
                'city' => '基隆市',
                'name' => '基隆市警察局違規車輛移置代保管場',
                'address' => '基隆市中山區文化路118號對面',
                'telephone_1' => '02-24364407',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            25 => 
            [
                'id' => 26,
                'city' => '新竹市',
                'name' => '新竹市合理拖吊場',
                'address' => '新竹市溪埔路251號',
                'telephone_1' => '03-5335717',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            26 => 
            [
                'id' => 27,
                'city' => '新竹市',
                'name' => '新竹市公有拖吊場',
                'address' => '新竹市延平路1段488號',
                'telephone_1' => '03-5228441',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            27 => 
            [
                'id' => 28,
                'city' => '新竹市',
                'name' => '新竹科學工業園區拖吊場',
                'address' => '新竹市東區篤行路7號對面停車場',
                'telephone_1' => '03-5775001',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            28 => 
            [
                'id' => 29,
                'city' => '嘉義市',
                'name' => '公有車輛拖吊保管場',
                'address' => '嘉義市溫州一街16號',
                'telephone_1' => '05-2851048',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            29 => 
            [
                'id' => 30,
                'city' => '臺北市',
                'name' => '交通大隊公有保管場',
                'address' => '臺北市內湖區新湖一路193號',
                'telephone_1' => '02-27933501',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            30 => 
            [
                'id' => 31,
                'city' => '臺北市',
                'name' => '公有撫遠逾期車輛放置場',
                'address' => '臺北市松山區撫遠街419-1號',
                'telephone_1' => '02-27616571',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            31 => 
            [
                'id' => 32,
                'city' => '臺北市',
                'name' => '公有濱江逾期車輛放置場',
                'address' => '臺北市松山區濱江街888-1號',
                'telephone_1' => '02-27601244',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            32 => 
            [
                'id' => 33,
                'city' => '臺北市',
                'name' => '松山內湖保管場',
                'address' => '臺北市內湖區新湖二路191巷17號斜對面空地',
                'telephone_1' => '02-27961088',
                'telephone_2' => '02-27960895',
                'telephone_3' => NULL,
            ],
            33 => 
            [
                'id' => 34,
                'city' => '臺北市',
                'name' => '大安文山保管場',
                'address' => '臺北市大安區信義路3段147巷10號空地',
                'telephone_1' => '02-27052481',
                'telephone_2' => '02-27052483',
                'telephone_3' => '0800-035567',
            ],
            34 => 
            [
                'id' => 35,
                'city' => '臺北市',
                'name' => '士林北投保管場',
            'address' => '臺北市士林區基河路328號旁空地(郵局旁300巷口進)',
                'telephone_1' => '02-28333909',
                'telephone_2' => '0800-010168',
                'telephone_3' => NULL,
            ],
            35 => 
            [
                'id' => 36,
                'city' => '臺北市',
                'name' => '中山大同保管場',
                'address' => '臺北市中山區建國北路2段11巷新光大樓後對面空地',
                'telephone_1' => '02-25081013',
                'telephone_2' => '02-25081015',
                'telephone_3' => NULL,
            ],
            36 => 
            [
                'id' => 37,
                'city' => '臺北市',
                'name' => '信義南港保管場',
            'address' => '臺北市南港區忠孝東路6段135號(應安昆陽停車場內)',
                'telephone_1' => '02-26521003',
                'telephone_2' => '0800-26522692',
                'telephone_3' => NULL,
            ],
            37 => 
            [
                'id' => 38,
                'city' => '臺北市',
                'name' => '中正萬華保管場',
            'address' => '臺北市中正區愛國西路36巷口旁空地(捷運小南門站2號出口)',
                'telephone_1' => '02-23826979',
                'telephone_2' => '02-23826890',
                'telephone_3' => NULL,
            ],
            38 => 
            [
                'id' => 39,
                'city' => '高雄市',
                'name' => '橋頭拖吊場',
                'address' => '高雄市橋頭區公園路50號',
                'telephone_1' => '07-6117126',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            39 => 
            [
                'id' => 40,
                'city' => '高雄市',
                'name' => '國泰拖吊場',
                'address' => '高雄市鳳山區國泰路一段195號',
                'telephone_1' => '07-7424186',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            40 => 
            [
                'id' => 41,
                'city' => '高雄市',
                'name' => '民三區八德拖吊場',
                'address' => '高雄市新興區八德一路27號',
                'telephone_1' => '07-2354699',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            41 => 
            [
                'id' => 42,
                'city' => '高雄市',
                'name' => '民三區博愛拖吊場',
                'address' => '高雄市左營區博愛四路435號',
                'telephone_1' => '07-3433105',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            42 => 
            [
                'id' => 43,
                'city' => '高雄市',
                'name' => '民一區建國拖吊場',
                'address' => '高雄市三民區建國一路442之1號',
                'telephone_1' => '07-2256531',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            43 => 
            [
                'id' => 44,
                'city' => '高雄市',
                'name' => '民二區五甲拖吊場',
                'address' => '高雄市鳳山區五甲一路667之1號',
                'telephone_1' => '07-7553577',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            44 => 
            [
                'id' => 45,
                'city' => '新北市',
                'name' => '土城逾放場',
                'address' => '土城區青雲路113號',
                'telephone_1' => '02-2274-2523',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            45 => 
            [
                'id' => 46,
                'city' => '新北市',
                'name' => '樹林逾放場',
                'address' => '樹林區樹新路205-1號',
                'telephone_1' => '02-2685-5786',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            46 => 
            [
                'id' => 47,
                'city' => '新北市',
                'name' => '蘆洲逾放場',
                'address' => '蘆洲區中正路518巷內',
                'telephone_1' => '02-8286-6700',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            47 => 
            [
                'id' => 48,
                'city' => '新北市',
                'name' => '淡水違規拖吊保管場',
                'address' => '淡水區沙崙路129號',
                'telephone_1' => '02-2805-7171',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            48 => 
            [
                'id' => 49,
                'city' => '新北市',
                'name' => '永和違規拖吊保管場',
                'address' => '永和區保生路55-3號',
                'telephone_1' => '02-8923-7016',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            49 => 
            [
                'id' => 50,
                'city' => '新北市',
                'name' => '三重違規拖吊保管場',
                'address' => '三重區中興北街186-1號',
                'telephone_1' => '02-8512-1090',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            50 => 
            [
                'id' => 51,
                'city' => '新北市',
                'name' => '海山違規拖吊保管場',
                'address' => '板橋區文化路2段 654 -10 號',
                'telephone_1' => '02-2252-1684',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            51 => 
            [
                'id' => 52,
                'city' => '新北市',
                'name' => '淡水新凱民間違規拖吊保管場',
                'address' => '淡水區沙崙路129號',
                'telephone_1' => '02-2805-7171',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            52 => 
            [
                'id' => 53,
                'city' => '新北市',
                'name' => '永和全洋民間違規拖吊保管場',
                'address' => '永和區保生路55-3號',
                'telephone_1' => '02-8923-7016',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            53 => 
            [
                'id' => 54,
                'city' => '新北市',
                'name' => '中和全洋民間違規拖吊保管場',
                'address' => '中和區新民街 5-1 號',
                'telephone_1' => '02-2223-5661',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            54 => 
            [
                'id' => 55,
                'city' => '新北市',
                'name' => '蘆洲天成民間違規拖吊保管場',
                'address' => '蘆洲區中正路518巷內',
                'telephone_1' => '02-85211419',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            55 => 
            [
                'id' => 56,
                'city' => '新北市',
                'name' => '三峽欣維盛民間違規拖吊保管場',
                'address' => '三峽區國慶路192號',
                'telephone_1' => '02-8671-4910',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            56 => 
            [
                'id' => 57,
                'city' => '新北市',
                'name' => '土城欣維盛民間違規拖吊保管場',
                'address' => '土城區青雲路113號',
                'telephone_1' => '02-2274-2523',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            57 => 
            [
                'id' => 58,
                'city' => '新北市',
                'name' => '林口違規拖吊保管場',
                'address' => '林口區文化北路1段526巷2號之1',
                'telephone_1' => '02-2600-2469',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            58 => 
            [
                'id' => 59,
                'city' => '新北市',
                'name' => '新店亞旺民間違規拖吊保管場',
                'address' => '新店區寶橋路235巷18號',
                'telephone_1' => '02-2910-8418',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            59 => 
            [
                'id' => 60,
                'city' => '新北市',
                'name' => '樹林欣維盛民間違規拖吊保管場',
                'address' => '樹林區樹新路205-1號',
                'telephone_1' => '02-2685-5786',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            60 => 
            [
                'id' => 61,
                'city' => '新北市',
                'name' => '新莊誼通民間違規拖吊保管場',
                'address' => '泰山區信華六街35之1號',
                'telephone_1' => '02-8512-1090',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            61 => 
            [
                'id' => 62,
                'city' => '新北市',
                'name' => '三重天成民間違規拖吊保管場',
                'address' => '三重區五谷王北街68-1號',
                'telephone_1' => '02-2278-1010',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            62 => 
            [
                'id' => 63,
                'city' => '新北市',
                'name' => '板橋華江民間違規拖吊保管場',
                'address' => '板橋區民治街57巷32號之1',
                'telephone_1' => '02-2258-1181',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            63 => 
            [
                'id' => 64,
                'city' => '新北市',
                'name' => '新店違規拖吊保管場',
            'address' => '新店區安和路2段141號(安邦公園旁)',
                'telephone_1' => '02-2211-0127',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            64 => 
            [
                'id' => 65,
                'city' => '新北市',
                'name' => '汐止違規拖吊保管場',
                'address' => '汐止區大同路1段515巷47弄 30 號之 1',
                'telephone_1' => '02-2643-0305',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            65 => 
            [
                'id' => 66,
                'city' => '新北市',
                'name' => '林口誼通民間違規拖吊保管場',
                'address' => '林口區文化北路1段526巷2號之1',
                'telephone_1' => '02-2600-2469',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            66 => 
            [
                'id' => 67,
                'city' => '新北市',
                'name' => '樹林違規拖吊保管場',
                'address' => '樹林區環漢路五段右轉四維路100公尺處',
                'telephone_1' => '02-8685-5197',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            67 => 
            [
                'id' => 68,
                'city' => '新北市',
                'name' => '汐止亞旺民間違規拖吊保管場',
                'address' => '汐止區大同路1段515巷47弄30號之1',
                'telephone_1' => '02-2643-0305',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            68 => 
            [
                'id' => 69,
                'city' => '新北市',
                'name' => '新莊違規拖吊保管場',
            'address' => '新莊區中環路三段2號之1(幸福路至新泰路段高架橋下)',
                'telephone_1' => '02-2277-1021',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            69 => 
            [
                'id' => 70,
                'city' => '臺中市',
                'name' => '崇德拖吊場',
                'address' => '崇德八路一段99號',
                'telephone_1' => '04-22413869',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            70 => 
            [
                'id' => 71,
                'city' => '臺中市',
                'name' => '豐原拖吊場',
                'address' => '豐原區國豐路一段501號',
                'telephone_1' => '04-25277587',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            71 => 
            [
                'id' => 72,
                'city' => '臺中市',
                'name' => '文心拖吊場',
                'address' => '南屯區文心南七路399號',
                'telephone_1' => '04-238668132',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            72 => 
            [
                'id' => 73,
                'city' => '臺南市',
                'name' => '南區拖吊場',
                'address' => '臺南市南區興隆路333號',
                'telephone_1' => '06-2628969',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            73 => 
            [
                'id' => 74,
                'city' => '臺南市',
                'name' => '永康拖吊場',
                'address' => '臺南市永康區永大五路1號',
                'telephone_1' => '06-2026839',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            74 => 
            [
                'id' => 75,
                'city' => '臺南市',
                'name' => '東區拖吊保管場',
                'address' => '臺南市東區裕永路286號',
                'telephone_1' => '06-2005068',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            75 => 
            [
                'id' => 76,
                'city' => '臺南市',
                'name' => '隆田保管場',
                'address' => '臺南市官田區中山路1段133號',
                'telephone_1' => '06-5795281',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            76 => 
            [
                'id' => 77,
                'city' => '臺南市',
                'name' => '民營中北拖吊場',
                'address' => '臺南市中西區光賢街28號',
                'telephone_1' => '06-3583211',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            77 => 
            [
                'id' => 78,
                'city' => '臺南市',
                'name' => '新營拖吊場',
                'address' => '臺南市新營區埤寮里埤寮59-8號',
                'telephone_1' => '06-6328443',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            78 => 
            [
                'id' => 79,
                'city' => '臺南市',
                'name' => '交通局安平車輛保管場',
                'address' => '臺南市安平區國平東路51號',
                'telephone_1' => '06-2999309',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            79 => 
            [
                'id' => 80,
                'city' => '桃園市',
                'name' => '桃園拖吊保管場',
                'address' => '桃園市桃園區永安北路112號',
                'telephone_1' => '03-2161568',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            80 => 
            [
                'id' => 81,
                'city' => '桃園市',
                'name' => '中壢拖吊保管場',
                'address' => '桃園市中壢區民權路3段375號',
                'telephone_1' => '03-2804699',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            81 => 
            [
                'id' => 82,
                'city' => '桃園市',
            'name' => '海湖拖吊保管場(公有)',
                'address' => '桃園市蘆竹區海湖186之37號',
                'telephone_1' => '03-3547795',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            82 => 
            [
                'id' => 83,
                'city' => '桃園市',
            'name' => '八德拖吊保管場(公有)',
                'address' => '桃園市八德區建興街58巷5號',
                'telephone_1' => '03-3683599',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
            83 => 
            [
                'id' => 84,
                'city' => '桃園市',
                'name' => '大溪移置保管場',
                'address' => '桃園市平鎮區東勢里12鄰東勢18之16號',
                'telephone_1' => '03-4509102',
                'telephone_2' => NULL,
                'telephone_3' => NULL,
            ],
        ]);
    }
}