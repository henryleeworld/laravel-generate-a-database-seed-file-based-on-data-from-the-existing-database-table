<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaiwanPoliticalPartiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('taiwan_political_parties')->delete();  
        DB::table('taiwan_political_parties')->insert([
            0 => 
            [
                'id' => 1,
                'name' => '中國國民黨',
                'establishment_date' => '民國前18年11月24日',
                'approval_date' => '民國78年02月10日',
                'main_office_address' => '臺北市中山區八德路二段232號',
            'phone' => '(02)87711234',
                'leader' => '朱立倫',
            ],
            1 => 
            [
                'id' => 2,
                'name' => '中國青年黨',
                'establishment_date' => '民國12年12月02日',
                'approval_date' => '民國78年02月24日',
                'main_office_address' => '臺北市中正區杭州南路一段23號7樓之一',
                'phone' => '920569812',
                'leader' => '林意珊',
            ],
            2 => 
            [
                'id' => 10,
                'name' => '中國民眾黨',
                'establishment_date' => '民國76年11月21日',
                'approval_date' => '民國78年04月08日',
                'main_office_address' => '基隆市信義區忠孝里深溪路36巷70弄23號7樓',
            'phone' => '(02)25083418',
                'leader' => '王明智',
            ],
            3 => 
            [
                'id' => 15,
                'name' => '勞動黨',
                'establishment_date' => '民國78年03月29日',
                'approval_date' => '民國78年05月05日',
                'main_office_address' => '臺北市大同區南京西路344巷25號6樓',
            'phone' => '(02)25596233',
                'leader' => '吳榮元',
            ],
            4 => 
            [
                'id' => 16,
                'name' => '民主進步黨',
                'establishment_date' => '民國75年09月28日',
                'approval_date' => '民國78年05月05日',
                'main_office_address' => '臺北市中正區北平東路30號10樓',
            'phone' => '(02)23929989',
                'leader' => '賴清德',
            ],
            5 => 
            [
                'id' => 73,
                'name' => '公民黨',
                'establishment_date' => '民國82年03月07日',
                'approval_date' => '民國82年04月03日',
                'main_office_address' => '高雄市左營區重建路66號11樓之2',
            'phone' => '(07)3496483',
                'leader' => '錢漢清',
            ],
            6 => 
            [
                'id' => 74,
                'name' => '新黨',
                'establishment_date' => '民國82年08月22日',
                'approval_date' => '民國82年08月25日',
                'main_office_address' => '臺北市松山區光復南路65號4樓',
            'phone' => '(02)27562222',
                'leader' => '吳成典',
            ],
            7 => 
            [
                'id' => 79,
                'name' => '綠黨',
                'establishment_date' => '民國85年01月25日',
                'approval_date' => '民國85年01月31日',
                'main_office_address' => '臺北市中正區紹興北街35號4樓之7',
            'phone' => '(02)23920508',
                'leader' => '余筱菁、陳冠宇',
            ],
            8 => 
            [
                'id' => 80,
                'name' => '家庭基本收入',
                'establishment_date' => '民國85年04月04日',
                'approval_date' => '民國85年04月23日',
                'main_office_address' => '臺北市中正區杭州南路1段23號7樓之1',
                'phone' => '932311984',
                'leader' => '黃建源',
            ],
            9 => 
            [
                'id' => 90,
                'name' => '親民黨',
                'establishment_date' => '民國89年03月31日',
                'approval_date' => '民國89年04月05日',
                'main_office_address' => '臺北市中山區松江路54號3樓',
            'phone' => '(02)25816979',
                'leader' => '宋楚瑜',
            ],
            10 => 
            [
                'id' => 95,
                'name' => '台灣團結聯盟',
                'establishment_date' => '民國90年08月12日',
                'approval_date' => '民國90年08月15日',
                'main_office_address' => '臺北市中正區紹興北街35號4樓之4',
            'phone' => '(02)23940230',
                'leader' => '劉一德',
            ],
            11 => 
            [
                'id' => 98,
                'name' => '中華民族致公黨',
                'establishment_date' => '民國91年04月21日',
                'approval_date' => '民國91年05月16日',
                'main_office_address' => '臺北市大安區浦城街13巷30號3樓',
                'phone' => '923830652',
                'leader' => '陳玉山',
            ],
            12 => 
            [
                'id' => 101,
                'name' => '台灣工黨',
                'establishment_date' => '民國92年04月27日',
                'approval_date' => '民國92年05月14日',
                'main_office_address' => '臺北市萬華區開封街二段24號2樓',
            'phone' => '(02)23719762',
                'leader' => '晏揚清',
            ],
            13 => 
            [
                'id' => 106,
                'name' => '無黨團結聯盟',
                'establishment_date' => '民國93年06月15日',
                'approval_date' => '民國93年06月29日',
                'main_office_address' => '臺北市中正區青島東路5號6樓之1',
            'phone' => '(02)23956668',
                'leader' => '林炳坤',
            ],
            14 => 
            [
                'id' => 107,
                'name' => '尊嚴黨',
                'establishment_date' => '民國93年06月20日',
                'approval_date' => '民國93年07月12日',
                'main_office_address' => '臺中市西區柳川西路2段1號2樓A1',
            'phone' => '(04)22208298',
                'leader' => '莫錫麟',
            ],
            15 => 
            [
                'id' => 113,
                'name' => '中華統一促進黨',
                'establishment_date' => '民國94年09月09日',
                'approval_date' => '民國94年09月23日',
                'main_office_address' => '新北市中和區建康路21號7樓',
            'phone' => '(02)27187701',
                'leader' => '陳福誠',
            ],
            16 => 
            [
                'id' => 151,
                'name' => '中華婦女黨',
                'establishment_date' => '民國98年08月03日',
                'approval_date' => '民國98年08月18日',
                'main_office_address' => '臺北市中正區重慶南路一段62號6樓',
            'phone' => '(02)23112567',
                'leader' => '涂明慧',
            ],
            17 => 
            [
                'id' => 153,
                'name' => '人民最大黨',
                'establishment_date' => '民國98年09月26日',
                'approval_date' => '民國98年10月09日',
                'main_office_address' => '臺北市中正區青島東路3-2號3樓',
            'phone' => '(02)23583856',
                'leader' => '許榮淑',
            ],
            18 => 
            [
                'id' => 170,
                'name' => '台灣民意黨',
                'establishment_date' => '民國99年08月22日',
                'approval_date' => '民國99年08月31日',
                'main_office_address' => '臺南市將軍區苓和里苓和1-12號',
            'phone' => '(06)7943139',
                'leader' => '黃天辰',
            ],
            19 => 
            [
                'id' => 179,
                'name' => '中華照生黨',
                'establishment_date' => '民國99年10月17日',
                'approval_date' => '民國100年02月01日',
                'main_office_address' => '新北市鶯歌區國中街161號4樓',
                'phone' => '985444365',
                'leader' => '吳淑敏',
            ],
            20 => 
            [
                'id' => 188,
                'name' => '正黨',
                'establishment_date' => '民國100年06月15日',
                'approval_date' => '民國100年07月07日',
                'main_office_address' => '新北市新莊區萬安街146巷18號4樓',
                'phone' => '919381631',
                'leader' => '林麗容',
            ],
            21 => 
            [
                'id' => 191,
                'name' => '中華聯合黨',
                'establishment_date' => '民國100年07月23日',
                'approval_date' => '民國100年08月04日',
                'main_office_address' => '臺南市永康區大灣路652巷1號',
            'phone' => '(06)2052228',
                'leader' => '徐照雄',
            ],
            22 => 
            [
                'id' => 198,
                'name' => '新華勞動黨',
                'establishment_date' => '民國100年10月04日',
                'approval_date' => '民國100年10月18日',
                'main_office_address' => '臺北市中山區長安東路1段21號6樓',
            'phone' => '(02)25637066',
                'leader' => '韓雲潔',
            ],
            23 => 
            [
                'id' => 199,
                'name' => '人民民主黨',
                'establishment_date' => '民國100年10月02日',
                'approval_date' => '民國100年10月18日',
                'main_office_address' => '高雄市苓雅區中正一路372號5樓之3',
            'phone' => '(07)7670662',
                'leader' => '賴宗育',
            ],
            24 => 
            [
                'id' => 211,
                'name' => '台灣革命黨',
                'establishment_date' => '民國100年12月15日',
                'approval_date' => '民國101年01月10日',
                'main_office_address' => '雲林縣麥寮鄉施厝村施厝五街999號',
                'phone' => '926831444',
                'leader' => '李丨',
            ],
            25 => 
            [
                'id' => 219,
                'name' => '台灣進步黨',
                'establishment_date' => '民國101年03月21日',
                'approval_date' => '民國101年03月28日',
                'main_office_address' => '臺北市信義區大道路91號1樓',
                'phone' => '917927926',
                'leader' => '林國華',
            ],
            26 => 
            [
                'id' => 224,
                'name' => '台灣整復師聯盟工黨',
                'establishment_date' => '民國101年05月01日',
                'approval_date' => '民國101年05月16日',
                'main_office_address' => '臺北市中正區博愛路25號2樓之9',
            'phone' => '(02)23111899',
                'leader' => '陳秋隆',
            ],
            27 => 
            [
                'id' => 230,
                'name' => '中華新住民黨',
                'establishment_date' => '民國101年11月03日',
                'approval_date' => '民國101年11月20日',
                'main_office_address' => '金門縣金寧鄉榜林村下后垵27號',
            'phone' => '(04)23286656',
                'leader' => '翁世維',
            ],
            28 => 
            [
                'id' => 236,
                'name' => '新生黨',
                'establishment_date' => '民國102年02月23日',
                'approval_date' => '民國102年03月07日',
                'main_office_address' => '臺北市中正區忠孝西路1段41號15樓之11',
            'phone' => '(02)27207809',
                'leader' => '許水樹',
            ],
            29 => 
            [
                'id' => 240,
                'name' => '司法正義黨',
                'establishment_date' => '民國102年04月20日',
                'approval_date' => '民國102年05月14日',
                'main_office_address' => '彰化縣北斗鎮宮前街2之11號',
            'phone' => '(02)22046707',
                'leader' => '洪參民',
            ],
            30 => 
            [
                'id' => 250,
                'name' => '中國國家社會主義勞工黨',
                'establishment_date' => '民國102年12月01日',
                'approval_date' => '民國103年01月07日',
                'main_office_address' => '臺北市內湖區陽光街161巷1弄1號1樓',
                'phone' => '923942312',
                'leader' => '項豪',
            ],
            31 => 
            [
                'id' => 255,
                'name' => '勞工黨',
                'establishment_date' => '民國103年06月20日',
                'approval_date' => '民國103年08月12日',
                'main_office_address' => '彰化縣彰化市卦山路5號',
            'phone' => '(04)7222609',
                'leader' => '温國銘',
            ],
            32 => 
            [
                'id' => 257,
                'name' => '天宙和平統一家庭黨',
                'establishment_date' => '民國103年07月20日',
                'approval_date' => '民國103年08月20日',
                'main_office_address' => '新北市中和區中正路932號2樓',
            'phone' => '(02)32343137',
                'leader' => '許惠珍',
            ],
            33 => 
            [
                'id' => 264,
                'name' => '經濟黨',
                'establishment_date' => '民國103年12月03日',
                'approval_date' => '民國103年12月25日',
                'main_office_address' => '臺北市信義區松德路74號5樓',
            'phone' => '(02)87867921',
                'leader' => '張采明',
            ],
            34 => 
            [
                'id' => 267,
                'name' => '時代力量',
                'establishment_date' => '民國104年01月25日',
                'approval_date' => '民國104年02月13日',
                'main_office_address' => '臺北市大同區承德路1段17號16樓之5',
            'phone' => '(02)25500895',
                'leader' => '王婉諭',
            ],
            35 => 
            [
                'id' => 269,
                'name' => '社會民主黨',
                'establishment_date' => '民國104年03月11日',
                'approval_date' => '民國104年04月10日',
                'main_office_address' => '臺北市文山區景興路216號',
                'phone' => '936710869',
                'leader' => '呂鴻志',
            ],
            36 => 
            [
                'id' => 290,
                'name' => '台灣君民黨',
                'establishment_date' => '民國104年09月26日',
                'approval_date' => '民國104年11月18日',
                'main_office_address' => '雲林縣東勢鄉東勢西路261號',
                'phone' => '908679879',
                'leader' => '丁慶錡',
            ],
            37 => 
            [
                'id' => 292,
                'name' => '聾國黨',
                'establishment_date' => '民國104年10月18日',
                'approval_date' => '民國104年12月22日',
                'main_office_address' => '臺北市中正區杭州南路1段57號4樓',
                'phone' => '910112067',
                'leader' => '楊烱煌',
            ],
            38 => 
            [
                'id' => 293,
                'name' => '興中同盟會',
                'establishment_date' => '民國104年12月03日',
                'approval_date' => '民國105年01月13日',
                'main_office_address' => '高雄市三民區安東街88號',
            'phone' => '(07)3222878、(07)3222687、0985658275',
                'leader' => '李鎔任',
            ],
            39 => 
            [
                'id' => 295,
                'name' => '全國人民黨',
                'establishment_date' => '民國105年01月23日',
                'approval_date' => '民國105年03月02日',
                'main_office_address' => '臺中市西區樂群街178號',
            'phone' => '(04)23755550',
                'leader' => '陳漢光',
            ],
            40 => 
            [
                'id' => 301,
                'name' => '台灣股票黨',
                'establishment_date' => '民國105年04月28日',
                'approval_date' => '民國105年06月03日',
                'main_office_address' => '高雄市前金區新田路239巷43號',
            'phone' => '(07)3383435',
                'leader' => '林英賢',
            ],
            41 => 
            [
                'id' => 303,
                'name' => '台灣基進',
                'establishment_date' => '民國105年05月15日',
                'approval_date' => '民國105年08月17日',
                'main_office_address' => '高雄市三民區博仁街13號',
            'phone' => '(07)3111202',
                'leader' => '陳奕齊',
            ],
            42 => 
            [
                'id' => 306,
                'name' => '台灣動物保護黨',
                'establishment_date' => '民國105年08月08日',
                'approval_date' => '民國105年09月07日',
                'main_office_address' => '臺北市大安區延吉街126巷1-1號',
                'phone' => '908752176',
                'leader' => '華珮君',
            ],
            43 => 
            [
                'id' => 307,
                'name' => '中華文化復興在理黨',
                'establishment_date' => '民國105年09月25日',
                'approval_date' => '民國105年11月14日',
                'main_office_address' => '臺北市信義區松信路157號2樓',
                'phone' => '931244088',
                'leader' => '蘭梁筱娟',
            ],
            44 => 
            [
                'id' => 310,
                'name' => '青年陽光黨',
                'establishment_date' => '民國105年10月05日',
                'approval_date' => '民國105年11月15日',
                'main_office_address' => '臺北市中山區長春路15號9樓之1',
            'phone' => '(02)87515775',
                'leader' => '高鼎宸',
            ],
            45 => 
            [
                'id' => 315,
                'name' => '臺灣人民共產黨',
                'establishment_date' => '民國106年02月04日',
                'approval_date' => '民國106年03月29日',
                'main_office_address' => '臺南市新營區太南里舊廍15號',
                'phone' => '933085666',
                'leader' => '林德旺',
            ],
            46 => 
            [
                'id' => 316,
                'name' => '中國和平統一黨',
                'establishment_date' => '民國106年03月22日',
                'approval_date' => '民國106年05月05日',
                'main_office_address' => '臺中市北區立人里北平路一段80號',
            'phone' => '(04)24210888',
                'leader' => '張茂鈺',
            ],
            47 => 
            [
                'id' => 319,
                'name' => '宗教聯盟',
                'establishment_date' => '民國106年05月16日',
                'approval_date' => '民國106年06月12日',
                'main_office_address' => '臺北市內湖區文德路165號1樓',
            'phone' => '(02)2365-2690',
                'leader' => '朱武獻',
            ],
            48 => 
            [
                'id' => 321,
                'name' => '台灣學習黨',
                'establishment_date' => '民國106年05月24日',
                'approval_date' => '民國106年07月17日',
                'main_office_address' => '桃園市中壢區中山路2巷7號',
            'phone' => '(03)4516229',
                'leader' => '蔡勝弘',
            ],
            49 => 
            [
                'id' => 338,
                'name' => '左翼聯盟',
                'establishment_date' => '民國107年05月05日',
                'approval_date' => '民國107年07月13日',
                'main_office_address' => '臺北市文山區景興路206號4樓之1',
            'phone' => '(02)29315491',
                'leader' => '顏坤泉',
            ],
            50 => 
            [
                'id' => 339,
                'name' => '中華愛國同心黨',
                'establishment_date' => '民國107年08月13日',
                'approval_date' => '民國107年09月10日',
                'main_office_address' => '臺北市萬華區西寧南路201之1號',
            'phone' => '(02)23756258',
                'leader' => '顧希君',
            ],
            51 => 
            [
                'id' => 340,
                'name' => '台灣經濟發展黨',
                'establishment_date' => '民國107年09月01日',
                'approval_date' => '民國107年11月12日',
                'main_office_address' => '高雄市前鎮區二聖一路67號1樓',
            'phone' => '(07)7232999',
                'leader' => '顏久曜',
            ],
            52 => 
            [
                'id' => 342,
                'name' => '合一行動聯盟',
                'establishment_date' => '民國107年11月27日',
                'approval_date' => '民國108年01月24日',
                'main_office_address' => '新北市平溪區靜安路2段449號',
            'phone' => '(02)27751297',
                'leader' => '彭迦智',
            ],
            53 => 
            [
                'id' => 343,
                'name' => '天一黨',
                'establishment_date' => '民國107年12月02日',
                'approval_date' => '民國108年02月26日',
                'main_office_address' => '桃園市中壢區啟文路二段112號',
            'phone' => '(03)4253529',
                'leader' => '賴光會',
            ],
            54 => 
            [
                'id' => 345,
                'name' => '和合文化黨',
                'establishment_date' => '民國108年05月15日',
                'approval_date' => '民國108年06月26日',
                'main_office_address' => '臺北市中正區杭州南路1段23號7樓之1',
                'phone' => '963357357',
                'leader' => '原主席郭士綸辭職，由副主席劉昶緯代理',
            ],
            55 => 
            [
                'id' => 347,
                'name' => '中國紅色統一黨',
                'establishment_date' => '民國108年06月16日',
                'approval_date' => '民國108年08月12日',
                'main_office_address' => '臺北市中正區林森南路142號3樓',
            'phone' => '(02)23973663',
                'leader' => '黃榮章',
            ],
            56 => 
            [
                'id' => 348,
                'name' => '喜樂島聯盟',
                'establishment_date' => '民國108年07月20日',
                'approval_date' => '民國108年08月08日',
                'main_office_address' => '臺南市東區裕忠路362號',
            'phone' => '(07)5597733#300',
                'leader' => '郭倍宏',
            ],
            57 => 
            [
                'id' => 350,
                'name' => '台灣民眾黨',
                'establishment_date' => '民國108年08月06日',
                'approval_date' => '民國108年08月23日',
                'main_office_address' => '臺北市中正區杭州南路1段27號2樓',
            'phone' => '(02)27520806',
                'leader' => '柯文哲',
            ],
            58 => 
            [
                'id' => 353,
                'name' => '統一聯盟黨',
                'establishment_date' => '民國108年04月13日',
                'approval_date' => '民國108年09月11日',
                'main_office_address' => '臺北市大安區復興南路二段65號10樓之2',
            'phone' => '(02)23214125',
                'leader' => '戚嘉林',
            ],
            59 => 
            [
                'id' => 354,
                'name' => '基層聯盟',
                'establishment_date' => '民國108年08月08日',
                'approval_date' => '民國108年09月10日',
                'main_office_address' => '桃園市桃園區鹽庫街17巷20號3樓',
            'phone' => '(03)3252646',
                'leader' => '楊鑫坤',
            ],
            60 => 
            [
                'id' => 355,
                'name' => '台澎黨',
                'establishment_date' => '民國108年06月30日',
                'approval_date' => '民國108年09月23日',
                'main_office_address' => '臺中市西區忠仁街169-1號',
            'phone' => '(04)22256976',
                'leader' => '鄭自才',
            ],
            61 => 
            [
                'id' => 356,
                'name' => '台灣維新',
                'establishment_date' => '民國108年08月24日',
                'approval_date' => '民國108年10月04日',
                'main_office_address' => '臺北市大安區和平東路1段216號7樓之1',
            'phone' => '(02)23630274',
                'leader' => '蘇煥智',
            ],
            62 => 
            [
                'id' => 357,
                'name' => '小民參政歐巴桑聯盟',
                'establishment_date' => '民國108年09月21日',
                'approval_date' => '民國108年10月28日',
                'main_office_address' => '新北市板橋區文化路1段309-6號9樓',
                'phone' => '933092741',
                'leader' => '江敏榕',
            ],
            63 => 
            [
                'id' => 360,
                'name' => '國家公義運動黨',
                'establishment_date' => '民國108年10月30日',
                'approval_date' => '民國108年11月29日',
                'main_office_address' => '新竹縣竹北市莊敬南路27號4樓',
            'phone' => '(03)6580790',
                'leader' => '胡瓏智',
            ],
            64 => 
            [
                'id' => 363,
                'name' => '道政聯盟',
                'establishment_date' => '民國108年12月06日',
                'approval_date' => '民國109年02月11日',
                'main_office_address' => '臺中市北區陝西東五街47巷7之4號',
            'phone' => '(04)22990361',
                'leader' => '楊玉華',
            ],
            65 => 
            [
                'id' => 364,
                'name' => '商工統一促進會',
                'establishment_date' => '民國109年01月12日',
                'approval_date' => '民國109年02月12日',
                'main_office_address' => '高雄市鳳山區中山路53巷6弄17號',
            'phone' => '(07)7406244',
                'leader' => '曾建祥',
            ],
            66 => 
            [
                'id' => 366,
                'name' => '臺灣雙語無法黨',
                'establishment_date' => '民國109年01月19日',
                'approval_date' => '民國109年03月03日',
                'main_office_address' => '臺北市中正區羅斯福路4段68號15樓之1',
            'phone' => '(02)23671014',
                'leader' => '蕭文乾',
            ],
            67 => 
            [
                'id' => 367,
                'name' => '夏潮聯合會',
                'establishment_date' => '民國108年11月09日',
                'approval_date' => '民國109年03月09日',
                'main_office_address' => '臺北市大安區和平東路3段49號3樓之4',
            'phone' => '(02)27080002',
                'leader' => '曾舜旺',
            ],
            68 => 
            [
                'id' => 368,
                'name' => '金色力量黨',
                'establishment_date' => '民國109年01月19日',
                'approval_date' => '民國109年03月18日',
                'main_office_address' => '臺北市萬華區民和街3號',
            'phone' => '(02)23038118',
                'leader' => '王郁揚',
            ],
            69 => 
            [
                'id' => 370,
                'name' => '台灣新住民黨',
                'establishment_date' => '民國109年01月01日',
                'approval_date' => '民國109年04月01日',
                'main_office_address' => '臺中市中區繼光街87號',
            'phone' => '(04)22290321',
                'leader' => '麥玉珍',
            ],
            70 => 
            [
                'id' => 371,
                'name' => '前進黨',
                'establishment_date' => '民國109年08月09日',
                'approval_date' => '民國109年09月04日',
                'main_office_address' => '臺北市中山區中山北路2段106-2號3樓',
            'phone' => '(02)25815379',
                'leader' => '楊悟空',
            ],
            71 => 
            [
                'id' => 372,
                'name' => '台灣澎友黨',
                'establishment_date' => '民國109年08月22日',
                'approval_date' => '民國109年10月13日',
                'main_office_address' => '高雄市鹽埕區建國四路17號四樓',
            'phone' => '(07)5618756',
                'leader' => '莊吉雄',
            ],
            72 => 
            [
                'id' => 374,
                'name' => '中華文化共和黨',
                'establishment_date' => '民國110年04月18日',
                'approval_date' => '民國110年05月19日',
                'main_office_address' => '彰化縣彰化市城中北街14號',
            'phone' => '(04)7255811',
                'leader' => '許佑宇',
            ],
            73 => 
            [
                'id' => 375,
                'name' => '正神名黨',
                'establishment_date' => '民國110年05月09日',
                'approval_date' => '民國110年06月08日',
                'main_office_address' => '宜蘭縣宜蘭市崇聖街175號',
            'phone' => '(039)323731',
                'leader' => '許榮德',
            ],
            74 => 
            [
                'id' => 376,
                'name' => '更生黨',
                'establishment_date' => '民國110年12月24日',
                'approval_date' => '民國111年01月27日',
                'main_office_address' => '臺北市中山區林森北路409號7樓之11',
                'phone' => '933285657',
                'leader' => '吳軾子',
            ],
            75 => 
            [
                'id' => 377,
                'name' => '中正黨',
                'establishment_date' => '民國111年08月14日',
                'approval_date' => '民國111年09月27日',
                'main_office_address' => '臺北市文山區下崙路9號2樓',
                'phone' => '935078018',
                'leader' => '青天',
            ],
            76 => 
            [
                'id' => 378,
                'name' => '軒轅黨',
                'establishment_date' => '民國111年05月20日',
                'approval_date' => '民國111年10月07日',
                'main_office_address' => '新北市淡水區中山路133號',
            'phone' => '(02)26267777',
                'leader' => '李昱陞',
            ],
            77 => 
            [
                'id' => 379,
                'name' => '台灣麻將最大黨',
                'establishment_date' => '民國111年10月16日',
                'approval_date' => '民國111年12月20日',
                'main_office_address' => '臺北市南港區忠孝東路7段510號',
            'phone' => '(07)2212456',
                'leader' => '郭璽',
            ],
            78 => 
            [
                'id' => 380,
                'name' => '民主監督聯盟',
                'establishment_date' => '民國112年01月27日',
                'approval_date' => '民國112年03月16日',
                'main_office_address' => '高雄市三民區大順二路371之2號11樓',
                'phone' => '912113890',
                'leader' => '黃正忠',
            ],
            79 => 
            [
                'id' => 381,
                'name' => '中華保台反共復國黨',
                'establishment_date' => '民國112年03月26日',
                'approval_date' => '民國112年05月02日',
                'main_office_address' => '臺北市中山區林森北路409號七樓之11',
            'phone' => '(02)25411108',
                'leader' => '程凱力',
            ],
        ]);
    }
}