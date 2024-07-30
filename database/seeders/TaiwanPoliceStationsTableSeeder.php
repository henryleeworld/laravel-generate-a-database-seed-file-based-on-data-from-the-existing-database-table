<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaiwanPoliceStationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('taiwan_police_stations')->delete(); 
        DB::table('taiwan_police_stations')->insert([
            0 => 
            [
                'id' => 1,
                'name' => '臺北市政府警察局',
                'name_in_en' => 'Taipei City Police Department',
                'zip_code' => 100,
                'address' => '臺北市中正區延平南路96號',
                'telephone' => '02 23313561',
            ],
            1 => 
            [
                'id' => 2,
                'name' => '中山分局',
                'name_in_en' => 'Zhongshan Precinct',
                'zip_code' => 104,
                'address' => '臺北市中山區中山北路2段1號',
                'telephone' => '02 25412491',
            ],
            2 => 
            [
                'id' => 3,
                'name' => '中山一派出所',
                'name_in_en' => 'Zhongshan First Police Station',
                'zip_code' => 104,
                'address' => '臺北市中山區中山北路1段110號',
                'telephone' => '02 25519321',
            ],
            3 => 
            [
                'id' => 4,
                'name' => '中山二派出所',
                'name_in_en' => 'Zhongshan Second Police Station',
                'zip_code' => 104,
                'address' => '臺北市中山區中山北路2段59巷21號2樓之4',
                'telephone' => '02 25517771',
            ],
            4 => 
            [
                'id' => 5,
                'name' => '圓山派出所',
                'name_in_en' => 'Yuanshan Police Staticn',
                'zip_code' => 104,
                'address' => '臺北市中山區中山北路3段62號',
                'telephone' => '02 25969433',
            ],
            5 => 
            [
                'id' => 6,
                'name' => '長春路派出所',
                'name_in_en' => 'Changchun Rd. Police Station',
                'zip_code' => 104,
                'address' => '臺北市中山區長春路206號',
                'telephone' => '02 25062289',
            ],
            6 => 
            [
                'id' => 7,
                'name' => '長安東路派出所',
                'name_in_en' => 'Changan E. Rd. Police Station',
                'zip_code' => 104,
                'address' => '臺北市中山區長安東路2段165號',
                'telephone' => '02 27735207',
            ],
            7 => 
            [
                'id' => 8,
                'name' => '民權一派出所',
                'name_in_en' => 'Minquan First Police Station',
                'zip_code' => 104,
                'address' => '臺北市中山區新生北路2段127之1號',
                'telephone' => '02 25314672',
            ],
            8 => 
            [
                'id' => 9,
                'name' => '建國路派出所',
                'name_in_en' => 'Jianguo Police Station',
                'zip_code' => 104,
                'address' => '臺北市中山區民族東路284號',
                'telephone' => '02 25099774',
            ],
            9 => 
            [
                'id' => 10,
                'name' => '大直派出所',
                'name_in_en' => 'Dazhi Police Station',
                'zip_code' => 104,
                'address' => '臺北市中山區北安路456號',
                'telephone' => '02 25332984',
            ],
            10 => 
            [
                'id' => 11,
                'name' => '大安分局',
                'name_in_en' => 'Daan Precinct',
                'zip_code' => 106,
                'address' => '臺北市大安區仁愛路3段2號',
                'telephone' => '02 23259850',
            ],
            11 => 
            [
                'id' => 12,
                'name' => '羅斯福路派出所',
                'name_in_en' => 'Roosevelt Rd. Police Station',
                'zip_code' => 106,
                'address' => '臺北市大安區羅斯福路4段113巷13號',
                'telephone' => '02 27355761',
            ],
            12 => 
            [
                'id' => 13,
                'name' => '臥龍街派出所',
                'name_in_en' => 'Wolong St. Police Station',
                'zip_code' => 106,
                'address' => '臺北市大安區臥龍街185號',
                'telephone' => '02 27334439',
            ],
            13 => 
            [
                'id' => 14,
                'name' => '敦化南路派出所',
                'name_in_en' => 'Dunhua S. Rd. Police Station',
                'zip_code' => 106,
                'address' => '臺北市大安區復興南路1段219之1號',
                'telephone' => '02 27710400',
            ],
            14 => 
            [
                'id' => 15,
                'name' => '安和路派出所',
                'name_in_en' => 'Anhe Rd. Police Station',
                'zip_code' => 106,
                'address' => '臺北市大安區信義路4段216號',
                'telephone' => '02 27025232',
            ],
            15 => 
            [
                'id' => 16,
                'name' => '瑞安街派出所',
                'name_in_en' => 'Ruian St. Police Station',
                'zip_code' => 106,
                'address' => '臺北市大安區瑞安街23巷17號',
                'telephone' => '02 27054164',
            ],
            16 => 
            [
                'id' => 17,
                'name' => '和平東路派出所',
                'name_in_en' => 'Heping E. Rd. Police Station',
                'zip_code' => 106,
                'address' => '臺北市大安區和平東路1段143號',
                'telephone' => '02 23218073',
            ],
            17 => 
            [
                'id' => 18,
                'name' => '新生南路派出所',
                'name_in_en' => 'Xinsheng S. Rd. Police Station',
                'zip_code' => 106,
                'address' => '臺北市大安區仁愛路3段18號',
                'telephone' => '02 23258611',
            ],
            18 => 
            [
                'id' => 19,
                'name' => '中正一分局',
                'name_in_en' => 'Zhongzheng First Precinct',
                'zip_code' => 100,
                'address' => '臺北市中正區公園路15號',
                'telephone' => '02 23716426',
            ],
            19 => 
            [
                'id' => 20,
                'name' => '忠孝西路派出所',
                'name_in_en' => 'Zhongxiao W. Rd. Police Station',
                'zip_code' => 100,
                'address' => '臺北市中正區公園路15號',
                'telephone' => '02 23142722',
            ],
            20 => 
            [
                'id' => 21,
                'name' => '忠孝東路派出所',
                'name_in_en' => 'Zhongxiao E. Rd. Police Station',
                'zip_code' => 100,
                'address' => '臺北市中正區忠孝東路2段10號',
                'telephone' => '02 23218656',
            ],
            21 => 
            [
                'id' => 22,
                'name' => '仁愛路派出所',
                'name_in_en' => 'Renai Rd. Police Station',
                'zip_code' => 100,
                'address' => '臺北市中正區仁愛路1段19號',
                'telephone' => '02 23212067',
            ],
            22 => 
            [
                'id' => 23,
                'name' => '介壽路派出所',
                'name_in_en' => 'Jieshou Rd. Police Station',
                'zip_code' => 100,
                'address' => '臺北市中正區公園路54號',
                'telephone' => '02 23113081',
            ],
            23 => 
            [
                'id' => 24,
                'name' => '博愛路派出所',
                'name_in_en' => 'Boai Rd. Police Station',
                'zip_code' => 100,
                'address' => '臺北市中正區武昌街1段69號',
                'telephone' => '02 23142724',
            ],
            24 => 
            [
                'id' => 25,
                'name' => '中正二分局',
                'name_in_en' => 'Zhongzheng Second Precinct',
                'zip_code' => 100,
                'address' => '臺北市中正區南海路35號',
                'telephone' => '02 23751825',
            ],
            25 => 
            [
                'id' => 26,
                'name' => '南海路派出所',
                'name_in_en' => 'Nanhai Rd. Police Station',
                'zip_code' => 100,
                'address' => '臺北市中正區南海路35號',
                'telephone' => '02 23752835',
            ],
            26 => 
            [
                'id' => 27,
                'name' => '思源街派出所',
                'name_in_en' => 'Siyuan St. Police Station',
                'zip_code' => 100,
                'address' => '臺北市中正區汀州路3段72號',
                'telephone' => '02 23650844',
            ],
            27 => 
            [
                'id' => 28,
                'name' => '南昌路派出所',
                'name_in_en' => 'Nanchang Rd. Police Station',
                'zip_code' => 100,
                'address' => '臺北市中正區龍福里南昌路1段7號',
                'telephone' => '02 23218148',
            ],
            28 => 
            [
                'id' => 29,
                'name' => '泉州街派出所',
                'name_in_en' => 'Quanzhou St. Police Station',
                'zip_code' => 100,
                'address' => '臺北市中正區中華路2段503號',
                'telephone' => '02 23039915',
            ],
            29 => 
            [
                'id' => 30,
                'name' => '廈門街派出所',
                'name_in_en' => 'Xiamen St. Police Station',
                'zip_code' => 100,
                'address' => '臺北市中正區螢圃里廈門街43號',
                'telephone' => '02 23684427',
            ],
            30 => 
            [
                'id' => 31,
                'name' => '文山二分局',
                'name_in_en' => 'Wenshan Second Precinct',
                'zip_code' => 116,
                'address' => '臺北市文山區景中街2號',
                'telephone' => '02 29313843',
            ],
            31 => 
            [
                'id' => 32,
                'name' => '萬盛派出所',
                'name_in_en' => 'Wansheng Police Station',
                'zip_code' => 116,
                'address' => '臺北市文山區羅斯福路5段151號',
                'telephone' => '02 29312502',
            ],
            32 => 
            [
                'id' => 33,
                'name' => '景美派出所',
                'name_in_en' => 'Jingmei Police Station',
                'zip_code' => 116,
                'address' => '臺北市文山區景中街2號',
                'telephone' => '02 29313459',
            ],
            33 => 
            [
                'id' => 34,
                'name' => '興隆派出所',
                'name_in_en' => 'Xinglong Police Station',
                'zip_code' => 116,
                'address' => '臺北市文山區里興隆路2段156號',
                'telephone' => '02 29313842',
            ],
            34 => 
            [
                'id' => 35,
                'name' => '文山一分局',
                'name_in_en' => 'Wenshan First Precinct',
                'zip_code' => 116,
                'address' => '臺北市文山區木柵路2段202號',
                'telephone' => '02 29395734',
            ],
            35 => 
            [
                'id' => 36,
                'name' => '木新派出所',
                'name_in_en' => 'Muxin Police Station',
                'zip_code' => 116,
                'address' => '臺北市文山區恆光街45號',
                'telephone' => '02 29372488',
            ],
            36 => 
            [
                'id' => 37,
                'name' => '指南派出所',
                'name_in_en' => 'Zhinan Police Station',
                'zip_code' => 116,
                'address' => '臺北市文山區指南路2段177號',
                'telephone' => '02 29382712',
            ],
            37 => 
            [
                'id' => 38,
                'name' => '萬芳派出所',
                'name_in_en' => 'Wanfang Police Station',
                'zip_code' => 116,
                'address' => '臺北市文山區萬芳里萬美街1段50號',
                'telephone' => '02 22391753',
            ],
            38 => 
            [
                'id' => 39,
                'name' => '復興派出所',
                'name_in_en' => 'Fuxing Police Station',
                'zip_code' => 116,
                'address' => '臺北市文山區木柵路1段54號',
                'telephone' => '02 22367140',
            ],
            39 => 
            [
                'id' => 40,
                'name' => '木柵派出所',
                'name_in_en' => 'Muzha Police Station',
                'zip_code' => 116,
                'address' => '臺北市文山區木柵路2段202號',
                'telephone' => '02 29397141',
            ],
            40 => 
            [
                'id' => 41,
                'name' => '南港分局',
                'name_in_en' => 'Nangang Precinct',
                'zip_code' => 115,
                'address' => '臺北市南港區向陽路150號',
                'telephone' => '02 27839110',
            ],
            41 => 
            [
                'id' => 42,
                'name' => '玉成派出所',
                'name_in_en' => 'Yucheng  Police Station',
                'zip_code' => 115,
                'address' => '臺北市南港區向陽路150號',
                'telephone' => '02 27886958',
            ],
            42 => 
            [
                'id' => 43,
                'name' => '舊莊派出所',
                'name_in_en' => 'Jiuzhuang Police Station',
                'zip_code' => 115,
                'address' => '臺北市南港區舊莊街1段213號',
                'telephone' => '02 27822492',
            ],
            43 => 
            [
                'id' => 44,
                'name' => '同德派出所',
                'name_in_en' => 'Tongde Police Station',
                'zip_code' => 115,
                'address' => '臺北市南港區同德路83號',
                'telephone' => '02 27867201',
            ],
            44 => 
            [
                'id' => 45,
                'name' => '南港派出所',
                'name_in_en' => 'Nangang Police Station',
                'zip_code' => 115,
                'address' => '臺北市南港區興中路12巷2號',
                'telephone' => '02 27830476',
            ],
            45 => 
            [
                'id' => 46,
                'name' => '內湖分局',
                'name_in_en' => 'Neihu Precinct',
                'zip_code' => 114,
                'address' => '臺北市內湖區民權東路6段101號',
                'telephone' => '02 27900505',
            ],
            46 => 
            [
                'id' => 47,
                'name' => '康樂派出所',
                'name_in_en' => 'Kangle Police Station',
                'zip_code' => 114,
                'address' => '臺北市內湖區康樂街110巷16弄20號',
                'telephone' => '02 26342237',
            ],
            47 => 
            [
                'id' => 48,
                'name' => '東湖派出所',
                'name_in_en' => 'Donghu Police Station',
                'zip_code' => 114,
                'address' => '臺北市內湖區五分街10號',
                'telephone' => '02 26313350',
            ],
            48 => 
            [
                'id' => 49,
                'name' => '文德派出所',
                'name_in_en' => 'Wende Police Station',
                'zip_code' => 114,
                'address' => '臺北市內湖區民權東路6段26號',
                'telephone' => '02 27944946',
            ],
            49 => 
            [
                'id' => 50,
                'name' => '大湖派出所',
                'name_in_en' => 'Dahu Police Station',
                'zip_code' => 114,
                'address' => '臺北市內湖區成功路5段1號',
                'telephone' => '02 27909521',
            ],
            50 => 
            [
                'id' => 51,
                'name' => '港墘派出所',
                'name_in_en' => 'Gangquian Police Station',
                'zip_code' => 114,
                'address' => '臺北市內湖區內湖路1段550號',
                'telephone' => '02 87518690',
            ],
            51 => 
            [
                'id' => 52,
                'name' => '西湖派出所',
                'name_in_en' => 'Xihu Police Station',
                'zip_code' => 114,
                'address' => '臺北市內湖區瑞光路515號',
                'telephone' => '02 27987505',
            ],
            52 => 
            [
                'id' => 53,
                'name' => '潭美派出所',
                'name_in_en' => 'Tanmei Police Station',
                'zip_code' => 114,
                'address' => '臺北市內湖區新明路324號',
                'telephone' => '02 27917233',
            ],
            53 => 
            [
                'id' => 54,
                'name' => '內湖派出所',
                'name_in_en' => 'Neihu Police Station',
                'zip_code' => 114,
                'address' => '臺北市內湖區內湖路2段261號',
                'telephone' => '02 27931031',
            ],
            54 => 
            [
                'id' => 55,
                'name' => '康寧派出所',
                'name_in_en' => 'Kangning Police Station',
                'zip_code' => 114,
                'address' => '臺北市內湖區金湖路83號',
                'telephone' => '02 87920061',
            ],
            55 => 
            [
                'id' => 56,
                'name' => '北投分局',
                'name_in_en' => 'Beitou Precinct',
                'zip_code' => 112,
                'address' => '臺北市北投區中央北路1段1號',
                'telephone' => '02 28914521',
            ],
            56 => 
            [
                'id' => 57,
                'name' => '永明派出所',
                'name_in_en' => 'Yongming Police Station',
                'zip_code' => 112,
                'address' => '臺北市北投區石牌路2段10號',
                'telephone' => '02 28213110',
            ],
            57 => 
            [
                'id' => 58,
                'name' => '竹子湖派出所',
                'name_in_en' => 'Zhuzihu Police Station',
                'zip_code' => 112,
                'address' => '臺北市北投區竹子湖路16號',
                'telephone' => '02 28616082',
            ],
            58 => 
            [
                'id' => 59,
                'name' => '公園派出所',
                'name_in_en' => 'Gongyuan Police Station',
                'zip_code' => 112,
                'address' => '臺北市北投區紗帽路110號',
                'telephone' => '02 28610145',
            ],
            59 => 
            [
                'id' => 60,
                'name' => '關渡派出所',
                'name_in_en' => 'Guandu Police Station',
                'zip_code' => 112,
                'address' => '臺北市北投區大度路3段305號',
                'telephone' => '02 28583864',
            ],
            60 => 
            [
                'id' => 61,
                'name' => '石牌派出所',
                'name_in_en' => 'Shipai Police Station',
                'zip_code' => 112,
                'address' => '臺北市北投區文林北路296號',
                'telephone' => '02 28231513',
            ],
            61 => 
            [
                'id' => 62,
                'name' => '奇岩派出所',
                'name_in_en' => 'Qiyan Police Station',
                'zip_code' => 112,
                'address' => '臺北市北投區公館路209巷11號',
                'telephone' => '02 28954410',
            ],
            62 => 
            [
                'id' => 63,
                'name' => '大屯派出所',
                'name_in_en' => 'Datun Police Station',
                'zip_code' => 112,
                'address' => '臺北市北投區中和街534號',
                'telephone' => '02 28913971',
            ],
            63 => 
            [
                'id' => 64,
                'name' => '光明派出所',
                'name_in_en' => 'Guangming Police Station',
                'zip_code' => 112,
                'address' => '臺北市北投區泉源路14號',
                'telephone' => '02 28911647',
            ],
            64 => 
            [
                'id' => 65,
                'name' => '長安派出所',
                'name_in_en' => 'Changan Police Station',
                'zip_code' => 112,
                'address' => '臺北市北投區中央北路1段1號',
                'telephone' => '02 28912029',
            ],
            65 => 
            [
                'id' => 66,
                'name' => '士林分局',
                'name_in_en' => 'Shilin Precinct',
                'zip_code' => 111,
                'address' => '臺北市士林區文林路235號',
                'telephone' => '02 28813856',
            ],
            66 => 
            [
                'id' => 67,
                'name' => '翠山派出所',
                'name_in_en' => 'Cuishan Police Station',
                'zip_code' => 111,
                'address' => '臺北市士林區中社路1段56號',
                'telephone' => '02 28411423',
            ],
            67 => 
            [
                'id' => 68,
                'name' => '後港派出所',
                'name_in_en' => 'Hougang Police Station',
                'zip_code' => 111,
                'address' => '臺北市士林區福港街151號',
                'telephone' => '02 28829373',
            ],
            68 => 
            [
                'id' => 69,
                'name' => '山仔后派出所',
                'name_in_en' => 'Shanzaihou Police Station',
                'zip_code' => 111,
                'address' => '臺北市士林區格致路39號',
                'telephone' => '02 28611295',
            ],
            69 => 
            [
                'id' => 70,
                'name' => '永福派出所',
                'name_in_en' => 'Yongfu Police Station',
                'zip_code' => 111,
                'address' => '臺北市士林區仰德大道3段49號',
                'telephone' => '02 28616353',
            ],
            70 => 
            [
                'id' => 71,
                'name' => '溪山派出所',
                'name_in_en' => 'Xishan Police Station',
                'zip_code' => 111,
                'address' => '臺北市士林區至善路3段263號',
                'telephone' => '02 28411110',
            ],
            71 => 
            [
                'id' => 72,
                'name' => '芝山岩派出所',
                'name_in_en' => 'Zhishanyan Police Station',
                'zip_code' => 111,
                'address' => '臺北市士林區仰德大道1段16號',
                'telephone' => '02 28813194',
            ],
            72 => 
            [
                'id' => 73,
                'name' => '天母派出所',
                'name_in_en' => 'Tianmu Police Station',
                'zip_code' => 111,
                'address' => '臺北市士林區中山北路7段192號',
                'telephone' => '02 28714110',
            ],
            73 => 
            [
                'id' => 74,
                'name' => '蘭雅派出所',
                'name_in_en' => 'Lanya Police Station',
                'zip_code' => 111,
                'address' => '臺北市士林區中山北路6段153號1樓',
                'telephone' => '02 28315001',
            ],
            74 => 
            [
                'id' => 75,
                'name' => '社子派出所',
                'name_in_en' => 'Shezi Police Station',
                'zip_code' => 111,
                'address' => '臺北市士林區延平北路6段200號',
                'telephone' => '02 28122720',
            ],
            75 => 
            [
                'id' => 76,
                'name' => '文林派出所',
                'name_in_en' => 'Wenlin Police Station',
                'zip_code' => 111,
                'address' => '臺北市士林區文林路235號',
                'telephone' => '02 28812211',
            ],
            76 => 
            [
                'id' => 77,
                'name' => '信義分局',
                'name_in_en' => 'Xinyi Precinct',
                'zip_code' => 110,
                'address' => '臺北市信義區信義路5段17號',
                'telephone' => '02 27234739',
            ],
            77 => 
            [
                'id' => 78,
                'name' => '六張犁派出所',
                'name_in_en' => 'Liuzhangli Police Station',
                'zip_code' => 110,
                'address' => '臺北市信義區基隆路2段131-22號',
                'telephone' => '02 27355068',
            ],
            78 => 
            [
                'id' => 79,
                'name' => '吳興街派出所',
                'name_in_en' => 'Wuxingjie St. Police Station',
                'zip_code' => 110,
                'address' => '臺北市信義區吳興街262號',
                'telephone' => '02 27398997',
            ],
            79 => 
            [
                'id' => 80,
                'name' => '福德街派出所',
                'name_in_en' => 'Fudejie St. Police Station',
                'zip_code' => 110,
                'address' => '臺北市信義區福德街86號',
                'telephone' => '02 27273424',
            ],
            80 => 
            [
                'id' => 81,
                'name' => '五分埔派出所',
                'name_in_en' => 'Wufenpu Police Station',
                'zip_code' => 110,
                'address' => '臺北市信義區永吉路333號',
                'telephone' => '02 27653349',
            ],
            81 => 
            [
                'id' => 82,
                'name' => '三張犁派出所',
                'name_in_en' => 'Sanchangli Police Station',
                'zip_code' => 110,
                'address' => '臺北市信義區信義路5段17號',
                'telephone' => '02 27295561',
            ],
            82 => 
            [
                'id' => 83,
                'name' => '松山分局',
                'name_in_en' => 'Songshan Precinct',
                'zip_code' => 105,
                'address' => '臺北市南京東路3段340號',
                'telephone' => '02 27782081',
            ],
            83 => 
            [
                'id' => 84,
                'name' => '民有派出所',
                'name_in_en' => 'Minyou Police Station',
                'zip_code' => 105,
                'address' => '臺北市松山區民權東路3段162號',
                'telephone' => '02 27123638',
            ],
            84 => 
            [
                'id' => 85,
                'name' => '三民派出所',
                'name_in_en' => 'Sanmin Police Station',
                'zip_code' => 105,
                'address' => '臺北市松山區三民里民生東路5段163之1號',
                'telephone' => '02 27621708',
            ],
            85 => 
            [
                'id' => 86,
                'name' => '東社派出所',
                'name_in_en' => 'Dongshe Police Station',
                'zip_code' => 105,
                'address' => '臺北市松山區精忠里敦化北路199巷5之1號',
                'telephone' => '02 27135253',
            ],
            86 => 
            [
                'id' => 87,
                'name' => '中崙派出所',
                'name_in_en' => 'Zhonglun Police Station',
                'zip_code' => 105,
                'address' => '臺北市松山區長安東路2段229之1號',
                'telephone' => '02 27711239',
            ],
            87 => 
            [
                'id' => 88,
                'name' => '松山派出所',
                'name_in_en' => 'Songshan Police Station',
                'zip_code' => 105,
                'address' => '臺北市松山區八德路4段692號',
                'telephone' => '02 27670446',
            ],
            88 => 
            [
                'id' => 89,
                'name' => '大同分局',
                'name_in_en' => 'Datong Precinct',
                'zip_code' => 103,
                'address' => '臺北市大同區錦西街200號',
                'telephone' => '02 25577262',
            ],
            89 => 
            [
                'id' => 90,
                'name' => '建成派出所',
                'name_in_en' => 'Jiancheng Police Station',
                'zip_code' => 103,
                'address' => '臺北市大同區承德路1段80號',
                'telephone' => '02 25585463',
            ],
            90 => 
            [
                'id' => 91,
                'name' => '民生西路派出所',
                'name_in_en' => 'Minsheng Rd. Police Station',
                'zip_code' => 103,
                'address' => '臺北市大同區保安街47之1號',
                'telephone' => '02 25538587',
            ],
            91 => 
            [
                'id' => 92,
                'name' => '延平派出所',
                'name_in_en' => 'Yanping Police Station',
                'zip_code' => 103,
                'address' => '臺北市大同區延平北路1段86號',
                'telephone' => '02 25564340',
            ],
            92 => 
            [
                'id' => 93,
                'name' => '重慶北路派出所',
                'name_in_en' => 'Chongqing N. Rd. Police Station',
                'zip_code' => 103,
                'address' => '臺北市大同區重慶北路3段320之2號',
                'telephone' => '02 25944741',
            ],
            93 => 
            [
                'id' => 94,
                'name' => '寧夏路派出所',
                'name_in_en' => 'Ningxia Rd. Police Station',
                'zip_code' => 103,
                'address' => '臺北市大同區錦西街200號',
                'telephone' => '02 25575011',
            ],
            94 => 
            [
                'id' => 95,
                'name' => '民族路派出所',
                'name_in_en' => 'Minzu Rd. Police Station',
                'zip_code' => 103,
                'address' => '臺北市大同區重慶北路3段168號',
                'telephone' => '02 25926204',
            ],
            95 => 
            [
                'id' => 96,
                'name' => '萬華分局',
                'name_in_en' => 'Wanhua Precinct',
                'zip_code' => 108,
                'address' => '臺北市萬華區康定路22號',
                'telephone' => '02 23140364',
            ],
            96 => 
            [
                'id' => 97,
                'name' => '青年路派出所',
                'name_in_en' => 'Qingnian Rd. Police Station',
                'zip_code' => 108,
                'address' => '臺北市萬華區萬大路423巷112號',
                'telephone' => '02 23054219',
            ],
            97 => 
            [
                'id' => 98,
                'name' => '東園街派出所',
                'name_in_en' => 'Dongyuan St. Police Station',
                'zip_code' => 108,
                'address' => '臺北市萬華區長泰街130號',
                'telephone' => '02 23033247',
            ],
            98 => 
            [
                'id' => 99,
                'name' => '西園路派出所',
                'name_in_en' => 'Xiyuan Rd. Police Station',
                'zip_code' => 108,
                'address' => '臺北市萬華區東園街17號',
                'telephone' => '02 23032943',
            ],
            99 => 
            [
                'id' => 100,
                'name' => '莒光派出所',
                'name_in_en' => 'Juguang Police Station',
                'zip_code' => 108,
                'address' => '臺北市萬華區莒光路171號',
                'telephone' => '02 23064987',
            ],
            100 => 
            [
                'id' => 101,
                'name' => '華江派出所',
                'name_in_en' => 'Huajiang Police Station',
                'zip_code' => 108,
                'address' => '臺北市萬華區環河南路2段196號',
                'telephone' => '02 23061531',
            ],
            101 => 
            [
                'id' => 102,
                'name' => '大理街派出所',
                'name_in_en' => 'Dali St. Police Station',
                'zip_code' => 108,
                'address' => '臺北市萬華區大理街99號',
                'telephone' => '02 23063468',
            ],
            102 => 
            [
                'id' => 103,
                'name' => '康定路派出所',
                'name_in_en' => 'Kangding Rd. Police Station',
                'zip_code' => 108,
                'address' => '臺北市萬華區和平西路3段112號',
                'telephone' => '02 23064226',
            ],
            103 => 
            [
                'id' => 104,
                'name' => '龍山派出所',
                'name_in_en' => 'Longshan Police Station',
                'zip_code' => 108,
                'address' => '臺北市萬華區桂林路135號',
                'telephone' => '02 23314823',
            ],
            104 => 
            [
                'id' => 105,
                'name' => '西門町派出所',
                'name_in_en' => 'Ximending Police Station',
                'zip_code' => 108,
                'address' => '臺北市萬華區康定路22號',
                'telephone' => '02 23312212',
            ],
            105 => 
            [
                'id' => 106,
                'name' => '新北市政府警察局',
                'name_in_en' => 'New Taipei City Police Department',
                'zip_code' => 220,
                'address' => '新北市板橋區府中路32號',
                'telephone' => '02 80725454',
            ],
            106 => 
            [
                'id' => 107,
                'name' => '土城分局',
                'name_in_en' => 'Tucheng Precinct',
                'zip_code' => 236,
                'address' => '新北市土城區和平路22號',
                'telephone' => '02  22665929',
            ],
            107 => 
            [
                'id' => 108,
                'name' => '土城派出所',
                'name_in_en' => 'Tucheng Police Station',
                'zip_code' => 236,
                'address' => '新北市土城區和平路22號',
                'telephone' => '02  22656058',
            ],
            108 => 
            [
                'id' => 109,
                'name' => '金城派出所',
                'name_in_en' => 'Jincheng Police Station',
                'zip_code' => 236,
                'address' => '新北市土城區延吉街318號',
                'telephone' => '02 22633152',
            ],
            109 => 
            [
                'id' => 110,
                'name' => '廣福派出所',
                'name_in_en' => 'Guangfu Police Station',
                'zip_code' => 236,
                'address' => '新北市土城區學府路1段103號',
                'telephone' => '02 22701588',
            ],
            110 => 
            [
                'id' => 111,
                'name' => '清水派出所',
                'name_in_en' => 'Qingshui Police Station',
                'zip_code' => 236,
                'address' => '新北市土城區青雲路220號',
                'telephone' => '02  22615090',
            ],
            111 => 
            [
                'id' => 112,
                'name' => '頂埔派出所',
                'name_in_en' => 'Dingpu Police Station',
                'zip_code' => 236,
                'address' => '新北市土城區中央路4段102號',
                'telephone' => '02 22681220',
            ],
            112 => 
            [
                'id' => 113,
                'name' => '三峽分局',
                'name_in_en' => 'Sanxia Precint',
                'zip_code' => 237,
                'address' => '新北市三峽區中正路1段48號',
                'telephone' => '02  26711796',
            ],
            113 => 
            [
                'id' => 114,
                'name' => '吉埔派出所',
                'name_in_en' => 'Jipo Station',
                'zip_code' => 237,
                'address' => '新北市三峽區中正路2段451號',
                'telephone' => '02  26711278',
            ],
            114 => 
            [
                'id' => 115,
                'name' => '成福派出所',
                'name_in_en' => 'Chengfu Station',
                'zip_code' => 237,
                'address' => '新北市三峽區成福路84號',
                'telephone' => '02  26726097',
            ],
            115 => 
            [
                'id' => 116,
                'name' => '圳頭派出所',
                'name_in_en' => 'Zuntou Station',
                'zip_code' => 237,
                'address' => '新北市三峽區中正路2段451號',
                'telephone' => '02  26741167',
            ],
            116 => 
            [
                'id' => 117,
                'name' => '五寮派出所',
                'name_in_en' => 'Wuliao Station',
                'zip_code' => 237,
                'address' => '新北市三峽區五寮里五寮154號',
                'telephone' => '02  26720283',
            ],
            117 => 
            [
                'id' => 118,
                'name' => '插角派出所',
                'name_in_en' => 'Chajiao Station',
                'zip_code' => 237,
                'address' => '新北市三峽區插角里插角67之1號',
                'telephone' => '02  26720121',
            ],
            118 => 
            [
                'id' => 119,
                'name' => '湖山派出所',
                'name_in_en' => 'Hushan Station',
                'zip_code' => 239,
                'address' => '新北市鶯歌區大湖路370號',
                'telephone' => '02  26792474',
            ],
            119 => 
            [
                'id' => 120,
                'name' => '鳳鳴派出所',
                'name_in_en' => 'Fengming Station',
                'zip_code' => 239,
                'address' => '新北市鶯歌區鳳鳴里鳳鳴路163號',
                'telephone' => '02  26789110',
            ],
            120 => 
            [
                'id' => 121,
                'name' => '二橋派出所',
                'name_in_en' => 'Erqiao Station',
                'zip_code' => 239,
                'address' => '新北市鶯歌區中正三路6號',
                'telephone' => '02  26781225',
            ],
            121 => 
            [
                'id' => 122,
                'name' => '橫溪派出所',
                'name_in_en' => 'HengXi Station',
                'zip_code' => 237,
                'address' => '新北市三峽區介壽路3段49號',
                'telephone' => '02  86761762',
            ],
            122 => 
            [
                'id' => 123,
                'name' => '鶯歌分駐所',
                'name_in_en' => 'Yingge  Station',
                'zip_code' => 239,
                'address' => '新北市鶯歌區中正一路195號',
                'telephone' => '02  26792024',
            ],
            123 => 
            [
                'id' => 124,
                'name' => '三峽派出所',
                'name_in_en' => 'Sanxia  Station',
                'zip_code' => 237,
                'address' => '新北市三峽區民權街38號',
                'telephone' => '02  26711254',
            ],
            124 => 
            [
                'id' => 125,
                'name' => '北大派出所',
                'name_in_en' => 'Beida Station',
                'zip_code' => 237,
                'address' => '新北市三峽區學成路396號',
                'telephone' => '02 26730561',
            ],
            125 => 
            [
                'id' => 126,
                'name' => '三重分局',
                'name_in_en' => 'Sanchong Precinct',
                'zip_code' => 241,
                'address' => '新北市三重區重新路3段147號',
                'telephone' => '02  89818900',
            ],
            126 => 
            [
                'id' => 127,
                'name' => '永福派出所',
                'name_in_en' => 'Yongfu Police Station',
                'zip_code' => 241,
                'address' => '新北市三重區力行路2段162巷53號',
                'telephone' => '02  22802065',
            ],
            127 => 
            [
                'id' => 128,
                'name' => '中興橋派出所',
                'name_in_en' => 'Jhongsing Police Station',
                'zip_code' => 241,
                'address' => '新北市三重區成功路21號',
                'telephone' => '02  29789513',
            ],
            128 => 
            [
                'id' => 129,
                'name' => '光明派出所',
                'name_in_en' => 'Guangming Police Station',
                'zip_code' => 241,
                'address' => '新北市三重區過圳街46號',
                'telephone' => '02  29860655',
            ],
            129 => 
            [
                'id' => 130,
                'name' => '慈福派出所',
                'name_in_en' => 'Cihfu Police Station',
                'zip_code' => 241,
                'address' => '新北市三重區仁愛街519號',
                'telephone' => '02  29815111',
            ],
            130 => 
            [
                'id' => 131,
                'name' => '厚德派出所',
                'name_in_en' => 'Houde Police Station',
                'zip_code' => 241,
                'address' => '新北市三重區三和路3段186號',
                'telephone' => '02  29712064',
            ],
            131 => 
            [
                'id' => 132,
                'name' => '長泰派出所',
                'name_in_en' => 'Changtai Police Station',
                'zip_code' => 241,
                'address' => '新北市三重區仁愛街15號',
                'telephone' => '02  29735094',
            ],
            132 => 
            [
                'id' => 133,
                'name' => '三重派出所',
                'name_in_en' => 'Sanchong Police Station',
                'zip_code' => 241,
                'address' => '新北市三重區重新路1段43號',
                'telephone' => '02  29722553',
            ],
            133 => 
            [
                'id' => 134,
                'name' => '大同派出所',
                'name_in_en' => 'Datong Police Station',
                'zip_code' => 241,
                'address' => '新北市三重區大同南路155號',
                'telephone' => '02  29723261',
            ],
            134 => 
            [
                'id' => 135,
                'name' => '二重派出所',
                'name_in_en' => 'Erchong Police Station',
                'zip_code' => 241,
                'address' => '新北市三重區重新路5段406號',
                'telephone' => '02  29956794',
            ],
            135 => 
            [
                'id' => 136,
                'name' => '大有派出所',
                'name_in_en' => 'Dayou Police Station',
                'zip_code' => 241,
                'address' => '新北市三重區大有里中正北路402號',
                'telephone' => '02  89851911',
            ],
            136 => 
            [
                'id' => 137,
                'name' => '重陽派出所',
                'name_in_en' => 'Chongyang Police Station',
                'zip_code' => 241,
                'address' => '新北市三重區集賢路163號',
                'telephone' => '02  82879727',
            ],
            137 => 
            [
                'id' => 138,
                'name' => '中和分局',
                'name_in_en' => 'Zhonghe Precinct',
                'zip_code' => 235,
                'address' => '新北市中和區圓通路30號',
                'telephone' => '02 22498950',
            ],
            138 => 
            [
                'id' => 139,
                'name' => '中和派出所',
                'name_in_en' => 'Zhonghe Police Station',
                'zip_code' => 235,
                'address' => '新北市中和區中和路102之1號',
                'telephone' => '02 22492624',
            ],
            139 => 
            [
                'id' => 140,
                'name' => '安平派出所',
                'name_in_en' => 'Anping Police Station',
                'zip_code' => 235,
                'address' => '新北市中和區中安街175號',
                'telephone' => '02 29264139',
            ],
            140 => 
            [
                'id' => 141,
                'name' => '秀山派出所',
                'name_in_en' => 'Xiushan Police Station',
                'zip_code' => 235,
                'address' => '新北市中和區成功路139號',
                'telephone' => '02 29402114',
            ],
            141 => 
            [
                'id' => 142,
                'name' => '南勢派出所',
                'name_in_en' => 'Nanshi Police Station',
                'zip_code' => 235,
                'address' => '新北市中和區南山路322號',
                'telephone' => '02 29419445',
            ],
            142 => 
            [
                'id' => 143,
                'name' => '景安派出所',
                'name_in_en' => 'Jing\'an Police Station',
                'zip_code' => 235,
                'address' => '新北市中和區復興路276號',
                'telephone' => '02 22436955',
            ],
            143 => 
            [
                'id' => 144,
                'name' => '國光派出所',
                'name_in_en' => 'Guo-guang Police Station',
                'zip_code' => 235,
                'address' => '新北市中和區莒光路160號',
                'telephone' => '02 29569805',
            ],
            144 => 
            [
                'id' => 145,
                'name' => '錦和派出所',
                'name_in_en' => 'Jin-he Police Station',
                'zip_code' => 235,
                'address' => '新北市中和區中正路275號1樓',
                'telephone' => '02 22482551',
            ],
            145 => 
            [
                'id' => 146,
                'name' => '中原派出所',
                'name_in_en' => 'Zhong-yuan Police Station',
                'zip_code' => 235,
                'address' => '新北市中和區立德街60號',
                'telephone' => '02 22213029',
            ],
            146 => 
            [
                'id' => 147,
                'name' => '積穗派出所',
                'name_in_en' => 'Ji-sui Police Station',
                'zip_code' => 235,
                'address' => '新北市中和區員山路471號',
                'telephone' => '02 22268955',
            ],
            147 => 
            [
                'id' => 148,
                'name' => '員山派出所',
                'name_in_en' => 'Yuan-shan Police Station',
                'zip_code' => 235,
                'address' => '新北市永和區員山路235巷1號',
                'telephone' => '02 22237295',
            ],
            148 => 
            [
                'id' => 149,
                'name' => '板橋分局',
                'name_in_en' => 'Banqiao Precinct',
                'zip_code' => 220,
                'address' => '新北市板橋區文化路1段52號',
                'telephone' => '02 80725454',
            ],
            149 => 
            [
                'id' => 150,
                'name' => '沙崙派出所',
                'name_in_en' => 'Shalun Police Station',
                'zip_code' => 220,
                'address' => '新北市板橋區溪北路111號',
                'telephone' => '02 26812741',
            ],
            150 => 
            [
                'id' => 151,
                'name' => '大觀派出所',
                'name_in_en' => 'Daguan Police Station',
                'zip_code' => 220,
                'address' => '新北市板橋區大觀路2段127號',
                'telephone' => '02 22752477',
            ],
            151 => 
            [
                'id' => 152,
                'name' => '後埔派出所',
                'name_in_en' => 'Houpu Police Station',
                'zip_code' => 220,
                'address' => '新北市板橋區成都街22號',
                'telephone' => '02 29615964',
            ],
            152 => 
            [
                'id' => 153,
                'name' => '板橋派出所',
                'name_in_en' => 'Banqiao Police Station',
                'zip_code' => 220,
                'address' => '新北市板橋區北門街17號',
                'telephone' => '02 29699664',
            ],
            153 => 
            [
                'id' => 154,
                'name' => '信義派出所',
                'name_in_en' => 'Xinyi Police Station',
                'zip_code' => 220,
                'address' => '新北市板橋區廣權路28號',
                'telephone' => '02  29592317',
            ],
            154 => 
            [
                'id' => 155,
                'name' => '樹林分局',
                'name_in_en' => 'Shulin Precinct',
                'zip_code' => 238,
                'address' => '新北市樹林區保安街1段283號',
                'telephone' => '02  26812101',
            ],
            155 => 
            [
                'id' => 156,
                'name' => '柑園派出所',
                'name_in_en' => 'Ganyaun police station',
                'zip_code' => 238,
                'address' => '新北市樹林區佳園路3段20號',
                'telephone' => '02  26801075',
            ],
            156 => 
            [
                'id' => 157,
                'name' => '山佳派出所',
                'name_in_en' => 'Shanjia police station',
                'zip_code' => 238,
                'address' => '新北市樹林區中山路3段38號',
                'telephone' => '02  26806114',
            ],
            157 => 
            [
                'id' => 158,
                'name' => '三多派出所',
                'name_in_en' => 'Sanfu police station',
                'zip_code' => 238,
                'address' => '新北市樹林區三福街72號',
                'telephone' => '02  26894108',
            ],
            158 => 
            [
                'id' => 159,
                'name' => '樹林派出所',
                'name_in_en' => 'Shulin police station',
                'zip_code' => 238,
                'address' => '新北市樹林區鎮前街35號',
                'telephone' => '02  26812034',
            ],
            159 => 
            [
                'id' => 160,
                'name' => '彭厝派出所',
                'name_in_en' => 'Pengcuo police station',
                'zip_code' => 238,
                'address' => '新北市樹林區國凱街65號',
                'telephone' => '02 86868077',
            ],
            160 => 
            [
                'id' => 161,
                'name' => '永和分局',
                'name_in_en' => 'Yonghe Precinct',
                'zip_code' => 234,
                'address' => '新北市永和區竹林路198號',
                'telephone' => '02  29213119',
            ],
            161 => 
            [
                'id' => 162,
                'name' => '得和派出所',
                'name_in_en' => 'Dehe Police Station',
                'zip_code' => 234,
                'address' => '新北市永和區民權路51號',
                'telephone' => '02  29451969',
            ],
            162 => 
            [
                'id' => 163,
                'name' => '中正橋派出所',
                'name_in_en' => 'Zhongzhengqiao Police Station',
                'zip_code' => 234,
                'address' => '新北市永和區永和路2段303號',
                'telephone' => '02  29215119',
            ],
            163 => 
            [
                'id' => 164,
                'name' => '新生派出所',
                'name_in_en' => 'Xinsheng Police Station',
                'zip_code' => 234,
                'address' => '新北市永和區仁愛路187號',
                'telephone' => '02  29217119',
            ],
            164 => 
            [
                'id' => 165,
                'name' => '秀朗派出所',
                'name_in_en' => 'Xiulang Police Station',
                'zip_code' => 234,
                'address' => '新北市永和區永利路73號',
                'telephone' => '02  29251130',
            ],
            165 => 
            [
                'id' => 166,
                'name' => '永和派出所',
                'name_in_en' => 'Yonghe Police Station',
                'zip_code' => 234,
                'address' => '新北市永和區安樂路344號',
                'telephone' => '02  29214229',
            ],
            166 => 
            [
                'id' => 167,
                'name' => '汐止分局',
                'name_in_en' => 'Shi jr Station',
                'zip_code' => 221,
                'address' => '新北市汐止區大同路2段459號',
                'telephone' => '02  26412610',
            ],
            167 => 
            [
                'id' => 168,
                'name' => '東山派出所',
                'name_in_en' => 'Dung Shan Office',
                'zip_code' => 221,
                'address' => '新北市汐止區汐平路2段68號',
                'telephone' => '02  26415841',
            ],
            168 => 
            [
                'id' => 169,
                'name' => '烘內派出所',
                'name_in_en' => 'Hung Nei Office',
                'zip_code' => 221,
                'address' => '新北市汐止區汐萬路2段230號',
                'telephone' => '02  26462564',
            ],
            169 => 
            [
                'id' => 170,
                'name' => '長青派出所',
                'name_in_en' => 'Ba Lian Office',
                'zip_code' => 221,
                'address' => '新北市汐止區長青路188巷1之1號',
                'telephone' => '02  26451281',
            ],
            170 => 
            [
                'id' => 171,
                'name' => '橫科派出所',
                'name_in_en' => 'Heng Ke Office',
                'zip_code' => 221,
                'address' => '新北市汐止區民權街2段87號',
                'telephone' => '02  26401237',
            ],
            171 => 
            [
                'id' => 172,
                'name' => '社后派出所',
                'name_in_en' => 'She Hou Office',
                'zip_code' => 221,
                'address' => '新北市汐止區中興路108號',
                'telephone' => '02  26942819',
            ],
            172 => 
            [
                'id' => 173,
                'name' => '長安派出所',
                'name_in_en' => 'Chang An Office',
                'zip_code' => 221,
                'address' => '新北市汐止區大同路3段99號',
                'telephone' => '02  86482618',
            ],
            173 => 
            [
                'id' => 174,
                'name' => '汐止派出所',
                'name_in_en' => 'Shi Jr Office',
                'zip_code' => 221,
                'address' => '新北市汐止區大同路2段459號',
                'telephone' => '02  26412827',
            ],
            174 => 
            [
                'id' => 175,
                'name' => '淡水分局',
                'name_in_en' => 'Tamsui Precinct',
                'zip_code' => 251,
                'address' => '新北市淡水區中正路229號',
                'telephone' => '02 26224330',
            ],
            175 => 
            [
                'id' => 176,
                'name' => '水源派出所',
                'name_in_en' => 'Shuiyuan Police Station',
                'zip_code' => 251,
                'address' => '新北市淡水區北新路2段19號',
                'telephone' => '02  26200534',
            ],
            176 => 
            [
                'id' => 177,
                'name' => '興仁派出所',
                'name_in_en' => 'Xingren Police Station',
                'zip_code' => 251,
                'address' => '新北市淡水區興仁路93號',
                'telephone' => '02  26236399',
            ],
            177 => 
            [
                'id' => 178,
                'name' => '賢孝派出所',
                'name_in_en' => 'Xianxiao Police Station',
                'zip_code' => 251,
                'address' => '新北市淡水區淡金路5段72號',
                'telephone' => '02  28011505',
            ],
            178 => 
            [
                'id' => 179,
                'name' => '後厝派出所',
                'name_in_en' => 'Houcuo Police Station',
                'zip_code' => 252,
                'address' => '新北市三芝區後厝里北勢子45之32號',
                'telephone' => '02  26362052',
            ],
            179 => 
            [
                'id' => 180,
                'name' => '興華派出所',
                'name_in_en' => 'Xinghua Police Station',
                'zip_code' => 252,
                'address' => '新北市三芝區興華里田心子1號',
                'telephone' => '02  26371851',
            ],
            180 => 
            [
                'id' => 181,
                'name' => '三芝分駐所',
                'name_in_en' => 'Sanzhi Police Station',
                'zip_code' => 252,
                'address' => '新北市三芝區育英街27號',
                'telephone' => '02  26362049',
            ],
            181 => 
            [
                'id' => 182,
                'name' => '中正路派出所',
                'name_in_en' => 'Zhongzhenglu Police Station',
                'zip_code' => 251,
                'address' => '新北市淡水區中正路320號',
                'telephone' => '02  26212752',
            ],
            182 => 
            [
                'id' => 183,
                'name' => '中山路派出所',
                'name_in_en' => 'Zhongshanlu Police Station',
                'zip_code' => 251,
                'address' => '新北市淡水區中正東路40號',
                'telephone' => '02  26212753',
            ],
            183 => 
            [
                'id' => 184,
                'name' => '竹圍派出所',
                'name_in_en' => 'Zhuwei Police Station',
                'zip_code' => 251,
                'address' => '新北市淡水區民權路32號',
                'telephone' => '02  28092831',
            ],
            184 => 
            [
                'id' => 185,
                'name' => '水碓派出所',
                'name_in_en' => 'Shuidui Police Station',
                'zip_code' => 251,
                'address' => '新北市淡水區中山北路1段160號',
                'telephone' => '02  26212491',
            ],
            185 => 
            [
                'id' => 186,
                'name' => '新店分局',
                'name_in_en' => 'Xindian Precinct',
                'zip_code' => 231,
                'address' => '新北市新店區寶橋路188號4樓',
                'telephone' => '02  29111170',
            ],
            186 => 
            [
                'id' => 187,
                'name' => '龜山派出所',
                'name_in_en' => 'Guishan Police Station',
                'zip_code' => 231,
                'address' => '新北市新店區新烏路3段152號',
                'telephone' => '02  26667560',
            ],
            187 => 
            [
                'id' => 188,
                'name' => '德拉楠派出所',
                'name_in_en' => 'Tranan Police Station',
                'zip_code' => 233,
                'address' => '新北市烏來區福山里李茂岸30號',
                'telephone' => '02  26616260',
            ],
            188 => 
            [
                'id' => 189,
                'name' => '楓子林派出所',
                'name_in_en' => 'Fengzilin Police Station',
                'zip_code' => 223,
                'address' => '新北市石碇區楓子林32號',
                'telephone' => '02  26631285',
            ],
            189 => 
            [
                'id' => 190,
                'name' => '石𥕢派出所',
                'name_in_en' => 'Shicao Police Station',
                'zip_code' => 232,
                'address' => '新北市坪林區北宜路9段6號',
                'telephone' => '02  26656343',
            ],
            190 => 
            [
                'id' => 191,
                'name' => '漁光派出所',
                'name_in_en' => 'Yuguang Police Station',
                'zip_code' => 232,
                'address' => '新北市坪林區漁光里大舌湖24號',
                'telephone' => '02  26656910',
            ],
            191 => 
            [
                'id' => 192,
                'name' => '孝義派出所',
                'name_in_en' => 'Xiaoyi Police Station',
                'zip_code' => 233,
                'address' => '新北市烏來區孝義里阿玉路2號',
                'telephone' => '02  26616139',
            ],
            192 => 
            [
                'id' => 193,
                'name' => '雙城派出所',
                'name_in_en' => 'Shuangcheng Police Station',
                'zip_code' => 231,
                'address' => '新北市新店區安康路3段209號',
                'telephone' => '02  22158566',
            ],
            193 => 
            [
                'id' => 194,
                'name' => '中民派出所',
                'name_in_en' => 'Zhongmin Police Station',
                'zip_code' => 223,
                'address' => '新北市石碇區靜安路1段236號',
                'telephone' => '02  26631254',
            ],
            194 => 
            [
                'id' => 195,
                'name' => '碧山派出所',
                'name_in_en' => 'Bishan Police Station',
                'zip_code' => 233,
                'address' => '新北市石碇區北宜路5段42號',
                'telephone' => '02  26651835',
            ],
            195 => 
            [
                'id' => 196,
                'name' => '屈尺派出所',
                'name_in_en' => 'Quchi Police Station',
                'zip_code' => 231,
                'address' => '新北市新店區屈尺路82號',
                'telephone' => '02  26667439',
            ],
            196 => 
            [
                'id' => 197,
                'name' => '深坑分駐所',
                'name_in_en' => 'Shenkeng Police Station',
                'zip_code' => 222,
                'address' => '新北市深坑區平埔街16號',
                'telephone' => '02  26621658',
            ],
            197 => 
            [
                'id' => 198,
                'name' => '桶壁派出所',
                'name_in_en' => 'Tampya Police Station',
                'zip_code' => 233,
                'address' => '新北市烏來區新烏路4段23號',
                'telephone' => '02  26616533',
            ],
            198 => 
            [
                'id' => 199,
                'name' => '石碇分駐所',
                'name_in_en' => 'Shiding Police Station',
                'zip_code' => 223,
                'address' => '新北市石碇區碇坪路1段79號',
                'telephone' => '02 26631240',
            ],
            199 => 
            [
                'id' => 200,
                'name' => '哪哮派出所',
                'name_in_en' => 'Rahaw Police Station',
                'zip_code' => 233,
                'address' => '新北市烏來區信福路11號',
                'telephone' => '02  26616400',
            ],
            200 => 
            [
                'id' => 201,
                'name' => '坪林分駐所',
                'name_in_en' => 'Pinglin Police Station',
                'zip_code' => 232,
                'address' => '新北市坪林區坪林街106號',
                'telephone' => '02  26656281',
            ],
            201 => 
            [
                'id' => 202,
                'name' => '青潭派出所',
                'name_in_en' => 'Qingtan Police Station',
                'zip_code' => 231,
                'address' => '新北市新店區北宜路2段417號',
                'telephone' => '02  22171146',
            ],
            202 => 
            [
                'id' => 203,
                'name' => '烏來分駐所',
                'name_in_en' => 'Wulai Police Station',
                'zip_code' => 233,
                'address' => '新北市烏來區烏來街45號',
                'telephone' => '02  26616410',
            ],
            203 => 
            [
                'id' => 204,
                'name' => '闊瀨派出所',
                'name_in_en' => 'Kuolai Police Station',
                'zip_code' => 232,
                'address' => '新北市坪林區坪雙路3段6號',
                'telephone' => '02  26657041',
            ],
            204 => 
            [
                'id' => 205,
                'name' => '安康派出所',
                'name_in_en' => 'Ankang Police Station',
                'zip_code' => 231,
                'address' => '新北市新店區安康路2段70號',
                'telephone' => '02  22117337',
            ],
            205 => 
            [
                'id' => 206,
                'name' => '豐田派出所',
                'name_in_en' => 'Fengtian Police Station',
                'zip_code' => 223,
                'address' => '新北市石碇區豐田里磨石坑8號',
                'telephone' => '02  26631975',
            ],
            206 => 
            [
                'id' => 207,
                'name' => '頂城派出所',
                'name_in_en' => 'Dingcheng Police Station',
                'zip_code' => 231,
                'address' => '新北市新店區碧潭路75號3樓',
                'telephone' => '02  22118023',
            ],
            207 => 
            [
                'id' => 208,
                'name' => '直潭派出所',
                'name_in_en' => 'Zhitan Police Station',
                'zip_code' => 231,
                'address' => '新北市新店區直潭十街27號',
                'telephone' => '02  26667324',
            ],
            208 => 
            [
                'id' => 209,
                'name' => '江陵派出所',
                'name_in_en' => 'Jiangling Police Station',
                'zip_code' => 231,
                'address' => '新北市新店區民族路7號',
                'telephone' => '02  29112165',
            ],
            209 => 
            [
                'id' => 210,
                'name' => '金溪派出所',
                'name_in_en' => 'Jinxi Police Station',
                'zip_code' => 232,
                'address' => '新北市坪林區粗窟里金瓜寮23之1號',
                'telephone' => '02  26656487',
            ],
            210 => 
            [
                'id' => 211,
                'name' => '碧潭派出所',
                'name_in_en' => 'Bitan Police Station',
                'zip_code' => 231,
                'address' => '新北市新店區五峰里北新路1段86號',
                'telephone' => '02  29111665',
            ],
            211 => 
            [
                'id' => 212,
                'name' => '安和派出所',
                'name_in_en' => 'Anhe Police Station',
                'zip_code' => 231,
                'address' => '新北市新店區安和路3段1號',
                'telephone' => '02  29467780',
            ],
            212 => 
            [
                'id' => 213,
                'name' => '新莊分局',
                'name_in_en' => 'Xinzhuang Precinct',
                'zip_code' => 242,
                'address' => '新北市新莊區里中正路150號',
                'telephone' => '02  29924034',
            ],
            213 => 
            [
                'id' => 214,
                'name' => '丹鳳派出所',
                'name_in_en' => 'Danfeng Police Station',
                'zip_code' => 242,
                'address' => '新北市新莊區雙鳳路75號1樓',
                'telephone' => '02  29083119',
            ],
            214 => 
            [
                'id' => 215,
                'name' => '光華派出所',
                'name_in_en' => 'Guanghua Police Station',
                'zip_code' => 242,
                'address' => '新北市新莊區民安西路141號',
                'telephone' => '02  22050330',
            ],
            215 => 
            [
                'id' => 216,
                'name' => '福營派出所',
                'name_in_en' => 'Fuying Police Station',
                'zip_code' => 242,
                'address' => '新北市新莊區褔營路101號',
                'telephone' => '02  29017434',
            ],
            216 => 
            [
                'id' => 217,
                'name' => '頭前派出所',
                'name_in_en' => 'Touqian Police Station',
                'zip_code' => 242,
                'address' => '新北市新莊區化成路312號',
                'telephone' => '02  29921043',
            ],
            217 => 
            [
                'id' => 218,
                'name' => '中港派出所',
                'name_in_en' => 'Zhonggang Police Station',
                'zip_code' => 242,
                'address' => '新北市新莊區中港路352號',
                'telephone' => '02  29922112',
            ],
            218 => 
            [
                'id' => 219,
                'name' => '新莊派出所',
                'name_in_en' => 'Xinzhuang Police Station',
                'zip_code' => 242,
                'address' => '新北市新莊區文明里中正路1之1號',
                'telephone' => '02  29924018',
            ],
            219 => 
            [
                'id' => 220,
                'name' => '新樹派出所',
                'name_in_en' => 'Xinshu Police Station',
                'zip_code' => 242,
                'address' => '新北市新莊區樹新路222號',
                'telephone' => '02 22075386',
            ],
            220 => 
            [
                'id' => 221,
                'name' => '中平派出所',
                'name_in_en' => 'Zhongping Police Station',
                'zip_code' => 242,
                'address' => '新北市新莊區中平路288號',
                'telephone' => '02  89919755',
            ],
            221 => 
            [
                'id' => 222,
                'name' => '五工派出所',
                'name_in_en' => 'Wugong Police Station',
                'zip_code' => 242,
                'address' => '新北市新莊區五工路95之1號',
                'telephone' => '02  22993050',
            ],
            222 => 
            [
                'id' => 223,
                'name' => '昌平派出所',
                'name_in_en' => 'Changping Police Station',
                'zip_code' => 242,
                'address' => '新北市新莊區富貴路111號',
                'telephone' => '02 85227625',
            ],
            223 => 
            [
                'id' => 224,
                'name' => '林口分局',
                'name_in_en' => 'Limkou Precinct',
                'zip_code' => 244,
                'address' => '新北市林口區忠孝二路57號',
                'telephone' => '02  26068455',
            ],
            224 => 
            [
                'id' => 225,
                'name' => '林口派出所',
                'name_in_en' => 'Limkou Police Station',
                'zip_code' => 244,
                'address' => '新北市林口區中正路102號',
                'telephone' => '02  26011630',
            ],
            225 => 
            [
                'id' => 226,
                'name' => '文化派出所',
                'name_in_en' => 'Wenhua Police Station',
                'zip_code' => 244,
                'address' => '新北市林口區麗園一街5號',
                'telephone' => '02  26095766',
            ],
            226 => 
            [
                'id' => 227,
                'name' => '忠孝派出所',
                'name_in_en' => 'Zhongxiao Police Station',
                'zip_code' => 244,
                'address' => '新北市林口區忠孝二路57號',
                'telephone' => '02 26087165',
            ],
            227 => 
            [
                'id' => 228,
                'name' => '下福派出所',
                'name_in_en' => 'Xiafu Police Station',
                'zip_code' => 244,
                'address' => '新北市林口區下福里下福99之1號',
                'telephone' => '02  26062835',
            ],
            228 => 
            [
                'id' => 229,
                'name' => '瑞平派出所',
                'name_in_en' => 'Ruiping Police Station',
                'zip_code' => 244,
                'address' => '新北市林口區瑞平里10鄰44號',
                'telephone' => '02  26052724',
            ],
            229 => 
            [
                'id' => 230,
                'name' => '泰山分駐所',
                'name_in_en' => 'Taishan Police Station',
                'zip_code' => 243,
                'address' => '新北市泰山區泰林路2段214號',
                'telephone' => '02  29097947',
            ],
            230 => 
            [
                'id' => 231,
                'name' => '明志派出所',
                'name_in_en' => 'Mingzhi Police Station',
                'zip_code' => 243,
                'address' => '新北市泰山區明志路2段426號',
                'telephone' => '02  29069881',
            ],
            231 => 
            [
                'id' => 232,
                'name' => '瑞芳分局',
                'name_in_en' => 'Ruifang Precinct',
                'zip_code' => 224,
                'address' => '新北市瑞芳區明燈路3段25號',
                'telephone' => '02  24062602',
            ],
            232 => 
            [
                'id' => 233,
                'name' => '九份派出所',
                'name_in_en' => 'Jiufen Police Station',
                'zip_code' => 224,
                'address' => '新北市瑞芳區豎崎路24號',
                'telephone' => '02  24972609',
            ],
            233 => 
            [
                'id' => 234,
                'name' => '吉林派出所',
                'name_in_en' => 'Jilin Police Station',
                'zip_code' => 228,
                'address' => '新北市貢寮區枋腳街4號',
                'telephone' => '02  24941534',
            ],
            234 => 
            [
                'id' => 235,
                'name' => '四腳亭派出所',
                'name_in_en' => 'Sijiaoting  Police  Station',
                'zip_code' => 224,
                'address' => '新北市瑞芳區瑞竹路124號',
                'telephone' => '02  24576947',
            ],
            235 => 
            [
                'id' => 236,
                'name' => '金瓜石派出所',
                'name_in_en' => 'Jinguash Police Station',
                'zip_code' => 224,
                'address' => '新北市瑞芳區金光路51號',
                'telephone' => '02  24961528',
            ],
            236 => 
            [
                'id' => 237,
                'name' => '牡丹派出所',
                'name_in_en' => 'Mudan Police Staion',
                'zip_code' => 227,
                'address' => '新北市雙溪區牡丹里牡丹106號',
                'telephone' => '02  24931340',
            ],
            237 => 
            [
                'id' => 238,
                'name' => '澳底派出所',
                'name_in_en' => 'Aodi Police Station',
                'zip_code' => 228,
                'address' => '新北市貢寮區延平街36號',
                'telephone' => '02  24901074',
            ],
            238 => 
            [
                'id' => 239,
                'name' => '東勢格派出所',
                'name_in_en' => 'Dongshige Police Station',
                'zip_code' => 226,
                'address' => '新北市平溪區東勢里東勢格1號',
                'telephone' => '02  24951379',
            ],
            239 => 
            [
                'id' => 240,
                'name' => '柑腳派出所',
                'name_in_en' => 'Ganjiao Police Station',
                'zip_code' => 227,
                'address' => '新北市雙溪區長源里柑腳19號',
                'telephone' => '02  24931744',
            ],
            240 => 
            [
                'id' => 241,
                'name' => '福隆派出所',
                'name_in_en' => 'FulongPoliceStation',
                'zip_code' => 228,
                'address' => '新北市貢寮區福隆街19號',
                'telephone' => '02  24991541',
            ],
            241 => 
            [
                'id' => 242,
                'name' => '鼻頭派出所',
                'name_in_en' => 'Bitou Police Station',
                'zip_code' => 224,
                'address' => '新北市瑞芳區鼻頭路101號',
                'telephone' => '02  24911579',
            ],
            242 => 
            [
                'id' => 243,
                'name' => '瑞濱派出所',
                'name_in_en' => 'Ruibin  Police Station',
                'zip_code' => 224,
                'address' => '新北市瑞芳區建基路1段5之1號',
                'telephone' => '02  24972009',
            ],
            243 => 
            [
                'id' => 244,
                'name' => '猴硐派出所',
                'name_in_en' => 'Houtong Police Station',
                'zip_code' => 224,
                'address' => '新北市瑞芳區九芎橋路96號',
                'telephone' => '02  24972527',
            ],
            244 => 
            [
                'id' => 245,
                'name' => '大寮派出所',
                'name_in_en' => 'Daliao Police Station',
                'zip_code' => 224,
                'address' => '新北市瑞芳區魚里魚坑路278號',
                'telephone' => '02  24972608',
            ],
            245 => 
            [
                'id' => 246,
                'name' => '卯澳派出所',
                'name_in_en' => 'Maoao Police Station',
                'zip_code' => 228,
                'address' => '新北市貢寮區福連街18號',
                'telephone' => '02  24991540',
            ],
            246 => 
            [
                'id' => 247,
                'name' => '和美派出所',
                'name_in_en' => 'Hemei Police Station',
                'zip_code' => 228,
                'address' => '新北市貢寮區和美街30號',
                'telephone' => '02  24901504',
            ],
            247 => 
            [
                'id' => 248,
                'name' => '太平派出所',
                'name_in_en' => 'Taiping Police Station',
                'zip_code' => 227,
                'address' => '新北市雙溪區大平路62號',
                'telephone' => '02  24933317',
            ],
            248 => 
            [
                'id' => 249,
                'name' => '貢寮分駐所',
                'name_in_en' => 'Gongliao Police Station',
                'zip_code' => 228,
                'address' => '新北市貢寮區朝陽街70巷7號',
                'telephone' => '02  24941304',
            ],
            249 => 
            [
                'id' => 250,
                'name' => '十分派出所',
                'name_in_en' => 'Shifen Police Station',
                'zip_code' => 226,
                'address' => '新北市平溪區十分街283號',
                'telephone' => '02  24958128',
            ],
            250 => 
            [
                'id' => 251,
                'name' => '平溪分駐所',
                'name_in_en' => 'Pingxi Police Station',
                'zip_code' => 226,
                'address' => '新北市平溪區平溪街43之1號',
                'telephone' => '02  24951063',
            ],
            251 => 
            [
                'id' => 252,
                'name' => '平林派出所',
                'name_in_en' => 'Pingglin Police Station',
                'zip_code' => 227,
                'address' => '新北市雙溪區上林里內平林47號',
                'telephone' => '02  24931794',
            ],
            252 => 
            [
                'id' => 253,
                'name' => '雙溪分駐所',
                'name_in_en' => 'Shuangxi Police Station',
                'zip_code' => 227,
                'address' => '新北市雙溪區太平路64號',
                'telephone' => '02  24931059',
            ],
            253 => 
            [
                'id' => 254,
                'name' => '水湳洞派出所',
                'name_in_en' => 'Shuinandong Police Station',
                'zip_code' => 224,
                'address' => '新北市瑞芳區洞頂路8號',
                'telephone' => '02  24961529',
            ],
            254 => 
            [
                'id' => 255,
                'name' => '瑞芳派出所',
                'name_in_en' => 'Ruei-Fang Police Station',
                'zip_code' => 224,
                'address' => '新北市瑞芳區明燈路3段25號',
                'telephone' => '02  24972141',
            ],
            255 => 
            [
                'id' => 256,
                'name' => '蘆洲分局',
                'name_in_en' => 'Luzhou Precinct',
                'zip_code' => 247,
                'address' => '新北市蘆洲區長榮路200號',
                'telephone' => '02  22810555',
            ],
            256 => 
            [
                'id' => 257,
                'name' => '延平派出所',
                'name_in_en' => 'Yanping Police Station',
                'zip_code' => 247,
                'address' => '新北市蘆洲區長安街108巷2號',
                'telephone' => '02  82821991',
            ],
            257 => 
            [
                'id' => 258,
                'name' => '更寮派出所',
                'name_in_en' => 'Gengliao Police Station',
                'zip_code' => 248,
                'address' => '新北市五股區中興路2段147號',
                'telephone' => '02  29711126',
            ],
            258 => 
            [
                'id' => 259,
                'name' => '成州派出所',
                'name_in_en' => 'Chengzhou Police Station',
                'zip_code' => 248,
                'address' => '新北市五股區成泰路3段539號',
                'telephone' => '02  22921296',
            ],
            259 => 
            [
                'id' => 260,
                'name' => '龍源派出所',
                'name_in_en' => 'Longyuan Police Station',
                'zip_code' => 249,
                'address' => '新北市八里區龍米路1段225號',
                'telephone' => '02  26182245',
            ],
            260 => 
            [
                'id' => 261,
                'name' => '五股分駐所',
                'name_in_en' => 'Wugu Police Station',
                'zip_code' => 248,
                'address' => '新北市五股區中興路4段67號',
                'telephone' => '02  22916948',
            ],
            261 => 
            [
                'id' => 262,
                'name' => '八里分駐所',
                'name_in_en' => 'Bali Police Station',
                'zip_code' => 249,
                'address' => '新北市八里區訊塘路37號',
                'telephone' => '02  26101315',
            ],
            262 => 
            [
                'id' => 263,
                'name' => '三民派出所',
                'name_in_en' => 'Sanmin Police Station',
                'zip_code' => 247,
                'address' => '新北市蘆洲區長榮路200號',
                'telephone' => '02  22823775',
            ],
            263 => 
            [
                'id' => 264,
                'name' => '蘆洲派出所',
                'name_in_en' => 'Luzhou Police Station',
                'zip_code' => 247,
                'address' => '新北市蘆洲區中山二路92號',
                'telephone' => '02  22813358',
            ],
            264 => 
            [
                'id' => 265,
                'name' => '德音派出所',
                'name_in_en' => 'Deyin Police Station',
                'zip_code' => 248,
                'address' => '新北市五股區水碓二路1號1樓',
                'telephone' => '02  82923789',
            ],
            265 => 
            [
                'id' => 266,
                'name' => '集賢派出所',
                'name_in_en' => 'Jixian Police Station',
                'zip_code' => 247,
                'address' => '新北市蘆洲區仁義里集賢路245號1樓',
                'telephone' => '02  82832110',
            ],
            266 => 
            [
                'id' => 267,
                'name' => '金山分局',
                'name_in_en' => 'Jin-shan Substation',
                'zip_code' => 208,
                'address' => '新北市金山區民生路65號',
                'telephone' => '02  24986532',
            ],
            267 => 
            [
                'id' => 268,
                'name' => '中角派出所',
                'name_in_en' => 'Zhong-Jiao Station',
                'zip_code' => 208,
                'address' => '新北市金山區永興里濆水7之2號',
                'telephone' => '02  24982136',
            ],
            268 => 
            [
                'id' => 269,
                'name' => '崁腳派出所',
                'name_in_en' => 'Kan-Jiao Station',
                'zip_code' => 207,
                'address' => '新北市萬里區崁腳路38號',
                'telephone' => '02  24922740',
            ],
            269 => 
            [
                'id' => 270,
                'name' => '重光派出所',
                'name_in_en' => 'Chong-Guang Station',
                'zip_code' => 208,
                'address' => '新北市金山區重和里茅埔頭8號',
                'telephone' => '02  24080470',
            ],
            270 => 
            [
                'id' => 271,
                'name' => '乾華派出所',
                'name_in_en' => 'Qian-Hua Station',
                'zip_code' => 253,
                'address' => '新北市石門區草里里阿里荖14之1號',
                'telephone' => '02  26381274',
            ],
            271 => 
            [
                'id' => 272,
                'name' => '野柳派出所',
                'name_in_en' => 'Ye-Liu Station',
                'zip_code' => 207,
                'address' => '新北市萬里區野柳里港西9號',
                'telephone' => '02  24922510',
            ],
            272 => 
            [
                'id' => 273,
                'name' => '老梅派出所',
                'name_in_en' => 'Lao-Mei Station',
                'zip_code' => 253,
                'address' => '新北市石門區老梅里老梅路26號',
                'telephone' => '02  26381253',
            ],
            273 => 
            [
                'id' => 274,
                'name' => '大鵬派出所',
                'name_in_en' => 'Da-Peng Station',
                'zip_code' => 207,
                'address' => '新北市萬里區大鵬里加投路81號',
                'telephone' => '02  24982475',
            ],
            274 => 
            [
                'id' => 275,
                'name' => '石門分駐所',
                'name_in_en' => 'Shi-Men Station',
                'zip_code' => 253,
                'address' => '新北市石門區中山路64號',
                'telephone' => '02  26381244',
            ],
            275 => 
            [
                'id' => 276,
                'name' => '金山派出所',
                'name_in_en' => 'Jin-Shan Station',
                'zip_code' => 208,
                'address' => '新北市金山區民生路65號',
                'telephone' => '02  24982009',
            ],
            276 => 
            [
                'id' => 277,
                'name' => '萬里分駐所',
                'name_in_en' => 'Wan-Li Station',
                'zip_code' => 207,
                'address' => '新北市萬里區瑪鋉路153號',
                'telephone' => '02  24922122',
            ],
            277 => 
            [
                'id' => 278,
                'name' => '海山分局',
                'name_in_en' => 'Haishan Precinct',
                'zip_code' => 220,
                'address' => '新北市板橋區漢生東路195號',
                'telephone' => '02  29640322',
            ],
            278 => 
            [
                'id' => 279,
                'name' => '海山派出所',
                'name_in_en' => 'Haishan Police Station',
                'zip_code' => 220,
                'address' => '新北市板橋區漢生東路195號',
                'telephone' => '02  29574370',
            ],
            279 => 
            [
                'id' => 280,
                'name' => '新海派出所',
                'name_in_en' => 'Xinhai Police Station',
                'zip_code' => 220,
                'address' => '新北市板橋區英士路151號',
                'telephone' => '02  22586867',
            ],
            280 => 
            [
                'id' => 281,
                'name' => '埔墘派出所',
                'name_in_en' => 'Puqian Police Station',
                'zip_code' => 220,
                'address' => '新北市板橋區中山路2段286號',
                'telephone' => '02  29616814',
            ],
            281 => 
            [
                'id' => 282,
                'name' => '江翠派出所',
                'name_in_en' => 'Jiangcui Police Station',
                'zip_code' => 220,
                'address' => '新北市板橋區吳鳳路50巷36號',
                'telephone' => '02  22521225',
            ],
            282 => 
            [
                'id' => 283,
                'name' => '文聖派出所',
                'name_in_en' => 'Wensheng Police Station',
                'zip_code' => 220,
                'address' => '新北市板橋區大同街14號',
                'telephone' => '02 22583956',
            ],
            283 => 
            [
                'id' => 284,
                'name' => '桃園市政府警察局',
                'name_in_en' => 'Taoyuan Police  Department',
                'zip_code' => 330,
                'address' => '桃園市桃園區縣府路3號',
                'telephone' => '03 3334400',
            ],
            284 => 
            [
                'id' => 285,
                'name' => '桃園分局',
                'name_in_en' => 'Taoyuan Police Precinct',
                'zip_code' => 330,
                'address' => '桃園市桃園區力行路258號',
                'telephone' => '03 3323811',
            ],
            285 => 
            [
                'id' => 286,
                'name' => '大樹派出所',
                'name_in_en' => 'Dashu Police Station',
                'zip_code' => 330,
                'address' => '桃園市桃園區樹仁二街41號',
                'telephone' => '03 3622987',
            ],
            286 => 
            [
                'id' => 287,
                'name' => '埔子派出所',
                'name_in_en' => 'Puzi Police Station',
                'zip_code' => 330,
                'address' => '桃園市桃園區力行路258號',
                'telephone' => '03 3353692',
            ],
            287 => 
            [
                'id' => 288,
                'name' => '青溪派出所',
                'name_in_en' => 'Qingxi Police Station',
                'zip_code' => 330,
                'address' => '桃園市桃園區鎮撫街39號',
                'telephone' => '03 3332742',
            ],
            288 => 
            [
                'id' => 289,
                'name' => '中路派出所',
                'name_in_en' => 'Zhonglu Police Station',
                'zip_code' => 330,
                'address' => '桃園市桃園區縣府路51號',
                'telephone' => '03 3578385',
            ],
            289 => 
            [
                'id' => 290,
                'name' => '景福派出所',
                'name_in_en' => 'Jingfu Police Station',
                'zip_code' => 330,
                'address' => '桃園市桃園區民族路110號',
                'telephone' => '03 3578385',
            ],
            290 => 
            [
                'id' => 291,
                'name' => '武陵派出所',
                'name_in_en' => 'Wuling Police Station',
                'zip_code' => 330,
                'address' => '桃園市桃園區復興路137號',
                'telephone' => '03 3364224',
            ],
            291 => 
            [
                'id' => 292,
                'name' => '同安派出所',
                'name_in_en' => 'Tongan Police Station',
                'zip_code' => 330,
                'address' => '桃園市桃園區經國路799號',
                'telephone' => '03 3568289',
            ],
            292 => 
            [
                'id' => 293,
                'name' => '龍安派出所',
                'name_in_en' => 'Longan Police Station',
                'zip_code' => 330,
                'address' => '桃園市桃園區國豐一街101號',
                'telephone' => '03 3601975',
            ],
            293 => 
            [
                'id' => 294,
                'name' => '大園分局',
                'name_in_en' => 'Dayuan  Police Percinct',
                'zip_code' => 337,
                'address' => '桃園市大園區中正西路13號',
                'telephone' => '03 3862009',
            ],
            294 => 
            [
                'id' => 295,
                'name' => '潮音派出所',
                'name_in_en' => 'Chao-Yin Police Station',
                'zip_code' => 337,
                'address' => '桃園市大園區潮音北路473號',
                'telephone' => '03 3862314',
            ],
            295 => 
            [
                'id' => 296,
                'name' => '觀音分駐所',
                'name_in_en' => 'Guan-Yin Police Station',
                'zip_code' => 328,
                'address' => '桃園市觀音區中山路14號',
                'telephone' => '03 4732025',
            ],
            296 => 
            [
                'id' => 297,
                'name' => '草漯派出所',
                'name_in_en' => 'Cao-Ta Police Station',
                'zip_code' => 328,
                'address' => '桃園市觀音區大觀路2段77號',
                'telephone' => '03 4830301',
            ],
            297 => 
            [
                'id' => 298,
                'name' => '新坡派出所',
                'name_in_en' => 'Sin-Po Police Station',
                'zip_code' => 328,
                'address' => '桃園市觀音區中山路2段668號',
                'telephone' => '03 4981001',
            ],
            298 => 
            [
                'id' => 299,
                'name' => '竹圍派出所',
                'name_in_en' => 'Jhu-Wei Police Station',
                'zip_code' => 337,
                'address' => '桃園市大園區竹圍街10號',
                'telephone' => '03 3835089',
            ],
            299 => 
            [
                'id' => 300,
                'name' => '埔心派出所',
                'name_in_en' => 'Pu-Sin Police Station',
                'zip_code' => 337,
                'address' => '桃園市大園區埔心里1號',
                'telephone' => '03 3811684',
            ],
            300 => 
            [
                'id' => 301,
                'name' => '大園派出所',
                'name_in_en' => 'Dayuan Police Station',
                'zip_code' => 337,
                'address' => '桃園市大園區中正西路13號',
                'telephone' => '03 3862804',
            ],
            301 => 
            [
                'id' => 302,
                'name' => '三菓派出所',
                'name_in_en' => 'San-Guo Police Station',
                'zip_code' => 337,
                'address' => '桃園市大園區三和路25號',
                'telephone' => '03 3936118',
            ],
            302 => 
            [
                'id' => 303,
                'name' => '蘆竹分局',
                'name_in_en' => 'Lujhu  Police Precinet',
                'zip_code' => 338,
                'address' => '桃園市蘆竹區南崁路175巷10-2號',
                'telephone' => '03 2220307',
            ],
            303 => 
            [
                'id' => 304,
                'name' => '南崁派出所',
                'name_in_en' => 'NanKan Police Station',
                'zip_code' => 338,
                'address' => '桃園市蘆竹區錦溪路99號',
                'telephone' => '03 3223981',
            ],
            304 => 
            [
                'id' => 305,
                'name' => '大竹派出所',
                'name_in_en' => 'Dajhu Police Station',
                'zip_code' => 338,
                'address' => '桃園市蘆竹區大竹路540號',
                'telephone' => '03 3232704',
            ],
            305 => 
            [
                'id' => 306,
                'name' => '南竹派出所',
                'name_in_en' => 'Nanjhu Police Station',
                'zip_code' => 337,
                'address' => '桃園市蘆竹區南竹路2段99號',
                'telephone' => '03 3121090',
            ],
            306 => 
            [
                'id' => 307,
                'name' => '外社派出所',
                'name_in_en' => 'Waishe Police Station',
                'zip_code' => 338,
                'address' => '桃園市蘆竹區山林路2段405號',
                'telephone' => '03 3241749',
            ],
            307 => 
            [
                'id' => 308,
                'name' => '大溪分局',
                'name_in_en' => 'Daxi  Police Precinct',
                'zip_code' => 335,
                'address' => '桃園市大溪區復興路一段385號',
                'telephone' => '03 3887643',
            ],
            308 => 
            [
                'id' => 309,
                'name' => '復興分駐所',
                'name_in_en' => 'Fuxing  Police Station',
                'zip_code' => 336,
                'address' => '桃園市復興區中正路2號',
                'telephone' => '03 3822604',
            ],
            309 => 
            [
                'id' => 310,
                'name' => '羅浮派出所',
                'name_in_en' => 'Luofu Police Station',
                'zip_code' => 336,
                'address' => '桃園市復興區羅浮里3鄰3號',
                'telephone' => '03 3822606',
            ],
            310 => 
            [
                'id' => 311,
                'name' => '榮華派出所',
                'name_in_en' => 'Ronghua Police Station',
                'zip_code' => 336,
                'address' => '桃園市復興區高義里11鄰卡義蘭2號',
                'telephone' => '03 3821016',
            ],
            311 => 
            [
                'id' => 312,
                'name' => '巴陵派出所',
                'name_in_en' => 'Baling Police Station',
                'zip_code' => 336,
                'address' => '桃園市復興區華陵里9鄰44號',
                'telephone' => '03 3912180',
            ],
            312 => 
            [
                'id' => 313,
                'name' => '奎輝派出所',
                'name_in_en' => 'Kuihui Police Station',
                'zip_code' => 336,
                'address' => '桃園市復興區奎輝里4鄰37號',
                'telephone' => '03 3822960',
            ],
            313 => 
            [
                'id' => 314,
                'name' => '三光派出所',
                'name_in_en' => 'Sanguang Police Station',
                'zip_code' => 336,
                'address' => '桃園市復興區三光里7鄰武道能敢32號',
                'telephone' => '03 3912258',
            ],
            314 => 
            [
                'id' => 315,
                'name' => '光華派出所',
                'name_in_en' => 'Guanghua Police Station',
                'zip_code' => 336,
                'address' => '桃園市復興區華陵里哈嘎灣10號',
                'telephone' => '03 3912253',
            ],
            315 => 
            [
                'id' => 316,
                'name' => '霞雲派出所',
                'name_in_en' => 'Xiayun Police Station',
                'zip_code' => 336,
                'address' => '桃園市復興區霞雲里6鄰21號',
                'telephone' => '03 3822607',
            ],
            316 => 
            [
                'id' => 317,
                'name' => '長興派出所',
                'name_in_en' => 'Changxing Police Station',
                'zip_code' => 336,
                'address' => '桃園市復興區長興里16鄰29號',
                'telephone' => '03 3822961',
            ],
            317 => 
            [
                'id' => 318,
                'name' => '溪內派出所',
                'name_in_en' => 'Xinei Police Station',
                'zip_code' => 336,
                'address' => '桃園市復興區羅浮里河流2鄰51之2號',
                'telephone' => '03 3822958',
            ],
            318 => 
            [
                'id' => 319,
                'name' => '三元派出所',
                'name_in_en' => 'Sanyuan Police Station',
                'zip_code' => 335,
                'address' => '桃園市大溪區石園路53號',
                'telephone' => '03 3801040',
            ],
            319 => 
            [
                'id' => 320,
                'name' => '圳頂派出所',
                'name_in_en' => 'Zunding Police Station',
                'zip_code' => 335,
                'address' => '桃園市大溪區公園路46號',
                'telephone' => '03 3801287',
            ],
            320 => 
            [
                'id' => 321,
                'name' => '內柵派出所',
                'name_in_en' => 'Neizha Police Station',
                'zip_code' => 335,
                'address' => '桃園市大溪區內柵路1段56號',
                'telephone' => '03 3883849',
            ],
            321 => 
            [
                'id' => 322,
                'name' => '中新派出所',
                'name_in_en' => 'Zhongxin Police Station',
                'zip_code' => 335,
                'address' => '桃園市大溪區大鶯路1479號',
                'telephone' => '03 3801853',
            ],
            322 => 
            [
                'id' => 323,
                'name' => '百吉派出所',
                'name_in_en' => 'Baiji Police Station',
                'zip_code' => 335,
                'address' => '桃園市大溪區復興路二段209號',
                'telephone' => '03 3885884',
            ],
            323 => 
            [
                'id' => 324,
                'name' => '三民派出所',
                'name_in_en' => 'Sanmin Police Station',
                'zip_code' => 336,
                'address' => '桃園市復興區三民里水流東路43號',
                'telephone' => '03 3825605',
            ],
            324 => 
            [
                'id' => 325,
                'name' => '三層派出所',
                'name_in_en' => 'Sanceng Police Station',
                'zip_code' => 335,
                'address' => '桃園市大溪區復興路1段890號',
                'telephone' => '03 3882349',
            ],
            325 => 
            [
                'id' => 326,
                'name' => '永福派出所',
                'name_in_en' => 'Yongfu Police Station',
                'zip_code' => 335,
                'address' => '桃園市大溪區信義路1127號',
                'telephone' => '03 3885802',
            ],
            326 => 
            [
                'id' => 327,
                'name' => '南雅派出所',
                'name_in_en' => 'Nanya Police Station',
                'zip_code' => 335,
                'address' => '桃園市大溪區康莊路181號',
                'telephone' => '03 3883720',
            ],
            327 => 
            [
                'id' => 328,
                'name' => '福安派出所',
                'name_in_en' => 'Fuan Police Station',
                'zip_code' => 335,
                'address' => '桃園市大溪區福安里猴洞坑19之2號',
                'telephone' => '03 3888767',
            ],
            328 => 
            [
                'id' => 329,
                'name' => '中壢分局',
                'name_in_en' => 'Zhongli Police Precinct',
                'zip_code' => 320,
                'address' => '桃園市中壢區延平路607號',
                'telephone' => '03 4221460',
            ],
            329 => 
            [
                'id' => 330,
                'name' => '文化派出所',
                'name_in_en' => 'Wenhua Police Station',
                'zip_code' => 320,
                'address' => '桃園市中壢區吉林路60號',
                'telephone' => '03 4528348',
            ],
            330 => 
            [
                'id' => 331,
                'name' => '仁愛派出所',
                'name_in_en' => 'Renai Police Station',
                'zip_code' => 320,
                'address' => '桃園市中壢區仁愛里功學路112號',
                'telephone' => '03 4563524',
            ],
            331 => 
            [
                'id' => 332,
                'name' => '興國派出所',
                'name_in_en' => 'Xingguo Police Station',
                'zip_code' => 320,
                'address' => '桃園市中壢區志廣路38號',
                'telephone' => '03 4258325',
            ],
            332 => 
            [
                'id' => 333,
                'name' => '龍興派出所',
                'name_in_en' => 'Longxing Police Station',
                'zip_code' => 320,
                'address' => '桃園市中壢區龍勇路141號',
                'telephone' => '03 4285776',
            ],
            333 => 
            [
                'id' => 334,
                'name' => '大崙派出所',
                'name_in_en' => 'Dalun Police Station',
                'zip_code' => 320,
                'address' => '桃園市中壢區崇德路137號',
                'telephone' => '03 4982260',
            ],
            334 => 
            [
                'id' => 335,
                'name' => '中福派出所',
                'name_in_en' => 'Zhongfu Police Station',
                'zip_code' => 320,
                'address' => '桃園市中壢區南園二路86號',
                'telephone' => '03 4523093',
            ],
            335 => 
            [
                'id' => 336,
                'name' => '內壢派出所',
                'name_in_en' => 'Neili Police Station',
                'zip_code' => 320,
                'address' => '桃園市中壢區中華路1段364號',
                'telephone' => '03 4553845',
            ],
            336 => 
            [
                'id' => 337,
                'name' => '普仁派出所',
                'name_in_en' => 'Puren Police Station',
                'zip_code' => 320,
                'address' => '桃園市中壢區中山東路二段361號',
                'telephone' => '03 4562912',
            ],
            337 => 
            [
                'id' => 338,
                'name' => '中壢派出所',
                'name_in_en' => 'Zhongli Police Station',
                'zip_code' => 320,
                'address' => '桃園市中壢區延平路607號',
                'telephone' => '03 4222030',
            ],
            338 => 
            [
                'id' => 339,
                'name' => '自強派出所',
                'name_in_en' => 'Ziqiang Police Station',
                'zip_code' => 320,
                'address' => '桃園市中壢區強國路68號',
                'telephone' => '03 2854333',
            ],
            339 => 
            [
                'id' => 340,
                'name' => '青埔派出所',
                'name_in_en' => 'Qingpu Police Station',
                'zip_code' => 320,
                'address' => '桃園市中壢區青埔路1段67號',
                'telephone' => '03 4531468',
            ],
            340 => 
            [
                'id' => 341,
                'name' => '楊梅分局',
                'name_in_en' => 'Yangmei  Police Precinct',
                'zip_code' => 326,
                'address' => '桃園市楊梅區中山路123號',
                'telephone' => '03 4755749',
            ],
            341 => 
            [
                'id' => 342,
                'name' => '頭洲派出所',
                'name_in_en' => 'Touzhou Police Station',
                'zip_code' => 327,
                'address' => '桃園市新屋區頭洲里中山東路二段757號',
                'telephone' => '03 4909508',
            ],
            342 => 
            [
                'id' => 343,
                'name' => '幼獅派出所',
                'name_in_en' => 'Youshi Police Station',
                'zip_code' => 326,
                'address' => '桃園市楊梅區幼獅路1段458號',
                'telephone' => '03 4643521',
            ],
            343 => 
            [
                'id' => 344,
                'name' => '上湖派出所',
                'name_in_en' => 'Shanghu Police Station',
                'zip_code' => 326,
                'address' => '桃園市楊梅區楊湖路3段239號',
                'telephone' => '03 4721721',
            ],
            344 => 
            [
                'id' => 345,
                'name' => '新屋分駐所',
                'name_in_en' => 'Xinwu Police Station',
                'zip_code' => 327,
                'address' => '桃園市新屋區中山路241號',
                'telephone' => '03 4772014',
            ],
            345 => 
            [
                'id' => 346,
                'name' => '永安派出所',
                'name_in_en' => 'Yongan Police Station',
                'zip_code' => 327,
                'address' => '桃園市新屋區中山西路3段62號',
                'telephone' => '03 4861092',
            ],
            346 => 
            [
                'id' => 347,
                'name' => '大坡派出所',
                'name_in_en' => 'Dapo Police Station',
                'zip_code' => 327,
                'address' => '桃園市新屋區三角堀94號',
                'telephone' => '03 4768410',
            ],
            347 => 
            [
                'id' => 348,
                'name' => '富岡派出所',
                'name_in_en' => 'Fugang Police Station',
                'zip_code' => 326,
                'address' => '桃園市楊梅區富源街22號',
                'telephone' => '03 4721794',
            ],
            348 => 
            [
                'id' => 349,
                'name' => '草湳派出所',
                'name_in_en' => 'Caonan Police Station',
                'zip_code' => 326,
                'address' => '桃園市楊梅區永美路237號',
                'telephone' => '03 4826278',
            ],
            349 => 
            [
                'id' => 350,
                'name' => '楊梅派出所',
                'name_in_en' => 'Yangmei Police Station',
                'zip_code' => 326,
                'address' => '桃園市楊梅區中山路123號',
                'telephone' => '03 4782007',
            ],
            350 => 
            [
                'id' => 351,
                'name' => '平鎮分局',
                'name_in_en' => 'Pingjhen Police Precinct',
                'zip_code' => 324,
                'address' => '桃園市平鎮區中庸路123號',
                'telephone' => '03 4390218',
            ],
            351 => 
            [
                'id' => 352,
                'name' => '北勢派出所',
                'name_in_en' => 'Pei-Shih Police Station',
                'zip_code' => 324,
                'address' => '桃園市平鎮區振平街228號',
                'telephone' => '03 4282206',
            ],
            352 => 
            [
                'id' => 353,
                'name' => '宋屋派出所',
                'name_in_en' => 'Sung-Wu Police Station',
                'zip_code' => 324,
                'address' => '桃園市平鎮區延平路2段412號',
                'telephone' => '03 4938381',
            ],
            353 => 
            [
                'id' => 354,
                'name' => '平鎮派出所',
                'name_in_en' => 'Pingjhen Police Station',
                'zip_code' => 324,
                'address' => '桃園市平鎮區中庸路123號',
                'telephone' => '03 4391280',
            ],
            354 => 
            [
                'id' => 355,
                'name' => '建安派出所',
                'name_in_en' => 'Chien-An Police Station',
                'zip_code' => 324,
                'address' => '桃園市平鎮區金陵路5段108號',
                'telephone' => '03 4502331',
            ],
            355 => 
            [
                'id' => 356,
                'name' => '龍岡派出所',
                'name_in_en' => 'Lung-Kang Police Station',
                'zip_code' => 320,
                'address' => '桃園市平鎮區龍南路141號',
                'telephone' => '03 4503245',
            ],
            356 => 
            [
                'id' => 357,
                'name' => '龜山分局',
                'name_in_en' => 'KweiShan Police Precinct',
                'zip_code' => 333,
                'address' => '桃園市龜山區自強南路123號',
                'telephone' => '03 3292701',
            ],
            357 => 
            [
                'id' => 358,
                'name' => '龜山派出所',
                'name_in_en' => 'Kwei Shan Police Station',
                'zip_code' => 333,
                'address' => '桃園市龜山區萬壽路2段931號',
                'telephone' => '03 3202554',
            ],
            358 => 
            [
                'id' => 359,
                'name' => '大林派出所',
                'name_in_en' => 'Da Lin Police Station',
                'zip_code' => 333,
                'address' => '桃園市龜山區中興路158號',
                'telephone' => '03 3500070',
            ],
            359 => 
            [
                'id' => 360,
                'name' => '大坑派出所',
                'name_in_en' => 'Da Keng Police Station',
                'zip_code' => 333,
                'address' => '桃園市龜山區大坑路一段851號',
                'telephone' => '03 3251310',
            ],
            360 => 
            [
                'id' => 361,
                'name' => '大埔派出所',
                'name_in_en' => 'Dapu Police Station',
                'zip_code' => 333,
                'address' => '桃園市龜山區文德二路80號',
                'telephone' => '03 3291735',
            ],
            361 => 
            [
                'id' => 362,
                'name' => '迴龍派出所',
                'name_in_en' => 'Hueilong Police Station',
                'zip_code' => 333,
                'address' => '桃園市龜山區龍鳳街32巷6號1樓',
                'telephone' => '02 82006815',
            ],
            362 => 
            [
                'id' => 363,
                'name' => '坪頂派出所',
                'name_in_en' => 'Pingding Police Station',
                'zip_code' => 333,
                'address' => '桃園市龜山區大湖一路65號',
                'telephone' => '03 3282570',
            ],
            363 => 
            [
                'id' => 364,
                'name' => '大華派出所',
                'name_in_en' => 'Dahwa Police Station',
                'zip_code' => 333,
                'address' => '桃園市龜山區文化七路135號',
                'telephone' => '03 3975557',
            ],
            364 => 
            [
                'id' => 365,
                'name' => '八德分局',
                'name_in_en' => 'Bade  Police Precinct',
                'zip_code' => 334,
                'address' => '桃園市八德區興豐路1216號',
                'telephone' => '03 3731907',
            ],
            365 => 
            [
                'id' => 366,
                'name' => '八德派出所',
                'name_in_en' => 'Bade Police Station',
                'zip_code' => 334,
                'address' => '桃園市八德區中山路23號',
                'telephone' => '03 3682802',
            ],
            366 => 
            [
                'id' => 367,
                'name' => '廣興派出所',
                'name_in_en' => 'Guang-Sing Police Station',
                'zip_code' => 334,
                'address' => '桃園市八德區廣興路829號',
                'telephone' => '03 3775127',
            ],
            367 => 
            [
                'id' => 368,
                'name' => '四維派出所',
                'name_in_en' => 'Sih-Wei Police Station',
                'zip_code' => 334,
                'address' => '桃園市八德區重慶街148號',
                'telephone' => '03 3662771',
            ],
            368 => 
            [
                'id' => 369,
                'name' => '高明派出所',
                'name_in_en' => 'Gao-Ming Police Station',
                'zip_code' => 334,
                'address' => '桃園市八德區永豐路160號',
                'telephone' => '03 3771790',
            ],
            369 => 
            [
                'id' => 370,
                'name' => '大安派出所',
                'name_in_en' => 'Da-AN Police Station',
                'zip_code' => 334,
                'address' => '桃園市八德區和平路頂橋巷25號',
                'telephone' => '03 3644106',
            ],
            370 => 
            [
                'id' => 371,
                'name' => '龍潭分局',
                'name_in_en' => 'Longtan Police  Precinct',
                'zip_code' => 325,
                'address' => '桃園市龍潭區干城路21號',
                'telephone' => '03 4890831',
            ],
            371 => 
            [
                'id' => 372,
                'name' => '三和派出所',
                'name_in_en' => 'Sanhe Police Station',
                'zip_code' => 325,
                'address' => '桃園市龍潭區龍新路三和段1050號',
                'telephone' => '03 4794384',
            ],
            372 => 
            [
                'id' => 373,
                'name' => '高平派出所',
                'name_in_en' => 'Gaoping Police Station',
                'zip_code' => 325,
                'address' => '桃園市龍潭區中豐路高平段281號',
                'telephone' => '03 4717204',
            ],
            373 => 
            [
                'id' => 374,
                'name' => '石門派出所',
                'name_in_en' => 'Shimen Police Station',
                'zip_code' => 325,
                'address' => '桃園市龍潭區文化路230號',
                'telephone' => '03 4712021',
            ],
            374 => 
            [
                'id' => 375,
                'name' => '中興派出所',
                'name_in_en' => 'Zhongxing Police Station',
                'zip_code' => 325,
                'address' => '桃園市龍潭區武漢路45號',
                'telephone' => '03 4797497',
            ],
            375 => 
            [
                'id' => 376,
                'name' => '龍潭派出所',
                'name_in_en' => 'Longtan Police Station',
                'zip_code' => 325,
                'address' => '桃園市龍潭區大昌路1段277號',
                'telephone' => '03 4792002',
            ],
            376 => 
            [
                'id' => 377,
                'name' => '聖亭派出所',
                'name_in_en' => 'Shengting Police Station',
                'zip_code' => 325,
                'address' => '桃園市龍潭區干城路21號',
                'telephone' => '03 4891110',
            ],
            377 => 
            [
                'id' => 378,
                'name' => '新竹縣政府警察局',
                'name_in_en' => 'Hsinchu County Police Bureau',
                'zip_code' => 302,
                'address' => '新竹縣竹北市光明六路12號',
                'telephone' => '03 5513523',
            ],
            378 => 
            [
                'id' => 379,
                'name' => '竹東分局',
                'name_in_en' => 'Jhudong Precinct',
                'zip_code' => 310,
                'address' => '新竹縣竹東鎮康寧街93號',
                'telephone' => '03 5962081',
            ],
            379 => 
            [
                'id' => 380,
                'name' => '竹東派出所',
                'name_in_en' => 'Jhudong Police Station',
                'zip_code' => 310,
                'address' => '新竹縣竹東鎮康寧街93號',
                'telephone' => '03 5962057',
            ],
            380 => 
            [
                'id' => 381,
                'name' => '五峰分駐所',
                'name_in_en' => 'Wufong Police Station',
                'zip_code' => 311,
                'address' => '新竹縣五峰鄉大隘村6鄰96號',
                'telephone' => '03 5851029',
            ],
            381 => 
            [
                'id' => 382,
                'name' => '羅山派出所',
                'name_in_en' => 'Luoshan Police Station',
                'zip_code' => 311,
                'address' => '新竹縣五峰鄉竹林村1鄰羅山20號',
                'telephone' => '03 5851214',
            ],
            382 => 
            [
                'id' => 383,
                'name' => '茅圃派出所',
                'name_in_en' => 'Maopu Police Station',
                'zip_code' => 311,
                'address' => '新竹縣五峰鄉大隘村22鄰435號',
                'telephone' => '03 5851149',
            ],
            383 => 
            [
                'id' => 384,
                'name' => '桃山派出所',
                'name_in_en' => 'Taoshan Police Station',
                'zip_code' => 311,
                'address' => '新竹縣五峰鄉桃山村2鄰桃山20號',
                'telephone' => '03 5856043',
            ],
            384 => 
            [
                'id' => 385,
                'name' => '雲山派出所',
                'name_in_en' => 'Yunshan Police Station',
                'zip_code' => 311,
                'address' => '新竹縣五峰鄉桃山村清泉12鄰202之3號',
                'telephone' => '03 5856689',
            ],
            385 => 
            [
                'id' => 386,
                'name' => '花園派出所',
                'name_in_en' => 'Huayuan Police Station',
                'zip_code' => 311,
                'address' => '新竹縣五峰鄉花園村5鄰93號',
                'telephone' => '03 5851147',
            ],
            386 => 
            [
                'id' => 387,
                'name' => '寶山分駐所',
                'name_in_en' => 'Baoshan Police Station',
                'zip_code' => 308,
                'address' => '新竹縣寶山鄉雙溪村三峰路2段636號',
                'telephone' => '03 5204139',
            ],
            387 => 
            [
                'id' => 388,
                'name' => '上坪派出所',
                'name_in_en' => 'Shangping Police Station',
                'zip_code' => 310,
                'address' => '新竹縣竹東鎮上坪里7鄰86號',
                'telephone' => '03 5961744',
            ],
            388 => 
            [
                'id' => 389,
                'name' => '新城派出所',
                'name_in_en' => 'Sincheng Police Station',
                'zip_code' => 308,
                'address' => '新竹縣寶山鄉新城村寶新路2段658號',
                'telephone' => '03 5762353',
            ],
            389 => 
            [
                'id' => 390,
                'name' => '楓橋派出所',
                'name_in_en' => 'Fongciao Police Station',
                'zip_code' => 308,
                'address' => '新竹縣寶山鄉寶山村新湖路1段415號',
                'telephone' => '03 5761140',
            ],
            390 => 
            [
                'id' => 391,
                'name' => '富興派出所',
                'name_in_en' => 'Fusing Police Station',
                'zip_code' => 315,
                'address' => '新竹縣峨眉鄉富興村太平街4號',
                'telephone' => '03 5806584',
            ],
            391 => 
            [
                'id' => 392,
                'name' => '二重埔派出所',
                'name_in_en' => 'Erchongpu Police Station',
                'zip_code' => 310,
                'address' => '新竹縣竹東鎮中興路3段95號',
                'telephone' => '03 5823504',
            ],
            392 => 
            [
                'id' => 393,
                'name' => '北埔分駐所',
                'name_in_en' => 'Beipu Police Station',
                'zip_code' => 314,
                'address' => '新竹縣北埔鄉南興村南興街70號',
                'telephone' => '03 5802214',
            ],
            393 => 
            [
                'id' => 394,
                'name' => '峨眉分駐所',
                'name_in_en' => 'Emei Police Station',
                'zip_code' => 315,
                'address' => '新竹縣峨眉鄉峨眉村峨嵋街1號',
                'telephone' => '03 5800344',
            ],
            394 => 
            [
                'id' => 395,
                'name' => '下公館派出所',
                'name_in_en' => 'Siagongguan Police Station',
                'zip_code' => 310,
                'address' => '新竹縣竹東鎮中豐路1段88號',
                'telephone' => '03 5948392',
            ],
            395 => 
            [
                'id' => 396,
                'name' => '竹北分局',
                'name_in_en' => 'Jhubei Precinct',
                'zip_code' => 302,
                'address' => '新竹縣竹北市博愛街16號',
                'telephone' => '03 5552029',
            ],
            396 => 
            [
                'id' => 397,
                'name' => '豐田派出所',
                'name_in_en' => 'Fongtian Police Station',
                'zip_code' => 302,
                'address' => '新竹縣竹北市中正西路1550號',
                'telephone' => '03 5564768',
            ],
            397 => 
            [
                'id' => 398,
                'name' => '鳳岡派出所',
                'name_in_en' => 'Fonggang Police Station',
                'zip_code' => 302,
                'address' => '新竹縣竹北市鳳岡路3段238號',
                'telephone' => '03 5561769',
            ],
            398 => 
            [
                'id' => 399,
                'name' => '六家派出所',
                'name_in_en' => 'Lioujia Police Station',
                'zip_code' => 302,
                'address' => '新竹縣竹北市自強北路81號',
                'telephone' => '03 6580308',
            ],
            399 => 
            [
                'id' => 400,
                'name' => '竹北派出所',
                'name_in_en' => 'Jhubei Police Station',
                'zip_code' => 302,
                'address' => '新竹縣竹北市中華路383號',
                'telephone' => '03 5552031',
            ],
            400 => 
            [
                'id' => 401,
                'name' => '三民派出所',
                'name_in_en' => 'Sanmin Police Station',
                'zip_code' => 302,
                'address' => '新竹縣竹北市三民路345號',
                'telephone' => '03 5556270',
            ],
            401 => 
            [
                'id' => 402,
                'name' => '高鐵派出所',
                'name_in_en' => 'Gaotie Police Station',
                'zip_code' => 302,
                'address' => '新竹縣竹北市隘口二路175號',
                'telephone' => '03 6578272',
            ],
            402 => 
            [
                'id' => 403,
                'name' => '新湖分局',
                'name_in_en' => 'Xinhu Precinct',
                'zip_code' => 303,
                'address' => '新竹縣湖口鄉中正路2段26號',
                'telephone' => '03 5902615',
            ],
            403 => 
            [
                'id' => 404,
                'name' => '山崎派出所',
                'name_in_en' => 'Shanci Police Station',
                'zip_code' => 304,
                'address' => '新竹縣新豐鄉員山村松林街8號',
                'telephone' => '03 5592736',
            ],
            404 => 
            [
                'id' => 405,
                'name' => '新豐分駐所',
                'name_in_en' => 'Sinfong Police Station',
                'zip_code' => 304,
                'address' => '新竹縣新豐鄉重興村建與路2段788號',
                'telephone' => '03 5594052',
            ],
            405 => 
            [
                'id' => 406,
                'name' => '後湖派出所',
                'name_in_en' => 'Houhu Police Station',
                'zip_code' => 304,
                'address' => '新竹縣新豐鄉後湖村6鄰後湖子115號',
                'telephone' => '03 5680164',
            ],
            406 => 
            [
                'id' => 407,
                'name' => '湖口分駐所',
                'name_in_en' => 'Hukou Police Station',
                'zip_code' => 303,
                'address' => '新竹縣湖口鄉中正路2段26號',
                'telephone' => '03 5997037',
            ],
            407 => 
            [
                'id' => 408,
                'name' => '湖鏡派出所',
                'name_in_en' => 'Hujing Police Station',
                'zip_code' => 303,
                'address' => '新竹縣湖口鄉湖口村八德路2段142巷11號',
                'telephone' => '03 5690646',
            ],
            408 => 
            [
                'id' => 409,
                'name' => '新工派出所',
                'name_in_en' => 'Singong Police Station',
                'zip_code' => 303,
                'address' => '新竹縣湖口鄉鳳凰村文化路172號',
                'telephone' => '03 5981561',
            ],
            409 => 
            [
                'id' => 410,
                'name' => '橫山分局',
                'name_in_en' => 'Hengshan Precinct',
                'zip_code' => 312,
                'address' => '新竹縣橫山鄉新興村新興街103號',
                'telephone' => '03 5931004',
            ],
            410 => 
            [
                'id' => 411,
                'name' => '橫山派出所',
                'name_in_en' => 'Hengshan Police Station',
                'zip_code' => 312,
                'address' => '新竹縣橫山鄉新興村新興街103號',
                'telephone' => '03 5931002',
            ],
            411 => 
            [
                'id' => 412,
                'name' => '芎林分駐所',
                'name_in_en' => 'Cyonglin Police Station',
                'zip_code' => 307,
                'address' => '新竹縣芎林鄉文山路349號',
                'telephone' => '03 5924572',
            ],
            412 => 
            [
                'id' => 413,
                'name' => '秀湖派出所',
                'name_in_en' => 'Siouhu Police Station',
                'zip_code' => 307,
                'address' => '新竹縣芎林鄉秀湖村五和街5號',
                'telephone' => '03 5932812',
            ],
            413 => 
            [
                'id' => 414,
                'name' => '新樂派出所',
                'name_in_en' => 'Sinle Police Station',
                'zip_code' => 313,
                'address' => '新竹縣尖石鄉新樂村1鄰水田30號',
                'telephone' => '03 5841676',
            ],
            414 => 
            [
                'id' => 415,
                'name' => '橫村派出所',
                'name_in_en' => 'Hengcun Police Station',
                'zip_code' => 312,
                'address' => '新竹縣橫山鄉橫山村1鄰治安街1號',
                'telephone' => '03 5934387',
            ],
            415 => 
            [
                'id' => 416,
                'name' => '玉峰派出所',
                'name_in_en' => 'Yufong Police Station',
                'zip_code' => 311,
                'address' => '新竹縣五峰鄉玉峰村5鄰玉峰55號',
                'telephone' => '03 5847202',
            ],
            416 => 
            [
                'id' => 417,
                'name' => '宇老派出所',
                'name_in_en' => 'Yulao Police Station',
                'zip_code' => 313,
                'address' => '新竹縣尖石鄉玉峰村1鄰宇老1號',
                'telephone' => '03 5847238',
            ],
            417 => 
            [
                'id' => 418,
                'name' => '秀巒派出所',
                'name_in_en' => 'Siouluan Police Station',
                'zip_code' => 313,
                'address' => '新竹縣尖石鄉秀巒村4鄰控溪20號',
                'telephone' => '03 5847523',
            ],
            418 => 
            [
                'id' => 419,
                'name' => '內灣派出所',
                'name_in_en' => 'Neiwan Police Station',
                'zip_code' => 312,
                'address' => '新竹縣橫山鄉內灣村2鄰中山街二段8號',
                'telephone' => '03 5849164',
            ],
            419 => 
            [
                'id' => 420,
                'name' => '那羅派出所',
                'name_in_en' => 'Naluo Police Station',
                'zip_code' => 313,
                'address' => '新竹縣尖石鄉錦屏村8鄰那羅41號',
                'telephone' => '03 5841682',
            ],
            420 => 
            [
                'id' => 421,
                'name' => '沙坑派出所',
                'name_in_en' => 'Shakeng Police Station',
                'zip_code' => 312,
                'address' => '新竹縣橫山鄉沙坑村6鄰中豐路3段10巷1號',
                'telephone' => '03 5811054',
            ],
            421 => 
            [
                'id' => 422,
                'name' => '梅花派出所',
                'name_in_en' => 'Meihua Police Station',
                'zip_code' => 313,
                'address' => '新竹縣尖石鄉梅花村1鄰梅花26號',
                'telephone' => '03 5841681',
            ],
            422 => 
            [
                'id' => 423,
                'name' => '尖石分駐所',
                'name_in_en' => 'Jianshih Police Station',
                'zip_code' => 313,
                'address' => '新竹縣尖石鄉嘉樂村2鄰麥樹仁41號',
                'telephone' => '03 5841144',
            ],
            423 => 
            [
                'id' => 424,
                'name' => '泰崗派出所',
                'name_in_en' => 'Taigang Police Station',
                'zip_code' => 313,
                'address' => '新竹縣尖石鄉秀巒村7鄰泰岡88號',
                'telephone' => '03 5847322',
            ],
            424 => 
            [
                'id' => 425,
                'name' => '新埔分局',
                'name_in_en' => 'Sinpu Precinct',
                'zip_code' => 305,
                'address' => '新竹縣新埔鎮中正路475號',
                'telephone' => '03 5882004',
            ],
            425 => 
            [
                'id' => 426,
                'name' => '新埔派出所',
                'name_in_en' => 'Sinpu Police Station',
                'zip_code' => 305,
                'address' => '新竹縣新埔鎮新民里中正路776號',
                'telephone' => '03 5882034',
            ],
            426 => 
            [
                'id' => 427,
                'name' => '錦山派出所',
                'name_in_en' => 'Jinshan Police Station',
                'zip_code' => 306,
                'address' => '新竹縣關西鎮錦山里2鄰21號',
                'telephone' => '03 5478174',
            ],
            427 => 
            [
                'id' => 428,
                'name' => '玉山派出所',
                'name_in_en' => 'yushan police station',
                'zip_code' => 306,
                'address' => '新竹縣關西鎮錦山里2鄰21號',
                'telephone' => '03 5478174',
            ],
            428 => 
            [
                'id' => 429,
                'name' => '東安派出所',
                'name_in_en' => 'Dong-an Police Station',
                'zip_code' => 306,
                'address' => '新竹縣關西鎮中山東路100號',
                'telephone' => '03 5872301',
            ],
            429 => 
            [
                'id' => 430,
                'name' => '南華派出所',
                'name_in_en' => 'Nanhua  police  station',
                'zip_code' => 306,
                'address' => '新竹縣關西鎮中山東路100號',
                'telephone' => '03 5872301',
            ],
            430 => 
            [
                'id' => 431,
                'name' => '關西分駐所',
                'name_in_en' => 'Guansi Police Station',
                'zip_code' => 306,
                'address' => '新竹縣關西鎮中央街2號',
                'telephone' => '03 5872007',
            ],
            431 => 
            [
                'id' => 432,
                'name' => '褒忠派出所',
                'name_in_en' => 'Baojhong police Station',
                'zip_code' => 305,
                'address' => '新竹縣新埔鎮下寮里12鄰義民路3段329號',
                'telephone' => '03 5882094',
            ],
            432 => 
            [
                'id' => 433,
                'name' => '寶石派出所',
                'name_in_en' => 'Baoshih Police Station',
                'zip_code' => 305,
                'address' => '新竹縣新埔鎮寶石里文德路2段599號',
                'telephone' => '03 5882064',
            ],
            433 => 
            [
                'id' => 434,
                'name' => '照門派出所',
                'name_in_en' => 'Jhaomen Police Station',
                'zip_code' => 305,
                'address' => '新竹縣新埔鎮照門里9鄰照鏡20-20號',
                'telephone' => '03 5899194',
            ],
            434 => 
            [
                'id' => 435,
                'name' => '石光派出所',
                'name_in_en' => 'Shihguang Police Station',
                'zip_code' => 306,
                'address' => '新竹縣關西鎮石光里9鄰392號',
                'telephone' => '03 5868060',
            ],
            435 => 
            [
                'id' => 436,
                'name' => '坪林派出所',
                'name_in_en' => 'Pinglin Police Station',
                'zip_code' => 306,
                'address' => '新竹縣關西鎮石光里9鄰392號',
                'telephone' => '03 5868060',
            ],
            436 => 
            [
                'id' => 437,
                'name' => '新竹市警察局',
                'name_in_en' => 'Hsinchu City Police Bureau',
                'zip_code' => 300,
                'address' => '新竹市北區中山路1號',
                'telephone' => '03 5249234',
            ],
            437 => 
            [
                'id' => 438,
                'name' => '第一分局',
                'name_in_en' => 'The First Precinct',
                'zip_code' => 300,
                'address' => '新竹市北區竹光路290號',
                'telephone' => '03 5222725',
            ],
            438 => 
            [
                'id' => 439,
                'name' => '湳雅派出所',
                'name_in_en' => 'Nanya Police Station',
                'zip_code' => 300,
                'address' => '新竹市北區湳雅街116號',
                'telephone' => '03 5356710',
            ],
            439 => 
            [
                'id' => 440,
                'name' => '樹林頭派出所',
                'name_in_en' => 'Shulintou Police Station',
                'zip_code' => 300,
                'address' => '新竹市北區竹光路290號',
                'telephone' => '03 5267652',
            ],
            440 => 
            [
                'id' => 441,
                'name' => '南寮派出所',
                'name_in_en' => 'Nanliao Police Station',
                'zip_code' => 300,
                'address' => '新竹市北區東大路3段541號',
                'telephone' => '03 5362334',
            ],
            441 => 
            [
                'id' => 442,
                'name' => '北門派出所',
                'name_in_en' => 'Beimen Police Station',
                'zip_code' => 300,
                'address' => '新竹市北區北大路218號',
                'telephone' => '03 5222223',
            ],
            442 => 
            [
                'id' => 443,
                'name' => '西門派出所',
                'name_in_en' => 'Ximen Police Station',
                'zip_code' => 300,
                'address' => '新竹市北區中山路300號',
                'telephone' => '03 5222452',
            ],
            443 => 
            [
                'id' => 444,
                'name' => '第二分局',
                'name_in_en' => 'The Second Precinct',
                'zip_code' => 300,
                'address' => '新竹市東區光復路2段798號',
                'telephone' => '03 5728750',
            ],
            444 => 
            [
                'id' => 445,
                'name' => '文華派出所',
                'name_in_en' => 'Wenhua Police Station',
                'zip_code' => 300,
                'address' => '新竹市東區經國路1段488號',
                'telephone' => '03 5332120',
            ],
            445 => 
            [
                'id' => 446,
                'name' => '關東橋派出所',
                'name_in_en' => 'Guandongqiao Police Station',
                'zip_code' => 300,
                'address' => '新竹市東區介壽路200號',
                'telephone' => '03 5775758',
            ],
            446 => 
            [
                'id' => 447,
                'name' => '埔頂派出所',
                'name_in_en' => 'Puding Police Station',
                'zip_code' => 300,
                'address' => '新竹市東區光復路1段568號',
                'telephone' => '03 5773999',
            ],
            447 => 
            [
                'id' => 448,
                'name' => '東勢派出所',
                'name_in_en' => 'The Second Precinct',
                'zip_code' => 300,
                'address' => '新竹市東區光復路2段798號',
                'telephone' => '03 5728758',
            ],
            448 => 
            [
                'id' => 449,
                'name' => '東門派出所',
                'name_in_en' => 'Dongmen Police Station',
                'zip_code' => 300,
                'address' => '新竹市東區東門街87號',
                'telephone' => '03 5222607',
            ],
            449 => 
            [
                'id' => 450,
                'name' => '第三分局',
                'name_in_en' => 'The Third Precinct',
                'zip_code' => 300,
                'address' => '新竹市香山區牛埔路432號',
                'telephone' => '03 5380040',
            ],
            450 => 
            [
                'id' => 451,
                'name' => '中華派出所',
                'name_in_en' => 'Zhonghua Police Station',
                'zip_code' => 300,
                'address' => '新竹市香山區大庄路105號',
                'telephone' => '03 5302487',
            ],
            451 => 
            [
                'id' => 452,
                'name' => '青草湖派出所',
                'name_in_en' => 'Jingcaohu Police Station',
                'zip_code' => 300,
                'address' => '新竹市東區明湖路666號',
                'telephone' => '03 5201563',
            ],
            452 => 
            [
                'id' => 453,
                'name' => '朝山派出所',
                'name_in_en' => 'Zhaoshan Police Station',
                'zip_code' => 300,
                'address' => '新竹市香山區中華路5段690號',
                'telephone' => '03 5373165',
            ],
            453 => 
            [
                'id' => 454,
                'name' => '香山派出所',
                'name_in_en' => 'Siangshan Police Station',
                'zip_code' => 300,
                'address' => '新竹市香山區牛埔路432號',
                'telephone' => '03 5386348',
            ],
            454 => 
            [
                'id' => 455,
                'name' => '南門派出所',
                'name_in_en' => 'Nanmen Police Station',
                'zip_code' => 300,
                'address' => '新竹市東區勝利路85號',
                'telephone' => '03 5222224',
            ],
            455 => 
            [
                'id' => 456,
                'name' => '苗栗縣警察局',
                'name_in_en' => 'Miaoli County Police Bureau',
                'zip_code' => 360,
                'address' => '苗栗縣苗栗市府前路2號',
                'telephone' => '037 321303',
            ],
            456 => 
            [
                'id' => 457,
                'name' => '苗栗分局',
                'name_in_en' => 'Miaoli  Precinct',
                'zip_code' => 360,
                'address' => '苗栗縣苗栗市金鳳街109號',
                'telephone' => '037 320059',
            ],
            457 => 
            [
                'id' => 458,
                'name' => '明德派出所',
                'name_in_en' => 'Mingde Police Station',
                'zip_code' => 362,
                'address' => '苗栗縣頭屋鄉明德路131號',
                'telephone' => '037 252538',
            ],
            458 => 
            [
                'id' => 459,
                'name' => '鯉魚派出所',
                'name_in_en' => 'Liyu Police Station',
                'zip_code' => 367,
                'address' => '苗栗縣三義鄉鯉魚口54-1號',
                'telephone' => '037 881040',
            ],
            459 => 
            [
                'id' => 460,
                'name' => '福基派出所',
                'name_in_en' => 'Fuji Police Station',
                'zip_code' => 363,
                'address' => '苗栗縣公館鄉館中村14鄰大同路181號',
                'telephone' => '037 225683',
            ],
            460 => 
            [
                'id' => 461,
                'name' => '龍騰派出所',
                'name_in_en' => 'Longteng Police Station',
                'zip_code' => 367,
                'address' => '苗栗縣三義鄉伯公坑41號',
                'telephone' => '037 872396',
            ],
            461 => 
            [
                'id' => 462,
                'name' => '雞隆派出所',
                'name_in_en' => 'Jilong Police Station',
                'zip_code' => 366,
                'address' => '苗栗縣銅鑼鄉新隆村2鄰20號',
                'telephone' => '037 971012',
            ],
            462 => 
            [
                'id' => 463,
                'name' => '鶴岡派出所',
                'name_in_en' => 'Hegang Police Station',
                'zip_code' => 363,
                'address' => '苗栗縣公館鄉鶴山村7鄰232號',
                'telephone' => '037 226975',
            ],
            463 => 
            [
                'id' => 464,
                'name' => '頭屋分駐所',
                'name_in_en' => 'Touwu Police Station',
                'zip_code' => 362,
                'address' => '苗栗縣頭屋鄉象山村象山路82-1號',
                'telephone' => '037 253103',
            ],
            464 => 
            [
                'id' => 465,
                'name' => '銅鑼分駐所',
                'name_in_en' => 'Tongluo Police Station',
                'zip_code' => 366,
                'address' => '苗栗縣銅鑼鄉銅鑼村中正路122號',
                'telephone' => '037 981014',
            ],
            465 => 
            [
                'id' => 466,
                'name' => '文山派出所',
                'name_in_en' => 'Wunshan Police Station',
                'zip_code' => 360,
                'address' => '苗栗縣苗栗市至公路557號',
                'telephone' => '037 337127',
            ],
            466 => 
            [
                'id' => 467,
                'name' => '公館分駐所',
                'name_in_en' => 'Gongguan Police Station',
                'zip_code' => 363,
                'address' => '苗栗縣公館鄉大同路181號',
                'telephone' => '037 225683',
            ],
            467 => 
            [
                'id' => 468,
                'name' => '北苗派出所',
                'name_in_en' => 'Beimiao Police Station',
                'zip_code' => 360,
                'address' => '苗栗縣苗栗市為公路227號',
                'telephone' => '037 260344',
            ],
            468 => 
            [
                'id' => 469,
                'name' => '南苗派出所',
                'name_in_en' => 'Nanmiao Police Station',
                'zip_code' => 360,
                'address' => '苗栗縣苗栗市信義街60號',
                'telephone' => '037 320367',
            ],
            469 => 
            [
                'id' => 470,
                'name' => '三義分駐所',
                'name_in_en' => 'Sanyi Police Station',
                'zip_code' => 367,
                'address' => '苗栗縣三義鄉廣盛村廣盛90號',
                'telephone' => '037 872003',
            ],
            470 => 
            [
                'id' => 471,
                'name' => '竹南分局',
                'name_in_en' => 'Chunan Precinct',
                'zip_code' => 350,
                'address' => '苗栗縣竹南鎮民族街72號',
                'telephone' => '037 478032',
            ],
            471 => 
            [
                'id' => 472,
                'name' => '大山派出所',
                'name_in_en' => 'Dashan  Police Station',
                'zip_code' => 356,
                'address' => '苗栗縣後龍鎮灣寶里5鄰93號',
                'telephone' => '037 431764',
            ],
            472 => 
            [
                'id' => 473,
                'name' => '外埔派出所',
                'name_in_en' => 'Waipu  Police Station',
                'zip_code' => 356,
                'address' => '苗栗縣後龍鎮海埔5號',
                'telephone' => '037 431361',
            ],
            473 => 
            [
                'id' => 474,
                'name' => '中港海口派出所',
                'name_in_en' => 'Zhonggan-Haikou Police Station',
                'zip_code' => 350,
                'address' => '苗栗縣竹南鎮海口里六鄰62之12號',
                'telephone' => '037 460684',
            ],
            474 => 
            [
                'id' => 475,
                'name' => '聯港派出所',
                'name_in_en' => 'Liangang  Police Station',
                'zip_code' => 356,
                'address' => '苗栗縣後龍鎮津龍里5鄰公司寮59號',
                'telephone' => '037 450734',
            ],
            475 => 
            [
                'id' => 476,
                'name' => '談文派出所',
                'name_in_en' => 'Tanwen  Police Station',
                'zip_code' => 361,
                'address' => '苗栗縣造橋鄉談文村8鄰51-16號',
                'telephone' => '037 622664',
            ],
            476 => 
            [
                'id' => 477,
                'name' => '新港派出所',
                'name_in_en' => 'Xingang  Police Station',
                'zip_code' => 360,
                'address' => '苗栗縣後龍鎮建興路111號',
                'telephone' => '037 722474',
            ],
            477 => 
            [
                'id' => 478,
                'name' => '南勢派出所',
                'name_in_en' => 'Nanshi Police Station',
                'zip_code' => 360,
                'address' => '苗栗縣後龍鎮南勢山1鄰15-10號',
                'telephone' => '037 921445',
            ],
            478 => 
            [
                'id' => 479,
                'name' => '造橋分駐所',
                'name_in_en' => 'Zaoqiao  Police Station',
                'zip_code' => 361,
                'address' => '苗栗縣造橋鄉平仁路51號',
                'telephone' => '037 563224',
            ],
            479 => 
            [
                'id' => 480,
                'name' => '竹南派出所',
                'name_in_en' => 'Chunan  Police Station',
                'zip_code' => 350,
                'address' => '苗栗縣竹南鎮民族街72號',
                'telephone' => '037 474796',
            ],
            480 => 
            [
                'id' => 481,
                'name' => '後龍分駐所',
                'name_in_en' => 'Houlong  Police Station',
                'zip_code' => 356,
                'address' => '苗栗縣後龍鎮三民路107號',
                'telephone' => '037 722520',
            ],
            481 => 
            [
                'id' => 482,
                'name' => '大同派出所',
                'name_in_en' => 'Datong  Police Station',
                'zip_code' => 350,
                'address' => '苗栗縣竹南鎮公義路931號',
                'telephone' => '037 581712',
            ],
            482 => 
            [
                'id' => 483,
                'name' => '大湖分局',
                'name_in_en' => 'Dahu Precinct',
                'zip_code' => 364,
                'address' => '苗栗縣大湖鄉中正路78號',
                'telephone' => '037 991006',
            ],
            483 => 
            [
                'id' => 484,
                'name' => '坪林派出所',
                'name_in_en' => 'Pinglin Police Station',
                'zip_code' => 369,
                'address' => '苗栗縣卓蘭鎮坪林里5鄰坪林50號',
                'telephone' => '04 25921101',
            ],
            484 => 
            [
                'id' => 485,
                'name' => '百壽派出所',
                'name_in_en' => 'Baishou Police Station',
                'zip_code' => 354,
                'address' => '苗栗縣獅潭鄉百壽村7鄰39-1號',
                'telephone' => '037 931231',
            ],
            485 => 
            [
                'id' => 486,
                'name' => '觀霧派出所',
                'name_in_en' => 'Guanwu Police Station',
                'zip_code' => 365,
                'address' => '苗栗縣泰安鄉梅園村觀霧1號',
                'telephone' => '037 273038',
            ],
            486 => 
            [
                'id' => 487,
                'name' => '大興派出所',
                'name_in_en' => 'Dasing Police Station',
                'zip_code' => 365,
                'address' => '苗栗縣泰安鄉大興村24號',
                'telephone' => '037 992349',
            ],
            487 => 
            [
                'id' => 488,
                'name' => '泰安分駐所',
                'name_in_en' => 'Taian Police Station',
                'zip_code' => 365,
                'address' => '苗栗縣泰安鄉清安村2鄰洗水坑65號',
                'telephone' => '037 941057',
            ],
            488 => 
            [
                'id' => 489,
                'name' => '汶水派出所',
                'name_in_en' => 'Wunshuei Police Station',
                'zip_code' => 354,
                'address' => '苗栗縣獅潭鄉竹木村16鄰24號',
                'telephone' => '037 991648',
            ],
            489 => 
            [
                'id' => 490,
                'name' => '獅潭分駐所',
                'name_in_en' => 'Shitan Police Station',
                'zip_code' => 354,
                'address' => '苗栗縣獅潭鄉新店村7鄰63號',
                'telephone' => '037 931348',
            ],
            490 => 
            [
                'id' => 491,
                'name' => '龍山派出所',
                'name_in_en' => 'Longshan Police Station',
                'zip_code' => 365,
                'address' => '苗栗縣泰安鄉錦水村10鄰橫龍山52號',
                'telephone' => '037 941136',
            ],
            491 => 
            [
                'id' => 492,
                'name' => '八卦派出所',
                'name_in_en' => 'Bagua Police Station',
                'zip_code' => 365,
                'address' => '苗栗縣泰安鄉錦水村10鄰橫龍山52號',
                'telephone' => '037 941137',
            ],
            492 => 
            [
                'id' => 493,
                'name' => '大湖派出所',
                'name_in_en' => 'Dahu Police Station',
                'zip_code' => 364,
                'address' => '苗栗縣大湖鄉中正路78號',
                'telephone' => '037 991041',
            ],
            493 => 
            [
                'id' => 494,
                'name' => '和興派出所',
                'name_in_en' => 'Hexing Police Station',
                'zip_code' => 354,
                'address' => '苗栗縣獅潭鄉和興村12鄰27號',
                'telephone' => '037 931230',
            ],
            494 => 
            [
                'id' => 495,
                'name' => '大安派出所',
                'name_in_en' => 'Daan Police Station',
                'zip_code' => 365,
                'address' => '苗栗縣泰安鄉象鼻村1鄰22號',
                'telephone' => '037 962241',
            ],
            495 => 
            [
                'id' => 496,
                'name' => '校林派出所',
                'name_in_en' => 'Siaolin Police Station',
                'zip_code' => 364,
                'address' => '苗栗縣大湖鄉栗林村5鄰四份62-1號',
                'telephone' => '037 951337',
            ],
            496 => 
            [
                'id' => 497,
                'name' => '南湖派出所',
                'name_in_en' => 'Nanhu Police Station',
                'zip_code' => 364,
                'address' => '苗栗縣大湖鄉南昌路132號',
                'telephone' => '037 991547',
            ],
            497 => 
            [
                'id' => 498,
                'name' => '梅園派出所',
                'name_in_en' => 'Meiyuan Police Station',
                'zip_code' => 365,
                'address' => '苗栗縣泰安鄉梅園村6鄰天狗32號',
                'telephone' => '037 962131',
            ],
            498 => 
            [
                'id' => 499,
                'name' => '卓蘭分駐所',
                'name_in_en' => 'Jhuolan Police Station',
                'zip_code' => 369,
                'address' => '苗栗縣卓蘭鎮中山路106號',
                'telephone' => '04 25892017',
            ],
            499 => 
            [
                'id' => 500,
                'name' => '象鼻派出所',
                'name_in_en' => 'Siangbi Police Station',
                'zip_code' => 365,
                'address' => '苗栗縣泰安鄉象鼻村1鄰象鼻12號',
                'telephone' => '037 962243',
            ],
        ]);
        DB::table('taiwan_police_stations')->insert([
            0 => 
            [
                'id' => 501,
                'name' => '中興派出所',
                'name_in_en' => 'Jhongsing Police Station',
                'zip_code' => 365,
                'address' => '苗栗縣泰安鄉中興村1鄰長橋9號',
                'telephone' => '037 992350',
            ],
            1 => 
            [
                'id' => 502,
                'name' => '通霄分局',
                'name_in_en' => 'Tongsiao Precinct',
                'zip_code' => 357,
                'address' => '苗栗縣通霄鎮中正路16號',
                'telephone' => '037 752464',
            ],
            2 => 
            [
                'id' => 503,
                'name' => '埔口派出所',
                'name_in_en' => 'Pukou Police Station',
                'zip_code' => 357,
                'address' => '苗栗縣通霄鎮中山路260號',
                'telephone' => '037 792143',
            ],
            3 => 
            [
                'id' => 504,
                'name' => '中和派出所',
                'name_in_en' => 'Jhonghe Police Station',
                'zip_code' => 357,
                'address' => '苗栗縣通霄鎮南和里9鄰112號',
                'telephone' => '037 782254',
            ],
            4 => 
            [
                'id' => 505,
                'name' => '白沙派出所',
                'name_in_en' => 'Baisha Police Station',
                'zip_code' => 357,
                'address' => '苗栗縣通霄鎮白東里17鄰133號',
                'telephone' => '037 792134',
            ],
            5 => 
            [
                'id' => 506,
                'name' => '高湖派出所',
                'name_in_en' => 'Gaohu Police Station',
                'zip_code' => 368,
                'address' => '苗栗縣西湖鄉五福村6鄰97號',
                'telephone' => '037 911414',
            ],
            6 => 
            [
                'id' => 507,
                'name' => '通霄派出所',
                'name_in_en' => 'Tongsiao Police Station',
                'zip_code' => 357,
                'address' => '苗栗縣通霄鎮中正路16號',
                'telephone' => '037 752001',
            ],
            7 => 
            [
                'id' => 508,
                'name' => '苑裡分駐所',
                'name_in_en' => 'Yuanli Police Station',
                'zip_code' => 358,
                'address' => '苗栗縣苑裡鎮天下路84號',
                'telephone' => '037 861024',
            ],
            8 => 
            [
                'id' => 509,
                'name' => '西湖分駐所',
                'name_in_en' => 'Sihu Police Station',
                'zip_code' => 368,
                'address' => '苗栗縣西湖鄉金獅村2鄰金獅26-6號',
                'telephone' => '037 921031',
            ],
            9 => 
            [
                'id' => 510,
                'name' => '社苓派出所',
                'name_in_en' => 'Sheling Police Station',
                'zip_code' => 358,
                'address' => '苗栗縣苑裡鎮玉田里5鄰62之3號',
                'telephone' => '037 742508',
            ],
            10 => 
            [
                'id' => 511,
                'name' => '烏眉派出所',
                'name_in_en' => 'Wumei Police Station',
                'zip_code' => 357,
                'address' => '苗栗縣通霄鎮烏眉里4鄰41號',
                'telephone' => '037 753164',
            ],
            11 => 
            [
                'id' => 512,
                'name' => '山腳派出所',
                'name_in_en' => 'Shanjiao Police Station',
                'zip_code' => 358,
                'address' => '苗栗縣苑裡鎮山腳里389號',
                'telephone' => '037 740217',
            ],
            12 => 
            [
                'id' => 513,
                'name' => '頭份分局',
                'name_in_en' => 'Toufen  Precinct',
                'zip_code' => 351,
                'address' => '苗栗縣頭份市蟠桃里中興路503號',
                'telephone' => '037 663306',
            ],
            13 => 
            [
                'id' => 514,
                'name' => '頭份派出所',
                'name_in_en' => 'Toufen Police Station',
                'zip_code' => 351,
                'address' => '苗栗縣頭份市蟠桃里中興路503號',
                'telephone' => '037 663004',
            ],
            14 => 
            [
                'id' => 515,
                'name' => '大河派出所',
                'name_in_en' => 'Dahe Police Station',
                'zip_code' => 352,
                'address' => '苗栗縣三灣鄉大河村6鄰河底48號',
                'telephone' => '037 831081',
            ],
            15 => 
            [
                'id' => 516,
                'name' => '蓬萊派出所',
                'name_in_en' => 'Penglai Police Station',
                'zip_code' => 353,
                'address' => '苗栗縣南庄鄉紅毛館90號',
                'telephone' => '037 822040',
            ],
            16 => 
            [
                'id' => 517,
                'name' => '東河派出所',
                'name_in_en' => 'Donghe Police Station',
                'zip_code' => 353,
                'address' => '苗栗縣南庄鄉東河村5鄰50號',
                'telephone' => '037 822094',
            ],
            17 => 
            [
                'id' => 518,
                'name' => '田美派出所',
                'name_in_en' => 'Tianmei Police Station',
                'zip_code' => 353,
                'address' => '苗栗縣南庄鄉獅山村4鄰106號',
                'telephone' => '037 822134',
            ],
            18 => 
            [
                'id' => 519,
                'name' => '陸家派出所',
                'name_in_en' => 'Lioujia Police Station',
                'zip_code' => 353,
                'address' => '苗栗縣南庄鄉東河村24鄰鹿場2號',
                'telephone' => '037 821570',
            ],
            19 => 
            [
                'id' => 520,
                'name' => '南埔派出所',
                'name_in_en' => 'Nanpu Police Station',
                'zip_code' => 353,
                'address' => '苗栗縣南庄鄉南富村13鄰14號',
                'telephone' => '037 822752',
            ],
            20 => 
            [
                'id' => 521,
                'name' => '斗坪派出所',
                'name_in_en' => 'Douping Police Station',
                'zip_code' => 351,
                'address' => '苗栗縣頭份市斗煥里中正二路215號',
                'telephone' => '037 665770',
            ],
            21 => 
            [
                'id' => 522,
                'name' => '尖山派出所',
                'name_in_en' => 'Jianshan Police Station',
                'zip_code' => 351,
                'address' => '苗栗縣頭份市廣興里中華路160號',
                'telephone' => '037 622763',
            ],
            22 => 
            [
                'id' => 523,
                'name' => '南庄分駐所',
                'name_in_en' => 'Nanjhuang Police Station',
                'zip_code' => 353,
                'address' => '苗栗縣南庄鄉大同路27號',
                'telephone' => '037 822004',
            ],
            23 => 
            [
                'id' => 524,
                'name' => '三灣分駐所',
                'name_in_en' => 'Sanwan Police Station',
                'zip_code' => 352,
                'address' => '苗栗縣三灣鄉中正路254號',
                'telephone' => '037 831071',
            ],
            24 => 
            [
                'id' => 525,
                'name' => '臺中市政府警察局',
                'name_in_en' => 'Taichung City Police Department',
                'zip_code' => 427,
                'address' => '臺中市潭子區豐興路1段500號',
                'telephone' => '04 23274440',
            ],
            25 => 
            [
                'id' => 526,
                'name' => '第一分局',
                'name_in_en' => 'First Precinct',
                'zip_code' => 403,
                'address' => '臺中市西區三民路1段178號',
                'telephone' => '04 22223725',
            ],
            26 => 
            [
                'id' => 527,
                'name' => '西區分駐所',
                'name_in_en' => 'West District Police Station',
                'zip_code' => 403,
                'address' => '臺中市西區三民路1段178號',
                'telephone' => '04 22222632',
            ],
            27 => 
            [
                'id' => 528,
                'name' => '公益派出所',
                'name_in_en' => 'Gongyi Police Station',
                'zip_code' => 403,
                'address' => '臺中市西區精誠二十三街30號',
                'telephone' => '04 24727640',
            ],
            28 => 
            [
                'id' => 529,
                'name' => '民權派出所',
                'name_in_en' => 'Mincyuan Police Station',
                'zip_code' => 403,
                'address' => '臺中市西區民權路258號',
                'telephone' => '04 22012710',
            ],
            29 => 
            [
                'id' => 530,
                'name' => '大誠分駐所',
                'name_in_en' => 'Dacheng Police Station',
                'zip_code' => 400,
                'address' => '臺中市中區成功路302號',
                'telephone' => '04 22221373',
            ],
            30 => 
            [
                'id' => 531,
                'name' => '繼中派出所',
                'name_in_en' => 'Jijhong Police Station',
                'zip_code' => 400,
                'address' => '臺中市中區中山路9號',
                'telephone' => '04 22224119',
            ],
            31 => 
            [
                'id' => 532,
                'name' => '第二分局',
                'name_in_en' => 'Second Precinct',
                'zip_code' => 404,
                'address' => '臺中市北區太原路2段228號',
                'telephone' => '04 22351200',
            ],
            32 => 
            [
                'id' => 533,
                'name' => '永興派出所',
                'name_in_en' => 'Yong Sing Police Station',
                'zip_code' => 404,
                'address' => '臺中市北區太原路2段228號',
                'telephone' => '04 22352735',
            ],
            33 => 
            [
                'id' => 534,
                'name' => '立人派出所',
                'name_in_en' => 'Liren Police Sation',
                'zip_code' => 404,
                'address' => '臺中市北區天津路1段2號',
                'telephone' => '04 22973545',
            ],
            34 => 
            [
                'id' => 535,
                'name' => '育才派出所',
                'name_in_en' => 'Yuchai Police Station',
                'zip_code' => 404,
                'address' => '臺中市北區三民路3段128號',
                'telephone' => '04 22223695',
            ],
            35 => 
            [
                'id' => 536,
                'name' => '文正派出所',
                'name_in_en' => 'Wunjheng Police Station',
                'zip_code' => 404,
                'address' => '臺中市北區台灣大道1段700號',
                'telephone' => '04 22011252',
            ],
            36 => 
            [
                'id' => 537,
                'name' => '公園派出所',
                'name_in_en' => 'Taichung Park Police Station',
                'zip_code' => 404,
                'address' => '臺中市北區雙十路1段65號',
                'telephone' => '04 22230097',
            ],
            37 => 
            [
                'id' => 538,
                'name' => '第三分局',
                'name_in_en' => 'Third Precinct',
                'zip_code' => 402,
                'address' => '臺中市南區復興路3段157號',
                'telephone' => '04 22220498',
            ],
            38 => 
            [
                'id' => 539,
                'name' => '東區分駐所',
                'name_in_en' => 'East District Police Station',
                'zip_code' => 401,
                'address' => '臺中市東區進化路16號',
                'telephone' => '04 22124179',
            ],
            39 => 
            [
                'id' => 540,
                'name' => '合作派出所',
                'name_in_en' => 'Hezuo Police Station',
                'zip_code' => 401,
                'address' => '臺中市東區力行路202號',
                'telephone' => '04 23602711',
            ],
            40 => 
            [
                'id' => 541,
                'name' => '立德派出所',
                'name_in_en' => 'Lide Police Station',
                'zip_code' => 401,
                'address' => '臺中市東區振興路6號',
                'telephone' => '04 22203248',
            ],
            41 => 
            [
                'id' => 542,
                'name' => '勤工派出所',
                'name_in_en' => 'Cingong Police Station',
                'zip_code' => 402,
                'address' => '臺中市南區復興路1段235號',
                'telephone' => '04 22612716',
            ],
            42 => 
            [
                'id' => 543,
                'name' => '健康派出所',
                'name_in_en' => 'Jian Kang Police Station',
                'zip_code' => 402,
                'address' => '臺中市南區美村南路8號',
                'telephone' => '04 22634622',
            ],
            43 => 
            [
                'id' => 544,
                'name' => '正義派出所',
                'name_in_en' => 'Jhengyi Police Station',
                'zip_code' => 402,
                'address' => '臺中市南區復興路3段159號',
                'telephone' => '04 22223319',
            ],
            44 => 
            [
                'id' => 545,
                'name' => '第四分局',
                'name_in_en' => 'Fourth Precinct',
                'zip_code' => 408,
                'address' => '臺中市南屯區向心南路811號',
                'telephone' => '04 23892110',
            ],
            45 => 
            [
                'id' => 546,
                'name' => '黎明派出所',
                'name_in_en' => 'Liming Police Station',
                'zip_code' => 408,
                'address' => '臺中市南屯區干城街2號',
                'telephone' => '04 22528219',
            ],
            46 => 
            [
                'id' => 547,
                'name' => '春社派出所',
                'name_in_en' => 'Chunshe Police Station',
                'zip_code' => 408,
                'address' => '臺中市南屯區忠勇路23之5號',
                'telephone' => '04 23824719',
            ],
            47 => 
            [
                'id' => 548,
                'name' => '南屯派出所',
                'name_in_en' => 'Nantun Police Station',
                'zip_code' => 408,
                'address' => '臺中市南屯區黎明路1段1056號',
                'telephone' => '04 23824718',
            ],
            48 => 
            [
                'id' => 549,
                'name' => '大墩派出所',
                'name_in_en' => 'Dadun Police Station',
                'zip_code' => 408,
                'address' => '臺中市南屯區大墩路229號',
                'telephone' => '04 24724871',
            ],
            49 => 
            [
                'id' => 550,
                'name' => '第五分局',
                'name_in_en' => 'Fifth Precinct',
                'zip_code' => 406,
                'address' => '臺中市北屯區崇德路3段2號',
                'telephone' => '04 22427113',
            ],
            50 => 
            [
                'id' => 551,
                'name' => '文昌派出所',
                'name_in_en' => 'Wunchang Police Station',
                'zip_code' => 406,
                'address' => '臺中市北屯區文昌東三街48號',
                'telephone' => '04 22377714',
            ],
            51 => 
            [
                'id' => 552,
                'name' => '東山派出所',
                'name_in_en' => 'Dongshan Police Station',
                'zip_code' => 406,
                'address' => '臺中市北屯區東山路2段30號',
                'telephone' => '04 22392713',
            ],
            52 => 
            [
                'id' => 553,
                'name' => '四平派出所',
                'name_in_en' => 'Siping Police Station',
                'zip_code' => 406,
                'address' => '臺中市北屯區昌平路2段63號',
                'telephone' => '04 24222714',
            ],
            53 => 
            [
                'id' => 554,
                'name' => '水湳派出所',
                'name_in_en' => 'Shuinan Police Station',
                'zip_code' => 406,
                'address' => '臺中市北屯區中清路299號',
                'telephone' => '04 22979937',
            ],
            54 => 
            [
                'id' => 555,
                'name' => '北屯派出所',
                'name_in_en' => 'Beitun Police Station',
                'zip_code' => 406,
                'address' => '臺中市北屯區北屯路106號',
                'telephone' => '04 22332712',
            ],
            55 => 
            [
                'id' => 556,
                'name' => '松安派出所',
                'name_in_en' => 'Song-an Police Station',
                'zip_code' => 406,
                'address' => '臺中市北屯區松竹路2段5號',
                'telephone' => '04 22461750',
            ],
            56 => 
            [
                'id' => 557,
                'name' => '第六分局',
                'name_in_en' => 'Sixth Precinct',
                'zip_code' => 407,
                'address' => '臺中市西屯區市政路456號',
                'telephone' => '04 22513284',
            ],
            57 => 
            [
                'id' => 558,
                'name' => '市政派出所',
                'name_in_en' => 'Shihjheng Police Station',
                'zip_code' => 407,
                'address' => '臺中市西屯區市政路456號',
                'telephone' => '04 22513312',
            ],
            58 => 
            [
                'id' => 559,
                'name' => '西屯派出所',
                'name_in_en' => 'Situn Police Station',
                'zip_code' => 407,
                'address' => '臺中市西屯區西屯路3段40號',
                'telephone' => '04 27012717',
            ],
            59 => 
            [
                'id' => 560,
                'name' => '何安派出所',
                'name_in_en' => 'He-an Police Station',
                'zip_code' => 407,
                'address' => '臺中市西屯區甘肅路106號',
                'telephone' => '04 23149343',
            ],
            60 => 
            [
                'id' => 561,
                'name' => '協和派出所',
                'name_in_en' => 'Siehe Police Station',
                'zip_code' => 407,
                'address' => '臺中市西屯區臺灣大道4段1347號',
                'telephone' => '04 23593736',
            ],
            61 => 
            [
                'id' => 562,
                'name' => '工業區派出所',
                'name_in_en' => 'Industrial District Police Station',
                'zip_code' => 407,
                'address' => '臺中市西屯區工業五路2之1號',
                'telephone' => '04 23596317',
            ],
            62 => 
            [
                'id' => 563,
                'name' => '永福派出所',
                'name_in_en' => 'Yongfu Police Station',
                'zip_code' => 407,
                'address' => '臺中市西屯區國安二路300號',
                'telephone' => '04 24613009',
            ],
            63 => 
            [
                'id' => 564,
                'name' => '大甲分局',
                'name_in_en' => 'Dajia Precinct',
                'zip_code' => 437,
                'address' => '臺中市大甲區文武路1號',
                'telephone' => '04 26872039',
            ],
            64 => 
            [
                'id' => 565,
                'name' => '大甲派出所',
                'name_in_en' => 'Dajia Police Station',
                'zip_code' => 437,
                'address' => '臺中市大甲區大甲里文武路1號',
                'telephone' => '04 26872047',
            ],
            65 => 
            [
                'id' => 566,
                'name' => '安定派出所',
                'name_in_en' => 'An-ding Police Station',
                'zip_code' => 438,
                'address' => '臺中市外埔區土城路110號',
                'telephone' => '04 26831522',
            ],
            66 => 
            [
                'id' => 567,
                'name' => '日南派出所',
                'name_in_en' => 'Rihnan Police Station',
                'zip_code' => 437,
                'address' => '臺中市大甲區中山路2段165號',
                'telephone' => '04 26813700',
            ],
            67 => 
            [
                'id' => 568,
                'name' => '月眉派出所',
                'name_in_en' => 'Yuemei Police Station',
                'zip_code' => 421,
                'address' => '臺中市后里區三月路19號',
                'telephone' => '04 25562384',
            ],
            68 => 
            [
                'id' => 569,
                'name' => '西岐派出所',
                'name_in_en' => 'Xiqi Police Station',
                'zip_code' => 437,
                'address' => '臺中市大甲區順帆路94號',
                'telephone' => '04 26811320',
            ],
            69 => 
            [
                'id' => 570,
                'name' => '泰安派出所',
                'name_in_en' => 'Tai-an Police Station',
                'zip_code' => 421,
                'address' => '臺中市后里區安眉路1號',
                'telephone' => '04 25562340',
            ],
            70 => 
            [
                'id' => 571,
                'name' => '海墘派出所',
                'name_in_en' => 'Haiqian Police Station',
                'zip_code' => 439,
                'address' => '臺中市大安區大安港路1160號',
                'telephone' => '04 26875845',
            ],
            71 => 
            [
                'id' => 572,
                'name' => '義里派出所',
                'name_in_en' => 'Yili Police Station',
                'zip_code' => 421,
                'address' => '臺中市后里區三豐路839號',
                'telephone' => '04 25562333',
            ],
            72 => 
            [
                'id' => 573,
                'name' => '后里分駐所',
                'name_in_en' => 'Houli Police Station',
                'zip_code' => 421,
                'address' => '臺中市后里區公安路88號',
                'telephone' => '04 25562037',
            ],
            73 => 
            [
                'id' => 574,
                'name' => '外埔分駐所',
                'name_in_en' => 'Waipu Police Station',
                'zip_code' => 438,
                'address' => '臺中市外埔區六分路350號',
                'telephone' => '04 26832690',
            ],
            74 => 
            [
                'id' => 575,
                'name' => '大安分駐所',
                'name_in_en' => 'Da-an Police Station',
                'zip_code' => 439,
                'address' => '臺中市大安區中山南路300號',
                'telephone' => '04 26713320',
            ],
            75 => 
            [
                'id' => 576,
                'name' => '和平分局',
                'name_in_en' => 'Heping Precinct',
                'zip_code' => 424,
                'address' => '臺中市和平區東關路3段154號',
                'telephone' => '04 25942560',
            ],
            76 => 
            [
                'id' => 577,
                'name' => '天輪派出所',
                'name_in_en' => 'Tianlun Police Station',
                'zip_code' => 424,
                'address' => '臺中市和平區東關路2段33號',
                'telephone' => '04 25941193',
            ],
            77 => 
            [
                'id' => 578,
                'name' => '德基派出所',
                'name_in_en' => 'Deji Police Station',
                'zip_code' => 424,
                'address' => '臺中市和平區和平路2段16之1號',
                'telephone' => '04 25980439',
            ],
            78 => 
            [
                'id' => 579,
                'name' => '環山派出所',
                'name_in_en' => 'Huanshan Police Station',
                'zip_code' => 424,
                'address' => '臺中市和平區中興路3段48號',
                'telephone' => '04 25802242',
            ],
            79 => 
            [
                'id' => 580,
                'name' => '雙崎派出所',
                'name_in_en' => 'Shuangqi Police Station',
                'zip_code' => 424,
                'address' => '臺中市和平區東崎路2段39號',
                'telephone' => '04 25911214',
            ],
            80 => 
            [
                'id' => 581,
                'name' => '桃山派出所',
                'name_in_en' => 'Taoshan Police Station',
                'zip_code' => 424,
                'address' => '臺中市和平區東崎路1段桃山巷7之2號',
                'telephone' => '04 25911314',
            ],
            81 => 
            [
                'id' => 582,
                'name' => '大棟派出所',
                'name_in_en' => 'Dadong Police Station',
                'zip_code' => 424,
                'address' => '臺中市和平區雪山路2號',
                'telephone' => '04 25971106',
            ],
            82 => 
            [
                'id' => 583,
                'name' => '勝光派出所',
                'name_in_en' => 'Shengguang Police Station',
                'zip_code' => 424,
                'address' => '臺中市和平區平等村中興路1段21號',
                'telephone' => '04 25901004',
            ],
            83 => 
            [
                'id' => 584,
                'name' => '志良派出所',
                'name_in_en' => 'Zhiliang Police Station',
                'zip_code' => 424,
                'address' => '臺中市和平區中興路2段47號',
                'telephone' => '04 25901040',
            ],
            84 => 
            [
                'id' => 585,
                'name' => '竹林派出所',
                'name_in_en' => 'Zhulin Police Station',
                'zip_code' => 424,
                'address' => '臺中市和平區東崎路1段89號',
                'telephone' => '04 25911114',
            ],
            85 => 
            [
                'id' => 586,
                'name' => '梨山分駐所',
                'name_in_en' => 'Lishan Police Station',
                'zip_code' => 424,
                'address' => '臺中市和平區中正路103號',
                'telephone' => '04 25989580',
            ],
            86 => 
            [
                'id' => 587,
                'name' => '松茂派出所',
                'name_in_en' => 'Songmao Police Station',
                'zip_code' => 424,
                'address' => '臺中市和平區中興路4段54號',
                'telephone' => '04 25989692',
            ],
            87 => 
            [
                'id' => 588,
                'name' => '和平派出所',
                'name_in_en' => 'Heping Police Station',
                'zip_code' => 424,
                'address' => '臺中市和平區南勢里東關路3段154號',
                'telephone' => '04 25941324',
            ],
            88 => 
            [
                'id' => 589,
                'name' => '谷關派出所',
                'name_in_en' => 'Guguan Police Station',
                'zip_code' => 424,
                'address' => '臺中市和平區博愛村東關路1段125號',
                'telephone' => '04 25951114',
            ],
            89 => 
            [
                'id' => 590,
                'name' => '雪山派出所',
                'name_in_en' => 'Xueshan Police Station',
                'zip_code' => 424,
                'address' => '臺中市和平區雪山路10號',
                'telephone' => '04 25883514',
            ],
            90 => 
            [
                'id' => 591,
                'name' => '烏日分局',
                'name_in_en' => 'Wurih Precinct',
                'zip_code' => 414,
                'address' => '臺中市烏日區中山路2段309號',
                'telephone' => '04 23369595',
            ],
            91 => 
            [
                'id' => 592,
                'name' => '烏日派出所',
                'name_in_en' => 'Wurih Police Station',
                'zip_code' => 414,
                'address' => '臺中市烏日區中山路2段309號',
                'telephone' => '04 23381448',
            ],
            92 => 
            [
                'id' => 593,
                'name' => '龍津派出所',
                'name_in_en' => 'Longjin Police Station',
                'zip_code' => 434,
                'address' => '臺中市龍井區中央路1段165巷36號',
                'telephone' => '04 26396084',
            ],
            93 => 
            [
                'id' => 594,
                'name' => '五光派出所',
                'name_in_en' => 'Wuguang Police Station',
                'zip_code' => 414,
                'address' => '臺中市烏日區環河路一段1200號',
                'telephone' => '04 23381960',
            ],
            94 => 
            [
                'id' => 595,
                'name' => '龍井分駐所',
                'name_in_en' => 'Lungjing Police Station',
                'zip_code' => 434,
                'address' => '臺中市龍井區沙田路4段245號',
                'telephone' => '04 26353054',
            ],
            95 => 
            [
                'id' => 596,
                'name' => '溪南派出所',
                'name_in_en' => 'Xhinan Police Station',
                'zip_code' => 414,
                'address' => '臺中市烏日區溪南路2段638號',
                'telephone' => '04 23351676',
            ],
            96 => 
            [
                'id' => 597,
                'name' => '龍東派出所',
                'name_in_en' => 'Lungdong Police Station',
                'zip_code' => 434,
                'address' => '臺中市龍井區茄投路67號',
                'telephone' => '04 26397043',
            ],
            97 => 
            [
                'id' => 598,
                'name' => '麗水派出所',
                'name_in_en' => 'Lishui Police Station',
                'zip_code' => 434,
                'address' => '臺中市龍井區臨港東路2段317號',
                'telephone' => '04 26395994',
            ],
            98 => 
            [
                'id' => 599,
                'name' => '犁份派出所',
                'name_in_en' => 'Lifen Police Station',
                'zip_code' => 434,
                'address' => '臺中市龍井區遊園南路194號',
                'telephone' => '04 26312719',
            ],
            99 => 
            [
                'id' => 600,
                'name' => '追分派出所',
                'name_in_en' => 'Zhuifen Police Station',
                'zip_code' => 432,
                'address' => '臺中市大肚區沙田路1段290號',
                'telephone' => '04 26932108',
            ],
            100 => 
            [
                'id' => 601,
                'name' => '大肚分駐所',
                'name_in_en' => 'Dadu Police Station',
                'zip_code' => 432,
                'address' => '臺中市大肚區沙田路3段38號',
                'telephone' => '04 26992167',
            ],
            101 => 
            [
                'id' => 602,
                'name' => '瑞井派出所',
                'name_in_en' => 'Rueijing Police Station',
                'zip_code' => 432,
                'address' => '臺中市大肚區遊園路1段1之1號',
                'telephone' => '04 26910205-6',
            ],
            102 => 
            [
                'id' => 603,
                'name' => '三和派出所',
                'name_in_en' => 'Sanhe Police Station',
                'zip_code' => 414,
                'address' => '臺中市烏日區三榮八路25號',
                'telephone' => '04 23388011',
            ],
            103 => 
            [
                'id' => 604,
                'name' => '東勢分局',
                'name_in_en' => 'Dongshi Precinct',
                'zip_code' => 423,
                'address' => '臺中市東勢區豐勢路512號',
                'telephone' => '04 23302139',
            ],
            104 => 
            [
                'id' => 605,
                'name' => '東勢派出所',
                'name_in_en' => 'Dongshi Police Station',
                'zip_code' => 423,
                'address' => '臺中市東勢區豐勢路512號',
                'telephone' => '04 25873802',
            ],
            105 => 
            [
                'id' => 606,
                'name' => '茅埔派出所',
                'name_in_en' => 'Maopu Police Station',
                'zip_code' => 423,
                'address' => '臺中市東勢區下城里下城街36號',
                'telephone' => '04 25852472',
            ],
            106 => 
            [
                'id' => 607,
                'name' => '東興派出所',
                'name_in_en' => 'Tongxing Police Station',
                'zip_code' => 426,
                'address' => '臺中市新社區興社街1段285號',
                'telephone' => '04 25811476',
            ],
            107 => 
            [
                'id' => 608,
                'name' => '土牛派出所',
                'name_in_en' => 'Tuniu Police Station',
                'zip_code' => 422,
                'address' => '臺中市石岡區豐勢路19號',
                'telephone' => '04 25817493',
            ],
            108 => 
            [
                'id' => 609,
                'name' => '中坑派出所',
                'name_in_en' => 'Zhongkeng Police Station',
                'zip_code' => 423,
                'address' => '臺中市東勢區東坑路665號',
                'telephone' => '04 25874474',
            ],
            109 => 
            [
                'id' => 610,
                'name' => '永源派出所',
                'name_in_en' => 'Yongyuan Police Station',
                'zip_code' => 426,
                'address' => '臺中市新社區中和街1段20號',
                'telephone' => '04 25811475',
            ],
            110 => 
            [
                'id' => 611,
                'name' => '石城派出所',
                'name_in_en' => 'Shicheng Police Station',
                'zip_code' => 423,
                'address' => '臺中市東勢區石城街297號',
                'telephone' => '04 25874473',
            ],
            111 => 
            [
                'id' => 612,
                'name' => '福中派出所',
                'name_in_en' => 'Fuzhong Police Sstation',
                'zip_code' => 426,
                'address' => '臺中市新社區美林45號',
                'telephone' => '04 25941364',
            ],
            112 => 
            [
                'id' => 613,
                'name' => '石岡分駐所',
                'name_in_en' => 'Shigang Police Station',
                'zip_code' => 422,
                'address' => '臺中市石岡區豐勢路1021號',
                'telephone' => '04 25722781',
            ],
            113 => 
            [
                'id' => 614,
                'name' => '新社分駐所',
                'name_in_en' => 'Xinshe Police Station',
                'zip_code' => 426,
                'address' => '臺中市新社區興社街2段28之3號',
                'telephone' => '04 25811401',
            ],
            114 => 
            [
                'id' => 615,
                'name' => '清水分局',
                'name_in_en' => 'Qingshui Precinct',
                'zip_code' => 436,
                'address' => '臺中市清水區鰲峰路23號',
                'telephone' => '04 26222022',
            ],
            115 => 
            [
                'id' => 616,
                'name' => '清水派出所',
                'name_in_en' => 'Qingshui Police Station',
                'zip_code' => 436,
                'address' => '臺中市清水區鰲峰路23號',
                'telephone' => '04 26222054',
            ],
            116 => 
            [
                'id' => 617,
                'name' => '大楊派出所',
                'name_in_en' => 'Dayang Police Station',
                'zip_code' => 436,
                'address' => '臺中市清水區神清路46號',
                'telephone' => '04 26202409',
            ],
            117 => 
            [
                'id' => 618,
                'name' => '大秀派出所',
                'name_in_en' => 'Daxiu Police Station',
                'zip_code' => 436,
                'address' => '臺中市清水區五權路438號',
                'telephone' => '04 26265404',
            ],
            118 => 
            [
                'id' => 619,
                'name' => '安寧派出所',
                'name_in_en' => 'An-ning Police Station',
                'zip_code' => 435,
                'address' => '臺中市梧棲區中棲路2段18號',
                'telephone' => '04 26560343',
            ],
            119 => 
            [
                'id' => 620,
                'name' => '高美派出所',
                'name_in_en' => 'Gaomei Police Station',
                'zip_code' => 433,
                'address' => '臺中市清水區護岸路29號',
                'telephone' => '04 26113384',
            ],
            120 => 
            [
                'id' => 621,
                'name' => '明秀派出所',
                'name_in_en' => 'Mingxiu Police Station',
                'zip_code' => 433,
                'address' => '臺中市沙鹿區鎮南路1段450號',
                'telephone' => '04 26314309',
            ],
            121 => 
            [
                'id' => 622,
                'name' => '光華派出所',
                'name_in_en' => 'Guanghua Police Station',
                'zip_code' => 433,
                'address' => '臺中市沙鹿區光華路387號',
                'telephone' => '04 26630624',
            ],
            122 => 
            [
                'id' => 623,
                'name' => '清泉派出所',
                'name_in_en' => 'Qingquan Police Station',
                'zip_code' => 433,
                'address' => '臺中市沙鹿區中清路2之39號',
                'telephone' => '04 26153884',
            ],
            123 => 
            [
                'id' => 624,
                'name' => '梧棲分駐所',
                'name_in_en' => 'Wuqi Police Station',
                'zip_code' => 435,
                'address' => '臺中市梧棲區中興路210號',
                'telephone' => '04 26562860',
            ],
            124 => 
            [
                'id' => 625,
                'name' => '沙鹿分駐所',
                'name_in_en' => 'Shalu Police Station',
                'zip_code' => 433,
                'address' => '臺中市沙鹿區鎮政路12號',
                'telephone' => '04 26625032',
            ],
            125 => 
            [
                'id' => 626,
                'name' => '三田派出所',
                'name_in_en' => 'Santian Police Station',
                'zip_code' => 436,
                'address' => '臺中市清水區中山路559號',
                'telephone' => '04 26222146',
            ],
            126 => 
            [
                'id' => 627,
                'name' => '豐原分局',
                'name_in_en' => 'Fengyuan Precinct',
                'zip_code' => 420,
                'address' => '臺中市豐原區葫蘆里中山路225號',
                'telephone' => '04 25224684',
            ],
            127 => 
            [
                'id' => 628,
                'name' => '豐洲派出所',
                'name_in_en' => 'Fengjhou Police Station',
                'zip_code' => 420,
                'address' => '臺中市豐原區豐洲里豐洲路489號',
                'telephone' => '04 25272585',
            ],
            128 => 
            [
                'id' => 629,
                'name' => '合作派出所',
                'name_in_en' => 'Hezuo Police Station',
                'zip_code' => 420,
                'address' => '臺中市豐原區育英路52號',
                'telephone' => '04 25293134',
            ],
            129 => 
            [
                'id' => 630,
                'name' => '豐東派出所',
                'name_in_en' => 'Fengdong Police Station',
                'zip_code' => 420,
                'address' => '臺中市豐原區豐東路162號',
                'telephone' => '04 25286917',
            ],
            130 => 
            [
                'id' => 631,
                'name' => '社口派出所',
                'name_in_en' => 'Shekou Police Station',
                'zip_code' => 429,
                'address' => '臺中市神岡區社口里社口街106巷2號',
                'telephone' => '04 25625392',
            ],
            131 => 
            [
                'id' => 632,
                'name' => '翁子派出所',
                'name_in_en' => 'Wengzi Police Station',
                'zip_code' => 420,
                'address' => '臺中市豐原區豐勢路2段10號',
                'telephone' => '04 25275594',
            ],
            132 => 
            [
                'id' => 633,
                'name' => '神岡分駐所',
                'name_in_en' => 'Shengang Police Station',
                'zip_code' => 429,
                'address' => '臺中市神岡區神岡路121號',
                'telephone' => '04 25622422',
            ],
            133 => 
            [
                'id' => 634,
                'name' => '頂街派出所',
                'name_in_en' => 'Dingjie Police Station',
                'zip_code' => 420,
                'address' => '臺中市豐原區東北街1-1號',
                'telephone' => '04 20228150',
            ],
            134 => 
            [
                'id' => 635,
                'name' => '豐原派出所',
                'name_in_en' => 'Fengyuan Police Station',
                'zip_code' => 420,
                'address' => '臺中市豐原區西安街21號',
                'telephone' => '04 25250092',
            ],
            135 => 
            [
                'id' => 636,
                'name' => '霧峰分局',
                'name_in_en' => 'Wufeng Precinct',
                'zip_code' => 413,
                'address' => '臺中市霧峰區中正路1236號',
                'telephone' => '04 23302139',
            ],
            136 => 
            [
                'id' => 637,
                'name' => '國光派出所',
                'name_in_en' => 'Guoguang Police Station',
                'zip_code' => 412,
                'address' => '臺中市大里區永大街5號',
                'telephone' => '04 24180232',
            ],
            137 => 
            [
                'id' => 638,
                'name' => '十九甲派出所',
                'name_in_en' => 'Shijiujia Police Station',
                'zip_code' => 412,
                'address' => '臺中市大里區立元路115號',
                'telephone' => '04 22706613',
            ],
            138 => 
            [
                'id' => 639,
                'name' => '霧峰派出所',
                'name_in_en' => 'Wufeng Police Station',
                'zip_code' => 413,
                'address' => '臺中市霧峰區民權街37號',
                'telephone' => '04 23393013',
            ],
            139 => 
            [
                'id' => 640,
                'name' => '萬豐派出所',
                'name_in_en' => 'Wanfeng Police Station',
                'zip_code' => 413,
                'address' => '臺中市霧峰區中正路161號',
                'telephone' => '04 23302873',
            ],
            140 => 
            [
                'id' => 641,
                'name' => '大里分駐所',
                'name_in_en' => 'Dali Police Station',
                'zip_code' => 412,
                'address' => '臺中市大里區新興路5號',
                'telephone' => '04 24060634',
            ],
            141 => 
            [
                'id' => 642,
                'name' => '吉峰派出所',
                'name_in_en' => 'Jifeng Police Station',
                'zip_code' => 413,
                'address' => '臺中市霧峰區中正路1236號',
                'telephone' => '04 23334342',
            ],
            142 => 
            [
                'id' => 643,
                'name' => '內新派出所',
                'name_in_en' => 'Neixin Police Station',
                'zip_code' => 412,
                'address' => '臺中市大里區中興路2段598號',
                'telephone' => '04 24875584',
            ],
            143 => 
            [
                'id' => 644,
                'name' => '成功派出所',
                'name_in_en' => 'Chenggong Police Station',
                'zip_code' => 412,
                'address' => '臺中市大里區成功路9號',
                'telephone' => '04 24969293',
            ],
            144 => 
            [
                'id' => 645,
                'name' => '仁化派出所',
                'name_in_en' => 'Renhua Police Station',
                'zip_code' => 412,
                'address' => '臺中市大里區仁化路198號',
                'telephone' => '04 24952010',
            ],
            145 => 
            [
                'id' => 646,
                'name' => '四德派出所',
                'name_in_en' => 'Si-de Police Station',
                'zip_code' => 413,
                'address' => '臺中市霧峰區四德路541號',
                'telephone' => '04 23398281',
            ],
            146 => 
            [
                'id' => 647,
                'name' => '太平分局',
                'name_in_en' => 'Taiping Precinct',
                'zip_code' => 411,
                'address' => '臺中市太平區中山路1段215號',
                'telephone' => '04 23938100',
            ],
            147 => 
            [
                'id' => 648,
                'name' => '太平派出所',
                'name_in_en' => 'Taiping Police Station',
                'zip_code' => 411,
                'address' => '臺中市太平區中興東路21號',
                'telephone' => '04 22780418',
            ],
            148 => 
            [
                'id' => 649,
                'name' => '新平派出所',
                'name_in_en' => 'Xinping Police Station',
                'zip_code' => 411,
                'address' => '臺中市太平區新高里中山路4段2號',
                'telephone' => '04 23912446',
            ],
            149 => 
            [
                'id' => 650,
                'name' => '宏龍派出所',
                'name_in_en' => 'Honglong Police Station',
                'zip_code' => 411,
                'address' => '臺中市太平區光興路900號',
                'telephone' => '04 22702700',
            ],
            150 => 
            [
                'id' => 651,
                'name' => '頭汴派出所',
                'name_in_en' => 'Toubian Police Station',
                'zip_code' => 411,
                'address' => '臺中市太平區長龍路2段11巷2號',
                'telephone' => '04 22704962',
            ],
            151 => 
            [
                'id' => 652,
                'name' => '坪林派出所',
                'name_in_en' => 'Pinglin Police Station',
                'zip_code' => 411,
                'address' => '臺中市太平區中山路1段215號',
                'telephone' => '04 23937396',
            ],
            152 => 
            [
                'id' => 653,
                'name' => '大雅分局',
                'name_in_en' => 'Daya Precinct',
                'zip_code' => 428,
                'address' => '臺中市大雅區中清東路226號',
                'telephone' => '04 25665216',
            ],
            153 => 
            [
                'id' => 654,
                'name' => '大雅派出所',
                'name_in_en' => 'Daya Police Station',
                'zip_code' => 428,
                'address' => '臺中市大雅區中清東路226號',
                'telephone' => '04 25680184',
            ],
            154 => 
            [
                'id' => 655,
                'name' => '馬岡派出所',
                'name_in_en' => 'Magang Police Station',
                'zip_code' => 428,
                'address' => '臺中市大雅區雅潭路4段20號',
                'telephone' => '04 25662064',
            ],
            155 => 
            [
                'id' => 656,
                'name' => '潭子分駐所',
                'name_in_en' => 'Tanzi Police Station',
                'zip_code' => 427,
                'address' => '臺中市潭子區中山路2段241巷3號',
                'telephone' => '04 25348866',
            ],
            156 => 
            [
                'id' => 657,
                'name' => '潭北派出所',
                'name_in_en' => 'Tanbei Police Station',
                'zip_code' => 427,
                'address' => '臺中市潭子區潭子街3段56號',
                'telephone' => '04 25361651',
            ],
            157 => 
            [
                'id' => 658,
                'name' => '頭家派出所',
                'name_in_en' => 'Toujia Police Station',
                'zip_code' => 427,
                'address' => '臺中市潭子區得天南街37巷57號',
                'telephone' => '04 25353818',
            ],
            158 => 
            [
                'id' => 659,
                'name' => '南投縣政府警察局',
                'name_in_en' => 'Nantou County Police Bureau',
                'zip_code' => 540,
                'address' => '南投縣南投市南崗二路133號',
                'telephone' => '049 2222448',
            ],
            159 => 
            [
                'id' => 660,
                'name' => '南投分局',
                'name_in_en' => 'Nantou Police Precinct',
                'zip_code' => 540,
                'address' => '南投縣南投市彰南路2段109號',
                'telephone' => '049 2222923',
            ],
            160 => 
            [
                'id' => 661,
                'name' => '南投派出所',
                'name_in_en' => 'Nantou Police Station',
                'zip_code' => 540,
                'address' => '南投縣南投市彰南路2段109號',
                'telephone' => '049 2222336',
            ],
            161 => 
            [
                'id' => 662,
                'name' => '永和派出所',
                'name_in_en' => 'Yonghe Police Station',
                'zip_code' => 551,
                'address' => '南投縣名間鄉大庄村南田路138號',
                'telephone' => '049 2271002',
            ],
            162 => 
            [
                'id' => 663,
                'name' => '赤水派出所',
                'name_in_en' => 'Chishui Police Station',
                'zip_code' => 551,
                'address' => '南投縣名間鄉赤水村南田路291號',
                'telephone' => '049 2271159',
            ],
            163 => 
            [
                'id' => 664,
                'name' => '崁峰派出所',
                'name_in_en' => 'Kanfeng Police Station',
                'zip_code' => 551,
                'address' => '南投縣名間鄉崁腳村名松路1段309號',
                'telephone' => '049 2582138',
            ],
            164 => 
            [
                'id' => 665,
                'name' => '名間分駐所',
                'name_in_en' => 'Mingjian Police Station',
                'zip_code' => 551,
                'address' => '南投縣名間鄉中正村彰南路30號',
                'telephone' => '049 2732149',
            ],
            165 => 
            [
                'id' => 666,
                'name' => '新佳派出所',
                'name_in_en' => 'Xinjia Police Station',
                'zip_code' => 551,
                'address' => '南投縣名間鄉新街村彰南路422號',
                'telephone' => '049 2225160',
            ],
            166 => 
            [
                'id' => 667,
                'name' => '鳳鳴派出所',
                'name_in_en' => 'Fengming Police Station',
                'zip_code' => 540,
                'address' => '南投縣南投市八卦路837號',
                'telephone' => '049 2291939',
            ],
            167 => 
            [
                'id' => 668,
                'name' => '半山派出所',
                'name_in_en' => 'Banshan Police Station',
                'zip_code' => 540,
                'address' => '南投縣南投市平山里新市路51號',
                'telephone' => '049 2251264',
            ],
            168 => 
            [
                'id' => 669,
                'name' => '中興分局',
                'name_in_en' => 'Chunghsing Police Precinct',
                'zip_code' => 540,
                'address' => '南投縣南投市光華路115號',
                'telephone' => '049 2332585',
            ],
            169 => 
            [
                'id' => 670,
                'name' => '中興派出所',
                'name_in_en' => 'Chunghsing Police station',
                'zip_code' => 540,
                'address' => '南投縣南投市光華路115號',
                'telephone' => '049 2332544',
            ],
            170 => 
            [
                'id' => 671,
                'name' => '永清派出所',
                'name_in_en' => 'Yongqing police station',
                'zip_code' => 540,
                'address' => '南投縣南投市南營路745號',
                'telephone' => '049 2325314',
            ],
            171 => 
            [
                'id' => 672,
                'name' => '光明派出所',
                'name_in_en' => 'Guangming police station',
                'zip_code' => 540,
                'address' => '南投縣南投市光明路35號',
                'telephone' => '049 2332586',
            ],
            172 => 
            [
                'id' => 673,
                'name' => '府西派出所',
                'name_in_en' => 'Fu-xi police station',
                'zip_code' => 540,
                'address' => '南投縣南投市虎山路15號',
                'telephone' => '049 2332557',
            ],
            173 => 
            [
                'id' => 674,
                'name' => '仁愛分局',
                'name_in_en' => 'Jeani Police Sub-bureau',
                'zip_code' => 546,
                'address' => '南投縣仁愛鄉大同村仁和路87號',
                'telephone' => '049 2802204',
            ],
            174 => 
            [
                'id' => 675,
                'name' => '霧社派出所',
                'name_in_en' => 'Wushe Police Station',
                'zip_code' => 546,
                'address' => '南投縣仁愛鄉大同村仁和路87號',
                'telephone' => '049 2802520',
            ],
            175 => 
            [
                'id' => 676,
                'name' => '翠巒派出所',
                'name_in_en' => 'Cuei Luan Police Station',
                'zip_code' => 546,
                'address' => '南投縣仁愛鄉力行村翠巒路23號',
                'telephone' => '049 2960040',
            ],
            176 => 
            [
                'id' => 677,
                'name' => '親愛派出所',
                'name_in_en' => 'Cin Ai Police Station',
                'zip_code' => 546,
                'address' => '南投縣仁愛鄉親愛村高平路4號',
                'telephone' => '049 2974245',
            ],
            177 => 
            [
                'id' => 678,
                'name' => '春陽派出所',
                'name_in_en' => 'Chun Yang Police Station',
                'zip_code' => 546,
                'address' => '南投縣仁愛鄉春陽村永樂巷57號',
                'telephone' => '049 2802396',
            ],
            178 => 
            [
                'id' => 679,
                'name' => '中原派出所',
                'name_in_en' => 'Jhong Yuan Police Station',
                'zip_code' => 546,
                'address' => '南投縣仁愛鄉互助村中華路76號',
                'telephone' => '049 2941073',
            ],
            179 => 
            [
                'id' => 680,
                'name' => '眉原派出所',
                'name_in_en' => 'Mei Yuan Police Station',
                'zip_code' => 546,
                'address' => '南投縣仁愛鄉互助村中華路76號',
                'telephone' => '049 2941073',
            ],
            180 => 
            [
                'id' => 681,
                'name' => '清流派出所',
                'name_in_en' => 'Cing Liou Police Station',
                'zip_code' => 546,
                'address' => '南投縣仁愛鄉互助村中華路76號',
                'telephone' => '049 2941073',
            ],
            181 => 
            [
                'id' => 682,
                'name' => '瑞岩派出所',
                'name_in_en' => 'Rui Yan Police Station',
                'zip_code' => 546,
                'address' => '南投縣仁愛鄉發祥村光復巷21號',
                'telephone' => '049 2955185',
            ],
            182 => 
            [
                'id' => 683,
                'name' => '南豐派出所',
                'name_in_en' => 'Nan Fung Police Station',
                'zip_code' => 546,
                'address' => '南投縣仁愛鄉南豐村中正路119之1號',
                'telephone' => '049 2920085',
            ],
            183 => 
            [
                'id' => 684,
                'name' => '榮興派出所',
                'name_in_en' => 'Rong Sing Police Station',
                'zip_code' => 546,
                'address' => '南投縣仁愛鄉榮興村碧綠巷24號',
                'telephone' => '04 25991064',
            ],
            184 => 
            [
                'id' => 685,
                'name' => '過坑派出所',
                'name_in_en' => 'Guo Keng Police Station',
                'zip_code' => 546,
                'address' => '南投縣仁愛鄉中正村平等巷118號',
                'telephone' => '049 2925753',
            ],
            185 => 
            [
                'id' => 686,
                'name' => '平靜派出所',
                'name_in_en' => 'Ping Jing Police Station',
                'zip_code' => 546,
                'address' => '南投縣仁愛鄉精英村法觀路18號',
                'telephone' => '049 2970196',
            ],
            186 => 
            [
                'id' => 687,
                'name' => '靜觀派出所',
                'name_in_en' => 'Jing Guan Police Station',
                'zip_code' => 546,
                'address' => '南投縣仁愛鄉精英村法觀路18號',
                'telephone' => '049 2970196',
            ],
            187 => 
            [
                'id' => 688,
                'name' => '紅香派出所',
                'name_in_en' => 'Hong Siang Police Station',
                'zip_code' => 546,
                'address' => '南投縣仁愛鄉發祥村仁盛路22號',
                'telephone' => '049 2955187',
            ],
            188 => 
            [
                'id' => 689,
                'name' => '松岡派出所',
                'name_in_en' => 'Song Gang Police Station',
                'zip_code' => 546,
                'address' => '南投縣仁愛鄉大同村仁和路135號',
                'telephone' => '049 2802395',
            ],
            189 => 
            [
                'id' => 690,
                'name' => '華崗派出所',
                'name_in_en' => 'Hua Gang Police Station',
                'zip_code' => 546,
                'address' => '南投縣仁愛鄉翠華村華崗119之2號',
                'telephone' => '049 2960200',
            ],
            190 => 
            [
                'id' => 691,
                'name' => '望洋派出所',
                'name_in_en' => 'Wang Yang Police Station',
                'zip_code' => 546,
                'address' => '南投縣仁愛鄉力行村新望洋68號',
                'telephone' => '049 2955210',
            ],
            191 => 
            [
                'id' => 692,
                'name' => '廬山派出所',
                'name_in_en' => 'Lu Shan Police Station',
                'zip_code' => 546,
                'address' => '南投縣仁愛鄉精英村榮華巷43號',
                'telephone' => '049 2802521',
            ],
            192 => 
            [
                'id' => 693,
                'name' => '武界派出所',
                'name_in_en' => 'Wu Jie Police Station',
                'zip_code' => 546,
                'address' => '南投縣仁愛鄉法治村界山巷4號',
                'telephone' => '049 2977001',
            ],
            193 => 
            [
                'id' => 694,
                'name' => '萬豐派出所',
                'name_in_en' => 'Cin Ai Police Station',
                'zip_code' => 546,
                'address' => '南投縣仁愛鄉法治村界山巷4號',
                'telephone' => '049 2977001',
            ],
            194 => 
            [
                'id' => 695,
                'name' => '翠峰派出所',
                'name_in_en' => 'Cuei Fong Police Station',
                'zip_code' => 546,
                'address' => '南投縣仁愛鄉大同村仁和路220號',
                'telephone' => '049 2802603',
            ],
            195 => 
            [
                'id' => 696,
                'name' => '信義分局',
                'name_in_en' => 'Sinyi Police Precinct',
                'zip_code' => 556,
                'address' => '南投縣信義鄉明德村玉山路49號',
                'telephone' => '049 2791260',
            ],
            196 => 
            [
                'id' => 697,
                'name' => '信義派出所',
                'name_in_en' => 'Sinyi Police Station',
                'zip_code' => 556,
                'address' => '南投縣信義鄉明德村玉山路49號',
                'telephone' => '049 2791261',
            ],
            197 => 
            [
                'id' => 698,
                'name' => '久美派出所',
                'name_in_en' => 'Jiou Mei Police Station',
                'zip_code' => 556,
                'address' => '南投縣信義鄉望美村美信巷55號',
                'telephone' => '049 2831472',
            ],
            198 => 
            [
                'id' => 699,
                'name' => '潭南派出所',
                'name_in_en' => 'Tan Nan Police Station',
                'zip_code' => 556,
                'address' => '南投縣信義鄉潭南村和平巷47號',
                'telephone' => '049 2741264',
            ],
            199 => 
            [
                'id' => 700,
                'name' => '豐丘派出所',
                'name_in_en' => 'Fong Ciou Police Station',
                'zip_code' => 556,
                'address' => '南投縣信義鄉豐丘村高平巷8號',
                'telephone' => '049 2791583',
            ],
            200 => 
            [
                'id' => 701,
                'name' => '新鄉派出所',
                'name_in_en' => 'Sin Siang Police Station',
                'zip_code' => 556,
                'address' => '南投縣信義鄉新鄉村新鄉路105號',
                'telephone' => '049 2831595',
            ],
            201 => 
            [
                'id' => 702,
                'name' => '東埔派出所',
                'name_in_en' => 'Dong Pu Police Station',
                'zip_code' => 556,
                'address' => '南投縣信義鄉東埔村開高巷56號',
                'telephone' => '049 2701321',
            ],
            202 => 
            [
                'id' => 703,
                'name' => '雙龍派出所',
                'name_in_en' => 'Shuang Long Police Station',
                'zip_code' => 556,
                'address' => '南投縣信義鄉雙龍村光復巷33號',
                'telephone' => '049 2741321',
            ],
            203 => 
            [
                'id' => 704,
                'name' => '羅娜派出所',
                'name_in_en' => 'Luo Na Police Station',
                'zip_code' => 556,
                'address' => '南投縣信義鄉羅娜村信筆巷66號',
                'telephone' => '049 2831471',
            ],
            204 => 
            [
                'id' => 705,
                'name' => '人倫派出所',
                'name_in_en' => 'Ren Lun Police Station',
                'zip_code' => 556,
                'address' => '南投縣信義鄉人和村民生巷9號',
                'telephone' => '049 2770310',
            ],
            205 => 
            [
                'id' => 706,
                'name' => '青雲派出所',
                'name_in_en' => 'Cing Yun Police Station',
                'zip_code' => 556,
                'address' => '南投縣信義鄉地利村開信巷14號',
                'telephone' => '049 2741142',
            ],
            206 => 
            [
                'id' => 707,
                'name' => '和社派出所',
                'name_in_en' => 'He She Police Station',
                'zip_code' => 556,
                'address' => '南投縣信義鄉同富村同和巷6號',
                'telephone' => '049 2701304',
            ],
            207 => 
            [
                'id' => 708,
                'name' => '埔里分局',
                'name_in_en' => 'Puli Police Precinct',
                'zip_code' => 545,
                'address' => '南投縣埔里鎮中山路2段235號',
                'telephone' => '049 2982429',
            ],
            208 => 
            [
                'id' => 709,
                'name' => '埔里派出所',
                'name_in_en' => 'Puli Police Station',
                'zip_code' => 545,
                'address' => '南投縣埔里鎮中山路2段235號',
                'telephone' => '049 2998439',
            ],
            209 => 
            [
                'id' => 710,
                'name' => '鯉潭派出所',
                'name_in_en' => 'Litan Police Station',
                'zip_code' => 545,
                'address' => '南投縣埔里鎮中山路1段319號',
                'telephone' => '049 2987829',
            ],
            210 => 
            [
                'id' => 711,
                'name' => '桃米派出所',
                'name_in_en' => 'Taomi Police Station',
                'zip_code' => 545,
                'address' => '南投縣埔里鎮桃米里桃米巷48號',
                'telephone' => '049 2913832',
            ],
            211 => 
            [
                'id' => 712,
                'name' => '合成派出所',
                'name_in_en' => 'Hecheng Police Station',
                'zip_code' => 545,
                'address' => '南投縣埔里鎮合成里西安路3段225號',
                'telephone' => '049 2931587',
            ],
            212 => 
            [
                'id' => 713,
                'name' => '梅林派出所',
                'name_in_en' => 'Meilin Police Station',
                'zip_code' => 544,
                'address' => '南投縣國姓鄉北港村國姓路48號',
                'telephone' => '049 2461041',
            ],
            213 => 
            [
                'id' => 714,
                'name' => '長流派出所',
                'name_in_en' => 'Changliu Police Station',
                'zip_code' => 544,
                'address' => '南投縣國姓鄉長流村大長路351號',
                'telephone' => '049 2431040',
            ],
            214 => 
            [
                'id' => 715,
                'name' => '長壽派出所',
                'name_in_en' => 'Changshou Police Station',
                'zip_code' => 544,
                'address' => '南投縣國姓鄉福龜村中正路1段157號',
                'telephone' => '049 2721130',
            ],
            215 => 
            [
                'id' => 716,
                'name' => '北山派出所',
                'name_in_en' => 'Beishan Police Station',
                'zip_code' => 544,
                'address' => '南投縣國姓鄉中正路4段153-1號',
                'telephone' => '049 2451181',
            ],
            216 => 
            [
                'id' => 717,
                'name' => '國姓分駐所',
                'name_in_en' => 'Kaoxin Police Station',
                'zip_code' => 544,
                'address' => '南投縣國姓鄉石門里國姓路265號',
                'telephone' => '049 2721232',
            ],
            217 => 
            [
                'id' => 718,
                'name' => '史港派出所',
                'name_in_en' => 'shigang Police Station',
                'zip_code' => 545,
                'address' => '南投縣埔里鎮史港里西安路2段355號',
                'telephone' => '049 2931692',
            ],
            218 => 
            [
                'id' => 719,
                'name' => '愛蘭派出所',
                'name_in_en' => 'Ailan Police Station',
                'zip_code' => 545,
                'address' => '南投縣埔里鎮鐵山路118號',
                'telephone' => '049 2912334',
            ],
            219 => 
            [
                'id' => 720,
                'name' => '隆生派出所',
                'name_in_en' => 'Longsheng Police Station',
                'zip_code' => 545,
                'address' => '南投縣埔里鎮南環路400號',
                'telephone' => '049 2904298',
            ],
            220 => 
            [
                'id' => 721,
                'name' => '草屯分局',
                'name_in_en' => 'Caotun Branch',
                'zip_code' => 542,
                'address' => '南投縣草屯鎮中正路571號',
                'telephone' => '049 2362002',
            ],
            221 => 
            [
                'id' => 722,
                'name' => '上林派出所',
                'name_in_en' => 'Serenade police station',
                'zip_code' => 542,
                'address' => '南投縣草屯鎮草溪路136之2號',
                'telephone' => '049 2329309',
            ],
            222 => 
            [
                'id' => 723,
                'name' => '雙冬派出所',
                'name_in_en' => 'Dual winter police station',
                'zip_code' => 542,
                'address' => '南投縣草屯鎮中正路46號',
                'telephone' => '049 2571222',
            ],
            223 => 
            [
                'id' => 724,
                'name' => '復興派出所',
                'name_in_en' => 'Revival police station',
                'zip_code' => 542,
                'address' => '南投縣草屯鎮碧山路755號',
                'telephone' => '049 2334783',
            ],
            224 => 
            [
                'id' => 725,
                'name' => '爽文派出所',
                'name_in_en' => 'Shuang Wen police station',
                'zip_code' => 541,
                'address' => '南投縣中寮鄉爽文村龍南路189號',
                'telephone' => '049 2601049',
            ],
            225 => 
            [
                'id' => 726,
                'name' => '中寮分駐所',
                'name_in_en' => 'Zhongliao Police Station',
                'zip_code' => 541,
                'address' => '南投縣中寮鄉永平村永平路278號',
                'telephone' => '049 2691330',
            ],
            226 => 
            [
                'id' => 727,
                'name' => '豐城派出所',
                'name_in_en' => 'Fengcheng police station',
                'zip_code' => 542,
                'address' => '南投縣草屯鎮中正路216號',
                'telephone' => '049 2552223',
            ],
            227 => 
            [
                'id' => 728,
                'name' => '新光派出所',
                'name_in_en' => 'Sunbeam police station',
                'zip_code' => 542,
                'address' => '南投縣草屯鎮芬草路2段412號',
                'telephone' => '049 2321224',
            ],
            228 => 
            [
                'id' => 729,
                'name' => '草屯派出所',
                'name_in_en' => 'Caotun police station',
                'zip_code' => 542,
                'address' => '南投縣草屯鎮中山里草鞋墩一街10號',
                'telephone' => '049 2362066',
            ],
            229 => 
            [
                'id' => 730,
                'name' => '中正派出所',
                'name_in_en' => 'Chiang police station',
                'zip_code' => 542,
                'address' => '南投縣草屯鎮中正路571號',
                'telephone' => '049 2306200',
            ],
            230 => 
            [
                'id' => 731,
                'name' => '竹山分局',
                'name_in_en' => 'Jhushan Police Station',
                'zip_code' => 557,
                'address' => '南投縣竹山鎮集山路3段968號',
                'telephone' => '049 2642040',
            ],
            231 => 
            [
                'id' => 732,
                'name' => '竹山派出所',
                'name_in_en' => 'Jhushan Police Station',
                'zip_code' => 557,
                'address' => '南投縣竹山鎮集山路3段968號',
                'telephone' => '049 2642012',
            ],
            232 => 
            [
                'id' => 733,
                'name' => '頂林派出所',
                'name_in_en' => 'Dinglin  Police Station',
                'zip_code' => 557,
                'address' => '南投縣竹山鎮鯉南路172號',
                'telephone' => '049 2648927',
            ],
            233 => 
            [
                'id' => 734,
                'name' => '溪頭派出所',
                'name_in_en' => 'Xitou Police Station',
                'zip_code' => 558,
                'address' => '南投縣鹿谷鄉內湖村與產路1之20號',
                'telephone' => '049 2612173',
            ],
            234 => 
            [
                'id' => 735,
                'name' => '瑞竹派出所',
                'name_in_en' => 'Ruizhu Police Station',
                'zip_code' => 557,
                'address' => '南投縣竹山鎮鯉南路293號',
                'telephone' => '049 2711710',
            ],
            235 => 
            [
                'id' => 736,
                'name' => '中和派出所',
                'name_in_en' => 'Zhonghe Police Station',
                'zip_code' => 557,
                'address' => '南投縣竹山鎮前山路2段119號',
                'telephone' => '049 2648620',
            ],
            236 => 
            [
                'id' => 737,
                'name' => '過溪派出所',
                'name_in_en' => 'Guoxi Police Station',
                'zip_code' => 557,
                'address' => '南投縣竹山鎮鯉南路172號',
                'telephone' => '049 2648927',
            ],
            237 => 
            [
                'id' => 738,
                'name' => '桶頭派出所',
                'name_in_en' => 'Tongtou Police Station',
                'zip_code' => 557,
                'address' => '南投縣竹山鎮鯉南路319號',
                'telephone' => '049 2711044',
            ],
            238 => 
            [
                'id' => 739,
                'name' => '秀峰派出所',
                'name_in_en' => 'Xiufeng Police Station',
                'zip_code' => 558,
                'address' => '南投縣鹿谷鄉秀峰村仁愛路174號',
                'telephone' => '049 2671930',
            ],
            239 => 
            [
                'id' => 740,
                'name' => '竹林派出所',
                'name_in_en' => 'Zhulin police station',
                'zip_code' => 558,
                'address' => '南投縣鹿谷鄉光復路106號',
                'telephone' => '049 2676142',
            ],
            240 => 
            [
                'id' => 741,
                'name' => '鳳凰派出所',
                'name_in_en' => 'Fenghuang Police Station',
                'zip_code' => 558,
                'address' => '南投縣鹿谷鄉鳳凰村新進巷1號',
                'telephone' => '049 2751102',
            ],
            241 => 
            [
                'id' => 742,
                'name' => '鹿谷分駐所',
                'name_in_en' => 'Lugu Garrison Station',
                'zip_code' => 558,
                'address' => '南投縣鹿谷鎮鹿谷村中正路2段76號',
                'telephone' => '049 2752040',
            ],
            242 => 
            [
                'id' => 743,
                'name' => '社寮派出所',
                'name_in_en' => 'Shcliau Police Station',
                'zip_code' => 557,
                'address' => '南投縣竹山鎮社寮里集山路1段1694號',
                'telephone' => '049 2622002',
            ],
            243 => 
            [
                'id' => 744,
                'name' => '延平派出所',
                'name_in_en' => 'Yanping Police Station',
                'zip_code' => 557,
                'address' => '南投縣竹山鎮延和里集山路3段22號',
                'telephone' => '049 2644365',
            ],
            244 => 
            [
                'id' => 745,
                'name' => '杉林派出所',
                'name_in_en' => 'Shanlin Police Station',
                'zip_code' => 557,
                'address' => '南投縣竹山鎮大鞍里溪山路5號',
                'telephone' => '049 2611307',
            ],
            245 => 
            [
                'id' => 746,
                'name' => '集集分局',
                'name_in_en' => 'Jiji Police Precinct',
                'zip_code' => 552,
                'address' => '南投縣集集鎮民生路63號',
                'telephone' => '049 2762702',
            ],
            246 => 
            [
                'id' => 747,
                'name' => '集集派出所',
                'name_in_en' => 'JiJi Police Station',
                'zip_code' => 552,
                'address' => '南投縣集集鎮民生路63號',
                'telephone' => '049 2760828',
            ],
            247 => 
            [
                'id' => 748,
                'name' => '郡坑分駐所',
                'name_in_en' => 'Junkeng Police Station',
                'zip_code' => 553,
                'address' => '南投縣水里鄉郡坑村1鄰水信路二段80號',
                'telephone' => '049 2821481',
            ],
            248 => 
            [
                'id' => 749,
                'name' => '東光派出所',
                'name_in_en' => 'Dongguang Police Station',
                'zip_code' => 555,
                'address' => '南投縣魚池鄉東光村慶隆巷32號',
                'telephone' => '049 2880126',
            ],
            249 => 
            [
                'id' => 750,
                'name' => '五城派出所',
                'name_in_en' => 'Wucheng Police Station',
                'zip_code' => 555,
                'address' => '南投縣魚池鄉五城村五城巷24號',
                'telephone' => '049 2895114',
            ],
            250 => 
            [
                'id' => 751,
                'name' => '車埕派出所',
                'name_in_en' => 'Checheng Police Station',
                'zip_code' => 553,
                'address' => '南投縣水里鄉車埕村民權巷108號',
                'telephone' => '049 2771154',
            ],
            251 => 
            [
                'id' => 752,
                'name' => '頭社派出所',
                'name_in_en' => 'Toushe Police Station',
                'zip_code' => 555,
                'address' => '南投縣魚池鄉頭社村平和巷145號',
                'telephone' => '049 2861013',
            ],
            252 => 
            [
                'id' => 753,
                'name' => '伊達邵派出所',
                'name_in_en' => 'Ita Thao Police Station',
                'zip_code' => 555,
                'address' => '南投縣魚池鄉日月村中正路288號',
                'telephone' => '049 2850119',
            ],
            253 => 
            [
                'id' => 754,
                'name' => '日月潭派出所',
                'name_in_en' => 'Riyueten Police Station',
                'zip_code' => 555,
                'address' => '南投縣魚池鄉水社村中山路144號',
                'telephone' => '049 2855121',
            ],
            254 => 
            [
                'id' => 755,
                'name' => '魚池分駐所',
                'name_in_en' => 'Yuchi Police Station',
                'zip_code' => 555,
                'address' => '南投縣魚池鄉魚池村魚池街358號',
                'telephone' => '049 2895501',
            ],
            255 => 
            [
                'id' => 756,
                'name' => '水里分駐所',
                'name_in_en' => 'Shuili  Police Station',
                'zip_code' => 553,
                'address' => '南投縣水里鄉北埔村博愛街260號',
                'telephone' => '049 2770117',
            ],
            256 => 
            [
                'id' => 757,
                'name' => '隘寮派出所',
                'name_in_en' => 'Ailiao Police Station',
                'zip_code' => 552,
                'address' => '南投縣集集鎮田寮里龍泉巷25號',
                'telephone' => '049 781064',
            ],
            257 => 
            [
                'id' => 758,
                'name' => '彰化縣警察局',
                'name_in_en' => 'Changhua County Police Department',
                'zip_code' => 500,
                'address' => '彰化縣彰化市中正路2段778號',
                'telephone' => '04 7619881',
            ],
            258 => 
            [
                'id' => 759,
                'name' => '彰化分局',
                'name_in_en' => 'Changhua Precinct',
                'zip_code' => 500,
                'address' => '彰化縣彰化市民生路234號',
                'telephone' => '04 7222439',
            ],
            259 => 
            [
                'id' => 760,
                'name' => '縣庄派出所',
                'name_in_en' => 'Sianjhuang Police Station',
                'zip_code' => 502,
                'address' => '彰化縣芬園鄉圳墘村彰南路2段131號',
                'telephone' => '049 2525151',
            ],
            260 => 
            [
                'id' => 761,
                'name' => '安山派出所',
                'name_in_en' => 'Anshan Police Station',
                'zip_code' => 502,
                'address' => '彰化縣芬園鄉大彰路3段194號',
                'telephone' => '04 8590056',
            ],
            261 => 
            [
                'id' => 762,
                'name' => '中正派出所',
                'name_in_en' => 'Jhongjheng Police Station',
                'zip_code' => 500,
                'address' => '彰化縣彰化市西勢街150號',
                'telephone' => '04 7636696',
            ],
            262 => 
            [
                'id' => 763,
                'name' => '大埔派出所',
                'name_in_en' => 'Dapu Police Station',
                'zip_code' => 500,
                'address' => '彰化縣彰化市仁愛東街51號',
                'telephone' => '04 7113043',
            ],
            263 => 
            [
                'id' => 764,
                'name' => '民生路派出所',
                'name_in_en' => 'Minsheng Rd. Police Station',
                'zip_code' => 500,
                'address' => '彰化縣彰化市民生路322號',
                'telephone' => '04 7228644',
            ],
            264 => 
            [
                'id' => 765,
                'name' => '民族路派出所',
                'name_in_en' => 'Minzu Rd. Police Station',
                'zip_code' => 500,
                'address' => '彰化縣彰化市西安里民族路326號',
                'telephone' => '04 7228433',
            ],
            265 => 
            [
                'id' => 766,
                'name' => '莿桐派出所',
                'name_in_en' => 'Cihtong Police Station',
                'zip_code' => 500,
                'address' => '彰化縣彰化市平和里平順街1號',
                'telephone' => '04 7523151',
            ],
            266 => 
            [
                'id' => 767,
                'name' => '泰和派出所',
                'name_in_en' => 'Taihe Police Station',
                'zip_code' => 500,
                'address' => '彰化縣彰化市泰和路2段399號',
                'telephone' => '04 7237560',
            ],
            267 => 
            [
                'id' => 768,
                'name' => '大竹派出所',
                'name_in_en' => 'Dajhu Police Station',
                'zip_code' => 500,
                'address' => '彰化縣彰化市彰南路2段160號',
                'telephone' => '04 7381107',
            ],
            268 => 
            [
                'id' => 769,
                'name' => '快官派出所',
                'name_in_en' => 'Kuaiguan Police Station',
                'zip_code' => 500,
                'address' => '彰化縣彰化市彰南路5段26號',
                'telephone' => '04 7381006',
            ],
            269 => 
            [
                'id' => 770,
                'name' => '三家派出所',
                'name_in_en' => 'Sanjia Police Station',
                'zip_code' => 503,
                'address' => '彰化縣花壇鄉三春村彰員路1段565號',
                'telephone' => '04 7862454',
            ],
            270 => 
            [
                'id' => 771,
                'name' => '花壇分駐所',
                'name_in_en' => 'Huatan Police Station',
                'zip_code' => 503,
                'address' => '彰化縣花壇鄉長沙村中正路1號',
                'telephone' => '04 7862014',
            ],
            271 => 
            [
                'id' => 772,
                'name' => '芬園分駐所',
                'name_in_en' => 'Fenyuan Police Station',
                'zip_code' => 502,
                'address' => '彰化縣芬園鄉社口村彰南路4段175號',
                'telephone' => '049 2522419',
            ],
            272 => 
            [
                'id' => 773,
                'name' => '八卦山派出所',
                'name_in_en' => 'Baguashan Police Station',
                'zip_code' => 500,
                'address' => '彰化縣彰化市中山路2段456號',
                'telephone' => '04 7284292',
            ],
            273 => 
            [
                'id' => 774,
                'name' => '芳苑分局',
                'name_in_en' => 'Fangyuan Precinct',
                'zip_code' => 526,
                'address' => '彰化縣芳苑鄉三合村斗苑路三合段522號',
                'telephone' => '04 8960013',
            ],
            274 => 
            [
                'id' => 775,
                'name' => '漢寶派出所',
                'name_in_en' => 'Hanbao Police Station',
                'zip_code' => 528,
                'address' => '彰化縣芳苑鄉漢寶村草漢路漢寶段495號',
                'telephone' => '04 8991219',
            ],
            275 => 
            [
                'id' => 776,
                'name' => '二林分駐所',
                'name_in_en' => 'Erlin Poice Station',
                'zip_code' => 526,
                'address' => '彰化縣二林鎮斗苑路5段110號',
                'telephone' => '04 8961072',
            ],
            276 => 
            [
                'id' => 777,
                'name' => '萬興派出所',
                'name_in_en' => 'Wansing Police Station',
                'zip_code' => 526,
                'address' => '彰化縣二林鎮二溪路6段395號',
                'telephone' => '04 8682039',
            ],
            277 => 
            [
                'id' => 778,
                'name' => '原斗派出所',
                'name_in_en' => 'Yuandou Police Station',
                'zip_code' => 526,
                'address' => '彰化縣二林鎮斗苑路1段917號',
                'telephone' => '04 8902041',
            ],
            278 => 
            [
                'id' => 779,
                'name' => '竹塘分駐所',
                'name_in_en' => 'Jhutang Police Station',
                'zip_code' => 525,
                'address' => '彰化縣竹塘鄉竹塘村竹林路1段255號',
                'telephone' => '04 8972014',
            ],
            279 => 
            [
                'id' => 780,
                'name' => '永安派出所',
                'name_in_en' => 'Yong-an Police Station',
                'zip_code' => 525,
                'address' => '彰化縣竹塘鄉永安村東陽路2段221號',
                'telephone' => '04 8972684',
            ],
            280 => 
            [
                'id' => 781,
                'name' => '大城分駐所',
                'name_in_en' => 'Dacheng Police Station',
                'zip_code' => 527,
                'address' => '彰化縣大城鄉東城村東平路114號',
                'telephone' => '04 8941012',
            ],
            281 => 
            [
                'id' => 782,
                'name' => '西港派出所',
                'name_in_en' => 'Sigang Police Station',
                'zip_code' => 527,
                'address' => '彰化縣大城鄉東港村中央路10號',
                'telephone' => '04 8941334',
            ],
            282 => 
            [
                'id' => 783,
                'name' => '芳苑派出所',
                'name_in_en' => 'Fangyuan Police Station',
                'zip_code' => 528,
                'address' => '彰化縣芳苑鄉仁愛村芳新路20號',
                'telephone' => '04 8983432',
            ],
            283 => 
            [
                'id' => 784,
                'name' => '路上派出所',
                'name_in_en' => 'Lushang Police Station',
                'zip_code' => 528,
                'address' => '彰化縣芳苑鄉路平村上林路路上段338號',
                'telephone' => '04 8983844',
            ],
            284 => 
            [
                'id' => 785,
                'name' => '草湖派出所',
                'name_in_en' => 'Caohu Polilce Staion',
                'zip_code' => 528,
                'address' => '彰化縣芳苑鄉建平村二溪路草2段272號',
                'telephone' => '04 8862438',
            ],
            285 => 
            [
                'id' => 786,
                'name' => '王功派出所',
                'name_in_en' => 'Wanggong Police Station',
                'zip_code' => 528,
                'address' => '彰化縣芳苑鄉王功村芳漢路王功段600號',
                'telephone' => '04 8932151',
            ],
            286 => 
            [
                'id' => 787,
                'name' => '北斗分局',
                'name_in_en' => 'Beidou Precinct',
                'zip_code' => 521,
                'address' => '彰化縣北斗鎮光復路215號',
                'telephone' => '04 8882010',
            ],
            287 => 
            [
                'id' => 788,
                'name' => '北斗派出所',
                'name_in_en' => 'Beidou Police Station',
                'zip_code' => 521,
                'address' => '彰化縣北斗鎮光復路215號',
                'telephone' => '04 8882604',
            ],
            288 => 
            [
                'id' => 789,
                'name' => '田尾分駐所',
                'name_in_en' => 'Tianwei Police Station',
                'zip_code' => 522,
                'address' => '彰化縣田尾鄉光復路2段575號',
                'telephone' => '04 8832854',
            ],
            289 => 
            [
                'id' => 790,
                'name' => '海豐派出所',
                'name_in_en' => 'Haifong Police Station',
                'zip_code' => 522,
                'address' => '彰化縣田尾鄉陸豐村民生路3段280號',
                'telephone' => '04 8222160',
            ],
            290 => 
            [
                'id' => 791,
                'name' => '埤頭分駐所',
                'name_in_en' => 'Pitou Police Station',
                'zip_code' => 523,
                'address' => '彰化縣埤頭鄉合興村斗苑西路305號',
                'telephone' => '04 8922041',
            ],
            291 => 
            [
                'id' => 792,
                'name' => '中和派出所',
                'name_in_en' => 'Jhonghe Police Station',
                'zip_code' => 523,
                'address' => '彰化縣埤頭鄉中和村溪林路337號',
                'telephone' => '04 8896155',
            ],
            292 => 
            [
                'id' => 793,
                'name' => '溪州分駐所',
                'name_in_en' => 'Sijhou Police Station',
                'zip_code' => 524,
                'address' => '彰化縣溪州鄉溪州村中山路3段292號',
                'telephone' => '04 8895029',
            ],
            293 => 
            [
                'id' => 794,
                'name' => '三條派出所',
                'name_in_en' => 'Santiao Police Station',
                'zip_code' => 524,
                'address' => '彰化縣溪州鄉三條村南九甲巷5號',
                'telephone' => '04 8895432',
            ],
            294 => 
            [
                'id' => 795,
                'name' => '成功派出所',
                'name_in_en' => 'Chenggong Police Station',
                'zip_code' => 524,
                'address' => '彰化縣溪州鄉成功村庄中路20號',
                'telephone' => '04 8802163',
            ],
            295 => 
            [
                'id' => 796,
                'name' => '和美分局',
                'name_in_en' => 'Hemei Precinct',
                'zip_code' => 508,
                'address' => '彰化縣和美鎮彰美路5段328號',
                'telephone' => '04 7552031',
            ],
            296 => 
            [
                'id' => 797,
                'name' => '和美派出所',
                'name_in_en' => 'Hemei Police Station',
                'zip_code' => 508,
                'address' => '彰化縣和美鎮彰美路5段328號',
                'telephone' => '04 7554005',
            ],
            297 => 
            [
                'id' => 798,
                'name' => '大霞派出所',
                'name_in_en' => 'Dasia Police Station',
                'zip_code' => 508,
                'address' => '彰化縣和美鎮彰和路3段420號',
                'telephone' => '04 7555564',
            ],
            298 => 
            [
                'id' => 799,
                'name' => '嘉犁派出所',
                'name_in_en' => 'Jiuli Police Station',
                'zip_code' => 508,
                'address' => '彰化縣和美鎮彰美路3段418號',
                'telephone' => '04 7555574',
            ],
            299 => 
            [
                'id' => 800,
                'name' => '中寮派出所',
                'name_in_en' => 'Jhongliao Police Station',
                'zip_code' => 508,
                'address' => '彰化縣和美鎮彰新路3段10號',
                'telephone' => '04 7355184',
            ],
            300 => 
            [
                'id' => 801,
                'name' => '塗厝派出所',
                'name_in_en' => 'Tucuo Police Station',
                'zip_code' => 508,
                'address' => '彰化縣和美鎮塗厝里和厝路2段341號',
                'telephone' => '04 7555584',
            ],
            301 => 
            [
                'id' => 802,
                'name' => '伸港分駐所',
                'name_in_en' => 'Shengang Police Station',
                'zip_code' => 509,
                'address' => '彰化縣伸港鄉大同村中興路2段197號',
                'telephone' => '04 7982044',
            ],
            302 => 
            [
                'id' => 803,
                'name' => '線西分駐所',
                'name_in_en' => 'Siansi Police Station',
                'zip_code' => 507,
                'address' => '彰化縣線西鄉寓埔村中央路2段65號',
                'telephone' => '04 7582247',
            ],
            303 => 
            [
                'id' => 804,
                'name' => '鹿港分局',
                'name_in_en' => 'Lu Kang Precinct',
                'zip_code' => 505,
                'address' => '彰化縣鹿港鎮東興路300號',
                'telephone' => '04 7772001',
            ],
            304 => 
            [
                'id' => 805,
                'name' => '馬鳴派出所',
                'name_in_en' => 'Maming Police Station',
                'zip_code' => 504,
                'address' => '彰化縣秀水鄉鶴鳴村彰鹿路98號',
                'telephone' => '04 7692082',
            ],
            305 => 
            [
                'id' => 806,
                'name' => '鹿港派出所',
                'name_in_en' => 'Lukang Police Station',
                'zip_code' => 505,
                'address' => '彰化縣鹿港鎮中山路300號',
                'telephone' => '04 7772118',
            ],
            306 => 
            [
                'id' => 807,
                'name' => '和興派出所',
                'name_in_en' => 'Hesing Police Station',
                'zip_code' => 505,
                'address' => '彰化縣鹿港鎮中山路108號',
                'telephone' => '04 7772119',
            ],
            307 => 
            [
                'id' => 808,
                'name' => '海埔派出所',
                'name_in_en' => 'Haipu Police Station',
                'zip_code' => 505,
                'address' => '彰化縣鹿港鎮鹿草路2段909號',
                'telephone' => '04 7775565',
            ],
            308 => 
            [
                'id' => 809,
                'name' => '草港派出所',
                'name_in_en' => 'Caogang Police Station',
                'zip_code' => 505,
                'address' => '彰化縣鹿港鎮草中里草港巷125號',
                'telephone' => '04 7713404',
            ],
            309 => 
            [
                'id' => 810,
                'name' => '頂番派出所',
                'name_in_en' => 'Dingfan Police Station',
                'zip_code' => 505,
                'address' => '彰化縣鹿港鎮鹿和路4段25號',
                'telephone' => '04 7711934',
            ],
            310 => 
            [
                'id' => 811,
                'name' => '福興分駐所',
                'name_in_en' => 'Fusing Police Station',
                'zip_code' => 506,
                'address' => '彰化縣福興鄉橋頭村鹿路7段245號',
                'telephone' => '04 7775405',
            ],
            311 => 
            [
                'id' => 812,
                'name' => '洪堀派出所',
                'name_in_en' => 'Hongku Police Station',
                'zip_code' => 506,
                'address' => '彰化縣福興鄉秀厝村福三路3段468號',
                'telephone' => '04 7704441',
            ],
            312 => 
            [
                'id' => 813,
                'name' => '外中派出所',
                'name_in_en' => 'Waijhong  Police Station',
                'zip_code' => 506,
                'address' => '彰化縣福興鄉外中村外中街237號',
                'telephone' => '04 7792048',
            ],
            313 => 
            [
                'id' => 814,
                'name' => '秀水分駐所',
                'name_in_en' => 'Sioushuei Police Station',
                'zip_code' => 504,
                'address' => '彰化縣秀水鄉福安村復新街9號',
                'telephone' => '04 7692964',
            ],
            314 => 
            [
                'id' => 815,
                'name' => '秀安派出所',
                'name_in_en' => 'Siou-an Police Station',
                'zip_code' => 504,
                'address' => '彰化縣秀水鄉安溪村安溪街57號',
                'telephone' => '04 7692304',
            ],
            315 => 
            [
                'id' => 816,
                'name' => '溪湖分局',
                'name_in_en' => 'Sihu Police Precinct',
                'zip_code' => 514,
                'address' => '彰化縣溪湖鎮青雅路88號',
                'telephone' => '04 8852026',
            ],
            316 => 
            [
                'id' => 817,
                'name' => '溪湖派出所',
                'name_in_en' => 'Sihu Police Station',
                'zip_code' => 514,
                'address' => '彰化縣溪湖鎮員鹿路3段262號',
                'telephone' => '04 8852404',
            ],
            317 => 
            [
                'id' => 818,
                'name' => '媽厝派出所',
                'name_in_en' => 'Macuo Police Station',
                'zip_code' => 514,
                'address' => '彰化縣溪湖鎮媽厝里湳底路60號',
                'telephone' => '04 8852814',
            ],
            318 => 
            [
                'id' => 819,
                'name' => '埔心分駐所',
                'name_in_en' => 'Pusin Police Station',
                'zip_code' => 513,
                'address' => '彰化縣埔心鄉義民村員鹿路2段424號',
                'telephone' => '04 8291545',
            ],
            319 => 
            [
                'id' => 820,
                'name' => '舊館派出所',
                'name_in_en' => 'Jiouguan Police Station',
                'zip_code' => 513,
                'address' => '彰化縣埔心鄉舊館村員鹿路4段182號',
                'telephone' => '04 8292854',
            ],
            320 => 
            [
                'id' => 821,
                'name' => '埔鹽分駐所',
                'name_in_en' => 'Puyan Police Station',
                'zip_code' => 516,
                'address' => '彰化縣埔鹽鄉員鹿路二段154-1號',
                'telephone' => '04 8653553',
            ],
            321 => 
            [
                'id' => 822,
                'name' => '埔東派出所',
                'name_in_en' => 'Pudong Police Station',
                'zip_code' => 516,
                'address' => '彰化縣埔鹽鄉埔鹽村中正路48號',
                'telephone' => '04 8653784',
            ],
            322 => 
            [
                'id' => 823,
                'name' => '員林分局',
                'name_in_en' => 'Yuanlin precinct',
                'zip_code' => 510,
                'address' => '彰化縣員林市大同路1段319號',
                'telephone' => '04 8320114',
            ],
            323 => 
            [
                'id' => 824,
                'name' => '員林派出所',
                'name_in_en' => 'Yuanlin police station',
                'zip_code' => 510,
                'address' => '彰化縣員林市大同路1段319號',
                'telephone' => '04 8320767',
            ],
            324 => 
            [
                'id' => 825,
                'name' => '莒光派出所',
                'name_in_en' => 'Juguang police station',
                'zip_code' => 510,
                'address' => '彰化縣員林市員大路一段17號',
                'telephone' => '04 8357857',
            ],
            325 => 
            [
                'id' => 826,
                'name' => '永靖分駐所',
                'name_in_en' => 'Yonging police station',
                'zip_code' => 512,
                'address' => '彰化縣永靖鄉永東村中山路2段17號',
                'telephone' => '04 8221813',
            ],
            326 => 
            [
                'id' => 827,
                'name' => '大村分駐所',
                'name_in_en' => 'Dacun police station',
                'zip_code' => 515,
                'address' => '彰化縣大村鄉大村村茄苳路1段50號',
                'telephone' => '04 8522014',
            ],
            327 => 
            [
                'id' => 828,
                'name' => '林厝派出所',
                'name_in_en' => 'Lincuo police station',
                'zip_code' => 510,
                'address' => '彰化縣員林市山腳路1段462號',
                'telephone' => '04 8313012',
            ],
            328 => 
            [
                'id' => 829,
                'name' => '東山派出所',
                'name_in_en' => 'Dongshan police station',
                'zip_code' => 510,
                'address' => '彰化縣員林市山腳路4段2號',
                'telephone' => '04 8313374',
            ],
            329 => 
            [
                'id' => 830,
                'name' => '村上派出所',
                'name_in_en' => 'Cunshang police station',
                'zip_code' => 515,
                'address' => '彰化縣大村鄉村上村中山路2段246號',
                'telephone' => '04 8525474',
            ],
            330 => 
            [
                'id' => 831,
                'name' => '同安派出所',
                'name_in_en' => 'Tong-an police station',
                'zip_code' => 512,
                'address' => '彰化縣永靖鄉同安村永福路1段692號',
                'telephone' => '04 8222159',
            ],
            331 => 
            [
                'id' => 832,
                'name' => '田中分局',
                'name_in_en' => 'Tianjhong Precinct',
                'zip_code' => 520,
                'address' => '彰化縣田中鎮興酪路1段299號',
                'telephone' => '04 8756910',
            ],
            332 => 
            [
                'id' => 833,
                'name' => '田中派出所',
                'name_in_en' => 'Tianjhong Police Station',
                'zip_code' => 520,
                'address' => '彰化縣田中鎮斗中路1段6號',
                'telephone' => '04 8742051',
            ],
            333 => 
            [
                'id' => 834,
                'name' => '二水分駐所',
                'name_in_en' => 'Ershuei Police Station',
                'zip_code' => 530,
                'address' => '彰化縣二水鄉惠民路221號',
                'telephone' => '04 8790015',
            ],
            334 => 
            [
                'id' => 835,
                'name' => '社頭分駐所',
                'name_in_en' => 'Shetou Police Station',
                'zip_code' => 511,
                'address' => '彰化縣社頭鄉社頭村員集路2段210號',
                'telephone' => '04 8732036',
            ],
            335 => 
            [
                'id' => 836,
                'name' => '朝興派出所',
                'name_in_en' => 'Chaosing Police Station',
                'zip_code' => 511,
                'address' => '彰化縣社頭鄉朝興村水源路12號',
                'telephone' => '04 8732174',
            ],
            336 => 
            [
                'id' => 837,
                'name' => '內安派出所',
                'name_in_en' => 'Nei-an Police Station',
                'zip_code' => 520,
                'address' => '彰化縣田中鎮中南路2段601號',
                'telephone' => '04 8742008',
            ],
            337 => 
            [
                'id' => 838,
                'name' => '源泉派出所',
                'name_in_en' => 'Yuancyuan Police Station',
                'zip_code' => 530,
                'address' => '彰化縣二水鄉倡和村員集路1段410之1號',
                'telephone' => '04 8792374',
            ],
            338 => 
            [
                'id' => 839,
                'name' => '雲林縣警察局',
                'name_in_en' => 'Yunlin County Police Bureau',
                'zip_code' => 640,
                'address' => '雲林縣斗六市大學路3段100號',
                'telephone' => '05 5338502',
            ],
            339 => 
            [
                'id' => 840,
                'name' => '北港分局',
                'name_in_en' => 'Beigang Precinct',
                'zip_code' => 651,
                'address' => '雲林縣北港鎮文仁路12號',
                'telephone' => '05 7832015',
            ],
            340 => 
            [
                'id' => 841,
                'name' => '金湖派出所',
                'name_in_en' => 'Jinhu Police Station',
                'zip_code' => 653,
                'address' => '雲林縣口湖鄉三民路1號',
                'telephone' => '05 7971081',
            ],
            341 => 
            [
                'id' => 842,
                'name' => '宏仁派出所',
                'name_in_en' => 'Hongren Police Station',
                'zip_code' => 652,
                'address' => '雲林縣水林鄉宏仁路77號',
                'telephone' => '05 7851885',
            ],
            342 => 
            [
                'id' => 843,
                'name' => '蔦松派出所',
                'name_in_en' => 'Niaosong Police Station',
                'zip_code' => 652,
                'address' => '雲林縣水林鄉蔦松路200-1號',
                'telephone' => '05 7841891',
            ],
            343 => 
            [
                'id' => 844,
                'name' => '土厝派出所',
                'name_in_en' => 'Tucuo Police Station',
                'zip_code' => 652,
                'address' => '雲林縣水林鄉土厝村17鄰大庄46號',
                'telephone' => '05 7852884',
            ],
            344 => 
            [
                'id' => 845,
                'name' => '下崙派出所',
                'name_in_en' => 'Sialun Police Station',
                'zip_code' => 653,
                'address' => '雲林縣口湖鄉中山路59號',
                'telephone' => '05 7991084',
            ],
            345 => 
            [
                'id' => 846,
                'name' => '椬梧派出所',
                'name_in_en' => 'Yiwu Police Station',
                'zip_code' => 653,
                'address' => '雲林縣口湖鄉光明路124號',
                'telephone' => '05 7907180',
            ],
            346 => 
            [
                'id' => 847,
                'name' => '水林分駐所',
                'name_in_en' => 'Shueilin Police Station',
                'zip_code' => 652,
                'address' => '雲林縣水林鄉水林路60號',
                'telephone' => '05 7853541',
            ],
            347 => 
            [
                'id' => 848,
                'name' => '口湖分駐所',
                'name_in_en' => 'Kouhu Police Station',
                'zip_code' => 653,
                'address' => '雲林縣口湖鄉中正路1段280號',
                'telephone' => '05 7892014',
            ],
            348 => 
            [
                'id' => 849,
                'name' => '好收派出所',
                'name_in_en' => 'Haoshou Police Station',
                'zip_code' => 651,
                'address' => '雲林縣北港鎮好收路23號',
                'telephone' => '05 7922194',
            ],
            349 => 
            [
                'id' => 850,
                'name' => '北辰派出所',
                'name_in_en' => 'Beichen Police Station',
                'zip_code' => 651,
                'address' => '雲林縣北港鎮華勝路399號',
                'telephone' => '05 7834082',
            ],
            350 => 
            [
                'id' => 851,
                'name' => '北港派出所',
                'name_in_en' => 'Beigang Police Station',
                'zip_code' => 651,
                'address' => '雲林縣北港鎮義民路49號',
                'telephone' => '05 7832064',
            ],
            351 => 
            [
                'id' => 852,
                'name' => '臺西分局',
                'name_in_en' => 'Taisi Precinct',
                'zip_code' => 636,
                'address' => '雲林縣台西鄉中山路108號',
                'telephone' => '05 6982041',
            ],
            352 => 
            [
                'id' => 853,
                'name' => '臺西派出所',
                'name_in_en' => 'Taisi Police Station',
                'zip_code' => 636,
                'address' => '雲林縣台西鄉中山路108號',
                'telephone' => '05 6982244',
            ],
            353 => 
            [
                'id' => 854,
                'name' => '崙豐派出所',
                'name_in_en' => 'Lunfeng Police Station',
                'zip_code' => 636,
                'address' => '雲林縣台西鄉崙豐路194號',
                'telephone' => '05 6901560',
            ],
            354 => 
            [
                'id' => 855,
                'name' => '安南派出所',
                'name_in_en' => 'Annan  Police Station',
                'zip_code' => 635,
                'address' => '雲林縣東勢鄉安南路106號',
                'telephone' => '05 6991514',
            ],
            355 => 
            [
                'id' => 856,
                'name' => '飛沙派出所',
                'name_in_en' => 'Feisha Police Station',
                'zip_code' => 653,
                'address' => '雲林縣四湖鄉內湖村11鄰頂桂山110號',
                'telephone' => '05 7723235',
            ],
            356 => 
            [
                'id' => 857,
                'name' => '林厝派出所',
                'name_in_en' => 'Lincuo Police Station',
                'zip_code' => 653,
                'address' => '雲林縣四湖鄉中華路25號',
                'telephone' => '05 7721265',
            ],
            357 => 
            [
                'id' => 858,
                'name' => '三崙派出所',
                'name_in_en' => 'Sanlun Police Station',
                'zip_code' => 653,
                'address' => '雲林縣四湖鄉中山路54號',
                'telephone' => '05 7721270',
            ],
            358 => 
            [
                'id' => 859,
                'name' => '東勢分駐所',
                'name_in_en' => 'Dongshih Police Station',
                'zip_code' => 635,
                'address' => '雲林縣東勢鄉東勢東路83號',
                'telephone' => '05 6991032',
            ],
            359 => 
            [
                'id' => 860,
                'name' => '麥寮分駐所',
                'name_in_en' => 'Mailiao Police Station',
                'zip_code' => 638,
                'address' => '雲林縣麥寮鄉中山路208號',
                'telephone' => '05 6932030',
            ],
            360 => 
            [
                'id' => 861,
                'name' => '四湖分駐所',
                'name_in_en' => 'Sihhu Police Station',
                'zip_code' => 654,
                'address' => '雲林縣四湖鄉中山西路205號',
                'telephone' => '05 7872031',
            ],
            361 => 
            [
                'id' => 862,
                'name' => '橋頭派出所',
                'name_in_en' => 'Ciaotou Police Station',
                'zip_code' => 638,
                'address' => '雲林縣麥寮鄉仁德路234號',
                'telephone' => '05 6911007',
            ],
            362 => 
            [
                'id' => 863,
                'name' => '斗南分局',
                'name_in_en' => 'Dounan Precinct',
                'zip_code' => 630,
                'address' => '雲林縣斗南鎮文昌路500號',
                'telephone' => '05 5972005',
            ],
            363 => 
            [
                'id' => 864,
                'name' => '四維派出所',
                'name_in_en' => 'Sihwei police Station',
                'zip_code' => 630,
                'address' => '雲林縣斗南鎮中和路77號',
                'telephone' => '05 5973554',
            ],
            364 => 
            [
                'id' => 865,
                'name' => '新崙派出所',
                'name_in_en' => 'Sinlun police Station',
                'zip_code' => 630,
                'address' => '雲林縣斗南鎮埤麻里6鄰新厝67號',
                'telephone' => '05 5973524',
            ],
            365 => 
            [
                'id' => 866,
                'name' => '東和派出所',
                'name_in_en' => 'Donghe Police Station',
                'zip_code' => 646,
                'address' => '雲林縣古坑鄉文化路137號',
                'telephone' => '05 5260642',
            ],
            366 => 
            [
                'id' => 867,
                'name' => '華山派出所',
                'name_in_en' => 'Huashan Police Station',
                'zip_code' => 646,
                'address' => '雲林縣古坑鄉華山路50號',
                'telephone' => '05 5901317',
            ],
            367 => 
            [
                'id' => 868,
                'name' => '樟湖派出所',
                'name_in_en' => 'Jhanghu Police Station',
                'zip_code' => 646,
                'address' => '雲林縣古坑鄉樟湖村2鄰樟湖14號',
                'telephone' => '05 5811151',
            ],
            368 => 
            [
                'id' => 869,
                'name' => '怡美派出所',
                'name_in_en' => 'Yimei Police Station',
                'zip_code' => 631,
                'address' => '雲林縣大埤鄉怡美路56號',
                'telephone' => '05 5912060',
            ],
            369 => 
            [
                'id' => 870,
                'name' => '建國派出所',
                'name_in_en' => 'Jingguo Police Station',
                'zip_code' => 630,
                'address' => '雲林縣斗南鎮阿丹里6鄰阿丹1號',
                'telephone' => '05 5973724',
            ],
            370 => 
            [
                'id' => 871,
                'name' => '新光派出所',
                'name_in_en' => 'Singuang Police Station',
                'zip_code' => 630,
                'address' => '雲林縣斗南鎮延平路1段222號',
                'telephone' => '05 5972540',
            ],
            371 => 
            [
                'id' => 872,
                'name' => '草嶺派出所',
                'name_in_en' => 'Caoling Police Station',
                'zip_code' => 646,
                'address' => '雲林縣古坑鄉草嶺村7鄰草嶺38號',
                'telephone' => '05 5831009',
            ],
            372 => 
            [
                'id' => 873,
                'name' => '永光派出所',
                'name_in_en' => 'Yongguang Police Station',
                'zip_code' => 646,
                'address' => '雲林縣古坑鄉光昌路58號',
                'telephone' => '05 5821354',
            ],
            373 => 
            [
                'id' => 874,
                'name' => '大埤分駐所',
                'name_in_en' => 'Dapi Police Station',
                'zip_code' => 631,
                'address' => '雲林縣大埤鄉中山路102號',
                'telephone' => '05 5912040',
            ],
            374 => 
            [
                'id' => 875,
                'name' => '古坑分駐所',
                'name_in_en' => 'Gukeng Police Station',
                'zip_code' => 646,
                'address' => '雲林縣古坑鄉中山路393之1號',
                'telephone' => '05 5821324',
            ],
            375 => 
            [
                'id' => 876,
                'name' => '斗南派出所',
                'name_in_en' => 'Dounan Police Station',
                'zip_code' => 630,
                'address' => '雲林縣斗南鎮文昌路500號',
                'telephone' => '05 5972047',
            ],
            376 => 
            [
                'id' => 877,
                'name' => '斗六分局',
                'name_in_en' => 'Douliou Precinct',
                'zip_code' => 640,
                'address' => '雲林縣斗六市中山路88號',
                'telephone' => '05 5322598',
            ],
            377 => 
            [
                'id' => 878,
                'name' => '溝埧派出所',
                'name_in_en' => 'Gouba Police Station',
                'zip_code' => 640,
                'address' => '雲林縣斗六市仁義路89之16號',
                'telephone' => '05 5220334',
            ],
            378 => 
            [
                'id' => 879,
                'name' => '梅林派出所',
                'name_in_en' => 'Meilim Police Station',
                'zip_code' => 640,
                'address' => '雲林縣斗六市梅林路392號',
                'telephone' => '05 5572493',
            ],
            379 => 
            [
                'id' => 880,
                'name' => '長安派出所',
                'name_in_en' => 'Changan Police Station',
                'zip_code' => 640,
                'address' => '雲林縣斗六市長安西路2號',
                'telephone' => '05 5517650',
            ],
            380 => 
            [
                'id' => 881,
                'name' => '饒平派出所',
                'name_in_en' => 'Raoping Police Station',
                'zip_code' => 647,
                'address' => '雲林縣莿桐鄉饒平路179號',
                'telephone' => '05 5842034',
            ],
            381 => 
            [
                'id' => 882,
                'name' => '重興派出所',
                'name_in_en' => 'Chongsing Police Station',
                'zip_code' => 643,
                'address' => '雲林縣林內鄉重興村16鄰重興70號',
                'telephone' => '05 5892514',
            ],
            382 => 
            [
                'id' => 883,
                'name' => '長平派出所',
                'name_in_en' => 'Changping Police Station',
                'zip_code' => 640,
                'address' => '雲林縣斗六市長平路17號',
                'telephone' => '05 5327649',
            ],
            383 => 
            [
                'id' => 884,
                'name' => '莿桐分駐所',
                'name_in_en' => 'Cihtong Police Station',
                'zip_code' => 647,
                'address' => '雲林縣莿桐鄉中山路170號',
                'telephone' => '05 5842025',
            ],
            384 => 
            [
                'id' => 885,
                'name' => '林內分駐所',
                'name_in_en' => 'Linnei Police Station',
                'zip_code' => 643,
                'address' => '雲林縣林內鄉中山路1號',
                'telephone' => '05 5892404',
            ],
            385 => 
            [
                'id' => 886,
                'name' => '榴中派出所',
                'name_in_en' => 'Lioujhong Police Station',
                'zip_code' => 640,
                'address' => '雲林縣斗六市石榴路81號',
                'telephone' => '05 5573651',
            ],
            386 => 
            [
                'id' => 887,
                'name' => '公正派出所',
                'name_in_en' => 'Gongjheng Police Station',
                'zip_code' => 640,
                'address' => '雲林縣斗六市大學路1段637號',
                'telephone' => '05 5323180',
            ],
            387 => 
            [
                'id' => 888,
                'name' => '斗六派出所',
                'name_in_en' => 'Douliou Police Station',
                'zip_code' => 640,
                'address' => '雲林縣斗六市忠孝里文化號36號',
                'telephone' => '05 5322130',
            ],
            388 => 
            [
                'id' => 889,
                'name' => '西螺分局',
                'name_in_en' => 'Siluo Precinct',
                'zip_code' => 648,
                'address' => '雲林縣西螺鎮公正路213號',
                'telephone' => '05 5862301',
            ],
            389 => 
            [
                'id' => 890,
                'name' => '和心派出所',
                'name_in_en' => 'Hesin Police Station',
                'zip_code' => 648,
                'address' => '雲林縣西螺鎮埔心路146號',
                'telephone' => '05 5862544',
            ],
            390 => 
            [
                'id' => 891,
                'name' => '吳厝派出所',
                'name_in_en' => 'Wutso Police Station',
                'zip_code' => 648,
                'address' => '雲林縣西螺鎮吳厝里3鄰吳庴51號',
                'telephone' => '05 5862484',
            ],
            391 => 
            [
                'id' => 892,
                'name' => '永定派出所',
                'name_in_en' => 'Yongding Police Station',
                'zip_code' => 649,
                'address' => '雲林縣二崙鄉永定路372號',
                'telephone' => '05 5982604',
            ],
            392 => 
            [
                'id' => 893,
                'name' => '豐榮派出所',
                'name_in_en' => 'Fongrong Police Station',
                'zip_code' => 637,
                'address' => '雲林縣崙背鄉豐榮村1鄰豐榮2號',
                'telephone' => '05 6552159',
            ],
            393 => 
            [
                'id' => 894,
                'name' => '埤源派出所',
                'name_in_en' => 'Beiyuan Police Station',
                'zip_code' => 648,
                'address' => '雲林縣西螺鎮埤頭里10鄰埤頭75號',
                'telephone' => '05 5862384',
            ],
            394 => 
            [
                'id' => 895,
                'name' => '崙背分駐所',
                'name_in_en' => 'Lunbei Police Station',
                'zip_code' => 637,
                'address' => '雲林縣崙背鄉民權路114號',
                'telephone' => '05 6962016',
            ],
            395 => 
            [
                'id' => 896,
                'name' => '二崙分駐所',
                'name_in_en' => 'Erlun Police Station',
                'zip_code' => 649,
                'address' => '雲林縣二崙鄉中興路3號',
                'telephone' => '05 5982595',
            ],
            396 => 
            [
                'id' => 897,
                'name' => '油車派出所',
                'name_in_en' => 'Youche Police Station',
                'zip_code' => 649,
                'address' => '雲林縣二崙鄉文化路8號',
                'telephone' => '05 5982334',
            ],
            397 => 
            [
                'id' => 898,
                'name' => '西螺派出所',
                'name_in_en' => 'Siluo Police Station',
                'zip_code' => 648,
                'address' => '雲林縣西螺鎮公正路213號',
                'telephone' => '05 5862014',
            ],
            398 => 
            [
                'id' => 899,
                'name' => '虎尾分局',
                'name_in_en' => 'Huwei Precinct',
                'zip_code' => 632,
                'address' => '雲林縣虎尾鎮光復路151號',
                'telephone' => '05 6331771',
            ],
            399 => 
            [
                'id' => 900,
                'name' => '惠來派出所',
                'name_in_en' => 'Hueilai Police Station',
                'zip_code' => 632,
                'address' => '雲林縣虎尾鎮惠來路100號',
                'telephone' => '05 6222065',
            ],
            400 => 
            [
                'id' => 901,
                'name' => '埒內派出所',
                'name_in_en' => 'Lenei Police Station',
                'zip_code' => 632,
                'address' => '雲林縣虎尾鎮埒內里5鄰埒內45號',
                'telephone' => '05 6221995',
            ],
            401 => 
            [
                'id' => 902,
                'name' => '大屯派出所',
                'name_in_en' => 'Dongtun Police Station',
                'zip_code' => 632,
                'address' => '雲林縣虎尾鎮大屯路143號',
                'telephone' => '05 6651474',
            ],
            402 => 
            [
                'id' => 903,
                'name' => '鹿寮派出所',
                'name_in_en' => 'LuliaoPolice Station',
                'zip_code' => 655,
                'address' => '雲林縣元長鄉中央路19號',
                'telephone' => '05 7983725',
            ],
            403 => 
            [
                'id' => 904,
                'name' => '龍岩派出所',
                'name_in_en' => 'Longyan Police Station',
                'zip_code' => 634,
                'address' => '雲林縣褒忠鄉中新路1號',
                'telephone' => '05 6972544',
            ],
            404 => 
            [
                'id' => 905,
                'name' => '客厝派出所',
                'name_in_en' => 'Kecuo Police Station',
                'zip_code' => 655,
                'address' => '雲林縣元長鄉客厝村7鄰客庴63號',
                'telephone' => '05 7882764',
            ],
            405 => 
            [
                'id' => 906,
                'name' => '褒忠分駐所',
                'name_in_en' => 'Baojhong Police Station',
                'zip_code' => 634,
                'address' => '雲林縣褒忠鄉中正路274號',
                'telephone' => '05 6972040',
            ],
            406 => 
            [
                'id' => 907,
                'name' => '土庫分駐所',
                'name_in_en' => 'Tuku Police Station',
                'zip_code' => 633,
                'address' => '雲林縣土庫鎮中山路245號',
                'telephone' => '05 6622514',
            ],
            407 => 
            [
                'id' => 908,
                'name' => '元長分駐所',
                'name_in_en' => 'Yuanchang Police Station',
                'zip_code' => 655,
                'address' => '雲林縣元長鄉中山路124之2號',
                'telephone' => '05 7882009',
            ],
            408 => 
            [
                'id' => 909,
                'name' => '馬光派出所',
                'name_in_en' => 'Maguang  Police Station',
                'zip_code' => 633,
                'address' => '雲林縣土庫鎮馬光路64號',
                'telephone' => '05 6652364',
            ],
            409 => 
            [
                'id' => 910,
                'name' => '虎尾派出所',
                'name_in_en' => 'Huwei Police Station',
                'zip_code' => 632,
                'address' => '雲林縣虎尾鎮光復路151號',
                'telephone' => '05 6322118',
            ],
            410 => 
            [
                'id' => 911,
                'name' => '嘉義縣警察局',
                'name_in_en' => 'Chiayi County Police Bureau',
                'zip_code' => 612,
                'address' => '嘉義縣太保市祥和一路東段3號',
                'telephone' => '05 3620237',
            ],
            411 => 
            [
                'id' => 912,
                'name' => '中埔分局',
                'name_in_en' => 'Jhongpu Precinct',
                'zip_code' => 606,
                'address' => '嘉義縣中埔鄉中埔村中正路66號',
                'telephone' => '05 2531013',
            ],
            412 => 
            [
                'id' => 913,
                'name' => '中埔派出所',
                'name_in_en' => 'Jhongpu Police Station',
                'zip_code' => 606,
                'address' => '嘉義縣中埔鄉中埔村中正路66號',
                'telephone' => '05 2531203',
            ],
            413 => 
            [
                'id' => 914,
                'name' => '東興派出所',
                'name_in_en' => 'Dungsing Police Station',
                'zip_code' => 606,
                'address' => '嘉義縣中埔鄉東興村凍子腳17號',
                'telephone' => '05 2532050',
            ],
            414 => 
            [
                'id' => 915,
                'name' => '觸口派出所',
                'name_in_en' => 'Chukou Police Station',
                'zip_code' => 602,
                'address' => '嘉義縣番路鄉觸口村觸口147號',
                'telephone' => '05 2591358',
            ],
            415 => 
            [
                'id' => 916,
                'name' => '公田派出所',
                'name_in_en' => 'Guantian Police Station',
                'zip_code' => 602,
                'address' => '嘉義縣番路鄉公田村隙頂100號',
                'telephone' => '05 2586114',
            ],
            416 => 
            [
                'id' => 917,
                'name' => '頂六派出所',
                'name_in_en' => 'Dingliu Police Station',
                'zip_code' => 606,
                'address' => '嘉義縣中埔鄉富收村頂中下街60號',
                'telephone' => '05 2393984',
            ],
            417 => 
            [
                'id' => 918,
                'name' => '同仁派出所',
                'name_in_en' => 'Tongren Police Station',
                'zip_code' => 606,
                'address' => '嘉義縣中埔鄉同仁村同仁99號',
                'telephone' => '05 2531201',
            ],
            418 => 
            [
                'id' => 919,
                'name' => '義仁派出所',
                'name_in_en' => 'Yiren Police Station',
                'zip_code' => 606,
                'address' => '嘉義縣中埔鄉隆興村汴頭11號',
                'telephone' => '05 2531202',
            ],
            419 => 
            [
                'id' => 920,
                'name' => '大埔分駐所',
                'name_in_en' => 'Dapu Station',
                'zip_code' => 607,
                'address' => '嘉義縣大埔鄉大埔村大埔134號',
                'telephone' => '05 2521034',
            ],
            420 => 
            [
                'id' => 921,
                'name' => '番路分駐所',
                'name_in_en' => 'Fanlu Station',
                'zip_code' => 602,
                'address' => '嘉義縣番路鄉下坑村菜公店27號',
                'telephone' => '05 2591212',
            ],
            421 => 
            [
                'id' => 922,
                'name' => '三和派出所',
                'name_in_en' => 'Sanhe Police Station',
                'zip_code' => 606,
                'address' => '嘉義縣中埔鄉和興村中華路827號',
                'telephone' => '05 2309091',
            ],
            422 => 
            [
                'id' => 923,
                'name' => '布袋分局',
                'name_in_en' => 'Budai Precint',
                'zip_code' => 625,
                'address' => '嘉義縣布袋鎮光復里自由路3號',
                'telephone' => '05 3472574',
            ],
            423 => 
            [
                'id' => 924,
                'name' => '新店派出所',
                'name_in_en' => 'Sindian Police Station',
                'zip_code' => 624,
                'address' => '嘉義縣義竹鄉新店村1號',
                'telephone' => '05 3426104',
            ],
            424 => 
            [
                'id' => 925,
                'name' => '過路派出所',
                'name_in_en' => 'Guolu police Station',
                'zip_code' => 624,
                'address' => '嘉義縣義竹鄉西過村過路子301號',
                'telephone' => '05 3436575',
            ],
            425 => 
            [
                'id' => 926,
                'name' => '光榮派出所',
                'name_in_en' => 'Guangrong Police Station',
                'zip_code' => 624,
                'address' => '嘉義縣義竹鄉東光村東後寮7號',
                'telephone' => '05 3411223',
            ],
            426 => 
            [
                'id' => 927,
                'name' => '義竹分駐所',
                'name_in_en' => 'Yijhu Police station',
                'zip_code' => 624,
                'address' => '嘉義縣義竹鄉仁里村義竹359之5號',
                'telephone' => '05 3412009',
            ],
            427 => 
            [
                'id' => 928,
                'name' => '新塭派出所',
                'name_in_en' => 'Sinwun  Police  Station',
                'zip_code' => 625,
                'address' => '嘉義縣布袋鎮新塭293號',
                'telephone' => '05 3431154',
            ],
            428 => 
            [
                'id' => 929,
                'name' => '景山派出所',
                'name_in_en' => 'Jingshan Police Station',
                'zip_code' => 625,
                'address' => '嘉義縣布袋鎮東港里埔仔庴33號',
                'telephone' => '05 3472607',
            ],
            429 => 
            [
                'id' => 930,
                'name' => '過溝派出所',
                'name_in_en' => 'Guogou Police Station',
                'zip_code' => 625,
                'address' => '嘉義縣布袋鎮中安里過溝中厝110號',
                'telephone' => '05 3451064',
            ],
            430 => 
            [
                'id' => 931,
                'name' => '布袋派出所',
                'name_in_en' => 'Budai Police Station',
                'zip_code' => 625,
                'address' => '嘉義縣布袋鎮光復里自由路3號1樓',
                'telephone' => '05 3472047',
            ],
            431 => 
            [
                'id' => 932,
                'name' => '朴子分局',
                'name_in_en' => 'Puzih Precinet',
                'zip_code' => 613,
                'address' => '嘉義縣朴子市光復路33號',
                'telephone' => '05 3793584',
            ],
            432 => 
            [
                'id' => 933,
                'name' => '朴子派出所',
                'name_in_en' => 'Puzih Police Station',
                'zip_code' => 613,
                'address' => '嘉義縣朴子市光復路33號',
                'telephone' => '05 3792014',
            ],
            433 => 
            [
                'id' => 934,
                'name' => '雙溪派出所',
                'name_in_en' => 'Shuangsi  Police  Station',
                'zip_code' => 613,
                'address' => '嘉義縣朴子市雙溪口145號',
                'telephone' => '05 3794553',
            ],
            434 => 
            [
                'id' => 935,
                'name' => '松梅派出所',
                'name_in_en' => 'songmei  police  station',
                'zip_code' => 613,
                'address' => '嘉義縣朴子市梅華里牛挑灣108號',
                'telephone' => '05 3691572',
            ],
            435 => 
            [
                'id' => 936,
                'name' => '六美派出所',
                'name_in_en' => 'Lioumei  police  station',
                'zip_code' => 615,
                'address' => '嘉義縣六腳鄉港尾寮28號',
                'telephone' => '05 3802244',
            ],
            436 => 
            [
                'id' => 937,
                'name' => '北美派出所',
                'name_in_en' => 'Beimei  Police  Station',
                'zip_code' => 615,
                'address' => '嘉義縣六腳鄉崙陽村崙子183號',
                'telephone' => '05 7811105',
            ],
            437 => 
            [
                'id' => 938,
                'name' => '永竹派出所',
                'name_in_en' => 'Yongjhu  Police  Station',
                'zip_code' => 615,
                'address' => '嘉義縣六腳鄉竹子腳9之26號',
                'telephone' => '05 3780845',
            ],
            438 => 
            [
                'id' => 939,
                'name' => '六家派出所',
                'name_in_en' => 'Lioujia  Police  Station',
                'zip_code' => 615,
                'address' => '嘉義縣六腳鄉六腳村5號',
                'telephone' => '05 3780843',
            ],
            439 => 
            [
                'id' => 940,
                'name' => '六腳分駐所',
                'name_in_en' => 'Lioujiao  Police  Station',
                'zip_code' => 615,
                'address' => '嘉義縣六腳鄉蒜頭村75號',
                'telephone' => '05 3802008',
            ],
            440 => 
            [
                'id' => 941,
                'name' => '龍崗派出所',
                'name_in_en' => 'Longgang  Police  Station',
                'zip_code' => 614,
                'address' => '嘉義縣東石鄉栗子崙62號',
                'telephone' => '05 3451740',
            ],
            441 => 
            [
                'id' => 942,
                'name' => '下楫派出所',
                'name_in_en' => 'Siayi  Police  Station',
                'zip_code' => 614,
                'address' => '嘉義縣東石鄉下楫子寮137號',
                'telephone' => '05 3601849',
            ],
            442 => 
            [
                'id' => 943,
                'name' => '三江派出所',
                'name_in_en' => 'Shuangsi  Police  Station',
                'zip_code' => 614,
                'address' => '嘉義縣東石鄉三塊厝1號',
                'telephone' => '05 3732501',
            ],
            443 => 
            [
                'id' => 944,
                'name' => '東石分駐所',
                'name_in_en' => 'Dongshih  Police  Station',
                'zip_code' => 614,
                'address' => '嘉義縣東石鄉東石村36號',
                'telephone' => '05 3732240',
            ],
            444 => 
            [
                'id' => 945,
                'name' => '竹村派出所',
                'name_in_en' => 'Jhucun  Police  Station',
                'zip_code' => 613,
                'address' => '嘉義縣朴子市竹村里鴨母寮14之6號',
                'telephone' => '05 3693219',
            ],
            445 => 
            [
                'id' => 946,
                'name' => '大鄉派出所',
                'name_in_en' => 'Dasiang  Police  Station',
                'zip_code' => 613,
                'address' => '嘉義縣朴子市大鄉里大槺榔223號',
                'telephone' => '05 3792091',
            ],
            446 => 
            [
                'id' => 947,
                'name' => '港墘派出所',
                'name_in_en' => 'Gangcian  Police  Station',
                'zip_code' => 614,
                'address' => '嘉義縣東石鄉港墘厝91號',
                'telephone' => '05 3793564',
            ],
            447 => 
            [
                'id' => 948,
                'name' => '水上分局',
                'name_in_en' => 'Shueishang Precinct',
                'zip_code' => 608,
                'address' => '嘉義縣水上鄉水頭村中興路528號',
                'telephone' => '05 2682025',
            ],
            448 => 
            [
                'id' => 949,
                'name' => '成功派出所',
                'name_in_en' => 'Chengong Police  Station',
                'zip_code' => 608,
                'address' => '嘉義縣水上鄉三界埔156號',
                'telephone' => '05 2392064',
            ],
            449 => 
            [
                'id' => 950,
                'name' => '新埤派出所',
                'name_in_en' => 'SinPi  Police  Station',
                'zip_code' => 612,
                'address' => '嘉義縣太保市舊埤里新埤9號',
                'telephone' => '05 3612280',
            ],
            450 => 
            [
                'id' => 951,
                'name' => '後堀派出所',
                'name_in_en' => 'Houjyue Police Station',
                'zip_code' => 611,
                'address' => '嘉義縣鹿草鄉後堀61號',
                'telephone' => '05 3752444',
            ],
            451 => 
            [
                'id' => 952,
                'name' => '下潭派出所',
                'name_in_en' => 'Siatan  Police  Station',
                'zip_code' => 611,
                'address' => '嘉義縣鹿草鄉下潭152號',
                'telephone' => '05 3651303',
            ],
            452 => 
            [
                'id' => 953,
                'name' => '中莊派出所',
                'name_in_en' => 'Jhongjhuang Police Station',
                'zip_code' => 608,
                'address' => '嘉義縣水上鄉中庄村66號',
                'telephone' => '05 2890654',
            ],
            453 => 
            [
                'id' => 954,
                'name' => '南新派出所',
                'name_in_en' => 'Nansin Police Station',
                'zip_code' => 612,
                'address' => '嘉義縣太保市北港路2段50號',
                'telephone' => '05 2373022',
            ],
            454 => 
            [
                'id' => 955,
                'name' => '柳林派出所',
                'name_in_en' => 'Lioulin Police.station',
                'zip_code' => 608,
                'address' => '嘉義縣水上鄉柳鄉村柳子林119號',
                'telephone' => '05 2682515',
            ],
            455 => 
            [
                'id' => 956,
                'name' => '南靖派出所',
                'name_in_en' => 'Nanjing Police Station',
                'zip_code' => 608,
                'address' => '嘉義縣水上鄉三鎮村三鎮路51號',
                'telephone' => '05 2682364',
            ],
            456 => 
            [
                'id' => 957,
                'name' => '水上派出所',
                'name_in_en' => 'Shuishang  Police  Station',
                'zip_code' => 608,
                'address' => '嘉義縣水上鄉水上村中山路2段291號',
                'telephone' => '05 2682264',
            ],
            457 => 
            [
                'id' => 958,
                'name' => '太保分駐所',
                'name_in_en' => 'Taibao  Police Station',
                'zip_code' => 612,
                'address' => '嘉義縣太保市太保里23號',
                'telephone' => '05 3711555',
            ],
            458 => 
            [
                'id' => 959,
                'name' => '鹿草分駐所',
                'name_in_en' => 'Lucao Police Station',
                'zip_code' => 611,
                'address' => '嘉義縣鹿草鄉長壽路242號',
                'telephone' => '05 3752302',
            ],
            459 => 
            [
                'id' => 960,
                'name' => '民雄分局',
                'name_in_en' => 'Minsyong  Precinct',
                'zip_code' => 621,
                'address' => '嘉義縣民雄鄉東榮村民族路21號',
                'telephone' => '05 2262014',
            ],
            460 => 
            [
                'id' => 961,
                'name' => '民雄派出所',
                'name_in_en' => 'Minsyong  Police  Station',
                'zip_code' => 621,
                'address' => '嘉義縣民雄鄉東榮村民族路21號',
                'telephone' => '05 2262192',
            ],
            461 => 
            [
                'id' => 962,
                'name' => '豐收派出所',
                'name_in_en' => 'Fongshou  PoliceStation',
                'zip_code' => 621,
                'address' => '嘉義縣民雄鄉豐收村好收路48號',
                'telephone' => '05 2262732',
            ],
            462 => 
            [
                'id' => 963,
                'name' => '菁埔派出所',
                'name_in_en' => 'Jingpu Police Stationt',
                'zip_code' => 621,
                'address' => '嘉義縣民雄鄉菁埔村菁埔138號',
                'telephone' => '05 2263510',
            ],
            463 => 
            [
                'id' => 964,
                'name' => '溝背派出所',
                'name_in_en' => 'Goubei Police Station',
                'zip_code' => 622,
                'address' => '嘉義縣大林鎮義和里三塊厝2號',
                'telephone' => '05 2952902',
            ],
            464 => 
            [
                'id' => 965,
                'name' => '柳溝派出所',
                'name_in_en' => 'Liougou Police Station',
                'zip_code' => 623,
                'address' => '嘉義縣溪口鄉柳溝村阿連庄7號',
                'telephone' => '05 2691182',
            ],
            465 => 
            [
                'id' => 966,
                'name' => '安和派出所',
                'name_in_en' => 'Anhe  Police Station',
                'zip_code' => 616,
                'address' => '嘉義縣新港鄉安和村16鄰番婆16號',
                'telephone' => '05 3772104',
            ],
            466 => 
            [
                'id' => 967,
                'name' => '南港派出所',
                'name_in_en' => 'Nangang  Police  Station',
                'zip_code' => 616,
                'address' => '嘉義縣新港鄉南港村南港1號',
                'telephone' => '05 7811618',
            ],
            467 => 
            [
                'id' => 968,
                'name' => '月眉派出所',
                'name_in_en' => 'Yuemei  Police  Station',
                'zip_code' => 616,
                'address' => '嘉義縣新港鄉月潭村月眉潭204號',
                'telephone' => '05 3772524',
            ],
            468 => 
            [
                'id' => 969,
                'name' => '北斗派出所',
                'name_in_en' => 'Beidou Police Station',
                'zip_code' => 621,
                'address' => '嘉義縣民雄鄉北斗村北勢子17號',
                'telephone' => '05 2213731',
            ],
            469 => 
            [
                'id' => 970,
                'name' => '民興派出所',
                'name_in_en' => 'Minsing Police Station',
                'zip_code' => 621,
                'address' => '嘉義縣民雄鄉興中村江厝店10號',
                'telephone' => '05 2213735',
            ],
            470 => 
            [
                'id' => 971,
                'name' => '大美派出所',
                'name_in_en' => 'Damei Police Station',
                'zip_code' => 622,
                'address' => '嘉義縣大林鎮大美里大埔美1號',
                'telephone' => '05 2952905',
            ],
            471 => 
            [
                'id' => 972,
                'name' => '新港分駐所',
                'name_in_en' => 'SingangPoliceStation',
                'zip_code' => 616,
                'address' => '嘉義縣新港鄉大興村中正路47號',
                'telephone' => '05 3742009',
            ],
            472 => 
            [
                'id' => 973,
                'name' => '溪口分駐所',
                'name_in_en' => 'pitou police station',
                'zip_code' => 623,
                'address' => '嘉義縣溪口鄉溪東村中正路142號',
                'telephone' => '05 2691009',
            ],
            473 => 
            [
                'id' => 974,
                'name' => '大林分駐所',
                'name_in_en' => 'Dalin Police Station',
                'zip_code' => 622,
                'address' => '嘉義縣大林鎮中山路86之2號',
                'telephone' => '05 2652850',
            ],
            474 => 
            [
                'id' => 975,
                'name' => '埤頭派出所',
                'name_in_en' => 'Pitou Police Station',
                'zip_code' => 616,
                'address' => '嘉義縣新港鄉埤子村埤仔頭32號',
                'telephone' => '05 3760853',
            ],
            475 => 
            [
                'id' => 976,
                'name' => '竹崎分局',
                'name_in_en' => 'Jhuci Precinct',
                'zip_code' => 604,
                'address' => '嘉義縣竹崎鄉竹崎村中山路72號',
                'telephone' => '05 2611089',
            ],
            476 => 
            [
                'id' => 977,
                'name' => '竹崎派出所',
                'name_in_en' => 'Jhuci Police Station',
                'zip_code' => 604,
                'address' => '嘉義縣竹崎鄉竹崎村中山路72號',
                'telephone' => '05 2611336',
            ],
            477 => 
            [
                'id' => 978,
                'name' => '仁和派出所',
                'name_in_en' => 'Jenhe Police Station',
                'zip_code' => 604,
                'address' => '嘉義縣竹崎鄉獅埜村1鄰東義8號',
                'telephone' => '05 2110056',
            ],
            478 => 
            [
                'id' => 979,
                'name' => '龍山派出所',
                'name_in_en' => 'Longshan Police Station',
                'zip_code' => 604,
                'address' => '嘉義縣竹崎鄉龍山村瓦厝埔5號',
                'telephone' => '05 2611256',
            ],
            479 => 
            [
                'id' => 980,
                'name' => '復金派出所',
                'name_in_en' => 'Fujin Police Station',
                'zip_code' => 604,
                'address' => '嘉義縣竹崎鄉復鐤金52號',
                'telephone' => '05 2611254',
            ],
            480 => 
            [
                'id' => 981,
                'name' => '仁壽派出所',
                'name_in_en' => 'Jenshou Police Station',
                'zip_code' => 604,
                'address' => '嘉義縣竹崎鄉仁壽村2鄰交力坪30號',
                'telephone' => '05 2501454',
            ],
            481 => 
            [
                'id' => 982,
                'name' => '中和派出所',
                'name_in_en' => 'Jhonghe Police Station',
                'zip_code' => 604,
                'address' => '嘉義縣竹崎鄉中和村奮起湖2鄰24號',
                'telephone' => '05 2561054',
            ],
            482 => 
            [
                'id' => 983,
                'name' => '太平派出所',
                'name_in_en' => 'Taiping Police Station',
                'zip_code' => 603,
                'address' => '嘉義縣梅山鄉太平村大坪42號',
                'telephone' => '05 2571202',
            ],
            483 => 
            [
                'id' => 984,
                'name' => '瑞里派出所',
                'name_in_en' => 'Rueili Police Station',
                'zip_code' => 603,
                'address' => '嘉義縣梅山鄉瑞里村幼葉林120號',
                'telephone' => '05 2501041',
            ],
            484 => 
            [
                'id' => 985,
                'name' => '新美派出所',
                'name_in_en' => 'Sinmei Police Station',
                'zip_code' => 605,
                'address' => '嘉義縣阿里山鄉新美村新美56號',
                'telephone' => '05 2513079',
            ],
            485 => 
            [
                'id' => 986,
                'name' => '太和派出所',
                'name_in_en' => 'Taihe Police Station',
                'zip_code' => 603,
                'address' => '嘉義縣梅山鄉太和村蛤里味24號',
                'telephone' => '05 2661055',
            ],
            486 => 
            [
                'id' => 987,
                'name' => '山美派出所',
                'name_in_en' => 'Shanmei Police Station',
                'zip_code' => 605,
                'address' => '嘉義縣阿里山鄉山美村山美57號',
                'telephone' => '05 2586154',
            ],
            487 => 
            [
                'id' => 988,
                'name' => '大南派出所',
                'name_in_en' => 'Danan Police Station',
                'zip_code' => 603,
                'address' => '嘉義縣梅山鄉大南村南勢坑48號',
                'telephone' => '05 2621412',
            ],
            488 => 
            [
                'id' => 989,
                'name' => '里佳派出所',
                'name_in_en' => 'Lijia Police Station',
                'zip_code' => 605,
                'address' => '嘉義縣阿里山鄉里佳村里佳50號',
                'telephone' => '05 2511124',
            ],
            489 => 
            [
                'id' => 990,
                'name' => '阿里山派出所',
                'name_in_en' => 'Alishan Police Station',
                'zip_code' => 605,
                'address' => '嘉義縣阿里山鄉中正村東阿里山62號',
                'telephone' => '05 2679975',
            ],
            490 => 
            [
                'id' => 991,
                'name' => '來吉派出所',
                'name_in_en' => 'Leye Police Station',
                'zip_code' => 605,
                'address' => '嘉義縣阿里山鄉來吉村來吉4鄰95號',
                'telephone' => '05 2661185',
            ],
            491 => 
            [
                'id' => 992,
                'name' => '內埔派出所',
                'name_in_en' => 'Napu Police Station',
                'zip_code' => 604,
                'address' => '嘉義縣竹崎鄉內埔村元興路112號',
                'telephone' => '05 2541040',
            ],
            492 => 
            [
                'id' => 993,
                'name' => '樂野分駐所',
                'name_in_en' => 'Laiji  Station',
                'zip_code' => 605,
                'address' => '嘉義縣竹崎鄉石棹22之6號',
                'telephone' => '05 2561325',
            ],
            493 => 
            [
                'id' => 994,
                'name' => '鹿滿派出所',
                'name_in_en' => 'Luman Police Station',
                'zip_code' => 604,
                'address' => '嘉義縣竹崎鄉鹿滿村鹿鳴路56號',
                'telephone' => '05 2611255',
            ],
            494 => 
            [
                'id' => 995,
                'name' => '達邦分駐所',
                'name_in_en' => 'Dabun Police Station',
                'zip_code' => 605,
                'address' => '嘉義縣阿里山鄉達邦村達邦25號',
                'telephone' => '05 2511006',
            ],
            495 => 
            [
                'id' => 996,
                'name' => '十字派出所',
                'name_in_en' => 'Shijhou Police Station',
                'zip_code' => 605,
                'address' => '嘉義縣阿里山鄉十字村1鄰28號',
                'telephone' => '05 2511223',
            ],
            496 => 
            [
                'id' => 997,
                'name' => '梅山分駐所',
                'name_in_en' => 'Meishani  Station',
                'zip_code' => 603,
                'address' => '嘉義縣梅山鄉梅東村中山路68號',
                'telephone' => '05 2621003',
            ],
            497 => 
            [
                'id' => 998,
                'name' => '嘉義市政府警察局',
                'name_in_en' => 'Chiayi City Police Bureau',
                'zip_code' => 600,
                'address' => '嘉義市中山路195號',
                'telephone' => '05 2220671',
            ],
            498 => 
            [
                'id' => 999,
                'name' => '第一分局',
                'name_in_en' => 'First Precinct',
                'zip_code' => 600,
                'address' => '嘉義市北港路280號',
                'telephone' => '05 2348006',
            ],
            499 => 
            [
                'id' => 1000,
                'name' => '北鎮派出所',
                'name_in_en' => 'Beijhen Police Station',
                'zip_code' => 600,
                'address' => '嘉義市北港路280號',
                'telephone' => '05 2322732',
            ],
        ]);
        DB::table('taiwan_police_stations')->insert([
            0 => 
            [
                'id' => 1001,
                'name' => '長榮派出所',
                'name_in_en' => 'Changrong Police Station',
                'zip_code' => 600,
                'address' => '嘉義市中山路567號',
                'telephone' => '05 2222206',
            ],
            1 => 
            [
                'id' => 1002,
                'name' => '竹園派出所',
                'name_in_en' => 'Jhuyuan Police Station',
                'zip_code' => 600,
                'address' => '嘉義市博愛路2段455號',
                'telephone' => '05 2356144',
            ],
            2 => 
            [
                'id' => 1003,
                'name' => '八掌派出所',
                'name_in_en' => 'Bajhang Police Station',
                'zip_code' => 600,
                'address' => '嘉義市世賢路3段451號',
                'telephone' => '05 2867110',
            ],
            3 => 
            [
                'id' => 1004,
                'name' => '北興派出所',
                'name_in_en' => 'Beising Police Station',
                'zip_code' => 600,
                'address' => '嘉義市博愛路1段506號',
                'telephone' => '05 2321294',
            ],
            4 => 
            [
                'id' => 1005,
                'name' => '第二分局',
                'name_in_en' => 'Second Precinct',
                'zip_code' => 600,
                'address' => '嘉義市東區吳鳳南路367號',
                'telephone' => '05 2254393',
            ],
            5 => 
            [
                'id' => 1006,
                'name' => '興安派出所',
                'name_in_en' => 'Sing-an Police Station',
                'zip_code' => 600,
                'address' => '嘉義市吳鳳南路367號',
                'telephone' => '05 2224593',
            ],
            6 => 
            [
                'id' => 1007,
                'name' => '長竹派出所',
                'name_in_en' => 'Changjhu Police Station',
                'zip_code' => 600,
                'address' => '嘉義市民權東路34號',
                'telephone' => '05 2770641',
            ],
            7 => 
            [
                'id' => 1008,
                'name' => '新南派出所',
                'name_in_en' => 'Sinnan Police Station',
                'zip_code' => 600,
                'address' => '嘉義市吳鳳南路75號',
                'telephone' => '05 2222731',
            ],
            8 => 
            [
                'id' => 1009,
                'name' => '後湖派出所',
                'name_in_en' => 'Houhu Police Station',
                'zip_code' => 600,
                'address' => '嘉義市忠孝路537號',
                'telephone' => '05 2762726',
            ],
            9 => 
            [
                'id' => 1010,
                'name' => '公園派出所',
                'name_in_en' => 'Gongyuan Police Station',
                'zip_code' => 600,
                'address' => '嘉義市中山路2號',
                'telephone' => '05 2783141',
            ],
            10 => 
            [
                'id' => 1011,
                'name' => '北門派出所',
                'name_in_en' => 'Beimen Police Station',
                'zip_code' => 600,
                'address' => '嘉義市民權路268號',
                'telephone' => '05 2782727',
            ],
            11 => 
            [
                'id' => 1012,
                'name' => '南門派出所',
                'name_in_en' => 'Nanmen Police Station',
                'zip_code' => 600,
                'address' => '嘉義市民族路230號',
                'telephone' => '05 2222725',
            ],
            12 => 
            [
                'id' => 1013,
                'name' => '臺南市政府警察局',
                'name_in_en' => 'Tainan City Police Department',
                'zip_code' => 730,
                'address' => '臺南市新營區中正路3號',
                'telephone' => '06 6322210',
            ],
            13 => 
            [
                'id' => 1014,
                'name' => '第一分局',
                'name_in_en' => '1st Precinct',
                'zip_code' => 701,
                'address' => '臺南市東區崇善路740號',
                'telephone' => '06 2684867',
            ],
            14 => 
            [
                'id' => 1015,
                'name' => '德高派出所',
                'name_in_en' => 'De-Gau Police Station',
                'zip_code' => 701,
                'address' => '臺南市東區崇善路740號',
                'telephone' => '06 2693405',
            ],
            15 => 
            [
                'id' => 1016,
                'name' => '文化派出所',
                'name_in_en' => 'Wen-Hua Police Station',
                'zip_code' => 701,
                'address' => '臺南市東區崇明路384號',
                'telephone' => '06 2907243',
            ],
            16 => 
            [
                'id' => 1017,
                'name' => '莊敬派出所',
                'name_in_en' => 'Juang-Jing Police Station',
                'zip_code' => 701,
                'address' => '臺南市東區東光路2段66號',
                'telephone' => '06 2385398',
            ],
            17 => 
            [
                'id' => 1018,
                'name' => '東門派出所',
                'name_in_en' => 'Dung-Men Police Station',
                'zip_code' => 701,
                'address' => '臺南市東區崇善路55號',
                'telephone' => '06 2690098',
            ],
            18 => 
            [
                'id' => 1019,
                'name' => '東寧派出所',
                'name_in_en' => 'Dung-Ning Police Station',
                'zip_code' => 701,
                'address' => '臺南市東區林森路2段250號',
                'telephone' => '06 2375433',
            ],
            19 => 
            [
                'id' => 1020,
                'name' => '府東派出所',
                'name_in_en' => 'Fu-Dung Police Station',
                'zip_code' => 701,
                'address' => '臺南市東區裕孝路136號',
                'telephone' => '06 3316119',
            ],
            20 => 
            [
                'id' => 1021,
                'name' => '後甲派出所',
                'name_in_en' => 'Hou-Jia Police Station',
                'zip_code' => 701,
                'address' => '臺南市東區富農街1段267號',
                'telephone' => '06-2676364',
            ],
            21 => 
            [
                'id' => 1022,
                'name' => '第二分局',
                'name_in_en' => '2nd Precinct',
                'zip_code' => 700,
                'address' => '臺南市中西區南寧街144號',
                'telephone' => '06 2139070',
            ],
            22 => 
            [
                'id' => 1023,
                'name' => '南門派出所',
                'name_in_en' => 'Nanmem Police Station',
                'zip_code' => 700,
                'address' => '臺南市中西區南寧街144號',
                'telephone' => '06 2148283',
            ],
            23 => 
            [
                'id' => 1024,
                'name' => '民權派出所',
                'name_in_en' => 'Minquan Police Station',
                'zip_code' => 700,
                'address' => '臺南市中西區民權路2段202號',
                'telephone' => '06 2223002',
            ],
            24 => 
            [
                'id' => 1025,
                'name' => '博愛派出所',
                'name_in_en' => 'Boai Police Station',
                'zip_code' => 700,
                'address' => '臺南市中西區北門路1段103號',
                'telephone' => '06 2287553',
            ],
            25 => 
            [
                'id' => 1026,
                'name' => '海安派出所',
                'name_in_en' => 'Haian Police Station',
                'zip_code' => 700,
                'address' => '臺南市中西區民生路二段273號',
                'telephone' => '06 2290153',
            ],
            26 => 
            [
                'id' => 1027,
                'name' => '長樂派出所',
                'name_in_en' => 'Changle Police Station',
                'zip_code' => 700,
                'address' => '臺南市中西區藥王里民權路3段230號',
                'telephone' => '06 2222422',
            ],
            27 => 
            [
                'id' => 1028,
                'name' => '中正派出所',
                'name_in_en' => 'Jhongjheng Police Station',
                'zip_code' => 700,
                'address' => '臺南市中西區中正路347號',
                'telephone' => '06 2410135',
            ],
            28 => 
            [
                'id' => 1029,
                'name' => '第三分局',
                'name_in_en' => '3rd Precinct',
                'zip_code' => 709,
                'address' => '臺南市安南區安中路3段396號',
                'telephone' => '06 2567666',
            ],
            29 => 
            [
                'id' => 1030,
                'name' => '安南派出所',
                'name_in_en' => 'Anan Police  Station',
                'zip_code' => 709,
                'address' => '臺南市安南區安中路3段396號',
                'telephone' => '06 2567910',
            ],
            30 => 
            [
                'id' => 1031,
                'name' => '安中派出所',
                'name_in_en' => 'Anzhong Police Station',
                'zip_code' => 709,
                'address' => '臺南市安南區安中路1段788號',
                'telephone' => '06 2467808',
            ],
            31 => 
            [
                'id' => 1032,
                'name' => '顯宮派出所',
                'name_in_en' => 'Xiangong Police Station',
                'zip_code' => 709,
                'address' => '臺南市安南區媽祖宮路50號',
                'telephone' => '06 2841320',
            ],
            32 => 
            [
                'id' => 1033,
                'name' => '安佃派出所',
                'name_in_en' => 'Andian Police Station',
                'zip_code' => 709,
                'address' => '臺南市安南區海佃路4段496號',
                'telephone' => '06 2872960',
            ],
            33 => 
            [
                'id' => 1034,
                'name' => '長安派出所',
                'name_in_en' => 'Changan Police Station',
                'zip_code' => 709,
                'address' => '臺南市安南區長溪路3段313號',
                'telephone' => '06 2569531',
            ],
            34 => 
            [
                'id' => 1035,
                'name' => '土城派出所',
                'name_in_en' => 'Tucheng Police Station',
                'zip_code' => 709,
                'address' => '臺南市安南區城西街1段40號',
                'telephone' => '06 2577403',
            ],
            35 => 
            [
                'id' => 1036,
                'name' => '海南派出所',
                'name_in_en' => 'Hainan Police Station',
                'zip_code' => 709,
                'address' => '臺南市安南區郡安路6段135號',
                'telephone' => '06 2588946',
            ],
            36 => 
            [
                'id' => 1037,
                'name' => '安順派出所',
                'name_in_en' => 'Anshun Police Station',
                'zip_code' => 709,
                'address' => '臺南市安南區安西一街17號',
                'telephone' => '06 2562405',
            ],
            37 => 
            [
                'id' => 1038,
                'name' => '和順派出所',
                'name_in_en' => 'Heshun Police Station',
                'zip_code' => 709,
                'address' => '臺南市安南區安和路4段569號',
                'telephone' => '06 3554134',
            ],
            38 => 
            [
                'id' => 1039,
                'name' => '第四分局',
                'name_in_en' => '4th Precinct',
                'zip_code' => 708,
                'address' => '臺南市安平區育平路312號',
                'telephone' => '06 2954116',
            ],
            39 => 
            [
                'id' => 1040,
                'name' => '華平派出所',
                'name_in_en' => 'HuaPing Police Station',
                'zip_code' => 708,
                'address' => '臺南市安平區建平八街2號',
                'telephone' => '06 2951720',
            ],
            40 => 
            [
                'id' => 1041,
                'name' => '安平派出所',
                'name_in_en' => 'Anping Police Station',
                'zip_code' => 708,
                'address' => '臺南市安平區安平路27號',
                'telephone' => '06 2252598',
            ],
            41 => 
            [
                'id' => 1042,
                'name' => '育平派出所',
                'name_in_en' => 'Yuping Police Station',
                'zip_code' => 708,
                'address' => '臺南市安平區育平路321號',
                'telephone' => '06 2982674',
            ],
            42 => 
            [
                'id' => 1043,
                'name' => '第五分局',
                'name_in_en' => '5th Precinct',
                'zip_code' => 704,
                'address' => '臺南市北區文賢路650號',
                'telephone' => '06 2598595',
            ],
            43 => 
            [
                'id' => 1044,
                'name' => '立人派出所',
                'name_in_en' => 'Liren Police Station',
                'zip_code' => 704,
                'address' => '臺南市北區西門路3段43號',
                'telephone' => '06 2224227',
            ],
            44 => 
            [
                'id' => 1045,
                'name' => '北門派出所',
                'name_in_en' => 'Beimen Police Station',
                'zip_code' => 704,
                'address' => '臺南市北區北門路2段3號',
                'telephone' => '06 2224230',
            ],
            45 => 
            [
                'id' => 1046,
                'name' => '公園派出所',
                'name_in_en' => 'Gongyuan Police Station',
                'zip_code' => 704,
                'address' => '臺南市北區文成三路550號',
                'telephone' => '06 2520392',
            ],
            46 => 
            [
                'id' => 1047,
                'name' => '實踐派出所',
                'name_in_en' => 'Shijian Police Station',
                'zip_code' => 704,
                'address' => '臺南市北區北門路二段628號',
                'telephone' => '06 2827973',
            ],
            47 => 
            [
                'id' => 1048,
                'name' => '開元派出所',
                'name_in_en' => 'Kaiyuan Police Station',
                'zip_code' => 704,
                'address' => '臺南市北區開元路145號',
                'telephone' => '06 2345461',
            ],
            48 => 
            [
                'id' => 1049,
                'name' => '和緯派出所',
                'name_in_en' => 'Hewei Police Station',
                'zip_code' => 704,
                'address' => '臺南市北區文賢路650號',
                'telephone' => '06 2597695',
            ],
            49 => 
            [
                'id' => 1050,
                'name' => '第六分局',
                'name_in_en' => '6th Precinct',
                'zip_code' => 702,
                'address' => '臺南市南區中華南路2段241號',
                'telephone' => '06 2640556',
            ],
            50 => 
            [
                'id' => 1051,
                'name' => '喜樹派出所',
                'name_in_en' => 'Sishu Police Station',
                'zip_code' => 702,
                'address' => '臺南市南區喜樹路151巷1號',
                'telephone' => '06 2622407',
            ],
            51 => 
            [
                'id' => 1052,
                'name' => '鯤鯓派出所',
                'name_in_en' => 'Kunshen Police Station',
                'zip_code' => 702,
                'address' => '臺南市南區鯤鯓路161號',
                'telephone' => '06 2627306',
            ],
            52 => 
            [
                'id' => 1053,
                'name' => '新興派出所',
                'name_in_en' => 'Sinsing Police Station',
                'zip_code' => 702,
                'address' => '臺南市南區中華西路1段67之1號',
                'telephone' => '06 2611428',
            ],
            53 => 
            [
                'id' => 1054,
                'name' => '金華派出所',
                'name_in_en' => 'Jinhua Police Station',
                'zip_code' => 702,
                'address' => '臺南市南區金華路2段250號',
                'telephone' => '06 2640007',
            ],
            54 => 
            [
                'id' => 1055,
                'name' => '灣裡派出所',
                'name_in_en' => 'Wanli Police Station',
                'zip_code' => 702,
                'address' => '臺南市南區灣裡路61巷2號',
                'telephone' => '06 2622819',
            ],
            55 => 
            [
                'id' => 1056,
                'name' => '鹽埕派出所',
                'name_in_en' => 'Yancheng Police Station',
                'zip_code' => 702,
                'address' => '臺南市南區中華南路2段241號',
                'telephone' => '06 2651592',
            ],
            56 => 
            [
                'id' => 1057,
                'name' => '大林派出所',
                'name_in_en' => 'Dalin Police Station',
                'zip_code' => 702,
                'address' => '臺南市南區大同路2段456號',
                'telephone' => '06 2150209',
            ],
            57 => 
            [
                'id' => 1058,
                'name' => '新營分局',
                'name_in_en' => 'Xinying Precinct',
                'zip_code' => 730,
                'address' => '臺南市新營區中山路119號',
                'telephone' => '06 6323297',
            ],
            58 => 
            [
                'id' => 1059,
                'name' => '柳營分駐所',
                'name_in_en' => 'Liuying Ploice Station',
                'zip_code' => 736,
                'address' => '臺南市柳營區柳營路1段785號',
                'telephone' => '06 6223424',
            ],
            59 => 
            [
                'id' => 1060,
                'name' => '鹽水分駐所',
                'name_in_en' => 'Yanshui Ploice Station',
                'zip_code' => 737,
                'address' => '臺南市鹽水區武廟路23號',
                'telephone' => '06 6521032',
            ],
            60 => 
            [
                'id' => 1061,
                'name' => '中山路派出所',
                'name_in_en' => 'Zhongshan Rd.Ploice Station',
                'zip_code' => 730,
                'address' => '臺南市新營區中山路119號',
                'telephone' => '06 6322306',
            ],
            61 => 
            [
                'id' => 1062,
                'name' => '民治派出所',
                'name_in_en' => 'Minzhi  Ploice Station',
                'zip_code' => 730,
                'address' => '臺南市新營區民治路49號',
                'telephone' => '06 6322164',
            ],
            62 => 
            [
                'id' => 1063,
                'name' => '後鎮派出所',
                'name_in_en' => 'Houzhen Ploice Station',
                'zip_code' => 730,
                'address' => '臺南市新營區建國路110號',
                'telephone' => '06 6328752',
            ],
            63 => 
            [
                'id' => 1064,
                'name' => '華雅派出所',
                'name_in_en' => 'Huaya Ploice Station',
                'zip_code' => 737,
                'address' => '臺南市鹽水區歡雅里歡雅25號',
                'telephone' => '06 6552307',
            ],
            64 => 
            [
                'id' => 1065,
                'name' => '竹埔派出所',
                'name_in_en' => 'Zhupu Ploice Station',
                'zip_code' => 737,
                'address' => '臺南市鹽水區竹埔里竹子腳1號',
                'telephone' => '06 6551960',
            ],
            65 => 
            [
                'id' => 1066,
                'name' => '太宮派出所',
                'name_in_en' => 'Taigong Ploice Station',
                'zip_code' => 730,
                'address' => '臺南市新營區太南里太子宮201號',
                'telephone' => '06 6524753',
            ],
            66 => 
            [
                'id' => 1067,
                'name' => '重溪派出所',
                'name_in_en' => 'Chongxi Ploice Station',
                'zip_code' => 736,
                'address' => '臺南市柳營區篤農里小腳腿229號',
                'telephone' => '06 6231664',
            ],
            67 => 
            [
                'id' => 1068,
                'name' => '果毅派出所',
                'name_in_en' => 'Zuoyi Ploice Station',
                'zip_code' => 736,
                'address' => '臺南市柳營區神農里果毅後296號',
                'telephone' => '06 6231514',
            ],
            68 => 
            [
                'id' => 1069,
                'name' => '白河分局',
                'name_in_en' => 'Baihe Precinct',
                'zip_code' => 732,
                'address' => '臺南市白河區中山路128號',
                'telephone' => '06 6852006',
            ],
            69 => 
            [
                'id' => 1070,
                'name' => '白河派出所',
                'name_in_en' => 'Baihe Police Station',
                'zip_code' => 732,
                'address' => '臺南市白河區中山路128號',
                'telephone' => '06 6852018',
            ],
            70 => 
            [
                'id' => 1071,
                'name' => '後壁分駐所',
                'name_in_en' => 'Houbi Police Station',
                'zip_code' => 731,
                'address' => '臺南市後壁區後壁里後壁4號',
                'telephone' => '06 6872744',
            ],
            71 => 
            [
                'id' => 1072,
                'name' => '東山分駐所',
                'name_in_en' => 'Dongshan Police Station',
                'zip_code' => 733,
                'address' => '臺南市東山區青葉路二段49號',
                'telephone' => '06 6800024',
            ],
            72 => 
            [
                'id' => 1073,
                'name' => '菁寮派出所',
                'name_in_en' => 'Jingliao Police Station',
                'zip_code' => 731,
                'address' => '臺南市後壁區菁寮里菁寮77號',
                'telephone' => '06 6621401',
            ],
            73 => 
            [
                'id' => 1074,
                'name' => '長安派出所',
                'name_in_en' => 'Jhengan Police Station',
                'zip_code' => 731,
                'address' => '臺南市後壁區頂長里長短樹4號',
                'telephone' => '06 6622664',
            ],
            74 => 
            [
                'id' => 1075,
                'name' => '安溪派出所',
                'name_in_en' => 'Ansi Police Station',
                'zip_code' => 731,
                'address' => '臺南市後壁區長安里中寮59號',
                'telephone' => '06 6361302',
            ],
            75 => 
            [
                'id' => 1076,
                'name' => '玉豐派出所',
                'name_in_en' => 'Yufong Police Station',
                'zip_code' => 732,
                'address' => '臺南市白河區玉豐里海豐厝87號',
                'telephone' => '06 6854887',
            ],
            76 => 
            [
                'id' => 1077,
                'name' => '竹門派出所',
                'name_in_en' => 'Jhumen Police Station',
                'zip_code' => 732,
                'address' => '臺南市白河區竹門里竹子門125號',
                'telephone' => '06 6854324',
            ],
            77 => 
            [
                'id' => 1078,
                'name' => '內角派出所',
                'name_in_en' => 'Neijiao Police Station',
                'zip_code' => 732,
                'address' => '臺南市白河區內角里內角30號',
                'telephone' => '06 6816374',
            ],
            78 => 
            [
                'id' => 1079,
                'name' => '河東派出所',
                'name_in_en' => 'Hedong Police Station',
                'zip_code' => 732,
                'address' => '臺南市白河區仙草里仙草7之1號',
                'telephone' => '06 6854044',
            ],
            79 => 
            [
                'id' => 1080,
                'name' => '仙草派出所',
                'name_in_en' => 'Siancao Police Station',
                'zip_code' => 732,
                'address' => '臺南市白河區仙草里仙草7之1號',
                'telephone' => '06 6854044',
            ],
            80 => 
            [
                'id' => 1081,
                'name' => '關嶺派出所',
                'name_in_en' => 'Guanling Police Station',
                'zip_code' => 732,
                'address' => '臺南市白河區關嶺里關子嶺14號',
                'telephone' => '06 6822629',
            ],
            81 => 
            [
                'id' => 1082,
                'name' => '東河派出所',
                'name_in_en' => 'Donghe Police Station',
                'zip_code' => 733,
                'address' => '臺南市東山區東河里吉貝耍16號',
                'telephone' => '06 6231630',
            ],
            82 => 
            [
                'id' => 1083,
                'name' => '東原派出所',
                'name_in_en' => 'Dongyuan Police Station',
                'zip_code' => 733,
                'address' => '臺南市東山區東原里前大埔10號',
                'telephone' => '06 6861051',
            ],
            83 => 
            [
                'id' => 1084,
                'name' => '學甲分局',
                'name_in_en' => 'Xuejia Precinct',
                'zip_code' => 726,
                'address' => '臺南市學甲區華宗路294號',
                'telephone' => '06 7832710',
            ],
            84 => 
            [
                'id' => 1085,
                'name' => '學甲派出所',
                'name_in_en' => 'Xuejia Police Station',
                'zip_code' => 726,
                'address' => '臺南市學甲區華宗路294號',
                'telephone' => '06 7833208',
            ],
            85 => 
            [
                'id' => 1086,
                'name' => '將軍分駐所',
                'name_in_en' => 'Jiangjun Police Station',
                'zip_code' => 725,
                'address' => '臺南市將軍區忠嘉里忠興190-2號',
                'telephone' => '06 7942182',
            ],
            86 => 
            [
                'id' => 1087,
                'name' => '北門分駐所',
                'name_in_en' => 'Beimen Police Station',
                'zip_code' => 727,
                'address' => '臺南市北門區北門里舊埕22號',
                'telephone' => '06 7862041',
            ],
            87 => 
            [
                'id' => 1088,
                'name' => '苓和派出所',
                'name_in_en' => 'Linghe Police Station',
                'zip_code' => 725,
                'address' => '臺南市將軍區苓仔寮里苓和100號',
                'telephone' => '06 7942855',
            ],
            88 => 
            [
                'id' => 1089,
                'name' => '將富派出所',
                'name_in_en' => 'Jiangfu Police Station',
                'zip_code' => 725,
                'address' => '臺南市將軍區將富里將富50號',
                'telephone' => '06 7942664',
            ],
            89 => 
            [
                'id' => 1090,
                'name' => '青鯤鯓派出所',
                'name_in_en' => 'Kunshen Police Station',
                'zip_code' => 725,
                'address' => '臺南市將軍區鯤鯓里鯤鯓95號',
                'telephone' => '06 7920204',
            ],
            90 => 
            [
                'id' => 1091,
                'name' => '中浯派出所',
                'name_in_en' => 'Zhongwu Police Station',
                'zip_code' => 726,
                'address' => '臺南市學甲區中洲里中洲287號',
                'telephone' => '06 7833907',
            ],
            91 => 
            [
                'id' => 1092,
                'name' => '文山派出所',
                'name_in_en' => 'Wenshan Police Station',
                'zip_code' => 727,
                'address' => '臺南市北門區文山里溪底寮56號',
                'telephone' => '06 7862324',
            ],
            92 => 
            [
                'id' => 1093,
                'name' => '蚵寮派出所',
                'name_in_en' => 'Keliao Police Station',
                'zip_code' => 727,
                'address' => '臺南市北門區蚵寮里蚵寮62之9號',
                'telephone' => '06 7860121',
            ],
            93 => 
            [
                'id' => 1094,
                'name' => '宅港派出所',
                'name_in_en' => 'Zhaigang Police Station',
                'zip_code' => 726,
                'address' => '臺南市學甲區宅港里宅子港52號',
                'telephone' => '06 7833904',
            ],
            94 => 
            [
                'id' => 1095,
                'name' => '頂洲派出所',
                'name_in_en' => 'Dingzhou Police Station',
                'zip_code' => 726,
                'address' => '臺南市學甲區三慶里頂洲110之1號',
                'telephone' => '06 7810040',
            ],
            95 => 
            [
                'id' => 1096,
                'name' => '佳里分局',
                'name_in_en' => 'Jiali Precinct',
                'zip_code' => 722,
                'address' => '臺南市佳里區忠孝路7號',
                'telephone' => '06 7222012',
            ],
            96 => 
            [
                'id' => 1097,
                'name' => '佳里派出所',
                'name_in_en' => 'Jiali Police Station',
                'zip_code' => 722,
                'address' => '臺南市佳里區忠孝路7號',
                'telephone' => '06 7224145',
            ],
            97 => 
            [
                'id' => 1098,
                'name' => '西港分駐所',
                'name_in_en' => 'Sigang Police Station',
                'zip_code' => 723,
                'address' => '臺南市西港區中山路337號',
                'telephone' => '06 7952045',
            ],
            98 => 
            [
                'id' => 1099,
                'name' => '七股分駐所',
                'name_in_en' => 'Cigu Police Station',
                'zip_code' => 724,
                'address' => '臺南市七股區玉城里玉城24號',
                'telephone' => '06 7872154',
            ],
            99 => 
            [
                'id' => 1100,
                'name' => '子龍派出所',
                'name_in_en' => 'Zihlong Police Station',
                'zip_code' => 722,
                'address' => '臺南市佳里區子龍里5鄰96號',
                'telephone' => '06 7262290',
            ],
            100 => 
            [
                'id' => 1101,
                'name' => '後營派出所',
                'name_in_en' => 'Houying Police Station',
                'zip_code' => 723,
                'address' => '臺南市佳里區子龍里96號',
                'telephone' => '06 7952644',
            ],
            101 => 
            [
                'id' => 1102,
                'name' => '塭內派出所',
                'name_in_en' => 'Wunnei Police Station',
                'zip_code' => 722,
                'address' => '臺南市佳里區塭仔內84號',
                'telephone' => '06 7891415',
            ],
            102 => 
            [
                'id' => 1103,
                'name' => '竹橋派出所',
                'name_in_en' => 'Jhuciao Police Station',
                'zip_code' => 724,
                'address' => '臺南市七股區竹橋里11鄰125號',
                'telephone' => '06 7891002',
            ],
            103 => 
            [
                'id' => 1104,
                'name' => '三股派出所',
                'name_in_en' => 'Sangu Police Station',
                'zip_code' => 724,
                'address' => '臺南市七股區三股里7鄰72號',
                'telephone' => '06 7881404',
            ],
            104 => 
            [
                'id' => 1105,
                'name' => '中鹽派出所',
                'name_in_en' => 'Jhongyan Police Station',
                'zip_code' => 724,
                'address' => '臺南市七股區中寮里23之65號',
                'telephone' => '06 7800213',
            ],
            105 => 
            [
                'id' => 1106,
                'name' => '延平派出所',
                'name_in_en' => 'Yanping Police Station',
                'zip_code' => 722,
                'address' => '臺南市佳里區頂廍里頂廍118號',
                'telephone' => '06 7223094',
            ],
            106 => 
            [
                'id' => 1107,
                'name' => '佳興派出所',
                'name_in_en' => 'Jiasing Police Station',
                'zip_code' => 722,
                'address' => '臺南市佳里區興化里6鄰441號',
                'telephone' => '06 7261404',
            ],
            107 => 
            [
                'id' => 1108,
                'name' => '後港派出所',
                'name_in_en' => 'Hougang Police Station',
                'zip_code' => 724,
                'address' => '臺南市七股區大潭里2鄰28號',
                'telephone' => '06 7941924',
            ],
            108 => 
            [
                'id' => 1109,
                'name' => '麻豆分局',
                'name_in_en' => 'Madou Precinct',
                'zip_code' => 721,
                'address' => '臺南市麻豆區興國路6號',
                'telephone' => '06 5722031',
            ],
            109 => 
            [
                'id' => 1110,
                'name' => '麻豆派出所',
                'name_in_en' => 'Madou Police Station',
                'zip_code' => 721,
                'address' => '臺南市麻豆區興國路6號',
                'telephone' => '06 5722104',
            ],
            110 => 
            [
                'id' => 1111,
                'name' => '下營分駐所',
                'name_in_en' => 'Shiaying Police Station',
                'zip_code' => 735,
                'address' => '臺南市下營區中山路1段226號',
                'telephone' => '06 6892032',
            ],
            111 => 
            [
                'id' => 1112,
                'name' => '官田分駐所',
                'name_in_en' => 'Guantian Police Station',
                'zip_code' => 720,
                'address' => '臺南市官田區中山路1段131號',
                'telephone' => '06 5791800',
            ],
            112 => 
            [
                'id' => 1113,
                'name' => '茅港派出所',
                'name_in_en' => 'Maugang Police Station',
                'zip_code' => 735,
                'address' => '臺南市下營區茅港里茅港尾298號',
                'telephone' => '06 6892454',
            ],
            113 => 
            [
                'id' => 1114,
                'name' => '鳳林派出所',
                'name_in_en' => 'Fenglin Police Station',
                'zip_code' => 734,
                'address' => '臺南市六甲區中社里林鳳營154號',
                'telephone' => '06 6982390',
            ],
            114 => 
            [
                'id' => 1115,
                'name' => '總爺派出所',
                'name_in_en' => 'Tzungya Police Station',
                'zip_code' => 721,
                'address' => '臺南市麻豆區南勢里南勢93號',
                'telephone' => '06 5724310',
            ],
            115 => 
            [
                'id' => 1116,
                'name' => '安業派出所',
                'name_in_en' => 'Anya Police Station',
                'zip_code' => 721,
                'address' => '臺南市麻豆區安業里安業112號',
                'telephone' => '06 5722804',
            ],
            116 => 
            [
                'id' => 1117,
                'name' => '埤頭派出所',
                'name_in_en' => 'Pitou Police Station',
                'zip_code' => 721,
                'address' => '臺南市麻豆區小埤里埤頭5號',
                'telephone' => '06 5701654',
            ],
            117 => 
            [
                'id' => 1118,
                'name' => '拔林派出所',
                'name_in_en' => 'Balin Police Station',
                'zip_code' => 720,
                'address' => '臺南市官田區拔林里拔子林74號',
                'telephone' => '06 6901362',
            ],
            118 => 
            [
                'id' => 1119,
                'name' => '六甲分駐所',
                'name_in_en' => 'Lioujia Police Station',
                'zip_code' => 734,
                'address' => '臺南市六甲區中山路210號',
                'telephone' => '06 6982139',
            ],
            119 => 
            [
                'id' => 1120,
                'name' => '湖山派出所',
                'name_in_en' => 'Kushan Police Station',
                'zip_code' => 720,
                'address' => '臺南市官田區嘉南里嘉南41號',
                'telephone' => '06 6982533',
            ],
            120 => 
            [
                'id' => 1121,
                'name' => '大丘派出所',
                'name_in_en' => 'Dachiou Police Station',
                'zip_code' => 734,
                'address' => '臺南市六甲區大丘里大丘園5號',
                'telephone' => '06 6981835',
            ],
            121 => 
            [
                'id' => 1122,
                'name' => '官鎮派出所',
                'name_in_en' => 'Guanjen Police Station',
                'zip_code' => 720,
                'address' => '臺南市官田區官田里官田383號',
                'telephone' => '06 6901160',
            ],
            122 => 
            [
                'id' => 1123,
                'name' => '善化分局',
                'name_in_en' => 'Shanhua Precinct',
                'zip_code' => 741,
                'address' => '臺南市善化區興農路461號',
                'telephone' => '06 5817434',
            ],
            123 => 
            [
                'id' => 1124,
                'name' => '大內分駐所',
                'name_in_en' => 'Danei Police Station',
                'zip_code' => 742,
                'address' => '臺南市大內區石城里石仔瀨74號',
                'telephone' => '06 5761039',
            ],
            124 => 
            [
                'id' => 1125,
                'name' => '二溪派出所',
                'name_in_en' => 'Erxi Police Station',
                'zip_code' => 742,
                'address' => '臺南市大內區石城里石仔瀨74號',
                'telephone' => '06 5761039',
            ],
            125 => 
            [
                'id' => 1126,
                'name' => '安定分駐所',
                'name_in_en' => 'Anding Police Station',
                'zip_code' => 745,
                'address' => '臺南市安定區保西里安定443號',
                'telephone' => '06 5922277',
            ],
            126 => 
            [
                'id' => 1127,
                'name' => '善化派出所',
                'name_in_en' => 'Shanhua Police Station',
                'zip_code' => 741,
                'address' => '臺南市善化區中山路353之1號',
                'telephone' => '06 5817007',
            ],
            127 => 
            [
                'id' => 1128,
                'name' => '茄拔派出所',
                'name_in_en' => 'Jiaba Police Station',
                'zip_code' => 741,
                'address' => '臺南市善化區嘉南里茄拔350號',
                'telephone' => '06 5837379',
            ],
            128 => 
            [
                'id' => 1129,
                'name' => '東昌派出所',
                'name_in_en' => 'Dongchang Police Station',
                'zip_code' => 741,
                'address' => '臺南市善化區嘉南里茄拔350號',
                'telephone' => '06 5837379',
            ],
            129 => 
            [
                'id' => 1130,
                'name' => '溪美派出所',
                'name_in_en' => 'Ximei Police Station',
                'zip_code' => 741,
                'address' => '臺南市善化區溪美里溪尾115號',
                'telephone' => '06 5817981',
            ],
            130 => 
            [
                'id' => 1131,
                'name' => '蘇厝派出所',
                'name_in_en' => 'Sucuo Police Station',
                'zip_code' => 745,
                'address' => '臺南市安定區蘇林里蘇厝70號',
                'telephone' => '06 5921514',
            ],
            131 => 
            [
                'id' => 1132,
                'name' => '港口派出所',
                'name_in_en' => 'Gangkou Police Station',
                'zip_code' => 745,
                'address' => '臺南市安定區港南里港口1之13號',
                'telephone' => '06 5932235',
            ],
            132 => 
            [
                'id' => 1133,
                'name' => '海寮派出所',
                'name_in_en' => 'Hailiao Police Station',
                'zip_code' => 745,
                'address' => '臺南市安定區海寮里海寮126號',
                'telephone' => '06 5931251',
            ],
            133 => 
            [
                'id' => 1134,
                'name' => '頭社派出所',
                'name_in_en' => 'Toushe Police Station',
                'zip_code' => 742,
                'address' => '臺南市大內區二溪里150號',
                'telephone' => '06 5761564',
            ],
            134 => 
            [
                'id' => 1135,
                'name' => '潭頂派出所',
                'name_in_en' => 'Tanding Police Station',
                'zip_code' => 744,
                'address' => '臺南市新市區潭頂里398號',
                'telephone' => '06 5991934',
            ],
            135 => 
            [
                'id' => 1136,
                'name' => '新市分駐所',
                'name_in_en' => 'Xinshi  Police Station',
                'zip_code' => 744,
                'address' => '臺南市新市區新市里復興路2號',
                'telephone' => '06 5993019',
            ],
            136 => 
            [
                'id' => 1137,
                'name' => '玉井分局',
                'name_in_en' => 'yujing precinct',
                'zip_code' => 714,
                'address' => '臺南市玉井區玉田里中山路2號',
                'telephone' => '06 5742007',
            ],
            137 => 
            [
                'id' => 1138,
                'name' => '玉井派出所',
                'name_in_en' => 'yujing police station',
                'zip_code' => 714,
                'address' => '臺南市玉井區玉田里中山路2號',
                'telephone' => '06 5742479',
            ],
            138 => 
            [
                'id' => 1139,
                'name' => '望明派出所',
                'name_in_en' => 'wangming police station',
                'zip_code' => 714,
                'address' => '臺南市玉井區玉田里中山路2號',
                'telephone' => '06 5742445',
            ],
            139 => 
            [
                'id' => 1140,
                'name' => '楠西分駐所',
                'name_in_en' => 'nansi police station',
                'zip_code' => 715,
                'address' => '臺南市楠西區中正路224號',
                'telephone' => '06 5751252',
            ],
            140 => 
            [
                'id' => 1141,
                'name' => '鹿田派出所',
                'name_in_en' => 'lutian police station',
                'zip_code' => 715,
                'address' => '臺南市楠西區中正路224號',
                'telephone' => '06 5751183',
            ],
            141 => 
            [
                'id' => 1142,
                'name' => '南化分駐所',
                'name_in_en' => 'nanhua police station',
                'zip_code' => 716,
                'address' => '臺南市南化區南化里170號',
                'telephone' => '06 5771179',
            ],
            142 => 
            [
                'id' => 1143,
                'name' => '玉山派出所',
                'name_in_en' => 'yushan police station',
                'zip_code' => 716,
                'address' => '臺南市南化區玉山里54號',
                'telephone' => '06 5772058',
            ],
            143 => 
            [
                'id' => 1144,
                'name' => '北寮派出所',
                'name_in_en' => 'beiliao police station',
                'zip_code' => 716,
                'address' => '臺南市南化區玉山里54號',
                'telephone' => '06 5772057',
            ],
            144 => 
            [
                'id' => 1145,
                'name' => '新化分局',
                'name_in_en' => 'Sinhua precinct',
                'zip_code' => 712,
                'address' => '臺南市新化區中山路91號',
                'telephone' => '06-5902003',
            ],
            145 => 
            [
                'id' => 1146,
                'name' => '新化派出所',
                'name_in_en' => 'Sinhua Police Station',
                'zip_code' => 712,
                'address' => '臺南市新化區中山路91號',
                'telephone' => '06 5901022',
            ],
            146 => 
            [
                'id' => 1147,
                'name' => '左鎮分駐所',
                'name_in_en' => 'Zuojhen Police Station',
                'zip_code' => 713,
                'address' => '臺南市左鎮區左鎮里122號',
                'telephone' => '06 5731017',
            ],
            147 => 
            [
                'id' => 1148,
                'name' => '岡林派出所',
                'name_in_en' => 'Ganglin Police Station',
                'zip_code' => 713,
                'address' => '臺南市左鎮區左鎮里122號',
                'telephone' => '06 5731017',
            ],
            148 => 
            [
                'id' => 1149,
                'name' => '山上分駐所',
                'name_in_en' => 'Shanshang Police Station',
                'zip_code' => 743,
                'address' => '臺南市山上區山上里山上35號',
                'telephone' => '06 5781019',
            ],
            149 => 
            [
                'id' => 1150,
                'name' => '唪口派出所',
                'name_in_en' => 'Fongkou Police Station',
                'zip_code' => 712,
                'address' => '臺南市新化區中山路660巷50號',
                'telephone' => '06 5982924',
            ],
            150 => 
            [
                'id' => 1151,
                'name' => '知義派出所',
                'name_in_en' => 'Jhihyi Police Station',
                'zip_code' => 712,
                'address' => '臺南市新化區山腳里頂山腳182之1號',
                'telephone' => '06 5902949',
            ],
            151 => 
            [
                'id' => 1152,
                'name' => '那拔派出所',
                'name_in_en' => 'Naba Police Station',
                'zip_code' => 712,
                'address' => '臺南市新化區那拔里那拔林75號',
                'telephone' => '06 5911051',
            ],
            152 => 
            [
                'id' => 1153,
                'name' => '歸仁分局',
                'name_in_en' => 'Guiren Police Precinct',
                'zip_code' => 711,
                'address' => '臺南市歸仁區六甲村中正南路1段1209號',
                'telephone' => '06 2304964',
            ],
            153 => 
            [
                'id' => 1154,
                'name' => '歸仁派出所',
                'name_in_en' => 'Gueiren Police Station',
                'zip_code' => 711,
                'address' => '臺南市歸仁區忠孝路160號',
                'telephone' => '06 2304028',
            ],
            154 => 
            [
                'id' => 1155,
                'name' => '仁德分駐所',
                'name_in_en' => 'Rende Police Station',
                'zip_code' => 717,
                'address' => '臺南市仁德區中山路624號',
                'telephone' => '06 2702664',
            ],
            155 => 
            [
                'id' => 1156,
                'name' => '大潭派出所',
                'name_in_en' => 'Datan Police Station',
                'zip_code' => 711,
                'address' => '臺南市歸仁區長榮路1段295號',
                'telephone' => '06 2781450',
            ],
            156 => 
            [
                'id' => 1157,
                'name' => '依仁派出所',
                'name_in_en' => 'Yiren Police Station',
                'zip_code' => 717,
                'address' => '臺南市仁德區中洲里中洲12號',
                'telephone' => '06 2661245',
            ],
            157 => 
            [
                'id' => 1158,
                'name' => '文賢派出所',
                'name_in_en' => 'Wunsian Police Station',
                'zip_code' => 717,
                'address' => '臺南市仁德區二行路2段600號',
                'telephone' => '06 2661788',
            ],
            158 => 
            [
                'id' => 1159,
                'name' => '太廟派出所',
                'name_in_en' => 'Taimiao Police Station',
                'zip_code' => 717,
                'address' => '臺南市仁德區太子路461號',
                'telephone' => '06 2726472',
            ],
            159 => 
            [
                'id' => 1160,
                'name' => '德南派出所',
                'name_in_en' => 'Denan Police Station',
                'zip_code' => 717,
                'address' => '臺南市仁德區中正路2段271號',
                'telephone' => '06 2791341',
            ],
            160 => 
            [
                'id' => 1161,
                'name' => '媽廟派出所',
                'name_in_en' => 'Mamiao Police Station',
                'zip_code' => 711,
                'address' => '臺南市歸仁區中正北路3段100號',
                'telephone' => '06 2309731',
            ],
            161 => 
            [
                'id' => 1162,
                'name' => '保東派出所',
                'name_in_en' => 'Baodong Police Station',
                'zip_code' => 718,
                'address' => '臺南市關廟區關新路1段836號',
                'telephone' => '06 5955799',
            ],
            162 => 
            [
                'id' => 1163,
                'name' => '歸南派出所',
                'name_in_en' => 'Gueinan Police Station',
                'zip_code' => 711,
                'address' => '臺南市歸仁區中正南路1段1209號',
                'telephone' => '06 2307887',
            ],
            163 => 
            [
                'id' => 1164,
                'name' => '關廟分駐所',
                'name_in_en' => 'Guanmiao Police Station',
                'zip_code' => 718,
                'address' => '臺南市關廟區文衡路19號',
                'telephone' => '06 5952013',
            ],
            164 => 
            [
                'id' => 1165,
                'name' => '龍崎分駐所',
                'name_in_en' => 'Longci Police Station',
                'zip_code' => 719,
                'address' => '臺南市龍崎區崎頂里新市子37號',
                'telephone' => '06 5941010',
            ],
            165 => 
            [
                'id' => 1166,
                'name' => '龍船派出所',
                'name_in_en' => 'Longchuan Police Station',
                'zip_code' => 719,
                'address' => '臺南市龍崎區石糟里米市園1號',
                'telephone' => '06 5941099',
            ],
            166 => 
            [
                'id' => 1167,
                'name' => '南雄派出所',
                'name_in_en' => 'Nansyong Police Station',
                'zip_code' => 718,
                'address' => '臺南市關廟區田大路1號',
                'telephone' => '06 5551907',
            ],
            167 => 
            [
                'id' => 1168,
                'name' => '永康分局',
                'name_in_en' => 'Yongkang Police Precinct',
                'zip_code' => 710,
                'address' => '臺南市永康區東橋七路320號',
                'telephone' => '06 2333324',
            ],
            168 => 
            [
                'id' => 1169,
                'name' => '龍潭派出所',
                'name_in_en' => 'Lungtan Police Station',
                'zip_code' => 710,
                'address' => '臺南市永康區龍埔街137號',
                'telephone' => '06 2327954',
            ],
            169 => 
            [
                'id' => 1170,
                'name' => '永康派出所',
                'name_in_en' => 'Yongkang  Police Station',
                'zip_code' => 710,
                'address' => '臺南市永康區中山北路2號',
                'telephone' => '06 2326081',
            ],
            170 => 
            [
                'id' => 1171,
                'name' => '鹽行派出所',
                'name_in_en' => 'Henhang   Police Station',
                'zip_code' => 710,
                'address' => '臺南市永康區中正北路65號',
                'telephone' => '06 2531444',
            ],
            171 => 
            [
                'id' => 1172,
                'name' => '大灣派出所',
                'name_in_en' => 'Tawan  Police Station',
                'zip_code' => 710,
                'address' => '臺南市永康區民族路478號',
                'telephone' => '06 2712274',
            ],
            172 => 
            [
                'id' => 1173,
                'name' => '復興派出所',
                'name_in_en' => 'Fushin  Police Station',
                'zip_code' => 710,
                'address' => '臺南市永康區中華路34號',
                'telephone' => '06 3115874',
            ],
            173 => 
            [
                'id' => 1174,
                'name' => '永信派出所',
                'name_in_en' => 'Yongxin Police Station',
                'zip_code' => 710,
                'address' => '臺南市永康區國華街102巷110號',
                'telephone' => '06 2014059',
            ],
            174 => 
            [
                'id' => 1175,
                'name' => '大橋派出所',
                'name_in_en' => 'Tachia  Police Station',
                'zip_code' => 710,
                'address' => '臺南市永康區東橋七路320號',
                'telephone' => '06 2044835',
            ],
            175 => 
            [
                'id' => 1176,
                'name' => '高雄市政府警察局',
                'name_in_en' => 'Kaohsiung City Police Department',
                'zip_code' => 801,
                'address' => '高雄市前金區中正四路260號',
                'telephone' => '07 2155555',
            ],
            176 => 
            [
                'id' => 1177,
                'name' => '三民第一分局',
                'name_in_en' => 'Sanmin First Precinct',
                'zip_code' => 807,
                'address' => '高雄市三民區同盟一路367號',
                'telephone' => '07 3118675',
            ],
            177 => 
            [
                'id' => 1178,
                'name' => '哈爾濱街派出所',
                'name_in_en' => 'Haerbin St. Police Station',
                'zip_code' => 807,
                'address' => '高雄市三民區哈爾濱街118號',
                'telephone' => '07 3110785',
            ],
            178 => 
            [
                'id' => 1179,
                'name' => '十全路派出所',
                'name_in_en' => 'Shihcyuan Rd. Police Station',
                'zip_code' => 807,
                'address' => '高雄市三民區十全一路86號',
                'telephone' => '07 3115807',
            ],
            179 => 
            [
                'id' => 1180,
                'name' => '三民派出所',
                'name_in_en' => 'Sanmin Police Station',
                'zip_code' => 807,
                'address' => '高雄市三民區建國三路188號',
                'telephone' => '07 2211460',
            ],
            180 => 
            [
                'id' => 1181,
                'name' => '長明派出所',
                'name_in_en' => 'Jhangming St. Police Station',
                'zip_code' => 807,
                'address' => '高雄市三民區南華路253號',
                'telephone' => '07 2355098',
            ],
            181 => 
            [
                'id' => 1182,
                'name' => '前鎮分局',
                'name_in_en' => 'Cianjhen Precinct',
                'zip_code' => 806,
                'address' => '高雄市前鎮區一心一路286號',
                'telephone' => '07 7242372',
            ],
            182 => 
            [
                'id' => 1183,
                'name' => '瑞隆路派出所',
                'name_in_en' => 'Rueilong Police Station',
                'zip_code' => 806,
                'address' => '高雄市前鎮區班超路49號',
                'telephone' => '07 8221183',
            ],
            183 => 
            [
                'id' => 1184,
                'name' => '草衙派出所',
                'name_in_en' => 'Caoya Police Station',
                'zip_code' => 806,
                'address' => '高雄市前鎮區鎮中路150號',
                'telephone' => '07 8213705',
            ],
            184 => 
            [
                'id' => 1185,
                'name' => '前鎮街派出所',
                'name_in_en' => 'Cianjhen st. Police Station',
                'zip_code' => 806,
                'address' => '高雄市前鎮區前鎮街260號',
                'telephone' => '07 8310309',
            ],
            185 => 
            [
                'id' => 1186,
                'name' => '一心路派出所',
                'name_in_en' => 'Yisin Rd. Police Station',
                'zip_code' => 806,
                'address' => '高雄市前鎮區一心一路286號',
                'telephone' => '07 7264661',
            ],
            186 => 
            [
                'id' => 1187,
                'name' => '復興路派出所',
                'name_in_en' => 'Fusing Rd. Police Station',
                'zip_code' => 806,
                'address' => '高雄市前鎮區復興三路96號',
                'telephone' => '07 3342434',
            ],
            187 => 
            [
                'id' => 1188,
                'name' => '左營分局',
                'name_in_en' => 'Zuoying Precinct',
                'zip_code' => 813,
                'address' => '高雄市左營區博愛三路268號',
                'telephone' => '07 3461122',
            ],
            188 => 
            [
                'id' => 1189,
                'name' => '博愛四路派出所',
                'name_in_en' => 'Boai 4th Rd.Police Station',
                'zip_code' => 813,
                'address' => '高雄市左營區博愛四路437號',
                'telephone' => '07 3487976',
            ],
            189 => 
            [
                'id' => 1190,
                'name' => '四海派出所',
                'name_in_en' => 'Sihhai Police Station',
                'zip_code' => 813,
                'address' => '高雄市左營區明建里自治新村221之3號',
                'telephone' => '07 5811544',
            ],
            190 => 
            [
                'id' => 1191,
                'name' => '新莊派出所',
                'name_in_en' => 'Sinjhuang  Police Station',
                'zip_code' => 813,
                'address' => '高雄市左營區新庄仔路772號',
                'telephone' => '07 5562630',
            ],
            191 => 
            [
                'id' => 1192,
                'name' => '啟文派出所',
                'name_in_en' => 'Ciwun  Police Station',
                'zip_code' => 813,
                'address' => '高雄市左營區中華一路2之12號',
                'telephone' => '07 5882999',
            ],
            192 => 
            [
                'id' => 1193,
                'name' => '舊城派出所',
                'name_in_en' => 'Jioucheng  Police Station',
                'zip_code' => 813,
                'address' => '高雄市左營區左營大路101號',
                'telephone' => '07 5853036',
            ],
            193 => 
            [
                'id' => 1194,
                'name' => '左營派出所',
                'name_in_en' => 'Zuoying  Police Station',
                'zip_code' => 813,
                'address' => '高雄市左營區進學路1號',
                'telephone' => '07 5813019',
            ],
            194 => 
            [
                'id' => 1195,
                'name' => '文自派出所',
                'name_in_en' => 'Wunzih  Police Station',
                'zip_code' => 813,
                'address' => '高雄市左營區博愛三路268號',
                'telephone' => '07 3501311',
            ],
            195 => 
            [
                'id' => 1196,
                'name' => '小港分局',
                'name_in_en' => 'Xiaogang  Precinct',
                'zip_code' => 812,
                'address' => '高雄市小港區小港路20號',
                'telephone' => '07 8019207',
            ],
            196 => 
            [
                'id' => 1197,
                'name' => '漢民路派出所',
                'name_in_en' => 'Hanmin Police Station',
                'zip_code' => 812,
                'address' => '高雄市小港區宏平路367號',
                'telephone' => '07 8064590',
            ],
            197 => 
            [
                'id' => 1198,
                'name' => '大林派出所',
                'name_in_en' => 'Dalin Police Station',
                'zip_code' => 812,
                'address' => '高雄市小港區鳳林路116號',
                'telephone' => '07 8712237',
            ],
            198 => 
            [
                'id' => 1199,
                'name' => '高松派出所',
                'name_in_en' => 'Gaosong Police Station',
                'zip_code' => 812,
                'address' => '高雄市小港區高松路25號',
                'telephone' => '07 8010795',
            ],
            199 => 
            [
                'id' => 1200,
                'name' => '小港派出所',
                'name_in_en' => 'Xiaogang Police Station',
                'zip_code' => 812,
                'address' => '高雄市小港區平和南路119號',
                'telephone' => '07 8215913',
            ],
            200 => 
            [
                'id' => 1201,
                'name' => '桂陽派出所',
                'name_in_en' => 'Gueiyang Police Station',
                'zip_code' => 812,
                'address' => '高雄市小港區桂陽路338號',
                'telephone' => '07 7912688',
            ],
            201 => 
            [
                'id' => 1202,
                'name' => '新興分局',
                'name_in_en' => 'Sinsing Precinct',
                'zip_code' => 801,
                'address' => '高雄市新興區中山一路100號',
                'telephone' => '07 2212057',
            ],
            202 => 
            [
                'id' => 1203,
                'name' => '五福二路派出所',
                'name_in_en' => 'Wufu 2nd Rd.Police Station',
                'zip_code' => 800,
                'address' => '高雄市新興區五福二路222號',
                'telephone' => '07 2316481',
            ],
            203 => 
            [
                'id' => 1204,
                'name' => '中正三路派出所',
                'name_in_en' => 'Jhongjheng 3rd Rd.Police Station',
                'zip_code' => 800,
                'address' => '高雄市新興區中正三路3號',
                'telephone' => '07 2270189',
            ],
            204 => 
            [
                'id' => 1205,
                'name' => '中山路派出所',
                'name_in_en' => 'Jhongshan Police Station',
                'zip_code' => 800,
                'address' => '高雄市新興區中山一路100號',
                'telephone' => '07 2211209',
            ],
            205 => 
            [
                'id' => 1206,
                'name' => '自強路派出所',
                'name_in_en' => 'Zihciang  Rd.Police Station',
                'zip_code' => 801,
                'address' => '高雄市前金區自強二路63號',
                'telephone' => '07 2910188',
            ],
            206 => 
            [
                'id' => 1207,
                'name' => '前金分駐所',
                'name_in_en' => 'Cianjin  Police Station',
                'zip_code' => 801,
                'address' => '高雄市前金區中正四路174號',
                'telephone' => '07 2212901',
            ],
            207 => 
            [
                'id' => 1208,
                'name' => '苓雅分局',
                'name_in_en' => 'Lingya Precinct',
                'zip_code' => 802,
                'address' => '高雄市苓雅區苓雅一路367號',
                'telephone' => '07 3353760',
            ],
            208 => 
            [
                'id' => 1209,
                'name' => '福德二路派出所',
                'name_in_en' => 'Fude 2nd Rd. Police Station',
                'zip_code' => 802,
                'address' => '高雄市苓雅區福德二路77號',
                'telephone' => '07 7233343',
            ],
            209 => 
            [
                'id' => 1210,
                'name' => '凱旋路派出所',
                'name_in_en' => 'Kaisyuan Rd. Police Station',
                'zip_code' => 802,
                'address' => '高雄市苓雅區凱旋二路145號',
                'telephone' => '07 2236222',
            ],
            210 => 
            [
                'id' => 1211,
                'name' => '三多路派出所',
                'name_in_en' => 'Sanduo Rd. Police Station',
                'zip_code' => 802,
                'address' => '高雄市苓雅區三多一路168號',
                'telephone' => '07 7615655',
            ],
            211 => 
            [
                'id' => 1212,
                'name' => '民權路派出所',
                'name_in_en' => 'Mincyuan Rd. Police Station',
                'zip_code' => 802,
                'address' => '高雄市苓雅區四維二路369號',
                'telephone' => '07 3333631',
            ],
            212 => 
            [
                'id' => 1213,
                'name' => '成功路派出所',
                'name_in_en' => 'Chenggong Rd. Police Station',
                'zip_code' => 802,
                'address' => '高雄市苓雅區成功一路136號',
                'telephone' => '07 3334793',
            ],
            213 => 
            [
                'id' => 1214,
                'name' => '鹽埕分局',
                'name_in_en' => 'Yancheng Precinct',
                'zip_code' => 803,
                'address' => '高雄市鹽埕區建國四路337號',
                'telephone' => '07 5513424',
            ],
            214 => 
            [
                'id' => 1215,
                'name' => '建國四路派出所',
                'name_in_en' => 'Gianguo 4th Rd.Police Station',
                'zip_code' => 803,
                'address' => '高雄市鹽埕區建國四路337號',
                'telephone' => '07 5512832',
            ],
            215 => 
            [
                'id' => 1216,
                'name' => '五福四路派出所',
                'name_in_en' => 'Wufu 4th Rd.Police Station',
                'zip_code' => 803,
                'address' => '高雄市鹽埕區五福四路107號',
                'telephone' => '07 5512968',
            ],
            216 => 
            [
                'id' => 1217,
                'name' => '七賢路派出所',
                'name_in_en' => 'Cisian Rd.Police Station',
                'zip_code' => 803,
                'address' => '高雄市鹽埕區七賢三路170號',
                'telephone' => '07 5513534',
            ],
            217 => 
            [
                'id' => 1218,
                'name' => '鼓山分局',
                'name_in_en' => 'Gushan Precinct',
                'zip_code' => 804,
                'address' => '高雄市鼓山區雄峰路18號',
                'telephone' => '07 5514005',
            ],
            218 => 
            [
                'id' => 1219,
                'name' => '中洲派出所',
                'name_in_en' => 'Jhongjhou Police Station',
                'zip_code' => 805,
                'address' => '高雄市旗津區中洲二路66號',
                'telephone' => '07 5712328',
            ],
            219 => 
            [
                'id' => 1220,
                'name' => '旗津分駐所',
                'name_in_en' => 'Cijin Police Station',
                'zip_code' => 805,
                'address' => '高雄市旗津區廟前路137號',
                'telephone' => '07 5715492',
            ],
            220 => 
            [
                'id' => 1221,
                'name' => '新濱派出所',
                'name_in_en' => 'Sinbin Police Station',
                'zip_code' => 804,
                'address' => '高雄市鼓山區臨海三路2號',
                'telephone' => '07 5514863',
            ],
            221 => 
            [
                'id' => 1222,
                'name' => '鼓山派出所',
                'name_in_en' => 'Gushan Police Station',
                'zip_code' => 804,
                'address' => '高雄市鼓山區鼓山二路81號',
                'telephone' => '07 5512673',
            ],
            222 => 
            [
                'id' => 1223,
                'name' => '內惟派出所',
                'name_in_en' => 'Neiwei Police Station',
                'zip_code' => 804,
                'address' => '高雄市鼓山區九如四路1139號',
                'telephone' => '07 5826970',
            ],
            223 => 
            [
                'id' => 1224,
                'name' => '龍華派出所',
                'name_in_en' => 'Longhua Police Station',
                'zip_code' => 804,
                'address' => '高雄市鼓山區中華一路301號',
                'telephone' => '07 5551802',
            ],
            224 => 
            [
                'id' => 1225,
                'name' => '楠梓分局',
                'name_in_en' => 'Nanzih Precinct',
                'zip_code' => 811,
                'address' => '高雄市楠梓區外環西路119號',
                'telephone' => '07 3653190',
            ],
            225 => 
            [
                'id' => 1226,
                'name' => '翠屏派出所',
                'name_in_en' => 'Cueiping Police Station',
                'zip_code' => 811,
                'address' => '高雄市楠梓區德祥路147號',
                'telephone' => '07 3649783',
            ],
            226 => 
            [
                'id' => 1227,
                'name' => '楠梓派出所',
                'name_in_en' => 'Nanzih Police Station',
                'zip_code' => 811,
                'address' => '高雄市楠梓區旗楠路160號',
                'telephone' => '07 3511145',
            ],
            227 => 
            [
                'id' => 1228,
                'name' => '後勁派出所',
                'name_in_en' => 'Houjin Police Station',
                'zip_code' => 811,
                'address' => '高雄市楠梓區後昌路214號',
                'telephone' => '07 3612554',
            ],
            228 => 
            [
                'id' => 1229,
                'name' => '右昌派出所',
                'name_in_en' => 'Youchang Police Station',
                'zip_code' => 811,
                'address' => '高雄市楠梓區右昌街250號',
                'telephone' => '07 3612977',
            ],
            229 => 
            [
                'id' => 1230,
                'name' => '加昌派出所',
                'name_in_en' => 'Jiachang Police Station',
                'zip_code' => 811,
                'address' => '高雄市楠梓區外環西路119號',
                'telephone' => '07 3655961',
            ],
            230 => 
            [
                'id' => 1231,
                'name' => '三民第二分局',
                'name_in_en' => 'Sanmin Second Precinct',
                'zip_code' => 807,
                'address' => '高雄市三民區覺民路366號',
                'telephone' => '07 3814093',
            ],
            231 => 
            [
                'id' => 1232,
                'name' => '鼎山派出所',
                'name_in_en' => 'Dinshan Police Station',
                'zip_code' => 807,
                'address' => '高雄市三民區鼎山街260號',
                'telephone' => '07 3907880',
            ],
            232 => 
            [
                'id' => 1233,
                'name' => '陽明派出所',
                'name_in_en' => 'Yangming Police Station',
                'zip_code' => 807,
                'address' => '高雄市三民區義華路272號',
                'telephone' => '07 3922032',
            ],
            233 => 
            [
                'id' => 1234,
                'name' => '鼎金派出所',
                'name_in_en' => 'Dingjin Police Station',
                'zip_code' => 807,
                'address' => '高雄市三民區鼎力路125號',
                'telephone' => '07 3426730',
            ],
            234 => 
            [
                'id' => 1235,
                'name' => '民族派出所',
                'name_in_en' => 'Minzu Police Station',
                'zip_code' => 807,
                'address' => '高雄市三民區民族一路208號',
                'telephone' => '07 3822653',
            ],
            235 => 
            [
                'id' => 1236,
                'name' => '覺民派出所',
                'name_in_en' => 'Jyuemin Rd. Police Station',
                'zip_code' => 807,
                'address' => '高雄市三民區覺民路366號',
                'telephone' => '07 3842108',
            ],
            236 => 
            [
                'id' => 1237,
                'name' => '六龜分局',
                'name_in_en' => 'Liouquei  Precinct',
                'zip_code' => 844,
                'address' => '高雄市六龜區民生路1號',
                'telephone' => '07 6891119',
            ],
            237 => 
            [
                'id' => 1238,
                'name' => '高中派出所',
                'name_in_en' => 'Gaojhong Police Station',
                'zip_code' => 848,
                'address' => '高雄市桃源區興中巷90號',
                'telephone' => '07 6881385',
            ],
            238 => 
            [
                'id' => 1239,
                'name' => '拉芙蘭派出所',
                'name_in_en' => 'La Fulan Police Station',
                'zip_code' => 848,
                'address' => '高雄市桃源區梅蘭里113號',
                'telephone' => '07 6866087',
            ],
            239 => 
            [
                'id' => 1240,
                'name' => '梅山派出所',
                'name_in_en' => 'Meishan Police Station',
                'zip_code' => 848,
                'address' => '高雄市桃源區梅山里52號',
                'telephone' => '07 6866170',
            ],
            240 => 
            [
                'id' => 1241,
                'name' => '茂林分駐所',
                'name_in_en' => 'Maolin Police Station',
                'zip_code' => 851,
                'address' => '高雄市茂林區茂林里茂林巷13號',
                'telephone' => '07 6801200',
            ],
            241 => 
            [
                'id' => 1242,
                'name' => '萬山派出所',
                'name_in_en' => 'Wanshan Police Station',
                'zip_code' => 851,
                'address' => '高雄市茂林區萬山里1號',
                'telephone' => '07 6801203',
            ],
            242 => 
            [
                'id' => 1243,
                'name' => '多納派出所',
                'name_in_en' => 'Duona Police Station',
                'zip_code' => 851,
                'address' => '高雄市茂林區多納里1號',
                'telephone' => '07 6801208',
            ],
            243 => 
            [
                'id' => 1244,
                'name' => '那瑪夏分駐所',
                'name_in_en' => 'Namasia Police Station',
                'zip_code' => 849,
                'address' => '高雄市那瑪夏區瑪雅里平和巷89號',
                'telephone' => '07 6701168',
            ],
            244 => 
            [
                'id' => 1245,
                'name' => '達卡努瓦派出所',
                'name_in_en' => 'Dakanuwa Police Station',
                'zip_code' => 849,
                'address' => '高雄市那瑪夏區民生里秀嶺巷87號',
                'telephone' => '07 6701118',
            ],
            245 => 
            [
                'id' => 1246,
                'name' => '森濤派出所',
                'name_in_en' => 'Sentao Police Station',
                'zip_code' => 848,
                'address' => '高雄市桃源區寶山里藤枝78號',
                'telephone' => '07 6892474',
            ],
            246 => 
            [
                'id' => 1247,
                'name' => '寶山派出所',
                'name_in_en' => 'Baoshan Police Station',
                'zip_code' => 848,
                'address' => '高雄市桃源區寶山里16號',
                'telephone' => '07 6892464',
            ],
            247 => 
            [
                'id' => 1248,
                'name' => '義寶派出所',
                'name_in_en' => 'Yibao Police Station',
                'zip_code' => 844,
                'address' => '高雄市六龜區民生路1號',
                'telephone' => '07 6891049',
            ],
            248 => 
            [
                'id' => 1249,
                'name' => '桃源分駐所',
                'name_in_en' => 'Taoyuan Police Station',
                'zip_code' => 848,
                'address' => '高雄市桃源區桃源里南進巷183號',
                'telephone' => '07 6861176',
            ],
            249 => 
            [
                'id' => 1250,
                'name' => '新威派出所',
                'name_in_en' => 'Sinwei Police Station',
                'zip_code' => 844,
                'address' => '高雄市六龜區新威路127號',
                'telephone' => '07 6871176',
            ],
            250 => 
            [
                'id' => 1251,
                'name' => '荖濃派出所',
                'name_in_en' => 'Laonong Police Station',
                'zip_code' => 844,
                'address' => '高雄市六龜區裕濃路18號',
                'telephone' => '07 6881014',
            ],
            251 => 
            [
                'id' => 1252,
                'name' => '寶來派出所',
                'name_in_en' => 'Baolai Police Station',
                'zip_code' => 844,
                'address' => '高雄市六龜區中正路21號',
                'telephone' => '07 6881170',
            ],
            252 => 
            [
                'id' => 1253,
                'name' => '建山派出所',
                'name_in_en' => 'Jianshan Police Station',
                'zip_code' => 848,
                'address' => '高雄市桃源區建山巷61號',
                'telephone' => '07 6881170',
            ],
            253 => 
            [
                'id' => 1254,
                'name' => '岡山分局',
                'name_in_en' => 'Gangshan Precince',
                'zip_code' => 820,
                'address' => '高雄市岡山區壽天路10號',
                'telephone' => '07 6212025',
            ],
            254 => 
            [
                'id' => 1255,
                'name' => '深水派出所',
                'name_in_en' => 'Shenshuei  Police Station',
                'zip_code' => 824,
                'address' => '高雄市燕巢區深興路88號',
                'telephone' => '07 6152054',
            ],
            255 => 
            [
                'id' => 1256,
                'name' => '舊港派出所',
                'name_in_en' => 'Jiougang  Police Station',
                'zip_code' => 827,
                'address' => '高雄市彌陀區舊港橫路1號',
                'telephone' => '07 6196994',
            ],
            256 => 
            [
                'id' => 1257,
                'name' => '甲圍派出所',
                'name_in_en' => 'Jiawei  Police Station',
                'zip_code' => 825,
                'address' => '高雄市橋頭區甲樹路1170號',
                'telephone' => '07 6110384',
            ],
            257 => 
            [
                'id' => 1258,
                'name' => '鳳雄派出所',
                'name_in_en' => 'Fongsyong  Police Station',
                'zip_code' => 824,
                'address' => '高雄市燕巢區鳳旗路171號',
                'telephone' => '07 6153054',
            ],
            258 => 
            [
                'id' => 1259,
                'name' => '永安分駐所',
                'name_in_en' => 'Yong-an  Police Station',
                'zip_code' => 828,
                'address' => '高雄市永安區永安路22號',
                'telephone' => '07 6912044',
            ],
            259 => 
            [
                'id' => 1260,
                'name' => '燕巢分駐所',
                'name_in_en' => 'Yanchao  Police Station',
                'zip_code' => 824,
                'address' => '高雄市燕巢區中民路585號',
                'telephone' => '07 6161402',
            ],
            260 => 
            [
                'id' => 1261,
                'name' => '橋頭分駐所',
                'name_in_en' => 'Ciaotou  Police Station',
                'zip_code' => 825,
                'address' => '高雄市橋頭區成功路156號',
                'telephone' => '07 6113555',
            ],
            261 => 
            [
                'id' => 1262,
                'name' => '梓官分駐所',
                'name_in_en' => 'Zihguan  Police Station',
                'zip_code' => 826,
                'address' => '高雄市梓官區梓官路267號',
                'telephone' => '07 6171403',
            ],
            262 => 
            [
                'id' => 1263,
                'name' => '彌陀分駐所',
                'name_in_en' => 'Mituo  Police Station',
                'zip_code' => 827,
                'address' => '高雄市彌陀區中華路16號',
                'telephone' => '07 6176405',
            ],
            263 => 
            [
                'id' => 1264,
                'name' => '赤崁派出所',
                'name_in_en' => 'Chihkan  Police Station',
                'zip_code' => 826,
                'address' => '高雄市梓官區赤崁西路12號',
                'telephone' => '07 6101404',
            ],
            264 => 
            [
                'id' => 1265,
                'name' => '嘉興派出所',
                'name_in_en' => 'Jiasing  Police Station',
                'zip_code' => 820,
                'address' => '高雄市岡山區嘉興路251號',
                'telephone' => '07 6216401',
            ],
            265 => 
            [
                'id' => 1266,
                'name' => '前峰派出所',
                'name_in_en' => 'Cianfong Police Station',
                'zip_code' => 820,
                'address' => '高雄市岡山區中華路53號',
                'telephone' => '07 6265134',
            ],
            266 => 
            [
                'id' => 1267,
                'name' => '壽天派出所',
                'name_in_en' => 'Shoutian Police Station',
                'zip_code' => 820,
                'address' => '高雄市岡山區大仁北路5號',
                'telephone' => '07 6216400',
            ],
            267 => 
            [
                'id' => 1268,
                'name' => '旗山分局',
                'name_in_en' => 'Cishan Precinct',
                'zip_code' => 842,
                'address' => '高雄市旗山區華中街1號',
                'telephone' => '07 6612001',
            ],
            268 => 
            [
                'id' => 1269,
                'name' => '旗尾派出所',
                'name_in_en' => 'Ciwei Police Station',
                'zip_code' => 842,
                'address' => '高雄市旗山區延平二路21號',
                'telephone' => '07 6614306',
            ],
            269 => 
            [
                'id' => 1270,
                'name' => '廣興派出所',
                'name_in_en' => 'Guangsing Police Station',
                'zip_code' => 843,
                'address' => '高雄市美濃區民族路100號',
                'telephone' => '07 6812794',
            ],
            270 => 
            [
                'id' => 1271,
                'name' => '廣福派出所',
                'name_in_en' => 'Guangfu Police Station',
                'zip_code' => 842,
                'address' => '高雄市旗山區旗屏二路18號',
                'telephone' => '07 6613260',
            ],
            271 => 
            [
                'id' => 1272,
                'name' => '里關派出所',
                'name_in_en' => 'Liguan Police Station',
                'zip_code' => 847,
                'address' => '高雄市甲仙區中興路44巷10號',
                'telephone' => '07 6752006',
            ],
            272 => 
            [
                'id' => 1273,
                'name' => '杉林分駐所',
                'name_in_en' => 'Shanlin Police Station',
                'zip_code' => 846,
                'address' => '高雄市杉林區上平里山仙路87之1號',
                'telephone' => '07 6771154',
            ],
            273 => 
            [
                'id' => 1274,
                'name' => '中埔派出所',
                'name_in_en' => 'Jhongpu Police Station',
                'zip_code' => 845,
                'address' => '高雄市內門區中埔里中埔36號',
                'telephone' => '07 6673308',
            ],
            274 => 
            [
                'id' => 1275,
                'name' => '嶺口派出所',
                'name_in_en' => 'Lingkou Police Station',
                'zip_code' => 842,
                'address' => '高雄市旗山區旗南三路212號',
                'telephone' => '07 6651021',
            ],
            275 => 
            [
                'id' => 1276,
                'name' => '圓潭派出所',
                'name_in_en' => 'Yuantan Police Station',
                'zip_code' => 842,
                'address' => '高雄市旗山區旗甲路3段165號',
                'telephone' => '07 6691307',
            ],
            276 => 
            [
                'id' => 1277,
                'name' => '茄興派出所',
                'name_in_en' => 'Jiasing Police Station',
                'zip_code' => 846,
                'address' => '高雄市杉林區木梓里茄苳巷144號',
                'telephone' => '07 6779274',
            ],
            277 => 
            [
                'id' => 1278,
                'name' => '甲仙分駐所',
                'name_in_en' => 'Jiasian Police Station',
                'zip_code' => 847,
                'address' => '高雄市甲仙區和安街42號',
                'telephone' => '07 6751204',
            ],
            278 => 
            [
                'id' => 1279,
                'name' => '溝坪派出所',
                'name_in_en' => 'Gouping Police Station',
                'zip_code' => 845,
                'address' => '高雄市內門區永興里頂庄9號',
                'telephone' => '07 6601670',
            ],
            279 => 
            [
                'id' => 1280,
                'name' => '內門分駐所',
                'name_in_en' => 'Neimen Police Station',
                'zip_code' => 845,
                'address' => '高雄市內門區內門里內門114號',
                'telephone' => '07 6671309',
            ],
            280 => 
            [
                'id' => 1281,
                'name' => '吉東派出所',
                'name_in_en' => 'Jidong Police Station',
                'zip_code' => 843,
                'address' => '高雄市美濃區中正路3段416號',
                'telephone' => '07 6831744',
            ],
            281 => 
            [
                'id' => 1282,
                'name' => '美濃分駐所',
                'name_in_en' => 'Meinong Police Station',
                'zip_code' => 843,
                'address' => '高雄市美濃區美中路262號',
                'telephone' => '07 6812029',
            ],
            282 => 
            [
                'id' => 1283,
                'name' => '中壇派出所',
                'name_in_en' => 'Jhongtan Police Station',
                'zip_code' => 843,
                'address' => '高雄市美濃區中興路1段636號',
                'telephone' => '07 6812789',
            ],
            283 => 
            [
                'id' => 1284,
                'name' => '大洲派出所',
                'name_in_en' => 'Dajhuo Police Station',
                'zip_code' => 842,
                'address' => '高雄市旗山區旗南二路39號',
                'telephone' => '07 6661305',
            ],
            284 => 
            [
                'id' => 1285,
                'name' => '龍肚派出所',
                'name_in_en' => 'Longdu Police Station',
                'zip_code' => 843,
                'address' => '高雄市美濃區龍肚街63號',
                'telephone' => '07 6851797',
            ],
            285 => 
            [
                'id' => 1286,
                'name' => '建國派出所',
                'name_in_en' => 'Jianguo Police Station',
                'zip_code' => 842,
                'address' => '高雄市旗山區華中街1號',
                'telephone' => '07 6612045',
            ],
            286 => 
            [
                'id' => 1287,
                'name' => '鳳山分局',
                'name_in_en' => 'Fongshan Precinct',
                'zip_code' => 830,
                'address' => '高雄市鳳山區經武路36號',
                'telephone' => '07 7456110',
            ],
            287 => 
            [
                'id' => 1288,
                'name' => '文山派出所',
                'name_in_en' => 'Wunshan Police Station',
                'zip_code' => 830,
                'address' => '高雄市鳳山區鳳松路127號',
                'telephone' => '07 7324340',
            ],
            288 => 
            [
                'id' => 1289,
                'name' => '新甲派出所',
                'name_in_en' => 'Sinjia Police Station',
                'zip_code' => 830,
                'address' => '高雄市鳳山區新富路383號',
                'telephone' => '07 7636944',
            ],
            289 => 
            [
                'id' => 1290,
                'name' => '埤頂派出所',
                'name_in_en' => 'Piding Police Station',
                'zip_code' => 830,
                'address' => '高雄市鳳山區中山東路497號',
                'telephone' => '07 7013272',
            ],
            290 => 
            [
                'id' => 1291,
                'name' => '忠孝派出所',
                'name_in_en' => 'Jhongsiao Police Station',
                'zip_code' => 830,
                'address' => '高雄市鳳山區光復路2段188號',
                'telephone' => '07 7402658',
            ],
            291 => 
            [
                'id' => 1292,
                'name' => '五甲派出所',
                'name_in_en' => 'Wujia Police Station',
                'zip_code' => 830,
                'address' => '高雄市鳳山區五甲二路472號',
                'telephone' => '07 7615839',
            ],
            292 => 
            [
                'id' => 1293,
                'name' => '鳳崗派出所',
                'name_in_en' => 'Fonggang Police Station',
                'zip_code' => 830,
                'address' => '高雄市鳳山區曹公路23號',
                'telephone' => '07 7412244',
            ],
            293 => 
            [
                'id' => 1294,
                'name' => '成功派出所',
                'name_in_en' => 'Chenggong Police Station',
                'zip_code' => 830,
                'address' => '高雄市鳳山區中山東路16號',
                'telephone' => '07 7462453',
            ],
            294 => 
            [
                'id' => 1295,
                'name' => '過埤派出所',
                'name_in_en' => 'Guopi Police Station',
                'zip_code' => 830,
                'address' => '高雄市鳳山區保生路69號',
                'telephone' => '07 7923028',
            ],
            295 => 
            [
                'id' => 1296,
                'name' => '南成派出所',
                'name_in_en' => 'Nancheng Police Station',
                'zip_code' => 830,
                'address' => '高雄市鳳山區和成路37、39號',
                'telephone' => '07 7928393',
            ],
            296 => 
            [
                'id' => 1297,
                'name' => '林園分局',
                'name_in_en' => 'Linyuan Precinct',
                'zip_code' => 832,
                'address' => '高雄市林園區林園北路201號',
                'telephone' => '07 6412004',
            ],
            297 => 
            [
                'id' => 1298,
                'name' => '昭明派出所',
                'name_in_en' => 'Jhaoming Police Station',
                'zip_code' => 831,
                'address' => '高雄市大寮區鳳林一路287號',
                'telephone' => '07 6411903',
            ],
            298 => 
            [
                'id' => 1299,
                'name' => '大寮分駐所',
                'name_in_en' => 'Daliao  Police Station',
                'zip_code' => 831,
                'address' => '高雄市大寮區鳳林三路377號',
                'telephone' => '07 7816335',
            ],
            299 => 
            [
                'id' => 1300,
                'name' => '忠義派出所',
                'name_in_en' => 'Jhongyi Police Station',
                'zip_code' => 831,
                'address' => '高雄市大寮區鳳林四路353號',
                'telephone' => '07 7817429',
            ],
            300 => 
            [
                'id' => 1301,
                'name' => '中庄派出所',
                'name_in_en' => 'JhongJhuang Police Station',
                'zip_code' => 831,
                'address' => '高雄市大寮區仁愛路101號',
                'telephone' => '07 7016714',
            ],
            301 => 
            [
                'id' => 1302,
                'name' => '中芸派出所',
                'name_in_en' => 'Jhongyun Police Station',
                'zip_code' => 832,
                'address' => '高雄市林園區力行路250號',
                'telephone' => '07 6412792',
            ],
            302 => 
            [
                'id' => 1303,
                'name' => '港埔派出所',
                'name_in_en' => 'Gangpu Police Station',
                'zip_code' => 832,
                'address' => '高雄市林園區沿海路4段326號',
                'telephone' => '07 6413695',
            ],
            303 => 
            [
                'id' => 1304,
                'name' => '林園派出所',
                'name_in_en' => 'Linyuan Police Station',
                'zip_code' => 832,
                'address' => '高雄市林園區林園北路201號',
                'telephone' => '07 6412013',
            ],
            304 => 
            [
                'id' => 1305,
                'name' => '湖內分局',
                'name_in_en' => 'HuNei Precinct',
                'zip_code' => 829,
                'address' => '高雄市湖內區中山路1段290號',
                'telephone' => '07 6932155',
            ],
            305 => 
            [
                'id' => 1306,
                'name' => '竹滬派出所',
                'name_in_en' => 'Jhuhu Police Station',
                'zip_code' => 821,
                'address' => '高雄市路竹區華山路31號',
                'telephone' => '07 6981824',
            ],
            306 => 
            [
                'id' => 1307,
                'name' => '崇德派出所',
                'name_in_en' => 'Chongde Police Station',
                'zip_code' => 823,
                'address' => '高雄市田寮區崇德路49號',
                'telephone' => '07 6366774',
            ],
            307 => 
            [
                'id' => 1308,
                'name' => '砂崙派出所',
                'name_in_en' => 'Shalun Police Station',
                'zip_code' => 852,
                'address' => '高雄市茄萣區白砂路239巷2弄9號',
                'telephone' => '07 6900055',
            ],
            308 => 
            [
                'id' => 1309,
                'name' => '蛙潭派出所',
                'name_in_en' => 'Watan Police Station',
                'zip_code' => 823,
                'address' => '高雄市田寮區七星路11號',
                'telephone' => '07 6361192',
            ],
            309 => 
            [
                'id' => 1310,
                'name' => '古亭派出所',
                'name_in_en' => 'Guting Police Station',
                'zip_code' => 823,
                'address' => '高雄市田寮區古亭路39號',
                'telephone' => '07 6367058',
            ],
            310 => 
            [
                'id' => 1311,
                'name' => '湖街派出所',
                'name_in_en' => 'Hujie Police Station',
                'zip_code' => 829,
                'address' => '高雄市湖內區中山路1段290之1號',
                'telephone' => '07 6934784',
            ],
            311 => 
            [
                'id' => 1312,
                'name' => '阿蓮分駐所',
                'name_in_en' => 'Alian Police Station',
                'zip_code' => 822,
                'address' => '高雄市阿蓮區忠孝路226號',
                'telephone' => '07 6312029',
            ],
            312 => 
            [
                'id' => 1313,
                'name' => '田寮分駐所',
                'name_in_en' => 'Tianliao Police Station',
                'zip_code' => 823,
                'address' => '高雄市田寮區崗安路71-2號',
                'telephone' => '07 6361878',
            ],
            313 => 
            [
                'id' => 1314,
                'name' => '茄萣分駐所',
                'name_in_en' => 'Cieding Police Station',
                'zip_code' => 852,
                'address' => '高雄市茄萣區茄萣路2段1號',
                'telephone' => '07 6902276',
            ],
            314 => 
            [
                'id' => 1315,
                'name' => '路竹分駐所',
                'name_in_en' => 'Lujhu Police Station',
                'zip_code' => 821,
                'address' => '高雄市路竹區國昌路86巷24號',
                'telephone' => '07 6962615',
            ],
            315 => 
            [
                'id' => 1316,
                'name' => '湖內派出所',
                'name_in_en' => 'Hunei Police Station',
                'zip_code' => 829,
                'address' => '高雄市湖內區中正路2段95號',
                'telephone' => '07 6993229',
            ],
            316 => 
            [
                'id' => 1317,
                'name' => '一甲派出所',
                'name_in_en' => 'Yijia Police Starion',
                'zip_code' => 821,
                'address' => '高雄市路竹區金平路356號',
                'telephone' => '07 6962954',
            ],
            317 => 
            [
                'id' => 1318,
                'name' => '仁武分局',
                'name_in_en' => 'Renwu Precinct',
                'zip_code' => 814,
                'address' => '高雄市仁武區中正路135號',
                'telephone' => '07 3719421',
            ],
            318 => 
            [
                'id' => 1319,
                'name' => '溪埔派出所',
                'name_in_en' => 'Sipu Police Station',
                'zip_code' => 840,
                'address' => '高雄市大樹區溪埔里溪埔路77號',
                'telephone' => '07 6561044',
            ],
            319 => 
            [
                'id' => 1320,
                'name' => '大樹分駐所',
                'name_in_en' => 'Dashu Police Station',
                'zip_code' => 840,
                'address' => '高雄市大樹區中興南路15號',
                'telephone' => '07 6512439',
            ],
            320 => 
            [
                'id' => 1321,
                'name' => '仁武派出所',
                'name_in_en' => 'Renwu Police Station',
                'zip_code' => 814,
                'address' => '高雄市仁武區中正路133號',
                'telephone' => '07 3711432',
            ],
            321 => 
            [
                'id' => 1322,
                'name' => '大社分駐所',
                'name_in_en' => 'Dashe Police Station',
                'zip_code' => 815,
                'address' => '高雄市大社區金龍路63號',
                'telephone' => '07 3511369',
            ],
            322 => 
            [
                'id' => 1323,
                'name' => '九曲派出所',
                'name_in_en' => 'Jioucyu Police Station',
                'zip_code' => 840,
                'address' => '高雄市大樹區久堂路130號',
                'telephone' => '07 6512027',
            ],
            323 => 
            [
                'id' => 1324,
                'name' => '仁美派出所',
                'name_in_en' => 'Renmei Police Station',
                'zip_code' => 833,
                'address' => '高雄市鳥松區仁德路16號',
                'telephone' => '07 7314057',
            ],
            324 => 
            [
                'id' => 1325,
                'name' => '大華派出所',
                'name_in_en' => 'Dahua Police Station',
                'zip_code' => 833,
                'address' => '高雄市鳥松區澄清路821號',
                'telephone' => '07 3701994',
            ],
            325 => 
            [
                'id' => 1326,
                'name' => '鳥松分駐所',
                'name_in_en' => 'Niaosong Police Station',
                'zip_code' => 833,
                'address' => '高雄市鳥松區中正路96號之1',
                'telephone' => '07 7326240',
            ],
            326 => 
            [
                'id' => 1327,
                'name' => '澄觀派出所',
                'name_in_en' => 'Chengguan Police Station',
                'zip_code' => 814,
                'address' => '高雄市仁武區八德西路189號',
                'telephone' => '07 3718188',
            ],
            327 => 
            [
                'id' => 1328,
                'name' => '屏東縣警察局',
                'name_in_en' => 'Pingtung County police bureau',
                'zip_code' => 900,
                'address' => '屏東縣屏東市中正路119號',
                'telephone' => '08 7322598',
            ],
            328 => 
            [
                'id' => 1329,
                'name' => '屏東分局',
                'name_in_en' => 'Pingtung Precinct',
                'zip_code' => 900,
                'address' => '屏東縣屏東市泰安里信義路141-3號',
                'telephone' => '08 7322075',
            ],
            329 => 
            [
                'id' => 1330,
                'name' => '海豐派出所',
                'name_in_en' => 'Haifong  Police Station',
                'zip_code' => 900,
                'address' => '屏東縣屏東市海豐路18號',
                'telephone' => '08 7367704',
            ],
            330 => 
            [
                'id' => 1331,
                'name' => '社皮派出所',
                'name_in_en' => 'Shepi Police Station',
                'zip_code' => 913,
                'address' => '屏東縣萬丹鄉社口村社皮路2段399號',
                'telephone' => '08 7073044',
            ],
            331 => 
            [
                'id' => 1332,
                'name' => '新鐘派出所',
                'name_in_en' => 'Sinjhong Police Station',
                'zip_code' => 913,
                'address' => '屏東縣萬丹鄉新鐘村新鐘路64號',
                'telephone' => '08 7772254',
            ],
            332 => 
            [
                'id' => 1333,
                'name' => '德協派出所',
                'name_in_en' => 'Desie Police Station',
                'zip_code' => 908,
                'address' => '屏東縣長治鄉德協村中興路635號',
                'telephone' => '08 7621604',
            ],
            333 => 
            [
                'id' => 1334,
                'name' => '繁華派出所',
                'name_in_en' => 'Fanhua Police Station',
                'zip_code' => 908,
                'address' => '屏東縣長治鄉繁昌村中山路102號',
                'telephone' => '08 7621384',
            ],
            334 => 
            [
                'id' => 1335,
                'name' => '麟洛分駐所',
                'name_in_en' => 'Linluo Police Station',
                'zip_code' => 909,
                'address' => '屏東縣麟洛鄉麟趾村中山路437號',
                'telephone' => '08 7221528',
            ],
            335 => 
            [
                'id' => 1336,
                'name' => '崇蘭派出所',
                'name_in_en' => 'Chonglan Police Station',
                'zip_code' => 900,
                'address' => '屏東縣屏東市迪化街48號',
                'telephone' => '08-7656206',
            ],
            336 => 
            [
                'id' => 1337,
                'name' => '長治分駐所',
                'name_in_en' => 'Changjhih Police Station',
                'zip_code' => 908,
                'address' => '屏東縣長治鄉進興村復興路2號',
                'telephone' => '08 7366741',
            ],
            337 => 
            [
                'id' => 1338,
                'name' => '萬丹分駐所',
                'name_in_en' => 'Wandan  Police Station',
                'zip_code' => 913,
                'address' => '屏東縣萬丹鄉和平西路151號',
                'telephone' => '08 7772004',
            ],
            338 => 
            [
                'id' => 1339,
                'name' => '大同派出所',
                'name_in_en' => 'Datung Police Station',
                'zip_code' => 900,
                'address' => '屏東縣屏東市前進里清進路808號',
                'telephone' => '08 7555413',
            ],
            339 => 
            [
                'id' => 1340,
                'name' => '建國派出所',
                'name_in_en' => 'Jianguo Police Station',
                'zip_code' => 900,
                'address' => '屏東縣屏東市義勇里臺糖街130號',
                'telephone' => '08 7522978',
            ],
            340 => 
            [
                'id' => 1341,
                'name' => '民和派出所',
                'name_in_en' => 'Minhe Police Station',
                'zip_code' => 900,
                'address' => '屏東縣屏東市民生路40號',
                'telephone' => '08 7223077',
            ],
            341 => 
            [
                'id' => 1342,
                'name' => '公館派出所',
                'name_in_en' => 'Gongguan Police Station',
                'zip_code' => 900,
                'address' => '屏東縣屏東市龍華路157號',
                'telephone' => '08 7527484',
            ],
            342 => 
            [
                'id' => 1343,
                'name' => '民族派出所',
                'name_in_en' => 'Minzu Police Station',
                'zip_code' => 900,
                'address' => '屏東縣屏東市民族路152號',
                'telephone' => '08 7322072',
            ],
            343 => 
            [
                'id' => 1344,
                'name' => '歸來派出所',
                'name_in_en' => 'Gueilai Police Station',
                'zip_code' => 900,
                'address' => '屏東縣屏東市民生東路94號',
                'telephone' => '08 7224416',
            ],
            344 => 
            [
                'id' => 1345,
                'name' => '民生派出所',
                'name_in_en' => 'Minsheng Police Station',
                'zip_code' => 900,
                'address' => '屏東縣屏東市北平路30號',
                'telephone' => '08 7322646',
            ],
            345 => 
            [
                'id' => 1346,
                'name' => '恆春分局',
                'name_in_en' => 'Hengchun Precinct',
                'zip_code' => 946,
                'address' => '屏東縣恆春鎮中正路60號',
                'telephone' => '08 8892075',
            ],
            346 => 
            [
                'id' => 1347,
                'name' => '滿州分駐所',
                'name_in_en' => 'Manjhou Police Station',
                'zip_code' => 947,
                'address' => '屏東縣滿州鄉滿州村中山路60號',
                'telephone' => '08 8801161',
            ],
            347 => 
            [
                'id' => 1348,
                'name' => '長樂派出所',
                'name_in_en' => 'Changle  Police Station',
                'zip_code' => 947,
                'address' => '屏東縣滿州鄉長樂村大公路33號',
                'telephone' => '08 8811141',
            ],
            348 => 
            [
                'id' => 1349,
                'name' => '九棚派出所',
                'name_in_en' => 'Jioupeng Police Station',
                'zip_code' => 947,
                'address' => '屏東縣滿州鄉港仔村港仔路60號',
                'telephone' => '08 8810200',
            ],
            349 => 
            [
                'id' => 1350,
                'name' => '牡丹分駐所',
                'name_in_en' => 'Mudan  Police Station',
                'zip_code' => 945,
                'address' => '屏東縣牡丹鄉石門村石門路31號',
                'telephone' => '08 8831110',
            ],
            350 => 
            [
                'id' => 1351,
                'name' => '旭海派出所',
                'name_in_en' => 'Syuhai  Police Station',
                'zip_code' => 945,
                'address' => '屏東縣牡丹鄉旭海村旭海路1號',
                'telephone' => '08 8830200',
            ],
            351 => 
            [
                'id' => 1352,
                'name' => '龍水派出所',
                'name_in_en' => 'Longshuei  Police Station',
                'zip_code' => 946,
                'address' => '屏東縣恆春鎮龍泉路260號',
                'telephone' => '08 8894172',
            ],
            352 => 
            [
                'id' => 1353,
                'name' => '車城分駐所',
                'name_in_en' => 'Checheng  Police Station',
                'zip_code' => 944,
                'address' => '屏東縣車城鄉福興村中山路17號',
                'telephone' => '08 8821152',
            ],
            353 => 
            [
                'id' => 1354,
                'name' => '墾丁派出所',
                'name_in_en' => 'Kending  Police Station',
                'zip_code' => 946,
                'address' => '屏東縣恆春鎮墾丁路113號',
                'telephone' => '08 8861039',
            ],
            354 => 
            [
                'id' => 1355,
                'name' => '仁壽派出所',
                'name_in_en' => 'Renshou  Police Station',
                'zip_code' => 946,
                'address' => '屏東縣恆春鎮仁壽路117號',
                'telephone' => '08 8893247',
            ],
            355 => 
            [
                'id' => 1356,
                'name' => '建民派出所',
                'name_in_en' => 'Jianmin  Police Station',
                'zip_code' => 946,
                'address' => '屏東縣恆春鎮中正路60號',
                'telephone' => '08 8892587',
            ],
            356 => 
            [
                'id' => 1357,
                'name' => '枋寮分局',
                'name_in_en' => 'Fangliao Precinct',
                'zip_code' => 940,
                'address' => '屏東縣枋寮鄉枋寮村中興路33號',
                'telephone' => '08 8782004',
            ],
            357 => 
            [
                'id' => 1358,
                'name' => '歸崇派出所',
                'name_in_en' => 'Gueichong Police Station',
                'zip_code' => 942,
                'address' => '屏東縣春日鄉歸崇村玉光路6號',
                'telephone' => '08 8791104',
            ],
            358 => 
            [
                'id' => 1359,
                'name' => '草埔派出所',
                'name_in_en' => 'Caopu Police Station',
                'zip_code' => 943,
                'address' => '屏東縣獅子鄉草埔村7巷50號',
                'telephone' => '08 8701484',
            ],
            359 => 
            [
                'id' => 1360,
                'name' => '春日分駐所',
                'name_in_en' => 'Chunrih Police Station',
                'zip_code' => 942,
                'address' => '屏東縣春日鄉春日村春日路316號',
                'telephone' => '08 8785180',
            ],
            360 => 
            [
                'id' => 1361,
                'name' => '內獅派出所',
                'name_in_en' => 'Neishih Police Station',
                'zip_code' => 943,
                'address' => '屏東縣獅子鄉內獅村內獅巷60號',
                'telephone' => '08 8720004',
            ],
            361 => 
            [
                'id' => 1362,
                'name' => '加祿派出所',
                'name_in_en' => 'Jialu Police Station',
                'zip_code' => 941,
                'address' => '屏東縣枋山鄉加祿村加祿路102號',
                'telephone' => '08 8720002',
            ],
            362 => 
            [
                'id' => 1363,
                'name' => '獅子分駐所',
                'name_in_en' => 'Shi-zi Police Station',
                'zip_code' => 943,
                'address' => '屏東縣獅子鄉楓林村2巷28號',
                'telephone' => '08 8771391',
            ],
            363 => 
            [
                'id' => 1364,
                'name' => '枋山分駐所',
                'name_in_en' => 'Fangshan Police Station',
                'zip_code' => 941,
                'address' => '屏東縣枋山鄉枋山村國中路26巷5之1號',
                'telephone' => '08 8761129',
            ],
            364 => 
            [
                'id' => 1365,
                'name' => '佳冬分駐所',
                'name_in_en' => 'Jiadong Police Station',
                'zip_code' => 931,
                'address' => '屏東縣佳冬鄉六根村佳和路89號',
                'telephone' => '08 8662089',
            ],
            365 => 
            [
                'id' => 1366,
                'name' => '楓港派出所',
                'name_in_en' => 'Fonggang Police Station',
                'zip_code' => 941,
                'address' => '屏東縣枋山鄉善餘村德隆路19號',
                'telephone' => '08 8771214',
            ],
            366 => 
            [
                'id' => 1367,
                'name' => '石光派出所',
                'name_in_en' => 'Shihguang Police Station',
                'zip_code' => 931,
                'address' => '屏東縣佳冬鄉石光村中山路200號',
                'telephone' => '08 8662034',
            ],
            367 => 
            [
                'id' => 1368,
                'name' => '建興派出所',
                'name_in_en' => 'Jiansing Police Station',
                'zip_code' => 940,
                'address' => '屏東縣枋寮鄉地利村建興路262號',
                'telephone' => '08 8712962',
            ],
            368 => 
            [
                'id' => 1369,
                'name' => '東海派出所',
                'name_in_en' => 'Donghai Police Station',
                'zip_code' => 940,
                'address' => '屏東縣枋寮鄉東海村東林路717號',
                'telephone' => '08 8712920',
            ],
            369 => 
            [
                'id' => 1370,
                'name' => '枋寮派出所',
                'name_in_en' => 'Fangliao Police Station',
                'zip_code' => 940,
                'address' => '屏東縣枋寮鄉枋寮村中興路33號',
                'telephone' => '08 8782949',
            ],
            370 => 
            [
                'id' => 1371,
                'name' => '東港分局',
                'name_in_en' => 'Donggang Precinct',
                'zip_code' => 928,
                'address' => '屏東縣東港鎮沿海路1號',
                'telephone' => '08 8322045',
            ],
            371 => 
            [
                'id' => 1372,
                'name' => '東港派出所',
                'name_in_en' => 'Donggang Police Station',
                'zip_code' => 928,
                'address' => '屏東縣東港鎮沿海路1號',
                'telephone' => '08 8338183',
            ],
            372 => 
            [
                'id' => 1373,
                'name' => '大鵬灣派出所',
                'name_in_en' => 'Dapeng Bay Police Station',
                'zip_code' => 928,
                'address' => '屏東縣東港鎮鵬灣大道1段200號',
                'telephone' => '08-8338262',
            ],
            373 => 
            [
                'id' => 1374,
                'name' => '崁頂分駐所',
                'name_in_en' => 'Kanding Police Station',
                'zip_code' => 924,
                'address' => '屏東縣崁頂鄉崁頂村中正路117號',
                'telephone' => '08 8631404',
            ],
            374 => 
            [
                'id' => 1375,
                'name' => '南州分駐所',
                'name_in_en' => 'Nanjhou Police Station',
                'zip_code' => 926,
                'address' => '屏東縣南州鄉仁里村三民路52號',
                'telephone' => '08 8642047',
            ],
            375 => 
            [
                'id' => 1376,
                'name' => '新園分駐所',
                'name_in_en' => 'Sinyuan Police Station',
                'zip_code' => 932,
                'address' => '屏東縣新園鄉仙吉村仙吉路140號',
                'telephone' => '08 8681004',
            ],
            376 => 
            [
                'id' => 1377,
                'name' => '琉球分駐所',
                'name_in_en' => 'Liouciou Police Station',
                'zip_code' => 929,
                'address' => '屏東縣琉球鄉中福村行政路16號',
                'telephone' => '08 8612231',
            ],
            377 => 
            [
                'id' => 1378,
                'name' => '林邊分駐所',
                'name_in_en' => 'Linbian Police Station',
                'zip_code' => 927,
                'address' => '屏東縣林邊鄉光林村中山路185號',
                'telephone' => '08 8752018',
            ],
            378 => 
            [
                'id' => 1379,
                'name' => '興龍派出所',
                'name_in_en' => 'Singlong Police Station',
                'zip_code' => 932,
                'address' => '屏東縣新園鄉興龍村南興路278號',
                'telephone' => '08 8322433',
            ],
            379 => 
            [
                'id' => 1380,
                'name' => '東濱派出所',
                'name_in_en' => 'Dongbin Police Station',
                'zip_code' => 928,
                'address' => '屏東縣東港鎮朝安里延平路112號',
                'telephone' => '08 8322603',
            ],
            380 => 
            [
                'id' => 1381,
                'name' => '潮州分局',
                'name_in_en' => 'Chaojhou Precinct',
                'zip_code' => 920,
                'address' => '屏東縣潮州鎮中山路12號',
                'telephone' => '08 7882020',
            ],
            381 => 
            [
                'id' => 1382,
                'name' => '四林派出所',
                'name_in_en' => 'Sihlin Police Station',
                'zip_code' => 920,
                'address' => '屏東縣潮洲鎮明倫路15號',
                'telephone' => '08 7882767',
            ],
            382 => 
            [
                'id' => 1383,
                'name' => '泗洲派出所',
                'name_in_en' => 'Sihhou Police Station',
                'zip_code' => 911,
                'address' => '屏東縣竹田鄉泗州村洲中路44號',
                'telephone' => '08 7892582',
            ],
            383 => 
            [
                'id' => 1384,
                'name' => '餉潭派出所',
                'name_in_en' => 'Siangtan Police Station',
                'zip_code' => 925,
                'address' => '屏東縣新埤鄉餉潭村龍潭路137號',
                'telephone' => '08 7981819',
            ],
            384 => 
            [
                'id' => 1385,
                'name' => '來義分駐所',
                'name_in_en' => 'Laiyi Police Station',
                'zip_code' => 922,
                'address' => '屏東縣來義鄉古樓村中正路92號',
                'telephone' => '08 7850206',
            ],
            385 => 
            [
                'id' => 1386,
                'name' => '南和派出所',
                'name_in_en' => 'Nanhe Police Station',
                'zip_code' => 922,
                'address' => '屏東縣來義鄉南和村288號',
                'telephone' => '08 8791415',
            ],
            386 => 
            [
                'id' => 1387,
                'name' => '新埤分駐所',
                'name_in_en' => 'Sinpi Police Station',
                'zip_code' => 925,
                'address' => '屏東縣新埤鄉新埤村新華路146號',
                'telephone' => '08 7971045',
            ],
            387 => 
            [
                'id' => 1388,
                'name' => '竹田分駐所',
                'name_in_en' => 'Jhutian Police Station',
                'zip_code' => 911,
                'address' => '屏東縣竹田鄉竹田村中正路111號',
                'telephone' => '08 7710734',
            ],
            388 => 
            [
                'id' => 1389,
                'name' => '西勢派出所',
                'name_in_en' => 'Hsushih Police Station',
                'zip_code' => 911,
                'address' => '屏東縣竹田鄉西勢村光明路47號',
                'telephone' => '08 7792844',
            ],
            389 => 
            [
                'id' => 1390,
                'name' => '光華派出所',
                'name_in_en' => 'Guanghua Police Station',
                'zip_code' => 920,
                'address' => '屏東縣潮洲鎮中山路12號',
                'telephone' => '08 7884265',
            ],
            390 => 
            [
                'id' => 1391,
                'name' => '中山路派出所',
                'name_in_en' => 'Jhongshan Road Police Station',
                'zip_code' => 920,
                'address' => '屏東縣潮洲鎮新生路81號',
                'telephone' => '08 7882347',
            ],
            391 => 
            [
                'id' => 1392,
                'name' => '里港分局',
                'name_in_en' => 'Ligang Police Precinct',
                'zip_code' => 905,
                'address' => '屏東縣里港鄉永春村永豐路1段3號',
                'telephone' => '08 7752040',
            ],
            392 => 
            [
                'id' => 1393,
                'name' => '德文派出所',
                'name_in_en' => 'Dewen Police Station',
                'zip_code' => 901,
                'address' => '屏東縣三地門鄉德文村德文巷3號',
                'telephone' => '08 7996067',
            ],
            393 => 
            [
                'id' => 1394,
                'name' => '霧台分駐所',
                'name_in_en' => 'Wutai Police Station',
                'zip_code' => 902,
                'address' => '屏東縣霧台鄉霧台村神山巷70號',
                'telephone' => '08 7902238',
            ],
            394 => 
            [
                'id' => 1395,
                'name' => '青山派出所',
                'name_in_en' => 'Qingshan Police Station',
                'zip_code' => 901,
                'address' => '屏東縣三地門鄉青山村民族巷61之2號',
                'telephone' => '08 7960690',
            ],
            395 => 
            [
                'id' => 1396,
                'name' => '口社派出所',
                'name_in_en' => 'Koushe Police Station',
                'zip_code' => 901,
                'address' => '屏東縣三地門鄉口社村信義巷59之2號',
                'telephone' => '08 7957078',
            ],
            396 => 
            [
                'id' => 1397,
                'name' => '三地門分駐所',
                'name_in_en' => 'Sandimen Police Station',
                'zip_code' => 901,
                'address' => '屏東縣三地門鄉達來村達發達旺巷175號',
                'telephone' => '08 7991154',
            ],
            397 => 
            [
                'id' => 1398,
                'name' => '泰山派出所',
                'name_in_en' => 'Taishan Police Station',
                'zip_code' => 906,
                'address' => '屏東縣高樹鄉泰山村山下路71號',
                'telephone' => '08 7956334',
            ],
            398 => 
            [
                'id' => 1399,
                'name' => '新圍派出所',
                'name_in_en' => 'Xinwei Police Station',
                'zip_code' => 907,
                'address' => '屏東縣鹽埔鄉新二村維新路129號',
                'telephone' => '08 7932244',
            ],
            399 => 
            [
                'id' => 1400,
                'name' => '新南派出所',
                'name_in_en' => 'Xinnan Police Station',
                'zip_code' => 906,
                'address' => '屏東縣高樹鄉新南村興店路8號',
                'telephone' => '08 7962584',
            ],
            400 => 
            [
                'id' => 1401,
                'name' => '高樹分駐所',
                'name_in_en' => 'Gaoshu Police Station',
                'zip_code' => 906,
                'address' => '屏東縣高樹鄉高樹村興中路332號',
                'telephone' => '08 7962021',
            ],
            401 => 
            [
                'id' => 1402,
                'name' => '舊寮派出所',
                'name_in_en' => 'Jiuliao Police Station',
                'zip_code' => 906,
                'address' => '屏東縣高樹鄉新豐村民安路1之10號',
                'telephone' => '08 7916063',
            ],
            402 => 
            [
                'id' => 1403,
                'name' => '鹽埔分駐所',
                'name_in_en' => 'Yanpu Police Station',
                'zip_code' => 907,
                'address' => '屏東縣鹽埔鄉鹽中村中山路41號',
                'telephone' => '08 7932224',
            ],
            403 => 
            [
                'id' => 1404,
                'name' => '振興派出所',
                'name_in_en' => 'Zhenxing Police Station',
                'zip_code' => 907,
                'address' => '屏東縣鹽埔鄉振興村中正路6號',
                'telephone' => '08 7020234',
            ],
            404 => 
            [
                'id' => 1405,
                'name' => '大平派出所',
                'name_in_en' => 'Daping Police Station',
                'zip_code' => 905,
                'address' => '屏東縣里港鄉永春村永豐路1段3號',
                'telephone' => '08 7752034',
            ],
            405 => 
            [
                'id' => 1406,
                'name' => '三和派出所',
                'name_in_en' => 'Sanhe Police Station',
                'zip_code' => 905,
                'address' => '屏東縣里港鄉土庫村土庫路140號',
                'telephone' => '08 7731145',
            ],
            406 => 
            [
                'id' => 1407,
                'name' => '九如分駐所',
                'name_in_en' => 'Jiouru Police Station',
                'zip_code' => 904,
                'address' => '屏東縣九如鄉九清村九如路2段177號',
                'telephone' => '08 7392424',
            ],
            407 => 
            [
                'id' => 1408,
                'name' => '內埔分局',
                'name_in_en' => 'Neipu Police Precinct',
                'zip_code' => 912,
                'address' => '屏東縣內埔鄉內埔村中興路158號',
                'telephone' => '08 7796801',
            ],
            408 => 
            [
                'id' => 1409,
                'name' => '瑪家分駐所',
                'name_in_en' => 'Majia Police Station',
                'zip_code' => 903,
                'address' => '屏東縣瑪家鄉北葉村風景巷1號',
                'telephone' => '08 7991749',
            ],
            409 => 
            [
                'id' => 1410,
                'name' => '佳義派出所',
                'name_in_en' => 'ChiaYi Police Station',
                'zip_code' => 903,
                'address' => '屏東縣瑪家鄉佳義村泰平巷53號',
                'telephone' => '08 7990163',
            ],
            410 => 
            [
                'id' => 1411,
                'name' => '泰武分駐所',
                'name_in_en' => 'Taiwu Police Station',
                'zip_code' => 921,
                'address' => '屏東縣泰武鄉佳平村佳平巷1號',
                'telephone' => '08 7833038',
            ],
            411 => 
            [
                'id' => 1412,
                'name' => '忠孝派出所',
                'name_in_en' => 'ChungHsiao Police Station',
                'zip_code' => 921,
                'address' => '屏東縣泰武鄉泰武村良武巷101號',
                'telephone' => '08 7920001',
            ],
            412 => 
            [
                'id' => 1413,
                'name' => '赤山派出所',
                'name_in_en' => 'ChihShan Police Station',
                'zip_code' => 923,
                'address' => '屏東縣萬巒鄉赤山村東山路110號',
                'telephone' => '08 7833451',
            ],
            413 => 
            [
                'id' => 1414,
                'name' => '新北勢派出所',
                'name_in_en' => 'HsinPeiShih Police Station',
                'zip_code' => 912,
                'address' => '屏東縣內埔鄉豐田村新中路137號',
                'telephone' => '08 7792804',
            ],
            414 => 
            [
                'id' => 1415,
                'name' => '佳佐派出所',
                'name_in_en' => 'ChiaTso Police Station',
                'zip_code' => 923,
                'address' => '屏東縣萬巒鄉佳和村佳興路30號',
                'telephone' => '08 7831114',
            ],
            415 => 
            [
                'id' => 1416,
                'name' => '萬巒分駐所',
                'name_in_en' => 'Wanluan Police Station',
                'zip_code' => 923,
                'address' => '屏東縣萬巒鄉萬巒村褒忠路124號',
                'telephone' => '08 7811320',
            ],
            416 => 
            [
                'id' => 1417,
                'name' => '龍泉派出所',
                'name_in_en' => 'LungChuan Police Station',
                'zip_code' => 912,
                'address' => '屏東縣內埔鄉龍泉村原勝路76號',
                'telephone' => '08 7701744',
            ],
            417 => 
            [
                'id' => 1418,
                'name' => '內埔派出所',
                'name_in_en' => 'Neipu Police Station',
                'zip_code' => 912,
                'address' => '屏東縣內埔鄉內埔村中興路158號',
                'telephone' => '08 7792018',
            ],
            418 => 
            [
                'id' => 1419,
                'name' => '基隆市警察局',
                'name_in_en' => 'Keelung City Police Bureau',
                'zip_code' => 201,
                'address' => '基隆市信義區信二路205號',
                'telephone' => '02 24248141',
            ],
            419 => 
            [
                'id' => 1420,
                'name' => '第一分局',
                'name_in_en' => 'First Precinct',
                'zip_code' => 200,
                'address' => '基隆市仁愛區仁五路22號',
                'telephone' => '02 24222741',
            ],
            420 => 
            [
                'id' => 1421,
                'name' => '延平街派出所',
                'name_in_en' => 'Yanping Street Police Station',
                'zip_code' => 200,
                'address' => '基隆市仁愛區仁二路76號',
                'telephone' => '02 24246950',
            ],
            421 => 
            [
                'id' => 1422,
                'name' => '南榮路派出所',
                'name_in_en' => 'Nanrong Road Police Station',
                'zip_code' => 200,
                'address' => '基隆市仁愛區南榮路225號',
                'telephone' => '02 24242437',
            ],
            422 => 
            [
                'id' => 1423,
                'name' => '忠二路派出所',
                'name_in_en' => 'Zhong 2nd Road Police Station',
                'zip_code' => 200,
                'address' => '基隆市仁愛區忠二路2之1號',
                'telephone' => '02 24241363',
            ],
            423 => 
            [
                'id' => 1424,
                'name' => '第二分局',
                'name_in_en' => 'Second Precinct',
                'zip_code' => 202,
                'address' => '基隆市信義區信二路193號',
                'telephone' => '02 24222742',
            ],
            424 => 
            [
                'id' => 1425,
                'name' => '信義派出所',
                'name_in_en' => 'Xinyi Police Station',
                'zip_code' => 201,
                'address' => '基隆市信義區信二路193號',
                'telephone' => '02 24211595',
            ],
            425 => 
            [
                'id' => 1426,
                'name' => '深澳坑派出所',
                'name_in_en' => 'Shen\'aokeng Police Station',
                'zip_code' => 201,
                'address' => '基隆市信義區深澳坑路69號',
                'telephone' => '02 24654170',
            ],
            426 => 
            [
                'id' => 1427,
                'name' => '信六路派出所',
                'name_in_en' => 'Xin 6th Road Police Station',
                'zip_code' => 202,
                'address' => '基隆市中正區義一路148號',
                'telephone' => '02 24246948',
            ],
            427 => 
            [
                'id' => 1428,
                'name' => '八斗子分駐所',
                'name_in_en' => 'Badouzi Police Station',
                'zip_code' => 202,
                'address' => '基隆市中正區環港街98號',
                'telephone' => '02 24692077',
            ],
            428 => 
            [
                'id' => 1429,
                'name' => '和一路派出所',
                'name_in_en' => 'He 1st Road Police Station',
                'zip_code' => 202,
                'address' => '基隆市中正區和一路146號',
                'telephone' => '02 24622752',
            ],
            429 => 
            [
                'id' => 1430,
                'name' => '安瀾橋派出所',
                'name_in_en' => 'Anlanqiao Police Station',
                'zip_code' => 202,
                'address' => '基隆市中正區中正路320號',
                'telephone' => '02 24622435',
            ],
            430 => 
            [
                'id' => 1431,
                'name' => '東光派出所',
                'name_in_en' => 'Dongguang Police Station',
                'zip_code' => 201,
                'address' => '基隆市信義區東明路61號',
                'telephone' => '02 24656443',
            ],
            431 => 
            [
                'id' => 1432,
                'name' => '正濱派出所',
                'name_in_en' => 'Zhengbin Police Station',
                'zip_code' => 202,
                'address' => '基隆市中正區中正路786-1號',
                'telephone' => '02 24621889',
            ],
            432 => 
            [
                'id' => 1433,
                'name' => '第三分局',
                'name_in_en' => 'Third Precinct',
                'zip_code' => 206,
                'address' => '基隆市七堵區富民里明德一路142號',
                'telephone' => '02 24558843',
            ],
            433 => 
            [
                'id' => 1434,
                'name' => '復興派出所',
                'name_in_en' => 'Fuxing Police Station',
                'zip_code' => 206,
                'address' => '基隆市七堵區華新一路40之3號',
                'telephone' => '02 24515602',
            ],
            434 => 
            [
                'id' => 1435,
                'name' => '瑪陵派出所',
                'name_in_en' => 'Maling Police Station',
                'zip_code' => 206,
                'address' => '基隆市七堵區大華二路194號',
                'telephone' => '02 24565085',
            ],
            435 => 
            [
                'id' => 1436,
                'name' => '碇內派出所',
                'name_in_en' => 'Dingnei Police Station',
                'zip_code' => 205,
                'address' => '基隆市暖暖區源遠路249巷36號',
                'telephone' => '02 24576080',
            ],
            436 => 
            [
                'id' => 1437,
                'name' => '暖暖派出所',
                'name_in_en' => 'Nuannuan Police Station',
                'zip_code' => 205,
                'address' => '基隆市暖暖區暖暖街119號',
                'telephone' => '02 24572331',
            ],
            437 => 
            [
                'id' => 1438,
                'name' => '八堵分駐所',
                'name_in_en' => 'Badu Police Station',
                'zip_code' => 205,
                'address' => '基隆市暖暖區八堵路69號',
                'telephone' => '02 24562438',
            ],
            438 => 
            [
                'id' => 1439,
                'name' => '百福派出所',
                'name_in_en' => 'Baifu Police Station',
                'zip_code' => 206,
                'address' => '基隆市七堵區百福里百六街120號',
                'telephone' => '02 24512156',
            ],
            439 => 
            [
                'id' => 1440,
                'name' => '七堵派出所',
                'name_in_en' => 'Qidu Police Station',
                'zip_code' => 206,
                'address' => '基隆市七堵區富民里明德一路142號',
                'telephone' => '02 24566947',
            ],
            440 => 
            [
                'id' => 1441,
                'name' => '第四分局',
                'name_in_en' => 'Fourth Precinct',
                'zip_code' => 204,
                'address' => '基隆市安樂區麥金路242號',
                'telephone' => '02 24225477',
            ],
            441 => 
            [
                'id' => 1442,
                'name' => '大武崙派出所',
                'name_in_en' => 'Dawulun Police Station',
                'zip_code' => 204,
                'address' => '基隆市安樂區基金一路351號',
                'telephone' => '02 24310118',
            ],
            442 => 
            [
                'id' => 1443,
                'name' => '安樂派出所',
                'name_in_en' => 'Anle Police Station',
                'zip_code' => 204,
                'address' => '基隆市安樂區麥金路242號',
                'telephone' => '02 24316212',
            ],
            443 => 
            [
                'id' => 1444,
                'name' => '安定派出所',
                'name_in_en' => 'Anding Police Station',
                'zip_code' => 204,
                'address' => '基隆市安樂區安一路307號',
                'telephone' => '02 24246946',
            ],
            444 => 
            [
                'id' => 1445,
                'name' => '中華路分駐所',
                'name_in_en' => 'Zhonghua Road Police Station',
                'zip_code' => 203,
                'address' => '基隆市中山區通明街2號',
                'telephone' => '02 24246944',
            ],
            445 => 
            [
                'id' => 1446,
                'name' => '中山派出所',
                'name_in_en' => 'Zhongshan Police Station',
                'zip_code' => 203,
                'address' => '基隆市中山區西定路1號',
                'telephone' => '02 24242440',
            ],
            446 => 
            [
                'id' => 1447,
                'name' => '宜蘭縣政府警察局',
                'name_in_en' => 'Yilan County Government Police Bureau',
                'zip_code' => 260,
                'address' => '宜蘭縣宜蘭市中山路2段167號',
                'telephone' => '03 9322271',
            ],
            447 => 
            [
                'id' => 1448,
                'name' => '宜蘭分局',
                'name_in_en' => 'Yilan Precinct Yilan County Government Police Bureau',
                'zip_code' => 260,
                'address' => '宜蘭縣宜蘭市光復路50號',
                'telephone' => '03 9359039',
            ],
            448 => 
            [
                'id' => 1449,
                'name' => '大湖派出所',
                'name_in_en' => 'Dahu Police Station',
                'zip_code' => 264,
                'address' => '宜蘭縣員山鄉大安路120號',
                'telephone' => '03 9221995',
            ],
            449 => 
            [
                'id' => 1450,
                'name' => '惠好派出所',
                'name_in_en' => 'Hueihao Police Station',
                'zip_code' => 264,
                'address' => '宜蘭縣員山鄉尚惠路63號',
                'telephone' => '03 9221994',
            ],
            450 => 
            [
                'id' => 1451,
                'name' => '內城派出所',
                'name_in_en' => 'Neicheng Police Station',
                'zip_code' => 264,
                'address' => '宜蘭縣員山鄉員山路2段235號',
                'telephone' => '03 9221996',
            ],
            451 => 
            [
                'id' => 1452,
                'name' => '枕山派出所',
                'name_in_en' => 'Jhenshan Police Station',
                'zip_code' => 264,
                'address' => '宜蘭縣員山鄉永同路3段18號',
                'telephone' => '03 9221993',
            ],
            452 => 
            [
                'id' => 1453,
                'name' => '員山分駐所',
                'name_in_en' => 'Yuanshan Police Station',
                'zip_code' => 264,
                'address' => '宜蘭縣員山鄉員山路1段205號',
                'telephone' => '03 9222015',
            ],
            453 => 
            [
                'id' => 1454,
                'name' => '延平派出所',
                'name_in_en' => 'Yanping Police Station',
                'zip_code' => 260,
                'address' => '宜蘭縣宜蘭市東港路22號',
                'telephone' => '03 9381784',
            ],
            454 => 
            [
                'id' => 1455,
                'name' => '進士派出所',
                'name_in_en' => 'Jinshih Police Station',
                'zip_code' => 260,
                'address' => '宜蘭縣宜蘭市縣政北路5號',
                'telephone' => '03 9252219',
            ],
            455 => 
            [
                'id' => 1456,
                'name' => '新生派出所',
                'name_in_en' => 'Sinsheng Police Station',
                'zip_code' => 260,
                'address' => '宜蘭縣宜蘭市中山路5段156號',
                'telephone' => '03 9284087',
            ],
            456 => 
            [
                'id' => 1457,
                'name' => '民族派出所',
                'name_in_en' => 'Sinmin Police Station',
                'zip_code' => 260,
                'address' => '宜蘭縣宜蘭市三清路33號',
                'telephone' => '03 9322223',
            ],
            457 => 
            [
                'id' => 1458,
                'name' => '新民派出所',
                'name_in_en' => 'Minzu Police Station',
                'zip_code' => 260,
                'address' => '宜蘭縣宜蘭市光復路50號',
                'telephone' => '03 9323105',
            ],
            458 => 
            [
                'id' => 1459,
                'name' => '三星分局',
                'name_in_en' => 'Sansing  Precinct Yilan County Government Police Bureau',
                'zip_code' => 266,
                'address' => '宜蘭縣三星鄉三星路5段6號',
                'telephone' => '03 9891564',
            ],
            459 => 
            [
                'id' => 1460,
                'name' => '三星派出所',
                'name_in_en' => 'sansing Police Station',
                'zip_code' => 266,
                'address' => '宜蘭縣三星鄉三星路5段6號',
                'telephone' => '03 9892561',
            ],
            460 => 
            [
                'id' => 1461,
                'name' => '明池派出所',
                'name_in_en' => 'Mingchih Police Station',
                'zip_code' => 267,
                'address' => '宜蘭縣大同鄉明池4號',
                'telephone' => '03 9801727',
            ],
            461 => 
            [
                'id' => 1462,
                'name' => '南山派出所',
                'name_in_en' => 'Nanshan Police Station',
                'zip_code' => 267,
                'address' => '宜蘭縣大同鄉埤南巷6號',
                'telephone' => '03 9809175',
            ],
            462 => 
            [
                'id' => 1463,
                'name' => '四季派出所',
                'name_in_en' => 'Sihji Police Station',
                'zip_code' => 267,
                'address' => '宜蘭縣大同鄉和勳巷12號',
                'telephone' => '03 9809435',
            ],
            463 => 
            [
                'id' => 1464,
                'name' => '太平山派出所',
                'name_in_en' => 'Taipingshan Police Station',
                'zip_code' => 267,
                'address' => '宜蘭縣大同鄉太平巷94之2號',
                'telephone' => '03 9809802',
            ],
            464 => 
            [
                'id' => 1465,
                'name' => '英士派出所',
                'name_in_en' => 'Yingshih Police Station',
                'zip_code' => 267,
                'address' => '宜蘭縣大同鄉梵梵72號',
                'telephone' => '03 9801325',
            ],
            465 => 
            [
                'id' => 1466,
                'name' => '福山派出所',
                'name_in_en' => 'Fushan Police Station',
                'zip_code' => 266,
                'address' => '宜蘭縣三星鄉三星路7段310號',
                'telephone' => '03 9893224',
            ],
            466 => 
            [
                'id' => 1467,
                'name' => '牛鬥派出所',
                'name_in_en' => 'Nioudou Police Station',
                'zip_code' => 267,
                'address' => '宜蘭縣大同鄉泰雅一路牛鬥巷52號',
                'telephone' => '03 9891731',
            ],
            467 => 
            [
                'id' => 1468,
                'name' => '大同分駐所',
                'name_in_en' => 'Datong Police Station',
                'zip_code' => 267,
                'address' => '宜蘭縣大同鄉朝陽39號',
                'telephone' => '03 9801176',
            ],
            468 => 
            [
                'id' => 1469,
                'name' => '寒溪派出所',
                'name_in_en' => 'Hansi Police Station',
                'zip_code' => 267,
                'address' => '宜蘭縣大同鄉寒溪巷65之2號',
                'telephone' => '03 9517465',
            ],
            469 => 
            [
                'id' => 1470,
                'name' => '大隱派出所',
                'name_in_en' => 'Dayin Police Station',
                'zip_code' => 266,
                'address' => '宜蘭縣三星鄉三星路2段350號',
                'telephone' => '03 9898910',
            ],
            470 => 
            [
                'id' => 1471,
                'name' => '大洲派出所',
                'name_in_en' => 'Dajhou Police Station',
                'zip_code' => 266,
                'address' => '宜蘭縣三星鄉上將路2段468號',
                'telephone' => '03 9573517',
            ],
            471 => 
            [
                'id' => 1472,
                'name' => '清水檢查哨',
                'name_in_en' => 'Cingshuei Checkpoint',
                'zip_code' => 267,
                'address' => '宜蘭縣大同鄉三星路8段501巷7號',
                'telephone' => '03 9894520',
            ],
            472 => 
            [
                'id' => 1473,
                'name' => '太平山檢查哨',
                'name_in_en' => 'Taipingshan Checkpoint',
                'zip_code' => 267,
                'address' => '宜蘭縣大同鄉太平巷94之3號',
                'telephone' => '03 9809860',
            ],
            473 => 
            [
                'id' => 1474,
                'name' => '礁溪分局',
                'name_in_en' => 'Jiaosi  Precinct Yilan County Government Police Bureau',
                'zip_code' => 262,
                'address' => '宜蘭縣礁溪鄉中山路2段157號',
                'telephone' => '03 9882053',
            ],
            474 => 
            [
                'id' => 1475,
                'name' => '礁溪派出所',
                'name_in_en' => 'Jiaosi Police Station',
                'zip_code' => 262,
                'address' => '宜蘭縣礁溪鄉中山路2段157號',
                'telephone' => '03 9882214',
            ],
            475 => 
            [
                'id' => 1476,
                'name' => '美城派出所',
                'name_in_en' => 'Meicheng Police Station',
                'zip_code' => 263,
                'address' => '宜蘭縣壯圍鄉大福路3段38號',
                'telephone' => '03 9303691',
            ],
            476 => 
            [
                'id' => 1477,
                'name' => '福成派出所',
                'name_in_en' => 'Fucheng Police Station',
                'zip_code' => 261,
                'address' => '宜蘭縣頭城鎮宜三路2段439號',
                'telephone' => '03 9771896',
            ],
            477 => 
            [
                'id' => 1478,
                'name' => '二城派出所',
                'name_in_en' => 'Ercheng Police Station',
                'zip_code' => 261,
                'address' => '宜蘭縣頭城鎮青雲路1段145號',
                'telephone' => '03 9882654',
            ],
            478 => 
            [
                'id' => 1479,
                'name' => '大福派出所',
                'name_in_en' => 'Dafu Police Station',
                'zip_code' => 263,
                'address' => '宜蘭縣壯圍鄉壯濱路6段200號',
                'telephone' => '03 9301994',
            ],
            479 => 
            [
                'id' => 1480,
                'name' => '龍潭派出所',
                'name_in_en' => 'Longtan Police Station',
                'zip_code' => 262,
                'address' => '宜蘭縣礁溪鄉大坡路135號',
                'telephone' => '03 9285514',
            ],
            480 => 
            [
                'id' => 1481,
                'name' => '四城派出所',
                'name_in_en' => 'Sihcheng Police Station',
                'zip_code' => 262,
                'address' => '宜蘭縣礁溪鄉礁溪路1段157號',
                'telephone' => '03-9284072',
            ],
            481 => 
            [
                'id' => 1482,
                'name' => '頭城分駐所',
                'name_in_en' => 'Toucheng Police Station',
                'zip_code' => 261,
                'address' => '宜蘭縣頭城鎮開蘭路283號',
                'telephone' => '03 9771125',
            ],
            482 => 
            [
                'id' => 1483,
                'name' => '忠孝派出所',
                'name_in_en' => 'Jhongsiao Police Station',
                'zip_code' => 263,
                'address' => '宜蘭縣壯圍鄉順和路77號',
                'telephone' => '03 9301984',
            ],
            483 => 
            [
                'id' => 1484,
                'name' => '壯圍分駐所',
                'name_in_en' => 'Jhuangwei Police Station',
                'zip_code' => 263,
                'address' => '宜蘭縣壯圍鄉壯五路158號',
                'telephone' => '03 9382162',
            ],
            484 => 
            [
                'id' => 1485,
                'name' => '大里派出所',
                'name_in_en' => 'Dali Police Station',
                'zip_code' => 261,
                'address' => '宜蘭縣頭城鎮大里路94號',
                'telephone' => '03 9781139',
            ],
            485 => 
            [
                'id' => 1486,
                'name' => '三城派出所',
                'name_in_en' => 'Sancheng Police Station',
                'zip_code' => 262,
                'address' => '宜蘭縣礁溪鄉礁溪路3段195號',
                'telephone' => '03 9881961',
            ],
            486 => 
            [
                'id' => 1487,
                'name' => '大溪派出所',
                'name_in_en' => 'Dasi Police Station',
                'zip_code' => 261,
                'address' => '宜蘭縣頭城鎮濱海路5段187號',
                'telephone' => '03 9781205',
            ],
            487 => 
            [
                'id' => 1488,
                'name' => '羅東分局',
                'name_in_en' => 'Luodong  Precinct Yilan County Government Police Bureau',
                'zip_code' => 265,
                'address' => '宜蘭縣羅東鎮公正路159號',
                'telephone' => '03 9542071',
            ],
            488 => 
            [
                'id' => 1489,
                'name' => '利澤派出所',
                'name_in_en' => 'Lize Police Station',
                'zip_code' => 268,
                'address' => '宜蘭縣五結鄉利澤路6號',
                'telephone' => '03 9503512',
            ],
            489 => 
            [
                'id' => 1490,
                'name' => '廣興派出所',
                'name_in_en' => 'Guangsing Police Station',
                'zip_code' => 269,
                'address' => '宜蘭縣冬山鄉廣興路193號',
                'telephone' => '03 9512210',
            ],
            490 => 
            [
                'id' => 1491,
                'name' => '二結派出所',
                'name_in_en' => 'Erjie Police Station',
                'zip_code' => 268,
                'address' => '宜蘭縣五結鄉西河路1號',
                'telephone' => '03 9653901',
            ],
            491 => 
            [
                'id' => 1492,
                'name' => '五結分駐所',
                'name_in_en' => 'Wujie Police Station',
                'zip_code' => 268,
                'address' => '宜蘭縣五結鄉五結中路2段98號',
                'telephone' => '03 9504381',
            ],
            492 => 
            [
                'id' => 1493,
                'name' => '順安派出所',
                'name_in_en' => 'Shunan Police Station',
                'zip_code' => 269,
                'address' => '宜蘭縣冬山鄉義成路2段394號',
                'telephone' => '03 9581804',
            ],
            493 => 
            [
                'id' => 1494,
                'name' => '冬山分駐所',
                'name_in_en' => 'Dongshan Police Station',
                'zip_code' => 269,
                'address' => '宜蘭縣冬山鄉冬山路98之9號',
                'telephone' => '03 9591651',
            ],
            494 => 
            [
                'id' => 1495,
                'name' => '成功派出所',
                'name_in_en' => 'Chenggong Police Station',
                'zip_code' => 265,
                'address' => '宜蘭縣羅東鎮興東南路46號',
                'telephone' => '03 9542471',
            ],
            495 => 
            [
                'id' => 1496,
                'name' => '開羅派出所',
                'name_in_en' => 'Kailuo Police Station',
                'zip_code' => 265,
                'address' => '宜蘭縣羅東鎮南昌東街1號',
                'telephone' => '03 9542121',
            ],
            496 => 
            [
                'id' => 1497,
                'name' => '公正派出所',
                'name_in_en' => 'Gongjheng Police Station',
                'zip_code' => 265,
                'address' => '宜蘭縣羅東鎮公正路159號',
                'telephone' => '03 9542029',
            ],
            497 => 
            [
                'id' => 1498,
                'name' => '蘇澳分局',
                'name_in_en' => 'Suao  Precinct Yilan County Government Police Bureau',
                'zip_code' => 270,
                'address' => '宜蘭縣蘇澳鎮中山路1段252號',
                'telephone' => '03 9951356',
            ],
            498 => 
            [
                'id' => 1499,
                'name' => '蘇澳派出所',
                'name_in_en' => 'Suao Police Station',
                'zip_code' => 270,
                'address' => '宜蘭縣蘇澳鎮中山路1段252號',
                'telephone' => '03 9962126',
            ],
            499 => 
            [
                'id' => 1500,
                'name' => '澳花派出所',
                'name_in_en' => 'Aohua Police Station',
                'zip_code' => 272,
                'address' => '宜蘭縣南澳鄉中央路50號',
                'telephone' => '03 9985152',
            ],
        ]);
        DB::table('taiwan_police_stations')->insert([
            0 => 
            [
                'id' => 1501,
                'name' => '武塔派出所',
                'name_in_en' => 'Wuta Police Station',
                'zip_code' => 272,
                'address' => '宜蘭縣南澳鄉新溪路5號',
                'telephone' => '03 9981902',
            ],
            1 => 
            [
                'id' => 1502,
                'name' => '碧候派出所',
                'name_in_en' => 'Bihou Police Station',
                'zip_code' => 272,
                'address' => '宜蘭縣南澳鄉信義路陽明巷78號',
                'telephone' => '03 9981903',
            ],
            2 => 
            [
                'id' => 1503,
                'name' => '東澳派出所',
                'name_in_en' => 'Dongao Police Station',
                'zip_code' => 270,
                'address' => '宜蘭縣南澳鄉蘇花路3段161號',
                'telephone' => '03 9986080',
            ],
            3 => 
            [
                'id' => 1504,
                'name' => '南澳分駐所',
                'name_in_en' => 'Nanao Police Station',
                'zip_code' => 272,
                'address' => '宜蘭縣南澳鄉蘇花路2段373號',
                'telephone' => '03 9981120',
            ],
            4 => 
            [
                'id' => 1505,
                'name' => '南方澳派出所',
                'name_in_en' => 'Nanfang-ao Police Station',
                'zip_code' => 270,
                'address' => '宜蘭縣蘇澳鎮漁港路84號',
                'telephone' => '03 9963580',
            ],
            5 => 
            [
                'id' => 1506,
                'name' => '馬賽派出所',
                'name_in_en' => 'Masai Police Station',
                'zip_code' => 270,
                'address' => '宜蘭縣蘇澳鎮隘丁路12號',
                'telephone' => '03 9902604',
            ],
            6 => 
            [
                'id' => 1507,
                'name' => '新城派出所',
                'name_in_en' => 'Sincheng Police Station',
                'zip_code' => 270,
                'address' => '宜蘭縣蘇澳鎮中山路2段493號',
                'telephone' => '03 9969827',
            ],
            7 => 
            [
                'id' => 1508,
                'name' => '港邊派出所',
                'name_in_en' => 'Gangbian Police Station',
                'zip_code' => 270,
                'address' => '宜蘭縣蘇澳鎮蘇濱路1段195號',
                'telephone' => '03 9905608',
            ],
            8 => 
            [
                'id' => 1509,
                'name' => '花蓮縣警察局',
                'name_in_en' => 'Hualien County Police Bureau',
                'zip_code' => 970,
                'address' => '花蓮縣花蓮市府前路21號',
                'telephone' => '03 8224138',
            ],
            9 => 
            [
                'id' => 1510,
                'name' => '花蓮分局',
                'name_in_en' => 'Hualien  police  precinct',
                'zip_code' => 970,
                'address' => '花蓮縣花蓮市軒轅路32號',
                'telephone' => '03 8354008',
            ],
            10 => 
            [
                'id' => 1511,
                'name' => '軒轅派出所',
                'name_in_en' => 'Syuanyuan police  station',
                'zip_code' => 970,
                'address' => '花蓮縣花蓮市軒轅路32號',
                'telephone' => '03 8328344',
            ],
            11 => 
            [
                'id' => 1512,
                'name' => '民意派出所',
                'name_in_en' => 'Minyi  police  station',
                'zip_code' => 970,
                'address' => '花蓮縣花蓮市府前路518號',
                'telephone' => '03 8227827',
            ],
            12 => 
            [
                'id' => 1513,
                'name' => '美崙派出所',
                'name_in_en' => 'Meilun  police station',
                'zip_code' => 970,
                'address' => '花蓮縣花蓮市民權路209號',
                'telephone' => '03 8228341',
            ],
            13 => 
            [
                'id' => 1514,
                'name' => '豐川派出所',
                'name_in_en' => 'Fongchuan  police  station',
                'zip_code' => 970,
                'address' => '花蓮縣花蓮市國民八街15號',
                'telephone' => '03 8357871',
            ],
            14 => 
            [
                'id' => 1515,
                'name' => '中華派出所',
                'name_in_en' => 'Jhonghua  police  station',
                'zip_code' => 970,
                'address' => '花蓮縣花蓮市中華路300號',
                'telephone' => '03 8328342',
            ],
            15 => 
            [
                'id' => 1516,
                'name' => '中正派出所',
                'name_in_en' => 'Jhongjheng  police  station',
                'zip_code' => 970,
                'address' => '花蓮縣花蓮市中正路448號',
                'telephone' => '03 8326822',
            ],
            16 => 
            [
                'id' => 1517,
                'name' => '中山派出所',
                'name_in_en' => 'Jhongshan  police  station',
                'zip_code' => 970,
                'address' => '花蓮縣花蓮市林森路232號',
                'telephone' => '03 8328343',
            ],
            17 => 
            [
                'id' => 1518,
                'name' => '自強派出所',
                'name_in_en' => 'Zihciang  police  station',
                'zip_code' => 970,
                'address' => '花蓮縣花蓮市中央路3段840號',
                'telephone' => '03 8569374',
            ],
            18 => 
            [
                'id' => 1519,
                'name' => '吉安分局',
                'name_in_en' => 'Ji-an  police  precinct',
                'zip_code' => 973,
                'address' => '花蓮縣吉安鄉中正路1段38號',
                'telephone' => '03 8531701',
            ],
            19 => 
            [
                'id' => 1520,
                'name' => '月眉派出所',
                'name_in_en' => 'Yuemei  police  station',
                'zip_code' => 974,
                'address' => '花蓮縣壽豐鄉月眉村7鄰月眉3段42號',
                'telephone' => '03 8631001',
            ],
            20 => 
            [
                'id' => 1521,
                'name' => '池南派出所',
                'name_in_en' => 'Chihnan  police  station',
                'zip_code' => 974,
                'address' => '花蓮縣壽豐鄉池南路2段13號',
                'telephone' => '03 8641280',
            ],
            21 => 
            [
                'id' => 1522,
                'name' => '鹽寮派出所',
                'name_in_en' => 'Yanliao police station',
                'zip_code' => 974,
                'address' => '花蓮縣壽豐鄉鹽寮村鹽寮129號',
                'telephone' => '03 8671200',
            ],
            22 => 
            [
                'id' => 1523,
                'name' => '水源派出所',
                'name_in_en' => 'Shueiyuan   police  station',
                'zip_code' => 972,
                'address' => '花蓮縣秀林鄉水源村9鄰水源109號',
                'telephone' => '03 8572083',
            ],
            23 => 
            [
                'id' => 1524,
                'name' => '銅門派出所',
                'name_in_en' => 'Tongmen  police  station',
                'zip_code' => 972,
                'address' => '花蓮縣秀林鄉銅門村9鄰銅門65號',
                'telephone' => '03 8641051',
            ],
            24 => 
            [
                'id' => 1525,
                'name' => '北昌派出所',
                'name_in_en' => 'Beichang  police  station',
                'zip_code' => 973,
                'address' => '花蓮縣吉安鄉壽昌街6號',
                'telephone' => '03 8569376',
            ],
            25 => 
            [
                'id' => 1526,
                'name' => '志學派出所',
                'name_in_en' => 'Jhihsyue  police  station',
                'zip_code' => 974,
                'address' => '花蓮縣壽豐鄉中山路2段238號',
                'telephone' => '03 8661282',
            ],
            26 => 
            [
                'id' => 1527,
                'name' => '太昌派出所',
                'name_in_en' => 'Taichang  police station',
                'zip_code' => 973,
                'address' => '花蓮縣吉安鄉吉安路1段37號',
                'telephone' => '03 8569425',
            ],
            27 => 
            [
                'id' => 1528,
                'name' => '吉安派出所',
                'name_in_en' => 'Ji-an police  station',
                'zip_code' => 973,
                'address' => '花蓮縣吉安鄉吉安村吉安路2段122號',
                'telephone' => '03 8525894',
            ],
            28 => 
            [
                'id' => 1529,
                'name' => '水璉派出所',
                'name_in_en' => 'Shueilian  police  station',
                'zip_code' => 974,
                'address' => '花蓮縣壽豐鄉水璉村3鄰水璉一街53號',
                'telephone' => '03 8601011',
            ],
            29 => 
            [
                'id' => 1530,
                'name' => '仁里派出所',
                'name_in_en' => 'Renli  police  station',
                'zip_code' => 973,
                'address' => '花蓮縣吉安鄉中正路1段38號',
                'telephone' => '03 8527894',
            ],
            30 => 
            [
                'id' => 1531,
                'name' => '稻香派出所',
                'name_in_en' => 'Daosiang  police  station',
                'zip_code' => 973,
                'address' => '花蓮縣吉安鄉稻香路62號',
                'telephone' => '03 8521340',
            ],
            31 => 
            [
                'id' => 1532,
                'name' => '豐田派出所',
                'name_in_en' => 'Fongtian  police  station',
                'zip_code' => 974,
                'address' => '花蓮縣壽豐鄉豐山街1號',
                'telephone' => '03 8651486',
            ],
            32 => 
            [
                'id' => 1533,
                'name' => '南華派出所',
                'name_in_en' => 'Nanhua  police  station',
                'zip_code' => 973,
                'address' => '花蓮縣吉安鄉吉安路6段351巷10號',
                'telephone' => '03 8521672',
            ],
            33 => 
            [
                'id' => 1534,
                'name' => '壽豐分駐所',
                'name_in_en' => 'Shoufong  Police  Station',
                'zip_code' => 974,
                'address' => '花蓮縣壽豐鄉壽山路22號',
                'telephone' => '03 8651337',
            ],
            34 => 
            [
                'id' => 1535,
                'name' => '光華派出所',
                'name_in_en' => 'Guanghua police station',
                'zip_code' => 973,
                'address' => '花蓮縣吉安鄉南濱路1段459號',
                'telephone' => '03 8423135',
            ],
            35 => 
            [
                'id' => 1536,
                'name' => '新城分局',
                'name_in_en' => 'Sincheng   police  precinct',
                'zip_code' => 971,
                'address' => '花蓮縣新城鄉中山路59號',
                'telephone' => '03 8611204',
            ],
            36 => 
            [
                'id' => 1537,
                'name' => '和平派出所',
                'name_in_en' => 'Heping  police  station',
                'zip_code' => 972,
                'address' => '花蓮縣秀林鄉和平村121號',
                'telephone' => '03 8681034',
            ],
            37 => 
            [
                'id' => 1538,
                'name' => '崇德派出所',
                'name_in_en' => 'Chongde  police  station',
                'zip_code' => 972,
                'address' => '花蓮縣秀林鄉崇德村6鄰崇德82號',
                'telephone' => '03 8621043',
            ],
            38 => 
            [
                'id' => 1539,
                'name' => '富世派出所',
                'name_in_en' => 'Fushih  police  station',
                'zip_code' => 972,
                'address' => '花蓮縣秀林鄉富世村8鄰富世135號',
                'telephone' => '03 8611344',
            ],
            39 => 
            [
                'id' => 1540,
                'name' => '天祥派出所',
                'name_in_en' => 'Tiansiang  police  station',
                'zip_code' => 972,
                'address' => '花蓮縣秀林鄉富世村13鄰天祥22之1號',
                'telephone' => '03 8691139',
            ],
            40 => 
            [
                'id' => 1541,
                'name' => '合歡派出所',
                'name_in_en' => 'Hehuan  police  station',
                'zip_code' => 972,
                'address' => '花蓮縣秀林鄉富世村19鄰關原20之1號',
                'telephone' => '042 5991114',
            ],
            41 => 
            [
                'id' => 1542,
                'name' => '秀林分駐所',
                'name_in_en' => 'Sioulin police station',
                'zip_code' => 972,
                'address' => '花蓮縣秀林鄉秀林村12鄰秀林路69號',
                'telephone' => '03 8611090',
            ],
            42 => 
            [
                'id' => 1543,
                'name' => '加灣派出所',
                'name_in_en' => 'Jiawan  police  station',
                'zip_code' => 972,
                'address' => '花蓮縣秀林鄉景美村7鄰加灣128之6號',
                'telephone' => '03 8260769',
            ],
            43 => 
            [
                'id' => 1544,
                'name' => '佳民派出所',
                'name_in_en' => 'Jiamin  police  station',
                'zip_code' => 972,
                'address' => '花蓮縣秀林鄉佳民村8鄰佳民123號',
                'telephone' => '03 8263274',
            ],
            44 => 
            [
                'id' => 1545,
                'name' => '新城派出所',
                'name_in_en' => 'Sincheng   police  station',
                'zip_code' => 971,
                'address' => '花蓮縣新城鄉中山路59號',
                'telephone' => '03 8611004',
            ],
            45 => 
            [
                'id' => 1546,
                'name' => '北埔派出所',
                'name_in_en' => 'Beipu police station',
                'zip_code' => 971,
                'address' => '花蓮縣新城鄉北埔路271號',
                'telephone' => '03 8262484',
            ],
            46 => 
            [
                'id' => 1547,
                'name' => '嘉里派出所',
                'name_in_en' => 'Jiali police station',
                'zip_code' => 971,
                'address' => '花蓮縣新城鄉嘉里三街47號',
                'telephone' => '03 8264135',
            ],
            47 => 
            [
                'id' => 1548,
                'name' => '玉里分局',
                'name_in_en' => 'Yuli  police  precinct',
                'zip_code' => 981,
                'address' => '花蓮縣玉里鎮博愛路200號',
                'telephone' => '03 8888568',
            ],
            48 => 
            [
                'id' => 1549,
                'name' => '立山派出所',
                'name_in_en' => 'Lishan police station',
                'zip_code' => 982,
                'address' => '花蓮縣卓溪鄉立山村17鄰山里78號',
                'telephone' => '03 8841501',
            ],
            49 => 
            [
                'id' => 1550,
                'name' => '中平派出所',
                'name_in_en' => 'Zhongping police station',
                'zip_code' => 982,
                'address' => '花蓮縣卓溪鄉太平村9鄰中興20之3號',
                'telephone' => '03 8887357',
            ],
            50 => 
            [
                'id' => 1551,
                'name' => '東里派出所',
                'name_in_en' => 'Dongli police station',
                'zip_code' => 983,
                'address' => '花蓮縣富里鄉東里村5鄰大庄路38號',
                'telephone' => '03 8861114',
            ],
            51 => 
            [
                'id' => 1552,
                'name' => '卓溪分駐所',
                'name_in_en' => 'Zhuoxi police station',
                'zip_code' => 982,
                'address' => '花蓮縣卓溪鄉中正路69號',
                'telephone' => '03 8886024',
            ],
            52 => 
            [
                'id' => 1553,
                'name' => '卓樂派出所',
                'name_in_en' => 'Zhuole Police Station',
                'zip_code' => 982,
                'address' => '花蓮縣卓溪鄉卓清村11鄰卓樂15號',
                'telephone' => '03 8888150',
            ],
            53 => 
            [
                'id' => 1554,
                'name' => '大禹派出所',
                'name_in_en' => 'Dayu police  station',
                'zip_code' => 981,
                'address' => '花蓮縣玉里鎮大禹里21鄰大禹227號',
                'telephone' => '03 8886025',
            ],
            54 => 
            [
                'id' => 1555,
                'name' => '三民派出所',
                'name_in_en' => 'Sanmin police station',
                'zip_code' => 981,
                'address' => '花蓮縣玉里鎮三民里9鄰三民26號',
                'telephone' => '03 8841496',
            ],
            55 => 
            [
                'id' => 1556,
                'name' => '崙天派出所',
                'name_in_en' => 'Luntian police station',
                'zip_code' => 983,
                'address' => '花蓮縣卓溪鄉古風村1鄰崙天5號',
                'telephone' => '03 8846067',
            ],
            56 => 
            [
                'id' => 1557,
                'name' => '春日派出所',
                'name_in_en' => 'Chunri police  station',
                'zip_code' => 981,
                'address' => '花蓮縣玉里鎮春日里11鄰神農74號',
                'telephone' => '03 8871134',
            ],
            57 => 
            [
                'id' => 1558,
                'name' => '富里分駐所',
                'name_in_en' => 'Fuli  police station',
                'zip_code' => 983,
                'address' => '花蓮縣富里鄉中山路132號',
                'telephone' => '03 8831078',
            ],
            58 => 
            [
                'id' => 1559,
                'name' => '觀音派出所',
                'name_in_en' => 'Guanyin police station',
                'zip_code' => 981,
                'address' => '花蓮縣玉里鎮觀音里16鄰觀音14號',
                'telephone' => '03 8851040',
            ],
            59 => 
            [
                'id' => 1560,
                'name' => '竹田派出所',
                'name_in_en' => 'Zhutian police station',
                'zip_code' => 983,
                'address' => '花蓮縣富里鄉竹田村1鄰東竹40號',
                'telephone' => '03 8821044',
            ],
            60 => 
            [
                'id' => 1561,
                'name' => '樂合派出所',
                'name_in_en' => 'Lehe police station',
                'zip_code' => 981,
                'address' => '花蓮縣玉里鎮樂合里12鄰樂合27號',
                'telephone' => '03 8883384',
            ],
            61 => 
            [
                'id' => 1562,
                'name' => '玉里派出所',
                'name_in_en' => 'Yuli  police  station',
                'zip_code' => 981,
                'address' => '花蓮縣玉里鎮博愛路200號',
                'telephone' => '03 8882245',
            ],
            62 => 
            [
                'id' => 1563,
                'name' => '永豐派出所',
                'name_in_en' => 'Yongfeng police station',
                'zip_code' => 983,
                'address' => '花蓮縣富里鄉豐南村4鄰永豐93之4號',
                'telephone' => '03 8832669',
            ],
            63 => 
            [
                'id' => 1564,
                'name' => '鳳林分局',
                'name_in_en' => 'Fonglin police   precinct',
                'zip_code' => 975,
                'address' => '花蓮縣鳳林鎮信義路37號',
                'telephone' => '03 8762324',
            ],
            64 => 
            [
                'id' => 1565,
                'name' => '萬榮分駐所',
                'name_in_en' => 'Wanrong   police  station',
                'zip_code' => 979,
                'address' => '花蓮縣萬榮鄉萬榮村1鄰萬榮14之1號',
                'telephone' => '03 8751549',
            ],
            65 => 
            [
                'id' => 1566,
                'name' => '紅葉派出所',
                'name_in_en' => 'Hongye    police  station',
                'zip_code' => 979,
                'address' => '花蓮縣萬榮鄉紅葉村1鄰紅葉11號',
                'telephone' => '03 8871372',
            ],
            66 => 
            [
                'id' => 1567,
                'name' => '富源派出所',
                'name_in_en' => 'Fuyuan   police  station',
                'zip_code' => 977,
                'address' => '花蓮縣豐濱鄉富源村9鄰中正路159號',
                'telephone' => '03 8811014',
            ],
            67 => 
            [
                'id' => 1568,
                'name' => '西林派出所',
                'name_in_en' => 'Silin   police  station',
                'zip_code' => 979,
                'address' => '花蓮縣萬榮鄉西林村8鄰西林130號',
                'telephone' => '03 8771116',
            ],
            68 => 
            [
                'id' => 1569,
                'name' => '奇美派出所',
                'name_in_en' => 'Cimei    police  station',
                'zip_code' => 978,
                'address' => '花蓮縣瑞穗鄉奇美村2鄰奇美20號',
                'telephone' => '03 8991071',
            ],
            69 => 
            [
                'id' => 1570,
                'name' => '新社派出所',
                'name_in_en' => 'Sinshe    police  station',
                'zip_code' => 977,
                'address' => '花蓮縣豐濱鄉新社村7鄰新社161號',
                'telephone' => '03 8711329',
            ],
            70 => 
            [
                'id' => 1571,
                'name' => '舞鶴派出所',
                'name_in_en' => 'Wuhe   police  station',
                'zip_code' => 978,
                'address' => '花蓮縣瑞穗鄉舞鶴村1鄰舞鶴59號',
                'telephone' => '03 8872874',
            ],
            71 => 
            [
                'id' => 1572,
                'name' => '港口派出所',
                'name_in_en' => 'Gangkou    police  station',
                'zip_code' => 977,
                'address' => '花蓮縣豐濱鄉靜浦村10鄰靜浦10號',
                'telephone' => '03 8781046',
            ],
            72 => 
            [
                'id' => 1573,
                'name' => '大富派出所',
                'name_in_en' => 'Dafu   police  station',
                'zip_code' => 976,
                'address' => '花蓮縣光復鄉中山路1段23號',
                'telephone' => '03 8731093',
            ],
            73 => 
            [
                'id' => 1574,
                'name' => '富田派出所',
                'name_in_en' => 'Futian   police  station',
                'zip_code' => 976,
                'address' => '花蓮縣光復鄉中正路2段55號',
                'telephone' => '03 8702623',
            ],
            74 => 
            [
                'id' => 1575,
                'name' => '豐濱分駐所',
                'name_in_en' => 'Fongbin    police  station',
                'zip_code' => 977,
                'address' => '花蓮縣豐濱鄉三民路104號',
                'telephone' => '03 8791148',
            ],
            75 => 
            [
                'id' => 1576,
                'name' => '長橋派出所',
                'name_in_en' => 'Changciao   police  station',
                'zip_code' => 975,
                'address' => '花蓮縣鳳林鎮長橋路91號',
                'telephone' => '03 8751314',
            ],
            76 => 
            [
                'id' => 1577,
                'name' => '瑞穗分駐所',
                'name_in_en' => 'Rueisuei   police  station',
                'zip_code' => 978,
                'address' => '花蓮縣瑞穗鄉中正南路2號',
                'telephone' => '03 8872057',
            ],
            77 => 
            [
                'id' => 1578,
                'name' => '山興派出所',
                'name_in_en' => 'Shansing   police  station',
                'zip_code' => 975,
                'address' => '花蓮縣鳳林鎮山文路7號',
                'telephone' => '03 8741014',
            ],
            78 => 
            [
                'id' => 1579,
                'name' => '光復分駐所',
                'name_in_en' => 'Guangfu   police  station',
                'zip_code' => 976,
                'address' => '花蓮縣光復鄉中正路1段127號',
                'telephone' => '03 8701074',
            ],
            79 => 
            [
                'id' => 1580,
                'name' => '南平派出所',
                'name_in_en' => 'Nanping   police  station',
                'zip_code' => 975,
                'address' => '花蓮縣鳳林鎮自強路372號',
                'telephone' => '03 8771594',
            ],
            80 => 
            [
                'id' => 1581,
                'name' => '鳳林派出所',
                'name_in_en' => 'Fonglin   police  station',
                'zip_code' => 975,
                'address' => '花蓮縣鳳林鎮信義路37號',
                'telephone' => '03 8762293',
            ],
            81 => 
            [
                'id' => 1582,
                'name' => '臺東縣警察局',
                'name_in_en' => 'Taitung County Police Bureau',
                'zip_code' => 950,
                'address' => '臺東縣臺東市中山路268號',
                'telephone' => '089 324534',
            ],
            82 => 
            [
                'id' => 1583,
                'name' => '臺東分局',
                'name_in_en' => 'Taitung Police Precinct',
                'zip_code' => 950,
                'address' => '臺東縣臺東市桂林北路110號',
                'telephone' => '089 322306',
            ],
            83 => 
            [
                'id' => 1584,
                'name' => '中興派出所',
                'name_in_en' => 'Zhong-Xing Police Station',
                'zip_code' => 950,
                'address' => '臺東縣臺東市博愛路373號',
                'telephone' => '089 322127',
            ],
            84 => 
            [
                'id' => 1585,
                'name' => '公館派出所',
                'name_in_en' => 'Gong-Guan Police Station',
                'zip_code' => 951,
                'address' => '臺東縣綠島鄉公館村69號',
                'telephone' => '089 672564',
            ],
            85 => 
            [
                'id' => 1586,
                'name' => '建蘭派出所',
                'name_in_en' => 'Jian-Lan Police Station',
                'zip_code' => 952,
                'address' => '臺東縣蘭嶼鄉紅頭村50號',
                'telephone' => '089 732650',
            ],
            86 => 
            [
                'id' => 1587,
                'name' => '東清派出所',
                'name_in_en' => 'Dong-Qing Police Station',
                'zip_code' => 952,
                'address' => '臺東縣蘭嶼鄉東清村3號',
                'telephone' => '089 732975',
            ],
            87 => 
            [
                'id' => 1588,
                'name' => '朗島派出所',
                'name_in_en' => 'Lang-Dao Police Station',
                'zip_code' => 952,
                'address' => '臺東縣蘭嶼鄉朗島村13號',
                'telephone' => '089 732131',
            ],
            88 => 
            [
                'id' => 1589,
                'name' => '寶桑派出所',
                'name_in_en' => 'Bao-Sang Police Station',
                'zip_code' => 950,
                'address' => '臺東縣臺東市四維路一段369號',
                'telephone' => '089 322126',
            ],
            89 => 
            [
                'id' => 1590,
                'name' => '南王派出所',
                'name_in_en' => 'Nan-Wang Police Station',
                'zip_code' => 950,
                'address' => '臺東縣臺東市更生北路624號',
                'telephone' => '089 223817',
            ],
            90 => 
            [
                'id' => 1591,
                'name' => '馬蘭派出所',
                'name_in_en' => 'Ma-Lan Police Station',
                'zip_code' => 950,
                'address' => '臺東縣臺東市更生路678號',
                'telephone' => '089 226492',
            ],
            91 => 
            [
                'id' => 1592,
                'name' => '豐里派出所',
                'name_in_en' => 'Feng-Li Police Station',
                'zip_code' => 950,
                'address' => '臺東縣臺東市中華路3段126號',
                'telephone' => '089 327815',
            ],
            92 => 
            [
                'id' => 1593,
                'name' => '綠島分駐所',
                'name_in_en' => 'Green-Island Police Station',
                'zip_code' => 951,
                'address' => '臺東縣綠島鄉南寮村南寮158號',
                'telephone' => '089 672521',
            ],
            93 => 
            [
                'id' => 1594,
                'name' => '富岡派出所',
                'name_in_en' => 'Fu-Gang Police Station',
                'zip_code' => 950,
                'address' => '臺東縣臺東市松江路1段431號',
                'telephone' => '089 281040',
            ],
            94 => 
            [
                'id' => 1595,
                'name' => '卑南分駐所',
                'name_in_en' => 'Bei-Nan Police Station',
                'zip_code' => 954,
                'address' => '臺東縣卑南鄉賓朗村賓朗路440號',
                'telephone' => '089 223820',
            ],
            95 => 
            [
                'id' => 1596,
                'name' => '知本派出所',
                'name_in_en' => 'Zhi-Ben Police Station',
                'zip_code' => 950,
                'address' => '臺東縣臺東市大和路11號',
                'telephone' => '089 512614',
            ],
            96 => 
            [
                'id' => 1597,
                'name' => '初鹿派出所',
                'name_in_en' => 'Chu-Lu Police Station',
                'zip_code' => 954,
                'address' => '臺東縣卑南鄉初鹿村梅園路83號',
                'telephone' => '089 571126',
            ],
            97 => 
            [
                'id' => 1598,
                'name' => '東興派出所',
                'name_in_en' => 'Dong-Xing Police Station',
                'zip_code' => 950,
                'address' => '臺東縣臺東市中興路6段796號',
                'telephone' => '089 381714',
            ],
            98 => 
            [
                'id' => 1599,
                'name' => '利嘉派出所',
                'name_in_en' => 'Li-Jia Police Station',
                'zip_code' => 954,
                'address' => '臺東縣卑南鄉利嘉村利嘉路617號',
                'telephone' => '089 382819',
            ],
            99 => 
            [
                'id' => 1600,
                'name' => '永樂派出所',
                'name_in_en' => 'Youg-Le Police Station',
                'zip_code' => 950,
                'address' => '臺東縣臺東市正氣北路915號',
                'telephone' => '089 227818',
            ],
            100 => 
            [
                'id' => 1601,
                'name' => '溫泉派出所',
                'name_in_en' => 'Wen-Quaon Police Station',
                'zip_code' => 950,
                'address' => '臺東縣臺東市青海路4段343號',
                'telephone' => '089 512379',
            ],
            101 => 
            [
                'id' => 1602,
                'name' => '蘭嶼分駐所',
                'name_in_en' => 'Orchid-lsland Police Station',
                'zip_code' => 952,
                'address' => '臺東縣蘭嶼鄉椰油村椰油31號',
                'telephone' => '089 732011',
            ],
            102 => 
            [
                'id' => 1603,
                'name' => '大武分局',
                'name_in_en' => 'Da-Wu Police Precinct',
                'zip_code' => 965,
                'address' => '臺東縣大武鄉大武村大武街52號',
                'telephone' => '089 791001',
            ],
            103 => 
            [
                'id' => 1604,
                'name' => '達仁分駐所',
                'name_in_en' => 'Da-Ren Police Station',
                'zip_code' => 966,
                'address' => '臺東縣達仁鄉安朔村復興路100號',
                'telephone' => '089 702247',
            ],
            104 => 
            [
                'id' => 1605,
                'name' => '南田派出所',
                'name_in_en' => 'Nan-Tian Police Station',
                'zip_code' => 966,
                'address' => '臺東縣達仁鄉安朔村復興路100號',
                'telephone' => '089 702247',
            ],
            105 => 
            [
                'id' => 1606,
                'name' => '土坂派出所',
                'name_in_en' => 'Tu-Ban Police Station',
                'zip_code' => 966,
                'address' => '臺東縣達仁鄉土坂村7鄰107號',
                'telephone' => '089 761027',
            ],
            106 => 
            [
                'id' => 1607,
                'name' => '新化派出所',
                'name_in_en' => 'Sin-Hua Police Station',
                'zip_code' => 966,
                'address' => '臺東縣達仁鄉新化村1號',
                'telephone' => '089 791749',
            ],
            107 => 
            [
                'id' => 1608,
                'name' => '金峰分駐所',
                'name_in_en' => 'Jin-Fong Police Station',
                'zip_code' => 964,
                'address' => '臺東縣金峰鄉嘉蘭村30號',
                'telephone' => '089 751204',
            ],
            108 => 
            [
                'id' => 1609,
                'name' => '正興派出所',
                'name_in_en' => 'Jheng-Sing Police Station',
                'zip_code' => 964,
                'address' => '臺東縣金峰鄉正興村51號',
                'telephone' => '089 781364',
            ],
            109 => 
            [
                'id' => 1610,
                'name' => '台坂派出所',
                'name_in_en' => 'Tai-Ban Police Station',
                'zip_code' => 966,
                'address' => '臺東縣達仁鄉台阪村1鄰13之2號',
                'telephone' => '089 761047',
            ],
            110 => 
            [
                'id' => 1611,
                'name' => '大武派出所',
                'name_in_en' => 'Da-Wu Police Station',
                'zip_code' => 965,
                'address' => '臺東縣大武鄉大武村大武街52號',
                'telephone' => '089 791125',
            ],
            111 => 
            [
                'id' => 1612,
                'name' => '森永派出所',
                'name_in_en' => 'Sen-Yong Police Station',
                'zip_code' => 966,
                'address' => '臺東縣達仁鄉森永村森永6號',
                'telephone' => '089 702297',
            ],
            112 => 
            [
                'id' => 1613,
                'name' => '太麻里分駐所',
                'name_in_en' => 'Tai-Ma-Li Police Station',
                'zip_code' => 963,
                'address' => '臺東縣太麻里鄉泰和村太麻里街142號',
                'telephone' => '089 781134',
            ],
            113 => 
            [
                'id' => 1614,
                'name' => '尚武派出所',
                'name_in_en' => 'Shang-Wu Police Station',
                'zip_code' => 965,
                'address' => '臺東縣大武鄉尚武村客庄11號',
                'telephone' => '089 791105',
            ],
            114 => 
            [
                'id' => 1615,
                'name' => '多良派出所',
                'name_in_en' => 'Duo-Liang Police Station',
                'zip_code' => 963,
                'address' => '臺東縣太麻里鄉多良村大溪262號',
                'telephone' => '089 761368',
            ],
            115 => 
            [
                'id' => 1616,
                'name' => '金崙派出所',
                'name_in_en' => 'Jin-Lun Police Station',
                'zip_code' => 963,
                'address' => '臺東縣太麻里鄉金崙村金崙439號',
                'telephone' => '089 771086',
            ],
            116 => 
            [
                'id' => 1617,
                'name' => '美和派出所',
                'name_in_en' => 'Mei-He Police Staion',
                'zip_code' => 963,
                'address' => '臺東縣太麻里鄉美和村美和84之1號',
                'telephone' => '089 512542',
            ],
            117 => 
            [
                'id' => 1618,
                'name' => '成功分局',
                'name_in_en' => 'Cheng-Kang Police Precinct',
                'zip_code' => 961,
                'address' => '臺東縣成功鎮公民路87號',
                'telephone' => '089 851001',
            ],
            118 => 
            [
                'id' => 1619,
                'name' => '忠孝派出所',
                'name_in_en' => 'Jhon-Shiao Police Station',
                'zip_code' => 961,
                'address' => '臺東縣成功鎮成廣路9號',
                'telephone' => '089 871444',
            ],
            119 => 
            [
                'id' => 1620,
                'name' => '都歷派出所',
                'name_in_en' => 'Du-Li Police Station',
                'zip_code' => 961,
                'address' => '臺東縣成功鎮都歷路46號',
                'telephone' => '089 841290',
            ],
            120 => 
            [
                'id' => 1621,
                'name' => '東河分駐所',
                'name_in_en' => 'Dong-He Police Station',
                'zip_code' => 959,
                'address' => '臺東縣東河鄉東河村南東河368號',
                'telephone' => '089 896010',
            ],
            121 => 
            [
                'id' => 1622,
                'name' => '竹湖派出所',
                'name_in_en' => 'Jhu-Hu Police Station',
                'zip_code' => 962,
                'address' => '臺東縣長濱鄉寧埔村7號',
                'telephone' => '089 801257',
            ],
            122 => 
            [
                'id' => 1623,
                'name' => '寧埔派出所',
                'name_in_en' => 'Ning-Pu Police Station',
                'zip_code' => 962,
                'address' => '臺東縣長濱鄉寧埔村7號',
                'telephone' => '089 801257',
            ],
            123 => 
            [
                'id' => 1624,
                'name' => '都蘭派出所',
                'name_in_en' => 'Du-Lan Police Station',
                'zip_code' => 959,
                'address' => '臺東縣東河鄉都蘭村248號',
                'telephone' => '089 531209',
            ],
            124 => 
            [
                'id' => 1625,
                'name' => '泰源派出所',
                'name_in_en' => 'Tai-Yuan Police Station',
                'zip_code' => 959,
                'address' => '臺東縣東河鄉泰源村本部落281號',
                'telephone' => '089 891014',
            ],
            125 => 
            [
                'id' => 1626,
                'name' => '新豐派出所',
                'name_in_en' => 'Sin-Fong Police Station',
                'zip_code' => 961,
                'address' => '臺東縣成功鎮公民路87號',
                'telephone' => '089 851054',
            ],
            126 => 
            [
                'id' => 1627,
                'name' => '長濱分駐所',
                'name_in_en' => 'Chang-Bin Police Station',
                'zip_code' => 962,
                'address' => '臺東縣長濱鄉長濱村41號',
                'telephone' => '089 831034',
            ],
            127 => 
            [
                'id' => 1628,
                'name' => '樟原派出所',
                'name_in_en' => 'Jhang-Yuan Police Station',
                'zip_code' => 962,
                'address' => '臺東縣長濱鄉樟原村10號',
                'telephone' => '089 881027',
            ],
            128 => 
            [
                'id' => 1629,
                'name' => '三間派出所',
                'name_in_en' => 'San-Jian Police Station',
                'zip_code' => 962,
                'address' => '臺東縣長濱鄉樟原村10號',
                'telephone' => '089 881027',
            ],
            129 => 
            [
                'id' => 1630,
                'name' => '關山分局',
                'name_in_en' => 'Guan-Shan Police Precinct',
                'zip_code' => 965,
                'address' => '臺東縣關山鎮中正路27號',
                'telephone' => '089 811001',
            ],
            130 => 
            [
                'id' => 1631,
                'name' => '武陵派出所',
                'name_in_en' => 'Wu-Ling Police Station',
                'zip_code' => 953,
                'address' => '臺東縣延平鄉武陵村明野路10號',
                'telephone' => '089 551164',
            ],
            131 => 
            [
                'id' => 1632,
                'name' => '延平分駐所',
                'name_in_en' => 'Yan-Ping Police Station',
                'zip_code' => 953,
                'address' => '臺東縣延平鄉桃源村74號',
                'telephone' => '089 561245',
            ],
            132 => 
            [
                'id' => 1633,
                'name' => '鸞山派出所',
                'name_in_en' => 'Luan-Shan Police Station',
                'zip_code' => 953,
                'address' => '臺東縣延平鄉鸞山村19號',
                'telephone' => '089 568079',
            ],
            133 => 
            [
                'id' => 1634,
                'name' => '崁頂派出所',
                'name_in_en' => 'Kan-Ding Police Station',
                'zip_code' => 957,
                'address' => '臺東縣海端鄉坎頂村中福路25號',
                'telephone' => '089 811418',
            ],
            134 => 
            [
                'id' => 1635,
                'name' => '瑞源派出所',
                'name_in_en' => 'Jun-Yuan Police Station',
                'zip_code' => 955,
                'address' => '臺東縣鹿野鄉瑞源村文化路8號',
                'telephone' => '089 581134',
            ],
            135 => 
            [
                'id' => 1636,
                'name' => '瑞豐派出所',
                'name_in_en' => 'Jun-Feng Police Station',
                'zip_code' => 955,
                'address' => '臺東縣鹿野鄉瑞豐村中山路171號',
                'telephone' => '089 811419',
            ],
            136 => 
            [
                'id' => 1637,
                'name' => '龍泉派出所',
                'name_in_en' => 'Long-Qian Police Station',
                'zip_code' => 957,
                'address' => '臺東縣海端鄉廣原村龍泉路1號',
                'telephone' => '089 861344',
            ],
            137 => 
            [
                'id' => 1638,
                'name' => '錦安派出所',
                'name_in_en' => 'Jin-An Police Station',
                'zip_code' => 958,
                'address' => '臺東縣池上鄉萬安村萬安路12號',
                'telephone' => '089 862344',
            ],
            138 => 
            [
                'id' => 1639,
                'name' => '利稻派出所',
                'name_in_en' => 'Li-Dao Police Station',
                'zip_code' => 957,
                'address' => '臺東縣海端鄉利稻村文化路2號',
                'telephone' => '089 938064',
            ],
            139 => 
            [
                'id' => 1640,
                'name' => '向陽派出所',
                'name_in_en' => 'Shan-Iang Police Station',
                'zip_code' => 957,
                'address' => '臺東縣海端鄉利稻村向陽路1號',
                'telephone' => '988095763',
            ],
            140 => 
            [
                'id' => 1641,
                'name' => '關山派出所',
                'name_in_en' => 'Guan-Shan Police Station',
                'zip_code' => 956,
                'address' => '臺東縣關山鎮中福里中正路27號',
                'telephone' => '089 811284',
            ],
            141 => 
            [
                'id' => 1642,
                'name' => '霧鹿派出所',
                'name_in_en' => 'Wu-Lu Police Station',
                'zip_code' => 957,
                'address' => '臺東縣海端鄉霧鹿村霧鹿村1號',
                'telephone' => '089 935024',
            ],
            142 => 
            [
                'id' => 1643,
                'name' => '池上分駐所',
                'name_in_en' => 'Shi-Shang Police Station',
                'zip_code' => 958,
                'address' => '臺東縣池上鄉中山路211號',
                'telephone' => '089 862004',
            ],
            143 => 
            [
                'id' => 1644,
                'name' => '海端分駐所',
                'name_in_en' => 'Hai-Duan Police Station',
                'zip_code' => 957,
                'address' => '臺東縣海端鄉山界路17號',
                'telephone' => '089 931354',
            ],
            144 => 
            [
                'id' => 1645,
                'name' => '鹿野分駐所',
                'name_in_en' => 'Lu-Yeh Police Station',
                'zip_code' => 955,
                'address' => '臺東縣鹿野鄉中華路2段55號',
                'telephone' => '089 551114',
            ],
            145 => 
            [
                'id' => 1646,
                'name' => '電光派出所',
                'name_in_en' => 'Tien-Kuang Police Station',
                'zip_code' => 956,
                'address' => '臺東縣關山鎮電光里中興路42號',
                'telephone' => '089 951041',
            ],
            146 => 
            [
                'id' => 1647,
                'name' => '紅葉派出所',
                'name_in_en' => 'Hong-Yea Police Station',
                'zip_code' => 953,
                'address' => '臺東縣延平鄉紅葉村9號',
                'telephone' => '089 561146',
            ],
            147 => 
            [
                'id' => 1648,
                'name' => '初來派出所',
                'name_in_en' => 'Chu-Lai Police Station',
                'zip_code' => 957,
                'address' => '臺東縣海端鄉海端村初來路70號',
                'telephone' => '089 931004',
            ],
            148 => 
            [
                'id' => 1649,
                'name' => '澎湖縣政府警察局',
                'name_in_en' => 'Penghu County Police Bureau',
                'zip_code' => 880,
                'address' => '澎湖縣馬公市治平路36號',
                'telephone' => '06 9272557',
            ],
            149 => 
            [
                'id' => 1650,
                'name' => '馬公分局',
                'name_in_en' => 'Magong Precinct',
                'zip_code' => 880,
                'address' => '澎湖縣馬公市新生路201號',
                'telephone' => '06 9273284',
            ],
            150 => 
            [
                'id' => 1651,
                'name' => '光明派出所',
                'name_in_en' => 'Guangming Police Station',
                'zip_code' => 880,
                'address' => '澎湖縣馬公市新生路201號',
                'telephone' => '06 9272542',
            ],
            151 => 
            [
                'id' => 1652,
                'name' => '啟明派出所',
                'name_in_en' => 'Ciming Police Station',
                'zip_code' => 880,
                'address' => '澎湖縣馬公市臨海路33號',
                'telephone' => '06 9272541',
            ],
            152 => 
            [
                'id' => 1653,
                'name' => '文澳派出所',
                'name_in_en' => 'Wen-ao Police Station',
                'zip_code' => 880,
                'address' => '澎湖縣馬公市東文里5號',
                'telephone' => '06 9214622',
            ],
            153 => 
            [
                'id' => 1654,
                'name' => '東衛派出所',
                'name_in_en' => 'Dongwei Police Station',
                'zip_code' => 880,
                'address' => '澎湖縣馬公市東衛里15號',
                'telephone' => '06 9211318',
            ],
            154 => 
            [
                'id' => 1655,
                'name' => '鎖港派出所',
                'name_in_en' => 'Suogang Police Station',
                'zip_code' => 880,
                'address' => '澎湖縣馬公市鎖港里1559號',
                'telephone' => '06 9951024',
            ],
            155 => 
            [
                'id' => 1656,
                'name' => '虎井派出所',
                'name_in_en' => 'Hujing Police Station',
                'zip_code' => 880,
                'address' => '澎湖馬公市虎井里9鄰75-2號',
                'telephone' => '06 9291112',
            ],
            156 => 
            [
                'id' => 1657,
                'name' => '隘門派出所',
                'name_in_en' => 'Aimen Police Station',
                'zip_code' => 885,
                'address' => '澎湖縣湖西鄉隘門村1號',
                'telephone' => '06 9210780',
            ],
            157 => 
            [
                'id' => 1658,
                'name' => '龍門派出所',
                'name_in_en' => 'Longmen Police Station',
                'zip_code' => 885,
                'address' => '澎湖縣湖西鄉龍門村119之64號',
                'telephone' => '06 9921434',
            ],
            158 => 
            [
                'id' => 1659,
                'name' => '湖西分駐所',
                'name_in_en' => 'Husi Police Station',
                'zip_code' => 885,
                'address' => '澎湖縣湖西村77號',
                'telephone' => '06 9921022',
            ],
            159 => 
            [
                'id' => 1660,
                'name' => '沙港派出所',
                'name_in_en' => 'Shagang Police Station',
                'zip_code' => 885,
                'address' => '澎湖縣湖西鄉沙港村138號',
                'telephone' => '06 9210779',
            ],
            160 => 
            [
                'id' => 1661,
                'name' => '白沙分局',
                'name_in_en' => 'Baisha Precinct',
                'zip_code' => 884,
                'address' => '澎湖縣白沙鄉後寮村7之9號',
                'telephone' => '06 9932849',
            ],
            161 => 
            [
                'id' => 1662,
                'name' => '講美派出所',
                'name_in_en' => 'Jiangmei Police Station',
                'zip_code' => 884,
                'address' => '澎湖縣白沙鄉講美村103號',
                'telephone' => '06 9931501',
            ],
            162 => 
            [
                'id' => 1663,
                'name' => '白沙派出所',
                'name_in_en' => 'Baisha Police Station',
                'zip_code' => 884,
                'address' => '澎湖縣白沙鄉赤崁村135號',
                'telephone' => '06 9931071',
            ],
            163 => 
            [
                'id' => 1664,
                'name' => '通梁派出所',
                'name_in_en' => 'Tongliang Police Station',
                'zip_code' => 884,
                'address' => '澎湖縣白沙鄉後寮村7之9號',
                'telephone' => '06 9931484',
            ],
            164 => 
            [
                'id' => 1665,
                'name' => '吉貝派出所',
                'name_in_en' => 'Jibei Police Station',
                'zip_code' => 884,
                'address' => '澎湖縣白沙鄉吉貝村1號',
                'telephone' => '06 9911165',
            ],
            165 => 
            [
                'id' => 1666,
                'name' => '鳥嶼派出所',
                'name_in_en' => 'Niaoyu Police Station',
                'zip_code' => 884,
                'address' => '澎湖縣白沙鄉鳥嶼村211號',
                'telephone' => '06 9916170',
            ],
            166 => 
            [
                'id' => 1667,
                'name' => '竹灣派出所',
                'name_in_en' => 'Zhuwan Police Station',
                'zip_code' => 881,
                'address' => '澎湖縣西嶼鄉合界村1之9號',
                'telephone' => '06 9981701',
            ],
            167 => 
            [
                'id' => 1668,
                'name' => '西嶼分駐所',
                'name_in_en' => 'Siyu Police Station',
                'zip_code' => 881,
                'address' => '澎湖縣西嶼鄉池東村小池角214號',
                'telephone' => '06 9981155',
            ],
            168 => 
            [
                'id' => 1669,
                'name' => '外垵派出所',
                'name_in_en' => 'Wai-an Police Station',
                'zip_code' => 881,
                'address' => '澎湖縣西嶼鄉外垵村12號',
                'telephone' => '06 9981702',
            ],
            169 => 
            [
                'id' => 1670,
                'name' => '望安分局',
                'name_in_en' => 'Wang-an Precinct',
                'zip_code' => 882,
                'address' => '澎湖縣望安鄉東安村57號',
                'telephone' => '06 9991057',
            ],
            170 => 
            [
                'id' => 1671,
                'name' => '東垵派出所',
                'name_in_en' => 'Dong-an Police Station',
                'zip_code' => 882,
                'address' => '澎湖縣望安鄉東安村57號',
                'telephone' => '06 9991343',
            ],
            171 => 
            [
                'id' => 1672,
                'name' => '嶼坪派出所',
                'name_in_en' => 'Yuping Police Station',
                'zip_code' => 882,
                'address' => '澎湖縣望安鄉東嶼坪45號',
                'telephone' => '06 9991527',
            ],
            172 => 
            [
                'id' => 1673,
                'name' => '雙吉派出所',
                'name_in_en' => 'Shuangji Police Station',
                'zip_code' => 882,
                'address' => '澎湖縣望安鄉東吉村9號',
                'telephone' => '06 9991119',
            ],
            173 => 
            [
                'id' => 1674,
                'name' => '花嶼派出所',
                'name_in_en' => 'Huayu Police Station',
                'zip_code' => 882,
                'address' => '澎湖縣望安鄉花嶼村45之1號',
                'telephone' => '06 9991742',
            ],
            174 => 
            [
                'id' => 1675,
                'name' => '將軍派出所',
                'name_in_en' => 'Jiangjun Police Station',
                'zip_code' => 882,
                'address' => '澎湖縣望安鄉將軍村160號',
                'telephone' => '06 9902112',
            ],
            175 => 
            [
                'id' => 1676,
                'name' => '七美分駐所',
                'name_in_en' => 'Cimei Police Station',
                'zip_code' => 883,
                'address' => '澎湖縣七美鄉平和村10號',
                'telephone' => '06 9971001',
            ],
            176 => 
            [
                'id' => 1677,
                'name' => '金門縣警察局',
                'name_in_en' => 'Kinmen County Police Bureau',
                'zip_code' => 893,
                'address' => '金門縣金城鎮金山路15號',
                'telephone' => '082 325341',
            ],
            177 => 
            [
                'id' => 1678,
                'name' => '金城分局',
                'name_in_en' => 'Jincheng Precinct',
                'zip_code' => 893,
                'address' => '金門縣金城鎮民生路54巷1號',
                'telephone' => '082 328094',
            ],
            178 => 
            [
                'id' => 1679,
                'name' => '金城派出所',
                'name_in_en' => 'Jincheng Police Station',
                'zip_code' => 893,
                'address' => '金門縣金城鎮民生路54巷1號',
                'telephone' => '082 325539',
            ],
            179 => 
            [
                'id' => 1680,
                'name' => '金寧分駐所',
                'name_in_en' => 'Jinning Police Station',
                'zip_code' => 892,
                'address' => '金門縣金寧鄉盤山村仁愛新村2號',
                'telephone' => '082 325520',
            ],
            180 => 
            [
                'id' => 1681,
                'name' => '烈嶼分駐所',
                'name_in_en' => 'Lieyu Police Station',
                'zip_code' => 894,
                'address' => '金門縣烈嶼鄉林湖村西路37號',
                'telephone' => '082 362110',
            ],
            181 => 
            [
                'id' => 1682,
                'name' => '金湖分局',
                'name_in_en' => 'Jinhu Precinct',
                'zip_code' => 891,
                'address' => '金門縣金湖鎮黃海路90之3號',
                'telephone' => '082 335093',
            ],
            182 => 
            [
                'id' => 1683,
                'name' => '金湖派出所',
                'name_in_en' => 'Jinhu Police Station',
                'zip_code' => 891,
                'address' => '金門縣金湖鎮黃海路90之3號',
                'telephone' => '082 332559',
            ],
            183 => 
            [
                'id' => 1684,
                'name' => '金沙分駐所',
                'name_in_en' => 'Jinsha Police Station',
                'zip_code' => 890,
                'address' => '金門縣金沙鎮成功路1號',
                'telephone' => '082 352260',
            ],
            184 => 
            [
                'id' => 1685,
                'name' => '烏坵駐在所',
                'name_in_en' => 'Wuqiu Police Station',
                'zip_code' => 896,
                'address' => '金門縣烏坵鄉大坵村1號',
                'telephone' => '082 666112',
            ],
            185 => 
            [
                'id' => 1686,
                'name' => '福建省連江縣警察局',
                'name_in_en' => 'Lienchiang County Police Bureau',
                'zip_code' => 209,
                'address' => '連江縣南竿鄉介壽村260號',
                'telephone' => '083 625859',
            ],
            186 => 
            [
                'id' => 1687,
                'name' => '南竿警察所',
                'name_in_en' => 'Nangan Precinct',
                'zip_code' => 209,
                'address' => '連江縣南竿鄉介壽村260號',
                'telephone' => '083 622471',
            ],
            187 => 
            [
                'id' => 1688,
                'name' => '北竿警察所',
                'name_in_en' => 'Beigan Precinct',
                'zip_code' => 210,
                'address' => '連江縣北竿鄉塘岐村259號',
                'telephone' => '083 655234',
            ],
            188 => 
            [
                'id' => 1689,
                'name' => '莒光警察所',
                'name_in_en' => 'Juguang Precinct',
                'zip_code' => 211,
                'address' => '連江縣莒光鄉田沃村66之4號',
                'telephone' => '083 688153',
            ],
            189 => 
            [
                'id' => 1690,
                'name' => '東莒派出所',
                'name_in_en' => 'Dongjyu Police Station',
                'zip_code' => 211,
                'address' => '連江縣莒光鄉大坪村81-1號',
                'telephone' => '083 689046',
            ],
            190 => 
            [
                'id' => 1691,
                'name' => '東引警察所',
                'name_in_en' => 'Dongyin Precinct',
                'zip_code' => 212,
                'address' => '連江縣東引鄉中柳村121之1號',
                'telephone' => '083 677204',
            ],
            191 => 
            [
                'id' => 1692,
                'name' => '西區派出所',
                'name_in_en' => 'Western District Police Station',
                'zip_code' => 209,
                'address' => '連江縣南竿鄉馬祖村7號',
                'telephone' => '083 625368',
            ],
        ]);
    }
}