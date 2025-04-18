<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaiwanMotorVehiclesOfficesTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('taiwan_motor_vehicles_offices')->delete();
        DB::table('taiwan_motor_vehicles_offices')->insert([
            0 => 
            [
                'id' => 1,
                'office' => '臺北市區監理所',
                'station' => '-',
                'address' => '臺北市松山區八德路4段21號',
            'telephone' => '(02)27630155',
            'fax' => '(02)27421816',
                'precinct' => '臺北市中正區、中山區、松山區、大安區、萬華區、信義區、內湖區、南港區、文山區等9個行政區。',
            ],
            1 => 
            [
                'id' => 2,
                'office' => '臺北市區監理所',
                'station' => '士林監理站',
                'address' => '臺北市士林區承德路5段80號',
            'telephone' => '(02)28314155',
            'fax' => '(02)28385075',
                'precinct' => '臺北市士林區、北投區、大同區等3個行政區。',
            ],
            2 => 
            [
                'id' => 3,
                'office' => '臺北市區監理所',
                'station' => '金門監理站',
                'address' => '金門縣金湖鎮黃海路6之1號',
            'telephone' => '(082)332407',
            'fax' => '(082)333035',
                'precinct' => '金門縣。',
            ],
            3 => 
            [
                'id' => 4,
                'office' => '臺北市區監理所',
                'station' => '連江監理站',
                'address' => '連江縣南竿鄉津沙村155號',
            'telephone' => '(083)622694',
            'fax' => '(083)622138',
                'precinct' => '連江縣。',
            ],
            4 => 
            [
                'id' => 5,
                'office' => '臺北市區監理所',
                'station' => '基隆監理站',
                'address' => '基隆市七堵區實踐路296號',
            'telephone' => '(02)24515311',
            'fax' => '(02)24511363',
            'precinct' => '管轄基隆市、新北市七行政區(汐止區、瑞芳區、雙溪區、平溪區、貢寮區、萬里區、金山區)之汽、機車監理業務及汽車運輸業務。',
            ],
            5 => 
            [
                'id' => 6,
                'office' => '臺北區監理所',
                'station' => '-',
                'address' => '新北市樹林區中正路248巷7號',
            'telephone' => '(02)26884366',
            'fax' => '(02)26884645',
                'precinct' => '管轄新北市全市29區之汽車汽車監理業務、汽車運輸業務及新北市樹林區、鶯歌區、三峽區等3區之機車監理業務。',
            ],
            6 => 
            [
                'id' => 7,
                'office' => '臺北區監理所',
                'station' => '板橋監理站',
                'address' => '新北市中和區中山路3段116號',
            'telephone' => '(02)22227835',
            'fax' => '(02)22214935',
                'precinct' => '管轄新北市中和區、永和區、新店區、烏來區、深坑區、坪林區、石碇區、板橋區、土城區、新莊區、泰山區、林口區等12區之機車監理業務。',
            ],
            7 => 
            [
                'id' => 8,
                'office' => '臺北區監理所',
                'station' => '蘆洲監理站',
                'address' => '新北市蘆洲區中山二路163號',
            'telephone' => '(02)22886883',
            'fax' => '(02)22832906',
                'precinct' => '管轄新北市三重區、蘆洲區、五股區、八里區、淡水區、三芝區、石門區等七地區之機車機車監理業務。',
            ],
            8 => 
            [
                'id' => 9,
                'office' => '臺北區監理所',
                'station' => '宜蘭監理站',
                'address' => '宜蘭縣五結鄉中正路2段9號',
            'telephone' => '(03)9658461',
            'fax' => '(03)9658466',
                'precinct' => '管轄宜蘭縣宜蘭市、礁溪鄉、頭城鎮、壯圍鄉、員山鄉、羅東鎮、五結鄉、冬山鄉、大同鄉、三星鄉、蘇澳鎮、南澳鄉之汽、機車監理業務及汽車運輸業務。',
            ],
            9 => 
            [
                'id' => 10,
                'office' => '臺北區監理所',
                'station' => '花蓮監理站',
                'address' => '花蓮縣吉安鄉中正路2段152號',
            'telephone' => '(03)8523166',
            'fax' => '(03)8523170',
            'precinct' => '花蓮縣秀林鄉、新城鄉、花蓮市、吉安鄉、壽豐鄉、鳳林鎮、萬榮鄉、光復鄉、豐濱鄉等鄉鎮之汽、機車監理業務及瑞穗鄉、玉里鎮、卓溪鄉、富里鄉之汽車監理業務(不含小自客)及運輸業務。',
            ],
            10 => 
            [
                'id' => 11,
                'office' => '臺北區監理所',
                'station' => '玉里監理分站',
                'address' => '花蓮縣玉里鎮中華路427號',
            'telephone' => '(03)8883161',
            'fax' => '(03)8888456',
                'precinct' => '管轄花蓮縣南區玉里鎮、瑞穗鄉、富里鄉及卓溪鄉等四鄉鎮之小自客、機車監理業務。',
            ],
            11 => 
            [
                'id' => 12,
                'office' => '新竹區監理所',
                'station' => '-',
                'address' => '新竹縣新埔鎮文德路3段58號',
            'telephone' => '(03)5892051',
            'fax' => '(03)5889349',
            'precinct' => '新竹縣(除寶山鄉車管、運管、稅管及裁罰以外業務)',
            ],
            12 => 
            [
                'id' => 13,
                'office' => '新竹區監理所',
                'station' => '桃園監理站',
                'address' => '桃園市桃園區介壽路416號',
            'telephone' => '(03)3664222',
            'fax' => '(03)3679058',
                'precinct' => '桃園市北區：桃園區、八德區、蘆竹區、龜山區、大園區、復興區、大溪區',
            ],
            13 => 
            [
                'id' => 14,
                'office' => '新竹區監理所',
                'station' => '中壢監理站',
                'address' => '桃園市中壢區延平路394號',
            'telephone' => '(03)4253990',
            'fax' => '(03)4223521',
                'precinct' => '桃園市南區：中壢區、平鎮區、楊梅區、觀音區、新屋區、龍潭區',
            ],
            14 => 
            [
                'id' => 15,
                'office' => '新竹區監理所',
                'station' => '新竹市監理站',
                'address' => '新竹市自由路10號',
            'telephone' => '(03)5327101',
            'fax' => '(03)5333159',
            'precinct' => '新竹市(省轄市)、新竹縣寶山鄉(不含運輸業)',
            ],
            15 => 
            [
                'id' => 16,
                'office' => '新竹區監理所',
                'station' => '苗栗監理站',
                'address' => '苗栗縣苗栗市福麗里福麗98號',
            'telephone' => '(037)331806',
            'fax' => '(037)334682',
                'precinct' => '苗栗縣',
            ],
            16 => 
            [
                'id' => 17,
                'office' => '臺中區監理所',
                'station' => '-',
                'address' => '臺中市大肚區遊園路1段2號',
            'telephone' => '(04)26912011',
            'fax' => '(04)26915359',
                'precinct' => '臺中市、南投縣、彰化縣',
            ],
            17 => 
            [
                'id' => 18,
                'office' => '臺中區監理所',
                'station' => '豐原監理站',
                'address' => '臺中市豐原區豐東路120號',
            'telephone' => '(04)25274229',
            'fax' => '(04)25225088',
            'precinct' => '臺中市(沙鹿、梧棲、大肚、龍井、清水、太平、大里、霧峰、烏日等區除外)',
            ],
            18 => 
            [
                'id' => 19,
                'office' => '臺中區監理所',
                'station' => '臺中市監理站',
                'address' => '臺中市北區北屯路77號',
            'telephone' => '(04)22341103',
            'fax' => '(04)22360416',
                'precinct' => '1.臺中市職業汽車駕駛人業務。2.臺中市中、東、西、南、北、西屯、南屯、北屯區、霧峰、大里、太平、烏日區等機車業務。',
            ],
            19 => 
            [
                'id' => 20,
                'office' => '臺中區監理所',
                'station' => '彰化監理站',
                'address' => '彰化縣花壇鄉中山路2段457號',
            'telephone' => '(04)7867161',
            'fax' => '(04)7874498',
                'precinct' => '彰化縣',
            ],
            20 => 
            [
                'id' => 21,
                'office' => '臺中區監理所',
                'station' => '南投監理站',
                'address' => '南投縣南投市光明一路301號',
            'telephone' => '(049)2350923',
            'fax' => '(049)2350932',
            'precinct' => '南投縣(埔里、魚池、仁愛、國姓等4鄉鎮機車業務除外)',
            ],
            21 => 
            [
                'id' => 22,
                'office' => '臺中區監理所',
                'station' => '埔里監理分站',
                'address' => '南投縣埔里鎮水頭里水頭路68號',
            'telephone' => '(049)2980404',
            'fax' => '(049)2984448',
                'precinct' => '南投縣埔里、魚池、仁愛、國姓等4鄉鎮機車業務',
            ],
            22 => 
            [
                'id' => 23,
                'office' => '嘉義區監理所',
                'station' => '-',
                'address' => '嘉義縣朴子市朴子七路29號',
            'telephone' => '(05)3623939',
            'fax' => '(05)3622333',
                'precinct' => '辦理嘉義縣水上、鹿草、太保、朴子、新港、東石、六腳、義竹、布袋等九鄉鎮汽機車業務及雲林縣北港鎮機車業務',
            ],
            23 => 
            [
                'id' => 24,
                'office' => '嘉義區監理所',
                'station' => '東勢監理分站',
                'address' => '雲林縣東勢鄉新坤村新坤路333號',
            'telephone' => '(05)6991100',
            'fax' => '(05)6994483',
                'precinct' => '雲林縣東勢、臺西、麥寮、元長、褒忠、崙背、四湖、口湖、水林等九鄉鎮機車業務',
            ],
            24 => 
            [
                'id' => 25,
                'office' => '嘉義區監理所',
                'station' => '雲林監理站',
                'address' => '雲林縣斗六市雲林路2段411號',
            'telephone' => '(05)5335892',
            'fax' => '(05)5330150',
                'precinct' => '雲林縣汽機車業務',
            ],
            25 => 
            [
                'id' => 26,
                'office' => '嘉義區監理所',
                'station' => '新營監理站',
                'address' => '臺南市新營區大同路55號',
            'telephone' => '(06)6352845',
            'fax' => '(06)6335107',
                'precinct' => '臺南市新營、白河、鹽水、後壁、東山、柳營、六甲等七區機車業務',
            ],
            26 => 
            [
                'id' => 27,
                'office' => '嘉義區監理所',
                'station' => '臺南監理站',
                'address' => '臺南市東區崇德路1號',
            'telephone' => '(06)2696678',
            'fax' => '(06)2697627',
                'precinct' => '臺南市及永康、歸仁、龍崎、關廟、仁德地區等汽機車業務',
            ],
            27 => 
            [
                'id' => 28,
                'office' => '嘉義區監理所',
                'station' => '麻豆監理站',
                'address' => '臺南市麻豆區新生北路551號',
            'telephone' => '(06)5723181',
            'fax' => '(06)5722220',
                'precinct' => '臺南市業務（除永康、歸仁、龍崎、關廟、仁德等區外）',
            ],
            28 => 
            [
                'id' => 29,
                'office' => '嘉義區監理所',
                'station' => '嘉義市監理站',
                'address' => '嘉義市保建街89號',
            'telephone' => '(05)2770150',
            'fax' => '(05)2787623',
                'precinct' => '嘉義市、嘉義縣民雄、大林、梅山、溪口、竹崎、番路、阿里山、大埔、中埔等九鄉鎮汽機車業務',
            ],
            29 => 
            [
                'id' => 30,
                'office' => '高雄市區監理所',
                'station' => '-',
                'address' => '高雄市楠梓區德民路71號',
            'telephone' => '(07)3613161',
            'fax' => '(07)3619367',
                'precinct' => '鼓山區、旗津區、前鎮區、三民區、楠梓區、小港區、左營區',
            ],
            30 => 
            [
                'id' => 31,
                'office' => '高雄市區監理所',
                'station' => '苓雅監理站',
                'address' => '高雄市苓雅區安康路22號',
            'telephone' => '(07)2257812',
            'fax' => '(07)2258531',
                'precinct' => '苓雅區、前金區、新興區、鹽埕區',
            ],
            31 => 
            [
                'id' => 32,
                'office' => '高雄市區監理所',
                'station' => '旗山監理站',
                'address' => '高雄市旗山區旗文路123-1號',
            'telephone' => '(07)6613711',
            'fax' => '(07)6622048',
                'precinct' => '旗山區、美濃區、內門區、大樹區、燕巢區、杉林區、六龜區、甲仙區、田寮區、茂林區、桃源區、那瑪夏區等12個區域',
            ],
            32 => 
            [
                'id' => 33,
                'office' => '高雄區監理所',
                'station' => '-',
                'address' => '高雄市鳳山區武營路361號',
            'telephone' => '(07)7711101',
            'fax' => '(07)7711103',
                'precinct' => '仁武區、大社區、岡山區、路竹區、阿蓮區、橋頭區、梓官區、彌陀區、永安區、湖內區、鳳山區、大寮區、林園區、鳥松區、茄定區等15個區域',
            ],
            33 => 
            [
                'id' => 34,
                'office' => '高雄區監理所',
                'station' => '屏東監理站',
                'address' => '屏東縣屏東市忠孝路222號',
            'telephone' => '(08)7666733',
            'fax' => '(08)7337226',
                'precinct' => '屏東市、三地門鄉、霧台鄉、瑪家鄉、九如鄉、里港鄉、高樹鄉、鹽埔鄉、長治鄉、麟洛鄉、竹田鄉、內埔鄉、萬丹鄉、潮州鎮、泰武鄉、來義鄉、萬巒鄉、崁頂鄉、新埤鄉、南州鄉、林邊鄉、東港鎮、琉球鄉、佳冬鄉、新園鄉、枋寮鄉、春日鄉等27個市、鄉、鎮',
            ],
            34 => 
            [
                'id' => 35,
                'office' => '高雄區監理所',
                'station' => '恆春監理分站',
                'address' => '屏東縣恆春鎮草埔路11號',
            'telephone' => '(08)8892014',
            'fax' => '(08)8891310',
                'precinct' => '屏東縣恆春鎮、滿州鄉、牡丹鄉、獅子鄉、車城鄉及枋山鄉等6個鄉、鎮',
            ],
            35 => 
            [
                'id' => 36,
                'office' => '高雄區監理所',
                'station' => '臺東監理站',
                'address' => '臺東縣臺東市正氣北路441號',
            'telephone' => '(089)311539',
            'fax' => '(089)362837',
                'precinct' => '台東市、太麻里鄉、鹿野鄉、關山鎮、東河鄉、池上鄉、成功鎮、長濱鄉、大武鄉、海端鄉、延平鄉、卑南鄉、金峰鄉、達仁鄉、綠島鄉、蘭嶼鄉等16個市、鄉、鎮',
            ],
            36 => 
            [
                'id' => 37,
                'office' => '高雄區監理所',
                'station' => '澎湖監理站',
                'address' => '澎湖縣馬公市光華里121號',
            'telephone' => '(06)9211167',
            'fax' => '(06)9211843',
                'precinct' => '馬公市、湖西鄉、白沙鄉、西嶼鄉、望安鄉、七美鄉等6個市、鄉',
            ],
        ]);  
    }
}
