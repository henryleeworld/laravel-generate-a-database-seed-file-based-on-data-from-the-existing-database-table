<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaiwanGolfCoursesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('taiwan_golf_courses')->delete();
        DB::table('taiwan_golf_courses')->insert([
            0 => 
            [
                'id' => 1,
                'name' => '宜蘭縣礁溪高爾夫球場',
                'city' => '宜蘭縣',
                'address' => '宜蘭縣礁溪鄉林美村林尾路156號',
                'holes' => 18,
                'hectares' => '49.929024',
                'document_number' => '體委設字第0930018371號',
                'business_entity' => '亞達育樂事業股份有限公司',
            'telephone' => '(03)9886691',
            'fax' => '(03)9887811',
            ],
            1 => 
            [
                'id' => 2,
                'name' => '新淡水高爾夫球場',
                'city' => '新北市',
                'address' => '新北市淡水區八勢里3鄰八勢路300號',
                'holes' => 18,
                'hectares' => '55.592700',
            'document_number' => '台(84)體字第01309號',
                'business_entity' => '淡水企業股份有限公司',
            'telephone' => '(02)28092466',
            'fax' => '(02)28096120',
            ],
            2 => 
            [
                'id' => 3,
                'name' => '林口高爾夫球場',
                'city' => '新北市',
                'address' => '新北市林口區湖北里後湖50之1號',
                'holes' => 18,
                'hectares' => '72.184200',
            'document_number' => '台(84)體字第18778號',
                'business_entity' => '林口育樂事業股份有限公司',
            'telephone' => '(02)26011211',
            'fax' => '(02)26020263',
            ],
            3 => 
            [
                'id' => 4,
                'name' => '北投國華高爾夫俱樂部球場',
                'city' => '新北市',
                'address' => '新北市淡水區坪頂里小坪頂23之1號',
                'holes' => 18,
                'hectares' => '30.719000',
            'document_number' => '台(84)體字第17578號',
                'business_entity' => '大華觀光事業股份有限公司',
            'telephone' => '(02)86261281',
            'fax' => '(02)86263102',
            ],
            4 => 
            [
                'id' => 5,
                'name' => '臺灣高爾夫俱樂部球場',
                'city' => '新北市',
                'address' => '新北市淡水區中正路一段6巷32號',
                'holes' => 18,
                'hectares' => '51.767700',
                'document_number' => '台八十八體委設字第015023號',
                'business_entity' => '財團法人臺灣高爾夫俱樂部',
            'telephone' => '(02)26230114',
            'fax' => '(02)26236761',
            ],
            5 => 
            [
                'id' => 6,
                'name' => '北海高爾夫球場',
                'city' => '新北市',
                'address' => '新北市石門區草里里草埔尾5號',
                'holes' => 18,
                'hectares' => '70.397910',
                'document_number' => '體委設字第00930014714號',
                'business_entity' => '北海育樂股份有限公司',
            'telephone' => '(02)26382930',
            'fax' => '(02)26383103',
            ],
            6 => 
            [
                'id' => 7,
                'name' => '八里國際高爾夫球場',
                'city' => '新北市',
                'address' => '新北市林口區嘉寶里寶斗厝坑93-1號',
                'holes' => 18,
                'hectares' => '84.233600',
                'document_number' => '台八十九體委設字第013800號',
                'business_entity' => '北濱育樂事業股份有限公司',
            'telephone' => '(02)26052222',
            'fax' => '(02)26052334',
            ],
            7 => 
            [
                'id' => 8,
                'name' => '東華高爾夫球場',
                'city' => '新北市',
                'address' => '新北市林口區下福里7鄰93-1號',
                'holes' => 18,
                'hectares' => '69.063100',
            'document_number' => '台(86)體(三)字第85115335號',
                'business_entity' => '東華育樂股份有限公司',
            'telephone' => '(02)27589694',
            'fax' => '(02)26061890',
            ],
            8 => 
            [
                'id' => 9,
                'name' => '幸福高爾夫球場',
                'city' => '新北市',
                'address' => '新北市林口區下福里71-1號',
                'holes' => 27,
                'hectares' => '107.668700',
                'document_number' => '臺教授體部字第1050013308號',
                'business_entity' => '佳福育樂事業股份有限公司',
            'telephone' => '(02)26062345',
            'fax' => '(02)26061489',
            ],
            9 => 
            [
                'id' => 10,
                'name' => '翡翠高爾夫球場',
                'city' => '新北市',
                'address' => '新北市萬里區仁七街16-1號',
                'holes' => 18,
                'hectares' => '65.927600',
                'document_number' => '—',
                'business_entity' => '磐達企業股份有限公司',
            'telephone' => '(02)24924935',
            'fax' => '(02)24924936',
            ],
            10 => 
            [
                'id' => 11,
                'name' => '美麗華高爾夫球場',
                'city' => '新北市',
                'address' => '新北市林口區下福里下福路9號',
                'holes' => 18,
                'hectares' => '82.129200',
                'document_number' => '台八十七體委設字第009202號',
                'business_entity' => '美麗華開發股份有限公司',
            'telephone' => '(02)26063456',
            'fax' => '(02)26061482',
            ],
            11 => 
            [
                'id' => 12,
                'name' => '蓬萊高爾夫球場',
                'city' => '新北市',
                'address' => '新北市林口區下福里下福路9號',
                'holes' => 18,
                'hectares' => '82.660500',
                'document_number' => '台八十七體委設字第013473號',
                'business_entity' => '美麗華開發股份有限公司',
            'telephone' => '(02)26063456',
            'fax' => '(02)26061482',
            ],
            12 => 
            [
                'id' => 13,
                'name' => '大屯高爾夫球場',
                'city' => '新北市',
                'address' => '新北市淡水區商工路309號',
                'holes' => 13,
                'hectares' => '24.875600',
                'document_number' => '—',
                'business_entity' => '大屯育樂開發股份有限公司',
            'telephone' => '(02)26213271',
            'fax' => '(02)26210388',
            ],
            13 => 
            [
                'id' => 14,
                'name' => '淡水濱海高爾夫球場',
                'city' => '新北市',
                'address' => '新北市石門區尖鹿里尖仔路10號',
                'holes' => 18,
                'hectares' => '59.759500',
                'document_number' => '臺教授體部字第1090005155號',
                'business_entity' => '長盛育樂股份有限公司',
            'telephone' => '(02)26380679',
            'fax' => '(02)28983181',
            ],
            14 => 
            [
                'id' => 15,
                'name' => '台北高爾夫俱樂部球場',
                'city' => '桃園市',
                'address' => '桃園市蘆竹區坑子村赤塗崎34之1號',
                'holes' => 36,
                'hectares' => '170.000000',
            'document_number' => '台(84)體字第20004號',
                'business_entity' => '財團法人台北高爾夫俱樂部',
            'telephone' => '(03)3241311~5',
            'fax' => '(03)3243219',
            ],
            15 => 
            [
                'id' => 16,
                'name' => '長庚高爾夫俱樂部球場',
                'city' => '桃園市',
                'address' => '桃園市龜山區舊路村大埔23-4號',
                'holes' => 27,
                'hectares' => '116.697900',
            'document_number' => '台(84)體字第22116號',
                'business_entity' => '育志開發股份有限公司',
            'telephone' => '(03)3296358',
            'fax' => '(03)3296359',
            ],
            16 => 
            [
                'id' => 17,
                'name' => '桃園高爾夫球場',
                'city' => '桃園市',
                'address' => '桃園市龍潭區九龍村九座寮23鄰39號',
                'holes' => 27,
                'hectares' => '76.928400',
            'document_number' => '台(75)體字第55744號',
                'business_entity' => '桃園育樂事業股份有限公司',
            'telephone' => '(03)4803388',
            'fax' => '(03)4894350',
            ],
            17 => 
            [
                'id' => 18,
                'name' => '第一高爾夫球場',
                'city' => '桃園市',
                'address' => '桃園市蘆竹區坑子村7鄰貓尾崎50號',
                'holes' => 36,
                'hectares' => '118.804200',
                'document_number' => '台八十八體委設字第021227號',
                'business_entity' => '國盛育樂股份有限公司',
            'telephone' => '(03)3245295',
            'fax' => '(03)3241598',
            ],
            18 => 
            [
                'id' => 19,
                'name' => '揚昇高爾夫球場',
                'city' => '桃園市',
                'address' => '桃園市楊梅區楊昇路256號',
                'holes' => 18,
                'hectares' => '94.431000',
            'document_number' => '台(85)體(三)字第85525554號',
                'business_entity' => '揚昇育樂事業股份有限公司',
            'telephone' => '(03)4780099',
            'fax' => '(03)4781177',
            ],
            19 => 
            [
                'id' => 20,
                'name' => '統帥高爾夫球場',
                'city' => '桃園市',
                'address' => '桃園市蘆竹區六福一路195巷1弄8號',
                'holes' => 18,
                'hectares' => '56.370100',
                'document_number' => '—',
                'business_entity' => '統帥育樂股份有限公司',
            'telephone' => '(03)3221786',
            'fax' => '(03)3221096',
            ],
            20 => 
            [
                'id' => 21,
                'name' => '楊梅高爾夫球場',
                'city' => '桃園市',
                'address' => '桃園市楊梅區東流里13鄰崩坡73號',
                'holes' => 27,
                'hectares' => '78.192790',
                'document_number' => '台九十體委設字第018192號',
                'business_entity' => '國盛育樂股份有限公司',
            'telephone' => '(03)4780541',
            'fax' => '(03)4756517',
            ],
            21 => 
            [
                'id' => 22,
                'name' => '永漢高爾夫球場',
                'city' => '桃園市',
                'address' => '桃園市蘆竹區山腳村9鄰南山北路一段300號',
                'holes' => 18,
                'hectares' => '75.555700',
                'document_number' => '台八十八體委設字第010375號',
                'business_entity' => '永漢開發股份有限公司',
            'telephone' => '(03)3245711',
            'fax' => '(03)3245730',
            ],
            22 => 
            [
                'id' => 23,
                'name' => '大溪高爾夫球場',
                'city' => '桃園市',
                'address' => '桃園市大溪區永福里日新路168號',
                'holes' => 27,
                'hectares' => '101.311100',
            'document_number' => '台(84)體字第24036號',
                'business_entity' => '大溪育樂股份有限公司',
            'telephone' => '(03)3875699',
            'fax' => '(03)3875694',
            ],
            23 => 
            [
                'id' => 24,
                'name' => '東方高爾夫球場',
                'city' => '桃園市',
                'address' => '桃園市龜山區舊路村東方球場路100號',
                'holes' => 18,
                'hectares' => '88.692600',
                'document_number' => '台八十七體委設字第012006號',
                'business_entity' => '東方育樂事業股份有限公司',
            'telephone' => '(03)3501212',
            'fax' => '(03)3202644',
            ],
            24 => 
            [
                'id' => 25,
                'name' => '明台國際高爾夫球場',
                'city' => '桃園市',
                'address' => '桃園市龍潭區三角林段民生路439巷130號',
                'holes' => 18,
                'hectares' => '78.810891',
                'document_number' => '—',
                'business_entity' => '明台育樂股份有限公司',
            'telephone' => '(03)4995506',
            'fax' => '(03)4995503',
            ],
            25 => 
            [
                'id' => 26,
                'name' => '新竹高爾夫俱樂部股份有限公司球場',
                'city' => '新竹縣',
                'address' => '新竹縣新豐鄉上坑村坑子口104號',
                'holes' => 27,
                'hectares' => '82.245950',
            'document_number' => '台(84)體字第17579號',
                'business_entity' => '新竹高爾夫俱樂部股份有限公司',
            'telephone' => '(03)5596140',
            'fax' => '(03)5595109',
            ],
            26 => 
            [
                'id' => 27,
                'name' => '山溪地高爾夫球場',
                'city' => '新竹縣',
                'address' => '新竹縣關西鎮玉山里2鄰13號',
                'holes' => 18,
                'hectares' => '76.087600',
            'document_number' => '台(84)體字第00820號',
                'business_entity' => '山溪地育樂事業股份有限公司',
            'telephone' => '(03)5476288',
            'fax' => '(03)5476597',
            ],
            27 => 
            [
                'id' => 28,
                'name' => '再興高爾夫球場',
                'city' => '新竹縣',
                'address' => '新竹縣湖口鄉長安村再興路350號',
                'holes' => 18,
                'hectares' => '67.289700',
                'document_number' => '體委設字第0970002356號',
                'business_entity' => '再興育樂開發股份有限公司',
            'telephone' => '(03)5692318',
            'fax' => '(035)691097',
            ],
            28 => 
            [
                'id' => 29,
                'name' => '立益關西高爾夫球場',
                'city' => '新竹縣',
                'address' => '新竹縣關西鎮湖肚段55號',
                'holes' => 18,
                'hectares' => '99.735700',
                'document_number' => '台八十七體委設字第010218號',
                'business_entity' => '立益育樂股份有限公司',
            'telephone' => '(03)5871842',
            'fax' => '(03)5878476',
            ],
            29 => 
            [
                'id' => 30,
                'name' => '老爺關西高爾夫球場',
                'city' => '新竹縣',
                'address' => '新竹縣關西鎮玉山里1鄰赤柯山1號',
                'holes' => 18,
                'hectares' => '103.086900',
                'document_number' => '台九十體委設字第010215號',
                'business_entity' => '互馨育樂股份有限公司',
            'telephone' => '(03)5476331~2',
            'fax' => '(03)5476386',
            ],
            30 => 
            [
                'id' => 31,
                'name' => '旭陽高爾夫球場',
                'city' => '新竹縣',
                'address' => '新竹縣關西鎮南新里新城段100號',
                'holes' => 18,
                'hectares' => '89.604070',
                'document_number' => '體委設字第0960003439號',
                'business_entity' => '旭陽育樂事業股份有限公司',
            'telephone' => '(03)5476569',
            'fax' => '(03)5476511',
            ],
            31 => 
            [
                'id' => 32,
                'name' => '寶山高爾夫球場',
                'city' => '新竹縣',
                'address' => '新竹縣寶山鄉新城村寶新路2段465號',
                'holes' => 18,
                'hectares' => '72.087900',
                'document_number' => '—',
                'business_entity' => '東光育樂股份有限公司',
            'telephone' => '(03)5762888',
            'fax' => '(03)5762605',
            ],
            32 => 
            [
                'id' => 33,
                'name' => '皇家高爾夫球場',
                'city' => '苗栗縣',
                'address' => '苗栗縣頭屋鄉明德村一鄰20號',
                'holes' => 18,
                'hectares' => '117.426300',
                'document_number' => '—',
                'business_entity' => '耀德國際育樂股份有限公司',
            'telephone' => '(037)543122',
            'fax' => '(037)543121',
            ],
            33 => 
            [
                'id' => 34,
                'name' => '全國高爾夫球場',
                'city' => '苗栗縣',
                'address' => '苗栗縣苑裡鎮石鎮里1鄰1之1號',
                'holes' => 18,
                'hectares' => '115.310916',
                'document_number' => '台九十體委設字第015654號',
                'business_entity' => '全國高爾夫實業股份有限公司',
            'telephone' => '(037)741166',
            'fax' => '(037)740262',
            ],
            34 => 
            [
                'id' => 35,
                'name' => '台中國際高爾夫球場',
                'city' => '臺中市',
                'address' => '台中市北屯區民政里北坑巷21-8號',
                'holes' => 27,
                'hectares' => '110.125005',
                'document_number' => '體委設字第0910002683號',
                'business_entity' => '台中國際育樂股份有限公司',
            'telephone' => '(04)22391172',
            'fax' => '(04)22391307',
            ],
            35 => 
            [
                'id' => 36,
                'name' => '空軍清泉崗高爾夫球場',
                'city' => '臺中市',
                'address' => '台中市清水區和睦路2段305號',
                'holes' => 18,
                'hectares' => '82.000000',
                'document_number' => '體字第027763號',
                'business_entity' => '國防部空軍司令部',
            'telephone' => '(04)26200134',
            'fax' => '(04)26201928',
            ],
            36 => 
            [
                'id' => 37,
                'name' => '霧峰高爾夫球場',
                'city' => '臺中市',
                'address' => '台中市霧峰區峰谷里峰谷路668號',
                'holes' => 18,
                'hectares' => '77.093800',
            'document_number' => '台(82)體字第032659號',
                'business_entity' => '元扶企業股份有限公司',
            'telephone' => '(04)23301199',
            'fax' => '(04)23335207',
            ],
            37 => 
            [
                'id' => 38,
                'name' => '台中縣豐原高爾夫俱樂部球場',
                'city' => '臺中市',
                'address' => '台中市豐原區南嵩里水源路坪頂巷23號',
                'holes' => 18,
                'hectares' => '48.698500',
            'document_number' => '台(83)體字第27763號',
                'business_entity' => '社團法人台中市豐原高爾夫俱樂部',
            'telephone' => '(04)25222835',
            'fax' => '(04)25226704',
            ],
            38 => 
            [
                'id' => 39,
                'name' => '台中高爾夫球場',
                'city' => '臺中市',
                'address' => '台中市大雅區橫山里通山路46號',
                'holes' => 18,
                'hectares' => '60.154500',
                'document_number' => '台八十九體委設字第006028號',
                'business_entity' => '興農育樂股份有限公司',
            'telephone' => '(04)25665130-2',
            'fax' => '(04)25609402',
            ],
            39 => 
            [
                'id' => 40,
                'name' => '鴻禧太平高爾夫球場',
                'city' => '臺中市',
                'address' => '台中市太平區頭汴里北田路265巷9號',
                'holes' => 18,
                'hectares' => '50.025600',
            'document_number' => '台(85)體(三)字第85082840號',
                'business_entity' => '同禧育樂股份有限公司',
            'telephone' => '(04)22703470',
            'fax' => '(04)22772973',
            ],
            40 => 
            [
                'id' => 41,
                'name' => '彰化高爾夫股份有限公司彰化球場',
                'city' => '彰化市',
                'address' => '彰化市延和里大埔路2巷101號',
                'holes' => 18,
                'hectares' => '62.913500',
            'document_number' => '台(84)體字第17581號',
                'business_entity' => '彰化高爾夫股份有限公司',
            'telephone' => '(04)7135799',
            'fax' => '(04)7135795',
            ],
            41 => 
            [
                'id' => 42,
                'name' => '台豐高爾夫球場',
                'city' => '彰化縣',
                'address' => '彰化縣大村鄉福興村學府路77號',
                'holes' => 18,
                'hectares' => '67.919300',
            'document_number' => '台(83)體字第27763號',
                'business_entity' => '台豐興業股份有限公司',
            'telephone' => '(04)8521102~1',
            'fax' => '(04)8534313',
            ],
            42 => 
            [
                'id' => 43,
                'name' => '中華民國公教人員高爾夫研習會球場',
                'city' => '南投縣',
                'address' => '南投縣中興新村光明一路351號',
                'holes' => 9,
                'hectares' => '22.086300',
            'document_number' => '台(83)體字第27763號',
                'business_entity' => '國家文官學院',
            'telephone' => '(049)2332820',
            'fax' => '(049)2350841',
            ],
            43 => 
            [
                'id' => 44,
                'name' => '南投縣松柏嶺高爾夫球場',
                'city' => '南投縣',
                'address' => '南投縣名間鄉炭寮村崁頂巷36之1號',
                'holes' => 18,
                'hectares' => '51.102493',
            'document_number' => '台(84)體字第01082號',
                'business_entity' => '松柏嶺企業股份有限公司',
            'telephone' => '(049)2732126~7',
            'fax' => '(049)2738001',
            ],
            44 => 
            [
                'id' => 45,
                'name' => '南峰高爾夫球場',
                'city' => '南投縣',
                'address' => '南投縣南投市鳳山路336-1號',
                'holes' => 18,
                'hectares' => '66.814950',
                'document_number' => '體委設字第0930005114號',
                'business_entity' => '南峰國際股份有限公司',
            'telephone' => '(049)2254868',
            'fax' => '(049)2257808',
            ],
            45 => 
            [
                'id' => 46,
                'name' => '嘉光高爾夫球場',
                'city' => '嘉義縣',
                'address' => '嘉義縣水上鄉南鄉村鹿寮12號',
                'holes' => 9,
                'hectares' => '27.143300',
                'document_number' => '台八十八體委設字第020080號',
                'business_entity' => '嘉光育樂中心股份有限公司',
            'telephone' => '(05)2536735',
            'fax' => '(05)2536348',
            ],
            46 => 
            [
                'id' => 47,
                'name' => '東洋棕梠湖高爾夫球場',
                'city' => '嘉義縣',
                'address' => '嘉義縣番路鄉新福村第三農場24號',
                'holes' => 18,
                'hectares' => '61.957800',
            'document_number' => '台(82)體字第20291號',
                'business_entity' => '東洋休閒觀光股份有限公司',
            'telephone' => '(05)2590000',
            'fax' => '(05)2590088',
            ],
            47 => 
            [
                'id' => 48,
                'name' => '台南高爾夫球場',
                'city' => '臺南市',
                'address' => '台南市新化區礁坑里100號',
                'holes' => 18,
                'hectares' => '42.107300',
            'document_number' => '台(83)體字第27763號',
                'business_entity' => '財團法人台南高爾夫俱樂部',
            'telephone' => '(06)5901666',
            'fax' => '(06)5900240',
            ],
            48 => 
            [
                'id' => 49,
                'name' => '南寶高爾夫球場',
                'city' => '臺南市',
                'address' => '台南市大內區頭社里136號',
                'holes' => 27,
                'hectares' => '81.985100',
                'document_number' => '體委設字第0920007676號',
                'business_entity' => '南寶區村實業股份有限公司',
            'telephone' => '(06)5762546',
            'fax' => '(06)5763066',
            ],
            49 => 
            [
                'id' => 50,
                'name' => '南一高爾夫球場',
                'city' => '臺南市',
                'address' => '台南市關廟區長榮街500號',
                'holes' => 18,
                'hectares' => '91.414800',
                'document_number' => '台八十九體委設字第020333號',
                'business_entity' => '南一育樂事業股份有限公司',
            'telephone' => '(06)5551121',
            'fax' => '(06)5551210',
            ],
            50 => 
            [
                'id' => 51,
                'name' => '斑芝花高爾夫球場',
                'city' => '臺南市',
                'address' => '台南市東山區東原里斑芝花坑39號',
                'holes' => 27,
                'hectares' => '108.463700',
            'document_number' => '台(83)體字第046679號',
                'business_entity' => '騰慶新國際開發有限公司',
            'telephone' => '(06)6862208',
            'fax' => '(06)6862348',
            ],
            51 => 
            [
                'id' => 52,
                'name' => '嘉南高爾夫球場',
                'city' => '臺南市',
                'address' => '台南市官田區社子里六雙21號',
                'holes' => 18,
                'hectares' => '74.341900',
                'document_number' => '台九十體委設字第010899號',
                'business_entity' => '嘉南開發事業股份有限公司',
            'telephone' => '(06)6900800',
            'fax' => '(06)6902935',
            ],
            52 => 
            [
                'id' => 53,
                'name' => '海軍左營高爾夫球場',
                'city' => '高雄市',
            'address' => '左營海軍軍區內(長壽路一號)',
                'holes' => 9,
                'hectares' => '24.701100',
            'document_number' => '台(83)體字第27763號',
                'business_entity' => '國防部海軍司令部',
            'telephone' => '(07)5856921',
            'fax' => '(07)5877449',
            ],
            53 => 
            [
                'id' => 54,
                'name' => '觀音山高爾夫球場',
                'city' => '高雄市',
                'address' => '高雄市大樹區三和里三和路140號',
                'holes' => 18,
                'hectares' => '52.078000',
            'document_number' => '台(77)體字第07383號',
                'business_entity' => '觀音山高爾夫股份有限公司',
            'telephone' => '(07)6578190',
            'fax' => '(07)6564314',
            ],
            54 => 
            [
                'id' => 55,
                'name' => '高雄市信誼高爾夫球場',
                'city' => '高雄市',
                'address' => '高雄市大樹區統嶺里信誼路1號',
                'holes' => 18,
                'hectares' => '73.182300',
                'document_number' => '台九十體委設字第007727號',
                'business_entity' => '信誼育樂事業股份有限公司',
            'telephone' => '(07)6563211',
            'fax' => '(07)6563636',
            ],
            55 => 
            [
                'id' => 56,
                'name' => '大崗山高爾夫球場',
                'city' => '高雄市',
                'address' => '高雄市田寮區西德里長山路1號',
                'holes' => 18,
                'hectares' => '103.644600',
                'document_number' => '台八十九體委設字第012763號',
                'business_entity' => '長山育樂股份有限公司',
            'telephone' => '(07)6366411',
            'fax' => '(07)6366219',
            ],
            56 => 
            [
                'id' => 57,
                'name' => '高雄高爾夫球場',
                'city' => '高雄市',
                'address' => '高雄市鳥松區大華里球場路270號',
                'holes' => 18,
                'hectares' => '70.081702',
                'document_number' => '台八十八體委設字第021662號',
                'business_entity' => '財團法人高雄高爾夫俱樂部',
            'telephone' => '(07)3701101',
            'fax' => '(07)3700462',
            ],
            57 => 
            [
                'id' => 58,
                'name' => '山湖觀高爾夫球場',
                'city' => '屏東縣',
                'address' => '屏東縣高樹鄉廣興村中正路190號',
                'holes' => 27,
                'hectares' => '116.404600',
                'document_number' => '台八十八體委設字第022190號',
                'business_entity' => '大源投資開發股份有限公司',
            'telephone' => '(08)7956600',
            'fax' => '(08)7956606',
            ],
            58 => 
            [
                'id' => 59,
                'name' => '花蓮高爾夫球場',
                'city' => '花蓮市',
                'address' => '花蓮市化道路球崙1號',
                'holes' => 18,
                'hectares' => '39.672100',
                'document_number' => '台八十八體委設字第017698號',
                'business_entity' => '花蓮縣政府',
            'telephone' => '(03)8227528',
            'fax' => '(03)8226193',
            ],
        ]);
    }
}