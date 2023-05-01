<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesInformationTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table("countries_information")->delete();
        DB::table("countries_information")->insert([
            0 => [
                "name" => "不丹王國",
                "name_in_en" => "Kingdom of Bhutan",
                "short_name" => "不丹",
                "short_name_in_en" => "Bhutan",
                "capital" => "辛布市",
                "capital_in_en" => "Thimphu",
                "national_day" => "12月17日",
                "join_un_day" => "1971年9月21日",
                "area_size" => "38,394平方公里",
                "geographic" =>
                    "地處喜馬拉雅山南坡。北部、東北、西北與中國為鄰；南部與印度接壤。境內多山，北高南低。",
                "religion" => "藏傳佛教",
                "bilaterial_relations" => null,
                "main_bounds" => "努札姆（Ngultrum），與印度盧比等值",
                "exchange_rate" =>
                    "詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/50a75ab5-b93a-4cf8-9016-3e42bbaec527.gif",
                "is_diplomatic" => 0,
                "language" => "Dzongkha（宗卡語，近西藏語）",
                "main_media" =>
                    "1973年成立的國營不丹廣播公司是國內唯一的電視服務供應商，用不丹語、英語、尼泊爾語廣播。1999年開通電視服務。不丹國營報紙Kuensel(昆色爾)週報於每週三與週六出刊，用不丹語、英語、尼泊爾語發行，並在網路上更新：另2006年開始發行不丹時報及不丹觀察員報兩份民營報紙。2008年開始發行「今日不丹」英語日報，2009年開始發行「不丹商業」報導財經金融消息。",
                "population" => "約78.23萬人(2020年7月)",
                "voltage" => "220 V",
                "time_difference" => "-2:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/94438dbd-bce6-4157-93d3-57acd6b440dd.jpg",
                "political_system" =>
                    "不丹於2007年自君主專制國家轉為君主立憲國家，2008年3月並舉行首次大選。現任國王為Jigme Khesar Namgyel Wangchuck（旺楚克國王）。",
                "history_intro" =>
                    "7世紀，佛教引進不丹，從此佛教在不丹扮演重要之地位。 9世紀開始形成獨立部落。12世紀後藏傳佛教逐漸執掌權力，實行政教合一。西藏與不丹的宗藩關係在18世紀頗羅鼐掌政西藏的時期確立。18世紀後期英國侵入，淪為英國的保護地，1907年建立不丹王國，之後對外關係接受英國「指導」；印度獨立後於1949年8月同不丹簽訂條約，對外關係接受印度「指導」。 2008年3月不丹舉行選舉後，產生議會民主制政府，由繁榮民主進步黨主席Jigme Y. Thinley就任首任總理，正式確立君主立憲，雖然國王仍是一國之首，但行政權已歸總理和內閣。",
                "parliament" =>
                    "國會分上議院(National Council)及下議院（National Assembly）。上議院共25席，其中20席為民選，5席由國王指派。根據不丹憲法，上議員參選者必須獨立參選，不得隸屬於任何黨派。上議員執掌係監督政府作為、審查法案、向國王建言，並可自行提出財政以外的法案，惟並無實權。下議院共47席，由人民直選。總理由下議院勝選之政黨推出人選後，經國王提名並經國會同意後任命。",
                "cabinet" =>
                    "現任總理為Lotay TSHERING（羅泰•策林），領導之部長會議（Council of Ministers）負責政務，政府設有11個直屬機構。",
                "judiciary" =>
                    "採最高法院體制(Supreme Court)，但國王擁有最高司法權力，包括受理最高上訴案件。1968年在首都廷布設立高等法院，包括首席法在內共有8名法官，其中2名由國民議會選出，任期5年，其餘由國王指派，任期由國王決定。各宗設有地方法院，由國王任命的宗長和地方法官負責處理地方訴訟案件。現任首席大法官為林波‧酋哥雅‧達哥‧領格汀旺(Lynopo Chogyal Dago Rigdzin)。",
                "headman" =>
                    "現任國王為Jigme Khesar Namgyel Wangchuck（旺楚克國王）。",
                "fa_minister" => "外交大臣為Tandi Dorji。",
                "major_political_parties" =>
                    "不丹共有5個政黨，主要政黨為執政之不丹團結黨(Druk Nyamrup Tshogpa,DNT，2013年成立，佔下議院47席位之30席，主席為現任總理Lotay TSHERING﹝羅泰•策林﹞)、在野黨人民民主黨(People’s Democratic Party, PDP，2007年成立，佔下議院47席位之17席，現任主席為前總理Tshering Tobgay﹝策林•托傑﹞)及在野黨和平繁榮進步黨（Druk Phuensum Tshogpa, DPT，2007年成立，現任主席為為前農業部長Pema Gyamtsho）。",
                "financial_incoming" => "收8.3億美元、支7.4億美元(2020年)",
                "export_value" => "2.62美元(2018年)",
                "import_value" => "7.55億美元(2018年)",
                "export_item" => "電力、矽鐵合金、水泥",
                "import_item" => "能源、汽車、機械及零組件、纖維",
                "main_export_countries" => "印度(83%)、香港(10.8%)",
                "main_import_countries" => "印度(72%)、韓國(6%)",
                "export_to" =>
                    "88,840美元(2019年)。主要產品：自動資料處理機、石油及提自瀝青礦物之油類、 自動調節或控制用儀器、智慧手機、手鋸",
                "import_from" =>
                    "41,650美元(2019年)。主要產品：身體除臭劑、卑金屬非電動鈴、書籍、 天然蜜、木質珠寶箱",
                "foreign_relationship" =>
                    "不丹國王Jigme Khesar Namgyal Wangchuck偕王后Jetsun Pema及小王儲Jigme Namgyel Wangchuck應莫迪總理邀請，2017年10月31日赴印度進行為期4天之國是訪問，係印「中」洞朗軍事對峙結束，兩國邊境情勢緩和後，首次訪問印度。2018年係印度與不丹建交50週年，不丹前總理托杰（Tshering Tobgay）率團於7月5日訪問印度3天，期間分別與莫迪總理及外長Sushma Swaraj，並晉見總統Ram Nath Kovind。",
                "foreign_policy" =>
                    "印度不僅為不丹保護國，並常干涉其外交及軍事。不丹與印度的關係是根據1949年8月8日和平友好條約為基礎，該條約保證印度在不丹外交事務上保持中立態度，且依印度外交政策發展自身外交。1961年以後，不丹曾多次表示自身主權完整，自1971年不丹在印度同意下加入聯合國後，遂開始與印度以外國家展開接觸；自2008年前總理Jigme Thinley就任後，改採積極外交政策，不丹現與歐盟及53個國家維持外交關係，在印度、孟加拉、泰國及科威特設有大使館，另在紐約、日內瓦設立代表團；並為「南亞區域合作協會」（SAARC）成員。不丹雖與中國大陸毗鄰，惟未與中國大陸建交，不丹也是同時與美國、中國及我國沒有建立正式邦交的國家。",
                "time_range" => "比台灣慢2小時",
                "resident" => "由駐印度代表處兼轄",
                "national_flag" =>
                    "由右上至左下分成橙色與紅色的旗幟，中央為白龍。https://zh.wikipedia.org/wiki/%E4%B8%8D%E4%B8%B9%E5%9B%BD%E6%97%97",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            1 => [
                "name" => "中非共和國",
                "name_in_en" => "Central African Republic",
                "short_name" => "中非",
                "short_name_in_en" => "Central African",
                "capital" => "班基(Bangui)",
                "capital_in_en" => "Bangui(班基)",
                "national_day" => "12月1日",
                "join_un_day" => "1966年9月20日",
                "area_size" => "622,984平方公里",
                "geographic" =>
                    "中部非洲內陸國家，東接蘇丹及南蘇丹，南鄰剛果民主共和國及剛果共和國，西界喀麥隆，北連查德。",
                "religion" => "基督教(89.5%)、伊斯蘭教(8.5%)、傳統信仰(1%)",
                "bilaterial_relations" => null,
                "main_bounds" => "中非法郎 （XAF）",
                "exchange_rate" =>
                    "1EUR=655.957XAF (1歐元固定兌換655.957中非法郎)。詳細匯率資訊建議至臺灣銀行（https://rate.bot.com.tw/xrt?Lang=zh-TW）或兆豐商銀（https://www.megabank.com.tw/personal/foreign-service/forex）網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/cc38bed4-7d8e-4cd8-8d22-a96355fd2021.GIF",
                "is_diplomatic" => 0,
                "language" => "法語(官方語言)，桑戈語(Sango，全國通行方言)",
                "main_media" =>
                    'Le Citoyen民營報、Le Confident民營日報、L\'Hirondelle民營日報、國營中非電視台Television Centrafricaine (TVCA) 、國營中非廣播台(Radio Centrafrique)',
                "population" => "535萬人(2021年)",
                "voltage" => "220伏特",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/e9915bf2-dc67-4d52-8b50-6bbb3308ba07.jpg",
                "political_system" => "共和國、總統制",
                "history_intro" =>
                    '中非原為販售黑奴之交通衢道，1894年納入法屬剛果，1903年成為法屬烏班基‧夏利領地（Territoire d\'Oubangui-Chari）。達可(David Dacko)於1960年8月13日中非共和國正式獨立後擔任首任總統，1966年1月1日卜卡薩（Jean-Bedel Bokassa）上校政變奪取政權，並於1977年登基稱帝，1979年9月帝制遭推翻後，歷經柯林巴總統 (André Kolingba)（1986年當選）、巴達塞(Ange-Félix Patassé)（1993年當選），嗣2003年3月15日，前中非參謀總長柏席斯（François Bozizé）發動政變成功奪取政權，建立過渡政府，自任總統兼國防部長。2004年11月，中非舉行「公民投票」通過新憲法。2005年5月13日中非舉行總統大選第2回合投票，柏席斯當選總統，結束過渡政府。2011年柏席斯再次當選總統，惟政府仍然無法完全控制地方。一支號稱上帝抵抗軍「塞雷卡」(Séléka)，繼續控制該國東南區，並攻佔北部和中部許多城鎮。叛軍與政府於2013年1月初和平談判，雙方共組聯合政府。2013年3月聯合政府解散，反政府軍領導人喬托迪亞(Michel Djotodia)佔領首都，柏席斯總統逃離該國，喬托迪亞宣布就任總統，並成立全國過渡委員會（CNT）。',
                "parliament" => "國民議會共140席，由人民直選產生，任期5年。",
                "cabinet" => "總理由國會多數黨任命",
                "judiciary" =>
                    "設有最高法院、憲法法庭、上訴法院、犯罪法院及初等法院。",
                "headman" => "圖瓦德拉(Faustin-ArchangeTouadéra)",
                "fa_minister" => "拜波泰蒙(Sylvie Baïpo-Temon)",
                "major_political_parties" =>
                    "國家聯盟(Convergence nationale-Kwa Na Kwa, KWA)、中非民主聯盟(Rassemblement Démocratie Centafricain, RDC)、中非人民解放運動(Mouvement pour la Libération du Peuple Centrafricain, MLPC)、民主進步聯盟(Alliance pour la Démocratie et le Progrès, ADP)、自由民主黨(Parti Libéral-Démocrate, PLD)",
                "financial_incoming" =>
                    "歲入4.90億美元，歲出4.45億美元、外債為10.74億美元 (2019年)。",
                "export_value" => "1.54億美元 (2019年)",
                "import_value" => "6.16億美元 (2019年)",
                "export_item" => "鑽石、棉花、木材、咖啡、菸草",
                "import_item" => "工業設備、油料",
                "main_export_countries" =>
                    "法國、貝南、中國、查德、巴基斯坦、蒲隆地、喀麥隆、澳洲",
                "main_import_countries" =>
                    "法國、喀麥隆、中國、日本、美國、印度、南非、義大利",
                "export_to" => "29,868美元(2020年)",
                "import_from" => "88,272 美元(2020年)",
                "foreign_relationship" =>
                    "中非與積極發展睦鄰友好關係，並積極參與中部非洲多個區域組織，如中非經濟貨幣聯盟(CEMAC)、中非經濟共同體(CEEAC)，並與法國、喀麥隆、查德、剛果民主共和國等維持友好關係。",
                "foreign_policy" =>
                    "奉行睦鄰友好、不結盟和多元化外交政策，以爭取外援為重點，積極發展與周邊國家、西方國家、區域及國際組織的官係，以取得國家發展建設所需資源。",
                "time_range" => "較臺灣慢7小時",
                "resident" =>
                    "我在該國未設處，該國事務由我駐法國台北代表處兼理。",
                "national_flag" =>
                    "藍色（頂部）、白色、綠色和黃色四個相等的水平帶，中央有一個垂直的紅色帶；一個黃色的五角星到藍帶的葫蘆邊；橫幅結合泛非和法國的國旗顏色；紅色象徵著爭取獨立的血液，藍色代表天空和自由，白色和平與尊嚴，綠色希望與信念，黃色寬容；這顆恆星代表了朝向一個充滿活力的未來的願望。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            2 => [
                "name" => "丹麥王國",
                "name_in_en" => "Kingdom of Denmark",
                "short_name" => "丹麥",
                "short_name_in_en" => "Denmark",
                "capital" => "哥本哈根",
                "capital_in_en" => "Copenhagen",
                "national_day" => "6月5日",
                "join_un_day" => "1945年10月24日",
                "area_size" =>
                    "42,921.60平方公里（不包括格陵蘭及法羅群島2個自治領)",
                "geographic" => "北歐",
                "religion" => "基督教路德教派",
                "bilaterial_relations" => null,
                "main_bounds" => "丹麥克朗（Krone, DKK）",
                "exchange_rate" =>
                    "與美金兌換率：US﹩1.00= DKK 6.97(2023年3月20日)「詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢」",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/291f3c59-406d-4327-8661-be8dd11160b0.GIF",
                "is_diplomatic" => 0,
                "language" => "丹麥語",
                "main_media" =>
                    "Jyllands-Posten, Berlingske Tidende, Politiken, Aktuelt, The Copenhagen Post",
                "population" => "590萬人(2023年2月)",
                "voltage" => "220伏特",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/4d359e45-caf2-4ef6-a5f8-a0ce2f743fc2.jpg",
                "political_system" => "君主立憲內閣制",
                "history_intro" =>
                    "西元1375年在MARGRETHE女王領導下，奠定建國基礎，當時領域包括今之瑞典、挪威及冰島等地。1523年瑞典脫離丹麥統治，1813年由於丹瑞大戰戰敗，將挪威之控制權讓與瑞典，1849年通過君主立憲，1944年冰島又正式脫離丹麥獨立，迄今維持目前之領土。1953年修憲允許王室女性後裔繼承王位。",
                "parliament" =>
                    "丹麥議會共有179席，175席來自丹麥本土，2席來自格陵蘭，2席來自法羅群島。",
                "cabinet" =>
                    "1918年以來，沒有任何單一政黨能在國會取得絕對多數，因此政府法案大多需要執政黨與在野黨雙方的談判或妥協，故各政黨的意識形態日漸相近。",
                "judiciary" => "最高法院處理與憲法相關的案件。",
                "headman" =>
                    "女王瑪格麗特二世Queen Margrethe II(1972年1月14日即位)。",
                "fa_minister" => "Lars Løkke Rasmussen",
                "major_political_parties" =>
                    "丹麥社會民主黨、丹麥自由黨、中間黨、丹麥民主黨、社會自由黨、社會人民黨及紅綠聯盟。",
                "financial_incoming" => "2022年歲入1915億美元，歲出1887億美元",
                "export_value" => "1291億美元(2022)",
                "import_value" => "1255億美元(2022)",
                "export_item" =>
                    "醫藥、一般工業機械、動力機械、肉品、成衣、海鮮等。",
                "import_item" =>
                    "車輛、電力設備、一般工業機械、成衣、醫藥、石油等。",
                "main_export_countries" => "德國、瑞典、美國、挪威、中國",
                "main_import_countries" => "德國、瑞典、中國、荷蘭、挪威",
                "export_to" => "4億7857萬美元(2022年)",
                "import_from" => "10億8782萬美元(2022年)",
                "foreign_relationship" =>
                    "中華民國與丹麥關係是指中華民國與丹麥王國之間的關係。1913－1950年，兩國有官方外交關係但曾經中斷，二次斷交後直至1980年代，於對方首都互設具大使館性質的代表機構。雙方也以民間性質在經濟、商業、學術以及文化等領域合作往來。(一) 丹麥目前與171個國家建立外交關係，並在68國設有大使館(資料更新至2023年2月)，此外並積極參與各種國際組織，在7個國際組織設有常任代表處。丹麥對開發中國家的援助，依GDP比例而言，在世界中名列前茅，2020年其援外佔ＧＮI比例為0.70％。丹麥積極投入援外，重視對非洲關係和非洲發展問題，對非援助佔其對外援助的一半以上，計劃提升至三分之二，注重經援與民主、人權掛鉤。 (二) 丹麥視美國為其最重要的戰略盟國，亦將與美國及北約關係作為跨大西洋合作的核心內容和丹安全政策的基礎，認為美與北約在歐洲的軍事存在有利於歐洲的和平與穩定。 (三) 丹麥視與歐盟合作為外交政策的核心。支持歐盟東擴與深化一體化建設。然而丹麥在司法、防務、貨幣、歐洲公民權等四項歐盟合作領域仍持保留。",
                "foreign_policy" => "歐盟會員國，採行歐盟之一致對外政策。",
                "time_range" =>
                    "冬令時間(每年10月之最後一個星期日開始)為7小時，夏令時間(每年3月之最後一個星期日開始)為6小時。",
                "resident" => "駐丹麥代表處",
                "national_flag" =>
                    "丹麥國旗又稱為「丹尼布洛」，意思為「丹麥人的旗」或「紅色的旗」。丹麥的國旗是現今使用的國旗中最古老的，自1219年使用至今，對北歐國家的北歐十字國旗設計起了重大影響。",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            3 => [
                "name" => "亞塞拜然共和國",
                "name_in_en" => "Republic of Azerbaijan",
                "short_name" => "亞塞拜然",
                "short_name_in_en" => "Azerbaijan",
                "capital" => "巴庫",
                "capital_in_en" => "Baku",
                "national_day" => "5月 28日",
                "join_un_day" => "1992年3月2日",
                "area_size" => "86,600平方公里",
                "geographic" =>
                    "位於外高加索東南部，東濱裏海，西鄰喬治亞及亞美尼亞，南與伊朗接壤，北鄰俄羅斯聯邦",
                "religion" => "93.4%為伊斯蘭，俄東正教2.5%，亞美尼亞東正教2.3%",
                "bilaterial_relations" => null,
                "main_bounds" => "馬納特(Azerbaijani Manat; AZN)",
                "exchange_rate" =>
                    "1美元約兌換1.71馬納特（Azerbaijan Manats, AZN）（2023年3月）「詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢」",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/3b23d0e9-0e55-47d7-85aa-7667a7244ae5.GIF",
                "is_diplomatic" => 0,
                "language" => "亞塞拜然語、俄語",
                "main_media" =>
                    "報紙：Echo, Zerkalo, Azadlyg, 525 newspaper, Yeni-musavat",
                "population" => "約1,036萬人（2022年）",
                "voltage" => "220V",
                "time_difference" => "-4:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/9803baa3-b2d2-4fdb-9a07-f22096f6dd49.JPG",
                "political_system" => "共和國制",
                "history_intro" =>
                    "亞塞拜然之國情相當特殊複雜。在血緣上，人種是突厥族(土耳其後裔之一支)，與土耳其關係密切，然在歷史經驗與宗教信仰上，亞塞拜然人與波斯有很深之連帶關係，屬於伊斯蘭什葉派。所居之地位居東西南北要衝，向為兵家必爭之地，曾遭俄羅斯與波斯瓜分，阿拉希河北岸(北亞塞)即為現今之亞塞拜然共和國，南岸(南亞塞)則為伊朗境內之亞塞拜然省。1918至1920年間曾是獨立國家，1920年4月加入蘇聯，成為亞塞拜然蘇維埃社會主義共和國；1989年9月發表主權宣言，1991年10月18日正式宣告獨立；12月簽署加入「獨立國協」，1995年11月實施新憲法。",
                "parliament" =>
                    "稱為國民大會（Milli Majlis），共有125席，任期5年，2015年11月1日國會大選，執政黨新亞塞拜然黨（New Azerbaijan Party）獲得69席，得票率47.2%。下屆國會選舉原訂於2020年11月舉行，因總統於2019年11月宣布國會解散，因此提前於2020年2月9日舉行第６屆國會改選，新亞塞拜然黨從原本的69席增加到72席。新亞塞拜然黨Sakhiba Gafarova女士於2020年3月當選現任議長。",
                "cabinet" =>
                    "本屆政府於2018年4月組成，現任總理阿薩多夫（Ali Asadov）於2019年10月8日上任。",
                "judiciary" =>
                    "有憲法法院、最高法院、經濟法院、各級普通法院與專門法院。",
                "headman" =>
                    "總統伊利哈姆．阿里耶夫(Ilham Heydar oglu Aliyev) ，於2003年10月28日當選，任期5年；2008年10月22日、2013年10月19日及2018年4月18日連任並宣誓就職(該國於2016年修憲，總統任期改為7年)。",
                "fa_minister" => "Jeikhun Bairamov",
                "major_political_parties" =>
                    "新亞塞拜然黨（New Azerbaijan Party），亞塞拜然現任總統、議長、總理及多數內閣成員和地方官員均為該黨黨員，另還有人民團結黨（Civic Solidarity Party）及祖國黨(Motherland Party)等諸多政黨。",
                "financial_incoming" =>
                    "國內生產總值：800億美元（2022年）；平均國民所得：6,842美元(2022年)",
                "export_value" => "約381,5億美元 (2022年)",
                "import_value" => "約145,4億美元 (2022年)",
                "export_item" =>
                    "石油及天然氣、機械、棉花、水果蔬菜、黑色金屬及製品、化工產品、菸酒等。",
                "import_item" =>
                    "機械及設備、交通運輸設備、糧食、金屬、化學製品。",
                "main_export_countries" =>
                    "義大利、以色列、土耳其、法國、俄羅斯、印尼、德國",
                "main_import_countries" =>
                    "俄羅斯、英國、德國、土耳其、土庫曼、烏克蘭、中國",
                "export_to" => "約689萬美元 (2022年)",
                "import_from" => "2億3,044萬美元",
                "foreign_relationship" =>
                    "亞塞拜然南鄰伊朗、北接俄羅斯，歐亞交界的獨特地理位置是大國外交角力的重要戰場，且因其豐富石油蘊藏量，在國際政治中地位舉足輕重。亞塞拜然因「納戈爾諾－卡拉巴赫」（Nagorno-Karabakh）地區獨立問題(居民以亞美尼亞裔為主)，與鄰國亞美尼亞關係不睦，並影響其與俄國的關係；亞塞拜然與土耳其關係密切，與美、歐關係加強中，對以色列友好。亞塞拜然與亞美尼亞於2020年9月27日上午於納-卡地區爆發軍事衝突，造成數百名軍人死亡，亞美尼亞及亞塞拜然皆宣布進入戒嚴，互相指責對方發動攻擊。外界認為，亞塞拜然在土耳其背後支持下，以收復納-卡失土為目的，發動衝突，目的在迫使亞美尼亞認真面對佔領問題。衝突歷經44天，俄國總統普丁於2020年11月9日與亞塞拜然總統Ilham Aliyev及亞美尼亞總理Nikol Pashinyan簽署三方停火協議，自11月10日莫斯科時間凌晨0時起全面停止納-卡地區的軍事行動，由俄國派遣維和部隊進駐納-卡地區，亞塞拜然則收復原本遭到亞美尼亞武裝部隊佔領、與納-卡地區相鄰的七個地區。2022年5月在歐盟理事會主席米歇爾居間協調下，亞塞拜然與亞美尼亞針對邊界爭議達成若干共識，展開重新劃定邊界工作會談。",
                "foreign_policy" =>
                    "亞塞拜然將發展與歐美及俄羅斯關係作為外交優先方向，重視與歐盟開展各項領域合作，積極參加歐盟「東部夥伴關係計畫」，大力支持建設裏海能源外運管線。加強與北約的軍事合作，努力爭取國際社會對亞塞拜然解決「納－卡」問題的同情與支持。亞塞拜然因「納－卡」問題與亞美尼亞敵對，迄未建交，其外交政策主要目標在與亞美尼亞就「納－卡」地區領土爭議達成協議，惟亞美尼亞國內反對向亞塞拜然讓步，雙方爭議仍未解決。",
                "time_range" => "較台灣慢4小時",
                "resident" => "無駐館，相關業務由駐俄羅斯代表處兼轄。",
                "national_flag" => null,
                "area_name" => "亞西地區",
                "area_name_in_en" => "West Asia",
            ],
            4 => [
                "name" => "亞美尼亞共和國",
                "name_in_en" => "Republic of Armenia",
                "short_name" => "亞美尼亞",
                "short_name_in_en" => "Armenia",
                "capital" => "葉里溫",
                "capital_in_en" => "Yerevan",
                "national_day" => "9月 21日",
                "join_un_day" => "1992年3月2日",
                "area_size" => "29,743平方公里",
                "geographic" =>
                    "位於外高加索南部，介於黑海東南與裏海西南之間，南與伊朗、土耳其相鄰，北與喬治亞為界，東與亞塞拜然接壤，係一內陸國，全國劃分為10個州及一個州級市。",
                "religion" => "基督教（亞美尼亞使徒教會）",
                "bilaterial_relations" => null,
                "main_bounds" => "德拉姆(Armenian Dram; AMD)",
                "exchange_rate" =>
                    "1美元約388.27德拉姆（Armenian Drams, AMD）（2023年3月）「詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢」",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/283345a7-4704-4baf-bcd5-b770f27eddda.GIF",
                "is_diplomatic" => 0,
                "language" => "亞美尼亞語",
                "main_media" =>
                    "National Television of Armenia、Asbarez Daily Newspaper、Aragil News",
                "population" => "278萬人（2022年）",
                "voltage" => "220V",
                "time_difference" => "-4:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/d622a1c1-719b-4724-8540-99d01da93f77.JPG",
                "political_system" => "內閣議會制",
                "history_intro" =>
                    "今日所稱之「亞美尼亞」係歷史上所謂「東亞美尼亞」的一部份，為古代文明中心之一，建築、繪畫、雕刻等文化十分發達。雖然二千多年來，亞美尼亞人先後分別為波斯、羅馬、鄂圖曼土耳其、俄羅斯等外族所統治、壓迫，但仍保有自己的語言、文化和宗教信仰（基督教）。 19世紀初，亞美尼亞為俄羅斯帝國所統轄。19世紀末葉至廿世紀初，俄、土兩帝國為爭奪此一地區統治權而爭戰不斷，而於1870年代爆發俄–土戰爭後，在鄂圖曼土耳其帝國統治下的亞美尼亞人即嘗試自治。第一次世界大戰前後（1915–1922年）西亞美尼亞人民遭土耳其軍隊大肆鎮壓、屠殺、或被放逐至敘利亞沙漠，死亡人數幾近150萬人。1917年俄國十月革命後，亞美尼亞被併入外高加索共和國，1918年外高加索共和國分裂，獨立之亞美尼亞復遭土耳其入侵，被迫割讓部份領土。1921年亞美尼亞成為前蘇聯加盟共和國之一。1991年前蘇聯瓦解，亞美尼亞於是年9月21日舉行公民投票後宣佈獨立，並於同年12月21日加入「獨立國家國協」（簡稱獨立國協，Commonwealth of Independent States）。 1995年7月頒佈新憲法。",
                "parliament" =>
                    "亞美尼亞國會稱為「國民會議」（National Assembly），是國家最高立法機關，本屆國會為第八屆，於2021年6月選舉產生，共107名議員，任期5年。國會第一大黨為「公民契約」黨（Civil Contract），共獲53.95%得票率，在國會中佔有71席。國會議長Alen Simonyan(自2021年8月起)",
                "cabinet" =>
                    "總統提名總理，由總理組閣。現任總理為Nikol Pashinyan（自2018年5月起）。",
                "judiciary" => "設有上訴法院、憲法法院及檢察總署",
                "headman" => "Vahagn Khachaturyan（自2022年3月13日起）",
                "fa_minister" => "Ararat Mirzoyan(自2021年8月起)",
                "major_political_parties" =>
                    "公民契約（Civil Contract）、亞美尼亞聯盟（Armenia Alliance）、 我的榮譽聯盟（I Have Honor Alliance）。",
                "financial_incoming" =>
                    "國內生產毛額：195億（2022年）；平均國民所得：6,569美元（2022年）",
                "export_value" => "約53.6億（2022年）",
                "import_value" => "約87.69億（2022年）",
                "export_item" => "金屬、鑽石、食品、礦產",
                "import_item" => "天然氣、石油、菸草製品、食品、鑽石、汽車",
                "main_export_countries" =>
                    "俄羅斯、瑞士、保加利亞、中國、伊拉克",
                "main_import_countries" => "俄羅斯、中國、伊朗、土耳其、德國",
                "export_to" => "約514萬美元（2022年）",
                "import_from" => "約234萬美元（2022年）",
                "foreign_relationship" =>
                    "（一）亞國與鄰國亞塞拜然關係不睦，兩國長期因「納戈爾諾－卡拉巴赫」（Nagorno-Karabakh）地區獨立問題發生衝突，導致雙邊經貿往來幾乎停滯。2020年9月，「雙亞」再因「納－卡」地區衝突交戰，亞美尼亞居於弱勢，俄羅斯積極參與調解停火工作，是年11月9日俄、亞美尼亞、亞塞拜然簽署三方和平協議，「雙亞」結束交戰。但雙方2022年9月初仍發生衝突，2022年10月2日「雙亞」外長在日內瓦會面，討論起草和平條約文本。（二）亞國積極加強與俄羅斯、喬治亞及伊朗睦鄰友好合作關係，深化與美國及歐盟聯繫，積極參與獨立國協、歐安組織、集體安全條約組織、歐洲理事會、歐亞經濟聯盟等多邊組織事務。（三）2012年8月，匈牙利同意一名殺害亞美尼亞軍官的亞塞拜然軍官引渡回亞塞拜然，該名軍官隨即獲得特赦，此舉讓亞美尼亞宣布與匈牙利中止外交關係。（四）亞美尼亞對外工作主軸之一為要求各國承認土耳其曾對亞美尼亞進行「種族滅絕」之史實，迄至2022年，共獲得包括美、加、法、德、俄在內之30國家承認。（五） 因土耳其對於「亞美尼亞種族大屠殺」之歷史認知，以及在「納卡問題」上支持亞塞拜然，亞美尼亞與土耳其迄未能建立正常外交關係。2022 年 1 月 14 日，兩國特別代表舉行第一次會議，雙方同意就雙邊關係全面正常化進行談判。",
                "foreign_policy" =>
                    "亞美尼亞奉行平衡互補外交政策，努力鞏固與俄羅斯的戰略同盟關係，以加入歐盟作為長期外交取向，積極發展與美國及歐盟關係，參加北約「和平夥伴關係」架構内的各項活動，尋求安全政策多元化。",
                "time_range" => "較台灣慢4小時",
                "resident" => "無駐館，相關業務由駐俄羅斯代表處兼轄。",
                "national_flag" => null,
                "area_name" => "亞西地區",
                "area_name_in_en" => "West Asia",
            ],
            5 => [
                "name" => "以色列",
                "name_in_en" => "State of Israel",
                "short_name" => "以色列",
                "short_name_in_en" => "Israel",
                "capital" =>
                    "耶路撒冷（以色列於1950年宣佈首都為耶路撒冷，惟未獲國際普遍承認，耶城地位具高度爭議性，多數國家包括我國在內均將大使館/代表處設立於台拉維夫）",
                "capital_in_en" =>
                    "耶路撒冷(Jerusalem)（以色列於1950年宣佈首都為耶路撒冷，但多數國家包含我國在內將大使館/代表處設立於台拉維夫）",
                "national_day" => "每年猶太曆以珥月5日，通常在西曆四月或五月",
                "join_un_day" => "1949年5月11日",
                "area_size" => "21,946平方公里",
                "geographic" =>
                    "位於阿拉伯半島西北角，北接黎巴嫩，東北與敘利亞為鄰，東與約旦接壤，南及西南連接西奈半島，西瀕地中海。",
                "religion" => "猶太教、伊斯蘭教、基督教等。",
                "bilaterial_relations" => null,
                "main_bounds" => "以幣 New Israeli Shekel",
                "exchange_rate" =>
                    "1美元約合3.09以幣 (2022.01)詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢」。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/b8c5f486-21f4-41a6-9afa-dc91a7625141.GIF",
                "is_diplomatic" => 0,
                "language" => "希伯來語、阿拉伯語。",
                "main_media" =>
                    '以色列主要日報：1.國土報（Ha\'aretz）成立於1919年，為以色列左派媒體，並以紮實，高水平的報導而著稱。它由Shocken媒體集團所有，後者還擁有一家出版社和許多當地報紙。2.最新消息報（Yediot Aharonot）成立於1939年，發行量最高-佔希伯來語報紙讀者總數的三分之二。它是Moses家庭媒體集團的主要組成部分，該集團還擁有一家出版社，生產雜誌和當地報紙。3. 晚禱報（Ma\'ariv）成立於1948年，多年來發行量最大，但後來卻被其競爭對手Yediot Aharonot蠶食。它由Nimrodi家族所有，該家族還擁有一家出版公司和音樂公司，雜誌以及當地報紙。4.環球報（Globes）是財經日報，成立於1983年，是以色列日報中最晚成立的，在商業領域佔有一席之地。5.耶路撒冷郵報：以色列歷史最久的英文報紙，成立於1932年，為發行量最大的英文報紙。6.今日以色列報(Israel Hayom):由Sheldon Adelson家族於2007年成立的免費日報，該報立場偏保守右派，因該報係免費派送，可觸及以國約三成讀報人口。以色列主要電視與電台：1.以色列廣播局( Israel Broadcasting Authority)負責以色列公營電視臺（第一頻道）及公營廣播電臺（以色列之音）。該局經費由一般收視家庭付費，電臺之廣告收入及政府支付電視之公共服務廣播費。第一頻道電視臺由每日上午6:30開播至深夜一時，為公共電視臺，提供教育、資訊、娛樂性節目，以希伯來語、阿拉伯語、及其他語言播出，2017年起改為KAN11頻道。另KOL ISRAEL(以色列之音廣播電臺)擁有8個廣播頻道，廣播內容從娛樂性到新聞性，適合各個階層、年齡之聽眾。該臺亦有短波頻道，以17種外語對外廣播，提供以色列及中東最新消息。2.第二電視、電臺廣播局( The Second Television and Radio Authority)：該局為監督民營之第二電視臺、以及民營地區電臺之機構。第二電視臺創立於1993年，由三大特許財團(新消息報集團、晚禱報集團、可口可樂集團)出資，各負責製作兩天節目之方式經營。2017年11月起，第二電視台為第12及13頻道取代。3.第9頻道：主要以俄語廣播，目標受眾是自1990年以來移民到該國的超過2百萬俄羅斯人。4.KAN23教育頻道：希伯來語兒童電視頻道。該頻道於2018年8月15日開播，並取代了之前的以色列教育電視台。5. Kan 33（Makan）：阿拉伯語電視頻道。以色列的一個免費電視頻道，代表以色列廣播公司針對該國的阿拉伯社區。該頻道於2017年5月啟動，並取代了之前的33頻道。6.i24news：英語，法語和阿拉伯語的國際新聞電視頻道。',
                "population" => "949萬人(2022.03）",
                "voltage" => "230伏特50HZ(歐規雙圓孔插頭)",
                "time_difference" => "-5:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/23c29b8a-c918-4f65-8736-a4d8572ec6dc.jpg",
                "political_system" =>
                    "以色列政府體系採內閣制並為單一國會，共有120席，依法每四年改選。總理為國家行政首長，由總統授權於國會大選後最有可能籌組新政府之政黨（一般為擁有最多席次政黨）組閣，一般由該黨主席出任閣揆，或經政黨協商決定閣揆人選。總統則為虛位元首，任期七年，由國會議員經秘密投票方式選出；總統職權包括代表國家主持重要慶典、出席國際活動、進行國是訪問，以及任命籌組政府內閣人選。",
                "history_intro" =>
                    "紀元前1000年左右，猶太人曾在巴勒斯坦建立王國，嗣後分為北方以色列國，南方猶太國。其後該地歷經亞述人、巴比倫人、波斯人及希臘人之統治。紀元後132至135年間，猶太人反抗羅馬統治，受到殘酷鎮壓，死亡慘重，倖存者大多逃往他處，從此猶太人失去祖國，開始過其顛沛流離之苦難生活。 19世紀末葉，流亡世界各地之猶太人即醞釀復國運動，1897年在猶太人赫佐(Herzl)之倡導下，在瑞士巴索(Basel)召開第一次猶太復國運動大會，成立世界猶太復國組織。第一次世界大戰後巴勒斯坦經國際聯盟委由英國統治，世界各地猶太人大量遷入巴勒斯坦，激起當地阿拉伯人之強烈反對，因此猶太人與阿拉伯人間一再發生衝突，英國無力維持治安，乃於1947年4月將巴勒斯坦問題提交聯合國處理。同年11月29日聯合國通過決議案，實施巴勒斯坦分治，由原居該地之阿拉伯人及猶太人分別成立國家，將耶路撒冷劃由聯合國委派總督管理。以色列接受此分割統治計畫，但阿拉伯國家力表反對。1948年5月14日英國宣布巴勒斯坦委任統治終止，同日以色列發表獨立宣言，宣布成立以色列國，埃及、約旦、敘利亞、黎巴嫩及伊拉克等5個阿拉伯國家聯合出兵進攻以色列，此即第一次以阿戰爭；嗣經聯合國調處，以色列於1949年2月24日分別與埃及、黎巴嫩、約旦、敘利亞簽訂停戰協定。以、阿雖暫維持和平，但敵對情勢並未消除，雙方先後又經歷1956年10月、1967年6月、1973年10月四次戰爭。以色列之建國經過，實不啻一部猶太人與阿拉伯人之鬥爭史。",
                "parliament" =>
                    "以色列為內閣制國家，國會為一院制，共有議員120席，分設12~16個常設委員會行使立法與監督政府之職權，任期4年，由18歲以上公民投票選出，凡年在21歲以上公民均有資格競選。以色列政黨林立，主要政黨包括利庫黨(Likud)、未來黨（Yesh Atid）、國家聯合黨(National Unity)、以色列家園黨(Israel Beitenu)、勞工黨(Labor)、夏斯黨(Shas)、聯合妥拉黨(United Torah Judaism, UTJ)、梅瑞茲黨(Meretz)、宗教錫安黨(Religious Zionist)等。依據以國現行法律，參選政黨必須取得3.25%門檻的選票，才能分配國會議員席次。",
                "cabinet" => "內閣閣員名單由組閣之執政聯盟領袖決定。",
                "judiciary" =>
                    "除最高法院外，下有行政法院、地方法院、勞工法院及宗教法院。",
                "headman" =>
                    "以國總統為虛位元首，由國會選出，任期7年，不得連任。總統所屬較重要的權力包括任命總理人選組閣、簽署法律及接受使節到任國書等，現任總統Isaac Herzog於2021年7月7日就職。",
                "fa_minister" => "克涵（Eli Cohen）(2022年12月起)",
                "major_political_parties" =>
                    "利庫黨(Likud)、未來黨（Yesh Atid）、國家聯合黨(National Unity)、夏斯黨（Shas）、聯合妥拉黨（UTJ）、以色列家園黨(Yisrael Beitenu)、梅瑞茲黨（Meretz）、工黨(Labor Party)、宗教錫安黨(Religious Zionist)及阿拉伯聯合黨（Joint Arab List）等。",
                "financial_incoming" =>
                    "1.依據以色列中央統計局最新資料，2022年第三季經濟成長率維持穩定成長，較上一季小幅成長2.1%；與2021年同期相較成長5.8%，表現明顯優於其他OECD主要經濟體。除民間消費受到近期國際能源與原物料價格大漲，以致國內物價持續上升影響而萎縮(-1.7%)之外，政府消費(+6.5%)、固定資本形成-產業(+14.2%)、固定資本形成-住宅房屋(+13.9%)、出口(+3.9%)均呈現正成長。其中，國內固定投資二位數成長更凸顯企業對以國經濟前景抱持樂觀預期而持續擴大投資，近期以色列央行亦上修2022全年預期經濟成長率為6%。2.受到新冠疫情加劇國際供應鏈緊張、俄烏戰爭帶動全球物價飆升、美中科技戰致中國經濟成長趨緩、以色列上市科技公司因美國Nasdaq股市暴跌而市值下滑等諸多不利外在環境因素影響，以國經濟成長較去年放緩，不少科技新創企業陸續傳出裁員消息，惟整體失業率仍維持平穩，除呼應前述國內經濟前景看好之外，亦顯示以國政府推出的數項高科技人才培育獎勵計畫已見成效。3.財政部分，為因應疫情對經濟之衝擊，以色列央行於2020年4月6日宣布將基準利率從0.25%調降至0.1%。2022年由於全球通膨因素，以國央行於2022年4月首度升息至0.35%，之後頻頻調升，盼發揮抑制通膨效果，截至2022年11月已是第6次升息，基準利率已調高至3.25%。",
                "export_value" => "600億美元(2021年)",
                "import_value" => "902億美元(2021年)",
                "export_item" =>
                    "機械及電機設備、化學品含藥品、鑽石珠寶、光學計量及醫療器材、橡塑膠及其製品、航空器及運輸工具、卑金屬及其製品。",
                "import_item" =>
                    "機械及電機設備、礦產品、化學品含藥品、交通運輸設備及其零件、卑金屬及其製品、鑽石珠寶、橡塑膠及其製品、食飲品。",
                "main_export_countries" =>
                    "美國(26.95%)、中國大陸含香港(9.55%)、印度(4.59%)、英國(3.97%)、荷蘭(3.7%)、比利時(3.2%) (2021)。",
                "main_import_countries" =>
                    "中國大陸含香港(14.83%)、美國(9.18%)、瑞士(7.3%)、德國(7.26%)、土耳其(5.27%)、比利時(4.45%) (2021)。",
                "export_to" => "9.74億美元(2021)",
                "import_from" => "15.22億美元(2021)",
                "foreign_relationship" =>
                    "目前與全球超過160國建交，2020年在美國總統川普行政團隊斡旋下，與阿拉伯聯合大公國、巴林、蘇丹及摩洛哥等國邁向關係正常化。其他與以色列毗鄰之巴勒斯坦、敘利亞、黎巴嫩等仍為敵對國家，約旦西岸及迦薩（哈瑪斯組織）亦憤恨以色列，因此以色列可謂腹背受敵，隨時處於備戰狀態。目前以、阿雙方在東耶路撒冷問題、巴勒斯坦難民返鄉、猶太屯墾區撤離等問題上膠著。",
                "foreign_policy" =>
                    "以色列對外關係政策是：保持與西方國家傳統友好關係，維護與美國的戰略盟友地位；積極發展與獨立國協各國和東歐國家的關係；推動中東和平進程，力圖實現與阿拉伯國家的和解；同時亦拓展與非洲、亞洲各國的關係。",
                "time_range" =>
                    "晚我國六個小時，但在夏季日光節約時間時則晚我國五小時。",
                "resident" => "駐以色列代表處",
                "national_flag" =>
                    "上下兩條藍線，襯托正中央一顆六角藍色大衛之星。",
                "area_name" => "亞西地區",
                "area_name_in_en" => "West Asia",
            ],
            6 => [
                "name" => "伊拉克共和國",
                "name_in_en" => "Republic of Iraq",
                "short_name" => "伊拉克",
                "short_name_in_en" => "Iraq",
                "capital" => "巴格達",
                "capital_in_en" => "Baghdad",
                "national_day" => "1932年10月3日。",
                "join_un_day" => "1945年12月21日。",
                "area_size" => "438,317 平方公里",
                "geographic" => "位於中東，與波斯灣接壤，介於伊朗與科威特之間",
                "religion" =>
                    "穆斯林99％（什葉派 60％-65％，遜尼派32％-37％)，基督徒 0.8％，其他0.2％。",
                "bilaterial_relations" => null,
                "main_bounds" => "伊拉克第納爾（Iraqi dinar, IQD）",
                "exchange_rate" =>
                    "浮動匯率，1USD兌約1450 Iraqi Dinar。(詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。)",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/f1d28260-b188-46b6-b8d0-9e6de3fe084f.GIF",
                "is_diplomatic" => 0,
                "language" => "阿拉伯語",
                "main_media" =>
                    "報紙如 al-Mada, al-Mutamar, al-Sabah, al-Zaman。",
                "population" => "40,462,000。 (2022年)",
                "voltage" => "230 V",
                "time_difference" => "-5:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/c60fbc1c-9012-4e53-8179-36e38ebdb82a.jpg",
                "political_system" => "聯邦議會共和制",
                "history_intro" =>
                    "17至19世紀為土耳其鄂圖曼帝國之屬地，1920 年至1932 年為英國委任統治，1958 年伊拉克王朝被軍方推翻，1963 年與約旦合組「阿拉伯聯合王國」，旋遭阿拉伯社會主義之巴斯黨所推翻，1968 年再生政變，由巴赫爾少將掌權至1979 年讓位於副手海珊總攬大權。海珊執政期間歷經 8 年之兩伊戰爭，復於 1990 年入侵科威特，遭聯合國之經濟制裁，除人道物資、糧食及藥品外一律不准進口，1992 年美國布希總統將北緯 32 度以南劃為禁航區，1996 年柯林頓總統再將之北移 95 公里，至北緯 33 度，伊拉克自此對外交通及物資全部中斷。2001 年國際社會因不願見伊國兒童無辜受累，大量死於營養不足及疾病，紛紛呼籲對伊開禁，始有約旦、敘利亞等國每週數次不等班機通航，觀光停止，本國人亦無法隨意出國。",
                "parliament" => "一院制，共329席",
                "cabinet" => "22位部長，總理為 Mohammed Shia al-SUDANI",
                "judiciary" =>
                    "1. 上級法院：(1)聯邦最高法院（由9名法官組成)，法院管轄權限於憲法議題，以及區域或省份與中央政府間的爭議; (2) 最高法院: 由法院院長、5名副手和至少24名法官組成。2. 下級法院：(1)上訴法院（省級）; (2)初審法庭 ; (3)個人身份、勞工、刑事、少年和宗教法庭。",
                "headman" => "Abdul Latif Rashid（2022年10月15日就任）",
                "fa_minister" => "Fuad Mohammed Hussein（副總理兼外長）。",
                "major_political_parties" => null,
                "financial_incoming" =>
                    "收入560億美元；支出：1,237億美元（2020年）",
                "export_value" => "838.4億美元(2021)",
                "import_value" => "140億美元(2021)",
                "export_item" => "原油99％，食品",
                "import_item" => "食品，藥品，製造業",
                "main_export_countries" =>
                    "中國、印度、韓國、美國、義大利、希臘",
                "main_import_countries" =>
                    "阿拉伯聯合大公國、土耳其、中國、印度、韓國、美國",
                "export_to" => "4億5,500萬美元 (2022年)",
                "import_from" => "10億1,727萬美元(2022年)",
                "foreign_relationship" =>
                    "在與各國關係，特別重視發展與美國關係。",
                "foreign_policy" => "獨立自主外交政策，不干涉他國內政",
                "time_range" => "Arabia Standard Time/較台灣慢5小時",
                "resident" =>
                    "我在伊拉克未設代表處，該國相關事務由駐約旦代表處兼轄。伊拉克安全情勢及社會治安充滿不穩定因素，建議勿前往。國人如遇有緊急情形需要協助，請即主動與駐約旦代表處聯繫。駐約旦代表處：電話：002-962-6-5931530緊急聯絡電話：002-962-79-5552605, 9998418, 5750353",
                "national_flag" =>
                    "為平行紅白黑三色旗，紅色象徵叱吒風雲的勇氣和膽識，白色展現伊拉克人寬闊豁達的胸襟，黑色則是對勝利的歌頌，置中並以綠色字樣書寫「真主至大」。",
                "area_name" => "亞西地區",
                "area_name_in_en" => "West Asia",
            ],
            7 => [
                "name" => "伊朗伊斯蘭共和國",
                "name_in_en" => "Islamic Republic of Iran",
                "short_name" => "伊朗",
                "short_name_in_en" => "Iran",
                "capital" => "德黑蘭",
                "capital_in_en" => "Tehran",
                "national_day" => "4月1日",
                "join_un_day" => "1945年10月24日",
                "area_size" => "1,648,195平方公里",
                "geographic" =>
                    "北接亞美尼亞、亞塞拜然、土庫曼和裏海，西與土耳其及伊拉克接壤，南濱波斯灣和阿曼灣，東與巴基斯坦及阿富汗交界。",
                "religion" =>
                    "伊斯蘭教穆斯林(Muslim)約占99.6%【其中什葉派(Shia)占90-95%，遜尼派(Sunni)占5-10%】, 其他宗教【包括祆教徒(Zoroastrian)，猶太教徒(Jewish)及基督教徒(Christian)】等約占0.3%，其他宗教則占0.1%。",
                "bilaterial_relations" => null,
                "main_bounds" =>
                    "Rial (IRR)，當地人亦使用Toman計價（約10 Rials），建議交易前應先向店家確認標價單位。",
                "exchange_rate" =>
                    "1 USD兌換約42,423Rials (2022/10)，請注意伊朗實際匯兌價格受經濟制裁影響官方通貨嚴重貶值，將與牌價有所不同。（詳細匯率資訊建議至臺灣銀行(https://rate.bot.com.tw/xrt)或兆豐商銀網站(https://www.megabank.com.tw/personal/foreign-service/forex 查詢）",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/04418f35-98c7-4971-af03-d16cb9d90644.GIF",
                "is_diplomatic" => 0,
                "language" =>
                    "波斯語，其他常用語言包括庫德語（Kurdish）及亞美尼亞語（Armenian）等。",
                "main_media" =>
                    "Tehran Times, Iran Daily, Abrar, Hamshahri Iran",
                "population" => "8,675萬人(2022年)",
                "voltage" => "220v",
                "time_difference" => "-4:30",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/0e746cbc-bd02-4479-ba0b-3cab54082aaa.jpg",
                "political_system" => "伊斯蘭共和國體制",
                "history_intro" =>
                    "伊朗古稱波斯，西元前533年，塞流士(Cyrus the Great)首建波斯第一個帝國(Achaemenid Empire)，版圖橫跨歐、亞、非三洲，盛極一時；西元3世紀至7世紀薩珊王朝後，先後為阿拉伯人、蒙古人及土耳其人所統治。16世紀初薩法威王朝(Safavi Dynasty)以伊斯蘭教什葉派為國教。1925年巴勒維王朝(Pahlavi Dynasty)成立，1935年改國名為伊朗。1979年2月什葉派領袖何梅尼(Ruhollah Khomeini)進行伊斯蘭革命，建立全球第一個伊斯蘭教共和國政權，並成為最高宗教領袖(Supreme Leader)。",
                "parliament" =>
                    "一院制，國會總席次為290席，議員任期4年，現任議長Mohammad Baqer Qalibaf。",
                "cabinet" =>
                    "總統掌管內閣工作，內閣成員包括1位第一副總統、1位秘書長、10位兼任專業事務副總統及19名內閣部會首長，閣員由總統任命送交國會通過。",
                "judiciary" =>
                    "現行伊朗司法機關分為公共法院(Public Court)審理一般刑、民事案件；另一則為革命法院(Revolutionary Court)審理毒品走私、危害伊朗國家安全之特殊案件，革命法院所做判決均為終審判決，不得上訴。最高宗教領袖可任命最高法院院長、檢察總長等職。伊朗最高司法委員會由最高法院首席大法官、檢察總長以及3名推選出之宗教法學家等5人組成，具有審理刑、民事案件、法案起草，推薦司法部長人選及監督法官任命等權力。",
                "headman" =>
                    "總統：Ebrahim Raisi於2021年6月18日伊朗總統選舉中勝選，該年8月3日就任迄今。伊朗最高宗教領袖：哈米尼Ali Khamenei。",
                "fa_minister" => "Hossein Amir-Abdollahian",
                "major_political_parties" =>
                    "Combatant Clergy Association (神職人員戰鬥協會], Society of Seminary Teachers of Qom (Qom 神學院神學士會社], Islamic Coalition Party (伊斯蘭聯合黨], Society of Devotees of the Islamic Revolution (伊斯蘭革命奉獻者協會], Front of Islamic Revolution Stability	(伊斯蘭革命陣線], YEKTA Front  (Transformation of Islamic Iran)",
                "financial_incoming" =>
                    "歲入421億4,000萬美元，歲出671億5,600萬美元 (2020年)",
                "export_value" => "716億4,600萬美元（2021年）",
                "import_value" => "388億9,000萬美元（2021年）",
                "export_item" => "聚合物、原油、堅果、工業酒精、鐵半成品。",
                "import_item" => "廣播設備、玉米、米、汽車及零配件、黃豆。",
                "main_export_countries" =>
                    "中國、土耳其、巴基斯坦、阿拉伯聯合大公國、德國。",
                "main_import_countries" =>
                    "中國、阿拉伯聯合大公國、印度、土耳其、德國。",
                "export_to" => "7,680萬美元(2022年)",
                "import_from" => "5,140萬美元(2022年)",
                "foreign_relationship" =>
                    "伊朗對外關係因核武議題長期受國際經濟制裁，2015年美國、法國、德國、中國、英國、歐盟及伊朗共同簽署「聯合全面行動計畫」(又稱伊朗核問題全面協定，Joint Comprehensive Plan of Action，簡稱JCPOA )，伊朗得以重回國際金融體系並發展經濟，惟美國川普政府2018年片面退出JCPOA並持續對伊朗經濟制裁，目前美伊關係仍然緊繃。沙烏地阿拉伯處死什葉派教士Nimr Al Nimr等人，引發伊朗民眾攻擊沙國駐阿使領館，2016年1月3日沙國宣布與伊朗斷交，1月4日巴林、蘇丹跟進，阿拉伯聯合大公國宣布降低與伊朗外交關係至代辦層級。阿聯於2022年8月恢復派遣大使駐節伊京德黑蘭，2023年3月10日中國、伊朗、沙烏地阿拉伯於北京發布聯合聲明，沙、伊同意恢復外交關係。2022年9月中國大陸主導之「上海合作組織」(Shanghai Cooperation Organization，簡稱 SCO)簽署同意伊朗加入之備忘錄。伊朗與俄羅斯、中國大陸、土耳其、巴基斯坦、巴西、委內瑞拉等國家維持良好互動關係。",
                "foreign_policy" =>
                    "伊朗對外政策立場對所有國家維持平等互惠（除以色列以外），對於中東區域周邊國家加強往來，參與伊斯蘭合作組織(Organisation of Islamic Cooperation，簡稱OIC)、不結盟運動 (Non-Aligned Movement，簡稱NAM) 及「上海合作組織」(Shanghai Cooperation Organization，簡稱 SCO)國家峰會。",
                "time_range" => "德黑蘭：較台灣慢4.5小時(UCT+3:30)",
                "resident" =>
                    "我國在伊朗未設館處，該國由我駐杜拜臺北商務辦事處兼轄，外貿協會在德黑蘭設有德黑蘭台灣貿易中心。",
                "national_flag" =>
                    "伊朗國旗於1980年7月29日起正式使用，由綠色象徵伊斯蘭、白色代表和平、紅色代表勇氣之三種顏色橫幅組成，白色橫幅中間印有紅色伊朗國徽，在綠色橫幅下底及紅色橫幅上緣，飾以庫法體書法「真主至高無上」字樣各11次，總共22次，以紀念伊朗伊斯蘭革命之日（1979年2月11日，該日換算至伊朗曆即為11月22日）。",
                "area_name" => "亞西地區",
                "area_name_in_en" => "West Asia",
            ],
            8 => [
                "name" => "俄羅斯聯邦",
                "name_in_en" => "Russian Federation",
                "short_name" => "俄羅斯",
                "short_name_in_en" => "Russia",
                "capital" => "莫斯科",
                "capital_in_en" => "Moscow",
                "national_day" => "6月12日",
                "join_un_day" => "1945年10月24日",
                "area_size" => "17,075,200 平方公里",
                "geographic" =>
                    "領土橫跨歐亞大陸，東西最長達9,000公里，南北最寬達4,000公里，位於歐洲東部及亞洲北部，南部是高加索北坡，西北部是希比內山，烏拉山以東之亞洲部分是西伯利亞平原，東南緣是阿爾泰山脈。共與14國接壤，國界共計20,017公里：亞塞拜然284公里、白俄羅斯959公里、中國3,645公里、愛沙尼亞294公里、芬蘭1,340公里、喬治亞723公里、哈薩克6,846公里、北韓19公里、拉脫維亞217公里、立陶宛227公里、蒙古3,485公里、挪威196公里、波蘭206公里、烏克蘭1,576公里。",
                "religion" => "東正教",
                "bilaterial_relations" => null,
                "main_bounds" => "盧布",
                "exchange_rate" =>
                    "1美元約兌換74盧布（RUB）（2023年3月）「詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢」",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/30d5ccd0-cb82-4915-abc5-b5c8b557e92b.GIF",
                "is_diplomatic" => 0,
                "language" => "俄語",
                "main_media" =>
                    "主要電視台：第一頻道、俄羅斯電視台(RTR)、獨立電視台(NTV)、TV-Center電視台。主要廣播電台：燈塔廣播電台、莫斯科回聲廣播電台、自由廣播電台、俄羅斯之聲(對海外廣播)。主要報紙：莫斯科共青團報、消息報、勞動報、俄羅斯日報、莫斯科晚報、商人報、 The Moscow Times(英文)。主要雜誌：新時代週刊、總結週刊、專家週刊、權力週刊；今日亞非月刊、世界經濟與國際關係月刊、遠東問題雙月刊。主要通訊社：「伊塔-塔斯社」(ITAR-TASS)、「國際文傳社」(Interfax)、「俄羅斯新聞社」(RIA-Novosti)。",
                "population" => "約1.42億人（2022年）",
                "voltage" => "220 伏特",
                "time_difference" => "-5:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/753c1940-51f1-4c3f-a0c4-23579b4c2160.JPG",
                "political_system" =>
                    "俄羅斯政體為三權分立之民主憲政體制之聯邦共和國。國家政權由總統、聯邦議會（即國會）、聯邦政府、聯邦各法院以及各級地方政府行政、立法、司法等部門所組成。",
                "history_intro" =>
                    "1、基輔羅斯時代(The Kievan Period： 859—1240年) ：西元862年奧列格(Oleg)大公在基輔 (Kiev)建立大公國，定希臘正教為國教，後以莫斯科(Moscow)為中心，建立莫斯科公國。2、韃靼統治時代(The Appanage Period： 1241—1480年) ：西元1241年，蒙古人入侵並統治俄羅斯達240年之久。3、 帝俄時代(The Imperial Period： 1481—1917年) ：(1) 西元1481年，莫斯科大公伊凡三世推翻蒙古統治，建立沙皇帝國。(2) 西元1613年，羅曼諾夫受擁立為沙皇，建立羅曼諾夫王朝，統治俄羅斯達三個世紀。期間俄羅斯帝國向東、向西擴張版圖，成為歐洲強國。4、蘇聯時期(The Soviet Period： 1917—1991年) ：(1) 西元1917年，列寧領導之布爾什維克共產黨人發動「十月革命」奪取政權，建立俄羅斯社會主義蘇維埃聯邦共和國（即今俄羅斯聯邦之前身）。(2) 西元1922年，俄羅斯社會主義蘇維埃聯邦共和國聯合其他11個共和國建立蘇維埃社會主義共和國聯盟(USSR)，簡稱蘇聯(Soviet Union)；二次戰後併吞波羅的海三國，蘇聯成員國為15個加盟共和國。5、俄羅斯聯邦(1991—)：西元1991年蘇聯瓦解，俄羅斯聯邦繼承其國際法人地位。",
                "parliament" =>
                    "國會稱聯邦議會（Federal Assembly），分為上、下兩院，由上院「聯邦會議」(Federation Council)及下院「國家杜馬」（State Duma）組成。上院由聯邦行政主體各指派一名行政代表及一名立法代表組成，共170席，主席為馬特維延科（Valentina Matviyenko）。上院管轄範圍包括批准俄聯邦主體邊界的修改、批准關於宣佈緊急狀態的總統令、決定俄聯邦武裝力量境外派兵問題、決定俄聯邦總統選舉、彈劾總統、任命俄聯邦憲法法院、最高法院、最高仲裁法院院長及任免俄聯邦總檢察長等。國家杜馬則有450席議員，國會選舉採政黨比例、單一選區各半制度，各225席。由得票超過5%之政黨依所獲選票比例分配產生，任期5年，行使對總統提出的政府總理人選投票表決贊成或反對、決定是否對政府信任的問題、任免中央銀行行長、依照許可權通過聯邦法律和命令。第八屆國家杜馬議會選舉於2021年9月17日至19日舉行，有8 個政黨進入國會，依席次多寡分別為統一俄羅斯黨(324席)、俄羅斯共產黨(57 席)、正義俄羅斯黨(27席)、自由民主黨(21席)、新人民黨(13席)、「祖國黨」(1席)、「成長黨」(1席)、「公民綱領黨」(1席)，另有5位 (席) 自行參選之當選人。議長為前克里姆林宮副幕僚長瓦洛金Vyacheslav Volodin。",
                "cabinet" =>
                    "內閣總理(聯邦政府主席)由總統提名獲國家杜馬同意後任命，獲任命後向總統提出內閣副總理(聯邦政府副主席)及部會首長建議名單，現任總理：米舒斯丁(Mikhail Mishustin)。",
                "judiciary" =>
                    "最高司法委員會，由12名法官、律師及法學專家學者組成。",
                "headman" => "普丁(Vladimir Putin)",
                "fa_minister" => "拉夫羅夫(Sergey Lavrov)",
                "major_political_parties" =>
                    "統一俄羅斯黨（United Russia, EP）為第一大黨，黨主席為現任國家安全會議副主席梅德韋傑夫(Dmitry Medvedev)，其次依國會下院議員席次多寡排列有共產黨（Communist Party of Russian Federation, CPRF）、正義俄羅斯黨（A Just Russia Party）、自由民主黨（Liberal Democratic Party of Russia, LDPR）及新人民黨(New People)。",
                "financial_incoming" =>
                    "國內生產毛額(GDP):1.65兆美元(2021年)；平均每人國民所得：11,273美元(2021年)",
                "export_value" => "約4,923億美元(2021年)",
                "import_value" => "約2,935億美元(2021年)",
                "export_item" =>
                    "原油、石油產品、天然氣、木材、木製品、金屬、化學製品、軍民工業產品",
                "import_item" =>
                    "機械設備、消費品、醫藥、肉類、糖類、金屬半成品",
                "main_export_countries" =>
                    "中國、 荷蘭、德國、土耳其、白俄羅斯、南韓、義大利、哈薩克、美國、英國",
                "main_import_countries" =>
                    "中國、德國、美國、白俄羅斯、義大利、日本、法國、南韓、哈薩克、波蘭",
                "export_to" => "8.55億美元(2022年)",
                "import_from" => "48.74億美元(2022年)",
                "foreign_relationship" =>
                    "1. 加強與獨立國協之多邊及雙邊合作，與所有獨立國協會員國發展睦鄰及戰略夥伴關係。2. 建立與全歐民主體系國家穩定之安全合作關係，其中與歐盟之關係尤佔關鍵地位(俄羅斯於1994年6月24日與歐盟簽署「伙伴與合作協定」；1997年5月27日與北約簽署「相互關係、合作與安全基本法」)；但2022年2月24日俄國對烏克蘭展開「特別軍事行動」以來，以及2022年9月30日俄國將俄與歐盟關係已停滯甚至倒退。3. 俄羅斯與美國之互動為改善國際情勢及保障全球戰略穩定之必要條件，其中最重要者為裁軍、監督大規模毁滅性武器之擴散、協調區域衝突，反對美國部署飛彈防禦系統。4. 俄羅斯與亞洲國家關係之重點在於積極參與APEC、ASEAN及上海合作組織(SCO)之活動，優先與中國及印度強化關係(俄中新時代全面戰略協作夥伴關係及俄印特別及特權的戰略夥伴關係)。與日本發展長期睦鄰合作符合兩國利益，但日本加入制裁俄國對烏克蘭展開「特別軍事行動」以來，俄日關係已趨冷淡。5. 俄羅斯致力追求中東局勢之穩定，此亦包括波斯灣及北非地區在內。俄羅斯亦擴大與非洲國家及中南美洲國家之互動。6. 俄官方發表之「2020年俄羅斯能源戰略」指出，中亞地區獨立國協國家是俄國際能源合作重點方向，加上伊斯蘭國(IS)等宗教極端勢力直逼俄羅斯南部，維持在中亞地區影響力也攸關俄國家安全問題。7. 2022年2月24日俄國對烏克蘭展開特別軍事行動後，俄國與美國及歐洲國家關係緊繃，美國為首之西方陣營國家對俄國展開前所未有之嚴厲制裁，以西方國家為主的28國驅逐俄國外交官，俄國也對等回應。俄國並於2022年3月7日宣布48國為對俄不友好國家(美國、加拿大、歐盟成員國、英國暨其部分海外領地、紐西蘭、瑞士、日本、韓國、台灣、澳洲、新加坡，烏克蘭、阿爾巴尼亞、安道爾、冰島、列支敦斯登、密克羅尼西亞聯邦、摩納哥、挪威、聖馬利諾、北馬其頓、黑山)。",
                "foreign_policy" =>
                    '1.	優先在周遭構建安全及穩定之環境，爰積極加強與獨立國協(CIS)之合作關係，尤其在拓展多邊貿易及安全領域。2010年俄羅斯與白俄羅斯及哈薩克簽署「關稅同盟」，冀以此擴展全面性合作，2011年該三國總統簽署協議成立「歐亞聯盟」，組織一個超國家聯盟。2014年5月29日該三國簽約正式成立「歐亞經濟聯盟」(Eurasian Economic Union,簡稱EAEU)，俄國積極推動該聯盟與中國「一帶一路」倡議對接。2.	俄羅斯在伊朗發展核武、敘利亞內亂、美歐軍事基地等諸多國際重要議題上採行與西方不同調之強勢政策，其中北約(NATO)東擴政策更令俄羅斯嚴重關切其國土安全受威脅，加以2021年11月美國及北約在黑海舉行大規模軍演，俄國因此於2021年12月分別向美國及北約提出安全保障協議草案，俄方主要訴求有三點：北約不擴張、不在俄國邊境附近布署攻擊性武器、將北約在歐洲的軍事設施恢復至1997年「俄－北約基本協定」時之位置，此乃俄國主張之俄國與歐洲之安全不可分割原則，但美國及北約均未允諾，此成為2022年2月24日俄國對烏克蘭展開特別軍事行動導火線之一。3.	俄羅斯與美國互動影響國際情勢及裁軍、監督大規模毀滅性武器擴散及協調區域衝突等全球戰略發展。2014年烏克蘭危機及2022年2月24日俄國對烏克蘭展開「特別軍事行動」至今，致俄與美歐西方陣營國家關係驟降。2022年9月30日俄國宣布將頓涅茨克人民共和國(Donetsk People\'s Republic、盧甘斯克人民共和國(Lugansk People\'s Republic)、紮波羅熱(Zaporizhzhia)州和赫爾松(Kherson)州併入俄羅斯聯邦版圖後，俄國與烏克蘭及其西方歐盟友之緊張關係再次升級，俄烏之戰恐引發核打擊也令人擔憂。4.	在當前俄國受美歐制裁之情況下，俄國強調建立多極世界秩序體系，遵循聯合國為核心的國際體系及國際法為基礎的國際秩序，以解決國際及區域問題，俄國繼續運用其主導或扮演重要角色的多邊機制例如上合組織(SCO)、金磚國家(BRICS)、歐亞經濟聯盟(EAEC)、集體安全條約組織(CSTO)及獨立國家國協(CIS) 與西方競逐，並拉攏亞洲、非洲及拉丁美洲未加入對俄制裁行列之國家。',
                "time_range" => "較台灣時間慢5小時",
                "resident" =>
                    "台北莫斯科經濟文化協調委員會駐莫斯科代表處(Representative Office in Moscow for The Taipei-Moscow Economic and Cultural Coordination Commission)",
                "national_flag" => "國旗為白藍紅三色旗",
                "area_name" => "亞西地區",
                "area_name_in_en" => "West Asia",
            ],
            9 => [
                "name" => "保加利亞共和國",
                "name_in_en" => "Republic of Bulgaria",
                "short_name" => "保加利亞",
                "short_name_in_en" => "Bulgaria",
                "capital" => "索菲亞",
                "capital_in_en" => "Sofia",
                "national_day" => "3月3日",
                "join_un_day" => "1955年12月14日",
                "area_size" => "110,370平方公里",
                "geographic" =>
                    "保加利亞位於東南歐之巴爾幹半島。北面羅馬尼亞(Romania)，東濱黑海(Black Sea)，西與塞爾維亞(Serbia)及馬其頓(Macedonia)為鄰，南與希臘(Greece)及土耳其(Turkey)接壤。",
                "religion" =>
                    "東正教(59.4%)、回教(7.8%)、其他(含天主教、猶太教等及無宗教信仰者)",
                "bilaterial_relations" => null,
                "main_bounds" => "列弗Lev(BGN)",
                "exchange_rate" => "1美元折合1.764保加利亞幣(2022年3月)",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/37df87a0-6e0e-49f4-8582-581ea84aa58b.GIF",
                "is_diplomatic" => 0,
                "language" => "保加利亞語、土耳其語",
                "main_media" =>
                    "24 Chasa(全日報)、Dneven Trud (勞工報)、Duma(喉舌報)、Monitor(監督報)、Standart (標準報)、Sofia Global (索菲亞環球電子報)、Fakti (f法克帝電子報)、Bulgarian National Television (BNT)、Bulgarian National Radio (BNR)、and Bulgarian News Agency(BTA)、",
                "population" => "652萬人 (2021年9月)",
                "voltage" => "220V 歐陸規格雙圓插頭",
                "time_difference" => "-6:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/50d9845d-7ed6-4b5e-bf94-cc4a02066fb9.jpg",
                "political_system" => "民主共和國(內閣制)",
                "history_intro" =>
                    "保加利亞之名稱源起於土耳其人之一支遊牧民族，保加人(BULGARS) 原居住在裏海(CASPIAN SEA)北方之大草原，西元七世紀末沿黑海(BLACK SEA)岸西遷至多瑙河口一帶並征服較早移民至該地之斯拉夫民族，惟由於人口比例懸殊，保加人逐漸為斯拉夫人所同化而失去原有之語言及特徵，僅殘留保加利亞之名。古保加利亞王國建國初期為巴爾幹半島強權之一，迄十一世紀淪為拜占廷帝國統治，十三世紀中期蒙古西征保加利亞備受蹂躪，1396年以後淪為土耳其奧圖曼帝國之領域長達五百年之久，1878年俄土戰爭結束後，在俄國及羅馬尼亞協助下保加利亞建立了一個公國(Principality)，並於1885年與羅馬尼亞南部領域聯合成立王國，版圖與目前之保加利亞相當(第三保加利亞王國)。但保加利亞在20世紀的兩次世界大戰之中，均先後參與戰敗國一方。1989年11月間，保加利亞開始民主化改革，1991年7月12日制憲、實施多黨制政黨政治，成為議會民主國家。",
                "parliament" =>
                    "採一院制，2021年11月國會選舉中，「持續改變黨（Continue the Change, PP）」獲67席、「保加利亞公民歐洲發展黨（Citizens for European Development of Bulgaria, GERB）」59席、「權利與自由運動黨（Movement for Rights and Freedoms, MRF）」33席、社會主義者黨（BSP）27席、There Is Such a People黨25席、「民主保加利亞聯盟（DB）」16席以及「復興黨（Vazrazhdane）」13席。",
                "cabinet" =>
                    "內閣係由部長委員會(Council of Ministers)組成，係國家最高行政機關，由主席(即總理)1名、副主席及各部部長組成。總理鮑里索夫(Boyko Borissov)(2017年5月就任)，新內閣正籌組中。總理佩特科夫(Kiril Petkov)(2021年12月13日就任)。",
                "judiciary" =>
                    "司法機構分為地方法院、上訴法院及最高法院，另設有憲法法院。司法獨立，法官具有超然地位，其任免等事項由最高司法委員會掌理。",
                "headman" =>
                    "總統拉德夫(Roumen Radev) (2016年11月當選，2017年1月22日就任，2021年11月當選連任，2022年1月19日宣誓就任)",
                "fa_minister" =>
                    "根秋夫絲柯娃(Teodora Genchovska) (2021年12月13日就任)",
                "major_political_parties" =>
                    "「持續改革黨」(Keep Change) 、「保加利亞歐洲發展公民黨」(GERB)、「保加利亞社會主義者黨」(BSP)、「There is Such a People黨」（TISP）、「權利與自由運動黨」（DPS）、「民主保加利亞聯盟」（DB）、「保加利亞奮起黨」（ISMV）、「愛國者聯合會」（United Patriots）、「意志黨」（Volya）、復興黨（Vazrazhdane）。",
                "financial_incoming" =>
                    "歲入572億保加利亞幣，歲出631億保加利亞幣（2022年）",
                "export_value" => "347.5億歐元（2021)",
                "import_value" => "397.8億歐元（2021）",
                "export_item" =>
                    "原油以外之石油及礦油、精煉銅及銅合金、未精煉銅、醫藥製劑、小麥或雜麥、電力、絕緣電線電纜、葵花子、電路開關及斷路器之零件及配件、其他鋼鐵管（如︰焊接、鉚接或類似接合者）",
                "import_item" =>
                    "石油及提自瀝青質礦物之油類、銅礦石及其精砂、醫藥製劑、小客車及其他主要設計供載客之機動車輛、原油以外之石油及提自瀝青質礦物之油類、天然氣、有線電話或電報器具、生質柴油及其混合物、曳引車、絕緣電線電纜及其他絕緣電碳電極等",
                "main_export_countries" =>
                    "德國、羅馬尼亞、義大利、土耳其、希臘、法國、比利時、中國大陸、西班牙、荷蘭、波蘭、英國",
                "main_import_countries" =>
                    "德國、俄羅斯聯邦、義大利、羅馬尼亞、土耳其、希臘、中國大陸、西班牙、荷蘭、匈牙利、波蘭",
                "export_to" => "1億8077萬美元 (2021)",
                "import_from" => "4442萬美元 (2021)",
                "foreign_relationship" =>
                    "保加利亞分別於2004年及2007年加入北約組織及歐盟，另於2006年4月與美國簽署設立二處美軍軍事基地之協定；惟同時視俄羅斯為長期盟友，除因俄國在歷史上曾協助保國脫離奧圖曼帝國長達500餘年之統治，亦因所需之油、氣幾全賴俄國供應。故保國政府傳統外交政策，揭明與美國、俄羅斯同時發展政、經、文化關係，並明確指出將強化與中東、亞、非、 拉丁美洲傳統夥伴(traditional partners)關係，另保加利亞亦注重睦鄰，與巴爾幹半島鄰國希臘、羅馬尼亞及土耳其關係皆友善。惟與北馬其頓因北馬境內保加利亞族裔問題，時有齟齬。",
                "foreign_policy" =>
                    "保國已於2004年四月正式成為北約組織會員國。歐盟執委會2002年10月通過候選國國家加盟報告，2005年4月13日歐洲議會通過保加利亞入盟案，同年4月25日保國與歐盟25會員國簽署入盟條約，保國已於2007年1月正式成為歐盟會員國。",
                "time_range" =>
                    "較台灣慢6小時(4月至10月日光節約時間較台灣慢5小時)",
                "resident" => "無（由駐希臘代表處兼轄）",
                "national_flag" => null,
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            10 => [
                "name" => "克羅埃西亞共和國",
                "name_in_en" => "Republic of Croatia",
                "short_name" => "克羅埃西亞",
                "short_name_in_en" => "Croatia",
                "capital" => "札格雷布（Zagreb）",
                "capital_in_en" => "Zagreb",
                "national_day" => "6月 25日",
                "join_un_day" => "1992年5月22日",
                "area_size" =>
                    "面積： 56,594平方公里。其中陸地為56,414平方公里，海岸線為6,278公里，有1,244個島嶼。",
                "geographic" =>
                    "克羅埃西亞位處東南歐，巴爾幹半島西北部，地理位置接鄰中歐與南歐，國土狹長曲折，海岸線曲折，國境西鄰亞得里亞海，與義大利隔海相望，東北部屬多瑙河中游平原，最南端之杜布羅夫尼克市(Dubrovnik)區域被鄰國波士尼亞-赫塞哥維納之出海口與克國本土隔開。北與斯洛維尼亞、匈牙利為鄰，東鄰波士尼亞-赫塞哥維納及賽爾維亞。",
                "religion" => "86.3%天主教，4.4%東正教。",
                "bilaterial_relations" => null,
                "main_bounds" => "2023年1月加入歐元區",
                "exchange_rate" => "歐元兌美金約1:0856(2023年4月)。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/91cda7f0-2d12-46a2-9f0b-e42260e01f45.GIF",
                "is_diplomatic" => 0,
                "language" =>
                    "主要為克羅埃西亞語95.6%，塞爾維亞語1.2%，其他3％，部分民眾通曉英語、 德語或義語。",
                "main_media" =>
                    "重要全國性日報如《晨報》；地方性日報如《自由達爾馬提亞報》等。最重要電視台為國家電視台（HTV），最重要廣播電台為國家廣播電台。國家通訊社為克羅埃西亞通訊社（HINA）。",
                "population" => "420.8萬人 (2022年預估值)",
                "voltage" => "230V，50 Hz雙腳圓形插頭。",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/4ff74bd6-4996-46df-bbea-f08d1bb09349.jpg",
                "political_system" => "議會民主制",
                "history_intro" =>
                    "公元前168年羅馬帝國征服克羅埃西亞，羅馬帝國衰弱後此地區相繼由匈牙利人，以及拜占庭帝國征服。斯拉夫人於7世紀時進入此區，1102年至1527年克羅地區成為匈牙利之一部分，1526年鄂圖曼土耳其帝國北上歐洲，擊敗匈牙利，匈牙利大部分地區由鄂圖曼土耳其帝國兼併。1699年克羅埃西亞成為奧地利一部份，1779 年成為匈牙利行政區一部份，19世紀時，克羅埃西亞已全部由奧匈帝國所統治。一次世界大戰後，奧匈帝國因戰敗而解散，1918年12月1日塞爾維亞與克羅埃西亞及斯洛維尼亞共組塞爾维亞人－克羅埃西亞人－斯洛維尼亞人王國，於1929年改稱為南斯拉夫王國。第二次世界大戰期間，南斯拉夫被納粹德國佔領，戰後成立南斯拉夫聯邦人民共和國，並淪入共產黨統治，1963年改稱南斯拉夫社會主義聯邦共和國，克羅埃西亞成為聯邦之一個共和國。1980年代後期克羅埃西亞與塞爾維亞種族衝突日益升高，1990年5月30日軍事強人涂德曼(Franjo Tudman)掌權後，積極推動獨立運動，1991年6月25日克國國會通過決議，宣布脫離南斯拉夫社會主義聯邦共和國而獨立，因而爆發主要與塞爾維亞進行之「獨立戰爭」，1992年5月22日，克羅埃西亞加入聯合國。1995年8月在獲得軍事上之重大勝利並在聯合國、北大西洋公約組織及歐盟之積極調停下而結束戰爭。但在涂德曼掌權期間，克國經濟衰退，外交孤立，迄1999年12月強人去世，次年2月改選梅西奇出任總統並從事民主改革，情勢始轉變。2013年7月1日克國加入歐盟，已於2023年1月1日加入申根區並採行歐元。",
                "parliament" =>
                    "議員透過直選產生，任期4年。最近於2020年7月5日舉行大選，各黨均未過半，民主聯盟（HDZ）、「人民黨」（HNS）及少數族裔政黨聯合組閣。主要政黨有民主聯盟(HDZ)、社會民主黨(SDP)、「橋黨」（MOST）、人民黨（HNS）、依斯特利亞民主聯盟(IDS)、退休者聯盟(HSU)等。目前國會議長為民主聯盟黨籍之Gordan Jandrokovic。",
                "cabinet" => "總理為Andrej PLENKOVIC (自 19 October 2016上任)",
                "judiciary" =>
                    "分為最高法院、高等法院及地方法院三級;另有憲法法院及行政法院分別主管解釋憲法與行政訴訟。最高法院及憲法法院法官任期均為8年，由國會選出之司法諮詢會任命。",
                "headman" => "現任總統Zoran MILANOVIC，2020年2月18日就職。",
                "fa_minister" => "Gordan Grlić Radman",
                "major_political_parties" =>
                    "主要政黨有民主聯盟(HDZ)、社會民主黨(SDP)、「橋黨」（MOST）、人民黨（HNS）、工人黨(HL)、依斯特利亞民主聯盟(IDS)、退休者聯盟(HSU)等。",
                "financial_incoming" =>
                    "歲入1,996億庫納(265億歐元)，歲出2,121億庫納(282億歐元)（2021）",
                "export_value" => "240歐元 (2022年)",
                "import_value" => "416億歐元 (2022年)",
                "export_item" =>
                    "食品、礦產、電子設備、燃煤及精煉石油、金屬製品（2022）",
                "import_item" =>
                    "礦產、食品、燃煤及精煉石油、化學品、基本金屬（2022）",
                "main_export_countries" =>
                    "義大利、斯洛維尼亞、匈牙利、德國、波士尼亞與赫塞哥維納（2022）",
                "main_import_countries" =>
                    "義大利、德國、斯洛維尼亞、美國、匈牙利（2022）",
                "export_to" => "4,630萬美元(2022年)",
                "import_from" => "1,797萬美元(2022年)",
                "foreign_relationship" =>
                    "與各國關係尚稱良好，且致力改善與鄰國關係，發展國際合作、促進克國經濟發展與樹立起現代化的民主歐洲國家之形象，與鄰國斯洛維尼亞之海上畫界問題於2009年克斯二國簽訂國際仲裁協定以界定爭議領土及領海之邊界。",
                "foreign_policy" =>
                    "克羅埃西亞於1991年獨立後，以加入北大西洋公約組織（NATO）及歐盟（EU）為外交政策主軸。在加入北約部分，北約係2000年同意開始與克國就入約展開談判，迄2008年4月3日在羅馬尼亞首都布加勒斯特（Bucharest）舉行之北約高峰會議中同意邀請克國與阿爾巴尼亞於2009年4月1日同 時正式加入。在加入歐盟方面，克國與2003年正式提出入盟申請，2004年獲候選國家身份，2005年10月正式展開入盟談判，2011年6月30日完 成相關入盟之資格審核及談判，已於2013年7月1日順利加入歐盟。",
                "time_range" =>
                    "夏令時間(每年3月最後一個週日開始)與台灣相差6個小時(慢6小時)，冬令時間(每年10月最後一個週日開始)與台灣相差7個小時(慢7小時)。",
                "resident" => "無(由駐奧地利代表處兼轄)",
                "national_flag" =>
                    "是一面三色旗，由紅、白、藍 三橫條組成，中有國徽。採用於1990年12月21日。",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            11 => [
                "name" => "冰島共和國",
                "name_in_en" => "Republic of Iceland",
                "short_name" => "冰島",
                "short_name_in_en" => "Iceland",
                "capital" => "雷克雅維克",
                "capital_in_en" => "Reykjavík",
                "national_day" => "6月17日",
                "join_un_day" => "1946年11月19日",
                "area_size" => "103,000平方公里",
                "geographic" => "北歐、大西洋中之島國",
                "religion" => "基督教路德教派",
                "bilaterial_relations" => "{{--br /--}}",
                "main_bounds" => "Icelandic Krona, ISK",
                "exchange_rate" =>
                    "1美元兌換139.88冰島克朗、1歐元兌換149.19冰島克朗(2023年3月20日)「詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢」",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/fd35c440-65b8-463c-8281-6ae9f959877b.GIF",
                "is_diplomatic" => 0,
                "language" => "冰島語",
                "main_media" => "Fréttablaðið、Morgunbladid",
                "population" => "36萬人(2021年1月冰島統計局資料)",
                "voltage" => "220伏特",
                "time_difference" => "-8:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/76b77195-2281-47f1-96e3-731b64af65b1.jpg",
                "political_system" =>
                    "民主共和、三權分立、責任內閣制，總統為虛位元首。",
                "history_intro" =>
                    "西元870年由 Arnason 率領部份挪威人到冰島定居為建國開始，1380年併入丹麥王國。1918年冰島成為自治王國，惟仍為丹麥之屬國。第二次大戰爆發，德軍於1940年4月9日佔領丹麥。1944年冰島宣布取消對丹麥之從屬關係，戰後獲丹麥之承認。二次大戰期間冰島因受英、美駐軍保護，未受戰火波及。",
                "parliament" => "Althingi(單一國會，共63席次，任期4年)",
                "cabinet" =>
                    "內閣由總理與數位閣員組成，由總統提名再經國會通過。原則上總統僅具提名權，實際行政權完全由內閣行使，向國會負責。",
                "judiciary" =>
                    "冰島司法系統與丹麥相仿。法院分最高法院及地方法院，法官由司法部長任命，為終身職。",
                "headman" => "Guðni Thorlacius Jóhannesson",
                "fa_minister" =>
                    "Thórdís Kolbrún Reykfjörd Gylfadóttir （獨立黨），2021年12月1日就任",
                "major_political_parties" =>
                    "獨立黨、社會民主聯盟、進步黨、左派綠色運動、光明未來、海盜黨等。",
                "financial_incoming" =>
                    "收入：1兆4758億冰島克朗；支出：1兆7459億冰島克朗  (2022年)",
                "export_value" => "74.47億美元(2022)",
                "import_value" => "91.60億美元(2022)",
                "export_item" => "鋁、鱈魚、其它製造物、飛機、鮭魚",
                "import_item" =>
                    "精煉石油、金屬礦砂及廢金屬、電機設備、車輛、其它運輸設備",
                "main_export_countries" =>
                    "荷蘭、英國、美國、德國、法國 (2022)",
                "main_import_countries" => "挪威、中國、德國、美國、荷蘭(2022)",
                "export_to" =>
                    "其它運輸設備、通訊設備、金屬加工品、辦公設備及電腦、雜項製造品。",
                "import_from" => "毛鱗魚、格陵蘭比目魚、鮭魚、矽鐵、比目魚。",
                "foreign_relationship" =>
                    "歐盟是冰島最大貿易夥伴，冰島1994年加入歐洲經濟區（EEA），2001年成為申根協定成員國。由於擔心歐盟共同漁業、農業政策損害自身利益，以及不認同歐盟之行政方式，迄未加入歐盟。",
                "foreign_policy" =>
                    "冰島國際依存度高，深知須跨出國界與外在世界打交道以追求其國家利益。冰島人民在2008年底金融風暴時，瞭解到全球化時代未加入區域聯盟的脆弱性，加入歐盟的聲浪於是在此時高漲，當時執政的社會民主聯盟黨亦持相同主張。自2011年7月起，冰島開始申請加入歐盟，與歐盟展開談判。但2013年國會改選後組成的新政府對加入歐盟抱持懷疑態度，並於2015年3月致函歐盟輪值主席及執委會，宣告冰島不再是加入歐盟之候選國，且無意再與歐盟重啟談判。然由於政府此舉既未獲國會授權，亦未依選前承諾交由公民複決，此舉引起人民示威抗議，並遭諸多在野陣營國會議員批評。",
                "time_range" => "8 小時",
                "resident" => "與冰島相關業務由駐丹麥代表處兼轄",
                "national_flag" => "暫無",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            12 => [
                "name" => "列支敦斯登侯國",
                "name_in_en" => "Principality of Liechtenstein",
                "short_name" => "列支敦斯登",
                "short_name_in_en" => "Liechtenstein",
                "capital" => "瓦都茲 (Vaduz)",
                "capital_in_en" => "Vaduz",
                "national_day" => "8月15日",
                "join_un_day" => "1990年09月18日",
                "area_size" => "約160.5平方公里",
                "geographic" => "中歐、介於瑞士與奧地利之間",
                "religion" => "天主教",
                "bilaterial_relations" => null,
                "main_bounds" => "瑞士法郎(CHF)",
                "exchange_rate" => null,
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/214a6dbf-0b2c-4f9f-95d6-5af60b06aa26.GIF",
                "is_diplomatic" => 0,
                "language" => "德語",
                "main_media" => "Liechtenstein Volksblatt(列支敦斯登人民報)",
                "population" => "39,423人(2022年)",
                "voltage" => "220伏特(Volt A/C)",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/b238e71e-6375-4cfa-851e-9b45b8668244.jpg",
                "political_system" =>
                    "君主立憲的責任內閣與民主國會制；王位世襲；憲法於1921年10月5日生效。",
                "history_intro" =>
                    "1699年及1712年列支敦斯登侯爵Hans Adam I購入Schellenberg莊園及瓦都茲(Vaduz)郡；神聖羅馬帝國時期於1719年1月23日合併兩地以列支敦斯登侯爵之姓氏建國；1806年以主權國家身分加入萊茵聯盟；1815年維也納會議後加入日耳曼邦聯，1852年與奧匈帝國簽訂關稅條約，自此建立與奧匈帝國密切關係；1866年退出日耳曼邦聯，1919年奧匈帝國崩潰後關稅條約終止；1923年與瑞士簽訂關稅條約，將瑞士法郎作為官方貨幣，兩國成為共同經濟區，在兩次世界大戰中均保持中立。",
                "parliament" =>
                    "一院制(Landtag)，議員25人，民選，採比例代表制，任期4年；本屆國會於2021年2月選出，主要政黨席次: 人民進步黨(Progressive Citizen’s Party)獲10席位、愛國聯盟黨(Patriotic Union)獲10席位、自由陣線(Free List)獲3席位及獨立黨(The Independents)獲2席位。",
                "cabinet" => "內閣由5人組成，經元首任命，向國會負責。",
                "judiciary" => "設有地方法院、高等法院及最高法院。",
                "headman" =>
                    "Hans Adam II von und zu Liechtenstein (1989年登基)，攝政王子：Alois von und zu Liechtenstein (2004年獲任命)，總理：Daniel Risch (2021年3月25日就任)",
                "fa_minister" => "Dominique Hasler (2021年3月25日就任)",
                "major_political_parties" =>
                    "人民進步黨(Progressive Citizen’s Party)、愛國聯盟黨(Patriotic Union)、自由陣線(Free List) 及獨立黨(The Independents)",
                "financial_incoming" =>
                    "2020年財政收支:歲入23億2千8百萬瑞郎。歲出18億8千3百萬瑞郎。",
                "export_value" =>
                    "2021年工業出口總值(不計算與瑞士交易的貨物):35億4千5百萬瑞郎",
                "import_value" =>
                    "2021年工業進口總值(不計算與瑞士交易的貨物): 18億5千9百萬瑞郎",
                "export_item" =>
                    "動力機械、電子機械製品、汽車零件、牙醫儀器與技術、食品、營建等。",
                "import_item" =>
                    "主要進口貨物為: 金屬原料、機器設備及電子儀器、精密工具、鐘錶及珠寶等。",
                "main_export_countries" =>
                    "瑞士、德國、美國、義大利、香港、日本、西班牙等國。",
                "main_import_countries" =>
                    "主要進口國為：德國、奧地利、中國、美國等。",
                "export_to" => "536萬2000美元(2021年)",
                "import_from" => "2133萬3000美元(2021年)",
                "foreign_relationship" =>
                    "列支敦斯登為中立國。自1919年起外交由瑞士代理。1924年與瑞士簽訂關係同盟。為歐洲理事會(Council of Europe, 1978)、歐洲自由貿易協會(European Free Trade Association, 1991)、世界郵政聯盟(Universal Postal Union, 1962)、國際原子能總署(IAEA, 1968)、歐洲安全暨合作組織(OSCE, Organization for Security and Cooperation in Europe, 1975)及若干如WTO等聯合國所屬國際組織之會員；1989年底國會決議申請加入聯合國，1990年9月18日成為聯合國會員國；1992年12月13日舉行公民投票通過加入歐洲經濟區(EEA, European Economic Area)，並於1995年成為會員國。",
                "foreign_policy" => "外交事務委由瑞士代為執行",
                "time_range" =>
                    "夏令時間較台灣慢6小時、冬令時間較台灣慢7小時。2023年日光節約時間自3月26日起，至10月29日止。",
                "resident" => "無（由駐瑞士代表處兼轄）",
                "national_flag" => null,
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            13 => [
                "name" => "利比亞",
                "name_in_en" => "State of Libya",
                "short_name" => "利比亞",
                "short_name_in_en" => "Libya",
                "capital" => "Tripoli(的黎玻里)",
                "capital_in_en" => "Tripoli",
                "national_day" => "10月23日",
                "join_un_day" => "1955年12月24日",
                "area_size" => "1,759,540平方公里",
                "geographic" =>
                    "利比亞地處北非，北瀕地中海，海岸線長1,900多公里，東與埃及，西與阿爾及利亞、突尼西亞為鄰，南接尼日及查德。利國人民大多居住於北部沿海狹長的平原上。",
                "religion" =>
                    "穆斯林（官方，遜尼派）96.6％，基督徒2.7％，佛教0.3％，其他0.4%",
                "bilaterial_relations" => null,
                "main_bounds" =>
                    "利比亞第納爾(LYD)，鈔票: LYD1、LYD5、LYD10、LYD20、LYD50",
                "exchange_rate" =>
                    "浮動匯率，1 USD =約等於4.48LYD(詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。)",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/3fce37d4-fb73-4130-b9d3-b065c07c6021.JPG",
                "is_diplomatic" => 0,
                "language" => "官方語言為阿拉伯語",
                "main_media" =>
                    "新聞機構：Al-Tadamun News Agency； Libyan News Agency； Mathaba News Agency； Tawasul News Agency；Akhbar Libya 24官營報：February Newspaper電視台：Libya Al-Wataniyah TV；Libya Radio and Television (LRT)；Al-Asimah TV；Allibya TV；Libya Alhurra TV；Libya TV",
                "population" => "約725萬人（2023年）",
                "voltage" => "220 V",
                "time_difference" => "-6:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/4afa3a4d-7c4e-4119-b593-d1a0634dfbcd.jpg",
                "political_system" => "過渡政府",
                "history_intro" =>
                    "利比亞自16世紀後兩度為土耳其所占領，1912年遭義大利併吞，第二次大戰期間淪為戰場，戰後為英、法分占，嗣經聯合國決議於1951年12月24日獨立為王國。1969年9月1日格達費率少壯軍人發動政變，推翻國王，改制共和，並採群眾主義路線。1977年3月2日通過民權宣言，創設全國人民大會，同時定國名為「利比亞阿拉伯人民社會主義群眾國」，復於1986年更改國名為「大利比亞阿拉伯人民社會主義群眾國」。2011年2月15日國內爆發嚴重反政府示威，反抗軍於3月5日正式建立利比亞「國家過渡委員會」（National Tranisitional Council, NTC）臨時政權，並宣布包含33名來自利國主要城市和鄉鎮代表組成。2011年中格氏政權垮台，由過渡政府暫時接掌政權，2012年利國正式籌組新國會「全國代表大會」(General National Congress, GNC)。然而自2014年國會大選後，利國境內不同勢力即分別在西部的黎波里（Tripoli）及東部的圖卜魯格（Tobruk）成立國會及政府，2014年迄今聯合國努力促成雙方妥協成立新聯合政府。",
                "parliament" =>
                    "一院制國會，2012年7月7日舉行國會(正式名稱為全國代表大會，General National Congress，GNC)大選，共選出200位國會議員，其中120位依據政黨名單比例代表制所選出，另80位為複數選區制當選人。 2014年6月25日利比亞國會進行改選，選舉結果於同年7月23日揭曉，200席應選席次確認當選者188席，剩餘12席將另改選。而利比亞GNC於2014年8月4日權力移交至利比亞「國民代表大會」( House of Representatives or The Council of Deputies)。2015年12月，利比亞各派在摩洛哥簽署《利比亞政治協議》。根據該協議，國民代表大會成為利比亞最高立法機構，國民代表大會更名為國家最高委員會，成為利比亞最高諮詢和協商機構。",
                "cabinet" => "現任內閣總理為 AbduHamid Dbeibah。",
                "judiciary" =>
                    "設有一審法院(Courts of First Instance)、上訴法院(Courts of Appeals)及最高法院(Supreme Court)。",
                "headman" => "現由Mohammad Younes Menfi擔任總統委員會主席。",
                "fa_minister" => "Najla Mohamed El-Mangoush(2021年3月上任)",
                "major_political_parties" =>
                    "家園黨（Al-Watan Party）、正義與建設黨(Justice and Construction)(穆斯林兄弟會利國分支)、全國武裝聯盟黨(National Forces Alliance)(自由派)、國民陣線（National Front）、家園聯盟（Union for the Homeland）。",
                "financial_incoming" =>
                    "收入：未公布； 支出275億美元（2020年-GNA政府）",
                "export_value" => "1,498億美元（2022年）",
                "import_value" => "170.4億美元 （2021年）",
                "export_item" => "原油，成品油，天然氣，化工品",
                "import_item" => "機械，半成品，食品，運輸設備，消費品等",
                "main_export_countries" =>
                    "義大利、中國大陸、德國、西班牙、美國",
                "main_import_countries" =>
                    "土耳其、中國大陸、義大利、阿拉伯聯合大公國、埃及",
                "export_to" => "1,498萬美元（2022年）",
                "import_from" => "9.36萬美元（2022年）",
                "foreign_relationship" => null,
                "foreign_policy" => null,
                "time_range" => "Eastern European Time /較我國慢6小時",
                "resident" =>
                    "駐利比亞代表處因受當地治安不佳及政情不穩影響，暫未復館，目前利比亞相關事務暫由我駐約旦代表處兼轄。",
                "national_flag" =>
                    "現行的國旗於2011年8月3日啟用，是為紅、黑、綠三色橫旗，黑色帶子中央有新月和五芒星",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            14 => [
                "name" => "剛果共和國",
                "name_in_en" => "Republic of the Congo",
                "short_name" => "剛果",
                "short_name_in_en" => "Congo",
                "capital" => "布拉薩",
                "capital_in_en" => "布拉薩(Brazzaville)",
                "national_day" => "8月15日",
                "join_un_day" => "1960年9月20日",
                "area_size" => "342,000平方公里",
                "geographic" =>
                    "位於非洲中西部赤道區，北接喀麥隆、中非，西與加彭為界，自東至南則與剛果民主共和國及卡賓達（CABINDA，安哥拉屬地）為鄰，西南面幾內亞灣，海岸線長約160公里。",
                "religion" => "天主教、基督教、伊斯蘭教、傳統信仰。",
                "bilaterial_relations" => null,
                "main_bounds" => "中非法郎(XAF)",
                "exchange_rate" =>
                    "1美元約兌換593.08中非法郎（2022年3月）。詳細匯率資訊建議至臺灣銀行（https://rate.bot.com.tw/xrt?Lang=zh-TW）或兆豐商銀（https://www.megabank.com.tw/personal/foreign-service/forex）網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/6820e7b2-b903-4453-b73a-19b8487d2c67.GIF",
                "is_diplomatic" => 0,
                "language" =>
                    "法語(官方語言)、南方流通剛果語、北方流通Lingala語",
                "main_media" =>
                    '報紙：Le Choc, L\'Observateur, L\'Humanitaire, Le Tam Tam, Les Echos du Congo電視：剛果電視台TV Congo 廣播電台：Radio Congo, Radio Brazzaville',
                "population" => "530萬人（2020年）",
                "voltage" => "220V",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/f8a03d7c-4125-42dd-91bf-cfc6f8793562.jpg",
                "political_system" => "共和國、總統制、多黨制",
                "history_intro" =>
                    "非洲撒哈拉沙漠以南之原住民族班圖人於13世紀末至14世紀初建立剛果王國。15世紀末期，歐洲人勢力擴張至非洲大陸，並開始從事奴隸貿易。1880年10月3日，法國人佔領這片土地，剛果進入法國殖民統治時代。1884年帝國主義瓜分非洲的柏林會議將剛果河以東地區劃為比利時殖民地，為今日剛果民主共和國，剛果河以西地區劃歸法國，成為今日剛果共和國。 剛果於1960年脫離法國獨立，國名為剛果共和國。",
                "parliament" =>
                    "兩院制，分為國民議會及參議院。國民議會共151席，由人民直選產生，任期5年。參議院72席，經地區選舉團間接選舉產生，任期6年，每3年以抽籤方式改選二分之一。剛果憲法規定，總統職位空缺期間，由參議會議長代行總統之職。參議院下設法律行政人權、財經、外交合作、防務安全、教育文化與科技、衛生就業與社會6個委員會。",
                "cabinet" =>
                    "設置總理1人，3個國務部長，35個部長，內閣會議由總統召開。",
                "judiciary" =>
                    "設有最高法院及地方法院。另設有大法官委員會，由總統指揮，確保司法獨立。",
                "headman" => "薩蘇─恩格索 (Denis Sassou-Nguesso)",
                "fa_minister" => "Jean-Claude Gakosso",
                "major_political_parties" =>
                    "剛果勞動黨(Parti Congolais du Travail）、泛非社會民主聯盟(Union Panafricaine pour la Démocratie Sociale）、民主暨社會進步同盟(Rassemblement pour la Démocratie et le Progrès Social）等。",
                "financial_incoming" =>
                    "政府歲入為28.07億美元，歲出為30.16億美元，外債為68億美元 (2020年)。",
                "export_value" => "71.83億美元（2019年）",
                "import_value" => "31.09億美元（2019年）",
                "export_item" => "石油、木材、糖、可可、咖啡、鑽石",
                "import_item" =>
                    "機械設備、建築設備、一般化學及金屬材料、運輸工具",
                "main_export_countries" =>
                    "中國、義大利、西班牙、印度、澳洲、美國",
                "main_import_countries" =>
                    "法國、中國、比利時、挪威、安哥拉、美國",
                "export_to" => "373,465美元（2020年）",
                "import_from" => "7,217.071美元（2020年）",
                "foreign_relationship" =>
                    "法國是剛果第一大援助國及第一大投資國，目前在剛果有180家法資企業。剛果現為聯合國、非洲聯盟(AU)、非洲開發銀行(ADB)、世界貿易組織、中非洲經濟與關稅聯盟(Central African Customs and Economic Union)、國際咖啡組織(International Coffee Organization)、不結盟運動(Non-aligned Movement)及77集團的成員。近年來剛果加強與中國、土耳其、俄國、巴西及印度之經貿關係。",
                "foreign_policy" =>
                    "法國是剛果外交推展的重點國家，並積極發展與其他非洲國家之關係。",
                "time_range" => "GMT+1/慢臺灣7小時",
                "resident" =>
                    "我在該國未設處，該國事務由我駐法國台北代表處兼理。",
                "national_flag" =>
                    "左上角為綠色三角形、右下角為紅色三角形，中間為右上至左下之黃色斜線切割。綠色象徵該國豐富的森林資源和對未來的希望，黃色象徵財富，紅色代表獨立、熱情及尊嚴。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            15 => [
                "name" => "剛果民主共和國",
                "name_in_en" => "Democratic Republic of the Congo",
                "short_name" => "民主剛果",
                "short_name_in_en" => "DRC、Democratic Congo",
                "capital" => "金夏沙(Kinshasa)",
                "capital_in_en" => "Kinshasa",
                "national_day" => "6月30日",
                "join_un_day" => "1960年9月20日",
                "area_size" => "2,344,858平⽅公⾥",
                "geographic" =>
                    "位於非洲中部，東鄰坦尚尼亞、盧安達、蒲隆地、烏干達，南連尚比亞、安哥拉，西接剛果共和國（首都布拉薩），北鄰中非共和國及南蘇丹；海岸線僅37公里，為非洲第2大國。北部屬熱帶雨林氣候，南部屬熱帶草原氣候，年降雨量1500毫米左右。",
                "religion" => "天主教、基督新教及傳統宗教",
                "bilaterial_relations" => null,
                "main_bounds" => "剛果法郎 (CDF)",
                "exchange_rate" =>
                    "詳細匯率資訊建議至臺灣銀行 (https://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex) 網站查詢",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/224274b3-6e65-43e5-a2fe-961a26bf7a1b.GIF",
                "is_diplomatic" => 0,
                "language" =>
                    "官方語言為法語，主要語言有林加拉語、基剛果語、契盧巴語和斯瓦希里語",
                "main_media" =>
                    '以廣播為主RFI、BBC報紙則有：Le Potentiel、La Reference、L\'Avenir、Le Soft、L\'Observateur、Le Phare',
                "population" => "1億50萬人 (2021年)",
                "voltage" => "220V",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/d0c200c0-de9f-4cd6-918d-f75c7930f9ef.JPG",
                "political_system" => "共和國、半總統制",
                "history_intro" =>
                    "自13世紀起數百年間，英、法及比利時各國相繼逐鹿其間，至1877年比利時國王雷奧堡二世（Leopold II）在此地設立國際協會，以私人組織經營，遂獲各國於1885年柏林會議中，承認比利時對剛果之主權，1908年比利時將其合併。1960年6月30日剛果脫離比國宣告獨立。1964年8月改國名為剛果民主共和國，1965年國民軍總司令莫布杜（Joseph Mobutu）發動政變推翻政府，自任總統。1971年10月改國名為薩伊共和國，在位達32年。1971年10月改國名為薩伊共和國(The Republic of Zaire)，1990年4月施行多黨制。1997年5月卡比拉(Laurent Kabila)推翻莫布杜政權，並將國名改為剛果民主共和國。",
                "parliament" =>
                    "國民議會(Assemblée Nationale) 共500席，任期5年， 參議院(Sénat) 共108席，任期5年。",
                "cabinet" =>
                    "總理為盧孔德－肯格(Jean-Michel Sama Lukonde Kyenge)",
                "judiciary" => "憲法法院、最高行政法院、各級法院",
                "headman" => "齊塞格蒂(Félix Tshisekedi)",
                "fa_minister" => "盧通杜拉－阿帕拉(Christophe Lutundula Apala)",
                "major_political_parties" =>
                    "民主復興人民黨 (parti du people pour la reconstruction et la démocratie, PPRD)、社會進步民主黨(Union pour la démocratie et le progés social, UDPS)、復興社會運動(Mouvement social pour le renouveau, MSR)、解放剛果運動(Mouvement de libération du Congo, MLC)",
                "financial_incoming" =>
                    "收入44.25億美元，支出69億美元，外債59.16億美元 (2020年)",
                "export_value" => "141億美元（2020年）",
                "import_value" => "66.6億美元（2020年）",
                "export_item" => "鑽石、銅、金、鈷、木材、原油、咖啡",
                "import_item" => "食品、礦業及其他機械、交通設備、燃料",
                "main_export_countries" => "中國、尚比亞、南非、芬蘭",
                "main_import_countries" =>
                    "中國、南非、尚比亞、比利時、印度、坦尚尼亞",
                "export_to" => "8,668,787美元 (2021年)",
                "import_from" => "90,906,784美元 (2021年)",
                "foreign_relationship" =>
                    "剛果重視發展睦鄰友好關係，加強與南非、剛果共和國、安哥拉等非洲國家交往，提升在地區事務之影響力。另剛果與美國、法國、比利時、德國、歐盟及英國之關係密切。",
                "foreign_policy" =>
                    "採取獨立自主之外經政策，反對外國勢力干涉非洲事務，積極參與及推動地區經濟與安全合作。",
                "time_range" => "比臺灣慢6（東部）或7（西部）小時",
                "resident" =>
                    "我在該國未設處，該國事務由我駐法國台北代表處兼理。",
                "national_flag" =>
                    "剛果民主共和國國旗啟用於2006年2月20日，是一面三色旗。與1963至1971年間使用的國旗相似，只是旗底的藍色變淺了，象徵和平。左上角的星星代表了光明的未來。一道黃-紅-黃的帶子從左下角到右上角把旗幟劃開。黃色代表豐富的資源，而紅色代表了為國捐軀者的血。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            16 => [
                "name" => "加彭共和國",
                "name_in_en" => "Gabonese Republic",
                "short_name" => "加彭",
                "short_name_in_en" => "Gabon",
                "capital" => "自由市(Libreville)",
                "capital_in_en" => "Libreville(自由市)",
                "national_day" => "8月 17日",
                "join_un_day" => "1960年9月20日",
                "area_size" => "267,667平方公里",
                "geographic" =>
                    "位處中西部非洲海岸，橫跨赤道，西北與赤道幾內亞毗鄰，北與喀麥隆接壤，東接剛果（布拉薩），南瀕大西洋",
                "religion" =>
                    "天主教(42.3%)、基督教(39.7%)、伊斯蘭教(9.8%)及傳統信仰(0.6%)",
                "bilaterial_relations" => null,
                "main_bounds" => "中非法郎(XAF)",
                "exchange_rate" =>
                    "1美元約兌換593.08中非法郎（2022年3月）。詳細匯率資訊建議至臺灣銀行（https://rate.bot.com.tw/xrt?Lang=zh-TW）或兆豐商銀（https://www.megabank.com.tw/personal/foreign-service/forex）網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/685872a3-e269-4683-9803-cc7a42f19e06.GIF",
                "is_diplomatic" => 0,
                "language" =>
                    "官方語言為法語，常見方言有芳語(Fang)、姆耶內語(Myene)、恩知畢語(Nzebi)及班加畢語(Bandjabi)。",
                "main_media" =>
                    'L\'Union官方日報、Le Temps民營週報、Le Témoin民營週報、Radiodiffusion   Television Gabonaise 加彭國營廣播電視台、TeleAfrica民營電視台',
                "population" => "227萬人（2021年）",
                "voltage" => "220 V",
                "time_difference" => "-6:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/ea139cb2-2ecd-4caf-82b0-4a7b753a47dd.JPG",
                "political_system" => "總統制",
                "history_intro" =>
                    "加彭於1960年8月17日脫離法國獨立。1961年2月加彭民主集團（Bloc Démocratique Gabonais, BDA）領袖孟巴（Léon M’Ba）當選首任總統。1967年3月孟巴任命彭高（Omar Bongo Ondimba）為副總統，同年11月孟巴去世，彭高繼任總統，另外成立加彭民主黨（Parti Démocratique Gabonais, PDG），並實施一黨專政，1975年彭高撤銷副總統職務，改設總理一職。2009年6月8日彭高總統逝世，同年8月30日舉行總統大選，彭高前總統長子阿里彭高(Ali Bongo)以41.73 %得票率當選總統。另2016年8月27日舉行總統大選，阿里彭高獲得50.66%得票率，當選連任。",
                "parliament" =>
                    "1994年3月修改憲法，改一院制為兩院制，其中國民議會由143名議員組成，由人民直選，任期5年，參議院由102名參議員組成，間接選舉產生，任期6年，國民會議在起草法律與監督政府行為上具有更大權力。下屆國民議會選舉為2024年，參議院選舉則為2027年。",
                "cabinet" => "總理由總統指派。",
                "judiciary" =>
                    "設有憲法法院、司法法庭、行政法庭、高等法院及地方法院。",
                "headman" => "阿里.彭高(Ali Bongo Ondimba)",
                "fa_minister" => "帕科姆.布貝亞(Pacôme Moubelet Bonbeya)",
                "major_political_parties" =>
                    "執政黨為加彭民主黨(Parti Démocratique Gabonais, PDG)，在野黨為民主人士黨(Les Démocrates, LD)、保衛加彭聯盟(Rassemblement Pour le Gabon, RPG)、加彭民主發展聯盟(Union Gabonaise pour la Démocratie et le Développement, UGDD)、加彭人民聯盟黨(Union du Peuple Gabonais, UPG)等。",
                "financial_incoming" =>
                    "歲入36.27億美元，歲出33.66億美元，外債71.59億美元(2019年)。",
                "export_value" => "34.15億美元 (2020年)",
                "import_value" => "21.42億美元 (2020年)",
                "export_item" => "原油、木材製品、錳",
                "import_item" => "食品、輕工業產品、機械設備",
                "main_export_countries" =>
                    "中國、美國、愛爾蘭、荷蘭、南韓、澳洲、義大利",
                "main_import_countries" =>
                    "法國、比利時、中國、美國、日本、英國",
                "export_to" => "958,876美元 (2020年)",
                "import_from" => "3,734.558美元 (2020年)",
                "foreign_relationship" =>
                    "加彭與法國關係密切，兩國元首互動頻繁，法商在加彭投資亦多。加彭對外工作重點為法國、美國及其他非洲區域性國際組織。加彭持續加強與其他國家的合作關係，積極參與區域事務。在國際舞台上，加彭重視環境與氣候變遷議題，並支持2015年12月巴黎協定(Accord de Paris)之簽署。",
                "foreign_policy" =>
                    "奉行開放、不結盟、國際合作及睦鄰友好政策。強調外交為國內經濟服務，呼籲非洲團結，推動區域合作。主張通過對話、和解、協商方式解決世界及區域爭端。",
                "time_range" => "較台灣慢7小時",
                "resident" =>
                    "我在該國未設處，該國事務由我駐法國台北代表處兼轄。",
                "national_flag" =>
                    "綠色（頂部），黃色和藍色三個相等的水平帶; 綠色代表國家的森林和自然資源，黃金代表赤道（橫斷加蓬）以及太陽，藍色代表海洋。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            17 => [
                "name" => "加拿大",
                "name_in_en" => "Canada",
                "short_name" => "加拿大",
                "short_name_in_en" => "Canada",
                "capital" => "Ottawa (渥太華)",
                "capital_in_en" => "Ottawa",
                "national_day" => "7月1日",
                "join_un_day" => "1945年11月9日",
                "area_size" => "9,984,670平方公里。",
                "geographic" =>
                    "加國幅員遼闊，東濱大西洋，西臨太平洋，南接美國，北抵極地；其疆界東起紐芬蘭暨拉布拉多省之Cape Spear，西抵育空特區與阿拉斯加州邊界，長約5,514公里；北由Ellesmere島之Cape Columbia，南迄Erie湖之Pelee島，距離約4,634公里，全境總面積約9,984,670平方公里，係西半球最大國，亦為全球第2大國。全加之行政區分為十省(British Columbia, Alberta, Saskatchewan, Manitoba, Ontario, Quebec, New Brunswick, Nova Scotia , Prince Edward Island, Newfoundland and Labrador)及3個特區(Yukon, Northwest, Nunavut)。",
                "religion" => "天主教徒約佔38.7%，基督教徒約佔28.5%",
                "bilaterial_relations" => null,
                "main_bounds" => "加幣",
                "exchange_rate" =>
                    "加國通用貨幣為加元。約為1加幣兌換22.38元新台幣，惟須視匯率浮動情況而定。建議查詢當日台灣銀行（http://rate.bot.com.tw/xrt?Lang=zh-TW）或兆豐商銀匯率(https://www.megabank.com.tw/personal/foreign-service/forex)",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/21a6d8f1-8808-46b9-9321-af99e703149c.GIF",
                "is_diplomatic" => 0,
                "language" =>
                    "官方語文為英文及法文，英語人口約佔56.9%，法語人口約佔21.3%",
                "main_media" =>
                    "全國性報紙：環球郵報、國家郵報。地區性英文報紙：渥太華公民報、多倫多星報、蒙特婁公報及溫哥華太陽報等英文報；地區性法文報紙：蒙特婁新聞報、蒙特婁日報。主要電視網：加拿大國家廣播公司(CBC)、加拿大電視公司(CTV)、全球電視台(Global TV)、及法語電視網TQS、TVA。",
                "population" => "3,843萬人(2021年)",
                "voltage" => "110-120伏特。",
                "time_difference" => "-12:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/6cb2dc1c-173f-4b69-86c1-b46f8f4a8da5.JPG",
                "political_system" =>
                    "加拿大政府體制為責任內閣制，形式上仍奉英王為國家元首。",
                "history_intro" =>
                    "原為印地安人及英紐特人居住地。1867年依據英國北美洲法成為英國自治領；1926年獲得外交獨立權；1931年依據英國西敏寺法令成為大英國協成員國，議會取得平等之立法權。1982年英國放棄依北美洲法之管轄權，加國國會通過權利憲章，憲制乃臻完備。",
                "parliament" =>
                    "加拿大國會分為參議院與眾議院，參議院議員總席位105席，由總理推薦並經總督任命，任期至75歲；眾議院議員由人民選舉，總席位338席。第44屆聯邦選舉於2021年9月20日舉行，選舉結果由自由黨蟬聯國會最大黨。眾議院議員總額每10年依人口普查結果比例調整。總理得視政治情況於任期中建議總督解散眾院並改選。所有法案均須於眾議院及參議院三讀通過後，由總督以王室同意（Royal Assent）完成立法手續 。",
                "cabinet" =>
                    "內閣向人民選出之眾議院負責。第29屆內閣於2021年10月26日宣誓就職，由總理杜魯道（Justin Trudeau）及各部首長共39位組成。",
                "judiciary" =>
                    "加拿大最高法院、聯邦法院、各省法院。主要司法業務均在省內審理，聯邦法院一般受理財政、海事及有關經濟方面的案件。",
                "headman" =>
                    "奉英王查爾斯三世(King Charles III)為國家元首，置總督(Governor General)代表英王。第30屆總督為Mary Simon。",
                "fa_minister" => "趙美蘭 （Mélanie Joly，2021年10月26日任命）",
                "major_political_parties" =>
                    "自由黨、保守黨、魁團黨、新民主黨、綠黨",
                "financial_incoming" =>
                    '財政收入: CAD$ 3,551億 (2021-2022年)財政支出: CAD$5,098億 (2021-2022年)財政逆差: CAD$ 1,574億 (2021-2022年)(以上為加拿大2021財政預算報告)',
                "export_value" => "4,888億美元 (2021年)。",
                "import_value" => "5,033億美元 (2021年)。",
                "export_item" =>
                    "石油、小客車、黃金、汽車、木材、天然氣、煙煤、飛機、鐵礦、藥劑、氯化鉀、芥籽油、小麥等",
                "import_item" =>
                    "汽車、卡車、汽車零件、通信器具、黃金、石油、藥劑、筆記型電腦等",
                "main_export_countries" =>
                    "美國、中國、英國、日本、墨西哥、德國、南韓、荷蘭、法國、比利時、香港、挪威、瑞士、印度、義大利、臺灣(第16位) (2021)",
                "main_import_countries" =>
                    "美國、中國、墨西哥、德國、日本、義大利、南韓、越南、英國、臺灣(第10位) (2021)",
                "export_to" =>
                    "通訊器具（HS8517）、自動資料處理機（HS8471）、積體電路 （HS 8542）、螺帽（HS7318）、機器零件（HS8473）、汽車零件（HS8708）、戶外運動設備（HS9506）、資訊儲存裝置（HS8523）、家具及門窗等五金零配件（HS8302）、自行車（HS8712）",
                "import_from" =>
                    "煤礦 （HS2701）、小客車（HS8703）、鐵礦石砂（HS2601）、鐵杉（HS4407）、鋅（HS7901）、鐵屬廢料（HS7204）、豬肉（HS0203）、黃豆（HS1201）、醫藥製劑 （HS3004）、貴金屬礦石砂（HS2616）",
                "foreign_relationship" =>
                    "自由黨政府上台後主張多邊主義，活躍於聯合國、G7、APEC、UNFCCC、大英國協、法語國協等相關國際組織，小杜魯道政府並將對抗氣候變遷列為政府優先工作，承諾2030年全國碳排放量較2005年水平減少40-45%。",
                "foreign_policy" =>
                    "加國為工業化先進國家，地理位置鄰近亞太地區及拉丁美洲，且為英、法雙語國家，文化具多元性，歷史上亦非殖民強權，利於對外發展關係。自由黨上台後，加國外交政策主張多邊主義，並加強與聯合國及其他多邊國際組織之角色。",
                "time_range" =>
                    "加拿大總共有5.5個時區。最東邊的時區位於紐芬蘭暨拉布拉多省，比格林威治標準時間晚3.5小時。其次依序為大西洋時區、東部時區、中央時區、山岳時區及最西邊的太平洋時區。太平洋時區（如溫哥華）比台灣慢16個小時，東部時區（如渥太華、多倫多、蒙特婁）比台灣慢13個小時。但在3月份第二個星期日起至11月份第一個星期日止之日光節約時間（Daylight Saving Time），以渥太華為例之東部時區與台灣之時差則為12個小時。",
                "resident" =>
                    "駐加拿大台北經濟文化代表處(設於渥太華)、駐溫哥華台北經濟文化辦事處、駐多倫多台北經濟文化辦事處",
                "national_flag" =>
                    "參閱加國文化遺產部(Canadian Heritage)網址：https://www.canada.ca/en/canadian-heritage/services/flag-canada-history.html",
                "area_name" => "北美地區",
                "area_name_in_en" => "North America",
            ],
            18 => [
                "name" => "匈牙利",
                "name_in_en" => "Hungary",
                "short_name" => "匈牙利",
                "short_name_in_en" => "Hungary",
                "capital" => "布達佩斯",
                "capital_in_en" => "Budapest",
                "national_day" => "8月20日",
                "join_un_day" => "1955年12月22日",
                "area_size" => "93,030 km2, 約為臺灣2.6倍大",
                "geographic" =>
                    "匈牙利為歐洲中部內陸國家，北接斯洛伐克，東臨烏克蘭及羅 馬尼亞，南接斯洛維尼亞、克羅埃西亞、塞爾維亞，西鄰奧地利。",
                "religion" =>
                    "羅馬天主教(37.2%)、喀爾文教派(11.6%)、路德教派(2.2%)、希臘天主教(1.8%)、其他(1.9%)、無特定宗教(27.2%)、無宗教信仰(18.2%)",
                "bilaterial_relations" => null,
                "main_bounds" => "當地幣稱為福林(Forint, HUF)",
                "exchange_rate" =>
                    'US$1=390 Forint（2022年12月，本匯率僅供參考，不代表實際交易匯率)「詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。」',
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/8c92d73f-61fa-4f75-9c82-1facb0e4b827.GIF",
                "is_diplomatic" => 0,
                "language" => "馬札爾語（Magyar）（即一般所稱之匈牙利語）",
                "main_media" =>
                    "「匈牙利日報」(Magyar Hírlap)、「匈牙利民族報」(Magyar Nemzet)、「人民之聲」(Népszava)、「全球政經週刊」(HVG)、「168小時」週刊(168 Óra)、「索引」新聞網(Index.hu)、「24」新聞網(24.hu)及「新聞電視台」(Hír TV)。",
                "population" => "970萬(2022)",
                "voltage" => "電壓為220伏特，插座為雙圓型",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/90346859-6fb1-4989-a5f4-cc062c5e3722.jpg",
                "political_system" => "議會民主制",
                "history_intro" =>
                    "馬札爾族源自於中亞烏拉山麓，歷經九世紀末最後一批大移民潮後定居喀爾巴阡（Carpathian）盆地。史蒂芬國王（St. Stephen I）迎娶日耳曼公主，並於1000年經教皇加冕，使匈牙利成為一信奉基督教之王國。1241至1242年蒙古入侵（拔都西征），曾造成極大之損失。15世紀起，匈牙利開始受到鄂圖曼土耳其帝國之威脅。Matthias I Corvinus（1458-90）在位期間國勢尚稱強盛，惟1526年默哈基之役敗北後，匈牙利為鄂圖曼土耳其帝國統治達150年。1687年奧地利哈布斯堡（Habsburg）王朝逐退土耳其勢力，宣布擁有匈牙利，1848年歐陸革命風潮中，民族英雄Lajos Kossuth曾率眾抵抗奧皇鎮壓。1867年在二元帝國之架構下，奧皇兼匈牙利國王，直至1918年第一次世界大戰結束，奧匈帝國崩潰，匈牙利宣布獨立，1920年6月4日列強施壓簽訂特利安農條約（Treaty of Trianon），匈牙利被迫將原有28萬3千平方公里領土之三分之二割讓予南斯拉夫王國、捷克斯洛伐克、羅馬尼亞等國。1918年至1945年歷經左派、復辟派、右派等不同形式政府之統治，匈牙利政局動盪。第二次世界大戰初始，匈國右派政府支持納粹德國，惟1944年遭推翻，納粹德軍隨即進軍佔領匈牙利並扶持親德傀儡政府。二次大戰結束，匈牙利遭蘇聯紅軍佔領，被納入蘇聯勢力範圍，並於1949年8月正式成立匈牙利人民共和國（Hungarian People’s Republic），嗣成為華沙公約組織及經互會成員。1956年10月23日發生著名民主抗暴運動，遭蘇聯派兵鎮壓。1956至1988年間卡達政權施行所謂的柔性獨裁，1960年代末期開始實施「新經濟機制」，企圖進行改革。因社會主義公有制有其先天性之缺陷，歷時20餘載之「卡達主義」終告失敗。1989年在東歐非共化潮流下，正式告別共產主義，同年10月23日更改國號為「匈牙利共和國」（The Republic of Hungary）。2011年4月18日匈國國會通過青民黨(Fidesz)所提之新憲草案，於2012年1月1日正式更改國號為「匈牙利」（Hungary）。",
                "parliament" =>
                    "一院制，為最高立法機關，共199席議員，任期4年，選制為單一選區兩票制(2014年施行2011年制憲所通過之國會選舉法，席次已由386席減至199席)。",
                "cabinet" =>
                    "總理為最高行政首長，由總統提名（贏得國會大選之政黨黨魁）並經國會簡單多數確認，所有閣員均由總統任命及解職，現任總理為歐班（Viktor Orbán）。",
                "judiciary" =>
                    "分為地方法院、郡法院、地區法院及最高法院四級。另設有憲法法院，大法官由總統提名、國會同意，任期9年；和行政及勞工法院。",
                "headman" =>
                    "由國會議員投票產生，任期5年，連選得連任乙次。現任總統Katalin Novák於2022年3月10日由國會選出，5月10日就職，為匈牙利首位女性總統。",
                "fa_minister" => "Péter Szijjártó",
                "major_political_parties" =>
                    "主要政黨包括執政中間偏右路線之青民黨（Fidesz，執政聯盟之一）、基民黨（KNDP，執政聯盟之一）。主要在野政黨有民主聯盟黨(DK)、動能黨(Momentum)、社會黨（MSZP）、邁向更好匈牙利黨 (Jobbik)、對話黨(Dialogue)、我們的國家黨（Mi Hazank）及自由派綠黨（LMP）等。",
                "financial_incoming" =>
                    "2021年政府財政赤字3兆7,430億福林，約佔GDP6.8%；相較2020年減少180億福林。2021年政府部門總舉債佔當年度GDP76.80%。",
                "export_value" => "1,413億美元（2021）",
                "import_value" => "1,389億美元（2021）",
                "export_item" =>
                    "小客車、汽車零組件、蓄電池、電話通訊設備、監視器/電視接收器、藥品、資料處理設備、引擎、電纜等（2021）",
                "import_item" =>
                    "小客車零組件、電話通訊設備、電力、天然氣、積體電路、小客車、石油原油、藥品、資料自動處理設備、電纜等（2021）",
                "main_export_countries" =>
                    "德國、義大利、羅馬尼亞、斯洛伐克、奧地利、波蘭、法國、捷克、荷蘭、英國(臺灣排名第49)（2021）",
                "main_import_countries" =>
                    "德國、中國、奧地利、斯洛伐克、波蘭、荷蘭、捷克、義大利、法國、俄羅斯(臺灣排名第24)（2021）",
                "export_to" => 'US$7億2,775萬（2021）',
                "import_from" => 'US$3億9,729萬（2021）',
                "foreign_relationship" =>
                    "匈牙利於1955年12月加入聯合國，並自1989年起陸續達成與西方經濟與安全機制整合之目標，成為多個國際組織之會員國，如歐盟、北大西洋公約組織、經濟合作及發展組織(OECD)、Visegrád Group、世貿組織、世界銀行、亞投行(AIIB)及國際貨幣基金等。由於匈牙利經濟高度依賴國際貿易，該國對外經濟活動相當開放，目前有100多個大使館及代表機構或國際、區域組織在首都布達佩斯設立使館或代表處。",
                "foreign_policy" =>
                    "匈牙利對外政策制定係基於4項承諾：大西洋合作、歐洲整合、國際發展及國際法。現階段仍以歐盟、歐洲事務及鄰國為關係發展重心；此外，加強與俄羅斯及亞洲重要國家包括中國大陸、日本及印度等之互動，亦為其重要施政方針，其「向東方開放」政策已成為匈國對外政策重要支柱之一。",
                "time_range" =>
                    "夏季日光節約時間(4月至10月)較台灣慢6小時、其他季節慢7小時",
                "resident" => "駐匈牙利代表處",
                "national_flag" =>
                    "目前使用之國旗於1957年5月23日採用，旗面比例1:2，三色帶由上而下為紅色、白色及綠色，官式使用國旗不包含盾徽，含有盾徽國旗常用於莊嚴場合。",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            19 => [
                "name" => "北馬其頓共和國",
                "name_in_en" => "Republic of North Macedonia",
                "short_name" => "北馬其頓",
                "short_name_in_en" => "North Macedonia",
                "capital" => "史高比耶",
                "capital_in_en" => "Skopje",
                "national_day" => "9月 8日",
                "join_un_day" => "1993年4月8日",
                "area_size" => "25,713平方公里",
                "geographic" =>
                    "位於巴爾幹半島，北接科索沃與塞爾維亞，西鄰阿爾巴尼亞，南接希臘，東鄰保加利亞。",
                "religion" => "東正教及回教",
                "bilaterial_relations" => null,
                "main_bounds" => "戴納（Macedonian denar, MKD）",
                "exchange_rate" =>
                    "使用貨幣為MKD。目前約為1美元兌換55.58 MKD，惟須視匯率浮動情況而定。 建議查詢https://www1.oanda.com/lang/it/currency/converter/ 。另美元匯率可查詢台灣銀行（https://rate.bot.com.tw/xrt/all/day?Lang=en-US）或兆豐商銀匯率（https://www.megabank.com.tw/personal/foreign-service/forex）。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/e43e9526-c1e7-425c-b365-e1d2fd475c57.GIF",
                "is_diplomatic" => 0,
                "language" => "馬其頓語",
                "main_media" =>
                    "通訊社：馬其頓國家通訊社 電視台：馬其頓國家電視台、馬其頓傳訊電視台、馬其頓西列斯電視台 報紙：晚報、日曆報、新馬其頓日報、馬其頓今日報 廣播台：馬其頓國家廣播台期刊：馬其頓快訊週報、馬其頓論壇雙週刊",
                "population" => "約210萬人",
                "voltage" => "220V",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/6e9e789e-c08a-48e3-914c-e3a741352b35.jpg",
                "political_system" => "民主共和/三權分立、責任內閣制",
                "history_intro" =>
                    "西元6世紀末斯拉夫民族開始遷入馬其頓並定居，並改信奉東正教。西元9世紀馬其頓之斯拉夫王國成立，而在10世紀時衰落。馬其頓頻遭外族侵入並更換諸多外族統治者，自11世紀起，馬其頓人曾發動數次起義，均為統治者撲滅，自1392年起馬其頓淪入鄂圖曼土耳其帝國統治達五世紀之久。1913年爆發第二次巴爾幹戰爭，戰後簽署「布加勒斯特和約」，由保加利亞、希臘及塞爾維亞三國瓜分馬其頓。1919年第一次世界大戰後正式追認保、希、塞三國割據馬其頓。1944年8月「南斯拉夫民主聯邦」成立，馬其頓各地區代表決議成為南斯拉夫聯邦之一員。1945年4月南聯總統狄托將馬其頓升格為南斯拉夫聯邦六個加盟共和國之一，奠下馬其頓的獨立基礎。1991年南聯解體，馬其頓共和國經過外交折衝，順利於9月8日宣布獨立，同年11月17日馬其頓共和國制定新憲法。1993年4月8日以前南斯拉夫馬其頓共和國Former Yugoslavia Republic of Macedonia(FYROM)之名稱加入聯合國。2019年2月12日為解決與希臘之國名爭議，正式改名為「北馬其頓共和國」。",
                "parliament" =>
                    "為一院制(Sobranie)，係最高立法機關，由120位議員組成，85席以小選區單一候選人制，由各選區候選人中以絕對多數決選出，35席係在政黨比例代表制基礎上由政黨名單中產生)，國會議員之任期為4年，正副議長由議員選出。國會有制憲、釋憲、立法、解釋法令、閣員任命、任命及罷免法官、審核國家預算、發表宣戰或和平宣言及是否舉行公民投票。",
                "cabinet" =>
                    "由總理及各部首長組成，行使行政權。總理掌行政權，為最高行政首長，由國會多數黨領袖出任，須經總統提名並獲國會同意。重要職權包括：向國會提出法案、執行法律、承認外國政府、與外國締結邦交、提名駐外使節等。",
                "judiciary" =>
                    "採三級制，分為地方法院，上訴法院及最高法院，另設有憲法法院。法官之任免係由最高司法委員會掌理，共有7位成員，由國會中具有律師資格者中遴選之。",
                "headman" => "總統Stevo Pendarovski (2019年5月12日就任)",
                "fa_minister" =>
                    "Bujar Osmani (2020年8月就任)北馬其頓現任外交部長 Bujar Osmani 於2017年至2020年擔任外交部次長，並於2018年至2020年間兼任對歐盟談判官。",
                "major_political_parties" =>
                    "「馬其頓內部革命組織-馬其頓民族統一民主黨」（Internal Macedonian Revolutionary Organization-Democratic Party for Macedonian National Unity，VMRO-DPMNE）、｢馬其頓社會民主聯盟｣（Social Democratic Union of Macedonia，SDSM）為兩大政黨，另有阿裔政黨「整合民主聯盟」（Democratic Union for Integration, DUI）、阿裔民主黨(DPA)、「全國民主復興黨」（National Democratic Revival）等多個小黨。",
                "financial_incoming" => "收41.98億美元，支36.56億美元(2021年)",
                "export_value" => "81.88億美元(2021年)",
                "import_value" => "113.89億美元(2021年)",
                "export_item" =>
                    "食品、飲料、菸草、織品、雜項成品、鋼鐵、汽車零件等",
                "import_item" => "機械設備、汽車、化學品、石油、食品",
                "main_export_countries" => "德國、希臘、義大利、保加利亞",
                "main_import_countries" =>
                    "德國、希臘、保加利亞、英國、土耳其、義大利",
                "export_to" => "407萬4,859美元(2022年)",
                "import_from" => "315萬3,265美元(2022年)",
                "foreign_relationship" =>
                    "北馬其頓雖於1993年以「前南斯拉夫馬其頓共和國(FYROM)」之名稱加入聯合國；惟馬其頓及希臘兩國自1991年起即針對馬其頓極欲以其憲法國名「馬其頓共和國（Republic of Macedonia）」做為該國國名引發爭議。全球曾有40餘國承認「馬其頓共和國」，但希臘仍以動用否決權阻擋馬其頓加入歐盟及北約作為威脅，擬迫使馬國放棄其憲法國名，改以希馬雙方皆可接受之複合國名作為該國名稱。為加速進入上述國際組織，馬其頓與希臘於2018年6月17日簽訂普雷斯帕（Prespa）協定，雙方同意馬國更名為「北馬其頓共和國」，希臘則相應在北約及歐盟撤回對馬其頓入會之否決權；上述協議經兩國國會批准後，馬其頓政府於2019年2月12日正式宣布更名為「北馬其頓共和國」，嗣於2020年3月27日加入北大西洋公約組織，北馬其頓正式成為北約第30個會員國。",
                "foreign_policy" =>
                    "北馬其頓外交政策為積極參與東南歐重建工作及加入北約與歐盟，並積極發展與美國、俄國及周邊國家關係。北馬其頓於2004年3月正式申請加入歐盟，2005年12月歐盟高峰會同意給予該國候選國地位。",
                "time_range" =>
                    "較台灣慢7小時(3月至10月日光節約時間較台灣慢6小時)",
                "resident" => "無(由駐義大利代表處兼轄)",
                "national_flag" => null,
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            20 => [
                "name" => "千里達及托巴哥共和國",
                "name_in_en" => "Republic of Trinidad and Tobago",
                "short_name" => "千里達",
                "short_name_in_en" => "Trinidad and Tobago",
                "capital" => "西班牙港(Port of Spain)",
                "capital_in_en" => "Port of Spain",
                "national_day" => "8月 31日",
                "join_un_day" => "1962年9月18日",
                "area_size" => "5,128平方公里",
                "geographic" =>
                    "位於加勒比海東部小安地列斯群島最南端，分為千里達島(TRINIDAD)及托巴哥島(TOBAGO)。",
                "religion" =>
                    "宗教以基督教及羅馬天主教為主，其餘包括印度教及伊斯蘭教等。",
                "bilaterial_relations" => null,
                "main_bounds" => "千里達幣(Trinidad and Tobago Dollar)",
                "exchange_rate" => "一美元兌6.644千里達幣(2022年3月4日)",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/5eee0318-a56e-46e1-85df-33a9a902c6ce.GIF",
                "is_diplomatic" => 0,
                "language" => "英文",
                "main_media" =>
                    "全國性電視台有國營電視台TTT Limited、CCN TV及CNC 3，平面媒體有Trinidad and Tobago Express、Trinidad and Tobago Newsday及Trinidad Guardian等。",
                "population" => "約1,405,685人（2022年）",
                "voltage" => "115伏特",
                "time_difference" => "-12:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/b41ad96c-4f1a-4dab-889a-39694939ff24.jpg",
                "political_system" =>
                    "採共和體，內閣制，以總統為虛位元首，總理為實際元首。",
                "history_intro" =>
                    "1498年哥倫布抵達時，即命名為TRINIDAD；1532年西班牙派總督治理，嗣連遭荷蘭及法國侵擾，1797年反由英國佔領，1802年，阿敏條約(THE TREATY OF AMIENS ) 簽定劃歸英國版圖；托巴哥島歷經西、荷、法統治，1814年亦劃歸英國版圖，1888年英國將托巴哥島與千里達島合併統治，1958年兩島先與加勒比海諸小島組成西印度聯邦，嗣因千、托兩島於1962年8月31日獨立，導致該聯邦解體；1976年8月1日改稱千里達暨托巴哥共和國，仍是大英國協會員國。",
                "parliament" =>
                    "國會分參、眾兩院。參議院(SENATE)：參議員31人，總理推薦16人、反對黨領袖推薦6人及總統推薦9人，由總統任命之。眾議院(HOUSE OF REPRESENTATIVES)：眾議員41人，由選舉產生，任期5年。2015年9月9日眾議院大選結果翻盤，原在野黨國家行動黨(PNM)獲勝取得23席，原執政之人民夥伴聯盟(PPC, 由聯合國家黨UNC及人民國會黨COP合組)佔18席。2020年8月10日大選結果「人民國家運動黨」PNM以22席擊敗「人民進步黨」（COP）19席。",
                "cabinet" =>
                    "總統任命眾議院多數黨領袖為總理，為最高行政首長，總理指定各部部長；內閣向國會負責。",
                "judiciary" =>
                    "英美法系，採三級三審制。初審及上訴法院均於境內高等法院(Supreme Court)，終審法院目前為英國樞密院(Privy Council)。",
                "headman" =>
                    "總統：韋寶菈（Paula-Mae Weekes） 總理：羅里(Keith ROWLEY)",
                "fa_minister" => "布朗（Amery Browne）（2020年8月上任）",
                "major_political_parties" =>
                    '執政黨為「人民國家運動黨」(People\'s National Movement) ；反對黨聯盟為「人民進步黨」（Congress of the People, COP）。',
                "financial_incoming" =>
                    "歲入47.90億美元、歲出81億美元 (2020預估)",
                "export_value" => "56億138萬美元 (2021年)",
                "import_value" => "83億7785萬美元(2021年)",
                "export_item" =>
                    "石油、天然氣、瀝青、化工製品、水泥、紡織品及食品等。",
                "import_item" => "重型機械、運輸工具、食品。",
                "main_export_countries" =>
                    "美國、墨西哥、西班牙、巴拿馬、中國大陸、蓋亞那、巴西。",
                "main_import_countries" => "美國、中國大陸、巴西、日本、加拿大",
                "export_to" => "23,440,368美元(2021年)",
                "import_from" => "102,485,934美元(2021年)",
                "foreign_relationship" => "加強加勒比海區域合作事宜",
                "foreign_policy" =>
                    "千里達為加勒比海地區工業化程度最高國家，積極支持加勒比海區域經濟整合。",
                "time_range" => "較我國慢12小時",
                "resident" => "無，由我國駐聖文森國大使館兼轄",
                "national_flag" =>
                    "國旗為紅底，另有鑲白邊之黑帶自左上角至右下角。",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            21 => [
                "name" => "南蘇丹共和國",
                "name_in_en" => "Republic of South Sudan",
                "short_name" => "南蘇丹",
                "short_name_in_en" => "South Sudan",
                "capital" => "朱巴",
                "capital_in_en" => "Juba",
                "national_day" => "7月 9日",
                "join_un_day" => "2014年7月14日",
                "area_size" => "約64萬平方公里",
                "geographic" =>
                    "位處東北非內陸，北接蘇丹共和國，東臨衣索比亞，南接肯亞、烏干達、剛果民主共和國，西接中非共和國。",
                "religion" => "基督教佔多數．其餘為原始信仰、伊斯蘭教。",
                "bilaterial_relations" => null,
                "main_bounds" => "南蘇丹鎊(貨幣編號：SSP)",
                "exchange_rate" =>
                    "1美元約兌換130.26南蘇丹鎊(SSP)(2023年3月9日)，詳細匯率資訊建議至臺灣銀行（https://rate.bot.com.tw/xrt）、兆豐銀行（https://www.megabank.com.tw/personal/foreign-service/forex）或相關外匯網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/d961a747-85a0-4b26-a88d-e6d2bc16285e.GIF",
                "is_diplomatic" => 0,
                "language" => "英語(官方語言)、阿拉伯語(通用)",
                "main_media" =>
                    "Sudan Tribune、Sudan Radio Service、Gurtong、Miraya FM、New Sudan Vision",
                "population" => "約1,278萬人(2019年)",
                "voltage" => "220伏特",
                "time_difference" => "-5:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/f366a303-7ba1-4d4f-94e1-870f5db6ff23.jpg",
                "political_system" => "總統制",
                "history_intro" =>
                    "1.19世紀以前，南蘇丹沒有成文歷史。19世紀初，埃及與蘇丹侵入南蘇丹地區，1899年英國與埃及共管蘇丹，並於1902年將該地區分為南北兩個實體分而治之，但1944年朱巴會議決定統合南北蘇丹。2.1955年南北蘇丹衝突，蘇丹第一次內戰爆發。1972年雙邊簽署《阿迪斯阿貝巴協定》，第一次內戰結束。3.1983年蘇丹總統尼梅瑞(Nimeiry)宣佈在全國施行伊斯蘭法，引發南方不滿，爆發第二次內戰。2005年1月，蘇丹南北雙方簽署《全面和平協定》（CPA），第二次內戰結束。4.根據協定，南蘇丹於2011年1月舉行全民公投，98.83%選民贊成獨立。7月9日，南蘇丹共和國成立。",
                "parliament" =>
                    "兩院制，由州委員會（上議院，50席）和國民議會（下議院，400席）組成，任期均為4年。",
                "cabinet" => "經國會同意後由總統任命，對總統負責。",
                "judiciary" => "最高法院、上訴法院、高等法院、地方法院",
                "headman" => "基爾(Salva Kiir Mayardit)",
                "fa_minister" => "瓦尼諾雅(Beatrice Wani-Noah)",
                "major_political_parties" =>
                    "蘇丹人民解放運動（SPLM）、全國大會黨（NCP）、蘇丹非洲聯盟（SANU）、團結民主陣線（UDF）等政黨",
                "financial_incoming" =>
                    "收入2億5,960萬美元，支出2億9,860萬美元（2017/18會計年度）",
                "export_value" => "12億3,000萬美元（2017年）",
                "import_value" => "5億3,200萬美元（2017年）",
                "export_item" => "原油、廢料鋼鐵、木材",
                "import_item" => "糖、藥品、麵粉、運輸車輛",
                "main_export_countries" => "中國、印度、烏干達、烏克蘭、約旦",
                "main_import_countries" => "烏干達、肯亞、中國、荷蘭、美國",
                "export_to" => "1,481美元(2019年)",
                "import_from" => "約4,107萬美元(2019年)",
                "foreign_relationship" =>
                    "南蘇丹建國後，各國迅速承認，非洲聯盟承認其為第54個成員國；蘇丹雖承認南蘇丹，但雙方石油問題仍存爭議，2012年3月曾發生爭奪油田之軍事衝突。",
                "foreign_policy" =>
                    "採睦鄰政策，並積極參與各國際組織，已是聯合國、國際貨幣基金、世界銀行、非洲聯盟、東部南部非洲共同市場成員及東非政府間發展組織，計劃加入世界貿易組織、大英國協與阿拉伯聯盟。",
                "time_range" => "較臺灣慢5小時",
                "resident" => "駐沙烏地阿拉伯代表處兼管。",
                "national_flag" =>
                    "由黑色(象徵南蘇丹人民)、紅色(代表為自由而流的血)、綠色(代表土地)3色橫條，以及藍色(代表尼羅河)三角形組成，三角形中間有一黃色星星象徵南蘇丹各州之團結。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            22 => [
                "name" => "南非共和國",
                "name_in_en" => "Republic of South Africa",
                "short_name" => "南非",
                "short_name_in_en" => "South Africa",
                "capital" => "普利托利亞",
                "capital_in_en" => "Pretoria",
                "national_day" => "4月27日",
                "join_un_day" => "1945年11月7日",
                "area_size" => "1,220,813平方公里",
                "geographic" =>
                    "地處南半球，位於非洲大陸的最南端，東南濱印度洋，西濱大西洋，北接納米比亞、波札那、辛巴威及莫三比克",
                "religion" => "基督教(86%)、非洲傳統宗教(5.4%)、伊斯蘭教(1.9%)",
                "bilaterial_relations" => null,
                "main_bounds" => "鍰(RAND, ZAR)",
                "exchange_rate" => '1 US$ ≒15.00 RAND (ZAR) (2022/02)',
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/2f933fab-dfdc-4a73-abc0-7e880834f4de.GIF",
                "is_diplomatic" => 0,
                "language" =>
                    "南非係多種族國家，除歐亞移民後裔外，尚有非洲黑人土著九種部落。人種既不同，語言亦各異，憲法規定共 11 種官方語言，包括英語、斐語(Afrikaans)、祖魯(isiZulu)、柯薩語(isiXhosa)、索托語(Sesotho)、札那語(Setswana)、史瓦濟(siSwati)、恩德貝里(isiNdebele)、貝帝(Sepedi)、尚加(Xitsonga)及溫達(Tshivenda)。",
                "main_media" =>
                    "南非國家廣播電視公司(South African Broadcasting Corporation, SABC)、eNCA電視、公民日報(The Citizen)、商業日報(The Business Day)、衛報(Mail and Guardian)、城市快報(City Press)、時報(The Times)、24新聞網(News 24)、星報(The Star)、斐京新聞報(Pretoria News)。",
                "population" => "5,770萬人",
                "voltage" => "220伏特",
                "time_difference" => "-6:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/a1f93255-3840-4c9a-be19-7972075c56c6.JPG",
                "political_system" =>
                    "內閣制共和國(Parliamentary Republic)，總統為國家元首具實權，由國民議會多數黨選出。",
                "history_intro" =>
                    "1652年起荷蘭東印度公司以開普敦為船舶補給基地，並自馬達加斯加及印尼等地引進工人（他們與白人所生子女後來被歸類為雜色人）。1806年英國人開始移民，除掌握當地法政經濟大權外，也逐步採取廢除奴隸制度措施。1830年代荷蘭裔移民開始向內陸遷徙，建立川斯瓦共和國及橘自由邦。在此同時，英國人也引進大批印度工人，加強經營德班港地區。1860年代慶伯利發現鑽石礦及1886年約堡發現金礦之後，英國人為壟斷礦業及商業利益，與祖魯人發生祖魯戰爭，與荷蘭裔移民發生波耳戰爭。1910年英國人與荷蘭裔移民建立「南非聯邦」，完全排除黑人參與，南非黑人族群為爭取權利，先後在1912年及1921年成立非洲民族議會黨（ANC）及南非共產黨（SACP）。1948年南非國民黨（NP）執政後採行種族隔離政策遭受國際的譴責與抵制。1961年南非聯邦脫離大英國協(Commonweath of Nations)，成立「南非共和國」，採內閣制。1989年9月國民黨黨魁戴克拉克(F. W. de Klerk)當選總統後於1990年開放黨禁，釋放ANC領袖曼德拉(Nelson Mandela)， 1991年南非國會通過「廢除種族隔離政策」法案。1994年4月舉行多種族參與的民主大選， ANC勝選，由曼德拉出任總統，姆貝基(Thabo Mbeki)及戴克拉克擔任副總統，南非種族隔離制度正式廢除。",
                "parliament" =>
                    "眾議院國民議會（National Assembly）400席次，按政黨得票比例分配。省聯院（National Council of Provinces）90席次，全國9省每省配得10席，依各省議會政黨比例各推派10名議員組成。",
                "cabinet" =>
                    "總統由國民議會選出，任期5年，得連任1次。副總統及各部會正、副首長均由總統指派任命。",
                "judiciary" => "設有最高上訴法院、憲法法院及高等法院等。",
                "headman" => "拉瑪佛沙(Cyril Ramaphosa)",
                "fa_minister" => "潘朵(Naledi Pandor，女)",
                "major_political_parties" =>
                    "在國民議會所占席次：2019年大選後，非洲民族議會黨（African National Congress, ANC）230席、民主聯盟黨（Democratic Alliance, DA）84席、經濟自由鬥士黨（Economic Freedom Fighters, EFF)44席、印卡塔自由黨（Inkatha Freedom Party, IFP）14席、新自由陣線黨(Freedom Front Plus, VF Plus)10席、其餘小黨共18席。",
                "financial_incoming" =>
                    "2020年政府財政收入935億美元，支出1344億美元",
                "export_value" => 'US$ 961.9億 (2020)',
                "import_value" => 'US$774.7億 (2020)',
                "export_item" =>
                    "礦產及加工品、貴金屬、汽車、基礎金屬、機械設備及零件、電子設備及零件、化學品",
                "import_item" =>
                    "機械設備及零件、電子設備及零件、影音設備及零件、礦產加工品、化學品、汽車及零配件",
                "main_export_countries" =>
                    "中國大陸、德國、美國、英國、日本 (2020)",
                "main_import_countries" =>
                    "中國大陸、德國、美國、印度、沙烏地阿拉伯 (2020)",
                "export_to" => 'US$3.83億(2022.1-5月) 、US$5.67億 (2021)',
                "import_from" => 'US$6.51億(2022.1-5月) 、US$9.92億 (2021)',
                "foreign_relationship" =>
                    "南非為1945年聯合國51個創始會員國之一，因實施種族隔離制度，聯合國曾在1974年暫停南非參加聯合國事務。但隨著1994年種族隔離制度廢除，聯合國同意恢復南非參加聯合國大會等權利，世界各國相繼解除對南非之經濟制裁，非洲團結組織(OAU)、不結盟運動國家組織(Non-Aligned Movement)及大英國協等亦先後分別同意南非加入，國際形象逐漸提升，南非逐漸在非洲，尤其南部非洲事務上扮演重要角色，包括南部非洲發展共同體（SADC）、非洲聯盟(AU)及泛非議會(Pan-African Parliament)等。並分別於2007-2008年、2011-2012年及2019-2020年三度擔任聯合國安理會非常任理事國。目前南非在107國設有大使館，超過160國在南非設置大使館或其他代表機構。",
                "foreign_policy" =>
                    "南非自1994年非洲民族議會黨執政後，積極參與區域及國際事務，並以非洲集團領袖、不結盟運動龍頭、第三世界代言人自居，在非洲積極推動非洲統合與復興。2011年初南非成為金磚五國(BRICS)成員，與其他金磚4國密切協調合作，由經貿合作步向國際政治合作領域，提高南非國際影響力。",
                "time_range" => "較台灣時間慢 6 小時。",
                "resident" => "駐南非代表處、駐開普敦辦事處。",
                "national_flag" =>
                    "南非國旗是一面由紅、黃、藍、綠、黑、白六種顏色組成的旗幟，呈Y形。1994年4月27日被採用為國旗。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            23 => [
                "name" => "卡達",
                "name_in_en" => "State of Qatar",
                "short_name" => "卡達",
                "short_name_in_en" => "Qatar",
                "capital" => "杜哈",
                "capital_in_en" => "Doha",
                "national_day" => "12月18日",
                "join_un_day" => "1971年9月21日",
                "area_size" => "11,586平方公里",
                "geographic" =>
                    "東、西、北鄰阿拉伯(波斯)灣，南與沙烏地阿拉伯接壤。",
                "religion" => "伊斯蘭教",
                "bilaterial_relations" => null,
                "main_bounds" => "卡達里亞爾(Riyal，貨幣編號QAR)",
                "exchange_rate" =>
                    "1 美元約兌換3.639卡達里亞爾(2022年8月)，詳細匯率資訊建議至臺灣銀行（https://rate.bot.com.tw/xrt）、兆豐銀行（https://www.megabank.com.tw/personal/foreign-service/forex）或OANDA（https://www1.oanda.com/currency/converter/）網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/29a7c20e-8ee3-4faa-82d0-06ba27734358.GIF",
                "is_diplomatic" => 0,
                "language" => "阿拉伯語",
                "main_media" =>
                    "Qatar TV、 Al-Jazeera TV、 Al-Raya、 Al-Sharq、 Al-Watan、Qatar News Agency",
                "population" => "約298.6萬人(2022年)",
                "voltage" => "110V&amp;220V",
                "time_difference" => "-5:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/c1a57e30-d0f3-48fb-9aff-352e08cd0cef.jpg",
                "political_system" => "君主制",
                "history_intro" =>
                    "自16世紀以來，卡達先後為葡萄牙、西班牙、英國之殖民地，1872年併入奧圖曼土耳其帝國，1916年土耳其勢力為英國逐出，卡達與英國簽訂保護條約，1971年英國始撤離海灣地區，卡達遂於1971年9月3日正式宣佈獨立。",
                "parliament" =>
                    "卡達設有諮議會（Shura Council），無完整立法權，依據憲法共設議員45席，其中2/3民選，餘由卡達國王任命，任期4年，並於2021年10月完成首次大選。",
                "cabinet" =>
                    "內閣共19名成員，均由卡達國王任命，組成包含總理兼外交部長、副總理兼國防部長及各部部長。",
                "judiciary" => "司法部",
                "headman" => "譚明(Sheikh Tamim bin Hamad Al-Thani)",
                "fa_minister" => "Sheikh Mohamed bin Abdulrahman Al-Thani",
                "major_political_parties" => null,
                "financial_incoming" =>
                    "2021年歲收約439億美元，支出約534億美元",
                "export_value" => "約778億美元(2021年)",
                "import_value" => "約278億美元(2021年)",
                "export_item" => "天然氣、石化產品、肥料、鋼鐵",
                "import_item" =>
                    "機械及運輸設備、金屬製成品、食物及牲畜、化學品",
                "main_export_countries" => "日本、南韓、印度、中國大陸、新加坡",
                "main_import_countries" => "美國、德國、中國大陸、日本、英國",
                "export_to" => "2022年我對卡達出口總額近1億美元。",
                "import_from" => "2022年我自卡達進口總額約40.44億美元。",
                "foreign_relationship" =>
                    "1992年與沙烏地阿拉伯完成邊界協議，並於2000年3月21日完成簽署，惟2002年半島頻道播出對沙國王室不敬節目，導致兩國失和，卡達外交逐漸轉向親美，2003年成為美國駐海灣空軍指揮部所在地。2003年5月14日卡達外長會晤以色列外長後表示，一旦以、巴和談取得進展，願與以建交。2014年卡達因庇護穆斯林兄弟會立場，引發沙烏地阿拉伯、巴林、阿拉伯聯合大公國等國不滿，後因伊斯蘭國(ISIL, ISIS, IS）崛起，各國歲擱置爭議與卡達改善關係，以共同抵抗伊斯蘭國。2015年伊朗核子計畫6國(美國、中國、法國、俄國、英國及德國)與伊朗達成協議後，卡達積極協調美、俄及海灣國家合作理事會(Gulf States of Cooperation Council, GCC)各國，討論有關反恐戰爭、敘利亞內戰、葉門戰亂及與伊朗關係等區域問題。2017年6月沙烏地阿拉伯、巴林、阿拉伯聯合大公國及埃及等國以卡達涉嫌與恐怖組織掛勾、破壞區域安全為由，宣布與卡達斷交並對其進行封鎖孤立，嗣經科威特不斷穿梭努力，直到2021年 1月彼此關係方逐漸恢復正常。",
                "foreign_policy" =>
                    "卡達致力參與解決海灣地區所面臨問題及挑戰，支持海灣國家合作理事會（Gulf States of Cooperation Council, GCC）之集體行動。另卡達也主張應透過外交對話並以和平方式解決國際爭端。",
                "time_range" => "較台灣晚5小時",
                "resident" => "駐沙烏地阿拉伯代表處兼轄",
                "national_flag" =>
                    "卡達國旗由白色與栗色組成，兩色之間成鋸齒狀 （共9個鋸齒）。白色代表和平，栗色代表流血戰爭，9個鋸齒代表卡達係1916年與英國簽署保護協約之第9個締約方。",
                "area_name" => "亞西地區",
                "area_name_in_en" => "West Asia",
            ],
            24 => [
                "name" => "印度共和國",
                "name_in_en" => "Republic of India",
                "short_name" => "印度",
                "short_name_in_en" => "India",
                "capital" => "新德里",
                "capital_in_en" => "New Delhi",
                "national_day" => "1月 26日",
                "join_un_day" => "1945年10月30日",
                "area_size" =>
                    "南北縱長3214公里，東西約2933公里，面積達328萬7000餘平方公里，係世界第七大國。",
                "geographic" =>
                    "印度位於亞洲次大陸，自北方喜馬拉雅山起，經恆河平原及德干高原，向南伸入印度洋，西瀕阿拉伯海，東濱孟加拉灣。",
                "religion" =>
                    "印度屬多元宗教文化，印度八成人口信奉印度教，其餘為回教、錫克教、耆那教、佛教、拜火教及基督教等。",
                "bilaterial_relations" => null,
                "main_bounds" => "印度盧比(Indian Rupee)",
                "exchange_rate" =>
                    "詳細匯率資訊建議至台灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/b40b8ba8-2c8d-4a38-a6db-d9795d75842a.gif",
                "is_diplomatic" => 0,
                "language" =>
                    "印度擁有多元種族及語文，印度境內1萬以上人口使用的語文有122種。印度中央政府所使用官方語文為印度語(Hindi)及英語，此外各州並可自行選定其官方語文。印度憲法中所列之官方語文有22種，其中印度文及英文居首要地位，政府部門之公文及法律文件皆以該兩種語文為主。",
                "main_media" =>
                    "The Times of India, The Hindu, Hindustan Times, India Express, NDTV等",
                "population" =>
                    "印度人口眾多，高居世界第二。全國人口約13億8,000萬人，約佔世界總人口17.7%；近年印度政府不斷普及教育，人民識字率已提升超過70%。",
                "voltage" =>
                    "印度電壓為220伏特，使用3孔或2孔圓式插座；仍有部份地區供電不足，斷電頻仍。",
                "time_difference" => "-2:30",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/851787c2-a196-497b-b10a-725c62d18db8.jpg",
                "political_system" =>
                    "國體：共和國，全國分28州及8個中央直轄區（Union Territories）。政體：聯邦內閣制，政務由內閣負責，總統為虛位元首，由國會兩院及地方議會組成之選舉團推舉，任期5年，副總統產生方式及任期亦同。",
                "history_intro" =>
                    "印度是世上最古老的文明之一，擁有五千年歷史和多樣豐富文化遺產。在歷史演進的長河中，印度人民與文化受不同時期文明影響，演變成一獨特種族與文化綜合體。印度是世上最大的民主國家。1947年 8月 15日，印度從英國統治下獲得獨立。1950年的憲法規定政府為兩院制的立法機構及三個獨立的機關：行政及司法機構以及組織聯邦之州政府機構。全國共有28個州和8個直接由中央政府管轄的中央直轄區。",
                "parliament" =>
                    "採兩院制，上議院（Rajya Sabha）：共有245名議員，由各州議會議員投票產生，任期6年，每2年改選三分之一。下議院（Lok Sabha）：共有545名議員，其中543席由人民直接選舉產生，任期5年。",
                "cabinet" =>
                    "由總理及各部會首長組成，總理由總統任命，部長由總理建請總統任命。連任總理之莫迪(Narendra Modi)於2019年5月30日宣誓就職。",
                "judiciary" =>
                    "採三級制，分為次級法院、高等法院及最高法院。最高法院設大法官1名，法官30名，由總統依法定程序任命，任期至年滿65歲止。高等法院全國共設21所，原則上每州各設1所，惟其中3所轄區跨州；次級法院依涉訟案件分類，有民事法庭（Civil Court），家事法庭（Family Court），瑣事法庭（Small Case Court）等。",
                "headman" =>
                    "總統穆爾睦(Droupadi Murmu) (2022年7月25就任，印度第15任總統)。",
                "fa_minister" => "Subrahmanyam Jaishankar（2019年5月就任）。",
                "major_political_parties" =>
                    "全國性政黨共有印度人民黨（BJP）、國大黨（INC）、印度馬克斯主義共產黨(CPM)、民族主義國大黨（NCP）、印度共產黨(CPI)、多數人民黨（BSP）及草根國大黨（AITC）等7個。參與2019年大選之地方性政黨約674個。總計在下議院擁有席次之政黨有33個。",
                "financial_incoming" => "收2,160億美元、支3,890億美元(2020年)",
                "export_value" => "3,955億美元(2021年)",
                "import_value" => "5,737億美元(2021年)",
                "export_item" => "石油提煉製品、鑽石、銀、醫藥劑、稻米",
                "import_item" =>
                    "石油提煉製品、黃金、未加工鑽石、煤礦、液化天然氣",
                "main_export_countries" =>
                    "美國、阿拉伯聯合大公國、香港、中國大陸、英國、新加坡",
                "main_import_countries" =>
                    "中國大陸、美國、沙烏地阿拉伯、阿拉伯聯合大公國、瑞士、印尼",
                "export_to" =>
                    "45.23億美元(2021年)。主要產品：機械及機器用具、塑膠製品、電機設備及零件、有機化學產品、鋼鐵",
                "import_from" =>
                    "31.73億美元(2021年)。主要產品：礦物燃料及礦物用品、鋼鐵、有機化學產品、銅製品、電機設備及零件",
                "foreign_relationship" =>
                    "印度與世界160餘國建立外交關係，自莫迪總理上台後更積極推動「大國外交」，除與美國、日本、英國、法國、德國及俄羅斯等國建立友好夥伴關係外，另與東協各國亦維持密切友好關係。2020年6月印中在西部邊界加爾萬河谷發生軍事衝突，雙方關係直轉直下。",
                "foreign_policy" =>
                    "（一）印度於1945年10月30日加入聯合國，與世界上多數國家建立外交關係，也是許多國際組織的成員。印度向來積極參與國際事務，獨立後倡導不結盟運動，曾擔任不結盟運動組織主席國，前為第三世界領導大國；近年隨其經濟快速成長，已成為主要新興大國，國際地位及影響力與日俱增。（二）印度的外交政策重點如下：第一、強調睦鄰優先政策，積極加強與其鄰國之關係；第二、推動大國外交，加強與美國、日本、俄羅斯、英國、法國及德國等國交往，與中共改善關係；第三、積極與其他國家建立不同層次之戰略夥伴關係；第四、積極參與各項國際組織，近年來更努力爭取聯合國安理會常任理事國席位。（三）莫迪總理於2014年5月26日執政後，將「東望政策」(Look East Policy)重新定位為「東行政策」(Act East Policy)，在外交上頻頻出訪世界各國，積極進行「遠交睦鄰」外交。（四）2023年印度擔任G20及「上海合作組織」(SCO)輪值主席國，將進一步發揮大國外交角色。",
                "time_range" => "印度全國僅一個時區，較台灣慢2小時30分鐘。",
                "resident" => "駐印度代表處(設於新德里)、駐清奈辦事處。",
                "national_flag" =>
                    "由橙、綠、白、藍四色組成，旗面中心有一個含24根軸條的藍色法輪。http://knowindia.gov.in/knowindia/national_symbols.php?id=2",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            25 => [
                "name" => "印度尼西亞共和國",
                "name_in_en" => "Republic of Indonesia",
                "short_name" => "印尼",
                "short_name_in_en" => "Indonesia",
                "capital" => "雅加達",
                "capital_in_en" => "Jakarta",
                "national_day" => "8月 17日",
                "join_un_day" => "1950年9月28日",
                "area_size" =>
                    "1,904,569平方公里，印尼是世界最大群島國家，全國共17,508個大小島嶼，其中約6,000個島嶼有人居住，國土面積位居全球第13位，海域面積約800萬平方公里。",
                "geographic" =>
                    "印尼群島分布於北緯6度至南緯11度、東經94度至141度之間，赤道貫穿全境，東西綿延達5120公里，南北縱長約1760公里。印尼位居亞洲大陸及澳洲間橋樑，為太平洋及印度洋間要衝，在全球戰略上居重要地位。主要島嶼有蘇門答臘(Sumatra)、爪哇(Java)、加里曼丹(Kalimantan)、蘇拉威西(Sulawesi)及巴布亞(Papua)五大島。印尼境內火山共約400座，其中100座為活火山。境內天然資源有石油、天然氣、木材、橡膠、棕櫚油、煤、鐵、黃銅與錫等礦產。",
                "religion" =>
                    "印尼憲法保障人民有信仰自由，回教並非國教：境內回教徒約占全國人口之86.1%，基督徒約5.7%，天主教徒約3.3%，印度教徒約占1.8%(峇里島居民多信奉印度教)及佛教徒約占1%。",
                "bilaterial_relations" => null,
                "main_bounds" =>
                    "印尼盾(Rupiah, Rp.)。自2015年7月開始在印尼境內購票訂房等交易均依規定須使用印尼盾計價。匯兌限制印尼並無匯兌管制，可向機場銀行、中國信託銀行（印尼）或民間Money Changer 兌款。雅加達地區之外國銀行、本地銀行、MONEY CHANGER及旅館等均可兌換外幣，主要以美金為主，歐元、日圓、澳幣、新加坡幣亦受歡迎，倘擬以美金現鈔兌換印尼幣，須注意美元現鈔之完整性，避免污損、折痕、劃記等情況。在印尼使用旅行支票及信用卡，均被接受，惟須防範信用卡被盜刷。雅加達中國信託商業銀行（CTBC）地址、電話及電傳資料如次：WISMA TAMARA大樓, 16th Floor, Jalan Jenderal Sudirman, Kav. 24。電話：021-520-7878、傳真：021-520-6767，該銀行提供中文服務。",
                "exchange_rate" =>
                    "目前一美元兌換印尼幣兌率約1比14,500，惟須視匯率浮動情況而定，詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/cdcd9afd-db7a-4e29-9360-6f92c6d51bf9.gif",
                "is_diplomatic" => 0,
                "language" =>
                    "地方語言達700多種，官方語為印尼語，知識份子多諳英語，華人多諳華語、閩南語或客家語。",
                "main_media" =>
                    "安塔拉國家通訊社、國營電視台TVRI、美都電視台、指南日報、印尼媒體報、雅加達郵報（英文）、商報（華文）、國際日報（華文）、星洲日報（華文）",
                "population" =>
                    "根據2021年底統計資料，印尼人口總數達2億7千8百萬人，居世界第四。國內種族多達三百餘種，其中人數最多者為爪哇人，佔總人口之42%。印尼華裔人口佔總人口約4%，約1,500萬人。印尼58%之人口居住於爪哇島。",
                "voltage" => "電壓規格為220伏特，家電用品插頭為圓形雙頭狀。",
                "time_difference" => "-1:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/5d0d8587-e565-45aa-ba1a-4e0280c4cf6c.JPG",
                "political_system" => "總統制/民主共和",
                "history_intro" =>
                    "13世紀起阿拉伯人在爪哇及蘇門答臘建立伊斯蘭教王國。至17世紀起荷蘭人統治印尼340餘年。印尼在第二次世界大戰期間曾一度為日本所占領，戰後於1945年8月17日宣告獨立，獨立初期印尼陷於割據局面，荷蘭企圖重溫殖民舊夢，拒不承認印尼獨立，終致爆發荷印戰爭，嗣經聯合國調停，荷蘭始於1949年12月27日承認印尼獨立，聯合國旋於1950年9月28日通過印尼加入為會員國。",
                "parliament" =>
                    "1.	印尼中央民意機關採兩院制議會，由國會(DPR，575席)及地方代表議會(DPD，136席)組成兩院聯席之人民協商會議(MPR)為國家最高民意機構，負責制訂、修改及頒佈憲法、主持正副總統就職與彈劾，以及聽取總統發表國情咨文。2.	印尼國會及地方代表會議之議員經由普選產生、任期5年，本屆議員於2019年4月與總統、副總統同步改選，並於同年10月宣誓就職。當前印尼國會含括奮鬥民主黨(PDIP)、從業黨(Golkar)、大印尼行動黨(Gerindra) 、國家民主黨(NasDem)、民族復興黨(PKB)、民主黨(Demokrat)、公正福利黨(PKS)、國民使命黨(PAN)、團結建設黨(PPP)等九大政黨。3.	印尼國會擁有立法權、預算審議權、法律監督權及修正權，設有議長及4名副議長，為印尼政黨政治運作中心，總計由全國80個選區選出575位國會議員。國會設有11個常設委員會，監督行政部門。4.	地方代表議會係2004年新成立之中央民意機構，由印尼全國34個省級行政區各選出4名議員共136名議員組成，設有議長及3位副議長。依據印尼憲法規定，地方代表議會議員係由選民選出並代表所屬區域(省份)，而非政黨，負責範圍包括地方自治、地方與中央關係、自然及經濟資源管理、地方財務平衡等法案，亦可向國會提出相關法案，以反映地方需求；另國會任何涉及地方事務之法案必須經過地方代表議會審議。",
                "cabinet" =>
                    "未設總理，總統直接任命內閣成員及主持內閣會議，現任之「前進內閣」(Kabinet Indonesia Maju)成員包含4位協調部部長、34位部長及多位部長級官員。",
                "judiciary" =>
                    "印尼司法含法院及檢察系統，法院分為最高法院、高等法院及地方法院。檢察系統以總檢察長最高，肅貪委員會（KPK）、警察機關及國家緝毒局（BNN）對檢察長提報案件，檢察署再將案件送法院審理。",
                "headman" => "佐科·維多多(Joko Widodo)",
                "fa_minister" => "樂娜Retno Lestari Priansari Marsudi",
                "major_political_parties" =>
                    "奮鬥民主黨（PDI-P）、從業黨（GOLKAR）、大印尼行動黨(Gerindra)、民主黨( Demokrat)、國民使命黨(PAN)、民族復興黨(PKB)、公正福利黨(PKS)、團結建設黨(PPP)、國家民主黨(NasDem)、人民良心黨(Hanura)。",
                "financial_incoming" =>
                    "印尼國會於2021年10月7日批准《稅務調和綜合法案草案》(RUU HPP)，修改包含一般稅務規定及程序法(KUP)、所得稅法、加值稅(VAT/PPN)法及消費稅法(excise law)(針對酒精及菸草製品課稅)等現行法律，並新增稅收特赦及碳稅相關規定。該草案尚待佐科威總統簽字頒布為印尼法律，且仍需由財政部等相關單位訂定施行細則方能具體落實。財政收入1,250億美元(2021年)；財政支出1,906億美元(2021年)",
                "export_value" => "1,651億美元（2021）",
                "import_value" => "1,421億美元（2021）",
                "export_item" =>
                    "煤、棕櫚油、天然氣、石油原油、銅礦石、天然橡膠乳膠、非針葉樹化學木漿、褐煤、輻射層輪胎、首飾",
                "import_item" =>
                    "輕油及其配製品、石油原油、 小 麥 或 雜 麥、液化丁烷、甘蔗糖、未精梳棉、其他積體電路",
                "main_export_countries" =>
                    "中國、美國、日本、新加坡、印度(2021)",
                "main_import_countries" =>
                    "中國、新加坡、日本、美國、馬來西亞(2021)",
                "export_to" =>
                    "2021年臺印尼雙邊貿易總值約109.7億美元(較前一年度成長61.69%)，印尼為我國第14大貿易夥伴，我對印尼出口約30.70億美元(增加34.84%)",
                "import_from" =>
                    "我自印尼進口79億美元(增加75.25%)，印尼對我享有貿易順差。",
                "foreign_relationship" =>
                    "印尼與134國有正式外交關係，其中77國在雅加達設有大使館。印尼奉行獨立自主及積極的外交政策，在國際事務中堅持透過協商，和平解決國際爭端。印尼為萬隆「亞非高峰會議」之發起國及「不結盟運動」、77國集團、G20、伊斯蘭國家組織、東協(ASEAN)等國際及區域組織之重要成員國。",
                "foreign_policy" =>
                    "（一）	蘇哈托總統採行地緣政治觀點作為印尼對外發展政策主軸，形成以東協為基石，由近而遠發展對外關係。蘇西洛總統採行「有千友，無一敵」之外交政策，透過動態平衡操作與各主要強權關係，在合作基調上建設廣泛合作架構。此外，印尼採行多邊主義，積極參與國際議題，如氣候變遷、糧食能源安全、世貿組織談判等，並藉由全球最多穆斯林人口國家之地位，扮演伊斯蘭與西方國家溝通橋樑，在區域及國際議題上致力發揮影響力。佐科威總統採行「務實外交」政策，即外交政策與國家具體利益結合，基此，領土主權、經貿外交、保護僑民為印尼目前外交政策三大主軸。（二）	印尼與134國有正式外交關係，其中99國在雅加達設有大使館。印尼奉行獨立自主及積極外交政策，堅持透過協商，和平解決國際爭端。印尼為萬隆「亞非高峰會議」之發起國及「不結盟運動」、77國集團、G20、伊斯蘭國家組織、東協(ASEAN)、APEC、WTO等國際及區域組織之重要成員國。（三）	印尼外長Retno Marsudi於2022年1月6日發表聲明，揭示年度工作規畫與展望重點，2022年將以醫衛外交、經濟復甦及僑民保護為工作主軸；強調東協中心性及印尼擔任G20輪值主席國之要務，展現區域大國之決心；另主張各國海洋主權與權利均須符合《聯合國海洋法公約》等相關國際法之規範，拒絕接受不具國際法基礎之主張，外界認為頗有暗示其不接受中國「九段線」歷史權利主張之意。",
                "time_range" =>
                    "印尼幅員廣大，全國分三個時區，即印尼西部時區、中部時區及東部時區。其中部時區與台灣時區同，峇里島即在此一時區內，首都雅加達位於印尼西部時區，時區較台灣晚一小時。",
                "resident" =>
                    "駐印尼臺北經濟貿易代表處(Taipei Economic and Trade Office in Indonesia)駐泗水臺北經濟貿易事處(Taipei Economic and Trade Office in Surabaya)",
                "national_flag" =>
                    "印尼國旗為上紅下白二色旗幟，紅色代表自由與勇氣，白色象徵正義與純潔；印尼國徽是一隻金色巨鷹（Garuda），胸前掛著一張盾牌，盾牌上的五個圖案：星星、項鍊、水牛頭、榕樹、棉花與稻穗，代表印尼建國五原則（PANCASILA）：即信奉上帝、人道主義、國家統一、民主政治及社會正義。以上五原則為政府施政之最高指導原則，亦是印尼全國人民及各黨派遵守之信念。",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            26 => [
                "name" => "厄利垂亞",
                "name_in_en" => "State of Eritrea",
                "short_name" => "厄利垂亞",
                "short_name_in_en" => "Eritrea",
                "capital" => "阿斯瑪拉 (Asmara)",
                "capital_in_en" => "Asmara",
                "national_day" => "5月24日",
                "join_un_day" => "1993年5月28日",
                "area_size" => "117,600平方公里",
                "geographic" => "非洲東北部，瀕臨紅海。",
                "religion" => "伊斯蘭教（遜尼派）、基督教、天主教。",
                "bilaterial_relations" => null,
                "main_bounds" => "Nafka (ERN)。",
                "exchange_rate" =>
                    '1 US$ ≒ 15 Nafka (2022/3) （詳細匯率資訊建議至臺灣銀行(https://rate.bot.com.tw/xrt)或兆豐商銀網站(https://www.megabank.com.tw/personal/foreign-service/forex)查詢）',
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/f627ce13-af42-48e0-a690-3e64b8df20e0.GIF",
                "is_diplomatic" => 0,
                "language" => "Tigrinya語、阿拉伯語、英語。",
                "main_media" =>
                    "Hadas Eritrea厄利垂亞官方報、Eritrea Profile官方週報、Eri TV國家電視台、厄利垂亞之聲廣播台(Dimtsi Hafash) 。",
                "population" => "621萬人 (2022年)",
                "voltage" => "220V",
                "time_difference" => "-5:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/79136521-4934-498e-b5f9-cc7ad12d4564.JPG",
                "political_system" => "總統制",
                "history_intro" =>
                    "厄國於1890年至1941年為義大利屬地，1941年至1951年成為英國保護領土，二次大戰後與衣索比亞成立聯邦，1962年遭衣國兼併，成為其第14省。厄利垂亞人民解放陣線即在蘇丹、索馬利亞、葉門等國扶持下進行武裝抗爭，經過30年努力，於1991年5月與衣國達成停戰協定，並於1993年4月在聯合國監督下舉行公投，結果以99.8%多數贊成通過脫離衣國獨立，於同年5月24日正式宣佈獨立。",
                "parliament" =>
                    "國民大會(National Assembly)，共150席，75席由執政黨產生，75席由直選產生，任期5年。",
                "cabinet" =>
                    "14名內閣部長及10名省長(均由總統任命)組成國務委員會，與總統共同行使行政權。",
                "judiciary" => "三級三審制，另設有特別法庭。",
                "headman" => "阿夫瓦基(Isaias Afwerki)",
                "fa_minister" => "薩利赫(Osman Saleh Mohammed)",
                "major_political_parties" =>
                    "唯一合法政黨為人民民主與正義陣線(PFD – People’s Front for Democracy and Justice)，禁止其他政黨成立。",
                "financial_incoming" =>
                    "收入20.29億美元，支出26.01億美元，GDP為97.02億美元(2017估計值)",
                "export_value" =>
                    "6.24億美元（依據CIA Factbook網站登載2017年資料）",
                "import_value" =>
                    "11.27億美元（依據CIA Factbook網站登載2017年資料）",
                "export_item" =>
                    "黃金及其他礦藏、牲畜、高粱、紡織品、食品、小型工業產品",
                "import_item" => "機械、石化產品、食品、加工品",
                "main_export_countries" => "中國、韓國",
                "main_import_countries" =>
                    "阿聯大公國、中國、沙烏地阿拉伯、義大利、土耳其、南非",
                "export_to" => "17.8萬美元(2020)",
                "import_from" => "34美元(2020)",
                "foreign_relationship" => null,
                "foreign_policy" => null,
                "time_range" => "較台灣慢5小時",
                "resident" => "我駐南非代表處兼理。",
                "national_flag" => null,
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            27 => [
                "name" => "厄瓜多共和國",
                "name_in_en" => "the Republic of Ecuador",
                "short_name" => "厄瓜多",
                "short_name_in_en" => "Ecuador",
                "capital" => "基多市(Quito)",
                "capital_in_en" => "Quito",
                "national_day" => "8月10日",
                "join_un_day" => "1945年12月21日",
                "area_size" => "總面積為283,561平方公里",
                "geographic" =>
                    "厄瓜多位於南美洲大陸西北角，因赤道(西文名Ecuador)橫貫其國土，乃以Ecuador為國名，首都為基多。厄瓜多北鄰哥倫比亞，東南接秘魯，西部瀕太平洋，總面積為283,561平方公里，約為台灣之7.8倍，在南美洲略大於烏拉圭。",
                "religion" =>
                    "厄國憲法規定宗教信仰自由，由於受西班牙自15世紀殖民統治影響，絕大多數厄國人民信仰天主教(約74%)，少數信仰基督教(約10.4%)及其他宗教。",
                "bilaterial_relations" => null,
                "main_bounds" => "美元",
                "exchange_rate" => "使用美元/無匯差",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/6c9912d6-9e0e-4d3e-8c98-7e6aac92ad0f.GIF",
                "is_diplomatic" => 0,
                "language" => "西班牙語",
                "main_media" =>
                    "視聽媒體：厄國全國性電視台有5家，即二號台（GAMA TV）、四號台（Teleamazonas）、五號台（RTS）、七號台(Ecuador TV)、八號台（Ecuavisa）及十號台（TC Television），其中二號台、七號台及十號台為公營電視台，另八號台、十號台及四號台新聞播報收視率較高。基多地區英語廣播電台僅HCJB一家，其頻率為FM 89.34。有線電視普及，主要為TVcable及DirecTV兩大系統。平面媒體：厄國報業發達，三大西文報紙(El Universo、El Comercio、Expreso）銷行全國。",
                "population" => "全國約1,775萬人，人口成長率1.75%。(2021年7月)",
                "voltage" => "110V（與國內相同）。",
                "time_difference" => "-13:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/ce378aad-6140-4f81-9a72-0ab2f50e65d2.jpg",
                "political_system" =>
                    "總統制國家；由總統掌理行政權，為國家元首與最高行政長官，設有副總統職位。部會首長由總統任命。總統任期為4年，得連選連任一次。",
                "history_intro" =>
                    "15世紀中葉，印加帝國軍隊佔領厄瓜多，1530年帝國老王去世後，其二子兄弟鬩牆，內鬨不止，適逢西班牙遠征軍自巴拿馬入侵，1533年淪為西班牙殖民地。18世紀時，厄國開放對外貿易，人民逐漸感染爭取自由風氣，於1809年8月10日發起獨立革命運動。1822年5月玻利瓦(Simón Bolívar)領導之革命軍擊潰西班牙皇軍，翌（6）月玻利瓦與南美洲另一革命領袖聖馬丁(San Martín)在惠夜基會晤，隨即組成大哥倫比亞共和國，國土包括今哥倫比亞、巴拿馬、委內瑞拉與厄瓜多4國。1830年該共和國解體後厄瓜多共和國正式成立。",
                "parliament" =>
                    "採一院制，共有137席，直接民選，任期4年。2021年2月7日國會議員選舉137席次中，希望團結聯盟(UNES)獲49席、原住民政團Pachakukit獲27席、民主左派黨(ID)獲18席、基督社會黨(PSC)獲16席及創造機會黨(CREO)獲12席，其餘17席由小黨或獨立派取得。",
                "cabinet" =>
                    "一、總統制國家；由總統掌理行政權，為國家元首與最高行政長官，設有副總統職位。部會首長由總統任命。總統任期為4年，得連選連任一次。二、行政、立法、司法三權分立。國會採一院制，議員137席，由人民直選產生，任期4年。司法機關分為地方法院、高等法院及最高法院三級，依法審理各類民刑案件。另設憲法保障法庭，負責監督憲法之執行。",
                "judiciary" =>
                    "司法機關分為地方法院、高等法院及最高法院三級， 依法審理各類民刑案件。另設憲法保障法庭，負責監督憲法之執行。",
                "headman" =>
                    "Guillermo Lasso Mendoza 2021年5月24日就職，任期至2025年5月23日。",
                "fa_minister" => "Gustavo Manrique",
                "major_political_parties" =>
                    "希望團結聯盟（Unión por la Esperanza)、創造機會黨(Movimiento Creando Oportunidad, CREO)、基督社會黨（Partido Social Cristiano, PSC）、原住民族黨(Movimiento de Unidad Plurinacional-Pachakutik)及民主左派黨(Partido de Izquierda Democratica)。",
                "financial_incoming" =>
                    "政府財政歲入250.46億美元、歲出292.11億美元，赤字41.65億美元 (2021年)。對外貿易2021年順差28.71億美元(出口266.99億美元、進口238.28億美元)。",
                "export_value" => "266.99億美元(2021年)",
                "import_value" => "238.28億美元(2021年)",
                "export_item" =>
                    "原油、魚類及甲殼類水產、堅果、肉類加工品、漁產加工品、花卉及觀賞植物、可可原料及製品、木材及製品、蔬果及加工品、貴金屬等(2021年)",
                "import_item" =>
                    "煉油及焦油、機械及零配件、汽車及零件、電子儀器設備、塑膠製品、藥品、飼料、鋼鐵製品、化工製品及穀物(2021年)",
                "main_export_countries" => "美國、中國、俄國、哥倫比亞、西班牙",
                "main_import_countries" =>
                    "美國、中國、哥倫比亞、巴西、祕魯(2021年)",
                "export_to" =>
                    "1.73億美元(2021年)，主要為汽油塑膠原料及製品、各式機械及零配件、電子零件、各式布料及合成纖維、鋼材及相關製品、光學儀器及零配件、五金工具及餐廚用品等。",
                "import_from" =>
                    "1.27億美元(2021年)，主要為貴金屬半成品、蔬菜、魚類等甲殼類水產、飼料原料、糧食半銅製品、蔬果半成品、花卉與觀賞植物、可可及咖啡等。",
                "foreign_relationship" =>
                    "厄國在海外設有44個大使館等85處駐外機構，與大部分國家關係良好。",
                "foreign_policy" =>
                    "Lasso總統政府標榜「 讓厄瓜多走向世界、讓世界走向厄瓜多」為對外政策主軸。",
                "time_range" => "較臺灣慢13小時",
                "resident" => "我國在厄瓜多首都基多市設有代表處。",
                "national_flag" =>
                    "國旗中最上方為一隻南美禿鷹，厄國最高山CHIMBORAZO，及GUAYAS河，顏色以黃、藍、紅為主。",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            28 => [
                "name" => "古巴共和國",
                "name_in_en" => "Republic of Cuba",
                "short_name" => "古巴",
                "short_name_in_en" => "Cuba",
                "capital" => "哈瓦那(La Habana)",
                "capital_in_en" => "Habana",
                "national_day" => "1月1日(全國解放日)",
                "join_un_day" => "1945年10月24日",
                "area_size" => "總面積為110,922平方公里",
                "geographic" =>
                    "古巴之地理位置其東面為海地、西與尤加敦半島(Yucatan)相望，南為牙買加 (Jamaica)，北臨佛多里達(Florida)半島 ，由於其特殊之戰略位置，古巴亦向有墨西哥灣鎖鑰之稱。",
                "religion" => "天主教",
                "bilaterial_relations" => null,
                "main_bounds" => "古巴貝索(CUP)",
                "exchange_rate" => 'US$1=$24 CUP(古巴披索) (固定匯率)',
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/cfdc9afc-b0b0-4b9c-8b40-f6dc1b28d658.GIF",
                "is_diplomatic" => 0,
                "language" => "西班牙語",
                "main_media" =>
                    "古巴的媒體均為國營，由中央和各市政府掌管，政治訊息由古巴共產黨監管。拉丁美洲通訊社(Prensa Latina)是古巴官方國際通訊社，創建於1961年，在全世界設有37個分社。國家通訊社創建於1974年，主要負責國內新聞報導。古巴廣播電視協會（ICRT）監管廣播和電視節目。全國共有各級電視頻道38個。國際性電視頻道為古巴視野國際頻道（Cubavisión Internacional）；全國性的電視台有古巴視野（Cubavisión）、起義電視台（Tele Rebelde）、教育頻道（Canal Educativo）、教育二號頻道（Canal Educativo 2）和綜合台（Multivisión），以上電視台24小時不間斷播出。此外各省和一些城市也有地方電視台。電視台播放連續劇、喜劇、電影、紀錄片、體育節目、音樂節目、新聞和政論節目，其中很多節目來自巴西、美國和西班牙。古巴的第一個廣播電台開播於1922年8月22日。目前有91個廣播電台：一個國際台，6個國家台，18個省屬台，66個市屬台，遍布全國各地。從2013年1月20日起，南方電視台每天晚上8點到第二天下午4點半的節目在古巴同步播出，該電視台由一些拉美國家政府資助，總部設在委內瑞拉卡拉卡斯，旨在推動拉美一體化。為觀看外國節目，有不少古巴人私下安裝衛星天線和開設網路頻道銀行。《格拉瑪報》（GRANMA）是古巴共產黨機關報，創辦於1965年10月，發行量70萬份；《起義青年報》（Jóven Rebelde）是共青聯中央機關報；《勞動者報》（Trabajadores）是中央工會機關報；《波希米亞》（Bohemia）周刊創於1908年5月，每期發行30萬份。《先鋒》、《我們還年輕》和《Zunzún》是三份青少年雜誌。也有一些網絡媒體。",
                "population" => "約1,131萬人(2021年11月)",
                "voltage" => "110伏特",
                "time_difference" => "-13:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/c18d75f3-3df6-44d9-afba-d5a6c251724e.jpg",
                "political_system" =>
                    "1.	國體與政體：國體：共和國。政體：共黨專政國家主席制。 2.	內閣：2019年古巴新憲法通過後，古巴第9屆全國人大任命總理及6位副總理1位部長會議秘書和26位部長，组成新内閣。3.	國會：一院制，605席（據悉2023年大選後計畫將減少為474席），任期5年。4.	司法制度：最高人民法院是國家最高司法機關。共和國總檢察院負責行使司法監督權。最高人民法院院長、法官、總檢察長、副檢察長均由全國人民政權代表大會選舉與罷免。5.	政黨：共產黨。6.	現任政府：2019年現行憲法規定國家主席為國家元首，現任國家主席狄亞士·卡內爾(Miguel Díaz-Canel)。國務委員會成為國家人民大會常設機構。國務委員會主席不再兼任國家元首，現任國家委員會主席為埃斯特萬·拉索 (Esteban Lazo Hernández) ，部長會議主席則改名為總理。現任總理為曼努埃爾·馬雷羅(Manuel Marrero Cruz) 。",
                "history_intro" =>
                    "1492年10月被哥倫布發現古巴島。1510西班牙遠征軍征服古巴並開始殖民統治，1515年，哈瓦那建城。1868年及1895年先後爆發兩次獨立戰爭，1898年美國戰勝西班牙人佔領古巴，並於1902年扶植成立「古巴共和國」。1959年1月1日卡斯楚(Fidel Castro)率革命軍推翻當時的統治者巴帝斯塔，建立革命政府。1961年卡斯楚宣布開始社會主義革命。1962年美國宣布對古巴實施經濟、貿易及金融封鎖制裁。2014年12月17日美國總統歐巴馬與古巴國務委員會主席勞爾‧卡斯楚(Raúl Castro)共同宣布兩國關係開始正常化，2015年7月20日美國與古巴正式恢復邦交。美國前總統川普(Donald Trump)上任後，美古關係再次陷入冰點，並將古巴重新列入支持恐佈主義國家名單。拜登(Joe Biden)總統就任後，維持對古巴採取強硬政策，但基於改善古巴非法移民進入美國問題及其他政經因素考量，美國國務院西半球事務副助理國務卿Emily Mendrala與古巴外次Carlos Fernandez de Cossio於2022年4月21日在華府針對移民議題舉行會議。美國駐古巴大使館自2022年5月起恢復部分核發簽證功能，美國並重啟「古巴家庭團聚計畫」增加美國駐古巴大使館核發簽證數量，以利更多古巴人民得以透過正常移民管道與其在美國家人互訪團聚(惟仍維持目前多數移民簽證由美國駐圭亞那大使館核發政策) ，擴大美國與古巴人民間之交流，開放團體旅遊及教育領域之學術交流互訪，重新恢復兩國間部分交往與聯繫。",
                "parliament" =>
                    "全國人民政權代表大會是國家最高權力機關，擁有修憲及立法權。",
                "cabinet" =>
                    "在2019年古巴新憲法制定前，部長會議是國家最高行政機關，部長會議主席由國家元首國務委員會主席兼任，2019年古巴新憲法制定後，國務委員會主席不再兼任部長會議主席，並將部長會議主席改為總理。2019年曼努埃爾·馬雷羅(Manuel Marrero Cruz)成為總理，任期5年，得連任一次。",
                "judiciary" => "古巴最高人民法院為國家最高司法部門",
                "headman" => "狄亞士·卡內爾(Miguel Díaz-Canel)",
                "fa_minister" => "羅德里格斯(Bruno Eduardo Rodriguez Parrilla)",
                "major_political_parties" => "共產黨",
                "financial_incoming" =>
                    "歲入546億美元，歲出742億美元，財政赤字196億美元(2020)",
                "export_value" => "13億890萬美元(2021)",
                "import_value" => "75億7,760萬美元(2021)",
                "export_item" => "雪茄煙、蔗糖, 萊姆酒, 鎳鐵, 鋼鐵、蝦蟹",
                "import_item" => "機器, 汽車, 石油及天然氣, 有機化學品, 塑膠",
                "main_export_countries" =>
                    "加拿大(22%)、委內瑞拉(19%)、中國大陸(19%)、西班牙(8%)、荷蘭(5%)、新加坡(3%)、德國(2%)、比利時(2%)(2018)",
                "main_import_countries" =>
                    "委內瑞拉(23%)、中國大陸(13%)、西班牙(11%)、墨西哥(4%)、巴西(4%)、俄羅斯(4%)、義大利(3%)、越南(3%) (2018)",
                "export_to" =>
                    'US$366.1萬美元(2021)以未加工聚乙烯為大宗，占總出口17.89%，其次則為未加工鋁(占16.58%)、輪胎(13.17%)、電器開關及傳輸線(占9.763%)，以及特殊機器及器械、丙烯及其聚合物、家具及零件、鋼管、電話機、變壓器、鋁製品、不織布及絕緣電纜等。',
                "import_from" =>
                    'US$442.4萬美元(2021)以菸葉、雪茄及紙煙為大宗，占總進口比例62.39%，其餘依序為鋁廢料(13.567%)；甲殼類(龍蝦，占11.649%)；蘭姆酒或烈酒(2.11%)；其他則為工藝品或特殊居家用品。',
                "foreign_relationship" =>
                    "美國與古巴於1961年斷交，兩國於2015年7月20日恢復外交關係。俄羅斯係目前古巴最重要之盟友，兩國在國防武器、能源、運輸、通訊、醫療及農業等交流密切。古巴為第一個承認中國大陸拉美國家，對我國極不友善。",
                "foreign_policy" => "強調爭取獨立，和平發展",
                "time_range" => "較台灣慢13小時",
                "resident" => "無，由我國駐哥倫比亞代表處兼轄",
                "national_flag" =>
                    "古巴國旗始於1849年，啟用於1902年5月20日。是一面由五條藍（象徵環繞古巴的海洋）白（象徵純潔和愛國情操）相間的橫條、一個紅色等邊三角形（象徵被為國捐軀者鮮血染紅的天空）和一顆白色五角星（象徵獨立）組成的旗幟。",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            29 => [
                "name" => "史瓦帝尼王國（原「史瓦濟蘭王國」）",
                "name_in_en" => "Kingdom of Eswatini",
                "short_name" => "史瓦帝尼（原「史瓦濟蘭」）",
                "short_name_in_en" => "Eswatini",
                "capital" => "姆巴巴內市",
                "capital_in_en" => "Mbabane",
                "national_day" => "9月6日",
                "join_un_day" => "1968年9月24日",
                "area_size" => "總面積約17,364平方公里，略小於臺灣的一半",
                "geographic" =>
                    "史瓦帝尼王國(原史瓦濟蘭王國)為位於非洲南部內陸國，北、西、南為南非所包圍，東面與莫三比克相鄰。",
                "religion" =>
                    "基督教（40%）、天主教（20%）、伊斯蘭教（10%），餘為傳統宗教。",
                "bilaterial_relations" => null,
                "main_bounds" =>
                    "史國幣值Emalangeni與南非幣Rand等值，南非幣僅紙鈔可在史國使用。",
                "exchange_rate" =>
                    "史國幣值Emalangeni與南非幣Rand等值，與美金匯率約為17.3比1，與新臺幣之匯率約1比1.76（2022年12月）。詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢」。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/97f28dc3-ddf1-4ac5-b721-dbf03d570234.gif",
                "is_diplomatic" => 1,
                "language" =>
                    "英語為官方語言，一般社會大眾語言為史瓦濟語(Siswati)，兩者皆為官方語言",
                "main_media" =>
                    "史國唯一之電視台及電台分別為史國電視台（Eswatini TV）及史國廣播電台（Eswatini Broadcasting and Information Services, EBIS），兩家主流報社為史瓦帝尼時報（Times of Eswatini）及觀察家報（Eswatini Observer），史國並無較具規模之雜誌。",
                "population" => "總人口約116萬 (2020年世界銀行)",
                "voltage" => "220至230伏特",
                "time_difference" => "-6:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/4b70c0bd-aae9-4ba3-b8bb-5e393950203e.jpg",
                "political_system" => "王權式民主(Monarchical Democracy)",
                "history_intro" =>
                    "史瓦濟人原屬班圖族（Bantu）之一支，16世紀時班圖族自非洲中部遷徙至南部。18世紀中葉，史瓦濟蘭人脫離班圖自立，其領袖為恩史瓦帝（Mswati），其後該族即以「史瓦濟」為其族名。19世紀中葉，歐洲殖民勢力進入此區，史國於1902年成為英國之保護區，至1968年9月6日完全獨立，隨即與我國建立外交關係。",
                "parliament" =>
                    "兩院制，分參議院與眾議院。參議院由30名議員組成，眾議院73名，國會議員任期每任5年。參眾兩院均能提出法案。",
                "cabinet" =>
                    "由總理、副總理及18位部長組成，對國會及國王負責。總理及閣員為當然之國會議員，總理由國王任命，閣員由總理提名，呈請國王任命。現任總理為戴克禮(RT. Hon. Cleopas Dlamini)。",
                "judiciary" =>
                    "現代式三級法院；分為地方法院、高等法院及上訴法院與傳統史瓦濟法院(由酋長及地方長老主持審理史瓦帝尼民間簡易民事糾紛或婚姻仲裁等，較重大案件仍移送現代式法院審理)。",
                "headman" => "恩史瓦帝三世國王(Mswati III)",
                "fa_minister" => "札杜莉(Thuli Dladla)",
                "major_political_parties" => null,
                "financial_incoming" => null,
                "export_value" => "約20.3億美元（2022年）",
                "import_value" => "約19.7億美元（2022年）",
                "export_item" =>
                    "工業用芳香劑、蔗糖、黏著劑、木材、服飾及酒精。",
                "import_item" =>
                    "汽油、電力、醫療器材設備、醫藥製劑、紡織品、貨車、玉米、水泥、工業用芳香劑、小客車",
                "main_export_countries" =>
                    "南非、肯亞、奈及利亞、莫三比克、辛巴威、英國、坦桑尼亞、波札那、西班牙及納米比亞。",
                "main_import_countries" =>
                    "南非、中國大陸、印度、莫三比克、美國、臺灣、愛爾蘭、巴林、德國及日本。",
                "export_to" => "1,018萬餘美元（2022年）",
                "import_from" => "598萬餘美元（2022年）",
                "foreign_relationship" =>
                    "1968年9月24日加入聯合國。史國對外政策採取溫和中立路線。史國為南非及莫三比克所包圍，與南非關係極為密切，現為「非南發展共同體」(SADC)與「非南關稅聯盟」(SACU)之會員國。史國於2016年8月29日至31日主辦「非南發展共同體」(SADC)領袖峰會，該組織目前計有16個會員國。史國於2018年3月簽署加入「非洲自由貿易區協定」(AfCFTA)，7月遞交國內核准協定書，AfCFTA嗣於2019年5月30日正式生效。另英國為因應脫離歐盟之經濟衝擊，於2019年與「非南關稅同盟」及莫三比克簽署經濟夥伴協定，該協定於2021年1月1日生效。",
                "foreign_policy" =>
                    "參加不結盟國家高峰會議，對外政策採取溫和中立路線。",
                "time_range" => "較臺灣慢6小時",
                "resident" => "我在史國設有大使館",
                "national_flag" =>
                    "國旗由一個圖騰圖案，兩條藍色、黃色與一條紅色的橫條組成。紅色象徵歷史上的戰鬥，黃色代表礦藏資源，藍色象徵和平。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            30 => [
                "name" => "吉布地共和國",
                "name_in_en" => "Republic of Djibouti",
                "short_name" => "吉布地",
                "short_name_in_en" => "Djibouti",
                "capital" => "吉布地",
                "capital_in_en" => "Djibouti",
                "national_day" => "6月 27日",
                "join_un_day" => "1977年9月20日",
                "area_size" => "2萬3,200平方公里",
                "geographic" => "位處東非，紅海入口",
                "religion" => "伊斯蘭教、基督教",
                "bilaterial_relations" => null,
                "main_bounds" => "吉布地法郎(DJF)",
                "exchange_rate" =>
                    "1美元約兌換177.71法郎（2023年3月），詳細匯率資訊建議至兆豐銀行（https://www.megabank.com.tw/personal/foreign-service/forex）或OANDA（https://www1.oanda.com/currency/converter/）網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/65c4d2f2-34af-4037-86ec-443c5085205d.GIF",
                "is_diplomatic" => 0,
                "language" =>
                    "阿拉伯語（官方語言）、法語（官方語言）、索馬利語、阿法爾語",
                "main_media" =>
                    "民族報、吉布地國營電台、號角報；另有進步、共和及事實等三家週刊",
                "population" => "約112萬人( 2022年)",
                "voltage" => "220 伏特",
                "time_difference" => "-5:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/19ea5878-aad4-4f32-a1fa-f5d912d4b0ac.JPG",
                "political_system" => "共和國、總統制",
                "history_intro" =>
                    "1.吉布地歷史可溯至史前時代，9世紀時阿法爾族人改信伊斯蘭教，13世紀至17世紀與信奉基督教之衣索比亞人發生多起聖戰。2.16世紀初，葡萄牙人首先來到此地，建立阿比西尼亞(Abyssinia)高原地區貿易連絡站。1862年法國人占領塔珠拉灣岸之奧波克（Obock）為其歐亞航路之加煤港，1881年與海灣沿岸之阿法爾族人與依薩人(Issa)簽訂保護協定，隨後並逐步向內陸發展。1888年成立法屬索馬利蘭殖民地，並於1896年興建吉布地港為其首府。1917年法國興建完成衣索比亞鐵路，使吉布地成為東非重要港口。1957年法國給予此一領土部分自治權。 3.1967年自治政府改組，由法國及阿法爾族支持之Ali Arif出任政府會議主席。1975年2月反對黨組成「非洲人民獨立同盟」，主張立即獨立，聲勢龐大，Arif被迫辭職。1977年5月8日吉布地舉行公民投票，同年6年27日宣布獨立。",
                "parliament" => "單一國會制，共65席次，由人民直選，任期5年",
                "cabinet" => "行政部門以總理為首長，總理由總統任命並向總統負責",
                "judiciary" => "設有最高法院、上訴法院、地方法院",
                "headman" => "總統戈雷(Ismail Omar Guelleh)",
                "fa_minister" => "約瑟夫（Mahmoud Ali Youssouf）",
                "major_political_parties" =>
                    "爭取進步人民聯盟( Rassemblement Populaire pour le Progrès－RPP) 、爭取恢復團結和民主陣線(Front pour la Restauration de l』Unité et de la Démocratie-FRUD) 、全國民主黨（Parti National Démocratique－PND）、社會民主黨（Parti Social Démocrate－PSD) 、改革者聯盟（Union des Partisans de la Réforme－UPR ) 、爭取發展共和同盟（Alliance Républicaine pour la Démocratie-ARD）、爭取民主和正義聯盟（Union pour la Démocratie et la Justice-UDJ）、吉布地發展黨（Parti Djiboutien pour le Développement－PDD） 等政黨",
                "financial_incoming" =>
                    "收入31億8,100萬美元，開支29億1,303萬美元（2021年）；GDP 58.64 億美元，每人國內生產毛額（購買力平價）5,300美元（2021年）",
                "export_value" => "40億3千萬美元（2021年）",
                "import_value" => "34億7千萬美元（2021年）",
                "export_item" => "活體牲畜、咖啡、木炭、脫水蔬菜、鷹嘴豆",
                "import_item" => "食物、飲品、石化產品、肥料、汽車",
                "main_export_countries" =>
                    "沙烏地阿拉伯、印度、中國、埃及、韓國",
                "main_import_countries" =>
                    "中國、阿拉伯聯合大公國、印度、土耳其",
                "export_to" => "約21,934,544美元（2022年）",
                "import_from" => "約1,819美元 (2022年)",
                "foreign_relationship" =>
                    "重視發展與阿拉伯國家和鄰國關係，積極參與區域合作，雖與厄利垂亞有邊界糾紛，主張透過外交途徑解決，注重與法國保持傳統關係，積極配合美國在非洲之角反恐作為",
                "foreign_policy" =>
                    "奉行中立、不結盟和睦鄰友好外交政策，積極參與國際組織，係非洲聯盟（AU）、阿拉伯聯盟（AL）、伊斯蘭合作組織（OIC）及東非政府間發展組織（IGAD）會員",
                "time_range" => "較台灣慢5小時",
                "resident" => "駐沙烏地阿拉伯代表處",
                "national_flag" =>
                    "國旗由藍（象徵海洋、天空及Issa族）、綠（象徵土地及Afar族）兩橫條和白色等腰三角形（象徵和平）組成。三角形中間的紅星代表追求獨立的流血奮鬥及團結。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            31 => [
                "name" => "吉爾吉斯共和國",
                "name_in_en" => "Kyrgyz Republic",
                "short_name" => "吉爾吉斯",
                "short_name_in_en" => "Kyrgyzstan",
                "capital" => "比斯凱克 (Bishkek)",
                "capital_in_en" => "Bishkek",
                "national_day" => "8月31日",
                "join_un_day" => "1992年3月2日",
                "area_size" => "198,500平方公里(海拔1500公尺以上土地占90%)",
                "geographic" =>
                    "位居中亞地區東部，北與哈薩克為界，西鄰烏茲別克，南接塔吉克，東南與中國大陸新疆省接壤。",
                "religion" => "伊斯蘭教(遜尼派)",
                "bilaterial_relations" => "{{--br /--}}",
                "main_bounds" => "索姆(Kyrgyzstani Som；KGS)",
                "exchange_rate" =>
                    "1美元約兌換87.4吉爾吉斯索姆(Kyrgyzstani Som, KGS)(2023年3月)「詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢」",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/1502d79f-cd86-49bb-9e08-d7b37d06d61c.GIF",
                "is_diplomatic" => 0,
                "language" => "吉爾吉斯語、俄語",
                "main_media" =>
                    "「Res Publica」報紙、「Kabar」國家通訊社、Akipress通訊社、比斯凱克晚報、吉爾吉斯言論報；電台: 吉爾吉斯國家廣播電台，用七種語言（吉、俄、英、東干、德、烏兹别克和維吾爾語）廣播，每天播音時間為18小時。",
                "population" => "約700萬人(2022年)",
                "voltage" => "220V",
                "time_difference" => "-2:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/179a4d6d-2208-4103-99f1-b59624ac17c5.jpg",
                "political_system" => "總統制",
                "history_intro" =>
                    "吉爾吉斯於1991年8月31日宣佈脫離蘇聯獨立，同年10月18日簽署「經濟共同體」協議，12月21日宣佈成為「獨立國協」成員國。1992年3月2日獲准加入聯合國，成為國際社會一員。1998年10月20日成為世界貿易組織會員國，係獨立國協國家中首先加入該組織者，顯示吉國獨立以來力行民主政治，推動自由市場經濟政策之方向，已獲西方國家認同與支持。此外，吉國亦係國際貨幣基金、世界銀行、世界衛生組織、歐洲安全合作會議等組織之成員。",
                "parliament" =>
                    "2007年前吉國立法機關（Zhogorku Kengesh）自2007年起改為單一國會制，國會改稱「最高議會」(Supreme Council)，共有90席，選舉採政黨比例代表制。2010年新憲法通過後，國會席次增至120名，並於同年10月10日改選，任期5年。另根據新憲法，總理及內閣閣員由120名國會議員委任。第6屆國會大選於2015年10月4日舉行，若干政黨正式組建多數派執政聯盟，在新議會中擁有80個席位，佔所有120個席位的3分之2，其中包括議會選舉最大贏家、擁有38席、吉國總統阿坦巴耶夫所屬的社會民主黨，擁有18席的吉爾吉斯斯坦黨，擁有13席的議會黨，以及11席祖國黨。擁有40席的共和國-故鄉黨及共同黨則成為議會中的反對派。第7屆國會大選於2020年10月4日舉行，惟10月5日公布之選舉結果備受社會大眾質疑，吉國中選會爰宣布選舉無效並將擇期重新舉行選舉。2021年11月28日吉國舉行國會補選，依修正之選制，其國會90席中之36席採單一選區決選，其餘54席由得票率超過5%之政黨按比例分配，據中選會統計選舉結果如下：「故鄉-吉爾吉斯黨」(Ata-Jurt Kyrgyzstan)獲15席、「信仰黨」(Ishenim)獲12席、「和諧黨」(Yntymak)獲9席、「聯盟黨」( Aliance)獲7席、「統一吉爾吉斯黨」(Butun Kyrgyzstan)獲6席、「信仰之光黨」(Yiman Nuru)獲5席。(Ishenim)獲12席、「和諧黨」(Yntymak)獲9席、「聯盟黨」( Aliance)獲7席、「統一吉爾吉斯黨」(Butun Kyrgyzstan)獲6席、「信仰之光黨」(Yiman Nuru)獲5席。",
                "cabinet" => "Akylbek Japarov擔任部長會議主席(2021年10月12日)",
                "judiciary" =>
                    "憲法法庭、最高法院及最高仲裁法庭共同執行國家司法權，大法官由總統提名，經國會同意後任命，任期10年。",
                "headman" => "札帕羅夫(Sadyr Zhaparov)。",
                "fa_minister" => "Zheenbek Kulubaev",
                "major_political_parties" =>
                    "「故鄉-吉爾吉斯黨」(Ata-Jurt Kyrgyzstan)、「信仰黨」(Ishenim)、「和諧黨」(Yntymak)、「聯盟黨」( Aliance)、「統一吉爾吉斯黨」(Butun Kyrgyzstan)及「信仰之光黨」(Yiman Nuru)。",
                "financial_incoming" =>
                    "國內生產毛額為107億美元(2022年)；平均國民所得1,276美元(2021年)",
                "export_value" => "21.8億美元(2022年)",
                "import_value" => "96.29億美元(2022年)",
                "export_item" =>
                    "貴金屬、礦石、燃料、其他礦產品、紡織品、蔬菜和運輸設備等。",
                "import_item" =>
                    "石油、天然氣、機械設備、化學製品、食品、燃料和其他礦產品、運輸設備、機械、化學製品、食品、酒精和非酒精飲料、醋和煙草、非貴金屬和紡織品。",
                "main_export_countries" =>
                    "瑞士、哈薩克、俄羅斯、烏茲別克、中國、土耳其、土庫曼和阿富汗",
                "main_import_countries" =>
                    "俄羅斯、中國、哈薩克、美國、日本和德國",
                "export_to" => "613萬美元 (2022年)",
                "import_from" => "22萬美元 (2022年)",
                "foreign_relationship" =>
                    "吉國目前已得到一百多個國家承認，且加入聯合國、國際貨幣基金、世界銀行及世界貿易組織等國際組織，對外經濟合作亦打開局面。其外交走向表現出下列幾個特點：對外關係奉行平衡、務實的外交政策，以鄰國、周邊國家為重點。吉國支持獨立國協一體化，同時贊成對獨立國協進行必要改革；把俄羅斯視為自己重要的戰略夥伴和安全依託；視發展與中亞鄰國關係為保障領土完整、國家安全、促進經濟發展的必要條件；重視發展與美國關係，在反恐等國際問題上與美國保持合作關係；與伊斯蘭國家在相互尊重各自發展道路、互不干涉内政基礎上保持友好關係；積極開展與亞太國家之經貿合作。近期吉爾吉斯與塔吉克因領土爭端引起兩國多次邊境武裝衝突，如何避免衝突擴大允為吉國政府優先設法處理之涉外議題。",
                "foreign_policy" =>
                    "吉爾吉斯共和國獨立後，其對外政策之主要目標為：爭取國際廣泛承認，以鞏固其所獲得之獨立與主權；謀求外援與經濟合作以緩和經濟困難並助其經濟改革。經濟方面，吉爾吉斯除以金礦開採為主要經濟支柱，亦輸出勞工至俄羅斯等經濟較發達國家，其中，吉國海外勞工之僑匯總金額平均約合該國GDP的30%。",
                "time_range" => "較台灣慢2小時",
                "resident" => "無駐館，相關業務由駐俄羅斯代表處兼轄",
                "national_flag" => null,
                "area_name" => "亞西地區",
                "area_name_in_en" => "West Asia",
            ],
            32 => [
                "name" => "吉里巴斯共和國",
                "name_in_en" => "Republic of Kiribati",
                "short_name" => "吉里巴斯",
                "short_name_in_en" => "Kiribati",
                "capital" => "塔拉瓦",
                "capital_in_en" => "South Tarawa",
                "national_day" => "7月12日",
                "join_un_day" => "1999年9月14日",
                "area_size" =>
                    "吉里巴斯陸地面積811平方公里，33個大小島嶼分佈於360萬平方公里之海域，東西幅員逾4000餘公里，為世界最大之珊瑚環礁島國，平均高度2公尺。",
                "geographic" =>
                    "吉國為中太平洋島國，包括三組群島，Gilbert Islands、Line Islands及Phoenix Islands，赤道及國際換日線貫穿其間。",
                "religion" =>
                    "天主教與基督教分占人口六成與三成，為兩大主要之宗教。",
                "bilaterial_relations" => null,
                "main_bounds" => "澳幣",
                "exchange_rate" =>
                    "當地使用澳幣，對台幣為1比20.82，對美金為1比0.73（110年8月11日匯率），惟須視匯率浮動情況而定。詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢」。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/b2803343-9557-4e6a-9e49-ff69a5255d4e.gif",
                "is_diplomatic" => 0,
                "language" => "吉里巴斯語及英語",
                "main_media" =>
                    "電視台：無電視台。電台：BPA（AM1440及FM88）與FM89。兩家報紙：Newstar及Uekera兩家報社。雜誌：Islands Business。",
                "population" =>
                    "吉國總人口約117,000人，首都塔拉瓦(Tarawa)人口約5萬餘人。",
                "voltage" => "220-240V（惟供電不穩定，每月多次無預警大停電）。",
                "time_difference" => "+4:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/331a0c0b-e3f4-4874-b5e9-2f222df0c9dd.JPG",
                "political_system" => "總統與內閣混合制",
                "history_intro" =>
                    "吉國之吉爾伯特群島於3千年前即有人類定居，1606年西班牙人彼得費南德茲曾在該群島登陸，為吉國首度與歐洲人接觸。1892年吉爾伯特群島成為英國保護地，1916年成為殖民地，二次世界大戰時曾遭日本佔領，戰後回歸英國統治。1963年英國允許吉里巴斯人加入吉爾伯特群島之行政及諮詢議會，為吉國邁向獨立自治之起源，1977年開始實施自治，1979年7月12日脫離英國獨立，改稱吉里巴斯共和國，獨立迄今已37年。吉國人口組成以密克羅尼西亞人為主，為南島民族之ㄧ支，個性熱情活潑，喜愛音樂、歌唱及舞蹈，傳統歌舞保存甚為完整，舞步模仿軍艦鳥飛翔、覓食、求偶等動作及習性，相當獨特。",
                "parliament" =>
                    "國會採一院制，國會議員共45席，任期4年。國會每年有三會期，每次會期2週。政府施政向國會負責，國會負責審查政府預算及法案，監督政府行政。",
                "cabinet" =>
                    "新總統於宣誓就職後，立即組閣與任命副總統及另1３位內閣部長（均具國會議員身份，總統與副總統可另兼一部會之部長，現任總統兼外交部長，副總統兼婦女青年部長），並於即日起政府開始運作，新舊政府間交接無空窗期。",
                "judiciary" =>
                    "行政部門有檢察總長辦公室，提供政府各部門法律諮詢意見，包括對外簽署之條約、協定及暸解備忘錄等，並負責蒐集證據起訴罪嫌。法院分三級，有地方法院（Magistrate Court，由地方法院法官審理罪刑較輕微之案件）、高等法院（High Court，由首席大法官審理罪刑較重之案件及自地方法院上訴之案件）及巡迴上訴法院（Court of Appeal，由3位澳洲與紐西蘭籍退休大法官組成，每年於8月間來吉審理自高等法院上訴之案件）。",
                "headman" => "馬茂（Taneti Maamau）總統",
                "fa_minister" => "馬茂總統兼任",
                "major_political_parties" =>
                    "吉國主要政黨有四，執政黨為關懷吉里巴斯黨（Tobwaan Kiribati, TKP），在野黨則包括保護吉里巴斯黨(Kamonoan Kiribati Paty)、吉里巴斯優先黨(Kiribati Mao Party)及真理黨（Boutokaan te Koaua, BTK）。",
                "financial_incoming" => null,
                "export_value" => "9,570萬美元(2020年，OECD)",
                "import_value" => "1.57億美元 (2021年, 世界銀行資料)",
                "export_item" => "椰乾、椰油、海藻、魚類相關製品",
                "import_item" =>
                    "食物（以食米為最大宗，其次包括麵粉、奶粉、肉類及糖等）、汽車、油料、民生用品及電器用品",
                "main_export_countries" =>
                    "馬來西亞、斐濟、我國、東帝汶、日本、澳洲、越南、美國、紐西蘭及香港等",
                "main_import_countries" =>
                    "澳洲、斐濟、日本、新加坡、紐西蘭、中國大陸、我國、及韓國等",
                "export_to" => "26,073,000美元 (2021)(我國海關統計)",
                "import_from" => "60,000美元 (2021)(我國海關統計)",
                "foreign_relationship" =>
                    "吉里巴斯由於地理位置偏遠，原十分孤立，僅與太平洋其他島國關係較密切，惟自其加入聯合國後廣結善綠，目前已有56個邦交國。",
                "foreign_policy" =>
                    "吉里巴斯為太平洋之小島國家，對外政策彈性而務實，以國家之生存與利益為依歸。吉國為大英國協、世界衛生組織、太平洋島國論壇及國際貨幣基金等國際組織之成員。1999年加入聯合國。",
                "time_range" => "比台灣快４小時",
                "resident" => null,
                "national_flag" =>
                    "吉里巴斯國旗（吉爾伯特語：buraki ni Kiribati）上半部是紅色的，金黃色軍艦鳥（Fregata minor，吉爾伯特語：te eitei）飛過金色的旭日（otintaai），下半部是藍色的，三個水平波浪狀的白色條紋代表海洋和三個群島（吉爾伯特、鳳凰和萊恩群島）。 17 道太陽光線代表 16 個吉爾伯特群島和巴納巴島（前海洋島）。金黃色軍艦鳥象徵著對海洋的指揮權、自由和舞蹈模式。藍色和白色的波浪帶代表環繞吉里巴斯的太平洋，而太陽則代表吉里巴斯橫跨赤道的位置。該旗幟源自 Arthur Grimble 爵士於 1931 年為吉爾伯特和埃利斯群島英國殖民地的旗幟設計並於 1937 年授予的徽章。",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            33 => [
                "name" => "吐瓦魯國",
                "name_in_en" => "Tuvalu",
                "short_name" => "吐瓦魯國",
                "short_name_in_en" => "Tuvalu",
                "capital" => "富那富提",
                "capital_in_en" => "Funafuti",
                "national_day" => "10 月1日",
                "join_un_day" => "2000年9月",
                "area_size" =>
                    "全國陸地面積僅26平方公里，無山丘河流，最高處不超出海平面四公尺，海岸常遭海水侵蝕，土地有減無增，因此吐國頗注意海岸線之維護，並極度關切溫室效應及海平面升高之問題。",
                "geographic" =>
                    "吐瓦魯（Tuvalu）國位於西南太平洋，南緯5度至10度，東經176度至179度之間，南北縱深約560公里。由9個島礁群組成，其中6個為環狀珊瑚島(Atoll)，9島分佈如貝殼狀，其中Niulakita島只有幾戶人家。氣候屬溼熱海洋性熱帶氣候，長年一般氣溫約介於攝氏27度至33度之間。全年雨量在3,000至3,500毫米之間。每年3月至10月為東北貿易風季節，天氣較涼，11月 至翌年2月為狂風暴雨季節，經常發生颶風或強風，對居民之生命或財產威脅甚大。",
                "religion" => "基督教（公理教派為主）",
                "bilaterial_relations" =>
                    "我國係全球唯一在吐瓦魯設立大使館之國家，其餘與吐瓦魯有邦交國家中，僅15國派大使，且多由駐澳洲、紐西蘭大使或駐斐濟大使兼轄吐瓦魯。我與吐國雙邊關係穩定。",
                "main_bounds" =>
                    "吐國之通行貨幣為澳洲幣。除澳幣外，吐瓦魯政府曾委由澳洲政府印製若干吐國硬幣，其價值與澳幣等值，惟現流通極少。",
                "exchange_rate" =>
                    "約為1澳幣兌換20元新台幣，惟須視匯率浮動情況而定。詳細匯率資訊建議查詢當日臺灣銀行網站。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/a766d8d8-7232-4526-9fbe-a3b5297cba3e.gif",
                "is_diplomatic" => 1,
                "language" =>
                    "本地主要語言為吐瓦魯語，與我若干原住民(如魯凱族)所用部分語彙接近，與東加語及薩摩亞語可相互溝通，英語為官方語言，通用於全國。居住於北方Nui島之居民則普遍使用吉里巴斯（Kiribati）語。",
                "main_media" =>
                    "吐國國家廣播公司及吐瓦魯電視臺。另曾有私人發行Tuvalu Paradise電子報，目前暫停運作。",
                "population" =>
                    "約11,000人(2022年)，另約有海外僑民7000人，全國人口之分佈約三分之一居住於首府富那富提島。",
                "voltage" =>
                    "電壓為 240 伏特，一般家電 220 伏特規格者亦可使用。插座為八字形，與紐西蘭、澳洲及斐濟相同。",
                "time_difference" => "+4:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/85ae097c-cf27-4d0c-9551-b707b47d7981.JPG",
                "political_system" =>
                    "吐國係君主立憲國，奉英國現任元首查爾斯國王三世(King Charles III)為國家元首，並以總督代行國王職權。另仿行英式責任內閣制，由國會議員相互推選產生總理，總理負責任命內閣部長，組成政府，實際掌握國政運作。國會為一院制，由選舉產生之16位國會議員組成，並互選產生議長一人。吐國並無正式政黨組織，國會議員間自行聯合組成政團，多數居執政派，少數居在野派。",
                "history_intro" =>
                    "吐瓦魯國於1568年為西班牙探險家發現，但未開發利用。1819年復為英國商船隊發現，並被命名為艾利斯群島（Ellice Islands）。英國於1877年在斐濟設立西太平洋高專公署兼理艾島事務。1892年艾島與其北方之吉爾伯特群島（Gilbert Islands）同時成為英國保護地，1916年改為殖民地。艾利斯群島經由公民投票於1976年與吉里巴斯分離，嗣於1978年10月1獨立建國，取名吐瓦魯（TUVALU），意為「八島聯合」（註:當時Niulakita島並無人煙）。",
                "parliament" => "一院制，每4年改選一次",
                "cabinet" =>
                    "總理由16位國會議員互選產生，下設8部，由總理自議員中選任部長，另設檢察總長1人，為政府之法律顧問。",
                "judiciary" =>
                    "司法獨立，法院分高等法院、地方法院及島嶼法院（Island Court）。",
                "headman" =>
                    "總督Reverend Tofiga Vaevalu Falani總理Kausea Natano",
                "fa_minister" => "Simon Kofe",
                "major_political_parties" =>
                    "國內無政黨組織，惟國會議員各組成團體。",
                "financial_incoming" =>
                    "全國除家庭式手工藝品生產外，無任何工業生產，所有日常用品高度依賴進口，政府收入高度依賴外國援助，平均國民所得約5,291美元(2021年)(資料來源：世界銀行)",
                "export_value" => "2021年約1.8萬澳元（吐國財政部統計局資料）",
                "import_value" => "2021年約149萬澳元（吐國財政部統計局資料）",
                "export_item" => "魚產品、金屬、手工藝品等",
                "import_item" => "礦物、食品、機具、農產品等",
                "main_export_countries" => "斐濟",
                "main_import_countries" => "斐濟、澳洲、紐西蘭",
                "export_to" =>
                    "2021年我國出口至吐瓦魯國貿易額為456,569美元，吐瓦魯國出口至我國貿易額為3,600美元，兩國貿易總額約460,000美元。(我經濟部國際貿易局資料)",
                "import_from" => "同上",
                "foreign_relationship" =>
                    "吐瓦魯與我國、美國、澳洲等100餘國具邦交",
                "foreign_policy" =>
                    "吐國近年以氣候變遷議題聞名，致力提升全球世人對於氣候變遷之關注。",
                "time_range" => "較台灣快4小時",
                "resident" =>
                    "我國與吐瓦魯於1979年9月19日建交，1998年12月在吐京設立代辦級大使館，至2004年4月1日始派遣常駐專使。",
                "national_flag" => null,
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            34 => [
                "name" => "哈薩克共和國",
                "name_in_en" => "Republic of Kazakhstan",
                "short_name" => "哈薩克",
                "short_name_in_en" => "Kazakhstan",
                "capital" => "阿斯塔納(Astana)",
                "capital_in_en" => "Astana",
                "national_day" => "12月16日",
                "join_un_day" => "1992年3月2日",
                "area_size" => "2,727,300平方公里",
                "geographic" =>
                    "哈薩克為內陸國家，國土橫跨亞、歐兩洲，東西寬3,000公里，南北長1,600公里，主要位於中亞北部，北、西與俄羅斯為鄰，東南與中國接壤，南接吉爾吉斯、烏茲別克，西南臨土庫曼及裏海。哈薩克為全球第9大國，面積是臺灣的75倍大。哈國全境10%為高地，西部為沙漠，西南、北、中部海拔200~300公尺，東南山區海拔高達5,000~6,000公尺。",
                "religion" => "伊斯蘭教、東正教",
                "bilaterial_relations" => "{{--br /--}}",
                "main_bounds" => "堅戈(Kazak Tenge；KZT)",
                "exchange_rate" =>
                    "1美元約兌換458.26堅戈(Kazak Tenge, KZT)(2023年3月)「詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢」",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/1158e0e1-fd72-4c83-b9b4-b46e4e0d118a.jpg",
                "is_diplomatic" => 0,
                "language" => "哈薩克語、俄語",
                "main_media" =>
                    "主要報紙：Kazakhstanskaja Pravda、Panorama ；主要廣播電視台：哈薩克斯坦國家廣播電視公司（國家控股）下屬的哈薩克電台、「哈巴爾」廣播電視公司（國家控股）下屬的「哈巴爾」電視台；主要通訊社：哈薩克斯坦通訊社，是哈國唯一的國家通訊社，前身為前塔斯社哈薩克分社，有80年歷史。",
                "population" => "約1,974萬人（2022年）",
                "voltage" => "220V",
                "time_difference" => "-2:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/customfile/sites/mapurllink/eabea3f7-e1d3-44bb-8437-3e2baed03b2a.jpg",
                "political_system" => "總統制",
                "history_intro" =>
                    "西元6世紀至8世紀中亞遊牧民族建有突厥汗國，8至12世紀建有欽察聯盟及哈拉汗國等國；11世紀至13世紀初遭塞爾柱人、契丹人及蒙古人入侵，13世紀初蒙古帝國建立，成吉思汗將西伯利亞及中亞地區賜予長子术赤，建立金帳汗國，15世紀末金帳汗國分裂，其中一部分成立哈薩克汗國。16世紀初形成哈薩克部族，該族又分成分為老、中、小玉茲(ZHUZ，部落)3個汗國； 18世紀，中、小玉茲哈薩克人自願加入俄羅斯；19世紀60年代，老玉茲哈薩克也併入俄國，於是哈薩克全境併入俄羅斯帝國版圖。19世紀末、20世紀初在俄國共產黨協助下， 1920年成立吉爾吉斯蘇維埃社會主義自治共和國，加入蘇維埃社會主義共和國聯盟，1925年4月19日改稱哈薩克蘇維埃社會主義自治共和國，1936年12月5日定名為哈薩克蘇維埃社會主義共和國，並成為前蘇聯加盟共和國。1991年前蘇聯開始解體，哈薩克於該年12月16日宣布獨立，同月21日納札爾巴耶夫總統 (Nursultan Nazarbayev)宣布該國成為「獨立國家國協」(Commonwealth of Independent States)一員，並於1992年3月2日獲准加入聯合國。",
                "parliament" =>
                    '國會分為上(Senate)、下(Majilis)兩院：一、上院有50名議員，根據2022年6月修憲結果，其中10名由總統任命，5名由哈薩克人民大會推薦任命，其餘席次則由全國17州及3個直轄市(Astana, Almaty及 Shymkent)以兩輪投票方式各選出2位代表組成，任期6年，每3年改選半數議員，現任上院議長為阿辛巴耶夫 (Maulen Ashimbaev，2020年5月4日上任)。二、根據2022年6月修憲結果，下院席次共98席，其選舉採取混和制：69席由政黨比例產生，29席由單一選區多數決產生。政黨票之最低當選門檻為總票數的5%。哈國於2023年1月19日解散2021年1月選出之第七屆國會，並於2023年3月19日舉行重選，根據其中選會計票結果：(一)政黨票：Amanat黨獲得53.9%之支持率居冠，與光明道路民主黨(Democratic Party of Kazakhstan, Ak Zhol)，社會民主黨(Nationwide Social Democratic Party)，人民民主愛國黨(Auyl)、共和黨(Respublica)及人哈薩克人民黨(People\'s Party of Kazakhstan)等五個政黨依比例分配國會席次。二、單一選區：Amanat黨籍候選人當選23人，無黨籍候選人當選6人。',
                "cabinet" =>
                    "現任總理為斯邁伊洛夫(Alikhan Smailov)(2023年4月3日就任)。",
                "judiciary" =>
                    "最高司法委員會，由12名法官、律師及法學專家學者組成。",
                "headman" =>
                    "總統托卡耶夫（Kassym-Jomart Tokayev，2022年11月26日上任）。",
                "fa_minister" => "Murat Nurtleu(2023年4月3日就任並兼副總理)",
                "major_political_parties" =>
                    "「阿瑪納特黨」(Amanat)、「光明道路民主黨」(Democratic Party of Kazakhstan, Ak Zhol)、「哈薩克人民黨」(People’s Party of Kazakhstan)、「綠黨」(Bayta)、「人民民主愛國黨」(Auyl)及「共和黨」(Respublica)等。",
                "financial_incoming" =>
                    "國內生產毛額2,243億美元(2022年)；平均國民所得8,820美元(2021年)",
                "export_value" => "844億美元（2022年）",
                "import_value" => "500億美元（2022年）",
                "export_item" =>
                    "原油、天然氣、貴金屬、銅、小麥穀物、棉花、含鐵金屬、石油、天然氣、煤、化學品、機械、穀物、羊毛、肉類",
                "import_item" => "機械、電器設備、金屬製品、食品",
                "main_export_countries" =>
                    "俄羅斯、中國、烏茲別克、德國、義大利",
                "main_import_countries" => "俄羅斯、中國、烏克蘭、德國、美國",
                "export_to" => "8,895萬美元(2022年)",
                "import_from" => "4,643萬美元(2022年)",
                "foreign_relationship" =>
                    "一、哈國奉行全方位、平衡務實的多元外交，積極擴大其在地區和國際事務中的影響力。俄羅斯、中國、中亞各國、美國、歐盟以及伊斯蘭國家是哈薩克的外交重點。同時，哈國也在逐步擴大與亞太及拉美國家的交往。二、哈薩克視俄羅斯為外交最優先方向，兩國關係緊密，雙方除簽署多項合作協議外，並且在整合獨立國協成員國、解決區域性衝突以及對外政策上均持相近立場。三、1996年哈薩克與中國、俄羅斯、吉爾吉斯、塔吉克共同組成「上海五國會晤機制」(現稱上海合作組織)。2006年哈薩克倡議簽署的「中亞無核武器區條約」於2009年3月正式生效。2015年1月1日哈國、俄國、白俄羅斯、吉爾吉斯、亞美尼亞組成「歐亞經濟聯盟」(EEU)，在經濟一體化之架構下，經濟、能源、運輸之聯繫進一步加強，在油氣資源開發、原子能及礦產資源開發利用的合作不斷深化。四、哈薩克約有3,000家俄羅斯企業。俄羅斯大型企業如盧克石油、俄氣GAZPROM等都活躍在哈國能源及其他產業。近年來，哈薩克與歐盟經貿關係快速發展，歐盟已成為哈薩克主要貿易夥伴及投資國，佔哈國對外貿易近4成，2020年3月哈國與歐盟簽署「加強合作夥伴協定」（EPCA）。哈薩克是除OPEC組織國家外，僅次於俄羅斯及挪威對歐盟主要能源供應國。",
                "foreign_policy" =>
                    "實行多元外交政策，與俄羅斯、中國大陸等鄰國保持穩定關係，與美國及歐洲亦維持良好關係。",
                "time_range" => "較台灣慢2小時",
                "resident" => "無駐館，相關業務由駐俄羅斯代表處兼轄",
                "national_flag" => null,
                "area_name" => "亞西地區",
                "area_name_in_en" => "West Asia",
            ],
            35 => [
                "name" => "哥倫比亞共和國",
                "name_in_en" => "Republic of Colombia",
                "short_name" => "哥倫比亞",
                "short_name_in_en" => "Colombia",
                "capital" => "波哥大（Bogotá）市",
                "capital_in_en" => "Bogotá",
                "national_day" => "7月20日",
                "join_un_day" => "1945年11月5日",
                "area_size" => "1,141,748 平方公里",
                "geographic" =>
                    "位於南美洲北部濱臨加勒比海及太平洋，北鄰巴拿馬、東接委內瑞拉、西接厄瓜多與秘魯、東南與巴西接壤。",
                "religion" =>
                    "主要宗教為天主教，另基督(新)教近年來信眾穩定成長。",
                "bilaterial_relations" => null,
                "main_bounds" => "哥倫比亞披索(peso colombiano，縮寫:COP)",
                "exchange_rate" => "1美元兌4.627.27披索 (2023年3月31日)",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/4c056180-9309-472c-89fd-d419e930956d.GIF",
                "is_diplomatic" => 0,
                "language" => "官方語言為西班牙文",
                "main_media" =>
                    "哥國主要電視台有Caracol、RCN、City TV等頻道；主要報紙有「時報」(El Tiempo)，「觀察家報」(El Espectador)，「共和報」(La República)，「投資組合報」(El Portafolio)，「新世紀報」(El Nuevo Siglo)等日報，週刊有SEMANA, DINERO, 15 MINUTOS等雜誌。主流廣播電台有Caracol Radio、W Radio及BluRadio等。各大城市亦有當地重要媒體，如第二大城麥德林(Medellín)之「哥倫比亞人」(El Colombiano，亦為全國性重要電子報)、第三大城卡利(Cali)的「西方日報」(Diario de Occidente)及「國家報」(El País)、西部海岸地區之環球報(El Universal) 及「Heraldo」(前鋒報)等。哥國主流大報隨目前電子平臺閱聽趨勢亦紛紛積極經營電子版，該等平台併新起電子媒體如「脈動電子報」(Pulzo)、「岸邊電子報」(Las 2 Orillas)、「新聞片」(El Nodo)、「視野電子報」(Patallazo)及「國會電子報」(MiMagzin) 等，均在網路占有重要點閱率。",
                "population" =>
                    "約5,160萬人(2022年)平均餘命：74.89歲(男)及78.69歲(女)(2022年)",
                "voltage" => "110 伏特",
                "time_difference" => "-13:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/ac1513b5-5ff0-495c-8dc1-f189c0ea1a1a.jpg",
                "political_system" =>
                    "1、國體：共和國。 2、政體：總統制，三權分立。總統由人民直選，任期4年。 3、內閣：內閣共18部，部長均由總統任命。 4、國會：為參議院及眾議院兩院制，2022年至2026年任期(2022年7月20日至2026年7月19日)之國會於2022年3月13日進行改選。參議院共有108席，眾議院為188席，任期4年，連選得連任；兩院席次均包括與哥國政府簽署和平協議之由前游擊隊「哥倫比亞武裝革命軍」(FARC)轉型為政黨「共同黨」(Comunes)之5名保障名額(僅實施2018年至2022年及2022年至2026年兩屆國會任期)；另參加總統選舉第二高票落選之正、副總統候選人依法分別成為參、眾議員。5、司法制度：司法機關分憲法法院、最高法院、最高行政法院、特別管轄事務法院(包括和平協議特別法院與原住民特別法院等、司法紀律委員會、高等法官委員會及總檢察署。。",
                "history_intro" =>
                    "1810年7月20日宣布脫離西班牙獨立，成立大哥倫比亞共和國，領土尚包括現今之委內瑞拉、厄瓜多及巴拿馬，嗣前述各國相繼獨立，直至1903年11月3日巴拿馬宣布獨立，哥國現有版圖始告確定。哥國「保守黨」及「自由黨」自1958年協議每4年輪流執政，至1974年取消協議，恢復政黨自由競爭。哥國地處中美洲及南美洲大陸樞紐，地緣政治重要且積極參與第三世界及不結盟集團活動，曾於2010年至2012年擔任聯合國安理會非常任理事國。",
                "parliament" => "兩院制，分參議院及眾議院",
                "cabinet" => "內閣共16部，部長均由總統任命",
                "judiciary" =>
                    "分憲法法院、最高法院、最高行政法院、特別管轄事務法院(包括和平協議特別法院與原住民特別法院等、司法紀律委員會、高等法官委員會及總檢察署。",
                "headman" => "總統貝德羅(Gustavo Petro)(2022年8月7日起)",
                "fa_minister" => "雷瓦(Álvaro Leyva Durán)(2022年8月7日起)",
                "major_political_parties" =>
                    "主要有左派新任總統貝德羅領導之「歷史協議聯盟」(Pacto Histórico)，包括「哥倫比亞人道黨」(Colombia Humana)、「替代民主極端黨」(Polo Democrático Alternativo)、前游擊隊「哥倫比亞武裝革命軍」(FARC)轉型之「共同黨」(Comunes)；中間偏左「自由黨」（Partido Liberal Colombiano, PLC）及「綠色聯盟黨」(Partido Alianza Verde)；極右及中間偏右包括「中央民主黨」(Centro Democrático)、「激進改革黨」（Partido Cambio Radical, PCR）、「保守黨」（Partido Conservador Colombiano, PCC）、「團結黨」（Partido Social de Unidad Nacional, La U）、「絕對革新獨立運動黨」(Movimiento Independiente de Renovación)及「哥倫比亞公平自由黨」(Colombia Justa Libre)等；另有新成立中間路線之「新自由黨」(Nuevo Liberalismo)及其他小黨。",
                "financial_incoming" =>
                    "歲入583.5億美元，歲出844.3億美元，財政赤字260.8億美元(2021)",
                "export_value" => "571億美元 (2022)",
                "import_value" => "714億美元 (2022)",
                "export_item" =>
                    "原油(26.8%)、煤(10.3%)、咖啡(7.5%)、黃金(5.2%)、煤焦炭(3.1%)、汽油(2.6%)、香蕉(2.2%)、花卉(1.8%)、生質柴油(1.5%)、聚氯乙烯(1.1%)、棕櫚油(0.9%)、玫瑰(0.9%)、聚丙烯(0.8%)(2022)",
                "import_item" =>
                    "汽車(8.8%)、醫藥製劑(6.7%)、通訊設備(6.4%)、原油(5.9%)、鋼鐵(5.1%)、有機化學品(5%)、穀物(4.5%)、工業設備(3.9%)、電子設備(4%)、塑膠材料(3.4%)、紡織纖維紗線(3.1%)、辦公室設備(2.8%)、化學品原料(2.5%)(2022)",
                "main_export_countries" =>
                    "美國(30.1%)、巴拿馬(11.1%)、荷蘭(4.7%)、巴西(4.6%)、印度(4.3%)、智利(4.1%)、土耳其(4%)、中國大陸(3.8%)、厄瓜多(3.7%)、墨西哥(3.4%)(2022)",
                "main_import_countries" =>
                    "美國(25%)、中國大陸(23.19%)、巴西(7%)、墨西哥(5.5%)、法國(3.3%)、德國(3.1%)、阿根廷(2.1%)、印度(2%)、西班牙(1.9%)日本(1.7%) (2022)",
                "export_to" => "3億6,318萬美元(2022)",
                "import_from" => "1億4,957萬美元(2022)",
                "foreign_relationship" =>
                    "前任杜傑政府與鄰國委內瑞拉馬杜洛(Nicolás Maduro)政權於2019年2月斷交，承認該國反對勢力領袖瓜伊多(Juan Guaidó)為臨時總統。現任貝德羅總統上台後與委內瑞拉復交，已相互任命駐使恢復大使館運作，2023年1月1日全面恢復邊界陸路通行，3月初恢復波哥大至委京固定往返航班(現僅1家航空公司)。另為推動與境內現存游擊隊「民族解放陣線」(ELN)之和談，與古巴改善關係中。哥國另與尼加拉瓜有海疆（San Andrés及Providencia等群島及其附近海域）爭議。另與秘魯間因貝德羅總統聲援秘國前總統Pedro Castillo產生摩擦，兩國關係現降至代辦層級。除此之外，與世界各國大致維持良好關係。貝德羅政府宣示擬領導推動南美洲整合，後續外交政策動向值得觀察。",
                "foreign_policy" =>
                    "屬民主集團，獨立自主並積極參與不結盟集團活動。",
                "time_range" => "較台灣慢13小時",
                "resident" => "我國在哥倫比亞首都波哥大市設有代表處",
                "national_flag" =>
                    "哥倫比亞國旗由黃、紅、藍三色的以2:1:1之比例組成。黃色象徵大地的豐饒、紅色象徵革命先烈的鮮血、藍色象徵藍天、河流以及大西洋及太平洋。",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            36 => [
                "name" => "哥斯大黎加共和國",
                "name_in_en" => "Republic of Costa Rica",
                "short_name" => "哥斯大黎加",
                "short_name_in_en" => "Costa Rica",
                "capital" => "聖荷西",
                "capital_in_en" => "San José",
                "national_day" => "9月15日",
                "join_un_day" => "1945.11.2",
                "area_size" => "51,100 平方公里",
                "geographic" =>
                    "哥斯大黎加共和國位於中美洲南端，地理位置約在北緯 8 度至 12 度間，東瀕加勒比海，南鄰巴拿馬，西濱太平洋，北與尼加拉瓜接壤，地勢由西北向東南傾斜",
                "religion" =>
                    "天主教（70.5%）、基督教（13.8%）、無宗教（11.3%）、其他（4.3%)",
                "bilaterial_relations" => null,
                "main_bounds" => "科隆（Colón）",
                "exchange_rate" => "1美元可兌換669科隆(Colon)(2022年4月)",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/bcfdb491-940c-4e53-8485-1a96f102f99a.GIF",
                "is_diplomatic" => 0,
                "language" => "西班牙語，主要觀光地區及各大飯店英語均可通用。",
                "main_media" =>
                    "【電視媒體】影響較大的當地電視媒體為私營的電視6台和7台，以及國營電視11台。民眾可付費接收近百個電視頻道，多為歐美國家節目。【廣播媒體】當地最具影響力的廣播電台是monumental和columbia兩家綜合性電台。【報紙媒體】全國綜合性日報《國家報》(La Nación)為哥斯大黎加第一大報，日發行量超過10萬份，內容涵蓋政治、經濟、社會各個方面。《共和國報》(La República)為第二大報，日發行量約8萬份，內容略偏重於經濟金融和民眾生活。此外還有《自由新聞報》(Prensa Libre)、《號外報》(Diario Extra)和《日報》(Al Día)等報刊。",
                "population" => "約523萬人（2021年）",
                "voltage" =>
                    "電壓規格為 110 伏特、50 HZ，與台灣地區電壓規格相似。",
                "time_difference" => "-14:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/d81f724a-f77e-4319-bfad-a36f07c0e7cc.jpg",
                "political_system" => "總統制、三權分立",
                "history_intro" =>
                    "1502年9月18日哥倫布第4次赴新大陸時，途遇颶風，船被吹至卡里阿利（Cariari）灣，登陸探測發現當地原住民族似甚富有，乃命名該地為哥斯大黎加(Costa Rica)，意為「富庶海岸」。1564年西班牙人於卡塔哥(Cartago)等地建城，哥斯大黎加正式成為西班牙殖民地。1821年9月15日哥斯大黎加宣布獨立，從此脫離西班牙統治。1822年成為墨西哥帝國之一員，1823年帝國瓦解後，又參加中美洲聯邦，1838年退出聯邦，經過政治上一段混亂時期後，至1848年8月30日正式成立哥斯大黎加共和國。1948年因主要政黨對總統大選結果之爭議相持不下而爆發內戰，經費蓋雷斯總統(José Figueres Ferrer)敉平後，1950年成立第2共和並修改憲法，廢除軍隊，1983年9月15日宣布為中立國。",
                "parliament" =>
                    "國會採一院制，議員直接民選，任期為4年，不得連任，惟中斷8年後可再參選。共有國會議員57席，現任議長為Rodrigo Arias Sánchez。2022年2月6舉行4年一次的總統與國會議員選舉，國會議員選舉結果，執政黨公民行動黨(Partido Acción Ciudadana, PAC)全軍覆沒，僅6個在野政黨在國會取得席次，包括：自由黨（Partido de Liberación Nacional, PLN）19席；社會民主進步黨（Partido Progreso Social Democrático）10席；基督社會聯合黨(Unidad Social Cristiana, USC) 9席；新共和黨（Partido Nueva República ）7 席；進步自由黨（Partido Liberal Progresista ）6席；大政線（Frente Amplio）6席。",
                "cabinet" => "總統之下設副總統2名，部長18名，均由總統任命。",
                "judiciary" =>
                    "全國最高司法機關為最高法院，編制22名大法官，均由國會選舉產生，任期最短8年。地方法院之法官則由最高法院任命。此外，哥國亦設勞工法院及選舉法院，惟後者屬第四權之「選舉權」。",
                "headman" =>
                    "元首：查維斯總統(Rodrigo Chaves) 於2022年5月8日就職，任期4年至2026年5月7日。",
                "fa_minister" => "提諾谷(Arnoldo André Tinoco)",
                "major_political_parties" =>
                    "主要政黨：執政黨為「社會民主進步黨」（Progreso Social Democrático, PSD），主要在野黨分別為自由黨(Partido Liberación Nacional, PLN)、基督社會聯合黨(Unidad Social Cristiana, USC) 、新共和黨（Partido Nueva República ）、進步自由黨（Partido Liberal Progresista ）、大政線（Frente Amplio）。",
                "financial_incoming" =>
                    "國內生產毛額(GDP) 639億 5,000 萬美元(2021年)平均國民所得：2928.27美元(2021年)外債： 424億3,600萬美元(2021年)失業率：15%(2021年)通貨膨脹率：3.3%(2021年)",
                "export_value" => "120億8,800萬美元(2021年)",
                "import_value" => "222億5,577萬美元(2021年)",
                "export_item" =>
                    "食品和藥品製造用機械、濃縮飲料、鳳梨、醬汁、電纜、棕櫚油(2021年)",
                "import_item" => "塑膠產品、金屬、紡織品、車輛和食品(2021年)",
                "main_export_countries" =>
                    "美國、荷蘭、比利時、瓜地馬拉、薩爾瓦多、宏都拉斯、尼加拉瓜(2021年)",
                "main_import_countries" =>
                    "美國、中國、墨西哥、瓜地馬拉、日本(2021年)",
                "export_to" => "9,800萬美元（2021年）",
                "import_from" => "1億1,736萬美元（2021年）",
                "foreign_relationship" =>
                    "除少數非洲及阿拉伯國家外，與世界各國多有外交關係。",
                "foreign_policy" =>
                    "對外政策路線以捍衛民主、人權、自由等普世價值為主軸，積極協助全球永續發展、參與國際多邊組織，並擴大與中美洲區域內、加勒比海及亞太區域間之交往。",
                "time_range" => "較臺北慢14小時",
                "resident" => "無",
                "national_flag" =>
                    "啟用於1906年11月27日，為一面由藍-白-紅-白-藍五條橫條組成的旗幟，比例為1:1:2:1:1。藍色代表天空、機會、理想主義和堅忍；紅色代表熱忱和為獨立所流的血；白色代表和平、智慧和快樂。左方有哥斯大黎加國徽為政府用。",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            37 => [
                "name" => "喀麥隆共和國",
                "name_in_en" => "Republic of Cameroon",
                "short_name" => "喀麥隆",
                "short_name_in_en" => "Cameroon",
                "capital" => "首都：雅溫德(Yaounde)。",
                "capital_in_en" => "Yaoundé",
                "national_day" => "5月 20日",
                "join_un_day" => "1960年9月20日",
                "area_size" =>
                    "喀麥隆位於非洲中部與西部交界，面積約為475,442平方公里（約我國13倍大），瀕幾內亞灣，西與奈及利亞為界，東北與查德接壤，東與中非共和國相鄰，南與剛果、加彭以及赤道幾內亞領土相接。境內多山及森林，天然資源豐富，盛產木材、可可、咖啡及鋁礦等。",
                "geographic" =>
                    "喀麥隆位於非洲中部與西部交界，面積約為475,442平方公里（約我國13倍大），瀕幾內亞灣，西與奈及利亞為界，東北與查德接壤，東與中非共和國相鄰，南與剛果、加彭以及赤道幾內亞領土相接。境內多山及森林，天然資源豐富，盛產木材、可可、咖啡及鋁礦等。人口約1980萬人。主要城市為Douala. Yaounde（首都）.Bamenda. Bafoussam. Garoua及Maroua等。",
                "religion" => "基督教、天主教、伊斯蘭教",
                "bilaterial_relations" => null,
                "main_bounds" =>
                    "Central African Franc (CFA Franc ，中非法郎)， ISO代號 XAF。",
                "exchange_rate" =>
                    "詳細匯率資訊建議至臺灣銀行(https://rate.bot.com.tw/xrt?Lang=zh-TW )或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/26760758-cdf9-494d-93ed-a339fa620705.GIF",
                "is_diplomatic" => 0,
                "language" =>
                    "官方語言為法語及英語（英語僅通用於西北及西南兩地區）。",
                "main_media" =>
                    "Le Messager民營報、 Cameroon Tribune國營日報、Mutations民營法語日報 、Cameroon Radio Television喀麥隆國家廣播電視台 、Canal 2 民營電視台",
                "population" =>
                    "約27,198,628人（2021年)。主要城市為Douala，Yaounde（首都），Bamenda 及 Bafoussam 等。",
                "voltage" => "240伏特",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/e43365b9-b968-4483-aa1c-a0b2108041db.jpg",
                "political_system" => "多黨總統共和制",
                "history_intro" =>
                    "原屬德國殖民地，二次大戰後分為東、西喀二部分，法國託管東喀，英國託管西喀。1960年1月1日法屬東喀宣布正式獨立，定名為喀麥隆共和國。1961年英屬西喀舉行公民投票，結果西喀南部贊成與喀麥隆共和國合併，遂於同年10月1日共組喀麥隆聯邦共和國（Federal Republic of Cameroon），西喀北部則與奈及利亞合併。1972年5月21日公民複決投票贊成改為喀麥隆聯合共和國（United Republic of Cameroon），6月2日公布施行憲法。1975年6月2日採行新憲法，設總理職，向總統負責。1984年1月25日改名為喀麥隆共和國 (Republic of Cameroon)。",
                "parliament" =>
                    "兩院國會制，任期均為5年。參議院 (Senate)自2013年起改由各鄉鎮市議會議員與大區議員組成之選舉人團互選，共有100席，其中70席民選(喀國10大區(Regiones)，每大區選出7名參議員)，另30席為總統任命。眾議院(National Assembly)共180席，由人民普選產生。",
                "cabinet" =>
                    "總理為行政首長，由總統任命，向總統負責。Joseph Dion Nguté自2019年1月接任總理迄今。",
                "judiciary" => "最高法院及高等法院。",
                "headman" => "畢亞(Paul Biya)總統",
                "fa_minister" => "Lejeune MBELLA MBELLA",
                "major_political_parties" =>
                    "喀麥隆人民民主聯盟黨（Rassemblement Democratique du Peuple Camerounais, RDPC）、 社會民主陣線（Social Democratic Front, SDF）、民主暨進步國家聯盟（Union Nationale pour la Democratie et le Progres, UNDP）、喀麥隆民主聯盟（Cameroonian Democratic Union, UDC）、保衛共和國運動黨（Movement for the Defense of the Republic, MDR）。",
                "financial_incoming" => null,
                "export_value" => "36.9億美元（2020）",
                "import_value" => "67.3億美元(2020)",
                "export_item" => "原油、可可、加工木材、天然氣、原木",
                "import_item" => "報廢船舶、特種船舶、米、包裝藥品、麥",
                "main_export_countries" => "中國、荷蘭、美國、印度、義大利",
                "main_import_countries" =>
                    "中國、奈及利亞、法國、印度、阿拉伯聯合大公國",
                "export_to" => "49,732,864美元（2022）",
                "import_from" => "8,032,866美元（2022）",
                "foreign_relationship" =>
                    "喀麥隆自1960年獨立以來一直與法國維持密切關係，法商投資係喀麥隆石油及非石油產業的主要外資來源。惟喀國近年來持續向中國大陸靠攏並維持密切友好關係，引起法國不悅。喀國與鄰國奈及利亞之Bakassi半島領土糾紛已於2006年解決，兩國亦因面對共同敵人Boko Haram恐怖組織而關係明顯改善。喀國與赤道幾內亞因工作移民問題偶有緊張關係情事發生。",
                "foreign_policy" =>
                    "採低調外交政策，支持不介入第三國事務原則，增加對低度開發國家援助，積極參與聯合國事務，支持維和、法治、環保及第三世界經濟發展。",
                "time_range" => "較台灣慢7小時",
                "resident" => "駐奈及利亞代表處兼轄",
                "national_flag" => null,
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            38 => [
                "name" => "喬治亞",
                "name_in_en" => "Georgia",
                "short_name" => "喬治亞",
                "short_name_in_en" => "Georgia",
                "capital" => "提比里斯",
                "capital_in_en" => "Tbilisi",
                "national_day" => "5月26日",
                "join_un_day" => "1992年7月",
                "area_size" => "69,700平方公里",
                "geographic" =>
                    "位於高加索西南隅，西濱黑海，東鄰亞塞拜然及亞美尼亞，南與土耳其接壤。",
                "religion" => "東正教占80%以上，回教約占10%。",
                "bilaterial_relations" => null,
                "main_bounds" => "拉里(Georgian Lari; GEL)",
                "exchange_rate" =>
                    "1美元約2.57拉里（Georgian Lari, GEL）（2023年3月）「詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢」",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/0e925ccf-d8a4-4957-a725-14b9e4185710.GIF",
                "is_diplomatic" => 0,
                "language" => "喬治亞語",
                "main_media" =>
                    "報紙：《喬治亞共和國報》、《喬治亞時報》；廣播電台：喬治亞國家廣播電台;通訊社：國際新聞通訊社（Interpressnews）、高加索通訊社（Caucasus-press）",
                "population" => "約372萬人(2022年)",
                "voltage" => "220V",
                "time_difference" => "-5:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/6f9ef4fb-a98f-4301-b065-fc27780b7389.JPG",
                "political_system" => "雙首長代議民主制",
                "history_intro" =>
                    "喬治亞地區文化發展極早，可追溯自青銅器時代，當時各部落業已形成，青銅器之製作技藝出現後，不同部落間方開始正式交流。公元前65年遭羅馬帝國併吞，西元337年起信奉基督教，基督教之傳入使古喬治亞文字消逝無蹤，而由希臘文及塞瑞克文（Syriac）所混合而成之新文字替代，在此以後300年間捲入拜占庭東羅馬帝國與波斯帝國之鬥爭中。其後曾歷經阿拉伯與亞美尼亞人之統治，1220年蒙古人大舉入侵高加索，1386年至1403年間受帖木兒侵襲，喬治亞經濟文化遭嚴重破壞，從此一蹶不振。1453年土耳其人攻陷君士坦丁堡，與西方世界之聯繫自此中斷近300年。1783年俄國勢力進入該區，俄國保護喬治亞之完整並擁有其宗主權。1804年至1864年間，喬治亞諸國相繼被帝俄兼併。1921年2、3月間，喬治亞蘇維埃政權建立，並於1936年併入前蘇聯，改稱為喬治亞蘇維埃社會主義共和國。1991年4月9日，宣布脫離前蘇聯獨立，更改國名為喬治亞共和國。1993年12月加入「獨立國協」。1996年4月喬治亞共和國更名為喬治亞（Georgia）。2003年「玫瑰革命」後，喬治亞積極發展與歐美關係，爭取加入北約及歐盟，導致與俄國關係逐漸交惡，2008年8月因阿布哈茲和南奧塞梯獨立問題，爆發俄喬戰爭，兩國斷交至今，喬治亞退出獨立國協。",
                "parliament" =>
                    "根據憲法，喬國會為一院制，150個席次，任期4年。執政黨與反對黨2020年3月就國會選舉新制達成共識：150個席次中，120席依政黨比例制、30席依單一選區制選出，政黨比例門檻為1%（原制為73席單一選區制、政黨比例門檻為3%），另組成政府之門檻為40%之席次。2020年10月31日喬治亞舉行第10屆國會改選，執政黨「喬治亞之夢」黨取得壓倒性勝利，共獲得90個席次，在150個國會席次中單獨過半，包括執政黨在內共有9個政黨取得國會席次。現任議長為Shalva Papuashvili(2021年12月29日就任)。",
                "cabinet" =>
                    "喬國總理及其內閣係由總統提名，並送經國會同意後任命之。現任總理Irakli Garibashvili係於2021年2月23日就職。",
                "judiciary" => "有憲法法院、最高法院、檢察總署與監察院。",
                "headman" => "第五任總統Salome Zourabishvili（2018年12月就任）",
                "fa_minister" => "Ilia Darchiashvili（2022年4月4日就任）",
                "major_political_parties" =>
                    "喬治亞之夢黨（Georgian Dream）、統一民族運動（United National Movement）、歐洲喬治亞-自由運動黨（Movement for Liberty - European Georgia）、「Lelo for Georgia」黨、策略建立者黨（Strategy Aghmashenebeli）、愛國者聯盟（Alliance of Patriots of Georgia）、「Girchi」黨。",
                "financial_incoming" =>
                    "國內生產毛額：161億6千萬美元（2021年）；平均國民所得：4,361美元（2021年）",
                "export_value" => "約42億4000萬美元（2021年）",
                "import_value" => "約100億美元（2021年）",
                "export_item" => "汽車、金屬、合金、酒、藥物",
                "import_item" => "石油、汽車、金屬、藥物、天然氣",
                "main_export_countries" =>
                    "亞塞拜然、俄羅斯、亞美尼亞、保加利亞、烏克蘭",
                "main_import_countries" =>
                    "土耳其、俄羅斯、中國、亞塞拜然、德國、烏克蘭",
                "export_to" => "約1,616萬美元（2022年）",
                "import_from" => "約1153萬美元（2021年）",
                "foreign_relationship" =>
                    "（一）喬治亞與170個國家建立外交關係。（二）喬國在獨立之初，即因俄國軍事介入，而與俄關係惡化，2008年8月26日俄羅斯承認喬境內之分離地區阿布哈茲共和國及南奧塞梯共和國，導致喬國於2008年9月2日與俄國斷交至今。2012年10月喬治亞議會選舉後「喬治亞之夢」聯盟重新組閣，主張改善對俄關係，兩國關係在新政府上台後已大為緩和。（三）1998年喬治亞與烏克蘭等國形成之古阿姆集團組織（原稱為GUUAM，由環黑海地區之喬治亞、烏克蘭、烏茲別克、亞塞拜然及摩爾多瓦等5國所組成，嗣烏茲別克於2005年正式宣佈退出，現稱為GUAM），協助喬國退出獨立國協後，仍可在GUAM組織在獨立國協中發揮若干區域合作功能。（四）2021年5月喬治亞、烏克蘭及摩爾多瓦等3國外長共同簽署「與歐盟整合合作備忘錄」，盼在10年內實現成為歐盟成員國之目標。",
                "foreign_policy" =>
                    "喬治亞外交基本政策是恢復國家統一和領土完整、加入北約及歐盟、加強地區合作同時兼顧發展與亞洲國家關係。喬國重視與鄰近周邊國家發展友好合作關係，並以參與國際組織及區域性組織為外交重點。",
                "time_range" => "提比里斯：較台灣慢5小時",
                "resident" => "無駐館，相關業務由駐俄羅斯代表處兼轄。",
                "national_flag" => null,
                "area_name" => "亞西地區",
                "area_name_in_en" => "West Asia",
            ],
            39 => [
                "name" => "土庫曼共和國",
                "name_in_en" => "Republic of Turkmenistan",
                "short_name" => "土庫曼",
                "short_name_in_en" => "Turkmenistan",
                "capital" => "阿什哈巴特（Ashgabat）",
                "capital_in_en" => "Ashgabat",
                "national_day" => "9月27日",
                "join_un_day" => "1992年3月2日",
                "area_size" => "491,210平方公里",
                "geographic" =>
                    "位居中亞地區西南邊，北與烏茲別克、哈薩克為界，南接伊朗、阿富汗，西臨裏海",
                "religion" => "伊斯蘭教（遜尼派）",
                "bilaterial_relations" => "{{--br /--}}",
                "main_bounds" => "新馬納特(Turkmenistani Manat；TMT)",
                "exchange_rate" =>
                    "1美元約兌換3.495新馬納特（Turkmenistani Manat, TMT）（2023年3月）「詳細匯率資訊建議至臺灣銀行（http://rate.bot.com.tw/xrt?Lang=zh-TW）或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢」",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/58975f6b-0162-4aba-b9a2-d466969d2ced.GIF",
                "is_diplomatic" => 0,
                "language" => "土庫曼語",
                "main_media" => null,
                "population" => "約620萬人（2022年）",
                "voltage" => "220V",
                "time_difference" => "-3:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/6ab7521a-1369-446b-97f1-578bdd77a107.jpg",
                "political_system" => "總統制",
                "history_intro" =>
                    "15世紀時，土庫曼民族已具基本雛型。19世紀60年代以後，俄國逐漸入侵土庫曼，1924年土庫曼共產黨人在蘇聯紅軍之支援下，推翻原統治者並驅逐英國勢力，建立土庫曼蘇維埃社會主義共和國，成為蘇聯加盟共和國之一。蘇聯於1991年8月政變後開始解體時，土庫曼即於當年10月27日經全國公民投票宣布獨立。土國因之前長期依賴蘇聯政經援助，以致獨立後對俄羅斯之政經依賴仍深。",
                "parliament" =>
                    "土國總統身兼執政黨主席，集行政、立法權力於一身。國會主要工作是通過、修改和解釋憲法與法律、監督法律之執行、確定總統及國會選舉時間、通過內閣工作綱領、批准國家預算等。蘇聯解體後，土國於1992年依憲法成立兩個國會，分為「Halk Maslahaty」（上院；意為人民議會）及「Mejlis」（下院）。上院於1992年至2008年間運作，成員2,507人，當然成員包括土庫曼總統、下院議員、總檢察長、內閣、政黨領袖、青年團體、工會、婦女聯合會、各省市市長等。2008年修憲後廢除上院，並將下院議員席次從65席增加至125席。下院議員由選舉產生，任期5年。2013年12月土庫曼舉行第5屆國會大選，係獨立以來首次多黨制國會選舉，2012年8月成立之「工業家及企業家黨」進入國會。2017年10月9日根據土庫曼憲法重新組成上院「Halk Maslahaty」。2020年9月25日視訊召開上院會議，通過總統提出之修憲案，規定兩院制議會將由181名代表組成，其中上院共設56個席位，48席透過選舉方式產生，8席由總統任命，上院有權批准下院通過的法案。下院由125名代表組成，有權審議、監督法案執行、審議批准政府方案、預算等，此修憲案為土國邁向立法代議制的新里程碑。2021年舉行上院選舉，並由時任總統之古爾班古力・別爾德穆哈默多夫（Gurbanguly Berdimuhamedov）當選議長。",
                "cabinet" => "由總統直接領導",
                "judiciary" => "「最高法庭」為土國最高司法機關，由總統任命",
                "headman" =>
                    "謝爾達爾・別爾德穆哈默多夫（Serdar Berdimuhamedov）",
                "fa_minister" =>
                    "由內閣副總理拉希德．梅列多夫（Rashid Meredov）兼任",
                "major_political_parties" =>
                    "「土庫曼民主黨」(Democratic Party of Turkmenistan) 前身為共產黨，係土國最大政黨。",
                "financial_incoming" =>
                    "國內生產毛額452.31億美元（2021年）；平均國民所得6,740美元（2021年）",
                "export_value" =>
                    "71.20億美元（資料來源：WTO - World Trade Statistical Review 2021）",
                "import_value" =>
                    "32.25億美元（資料來源：WTO - World Trade Statistical Review 2021）",
                "export_item" => "天然氣、石油、棉花、紡織品",
                "import_item" => "食品、機械設備、輕工業產品、冶金、化學品",
                "main_export_countries" =>
                    "烏克蘭、俄羅斯、土耳其、德國、美國、烏茲別克",
                "main_import_countries" =>
                    "伊朗、土耳其、塔吉克、亞塞拜然、俄羅斯、哈薩克、英國",
                "export_to" => "6萬美元（2022年）",
                "import_from" => "1,105美元（2022年）",
                "foreign_relationship" =>
                    "土國奉行永久中立外交政策。1995年12月12日，聯合國通過決議賦予土國永久中立國地位。另為表現出該國之主權獨立，土國無視美國之禁令與伊朗建立緊密之合作關係，在裏海問題上亦不受俄國所左右。",
                "foreign_policy" =>
                    "在外交上與俄羅斯、伊朗維持著良好關係，藉由俄國協助以確保土國之安全，經由伊朗出口土國石油、天然氣等貨物賺取外匯。土庫曼積極參與國際事務，加入聯合國、歐洲安全組織、經濟合作組織、伊斯蘭合作組織、國際貨幣基金、世界銀行、亞洲開發銀行等47個國家與地區組織，並為獨立國家國協副會員國（associate state）。",
                "time_range" => "較台灣慢3小時",
                "resident" => "無駐館，相關業務由駐俄羅斯代表處兼轄。",
                "national_flag" => null,
                "area_name" => "亞西地區",
                "area_name_in_en" => "West Asia",
            ],
            40 => [
                "name" => "土耳其共和國",
                "name_in_en" => "Republic of Türkiye",
                "short_name" => "土耳其",
                "short_name_in_en" => "Türkiye",
                "capital" => "安卡拉(Ankara)",
                "capital_in_en" => "Ankara",
                "national_day" => "10月 29日",
                "join_un_day" => "1945年10月24日",
                "area_size" => "780,043平方公里",
                "geographic" =>
                    "位居歐、亞大陸交界，三面環海，東北與高加索諸國接壤，西北與東歐相接，東部及東南部與中東為鄰。境內亞洲部分稱為安那托利亞(Anatolia)，約佔總面積97%；歐洲部分稱為色雷斯(Thrace)。土國大部分屬高原地形，地殼持續變動，地震頻仍。",
                "religion" => "大多數為伊斯蘭教，亦有基督教。",
                "bilaterial_relations" => null,
                "main_bounds" => "土耳其里拉(Turkish Lira；TL)",
                "exchange_rate" =>
                    'US$1 = TL₺19.02(土耳其里拉, 2023年3月20日)，浮動匯率。※ 美元兌換里拉詳細匯率資訊建議參考土耳其中央銀行(The Central Bank of the Republic of Türkiye)網站(https://www.tcmb.gov.tr/wps/wcm/connect/tr/tcmb+tr/main+page+site+area/bugun)。※ 美元兌換新臺幣詳細匯率資訊建議至臺灣銀行(https://rate.bot.com.tw/xrt?Lang=zh- TW)或兆豐銀行(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。',
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/11edb0da-ce25-4a3a-ac8c-a1fd447bac6c.GIF",
                "is_diplomatic" => 0,
                "language" => "土耳其語",
                "main_media" =>
                    "土耳其國家通訊社(Anadolu Ajansı)、民族報 (Milliyet)、土耳其報 (Türkiye)、自由日報 (Hürriyet)、晨報(Sabah)、英文自由日報(Hürriyet Daily News)",
                "population" => "8,528萬人(2022年12月底)",
                "voltage" => "220 伏特",
                "time_difference" => "-5:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/customfile/sites/mapurllink/043d9415-09ee-4ab9-b839-8b1bf784dfc2.jpg",
                "political_system" => "國體：共和國；政體：總統制",
                "history_intro" =>
                    "11世紀初突厥人進入安那托利亞高原，塞爾柱突厥並於12世紀末在此建立王國，至14世紀安那托利亞高原完全土耳其化，回教取代基督教，第一次世界大戰奧圖曼帝國崩潰後，凱末爾將軍領導土耳其民族主義運動，抵抗英、法、希臘等國軍隊使土國免於被瓜分。1920年3月19日廢除帝制，1923年10月29日建立土耳其共和國。",
                "parliament" =>
                    "一院制；現有國會議員581名﹐由人民直選﹐任期5年。目前國會中各主要政黨分配席次如下：正義及發展黨(AKP)286席位；共和人民黨(CHP)134席；人民民主黨(HDP)56席；民族行動黨(MHP)48席；良黨(İYİ Parti)37席。https://www.tbmm.gov.tr/develop/owa/milletvekillerimiz_sd.dagilim (土耳其國會網站：參考日期2022年8月)",
                "cabinet" =>
                    "土耳其政府自2018年7月9日正式改為總統制，目前正義發展黨為執政黨。內閣閣員由總統任命，外交部長為Mevlüt Çavuşoğlu",
                "judiciary" =>
                    "初審法院（分司法、軍事、行政三類）、高等法院（上訴法院）及終審法院",
                "headman" => "總統Recep Tayyip Erdoğan",
                "fa_minister" => "Mevlüt Çavuşoğlu",
                "major_political_parties" =>
                    "正義發展黨 (AKP)、共和人民黨 (CHP)、民族行動黨（MHP）、人民民主黨（HDP）、良黨(İYİ Parti)",
                "financial_incoming" =>
                    "財政支出3兆9,678億里拉，財政收入4兆3,997億里拉(2022年)",
                "export_value" => "2,542億美元(2022年)",
                "import_value" => "2,540億美元(2022年)",
                "export_item" =>
                    "汽車暨零件、機器設備、鋼鐵、電子機器及設備、寶石及貴金屬製品、成衣、塑膠及其製品、鋼鐵製品、礦物燃料、紡織",
                "import_item" =>
                    "原油、機械設備、鋼鐵製品、電子機器及設備、塑膠及其製品、汽車暨零件、有機化學產品、寶石及貴金屬製品、醫藥品、鋁製品",
                "main_export_countries" =>
                    "德國、美國、英國、義大利、伊拉克、西班牙、法國、荷蘭、以色列、俄羅斯",
                "main_import_countries" =>
                    "中國、俄羅斯、德國、美國、義大利、法國、印度、南韓",
                "export_to" => "15.75億美元(2022年)",
                "import_from" => "3.94億美元 (2022年)",
                "foreign_relationship" =>
                    "土國為北約會員國，與西方國家關係密切，蘇聯解體後，土耳其在中亞及高加索五個突厥語系國家中之影響力遽增。土國與希臘、亞美尼亞分別因賽普勒斯族裔糾紛及第一次大戰時之種族屠殺問題而關係不佳，另外土耳其亦於敘利亞內戰中支持反對派勢力，而與該國政府關係失和。2021年底里拉劇貶，土國經濟遭受重大衝擊，積極尋求與海灣國家改善關係，吸引投資。",
                "foreign_policy" =>
                    "土耳其外交政策強調「進取和人道主義」(Enterprising and Humanitarian Foreign Policy) 價值觀，具體表現於:(一)推展區域關係:1.與歐盟關係: 土耳其為歐洲的一部分，也是歐洲理事會(Council of Europe)、歐洲安全與合作組織(OSCE)在內的歐洲組織的成員，加入歐洲聯盟為土耳其外交政策重點之一。2.亞洲新倡議政策: 2019年土耳其宣布「亞洲新倡議」(Asia Anew Initiative)，為與亞太地區國家發展關係規劃新願景。(二)多邊關係:土耳其是唯一同時擔任聯合國、歐洲安全組織和伊斯蘭合作組織的調解相關友好/聯絡小組共同主席的國家，也是G20集團、伊斯蘭合作組織(OIC)、突厥國家組織(Organization od Turkic State)、發展中八國集團(D-8)等組織的成員國，總統艾爾多安近來不斷主張「世界大於五」改革聯合國安理會，希望能在聯合國五個常任理事國外，發揮土國在國際議題上的影響力，另外土國也成立國際知名的「安塔利亞外交論壇倡議」(Antalya Diplomacy Forum)就全球和區域問題交換意見。(三)人道議題: 土國目前接納近400萬名敘利亞難民，也積極調停烏克蘭與俄羅斯的衝突，促成烏克蘭能順利出口糧食的黑海協議，解決世界的糧食危機，此外亦支持援助巴勒斯坦，對其運送糧食及生活必需品。",
                "time_range" => "較台灣慢5小時",
                "resident" =>
                    "我國設有駐土耳其代表處，外貿協會在伊斯坦堡設有伊斯坦堡台灣貿易中心。",
                "national_flag" =>
                    "基底為紅色，中間偏左為有一白色新月及一顆五角星的旗幟",
                "area_name" => "亞西地區",
                "area_name_in_en" => "West Asia",
            ],
            41 => [
                "name" => "坦尚尼亞聯合共和國",
                "name_in_en" => "United Republic of Tanzania",
                "short_name" => "坦尚尼亞",
                "short_name_in_en" => "Tanzania",
                "capital" => "杜篤馬 (Dodoma)",
                "capital_in_en" => "Dodoma",
                "national_day" => "4月 26日",
                "join_un_day" => "1961年12月14日",
                "area_size" => "947,300平方公里",
                "geographic" =>
                    "非洲東岸，東臨印度洋；介於肯亞與莫三比克之間，與蒲隆地、剛果民主共和國、肯亞、馬拉威、莫三比克、盧安達、烏干達與尚比亞等國接攘。",
                "religion" =>
                    "基督教( 63.1%)、伊斯蘭教( 34.1%)、傳統信仰(1.1％)",
                "bilaterial_relations" => null,
                "main_bounds" => "坦幣(T. Shilling)(TZS)",
                "exchange_rate" => "1 USD≒2,296 TZS (2021/11)",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/75093be3-5805-4850-a13c-66ad0995d79c.GIF",
                "is_diplomatic" => 0,
                "language" => "英語及史瓦希里(Swahili)語 (官方語言)",
                "main_media" => "坦國電台電視及網路媒體眾",
                "population" => "約6,549萬人(2022年)",
                "voltage" => "230伏特",
                "time_difference" => "-5:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/b8bd8c40-8083-4c2f-8462-ef3475f12711.jpg",
                "political_system" => "共和",
                "history_intro" =>
                    "坦尚尼亞是古人類發源地之一。西元前就與阿拉伯、波斯和印度等地有貿易往來。7–8世紀，阿拉伯人和波斯人大批遷入。阿拉伯人於10世紀末建立伊斯蘭王國。坦尚尼亞國名起源於坦噶尼喀（Tanganyika）內陸區及桑吉巴（Zangibar）濱海區英文前三字母的綜合。1886年，坦噶尼喀（Tanganyika）內陸劃歸德國勢力範圍。1917年英軍占領坦噶尼喀全境。1920年，坦成爲英國委任統治地。1961年宣告獨立，一年後成立坦噶尼喀共和國。桑吉巴（Zanzibar）濱海區於1890年淪爲英國保護地。1963年6月獲得自治，同年12月宣告獨立，成爲蘇丹王統治的君主立憲國。1964年桑人民推翻蘇丹王的封建統治，建立桑吉巴人民共和國。1964年4月26日，坦噶尼喀和桑吉巴組成聯合共和國，同年10月29日改國名爲坦尚尼亞聯合共和國。",
                "parliament" =>
                    "國民大會（Bunge）共393席，其中264席由人民直選產生，113席為婦女名額，5席由桑吉巴議會（Zanzibar House of Representatives）推舉之代表擔任，10席由總統直接任命，1席由司法部長任命，任期5年。國民大會所制定之法律效力僅及於坦噶尼喀內陸，桑吉巴濱海區本身亦設有獨立之立法機構，共有82席，任期5年。",
                "cabinet" => "總理及內閣成員均由總統自國民大會成員中任命。",
                "judiciary" => "設有高等法院與上訴法院。",
                "headman" => "Samia Suluhu HASSAN(女)",
                "fa_minister" => "Liberata MULAMULA(女)",
                "major_political_parties" =>
                    "革命黨（Revolutionary Party, CCM），改革及透明聯盟(Alliance for Change and Transparency, ACT)、民主改革聯盟（Alliance for Democratic Change, ADC，，公民聯合陣線（Civic United Front, CUF）等",
                "financial_incoming" =>
                    "2022年政府財政收入150.7億美元，支出180億美元。",
                "export_value" => "72.23億美元（2022）",
                "import_value" => "18.66億美元（2022）",
                "export_item" => "黃金、咖啡、腰果、製成品、棉花",
                "import_item" =>
                    "小麥、民生消費品、機器及運輸設備、工業用原料、原油",
                "main_export_countries" =>
                    "印度、阿拉伯聯合大公國、中國大陸、瑞士、盧安達、肯亞、越南",
                "main_import_countries" => "中國大陸、印度、阿拉伯聯合大公國",
                "export_to" => "2,957萬美元（2022）",
                "import_from" => "2,040萬美元（2022）",
                "foreign_relationship" =>
                    "John Pombe Joseph Magufuli總統自2015年11月5日上任以來，積極參與國際社會，與115個國家建有外交關係，美國是其主要投資和援助國之一，並免除了坦美雙邊債務，2015年美國對其援助預算總額達12億美元。英國是坦最大投資來源國、主要貿易夥伴和援助國，每年援助額約8000萬美元。坦尚尼亞與肯亞、烏干達、衣索比亞等周邊國家關係密切，積極參與調解肯亞危機及辛巴威危機。此外尚重視發展與中國、印度、日本等亞洲國家的關係。坦尚尼亞為東非共同體（East African Community, EAC）成員，境內約有25萬名難民，數量高居非洲各國之冠，主要來自蒲隆地及剛果民主共和國。與馬拉威的邊界爭端（馬拉威湖「Lake Malawi或Lake Nyasa」及宋威河「Songwe River」）未決。",
                "foreign_policy" => "獨立自主、AU會員國",
                "time_range" => "較台灣慢5小時",
                "resident" => "由駐南非代表處兼理。",
                "national_flag" =>
                    "坦尚尼亞國旗是一面由藍、綠兩個直角三角形和中間金黃、黑、金黃斜條組成的旗幟。其含意為：黑色代表人民，綠色代表土地，藍色代表海洋，金色代表礦產。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            42 => [
                "name" => "埃及阿拉伯共和國",
                "name_in_en" => "Arab Republic of Egypt",
                "short_name" => "埃及",
                "short_name_in_en" => "Egypt",
                "capital" => "開羅",
                "capital_in_en" => "Cairo",
                "national_day" => "7月23日。",
                "join_un_day" => "1945年10月24日。",
                "area_size" => "1,001,450 平方公里",
                "geographic" =>
                    "北接地中海，自西自東分別與利比亞、蘇丹和加薩走廊接壤。",
                "religion" =>
                    "穆斯林（主要是遜尼派）90％，基督教（多數科普特東正教，其他基督徒包括亞美尼亞使徒，天主教，馬龍派，東正教和英國聖公會）10％",
                "bilaterial_relations" => null,
                "main_bounds" => "Egypt Pounds(EGP)",
                "exchange_rate" =>
                    "採浮動匯率，目前1埃鎊約折合0.064美元。(詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。)",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/acf35efd-443b-4ee8-b41b-034cef05dec5.GIF",
                "is_diplomatic" => 0,
                "language" =>
                    "官方語言阿拉伯語，英語和法語在受過高等知識教育者間可通行。",
                "main_media" =>
                    "主要報章雜誌：Al Ahram Daily News(金字塔報)、Al Akhbar (消息報)、AI Goumhouria(共和國報)、Rose Al Youssef (魯茲·優素福)周刊等。主要英文報紙：The Egyptian Gazette(埃及公報)。主要民營報刊：اليوم السابع(Youm7，七日報)、المصري اليوم(Al-Masry Al-Youm，今日埃及人報)等。主要入口網站：youm7.com等。主要通訊社：وكالة أنباء الشرق الأوسط‎(MENA，中東通訊社)",
                "population" => "107,770,000人。（2022年）",
                "voltage" => "220 V",
                "time_difference" => "-6:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/89c49e28-21f8-4dc4-8d65-be16e09d2417.jpg",
                "political_system" => "共和民主制",
                "history_intro" =>
                    "在西元前3200年出現一統一王朝後，接下來三千年埃及被不同王朝統治，最後一個本土王朝出現在西元前341年，之後陸續被外來包括波斯人、希臘人、羅馬人和拜占庭人輪番統治。在西元七世紀時，阿拉伯人傳入伊斯蘭教，並在未來六個世紀統治埃及。1517年由奧斯曼土耳其人征服埃及後繼續執政。英國在1882年控制埃及政府，但埃及對奧斯曼帝國的名義上效忠持續到1914年。1952年埃及自英國手中正式獨立。",
                "parliament" =>
                    "二院制，其中參議院任期5年，設300個席位，200名由選舉產生，100名由總統任命。眾議院596個席位，其中448席位來自獨立參候選人，120席位透過政黨名單選舉產生，另由總統任命28席。",
                "cabinet" => "內閣	共33位部長，目前總理為Mostafa Madbouly。",
                "judiciary" =>
                    "1. 上級法院：(1)最高憲法法院（由法院院長和10名法官組成）作為仲裁的最終法院，審理下級法院間在管轄權和裁決的法律及衝突是否合憲; (2)最高法院(由法庭院長和550名法官組成)，由5名輪值法官組成小組審理案件，是民事和刑事案件的最高上訴機構；(3)最高行政法院由法院院長組成5名法官小組委員會審案。2. 法官選拔和任期：根據2014年憲法，由最高司法委員會選出並由總統任命。所有法官和司法官為終生職。3. 下級法院：上訴法院一審法院;具有限管轄權的家事法院（成立於2004年)。",
                "headman" =>
                    "Abdel Fattah Saeed Hussein Khalil el-Sisi(2014年6月8日執政迄今)。",
                "fa_minister" => "Sameh Hassan Shoukry(自2014年6月17日迄今)",
                "major_political_parties" =>
                    "目前合法登記政黨約19個，並已嚴禁以宗教或階級名義籌組政黨。主要政黨：自由埃及人黨（Free Egyptians Party）、國家未來黨（Nation’s Future Party）、新華夫托黨（New Wafd Party）、保衛家園黨（Protectors of the Homeland Party）、共和人民黨（Republican People’s Party）、大會黨（Conference Party）、光明黨（Al-Nour Party）等。",
                "financial_incoming" =>
                    "收入：833.3億美元；支出：1,096億美元。(2020/21會計年度)",
                "export_value" => "452 億美元。（2021年）",
                "import_value" => "767.9億美元。（2021年）",
                "export_item" =>
                    "原油和石油產品，水果和蔬菜，棉花，紡織品，金屬製品，化學品，加工食品",
                "import_item" => "機械設備，食品，化學品，木製品，燃料",
                "main_export_countries" =>
                    "美國、沙烏地阿拉伯、土耳其、義大利、阿拉伯聯合大公國",
                "main_import_countries" => "歐盟、中國大陸、阿拉伯國家、美國",
                "export_to" => "4億8,600萬美元。（2022年）",
                "import_from" => "1億5,200萬美元。（2022年）",
                "foreign_relationship" =>
                    "主張在相互尊重和不干涉内政的基礎上與世界各國發展友好合作關係，積極改善並加强與阿拉伯鄰國間的關係，致力與美、俄等大國維持良好關係。",
                "foreign_policy" =>
                    "長期以來奉行獨立自主、和平、友好和不結盟對外政策。",
                "time_range" => "比台灣慢6小時(夏令時間比台灣慢5小時)",
                "resident" =>
                    "我國在埃及並未設處，目前相關業務由臺灣駐約旦代表處兼轄。外貿協會在埃及首都設立開羅臺灣貿易中心 （Taiwan Trade Center, Cairo），相關資訊請參閱貿協網站，網址：http://taipei.taiwantrade.com.tw/flash/big/unitList.jsp?lang=zh_TW#AFRICA",
                "national_flag" =>
                    "埃及國旗由紅、白、黑三顏色組成，自1984年10月4日啟用，紅色代表革命和鮮血，白色代表光明的未來，黑色代表受外國壓抑的長久歷史，其中中央的國徽稱為「薩拉丁之鷹」，鷹爪下方的文字則是用阿拉伯文寫的「埃及阿拉伯共和國」",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            43 => [
                "name" => "塔吉克共和國",
                "name_in_en" => "Republic of Tajikistan",
                "short_name" => "塔吉克",
                "short_name_in_en" => "Tajikistan",
                "capital" => "杜尚貝",
                "capital_in_en" => "Dushanbe",
                "national_day" => "9月9日",
                "join_un_day" => "1992年3月2日",
                "area_size" => "142,326平方公里",
                "geographic" =>
                    "居中亞地區之東南部，西北與烏茲別克為鄰(邊界1,332.9公里)，東北臨吉爾吉斯共和國(邊界987公里)，南邊與阿富汗為界(邊界1,344.15公里)，東與中國大陸接壤(邊界494.95公里)，為一內陸國家。境內多山，約占國土面積的93%，有「高山國」之稱。",
                "religion" => "伊斯蘭教",
                "bilaterial_relations" => "{{--br /--}}",
                "main_bounds" => "索莫尼（Somoni;TJS） (2000年10月啟用)",
                "exchange_rate" =>
                    "1美元約兌換10.9塔吉克索莫尼（Tajikistani Somoni, TJS）（2023年3月）「詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢」",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/2f109432-4072-4524-9366-327f3467e85c.GIF",
                "is_diplomatic" => 0,
                "language" => "塔吉克語，俄語亦通行。",
                "main_media" =>
                    "「Avesta」通訊社、「Khovar」通訊社、「ASIA PLUS」通訊社、「共和報」(Jumhuriyat)及「塔吉克電視台」(TVT tj)",
                "population" => "約950萬人(2022年)",
                "voltage" => "220V",
                "time_difference" => "-3:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/81762009-ff15-4c49-b21f-efd521a533aa.jpg",
                "political_system" => "總統制",
                "history_intro" =>
                    "西元前1000年左右，塔國境內已有大夏國出現。西元前6世紀至4世紀先後受伊朗阿契美尼德王朝及馬其頓亞歷山大統治。西元前3世紀起，阿姆河( Amu Darya ) 流域之巴克特利亞人 ( Bactria ) 及蘇格迪亞納( Sogdiana )人推翻馬其頓人之統治，在巴克特利亞建立屬於巴克特利亞人之王國。稍後蘇格迪亞納人及其他中亞地區均加入巴克特利亞王國，另成立貴霜王國，其後遭受突厥人之統治，西元8世紀為回教阿拉伯人統治。西元9至10世紀，該區曾建立塔赫里王朝和薩曼王朝，塔吉克民族於焉形成。10至13世紀，建有伽色尼王朝、哈拉汗王朝和花剌子模王國。13世紀至16世紀，蒙古帝國的韃靼人入侵，建立帖木兒王朝。16世紀起蒙古衰退，該地建有布哈拉王國及其他小封邑。西元1868年，塔吉克北部併入俄國，南部布哈拉汗國則為俄國之屬國。20世紀初，塔吉克共產黨在俄國之扶持下成立。1918年塔吉克北部地區建立蘇維埃政權，加入土庫曼自治共和國。1924年10月14日成立塔吉克自治共和國，至1929年10月16日升格為塔吉克共和國。同年12月5日加入蘇聯。1991年9月9日宣布獨立，同年12月21日宣布加入獨立國協。1992年3月2日加入聯合國，成為國際社會成員。",
                "parliament" =>
                    "兩院制，上院共33席，其中8席由總統指派，25席由間接選舉產生；下院共63席，其中41席由全國41個選區選舉產生。另外22席由選舉中得票率超過5%的黨派推選，並按照得票多少分配議席，上下兩院任期並均為5年。上院主要工作是確定、修改、撤銷國家行政區別；根據總統提議選舉和罷免憲法法院院長、副院長，最高法院院長、副院長、總檢察長、副總檢察長等。下院的主要工作是：組建選舉及全民公投委員會；就法律草案提請全民公決。上一次國會上下院選舉分別於2020年4月17日及2020年3月17日。",
                "cabinet" => "總理Kokhir Rasulzoda (2013年11月23日上任)",
                "judiciary" => "司法部、最高法院、憲法法院、高等經濟法院",
                "headman" =>
                    "總統：拉赫蒙（Emomali Rakhmon，1994年11月6日上任，已經連任4次，本屆任期至2027年。）",
                "fa_minister" => "Sirojiddin Muhriddin",
                "major_political_parties" =>
                    "1999年8月初塔吉克司法部正式解除對反對派政黨活動禁令，同年9月26日塔吉克以全民公投方式通過的憲法修正案包括允許建立宗教性質政黨内容。目前主要有7個政黨，包含人民民主黨、共產黨、民主黨、社會主義黨、社會民主黨、經濟改革黨及農業黨等。",
                "financial_incoming" =>
                    "國內生產毛額113億美元 (2022年)；平均國民所得1,608美元(2021年) 。",
                "export_value" => "52億美元億美元（2022年）",
                "import_value" => "21億美元（（2022年）",
                "export_item" => "電力、鋁、棉花、水果、紡織品",
                "import_item" => "石化產品、機械設備、食品",
                "main_export_countries" =>
                    "土耳其、中國大陸、伊朗、阿富汗、哈薩克、俄羅斯",
                "main_import_countries" =>
                    "中國大陸、俄羅斯、哈薩克、土耳其、伊朗",
                "export_to" => "28萬美元 (2022年)",
                "import_from" => "43萬美元美元(2022年)",
                "foreign_relationship" =>
                    "奉行「門戶開放」和大國平衡的外交政策，積極發展與中亞國家、俄羅斯、中國、美國、歐盟、伊朗及阿拉伯國家關係，並爭取外援。近期塔吉克與吉爾吉斯因領土爭端引起兩國多次邊境武裝衝突，如何避免衝突擴大允為塔國政府優先設法處理之涉外議題。",
                "foreign_policy" =>
                    "塔吉克獨立後，於1991年簽署「阿拉木圖宣言」(Alma-Ata Protocols)，正式成為「獨立國家國協」一員，並於1992年3月2日加入聯合國，逐步邁入國際社會。除聯合國及獨立國協，塔國迄今已加入歐安組織(OSCE)、上合組織(SCO)、經合組織(OECD)、伊斯蘭合作組織(OIC)等30多個國際和地區性組織。截至2021年9月，塔吉克共和國已經與181個國家建交，包括178個聯合國會員國，以及梵蒂岡、巴勒斯坦和馬爾他騎士團。",
                "time_range" => "較台灣慢3小時",
                "resident" =>
                    "我國在塔吉克未設館處，該國由我駐俄羅斯代表處兼轄。",
                "national_flag" => null,
                "area_name" => "亞西地區",
                "area_name_in_en" => "West Asia",
            ],
            44 => [
                "name" => "塞內加爾共和國",
                "name_in_en" => "Republic of Senegal",
                "short_name" => "塞內加爾",
                "short_name_in_en" => "Senegal",
                "capital" => "達卡(Dakar)",
                "capital_in_en" => "Dakar",
                "national_day" => "4月4日",
                "join_un_day" => "1960年9月28日",
                "area_size" => "196,722平方公里",
                "geographic" =>
                    "西部瀕大西洋，北部鄰茅利塔尼亞，東部鄰接馬利，西南部包圍甘比亞、並與幾內亞比索為界",
                "religion" => "伊斯蘭教、天主教、傳統信仰",
                "bilaterial_relations" => null,
                "main_bounds" => "西非法郎（XOF）",
                "exchange_rate" =>
                    "1美元兌換593.08西非法郎（2022年3月）。詳細匯率資訊建議至臺灣銀行（https://rate.bot.com.tw/xrt?Lang=zh-TW）或兆豐商銀（https://www.megabank.com.tw/personal/foreign-service/forex）網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/ef188bec-db3a-4b28-aa20-770f824be68e.GIF",
                "is_diplomatic" => 0,
                "language" => "官方語言為法語，當地方言以Wolof語及Pular語為主",
                "main_media" =>
                    "廣播：RTS(國營)、Sud FM(民營)。報紙：Le Soleil(國營日報)、Sud Quotidien(民營日報)、Le Quotidien(民營日報)。電視台：RTS(國營)、TFM(民營)。",
                "population" => "1,570萬人(2020年)",
                "voltage" => "220伏特",
                "time_difference" => "-8:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/1b58cb0d-87c6-4fa5-8704-19df4ab4c0ae.JPG",
                "political_system" => "共和、總統制",
                "history_intro" =>
                    "法屬塞內加爾和法屬蘇丹殖民地於1959年合併成為馬利聯邦，1960年6月獲得獨立，8月20日塞內加爾退出聯邦，成為獨立共和國，桑果(Léopold Sédar Senghor)成為首任總統，其領導之社會黨長期一黨執政。1974年實行多黨制。1980年12月31日桑果總統引退，由總統狄伍夫(Abdou Diouf)接任總統，狄伍夫嗣於1983、1988、1993年3度連任。2000年3月民主黨候選人瓦德(Abdoulaye Wade)當選總統，2007年總統大選順利連任，惟自2009年起因瓦德有意尋求第3個任期，引起反對派激烈抗爭。",
                "parliament" =>
                    "國民議會為一院制，共165席，與總統選舉分開舉行，議員任期5年",
                "cabinet" => "總理	Mahammed Boun Abdallah Dionne",
                "judiciary" =>
                    "司法權獨立於立法權外。塞國設有憲法委員會、國家委員會、最高法院、地方法院等司法機關。",
                "headman" => "Macky Sall",
                "fa_minister" => "Sidiki Kaba",
                "major_political_parties" =>
                    "社會黨(Parti Socialiste, PS)、塞國民主黨(Parti DEMOCRATIQUE SENEGALAIS, PDS)、進步力量聯盟(Alliance des Forces du PROGRES, AFP)",
                "financial_incoming" =>
                    "2017年經濟成長率為6.8%，外債達67.45億美元，政府收入38.63億美元，支出44.74億美元",
                "export_value" => "40.32億美元（2020年）",
                "import_value" => "68.78億美元（2020年）",
                "export_item" => "魚，花生，石油產品，磷酸鹽，棉花",
                "import_item" => "食品、飲料、資本財、燃料",
                "main_export_countries" =>
                    "馬利、瑞士、印度、象牙海岸、沙烏地聯合大公國、甘比亞、西班牙",
                "main_import_countries" =>
                    "法國、中國、奈及利亞、印度、荷蘭、西班牙",
                "export_to" => "6,116,713美元（2020年）",
                "import_from" => "3,027,892美元（2020年）",
                "foreign_relationship" =>
                    "1960年9月28日加入聯合國，為非洲團結組織、西非國家經濟聯盟組織、西非貨幣聯盟及洛梅協定等會員國。1982年2月1日與甘比亞成立塞內甘比亞邦聯，狄伍夫任邦聯總統，1982年11月14日成立邦聯部長會議，1989年8月24日狄伍夫宣布終止邦聯關係。1989年4月底與茅利塔尼亞發生邊界糾紛，相互砲擊，兩國首都分傳兩國僑民與當地居民流血衝突事件，兩國關係隨之惡化而斷交。後經協議於1991年復交，目前兩國關係良好。近年因領海劃界問題與幾內亞比索屢有爭執，經訴諸國際法院，現已成立塞、幾海域共同開發總署。另兩國亦因塞南獨立運動而生爭執，目前已達成共識，將共同壓制塞南獨立運動武裝暴動。塞國與世界絶大多數國家均有外交關係，計有58國在達卡設置大使館，13國在達卡或聖路易設立總領事館或領事館。",
                "foreign_policy" =>
                    "敦親睦鄰，領導非洲爭取國際地位，爭取國際資源挹注國家建設發展。",
                "time_range" => "較臺灣慢8小時",
                "resident" =>
                    "我在該國未設處，該國事務由我駐法國台北代表處兼轄。",
                "national_flag" =>
                    "綠色代表伊斯蘭教，進步和希望；黃色象徵自然財富和進步；紅色象徵犧牲和決心；星星表示團結和希望。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            45 => [
                "name" => "塞席爾共和國",
                "name_in_en" => "Republic of Seychelles",
                "short_name" => "塞席爾",
                "short_name_in_en" => "Seychelles",
                "capital" => "維多利亞 (Victoria)",
                "capital_in_en" => "Victoria",
                "national_day" => "6月 29日",
                "join_un_day" => "1976年9月21日",
                "area_size" => "456.60平方公里",
                "geographic" =>
                    "位於東南非洲馬達加斯加島北方1,000多公里處的西印度洋島嶼",
                "religion" => "天主教(76%)、基督教(13%)",
                "bilaterial_relations" => null,
                "main_bounds" => "Seychelles Rupees (SCR)",
                "exchange_rate" => '1 US$≒16.921 SCR (2021)',
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/c9a9015b-77a0-45cd-b685-d501a95bc7f9.GIF",
                "is_diplomatic" => 0,
                "language" => "Creole語、英語、法語（三種語言均官方語言）",
                "main_media" =>
                    "Seychelles Nation 塞席爾國家報、The People and Regar人民週報、Le Nouveau Seychelles Weekly 新塞席爾週報、SBC TV 塞席爾國家廣播電視公司及Seychelles News Agency 塞席爾新聞社。",
                "population" => "約9.7萬人(2023年)",
                "voltage" => "220 伏特",
                "time_difference" => "-5:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/3b8e6e66-800d-40de-9cf3-59157906ff25.JPG",
                "political_system" => "總統制",
                "history_intro" =>
                    "塞席爾群島在18世紀被法國佔領，並將它劃歸「法國之島（Ile de France）」（即今模里西斯）管轄。拿破崙戰爭時遭英國占領，1814年巴黎和約將模里西斯連同塞席爾群島一併割讓給英國。1976年6月29日塞席爾宣布獨立成為共和國，由92個小島組成，首都設於最大之Mahe島上，為大英國協會員國，由孟肯（James Mancham）擔任首任總統。",
                "parliament" =>
                    "國會為一院制，共35席，有26名由投票選出，其餘9席據黨得票率比例推薦。",
                "cabinet" => "未設總理，內閣部長由總統任命。",
                "judiciary" => "主要司法機構為最高法院、上訴法院。",
                "headman" => "洛馬卡拉萬(Wavel John Charles Ramkalawan)",
                "fa_minister" => "Sylvestre Radegonde",
                "major_political_parties" =>
                    "執政黨Linyon Demokratik Seselwa(塞席爾民主聯盟)及在野黨United Seychelles。",
                "financial_incoming" =>
                    "2018年政府財政收入75.27億美元，支出70.53億美元",
                "export_value" => "約17億美元(2021)",
                "import_value" => "約18億美元(2021)",
                "export_item" => "鮪魚罐頭、冷凍漁產品及石化產品",
                "import_item" => "機械設備、食品、石化產品、化學品",
                "main_export_countries" =>
                    "阿拉伯聯合大公國、法國、英國、義大利、德國",
                "main_import_countries" =>
                    "阿拉伯聯合大公國、法國、西班牙、南非",
                "export_to" => "約240萬美元(2022)",
                "import_from" => "540萬美元(2022)",
                "foreign_relationship" =>
                    "奉行中立、不結盟、睦鄰友好和多元化外交政策，注重經濟外交。",
                "foreign_policy" =>
                    "與國際貨幣基金、世界銀行、非洲開發銀行及歐盟維持良好關係以鞏固外援來源。",
                "time_range" => "較台灣慢5小時",
                "resident" => "駐南非代表處兼轄",
                "national_flag" =>
                    "現今的塞席爾國旗啟用於1996年6月18日，為該國獨立後的第三版國旗。國旗是一面由藍 （象徵海洋）、黃 （太陽）、紅 （人民及其在愛與團結中奮鬥的決心）、白 （社會正義與和諧）、綠 （土地與自然）組成的旗幟，各色呈放射狀排列，象徵國家以新的面貌步向未來。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            46 => [
                "name" => "塞爾維亞共和國",
                "name_in_en" => "Republic of Serbia",
                "short_name" => "塞爾維亞",
                "short_name_in_en" => "Serbia",
                "capital" => "貝爾格勒",
                "capital_in_en" => "Belgrade",
                "national_day" => "2月 15日",
                "join_un_day" => "2000年11月1日",
                "area_size" => "77,474平方公里",
                "geographic" =>
                    "塞爾維亞位居東南歐，北與匈牙利接壤，西鄰波士尼亞與赫塞哥維納、克羅埃西亞及蒙特內哥羅，南接馬其頓與科索沃，東鄰保加利亞及羅馬尼亞。",
                "religion" => "塞爾維亞東正教",
                "bilaterial_relations" => null,
                "main_bounds" => "戴納 Serbian Dinar (RSD)",
                "exchange_rate" =>
                    "1美元折合約108RSD (2023年3月資料，本匯率僅供參考，不代表實際交易匯率)「詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/d30900c3-b411-4dd1-ab40-1bcf60306f70.GIF",
                "is_diplomatic" => 0,
                "language" => "塞爾維亞語",
                "main_media" =>
                    "「政治日報」(Politika)、「今日新聞」(Danas)、「閃報」(Blic)等日報",
                "population" =>
                    "697萬人 (2021年7月推估資料)，人口組成83.3%為塞爾維亞族、3.5%為匈牙利裔、羅馬尼亞裔占2.1%，其他種族佔5.7%，另有3.4%未表明族裔認同之人口(2011年資料)",
                "voltage" => "220伏特，雙圓插頭",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/de25669b-9580-4367-9e9d-15f6618f4933.jpg",
                "political_system" => "議會民主制",
                "history_intro" =>
                    "1945年11月29日，共黨控制下選出的臨時國會宣布成立南斯拉夫人民聯合共和國，1963年更名為南斯拉夫社會主義聯邦共和國，該共和國係由塞爾維亞（Serbia）、蒙特內哥羅（Montenegro）、斯洛維尼亞（Slovenia）、克羅埃西亞（Croatia）、馬其頓（Macedonia）、波士尼亞與赫塞哥維納（Bosnia ＆ Herzegovina）等6個共和邦，以及科索沃（Kosovo）、弗依弗丁納（Vojvodina）2個自治省組成。 1991年6月，斯洛維尼亞和克羅埃西亞宣布獨立引發內戰，歷時3年半之戰亂在1995年達頓協定（Dayton Peace Accords）簽署後結束。 自1991年6月內戰爆發以來，境內克、斯、馬、波赫等4共和國陸續宣告獨立，塞、蒙兩共和國遂於1992年4月27日另組南斯拉夫聯邦共和國（The Federal Republic of Yugoslavia）。2003年2月4日南斯拉夫聯邦議會通過「塞爾維亞與蒙特內哥羅」憲法，正式取代原南斯拉夫憲法的法律地位，並於次（3）月正式對外更改國名為「塞爾維亞與蒙特內哥羅」。 蒙特內哥羅於2006年5月21日舉行獨立公投，結果約有超過55.5％之選民贊成獨立，蒙國國會並於同年6月3日正式宣布獨立。 塞爾維亞國會於2006年6月5日宣布塞國為前塞蒙之法定繼承國，將繼承前塞蒙於聯合國及其他國際組織之席位。 科索沃於2008年2月17日正式宣布獨立，惟塞國認為依據1999年聯合國安理會第1244號決議，科索沃主權屬於塞國；經過多年內戰，終在歐盟主導下，塞爾維亞與科索沃於2013年4月19日達成關係正常化之14點協議，目前雙方仍在歐盟之協調下，持續進行對談，以逐步實踐該協議。",
                "parliament" =>
                    "一院制，共250名議員，任期4年，由人民直接投票給支持之政黨，選後依政黨支持比率分配各政黨席次。",
                "cabinet" =>
                    "總理為最高行政首長，由總統提名，併總理候選人提出之內閣名單經半數以上國會議員同意後任命。現任總理為Ana BRNABIĆ (2022年10月26日就職)。",
                "judiciary" => "憲法法院、邦聯法院、普通法院",
                "headman" =>
                    "總統由人民直接投票選出，任期5年，連選得連任1次。現任總統：Aleksandar VUČIĆ (2022年5月31日就職)。",
                "fa_minister" => "Ivica Dacić (2022年10月26日就職)",
                "major_political_parties" =>
                    "取得國會席次之主要政黨及政黨聯盟包括Together we can do everything ( SNS)、United for the victory of Serbia(UZPS)、SPS-JS-ZS、SPS、NADA for Serbia、Moramo、Dveri-POKS、Zavetnici、Alliance of Vojvodina Hungarian、VMSZ-DSVM、SPP、DSHV-ZZV、Party of Democratic Action of Sandzak等。",
                "financial_incoming" =>
                    "依據塞爾維亞財政部2021年第三季發布資訊，塞爾維亞2020年歲入2兆2549.59億塞幣Dinar，歲出2兆6977.45億塞幣Dinar，財政赤字佔國內生產毛額8%，同年經濟成長率約為-0.9%，國內生產毛額約為467.96億歐元，平均國民所得(GNI per capita)約為6,783歐元。",
                "export_value" => "約216.23億歐元 (2021年)",
                "import_value" => "286.03億歐元 (2021年)",
                "export_item" =>
                    "鋼、鐵、橡膠、成衣、穀類製品、蔬果、有色金屬、電機製品、金屬製品、武器彈藥、車輛",
                "import_item" => "機械及運輸設備、石油及其製品、原料、食品",
                "main_export_countries" =>
                    "義大利、德國、波赫、羅馬尼亞、俄羅斯",
                "main_import_countries" =>
                    "德國、義大利、俄羅斯、中國、匈牙利及波蘭",
                "export_to" => "1,935.8萬美元（2021年資料）",
                "import_from" => "871.3萬美元（2021年資料）",
                "foreign_relationship" => null,
                "foreign_policy" =>
                    "由於歐盟將塞國與科索沃關係正常化作為開啟入盟談判之前提，塞國持續與科索沃就相關技術問題展開對話，並獲得歐盟肯定。塞國於2012年3月1日取得歐盟候選國地位，2014年1月21日與歐盟開啟入盟談判。",
                "time_range" =>
                    "較台灣慢7小時(4月至10月日光節約時間較台灣慢6小時)",
                "resident" => "無（由駐匈牙利代表處兼轄）",
                "national_flag" => null,
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            47 => [
                "name" => "墨西哥合眾國",
                "name_in_en" => "United Mexican States",
                "short_name" => "墨西哥",
                "short_name_in_en" => "Mexico",
                "capital" => "墨西哥市",
                "capital_in_en" => "Mexico City",
                "national_day" => "9月16日",
                "join_un_day" => "1945年11月7日",
                "area_size" => "1,964,375平方公里（約臺灣的54倍大）",
                "geographic" =>
                    "墨西哥位於北美大陸南部, 東臨墨西哥灣, 西濱太平洋, 南接瓜地馬拉與貝里斯",
                "religion" => "居民多數信奉天主教",
                "bilaterial_relations" => null,
                "main_bounds" => "披索",
                "exchange_rate" => "1美元約兌19墨西哥披索（2023年3月）",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/bea1abab-a4c0-4a07-90fe-63556cfb0162.GIF",
                "is_diplomatic" => 0,
                "language" => "官方語言為西班牙語。",
                "main_media" =>
                    "主要大報有Reforma, El Universal, Excélsior及El Sol de México, 雜誌有Proceso及Expansión等；電視台有Televisa及TV Azteca兩大傳統電視台，以及2016年開播的Imagen電視台，國家通訊社為NOTIMEX。",
                "population" =>
                    "據統計，2021年全墨人口約1億2,600萬人。墨西哥市加上墨西哥州則約2,200萬人。",
                "voltage" => "110V",
                "time_difference" => "-14:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/a8139b90-103f-42d4-942b-1ca9350b9223.jpg",
                "political_system" => "墨西哥為聯邦合眾國，總統制。",
                "history_intro" =>
                    "自16世紀起，西班牙殖民墨西哥近 300 餘年，1810 年 9 月 16 日爆發獨立戰爭 ，建國後定 9 月 16 日為墨西哥獨立紀念日，1821 年 8 月 24 日正式宣布獨立。獨立後，國內政爭紛起 , 後又於 1846 年爆發美墨戰爭，1848 年墨美簽訂和約，墨西哥將其北部 230 萬平方公里的土地割讓給美國。1910 年內部爆發革命，內戰幾乎完全摧毀了墨西哥既有的經濟基礎。1917 年頒布民主憲法，宣布國名為墨西哥合眾國。",
                "parliament" =>
                    "國會為兩院制，參議院共128名議員，任期6年，由31州及墨西哥市（聯邦政府與國會所在地）各選出代表4名所組成；眾議院則有500名議員，任期3年。",
                "cabinet" => "請參閱 http://www.gob.mx/gobierno#secretarias",
                "judiciary" =>
                    "司法體系分聯邦最高法院，各州高等法院及地方法院三級。最高法院由21名大法官組成，由總統提名，經參議院同意後任命。",
                "headman" => "羅培茲(Andrés Manuel López Obrador)",
                "fa_minister" => "埃布拉爾德(Marcelo Ebrard Casaubon)",
                "major_political_parties" =>
                    "「國家復興運動黨」(MORENA)、「國家行動黨 」 (PAN)、「體制革命黨」(PRI)，「民主革命黨」(PRD)、「綠黨」(PVEM)、「工黨」(PT)及「市民運動黨」(MC)。",
                "financial_incoming" =>
                    "2022年2月18日 墨西哥外匯存底約2,015.01億美元。",
                "export_value" => "出口 4,942億2,453萬美元(2021)",
                "import_value" => "進口5,057億1,559萬美元(2021)",
                "export_item" =>
                    "休旅車、資料處理機、載貨用機動車輛、機動車輛零附件、原油",
                "import_item" =>
                    "機動車輛零附件、原油以外之石油及瀝青礦物油類製品、石油氣、電話電報機",
                "main_export_countries" =>
                    "美國、加拿大、中國、德國、韓國、西班牙、印度、日本、巴西、哥倫比亞",
                "main_import_countries" =>
                    "美國、中國、韓國、德國、日本、馬來西亞、臺灣、加拿大、巴西、越南",
                "export_to" => "37.47億美元(2021年)",
                "import_from" => "16.40億美元(2021年)",
                "foreign_relationship" =>
                    "墨西哥為聯合國會員，參與多項國際會議，許多會議也在墨國舉辦，諸如：2018年第13屆「太平洋聯盟」(Alianza del Pacífico,AP)元首峰會於7月25日在墨國Jalisco州Vallarta港舉行。2020年墨西哥擔任「跨太平洋夥伴全面進步協定」(CPTPP)輪值主席，第3次執委會在墨西哥舉行。2021-2022年，墨西哥擔任「加勒比國家聯盟」（AEC）部長理事會輪值主席國。2021年4月25日，「世界旅遊觀光協會」 (World Travel and Tourism Council)於墨國坎昆舉辦全球年會。2021-2022年，墨西哥擔任聯合國非常任理事國，總統羅培茲於2021年11月10日出席聯合國大會，並提案盼透過博愛精神，要求全球最富有的前一千人，每人自願性捐出4%財富，以解決貧窮問題。",
                "foreign_policy" =>
                    "「北美自由貿易協定」(NAFTA)於2018年9月30日由美國、加拿大、墨西哥達成協議，更名為「美墨加協定」(USMCA)並於同年11月30日簽署，2020年7月1日生效。2017年美國退出TPP之後，包含墨西哥之11會員國持續推動TPP，並更名為「跨太平洋夥伴全面進步協定」(CPTPP)。該11國於2018年3月8日簽署該協定後，墨西哥率先各成員國於4月24日批准CPTPP，並於5月23日透過墨西哥聯邦政府公報公告批准CPTPP，成為第一個完成國內法律程序之CPTPP成員國。此外，墨西哥更與智利、秘魯及哥倫比亞組成「太平洋聯盟」(AP)，強化自身經貿實力與地位。2018年底墨西哥羅培茲總統上任後，左派立場鮮明，在移民、安全、區域發展等議題與北美意見相左，未跟隨眾多歐美國家反對委內瑞拉總統馬杜洛(Nicolás Maduro)，反而表示支持「依據委國憲法選出的政府」。2019年11月10日墨西哥總統羅培茲提供玻利維亞前總統莫拉萊斯(Evo Morales)政治庇護並由墨國外長埃布拉爾德出面接待，該庇護行為被認為是外交上左傾的表現。2021年美墨雙邊高層會談及互動頻繁，9月墨西哥與美國進行「高層經濟對話」（DEAN），以期深化雙邊經貿關係；11月墨西哥總統羅培茲更在「第9屆北美領袖峰會」出乎意料地直言中國對北美地區存在經貿威脅的發言。",
                "time_range" => "較臺灣晚 14個小時",
                "resident" => "我國在墨西哥首都墨西哥市設有代表處",
                "national_flag" =>
                    "國旗中的綠色代表獨立及希望，白色象徵和平與宗教信仰，紅色意指國家統一。內部國徽是一隻叼著蛇的雄鷹高立在仙人掌上。",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            48 => [
                "name" => "多哥共和國",
                "name_in_en" => "Togolese Republic",
                "short_name" => "多哥",
                "short_name_in_en" => "Togo",
                "capital" => "洛梅(Lomé)",
                "capital_in_en" => "LOME(洛梅)",
                "national_day" => "4月27日",
                "join_un_day" => "1960年9月20日",
                "area_size" => "56,785平方公里",
                "geographic" =>
                    "東接壤迦納，西鄰貝南東部，北與布吉納法索交界。",
                "religion" => "基督教(43.7%)、傳統信仰(35.6%)、伊斯蘭教(14%)",
                "bilaterial_relations" => null,
                "main_bounds" => "西非法郎(XOF)",
                "exchange_rate" =>
                    "1美元兌換593.08西非法郎（2022年3月）。詳細匯率資訊建議至臺灣銀行（https://rate.bot.com.tw/xrt?Lang=zh-TW）或兆豐商銀（https://www.megabank.com.tw/personal/foreign-service/forex）網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/facad68a-a9ab-4311-acd8-0ccc32091345.GIF",
                "is_diplomatic" => 0,
                "language" => "法語(官方語言)",
                "main_media" =>
                    "Togo-Presse(國營日報)、Liberté(民營日報)。Télévision Togolaise(國營電視台)、Radio Togolaise(國營廣播電台)等。",
                "population" => "828萬人（2021年）",
                "voltage" => "220伏特",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/2f5b0cdf-7675-400c-b319-1daa6e4d2bd5.JPG",
                "political_system" => "共和國、總統制",
                "history_intro" =>
                    "歐洲人自18世紀起陸續殖民多哥，德國於1884年在多哥建立多哥蘭（Togoland）。第一次大戰期間，英、法瓜分德屬多哥，戰後國際聯盟將多哥分別委託英、法代管。英國代管之多哥於1958年併入現今的迦納。法國託管之多哥則於1960年4月27日獨立，首任總統為Sylvanus Olympio，1967年軍事強人艾雅德瑪(Eyadema Gnassingbé)發動政變後統治多哥長達38年，至2005年2月病逝，在軍方支持下由其子佛雷（Faure Gnassingbé）繼任總統，惟在國內外壓力下，多哥於2005年4月舉辦總統大選，選舉結果由佛雷勝出。",
                "parliament" =>
                    "單一國會制（Assemblée Nationale）共91席，人民直選，任期5年。",
                "cabinet" => "總理由總統任命，內閣閣員則由總統及總理共同推舉。",
                "judiciary" => "設有最高法院及上訴法院",
                "headman" => "佛雷.納辛貝（Faure Gnassingbé）",
                "fa_minister" => "羅伯特.杜西(Robert Dussey)",
                "major_political_parties" =>
                    "執政黨為共和聯盟(L’Union pour la  République,UNIR)，主要在野黨有變革力量聯盟（L’Union des Forces du Changement,UFC）、全國變革聯盟(Alliance Nationale pour le Changement)及民主發展愛國運動(Mouvement Patriotique pour la Démocratie et le Développement, MPDD)。",
                "financial_incoming" =>
                    "歲入15.52億美元、歲出16.77億美元、外債17.43億美元(2020年)。",
                "export_value" => "6.54億美元（2020年）",
                "import_value" => "17.69億美元（2020年）",
                "export_item" => "轉出口貨品、棉花、磷酸鹽、咖啡、可可豆",
                "import_item" => "機器設備、食品、石油產品",
                "main_export_countries" =>
                    "布吉納法索、貝南、尼日、印度、馬利、迦納、象牙海岸、奈及利亞",
                "main_import_countries" => "中國、法國、荷蘭、日本",
                "export_to" => "10,773,979美元(2020年)",
                "import_from" => "10,773,979美元(2020年)",
                "foreign_relationship" =>
                    "奉行獨立自主、中立、不結盟和睦鄰友好的外交政策，主張在平等互利、互相尊重主權和領土完整的基礎上與所有國家建立友好合作關係，著重發展與西方國家關係並積極爭取外援。重視非洲團結，積極促進地區經濟一體化。多哥近年與歐盟保持良好關係，並拓展與鄰國乃至中非國家之交往，同時，亦深化與中國、伊朗、利比亞與摩洛哥等國交流。2016年舉辦「非洲聯盟海事安全及非洲發展特別高峰會議」、2017年舉辦以色列-非洲峰會及法語系國家部長級年會，在國際場合日漸活耀。",
                "foreign_policy" =>
                    "奉行獨立自主、中立、不結盟和睦鄰友好的外交政策。",
                "time_range" => "慢臺灣7小時",
                "resident" =>
                    "我在該國未設處，該國事務由我駐法國台北代表處兼轄。",
                "national_flag" =>
                    "多哥國旗在1960年4月27日啟用，由綠黃兩色橫向相間而成，頂部、底部及中間三條為綠色，其餘兩條為黃色，國旗左上有一顆白色五角星配置在紅色底色之上。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            49 => [
                "name" => "多明尼加共和國",
                "name_in_en" => "Dominican Republic",
                "short_name" => "多明尼加",
                "short_name_in_en" => "Dominican Republic",
                "capital" => "聖多明哥市",
                "capital_in_en" => "Santo Domingo",
                "national_day" => "2月27日",
                "join_un_day" => "1945年10月24日加入聯合國",
                "area_size" => "總面積48,484平方公里",
                "geographic" =>
                    "多國位於大安地列斯群島中第二大島聖多明各島（SANTO DOMINGO 舊稱伊斯巴紐拉島）之東部，北臨大西洋，南濱加勒比海，西與海地共和國毗鄰，東隔摩納海峽(CANAL DE LA MONA) 與波多黎各島隔海相對，介於西經68度-72度及北緯18度-20度之間，東西長430公里，南北寬268公里，海岸線總長1,576公里，總面積48,484平方公里，占伊斯巴紐拉島面積74%。",
                "religion" => "天主教",
                "bilaterial_relations" => null,
                "main_bounds" => "多明尼加披索",
                "exchange_rate" => "1US =56.43  pesos（2022年3月）",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/bb43988e-8464-4c5a-be40-d47fa2e22da2.JPG",
                "is_diplomatic" => 0,
                "language" => "西班牙語",
                "main_media" =>
                    "電視台有第2、4、9、11、27、37等台，電台有Sol、Radio Mil、Miniinformado等數十台。主要報紙有立思鼎日報(Listin diario)；自由日報(Diario Libre)；今日報(Hoy)；加勒比日報(El Caribe)；新聞報(La informacion)；日報(El Día)及新日報(El Nuevo Diario)等。",
                "population" => "1,103萬(2022年)",
                "voltage" => "110",
                "time_difference" => "-12:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/b6e714bf-d87b-4c04-8c44-7be4ac78125a.jpg",
                "political_system" => "共和國，總統制，採三權分立。",
                "history_intro" =>
                    "哥倫布於1492年首先發現伊巴紐拉島（現在之多明尼加共和國及海地）後，西班牙人開始征服原住民族，建立殖民地政府。1795年法國征服全島，1804年海地脫離法國獨立。1809年西班牙人驅逐聖多明哥地區之法國人，恢復殖民統治。1821年多明尼加首次宣布獨立， 不到數月，海地出兵佔領多境，統治22年之久。1844年2月27日多國第二次宣布獨立，國名定為多明尼加共和國。1916年美國以追還債款為由出兵佔領多國。1924年多國民選政府成立，美軍撤離。1931至1961年Trujillo實施獨裁統治多國30年。1965年美軍再度佔領多國，嗣經美洲國家組織(OEA)介入斡旋後，美軍始於同年8月30日撤軍離多。1966年多國頒布憲法，實施民主憲政及三權分立制度，總統任期4年。現任總統阿畢納德(Luis Abinader)於2020年8月16日宣誓就職。",
                "parliament" => "分參,眾兩院,立法權屬於國會",
                "cabinet" => "行政權屬於總統,內閣人員由總統直接任命",
                "judiciary" => "司法權屬於各級法院。",
                "headman" => "阿畢納德(Luis Abinader)",
                "fa_minister" => "艾瓦雷茲(Roberto Álvarez)",
                "major_political_parties" =>
                    "現代革命黨(PRM,現為執政黨)、解放黨（PLD）、革命黨(PRD)、基督社會改革黨(PRSC)。",
                "financial_incoming" => "690億美元（2021年9月）",
                "export_value" => "103億美元（2021年）",
                "import_value" => "170億美元（2021年）",
                "export_item" =>
                    "醫療器材、電子產品、菸草、紡織品、珠寶等。（2021年）",
                "import_item" =>
                    "石油暨相關提煉物、小客車、家電、機械、藥品等。（2021年）",
                "main_export_countries" =>
                    "美國、瑞士、海地、波多黎各、加拿大、荷蘭、中國大陸。（2021年）",
                "main_import_countries" =>
                    "美國、中國大陸、墨西哥、巴西、西班牙、哥倫比亞、日本及德國等。（2021年）",
                "export_to" => "1億2,189萬美元(2021年)",
                "import_from" => "1億1,025萬美元(2021年)",
                "foreign_relationship" =>
                    "全方位外交政策,即與各國維持關係並積極參加國際組織及事務",
                "foreign_policy" =>
                    "多國對外政策採取積極參與國際事務及國際組織之態度，與各國均友好，惟與同島之鄰國海地關係一向不睦。海地長期政治不穩，經濟凋蔽，失業問題嚴重，與多國相比，明顯落後，大批海地人即非法越過邊界尋找工作或較好生活，令多政府相當困擾。由於多政府採取大量遣返措施，亦引起海地政府抗議，移民問題成為多、海兩國長期以來衝突焦點，多國認為兩國移民問題應訴諸國際社會，而非多國可獨力解決。惟2010年1月中旬海地發生強震後，多明尼加政府曾主動提供協助並召開兩次國際會議邀集各國及國際組織共商協助海地災後重建大計。",
                "time_range" => "較我國晚12小時",
                "resident" => "無，由我國駐瓜地馬拉大使館兼轄",
                "national_flag" =>
                    "國旗以中心的白色十字架為特徵，延伸到邊緣並將旗幟分成四個矩形；頂部是藍色和紅色，底部是紅色和藍色。 國徽的中部是與國旗相同的白色十字分成的紅藍交錯的四個方塊組成的一面盾，其兩側護立著綠葉。 國徽上部是一條藍色的彩帶，裡面用白字寫著多米尼加的國家格言：Dios, Patria, Libertad（上帝，祖國，自由）。",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            50 => [
                "name" => "多米尼克",
                "name_in_en" => "Commonwealth of Dominica",
                "short_name" => "多米尼克",
                "short_name_in_en" => "Dominica",
                "capital" => "羅梭(Roseau)",
                "capital_in_en" => "Roseau，人口約2萬人。",
                "national_day" => "11月 3日",
                "join_un_day" => "1978年12月18日",
                "area_size" => "751 平方公里",
                "geographic" =>
                    "多米尼克地處東加勒比海向風群島中間位置，北面為法屬瓜地洛普島(Guadeloupe)，南面為法屬馬丁尼克(Martinique)，是加勒比海最後成為歐洲殖民地的島，原係英國殖民地，於 1978 年獨立並加入大英國協。",
                "religion" =>
                    "羅馬天主教徒61.4%、新教徒28.6%、拉斯特法理教1.3%、耶和華見證人1.2%、其他0.3%、未指定1.6%、無信仰佔6.1%。(2001年預估 資料來源:The World Factbook)。",
                "bilaterial_relations" => null,
                "main_bounds" =>
                    "使用東加勒比海幣（簡稱東加幣）（East Caribbean Dollar, XCD）。",
                "exchange_rate" =>
                    "當地採用東加勒比海幣(東加幣)，為固定匯率制，1美元可兌換2.6882(各當地銀行兌換比率各有不同)東加幣。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/869b42fc-80bd-40ea-994f-79c2167649c0.GIF",
                "is_diplomatic" => 0,
                "language" => "英語",
                "main_media" =>
                    "主要報紙計有2家，太陽報(每週一發行)與記事報(每週五發行)。重要電視台則有政府新聞電視台、薩特有線電視台。另主要電台則有多米尼克廣播公司、 Q95及凱瑞調頻。新聞網站則以 “多米尼克在線” 為主要網站。",
                "population" =>
                    "約7萬2千餘人，歷年來外移人口散居美國、加拿大、英國及東加勒比海地區各島。",
                "voltage" =>
                    "電壓規格為220-240伏特，50Hz。插座一般為扁型三插座，與英國相同，亦有住家及飯店或同時設有220-240伏特及110伏特之插座。",
                "time_difference" => "-12:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/759556db-8952-47b8-8ee6-0636232e1c75.JPG",
                "political_system" =>
                    "根據憲法規定，實行英國憲政模式採議會民主制。總理為政府首腦，權力來自議會。另總統為國家元首，由總理和反對黨領袖提名後經議會投票選舉產生，任期5年。總理掌握國家行政權，在議會選舉獲多數席位的政黨領袖經總統任命後出任總理。政府內閣經總理提名後再由總統任命組成，任期5年。另國會由性質中立之議長、21 位民選議員及 9 位由執政黨與反對黨分別任命之參議員組成，任期五年。現任總理為羅斯福.史克利(Roosevelt Skerrit)，總統為查爾斯.薩瓦林(Charles Savarin)。",
                "history_intro" =>
                    "多米尼克係因哥倫布於1493年星期日發現而得名。17、18世紀英、法兩國曾數度爭奪該島，1763年依照巴黎條約規定劃歸英國管轄。但法國於1778年攻佔該島，1783年始歸還英國。1805年法國再度入侵並焚毀首府羅梭，嗣經英國支付法國一萬二千鎊後法軍始告撤退。1958年1月多島加入西印度聯邦（Federation of the West Indies），一直至該聯邦於1962年5月23日解體後脫離。1967年3月1日，多島成為大英國協成員，內政自主，外交及國防由英國代理。1978年11月3日正式成為一主權獨立國家。",
                "parliament" =>
                    "國會為一院制，稱為House of Assembly。國會議員計32名，由9名指派議員、21名由人民普選產生議員、1名發言人及1名當然席次組成。其中檢察總長 (Attorney General)為國會當然成員。",
                "cabinet" =>
                    "內閣由總理及各部部長組成，總理為最高行政首長，總理指定各部部長，內閣向國會負責。",
                "judiciary" =>
                    "採英國之習慣法及成文法，司法體系與東加勒比海國家合為一體，分為：「東加勒比海最高法院」，下轄「上訴法院」、「高等法院」（均設於聖露西亞）及在多國設有「地方法院」，法官由東加勒比海法院統一調派。",
                "headman" =>
                    "總統：薩弗林(Charles Savarin,虛位元首) 總理：史克利(Roosevelt Skerrit )",
                "fa_minister" => "達洛(Kenneth Darroux)",
                "major_political_parties" =>
                    "多米尼克勞工黨為目前之執政黨，聯合工人黨為反對黨。",
                "financial_incoming" =>
                    "多國政府預估該國2020-2021年政府收入為8.44億東加勒比海幣，支出為9.68億東加勒比海。",
                "export_value" =>
                    "多國2020年全年出口總額為1.7億美元。(Knoema最新數據顯示)",
                "import_value" =>
                    "多國2020年全年進口總額為3.22億美元。(Knoema最新數據顯示)",
                "export_item" =>
                    "多米尼克主要的經濟來源為農業及觀光業，全國有40%的人口從事農業，主要出口商品為菸草、香蕉、柑橘、蔬菜、椰子、肥皂、月桂油、葡萄柚、橘子等。 ( 資料來源:The World Factbook)。",
                "import_item" =>
                    "製成品、機械設備、食品化學品。( 資料來源:The World Factbook)。",
                "main_export_countries" =>
                    "千里達及托巴哥、牙買加、聖克里斯多福及尼維斯、圭亞那及法國。",
                "main_import_countries" =>
                    "美國、日本、南韓、千里達及托巴哥、美國及中國。",
                "export_to" =>
                    "多國2020年全年出口總額為1.7億美元。(Knoema最新數據顯示)",
                "import_from" =>
                    "多國2020年全年進口總額為3.22億美元。(Knoema最新數據顯示)",
                "foreign_relationship" =>
                    "重視並積極與美國、日本、歐盟、加拿大、中國大陸，古巴，委內瑞拉等國維持良好關係。同本地區國家關係較密切。目前是東加勒比國家組織，加勒比共同體，加勒比國家聯盟等組織成員",
                "foreign_policy" => "提倡互惠合作、區域聯盟及推行務實外交。",
                "time_range" => "較臺灣時間慢12小時。",
                "resident" => "無，由我國駐聖露西亞大使館兼轄",
                "national_flag" =>
                    "國旗啟用於1978年11月3日獨立日，並在1981、1988和1990年稍作修改。旗地綠色，黃、黑、白三色的十字貫穿旗面，中央的十字交叉處為紅色圓地，內有1隻鸚鵡及周圍有十顆黃色五角星。綠色象徵遍及全島的香蕉園和茂密的森林，黃色代表檸檬、柑橘、可可、椰子等水果，白色象徵河流、瀑布和人民的純潔，黑色代表當地主要為黑人和黑白混血種人及肥沃的土地。十字形代表人民的宗教信仰-天主教。紅色圓地象徵該國所執行的社會發展計畫，10顆五角星代表該國的10個地區。",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            51 => [
                "name" => "大不列顛暨北愛爾蘭聯合王國",
                "name_in_en" =>
                    "United Kingdom of Great Britain and Northern Ireland",
                "short_name" => "英國",
                "short_name_in_en" => "United Kingdom、UK",
                "capital" => "倫敦（London）",
                "capital_in_en" => "倫敦（London）",
                "national_day" => null,
                "join_un_day" => "聯合國創始會員國（1945年10月24日）",
                "area_size" => "243,610平方公里",
                "geographic" => "西北歐島嶼，位於北大西洋與北海之間。",
                "religion" =>
                    "基督教(含英國國教、天主教、長老教會、衛理公會等)、回教、印度教等。",
                "bilaterial_relations" => null,
                "main_bounds" => "英鎊（Pound Sterling）",
                "exchange_rate" =>
                    "詳細匯率資訊建議至臺灣銀行（http://rate.bot.com.tw/xrt?Lang=zh-TW）或兆豐商銀（https://www.megabank.com.tw/personal/foreign-service/forex）網站查詢",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/b3eaf972-23e3-4d65-8bdf-9dc0bd6c7620.GIF",
                "is_diplomatic" => 0,
                "language" => "英語",
                "main_media" =>
                    "英國倫敦不僅為英國媒體中心，亦為歐洲地區英文媒體之中心，不論平面或電子媒體皆極為發達，英國全國性報紙主要有11家，其中10家出版周日版姐妹報，包括質報如「金融時報」（Financial Times）、「泰晤士報」（The Times）、「衛報」（The Guardian）、「每日電訊報」（The Telegraph）及通俗報如「太陽報」（The Sun）、「每日郵報」（Daily Mail）等；主要公共無線電視台包括BBC、Channel 4及Channel 5，ITV及Sky News等則為商業電視台。另各類國內外時事、政經及文化評論雜誌亦多，知名者包括「經濟學人」（The Economist）、「旁觀者」（The Spectator）、「新政治家」（New Statesman）及「展望」（Prospect）等。",
                "population" => "約67,081,000人（2020年中估計值）",
                "voltage" =>
                    "英國採用240伏特之電壓，插頭為三個平針型式，從台灣帶來之電器，雖可加裝變電器及轉接插頭使用，但容易導致故障。",
                "time_difference" => "-8:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/0467c2fc-f4a6-4c6d-8977-a060e78a8533.jpg",
                "political_system" => "君主立憲(王位世襲)，採議會內閣制。",
                "history_intro" =>
                    "西元前500年左右，北歐條頓人之一支凱爾特人（Celts）陸續移入不列顛島並征服原始土著，其中定居於英格蘭東南者稱為不列頓人（Britons），羅馬人稱該族所居之地為Britannia，此為不列顛（Britain）一詞之來源。不列顛於西元前43年至西元408年間曾受羅馬人統治；西元400年至500年間盎格魯薩克遜人（現今大部分英國人之祖先）入侵；西元六世紀末分據成七個王國，其中之Wessex國王於西元829年統一英格蘭；980年至1042年丹麥人入主英格蘭；1,066年法國諾曼第公爵威廉征服英格蘭；1339年至1453年發生英法百年戰爭；1536年英格蘭與威爾斯合併；1588年擊敗西班牙無敵艦隊；1628年議會提出權利請願書；1688年光榮革命；1707年英格蘭與蘇格蘭合併成立大不列顛；1721年建立責任內閣制；1770年工業革命；1801年大不列顛與愛爾蘭合併成立「大不列顛暨愛爾蘭聯合王國」；1927年成立「大不列顛暨北愛爾蘭聯合王國」；1931年成立「大英國協」（現已僅稱「國協」）；1949年愛爾蘭獨立（北愛仍屬英國）；1973年英國加入歐洲共同市場（1992年改制為歐盟），惟未加入歐元區及申根公約。1998年英國與愛爾蘭政府簽署「復活節協議」（Good Friday Agreement），結束北愛爾蘭長期暴力恐怖活動。英國政府近年來大力推動權力下放地方，將原屬中央政府部分職權移交予蘇格蘭、威爾斯及北愛爾蘭等地方政府自理。",
                "parliament" =>
                    "採兩院制，分為下議院（House of Commons）及上議院（House of Lords）。下議院議員經民選產生，共計650席，採單一選區制，議員得連選連任。原依據2011年9月「定期國會法」（Fixed Term Parliament Act），下議員法定任期為5年，該法已於2022年3月廢止，恢復西敏議會制之傳統，亦即首相可隨時呈請君主解散國會，舉行大選。上議院議員均非民選，係由政府提名社會各界賢達呈請君主任命，目前有資格出席上議院會議的上議員約有800位。",
                "cabinet" =>
                    "內閣掌行政權，由多數黨或聯合政府最大黨黨魁出任首相，絕大多數閣員係由首相自下議院議員中提名，經君主御准後任命。現任政府首長（首相）：保守黨籍之Rishi Sunak (2022年10月25日就職迄今)。",
                "judiciary" =>
                    '法院組織分為四級制，分別為地方法院（Magistrate\'s Court or County Court）、高等法院（Upper Court）、上訴法院（Court of Appeal），及最高法院（The Supreme Court）。',
                "headman" =>
                    "英國為君主制國家，現任元首為查爾斯國王三世(King Charles III)。",
                "fa_minister" => "James Cleverly，2022年9月6日就任。",
                "major_political_parties" =>
                    "主要政黨為保守黨（Conservative）、工黨（Labour）、自由民主黨（Liberal Democrats）、蘇格蘭民族黨（Scottish National Party），另有特定議題之綠黨，以及威爾斯民族黨（Welsh Nationalist- Plaid Cymru）、新芬黨(Sinn Féin)北愛統一黨（Ulster Unionist）、北愛民主統一黨（Democratic Unionist）、北愛社會民主勞工黨（Social Democratic and Labour）等地區性政黨。",
                "financial_incoming" =>
                    "收入8,100億英鎊，支出8,420億英鎊（2019-20會計年度）",
                "export_value" => "4,660億英鎊（2021年）",
                "import_value" => "6,892億英鎊（2021年）",
                "export_item" =>
                    "機械產品、貴金屬、汽車、礦物性燃料、電子產品。",
                "import_item" =>
                    "貴金屬、機械產品、汽車、電子產品、礦物性燃料。",
                "main_export_countries" => "美國、瑞士、荷蘭、德國、法國。",
                "main_import_countries" => "中國、德國、美國、荷蘭、挪威。",
                "export_to" => "48億45萬美元（2021年）",
                "import_from" => "18億7千7百萬美元（2021年）",
                "foreign_relationship" =>
                    "英國為聯合國（UN）安全理事會常任理事國、北大西洋公約組織（NATO）、國際衛生組織（WHO）、國際貨幣基金（IMF）及經濟合作暨發展組織（OECD）等眾多主要國際組織之成員國，與歐洲及世界各國維持友好關係，並於全球經貿、金融、國際合作與援外、國際安全等領域扮演重要角色。",
                "foreign_policy" =>
                    "英國的外交政策旨在打造英國為「全球不列顛」(Global Britain)，為此英國將繼續保持開放、包容與外向，提倡自由貿易，堅持英國利益與價值，決心提升英國之國際地位與影響力。英國將以其全球駐足、在各地區之積極活動、全球利益，與盟邦及夥伴合作促進全球的安全與繁榮，從而確保英國的安全與繁榮，並在各領域與世界交往。2021年3月英國發表「整合性政策評估」（Integrated Review）報告，揭示「傾向印太」之對外政策，同年派遣伊莉莎白女王號航母（HMS Queen Elizabeth）在印太、與澳洲及美國共同成立「澳英美三方安全聯盟（AUKUS）」、成為東協對話夥伴並申請加入「跨太平洋夥伴全面進步協定（CPTPP）」。2022年6月並加入美國倡議之「藍色太平洋夥伴」組織，成員尚包含澳洲、日本、紐西蘭，再再展現英國加強與印太交往之決心。",
                "time_range" =>
                    "較台灣慢8小時（英國時間3月最後一個週日至10月最後一個週日實施日光節約時，時間較台灣慢7小時）",
                "resident" =>
                    "駐英國代表處 (駐英國台北代表處)Taipei Representative Office in the U.K.",
                "national_flag" =>
                    "英國人稱之為「Union Flag」或「Union Jack」，係整合英格蘭之白底紅十字「Saint George」旗、蘇格蘭之藍底白色斜十字「Saint Andrew」旗，及愛爾蘭之白底紅色斜十字「Saint Patrick」旗而成。英國國旗嗣成為一些大英國協成員國之國旗設計元素。",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            52 => [
                "name" => "大韓民國",
                "name_in_en" => "Republic of Korea",
                "short_name" => "韓國、南韓",
                "short_name_in_en" => "ROK、South Korea",
                "capital" => "首爾",
                "capital_in_en" => "Seoul",
                "national_day" => "10月3日",
                "join_un_day" => "1991年9月17日",
                "area_size" => "100,364平方公里",
                "geographic" => "位於東北亞、韓半島南半部",
                "religion" => "佛教、基督教、天主教",
                "bilaterial_relations" => null,
                "main_bounds" => "韓元（Won）",
                "exchange_rate" =>
                    "112年4月3日匯率約為1美元兌1,310韓元。詳細匯率資訊建議至台灣銀行（http://rate.bot.com.tw/xrt?Lang=zh-TW）或兆豐商銀（https://www.megabank.com.tw/personal/foreign-service/forex）網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/b3d441f3-f229-427d-93f0-69e1c6729918.gif",
                "is_diplomatic" => 0,
                "language" => "韓語",
                "main_media" =>
                    "1、通訊社：韓國現有主要通訊社公營「聯合通訊」（YONHAPNEWS）及民營NEWSIS等。2、報紙：現有全國性日報57家（主要包括朝鮮日報、東亞日報、中央日報、韓國日報、京鄉新聞、首爾新聞、文化日報、韓民族新聞、KOREA TIMES及KOREA HERALD等），至於地方報則有117家。3、廣播電台（放送社）計有27家，其中公營韓國放送公社（KBS）於釜山、大邱、光州等21個都市設有地方分台。4、電視台：韓國放送（KBS）、文化放送（MBC）、首爾放送（SBS）、教育放送（EBS）、以英語播送為主的阿里郎電視台、YTN新聞專業電視台、CHANNEL A電視台、MBN電視台、朝鮮TV、JTBC電視台 等綜合編成電視台。5、有線電視：韓國地區登記有案之綜合有線電視頻道130多個，係按照行政地區的劃分，分別成立，個別經營。6、網際網路：由於網際網路的興起，韓國媒體網站也如雨後春筍，目前各主要媒體均有網站，內容每天更新數次，且聯合通訊社、朝鮮日報、東亞日報及中央日報3家報紙之網站除韓文外，並有英、日、中（繁體與簡體）等外文版本，重要消息或社論均於當天譯成外文後上網，傳播效力不亞於印刷報紙本身，因此未來網路媒體之重要性將日益增強。",
                "population" => "約5,142餘萬人（2023年2月）",
                "voltage" => "220V",
                "time_difference" => "+1:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/6a8c6c86-3d97-4079-b251-4539fa968d25.jpg",
                "political_system" => "立憲共和政體",
                "history_intro" =>
                    "(一)	韓歷史朝代：古朝鮮→三國時代(高句麗、百濟、新羅；西元前1世紀至7世紀)→統一新羅(676-918年)→高麗(918-1392年)→朝鮮（1392-1910年）。(二)	19世紀末葉，列強相繼侵入朝鮮，1894年中日甲午戰爭，滿清戰敗後，日本勢力入侵朝鮮，及至1910年朝鮮正式為日本併吞。日本統治35年期間，韓國愛國志士力推獨立運動，自1919年4月起在上海、重慶等各地成立「韓國臨時政府」。1945年8月15日日本投降後，美、蘇軍隊分別進駐韓半島，以北緯38度線分治。1948年8月15日，大韓民國於北緯38度線以南地區成立，通稱韓國或南韓，由李承晚當選首任大統領。1950年6月北韓發動韓戰南侵，1953年7月雙方簽署停戰協定，南北韓對峙至今。",
                "parliament" =>
                    "國會為最高立法機構，採一院制，國會議員任期4年，共有300席。",
                "cabinet" =>
                    "內閣由19部3處19廳5委員會（2023年6月初起）組成，每週召開一次例會，稱為「國務會議」，大統領任國務會議主席，國務總理為副主席，重要部會首長為國務委員。國務總理由大統領任命，並經國會批准，負責管理及監督各部會之工作及參與制定國家重要決策。",
                "judiciary" =>
                    "屬大陸法系，法院體系分大法院、高等法院(6所)、地方法院(18所)三級制。大法院由大法院長及13名大法官組成，大法院長由大統領提名，經國會同意任命，任期六年，不得連任；大法院大法官則由大法院長提名，經國會同意後，由大統領任命，任期6年得連任。另設憲法裁判所，由9名法官組成，任期6年得連任，層級相當大法官，專司憲法解釋、法律審查及政黨解散等憲法相關事務。",
                "headman" => "尹錫悅",
                "fa_minister" => "朴振",
                "major_political_parties" => "國民力量、共同民主黨、正義黨等。",
                "financial_incoming" =>
                    "2021年財政總收入 553.6兆韓元，財政總支出 624.3兆韓元。",
                "export_value" => "6,839億美元。",
                "import_value" => "7,312億美元。",
                "export_item" =>
                    "石油製品、汽車、蓄電池、鋼鐵製品、汽車零件、一般機械、半導體、生技保健、顯示器、石油化學、紡纖、電腦、家電、無線通訊機器及船舶。",
                "import_item" => "主要能源資源如煤炭、瓦斯、原油及石油製品。",
                "main_export_countries" =>
                    "中國、美國、越南、日本、臺灣、新加坡、印度、澳洲、菲律賓、墨西哥。",
                "main_import_countries" =>
                    "中國、美國、日本、澳洲、沙烏地阿拉伯、越南、臺灣、德國、俄羅斯、卡達。",
                "export_to" => "261.98億美元(2022年)。",
                "import_from" => "282.74億美元(2022年)。",
                "foreign_relationship" =>
                    "韓國於1991年成為聯合國會員國，現為世界貿易組織（WTO）、亞太經濟合作（APEC）、經濟合作暨發展組織（OECD）、二十國集團（G20）、東協加三（ASEAN Plus Three）、東亞峰會（EAS）等國際組織之會員，目前與191國維持邦交關係。",
                "foreign_policy" =>
                    "(一)	確立「全球樞紐國家」(Global Pivot State)」目標，擴大在國際社會之作用及影響力，為增進自由、和平及繁榮作出貢獻；(二)	以強化韓美全面戰略同盟為優先，對中國強調相互尊重合作，持續改善對日關係並推進韓美日合作。(三)	對北韓提出「大膽構想」政策，倘北韓採取實質性無核化措施，韓國將協助北韓改善經濟狀況；(四)	推動經濟安全外交，積極參與G20、APEC、OECD、WTO等多邊經濟合作機制。",
                "time_range" => "比臺灣快1小時。",
                "resident" => "駐韓國臺北代表部及駐釜山辦事處(2)",
                "national_flag" => "太極旗",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            53 => [
                "name" => "奈及利亞聯邦共和國",
                "name_in_en" => "Federal Republic of Nigeria",
                "short_name" => "奈及利亞",
                "short_name_in_en" => "Nigeria",
                "capital" => "阿布加 (Abuja)",
                "capital_in_en" => "Abuja",
                "national_day" => "10月1日",
                "join_un_day" => "1960年10月7日",
                "area_size" => "面積923,768平方公里",
                "geographic" =>
                    "奈及利亞聯邦共和國位於西非，地處非洲大陸之中、西非要衝，鄰近赤道，南濱南大西洋幾內亞灣，東鄰查德及喀麥隆，西接貝南，北連尼日。",
                "religion" => "回教(50%)、另基督教與傳統宗教合計50%",
                "bilaterial_relations" => null,
                "main_bounds" => "奈拉(Naira, NGN)",
                "exchange_rate" =>
                    "詳細匯率資訊建議至臺灣銀行(https://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/4d3c9bc5-4703-4e9c-96dc-59523eb7f205.GIF",
                "is_diplomatic" => 0,
                "language" =>
                    "當地主要語言： 英語為官方語言，奈國全境約有三百餘種方言，主要三大部族豪薩(Hausa)、尤魯巴(Yoruba)及伊博(Igbo)各有其族裔語言。",
                "main_media" =>
                    "奈國主要民營報紙計有 The Punch、The Nation、The Sun Daily 、The Guardian、 Thisday、Vanguard、Daily Independent、Leadership 、New Telegraph 及 Business Day(商業)等。主要新聞台為 Channels TV、Africa Independet Television 、TVC與Arise TV等商業有線電視頻道。",
                "population" => "約2億1340萬人（2021），為非洲人口最多的國家。",
                "voltage" => "電壓規格：奈國電壓220伏特；但插座為英式三孔。",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/a64e0a58-53b0-413f-b49e-1fc9860f1af9.jpg",
                "political_system" => "聯邦制共和國。",
                "history_intro" =>
                    "1914年英國殖民統治奈及利亞，1960年10月1日宣布獨立，脫離英國殖民統治。1963年改採聯邦制，現仍屬大英國協會員國。奈國劃分為聯邦、州及地方三級政府，另有西北、東北、北北、西南、東南及南南等六大政治區。",
                "parliament" =>
                    "兩院制，由參議院(109席)及眾議院( 360席)所組成。",
                "cabinet" => "由總統任命之聯邦行政會議，並未設總理。",
                "judiciary" =>
                    "分為最高法院、上訴法院、聯邦高等法院及各州地方法院。",
                "headman" => "總統:布哈里 (Muhammadu  Buhari)",
                "fa_minister" => "Geoffrey Onyeama",
                "major_political_parties" =>
                    "執政黨「全民進步黨」 (All Progressives Congress, APC )，最大在野黨「人民民主黨 」( Peoples Democratic Party, PDP )及部分小黨。",
                "financial_incoming" =>
                    "國內生產毛額4,408.3億美元 (2021年)，平均國民生產毛額2,065,7美元(2021年)，經濟成長率3.6%(2021)",
                "export_value" => "461.17億美元（2021）",
                "import_value" => "508.39億美元（2021）",
                "export_item" =>
                    "石油、天然氣、石油煉製品、可可、橡膠、芝麻、蝦蟹等海產",
                "import_item" =>
                    "機械、化學產品、電信資訊及運輸設備、汽機車及零組件、工業與機械類製品。",
                "main_export_countries" =>
                    "印度、西班牙、法國、南非、美國及加拿大",
                "main_import_countries" =>
                    "中國大陸、美國、比利時、英國、荷蘭、南非及土耳其",
                "export_to" => "1億4千95萬9,104美元（2022年）",
                "import_from" => "4億8,357萬4,418美元（2022年）",
                "foreign_relationship" =>
                    "奈國與美、英、中之關係密切；但另奈國較依賴中國所提供之財政經濟與基礎建設援助。",
                "foreign_policy" =>
                    "1.促進及保護奈國國家利益，2.促進非洲整合及支持非洲團結，3.促進國際合作， 4.遵重國際法及條約，5.促進公正的世界經濟秩序。",
                "time_range" => "較台灣慢7個小時。",
                "resident" => "駐奈及利亞代表處",
                "national_flag" =>
                    "國旗中的綠色代表奈國森林與豐富的天然資源，白色代表和平與團結。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            54 => [
                "name" => "奧地利共和國",
                "name_in_en" => "Republic of Austria",
                "short_name" => "奧地利",
                "short_name_in_en" => "Austria",
                "capital" => "維也納",
                "capital_in_en" => "Vienna",
                "national_day" => "10月26日",
                "join_un_day" => "1955年12月14日",
                "area_size" => "83,871 sq km",
                "geographic" =>
                    "奧地利位在歐洲中部，北接德國及捷克、東鄰斯洛伐克及匈牙利、南接斯洛維尼亞及義大利、西鄰瑞士及列支敦士登，多瑙河由西而東貫穿北部全境，自古即為歐亞交通孔道。全國土地面積83,871平方公里，西部與南部為阿爾卑斯山區與丘陵地佔全國面積74%，東部及東北部為平原及盆地約佔全國面積26%。",
                "religion" => "天主教為主(73.8%)",
                "bilaterial_relations" => null,
                "main_bounds" => "歐元(EURO)",
                "exchange_rate" => "歐元兌美金約1:0856(2023年4月)。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/5cb1c4d0-43f4-4d8a-b92f-4ee598153b75.GIF",
                "is_diplomatic" => 0,
                "language" => "德語為主，英語亦通。",
                "main_media" =>
                    "奧地利重要報紙有維也納日報(Wiener Zeitung)、新聞報(Die Presse)、標準報(Der Standard)、皇冠報(Kronen)、信使報(Kurier)、奧地利報(Oesterreich)、今日報(Heute)；最重要電視台為奧地利國家廣電公司(ORF，無線，共三台)；最大廣播電台為奧地利國家廣電公司(ORF Radio，共三台)。",
                "population" => "9,102,626 (2023年)",
                "voltage" => "220V/50﹐電視系統為PAL，家電插頭為雙圓柱型。",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/acd9c648-29fa-4846-828e-2de52259fcde.jpg",
                "political_system" =>
                    "奧地利為一聯邦共和國，共有9個邦，分別為 Wien（維也納）、Niederösterreich（下奧地利）、Oberösterreich（上奧地利）、Salzburg（薩爾茲堡）、Tirol（提洛）、Vorarlberg（弗阿貝格）、Kärnten（肯特)、Steiermark（史泰爾馬克)及 Burgenland（布根蘭）。國會分上議院（Bundesrat）及下議院（Nationalrat），政府體制為內閣制，總理為聯邦政府最高行政首長，任期5年，目前係由人民黨（Austrian People’s Party, ÖVP）與綠黨(The Green Alternative, Die Grüne)聯合執政。",
                "history_intro" =>
                    "西元996年文獻首次出現“Ostarichi“（=Österreich）字眼；1156年奧地利獲提升為「公爵領地」；1278年哈布斯堡家族之魯道夫一世（Rudolf I.）打敗波西米亞（Bohmen）地區之統治者Ottokar，開啟哈布斯堡家族在奧地利之統治；1867年與匈牙利共建「奧匈帝國」；1908年「奧匈帝國」正式兼併波斯尼亞及黑賽哥維納；1918年哈布斯堡家族統治結束，建立第一個民主共和國，1920年制定第一部憲法；1945年建立第二共和。第二次世界大戰後，軸心國戰敗，奧地利於1945年成立第二共和，1955年奧國與美英法俄四強簽署「國家條約」恢復主權，並加入聯合國。1960年奧國加入「歐洲自由及貿易協會」（EFTA），1979年奧國爭取維也納成為第三個設有聯合國相關機構之城市，1995年加入「歐盟」（EU），同年維也納成為「歐洲安全及合作組織」（OSCE）總部所在地，1998年及2006年奧國擔任「歐盟」輪值主席國主席。奧國非「北約」（NATO）成員，惟參與該組織之「和平關係夥伴」。奧國在東西方陣營對峙時代以「中立國」身分及位處兩大陣營樞紐地帶，以維持區域穩定及重新塑造東西關係為對外關係之重點。自中東歐鐵幕垮台及奧國加入歐盟後，奧國利用周邊環境條件之改變，積極推動歐盟東部新會國及巴爾幹區域之穩定，奧國因此視自身為進入中東歐之橋樑。2018年下半年奧國擔任歐盟之輪值主席國。",
                "parliament" =>
                    "奧國國會分為「國民議院」（Nationalrat, 代表選民之利益）及「聯邦議院」(Bundesrat, 代表各邦之利益)兩部分，但以國民議院為最終權力機關。 國民議院－共有183個席位，由全國16歲以上公民普選產生，席位係依據人口比例分配給全國9個邦的43個選區，各選區投票數除以席位，即為各政黨必須獲得之基本票數，再依比例代表制分配席位。國會議員任期5年。依據慣例，國民議院之第一至第三議長係由國會第一至第三大黨黨團成員依序出任。聯邦議院－共62席，由總統依人口統計數（每10年辦理一次）核定各邦分配之席位後，再由各邦議會依政黨在邦議會中席次比例選派，故其任期隨各邦邦議會改選而調整。因上奧邦公民數變化，席次自2013年9月起減為61席。",
                "cabinet" =>
                    "由國會多數黨執政。政府除總理府外，設12個部。政府內閣計有16名閣員，除正、副總理外，尚包括12名部長及2名政務次長。",
                "judiciary" =>
                    "司法機關分為最高法院、高等法院及地方法院三級；另有憲法法院及行政法院分別主管解釋憲法與行政訴訟。",
                "headman" =>
                    "總統由人民直選產生，對外代表國家，具有必要時解散國會及政府、任命政府內閣閣員等權力，任期六年，連選得連任一次。現任總統為Alexander Van der Bellen，係於2022年10月9日連任，係於2023年1月26日第2任就職。",
                "fa_minister" =>
                    "Alexander Schallenberg，為職業外交官，曾擔任總理府歐盟事務協調處處長及總理，2021年12月6日就任。",
                "major_political_parties" =>
                    "人民黨(ÖVP)、社會黨(SPÖ)、自由黨(FPÖ)及綠黨(Die Grüne)。",
                "financial_incoming" =>
                    "歲入2,217億歐元，歲出2,360億歐元 （2022年）",
                "export_value" => "1,941億歐元（2022年）",
                "import_value" => "2,137億歐元（2022年）",
                "export_item" =>
                    "道路車輛、電力機械裝置及設備、醫藥品、特殊工業專用機械、鋼鐵等(2022年)",
                "import_item" =>
                    "道路車輛、電力機械裝置及設備、醫藥品、石油製品、通用工業機械設備等(2022年)",
                "main_export_countries" =>
                    "德國、義大利、美國、瑞士、匈牙利、法國、波蘭、捷克、中國、英國等(2022年)",
                "main_import_countries" =>
                    "德國、中國、義大利、瑞士、捷克、俄羅斯、美國、波蘭、荷蘭、匈牙利等 (2022年)",
                "export_to" => "5億8,985萬美元(2022年)",
                "import_from" => "11億3,713萬美元(2022年)",
                "foreign_relationship" =>
                    "第二次世界大戰後，美、英、法、俄四國與奧地利簽訂對奧和約，1955年7月27日奧國恢復獨立。同年12月14日奧地利成為永久中立國，除重視與他國之友好關係外，並積極參與聯合國維護和平政策及救援組織內之各項活動。1979年維也納聯合國中心揭幕，「國際原子能總署」及「聯合國工業發展組織」等14個聯合國系統國際組織以當地為永久會址，奧地利希望藉由參與國際政治活動及國際組織，增加其在國際社會之份量。1995年加入歐盟及申根公約，1999年加入歐元區。2006年上半年擔任歐盟輪值主席。 2008年10月奧地利當選聯合國非常任理事國(2009-2010)，2018年下半年再擔任歐盟輪值主席。",
                "foreign_policy" =>
                    "第二次世界大戰後，奧國恢復獨立主權。1955年12月14日奧地利成為永久中立國，因此一向重視與其他國家之友好關係，並積極參與聯合國維護和平政策及救援組織內之各項活動。前外長Sebastian Kurz於2013年12月就任後宣示加強參與歐盟事務、鞏固與西巴爾幹關係、關注人道議題、重視國際參與等將為奧國外交新路線。奧國人民黨與綠黨聯合政府於2020年1月成立後，部分歐盟事務自外交部改移由總理府主政，奧國的外交路線並無重大改變。",
                "time_range" =>
                    "夏令時間(每年3月最後一個週日開始)與台灣相差6個小時(慢6小時)，冬令時間(每年10月最後一個週日開始)與台灣相差7個小時(慢7小時)。",
                "resident" => "駐奧地利代表處",
                "national_flag" =>
                    "奧地利國旗是一面由三條橫間所組成的國旗，最上處和最底處都是紅色，中間是白色，是世界上最古老的國旗之一。",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            55 => [
                "name" => "委內瑞拉玻利瓦共和國",
                "name_in_en" => "Bolivarian Republic of Venezuela",
                "short_name" => "委內瑞拉",
                "short_name_in_en" => "Venezuela",
                "capital" => "卡拉卡斯（CARACAS）市。",
                "capital_in_en" => "Caracas",
                "national_day" => "7月5日",
                "join_un_day" => "1945年11月5日",
                "area_size" => "916,445平方公里",
                "geographic" =>
                    "位於南美洲大陸北端，北臨加勒比海，東北濱大西洋，東接蓋亞那，西南接哥倫比亞，東南與巴西接攘，環境富於變化，西部是安地斯山脈，沿著海岸線有海岸山脈，東南部為蓋亞那山塊。河川約1,060條，南美洲第三大河奧利諾科河貫穿國土中央注入大西洋。",
                "religion" => "天主教為主。",
                "bilaterial_relations" => null,
                "main_bounds" =>
                    "數位玻利瓦 (Bolívar Digital，自2021年10月開始實施)",
                "exchange_rate" => 'US$1=24.3886委幣 (2023年3月31日,Oanda匯率)',
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/514f0635-5095-491e-a420-5a8c448a6b84.JPG",
                "is_diplomatic" => 0,
                "language" => "西班牙語",
                "main_media" =>
                    "國家通訊社(Agencia Venezolana de Noticias)、國家電視台(Venezolana de Televisión)、委內瑞拉電視台(Televen)、公共電視台(TVes)、國家日報(El Nacional)、環球日報(El Universal) 、世界晚報(El Mundo)。",
                "population" =>
                    "29,789,730人(2022年) 平均餘命：70.12歲(男)及76.62歲(女)(2022年)",
                "voltage" => "110伏特",
                "time_difference" => "-12:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/effbbc66-2aa1-434e-9b62-81774b4119f8.jpg",
                "political_system" =>
                    "委內瑞拉實行總統制，總統任期6年，得連選連任無限制。國會為一院制，由全國直選產生，第一屆國會於2000年8月成立、2017年8月4日馬杜洛政權另舉辦選舉成立全民制憲會議，架空原2015年選舉之國會。2020年12月6日國會大選馬杜洛所屬之社會黨及友黨在277席中獲得253席，重新掌控國會主導權，至反對陣營組成之原2015年國會頃續延任期至2024年1月。",
                "history_intro" =>
                    "1810年4月19日委內瑞拉脫離西班牙的控制，並於該年7月5日正式宣告獨立。1822年委內瑞拉與哥倫比亞、巴拿馬與厄瓜多等4國合組大哥倫比亞共和國，嗣委內瑞拉和厄瓜多脫離大哥倫比亞共和國，並在1830年獨立建國。委內瑞拉在19世紀和20世紀前半期，長期處於政治不穩定、政治鬥爭和獨裁統治。前總統查維斯(Hugo Chávez)雖連續4次以民選方式獲得政權，惟任內採取極端左傾政策，打壓異己，至2013年3月5日病逝後，由副總統馬杜洛(Nicolás Maduro)代理總統。同年4月14日舉行大選，馬杜洛順利當選總統，並於2018年5月20日舉行之總統選舉獲勝連任，繼續堅守查維斯社會主義路線，惟選舉合法性備受質疑，美歐等國際社會主要民主國家多不承認。",
                "parliament" =>
                    "國會為一院制，共有國會議員167人。2017年8月4日成立全民制憲會議，成員545人，原國會職權遭架空。2020年12月6日，委舉行新一屆國會選舉，執政的社會黨（PSUV）獲得253個席位，佔全部席位（277個）的91.34%，原反對陣營倒戈獲政權支持使用原黨旗幟之偽反對派獲得20個席位。",
                "cabinet" => "內閣共33部，部長均由總統任命",
                "judiciary" =>
                    "最高法院為全國最高司法機構，由院長、兩名副院長和32名大法官組成。",
                "headman" => "總統馬杜洛(Nicolás Maduro)",
                "fa_minister" => "希爾(Yván Gil)",
                "major_political_parties" =>
                    "除執政黨「委內瑞拉統一社會主義黨」(Partido Socialista Unido de Venezuela, PSUV)以外，另有反對陣營之「民主行動黨」(Acción Democrática)、「第一正義黨」(Primero Justicia)、「新時代黨」(Un Nuevo Tiempo)、「人民意願黨」(Partido de Voluntad Popular)及其他黨等。前述主要在野大黨結合其他反政權組織成立跨黨「團結平台聯盟」(Plataforma Unitaria)續進行民主抗爭。",
                "financial_incoming" =>
                    "歲入82.1億美元，歲出134.6億美元，財政赤字52.5億美元(2022)",
                "export_value" => "32.91億美元(2021, ITC)",
                "import_value" => "72.48億美元(2021,ITC)",
                "export_item" =>
                    "鋼鐵（29.9%）、原油（17.4%）、礦渣(11.7%)、水產品（9.1%）、鋁製品（4.1%）、銅製品(3.2%)、酒精飲料(3.1%）（2021）",
                "import_item" =>
                    "機械設備（10.1%）、麥（9.1%）、電器設備（7.4%）、食用油（5.5%）、塑膠製品(4.8%）（2021）",
                "main_export_countries" =>
                    "美國（37%）、印度（20%）、中國大陸（18%）、新加坡（6%）、古巴（3%）、哥倫比亞（0.3%）（2019）",
                "main_import_countries" =>
                    "中國大陸（26.5%）、美國（22%）、巴西（7.8%）、哥倫比亞（6%）、墨西哥（4%）、阿根廷（3.5%）（2019）",
                "export_to" => "1,690萬美元(2022.1-2022.10)",
                "import_from" => "1,624萬美元(2022.1-2022.10)",
                "foreign_relationship" =>
                    "委國政治專制，經濟崩潰，民生凋敝，治安敗壞，尤其糧食醫藥匱乏，人道危機惡化，根據聯合國最新統計迄有600萬委國民眾外逃至南美鄰國與歐美國家謀求生機，造成區域性人道問題。2018年9月包括哥倫比亞等七國聯合向國際刑事法庭以「危害人類罪」控告馬杜洛迫害人權。馬杜洛政權執政合法性備受質疑，美國為首之西方民主國家陣營聯合以不承認及經濟財政制裁等手段進行外交孤立，美、委兩國於2019年2月斷交，美國川普政府於2019月8月宣布對委國馬杜洛政權實施全面經濟制裁，現任拜登政府為促成委國朝、野恢復談判，於2022年5月鬆綁馬杜洛政權制裁，並以雙方談判進度成果隨時評估調整。委國朝野2022年11月恢復談判，拜登政府進一步鬆綁對馬杜洛政權制裁。委內瑞拉因鄰國哥倫比亞前任杜傑(Iván Duque)政府承認反對勢力領袖瓜伊多(Juan Guaidó)為臨時總統，於2019年2月與哥國斷交。哥國現任貝德羅(Gustavo Petro)總統於2022年8月7日上任後，兩國恢復邦交，已相互任命駐使，2023年起全面恢復陸路邊界通行。委內瑞拉受到左派國家包括俄羅斯、中國、古巴、土耳其、伊朗、尼加拉瓜等支持。",
                "foreign_policy" =>
                    "委國自查維斯政權開始與美國為首西方民主國家持續交惡，至2019年因該等國家承認瓜伊多為臨時總統，馬杜洛政權陸續與美國及哥倫比亞斷交。對外與左派國家包括俄羅斯、中國、古巴、土耳其、伊朗、尼加拉瓜、玻利維亞、哥倫比亞及巴西交好。",
                "time_range" => "晚台灣12小時",
                "resident" => "無，由我國駐哥倫比亞代表處兼轄",
                "national_flag" =>
                    "委國國旗由黃藍紅三色組成，黃色部分代表豐饒的土地，藍色代表人民的勇氣、紅色代表獨立先烈的鮮血。國旗藍色部分上有8顆白色五角星，其中7顆代表響應獨立之7個省份，2006年查維茲總統呼應美洲獨立領導者玻利瓦(Simón Bolíar)1827年頒布之國旗，增加代表蓋亞那第8顆五角星 (註:委內瑞拉與蓋亞那存有領土爭議)。",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            56 => [
                "name" => "孟加拉人民共和國",
                "name_in_en" => 'People\'s Republic of Bangladesh',
                "short_name" => "孟加拉",
                "short_name_in_en" => "Bangladesh",
                "capital" => "達卡",
                "capital_in_en" => "達卡(Dhaka)",
                "national_day" => "3月 26日",
                "join_un_day" => "1974年9月17日",
                "area_size" => "孟國面積14萬8千餘平方公里，約為台灣四倍大",
                "geographic" =>
                    "孟加拉東南部鄰緬甸，東、西、北三面與印度毗連，南臨孟加拉灣。除東南部為丘陵外，全國幾無高地，多為沖積平原。",
                "religion" => "89.1% 伊斯蘭教10% 印度教0.9% 其他信仰",
                "bilaterial_relations" => null,
                "main_bounds" =>
                    "孟加拉塔卡Taka(2021/04/20  1美元兌換83達卡)。",
                "exchange_rate" =>
                    "詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/cf07f19d-1344-4cc3-9c93-04d8b9cf146c.gif",
                "is_diplomatic" => 0,
                "language" =>
                    "孟國人民使用孟加拉語(Bengali)，英語亦普遍使用，但一般民眾多僅能以簡單英文單字溝通，有時出現溝通困難狀況。孟國曾為英國殖民地，後接受巴基斯坦統治，1970年代爭取獨立時以母語運動凝聚全國人心。復以孟國全境通行孟語，不似鄰國印度方言眾多，必須以英語為共通語，與印度相較，孟人普遍英語程度較差。近年來孟國體認國際化之重要，英語教育漸受重視，受過高中教育以上者，多可說流利英文。",
                "main_media" =>
                    "英文日報：The Daily Star 孟加拉文報：Prothom Alo 電視台：Channel 1(Bangladesh TV)",
                "population" =>
                    "孟加拉人口約1.665億，佔全球人口約0.58％（資訊來源：2019年孟加拉財政部），係舉世人口第7稠密之國家。",
                "voltage" => "孟國電壓為220伏特，惟因電力供給不足，斷電頻仍。",
                "time_difference" => "-2:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/0d72955a-685d-45c0-9788-2540f43a55b0.jpg",
                "political_system" => "為內閣制國家。",
                "history_intro" =>
                    "最早之居民為原住孟加拉人，其後來自中亞之雅利安人，以及來自阿拉伯、土耳其、阿富汗、波斯等地之回教徒相繼入侵，與當地人融合而成現今之孟加拉人。早期回教徒係為傳教及經商目的前來孟加拉，迄13至18世紀期間卻演變成當地統治者，期間有時為獨立王國，時為印度統治王朝之附庸。1757年孟加拉之回教統治者Siraj-ud-dowla與英國交戰，不幸戰敗，從而淪為英國殖民地達190年之久。1947年英國將其在南亞之殖民地依宗教屬性劃分成信奉印度教之印度及信奉回教之巴基斯坦兩國，孟加拉為當時之東巴基斯坦。然東、西巴基斯坦間存有種族、文化差異，且巴國政治權力及行政資源幾由西巴基斯坦壟斷，東巴基斯坦人民積怨日深，1971年爆發獨立戰爭，印度因與巴國不睦，參戰支援東巴基斯坦對抗西巴基斯坦，西巴基斯坦佔領軍於同年12月16日投降，孟加拉正式獨立建國。",
                "parliament" =>
                    "國民議會(JATIYA SANGSAD)為一院制，議會重要職務包含議長(Speaker)，兩位副議長(Deputy Speaker)，聯合執政黨之黨鞭(Whips)數名，反對黨黨魁(Leader of the Opposition)及黨鞭。國會議員350人，其中300名按選區直接選舉產生，50名則由已當選議員間接選舉產生之女性議員，議員任期5年。現任議長為Shirin Sharmin Chaudhury, 係孟加拉開國以來第一位女性議長。",
                "cabinet" =>
                    "憲法雖賦予總統任命總理、大法官及選委會主委，宣布特赦及同意國會所通過法令之權，實為虛位元首。除總理外，內閣包含24名部長(Cabinet Ministers)、9名顧問(Advisers)、19名國務部長(State Ministers)及3位次長(deputy Ministers)。現任總理為執政黨「孟加拉人民聯盟黨」（Bangladesh Awami League，AL）黨魁Sheikh Hasina，伊於上(2018)年12月30日孟國大選後連任。",
                "judiciary" =>
                    "包含最高法院(Supreme Court],上訴法院 ( Appellate Division)，高等法院(High Court)及地方法院(District Court) 。Syed Mahmud Hossain為現任大法官(Chief Justice)，上(2018)2月2日就任。",
                "headman" => "總統Abdul Hamid為虛位元首，於2018年4月就任",
                "fa_minister" =>
                    "Abdul Kalam Abdul Momem，自2019年1月擔任外長。",
                "major_political_parties" =>
                    "主要政黨包括執政之孟加拉人民聯盟黨 （AL），主要反對黨「孟加拉民族主義黨」（Bangladesh Nationalist Party，BNP)及新成立之「孟加拉民族黨」(Bangladesh Jatiya Party，JP)。孟加拉於2018年12月30日舉行第11次大選，參與選舉之主要政黨包括以總理Sheikh Hasina為首之執政黨「孟加拉人民聯盟黨」（AL），「孟加拉民族主義黨」（BNP)及新成立之「孟加拉民族黨」(JP)。AL因有執政優勢，成功選戰策略，在300席議員中，獨奪259席，約86.3%選票，反觀BNP僅獲3.4%選票， 獨立人士則得10.3%選票。",
                "financial_incoming" => "收424.4億美元、支611.6億美元(2019年)",
                "export_value" => "328.3億美元(2019年)",
                "import_value" => "506.9億美元(2019年)",
                "export_item" => "成衣 、針織品、農產品、冷凍食品",
                "import_item" => "棉花、機械、化學品、食品",
                "main_export_countries" => "德國、美國、英國、西班牙",
                "main_import_countries" => "中國大陸、印度、新加坡、馬來西亞",
                "export_to" =>
                    "11.6億美元(2019年)。主要產品：氯乙烯、合成纖維、熱軋之鐵、乙烯聚合物、其他針織品",
                "import_from" =>
                    "9,639萬美元(2019年)。主要產品：男用西裝、Ｔ恤衫、女用西裝、皮革或胚皮革、 男用襯衫",
                "foreign_relationship" =>
                    "（一）2016年10月中共國家主席習近平赴孟加拉國是訪問，哈希娜(Sheikh Hasina)總理與習近平舉行會談，兩國關係提升為戰略合作夥伴關係，雙方同意共同推進「一帶一路」建設，兩國簽署總值逾200億美元之融資及投資協定。2017年11月，中共外長王毅訪孟，會見哈希娜總理及外長阿里(Abul Hassan Mahmud Ali)。2021年3月17日，中國總理習近平就孟加拉國父拉曼誕辰100週年暨慶祝獨立50週年活動，以視頻向哈米德總統、哈希娜總理及孟加拉政府和人民問候與祝福。 2021年4月27日中國國防部長魏鳳和訪問孟加拉推動軍事合作。（二）印度莫迪(Narendra Modi)總理上台後，推動東行及睦鄰政策，積極解決與孟國多年邊境爭議，兩國關係逐漸好轉。莫迪總理復藉各種機會與孟加拉加強關係，先於2015年6月訪問孟加拉，與孟政府簽訂多項合作協議，嗣於2015年及2017年兩次藉出席聯合國大會場場合會晤哈希娜總理，2018年12月31日於哈希娜贏得大選當日，莫迪總理係第一位致電恭賀哈希娜總理連任之外國領袖。2021年3月26日莫迪總理再度訪問孟加拉，參加孟國獨立週年活動，會晤哈希娜總理，以增進雙邊關係。   (三)孟國總理哈希娜於2017年4月赴印度進行為期4天之正式訪問，該次訪問係伊上任7年來首次訪問印度，並與莫迪總理舉行雙邊會談，雙方並簽署22項協定，印度應允提供45億美元之信用貸款，協助孟國各項發展。孟加拉外長Abdul Momen於2019年2月訪印，拜會印度總理莫迪，莫迪總理向M外長重申印度將在此一基礎上，續與甫連任之哈希娜總理保持密切合作關係；M外長亦拜會印度外長史瓦拉基(Sushma Swaraj)，並出席「第5屆印度孟加拉聯合諮商委員會會議」( India - Bangladesh  Joint Consultative Commission Meeting)，與印方簽署電視廣播，藥用植物及反貪腐等數項合作備忘錄。  (四)美國及日本爲應對中共在南亞及印度洋擴張勢力企圖， 近年來加強對孟國援助合作，冀盼與孟國建立密切夥伴關係。2020年10月14日美國副國務卿畢根(Stephen Beigun)訪問孟加拉稱，美國正尋求長遠解決若興雅難民之道，併商談雙邊合作機制。（五）孟國為聯合國低度開發國家理事會主席，呼籲已開發國家或發展中國家對低度開發國家應無條件開放市場。",
                "foreign_policy" =>
                    "（一）追求獨立自主之國家利益。（二）不結盟國家(NAM)會員國，奉行聯合國決議做為解決國際爭端政策。（三）主張以南亞國家區域合作協會(SAARC)作為解決南亞國家間政治、貿易等紛爭之區域組織。（四）致力於加強與鄰國印度、巴基斯坦、中國大陸及緬甸之雙邊關係。（五）積極爭取美、日、歐盟等先進國家援助，並鼓勵外商投資。",
                "time_range" => "孟加拉全國僅一個時區，較台灣慢二小時。",
                "resident" => "駐印度代表處兼轄",
                "national_flag" =>
                    "https://zh.wikipedia.org/wiki/%E5%AD%9F%E5%8A%A0%E6%8B%89%E5%9B%BD%E5%9B%BD%E6%97%97比例	3:5啟用日期	1972年1月17日形式	綠底紅圓的旗幟。",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            57 => [
                "name" => "安哥拉共和國",
                "name_in_en" => "Republic of Angola",
                "short_name" => "安哥拉",
                "short_name_in_en" => "Angola",
                "capital" => "魯安達",
                "capital_in_en" => "Luanda",
                "national_day" => "11月11日",
                "join_un_day" => "1976年12月1日",
                "area_size" => "1,246,700平方公里",
                "geographic" =>
                    "非洲西南部，東鄰尚比亞，西瀕大西洋，南接納密比亞，北部與東北部與剛果接壤。",
                "religion" => "天主教(41.1%)、基督教(38.1%)",
                "bilaterial_relations" => null,
                "main_bounds" => "匡撒(Kwanza)(AOA)",
                "exchange_rate" => '1 US$≒423 Kwanza (2022/06).',
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/af040143-04da-4bf4-9c7a-a055cc147d85.GIF",
                "is_diplomatic" => 0,
                "language" => "葡萄牙語",
                "main_media" =>
                    "安哥拉日報(Jornal de Angola)、Angolense、安哥拉通訊社(Angola Press)、國營安哥拉電視台(TPA)",
                "population" => "34,795,28人 (2022est)",
                "voltage" => "220伏特",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/b251e0b2-ed28-4423-8d46-5df42494450a.JPG",
                "political_system" => "民主共和/總統制",
                "history_intro" =>
                    "安哥拉原為葡萄牙之非洲屬地，二次大戰以後，當地反抗殖民主義之風潮風起雲湧，主要之民族運動組織有1956年成立之安解（MPLA）、1962年成立之安哥拉民族解放陣線（FNLA）及1966年成立之安盟（UNITA）。1974年4月25日葡萄牙發生軍事政變，Spinola將軍上台，主張放棄葡萄牙非洲領土，葡政府乃於1975年1月與上述三組織簽訂Alvor協定，同意安哥拉於同年11月11日正式獨立，由三組織先成立過渡政府，惟旋即發生武裝衝突，MPLA在前蘇聯及古巴之支持下擊敗由南非支持之FNLA及UNITA取得政權，UNITA退守安國東南角繼續與MPLA政府進行武裝鬥爭，直至2002年方結束長達27年之內戰。",
                "parliament" =>
                    "最高立法機關為國民會議（Assembleia Nacional），共220席，以選舉政黨得票比率產生，任期5年。",
                "cabinet" =>
                    "由23名部長及18名省長組成，均由總統任命，直接對總統負責。總理則由執政黨推薦。",
                "judiciary" =>
                    "以葡萄牙民法及習慣法為基礎，設有最高法院及各省法院。",
                "headman" => "若昂•洛倫索 (JOÃO MANUEL GONÇALVES LOURENÇO)",
                "fa_minister" => "Tete António",
                "major_political_parties" =>
                    "安解（Movimento Popular de Libertação de Angola；MPLA）、安盟（União Nacional para a Independência Total de Angola；UNITA）、安哥拉民族解放陣線（Frente Nacional de Libertação de Angola；FNLA）、Social Renewal Party (PRS)。",
                "financial_incoming" =>
                    "2017年政府財政收入388.9億美元，支出446.4億美元",
                "export_value" => "210億美元(2020)",
                "import_value" => "151.2億美元(2020)",
                "export_item" => "原油、鑽石、天然氣、精製石油產品、船舶",
                "import_item" => "精製石油產品、待拆解舊船、肉類、米、棕梠油",
                "main_export_countries" =>
                    "中國(62%)、印度(10%)、阿拉伯聯合大公國(4%) (2019)、葡萄牙(3%)、西班牙(3%)",
                "main_import_countries" =>
                    "中國(22%)、葡萄牙(15%)、 奈及利亞(6%)、比利時(6%)、美國(5%)(2019)",
                "export_to" => "8,644,382美元 (2021)",
                "import_from" => "286,028,662美元 (2021)",
                "foreign_relationship" =>
                    "與南非競逐區域事務領導國，致兩國關係偶有緊張。2005年與中國大陸簽署貿易合作協議及其境內豐富油源使兩國關係密切。目前致力於加強與俄羅斯、巴西、印度及中東的關係。安國為非洲聯盟（African Union, AU）會員國。",
                "foreign_policy" => "中立不結盟",
                "time_range" => "較台灣慢7小時",
                "resident" => "由駐南非代表處兼理。",
                "national_flag" =>
                    "安哥拉國旗是以橫向分間的紅色和黑色作為背景，再加上一個弧形的齒輪、一把柴刀以及一顆黃星構成，根據安哥拉的憲法說明，紅色代表了「安哥拉人民在殖民壓迫下所流的鮮血、民族自由鬥爭與國防。」，黑色表達出了「非洲大陸」。而國旗中的齒輪、星與柴刀的黃色比喻為國家的財富，齒輪有「工人與工業生產」之意，星代表了團結和進步，而柴刀就象徵著「農業生產與武裝抗爭」。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            58 => [
                "name" => "安地卡及巴布達",
                "name_in_en" => "Antigua and Barbuda",
                "short_name" => "安地卡",
                "short_name_in_en" => "Antigua and Barbuda",
                "capital" => "聖約翰",
                "capital_in_en" => "Saint John’s",
                "national_day" => "11月1日",
                "join_un_day" => "1981年11月11日",
                "area_size" => "442.6平方公里",
                "geographic" =>
                    "位於東加勒比海，距離美國屬地波多黎各東南方250英哩處。由三個島組成，其中安地卡島面積108平方英哩（280平方公里），巴布達島62平方英哩（161平方公里），另一無人居住之小島里東達（Redonda，0.5平方英里，或1平方公里）。",
                "religion" => "76.4%基督教、10.4%天主教",
                "bilaterial_relations" => null,
                "main_bounds" =>
                    '東加勒比海幣(East Caribbean Dollar)，簡稱東加幣(EC$)。',
                "exchange_rate" =>
                    '使用東加勒比海幣(East Caribbean Dollar)，簡稱東加幣(EC$)，兌換美元採固定匯率，1美元兌換2.6882東加幣， 1東加幣約折合新台幣11.50元。',
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/865c0d82-924d-4572-98a2-59554eaeed7c.GIF",
                "is_diplomatic" => 0,
                "language" => "英文及當地方言",
                "main_media" =>
                    "The Daily Observer安政府電台及電視台, Antigua &amp; Barbuda Broadcasting Service, Caribbean Radio Service,the Caribbean Radio Lighthouse, The Caribbean Times, ZDK Liberty Radio.",
                "population" => "99,175人(2021年)",
                "voltage" => "230V",
                "time_difference" => "-12:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/3657eb44-134a-49a1-8b46-a802b733f179.jpg",
                "political_system" =>
                    "議會制政府，分上議院及下議院。英國國王為國家元首，英國國王代理人為總督。上議院議員由總督提名任命，下議院議員由選舉產生，總理通常為下議院多數黨領袖。",
                "history_intro" =>
                    "1632年起英國人從鄰近的聖克里斯多福前往安地卡，開啟殖民時代，為產製蔗糖外銷歐洲，英國人自非洲大批進口黑奴，1666年法國人曾短暫佔領該島，其餘絕大部份時間安地卡均為英國殖民地，歷經三百年停滯不前的殖民時代，1938年一個英國皇家委員會成立，調查英屬加勒比海地區社會經濟狀況，鼓勵工人成立工會，1943年柏德（V. C. Bird）出任第一位工會領袖，為工人爭取權益，並主導安地卡邁向獨立，1951年安地卡人民獲得普選權，1956年成立部會型政府，1967年成為自治邦，內政自主，外交及國防由英國管轄，1981年11月一日獨立建國。",
                "parliament" =>
                    "分參、眾兩院，眾院17席，每5年改選一次；參院計17席，由總督根據總理及反對黨領袖之提名任命。巴布達議會則由9名議員組成。2018年3月21日的大選由安地卡勞工黨(ALP)以59.24%票數比贏得15席。",
                "cabinet" =>
                    "由總理及各部會首長所組成，負責執行全國行政事務，集體向國會負責，總理由國會多數黨袖擔任。",
                "judiciary" =>
                    "採英國普通法，與東加勒比海六國採相同制度，設有地方法院、簡易裁判法院，並受設於聖露西亞之東加勒比海最高法院管轄，最後上訴機構為英國樞密院。",
                "headman" =>
                    "奉英國國王查爾斯三世(Charles III)為元首，以總督：威廉斯(Sir Rodney Williams)為代表人。總理：布朗恩(Gaston Browne)。",
                "fa_minister" => "艾佛里·保羅·葛林 (Everly Paul Chet Greene)",
                "major_political_parties" =>
                    "有安地卡勞工黨（Antigua Labour Party﹐ALP）、聯合進步黨（United Progressive Party﹐UPP），（該黨係由三個政黨組成，即聯合國家民主黨United Progressive Party or UPP、安地卡加勒比自由運動Antigua Caribbean Lberation Movement-ACLM及進勞工運動Progressive Labor Movement-PLM組成）及巴佈達人民行動黨（Barbuda People’s Movement﹐BPM）等。",
                "financial_incoming" => "國內生產毛額14.2億美元 (2020年)",
                "export_value" => "0.22億美元 (2020年)",
                "import_value" => "4.96億美元 (2020年)",
                "export_item" => "蘭姆酒、蔗糖、手工藝品、棉花、加工食品等。",
                "import_item" =>
                    "機械設備、運輸工具、生產用原料（含半製成品）、燃料與潤滑油、建材、農產品、汽車、食品及日用品等。",
                "main_export_countries" => "波蘭、喀麥隆、英國、美國、西班牙",
                "main_import_countries" => "美國、波蘭、中國大陸、英國、西班牙",
                "export_to" => "33.8萬美元(2020年)",
                "import_from" => "4.5萬美元 (2020年)",
                "foreign_relationship" => "良好，與中國大陸建立外交關係。",
                "foreign_policy" => "對外政策採和睦政策",
                "time_range" => "較台灣晚12小時",
                "resident" => "無，由我國駐聖克里斯多福及尼維斯大使館兼轄",
                "national_flag" =>
                    "國旗由五色三角形組成。靠旗杆一邊和旗飛角一邊為兩個紅色三角形的直角邊。紅色三角形另兩條直條邊構成旗地下方的長邊。兩個紅色三角形的斜邊和旗地上方平行長邊構成大三角形，由黑、藍、白三色組成，黑色部分中間是半輪金黃色的太陽。　國徽中心圖案為盾徽。盾面上半部為冉冉升起的旭日，象徵該島國人民的獨立、自由；下半部白、藍相間的波紋代表加勒比海，窯塔象徵該國發達的製糖工業。盾徽左側為牝鹿和甘蔗，右側是牡鹿和龍舌蘭；上端有一隻菠蘿和木槿屬植物花；下端的綬帶上寫著「人人全力以赴，方能取得勝利」。",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            59 => [
                "name" => "安道爾侯國",
                "name_in_en" => "Principality of Andorra",
                "short_name" => "安道爾",
                "short_name_in_en" => "Andorra",
                "capital" => "老安道爾",
                "capital_in_en" => "Andorre-la-Vieille",
                "national_day" => "9月8日",
                "join_un_day" => "1993年7月28日",
                "area_size" => "面積為468平方公里。",
                "geographic" =>
                    '安道爾侯國（加泰羅尼亞語：Principat d\'Andorra）是西南歐一個非常小的內陸公國，位於庇里牛斯山脈東南部，與法國和西班牙毗鄰。',
                "religion" => "天主教",
                "bilaterial_relations" => null,
                "main_bounds" => "歐元",
                "exchange_rate" =>
                    "1歐元約兌換新台幣32.235元（依據2022年3月29日臺灣銀行即期匯率賣出）。詳細匯率資訊建議至臺灣銀行（https://rate.bot.com.tw/xrt?Lang=zh-TW）或兆豐商銀（https://www.megabank.com.tw/personal/foreign-service/forex）網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/7485b1b6-0216-44de-a71d-a3e308c8507c.GIF",
                "is_diplomatic" => 0,
                "language" => "官方語言為加泰隆尼亞語(Catalan)",
                "main_media" =>
                    'Diari D\'Andorra、El Periodic D\'Andorra、L\'Art de Viure、Revista de Tot',
                "population" => "人口78,015人(2020年)",
                "voltage" => "220V",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/a633bd73-402a-444d-937e-39445dabfb4c.jpg",
                "political_system" => "君主立憲制",
                "history_intro" =>
                    "傳說法蘭克王國查理大帝為回報安道爾人與莫耳人作戰，頒布特許狀，在安道爾設立教區，命西班牙烏格爾的伯爵擔任主教一職。11世紀時，烏格爾主教和法國開始爭論安道爾的主權問題。1278年雙方達成協議，安道爾由法國富瓦伯爵和烏格爾主教兩方共同擁有主權（協議內的範圍是今日安道爾政治和國土的雛型），後來富瓦伯爵的主權轉到納瓦拉國王手中，法王亨利四世於1607年下令法國國家元首與烏格爾主教同時擁有安道爾的主權。1933年法國以世界經濟大蕭條導致社會動盪之名，佔領安道爾。1934年7月12日一名俄羅斯冒險家鮑里斯·斯科瑟廖夫（俄語：Борис Скосирев）在烏格爾向大眾宣布，他擁有安道爾的主權，同時對烏格爾主教宣戰。但八天之後，7月20日即被西班牙當局逮捕，並立刻被驅逐出境。1936到1940年間，法國因西班牙內戰而派兵駐守安道爾。二戰期間，安道爾維持中立，成為維琪法國與西班牙之間的走私重鎮。安道爾長時間與世隔絕，只保持對法國和加泰羅尼亞的關係。近年來安道爾致力改善交通和通訊，並大力發展旅遊業。1993年，安道爾舉行公投，通過安道爾憲法，並成為聯合國的一員。",
                "parliament" => "全國委員會",
                "cabinet" => "總理Xavier Espot Zamora (自2019年5月16日起)",
                "judiciary" => "司法及內政部(部長Josep-Maria Rossell Pons)",
                "headman" =>
                    "法國總統Emmanuel Macron(2017年5月14日就任)與西班牙Urgel地區主教Joan-Enric VIVES I Sicilia (2003年5月12日就任)共同擔任",
                "fa_minister" => "Gilbert Saboya Sunyé",
                "major_political_parties" =>
                    "安道爾自由黨、社會民主黨、民主黨、Unio Laurediana",
                "financial_incoming" =>
                    "2021年財政收入約10.97億歐元，財政支出約10.89億歐元。",
                "export_value" => "約1.02億歐元(2020年)",
                "import_value" => "約12.67億美元(2020年)",
                "export_item" => "煙草、香菸、家具",
                "import_item" => "食品、電力",
                "main_export_countries" => "西班牙、法國",
                "main_import_countries" => "西班牙、法國、義大利、日本、美國",
                "export_to" => "402,768美元(2021年)",
                "import_from" => "168,404美元(2021年)",
                "foreign_relationship" => "良好",
                "foreign_policy" => "由法國代理",
                "time_range" =>
                    "較台灣慢7小時(3月底至10月底日光節約時間較台灣慢6小時)",
                "resident" => "無（駐法國代表處兼轄）",
                "national_flag" => "由藍、黃、紅三條垂直排列",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            60 => [
                "name" => "宏都拉斯共和國",
                "name_in_en" => "Republic of Honduras",
                "short_name" => "宏都拉斯",
                "short_name_in_en" => "Honduras",
                "capital" => "德古西加巴",
                "capital_in_en" => "Tegucigalpa",
                "national_day" => "9月 15日",
                "join_un_day" => "1945. 12. 17",
                "area_size" => "112,492平方公里",
                "geographic" =>
                    "中美洲，西與瓜地馬拉和薩爾瓦多交界，東南與尼加拉瓜接壤，北臨加勒比海，南有一小段太平洋海岸。宏國屬熱帶氣候，全年分乾濕兩季，雨季為6-10月，宏京位處海拔約1000公尺左右之高地，高溫可達30度以上，低溫在13、14度，溫差甚大，年均溫為攝氏20度；宏北汕埠大城近海且地勢低，高溫可達35、36度，低溫約在21、22度。",
                "religion" => "天主教",
                "bilaterial_relations" => null,
                "main_bounds" => "Lempira",
                "exchange_rate" => "1美元約兌換宏幣24.48元(2022年5月)",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/customfile/sites/flagurllink/59025d20-bf99-4200-adbf-93929ab71a20.jpg",
                "is_diplomatic" => 0,
                "language" => "西班牙語",
                "main_media" =>
                    "電視台：全國性商業電視台包括HCH、3、5、6、7、8、9、10、11、12、13、21、30、36、42、45、GO TV、LTV等；2家宗教電視台。其中Canal 8為國營電視台，其他較重要電視頻道如Canal 3、Canal 5、Canal 7、Canal 10及HCH等。廣播電台：此間電台林立，係一般民眾資訊及消息之主要來源，重要者為宏都拉斯國家廣播電台、美洲電台、宏都拉斯電台及全球電台等。報紙：論壇報(La Tribuna)、前鋒報(El Heraldo)、新聞報(La Prensa)、國家報(El Pais)、宏國電子報(Hondudiario)、過程網報(Proceso)等。 雜誌：說明白週刊(Hablemos Claro)、Estilo等。",
                "population" => "9,701,532人(2023年3月)",
                "voltage" =>
                    "電壓規格：110伏特。宏國電力公司(ENEE)電話：（504）2232-8000, 2232-8100。",
                "time_difference" => "-14:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/4e4652d2-eb0d-4836-9a39-20a80e9119b9.JPG",
                "political_system" => "共和國體，總統制，採三權分立。",
                "history_intro" =>
                    "1821年宏都拉斯脫離西班牙統治宣佈獨立。 與其他中美洲國家均臣屬於墨西哥帝國，1823年墨西哥帝國傾覆，同年中美洲各國組成聯邦，宏政府領袖莫拉桑(Francisco Morazán)於1829年當選為中美洲聯邦總統(任期1830-1834;1835-1839)。 1838年宏國退出聯邦，自成獨立共和國。 1839年頒訂新憲法。 1840年宏國建都於Comayagua，自1880年起正式遷都至Tegucigalpa。",
                "parliament" =>
                    "國會採一院制，議員直接民選，任期4年。國會議長為雷棟多(Luis Redondo)。",
                "cabinet" => "由總統任命各部會首長。",
                "judiciary" =>
                    "宏國司法機關分為地方法院、上訴法院及最高法院三級，獨立行使司法權。2023年2月16日完成（2023-2030）改選，現任最高法院院長為Rebeca Lizette Ráquel Obando。",
                "headman" => "卡蕬楚總統(Iris Xiomara Castro Sarmiento)",
                "fa_minister" => "雷伊納(Eduardo Enrique Reina)",
                "major_political_parties" =>
                    "6個主要政黨，按國會席次依序為：自由重建黨50席(Partido de Libertad y Refundación, Libre)、國民黨44席(Partido Nacional, PN)、自由黨22席(Partido Liberal, PL)、救世主黨10席(Partido Salvador de Honduras, PSH)、反貪黨1席(Partido Anticorrupción, PAC)及基督民主黨1席(Partido Democracia Cristiana, DC)。",
                "financial_incoming" => "257億美元 (2022) (資料來源:宏國央行)",
                "export_value" =>
                    "63億728萬美元(2022年累計至第2季) (資料來源:宏國央行)",
                "import_value" =>
                    "87億320萬美元(2022年累計至第2季) (資料來源:宏國央行)",
                "export_item" =>
                    "咖啡、香蕉、棕櫚油、冷凍蝦、雪茄、黃金、肥皂、甜瓜、動物飼料及蔬菜。",
                "import_item" =>
                    "燃料油、醫療用品器材、調理食品、玉米、貨車、鋼片、塑膠製品、小客車及黃豆油渣。",
                "main_export_countries" =>
                    "美國、薩爾瓦多、瓜地馬拉、德國、義大利、比利時、尼加拉瓜、墨西哥、英國、加拿大(台灣為第12大出口市場)(2022年累計至第2季) (資料來源:宏國央行)",
                "main_import_countries" =>
                    "美國、中國、瓜地馬拉、薩爾瓦多、墨西哥、哥斯大黎加、哥倫比亞、巴西、印度、俄國(台灣為第19大進口來源國) (2022年累計至第2季) (資料來源:宏國央行)",
                "export_to" =>
                    "5,827萬美元(2022年1~11月，較2021年同期衰退6.67%)",
                "import_from" =>
                    "1億1,485萬美元(2022年1~11月，較2021年同期成長60.35%)",
                "foreign_relationship" =>
                    "宏國目前與世界100餘國維持外交關係，並在30餘國設立使領館；尤其在墨西哥及美墨邊境等多處增設領事館，以協助處理非法偷渡美國之宏國人民遣返等相關問題。而在宏京設立大使館之友邦20餘個國家，以及聯合國與世界糧農組織等10餘個國際組織。宏都拉斯積極參與包括聯合國(UN)、美洲國家組織(OAS)、拉丁美洲暨加勒比海國家共同體(CELAC)及中美洲經濟整合體(SICA)、世界衛生組織(WHO)、世界貿易組織(WTO)、聯合國氣候變遷綱要公約(UNFCCC)等全球及區域性國際組織。宏都拉斯與薩爾瓦多在Fonseca海灣之兔島主權爭議存在多年，並與尼加拉瓜及薩爾瓦多均有Fonseca海灣疆域及太平洋出海口之爭議。",
                "foreign_policy" =>
                    "宏國政府秉持「不論意識型態，願與世界各國發展關係」之ㄧ貫立場，並維繫與周邊國家友好關係。",
                "time_range" => "較台灣時間慢14小時",
                "resident" => null,
                "national_flag" =>
                    "上下兩道藍色的橫條和中間一道白色橫條外加5顆藍色五角星所構成",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            61 => [
                "name" => "密克羅尼西亞聯邦",
                "name_in_en" => "Federated States of Micronesia",
                "short_name" => "密克羅尼西亞",
                "short_name_in_en" => "Micronesia",
                "capital" => "帕理基爾 (Palikir)",
                "capital_in_en" => "Palikir",
                "national_day" => "11月3日為密國獨立紀念日。",
                "join_un_day" => "1991年9月17日",
                "area_size" => "702 平方公里",
                "geographic" =>
                    "密國位於北緯6°55′、東經158°15′，屬為西太平洋島國。",
                "religion" =>
                    "50%為羅馬天主教徒 , 47%為新教徒 , 3%為其他宗教信仰。",
                "bilaterial_relations" => null,
                "main_bounds" => "使用美元。",
                "exchange_rate" =>
                    "依美金匯率，詳細匯率資訊建議至臺灣銀行(https://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/f0924746-ce3d-45cb-979a-e2806b393b6b.gif",
                "is_diplomatic" => 0,
                "language" =>
                    "密國官方語言為英文，當地人民亦使用楚克語、科斯雷語、波納佩語、雅浦語。",
                "main_media" => "The Kaselehlie Press(為密國唯一全國性報紙)。",
                "population" => "約10萬5千人。",
                "voltage" => "電壓與台灣同為110伏特，使用美式插座。",
                "time_difference" => "+3:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/f966ec64-0801-46e5-bde4-6468b14720b1.JPG",
                "political_system" =>
                    "密國為聯邦共和國，政體仿美國為三權分立之總統制。",
                "history_intro" =>
                    "密克羅尼西亞聯邦在歷史上為密克羅尼西亞人所居住，曾被西班牙、德國、日本殖民。1947年為聯合國建立太平洋群島託管地，並於1986年獨立。",
                "parliament" =>
                    "國會為一院制，總計有14席，其中4席由Yap, Chuuk, Pohnpei及Kosrae州各產生1席,任期4年，另外10席由單一選區直選產生，任期2年。",
                "cabinet" =>
                    "政府體制採三權分立之總統制，並有行政、立法、司法政府機構。",
                "judiciary" =>
                    "密國設有「FSM最高法院」，並在各州設有「州法院」。FSM最高法院法官須經總統提名，國會同意始得任命，屬終身職。",
                "headman" => "David W. Panuelo，於2019年5月11日就任。",
                "fa_minister" => "Kandhi A. Elieisar",
                "major_political_parties" => "密國並無政黨政治。",
                "financial_incoming" => "9,100萬美元（2018）",
                "export_value" => "1億2,900萬美元 (2019)",
                "import_value" => "1億2,100萬美元 (2019)",
                "export_item" => "魚、黑胡椒、檳榔",
                "import_item" =>
                    "糧食、衣物、電腦、家電用品、家具、車輛、電器、機械零件、工具等",
                "main_export_countries" => "泰國、日本、中國 (2019)",
                "main_import_countries" =>
                    "美國、中國、日本、中華民國(臺灣) (2019)",
                "export_to" => "8,303,398美元（2020）",
                "import_from" => "21,999美元(2020）",
                "foreign_relationship" =>
                    "密國與中國大陸、美、日、南韓及澳等84國建立有外交關係。",
                "foreign_policy" =>
                    "1986年11月3日與美國締有自由聯合協定（Compact of Free Association），該協定於2004年續約20年(至2023年止)，密國依約享有內政、外交自主權及各項援助，另美國維護其國防安全。",
                "time_range" =>
                    "楚克、雅蒲二州較台灣快2小時，波納佩、科斯雷二州則較台灣快3小時。",
                "resident" =>
                    "我國在密克羅尼西亞聯邦未設館處，該國家/地區由我國駐馬紹爾群島共和國大使館兼轄。",
                "national_flag" =>
                    "密國國旗由藍底及四顆白色五角星所組成。藍底代表太平洋，四顆白色五角星分別代表雅浦、楚克、波納佩和科斯雷等4個島。",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            62 => [
                "name" => "寮人民民主共和國",
                "name_in_en" => 'Lao People\'s Democratic Republic',
                "short_name" => "寮國",
                "short_name_in_en" => "Laos",
                "capital" => "永珍",
                "capital_in_en" => "Vientiane",
                "national_day" => "12月2日",
                "join_un_day" => "1955年12月14日",
                "area_size" => "236,800平方公里",
                "geographic" =>
                    "位於中南半島東北部，為半島僅有之內陸國，東與越南接鄰，南鄰柬埔寨， 西界泰國，西北接緬甸，北與中國雲南省為界。",
                "religion" => "佛教徒占64.7%，基督徒1.7%，其他或無信仰33.5%",
                "bilaterial_relations" => null,
                "main_bounds" => "Kip",
                "exchange_rate" =>
                    "匯率：2023年1月約1美元（USD）兌換17,100寮幣（LAK），惟實際仍須視匯率浮動情形而定，建議至OANDA（https://www1.oanda.com/currency/converter/）等網站參考當日匯率；另我國銀行目前並未提供寮幣匯兌服務。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/6b1a626e-e373-4ea9-a00d-ab8cd3ab3d40.gif",
                "is_diplomatic" => 0,
                "language" =>
                    "官方語言為寮語（與泰語相通，屬泰語支系），首都永珍地區略通英語、法語、華語及越語。",
                "main_media" =>
                    "人民報、巴特寮報、新萬象報、人民軍報。英文報有VIENTIANETIMES 法文報有LE RENOVATEUR",
                "population" =>
                    "7,749,595人，平均壽命68.15 歲(2022，CIA Factbook)",
                "voltage" => "220伏特",
                "time_difference" => "-1:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/eb0547ca-1ea1-424c-b054-9e10acd6fa58.JPG",
                "political_system" => "社會主義國家",
                "history_intro" =>
                    "寮國古稱老撾，由Fa Ngum於 1353 年建立，十四世紀中葉，越南黎朝派兵攻寮，寮人求和，入貢越南，成為越南之藩屬。1873 年泰國入侵寮國，越南無力保護，寮淪為泰藩屬。1893 年法國壓迫泰國，雙方於1907年簽訂法暹條約，寮國成為法國之保護國。1940 年 9 月寮被日本佔領，1945 年日本投降，東南亞各國掀起反殖民運動，寮國同年10月組織臨時政府，罷黜當時由法國扶植之沙文旺國王，宣佈獨立。1946 年沙文旺復位，並草擬憲法，選舉國會議員。1949 年法寮簽訂總協定，法國承認寮國在法屬聯邦中自治。1954 年 7 月簽署日內瓦停戰協定，法國自寮國撤軍，結束法國在寮之殖民統治。寮國獨立後，國內中立派、共黨及保皇派發生武裝衝突，經國際調停於 1962 年 7 月在日內瓦簽訂協定，寮國保持中立，並成立由溥瑪親王為總理，蘇化努旺為副總理之聯合政府。1964年聯合政府分裂，蘇化努旺組成之「巴特寮」獲中國、蘇聯及北越支助，勢力日漸擴張。1973 年 2 月，寮國簽署恢復和平與民族和睦協定，1974 年 4 月成立以溥瑪為總理之新聯合政府和以蘇化努旺為主席之政治聯合委員會。1975 年 4 月美軍自南越和高棉完全撤退後，西貢和金邊相繼淪陷，寮共則攻克寮國南部三省省會，不久永珍失陷。1975 年12月 2 日寮共宣佈廢除600年的君主制度，成立「寮人民民主共和國」。1988年公佈施行外國投資法，允許私人企業成立，1977年加入ASEAN。",
                "parliament" =>
                    "寮國國會為國家最高權力與立法機構，負責制定憲法及立法，議員共164名代表，每任任期為5年。2021年2月21日國會改選，選出第九屆國會代表。",
                "cabinet" => "總理為Sonexay Siphandone (自2022年12月30日)",
                "judiciary" => "寮國最高人民法院為最高司法機關",
                "headman" => "國家主席Thongloun Sisoulith (自2021年3月22日)",
                "fa_minister" => "Saleumxay Kommasith",
                "major_political_parties" => "寮國人民革命黨",
                "financial_incoming" =>
                    "財政收入佔GDP 14.02%，財政支出佔GDP 19.26%，政府負債GDP佔比107.1（2022，IMF World Economic Outlook）",
                "export_value" => "70億美元 (2021年)",
                "import_value" => "60億美元 (2021年)",
                "export_item" => "木製品、咖啡、電力、鋅礦、銅礦、金礦、成衣",
                "import_item" => "機械設備、車輛、燃油、消費性產品",
                "main_export_countries" => "中國、泰國、越南、印度、日本",
                "main_import_countries" => "泰國、中國、越南、韓國、日本",
                "export_to" => "500萬美元(2022年1月-11月)",
                "import_from" => "1,500萬美元(2022年1月-11月)",
                "foreign_relationship" =>
                    "寮國自1975年建國以來，已與全球140個國家建交，於1997年7月與越南、柬埔寨及緬甸同時加入東南亞國協。",
                "foreign_policy" =>
                    "寮國採行「和平、獨立及與各國維持友好」之外交政策，在和平共處原則基礎上與世界各國發展友好關係，重視發展與周邊鄰國及東協國家間之關係，並特別強調保持與越南之「特殊關係」，加強與中國大陸之睦鄰友好與合作關係，並改善與西方國家之關係。2004年11月寮國首次舉辦東協高峰會議，2016年寮國為東協輪值主席國，其國家主席Choummaly Sayasone與美國總統歐巴馬在美國舉行首屆美國-東協特別高峰會議。",
                "time_range" => "較台灣慢1小時",
                "resident" => "相關業務由我駐越南代表處兼轄",
                "national_flag" =>
                    "http://na.gov.la/index.php?option=com_content&amp;id=78&amp;itemid=134&amp;lang=en",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            63 => [
                "name" => "尚比亞共和國",
                "name_in_en" => "Republic of Zambia",
                "short_name" => "尚比亞",
                "short_name_in_en" => "Zambia",
                "capital" => "路沙卡",
                "capital_in_en" => "路沙卡",
                "national_day" => "10月 24日",
                "join_un_day" => "1964年12月1日",
                "area_size" => "752,614平方公里",
                "geographic" =>
                    "位於非洲中南部，東鄰馬拉威，東南與辛巴威及莫三比克為界，南與波札那為鄰，西南與納米比亞相接，西接安哥拉，西北與北毗鄰剛果民主共和國，東北與坦尚尼亞接壤。",
                "religion" => "基督教(75.3%)、天主教(20.2%)",
                "bilaterial_relations" => null,
                "main_bounds" => "夸加 Zambian Kwacha（ZMW）",
                "exchange_rate" => '1 US$≒12.092 ZMW (2019/04)',
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/c204f471-d82c-4c2e-859b-68168b97be1a.GIF",
                "is_diplomatic" => 0,
                "language" => "英語（官方語言）",
                "main_media" =>
                    "尚比亞官方日報(Zambia Daily Mail)、尚比亞時報(Times of Zambia)、郵報(The Post)、尚比亞國家廣播公司(Zambia National Broadcasting Corporation ，ZNBC)。",
                "population" => "18,739,391人 (2021年3月估計)",
                "voltage" => "220伏特",
                "time_difference" => "-6:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/6f97c1b4-aa40-4058-8fc2-45e8272f8b64.JPG",
                "political_system" => "共和制/總統制",
                "history_intro" =>
                    "尚比亞原稱北羅德西亞。18世紀時，阿拉伯販奴者入侵，英國傳教士相繼而來。英國南部非洲公司（British South African Company）獲英政府授權，自1889年起將北羅德西亞列為保護地，直至英政府於1924年派駐總督設立行政與立法會議為止。1953年北羅德西亞根據英樞密院令與尼亞薩蘭（今之馬拉威）及南羅德西亞（今之辛巴威）組成中部非洲聯邦，迨1963年12月，該聯邦宣告解散。1964年1月進行選舉，「聯合國家獨立黨」（United National Independence Party，簡稱UNIP）獲勝，成立自治政府，該黨領袖卡翁達（Kenneth David Kaunda）出任第一任總理，同年5月獲得英政府允許，於10月24日正式脫離英國獨立，定名為尚比亞共和國，由卡氏出任首任總統，並於12月1日加入聯合國，並加入為大英國協及非洲聯盟（AU）會員國。尚比亞於卡翁達執政時期，曾於1972年起禁絕其他政黨活動，由「聯合國家獨立黨」施行一黨專政。1990年恢復多黨制。2016年8月11日之總統選舉，倫古(Edgar Lungu)當選後於9月13日宣誓就職。2021年8月12日第6次總統大選，由前在野黨-國家發展聯合黨（United Party for National Development, UPND）哈凱恩德·希其萊瑪(Hakainde Hichilema)勝選成爲第8任總統。",
                "parliament" =>
                    "國民議會共159席，其中150席由人民直選， 8席由總統任命，餘1席為議長，任期均5年。",
                "cabinet" => "由總統自國會議員中任命內閣閣員。",
                "judiciary" =>
                    "最高法院為終審機關，下設高等法院，負責審理各項民、刑事案件，具有無限制之管轄權。至地方法院雖可受理一般民、刑案件，惟管轄權相當有限。",
                "headman" => "哈凱恩德·希其萊瑪(Hakainde Hichilema)",
                "fa_minister" => "史丹利 卡卜博(Stanley Kakubo)",
                "major_political_parties" =>
                    "當前執政黨為國家發展聯合黨（United Party for National Development, UPND）主要反對黨有愛國陣線（Patriotic Front, PF）、多黨民主運動黨（Movement for Multiparty Democracy, MMD）、民主發展論壇（Forum for Democracy and Development, FDD）、民主發展聯盟(Alliance for Democracy and Development, ADD)、以及聯合國家獨立黨（United National Independence Party, UNIP）。",
                "financial_incoming" =>
                    "2019年政府財政收入501.08億美元，支出659.67億美元",
                "export_value" => 'US$84.74億(2020)',
                "import_value" => 'US$58.92億(2020)',
                "export_item" => "白金、棉花、煙草、黃金、鐵合金、紡織品及成衣",
                "import_item" =>
                    "機器、運輸設備、石油產品、電力、肥料、糧食、成衣",
                "main_export_countries" =>
                    "史瓦帝尼、中國大陸、剛果民主共和國、新加坡、南非",
                "main_import_countries" =>
                    "南非、剛果民主共和國、中國大陸、科威特、阿拉伯聯合大公國",
                "export_to" => "235萬美元(2021)",
                "import_from" => "1.7億美元(2021)",
                "foreign_relationship" =>
                    "1964年12月1日加入聯合國，採睦鄰政策，並致力改善與西方大國之關係，係大英國協、非洲聯盟（African Union, AU）、南部非洲發展共同體（SADC）等國際組織的成員。",
                "foreign_policy" => "中立不結盟",
                "time_range" => "較台灣慢6小時",
                "resident" => "駐南非代表處兼轄。",
                "national_flag" =>
                    "尚比亞國旗是一面縱橫比例2：3，底部為綠色 （象徵自然資源）的旗幟，右下角從左到右有紅 （象徵爭取自由）、黑 （象徵人民）、橙 （象徵礦產資源）三條直條。其上有一兩翼舒張的雄鷹，象徵尚比亞人民擁有克服困難的勇氣和決心。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            64 => [
                "name" => "尼加拉瓜共和國",
                "name_in_en" => "Republic of Nicaragua",
                "short_name" => "尼加拉瓜",
                "short_name_in_en" => "Nicaragua",
                "capital" => "馬納瓜",
                "capital_in_en" => "Managua",
                "national_day" => "9月15日",
                "join_un_day" => "1945年10月24日",
                "area_size" =>
                    "130,668平方公里　(約為台灣面積之3.6倍，係中美洲面積最大之國家，其中9,240平方公里為湖泊)",
                "geographic" =>
                    "北與宏都拉斯接壤，南與哥斯大黎加交界，東瀕加勒比海，西臨太平洋，在北緯11度與15度間。",
                "religion" => "天主教",
                "bilaterial_relations" => null,
                "main_bounds" => "戈爾多巴(Córdoba)",
                "exchange_rate" =>
                    "1美元可兌換36.9科多巴(Córdoba)(2023年1月4日)",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/7b5b6867-ebcb-4c33-a14b-86281690a18e.jpg",
                "is_diplomatic" => 0,
                "language" => "西班牙語",
                "main_media" =>
                    "尼加拉瓜全國性報紙有「新聞報」（La Prensa），另首都地區有「新聞快遞報」(Bolsa de Noticas)及「戰壕報」（La Trinchera），均僅接受訂閱。近年網路電子報興起，總統府所屬為政府電子報(El 19 Digital)。電視台現有14家，其中第6台為國家電視台，餘為民營商業電視台。國營廣播電台Radio Nicaragua一家，另民營廣播電台超過100家。",
                "population" =>
                    "全國人口約為666 萬人(截至2023年1月最新數據，官方尚未發布2022年數據)",
                "voltage" => "110V，與臺灣插座相同",
                "time_difference" => "-14:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/130561d3-9525-4d07-ba50-35786b840c6f.jpg",
                "political_system" =>
                    "總統制，任期五年。行政、立法、司法及選舉四權分立。",
                "history_intro" =>
                    "西班牙人抵達前，尼加拉瓜居民均為原住民，其總酋長名為「尼加勞」（Nicarau）， 該國因而得名。1821年9月15日，尼加拉瓜與中美其他四國同時宣佈脫離西班牙統治而獨立，但基礎未定，1822年加入墨西哥帝國，1823年5國成立中美洲聯邦。後尼國自由黨人士主張脫離聯邦自行獨立，與保守黨紛爭不息，1838年由黨爭演成內戰，結果自由黨獲勝，同年4月20日建立尼加拉瓜共和國。",
                "parliament" =>
                    "國會採一院制，計有議員92席(含依憲法第133條規定卸任總統及總統大選最高票落選之總統候選人各1席)，任期5年。其中執政之桑定黨75席、自由憲政黨(PLC) 10席、獨立自由黨(PLI) 1席、自由聯盟2席、共和聯盟1席、保守黨1席及原住民Yatama黨1席，其中因總統奧德嘉與副總統穆麗優連任，由卸任元首擔任之席次懸缺，故有91席。現任議長為博拉斯(Gustavo Eduardo Porras)。",
                "cabinet" =>
                    "尼國屬總統制，行政部門共設有內政、外交、國防、交通、工商發展、財政、衛生、教育、勞工、公共、農業、家庭經濟、環境與天然資源、家庭青少年及兒童、青年及能源與礦業等16個部，另設有婦女、文化、觀光、電信、社會保險、森林、天然災害防治、金融分析、金融監管、職訓、國土監測、能源等獨立機構。",
                "judiciary" =>
                    "司法機關分為地方法院，上訴法院及最高法院，最高法院由總統提名，經國會投票同意通過之16位大法官組成，任期5年，現任院長為拉慕絲（Alba Luz Ramos）。",
                "headman" =>
                    "奧德嘉總統(José Daniel Ortega Saavedra)、穆麗優副總統(Rosario Murillo Zambrana)",
                "fa_minister" => "孟卡達(Denis Moncada)",
                "major_political_parties" =>
                    "桑定解放陣線黨(FSLN) , 獨立自由黨(PLI],自由憲政黨(PLC)",
                "financial_incoming" =>
                    "國內生產毛額：138億5,000萬美元(截至2023年1月最新數據，官方尚未發布2022年數據)平均國民所得：1,943美元((截至2023年1月最新數據，官方尚未發布2022年數據) 外債：143億830萬美元(截至2023年1月最新數據，官方尚未發布2022年數據)  失業率：4.3%(截至2023年1月最新數據，官方尚未發布2022年數據)通貨膨脹率：7.21%(截至2023年1月最新數據，官方尚未發布2022年數據)",
                "export_value" =>
                    "63億480萬美元(截至2023年1月最新數據，官方尚未發布2022年數據)",
                "import_value" =>
                    "76億7,160萬美元(截至2023年1月最新數據，官方尚未發布2022年數據)",
                "export_item" =>
                    "黃金、咖啡、冷凍牛肉、冷藏牛肉、蔗糖、蝦及龍蝦、紡織品、花生、濃縮及調味乳(2021年)",
                "import_item" =>
                    "汽油及柴油、醫藥製劑、原油、塑膠製包裝材料、其他食物調製品、載貨用機動車輛、通訊器具（含手機）(2021年)",
                "main_export_countries" =>
                    "美國、薩爾瓦多、哥斯大黎加、墨西哥、哥斯大黎加、宏都拉斯(截至2023年1月最新數據，官方尚未發布2022年數據)",
                "main_import_countries" =>
                    "美國、中國大陸、墨西哥、瓜地馬拉、哥斯大黎加(截至2023年1月最新數據，官方尚未發布2022年數據)",
                "export_to" => "2,017萬美元(2022年1至11月)",
                "import_from" => "1億357萬美元(2022年1至11月)",
                "foreign_relationship" =>
                    "古巴、委內瑞拉等ALBA成員國為其對外關係之優先，與俄羅斯、伊朗、埃及、巴勒斯坦等亦保有密切友好關係；2018年4月18日因社改陳抗鎮壓引起歐美國家譴責，雙邊關係現漸形疏遠；又因2021年總統大選前尼政府大量逮捕反對陣營候選人，致選舉正當性遭質疑，包括美國、英國、歐盟、美洲國家組織等均未予承認，關係進一步惡化。",
                "foreign_policy" =>
                    "尼國慣於譴責殖民主義與帝國主義，支持中美洲統合，惟因執政桑定黨之意識形態屬左派路線，與委內瑞拉、古巴、波利維亞等ALBA（波利瓦美洲人民聯盟）集團成員交好，雖反對以美國為首西方世界以帝國及霸權思維處理國際事務，但積極配合美國打擊洗錢、毒品販運、組織犯罪及資恐等國際合作措施；經濟方面並與美國在內之各國協商簽署自由貿易協定以發展經貿關係，但因尼政府持續打壓異議人士，美國 考慮限縮中美洲自由貿易協定（DR-CAFTA）對尼待遇。",
                "time_range" => "較臺北慢14小時",
                "resident" => "無",
                "national_flag" =>
                    "尼加拉瓜國旗為一面由藍-白-藍三條橫條組成的旗幟，象徵尼加拉瓜位於太平洋與大西洋之間。白色代表和平。藍-白-藍的條狀旗幟歷史上也是中美洲聯合省旗幟的顏色。中間有國徽，國徽則以火山及湖泊構成。",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            65 => [
                "name" => "尼日共和國",
                "name_in_en" => "Republic of Niger",
                "short_name" => "尼日",
                "short_name_in_en" => "Niger",
                "capital" => "尼阿美",
                "capital_in_en" => "尼阿美(Niamey)",
                "national_day" => "12月18日",
                "join_un_day" => "1960年9月20日",
                "area_size" => "1,267,000平方公里",
                "geographic" =>
                    "北接阿爾及利亞、利比亞，南鄰奈及利亞、貝南，東接查德，西鄰馬利及布吉納法索",
                "religion" => "伊斯蘭教(99.3%)、基督教(0.3%)及其他原始宗教",
                "bilaterial_relations" => null,
                "main_bounds" => "西非法郎(XOF)",
                "exchange_rate" =>
                    "1EUR＝655.957XOF（固定匯率）。詳細匯率資訊建議至臺灣銀行（https://rate.bot.com.tw/xrt?Lang=zh-TW）或兆豐商銀（https://www.megabank.com.tw/personal/foreign-service/forex）網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/c5fd5177-6afb-4f83-a8c8-a78f9832571e.GIF",
                "is_diplomatic" => 0,
                "language" => "法語、豪薩語(Hausa)、扎瑪語(Djerma)",
                "main_media" =>
                    "薩赫勒報（Le Sahel）、尼日新聞社、薩赫勒電視台、薩赫勒之聲國家廣播電台。",
                "population" => "2,448萬 人（2022年）",
                "voltage" => "220伏特",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/3a8ba7c7-e4e6-4c6c-9e05-f46c7685ef36.JPG",
                "political_system" => "半總統制; 總統由民選產生，任期5年。",
                "history_intro" =>
                    "西元7世紀時，尼日河畔已有宋海（Songhai）帝國存在。1806年蘇格蘭人先進入尼日，自1890年以後法國人進入尼日，1896年法國軍隊在尼日設立前哨站，實施軍事統治，1921年成立法殖民地行政系統，1944年改為法海外屬地。1956年組織自治政府，1960年8月3日由進步黨狄奧里（Hamani Diori）領導宣布脫離法國獨立，獨立迄1991年止，受一黨專制軍事統治，至1993年才正式成立民主政府。",
                "parliament" =>
                    "單一議會制（National Assembly），共171 席，由人民直選，任期5年。本屆議會於2020年12月組成。",
                "cabinet" =>
                    "總統是國家元首，亦是最高行政首長；總理由總統提名任命，並與總統共享部分行政權。",
                "judiciary" => "設有各級法院",
                "headman" => "巴祖姆(Mohamed Bazoum)",
                "fa_minister" => "馬沙杜(Hassoumi Massoudou)",
                "major_political_parties" =>
                    "尼日民主暨社會主義黨(Parti Nigérien pour la Démocratie et le Socialisme-Tarayya)、尼日非洲聯盟民主運動黨(Mouvement Démocratique Nigérien pour une Fédération Africaine)、共和國愛國運動黨(Mouvement Patriotique pour la République)、發展社會國家運動 (Mouvement National pour la Société de Développement)與民主社會黨(Convention Démocratique et Sociale)。",
                "financial_incoming" =>
                    "財政總收入約11.97億美元，總支出約21.24億美元(截至2022年9月)。外債約40.06億美元(2021年)。",
                "export_value" => "13.38億美元(2020年)",
                "import_value" => "35.42億美元(2020年)",
                "export_item" => "鈾礦、豆類、天然氣、石油",
                "import_item" => "食品、機械、汽車及零件、水泥",
                "main_export_countries" =>
                    "阿拉伯聯合大公國、中國、法國、巴基斯坦",
                "main_import_countries" =>
                    "中國、法國、阿拉伯聯合大公國 、象牙海岸、印度、奈及利亞、多哥、土耳其",
                "export_to" => "48,177美元（2022年）",
                "import_from" => "204,940美元（2022年）",
                "foreign_relationship" =>
                    "1960年9月20日加入聯合國。為保障國家安全，致力與鄰國保持友好關係。另為抵抗來自「博科聖地」(Boko Haram)的威脅，尼日與奈及利亞交好，並獲得後者電力供應。尼日近年與中國大陸關係密切，中國大陸成為其重要貿易夥伴及主要外資來源開採石油與鈾礦。",
                "foreign_policy" => "對外採獨立不加盟路線，但親法態度明顯。",
                "time_range" => "較臺灣慢7小時",
                "resident" =>
                    "我在該國未設處，該國事務由我駐法國台北代表處兼轄。",
                "national_flag" =>
                    "橙色（頂部），白色和綠色的三個相等的水平帶，帶有以白色帶為中心的小橙色盤; 橙色的樂隊表示撒哈拉沙漠較乾燥的北部地區; 白色代表純潔和純真; 綠色象徵著希望和肥沃而富有成效的南部和西部地區，以及尼日河; 橙色光盤代表太陽和人民的犧牲，類似於印度的國旗，其中有一個以白色帶為中心的藍色輪輻https://commons.wikimedia.org/wiki/File:Flag_of_Niger.svg#/media/File:Flag_of_Niger.svg",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            66 => [
                "name" => "尼泊爾聯邦民主共和國",
                "name_in_en" => "Federal Democratic Republic of Nepal",
                "short_name" => "尼泊爾",
                "short_name_in_en" => "Nepal",
                "capital" => "加德滿都",
                "capital_in_en" => "Kathmandu",
                "national_day" => "9月20日",
                "join_un_day" => "1955年12月14日",
                "area_size" => "147,181平方公里",
                "geographic" => "北鄰中國西藏地區，東、西、南與印度接壤",
                "religion" => "印度教（Hindu）佔80%，佛教約佔10%，回教4%。",
                "bilaterial_relations" => null,
                "main_bounds" => "尼泊爾盧比（Nepalese Rupee）",
                "exchange_rate" =>
                    "詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/98365c28-aa46-4b13-a116-0f61a69f899f.gif",
                "is_diplomatic" => 0,
                "language" => "尼泊爾語和英語",
                "main_media" =>
                    "最大的兩份日報均為官方報紙：《廓爾喀報》（尼文，1901年創刊）、《新興的尼泊爾》（英文，1965年創刊）。尼泊爾電視台(Nepal Television)自2006年7月起24小時播出，尼泊爾廣播電台(Radio Nepal)是全國性的官方電台。",
                "population" => "2,989萬人（2020年)",
                "voltage" => "電壓為220伏特，使用3孔或2孔圓式插座",
                "time_difference" => "-2:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/c3a84727-be7f-4e4f-90db-e15e6d8bfcef.jpg",
                "political_system" =>
                    "尼泊爾制憲議會於2008年5月28日通過廢除君主制度，並宣布尼泊爾為聯邦民主共和國，嗣於2015年9月20日正式頒佈新憲法後，將全國劃分為7個省。",
                "history_intro" =>
                    "尼泊爾具有三千多年零散的歷史，自古即以泥（尼）曼羅聞名於中國，前往印度求經的玄奘，在他的〞大唐西域記〞裡也曾提過它，尼泊爾曾發生過好幾次王朝興亡事件，十三至十八世紀的馬拉王朝留下最多的文物、建築；十八世紀普裏特維、那拉揚國王征服了加德滿都，建立郭爾喀王朝，統一尼泊爾；十九世紀前半曾被印度割讓給英國，但到了1846年就由拉納家族掌握政權，這個時期實行閉關自守政策，到了1950年特裏布芬國王即位，1951年宣佈實行君主立憲政體。",
                "parliament" => "為二院制，共334席，上議院59席、下議院275席。",
                "cabinet" =>
                    "現任總理為Pushpa Kamal Dahal，為「尼泊爾馬列共產黨-毛派」（CPN-Maoist）領袖，於2022年12月30日正式獲任命為總理。",
                "judiciary" =>
                    "尼國法院分為三級：最高法院、高等法院及地方法院。",
                "headman" =>
                    "總統為虛位元首，現任總統Ram Chandra Poudel 於2023年3月12日就任 ，為尼國2008年廢除君主制後之第3任總統。",
                "fa_minister" => "Bimala Rai Paudyal (2023年1月起)",
                "major_political_parties" =>
                    "有80多個政黨，主要政黨：「尼泊爾馬列共產黨」(CPN-UML)、「尼泊爾毛派共產黨」(CPN-M)及「尼泊爾國大黨」（NC）。",
                "financial_incoming" =>
                    "歲收56.41億美元、歲支79.97億美元(2017年)",
                "export_value" => "9.59億美元(2019年)",
                "import_value" => "123.25億美元(2019年)",
                "export_item" => "成衣、皮包、地毯、紡織品",
                "import_item" => "石化、機械、黃金、電機產品",
                "main_export_countries" => "印度(58.6%)、美國(10%)",
                "main_import_countries" => "印度(61.5%)、中國大陸(15.4%)",
                "export_to" =>
                    "90萬美元(2020年)。主要產品：自動資料處理機、 氯乙烯、電話機、其他著色料、磁片磁帶。",
                "import_from" =>
                    "80萬美元(2020年)。主要產品：披巾圍巾、種子及果實類產品、調製動物飼料、卑金屬產品。",
                "foreign_relationship" =>
                    "Oli總理應莫迪總理邀請於2018年4月6日至8日率團訪問印度，進行國是訪問；前總理Oli上任先訪印，而非中國大陸，令印度朝野鬆一口氣。莫迪總理嗣應前總理Oli邀請於5月11日日至12日回訪尼國。尼國Oli總理6月19日至24日訪問中國大陸曾拜會中共國家主席習近平，並率尼國官員與李克強總理舉行會談及簽署聯合聲明；另亦拜會中共人大委員長栗戰書；Oli總理此行訪問中國大陸期間，兩國簽署逾20項協議及備忘錄，協議金額逾24億美元，顯見中共藉機積極拉攏尼國。尼國國會2022年2月審議與美國援外機構千禧挑戰公司(MCC)5億美元援贈協定並經表決附帶條件通過。",
                "foreign_policy" =>
                    "尼國介於印度與中國大陸之內陸國，長期為兩國「戰略緩衝區」，惟因尼國三面被印度包圍，對外交通受制於印度，故印度長期對尼國政經影響甚鉅。",
                "time_range" => "全國僅一個時區，較台灣慢2小時15分鐘",
                "resident" => "駐印度代表處兼轄",
                "national_flag" =>
                    "為紅底，其上印有太陽及月亮。https://zh.wikipedia.org/zh-tw/%E5%B0%BC%E6%B3%8A%E5%B0%94%E5%9B%BD%E6%97%97",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            67 => [
                "name" => "巴哈馬",
                "name_in_en" => "Commonwealth of The Bahamas",
                "short_name" => "巴哈馬",
                "short_name_in_en" => "Bahamas",
                "capital" => "拿索",
                "capital_in_en" => "Nassau",
                "national_day" => "7月 10日",
                "join_un_day" => "1973年9月18日",
                "area_size" => "13,880平方公里",
                "geographic" => "加勒比海島國",
                "religion" => "基督教、天主教、英國國教",
                "bilaterial_relations" =>
                    "1997年5月18日我與巴哈馬斷交，該國轉與中國大陸建交。我在巴國無設處，該國該國在我國亦無設處。巴哈馬國業務目前由我駐邁阿密辦事處兼轄。",
                "main_bounds" => "巴哈馬幣",
                "exchange_rate" => "1美元兌巴哈馬幣1元 (2013年)",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/c1fef033-7683-4d17-a480-8c14223c569b.GIF",
                "is_diplomatic" => 0,
                "language" => "英語",
                "main_media" => "The Tribune, The Nassau Guardian",
                "population" => "32.18萬人",
                "voltage" => "220伏特",
                "time_difference" => "-13:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/c7d8c821-cd27-4408-87db-303b2235f764.JPG",
                "political_system" => "君主立憲，責任內閣制。以英女王為元首。",
                "history_intro" => "1973年 7月 10日獨立",
                "parliament" =>
                    "有參(16位總理提名，總督任命之參議員，任期5年)、眾（38位民選眾議員，任期5年）議會。政府得隨時解散並重選國會。",
                "cabinet" => "設總理及各部會首長",
                "judiciary" => "有地方法院、高等法院、上訴法院",
                "headman" =>
                    "伊麗莎白二世(Elizabeth II)，以總督平德林(H.E. Mar guerite Pindling)為其代表，總理克里斯蒂（Hon. Perry Christie)",
                "fa_minister" => "外長亨菲爾德(Hon. Darren A. Henfield)",
                "major_political_parties" =>
                    "自由進步黨( PLP], 國家自由運動黨 (FNM], 自由聯盟(PFA)",
                "financial_incoming" => "國內生產總值90.43億美元(2016年)",
                "export_value" => "8.8億美元(2016年）",
                "import_value" => "24.95億美元(2016年)",
                "export_item" => "礦產、鹽、蘭姆酒、化學、蔬果",
                "import_item" => "原油、機械、車輛、食品、日用品",
                "main_export_countries" =>
                    "新加坡、美國、多明尼加、厄瓜多、加拿大",
                "main_import_countries" => "美國、印度、新加坡、南韓、中國大陸",
                "export_to" => "61.52萬美元(2016年)",
                "import_from" => "28.66萬美元(2016年)",
                "foreign_relationship" => "加強加勒比海區域合作",
                "foreign_policy" => "吸引外資",
                "time_range" => "較台灣慢13小時",
                "resident" => "無，由駐邁阿密辦事處兼轄",
                "national_flag" => null,
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            68 => [
                "name" => "巴基斯坦伊斯蘭共和國",
                "name_in_en" => "Islamic Republic of Pakistan",
                "short_name" => "巴基斯坦",
                "short_name_in_en" => "Pakistan",
                "capital" => "伊斯蘭馬巴德",
                "capital_in_en" => "Islamabad",
                "national_day" => "3月23日",
                "join_un_day" => "1947年9月30日",
                "area_size" => "88萬1,913平方公里",
                "geographic" => "南亞，介於伊朗與印度之間，南臨阿拉伯海。",
                "religion" =>
                    "95%的巴基斯坦人以伊斯蘭教為主，亦有少部分基督教及印度教。",
                "bilaterial_relations" => null,
                "main_bounds" => "巴基斯坦盧比(PKR)",
                "exchange_rate" =>
                    "1美元兌換280.906巴基斯坦盧比(2023年3月21日)，詳細匯率資訊建議至臺灣銀行（https://rate.bot.com.tw/xrt）、兆豐銀行（https://www.megabank.com.tw/personal/foreign-service/forex）或OANDA（https://www1.oanda.com/currency/converter/）網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/23ad1bc9-824b-454e-beb1-1dda9977caa2.GIF",
                "is_diplomatic" => 0,
                "language" => "烏爾都語(Urdu)、英語",
                "main_media" =>
                    "電視是巴基斯坦主要的新聞來源，超過120家衛星電台，登記於國家電子媒體部門。國營電視台「巴基斯坦電視公司」(Pakistan Television Corporation, PTV)擁有最大的電視網絡，服務90%以上的人口，也是該國最大的地面基礎建設；國有「巴基斯坦廣播公司」(Pakistan Broadcasting Corporation, PBC or Radio Pakistan)  擁有最多聽眾，AM/SW/FM電台頻率覆蓋98%的人口及80%的國土面積；主要報紙均有網路版，主要平面媒體均網路化經營。",
                "population" =>
                    "約2億4,292萬人(2022年)，是僅次印尼世界第二多人口的伊斯蘭國家。",
                "voltage" => "220伏特",
                "time_difference" => "-3:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/customfile/sites/mapurllink/a021bfa6-6b9f-4794-985f-dc4b1ddd2c93.jpg",
                "political_system" =>
                    "聯邦議會共和國(federal parliamentary republic)",
                "history_intro" =>
                    "1.	巴基斯坦原與印度斯坦同稱印度，有五千餘年歷史。西元前237年馬其頓之亞歷山大大帝曾率兵入侵印度，渠在印度期間雖短，惟影響甚深，使印度自此與西方接觸，西元8世紀，伊斯蘭教由阿拉伯傳入今之巴基斯坦地區，至10世紀更由喀布爾山口及印度高原，進入東巴基斯坦地區(今之孟加拉)，該地數百萬人相繼信奉伊斯蘭教。2.	11世紀伊斯蘭教征服印度，統治印度達8百年之久。16世紀西方列強勢力東漸，英國於七年戰爭(1756至1763年)中擊敗法國，取得印度獨占地位，嗣於1877年建立印度帝國，由英國女王維多利亞女皇兼攝，印度淪為英國藩屬。3.	第二次世界大戰結束，英國政府因其殖民地民族主義高漲，爰於1947年公布印度獨立法案，決定依據印度教徒及穆斯林之居住區域，將印度分為印度及巴基斯坦兩自治區，巴基斯坦於1947年8月15日正式獨立。東、西巴基斯坦被印度分隔，相距約一千哩，彼此種族、文化、語言均不相同，地理環境迥異，東巴基斯坦人民多主張脫離西巴基斯坦獨立建國。4.	1971年布托(Z. A. Bhutto)當政，東巴基斯坦發生暴動，並宣告脫離西巴基斯坦獨立，成立「孟加拉人民共和國」，由於孟國獨立後普獲各國承認，巴基斯坦亦於1974年2月承認孟加拉獨立。",
                "parliament" =>
                    "依據2018年憲法修正案通過後最新規定，巴基斯坦國會為兩院制 ，上院96席，任期6年；下院336席，任期5年。",
                "cabinet" => "總理由下院推選，閣員由總統諮商總理後任命。",
                "judiciary" =>
                    "最高法院（法官由總統任命），宗教法院，行傳統伊斯蘭教法。",
                "headman" =>
                    "總統：現任總統阿里夫·艾維(Arif Alvi)。總理：現任總理赫巴茲·謝立夫(Shehbaz Sharif)，2022年4月11日當選。",
                "fa_minister" =>
                    "比拉瓦爾‧布托·扎爾達里(Bilawal Bhutto Zardari)",
                "major_political_parties" =>
                    "巴基斯坦實施多黨制，現有政黨約200個，主要政黨有巴基斯坦穆斯林聯盟謝立夫派(PML-N)、巴基斯坦人民黨、Mohajir Qaumi 運動黨、Awami 國家黨等。",
                "financial_incoming" =>
                    "2021年政府財政收入約430億美元；2021年財政支出約640 億美元。",
                "export_value" => "約355.65億美元(2021年，根據世界銀行資料)",
                "import_value" => "約690.42億美元(2021年，根據世界銀行資料)",
                "export_item" =>
                    "紡織品、服裝、床墊、棉被、枕頭、棉布、紗、大米、皮革製品、體育用品、化工、製造、地毯",
                "import_item" =>
                    "石油、石油產品、機械、塑膠、運輸設備、食用油、紙和紙板、鋼鐵、茶",
                "main_export_countries" =>
                    "美國、中國大陸、英國、阿拉伯聯合大公國、德國",
                "main_import_countries" =>
                    "中國大陸、阿拉伯聯合大公國、新加坡、美國、卡達",
                "export_to" =>
                    "熱軋鐵或非合金鋼扁軋製品、再生纖維棉、合成纖維棉、苯乙烯，約5億3,728萬美元(2022年)",
                "import_from" =>
                    "石油及提煉自瀝青礦物之油類、固體甘蔗糖或甜菜糖及化學級純蔗糖、未變性之乙醇、棉紗、銅廢料及碎屑，約1億9,718萬美元(2022年)",
                "foreign_relationship" =>
                    "1.建國以來曾與印度發生三次戰爭，1971年第三次印巴之戰導致東巴基斯坦獨立為孟加拉。2003年5月在美國斡旋下始與印度恢復完全外交關係。 2.配合美國打擊恐怖主義。",
                "foreign_policy" =>
                    "巴基斯坦採獨立、不結盟外交政策，致力於維護南亞地區和平與穩定，主張建立公平合理的國際政治經濟新秩序。",
                "time_range" => "較臺灣慢3小時。",
                "resident" =>
                    "我國在巴基斯坦未設館處，該國由我駐沙烏地阿拉伯王國代表處兼轄。",
                "national_flag" =>
                    "左側是白色豎長方形，占整個旗面四分之一；右側為深綠色長方形，中央有一顆白色五角星和白色新月。白色象徵和平，代表國內信奉印度教、佛教、基督教、祆教的居民和其他少數民族；綠色象徵繁榮，即代表伊斯蘭教。新月象徵進步，五角星象徵光明；新月和五角星同時係伊斯蘭教代表標誌。",
                "area_name" => "亞西地區",
                "area_name_in_en" => "West Asia",
            ],
            69 => [
                "name" => "巴布亞紐幾內亞獨立國",
                "name_in_en" => "Independent State of Papua New Guinea",
                "short_name" => "巴布亞紐幾內亞、巴紐",
                "short_name_in_en" => "Papua New Guinea、PNG",
                "capital" => "摩士比港(Port Moresby)",
                "capital_in_en" => "摩士比港(Port Moresby)",
                "national_day" => "9月16日",
                "join_un_day" => "1975-10-10",
                "area_size" => "462,840平方公里（約為台灣12.86倍）",
                "geographic" =>
                    "位於太平洋西南部，約當赤道至南緯14度及東經141度至160度之間；領土包括新幾內亞島（世界第二大島）東半部及鄰近600餘個大小島嶼；西與印尼接壤，北東南三面分別與密克羅尼西亞、索羅門群島及澳洲等國隔海相望。",
                "religion" =>
                    "基督教69%，天主教27%，其餘4%為傳統宗教及約數千名回教徒。",
                "bilaterial_relations" => null,
                "main_bounds" => "吉納(Kina)",
                "exchange_rate" =>
                    "美金與當地幣吉納（Kina）比約為1:3.52，惟須視匯率浮動情形而定。詳細匯率資訊建議至OANDA網站(https://www1.oanda.com/lang/cns/currency/converter)查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/5a0b9acf-4cee-48d4-a48b-099488b32fa3.gif",
                "is_diplomatic" => 0,
                "language" =>
                    "英語與原住民混合語(Tok Pisin)、英語、莫圖語(Hiri Motu)。",
                "main_media" =>
                    "電視台有兩家EMTV及KUNDU 2，電台較具規模者有兩家Rait FM及FM Channel。日報以The National(國民報)及Post Courier(信使報)兩大報為主。",
                "population" =>
                    "人口約877.6萬（World Population Review 2019年估計數）",
                "voltage" =>
                    "電壓220-240V，供電不穩定；插頭為三叉式，與澳洲規格相同。",
                "time_difference" => "+2:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/8b98739b-6e0a-4371-b49f-ac3815bad48c.JPG",
                "political_system" =>
                    "政府體制：元首英國國王查爾斯三世（總督為國王之代表，現任總督為Bob Dadae），總理James Marape (2022年8月9日就任第2任)。",
                "history_intro" =>
                    "16世紀初葡萄牙人發現新幾內亞島；1885年英、德兩國分佔該島東半部之南部及北部，荷蘭佔有該島西半部。1902年英屬新幾內亞交澳洲管理，一次大戰時澳洲復佔領德屬部分，1920年12月17日獲國際聯盟委託代管，二次大戰中新幾內亞一度為日軍佔領。澳洲於1949年將原屬英國及德國兩部分併為「巴布亞紐幾內亞領地」，嗣同意其於1975年9月16日獨立。",
                "parliament" =>
                    "單一國會；國會議員計118席次，任期5年，本(11)屆國會議員於2022年8月選出；。",
                "cabinet" =>
                    "總理由國會中最大黨（或聯合黨派）黨魁擔任，部長由總理建議並由總督形式上同意，總理及各部部長組成「國政委員會」（National Executive Council），國家大政方針及政策均由該會決定。",
                "judiciary" =>
                    "司法系統包括最高法院(Supreme Court)、國家法院(National Court)、地方法院(District Court)等3級。最高法院首席大法官係經「國政委員會」提報總督任命。",
                "headman" =>
                    "元首英國國王查爾斯三世（總督為國王之代表，現任總督為Bob Dadae）",
                "fa_minister" =>
                    "外交部長	Justin Tkatchenko(2022年8月23日迄今）",
                "major_political_parties" =>
                    '主要政黨包括：執政聯盟：主要由盤古黨(Pangu Party) 、聯合資源黨(United Resources Party)、國家聯盟黨(National Alliance Party)等三大黨為內閣主要成員。其餘聯合勞工黨(United Labour Party)、人民第一黨(People first Party)、人民黨(Peoples\' Party)、人民進步黨、（People’s Progress Party）、我們發展黨（Our Development Party）等小黨僅佔1-3席。',
                "financial_incoming" =>
                    "由於原物料出口順暢、近幾年且有液態天然氣開發案，巴紐經濟迄今連續13年成長，財政規模持續擴大。2014年4月液態天然氣正式投產並出口後，當年經濟成長率達8.4%。2020年編列總預算187.265億吉納(約55.5億美元)，因武漢肺炎衝擊，全國總生產毛額成長為-3.0%。",
                "export_value" => "110億美元(2021)",
                "import_value" => "30.2億美元(2021)",
                "export_item" => "石油、天然氣、金、銅、木材、油棕、咖啡、可可",
                "import_item" => "機械及交通運輸設備、化工製品、雜貨、食品",
                "main_export_countries" =>
                    "澳大利亞、中國大陸、日本、臺灣、韓國、荷蘭、菲律賓、泰國、新加坡及德國。",
                "main_import_countries" =>
                    "澳洲、中國大陸、新加坡、馬來西亞、印尼、泰國、日本、紐西蘭、美國及印度。",
                "export_to" => "0.409億美元 (2020)",
                "import_from" => "6.725億美元 (2020)",
                "foreign_relationship" =>
                    "1.澳洲為巴紐最主要貿易伙伴及援助國，主要援助教育、衛生、警政、國防、基礎設施、社會及經濟等建設。2.中國為巴紐外來投資、優惠貸款最主要來源，中資企業成為巴紐基礎設施主要承包者，近10年提供巴紐鉅額貸款及援助各項基礎建設計畫。3.其他主要援助國(方)包括紐西蘭、日本、美國、歐盟、世銀、亞銀。4.印尼與巴紐共同邊界760公里，提供巴紐若干開發援助，爭取巴紐支持其有關巴布亞省問題之立場。5.索羅門群島、斐濟及萬那度與巴紐同屬美拉尼西亞先鋒集團國家，巴紐因屬太平洋島國之中人口、土地面積、資源、財經規模最大者，近年對太平洋多邊事務積極發聲，盼在太平洋島國間扮演重要角色。",
                "foreign_policy" =>
                    "巴紐與70餘國維持外交關係，致力在太平洋島國區域扮演領導角色，積極爭取加入東南亞國協，並加強參與APEC活動（巴紐曾主辦2018年APEC會議），期盼成為APEC經濟體進入太平洋之門戶。",
                "time_range" => "較台灣快兩小時",
                "resident" => "駐巴布亞紐幾內亞臺北經濟文化辦事處",
                "national_flag" =>
                    "國旗以黑紅底色斜角對分，紅底上黃色天堂鳥圖案，黑底上五顆白星。天堂鳥為巴紐國寶，白星為南十字星。",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            70 => [
                "name" => "巴拉圭共和國",
                "name_in_en" => "Republic of Paraguay",
                "short_name" => "巴拉圭",
                "short_name_in_en" => "Paraguay",
                "capital" => "亞松森(Asunción)",
                "capital_in_en" => "Asunción",
                "national_day" => "5月 15日",
                "join_un_day" => "1945年10月24日",
                "area_size" =>
                    "406,752km²（約為臺灣面積之11倍，美洲地區排名第11）",
                "geographic" =>
                    "位於南美洲中部，東接巴西、西南鄰阿根廷，西北界玻利維亞，為一內陸國家。",
                "religion" => "天主教86%、基督新教10%、無神論2%、其他2%",
                "bilaterial_relations" => null,
                "main_bounds" => "瓜拉尼(Guaraní)",
                "exchange_rate" => "1美元約兌換7,000瓜拉尼(2022年11月)",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/ac8d4935-246f-42f2-a8c9-b87774b01043.jpg",
                "is_diplomatic" => 1,
                "language" => "西班牙語及瓜拉尼語",
                "main_media" =>
                    "巴拉圭主要新聞媒體集中在首都亞松森，按平面及電子媒體分類如下：日報計有「ABC彩色報」(ABC Color)、「最新時刻報」(Última Hora)、「國家報」(La Nación)、「五日報」(5 Días)、「獨立日報」(El Independiente)、「大眾報」(Diario Popular)及「紀事報」(Crónica)等。電視台計有「國家電視台」(Paraguay TV 第3頻道)、「Paravisión電視台」(第5頻道)、「Noticias PY新聞台」(第6頻道)、「Telefuturo電視台」(第7頻道)、「Unicanal電視台」(第8頻道)、「SNT電視台」(第9頻道)、「第十三電視台」(Canal Trece第10頻道)、「La Tele電視台」(第11頻道)、「GEN電視台」(第12頻道)、「C9N電視台」(第13頻道)、「Canal Pro電視台」(第14頻道)、「MEGA TV電視台」(第15頻道)、「五日報電視台」(Canal 5 Días第16頻道)、「蜘蛛繡電視台」(Ñandutí TV第17頻道) 、「美洲電視台」(América TV第18頻道)、「ABC電視台」(ABC TV第19頻道)、「眾議院電視台」(TV Cámara第20頻道)、「教育電視台」(Educanal第21頻道)及Tigo有線電視等。主要廣播電台有「蜘蛛繡廣播電台」(Radio Ñandutí)、「三月一日廣播電台」(Radio Primero de Marzo)、「壹廣播電台」(Radio Uno)、「基本方位廣播電台」(Radio Cardinal)、「紀念碑廣播電台」(Radio Monumental)、「1000廣播電台」(Radio 1000 AM)、「金星廣播電台」(Radio Venus)及「北方恰谷廣播電台」(Radio Chaco Boreal)等。",
                "population" => "約725萬人(2021年)",
                "voltage" =>
                    "電力一般供應無虞，電壓規格為220伏特50HZ，插座為兩孔圓/扁型；惟巴國電壓不穩，跳電時電器品容易損毀，建議使用品質較佳之穩壓器或變壓器。",
                "time_difference" => "-11:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/0b5ec288-c24a-4974-b20b-d8944fed9829.jpg",
                "political_system" =>
                    "一、	採行總統制，總統由全國普選產生，任期5年，不得連任。行政權屬於總統暨各部會，立法權屬於國會，司法權屬於各級法院。二、	司法：司法機關分為地方法院、高等法院及最高法院，最高法院由9位大法官組成，大法官係由評選委員會提薦，經參議院選任並獲總統同意後任命，非經彈劾不得免職，可續任至75歲。",
                "history_intro" =>
                    "巴拉圭原為印地安人瓜拉尼族(Guaraní)定居地，1524年由西班牙派出之葡萄牙人Alejo García發現，1537年西班牙開始殖民，1811年5月15日脫離西班牙獨立。1865年至1870年，與巴西、阿根廷及烏拉圭三國發生「三聯之戰」(Guerra de la Triple Alianza)，戰敗不僅割地14餘萬平方公里，且舉國男丁幾乎戰亡。1870年頒布首部憲法。1932年至1935年與玻利維亞發生恰谷戰爭，獲勝。1947年發生內戰由紅黨執政，1954年史托納斯爾(Alfredo Stroessner)將軍發動政變遂行35年之獨裁統治，至1989年2月始為羅德里格斯(Andrés Rodríguez)將軍發動政變推翻，羅德里格斯將軍繼任執政4年後，於1993年5月舉行首度民主普選，自此轉為文人政府。",
                "parliament" =>
                    "分參眾兩院，參議院共45席，眾議院共80席，議員任期均為5年，參院議長即國會議長，眾院議長即國會副議長。國會每年3月開議，12月21日至2月底休會。",
                "cabinet" =>
                    "總統任命部長並組成內閣，國會議員申請停職或辭職方可出任閣員。",
                "judiciary" => "採三級制，分為最高、高等及地方法院",
                "headman" =>
                    "阿布鐸總統(Mario Abdo Benitez, 2018.8.15-2023.8.15)",
                "fa_minister" =>
                    "阿里歐拉(Julio César Arriola Ramírez, 2022.5.4迄今)",
                "major_political_parties" =>
                    "國家共和聯盟(ARN，紅黨)、真正激進自由黨（PLRA，藍黨）、親愛祖國黨(Patria Querida)、國家組合黨（PEN）、左派大聯盟（Frente Guasú）、我們做黨(Hagamos)。",
                "financial_incoming" =>
                    "2021年之國內生產毛額為403.05億美元、平均每人國民所得4,801美元、外債總額134.162億美元、經濟成長率4.2%、失業率7.55%。",
                "export_value" => "139億7,900萬美元 (2021年)",
                "import_value" => "130億8,600萬美元 (2021年)",
                "export_item" =>
                    "黃豆、電力、牛肉、提煉黃豆油所產生之油渣餅、黃豆油、玉米稻米、小麥、蔗糖、木材、馬黛茶等(2021年)",
                "import_item" =>
                    "手機、原油、汽車及其零配件、輪胎、電腦、殺蟲劑、農藥及電子消費產品等(2021年)",
                "main_export_countries" =>
                    "巴西、阿根廷、智利、俄羅斯、印度、美國、以色列、臺灣、英國、烏拉圭(2021年)。",
                "main_import_countries" =>
                    "中國、巴西、阿根廷、美國、新加坡、德國、印度、日本、南韓、墨西哥 (2021年)",
                "export_to" => "2,197萬美元 (2021年)",
                "import_from" => "1億7,511萬美元(2021年)",
                "foreign_relationship" =>
                    "雖武漢肺炎疫情限縮國際間往來接觸，巴國外長與南方共同市場成員國巴西、阿根廷與烏拉圭外長仍保持密切互動關係。美國國務助卿盧嵐訪巴強化與美國政治對話，雙方在鞏固民主法治、聯合對抗跨國犯罪組織安全威脅等議題上達成共識，推動美國開放進口巴國牛肉與有機糖。阿外長訪問智利調整並更新與智國共同與南方共市簽署之經濟互補協定，並簽署智巴兩國相互承認駕照、國防安全合作、人口販運調查與援助、數位電信合作與兩國外交學院交流等協議。訪日外相林芳正與日本加強交流合作，期深化兩國戰略夥伴關係，促進雙邊貿易。西班牙王后2021年11月訪巴，深化兩國在文化與社會福利合作交流，阿外長赴西班牙、義大利、比利時等歐洲國家訪問推動雙邊關係。印度與巴國建交60年後首度派遣駐使。",
                "foreign_policy" =>
                    "現行巴國外交政策主軸有四: 1.支持衛福部因應武漢肺炎疫情威脅，2.審查與巴西之伊泰布兩國電廠協議附件C，3. 經濟復甦 4.強化內部體制積極透過與南方共同市場國家雙邊及集團議程，擴大對外經貿協議談判，開放市場以吸引投資並促進貿易。秉持多邊主義，主張強化國際法架構，以區域間國家互補性推動區域整合，以對外關係促進巴國經貿發展，使巴國走向世界、世界走進巴國。堅持自由、民主與尊重人權的原則與價值觀，以人民為中心捍衛國家利益，為巴國人民創造包容性機會，改善生活品質。遵行聯合國2030年永續發展目標，推動環境永續發展。尊重外來移民，捨棄戰爭衝突以和平方式解決爭端。",
                "time_range" =>
                    "每年3月第4個週日至10月第1個週日前較台灣慢12小時；10月第1個週日至翌年3月第4個週日前，為日光節約時間，較台灣慢11小時。",
                "resident" =>
                    "我國在巴拉圭首都亞松森設有大使館，並於東方市設有總領事館。",
                "national_flag" =>
                    "巴拉圭國旗主要由紅、白、藍三橫條所組成。正面中間為國徽，反面則為財政部印璽，是全世界少數正反面圖案不同的國旗。 紅色象徵正義，白色象徵和平，藍色象徵自由。中央國徽正中的黃色五角星名為「五月之星」，代表巴拉圭獨立紀念日五月十四日，五月之星的左右分別環繞著象徵勝利的棕櫚枝及象徵和平的橄欖枝。黑色文字是西班牙文「巴拉圭共和國」。 國庫印璽是一頭象徵主權的威猛雄獅守衛著自由之桿與自由之帽，印璽上方的文字則是巴拉圭的國家格言「和平與正義」。",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            71 => [
                "name" => "巴拿馬共和國",
                "name_in_en" => "Republic of Panama",
                "short_name" => "巴拿馬",
                "short_name_in_en" => "Panama",
                "capital" => "巴拿馬（PANAMA）市。",
                "capital_in_en" => "Panama City",
                "national_day" => "11月3日",
                "join_un_day" => "1945年11月13日",
                "area_size" => "75,517 平方公里",
                "geographic" =>
                    "巴拿馬位處南美洲西北地峽部分，西接哥斯大黎加，東與哥倫比亞為界，南瀕太平洋，北臨加勒比海。境內多森林茂密之小山，沿海多島嶼（包括運河）。",
                "religion" => "天主教人口佔總人口93%，基督教徒佔6%。",
                "bilaterial_relations" => null,
                "main_bounds" =>
                    "巴爾波（BALBOA），實際上為美元制，僅硬幣名為西班牙「發現者」巴爾波。",
                "exchange_rate" => '美元制，US$1=PAB$1',
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/7c8456bb-2338-4807-8a3e-5dc3729d1663.GIF",
                "is_diplomatic" => 0,
                "language" => "西班牙語",
                "main_media" =>
                    "1、 文字媒體：巴國計有7份全國性日報，分屬「新聞報」（La Prensa）、「巴美日報」（Panamá América）及「巴拿馬星報」（La Estrella de Panamá）三大報系集團。    2、 電子媒體：（1）電視：較具規模之全國性電視媒體包括MEDCOM集團之「第13頻道」及「第4頻道」電視台、「第2頻道」（TVN）、「第21頻道」（NEXTV）、以文教及藝術節目為主之國家電視台「第11頻道」（SERTV），及以宗教性節目為主之「第5頻道」（FETV）等。（2）廣播：廣播媒體甚為發達，全國性主要電台包括大陸電台（K.W. Continente）、RPC電台（RPC Radio）、成功電台（Radio Exitosa）、國家電台（Radio Nacional）及我的電台（Radio Mía）等。",
                "population" => "約439萬人（2022年）",
                "voltage" => "110V。",
                "time_difference" => "-13:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/469f6408-5e73-49d0-9999-5f7821a1fad4.jpg",
                "political_system" =>
                    "1、 國體與政體：國體：共和國。政體：總統制（總統、副總統由人民直接選舉，任期5年，不得連任）。    2、 行政：總統為行政首長，各部部長由總統任命，總統府部長（Ministro de Presidencia）為內閣首席部長（Jefe de Gabinete）。    3、 國會：採一院制（Asamblea Nacional），由直選產生71位國會議員，任期5年。國會設議長1人，副議長2人，每年7月1日攺選；下設15委員會，委員會主席及成員均每年改選。    4、 司法：中央設最高法院，大法官9名，任期10年，下設各級法院。    5、 政黨：民主革命黨（執政黨，Revolucionario Democrático, PRD）、巴拿馬人黨（Partido Panameñista, PAN）、民主變革黨（Cambio Democrático, CD）、國家共和自由黨（Movimiento Liberal Republicano Nacionalista, MOLIRENA）、人民黨（Partido Popular, PP）、達成目標黨(Realizando Metas, RM)、改道運動黨(Movimiento Otro Camino, MOCA)、聯盟黨(Partido Alianza)、社會獨立替代黨(Partido PAIS)及巴國唯一左派政黨之民主廣泛陣線黨(Frente Amplio por la Democracia, FAD)。",
                "history_intro" =>
                    "1501年西班牙人首次抵達巴拿馬，次年哥倫布四度西行航抵巴境。1513年西班牙人巴爾波抵達巴國太平洋岸並在南部地區殖民。1514年西班牙國王派阿里亞斯為首任總督。1821年11月10日宣布脫離西班牙，歸併為哥倫比亞之一省，其後局勢即未穩定，屢發生革命，企圖脫離哥倫比亞統治。1903年11月3日宣布脫離哥倫比亞獨立，美國政府首予承認，法國與大清國繼之。巴、美兩國嗣於1903年11月18日簽約開鑿運河，1914年8月15日運河竣工通航。1964年巴國發生反美、爭國權示威，民眾遭美警開槍射殺，巴國憤而與美斷交。嗣巴國即不斷在國際組織中要求美國歸還運河，並獲包括中國大陸之「不結盟國家」聲援。1977年9月7日與美國簽訂「巴拿馬運河永久中立及營運條約」，其中約定美國於1999年底將巴拿馬運河交還巴國，駐軍撤出巴國領土。",
                "parliament" =>
                    "採一院制（Asamblea Nacional），由直選產生71位國會議員，任期5年。國會設議長1人，副議長2人，每年7月1日攺選；下設15委員會，委員會主席及成員均每年改選。",
                "cabinet" =>
                    "巴國採總統制，設有總統及副總統各1人，總統為行政首長，內閣各部部長由總統任命，總統府部長（Ministro de Presidencia）為內閣首席部長（Jefe de Gabinete）。",
                "judiciary" =>
                    "中央設最高法院，大法官9名，任期10年，下設各級法院。",
                "headman" =>
                    "總統柯狄索（Laurentino Cortizo Cohen）於2019年7月1日就職，任期5年至2024年6月30日。",
                "fa_minister" => "蒂菀內 (Janaina Tewaney Mencomo)。",
                "major_political_parties" =>
                    "民主革命黨（執政黨，Revolucionario Democrático, PRD）、巴拿馬人黨（Partido Panameñista, PAN）、民主變革黨（Cambio Democrático, CD）、國家共和自由黨（Movimiento Liberal Republicano Nacionalista, MOLIRENA）、人民黨（Partido Popular, PP）、達成目標黨(Realizando Metas, RM)、改道運動黨(Movimiento Otro Camino, MOCA)、聯盟黨(Partido Alianza)、社會獨立替代黨(Partido PAIS)及巴國唯一左派政黨之民主廣泛陣線黨(Frente Amplio por la Democracia, FAD)。",
                "financial_incoming" => "政府外債429億美元（2022年）",
                "export_value" => "41億5,700萬美元（2022年）",
                "import_value" => "169億7,510萬美元（2022年）",
                "export_item" =>
                    "銅、香蕉、黃金、殼類海鮮、鋼鐵廢料、原木、棕櫚油、魚粉、廢鋁、冷凍魚（2022年）",
                "import_item" =>
                    "汽油及柴油、小客車、醫藥製劑、液化瓦斯、通訊器具（含手機）、玉米、食物調製品、筆記型電腦、動物飼料、鋼鐵製品（2022年）",
                "main_export_countries" =>
                    "中國大陸、日本、印度、韓國、美國、德國、西班牙、荷蘭、保加利亞、哥斯大黎加（2022年）",
                "main_import_countries" =>
                    "美國、中國大陸、墨西哥、哥倫比亞、哥斯大黎加、巴西、西班牙、南非、日本、德國（2022年）",
                "export_to" => "1億1,434萬美元（2022年）",
                "import_from" => "7,656萬美元（2022年）",
                "foreign_relationship" => "良好",
                "foreign_policy" =>
                    "巴拿馬自建國以來，因挾巴拿馬運河之便，即為聯繫南、北美洲及溝通太平洋及大西洋之重要橋梁。1999年12月31日美國歸還巴拿馬運河予巴國政府後，巴國為向全世界提供完整之運河、船舶登記、轉口貿易及國際金融等業務服務，採取多元睦鄰政策，其國際角色亦趨向中立。",
                "time_range" => "較臺北慢13小時",
                "resident" => "無，由我國駐哥倫比亞代表處兼轄",
                "national_flag" =>
                    "巴拿馬國旗是一面分為4個部位的2:3比例長方形：左上角為白底與五角海藍星；左下角為海藍底；右上角為紅底；右下角為白底與五角紅星。藍色代表自由黨、紅色代表保守黨，兩黨為巴拿馬主要黨派。白色則代表兩黨團結互助。左上方的白底藍星代表忠誠和廉潔，右下方白底紅星代表法律的權威。十字線分隔成四塊的設計方式，代表巴拿馬位於南美洲、北美洲、大西洋、太平洋四個地域的交界處。紅藍白三色為沿用支持巴拿馬獨立的美國星條旗顏色。",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            72 => [
                "name" => "巴林王國",
                "name_in_en" => "Kingdom of Bahrain",
                "short_name" => "巴林",
                "short_name_in_en" => "Bahrain",
                "capital" => "麥納瑪",
                "capital_in_en" => "Manama",
                "national_day" => "12月16日",
                "join_un_day" => "1971年9月21日",
                "area_size" => "779.950平方公里",
                "geographic" =>
                    "位處波斯灣中，由主島巴林島及周圍約32個小島組成，位於沙烏地阿拉伯與卡達半島之間。",
                "religion" => "伊斯蘭教",
                "bilaterial_relations" => null,
                "main_bounds" => "迪納 （Bahraini Dinar, BD）",
                "exchange_rate" =>
                    "巴林幣兌美元採固定匯率，1美元兌0.375巴林幣(Bahrain Dinar, BD)；詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐銀行(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/23e95a05-be9d-4193-9f39-06c53f68a6bb.GIF",
                "is_diplomatic" => 0,
                "language" =>
                    "阿拉伯語（官方語言）、英語、波斯語、烏爾都語(Urdo)",
                "main_media" =>
                    "阿文報紙：Akhbar Alkhaleej, Alayam 英文報紙：The Daily Tribune, Gulf Daily News",
                "population" => "目前人口約為1,540,558人",
                "voltage" => "220V，插座為3孔方形(英規)。",
                "time_difference" => "-5:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/8c33e370-e60f-4f42-8133-2d15dddfa35d.jpg",
                "political_system" => "君主立憲",
                "history_intro" =>
                    "巴林早期隸屬波斯帝國，18世紀後，脫離伊朗控制，於1880年及1892年兩度與英國簽訂保護條約，1971年8月15日巴林在聯合國監督下舉行公民投票正式宣布獨立。",
                "parliament" =>
                    "分為眾議院及諮議院，諮議員40席，由國王指定派任。眾院議員任期為4年，共40席，由人民直選。",
                "cabinet" => "現任總理為王儲Shaikh Salman bin Hamad Al Khalifa",
                "judiciary" =>
                    "司法部為掌理司法之最高機關，由地方法院及高等法院審理民刑事案件，採二級二審制",
                "headman" => "哈瑪德國王 (H.M. King Hamad bin Isa Al Khalifa)",
                "fa_minister" => "Dr. Abdullatif bin Rashid Alzayani",
                "major_political_parties" =>
                    "主要政治社團(巴林未有政黨法):Progressive Democratic Tribune、Al-Wahdawi、Al-Ekha、Al-Mustaqeleen、National Democratic Assembly",
                "financial_incoming" =>
                    "預算收入: 65.5億美元;預算支出: 87.1億美元（Total State Revenue &amp; Expenditure for the Fiscal Years 2021 &amp; 2022）",
                "export_value" => "141億美元(2021年，eGovernment)",
                "import_value" => "124億美元(2021年，eGovernment)",
                "export_item" => "已凝聚之鐵礦石及精砂、鋁線、生鋁",
                "import_item" =>
                    "未凝聚之鐵礦石及精砂、氧化鋁、3,000C.C.以上之四輪車輛、浮石鑽井平台",
                "main_export_countries" =>
                    "沙烏地阿拉伯(40M BD)、阿曼(24M BD)、馬來西亞(19M BD)",
                "main_import_countries" =>
                    "中國大陸(53M BD)、沙烏地阿拉伯(27M BD)、澳洲(23M BD)",
                "export_to" => "0.42 億美元（2021年，經濟部國際貿易局）",
                "import_from" => "2.58億美元（2021年，經濟部國際貿易局）",
                "foreign_relationship" =>
                    "巴林於2020年10月正式與以色列建交，故現除伊朗及卡達以外，巴林與多數國家維持邦交或友好狀態，近年來加強與東南亞、俄羅斯、中國及東歐集團之往來。",
                "foreign_policy" =>
                    "巴林在外交上採取廣結善緣政策，與西方各國維持友好關係。",
                "time_range" => "較臺灣時間慢5小時",
                "resident" => "駐巴林代表處",
                "national_flag" =>
                    "巴林國旗由紅、白兩色組成，紅色為海灣國家傳統顏色，五個白色凸出三角形代表伊斯蘭信仰之五大支柱(作證詞、禮拜、封齋、天課、朝覲)。",
                "area_name" => "亞西地區",
                "area_name_in_en" => "West Asia",
            ],
            73 => [
                "name" => "巴西聯邦共和國",
                "name_in_en" => "Federative Republic of Brazil",
                "short_name" => "巴西",
                "short_name_in_en" => "Brazil",
                "capital" => "巴西利亞",
                "capital_in_en" => "Brasilia",
                "national_day" => "9月7日(巴西獨立紀念日)",
                "join_un_day" => "1945年10月24日",
                "area_size" => "8,515,767平方公里",
                "geographic" =>
                    "巴西位於南美洲東部，南美各國除厄瓜多、智利外皆與巴西接壤，東濱鄰大西洋，海岸線長達7,408公里，為拉丁美洲第一大國，全球第五大國。",
                "religion" =>
                    "主要信奉羅馬天主教(約佔65%)和基督新教(約佔25%)。近年來，天主教徒呈現下降的趨勢，而新教徒則呈增長趨勢。",
                "bilaterial_relations" => null,
                "main_bounds" => '黑奧(Real, R$)',
                "exchange_rate" => "1美元≒5.24黑奧(2023年3月)",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/745e0129-6533-40ee-8195-96689fc294ac.GIF",
                "is_diplomatic" => 0,
                "language" => "葡萄牙語",
                "main_media" =>
                    "電視：環球集團(Globo)、SBT集團、Bandeirante集團 報紙：聖保羅頁報(Folha de São Paulo)，聖保羅州報(Estado de São Paulo)、環球報(O Globo)、巴西利亞郵報(Correiro Braziliense)、巴西利亞日報(Jornal de Brasilia)",
                "population" => "214,384,523(2022年)",
                "voltage" =>
                    "巴西全國電壓並未統一，如聖保羅地區為110V，巴西利亞地區則為220V。",
                "time_difference" => "-11:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/4e26b5b4-962d-4134-aeef-61b1a435095f.JPG",
                "political_system" => "聯邦制、總統制、立憲共和國",
                "history_intro" =>
                    "西元1500年4月22日，葡萄牙航海家佩德羅·卡布拉爾到達巴西。隨後的三百年裡，葡萄牙人逐漸在此定居，一開始從事巴西紅木的採伐，後來逐漸擴展到淘金、甘蔗種植，漸成為葡萄牙殖民地，其後葡萄牙被西班牙合併後，荷蘭人一度將巴西佔為己有，在英荷戰爭後又為葡萄牙奪取。1807年，拿破崙率領法軍入侵葡萄牙，1808年葡國被法軍所佔領，導致葡萄牙布拉干薩王室女王瑪麗亞一世遷都到南美殖民地巴西。在旅居巴西期間，為了爭取當地人民的支持，葡國王室宣布葡萄牙與巴西的平等地位，並改國號為葡萄牙－巴西－阿爾加維聯合王國，並於巴西開始對英國開放貿易港口，王室直至1821年始遷返葡萄牙，但王子彼得（Pedro）則留巴攝政，並於1822年9月7日宣布脫離葡萄牙獨立，繼又宣布為巴西帝國皇帝，稱彼得一世，此一帝國延續67年傳其子彼得二世，直至1889年發生革命推翻帝制，同年11月成立巴西聯邦共和國。",
                "parliament" =>
                    "國會採兩院制，聯邦參議院81席，每州選出3席，任期8年，每4年改選三分之二，再隔4年改選三分之一；聯邦眾議院513席，按每州人口比例選出，任期4年。國會議員皆由人民直接選舉。2022年10月2日，巴西舉行總統、副總統、州長、參議員、眾議員及州議員選舉，其中參議院改選三分之一；眾議院方面513席全部改選。自由黨（PL）以16.5%與24.9%的選票成為參眾兩院第一大黨，巴西社會黨（PSB）與巴西希望（FE Brasil）分別為參眾兩院第二大黨。",
                "cabinet" =>
                    "總統為最高行政首長，各部會首長由總統任命。總統、副總統由人民直接選舉產生，任期4年。",
                "judiciary" =>
                    "聯邦或各州法院基本上均採三級三審制。聯邦另設勞工、選舉及軍事等專業法庭。聯邦最高法院法官有法令審查權，決定一切法令是否合憲。州法院判決案件，得上訴聯邦高等法院及聯邦最高法院。",
                "headman" => "魯拉(Luiz Inácio Lula da Silva)",
                "fa_minister" => "Mauro Vieira",
                "major_political_parties" =>
                    "工黨(PT)、巴西民主黨(DEM)、巴西民主行動黨(MDB)、巴西社會民主黨(PSDB)、巴西工人黨(PTB)、巴西共和黨(PRB)、巴西社會自由黨(PSL)",
                "financial_incoming" =>
                    "平均國民所得 6,499.39美元 (2021):國內生產毛額 1,608億美元 (2021)。政府財政赤字 5,613億巴幣 約1,037億美元 (2021)",
                "export_value" => "3,344億6,308萬美元 (2022)",
                "import_value" => "2,727億173萬美元 (2022)",
                "export_item" =>
                    "黃豆、原油、鐵礦石、燃料油、玉米、蔗糖、生鮮及冷凍牛肉、豆粕、生鮮及冷凍雞肉、咖啡 (2022)。",
                "import_item" =>
                    "燃料油、原油、肥料(鉀肥)、肥料(氮磷鉀綜合肥)、汽車零配件、殺蟲劑、肥料(氮肥)、天然氣、積體電路、引擎發動機 (2022)。",
                "main_export_countries" =>
                    "中國、美國、阿根廷、荷蘭、西班牙、智利、新加坡、墨西哥、日本、德國 (2022台灣排名第40位)。",
                "main_import_countries" =>
                    "中國、美國、阿根廷、德國、印度、俄羅斯、義大利、沙烏地阿拉伯、加拿大、日本 (2022台灣排名第18位)。",
                "export_to" =>
                    "積體電路、聚縮醛、汽車零配件、氯乙烯、機械零件、苯乙烯、殺蟲劑、儲存裝置、合成纖維絲紗、機車零配件 (14億2，300萬美元，2022)。",
                "import_from" =>
                    "黃豆、鐵礦石、玉米、化學木漿、生鐵、銅礦、合金鐵、咖啡、鐵屬廢料、加工木材 (28億636萬美元，2022)。",
                "foreign_relationship" =>
                    "1.巴西係拉丁美洲及加勒比海地區第一大國，與各國保持友好關係；2.自魯拉總統於2023年元月就職後，希望打破在極右派前總統波索納洛執政4年期間的國際孤立，宣佈巴西在全球的新角色，要恢復「南美洲整合」，重返國際社會，並重建「與美國、歐洲社會及中國的高度與積極對話」3.與歐洲各國關係向來友好；4.在亞洲地區，巴西與中國關係向極為密切友好，各項政經合作交流熱絡，新政府上任後，巴中間亦尋求重新建立雙方夥伴關係；另巴西境內日裔移民眾多，與日本關係久遠，兩國關係亦十分友好。",
                "foreign_policy" =>
                    "1.積極爭取聯合國常任理事國席位；2.經貿發展逐步走向開放，擬積極吸引外資投資巴西，並與多國進行自由貿易協定之磋商。",
                "time_range" => "晚臺灣11小時",
                "resident" =>
                    "我國在巴西首都巴西利亞設有代表處，並於聖保羅設有辦事處。",
                "national_flag" =>
                    "綠色－廣大的叢林；黃色－豐富的礦產；藍色－南半球的星空，其中27顆星分別代表26個州與1個聯邦特區，一道國家格言「紀律與進步」橫跨其中。",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            74 => [
                "name" => "巴貝多",
                "name_in_en" => "Barbados",
                "short_name" => "巴貝多",
                "short_name_in_en" => "Barbados",
                "capital" => "橋鎮(Bridgetown)，人口約11.2萬。",
                "capital_in_en" => "Bridgetown",
                "national_day" => "11月30日",
                "join_un_day" => "1966年12月9日",
                "area_size" => "約431平方公里。",
                "geographic" =>
                    "係位於加勒比海與大西洋邊界上的獨立島嶼國家，是西印度群島最東端的島嶼，聖露西亞、聖文森及格瑞那達是巴貝多最近的鄰國。巴貝多是小安地列斯群島的一員，也是加勒比海著名旅遊勝地。",
                "religion" => "居民多信奉基督教",
                "bilaterial_relations" =>
                    "我與巴貝多於1997年1月11日斷交，該國轉與中國大陸建交。我未在巴貝多設代表處，巴國業務由我駐聖露西亞大使館兼轄。",
                "main_bounds" => "巴國當地使用巴貝多幣(BBD)。",
                "exchange_rate" => "1美元約可兌換2巴貝多幣(BBD)。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/ad3d5cb1-2e75-48de-be98-a7493f2222be.GIF",
                "is_diplomatic" => 0,
                "language" => "以英語為官方及通用語言。",
                "main_media" =>
                    "1、報紙：Barbados Advocate、The Nation、The Broad Street Journal; 2、電視台：（1）加勒比海媒體公司; 係於2000年由加勒比海通訊社和加勒比海廣播公司合併成          立，服務內容概括電視、廣播和網際網路等業務。（2）巴國國營電視台：1971年11月首先在加勒比海地區播放彩色電視節目。3、廣播電台：Caribbean Broadcasting Corporation(CBC], BBS FM, Faith 102, Hott 95.3, Voice of Barbados。",
                "population" => "約287,770人(2021年預估數)",
                "voltage" => "電壓：115 V 頻率：50 Hz",
                "time_difference" => "-12:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/26c3b753-c7c3-418d-808b-fd41f91b9700.JPG",
                "political_system" =>
                    "巴貝多有穩固的民主政體，1966年11月30日自英國獨立後仍尊奉英國女王為國家元首，並設有總督。2021年 11月30日改制為共和國，原任總督梅森(Sandra Mason)獲選就任改制後首任總統。",
                "history_intro" =>
                    "16世紀前，巴貝多島為印第安人阿拉瓦克族和加勒比族居住地。西元1518年，西班牙人登島，10餘年後葡萄牙入侵。西元1624年，英國將巴貝多島劃為殖民地。 西元1627年，英國設總督管轄，並從西非販來大批黑奴開墾。西元1834年，英國被迫宣布廢除奴隸制。 1966年11月30日正式脫離英國獨立，2021年 11月30日改制為共和國。",
                "parliament" =>
                    "巴貝多國會組織計有參、眾兩院，參議院共21席，其中7席由總統指派，12席由總理提名、2席由反對黨領袖提名，另眾議院共30席，係透過民選產生。",
                "cabinet" =>
                    "本屆內閣於2022年1月24日就職，主要閣員包括總理兼財政、經濟、投資、國家安全、公共服務部長莫特莉、副總理Santia Bradshaw，以及外交及貿易部長  Jerome Walcott等。",
                "judiciary" =>
                    "巴貝多司法訴訟係由上訴法院、高等法院及地方法院組成。終審法院為加勒比海法院。",
                "headman" =>
                    "巴貝多於1966年11月30日脫離英國獨立並遵奉英女王伊麗莎白二世為國家元首，由總督代行職權。2021年 11月30日改制為共和國，原任總督梅森(Sandra Mason)獲選就任改制後首任總統 。",
                "fa_minister" => "Jerome Walcott",
                "major_political_parties" =>
                    '1.巴貝多勞工黨（Barbados Labour Party)：執政黨，成立於1938年。2. 民主勞工黨（Democratic Labour Party)：反對黨，成立於1955年。 3.人民自強黨（The People\'s Empowerment Party)：2006年成立。',
                "financial_incoming" =>
                    "巴國財政收入約28.92億巴元，支出約33.98億巴元（2021年預估數，資料來源：巴國政府報告，截至2022年5月最新數據)",
                "export_value" =>
                    "2021年全年出口總值為3.5億美元 (Trend Economy最新可得數據)",
                "import_value" =>
                    "2021年全年進口總值為16.73億美元 (Trend Economy最新可得數據)",
                "export_item" =>
                    "電子零件、萊姆酒、糖、糖蜜、化學製品、衣物、各類食品及飲料等。",
                "import_item" =>
                    "消費品、機械食品、建築材料、化學品、燃料、電氣元件、汽車、石油、飲料等。",
                "main_export_countries" =>
                    "區域內國家 、美國、牙買加、蓋亞那、千里達及托巴哥。",
                "main_import_countries" =>
                    "美國、千里達及托巴哥、荷蘭、英國、巴拿馬。",
                "export_to" =>
                    "巴貝多係我第155大貿易出口夥伴。我出口至巴貝多的金額為424萬669美元。(2022年1至11月經濟部國際貿易局統計數據)",
                "import_from" =>
                    "巴貝多係我第131大貿易進口夥伴。我自巴貝多進口金額為339萬5,176美元。(2022年1至11月經濟部國際貿易局統計數據)",
                "foreign_relationship" =>
                    "1.加強與加勒比海等鄰國的友好合作關係為其外交政策核心，巴國目前是加勒比海國   家共同體(CARICOM)創始會員國及加勒比海單一共同市場首屆成員國之一。2.非常重視與美國保持友好合作關係。雙方在打擊毒品走私與防範恐怖主義等事項均   保持密切合作。巴國並於1967年加入美洲國家组織（Organization of American   States)。3.英國是巴國重要貿易夥伴，巴國出口至英之蔗糖、萊姆酒及其他產品均享有優惠待   遇，對巴國出口經濟十分重要。",
                "foreign_policy" =>
                    "1.主張外交多元化發展且外交係為經濟發展服務，並採獨立自主和不結盟的外交政   策，積極推動加勒比海地區一體化，係加勒比海共同體(CARICOM)單一市場首批成   員之一。2. 與美國、加拿大及英國等國維持傳統友好關係，另與美國在反恐及打擊毒品走私等    議題上保持互動及密切合作。",
                "time_range" => "較臺灣時間間慢12小時。",
                "resident" => "無，由我國駐聖露西亞大使館兼轄",
                "national_flag" =>
                    "巴貝多國旗旗面左右兩側的海藍豎條分別代表著加勒比海與大西洋，夾間的金黃色豎條代表著巴貝多的沙灘。黃色條紋上鑲有黑色的三叉戟徽章。這是英國殖民者留下的痕跡，象徵著希臘神話中的海神波塞冬。有關國旗樣式請參考https://commons.wikimedia.org/wiki/File:Flag_of_Barbados.svg#/media/File:Flag_of_Barbados.svg",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            75 => [
                "name" => "布吉納法索",
                "name_in_en" => "Burkina Faso",
                "short_name" => "布吉納法索",
                "short_name_in_en" => "Burkina Faso",
                "capital" => "瓦加杜古",
                "capital_in_en" => "Ouagadougou",
                "national_day" => "12月11日",
                "join_un_day" => "1960年9月20日",
                "area_size" => "274,200平方公里",
                "geographic" =>
                    "位非洲西部撒哈拉沙漠以南，東北鄰尼日，西北連馬利，南接象牙海岸、迦納、多哥及貝南，為一內陸國家",
                "religion" => "伊斯蘭教、傳統信仰、基督教",
                "bilaterial_relations" => null,
                "main_bounds" => "西非法郎（West African CFA Franc, XOF)",
                "exchange_rate" =>
                    "詳細匯率資訊建議至臺灣銀行(https://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/660e3750-4524-4a77-ad5e-e34a2bd54ef0.GIF",
                "is_diplomatic" => 0,
                "language" =>
                    "法語為官方語言，惟僅具相當教育程度者可操流利法語，一般民眾多各以部族語言溝通，其與法語相去甚遠，其中摩西族（Mossi）人數約730餘萬人，約佔總人口數40%，故該族方言摩西語（Moore）較為通行，然非屬該族聚居地區，民眾通用當地方言，常有不識法語及摩西語者",
                "main_media" =>
                    '廣播(最為普及)：布吉納國家廣播電台(Radio Burkina，國營)、Radio Pulsar(民營)。電視台：布吉納國家電視台(Television Nationale du Burkina，國營)、Canal 3(民營)及BF1(民營)。報紙：Sidwaya(國營日報)、L\'Observateur Paalga(民營)、Le Pays(民營日報)。新聞供應社：布吉納新聞供應社(Agence d\'Information du Burkina，國營)',
                "population" => "21,510,000 （2020年1月）",
                "voltage" => "220伏特",
                "time_difference" => "-8:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/3eba53f0-1e55-4514-bfd7-b2a370528a24.JPG",
                "political_system" => "共和國、總統制",
                "history_intro" =>
                    "布吉納法索原稱上伏塔（Upper Volta），主要種族為摩西人（Mossi），占總人口40%，人數約730餘萬人。1919年淪為法國殖民地，1960年8月5日脫離法國獨立，建國後歷經多次政變並由軍人專制統治。1983年桑卡拉（Thomas Sankara）發動政變取得政權，厲行革命（仿效中國文革），外交採行不結盟政策，但積極與利比亞及迦納發展雙邊關係，並將國名更改為現今的布吉納法索，意為「君子之國」，因其人民以誠實純樸著稱。1987年桑卡拉於政變中遇害，龔保雷（Blaise Compaoré）上尉進京平亂，繼任「革命委員會委員長」，改組「人民陣線」，訓政4年。1991年6月11日「第四共和」憲法通過，還政於民，改採多黨民主制度，龔保雷當選第四共和第一任總統。2015年11月29日布國在歷經一年多的人民起義及軍事政變後舉行總統暨國會大選，由「人民進步運動黨」(MPP)總統候選人卡波雷(Roch M. C. Kaboré)以53.49%過半得票率於第一輪即贏得大選，並於12月29日宣誓就職，新政府於2016年1月12日成立。2020年11月22日布國再度舉辦總統大選；時任總統卡波雷於第一輪投票，以57.74%票數當選連任。2022年1月23至24日布國達米巴中校(Paul-Henri Sandaogo DAMIBA)發動政變推翻2020年連任之卡波雷政權並掌握政權，依臨時國會通過之過渡時期憲法設立過渡政府，過渡政府任期3年。同年9月30日，「保衛與復興愛國運動」組織成員，任職於佈署於布國北方之炮兵團之塔歐雷(Ibrahim Traoré)上尉再次發動政變，推翻達米巴政權，並於同年10月14日獲300名各界代表指定為新任臨時總統，任期至2024年7月總統大選為止。",
                "parliament" =>
                    '國家立法機關。國民議會實行一院制，由127名議員組成，其中111名由各省選區選舉產生，16名由全國名單選舉產生。前任國民議會主席為Alassane Sakandé。布國自2022年1月23-24日政變後，依臨時憲章設置之臨時立法會(l\'assemblée législative de transition，ALT)由71名議員組成(其中1名尚未指定)，其中由臨時政府總統指定21名，其餘區域與社會各界、政黨與軍方及安全單位指定。議長為Aboubacar Toguyeni。',
                "cabinet" =>
                    "由總理提出內閣名單並經總統同意後公布。臨時政府總統Paul-Henri Sandaogo Damiba依布國過渡時期憲章任命Albert Ouédraogo為新任總理，首任內閣成員計25名。 2022年9月30日布國政變後，臨時政府遭解散。",
                "judiciary" => "司法部下設各級法院",
                "headman" => "臨時總統 Ibrahim Traoré (2022年10月14日就任)。",
                "fa_minister" =>
                    "Ragnaghnèwendé Olivia ROUAMBA女士(2022年3月5日就任)2022年9月30日布國政變後，臨時政府遭解散，布國外交部長暫時從缺。",
                "major_political_parties" =>
                    "布國合法政治團體近百個，主要政黨包括「人民進步行動黨」（Mouvement du Peuple pour le Progrès, MPP）、「民主暨進步議會」（Congrès pour la Démocratie et le Progrès, CDP）、「進步暨改變聯盟」（Union pour le Progrès et le Changement, UPC）、「民主暨聯合同盟－非洲民主聯盟黨」（Alliance pour la Démocratie et la Fédération – Rassemblement Démocratique Africain, ADF-RDA）及「復興聯盟／桑卡拉運動」（Union pour la Renaissance/Parti socialiste）。",
                "financial_incoming" =>
                    "歲入30.69億美元，歲出37.64億美元(2019)、外債為34億美元(2018)",
                "export_value" => "81.5億美元（2020）",
                "import_value" => "38億美元（2020）",
                "export_item" => "黃金、鋅礦、棉花、含油種子",
                "import_item" => "精煉石油、藥品、電力、水泥、運貨卡車、",
                "main_export_countries" =>
                    "瑞士、印度、烏干達、象牙海岸、新加坡（2020年）",
                "main_import_countries" =>
                    "中國、法國、象牙海岸、迦納、印度（2020年）",
                "export_to" => "4,787,805美元(2021年)",
                "import_from" => "17,464美元(2021年)",
                "foreign_relationship" =>
                    "目前邦交國有105國，為聯合國及非洲組織等國際組織會員國",
                "foreign_policy" =>
                    "以有限之資源，在平等互惠、獨立自主原則之基礎上，透過元首親赴國外訪問、積極參與非洲事務及經舉辦重要國際會議等方式，全力推展對外關係，以達到確保布國安全、爭取國家建設所需外援及提高布國國際地位等目標",
                "time_range" => "較臺灣慢8小時",
                "resident" =>
                    "我在該國未設處，該國事務由我駐法國台北代表處兼轄。",
                "national_flag" =>
                    "於1984年8月4日制定。國旗使用泛非洲色(紅黃綠)，紅色代表1984年的革命，綠色代表農業與豐富的自然資源，黃色代表尚未發現的礦藏，星星則代表革命將國家帶向光明的未來",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            76 => [
                "name" => "希臘共和國",
                "name_in_en" => "Hellenic Republic",
                "short_name" => "希臘",
                "short_name_in_en" => "Greece",
                "capital" => "雅典(Athens/Athina)",
                "capital_in_en" => "Athens(Athina)",
                "national_day" => "3月 25日",
                "join_un_day" => "1945年10月25日",
                "area_size" => "131,957平方公里",
                "geographic" =>
                    "希臘位於北緯34度至42度間，歐洲東南部巴爾幹半島南端。陸地上北面與保加利亞、北馬其頓以及阿爾巴尼亞接壤，東部則與土耳其比鄰，瀕臨愛琴海，西南臨愛奧尼亞海及地中海。海岸線總長13,676公里，海岸地形曲折，島嶼星羅棋布，最大島為克里特島（Crete）。半島以平都斯山脈（Pindos）為主體，奧林帕斯山（Olympus）海拔2,917公尺，為希臘最高峰。伯羅奔尼薩（Peloponnese Peninsula）半島隔柯林斯（Corinth）地狹與半島相連。",
                "religion" => "希臘東正教",
                "bilaterial_relations" => null,
                "main_bounds" => "歐元",
                "exchange_rate" => "1歐元兌31.6新臺幣（2022年3月3日）",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/5108dba1-707e-4151-b407-8a316606d14c.GIF",
                "is_diplomatic" => 0,
                "language" => "以希臘文為主，較通行之外語為英文、法文及德文。",
                "main_media" =>
                    "Kathimerini （每日報）、Ta Nea (新聞報)、Eleftherotypia（新聞自由報）、Avgi(黎明報)、Ethnos (國家報)、ERT（希臘公視）、Mega TV、Alpha TV、Star TV、Skai TV",
                "population" => "1,068萬人(2021年)",
                "voltage" => "220 伏特",
                "time_difference" => "-6:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/ad95ef70-86a6-4e88-a684-70858cfc6057.jpg",
                "political_system" => "共和國、內閣制、虛位總統",
                "history_intro" =>
                    "西元前800年希臘城邦在地中海沿岸建立殖民地，至西元前500年達到鼎盛。於西元前168年希臘被羅馬征服，成為羅馬帝國之一省，在羅馬帝國分裂後，希臘文化主導拜占庭帝國之發展。西元1453年遭奧圖曼帝國入侵並受其統治，直至1821年希臘人宣佈獨立為止。1828年希臘獨立戰爭結束，1833年建立君主政權。二戰期間，希臘遭義大利入侵，又經德國佔領後陷入內戰，直至1949年共產黨遭擊敗，始由希臘國王統治。希臘嗣於1952年宣佈加入北約組織，1967年希臘軍方發動政變，並宣佈廢黜國王，然因賽普勒斯問題導致軍人政權於1974年垮台，促成1975年6月希臘共和國憲法之產生。1981年希臘正式加入歐盟。",
                "parliament" =>
                    "一院制，共300名議員，由人民直選，任期4年。2019年7月7日進行國會選舉後，各政黨所佔國會席次分別為：「新民主黨」158席、「極左聯盟」86席、「改變運動黨」22席、「共產黨」15席、「希臘方案」(Greek Solution)10席及「MeRA25」9席，由「新民主黨」執政。",
                "cabinet" =>
                    "責任內閣制，總理掌實權，由國會多數黨黨魁經總統任命後出任。",
                "judiciary" =>
                    "採三級制、設有地方法院、上訴法院及最高法院，第一最高法院執掌民刑事案件，第二最高法院為最高行政法院，第三最高法院審理審計案件。法官均由總統與司法審議委員會諮商後任命。",
                "headman" =>
                    "總統: 薩柯拉羅普露(Katerina Sakellaropoulou)(2020年3月13日就任)總理: 米佐塔基斯(Kyriakos Mitsotakis) (2019年7月8日就任)",
                "fa_minister" => "丹迪亞斯(Nikos Dendias) (2019年7月9日就任)",
                "major_political_parties" =>
                    "「新民主黨」(ND)、「極左聯盟」(SYRIZA)、「改變運動黨」(KINAL，原「泛希臘社會主義運動」改組)、「共產黨」(KKE)、「希臘方案」(Greek Solution)及「MeRA25」",
                "financial_incoming" =>
                    "歲入864.5億歐元，歲出1046億歐元(2021年)",
                "export_value" => "398億9460萬美元(2021年)",
                "import_value" => "641億9020萬美元(2021年)",
                "export_item" =>
                    "礦物燃料及相關製品、醫藥品、機械相關產業、鋁及製品、電子產品及零組件、食用蔬果與橄欖橄欖油及堅果、塑膠製品、乳製品",
                "import_item" =>
                    "原油及天然氣、機械及電子產品、醫藥品、化學產品、車輛及其零件配件、礦物燃料、原物料、塑膠產品",
                "main_export_countries" =>
                    "義大利、德國、賽普勒斯、法國、保加利亞、土耳其、英國、美國、西班牙、羅馬尼亞",
                "main_import_countries" =>
                    "德國、義大利、中國大陸、荷蘭、俄羅斯、法國、伊拉克、愛爾蘭、西班牙、比利時",
                "export_to" =>
                    "鐵道車輛零組件、機械用具及零件、有機化學產品、電子設備、塑膠製品、鋼鐵製品、金屬工具、鋁製品、化學製品",
                "import_from" =>
                    "礦物燃料及相關製品、醫藥製品、精油及化妝用品、菸草、礦石",
                "foreign_relationship" =>
                    "希臘為聯合國成員，並參與多個聯合國下國際組織，另為歐盟、北約及WTO成員。與各國關係良好，惟與土耳其時有海域及空域爭議，與阿爾巴尼亞有境內少數族裔權益爭議。希臘另基於歷史、文化、語言及領土宣稱等因素與馬其頓具國名爭議，惟雙方於2018年6月17日簽署解決國名爭議之Prespa協議，後經兩國國會同意通過，2019年2月12日馬其頓正式改名為北馬其頓共和國，希臘同意不再於北約及歐盟杯葛北馬其頓入會申請。近年因地中海劃界以及資源開發議題，與土耳其時起糾紛。",
                "foreign_policy" =>
                    "以歐盟之對外政策為主，與歐盟國家關係關係密切，安全上以美國及北約為主要合作夥伴，惟傳統上亦與俄羅斯關係較其他歐盟國家緊密，另因地處歐亞非大陸交界處，地緣位置關鍵，近年積極與中東國家、亞洲國家(以中國大陸為主)及北非國家來往。",
                "time_range" =>
                    "較台灣慢6小時(4月至10月日光節約時間較台灣慢5小時)",
                "resident" => "駐希臘代表處",
                "national_flag" =>
                    "希臘國旗元素包含藍白二色、十字圖案及平行長條，藍白二色為象徵希臘代表色，9條藍白相間的平行長條代表1821年希臘獨立起義時的口號「Ελευθερία ή Θάνατος」（不自由，毋寧死）的9個音節，另藍十字亦象徵希臘獨立起義之際所使用之白地藍十字旗。",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            77 => [
                "name" => "帛琉共和國",
                "name_in_en" => "Republic of Palau",
                "short_name" => "帛琉",
                "short_name_in_en" => "Palau",
                "capital" =>
                    "Ngerulmud。位於美麗坵(Melekeok)州稱新都(New Capital)。",
                "capital_in_en" =>
                    "首都於2006年10月1日由科羅(Koror)遷至美麗坵(Melekeok)州的Ngerulmud 稱新都(New Capital)。",
                "national_day" => "10月1日",
                "join_un_day" => "1994年12月15日申請獲准加入聯合國成為會員國",
                "area_size" =>
                    "地處西太平洋密克羅尼西亞群島，北緯2至8度之間，東經131至135度之間，由8個主要島嶼及約340個火山岩小島組成，其中9個島有人居住，通稱帛琉群島(Palau Archipelago)，土地面積約191平方英里。",
                "geographic" =>
                    "帛琉亦處西太平洋交通要衢上，握菲律賓與關島間之太平洋主要航線，經關島有航線至日本、亞洲各城市及美國西海岸；對美國而言，帛琉乃重要之戰略島嶼之一。此地屬熱帶海洋性氣候，年平均溫攝氏27度，年均雨量3100-3700毫米。",
                "religion" =>
                    "帛琉人多為天主教（45％）及基督教（35％），基督復臨安息日會(SDA)及Evangelical亦有眾多教友，另外有帛琉傳統宗教（Modekngei）（6％）",
                "bilaterial_relations" => null,
                "main_bounds" =>
                    "美金1美元約可兌換29元新台幣，惟須視匯率浮動情況而定。建議查詢當日台灣銀行（http://rate.bot.com.tw/xrt?Lang=zh-TW）或兆豐商銀匯率（https://www.megabank.com.tw/personal/foreign-service/forex）",
                "exchange_rate" => "依美金匯率",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/3f899fe2-355a-47c7-878c-315b35a0c690.gif",
                "is_diplomatic" => 1,
                "language" => "英語及帛琉語。",
                "main_media" =>
                    "平面媒體2家，分別為島嶼時報(Island Times)及帛琉報(Tia Belau)；另有數家電視台及廣播電台。",
                "population" =>
                    "人口約2萬人(含外勞6千餘人)，其中1.3萬人集中於第一大城科羅州(Koror)，餘則散居大島各州濱海地區。",
                "voltage" => "110伏特",
                "time_difference" => "+1:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/c1ef0d21-bee9-4fca-9cca-30118424f7f3.JPG",
                "political_system" =>
                    "採三權分立總統制，正副總統、內閣部長及國會議員任期均為4年，地方分為16個州。現任元首及行政首長為總統惠恕仁(Surangel S. Whipps, Jr.)於2021年1月宣誓就職。",
                "history_intro" =>
                    "帛琉群島係於1783年由葡萄牙人發現，嗣經西班牙人統治，1899年由西班牙售予德國，第一次世界大戰後由日本接管，第二次世界大戰中由盟軍攻佔，戰後於1947年由聯合國授權美國託管，1981年獲准成立自治政府，稱為「帛琉共和國」，嗣於1994年10月1日正式獨立。",
                "parliament" =>
                    "設參眾兩院，參院13席(全國單一選區)、眾院16席(各州1席)。現為第11屆國會於2021年1月21日上任，參院議長為Hokkons Baules；眾院議長為Sabino Anastacio；",
                "cabinet" =>
                    "設八部，分別為國務部、財政部、基建工業部、人力資源、文化、觀光暨發展部、教育部、衛生部、司法部及自然資源環境暨觀光部，部長由總統任命並須經參議院同意。另設有酋長會議(Council of Chiefs)提供政府諮詢建議；",
                "judiciary" =>
                    "設最高法院(掌管上訴及審判)、國民法院 (掌管一般民事之地方法院)及土地法院。大法官為終身職，現任大法官(Chief Justice) Oldiais Ngiraikelau於2020年8月19日上任。",
                "headman" => "總統惠恕仁(Surangel S. Whipps, Jr.)",
                "fa_minister" => "Gustav Aitaro",
                "major_political_parties" => "有派系無政黨。",
                "financial_incoming" =>
                    "往年多為赤字，惟自2015年起逐漸出現少許盈餘。",
                "export_value" => "1,310萬美元( 2020）",
                "import_value" => "8,930萬美元(2020）",
                "export_item" => "高級魚類、椰子製品",
                "import_item" => "機械、車輛、建材、食品、電器、煙酒",
                "main_export_countries" => "美國、中華民國、菲律賓、關島",
                "main_import_countries" => "美國、新加坡、中華民國、中國、日本",
                "export_to" => "機械、車輛、建材、食品、電器、煙酒",
                "import_from" => "魚類及椰子製品等",
                "foreign_relationship" =>
                    "我國、日本、美國及澳洲在帛設館，四國均派駐大使。我國現任大使：黎倩儀。",
                "foreign_policy" =>
                    "該國對外政策受美國極大影響，與美國簽有帛美自由聯合協定",
                "time_range" => "比台灣快1小時",
                "resident" =>
                    "我與帛於1999年12月29日建交。2000年3月5日我駐帛琉大使館揭幕。",
                "national_flag" => "http://palaugov.org/about-palau/flag/",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            78 => [
                "name" => "幾內亞共和國",
                "name_in_en" => "Republic of Guinea",
                "short_name" => "幾內亞",
                "short_name_in_en" => "Guinea",
                "capital" => "柯那克里(Conakry)",
                "capital_in_en" => "Conakry(柯那克里)",
                "national_day" => "10月2日",
                "join_un_day" => "1958年12月12日",
                "area_size" => "245,857平方公里",
                "geographic" =>
                    "位於西非大西洋濱，北與幾內亞比索、塞內加爾、馬利接壤，南鄰獅子山、賴比瑞亞及象牙海岸。",
                "religion" => "伊斯蘭教(89.1%)、基督教(6.8%)、傳統信仰(1.6%)",
                "bilaterial_relations" => null,
                "main_bounds" => "幾內亞法郎",
                "exchange_rate" =>
                    "1美元8697.09幾內亞法郎 (2022年4月)。詳細匯率資訊建議至臺灣銀行（https://rate.bot.com.tw/xrt?Lang=zh-TW）或兆豐商銀（https://www.megabank.com.tw/personal/foreign-service/forex）網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/7d4d490a-fc1b-4817-832f-bf220c1b624b.GIF",
                "is_diplomatic" => 0,
                "language" =>
                    "法語(官方語言)、富拉語(Fula/Pular)、馬尼克語(Manink)、蘇蘇語(Susu)及其他。",
                "main_media" =>
                    "報紙：Le Lynx、Le jour。電視：幾亞那電視台Télévision Guinéenne (RTG)廣播：幾亞那廣播電台Radio Guinéenne (RTG) 網路新聞：Africaguinée；Aminata; Aujourd’hui en Guinée；Conakry Online等及網路網站 http://guineelive.com/",
                "population" => "1,287萬人（2021年)",
                "voltage" => "220伏特",
                "time_difference" => "-8:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/93a3eda6-46f2-4d09-90a3-aa107463b9b1.JPG",
                "political_system" => "共和國總統制。總統由民選產生，任期5年。",
                "history_intro" =>
                    "幾內亞於西元初原分隸西非各古老帝國，15世紀初，葡萄牙始在該地區從事貿易與捕販黑奴。18世紀，境內富拉人（波爾人）改奉伊斯蘭教，繼猛丁哥帝國（Mandinka族，今甘比亞共和國最大族群）建立霸權，因與其他族群無法共存而戰事不斷。法國於1838年開始入侵幾內亞，1842年設立法屬南河區（Comptoirs des Rivières du Sud），歸法屬塞內加爾管轄，1893年幾內亞成為法國殖民地，並於1899年併入法屬西非。1958年9月28日，幾內亞人公民投票選擇脫離法蘭西國協，同年10月2日獨立，由杜雷(Sékou TOURE)出任首任總統。",
                "parliament" => "一院制，共114席，由人民直選，任期5年。",
                "cabinet" => "總理為行政首長，由總統提名。",
                "judiciary" => "設有最高法院、上訴法院、初審法庭及治安法庭。",
                "headman" => "Mamady Doumbouya",
                "fa_minister" => "Morissanda Kouyaté",
                "major_political_parties" =>
                    "幾內亞人民聯盟黨（Rassemblement du Peuple Guinéen，RPG）、幾內亞民主聯盟（Union des Forces Démocratiques de Guinée，UFDG）、共和國力量聯盟（Union des Forces Républicaines，UFR）、幾內亞進步復興聯盟（Union pour le Progrès et du Renouveau, UPR）、新民主力量黨(Nouvelles forces démoratiques, NFD)、改革力量聯盟(Union des forces du changement, UFC)",
                "financial_incoming" =>
                    "總收入約24億美元(2021年)、總支出約22.2億美元（2021年）、外債38億美元（2020年）",
                "export_value" => "94.4億美元（2020年）",
                "import_value" => "40.2億美元（2020年）",
                "export_item" => "鋁土礦、氧化鋁、黃金、鑽石、漁獲、農產品",
                "import_item" =>
                    "石油產品、機械、運輸設備、藥品、糧食和其他食品",
                "main_export_countries" => "阿拉伯聯合大公國、中國、印度",
                "main_import_countries" =>
                    "中國、印度、荷蘭、比利時、阿拉伯聯合大公國",
                "export_to" => "16,521,918美元（2021年）",
                "import_from" => "157,815美元（2021年）",
                "foreign_relationship" =>
                    "1958年12月12日加入聯合國。在雙邊關係部分，幾內亞受到鄰國內戰影響甚深，本世紀初期曾因區域危機（賴比瑞亞、象牙海岸、獅子山等國）成為近十萬名難民避難地。在多邊關係上，受到國際社會壓力（歐盟、非洲聯盟、西非經濟共同體），幾內亞軍政府受到須尊重人權、民主、組織過渡政府、舉辦總統大選、重建憲法等要求。孔德總統上任後積極改善與鄰國獅子山之關係，以避免邊界之衝突，另加強與衣索比亞、土耳其關係，簽署農業、航空、經貿、投資多項協議，並與象牙海岸加強反恐合作。自2021年9月軍事政變後，幾內亞遭若干國際組織暫停其會員國資格包括西非經濟共同體（ECOWAS)、非洲聯盟(UA)及法語系國家組織(OIF)。",
                "foreign_policy" => "與各國發展友好關係",
                "time_range" => "較臺灣慢8小時",
                "resident" =>
                    "我在該國未設處，該國事務由我駐法國台北代表處兼理",
                "national_flag" =>
                    "紅色（升降機側），黃色和綠色三個相等的垂直帶; 紅色代表人民為解放和工作所作的犧牲; 黃色代表太陽，地球的財富和正義; 綠色象徵著國家的植被和統一注意：使用衣索比亞流行的泛非色彩; 從左到右的顏色與鄰國馬利和塞內加爾旗幟上的顏色相反https://commons.wikimedia.org/wiki/File:Flag_of_Guinea.svg#/media/File:Flag_of_Guinea.svg",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            79 => [
                "name" => "幾內亞比索共和國",
                "name_in_en" => "Republic of Guinea-Bissau",
                "short_name" => "幾內亞比索",
                "short_name_in_en" => "Guinea-Bissau",
                "capital" => "Bissau",
                "capital_in_en" => "Bissau",
                "national_day" => "9月24日宣佈獨立",
                "join_un_day" => "1974年9月17日",
                "area_size" => "36,125平方公里",
                "geographic" =>
                    "幾比位於西非，其地理位置西瀕大西洋，位於塞內加爾西南方，東部鄰接幾內亞。",
                "religion" =>
                    "幾比人口中的45%信奉回教，31%信奉當地原住民宗教，22%信奉基督教，餘為其他。",
                "bilaterial_relations" => null,
                "main_bounds" => "貨幣名為非洲金融共同體法郎FRANCO CFA",
                "exchange_rate" =>
                    "詳細匯率資訊建議至臺灣銀行(https://rate.bot.com.tw/xrt)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/f50becef-552a-4ab6-af38-30ef917000ac.GIF",
                "is_diplomatic" => 0,
                "language" => "葡萄牙語、Crioulo語",
                "main_media" =>
                    "平面媒體主要有: Jornal Nô Pintcha, Gazeta de Notícias Gaznot, Bissau Digital, Agência de Notícias da RGB Guine Bissau等5家；電子媒體則有: Televisão da Guiné Bissau, Rádio Sol Mansi, Rádio Jovem, Rádio Bantaba Di Djumbai, Rádio Gumbe等5家。",
                "population" => "192.1萬人(2019)",
                "voltage" => "220 V, 50Hz",
                "time_difference" => "-8:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/684fa741-1e54-4a7a-b27a-7f35548f8507.JPG",
                "political_system" => "雙首長制",
                "history_intro" =>
                    "1466年葡萄牙人首次登陸海岸，1878年柏林條約將幾內亞比索列為葡萄牙殖民地。其獨立運動始於1961年，由Amilcar Cabral及Luis Cabral兄弟二人所創立的「幾內亞暨維德角非洲獨立黨」（PAIGC）領導，1973年9月，PAIGC於游擊區內召開第一屆全國人民大會，通過憲法，並於9月24日宣布獨立，並尊創黨人Luis Cabral為國父。1974年4月葡國政變，乃於9月10日正式承認幾內亞比索的獨立。獨立後的幾內亞比索陷入長年的政變與混亂。1980年軍事強人João Bernardo “Nino” Vieira政變掌權，歷經多次軍事政變，1994年舉行首次選舉，Nino Vieira當選總統，嗣因軍事暴動及內戰，Nino Vieira總統於1999年5月去職。2000年2月由反對黨領袖Kumba Yala出任總統，2003年9月軍事政變中，Kumba Yala總統下台，改由Henrique Rosa代理總統。2005 年Nino Vieira再度當選總統，執政訴求國家經濟發展及全國和解，惟於2009年3月遭暗殺身亡。2009年7月舉行總統選舉，Malam Bacai Sanha當選總統，Carlos Gomes Junior 擔任總理。2012年1月，Sanha總統病逝巴黎，由國會議長Raimundo Pereira代理總統並於2012年3月18日舉行總統補選，投票結果未有候選人得票過半數，因此應由得票最多的2名候選人總理Carlos Gomes Junior（得票率49%）及前總統Kumba Yala（23.4%）進行第二輪投票；然而，幾內亞比索軍方於2012年4月12日發動政變，中斷選舉，受到聯合國、非洲聯盟等譴責。經西非經濟共同體（ECOWAS）調停，幾內亞比索於2012年5月成立過渡政府，並於2014年舉行總統選舉，José Mário Vaz於2014年5月經第二輪投票贏得大選。2020年2月Umaro Sissoco Embaló於爭議中當選總統。",
                "parliament" =>
                    "單一國會制，議員席位共有102席。2019年3月幾比舉行國會選舉，儘管幾比及維德角非洲獨立黨(PAIGC)贏得47席，惟在未能與其他黨組成聯合政府下，由取得27席之民主輪替行動黨(Madem G15)、21席之社會重建黨(PRS)及2席之幾比人民團結民主黨(APU-PDGB)執政。",
                "cabinet" => "總理Nuno Gomes Nabiam",
                "judiciary" =>
                    "設憲法法院、最高法院、上訴法院、初審法院等；各法院獨立行使職權。",
                "headman" => "總統Umaro Sissoco Embaló",
                "fa_minister" => "Suzi Carla Barbosa",
                "major_political_parties" =>
                    "幾內亞暨維德角非洲獨立黨(PAIGC)、社會復興黨（PRS）、獨立發展共和黨（PRID）、新民主黨（PND）、民主聯盟（AD）等。",
                "financial_incoming" => "逆差91百萬美元 (2019)",
                "export_value" => "223百萬美元 (2019)",
                "import_value" => "314百萬美元 (2019)",
                "export_item" => "魚、蝦、腰果、花生、木材。",
                "import_item" => "食品、機械設備、運輸設備、石化產品。",
                "main_export_countries" => "印度、新加坡、歐盟、巴拿馬",
                "main_import_countries" => "歐盟、塞內加爾、泰國、中國",
                "export_to" => "4,439美元 (2020)",
                "import_from" => "暫無資料",
                "foreign_relationship" => null,
                "foreign_policy" => null,
                "time_range" => "較台灣晚8小時",
                "resident" =>
                    "我在該國未設處，該國事務由我駐葡萄牙代表處兼轄。",
                "national_flag" => null,
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            80 => [
                "name" => "庫克群島",
                "name_in_en" => "Cook Islands",
                "short_name" => "庫克群島",
                "short_name_in_en" => "Cook Islands",
                "capital" => "阿瓦盧阿",
                "capital_in_en" => "Avarua",
                "national_day" => null,
                "join_un_day" => null,
                "area_size" => "陸地240平方公里",
                "geographic" =>
                    "庫克群島位於南太平洋，紐西蘭的東北方，介於法屬波里尼西亞與美屬薩摩亞之間。共有15個主要島嶼散佈於220萬平方公尺的海域內。",
                "religion" => "基督教",
                "bilaterial_relations" => null,
                "main_bounds" => "紐西蘭幣、庫克群島幣",
                "exchange_rate" =>
                    "詳細匯率資訊建議至台灣銀行(https://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)查詢",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/897730b3-34d2-405f-8b65-0f63eb068e63.gif",
                "is_diplomatic" => 0,
                "language" => "毛利語、英語、庫克群島毛利語",
                "main_media" => "庫克群島新聞報",
                "population" => "17,500 (另估計約有60,000名居住在紐西蘭)",
                "voltage" => "220V",
                "time_difference" => "-18:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/9f79b399-5720-49f1-acb2-03c97c135310.JPG",
                "political_system" => "議會民主之單一國會及內閣制",
                "history_intro" =>
                    "庫克群島原住民為毛利人，於13世紀自薩摩亞與法屬玻里尼西亞小島移入，並由此向紐西蘭遷徙。英國於1888年將庫克群島及附近島嶼納為保護地，紐西蘭於1900年9月27日將庫克群島併入版圖，成為紐西蘭屬地。庫克群島於1965年取得自治地位，並漸獲國家地位。",
                "parliament" => null,
                "cabinet" => null,
                "judiciary" => null,
                "headman" => null,
                "fa_minister" => null,
                "major_political_parties" => null,
                "financial_incoming" => null,
                "export_value" => null,
                "import_value" => null,
                "export_item" => null,
                "import_item" => null,
                "main_export_countries" => null,
                "main_import_countries" => null,
                "export_to" => null,
                "import_from" => null,
                "foreign_relationship" =>
                    "庫克群島為大英國協成員，尊英國國王為國家元首，與紐西蘭維持自由結合(Free Association)之關係，其憲法仍載明得由紐西蘭政府代管其外交與國防，並在庫克群島政府要求下執行，目前庫克群島專屬經濟海域(EEZ)係由紐西蘭負責巡邏查緝。紐西蘭同意庫克群島人民可同時擁有紐西蘭國籍，可以定居及自由進出紐西蘭。 目前庫克群島與紐西蘭維持上述關係，同時已可自主立法，並開始直接處理其對外關係。目前庫克群島與45國有正式外交關係並加入下列國際組織成為會員：聯合國教科文組織(UNESCO)、世界衛生組織(WHO)、國際民航組織(ICAO)、國際海事組織(IMO)、聯合國糧農組織(FAO)、亞洲開發銀行(ADB)、太平洋島國論壇(Pacific Islands Forum)、論壇漁業局(Forum Fisheries Agency)、太平洋社區(Pacific Community)、中西太平洋漁業委員會等。此外，庫克群島也簽署若干國際公約或協定，如聯合國海洋法公約(UNCLOS)、禁止化學武器公約(CWC)、南太平洋區域漁業養護暨管理公約(SPRFMO Convention)等。",
                "foreign_policy" => null,
                "time_range" => "較台灣晚18個小時。",
                "resident" => "無(由我駐紐西蘭代表處兼轄)",
                "national_flag" =>
                    "庫克群島旗幟承襲英國海外領地旗幟的格式，以英國政府船旗為基礎。藍色代表庫克群島的各島嶼散布在廣大的太平洋上，十五顆白星代表庫克群島的十五個島嶼。",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            81 => [
                "name" => "德意志聯邦共和國",
                "name_in_en" => "Federal Republic of Germany",
                "short_name" => "德國",
                "short_name_in_en" => "Germany",
                "capital" => "柏林",
                "capital_in_en" => "Berlin",
                "national_day" => "10月 3日",
                "join_un_day" => "1973年9月18日",
                "area_size" => "357,121平方公里",
                "geographic" =>
                    "位於歐洲心臟地帶，東鄰波蘭、捷克，西接荷、比、盧及法國，南            界瑞士、奧地利，北至丹麥及波羅的海。",
                "religion" =>
                    "天主教（27%）、新教（25%）、伊斯蘭教(5%)（2019）",
                "bilaterial_relations" => null,
                "main_bounds" => "歐元(Euro)",
                "exchange_rate" =>
                    "自 2002 年 01 月 01 日起正式啟用歐元紙鈔及硬幣。2022年6月30日歐元兌美元匯率，1歐元約折合 1.0489美金，約折合新台幣31.15172元。詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/9f389b35-5641-4e86-a21b-e6e82ff48e89.GIF",
                "is_diplomatic" => 0,
                "language" => "德語",
                "main_media" =>
                    "明鏡週刊〈Der Spiegel〉、明星週刊〈Stern〉、焦點週刊〈Focus〉、法蘭克福廣訊報〈F.A.Z.〉、世界日報〈Die Welt〉、南德日報〈Sueddeutsche Zeitung〉、第一電視台（ARD）、第二電視台（ZDF）、時代週報(Die Zeit)",
                "population" => "約8,302萬（2021年）",
                "voltage" => "220伏特",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/2fc0c68b-c9bf-43f9-b330-6e848cf4f8d5.jpg",
                "political_system" => "聯邦制／內閣制",
                "history_intro" =>
                    "第二次世界大戰後，美蘇英法四強依據柏林協定分別佔領德國，並分別成立監督理事會，為最高權力機構。嗣由於蘇俄與西方三強形成對峙，導致佔領區聯合行政計畫無法實現，西方三強之佔領區遂成立統一經濟區。1949年5月23日制頒基本法，同年8月14日舉行大選，成立德意志聯邦共和國〈統一前簡稱為西德〉。同年10月7日，蘇俄佔領區亦宣布成立「德意志民主共和國」〈簡稱東德〉。東西德對峙長達50年之久，至1989年11月9日柏林圍牆為德國人民所推倒，東德並於1990年10月3日依據西德基本法第23條加盟德意志聯邦共和國，和平達成「德國統一」。",
                "parliament" =>
                    "分為聯邦參議院及聯邦眾議院。聯邦眾議院（即通稱之國會）為德國主要之立法機關，其組成方式係由全國299個選區中選出299位直接當選人（第一選票），另各政黨依其政黨得票比例（第二選票）分配另299位席次，原則上預計選出598位當選人，另加上「增額席次」（倘某政黨所獲直接席次多於該政黨依照第二票所該得比例時，此時該黨多出之席位乃增額席次）及「平衡席次」（引進平衡席次後，增額多出來之席位，均須依照第二票政黨得票比，增加相對應之平衡席次）。2021年9月26日第20屆國會大選結果：社民黨（SPD）得票25,7%獲206席，基民/基社聯盟（Union）24,1%獲196席，綠黨（Bündnis 90/Die Grünen）14,8%獲118席，自民黨（FDP）11,5%獲92席，另類選擇黨（AfD）10,3%獲83席，左黨（Die Linke）4,9%獲39席，其他政黨8,7%（+3,8%）。左黨得票率雖未跨越5%門檻，但贏得3個直選席次，符合國會分配議席資格。本屆國會議員總計736人，投票率達76,6%。共計有5個政黨選舉結果得票率超過10%以上，取代並分散傳統以來兩大政黨（基民/基社聯盟與社民黨）勢力。本屆國會於2021年10月26日開議，選出國會最大黨黨團提名之社民黨籍Bärbel Bas女士擔任本屆國會議長。",
                "cabinet" =>
                    "德國第20屆國會大選後由社民黨、綠黨籍自民黨籌組聯合內閣，並於2021年11月24日完成組閣談判，公布聯合執政協議。嗣由德國國會於12月8日投票選出社民黨籍舒爾茲(Olaf Scholz)為新任聯邦總理，聯合內閣16名聯邦部長中有7名是女性。舒爾茲總理係繼Willy Brandt（1969-1974）、Helmut Schmidt（1974-1982）、Gerhard Schröder（1998-2005）後第四位社民黨籍聯邦總理，並為德國戰後第九任聯邦總理，接替擔任長達16年之梅克爾總理職位。",
                "judiciary" =>
                    "司法權由聯邦憲法法院、各聯邦法院及各邦法院分別行使。",
                "headman" =>
                    "Frank-Walter Steinmeier（2017年2月12日當選，2022年2月13日獲選連任，並自3月19日開始第2任任期）。",
                "fa_minister" => "Annalena Baerbock（2021年12月8日就任）",
                "major_political_parties" =>
                    "基民黨（CDU）、基社黨（CSU）、社民黨（SPD）、另類選擇黨（AfD）、自民黨（FDP）、左派黨（DIE LINKE）、綠黨（Bündnis 90/Die Grünen）",
                "financial_incoming" =>
                    "財政支出1兆7,624億歐元／財政收入1兆6,293億歐元 (2021年)",
                "export_value" => "1兆3,754億歐元（2021年）",
                "import_value" => "1兆2,026億歐元（2021年）",
                "export_item" =>
                    "小客車機動車輛、藥品、車輛零附件、人類血液、動物血液、抗毒血清、疫苗、航太產品、醫療器材、電腦及零組件、特殊機械、電路器材、離心機、過濾器",
                "import_item" =>
                    "小客車機動車輛、天然氣和其他氣態碳氫化合物、人類血液、動物血液、抗毒血清、疫苗、原油、車輛零附件、藥品、電腦及零組件、電話及電訊設備、原油以外之石油、積體電路",
                "main_export_countries" =>
                    "美國、中國大陸、法國、荷蘭、波蘭、義大利、奧地利、英國、瑞士、比利時",
                "main_import_countries" =>
                    "中國大陸、荷蘭、美國、波蘭、義大利、法國、比利時、捷克、瑞士、奧地利",
                "export_to" => "81億7,312萬美元（2021年）",
                "import_from" => "125億243萬美元（2021年）",
                "foreign_relationship" => "與歐盟國家及美國關係密切",
                "foreign_policy" => "歐盟會員國，採行歐盟之一致對外政策。",
                "time_range" =>
                    "德國於夏季期間（約為3月底至10月底止）採日光節約時間，較臺灣晚6小時（-6）；冬季期間（約為10月底至3月底止）較臺灣晚7小時（-7），分別於每年3月及10月最後一個週日凌晨2時轉換調節。",
                "resident" =>
                    "駐德國代表處(Taipeh Vertretung in der Bundesrepublik Deutschland)",
                "national_flag" =>
                    "德國國旗是由三條等寬的分別為德國國家代表色「黑、紅、金」色的橫條組成的三色旗。",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            82 => [
                "name" => "愛沙尼亞共和國",
                "name_in_en" => "Republic of Estonia",
                "short_name" => "愛沙尼亞",
                "short_name_in_en" => "Estonia",
                "capital" => "塔林",
                "capital_in_en" => "Tallinn",
                "national_day" => "2月24日",
                "join_un_day" => "1991年09月17日",
                "area_size" => "45,227平方公里",
                "geographic" =>
                    "愛沙尼亞位於北緯57.3度至59.5度、東經21.5度至28.1度間，位於波羅的海三國最北端，北隔芬蘭灣與芬蘭相望，東與俄羅斯為界，南鄰拉脫維亞。",
                "religion" => "基督教路德教派及俄羅斯東正教",
                "bilaterial_relations" => "{{--br /--}}",
                "main_bounds" => "歐元",
                "exchange_rate" => "目前歐元與台幣匯率約為31台幣兌換1歐元",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/99dc6bf3-63f4-4bd1-b640-fc365e6f5d06.GIF",
                "is_diplomatic" => 0,
                "language" =>
                    "愛沙尼亞語，屬於烏拉爾語系的芬蘭-烏戈爾語族，接近芬蘭語。",
                "main_media" =>
                    "ERR(愛沙尼亞國家廣播電臺)、Potimees(郵報)、Eesti Paevaleht日報、Eesti Ekspress週報、Delfi News電子新聞等。",
                "population" => "約132萬",
                "voltage" => "220 Volts AC, 50Hz, 插頭為歐洲雙圓柱型插頭。",
                "time_difference" => "-6:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/aa321518-f392-4c9e-8cf2-ad8f0fce6889.jpg",
                "political_system" => "共和國，議會內閣制",
                "history_intro" =>
                    "愛沙尼亞地區史前先民為芬蘭-烏戈爾之愛沙尼亞族人。1277年，遭丹麥及日耳曼人征服，基督教因而進入；之後，愛沙尼亞先後為丹麥、瑞典等北歐國家統治，最終遭俄國兼併。1918年11月28日宣佈第一次獨立。1939年8月23日，納粹德國與俄國簽署密約，劃分波羅的海地區的勢力範圍，愛沙尼亞於1941年 6月14日遭併入蘇聯。蘇聯解體後，愛國於1991年8月20日再度宣佈獨立。",
                "parliament" =>
                    "國會為一院制，稱為RIIGIKOGU，共101席，任期4年，全國分12選區以比例代表制由全民普選選出。",
                "cabinet" =>
                    "內閣共有16位閣員，總理為最高行政首長，由總統提名經國會同意任命之，向由國會多數黨領袖擔任。",
                "judiciary" =>
                    "愛國司法制度屬歐陸法系，三級法院分別為地方法院、巡迴法院及最高法院，另設有法務總長公署專責憲政複核及監察事務。",
                "headman" => "總統Alar Karis，2021年10月11日就任。",
                "fa_minister" => "Urmas Reinsalu，2022年7月18日就任。",
                "major_political_parties" =>
                    "改革黨、中央黨、保守人民黨、社會民主黨、自由黨。",
                "financial_incoming" => "2021年歲入131億美元、歲出113億美元",
                "export_value" => "180億歐元(2021)",
                "import_value" => "183 億歐元(2021)",
                "export_item" =>
                    "機械及電子設備、食品、礦物燃料、木材、金屬及家具",
                "import_item" =>
                    "機械及電子設備、礦物燃料、食品、車輛及化學產品",
                "main_export_countries" =>
                    "瑞典、芬蘭、俄羅斯、立陶宛、德國、拉脫維亞、挪威",
                "main_import_countries" =>
                    "芬蘭、立陶宛、瑞典、德國、俄羅斯、拉脫維亞、波蘭、荷蘭、中國大陸",
                "export_to" => "0.877 億美元(2021)",
                "import_from" => "0.394 億美元(2021)",
                "foreign_relationship" =>
                    "加強與美國、歐盟會員國及北約盟國關係，並繼續推動波海三國合作。",
                "foreign_policy" =>
                    "愛沙尼亞以歐盟和北約為其主要經濟及安全支柱，重視與波羅的海及北歐國家的傳統友誼，致力推動和加強區域合作，並重視與美國關係。愛國支持歐盟針對歐債危機所提出之相關措施、支持歐盟建構單一市場，以及持續實施貿易自由化政策。因其特殊歷史因素，愛國長期以來對俄羅斯疑慮較深，原本就已長期存在邊界及境內俄裔無國籍人士等問題，2014年俄國入侵烏克蘭事件後，雙方關係更為緊張，北約更以維護會員國邊界安全為由，自2017年起在愛國駐軍，引起俄羅斯強烈不滿。但愛國同時注重與俄國在經貿、旅遊、文化和教育等領域的實質性合作，使得愛俄關係出現好轉跡象，惟短期內歐盟對俄經濟制裁取消前，仍難以全面恢復。而在近年來歐債和烏克蘭問題造成的經濟衝擊之下，愛沙尼亞開始尋求擴大與世界其他地區的經貿往來，逐步強化與亞洲國家及新興市場國家之關係。",
                "time_range" =>
                    "較台灣慢6小時(3月底至10月底日光節約時間較台灣慢5小時)",
                "resident" =>
                    "無(由駐拉脫維亞代表處兼轄，地址: Taipei Mission in the Republic of Latvia, Ausekla iela 14-2, Riga LV-1010, Latvia 電話:002-371-6732-1166 傳真: 002-371-6783-0135  緊急聯絡電話:002-371-2910-6954）",
                "national_flag" =>
                    "愛沙尼亞國旗為一面三色旗，具有水平分布的三條等寬的色條：自上至下依序為藍色，黑色，白色。",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            83 => [
                "name" => "愛爾蘭共和國",
                "name_in_en" => "Republic of Ireland",
                "short_name" => "愛爾蘭",
                "short_name_in_en" => "Ireland",
                "capital" => "都柏林",
                "capital_in_en" => "Dublin",
                "national_day" => "3月17日",
                "join_un_day" => "1955年 12月 14日",
                "area_size" => "70,282平方公里",
                "geographic" =>
                    "愛爾蘭共和國位在西歐邊緣之愛爾蘭島南部，面積約70,282平方公里，東隔愛爾蘭海與英國遙望，西臨大西洋，東部海岸平坦，西部海岸則多海灣，境內主要有丘陵地形及平坦原野。森林及湖泊遍佈，最高峰僅1,004公尺。另夏隆河（Shannon river）全長370公里，為全島最長河流。冬季大雨容易氾濫，影響農牧。",
                "religion" =>
                    "愛爾蘭為天主教國家， 83％人口為天主教徒，其他主要為基督教徒，教堂係重要社交場合之一，天主教對政治、社會及民俗習慣等仍具影響力 。",
                "bilaterial_relations" => null,
                "main_bounds" => "歐元",
                "exchange_rate" =>
                    "1、愛爾蘭屬歐元區，在都市地區有簡易之外幣交換中心（Foreign Exchange Center）可兌換歐元，或兌現旅行支（須收取2-3%之手續費），銀行一般普遍不提供外來旅客開戶或兌現旅行支票之服務。2、依據2023年3月31日兆豐銀行即期賣出匯率，1歐元約等於33.28臺幣。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/d521dd8b-eeba-4261-8f2f-32a4cae92954.GIF",
                "is_diplomatic" => 0,
                "language" =>
                    "官方語言為愛爾蘭語及英語，但因英國統治愛爾蘭 800 年，英語成為主要日常用語，愛爾蘭語雖為官方語言，除西部部分地區及政府特別規劃之愛爾蘭語區（Gaeltacht Areas）外，使用不廣，惟政府近年來不斷鼓勵學習愛爾蘭語，學校亦重視愛爾蘭語教學；另官方文件及交通指示牌均係英、愛文併列。",
                "main_media" =>
                    "The Irish Times（愛爾蘭時報）、The Irish Independent（愛爾蘭獨立報）、The Irish Examiner（愛爾蘭檢查者報）、The Journal（愛爾蘭日報）及RTÉ（愛爾蘭國家廣播電視臺），網媒部分則有GRIPT（革立特）等。另有英國大報如：The Sunday Times（週日泰晤士報愛爾蘭版）、Financial Times（金融時報）、The Guardian（衛報）、The Telegraph（每日電訊報 ）等。",
                "population" =>
                    "愛爾蘭共和國人口約490 萬餘人，大多集中於大城市，首都都柏林（Dublin）及外圍衛星鄉鎮人口約 150 餘萬人。散居世界愛裔人士眾多，美國佔4千萬人，名人有拜登、歐巴馬、雷根、甘迺迪、柯林頓等美國總統。澳大利亞約9%具愛爾蘭裔，另旅居阿根廷之愛裔亦達 70 萬人。另境內少數民族來自東歐、亞洲、非洲等地，其中佔最大多數為波蘭移民達12萬人。",
                "voltage" =>
                    "愛爾蘭電壓為 220 伏特，與國內規格不同，國內攜來電器用品，常因轉換插頭或變壓器插孔不符而不能使用，國人赴愛前可先購買轉換插頭方便使用",
                "time_difference" => "-8:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/c233e535-a5c8-427b-9375-e6a1b8574fe5.jpg",
                "political_system" => "內閣制",
                "history_intro" =>
                    "愛爾蘭人為蓋爾人（Gaelic people），中世紀時在愛爾蘭島建國。至12世紀，全愛爾蘭島遭英國併吞，但愛爾蘭人仍保留天主教信仰及其獨特語言，並不斷爭取獨立，經多次反抗英國統治的慘烈戰爭，致使英國於1921年與愛方簽訂條約，承認愛爾蘭島南部26郡成立愛爾蘭自由邦（The Irish Free State），英國保留現愛爾蘭島北部6郡。愛爾蘭國會於1922年1月7日批准愛英條約，是年制定憲法，惟自由邦甫成立即因對英條約之意見不合而陷入內戰，傷亡無數。至1923年5月雙方握手言和，1937年愛爾蘭憲法改制為共和國體制，確立三權分立、總統民選及國會兩院制度。愛爾蘭與英國於1998年4月間簽署「耶穌受難日協議」（Good Friday Agreement），是北愛爾蘭國家發展及和平進程一個重要里程；嗣於1998年5月經由北愛爾蘭及愛爾蘭共和國選民公民投票確認，愛爾蘭乃放棄對北愛爾蘭6郡之憲法主張。",
                "parliament" =>
                    "愛爾蘭國會（Oireachtas）為兩院制，分為愛爾蘭參議院（Seanad Éireann）和愛爾蘭眾議院（Dáil Éireann）。參議院實權相對較小，由60名議員組成，其中11名由總理提名，3名由愛爾蘭國立大學畢業生選出，3名由都柏林大學畢業生選出，43名從五個特殊職業領域（文化、農漁、勞工、工商、社會）選出。眾議院實權較大，由160名議員組成，每個選區選出三到五名代表，選舉按比例代表制用單一可轉換票（Single Transferable Vote）系統進行。按照愛爾蘭憲法（Bunreacht na hÉireann），議會選舉至少每7年舉行一次，具體間隔通過立法決定。現今議會選舉間隔為5年一次。",
                "cabinet" =>
                    "愛爾蘭政府實際掌握政權者為內閣總理（Taoiseach），依照憲法規定，總理係由國會在大選之後經過全體眾議員表決投票選出，實際上多由國會大選中獲得最多席次之政黨黨魁出任，惟倘選票分配過於平均，亦曾發生數個少數黨組成聯合政府，獲得最多席次之大黨反成為反對黨之前例。內閣部長由總理任命並經國會通過，憲法規定政府最多設立15個部會，另為應實際需要，愛爾蘭政府依據職權並視國家發展需要而設立由政府全額補助之獨立行政機構，例如愛爾蘭投資發展局（IDA Ireland）、愛爾蘭企業署（Enterprise Ireland, EI）等。",
                "judiciary" =>
                    "法院分三級制，即地方法院（巡迴法院）、高等法院及最高法院；最高法院法官由總理提請總統任命。",
                "headman" =>
                    "總統（President）：Michael D. Higgins （每七年一任，於2018年11月11日第二任就職）※備註：愛爾蘭行政首長為「總理」（Taoiseach），現由Leo Varadkar擔任（2022年12月17日就任）。",
                "fa_minister" => "Micheál Martin（共和黨黨魁，兼任副總理）。",
                "major_political_parties" =>
                    "包括統一黨（Fine Gael， 簡稱FG）、共和黨（Fianna Fáil，簡稱FF）、勞工黨（Labor Party）及新芬黨（Sinn Féin）等。",
                "financial_incoming" =>
                    "2021年歲入970億歐元；歲出1,051億歐元，赤字81億歐元，較2020年赤字191億歐元改善，主因係稅收增加（資料出處：愛國中央統計局CSO）",
                "export_value" =>
                    "2021年貨品出口總值約1,652.13億歐元（資料出處：愛國中央統計局CSO）",
                "import_value" =>
                    "2021年貨品進口總值1,025.72億歐元（資料出處：愛國中央統計局CSO）",
                "export_item" =>
                    "包括有機化學品、辦公室機器與自動資料處理機、醫藥產品、光學設備、電動機器、家電產品及零件、其他製造品、香精油、香水原料及衛浴清潔用品、專業科學與控制設備、化學原料及製品、肉類及調理製品、其他食品及調理製品。",
                "import_item" =>
                    "包括辦公室機器與自動資料處理機、電動機器、家電產品及零件、其他製造品、各類汽車、醫藥產品、有機化學品、其他未列明產品、石油及石油製品及相關原料、電信與音響設備、衣服及配件產品。",
                "main_export_countries" =>
                    "依2023年3月愛國中央統計局（CSO）資料顯示，主要出口國依序為美國、比利時、德國、英國、中國、荷蘭、法國、義大利、瑞士、日本。",
                "main_import_countries" =>
                    "依2023年3月愛國中央統計局（CSO）資料顯示，主要進口國為英國、美國、法國、德國、中國、瑞士、荷蘭、北愛爾蘭、比利時、義大利。",
                "export_to" =>
                    "我國2022年出口至愛國數額約8.07億美元（資料來源：中華民國經濟部國際貿易局）",
                "import_from" =>
                    "我國2022年自愛國進口數額約8.27億美元（資料來源：中華民國經濟部國際貿易局）",
                "foreign_relationship" =>
                    "愛爾蘭於1939年成為中立國，在國際事務上採多邊主義（multilaterism），崇尚民主自由，尊重人權。自1955年加入聯合國後，已三度獲選為安全理事會非常任理事國，2021年至2022年為第四度擔任安全理事會非常任理事國，重視裁軍、核子擴散及人權等議題，為全球反核武擴張條約起草國之一。愛爾蘭自1958年開始積極參與聯合國國際維和行動，迄今超過60年，為聯合國中最積極參與維和行動國家之一。愛國亦透過其愛爾蘭援贈計畫（Irish Aid）長期致力於改善發展中國家教育、醫療及行政管理。愛爾蘭與英國簽訂英愛自由貿易協定（Anglo-Irish Free Trade Agreement in 1965）；此外與74國簽有全面性雙重課稅協定（comprehensive double taxation agreements），其中73國已正式生效。",
                "foreign_policy" =>
                    "愛爾蘭外交政策旨在加強與世界主要國家之政治、經貿與文化關係，並對落後及戰亂地區提供各項經濟與人道援助。愛爾蘭在全球設置約80個駐外使領館，為因應外交新情勢，時任與現任總理Leo Varadkar於2017年宣布將於2025年前擴增一倍。愛爾蘭對外工作重點傳統為歐盟與美國，近年來則積極推動亞洲策略，與日本、中國大陸、印度及東協國家關係益趨密切友好。我國與愛國自2010年9月起可互換駕照；2013年起實施臺愛度假打工計畫。",
                "time_range" =>
                    "3月底至10月下旬春夏季日光節約時間與臺灣相差 7 小時，晝長夜短；6 月 21日為最長的一日，約早晨 4 時日出，晚間11時日落；10月下旬至次年3月底秋冬季時間與臺灣相差 8 小時，晝短夜長；12 月 22 日為最短日，約早晨 9 時日出，下午 4 時日落。",
                "resident" =>
                    "駐愛爾蘭代表處(Taipei Representative Office in Ireland)",
                "national_flag" =>
                    "愛爾蘭國旗，亦稱愛爾蘭三色旗，在1919年愛爾蘭獨立戰爭期間即被愛爾蘭第一共和採用，此後愛爾蘭自由邦（1922-1937）亦沿用之，1937年被賦予憲法地位。",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            84 => [
                "name" => "拉脫維亞共和國",
                "name_in_en" => "Republic of Latvia",
                "short_name" => "拉脫維亞",
                "short_name_in_en" => "Latvia",
                "capital" => "里加",
                "capital_in_en" => "Riga",
                "national_day" => "11月 18日(獨立日)",
                "join_un_day" => "1991年09月17日",
                "area_size" => "64,589平方公里",
                "geographic" =>
                    "濱臨波羅的海，北緯55.40—58.05，東經20.58—28.14間。北鄰愛沙尼亞，南接立陶宛，東鄰俄羅斯，東南與白俄羅斯接壤。",
                "religion" => "天主教、東正教、基督教路德教派。",
                "bilaterial_relations" => "{{--br /--}}",
                "main_bounds" => "歐元",
                "exchange_rate" =>
                    "目前歐元與台幣匯率約為33台幣兌換1歐元「詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢」",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/71b22ebb-e508-49f5-b8aa-ed8de6c141ad.GIF",
                "is_diplomatic" => 0,
                "language" => "拉脫維亞語 (俄語係另一通用語言，英語逐漸普及)",
                "main_media" =>
                    "LSM(拉脫維亞公共廣播公司電子報)、Delfi.lv電子報、Diena(日報)、Neatkariga(獨立報)、Latvijas Avize(拉脫維亞報)、Latvian National News Agency (LETA，拉脫維亞國家新聞社－有英文版)，LTV 1、LTV 7(拉國國家電視台)，Radio Latvia等。",
                "population" => "約190萬人。",
                "voltage" => "220 Volts AC, 50Hz, 插頭為歐洲雙圓柱型插頭。",
                "time_difference" => "-6:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/92478405-796f-44aa-a28a-695ac1955b7d.jpg",
                "political_system" => "國體：共和國體政體：議會內閣制",
                "history_intro" =>
                    "1583-1710年先後遭瑞典，波蘭-立陶宛大公國瓜分。17世紀初形成拉脫維亞民族。1710-1795年遭俄沙皇佔領。1795-1918年拉國東部及西部分別遭俄羅斯及德國割據。1918年11月18日宣布獨立。1939年8月23日蘇德簽訂互不侵犯條約，拉國劃入蘇聯勢力範圍。1940年6月17日蘇聯軍隊佔領拉國。1941年7月納粹德國入侵並佔領拉國，納粹德國佔領至1944年。1944拉國重新併入蘇聯至1990年。1990年5月4日拉國通過獨立宣言，並更名為拉脫維亞共和國。1991年8月21日拉國最高委員會頒布憲法，拉國重獲獨立。1991年9月17日加入聯合國。",
                "parliament" =>
                    "為最高立法機關，採一院制，共計100個議席，議員依政黨得票比例產生，任期4年；政黨需獲得5%以上的選票方能取得分配議席的資格。本(14)屆國會大選係於2022年10月1日舉行， 11月1日正式成立。國會議長為Edvards Smiltens（聯合黨團），國會主席團除議長外，另有Zanda Kalnina-Lukasevica(新聯合黨)及Janis Grasbergs(民族聯盟黨)兩位副議長、秘書長Armands Krauze(農綠黨)及副秘書長Antonina Nenaseva(進步黨)。國會中各政黨席次分別為：新聯合黨(New Unity)26席、農綠黨聯盟(Greens and Farmers Union)16席、聯合黨團(United List)15席、民族聯盟黨(National Alliance)13席、穩定黨(Stability!)11席、進步黨(Progressives)10席、拉脫維亞優先黨(Latvia in First Place)9席。國會共設有外交事務、預算暨財政、法務、人權暨公共事務、教育文化暨科學、國防內政暨防貪、公共行政暨地方政府、經濟農業環境暨區域政策、社會暨就業事務、授權倫理暨適法性、國會調查、公共支出暨審計、國家安全、公民移民暨社會融合、歐洲事務、永續發展等16個委員會。",
                "cabinet" =>
                    "總理為最高行政首長，由總統提名，經國會同意後任命，並向國會負責，現任總理卡克里(Krisjanis Karins)於2019年1月23日上任，14屆國會大選後K總理所屬政黨新聯合黨(New Unity)取得26(最多)席次，銜命組閣，並增設氣候暨能源部，內閣於12月14日正式就任。內閣成員名單如下：    1. 總理Krisjanis Karins (新聯合黨)    2. 國防部長Inara Murniece (民族聯盟黨)    3. 外交部長Edgars Rinkevics (新聯合黨)    4. 經濟部長Ilze Indriksone (民族聯盟黨)    5. 財政部長Arvils Aseradens (新聯合黨)    6. 內政部長Maris Kucinskis (聯合黨團)    7. 教育暨科學部長Anda Caksa (新聯合黨)    8. 氣候暨能源部長Raimonds Cudars (新聯合黨)    9. 文化部長Nauris Puntulis (民族聯盟黨)    10. 福利部長Evika Silina (新聯合黨)    11. 運輸部長Janis Vitenbergs (民族聯盟黨)    12. 法務部長Inese Libina-Egnere (新聯合黨)    13. 衛生部長Liga Mengelsone (聯合黨團)    14. 環保暨區域發展部長Maris Sprindzuks (聯合黨團)    15. 農業部長Didzis Smits (聯合黨團)",
                "judiciary" =>
                    "拉國屬大陸法系國家，法院共分三級，另設憲法法院解釋憲法及法律。",
                "headman" =>
                    "總統：任期4年，由各政黨提名屬意候選人，獲得國會議員半數以上支持者當選，為間接選舉產生的虛位元首。現任總統為雷艾格(Egils Levits)，2019年5月29日當選，7月8日就職，預定2023年7月7日卸任。",
                "fa_minister" =>
                    "林艾德(Edgars Rinkevics)，於2011年10月25日上任，2022年12月14日續任。",
                "major_political_parties" =>
                    "取得拉國第14屆國會席次的7個政黨: 新聯合黨、農綠黨聯盟、聯合黨團、民族聯盟黨、穩定黨、拉脫維亞優先黨、進步黨。",
                "financial_incoming" => "2022年歲入107億歐元，歲出124億歐元",
                "export_value" => "165 億歐元(2021)",
                "import_value" => "194 億歐元(2021)",
                "export_item" =>
                    "木材及木材製品、電子及機械設備、礦產、鋼鐵、穀物、家具、藥品、車輛等。",
                "import_item" => "機械設備、化學製品、燃料及交通機具設備等。",
                "main_export_countries" =>
                    "立陶宛、英國、愛沙尼亞、德國及俄羅斯。",
                "main_import_countries" =>
                    "立陶宛、德國、波蘭、俄羅斯、愛沙尼亞。",
                "export_to" => "0.88億美元(2021)",
                "import_from" => "0.12 億美元(2021)",
                "foreign_relationship" =>
                    "加強與美國、歐盟會員國及北約盟國關係，繼續推動波海三國及北歐國家的合作。",
                "foreign_policy" =>
                    "(一)拉國對外關係沿革：拉國於1991年8月21日重獲獨立，同年9月17日加入聯合國，繼加入WHO、WTO、歐洲理事會、歐洲安全合作組織、波羅的海理事會等國際組織。2004年3月29日加入北大西洋公約組織(NATO)，並於同年5月1日加入歐盟（EU），成為歐盟體系會員國之一。繼於2007年12月21日成為申根公約國，在地理位置上成為歐盟東緣緊鄰俄國的最前哨。2014年1月1日加入歐元區。2015年上半年擔任歐盟輪值主席國，與歐盟關係更形緊密。(二)當前拉國外交政策主軸：1. 外長Edgars Rinkevics稱拉國為國際間負責任成員，推動務實及具原則的外交政策，以追求國家安全、獨立及促進繁榮；重視植基於國際法的世界秩序，並與西方盟友及理念相近夥伴建立密切合作關係。2. 美國、加拿大及歐盟為拉國重要外交及安全夥伴，亦積極強化與中亞各國關係；持續聲援烏克蘭、反對白俄羅斯Lukashenko政權，並與北約合作威懾及防範俄羅斯安全威脅。3. 對中國關係部分，拉國與愛沙尼亞於2022年8月同時退出中國-中東歐國家「16+1」機制，並稱將與歐盟共同政策密切接軌，支持透過「27+1」機制作為與中國交往之平台。4. 拉國將續為2025年競選2026-2027安理會非常任理事國席位加強國際聯繫及遊說。(三)來自俄國的國安威脅：俄國於2014年佔領克里米亞，繼與白俄羅斯在毗鄰拉國邊境地區舉行多次大規模聯合軍演，且拉國經常面臨俄羅斯軍機及軍艦越境挑釁，北約雖漸次加強在拉國部署軍力，惟在俄國2022年2月24日入侵烏克蘭後，拉國倍感威脅，除對俄方採取多項制裁外，並積極提供武器協助烏國抗俄；另透過雙邊及多邊管道爭取歐盟及北約盟邦援助烏克蘭及孤立俄羅斯，並要求北約強化包括拉國在內等歐洲東緣國家兵力及軍備部署，尤其倡議北約在拉國建立永久駐軍，以有效嚇阻俄國。",
                "time_range" =>
                    "較台灣慢6小時(3月底至10月底日光節約時間較台灣慢5小時)",
                "resident" => "駐拉脫維亞代表處",
                "national_flag" =>
                    "拉脫維亞國旗是一面由紅、白、紅三道橫條組成的旗幟。自1918年首次獨立時獲採用為國旗，迄至1940年遭蘇聯佔領後廢止。1990年2月27日獲重新採用為國旗。",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            85 => [
                "name" => "挪威王國",
                "name_in_en" => "Kingdom of Norway",
                "short_name" => "挪威",
                "short_name_in_en" => "Norway",
                "capital" => "奧斯陸(Oslo)",
                "capital_in_en" => "Oslo",
                "national_day" => "5月17日",
                "join_un_day" => "1945年6月26日",
                "area_size" => "384,802平方公里",
                "geographic" =>
                    "挪威位於北歐斯堪地那維亞半島西半部，東接瑞典，西臨北大西洋，北部進入北極圈，其東北端與芬蘭及俄國接壤。地形狹長，國土南北長達2千2百公里﹔丘陵、湖泊及峽灣交錯，平原較少，陸地面積為323,802平方公里。由於挪威扼制北大西洋與北極海之交通，戰略位置重要﹔復以境內有深水不凍港可供巨型船艦停泊，故頗受北約國家重視。",
                "religion" => "基督教國家教會成員佔80.7%",
                "bilaterial_relations" => "{{--br /--}}",
                "main_bounds" => "挪威克朗（Norweigain Kroner, NOK）",
                "exchange_rate" =>
                    "1美元折合約8.9挪威克朗(2022年2月匯率)詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/b5e2eed3-089f-4e34-8a29-30a10430c269.GIF",
                "is_diplomatic" => 0,
                "language" =>
                    "挪威語（Norwegian：Bokmål語及Nynorsk語，Sami語在部分地區亦是官方語言)",
                "main_media" => "Aftenposten, VG, NRK, Dagsavisen",
                "population" => "547萬5,240人(2022年11月)",
                "voltage" => "220- 240伏特，嵌入式插座。",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/082e4de9-8b2a-4226-9a9d-536a2a184791.jpg",
                "political_system" =>
                    "君主立憲國會內閣制、三權(行政 立法 司法)分立。",
                "history_intro" =>
                    "挪威在9世紀之前，因為地方割據，沒有統一的王國。900年哈洛德(Harald Fairhair)統一挪威。1015-1028年 烏勒夫二世(Olaf II)在位時天主教傳入挪威。1274年至1276年Magnus IV頒行法律。1397年 挪威以丹麥為首與瑞典共組聯合王國（卡瑪聯盟, Kalmar Union），至1521年止。1814年 十九世紀初拿破崙戰爭時，丹麥與法國同盟，不幸戰敗，瑞典迫丹麥割讓挪威（基爾條約, Treaty of Kiel），為挪威所拒，同年5月17日挪威召開國民議會頒佈憲法，推舉丹麥王子為挪威國王。旋與瑞典戰爭失利，改奉瑞典國王為首之君主立憲新政。1866年至1873年及1900至1910年挪威兩度發生海外移民潮，主要移往美國。1905年 挪威與瑞典之聯合解體，丹麥王子 Carl被推舉為國王，是為哈康七世(Haakon VII)。 第一次世界大戰挪威保持中立。1940年4月9日納粹德國入侵挪威，挪王赴英並組成流亡政府。1945年5月8日納粹德國投降，國王同年秋返挪。",
                "parliament" =>
                    "國會(Storting)由選自19個郡(counties)之議員共169席，由人民直選產生，任期4年。為提升議事效率，挪威國會自2009年10月後改為一院制，並由國會議員互選出議長及五位副議長。2021年後大選後由勞工黨及中央左派政黨執政，本屆國會席次為勞工黨48席、保守黨36席、進步黨21席、社會左翼黨13席、中央黨28席、基督教民主黨3席、自由黨8席、綠黨3席、紅黨8席、其他籍1席。",
                "cabinet" =>
                    "挪威為一君主立憲國，國王哈洛德五世(Harald V)於1991年1月17日繼承王位。國王無政治實權，僅係挪威的國家象徵。政權採行政、立法及司法三權分立制。國王之行政權經由國務委員會(Council of State)行使，該國務委員會成員包括國王、總理及內閣部會首長。國務委員會需將預算案及法案提交國會審查。總理及部會首長之任命均經由國會同意。",
                "judiciary" => "設有各級法院，最高法院法官由國王任命",
                "headman" =>
                    "國王哈洛德五世（Harald V），政府最高首長為總理（Prime Minister）：斯特勒(Jonas Gahr Støre/勞工黨, 2021年10月14日就任）",
                "fa_minister" => "Anniken Huitfeldt",
                "major_political_parties" =>
                    "工黨、保守黨、中央黨、基民黨、社會左翼政黨、進步黨及自由黨",
                "financial_incoming" =>
                    "歲入2,263億美元；歲出2,042億美元(2020年)",
                "export_value" => "1398.17億美元（2021.11）",
                "import_value" => "899.92億美元（2021.11）",
                "export_item" =>
                    "原油、天然氣、生鮮或冷藏魚、非原油之油類、鋁原料、液態炳烷丁烷、鎳原料、測量儀器、含氮基化合物、鋼粒或鋼粉等",
                "import_item" =>
                    "客用車輛、有線電話電報器具、非原油之油品、鑌鎳及氧化鎳燒結合物、船舶、傢俱及零件、醫藥製劑 (包括獸醫藥品)、資料自動處理器、原油、載貨用機動車輛、鋼鐵製無縫瓦斯管、電機設備等",
                "main_export_countries" =>
                    "英國、德國、荷蘭、瑞典、中國（2021年）",
                "main_import_countries" =>
                    "中國、德國、瑞典、美國、英國（2021年）",
                "export_to" => "2021年我出口至挪威貿易額為2億2,329萬美元",
                "import_from" => "2021年我自挪威進口4億9,654萬美元",
                "foreign_relationship" =>
                    "一、 挪威重視人權，接受多國難民，但亦產生國內政治紛擾。挪威多年來均致力於斯里蘭卡、中東、阿富汗、哥倫比亞、蘇丹、尼泊爾及菲律賓等國家之和平談判與維和工作。挪威亦努力與部分亞、非開發中國家發展有好關係並提供人道及發展援助，近年對外援助金額均達GDP之1%，為全世界最高國家，2013年挪威對外發展援助總額高達55.81億美元，較2012年增加17%，其中以巴西為最大受援國(保護熱帶雨林專案)，阿富汗及巴勒斯坦次之。提高國家競爭力亦為挪威對外關係重點工作，依據世界經濟論壇(WEB)所做之2013-2014全球競爭力評比報告(The Global Competitiveness Report 2013-2014)，挪威競爭力排名為第11名。挪威之優勢在於司法獨立、預算充裕、教育普遍、通訊發達及企業自主；弱點在於超高稅率、農業補貼等耗損相當預算及勞工薪資過高，其權益過度受保障，雇主難為等，故其競爭力落後於北歐其他國家。二、在與歐盟關係部分，挪威已於1972年和1994年兩度拒絕加入歐盟，反對者主要基於不願流失主權及原油支配權之考量，以及農業保護政策等因素；贊成者則希望挪威能更有效影響歐盟之決策。根據2013年1月最新民調顯示，有70.8%的挪威民眾反對加入歐盟，贊成者僅18.7%，對照1994年挪威針對加入歐盟所進行之公投結果-反對者52.2%，贊成者47.8%，顯示挪威民眾對於加入歐盟之支持度已大幅降低，此或與其不願受到歐盟各國財政問題之拖累而影響其國家經濟之穩定成長高度相關。挪威執政之勞工黨及目前最大反對黨保守黨為推動加入歐盟之主要力量，反對最力者為中央黨及社會左翼政黨。挪威雖非歐盟成員，惟仍透過歐洲經濟區(EEA)協定，採行與歐盟一致之市場機制，同時亦為申根區之一員，與歐盟各國密切交流互動。此外，挪威除金援歐盟外，亦提供資源和軍隊予歐盟和平部隊。三、與中國大陸關係部分，挪威屬首先承認中共之國家之一，雙邊關係長期友好，挪威2020年自中國進口貿易額約為98億美元，對中國出口貿易額約為64億美元。中國大陸為挪威航運服務業重要市場，雙邊經貿合作至為頻繁密切。惟自2010年挪威諾貝爾委員會頒贈諾貝爾和平獎予中國大陸民運人士劉曉波之後，挪「中」關係即陷入僵局，雙方政治對話中斷，「中」方亦片面取消與挪威之各項官方交流活動。挪威政府雖一再強調諾貝爾委員會之獨立性及挪威政府無權干預其決定，惟「中」方仍堅持挪威政府須為此致歉。2016年12月19日挪威外交部長Børge Brende訪問中國大陸，雙方宣布全面關係正常化並發表聯合聲明，挪方雖未向中方道歉，然重申「一個中國」政策。中國外長王毅曾於2020年8月27日至28日訪問挪威。",
                "foreign_policy" =>
                    "挪威自認其為一小國，端賴與他國維持開放與穩定之關係以維繫其生存與發展。其目前參加之重要國際組織高達134個，亦透過歐洲自由貿易協會暨經濟區域 European Free Trade Association (EFTA)及 the European Economic Area (EEA)發展與歐盟國家之經貿關係。挪威強調透過國際組織強化其安全，並爭取其國家利益，故特別重視與北約 (NATO) 之關係。挪威具有熱衷參與國際事務之優良傳統，曾主持若干重要國際組織，包括歐洲安全暨合作組織(OSCE)，歐洲北極巴倫支海委員會Barents Euro-Arctic Council (1999)，波羅的海國家委員會Council of Baltic Sea States (CBSS) 等。挪威於2021至2022年任聯合國安全理事會非常任理事國，目前於北歐委員會Nordic Council、北歐部長級會議 Nordic Council of Ministers暨北極委員會Arctic Council均相當活躍。 基本上，挪威維持外交政策一致性，不論何黨執政，外交政策不致發生重大改變。",
                "time_range" =>
                    "自3月底至10月底止（夏令日光節約時間）較國內慢6小時，其他時段則較國內時間慢7小時。",
                "resident" => null,
                "national_flag" =>
                    "挪威國旗由靛藍色十字架加上白色邊和周圍的紅色組成。在白色十字中加入藍色十字，於是誕生了三種顏色的國旗。其中紅白藍三色象徵自由與獨立。北歐五國挪威、丹麥、瑞典、芬蘭及冰島因奉行基督教，爰各國國旗均有十字圖像。",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            86 => [
                "name" => "捷克共和國",
                "name_in_en" => "Czech Republic",
                "short_name" => "捷克",
                "short_name_in_en" => "Czechia",
                "capital" => "布拉格",
                "capital_in_en" => "Prague",
                "national_day" => "10月28日",
                "join_un_day" => "1993年01月19日",
                "area_size" => "78,866平方公里",
                "geographic" =>
                    "捷克地處歐洲中部，北與波蘭為鄰，東與斯洛伐克交界，南與奧地利相連，西與德國接壤。",
                "religion" =>
                    "多數人無宗教信仰，20%有信仰的人口中，以信仰天主教及基督教為主。",
                "bilaterial_relations" => "{{--br /--}}",
                "main_bounds" =>
                    "通用貨幣名稱為捷克克朗(Czech Crown,簡稱CZK或KC)。",
                "exchange_rate" =>
                    "1美元約折合22.01克朗(2023年2月)詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/49e2b995-f428-493c-9475-1a86c5f7ec93.GIF",
                "is_diplomatic" => 0,
                "language" =>
                    "官方語言為捷克語，英語、德語及俄語為較常用之外國語言。",
                "main_media" =>
                    "主要電視台包括TV Nova, CT1, CT2, CT24, CTsport, CNNPrima等。主要報紙包括今日日報(MF DNES)、權利報(Pravo)、經濟日報(Hospodarske Noviny)、民眾日報(Lidove Noviny)及每日日報(Denik)等。",
                "population" => "1,075萬人(2022)",
                "voltage" =>
                    "220伏特，5O HZ，插頭為歐洲雙圓柱型附一內凹圓孔地線插頭。",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/6b85ec14-a4a1-4d2e-b0f4-0704a6adc15f.jpg",
                "political_system" =>
                    "1.捷克共和國實行議會民主或責任內閣制，行政權屬於內閣，立法權屬於國會，司法權屬於各級法院。總統為國家虛位元首，自2013年起首次由人民直接投票選舉產生，任期5年，得連選連任一次。2.內閣(部長會議)為最高行政機關，依慣例由總統於眾議院選舉後提名最大黨黨魁組閣執政。3.國會由參眾兩院組成，參議院共81席，參議員任期6年，每兩年改選三分之一席次，採單一選區制，全國分81個選區以絕對多數選出一名參議員。眾議院共200席，為政治權力核心，眾議員任期4年，採政黨比例代表制產生，全國分14個選區，獲5%以上選票之政黨按得票比率分配席次。",
                "history_intro" =>
                    "1918年第一次世界大戰結束奧匈帝國瓦解後，捷克與斯洛伐克聯合成立捷克斯洛伐克共和國，並選出Tomas Masaryk為開國第一任總統，捷克經濟及文化蓬勃發展，惟政治上不同族群意見無法調和，日耳曼族群與斯拉夫族群間隙漸深， 1938年德國入侵，至1945年第二次世界大戰結束捷克才重獲自由；惟共產黨於1948年奪權專政，捷克又被關入鐵幕之中；1968年共產黨總書記Alexander Dubcek嘗試進行人性化社會主義改革(布拉格之春)，遭蘇聯為首的華沙公約5國部隊入侵干涉，蘇聯軍隊從此留守鎮壓，直到1989年絲絨革命後，捷克以和平方式改革成為議會民主制度，Vaclav Havel獲選為第一任總統。1992年捷克與斯洛伐克經協商後和平分裂，並自1993年1月1日各自獨立為主權國家，嗣同時成為聯合國會員國。捷克共和國於 2004 年 5 月 1 日加入歐盟，並於2007年12月21日加入申根公約。",
                "parliament" =>
                    "國會由參眾兩院組成，參議院共81席，參議員任期6年，每兩年改選三分之一席次，採單一選區制，全國分81個選區以絕對多數選出一名參議員。眾議院共200席，為政治權力核心，眾議員任期4年，採政黨比例制產生，全國分14個選區，獲5%以上選票之政黨按得票比率分配席次。",
                "cabinet" =>
                    "內閣(部長會議)為最高行政機關，依慣例由總統於眾議院選舉後提名最大黨黨魁組閣執政。",
                "judiciary" =>
                    "捷克法院分四級，分別為地區法院(86所)、省級法院(8所)、高等法院(2所，一在首都布拉格，另一在東部Olomouc省)及最高法院(2所，一為受理一般事務，另一受理行政事務)。",
                "headman" =>
                    "捷克國家元首為總統，無實質權力。現任總統澤曼(Milos Zeman)自2013年1月改為人民直選時當選，任期5年，至2018年3月7日止。澤曼總統已於2018年1月27日第二任總統選舉之第二輪投票時獲選連任,嗣於3月8日就職,任期至2023年3月止。捷克2023年總統大選第二輪投票於1月27日至28日舉行，前將軍帕維爾（Petr Pavel）獲得當選，預定於3月9日就職。",
                "fa_minister" => "現任外交部長為海盗黨的Jan Lipavsky。",
                "major_political_parties" =>
                    "主要政黨包括ANO黨、公民民主黨(ODS)、海盜黨（Pirati）、自由及直接民主黨(SPD)、共產黨(KSČM)、社會民主黨(ČSSD)、基督教民主黨(KDU-ČSL)、TOP 09黨、城市聯盟黨(STAN)、綠黨（SZ）等。",
                "financial_incoming" =>
                    "政府年度總歲入13,856億克朗；總支出18,856億克朗(2021年)，年度預算赤字為5,000億克朗。",
                "export_value" => "出口總額約4.473兆克朗(2022)",
                "import_value" => "進口總額約4.672兆克朗(2022)",
                "export_item" =>
                    "汽車、電子器械、電器設備、鋼鐵器具、塑膠物品、家具用品、橡膠製品、玩具遊戲用品、光學、醫療用品等。",
                "import_item" =>
                    "電子設備、機械、車輛、塑膠製品、液體燃料油、日常食品等。",
                "main_export_countries" => "德國、波蘭、斯洛伐克、法國、英國。",
                "main_import_countries" =>
                    "德國、中國大陸、波蘭、斯洛伐克、俄羅斯。",
                "export_to" =>
                    "電機與設備及其零件、錄音機及聲音重放機、電視影像機之零件及附件、核子反應器、鍋爐、機器之零件及附件、鋼鐵製品、光學、照相、計量與內外科儀器及其器具、塑膠及其製品、玩具、遊戲品與運動用品、填充用材料、不織布、特種紗、繩、索、纜及其製品、家具、寢具及類似充填家具等，輸出總額16.3億美元 (2022全年捷克統計局統計資料)，順差12.91億美元。",
                "import_from" =>
                    "鐵道與機動車輛之零件及附件、光學、精密儀器與器具之零件及附件、電機與設備之零件及附件、核子反應器、鍋爐、機器及機械用具、塑膠及其製品、鋼鐵、皮革製品、玻璃及玻璃器、航空器、太空船及其零件等，輸入總額3.39億美元 (2022年全年捷克統計局統計資料)。",
                "foreign_relationship" =>
                    "2021年12月以ODS為主的新政府成立，重視與歐盟、美國及V4鄰國之關係。",
                "foreign_policy" =>
                    "捷克外交政策主要著重對歐盟關係，尤其強調對同為V4之波、匈、斯洛伐克等國及德、奧之優先關係。因其為NATO成員，故視美國為對外關係之重要夥伴，配合美國在國際之區域維和行動。在兩岸關係方面，近年來由於中國投資承諾落空，在新政府成立後，更多重視與臺灣之實質合作關係。",
                "time_range" =>
                    "夏令時間：自3月最後一個星期日至10月最後一個星期六止，較國內慢6小時。冬令時間：自10月最後一個星期日至翌年3月最後一個星期六止，較國內時間慢7小時。",
                "resident" => "駐捷克代表處",
                "national_flag" =>
                    "捷克由摩拉維亞與波希米亞兩部分組成，其國旗原為上白下紅之雙色旗。1918年10月28日斯洛伐克併入後，成為捷克斯洛伐克（Czechoslovakia），1920年2月20日加上左邊的藍色三角形，成為目前樣式。白色代表摩拉維亞，紅色代表波希米亞，藍色代表斯洛伐克，三角形象徵喀爾巴阡山。藍、白、紅三色正好是斯拉夫色彩，來自俄羅斯國旗。此面國旗使用至1939年3月15日捷克遭德國佔領，1945年4月3日復用此旗，5月4日德國佔領結束。1993年1月1日，捷克與斯洛伐克各自獨立為兩個共和國，斯洛伐克制定新國旗，捷克則繼續使用此面國旗至今。http://www.roc-taiwan.org/uploads/sites/120/2017/05/th_1.jpg",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            87 => [
                "name" => "摩洛哥王國",
                "name_in_en" => "Kingdom of Morocco",
                "short_name" => "摩洛哥",
                "short_name_in_en" => "Morocco",
                "capital" => "拉巴特",
                "capital_in_en" => "Rabat",
                "national_day" => "11月18日",
                "join_un_day" => "1956年11月12日",
                "area_size" => "446,550平方公里",
                "geographic" =>
                    "位處西北非，西臨大西洋，北濱地中海，隔直布羅陀海峽與西班牙相對；正南與西撒哈拉為鄰，東南與阿爾及利亞接壤",
                "religion" => "伊斯蘭教(99%)、其他宗教(包含基督教、猶太教)(1%)",
                "bilaterial_relations" => null,
                "main_bounds" => "Moroccan Dirham(MAD)",
                "exchange_rate" =>
                    "1美元約兌換9.71迪爾汗（2022年3月）。詳細匯率資訊建議至臺灣銀行（https://rate.bot.com.tw/xrt?Lang=zh-TW）或兆豐商銀（https://www.megabank.com.tw/personal/foreign-service/forex）網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/42e4ee24-14f1-41cc-a623-38444dca6419.GIF",
                "is_diplomatic" => 0,
                "language" => "阿拉伯語（官方語文）、法語、柏柏爾語",
                "main_media" =>
                    "報紙：Al-Anbaa(國營日報) Le Matin (半官方日報) Assabah (民營日報) 電視：摩洛哥國家廣播電視台 Radio-Television Marocaine (RTM) 摩洛哥國家電視台 Television Marocaine (TVM) 廣播：摩洛哥國家電視台 Radio-Television Marocaine (RTM)",
                "population" => "3,708萬人（2021年）",
                "voltage" => "220 伏特",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/843efb17-854c-4327-a1d0-f449b7c64098.jpg",
                "political_system" => "君主立憲",
                "history_intro" =>
                    "摩洛哥係文明古國，為非洲與歐洲之間的交通要道，考古發現50萬年以前已有人居住，西元前2世紀至西元5世紀曾受羅馬帝國統治，6世紀被拜占庭帝國占領。7世紀時阿拉伯人來到，8世紀在此建立王國。15世紀西方列強相繼入侵。1859年法國迫使摩國訂立不平等條約，取得摩國部分國土之殖民特權。1894年摩國發生民變，英國介入並在摩國取得30年自由貿易之權利。摩國撤除在丹吉爾（Tanger）所設之要塞，開放直布羅陀海峽。1905年德皇親率艦隊抵丹吉爾，摩國邀德皇會談，雙方同意召開國際會議。1906年法、德、摩國三方會談後通過摩洛哥公約，德國取得在丹吉爾建港權，摩國由國際共管。1911年11月4日法德條約，摩洛哥成為法國保護國。1947年4月，摩國蘇丹穆罕默德五世（Mohammed V）在丹吉爾公開演講表示對法國不滿，法國更換駐摩總督，並進行政治改革。1952年3月14日穆罕默德五世向法國政府正式要求修改保護國規章。1953年8月法國廢黜穆罕默德五世。1955年11月法國被迫同意穆罕默德五世復位。1956年3月法國承認摩洛哥獨立，同年4月7日西班牙亦承認摩洛哥獨立。1957年8月14日正式定國名為摩洛哥王國。",
                "parliament" =>
                    "憲法規定摩國為君主立憲國家，實行兩院制，參議院(Chamber of Advisors)設90-120席，間接選舉產生，任期6年。眾議院（Chamber of Representatives）共325席，由人民直選，任期5年。",
                "cabinet" =>
                    "現任總理Aziz Akhannouch(2021年10月7日)，依據摩國憲法，內閣閣員名單由總理提交國王任命。",
                "judiciary" => "司法權最高委員會(依據2011年憲法設立)",
                "headman" => "穆罕默德六世(國王)	Mohammed VI",
                "fa_minister" => "Nasser Bourita (2017年4月5日)",
                "major_political_parties" =>
                    '獨立黨（Independence Party）、正義發展黨（Justice and Development Party）、憲法聯盟（Constitutional Union）、人民運動（People\'s Movement）、人民力量社會聯盟（Socialist Union of People\'s Forces），摩國最大的伊斯蘭運動黨是正義與慈善黨 al-Adl wal-Ihsane（Justice and Charity）。',
                "financial_incoming" =>
                    "歲入約395.23億美元， 歲出約435.39億美元 (2021年)",
                "export_value" => "494.4億美元 (2021年)",
                "import_value" => "620.1億美元 (2021年)",
                "export_item" =>
                    "服裝和紡織品、電器元件、無機化學品、電晶體、粗礦物、肥料（包括磷酸鹽）、石油製品、柑橘類水果、蔬菜、魚",
                "import_item" =>
                    "原油、紡織品、電信設備、小麥、天然氣和電力、電晶體、塑膠",
                "main_export_countries" => "西班牙、法國、義大利、德國",
                "main_import_countries" =>
                    "西班牙、法國、中國、美國、德國、義大利、土耳其",
                "export_to" => "72,675,424美元(2021年)",
                "import_from" => "75,060,736美元(2021年)",
                "foreign_relationship" =>
                    "1956年11月12日加入聯合國。歐盟是摩國的主要貿易夥伴，摩國正積極遊說加入歐盟。2008年起歐盟給予摩洛哥「優先地位」(Advanced Status)，深化雙方合作。摩洛哥與美國簽署之雙邊自由貿易協定(FTA)自2006年1月1日起生效，是非洲唯一與美國簽署FTA之國家，顯示兩國關係密切。2003年發生於摩國卡薩布蘭加（Casablanca）的恐怖攻擊促使摩國積極投入反恐行動，摩國是美國的「非北約盟國」（non-NATO ally），並支持美國的反恐戰爭。 摩國與西撒哈拉的糾紛：西撒哈拉國際地位未決，歷史上西撒哈拉是大摩洛哥領土的一部分。西撒哈拉自1975年以來，就長期為獨立建國而努力。它的領土有三分之二被摩洛哥占領，於阿爾及利亞設立政府，維持其國際政治的運作。撒拉維阿拉伯民主共和國（SADR）是非洲聯盟（AU）的會員國，並已獲得70多個國家的外交承認，但卻因摩洛哥的反對，而無法成為聯合國的一員。 摩國與西班牙常因兩國漁業重疊海域疆界衝突、偷渡客及西撒哈拉等問題，引發兩國關係緊張。摩國因阿爾及利亞支持西撒哈拉獨立運動而與之反目，雖盼與阿國關係正常化，並主動與阿國展開會談，惟皆因西撒哈拉問題而難有進展。",
                "foreign_policy" =>
                    "奉行不結盟之外交政策、與西歐、美國及海灣產油國保持關係。1963年參與創立非洲國家團結組織(OUA)，1984年11月12日為抗議OUA接受西撒哈拉為會員國，退出該組織，惟於2017年1月重返非洲聯盟。",
                "time_range" => "較台灣慢7小時(齋戒月期間較台灣慢8小時)",
                "resident" =>
                    "我在摩洛哥未設有代表處。相關事務由我駐法國代表處兼管。",
                "national_flag" => "紅色旗幟，中飾有一顆綠色互相交織的星形",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            88 => [
                "name" => "摩爾多瓦共和國",
                "name_in_en" => "Republic of Moldova",
                "short_name" => "摩爾多瓦",
                "short_name_in_en" => "Moldova",
                "capital" => "基希涅夫",
                "capital_in_en" => "Kishinev",
                "national_day" => "8月 27日",
                "join_un_day" => "1992年3月2日",
                "area_size" => "33,800平方公里",
                "geographic" =>
                    "位於前蘇聯西南隅，北、東、南三面臨烏克蘭、西邊則以普魯特(Prut)河與羅馬尼亞為界",
                "religion" => "東正教",
                "bilaterial_relations" => null,
                "main_bounds" => "雷（Moldovan Leu; MDL）",
                "exchange_rate" =>
                    "1美元約兌換18.6MDL (2023年3月)「詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢」",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/61ec5467-7e5e-412b-9176-e7a3648757f4.GIF",
                "is_diplomatic" => 0,
                "language" => "摩爾多瓦語",
                "main_media" =>
                    "近年來網路媒體發達，主要網路媒體有19家之多，包括Moldova-Azi,Politik.md,Modldnews.md等；電視媒體有7家，ProTV Chişinău，EuroT等；通訊社10家，如BASA-press,IPN,Flux,DECA-press等；報社及雜誌社22家，如Timpul,Economiceskoe Obozrenie,ECOnomist,Комсомольская правда,Jurnal de Chisinau等；電台計8家，如Europa Libera,BBC,Radio Plai,Vocea Basarabiei等。",
                "population" => "約401萬人（2022年，不含聶斯特河沿岸地區人口）",
                "voltage" => "220V",
                "time_difference" => "-5:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/876c7443-efa1-4587-b679-ca752f951df5.JPG",
                "political_system" => "共和國",
                "history_intro" =>
                    "摩爾多瓦人原與羅馬尼亞人同文同種，13至14世紀時遭蒙古人和匈牙利人入侵，至1359年建立獨立之公國，1487年後淪為鄂圖曼土耳其帝國附庸，1812年俄羅斯將其領土劃入版圖，1918年宣布獨立，但1940年又被蘇聯併入版圖，成立蘇維埃社會主義共和國，成為蘇聯15個加盟共和國之一，1991年改國名為摩爾多瓦共和國，同年8月27日宣布獨立，12月21日加入獨立國家國協，境內少數民族之分離主義勢力使國內情勢持續緊張。",
                "parliament" =>
                    "摩國國會為單一國會制，共有101席，任期4年，最近一次國會選舉在2021年7月11日，共有3個政黨進入國會，分別為行動暨團結黨(63席)、共產黨暨社會主義者黨聯盟(32席)及索爾黨(6席)。",
                "cabinet" =>
                    "摩國總理為Dorin Recean(行動暨團結黨籍，2023年2月16日上任)",
                "judiciary" => "設有憲法法院、最高法院及最高檢察院",
                "headman" =>
                    "2020年11月15日經第二輪投票後，瑪雅．薩恩度（Maia Sandu）當選第六任總統，同時是摩國首位女性總統，2020年12月24日就職。",
                "fa_minister" =>
                    "外交暨歐洲一體化部長Nicu Popescu(行動暨團結黨籍，2023年2月16日上任)",
                "major_political_parties" =>
                    "行動暨團結黨(PAS)、共產黨暨社會主義者黨聯盟(PKRM-PSRM)及索爾黨(Shor)等。",
                "financial_incoming" =>
                    "國內生產毛額:145.77億美元（2022年）；平均國民所得:4,590美元（2021年）",
                "export_value" => "約43,35億美元（2022年）",
                "import_value" => "約92,19億美元（2022年）",
                "export_item" => "食品、農產品、牲畜產品、紡織品",
                "import_item" => "能源燃料、機械設備、化學品",
                "main_export_countries" =>
                    "羅馬尼亞、俄羅斯、義大利、德國、英國、白俄羅斯、土耳其",
                "main_import_countries" =>
                    "羅馬尼亞、俄羅斯、烏克蘭、中國、德國、義大利",
                "export_to" => "約470萬美元 (2022年)",
                "import_from" => "419萬美元 (2022年)",
                "foreign_relationship" =>
                    "摩爾多瓦1991年自前蘇聯獨立後，依舊與俄羅斯保持密切關係。由於俄羅斯與獨立國協是摩國最大出口市場，摩國一方面尋求與獨立國協維持經濟合作，另方面盼獨立國協能發展出具有與歐洲共同市場相當之經濟功能，政治上則盼擺脫莫斯科之影響與箝制。為改革國內經濟及加速政治民主化，極力提倡加入歐盟以解決該國之經濟問題。",
                "foreign_policy" =>
                    "摩國於1991年8月27日獨立，與109個國家建交。獨立後積極加入國際組織，1992年3月加入聯合國，1994年3月成為NATO和平方案之戰略夥伴，1995年成為歐洲議會之會員。摩國也積極發展與美國及歐盟關係，將加入歐盟列為內政外交優先目標；2010年1月，摩國與歐盟正式開啟成為歐盟聯繫國的談判工作，3月摩國簽署加入歐洲能源共同體協議，6月摩國與歐盟啟動免簽證談判。2011年1月，歐盟向摩國提交免簽證行動計劃。2014年6月摩國與歐盟正式簽署聯繫國協議。2022年3月摩國向歐盟提出加入歐盟申請，歐盟於2022年6月23日正式授予摩爾多瓦歐盟候選國資格。",
                "time_range" => "較台灣慢6小時",
                "resident" =>
                    "無駐館，相關業務由駐俄羅斯代表處及駐斯洛伐克代表處兼轄",
                "national_flag" => null,
                "area_name" => "亞西地區",
                "area_name_in_en" => "West Asia",
            ],
            89 => [
                "name" => "摩納哥侯國",
                "name_in_en" => "Principality of Monaco",
                "short_name" => "摩納哥",
                "short_name_in_en" => "Monaco",
                "capital" => "摩納哥",
                "capital_in_en" => "Monaco",
                "national_day" => "11月19日",
                "join_un_day" => "28 May 1993",
                "area_size" => "2平方公里",
                "geographic" =>
                    "摩納哥侯國（Principaute de Monaco）是一個城邦國家，（世界第二小，僅次於梵蒂岡），地處法國地中海沿岸，全境北、西、東三面皆由法國包圍，主要由摩納哥舊城和隨後建立起來的週遭地區組成。",
                "religion" => "天主教",
                "bilaterial_relations" => null,
                "main_bounds" => "歐元",
                "exchange_rate" =>
                    "1歐元約兌換新台幣32.235元(2022年3月29日)。詳細匯率資訊建議至臺灣銀行（https://rate.bot.com.tw/xrt?Lang=zh-TW）或兆豐商銀（https://www.megabank.com.tw/personal/foreign-service/forex）網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/78113bc1-c8c9-4724-bc22-6c9d2ca6fc2d.GIF",
                "is_diplomatic" => 0,
                "language" => "法語",
                "main_media" =>
                    "Le Petit Journal de Monaco、Monaco Hebdo、L’Observateur de Monaco、La Gazette de Monaco",
                "population" => "人口39,783人(2022年)",
                "voltage" => "220V",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/af1c155d-ffec-4776-a8a3-621aa4134482.jpg",
                "political_system" => "君主立憲制",
                "history_intro" =>
                    "摩納哥的地名源自於約公元前6世紀，由來自希臘福基斯（Phocaea）地區的福基斯人於該地區附近所建立的希臘殖民地 — 摩諾伊科（Monoikos）。摩納哥於1215年被作為熱那亞的殖民地創建。自1297年，當弗朗索瓦·格里馬爾迪喬裝成聖芳濟會（Franciscan）的修道士（在義大利語中稱為monaco）占領了保護那塊著名的礁石的要塞後，摩納哥一直處於格里馬爾迪（Grimaldi）家族統治下，唯一的例外是自1793年到1814年，摩納哥是被法國控制的。1815年至1860年，維也納會議指定薩丁尼亞王國為摩納哥的保護國，直到1861年，摩納哥的主權才通過法國-摩納哥條約確定。在1911年第一部憲法頒布前，摩納哥親王曾經是至高無上的統治者。1918年7月，簽署了一份條約，條約規定法國在摩納哥提供有限的保護。這條約被寫入《凡爾賽和約》，建立了摩納哥的政策應該按照法國的政治、軍事、和經濟利益進行調整。1919年同法國簽訂的條約規定，一旦國家元首逝世而沒有男性後裔，摩納哥將併入法國。兩國於2002年另立新條約，當摩納哥國家元首無人繼承，摩納哥仍然為獨立國家，法國亦繼續提供防衛。",
                "parliament" => "國民會議",
                "cabinet" => "政府首長：Pierre Dartout (2020年9月1日就任)",
                "judiciary" =>
                    "在摩納哥，司法是獨立於行政部門，其獨立性由憲法保障。司法行政主管機關為司法事務局，自1918年從政府機關組織分開，以確保其自主性和受法律約束。法官則為終身任職，不能被撤職，停職或調職。",
                "headman" =>
                    "王侯Prince Albert II (2005年4月6日就任)； 政府首長(國務大臣)：Pierre Dartout (2020年9月1日就任)",
                "fa_minister" => "Gilles TONELLI",
                "major_political_parties" =>
                    "國家民主同盟、摩納哥社會黨、民主同盟運動及摩納哥行動黨",
                "financial_incoming" =>
                    "2020年財政收入約17.03億歐元，財政支出約18.062億歐元，超支約1.03億歐元",
                "export_value" => "約9.151億歐元(2020年)",
                "import_value" => "約13.729億歐元(2020年)",
                "export_item" => "產業以觀光業為主、無特別輸出項目",
                "import_item" => "該國產業以觀光業為主，無特別輸入",
                "main_export_countries" => "歐盟各國",
                "main_import_countries" => "歐盟各國",
                "export_to" => "163,498美元(2021年)",
                "import_from" => "262,840美元(2021年)",
                "foreign_relationship" => "著重在歐洲各國",
                "foreign_policy" =>
                    "外交事務多由法國代理。與少數國家維持領事關係。",
                "time_range" =>
                    "較台灣慢7小時(3月底至10月底日光節約時間較台灣慢6小時)",
                "resident" => "無（駐法國代表處兼轄）",
                "national_flag" => "由紅、白兩色橫條組成的旗幟",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            90 => [
                "name" => "敘利亞阿拉伯共和國",
                "name_in_en" => "Syrian Arab Republic",
                "short_name" => "敘利亞",
                "short_name_in_en" => "Syria",
                "capital" => "大馬士革",
                "capital_in_en" => "Damascus",
                "national_day" => "4月11日。",
                "join_un_day" => "1945年10月24日",
                "area_size" => "185,180平方公里",
                "geographic" => "位於中東，西接地中海，位與黎巴嫩和土耳其間",
                "religion" =>
                    "穆斯林87％，基督教10％，德魯茲3％，猶太人（少數留在大馬士革和阿勒坡）",
                "bilaterial_relations" => null,
                "main_bounds" => "敘利亞鎊(SYP)",
                "exchange_rate" =>
                    "浮動匯率，1USD約折合215SYP(詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。)",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/647c18bd-f73f-451a-9537-58f41cca68e5.GIF",
                "is_diplomatic" => 0,
                "language" => "阿拉伯語為官方語言",
                "main_media" =>
                    '無線電視台:Addounia TVArrai TVCham TVGeneral Organization of Radio and TV (RTV)Massaya TVNoor Al-ShamSama TVSpacetoonSyria TVSyrian Drama TVSyrian Education TVSyrian Medical TVSyrian News ChannelTalaqie TV/報紙:Al-Ba\'athAl-ThawraTishreenSyria TimesAl-WatanAl-IqtissadiyaEnab Baladi',
                "population" => "21,563,800 (2022年)",
                "voltage" => "220V",
                "time_difference" => "-5:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/9682b201-dfd5-4f62-b5df-6a222f5ec66e.jpg",
                "political_system" => "總統制，高度專制政權",
                "history_intro" =>
                    "敘利亞是世界最古老文明發源地之一，在納入羅馬帝國版圖以前曾經經歷西臺、亞述、巴比倫、埃及、波斯、希臘以及腓尼基各個帝國時期。7世紀以前，敘利亞是基督教的發祥地和傳播中心；伊斯蘭教在中東地區的擴張，7世紀到16世紀初葉一直是伊斯蘭教傳播中心之一；由於土耳其和十字軍的東征，到1516年成為土耳其鄂圖曼帝國的一部分；18世紀法國侵入，法國宣稱其為保護地；第一次世界大戰以後，由法國委任統治；1944年從維琪法國宣布獨立，但直到1946年正式獨立前一直有外國軍隊駐紮。1958年敘利亞和埃及合併為阿拉伯聯合共和國。1961年敘利亞脫離阿聯，重新建立敘利亞阿拉伯共和國。",
                "parliament" =>
                    "一院制，250席，議長Hammoudeh Sabbagh(本次選舉日為2020年7月19日)",
                "cabinet" =>
                    "30位部長，總理為Hussein Arnous (2020年8月3日上任)",
                "judiciary" =>
                    "高等法院：最高法院（分民事，刑事，宗教和軍事部門，每部門3名法官）；最高憲法法院（由7名成員組成）。下級法院：一審法院；宗教和軍事法庭；經濟法庭",
                "headman" => "總統阿塞德 Bashar Al-Assad（2000年7月17日就任）",
                "fa_minister" => "Faisal Mekdad（2020年11月22日就任）",
                "major_political_parties" =>
                    'Syrian Regional Branch of the Arab Socialist Ba\'ath PartyArab Socialist MovementSyrian Social Nationalist PartySyrian Communist Party (Bakdash)',
                "financial_incoming" => "收入：60億美元；支出92億美元(2020年)",
                "export_value" => "8.6億美元（2020年）",
                "import_value" => "42.4億美元（2020年）",
                "export_item" =>
                    "原油，礦產，石油產品，水果和蔬菜，棉纖維，紡織品，服裝，肉類，小麥",
                "import_item" =>
                    "機械和運輸設備，電力機械，食品和牲畜，金屬和金屬製品，化學品和化工產品，塑料，紗線，紙張",
                "main_export_countries" =>
                    "沙烏地阿拉伯、土耳其、埃及、阿聯大公國、約旦、科威特",
                "main_import_countries" => "土耳其、中國、阿聯大公國、俄羅斯",
                "export_to" => "477萬美元（2022年）",
                "import_from" => "8.16萬美元（2022年）",
                "foreign_relationship" =>
                    "2011年迄今的內戰，敘利亞已經越來越多與該地區的國家和國際社會隔絕，包括與土耳其、沙烏地阿拉伯、加拿大、法國、義大利、德國、美國、英國、比利時、西班牙和波斯灣國家斷絕外交關係。敘利亞續與伊朗和俄羅斯等傳統盟友建立良好的關係。目前與敘利亞保持良好關係的其他國家尚包括中國，北韓，安哥拉，古巴、委內瑞拉、玻利維亞、厄瓜多爾、尼加拉瓜、巴西、圭亞那、印度、南非、坦桑尼亞、巴基斯坦、亞美尼亞、阿根廷、白俄羅斯、塔吉克、菲律賓、烏干達等。從阿拉伯聯盟國家來看，敘利亞續與伊拉克、埃及（2013年7月3日以後）、阿爾及利亞、科威特、黎巴嫩和阿曼保持良好的關係。",
                "foreign_policy" =>
                    "確保國家安全，增加阿拉伯鄰國的影響力，確保收復戈蘭高地，是敘利亞外交政策的主要目標。",
                "time_range" =>
                    "Eastern European Summer Time/夏令時間:較台灣慢5小時Eastern European Time/冬令時間:較台灣慢6小時",
                "resident" =>
                    "我國目前並未設立大使館或代表處於敘利亞，該國相關事務由駐約旦代表處兼轄，地址:No. 18, Iritiria Street, Um Uthaina, Amman, Jordan Tel. +962-6-5544426, Fax. +962-6-5544434, 電子郵件:jor@mofa.gov.tw，緊急聯絡電話:+962-79-5552605。",
                "national_flag" =>
                    "敘利亞國旗自上而下由紅、白、黑三個平行長方形組成，中間有兩顆綠色五角星。紅色象徵勇敢，白色象徵純潔和寬宏大量，黑色象徵穆罕默德的勝利，五角星象徵革命，綠色是穆罕默德的子孫所喜愛的顏色，本國旗曾經是聯合阿拉伯共和國的國旗。",
                "area_name" => "亞西地區",
                "area_name_in_en" => "West Asia",
            ],
            91 => [
                "name" => "教廷",
                "name_in_en" => "The Holy See",
                "short_name" => "教廷",
                "short_name_in_en" => "Holy See",
                "capital" => "梵蒂岡城",
                "capital_in_en" => "Vatican",
                "national_day" => "3月 13日",
                "join_un_day" => "教廷一九五七年十月成為聯合國常任觀察員",
                "area_size" => "0.44平方公里",
                "geographic" =>
                    "梵蒂岡城位於羅馬泰伯河之左岸，全城東西最長一千公尺，最寬八百五十公尺。羅馬近郊之教宗避暑地「岡道爾夫堡」（Castel Gandolfo）以及羅馬城內若干座大殿及辦公處所，亦屬教廷領土。梵蒂岡內之辦公機構、聖堂及博物館約佔其全部面積三分之一，其餘則為花園及廣場。聯合國教科文組織在一九八五年第八屆世界文化資產會議中，將梵蒂岡列為世界主要文化遺產之一。",
                "religion" => "天主教",
                "bilaterial_relations" => null,
                "main_bounds" => "歐元",
                "exchange_rate" =>
                    "教廷使用歐元(Euro)，目前1歐元約兌換新台幣31.09元(111年7月5日台灣銀行即期賣出匯率）。「詳細匯率資訊建議至臺灣銀行(https://rate.bot.com.tw/xrt/all/day)」或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢」。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/customfile/sites/flagurllink/fde30f91-ff81-483c-bb5b-0493f1b930dd.png",
                "is_diplomatic" => 1,
                "language" => "拉丁語、義大利語、法語",
                "main_media" =>
                    '教廷官方日報為「羅馬觀察報」(L\'Osservatore Romano)，另於每週一以英、法、德、西、葡及波蘭等語言發行週報。教廷設有「梵蒂岡電視中心」(The Vatican Television Center)，協助世界各國電視台轉播教廷重要活動相關新聞。教廷新聞傳播部建置「梵蒂岡新聞網」（Vatican News)，每日以英、法、義、德、西、葡、華語等38種語言刊登教廷相關消息。官方網站https://www.vaticannews.va。',
                "population" =>
                    "約800人（以神職人員為主，其中約450人具公民資格、其餘為長期居留者。）",
                "voltage" => "220 伏特",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/6df485c2-92c4-4088-9e34-0bfe0eb900a2.jpg",
                "political_system" =>
                    "教宗為天主教普世教會之領袖，掌立法、行政與司法之全權。",
                "history_intro" =>
                    "教宗為教廷元首，亦為梵蒂岡城國之元首。教宗為羅馬主教，自第一位教宗聖伯多祿迄今已有二千餘年歷史。羅馬帝國於三八O年正式承認天主教為其國教，西羅馬帝國於北方蠻族入侵滅亡後，教宗以天主教會領袖逐漸成為義大利地區精神及文化傳承中心，形成教皇國，統轄義大利大部分地區。一八七O年義大利國王艾曼紐二世統一義大利並定都羅馬，教宗庇護九世退居梵蒂岡城堡，拒絕與義大利政府妥協，自稱為「梵蒂岡的俘虜」，史稱「羅馬問題」。教宗庇護十一世於一九二九年與墨索里尼政府簽訂「拉特朗條約」，義大利承認教廷在國際社會之特別自主權及對梵蒂岡城之主權，教廷成為一以梵蒂岡城為其主要領土之主權獨立國家，並定天主教為義大利國教。一九八四年二月十八日，教廷復與義大利簽署「新政教協定」，取消天主教為義大利國教之規定，使雙方政教關係更加明確完備。",
                "parliament" => null,
                "cabinet" =>
                    "教廷雖為主權獨立之國家，但其存在乃建立在全世界教友之信仰基礎上，其政治制度不同於一般世俗國家。中樞組織以輔助教宗管理普世教會及傳播福音為主。教廷於2022年6月5日正式實施宗座憲章《你們去宣講福音》（Praedicate Evangelium），此憲章取代教宗若望•保祿二世於1988年公佈的《善牧》（Pastor Bonus）憲章。教宗為管理普世教會，設立下列機構：一、	國務院（Segreteria di stato）是教宗秘書處（Segreteria papale）：綜理教廷行政、外交，並掌理教宗之樞密事務，其首長為國務院長，現任國務院長為義大利籍之帕洛林樞機主教（Cardinal Pietro Parolin）， 帕洛林樞機主教係由教宗方濟各於2013年8月31日任命，並於當年10月15日就職。國務院下設一般事務（第一部門，等同內政部）、國際關係對外事務（第二部門，等同外交部）及教廷外交人員(第三部門)等三個部門。     一般事務部由國務院副院長主司其責，副院長為帕拉總主教(Archbishop Edgar Peña Parra, 2018年10月15日履職], 國際關係對外事務部由葛拉格總主教（Archbishop Paul R. Gallagher）負責、教廷外交人員部由Archbishop Jan Romeo Pawlowski總主教負責。 二、教廷內現有16個部會，自2022年6月5日配合憲政，部會統稱為Dicastery。福音傳播部(Dicastery for Evangelization)信仰教義部(Dicastery for the Doctrine of the Faith)愛德服務部(Dicastery for the Service of Charity)東方教會部(Dicastery for the Eastern Churches)聖事禮儀部(Dicastery for Divine Worship and the Discipline of the Sacraments)封聖部(Dicastery for the Causes of Saints)主教部(Dicastery for Bishops)聖職部(Dicastery for the Clergy)修會和使徒生活團體聖部(Dicastery for Institutes of Consecrated life and Societies of Apostolic Life)平信徒、家庭和生命部(Dicastery for the Laity, the Family and Life)促進基督徒合一部(Dicastery for Promoting Christian Unity)宗教對話部(Dicastery for Interreligious Dialogue)文化教育部(Dicastery for Culture and Education)促進人類整體發展部(Dicastery for Promoting Integral Human Development)法典條文解釋部(Dicastery for Legislative Texts)傳播部(Dicastery for Communication)三、財政機關：經濟委員會、經濟秘書處、宗座遺產管理處、審計室、機密資金委員會及投資委員會。 四、事務局：教宗府、禮儀事務辦公室及總務事務局。五、學術機構：聖座檔案室、聖座圖書館、聖伯多祿大殿、聖座考古委員會、聖座外交學院等。",
                "judiciary" =>
                    "三個法院（Tribunals），分別為聖赦院、最高法院、聖輪法院。",
                "headman" =>
                    "方濟各（His Holiness Pope Francis） （2013年3月13日當選、3月19日就任）。",
                "fa_minister" =>
                    "葛拉格總主教（Archbishop Paul R. Gallagher） （2015年1月就任）。",
                "major_political_parties" => null,
                "financial_incoming" =>
                    "財政收支分為三部分： 一、教廷：歲入（主要來自教友捐獻及資產收益）；歲出（主要用於工作人員的人事費用及採購物品與服務）。 二、梵蒂岡城：歲入（主要來自梵蒂岡博物館等收益）；歲出（主要用於採購物品與服務及工作人員的人事費用）。 三、慈善專款：歲入（主要來自各界捐款）；歲出（多用於慈善濟助、部分用於人事費用）。",
                "export_value" =>
                    "無（教廷為宗教實體，不同一般國家，無進出口貿易）。",
                "import_value" =>
                    "無（教廷為宗教實體，不同一般國家，無進出口貿易）。",
                "export_item" =>
                    "無（教廷為宗教實體，不同一般國家，無進出口貿易）。",
                "import_item" =>
                    "無（教廷為宗教實體，不同一般國家，無進出口貿易）。",
                "main_export_countries" =>
                    "無（教廷為宗教實體，不同一般國家，無進出口貿易）。",
                "main_import_countries" =>
                    "無（教廷為宗教實體，不同一般國家，無進出口貿易）。",
                "export_to" =>
                    "無（教廷為宗教實體，不同一般國家，無進出口貿易）。",
                "import_from" =>
                    "無（教廷為宗教實體，不同一般國家，無進出口貿易）。",
                "foreign_relationship" =>
                    "教廷與183個國家建立外交關係（不含歐盟及馬爾他騎士團），其中88個國家在教廷派駐大使（包括歐盟、馬爾他騎士團；另阿拉伯國家聯盟、國際移民組織、聯合國難民事務高級專員辦公室在教廷派有代表），餘則為兼使。教廷為維護其獨立性，不成文規定各國駐義大利大使不得兼任駐教廷大使，反之亦然。教廷在183個建交國共派駐106位常駐專使，專使中有兼轄數個國家者；另在駐聯合國紐約總部、日內瓦辦事處派駐常任觀察員，教廷使節同時為教宗派在當地之教會代表，負責增進教廷與當地教會之聯繫，以及教廷與駐在國政府之關係；在部分國家或地區，則派有「宗座代表」，負責與當地教會之聯繫；在國際組織方面，教廷參與34個國際組織（機構）及國際計畫，其中19個屬觀察員性質，另梵蒂岡城國（The Vatican City State）為7個國際組織會員。",
                "foreign_policy" =>
                    "教廷對外政策基本考慮為宗教性、人道性，與一般世俗國家重視政治、軍事關係及經貿利益完全不同。教廷與世界各國廣建外交關係，以維護宗教自由及確保各國境內天主教徒之信仰生活，促進自由、民主、人權、正義、和平之價值，並透過在聯合國等國際組織之發言權，傳播自由、平等、對話、和平、四海一家之價值觀念。由於教宗在國際上具有崇高之道德地位，教宗在國際政治上經常為世界和平與國際正義，發出良心的呼聲，要求各國政府尊重基本人權及人性尊嚴，並自1968年起訂每年元旦為「世界和平日」，發表「世界和平日文告」，我政府每年均予響應。",
                "time_range" =>
                    "較台灣慢7小時(3月底至10月底為日光節約時間，較台灣慢6小時)",
                "resident" =>
                    "駐教廷大使館Embassy of the Republic of China ( Taiwan ) to the Holy See",
                "national_flag" =>
                    "梵蒂岡之國旗為黃白兩色，黃色代表和平、白色代表仁愛，中間繪有兩把交叉的鑰匙，象徵聖伯多祿的繼承者-教宗治理全世界天主教之神權。",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            92 => [
                "name" => "斐濟共和國",
                "name_in_en" => "Republic of Fiji",
                "short_name" => "斐濟",
                "short_name_in_en" => "Fiji",
                "capital" => "蘇瓦",
                "capital_in_en" => "Suva",
                "national_day" => "10月10日",
                "join_un_day" => "1970年10月13日",
                "area_size" => "18,274 平方公里",
                "geographic" => "南緯12至22度，東經174至178度之間",
                "religion" =>
                    "信奉基督教人口64.5% (包括Methodist34.6%，Roman Catholic 9.1%，Assembly of God 5.7%，Seventh Day Adventist 3.9%，Anglican 0.8%，其他10.4%），印度教27.9%，伊斯蘭教6.3%，錫克教0.3%，其他1%。",
                "bilaterial_relations" => null,
                "main_bounds" => '斐濟元 Fijian Dollar (FJ$)',
                "exchange_rate" =>
                    "1斐元約兌換0.5美元或13.5元新台幣。惟須視匯率浮動情況而定。詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢」",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/15112750-a3a8-46a3-8b90-89e51aa83036.gif",
                "is_diplomatic" => 0,
                "language" =>
                    "官方語言為英語、斐濟語、印度語，民間各族群使用其母語，英語為各族群通用語言。",
                "main_media" =>
                    "主要英語報纸有斐濟時報（Fiji Times）1869年成立，發行量100,000份）；斐濟太陽報（Fiji Sun）創刊於2000年，一般視其為官方喉舌報，發行量與斐濟時報相當。網路報有Fiji Live、Fiji Village，主要雜誌有Islands Business Magazine（在太平洋島國發行量约1萬册）。斐濟廣播有限公司（Fiji Broadcasting Corporation Limited），成立於1985年，為全國性廣播網，斐濟語、印度語和英語各2個電台。 斐濟電視台（Fiji TV），由紐西蘭電視公司、斐濟開發銀行於1993年成立，播放3個頻道節目。2005年設立太平洋島國天空衛星電視(Sky Pacific)。",
                "population" => "884,887人(斐濟2017年人口普查報告)",
                "voltage" => "220V，使用八字型插頭（與紐、澳相同）",
                "time_difference" => "+4:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/adee6d61-a06f-4ca9-8284-9ec950bba7e7.JPG",
                "political_system" => "內閣制",
                "history_intro" =>
                    "1、人類學家考證斐濟原住民約於西元前1500年自其他島嶼航海抵斐濟開始聚居。1643年荷蘭航海家塔斯曼(Abel Tasman)抵斐濟，為近代西方首度與斐濟接觸。歐洲人於19世纪上半葉開始移民至斐濟。大英帝國1857年開始在斐濟派駐領事，1874年其駐斐濟首席長官(Chief Secretary)John B. Thurston聯合駐澳洲地區指揮官J.G. Goodenough向斐濟國王Ratu Cakobau及眾酋長宣讀退位令(Deed of Cession)，將斐濟納入大英帝國版圖，1879～1916年引進印度勞工從事蔗糖種植。2、1970年10月10日斐濟獨立，國號為「斐濟自治領」(Dominion of Fiji)，頒行1970年憲法，採英國議會政治體制，並加入大英國協，奉英王為元首並接受英王派任總督，首任總理為馬拉(Ratu Kamisese Mara)。",
                "parliament" =>
                    "2013年憲法採一院制國會，55個席次。2022年12月14日國會大選結果，斐濟第一黨 (FFP)獲26席、「人民聯盟「(PA)獲21席、國家聯盟黨 (NFP)獲5席、社會民主自由黨(SODELPA) 獲3席。現任議長為拉拉布拉夫 (Ratu Naiqama Lalablavu)，副議長為Lenora Qereqeretabua (住屋暨地方政府部政務長)。",
                "cabinet" => "總理任命國會議員擔任閣員；內閣對國會負責。",
                "judiciary" =>
                    "依次分為四級，即分設於各城鎮之36個地方法院(Magistrates Courts)，在轄區內處理一般性質之民、刑事案件；高等法院(High Court)設於首都Suva、Lautoka及Vanua島之Labasa等3處，掌理民、刑事及個人基本自由及權利問題；上訴法院(Court of Appeal)、最高法院(Supreme Court)在首都蘇瓦。另1991年在Suva、Lautoka及Labasa設有處理2千元標的內之小額仲裁庭(Small Claims Tribunal)，以分擔地方法院之工作。",
                "headman" =>
                    "總統 Ratu Wiliame Maivalili Katonivere ( 2021年11月12日上任)；總理Sitiveni Rabuka ( 2022年12月24日上任)。",
                "fa_minister" => "Sitiveni Rabuka (總理兼任)",
                "major_political_parties" =>
                    '•	主要政黨：斐濟政黨林立，2013年1月頒布之2013年政黨法規定政黨必須重新登記方屬合法。目前主要政黨共有下列6個：1、People\'s Alliance (PA)人民聯盟:黨魁為總理Sitiveni Rabuka;主張保障原住民權益及人權，以及修訂2013年憲法等。2、Fiji First Party (FFP) 斐濟第一黨：黨魁為前總理拜尼馬拉馬；主張各族裔平等，發展民生經濟，主要支持者包括印度裔、華裔及少數族裔、原住民基層勞工以及工商界、部分知識分子和青年人。3、Social Democratic Liberal Party (SODELPA)社會民主自由黨：黨魁原為Ro Teimumu Kepa（Rewa省大酋長，胞姊為前總統馬拉之妻），2016年6月由前總理欒布卡(Sitiveni Rabuka)繼任，2020年12月黨魁改選，由國會議員Viliame Gavoka接任，2022年12月大選該黨國會席次由21席銳減至3席，Viliame Gavoka辭去黨魁；主張在進行民族和解時必須照顧原住民及Rotuma族之利益，支持者包括原住民酋長和部分基層村民。4、National Federation Party (NFP) 國家聯盟黨：黨魁為Prof. Biman Prasad、印度裔國會議員。5、Fiji Labour Party (FLP) 斐濟工黨：黨魁為前總理喬德利(Mahendra Chaudhry)，印度裔領袖，曾擔任拜尼馬拉馬總理所領導臨時政府之財長，2008年退出政府。6、	Unity Fiji (UF)「團結斐濟」：黨魁Savenaca Narube前曾擔任「斐濟儲備銀行」(Fiji Reserve Bank)總裁。',
                "financial_incoming" =>
                    "2021/22年期斐濟政府預算編列歲出36.9億斐元（約18.45億美元），歲入20.8億斐元（約10.4億美元），赤字16.1億斐元（約8.05億美元，約當GDP之16%）",
                "export_value" => "18.5億斐元(約合9.25億美元，2021年)",
                "import_value" => "46.8億斐元(約合23.4億美元，2021年)",
                "export_item" =>
                    "出口（約40%屬轉出口）主要項目為加工食品及飲料（礦泉水、蔗糖、米麵製品、罐裝飲料）、金及珍珠飾品、織品、木材、魚、燃油（轉口外銷航海及航空器用燃油）等",
                "import_item" =>
                    "進口主要項目為汽車、礦能產品、機械電氣類、蔬果、動物及其製品、金屬、化學產品、織品、食品、橡塑膠。",
                "main_export_countries" =>
                    "主要出口對象為其他太平洋島國、美國、澳洲、紐西蘭、英國、中國大陸、日本、臺灣、香港、新加坡。",
                "main_import_countries" =>
                    "主要進口來源為新加坡、澳洲、紐西蘭、中國大陸、美國、日本、印度、香港、台灣。",
                "export_to" => "52,273,000美元 (2021年)",
                "import_from" => "1,955,000美元美元 (2021年)",
                "foreign_relationship" =>
                    "斐濟外交務實，秉持「廣交友，不樹敵」(Friend to all, enemy to none)理念，除與澳、紐及南太各島國往來之外，亦維持與歐盟國家及美國等大國關係， 2011年加入「不結盟運動」，加強與中南美及亞非國家關係。目前斐濟與170餘國建交，並在華府、北京、布魯塞爾、坎培拉、吉隆坡、倫敦、東京、威靈頓、新德里、首爾、雅加達、莫斯比港、巴西利亞、阿布達比、阿迪斯阿貝巴（2016年取代址設普利托利亞之高專署）設高專署或大使館，在雪梨、上海設總領事館，在紐約及日內瓦設駐聯合國常設代表團，在洛杉磯設貿易辦事處，總計20個駐外機構。歐盟、英、法、美、澳、紐、日、中國大陸、印度、印尼、韓國、馬來西亞以及包括巴布亞紐幾內亞等太平洋島國在斐濟設使館。（註：斐濟駐華貿易暨觀光代表處於2017年5月10日裁撤）",
                "foreign_policy" =>
                    "近幾年斐濟在國際舞台十分活躍，2013年擔任G77+China主席，2016年9月起斐濟駐聯合國常任代表Peter Thomson擔任第71屆聯合國大會主席，2017年6月斐濟擔任UN Ocean Conference共同主席，2017年月11擔任COP23會議主席，2019年亞洲開發銀行第52屆年會將在斐濟舉行；此外，斐濟亦持續參加聯合國在敘利亞、戈蘭高地、伊拉克等地區維和任務。斐濟參與之國際組織包括：聯合國(UN)、世界貿易組織(WTO)、世界動物衛生組織(OIE)、亞洲生產力組織(APO)、太平洋島國論壇(PIF)、太平洋共同體(PC)、非加太集團(ACP)、東南亞國家中央銀行總裁聯合會(SEACEN)等。聯合國各專門機構及太平洋主要區域組織均在蘇瓦設立總部或支部。",
                "time_range" =>
                    "較台灣時間早4小時 (夏季實施日光節約時間較台灣早5小時)",
                "resident" => "我國在斐濟首都蘇瓦設有代表處。",
                "national_flag" =>
                    "斐濟國旗的 「米字旗」象徵與英國傳統關係；藍色象徵遼闊無際的海洋；右邊是國徽，盾面上方是一隻帶著皇冠的黃色獅子，獅子抱著一個椰子。獅子下面的聖喬治紅十字把白地盾面分成四格，每格圖案不同。叼著橄欖枝的鴿子象徵和平，甘蔗、椰子、香蕉象徵農作物在國民經濟中的重要性。",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            93 => [
                "name" => "斯洛伐克共和國",
                "name_in_en" => "Slovak Republic",
                "short_name" => "斯洛伐克",
                "short_name_in_en" => "Slovakia",
                "capital" => "布拉提斯拉瓦",
                "capital_in_en" => "Bratislava",
                "national_day" => "1月1日",
                "join_un_day" => "1993年1月19日",
                "area_size" => "49,035平方公里",
                "geographic" =>
                    "中東歐內陸國家，東南鄰烏克蘭，南與匈牙利相連，西接奧地利，西北與捷克相鄰，北與波蘭接壤",
                "religion" => "羅馬天主教為主",
                "bilaterial_relations" => null,
                "main_bounds" => "歐元",
                "exchange_rate" =>
                    "詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/cc58e8f8-ae41-4bfe-b83e-a4b8a521d00f.GIF",
                "is_diplomatic" => 0,
                "language" => "斯洛伐克語為主",
                "main_media" =>
                    "主要英文媒體包括The Slovak Spectator、TASR及SITA等。斯洛伐克文主要日報包括Pravda、SME、Dennik N及Novy Cas等。主要電視台有Markiza、STV及TA3等。",
                "population" => "5,490,000人(2022年)",
                "voltage" =>
                    "電壓規格：220伏特、5O Hz，插頭為歐洲雙圓柱型插頭。",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/9e9bd9b2-ebf4-432e-bfc8-c89d3fb1dfe3.jpg",
                "political_system" => "議會制共和國",
                "history_intro" =>
                    "斯洛伐克人為斯拉夫民族，歷史可追溯到西元第9世紀，當時與捷克共同建立大摩拉維亞帝國(Great Moravian Empire)，其後斯洛伐克長期受匈牙利統治。1918年奧匈帝國瓦解，斯洛伐克與捷克聯合建立捷克斯洛伐克聯邦共和國(Republic of Czechoslovakia)。首任總統為馬薩里克。二次世界大戰前捷克為納粹德國併吞，斯國雖獨立卻成為納粹德國之附庸。二戰結束後，捷克斯洛伐克聯邦共和國在紅軍卵翼下成立，東西冷戰期間，捷克斯洛伐克屬華沙公約組織及經濟互助合作委員會成員，直至1989年「絲絨革命」(Velvet Revolution)成功後，始推翻共黨政權，改行民主憲政。由於斯洛伐克人要求政治地位平等，經過激烈的辯論後，聯邦國會於1990年4月日通過決議，更改正式國名為「捷克暨斯洛伐克聯邦共和國」(The Czech and Slovak Federal Republic)，後因聯邦政府採行之激進經濟改革措施對經濟發展較落後之斯洛伐克帶來嚴重打擊導至斯人不滿，兩共和國間之關係成為政壇主要之爭議。1992年6月舉行國會大選，選舉結果分別在捷克和斯洛伐克獲勝之兩大政黨因政策相左，經多次談判後協議，決定將聯邦共和國一分為二，7月17日斯邦國會發表宣言，宣佈其具有獨立主權，9月3日通過新憲法，1993年1月1日斯洛伐克共和國(the Slovak Republic)與捷克共和國分別獨立。",
                "parliament" =>
                    "斯國國會(National Council)為一院制，議員共150席，任期4年",
                "cabinet" =>
                    "斯國總理由總統任命，2022年9月因自由團結黨(SAS)退出執政聯盟，12月16日國會通過政府不信任案，看守內閣名單如下：總理暫兼財政部長Eduard Heger(平民黨)、外交部長Rastislav Káčer、經濟部長Karel Hirman、教育部長Ján Horecký、副總理(負責法制暨策略規劃)、Stefan Holy(我們是一家)、副總理兼區域發展、投資及資訊部長Veronika Remisova(服務人民黨)、內政部長Roman Mikulec(平民黨)、國防部長Jaroslav Nad(平民黨)、司法部長Viliam Karas、交通部長Andrej Dolezal(我們是一家)、勞工部長Milan Krajniak(我們是一家)、農業部長Samuel Vlcan(平民黨)、衛生部長Vladimir Lengvarsky(平民黨)、文化部長Natalia Milanova(平民黨)、環境部長Jan Budaj(平民黨)。",
                "judiciary" =>
                    "司法機關包括憲法法院(Constitutional Court)、最高法院(Supreme Court)及一般法院(General Court)。一般法院又分為地方法院(District Court)及地區法院(Regional Court)。憲法法院為獨立司法機構，掌理釋憲及重大法律爭議案並保護憲法。法官經斯洛伐克司法會議(Judiciary Council)提請總統任免，獨立行使職權，無任期限制。",
                "headman" => "Zuzana CAPUTOVA 總統(2019年6月15日就職)",
                "fa_minister" => "Rastislav Káčer",
                "major_political_parties" =>
                    '執政黨—「平民黨」（OLANO）、「我們是一家 」(SME-RODINA)、「服務人民黨」(ZA L\'UDI)在野黨—「自由團結黨」(SAS)、「方向黨」(SMER)、「我們的斯國黨」(LSNS)、「社會民主之聲黨」(HLAS)。',
                "financial_incoming" =>
                    "總預算200億歐元，外債529億歐元(2022年)。",
                "export_value" => "883億歐元(2021年)",
                "import_value" => "866億歐元(2021年)",
                "export_item" =>
                    "汽車、遙控器及投影設備、汽車零件、電視接收器、電話及手機元件、新橡膠輪胎、石油礦產品",
                "import_item" =>
                    "汽車零件、電話及手機元件、運輸設備、石油及其產品、電線及電纜",
                "main_export_countries" =>
                    "德國、捷克、波蘭、法國、匈牙利、奧地利、美國、英國、義大利、西班牙",
                "main_import_countries" =>
                    "德國、捷克、中國大陸、波蘭、越南、南韓、俄羅斯、匈牙利、法國、義大利",
                "export_to" => "1.21億歐元(2021年)",
                "import_from" => "2.08億歐元(2021年)",
                "foreign_relationship" =>
                    "斯國分別於2004年4月及5月加入歐盟及北約，與鄰國關係務實良好，與捷克尤為密切。",
                "foreign_policy" =>
                    "1.斯國已於2004年4月正式成為北約組織會員國，並已於2004年5月正式加入歐洲聯盟，2006年至2007年斯國曾任聯合國安全理事會非常任理事國。2007年12月21日起正式加入申根公約。2009年1月1日加入歐元區。2016年下半年擔任歐盟輪值主席國。 2.斯國參與之重要國際組織除聯合國及北約組織外，其他尚包括世界貿易組織(WTO)、世界衛生組織(WHO)、經濟合作暨發展組織(OECD)等。3.斯國於2019年同時擔任經濟合作暨發展組織(OECD)、歐洲安全合作組織(OSCE)及V4中歐四國輪值主席國。",
                "time_range" =>
                    "1.較台灣時間慢7小時。2.自3月至10月止日光節約時間慢6小時。",
                "resident" => "駐斯洛伐克臺北代表處",
                "national_flag" =>
                    "由上而下分別為白、藍、紅 三橫條組成之三色旗，偏左方有國徽。",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            94 => [
                "name" => "斯洛維尼亞共和國",
                "name_in_en" => "Republic of Slovenia",
                "short_name" => "斯洛維尼亞",
                "short_name_in_en" => "Slovenia",
                "capital" => "盧比安納",
                "capital_in_en" => "Ljubljana",
                "national_day" => "6月 25日",
                "join_un_day" => "1992年5月22日",
                "area_size" => "20,273平方公里",
                "geographic" =>
                    "斯洛維尼亞位處歐洲東南部，巴爾幹半島北端，北接奧地利，西鄰義大利，東面有匈牙利而南面與克羅埃西亞接壤，面積為20,273平方公里，首都為盧比安納。斯國毗鄰阿爾卑斯山，國境內多山區，山脈由北邊延伸至東南，南邊及西南邊則多岩洞景觀，西接亞德里亞海，海岸僅有46.6公里。特里格拉夫峰（Triglav）為斯國境内最高的山峰，海拔2,864公尺。最著名的湖泊是布萊德湖（Bled lake）。",
                "religion" => "天主教 57.8%, 回教 2.4%",
                "bilaterial_relations" => null,
                "main_bounds" =>
                    "歐元(EURO)，紙幣分500、200、100、50、20、10及5歐元等七種，硬幣分2歐元、1歐元、50分、20分、10分、5分、2分及1分等8種。",
                "exchange_rate" => "歐元兌美金約1:0856(2023年4月)。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/11b84eea-6b31-4673-8a62-910a03ebc98e.GIF",
                "is_diplomatic" => 0,
                "language" => "斯洛維尼亞語，大城市居民部分人通曉德文或英文。",
                "main_media" =>
                    "如斯國國家通訊社（STA）、勞動報（Delo）及金融日報（Finance Daily）等",
                "population" => "210萬人",
                "voltage" => "220伏特，使用歐陸圓形二齒插頭",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/ad439678-d469-41b2-aefb-cf9b97735473.jpg",
                "political_system" =>
                    "斯國總統由人民直接投票選出，每屆任期為5年，最多連任2屆，現任總統為穆莎(Nataša Pric-Muscar)。政府行政權由總理及內閣主導，內閣由國會選舉產生，國會為兩院制，國民議會（Drzavni zbor；相當於下議院）有90名代表，斯洛維尼亞國民委員會（Drzavni svet；相當於上議院）有40名代表，權力集中於國民議會，每4年選舉一次。全國分為12個行政區，共有212個市鎮。斯洛維尼亞政府官方網站：http://www.gov.si/",
                "history_intro" =>
                    "西元六世紀時，南斯拉夫人遷徙至斯洛維尼亞定居，西元1335年為奧匈帝國建立者-哈布斯堡王朝統治，拿破崙時代曾為法國伊利里亞省之一部分，直到1918 年奧匈帝國戰敗後，斯洛維尼亞與塞爾維亞、克羅埃西亞及其他南斯拉夫民族聯合成立王國，1929年並改稱為南斯拉夫王國，1945年成立南斯拉夫聯邦共和國。蘇聯解體後1991年6月25日斯國宣布獨立，1992年5月加入聯合國，並於2004 年3月加入北約組織、同年5月加入歐盟，2007年12月21日成為申根公約會員國。",
                "parliament" =>
                    "國會採兩院制，斯洛維尼亞國民委員會（Drzavni svet；相當於上議院-National Council)有40席議員，由勞、資、農、商等職業團體選派，任期5年，為一諮詢性機構。國民議會（Drzavni zbor；相當於下議院）有90名代表(National Assembly)，其中88席由各選舉區公民直接選舉以政黨比例代表制產生，任期四年，政黨進入國會之得票率門檻為4%，2席保留由義大利及匈牙利少數族裔選出。權力集中於國民議會，每4年選舉一次。最近一次改選為2022年4月24日。",
                "cabinet" =>
                    "政府行政權由總理及內閣主導，為全國最高行政機關，總理由總統提名或國會政黨自行提名並經國會通過後出任，部長則由總理提名並經國會通過後任命。",
                "judiciary" =>
                    "法院分為憲法法院、普通法院（地方、高等及最高）、勞工及社會法院",
                "headman" => "穆莎(Nataša Pric-Muscar)（2022年當選）。",
                "fa_minister" => "Tanja Fajon",
                "major_political_parties" =>
                    "自由運動黨(GS)Freedom Movement;斯洛維尼民主黨(SDS)Slovenian Democratic Party;社民黨(SD)Social Democrats;左派黨（Levica）The Left;新斯洛維尼亞-基督教人民黨（Nsi）New Slovenia-Christian People’s Party;",
                "financial_incoming" =>
                    "歲入251.72億歐元，歲出274.90億歐元 （2022年）",
                "export_value" => "528億歐元（2022年）",
                "import_value" => "567億歐元（2022年）",
                "export_item" =>
                    "醫藥及免疫保健品、石油產品、電力能源、車輛、電動馬達及發電機械零組件等（2022年）",
                "import_item" =>
                    "醫藥品、石油製品、有機化學品、電力能源、天然氣等（2022年）",
                "main_export_countries" =>
                    "瑞士、德國、義大利、克羅埃西亞、奧地利、法國 (2022年)",
                "main_import_countries" =>
                    "瑞士、德國、義大利、中國、奧地利、克羅埃西亞 （2022年）",
                "export_to" => "2億912萬美元(2022年)",
                "import_from" => "4,936萬美元(2022年)",
                "foreign_relationship" =>
                    "2004年3月斯洛維尼亞加入了北約組織，5月1日加入歐盟，在2007年1月正式啟用歐元，2007年12月21日成為申根公約會員國。斯國與克羅埃西亞在前南斯拉夫聯邦時期即因邊境領土劃分問題時有糾紛並糾纏至今。復又因克羅埃西亞於2003年10月3日立法通過宣布200海里經濟暨漁業專屬區而將斯國原有海域空間擠壓無餘，雙方再起爭執，斯國爰杯葛克國申請加入歐盟談判。斯國與克國於2009年11月經由歐盟調解，簽署協定同意交由國際仲裁法庭仲裁，並自克國與歐盟簽署加盟協議後開始。2017 年 6 月 29 日，海牙國際仲裁法庭依據國際法就斯洛維尼亞和克羅埃西亞兩國海上和陸地邊界的仲裁作出了最終裁決，惟克羅埃西亞拒絕承認並執行該仲裁判決。斯洛維尼亞主張因克羅埃西亞不尊重仲裁裁決和法治，違反了歐盟的基本原則，因此斯洛維尼亞根據《歐盟運作條約》（TFEU）第 259 條於 2018 年 7 月 13 日對克羅埃西亞提起訴訟。",
                "foreign_policy" =>
                    "斯國獨立後，維護國家安全為其外交最高目標，故極力與其周邊國家如奧地利、義大利、匈牙利、克羅埃西亞等保持友好關係，另積極促進與其他巴爾幹半島其他國家之關係，並熱心參與該地區聯合國及北約等各種不同國際組織之維和(peace-keeping)行動，例如聯合國賽浦路斯維和行動等。",
                "time_range" =>
                    "夏令時間(每年3月最後一個週日開始)與台灣相差6個小時(慢6小時)，冬令時間(每年10月最後一個週日開始)與台灣相差7個小時(慢7小時)。",
                "resident" => "無（由駐奧地利代表處兼轄）",
                "national_flag" =>
                    "斯洛維尼亞共和國國旗及航海旗為白-藍-紅三色配有斯洛維尼亞共和國國徽。斯洛維尼亞憲法第六條確定了關於國旗、國徽與民族旗幟的幾何構造、設計與顏色的應用條款。",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            95 => [
                "name" => "斯里蘭卡民主社會主義共和國",
                "name_in_en" => "Democratic Socialist Republic of Sri Lanka",
                "short_name" => "斯里蘭卡",
                "short_name_in_en" => "Sri Lanka",
                "capital" => "可倫坡",
                "capital_in_en" => "Colombo",
                "national_day" => "2月4日(1948年2月4日獨立)",
                "join_un_day" => "1955年12月14日",
                "area_size" => "65,610平方公里",
                "geographic" =>
                    "位於南亞之印度半島東南端，為印度洋島國，東北為孟加拉灣(Bay of Bangal)，西北以曼納灣(Gulf of Mannar)及保克海峽(Palk Strait)與印度相望",
                "religion" =>
                    "佛教（70％）、印度教（13％）、回教（10％）、天主教（7％）",
                "bilaterial_relations" => null,
                "main_bounds" => "斯里蘭卡盧比(LKR)",
                "exchange_rate" =>
                    "1美元=363.18盧比(LKR) (2022.12.14 updated)（詳細匯率資訊建議至https://www.cbsl.gov.lk/en/rates-and-indicators/exchange-rates　網站查詢）",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/198ff30e-0fe5-4127-872e-e4c3906960b5.gif",
                "is_diplomatic" => 0,
                "language" =>
                    "官方語言為僧伽羅語(Sinhala，約74%的人口使用)及泰米爾語(Tamil，約18%的人口使用)，英語則為政府部門普遍使用之語言",
                "main_media" =>
                    "斯里蘭卡廣播公司(Sri Lanka Broadcasting Corporation)成立於1923年，為亞洲最老牌之廣播電台。該電台使用僧伽羅語、泰米爾語、英語及印度語播送。1980年代開始，民營電台紛紛成立，1992年民營電視台獲准成立。目前斯國全國共有51份報刊(30份使用僧伽羅語、10份使用泰米爾語、11份使用英語)、34家公民營電視台及52家廣播公司。",
                "population" => "2,216萬人(2021年)",
                "voltage" =>
                    "斯里蘭卡的電壓為230伏特，50赫茲。插座有三孔圓形或方形",
                "time_difference" => "-2:30",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/f322acd0-ee8e-4277-9ae3-6b1ff9689e32.jpg",
                "political_system" => "斯里蘭卡政體為總統制與議會內閣制混合體",
                "history_intro" =>
                    "西元前6世紀時，來自北印度之僧伽羅人移民錫蘭建立僧伽羅王朝。西元前3世紀中期，孔雀王朝之阿育王派其子前往錫蘭弘揚佛法，受到當地國王歡迎，從此僧伽羅人擯棄婆羅門教而改信佛教。西元前2世紀前後，南印度之泰米爾人開始遷徙並定居錫蘭，西元14世紀在北錫蘭建立泰米爾王國。從5世紀至16世紀，僧伽羅王國與泰米爾王國之間征戰不斷。16世紀至17世紀先後被葡萄牙及荷蘭統治。19世紀初成為英國殖民地。1948年2月4日正式獨立為錫蘭國(Ceylon)。1972年修憲更名為「斯里蘭卡共和國」。1978年再度修憲，改國號為「斯里蘭卡民主社會主義共和國」，並廢除英國女王為象徵性元首，仍為大英國協一員。",
                "parliament" =>
                    "一院制，共225席國會議員，任期五年。現任議長為SLPP之Mahinda Yapa Abeywardena。",
                "cabinet" =>
                    "總統（須兼任國防部長）為內閣之首，由人民直接選舉產生。總理由總統任命，必須為國會多數黨領袖。內閣成員由總統與總理協商後，由總統任命。2016年斯國內閣除總統及總理外，另有45名部長，共計47名閣員。",
                "judiciary" =>
                    "司法首長（Chief Justice）Jayantha Jayasuriya（2019年4月就任），由總統任命。",
                "headman" =>
                    "元首為總統Ranil Wickremesinghe（2022年7月21日就任）。",
                "fa_minister" => "外長Mr. M.U.M. Ali Sabry(2022年7月22日就任)",
                "major_political_parties" =>
                    "目前斯國政壇有兩大政治勢力，一為由「斯里蘭卡自由黨」（Sri Lanka Freedom Party, SLFP, S總統所屬政黨）所領導之「聯合人民自由聯盟」（United People’s Freedom Alliance, UPFA），另一為「聯合國民黨」（United National Party, UNP, W總理所屬政黨）所領導之政治聯盟。UPFA及UNP在國會共225席分別佔有95席及106席。第三大政黨為「泰米爾民族聯盟」（Tamil National Alliance, TNA），在國會佔有16席。",
                "financial_incoming" => null,
                "export_value" => "109.3億美元(2017年)",
                "import_value" => "211.4億美元 (2017年)",
                "export_item" =>
                    "紡織品、成衣、醫藥、茶葉、香料、橡膠製品、椰油、珠寶。",
                "import_item" =>
                    "紡織品、礦物原料、石油、食品、機械暨運輸設備。",
                "main_export_countries" =>
                    "美國(21.8%)、英國(8.3%)、印度(4.5%)、德國 (4.2%)。",
                "main_import_countries" =>
                    "印度(21.5%)、中國大陸(17.6%)、新加坡(10.1%)、阿聯(6.1%)。",
                "export_to" =>
                    "針織或鉤針織品；針織品或鉤針織品；氯乙烯或其他鹵化烯烴之聚合物；合成纖維絲紗梭織物；針織或鉤針織圈絨織物；不锈鋼扁軋製品。",
                "import_from" =>
                    "茶葉；生鮮或冷藏魚；油料種子及含油質之果實；Ｔ恤衫、汗衫及其他背心，針織或鉤針織者；胸罩、束腰等針織或鈎針織者；活性天然礦產品；男用針織或鉤針織者；寢具。",
                "foreign_relationship" =>
                    "對外奉行不結盟原則及獨立自主外交政策，積極參與區域及全球事務。近年斯國外交工作重點在推動國內各民族和解工程上尋求國際社會之理解與支持。S總統上任後，即勤訪西方國家，並繼續與中國大陸維持密切關係。",
                "foreign_policy" =>
                    "斯國於1948年獨立以來即成為大英國協之會員，1955年加入聯合國，對外奉行不結盟原則及獨立自主外交政策，積極參與區域及全球事務。斯國為國際貨幣基金會(IMF)、亞洲開發銀行(ADB)、世界貿易組織(WTO)及南亞區域合作協會(SAARC)等會員國，已與全球130餘國建立外交關係。",
                "time_range" => "與台灣時差2.5小時",
                "resident" => "駐印度代表處、駐清奈辦事處",
                "national_flag" =>
                    "http://www.mofa.gov.tw/Upload/Sites/FlagUrlLink/43e6de1d-7d59-4971-9ca1-65ce34d2e6d2.GIF",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            96 => [
                "name" => "新加坡共和國",
                "name_in_en" => "Republic of Singapore",
                "short_name" => "新加坡",
                "short_name_in_en" => "Singapore",
                "capital" => "新加坡",
                "capital_in_en" => "Singapore",
                "national_day" => "8月9日",
                "join_un_day" => "1965-09-21",
                "area_size" => "719.9平方公里",
                "geographic" =>
                    "位於馬來半島最南端，與馬來西亞、印尼共扼麻六甲海峽及南海，並為印度洋與西南太平洋的交通孔道，為歐、亞、澳海上交通的樞紐。",
                "religion" =>
                    "宗教多元,佛教及道教占43.20%,回教占14%,基督教及天主教占18.80%,印度教占5.00%,錫克教及其他宗教占0.6%,無宗教信仰者占18.5%. (2015年之15歲以上居民)",
                "bilaterial_relations" => null,
                "main_bounds" => "新加坡幣，1美元約合1.3324星元(2021年)",
                "exchange_rate" =>
                    'US$1=S$1.3517(2021年平均值)詳細匯率資訊建議至臺灣銀行（https://rate.bot.com.tw/xrt?Lang=zh-TW）或兆豐商銀（https://www.megabank.com.tw/personal/foreign-service/forex）網站查詢。',
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/8a96e810-d6e2-414d-9ddc-076e01297d01.gif",
                "is_diplomatic" => 0,
                "language" =>
                    "新加坡憲法規定，國語為馬來語，官方語言為英語，華語、馬來語及印度塔米爾語。官方文書以英語為主。",
                "main_media" =>
                    "電視：新加坡新傳媒集團(英文第5頻道/Channel 5,華語第8頻道/Channel 8、新傳媒U頻道/Channel U及亞洲新聞台/CNA等)及新加坡星和有限公司(StarHub)，提供有線電視網服務。報章：海峽時報(英文)，聯合早報(華文)、新明日報(華文)、聯合晚報(華文)等。廣播電台：958城市頻道、Yes 933頂尖流行音樂台等。",
                "population" => "568.58萬人(2021年5月)",
                "voltage" => "為220-240V, 50Hz，插座為3孔型。",
                "time_difference" => "+0:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/b8dd4903-8a47-443b-b2cb-14d93b1b866c.JPG",
                "political_system" => "責任內閣制",
                "history_intro" =>
                    "新加坡早年為英國殖民地，第二次大戰期間曾被日本占領3年。1959年新加坡成為英國的自治領，議員全部改為民選，人民行動黨在該年大選中獲得多數席次，成為執政黨迄今。1963年9月新加坡加入馬來西亞聯邦，1965年8月9日退出聯邦，成為獨立國家。",
                "parliament" => "為單一國會制,有民選議員89席,每5年改選一次.",
                "cabinet" =>
                    "由總理及部長組成,總理為內閣領袖,由總統任命國會多數黨領袖擔任,內閣部長均為國會議員.",
                "judiciary" =>
                    "有初級法院及最高法院.最高法院設大法官,上訴法官及法官.",
                "headman" => "總統:哈莉瑪(Halimah Yacob)女士",
                "fa_minister" => "維文(Vivian Balakrishnan)",
                "major_political_parties" =>
                    '人民行動黨(People\'s Action Party, PAP)及工人黨(Labor\'s Party).',
                "financial_incoming" =>
                    "財政收入1,007億星元(2021年)，財政支出1,063億星元(2021年)",
                "export_value" => "4,543.03億美元(2021年)",
                "import_value" => "4,038.48億美元(2021年)",
                "export_item" =>
                    "電子產品、石油及煉製品、機械產品、通訊設備、科學儀器、有機化學品及塑膠產品",
                "import_item" =>
                    "電子產品、石油及煉製品、機械產品、通訊設備、科學儀器、有機化學品、天然氣及香氛清潔產品",
                "main_export_countries" =>
                    "中國、香港、馬來西亞、美國、印尼、臺灣、韓國、日本、越南、泰國",
                "main_import_countries" =>
                    "中國、馬來西亞、臺灣、美國、韓國、日本、印尼、阿拉伯聯合大公國、法國、德國",
                "export_to" => "257.2億美元(2021年)",
                "import_from" => "120.7億美元(2021年)",
                "foreign_relationship" =>
                    "廣結善緣,積極結交與國,活躍於國際社會,熱衷參與多邊組織,並積極推動簽署雙邊與多邊貿易協定.",
                "foreign_policy" =>
                    "奉行獨立自主外交政策,強調以國際法解決國際爭端,支持東南亞國協在東南亞區域所扮演的核心角色.",
                "time_range" => "與我國無時差。",
                "resident" => "駐新加坡代表處",
                "national_flag" =>
                    "以中間水平分隔為上紅下白兩塊面積相等的部分.左上方有5顆小白星圍繞一個白色新月,國旗上的紅色代表博愛與平等,白色代表純潔及美德.新月代表剛興起的新國家,5個白星分別代表新加坡的建國理念:民主,和平,進步,正義及平等.",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            97 => [
                "name" => "日本國",
                "name_in_en" => "Japan",
                "short_name" => "日本",
                "short_name_in_en" => "Japan、Nippon",
                "capital" => "東京都",
                "capital_in_en" => "TOKYO",
                "national_day" => "2月11日（建國紀念日）",
                "join_un_day" => "1956年12月18日",
                "area_size" => "377,976平方公里",
                "geographic" =>
                    "位於亞洲大陸東北岸外側，主要由本州、四國、九州、北海道四大島構成，呈弧狀分布，南北細長，綿延約3,000公里。",
                "religion" => "神道與日本佛教是日本的主要宗教。",
                "bilaterial_relations" => null,
                "main_bounds" => "日圓（YEN）",
                "exchange_rate" =>
                    "1美元約133.19日圓（2023年3月中旬），1台幣約4.33日圓（2023年3月中旬），詳細匯率資訊建議至臺灣銀行(https://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀（https://www.megabank.com.tw/personal/foreign-service/forex)",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/db6cdaa9-3058-467f-a8c2-3e0488e7deb4.gif",
                "is_diplomatic" => 0,
                "language" => "日語",
                "main_media" =>
                    "日本是世界報紙大國，報紙在日常生活中擁有很高的地位，現在日本共有五家全國性報紙，分別是《讀賣新聞》、《朝日新聞》、《每日新聞》、《日本經濟新聞》和《產經新聞》。日本是公共媒體與商業媒體並存的體制。公共放送NHK對全國進行廣播。由於法令限制，日本沒有全國性的民營電視台，但形成了以TBS電視台為核心的JNN；以日本電視台為核心的NNN•NNS；以富士電視台為核心的FNN•FNS；以朝日電視台為核心的ANN和以東京電視台為核心的TXN六家全國性電視網。",
                "population" => "約1億2,484萬人（2022年12月概算值）",
                "voltage" => "100V 〈東日本50Hz、西日本60Hz〉",
                "time_difference" => "+1:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/6e300e66-8db3-4cc1-99a7-0a0998c0b399.jpg",
                "political_system" => "君主立憲制、三權分立制",
                "history_intro" =>
                    "日本自稱立國至今兩千六百餘年，經明治維新及甲午、日俄戰爭後躋身世界強國之林，第二次世界大戰戰敗後受同盟國軍隊短暫佔領，並在盟軍總司令部指導下重訂憲法，明示「主權在民，放棄戰爭」。1950年韓戰爆發後，日本在美國扶植下，經濟力量逐漸強大，目前為先進七國（G7）成員之一，在國際上扮演重要角色。",
                "parliament" =>
                    "參眾兩院制，由國民直選產生。1.眾議院議員名額465席（區域289席，比例代表176席）。2.參議院名額248席（區域148席，比例代表100席）。",
                "cabinet" =>
                    "由內閣總理大臣與19名國務大臣組成。總理大臣由國會議員提名，經國會表決而選出（通常為最大黨黨魁），呈請日皇任命。國務大臣由總理大臣任免，半數以上須自國會議員中選任，且均須為文人。",
                "judiciary" =>
                    "司法權屬於最高法院與依法設立之各級法院，採三級三審制。法官依法獨立審判，除受彈劾之外，不得罷免。最高法院由15名法官組成，設長官（院長）乙人，由內閣提請日皇任命；法官14人，由內閣任命後交付國民審查，即公民投票複決（於任命後首次眾議院選舉時同時舉辦），倘獲通過，在每10年後之初次眾議院選舉時再次接受複決，倘多數票決罷免則應予免職。最高法院有違憲審查權，係決定法律、命令、規則或處分是否合憲之終審法院（日本無專設憲法法院或法庭）。",
                "headman" =>
                    "德仁（NARUHITO，日皇）。政府首長為內閣總理大臣（首相）岸田文雄。",
                "fa_minister" => "林芳正",
                "major_political_parties" =>
                    "自由民主黨、公明黨、立憲民主黨、日本維新之會、國民民主黨、日本共產黨等。",
                "financial_incoming" =>
                    "日本令和4年度(2022.4.1~2023.3.31)預算已於2022年3月22日獲國會通過，總額達107兆5,964億日圓。",
                "export_value" => 'US$7,516億(2022)',
                "import_value" => 'US$9,027億(2022)',
                "export_item" =>
                    "汽車、半導體等電子零件、汽車零件、鋼鐵、發動機、半導體等製造設備、塑膠、科學光學儀器、電路板等機器、有機化合物",
                "import_item" =>
                    "原油、液化天然氣、衣類及其付屬品、通信機、醫藥品、半導體等電子零件、煤炭、石油製品、電子計算機(含周邊配備)、非鐵金屬",
                "main_export_countries" =>
                    "中國大陸、美國、台灣、韓國、香港、泰國、德國、新加坡、越南、馬來西亞",
                "main_import_countries" =>
                    "中國大陸、美國、澳洲、台灣、韓國、沙烏地阿拉伯、阿拉伯聯合大公國、泰國、德國、越南",
                "export_to" => 'US$336.1億(2022)',
                "import_from" => 'US$546.3億(2022)',
                "foreign_relationship" =>
                    "目前日本對外承認之國家共195國，並在153個國家設有大使館(另有42兼館)、67個城市設有總領事館、10個國際組織設有代表部(另有1國際組織兼館)、19個城市設有領事事務所等。",
                "foreign_policy" =>
                    "日本外交七大工作重點為:(1)強化安全保障因應能力；(2)推動「自由開放印度太平洋」(FOIP)；(3)增進與鄰國關係；(4)強化區域外交；(5)擴大自由公正經濟秩序；(6)因應全球共同議題； (7)強化綜合外交力",
                "time_range" => "快1小時",
                "resident" => "東京、橫濱、大阪、福岡、那霸、札幌",
                "national_flag" =>
                    "日章旗（白底紅太陽），縱橫比例為2:3，日章直徑為縱向長度五分之三，圓心在國旗正中央。",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            98 => [
                "name" => "智利共和國",
                "name_in_en" => "Republic of Chile",
                "short_name" => "智利",
                "short_name_in_en" => "Chile",
                "capital" => "聖地牙哥",
                "capital_in_en" => "Santiago",
                "national_day" => "9月 18日",
                "join_un_day" => "1945年(聯合國創始會員國)",
                "area_size" =>
                    "本土756,626 km²，另宣稱擁有南極地區1,250,000 km²",
                "geographic" =>
                    "位於南美洲之西南方，西鄰太平洋，北邊與秘魯為界，東邊與阿根廷及玻利維亞接壤",
                "religion" => "天主教(59%)、基督教(17%)",
                "bilaterial_relations" => null,
                "main_bounds" => "披索(Peso)",
                "exchange_rate" => 'US$1=803 pesos chilenos (2023年4月4日)',
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/1121fc7e-ee8e-4313-9ec1-303db57066fe.GIF",
                "is_diplomatic" => 0,
                "language" => "西班牙語",
                "main_media" =>
                    "電子媒體：Canal 13, TVN, MEGA, Chilevision, CNN Chile, Radio Biobio；平面媒體：El Mercurio, La Tercera；電子報：El Mostrador, Publimetro, Infogate。",
                "population" => "約1,900餘萬人",
                "voltage" => "220V",
                "time_difference" => "-12:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/536c2215-d260-4d3d-abc4-c61043b2eeb5.JPG",
                "political_system" =>
                    "採總統制，總統直接民選，任期4年，未設副總統職位，政體為行政、立法、司法三權分立。",
                "history_intro" =>
                    "1450年時智利北部由印加帝國統治，南部為土著阿拉烏柯人佔據。西班牙征服秘魯後，於1541年南下佔領至智利中部，並逐漸平服南部土著。1810年智人在奧希金斯領導下發動革命宣佈獨立，將西班牙人驅逐。1837-38年及1879-83年曾兩度戰勝秘魯與玻利維亞聯軍，後者即所謂「太平洋戰爭」，亦稱「硝石戰爭」，此役秘、玻二國戰敗，秘魯將南部達拉帕卡（Tarapacá）一帶地方割予智利，玻利維亞亦喪失其唯一濱海省份，包括唯一重要港口安托法加斯大（省港同名，Antofagasta），玻國自此成為一內陸國家。1970年大選，左派人民陣線阿燕德（Salvador Allende）獲選執政，實施馬克思主義及國有化政策。1973年由皮諾契特(Augusto Pinochet)為首之陸海空警四軍聯合發起政變，推翻阿燕德總統並成立軍政府統治期長達16年。1989年12月智利舉辦回歸民主體制後首次大選，「基民黨」艾文（Patricio Aylwin）獲勝，並於次年3月就職。1993年12月大選，「基民黨」候選人傅雷（Eduardo Frei Ruiz-Tagle）當選總統，並於次年3月11日就職。2000年1月「社會黨」之拉哥斯（Ricardo Lagos Escobar）當選總統，並於同年3月11日就職。2006年1月「社會黨」之前衛生、國防部長芭契莉（Michelle Bachelet）當選總統，成為智利建國195年來首位女性總統。2010年1月右派聯盟皮涅拉（Sebastián Piñera）當選總統，結束左派聯盟長達20年執政。2013年12月左派聯盟之社會黨籍前總統芭契莉再度當選總統，左派聯盟重新執政。2017年12月右派聯盟之前總統皮涅拉再次當選總統，並於2018年3月11日上任，右派聯盟重新執政。2021年12月左派聯盟之柏瑞克(Gabriel Boric) 當選總統，並於2022年3月11日就任。",
                "parliament" =>
                    "國會採兩院制，國會由參、眾兩議院組成，參院由50名參議員組成，任期8年；眾議院由155名眾議員組成，任期4年，均為直接民選。",
                "cabinet" =>
                    "內閣閣員由總統直接任命。以內政部為首席部會，總統出國或因故未能視事時，一般指派內政部長代理國政。",
                "judiciary" =>
                    "司法權屬於各級法院，司法獨立，以最高法院為最高司法機關。",
                "headman" => "柏瑞克(Gabriel Boric)",
                "fa_minister" => "Alberto van Klaveren",
                "major_political_parties" =>
                    "主要政黨為「右派聯盟」(Chile Vamos)，由國家革新黨RN、獨立民主聯盟UDI、政治進化黨Evópoli等組成 ；「中間偏左聯盟」（Unidad Constituyente)，由基督民主黨PDC、社會黨PS、民主黨PPD、自由黨PL、CIU及NT等政黨組成及「極左派」(Apruebo Dignidad) ，由民主改革黨DR及共產黨(PC)等9個政黨及社運團體組成。",
                "financial_incoming" => "收入923億美元; 支出879億美元(2022年)",
                "export_value" => "978億美元(2022年)",
                "import_value" => "987億美元(2022年)",
                "export_item" =>
                    "銅礦石、精煉銅、碳酸鋰、冷凍鮭魚、櫻桃、碘、鉬礦石及精砂、化學木漿、鐵礦石及精砂、未精煉銅",
                "import_item" =>
                    "石化產品、(電動)汽車、煤磚、電話(手機)、貨車、石油氣、石油原油、硫酸、玉蜀黍、筆電",
                "main_export_countries" =>
                    "中國、美國、日本、南韓、巴西、秘魯、墨西哥、荷蘭、印度、台灣。",
                "main_import_countries" =>
                    "中國、美國、巴西、阿根廷、德國、日本、墨西哥、西班牙、秘魯、哥倫比亞。",
                "export_to" =>
                    "我國對智利輸出額：2.42億美元(2022年)自行車、電動自行車、發泡塑膠材料、螺絲螺帽、汽車零配件、護目鏡、紡織品、自行車及零配件、通訊零件、五金手工具",
                "import_from" =>
                    "我國自智利輸入額：16.66億美元(2022年)精煉銅、銅礦石、木漿、冷凍鮭魚、櫻桃、蘋果、葡萄、鐵廢料。",
                "foreign_relationship" =>
                    "聯合國創始會員國之一，曾五度擔任安理會非常任理事國。",
                "foreign_policy" =>
                    "智利為聯合國創始會員國，其國際行為以國際法為依歸。智利積極參與區域統合及對話，與墨西哥、哥倫比亞及秘魯成立太平洋聯盟（Alianza del Pacífico），並加入美洲國家組織、里約集團、伊比利國家元首對話、南方共同市場（MERCOSUR）、亞太經濟合作會議（APEC）、南美洲進步論壇（PROSUR）、經濟合作開發組織（OECD)、跨太平洋夥伴全面進步協定(CPTPP；註: CPTPP法案已於上(2022)年10月獲智利國會批准，並於同年12月22日正式通知存放國紐西蘭，將於本(2023)年2月底生效)。智利為全球對外簽署自由貿易協定(FTA)最多的國家之一，對外共簽有31個自由貿易協定，涵蓋65個國家與經濟體。智利於2020年6月12日與紐西蘭、新加坡共同簽署數位經濟夥伴關係協定(DEPA)，並於2021年10月批准。智利總統柏瑞克(Gabriel Boric)於2022年3月18日簽署「Escazú環境協定」，並於5月批准，表達其政府對環境外交議題之重視。柏瑞克(Gabriel Boric)總統於2022年4月3日偕內閣5位部長、參眾兩院議長、議員代表等一行赴阿根廷訪問，為其上任後首次出訪，盼在天然氣能源、綠能及潔能議題上將續與阿根廷交流合作。柏瑞克(Gabriel Boric)總統於2022年6月6日至10日赴美國出席「美洲高峰會議」(Cumbre de las Américas)，並會晤美國總統拜登(Joe Biden)。智利倡議並與9個國家共同簽署保護海洋協定。柏瑞克(Gabriel Boric)總統於2022年11月中旬赴泰國出席APEC領袖高峰會議，並與中國、日本等經濟體代表會晤交流。柏瑞克(Gabriel Boric)總統於2023年3月下旬赴多明尼加參加伊比利美洲元首峰會，呼籲區域領袖重視移民及人權等議題。",
                "time_range" =>
                    "自2023年4月1日晚上12時（午夜）起智利進入冬令時間，臺灣較智利快12小時，臺灣時間減12小時即為智利時間。",
                "resident" => "我國在智利首都聖地牙哥設有代表處。",
                "national_flag" =>
                    "智利國旗左上角為藍色正方形（代表天空），中有白五角星（代表進步與榮譽的指引），上方餘為白色（代表安地斯山脈），下為紅色（代表獨立所流的血），於1817年10月18日啟用。",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            99 => [
                "name" => "朝鮮民主主義人民共和國",
                "name_in_en" => 'Democratic People\'s Republic of Korea',
                "short_name" => "朝鮮、北韓",
                "short_name_in_en" => "DPRK、North Korea",
                "capital" => "平壤",
                "capital_in_en" => "Pyongyang",
                "national_day" => "9月9日",
                "join_un_day" => "1991年9月17日",
                "area_size" => "122,762平方公里",
                "geographic" => "位於亞洲大陸東北部的韓半島北部",
                "religion" => "無宗教自由",
                "bilaterial_relations" => null,
                "main_bounds" => "WON",
                "exchange_rate" =>
                    "詳細匯率資訊建議至臺灣銀行（https://rate.bot.com.tw/xrt?Lang=zh-TW）或兆豐商銀（https://www.megabank.com.tw/personal/foreign-service/forex）網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/6ca7fa82-7ba4-442b-a8b4-0f65d45987ff.gif",
                "is_diplomatic" => 0,
                "language" => "韓語",
                "main_media" => "勞動新聞，朝鮮中央放送，朝鮮中央電視台。",
                "population" => "2,536萬人(2016年)",
                "voltage" => "220V",
                "time_difference" => "+1:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/53234144-8800-465b-b147-aa211e6ff837.jpg",
                "political_system" => "蘇維埃制，憲法於1948年生效。",
                "history_intro" =>
                    "1945年8月15日，日本向同盟國投降，美國與蘇聯派遣軍隊分別進駐南北韓，蘇聯在其所占領的韓半島北部建立軍政府，於1948年9月9日支持金日成政權成立朝鮮民主主義人民共和國。",
                "parliament" =>
                    '最高人民會議(Supreme People\'s Assembly)為國家最高權力機關,其常任委員會委員長對外代表國家,任期5年.',
                "cabinet" =>
                    "內閣為國家最高行政執行機關,下轄38個省,委員會,部,院,局等單位,任期5年.",
                "judiciary" => "設有中央裁判所,地方裁判所及人民裁判所.",
                "headman" => "最高人民會議常任委員會委員長金永南",
                "fa_minister" => "李勇浩",
                "major_political_parties" =>
                    '朝鮮勞動黨(Korean Worker\'s Party)',
                "financial_incoming" => "略",
                "export_value" => "28.2億美元",
                "import_value" => "37.1億美元",
                "export_item" => "煤炭、紡織品、礦產等",
                "import_item" => "石油、機械設備、電子等",
                "main_export_countries" =>
                    "中國大陸、南韓、孟加拉、印度、泰國、巴基斯坦等",
                "main_import_countries" =>
                    "中國大陸、南韓、俄羅斯、泰國、印度、新加坡",
                "export_to" => "45,495美元(2017年)",
                "import_from" => "2,704,225美元(2017年)",
                "foreign_relationship" => "有邦交國家168個",
                "foreign_policy" =>
                    "發展基於自主,和平,親善等理念的對外政策,促進與尊重北韓自主權的資本主義國家的善鄰及友好關係",
                "time_range" => "較臺灣快1小時",
                "resident" => "無",
                "national_flag" =>
                    "紅色為革命,兩條細白線象徵純潔,上下藍代表和平,主權及友誼.",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            100 => [
                "name" => "東加王國",
                "name_in_en" => "Kingdom of Tonga",
                "short_name" => "東加",
                "short_name_in_en" => "Tonga",
                "capital" => "努瓜婁發",
                "capital_in_en" => "Nukuʻalofa",
                "national_day" => "11月4日(又稱憲法日)",
                "join_un_day" => "1999年9月14日",
                "area_size" => "748平方公里；水域面積25.9萬平方公里",
                "geographic" =>
                    "位於南緯15至23度、西經173至177度間，即南太平洋南端，南回歸線之北側，國際換日線之西側",
                "religion" => "基督教(最大宗], 摩門教, 天主教",
                "bilaterial_relations" => null,
                "main_bounds" => "東加幣(TOP)，1美元約可兌換2.36東加幣",
                "exchange_rate" =>
                    "幣值:東加幣(TOP)，1美元約可兌換2.36東加幣，惟須視匯率浮動情況而定。詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢」。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/c73eed75-a806-470d-8cba-6b2d7a0ff95b.gif",
                "is_diplomatic" => 0,
                "language" => "英語、東加語",
                "main_media" =>
                    "2家國營電視台, 2家民營電視台; 2家國營廣播電台, 3家民營廣播電台",
                "population" => "106,759 (2021年)",
                "voltage" => "220V-240V，插頭為八字型（與澳、紐相同）。",
                "time_difference" => "+5:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/7bf44cac-0bb4-4b5d-a860-12506fd6e271.JPG",
                "political_system" => "君主立憲制",
                "history_intro" =>
                    "3000多年前已有人在此定居。約從公元950年起至今經歷4個王朝，現為1845年喬治·圖普一世建立的陶法阿豪王朝。 17、18世紀，荷蘭、英國、西班牙探險家先後抵達。 19世紀基督教傳入。 1900年成為英國保護國。 1970年6月4日獨立，並成為大英國協成員。",
                "parliament" =>
                    "一院制、26席，其中17席為民選議員、由普選產生，9席為貴族議員、由33位貴族選舉產生。議長由議員推選，經國王任命。本屆議會於2021年11月18日選舉產生。現任議長法塔菲希·法卡法努阿(Fatafehi Fakafanua)。",
                "cabinet" =>
                    '包括首相、副首相及内閣大臣组成。國會自26名民選及貴族議員中選出候任首相，經國王正式任命為首相，繼由首相組閣（首相得任命社會賢達至多4人擔任內閣部長）。現任首相兼國防、教育部長希奧希•索瓦蘭尼（Siaosi Sovaleni），財政部長（Tiofilusi Tiueti），外交暨旅遊部長部長費基塔•烏托伊卡馬努(Fekitamoeloa \'Utoikamanu)，勞工暨貿易部長維利亞米•拉圖(Viliami Latu)，土地、測量暨自然災害部長圖伊阿菲圖勳爵（Lord Tu\'i\'afitu），司法部長薩繆•瓦普魯（Samiu Vaipulu），基礎建設部長先分提尼•圖穆阿（Sevenitini Toumo\'ua），內政部長（Lord Vaea），漁業部長塞米西•法卡豪（Semisi Fakahau），衛生部長賽亞•皮卡拉（Saia Piukala），農業森林暨食品部長佛黑勳爵(Lord Fohe)。',
                "judiciary" =>
                    '設有最高法院, 上訴法院, 土地法院及地方法院。最高法院大法官由國王任命。最高法院現任首席大法官為波森（Michael H. Whitten QC）。現任檢察總長為佛婁摩埃土依（Linda Folaumoetu\'i）。',
                "headman" => "圖包六世（Tupou VI）國王，2012年3月18日繼位。",
                "fa_minister" => "Fekitamoeloa ʻUtoikamanu",
                "major_political_parties" =>
                    "(1)人權暨民主運動，1992年成立（2010年該黨分裂後、另一派组「友誼之島民主黨」）。(2) 永續建設國家黨，2007年8月成立。(3) 人民民主黨，2008年4月成立。(4) 友誼之島民主黨，2010年9月成立。友誼之島民主黨，2010年9月成立，領袖為薄熙華（Samuela Akilisi Pohiva），該黨在2017年11月大選贏得17席民選議員中之14席(另3席為無黨籍贏得)，國會17個平民席次中，人民黨佔7席，友誼之島民主黨佔9席，獨立席次1席。",
                "financial_incoming" =>
                    "2021-2022財務年度財政收入4.67億東加幣，支出4.15億東加幣。",
                "export_value" => "約3586萬東加幣(2021年)",
                "import_value" => "5.58億東加幣(2021年)",
                "export_item" => "南瓜，魚，香草豆，根莖作物",
                "import_item" => "食品，機械與交通設備，燃料，化工品",
                "main_export_countries" =>
                    "2020年：美國（312 萬）、紐西蘭（208 萬）、澳大利亞（157 萬）、韓國(131 萬元）及日本（54.3 萬）。",
                "main_import_countries" =>
                    "2020年: 紐西蘭（5190 萬）、中國（3370 萬）、澳大利亞（1290 萬）、美國（1190 萬）及日本（660 萬）",
                "export_to" => "2,220,241美元(2022年)",
                "import_from" => "126,427美元(2022年統計)",
                "foreign_relationship" =>
                    "東加與紐西蘭、澳大利亞、美國、日本與歐盟等密切合作，為主要貿易對象及發展合作夥伴。",
                "foreign_policy" =>
                    "東加與60多個國家建立了外交關係，澳大利亞，紐西蘭在東加設高專署，中國，日本在東加設有大使館，韓國，荷蘭，德國，瑞典，法國，芬蘭在東加設有名譽領事。東加是聯合國，大英國協，太平洋島國論壇，太平洋共同體，國際民航組織，亞洲開發銀行，世界銀行，國際貨幣基金組織，世界貿易組織，國際勞工組織等成員國。東加關心地區安全與穩定，支持美澳紐軍事聯盟;積極參加區域合作。",
                "time_range" => "時區：UTC+13 比台灣時間早5小時",
                "resident" => null,
                "national_flag" =>
                    "在一個白色矩形的紅色大提升側的角落裡，紅色的大膽的紅十字; 十字架反映了東加根深蒂固的基督教; 紅色代表基督的血和他的犧牲; 白色代表純潔",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            101 => [
                "name" => "東帝汶民主共和國",
                "name_in_en" => "Democratic Republic of Timor-Leste",
                "short_name" => "東帝汶",
                "short_name_in_en" => "East Timor、Timor-Leste",
                "capital" => "帝利",
                "capital_in_en" => "Dili",
                "national_day" => "11月 28日",
                "join_un_day" => "2002年10月1日",
                "area_size" => "15,007 平方公里",
                "geographic" =>
                    "帝汶島位於印尼爪哇島東南方，分為西帝汶(屬印尼)與東帝汶。東帝汶南隔帝汶海與澳大利亞相望，距離澳洲北方約400公里。境內多山，沿海有平原和谷地。",
                "religion" =>
                    "98%人口信奉天主教，其餘為回教徒、新教徒、印度教及佛教。",
                "bilaterial_relations" => null,
                "main_bounds" => "美元",
                "exchange_rate" =>
                    "約為1美元兌換30元新臺幣，惟須視匯率浮動情況而定。詳細匯率資訊建議至臺灣銀行（http://rate.bot.com.tw/xrt?Lang=zh-TW）或兆豐商銀（https://www.megabank.com.tw/personal/foreign-service/forex）網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/effc27e3-07d9-49b3-b823-0bf47788f2c8.gif",
                "is_diplomatic" => 0,
                "language" => "官方語言為Tetum及葡萄牙語，英語及印尼語亦流行。",
                "main_media" =>
                    "主要報紙共有Suara Timor Lorosae、 Timor Post及 Timor Today等三家。主要電視及廣播電台有TV-TL 電台、Radio UNTAET及 Radio Falintil等。",
                "population" => "136萬人（2021）",
                "voltage" => "220V，家電用品插頭為圓形雙頭狀。",
                "time_difference" => "+1:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/9647780d-cf95-47ea-a6d4-d1e6a4ef5235.JPG",
                "political_system" =>
                    "東帝汶政體為民主共和制。依東帝汶憲法規定，總統由全民直選，任期5年。東帝汶總統為該國名義上之最高領袖，有權否決法案，而該國總理則負責國家實際行政工作。另依憲法規定，國會大選中勝選之多數黨領袖為當然總理人選，由總統任命。",
                "history_intro" =>
                    "葡萄牙在16世紀中葉將帝汶島強佔為殖民地。1859年葡方戰敗，西帝汶劃歸荷蘭。日軍於1942-1945年期間佔領葡屬帝汶，二次世界大戰結束後，東帝汶回歸葡萄牙。1975年11月28日，東帝汶宣佈獨立， 1976年印尼將東帝汶納入版圖，東帝汶發起武裝抗爭。1999年8月30日，在聯合國監督下，東帝汶舉行公民投票，78%民眾支持獨立。9月初受印尼國軍支持之反東帝汶獨立軍隊發起武裝暴動，東帝汶境内各項基礎設施破壞殆盡。1999年9月20日由澳洲領導之國際維和部隊進入東帝汶弭平戰亂。東帝汶於2002年5月20日正式宣佈獨立，成為聯合國第192個會員國。",
                "parliament" =>
                    "東帝汶國會採一院制，計有65個席次，國會議員由人民投票選出議員，任期5年。2017年7月22日東帝汶第四屆國會選舉後，國會65個席次分由「獨立革命陣線」(FRETILIN、由前總理阿爾卡帝里領導)、「全國重建大會黨」(CNRT、由前總統古斯茅領導)、「人民解放黨」(PLP)、「民主黨」(PD)及「人民團結繁榮黨」(KHUNTO)等五個主要政黨組成，但選後FRETILIN黨未依照選前共識與CNRT黨組成多數執政聯盟，總統古特雷斯任命FRETILIN黨主席阿爾卡帝里出任總理並與PD黨結盟，引起其他三黨不滿，彼時執政聯盟30席，在野陣營35席，朝小野大局面，國會議員互鬥導致政治癱瘓，無法推動急需之改革和決策，以促進該國經濟多元化發展及提升能源生產，此致使東帝汶政局陷入僵局。為解決上述僵局，時任總統古特雷斯於2018年1月26日解散國會，2018年5月12日再次舉行國會選舉(第五屆國會選舉)，最後由CNRT黨、PLP黨及KHUNTO黨組成之「改革進步聯盟」(AMP，三黨共計34席)贏得國會選舉，並由該聯盟之PLP黨主席盧亞克於同年6月宣誓出任總理。此屆國會議員任期至2023年。",
                "cabinet" =>
                    "依《憲法》規定，國會大選中勝選之多數黨領袖為總理，由總統任命。現任總理為盧亞克(Taur Matan Ruak)。總理之下設有外交、內政、國防、財政、司法、衛生、交通暨公共工程、發展暨環境、教育文化青年暨體育、農漁業暨森林、勞工暨團結、商業暨工業等12個部會，以及部長會議部及國務事務部。",
                "judiciary" => "憲法及民刑法均仿照葡萄牙法律制定。",
                "headman" =>
                    "總統：霍塔(José Ramos-Horta)總理：盧亞克(Taur Matan Ruak)",
                "fa_minister" => "阿達爾吉薩·馬尼奧(H.E. Adaljiza Magno)",
                "major_political_parties" =>
                    "獨立革命陣線(FRETILIN)、全國重建大會黨(CNRT)、人民解放黨(PLP)、民主黨(PD)、人民團結繁榮黨(KHUNTO)",
                "financial_incoming" =>
                    "財政收入3億美元；財政支出21億美元(2020年)",
                "export_value" => "2.64億美元(2020)",
                "import_value" => "6.25億美元 (2020)",
                "export_item" => "咖啡、橡膠、紫檀木及石油",
                "import_item" => "機電、礦物燃油、車輛、穀物、鋼鐵等",
                "main_export_countries" => "新加坡、德國、日本、馬來西亞",
                "main_import_countries" =>
                    "芬蘭、印尼、馬來西亞、新加坡、中國大陸",
                "export_to" =>
                    "2021年東帝汶為我國排名第115位之出口市場，出口額為1,379.63萬美元，比2020年(968萬美元)成長42.52%。",
                "import_from" =>
                    "2021年東帝汶為我第177位進口來源，進口額約20.99萬美元，比2020年(15.99萬美元)成長31.27%，我自東帝汶主要進口產品為咖啡(占我自東帝汶進口總額之99.67%)。",
                "foreign_relationship" =>
                    "東帝汶於2002年9月加入聯合國。除聯合國各相關機構外，亦為世界銀行、國際貨幣基金組織、亞洲開發銀行、國際刑事法院、國際刑警組織之會員國。東帝汶為東協之觀察員，係目前唯一尚未正式加入東協之東南亞國家。",
                "foreign_policy" =>
                    "東帝汶採行務實平衡及睦鄰之外交政策，為廣泛尋求各國之協助，除積極參與國際組織外，亦重視發展與鄰國及重要國家之關係，如印尼、澳洲、 中國大陸及東協國家等。",
                "time_range" => "GMT+9/比台灣快一小時",
                "resident" => "駐印尼代表處",
                "national_flag" =>
                    "東帝汶國旗中的紅色代表人民爭取國家自由的奮鬥，黃色大三角形代表東帝汶曾被殖民的歷史痕跡，黑色小三角形代表須被打倒的愚昧主義，白色五角星代表和平以及引導人的光芒。",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            102 => [
                "name" => "查德共和國",
                "name_in_en" => "Republic of Chad",
                "short_name" => "查德",
                "short_name_in_en" => "Chad",
                "capital" => "恩加美納",
                "capital_in_en" => 'N\'Djamena',
                "national_day" => "8月11日",
                "join_un_day" => "1960年9月20日",
                "area_size" => "1,284,000平方公里",
                "geographic" =>
                    "位於非洲中部，介於利比亞、蘇丹、中非、喀麥隆、奈及利亞及尼日之間，為一內陸國",
                "religion" => "伊斯蘭教、天主教、基督教、傳統信仰",
                "bilaterial_relations" => null,
                "main_bounds" => "中非法郎(XAF)",
                "exchange_rate" =>
                    "1美元約兌換593.08中非法郎（2022年3月）。詳細匯率資訊建議至臺灣銀行（https://rate.bot.com.tw/xrt?Lang=zh-TW）或兆豐商銀（https://www.megabank.com.tw/personal/foreign-service/forex）網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/f0e2c627-f17c-4b49-b46b-4749b9e9ad50.GIF",
                "is_diplomatic" => 0,
                "language" =>
                    "法文（官方），阿拉伯文（官方），薩拉（南方），超過120種不同的語言和方言",
                "main_media" =>
                    'RNT（查德國家廣播電台）、TVT（查德國家電視台）、 Le Progres（報紙）、Le Temps（週刊）、 N\'Djamena Hebdo（週刊）、 L\'Observateur（週刊）',
                "population" => "1,690萬人（2020年）",
                "voltage" => "220伏特",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/25bcb30b-2c29-43d0-814b-d7ba20976a07.jpg",
                "political_system" => "共和國",
                "history_intro" =>
                    "查德為內陸國，種族超過200個，語言亦有100多種，北部主要信仰伊斯蘭教，居民多以畜牧為生。南部人口較為稠密，主要信仰天主教，多為定居農民。最大種族為薩哈（Sara）族，人數約有270萬。 查德係法國在非洲最後占領之殖民地，於1960年8月11日獨立後，經常發生政爭及軍事政變。1982年6月7日，哈布瑞(Hissein Habré)取得權力，實行一黨專政，引發時任陸軍參謀長德比（Idriss Déby）上校不滿。1990年德比在法國支持下，推翻哈布瑞，成為查德新總統，惟國內仍面臨「查德民主正義運動」（MDJT）叛亂。2001年政府於同年與叛軍MDJT和談並簽署和平協議，同時與流亡海外的反對黨組織及國內在野黨舉行對話，查國一度籠罩在大和解的政治氣氛中，惟自同年3月起查政府與MDJT談判陷入僵局，5月談判終於破裂，查北戰事再起，迄2002年始徹底掃平。自2003年起，查德與蘇丹因達富爾(Darfour)問題關係陷入緊張。2006年4月，查德叛軍攻擊查京，但遭查德政府軍擊退。2008年及2019年叛軍再次成功進入查京恩加美納，試圖推翻德比總統政權未果。",
                "parliament" => "國會共188席，由人民直選產生，任期4年。",
                "cabinet" => "總理為Albert Pahimi Padacké",
                "judiciary" => "最高法院、上訴法院、初審法院",
                "headman" => "Mahamat Idriss Déby",
                "fa_minister" => "Chérif Mahamat Zene",
                "major_political_parties" =>
                    "愛國拯救運動黨(MPS)、共和國行動陣線(FAR)、民主進步全國聯盟(RNDP)、發展革新全國聯盟(UNDR)、革新民主聯盟(UDR)",
                "financial_incoming" =>
                    "政府財政預算20.21億美元，總支出22.95億美元，外債為42.78億美元(2020年)。",
                "export_value" => "28.53億美元 (2020年)",
                "import_value" => "23.31億美元 (2020年)",
                "export_item" => "石油、牲口、棉花、芝麻、阿拉伯樹膠、乳油木果",
                "import_item" => "機械及運輸工具、工業用品、食品、紡織品",
                "main_export_countries" =>
                    "美國、中國、荷蘭、阿拉伯聯合大公國、印度",
                "main_import_countries" =>
                    "中國、喀麥隆、法國、美國、印度、塞內加爾",
                "export_to" => "64,613美元 (2020年)",
                "import_from" => "221,709,183美元 (2020年)",
                "foreign_relationship" =>
                    "查德為一內陸國，內部穩定與周邊國家息息相關。查德為非洲聯盟和平與安全委員會成員，對沙哈拉沙漠地區安全、利比亞南部區域穩定、達爾富危機、蘇丹南部獨立問題與博科聖地組織等問題特別關切。目前查德與區域國家合作共組11,000人員之聯軍，以恩加美納為指揮中心，繼續對抗博科聖地。",
                "foreign_policy" =>
                    "自德比總統上任以來，積極藉由訪問，加強與鄰近國家的經貿合作，亦致力於發展與中國大陸及利比亞的經貿關係。",
                "time_range" => "較台灣慢7小時",
                "resident" =>
                    "我在該國未設處，該國事務由我駐法國台北代表處兼轄。",
                "national_flag" =>
                    "藍色、金色和紅色三個相等的垂直帶；國旗將藍色和紅色的法國（前殖民地）色彩與泛非色彩的紅色和黃色（金色）相結合；藍色象徵著相對充足的天空，希望和國家的南部；黃金代表著太陽，以及該國北部的沙漠；紅色代表進步，團結和犧牲",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            103 => [
                "name" => "柬埔寨王國",
                "name_in_en" => "Kingdom of Cambodia",
                "short_name" => "柬埔寨",
                "short_name_in_en" => "Cambodia",
                "capital" => "金邊",
                "capital_in_en" => "Phnom Penh",
                "national_day" => "11月9日",
                "join_un_day" => "1955年12月14日",
                "area_size" => "18 萬 1,035 平方公里",
                "geographic" =>
                    "柬埔寨位於中南半島，北界寮國，西北與泰國接壤，東南與越南為鄰，西南濱海，其南部隔暹羅灣與馬來西亞遙遙相望。全境大致為一碟狀盆地，三面為丘陵與山脈環繞，中央為一廣大富庶平原，由湄公河及其支流沖積而成，占全國面積四分之三以上。",
                "religion" =>
                    "柬埔寨人民信仰上座部佛教(小乘佛教)者占全國人口90%，華僑則信仰大乘佛教，天主教徒大部分為越南裔，占族與馬來人則多信仰回教，信仰回教人口約有40萬人。",
                "bilaterial_relations" => null,
                "main_bounds" => "柬幣瑞爾(Riel)，柬國境內美金亦通用。",
                "exchange_rate" =>
                    "1美元對4,013瑞爾(2022年3月7日 )，最新匯率建議至柬埔寨國家銀行(https://www.nbc.org.kh )網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/9792290b-44f1-4085-8be6-1637507cba0a.gif",
                "is_diplomatic" => 0,
                "language" => "高棉語(Khmer)為官方語言。",
                "main_media" =>
                    "柬埔寨主要有電視台17家及有線電視台2家。華文報目前有「柬中時報」及「柬華日報」，報社言論立場均親中國。英語報則有「Khmer Times」、「The Phnom Penh Post」及「Cambodia Daily」。",
                "population" => "約1,710萬(2022年3月)",
                "voltage" => "220V",
                "time_difference" => "-1:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/683b7f0a-17bb-44cf-8743-3832e22f2448.JPG",
                "political_system" => "政體：君主立憲。",
                "history_intro" =>
                    "柬埔寨為中南半島古國，有兩千年以上之歷史，於 9 世紀至 15 世紀出現吳哥(Angkor)王朝，國勢鼎盛，文化燦爛，版圖包括今日柬埔寨全境以及泰、寮、越三國之部分地區。15 世紀後國勢衰敗，政治經濟中心則逐漸從吳哥轉移至金邊，1863 年後淪為法國保護國，1953 年 11 月 9 日脫離法國獨立，成立柬埔寨王國，其後政權迭易，內戰不已。",
                "parliament" =>
                    "立法方面分為國會（國民議會）及參議院，前者為實際立法機關，議員人數為125名。2018年7月29日柬國舉行第六屆國會大選，人民黨贏得所有議員席位，現由韓桑林擔任國會主席（Heng Samrin）。參議院目前計有參議員62席，2018年2月25日經由11,572名柬全國鄉分區理事會成員及123名國民議會議員投票選出58席，另4席由國王及國民議會任命，任期6年，由賽沖擔任參議院主席。",
                "cabinet" =>
                    "行政部門以總理為首，下有10名副總理、國務部長(senior minister,類似我國政務委員)，其轄下包括內閣事務部(或部長委員會, Council of Ministers)、國防、內政、外交與國際合作、財經、農林漁業、農村發展、商業、工業礦產與能源、計劃、教育青年暨體育、社會福利、國家基礎建設規劃、環境、水源與氣象、新聞、司法、國會聯絡與監察、郵電、衛生、公共工程與運輸、文化與藝術、旅遊、宗教、婦女事務、勞工與職業培訓等部會。",
                "judiciary" =>
                    "柬國法院為地方法院、上訴法院及最高法院等三級。柬國無獨立檢察院，各級法院設檢察官，行使檢察工作。",
                "headman" => "西哈莫尼國王(Norodom Sihamoni)",
                "fa_minister" => "巴速坤(Prak Sokhonn)",
                "major_political_parties" =>
                    "柬埔寨人民黨一黨獨大，其他政黨於國會並無任何議員席位。目前主要小黨有奉辛比克黨（Funcinpec Party）、柬埔寨青年黨、高棉經濟發展黨等。",
                "financial_incoming" =>
                    "財政收入57.18億美元(2020年) 財政支出55.81億美元(2020年)",
                "export_value" => "172億美元(2020年)",
                "import_value" => "186億美元(2020年)",
                "export_item" => "成衣、鞋類、稻米、自行車、電機零件、橡膠",
                "import_item" => "布料、車輛、石油、食品及飲料、建築材料",
                "main_export_countries" => "美國、日本、德國、中國、英國",
                "main_import_countries" => "中國、泰國、越南、日本、臺灣",
                "export_to" => "8億5,727萬美元(2021)",
                "import_from" => "1億1,869萬美元(2021)",
                "foreign_relationship" =>
                    "柬國奉行獨立、和平、永久中立和不結盟之外交政策，反對外國侵略及干涉，在和平共處五項原則基礎上，與所有國家建立與發展友好關係。主張相互尊重國家主權，通過和平談判解決與鄰國邊界及國與國之間之爭議。洪森政府除與中國保持密切往來外，並積極參加國際事務，與世界各國逐步建立良好互動關係。",
                "foreign_policy" =>
                    "1997年柬國內戰後百廢待舉，為爭取外援發展經濟，洪森積極參與國際事務，並運用裁軍及審判紅高棉議題逐步建立良好形象，近年來，洪森政府除與中國保持密切關係外，並與各國建立良好互動，目前柬國已加入聯合國及東南亞國協等國際組織。但2017年9月洪森逮捕救國黨主席金速卡，與美國歐盟關係緊張。",
                "time_range" => "晚台灣1小時",
                "resident" => "相關業務由我駐胡志明市辦事處兼轄",
                "national_flag" =>
                    "柬埔寨自1993年開始使用目前國旗，以白、紅及藍色為主色，中間白色建築為吳哥窟，白色象徵佛教，紅色意指人民，藍色代表王室。",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            104 => [
                "name" => "格瑞那達",
                "name_in_en" => "Grenada",
                "short_name" => "格瑞那達",
                "short_name_in_en" => "Grenada",
                "capital" => "聖喬治市",
                "capital_in_en" => 'St. George\'s',
                "national_day" => "2月 7日",
                "join_un_day" => "1974年9月17日",
                "area_size" => "約344平方公里",
                "geographic" =>
                    "格瑞那達係加勒比海東部小安地列斯群島南端之一島國，位於北緯 12 度 7分、西經 61 度 40 分，在千里達以北約 90 英里，包括格瑞那達本島及卡里亞固島與小馬丁尼克島等三大島，境內多山。",
                "religion" => "基督教、天主教及其他。",
                "bilaterial_relations" => null,
                "main_bounds" =>
                    '東加勒比海幣（Eastern Caribbean Dollar, EC$），簡稱東加幣。',
                "exchange_rate" => "採固定匯率制，1美元等於2.6882元東加幣。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/70f5bc32-74e6-46ba-851b-2c8f9eb69982.GIF",
                "is_diplomatic" => 0,
                "language" => "英語",
                "main_media" =>
                    "格瑞那達政府與千里達Caribbean Communication Network合資經營之Grenada Broadcasting Network旗下有一電視台及二家廣播電台；另平面及網路媒體有The Grenadian Voice、NOW Grenada、The Informer及New Today等。",
                "population" => "約113,000人(2021年)",
                "voltage" => "220V",
                "time_difference" => "-12:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/a69c37bf-49b1-4f1c-804c-e63de02dfaea.jpg",
                "political_system" =>
                    "採英國式內閣制，奉英國國王為元首，並由國王任命總督為其代表，行政首長為總理。國會為兩院制，參議院由 13 位參議員組成，參議長及另 9 位參議員由總理(執政黨)推薦，3 位由反對黨推薦，由總督任命。眾議院 15 位眾議員分別由 15 個單一選區選出，任期5年。",
                "history_intro" =>
                    "1498年8月15日哥倫布航抵格瑞那達，命名為CONCEPTION； 1609年由英國佔領，1650年落入法國之手，1762年英國奪回，1779年法國再度占領，迄1783年法國戰敗簽訂凡爾賽條約後再回到英國版圖； 1958年起漸獲得自治，至1967年除外交、國防外已獲完全自治，並成為大英國協之仲會員國，1974年2月7日正式獨立，成為大英國協會員。",
                "parliament" =>
                    "分參、眾兩院。參議院(SENATE)有參議員13人，由總督任命組成；眾議院(HOUSE OF REPRESENTATIVES)有眾議員15人，由人民選舉產生，任期5年。",
                "cabinet" =>
                    "英國式內閣制，總督為國家虛位元首，行政首長為總理，現任總理為Keith Mitchell",
                "judiciary" =>
                    "原有自身之司法體系，自1991年8月15日起加入東加勒比海國家組織之體系，即在格國僅設地方法院，另有簡易裁判法院地方法院受設在聖露西亞之東加勒比海最高法院及高等法院之管轄。",
                "headman" =>
                    "奉英國國王查爾斯三世為國家元首，總督葛瑞納德(Cecile La Grenade)，總理宓契爾(Keith Mitchell)。",
                "fa_minister" => "喬瑟夫(Oliver Joseph)",
                "major_political_parties" =>
                    "執政黨為新國家黨（NNP），在野黨為國家民主議會（NDC），格瑞那達聯合勞工黨（GULP）等。",
                "financial_incoming" => "全年歲收東加幣353.4百萬元(2021年)",
                "export_value" => "東加幣39.97百萬元(2021年)",
                "import_value" => "東加幣513.56百萬元(2021年)",
                "export_item" => "可可、香蕉、荳蔻、水果及蔬菜、成衣。",
                "import_item" => "民生用品、機器、 汽車、燃料。",
                "main_export_countries" =>
                    "美國、日本、圭亞那、多米尼克、聖露西亞、荷蘭、巴貝多、聖克里斯多福及尼維斯。",
                "main_import_countries" => "千里達、美國、日本、中國大陸。",
                "export_to" => "193,862美元 (2021年)",
                "import_from" => "15,164美元 (2021年)",
                "foreign_relationship" => "與各國關係友好。",
                "foreign_policy" =>
                    "依循東加勒比海國家組織(OECS)及加勒比海共同市場(CARICOM)所訂之共同政策。",
                "time_range" => "12小時。",
                "resident" => "無，由我國駐聖文森國大使館兼轄",
                "national_flag" =>
                    "旗色為紅、黃、綠。旗上一共七顆星，紅色外框邊上六顆星象徵六個行政區，旗幟中央第七顆代表首都聖喬治。左邊三角內圖案象徵肉豆蔻，是格瑞那達主要作物。",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            105 => [
                "name" => "模里西斯共和國",
                "name_in_en" => "Republic of Mauritius",
                "short_name" => "模里西斯",
                "short_name_in_en" => "Mauritius",
                "capital" => "路易士港",
                "capital_in_en" => "Port Louis",
                "national_day" => "3月 12日",
                "join_un_day" => "1968年4月24日",
                "area_size" => "2040平方公里",
                "geographic" =>
                    "位於非洲東南方、馬達加斯加共和國以東800公里之印度洋中",
                "religion" =>
                    "印度教48.5%、天主教26.3%、伊斯蘭教17.3%、基督教6.4%",
                "bilaterial_relations" => null,
                "main_bounds" => "Mauritian Rupees",
                "exchange_rate" => '1 US$≒43.9 Mauritian rupees (MUR)（2022/2)',
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/78f19ddb-a705-4d1d-a115-9261e21460c2.GIF",
                "is_diplomatic" => 0,
                "language" => "法語、英語",
                "main_media" =>
                    'MBC1, MBC2, MBC3, L\'Express, Mauritius Times, Le Mauricien',
                "population" => "127.1萬人（2020）",
                "voltage" => "220伏特",
                "time_difference" => "-5:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/7362abc9-0ee9-4cc2-8883-32f557f20c76.jpg",
                "political_system" => "內閣制共和國",
                "history_intro" =>
                    "模島係於10世紀時由阿拉伯人發現。16世紀初，葡萄牙人曾登陸該島。1598年荷蘭人占領該島，並以當時荷蘭君主Maurits van Nassau（模里西斯）之名命名。1715年法國占領該島後開始移民，並另名為法國之島。英國於1810年拿破崙戰爭中占領該島，法國嗣於1814年維也納條約中正式將此地讓予英國，惟於約文第八條約定島上居民得保有其原有之法律、風俗習慣與宗教，因此模里西斯至今仍保留法語及法國習俗。英國統治後恢復其舊名模里西斯。1835年英國通過廢除奴隸法案，解放後之黑奴因不願從事耕種及建築，遂由大批印度勞工取而代之；穆斯林及華人亦來此經商，族群融合形成現今模國人口結構。模里西斯於1968年3月12日宣布獨立，為大英國協之一員，尊英國女王為國家元首，總督代表行使權力，後於1992年3月12日改為共和制，實行議會民主制度，總統為虛位元首，總統及副總統由國民議會間接選舉產生，任期5年（連選得連任一次），總理掌握行政實權。",
                "parliament" =>
                    "一院制，稱國民議會，1992年起成為模國之立法機關，共70席，其中62席由人民直選，另外8席由選舉委員會任命，以維護少數族裔權利，任期5年。",
                "cabinet" =>
                    "總理由總統依據國會選舉結果任命，內閣閣員由總理提請總統任命。",
                "judiciary" => "以法國民法及英國習慣法為基礎，設有最高法院。",
                "headman" =>
                    "總統Prithvirajsing ROOPUN(虛位元首)；總理Pravind Jugnauth(實權行政首長)",
                "fa_minister" => "Alan Ganoo",
                "major_political_parties" =>
                    "多黨制，主要政黨包括社戰黨(MSM)、工黨（PTR）、自由運動黨(ML)、社會民主黨(PMSD)、三M黨(MMM)等。",
                "financial_incoming" =>
                    "2019年政府財政收入993.87億美元，支出1169.76億美元",
                "export_value" => 'US$32.77億(2020)',
                "import_value" => 'US$53.18億(2020)',
                "export_item" => "衣服、紡織品、糖、花、魚、動物",
                "import_item" => "食品、石油產品、化學製品",
                "main_export_countries" =>
                    "法國、美國、英國、南非、馬達加斯加、義大利、西班牙。",
                "main_import_countries" => "印度、中國大陸、法國、南非。",
                "export_to" => 'US$ 7,695萬(2021)',
                "import_from" => 'US$443萬(2020)',
                "foreign_relationship" =>
                    "1968年4月24日加入聯合國。與歐盟經貿關係密切，積極加強與中國大陸、美國及巴基斯坦的經貿關係。由於與英、法之歷史淵源，模國始終與西歐國家維持緊密之關係。模國在地緣上屬非洲國家，亦注重與非洲鄰近國家之關係，南非為其主要貿易夥伴。",
                "foreign_policy" =>
                    "著重於吸引先進國家對模國的投資，並加強與歐盟美國等的經貿關係。",
                "time_range" => "較台灣慢4小時",
                "resident" =>
                    "該國事務由我駐南非代表處兼理。我農委會漁業署在該國派有漁業專員。",
                "national_flag" =>
                    "模里西斯國旗由紅、藍、黃、綠四個平行相等的長方形構成。紅色象徵為獨立自由而鬥爭，藍色表示模里西斯位於藍色的南印度洋，黃色象徵獨立的光芒照耀島國，綠色表示國家的農業和四季常青。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            106 => [
                "name" => "歐洲聯盟",
                "name_in_en" => "European Union",
                "short_name" => "歐盟",
                "short_name_in_en" => "European Union、EU",
                "capital" => "布魯塞爾",
                "capital_in_en" => "Brussels",
                "national_day" => "5月9日",
                "join_un_day" =>
                    "歐洲經濟共同體(歐盟前身)自1974年10月11日獲聯合國觀察員身分",
                "area_size" =>
                    "約448萬平方公里，排名在俄國、加拿大、美國、中國大陸、巴西及澳大利亞之後，居世界第七",
                "geographic" =>
                    "西鄰北大西洋，東面俄國、南接地中海、北靠北海。共有27個會員國，分別為奧地利、比利時、保加利亞、克羅埃西亞、賽普勒斯、捷克、丹麥、愛沙尼亞、芬蘭、法國、德國、希臘、匈牙利、愛爾蘭、義大利、拉脫維亞、立陶宛、盧森堡、馬爾他、荷蘭、波蘭、葡萄牙、羅馬尼亞、斯洛伐克、斯洛維尼亞、西班牙、瑞典。",
                "religion" =>
                    "以天主教、新教、東正教、基督教、伊斯蘭教等信仰為主",
                "bilaterial_relations" => null,
                "main_bounds" =>
                    "目前有20個會員國採用歐元(€)為共同貨幣（註：奧地利、比利時、賽普勒斯、愛爾蘭、愛沙尼亞、芬蘭、法國、德國、希臘、義大利、拉脫維亞、立陶宛、盧森堡、馬爾他、荷蘭、葡萄牙、斯洛伐克、斯洛維尼亞、西班牙、克羅埃西亞）",
                "exchange_rate" =>
                    "詳細匯率資訊建議至臺灣銀行 (https://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex) 網站查詢",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/2432254c-a001-4cbb-a1c4-5f2af4617397.JPG",
                "is_diplomatic" => 0,
                "language" =>
                    "24種會員國語言均為官方語言（註：保加利亞文、克羅埃西亞文、捷克文、丹麥文、荷蘭文、英文、愛沙尼亞文、芬蘭文、法文、德文、希臘文、匈牙利文、愛爾蘭文、義大利文、拉脫維亞文、立陶宛文、馬爾他文、波蘭文、葡萄牙文、羅馬尼亞文、斯洛伐克文、斯洛維尼亞文、西班牙文、瑞典文）",
                "main_media" => null,
                "population" =>
                    "約4億4,700萬人（2021年），人數居世界第三，排名在中國大陸與印度之後",
                "voltage" => null,
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/customfile/sites/mapurllink/fd88e099-00e5-4033-90e3-6e92d53b7085.jpg",
                "political_system" => "是一融合政府間及超國家性質之政體組織",
                "history_intro" =>
                    "一、發展簡史：1950年5月9日，法國外長舒曼(Robert Schuman)發表聲明，建議法德兩國建立煤鋼共同體。1952年7月，法、德、義、荷、比、盧成立歐洲煤鋼共同體。1958年1月，6國成立歐洲經濟共同體和歐洲原子能共同體。歷經半世紀之努力，歐盟整合成就顯著，經濟上逐步完成自由貿易區、關稅同盟、單一市場、貨幣聯盟等工作，貨幣整合之象徵（歐元）則於2002年問世。政治上歐盟版圖不斷擴大，積極發展共同外交、安全及防衛政策，並尋求提昇歐盟在國際事務中之地位與影響力。 二、歐盟東擴：歐盟共經歷6次擴大：1973年英國、愛爾蘭及丹麥加入；1981年希臘加入；1986年西班牙及葡萄牙加入；1995年奧地利、芬蘭及瑞典加入；2004年5月波蘭、匈牙利、捷克、斯洛伐克、愛沙尼亞、拉脫維亞、立陶宛、斯洛維尼亞、塞普勒斯及馬爾他10國入盟；2007年1月保加利亞及羅馬尼亞加入；2013年7月克羅埃西亞加入，惟2020年2月英國脫歐，迄今共有27個會員國。三、條約演進：歐盟與會員國權責均列在條約中，隨著新會員國加入，歐盟亦不斷修改條約。 1951年4月，德、法、義、荷、比、盧六國簽署「歐洲煤鋼共同體條約」；1957年3月該六國簽署「羅馬條約」，成立「歐洲經濟共同體」（EEC）及「歐洲原子能共同體」（Euratom）；1986年2月簽署「單一歐洲法條約」；1992年2月簽署馬克垂克條約，將歐洲共同體改名為「歐洲聯盟」；1997年10月簽署「阿姆斯特丹條約」；2001年2月簽署「尼斯條約」。 2007年12月簽署「里斯本條約」，2009年12月1日生效，賦予歐盟單一國際法人資格，可對外簽署國際條約並加入國際組織。惟英國於2020年1月31日正式脫歐，隨後進入脫歐過渡期至2020年12月31日結束， 雙邊簽署「英歐貿易合作協定」規範雙邊關係。",
                "parliament" =>
                    "一、歐洲議會（European Parliament）議員任期5年，現第9屆(2019-2024)議會於2019年5月選出751位議員，歐盟28個會員國依人口比例決定席次，2020年1月英國脫歐後席次減為705席。目前以德國96席最多，馬爾他、賽普勒斯及盧森堡各6席最少。二、歐洲議會設議長1人、副議長14人及總務長5人，由議員互選產生，每2年半改選一次。歐洲議會於2019年7月改選議長，由義大利籍之David Sassoli擔任，任期至2021年年底，2022年1月選出新任議長馬爾他籍之Roberta Metsola。三、議長、副議長及總務長組成執行局（Bureau），負責議會組織、財政及行政事務；議長與各黨團主席組成主席團會議（Conference of Presidents），決定立法議程及重要決策；歐洲議會設有20個委員會(包括3個次級委員會)，2個特別委員會及1個調查委員會。四、歐洲議會議事運作以黨團為主，各黨團對法案及議題設定立場。目前有七大黨團，分別為人民黨團（EPP、176席）、社會黨團 （S&amp;D，142席）、復興歐洲黨團（Renew、102席）、身份與民主黨團(ID、64席)、綠黨黨團(Greens/EFA、71席)、保守黨團（ECR、63席）、左派聯盟（GUE/NGL、38席），另無黨派議員佔48席。(2023年1月）五、在歐盟改革進程中，歐洲議會權力不斷擴增，從最初僅具諮詢角色，至今已擁有實際立法權、預算權及任命同意權。自2009年12月里斯本條約生效後，歐洲議會對歐盟80％法案已透過「共同決定程序」享有與部長理事會同等立法權。",
                "cabinet" => null,
                "judiciary" => null,
                "headman" => null,
                "fa_minister" => null,
                "major_political_parties" => null,
                "financial_incoming" =>
                    "收入6兆8,016億歐元，支出7兆4,747億歐元(2021年)",
                "export_value" => "2兆5,722億7,125萬歐元(2022年)",
                "import_value" => "3兆43億7,099萬歐元(2022年)",
                "export_item" =>
                    "8703小客車、3004醫藥製劑、2710石油及瀝青礦物油、3002血液、血清、疫苗、動力航空器、8708機動車輛零件、8802動力飛行器、9018醫學儀器、8542積體電路、8411渦輪噴射引擎、8517電話機(2022年)",
                "import_item" =>
                    "2709原油、2711石油氣、2710石油及瀝青礦物油、8517電話機、8471自動資料處理機、8703小客車、8542積體電路、3004醫藥製劑、2933僅具有氮雜原子之雜環化合物、3002血液、血清、疫苗(2022年)",
                "main_export_countries" =>
                    "美國、英國、中國、瑞士、土耳其、日本、挪威、韓國、俄羅斯、加拿大(臺灣排名第16)(2022年)",
                "main_import_countries" =>
                    "中國、美國、英國、俄羅斯、挪威、瑞士、土耳其、韓國、日本、印度(臺灣排名第13)(2022年)",
                "export_to" => "394億2,799萬美元(2022年)",
                "import_from" => "403億4,139萬美元(2022年)",
                "foreign_relationship" => null,
                "foreign_policy" =>
                    "歐盟隨著版圖擴大及以其重要之經濟影響力，在國際事務中尋求扮演更積極之角色，重視聯合國之地位及作用，主張多邊主義，並加強與美、中、日、加、印度等大國全面夥伴及戰略關係，以及透過東擴政策，逐步將巴爾幹半島納入歐盟。歐盟亦積極參與國際及區域安全議題，包括烏克蘭、以巴衝突、伊朗、伊拉克、阿富汗、非洲、反恐、反海盜、防止核武擴散、氣候變遷、人道援助及打擊跨國犯罪等國際問題，並利用對外貿易、經濟及金融等工具規範國際貿易與金融秩序。",
                "time_range" => null,
                "resident" => null,
                "national_flag" => null,
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            107 => [
                "name" => "比利時王國",
                "name_in_en" => "Kingdom of Belgium",
                "short_name" => "比利時",
                "short_name_in_en" => "Belgium",
                "capital" => "布魯塞爾（Brussels）",
                "capital_in_en" => "Brussels",
                "national_day" => "7月21日",
                "join_un_day" => "1945年",
                "area_size" => "30,528 平方公里",
                "geographic" =>
                    "自北起順時針分別與荷蘭、德國、盧森堡和法國接壤，西面則濱臨北海",
                "religion" =>
                    "主要宗教信仰為天主教，信徒占人口約75%，其它宗教信仰包括基督新教、伊斯蘭教及猶太教等。",
                "bilaterial_relations" => null,
                "main_bounds" => "歐元",
                "exchange_rate" =>
                    "詳細匯率資訊建議至臺灣銀行 (https://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex) 網站查詢",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/9fc2407b-575f-4561-b12b-dcbf55ebcfa3.GIF",
                "is_diplomatic" => 0,
                "language" =>
                    "荷蘭語、法語、德語為官方語言。荷蘭語的主要集中於比利時北部的佛拉蒙區，約占全國總人口的58%，説法語的則主要位於南部瓦隆區和布魯塞爾-首都區，約占全國總人口的42%。另外在瓦隆區還有一小部分受官方承認的德語族群。",
                "main_media" =>
                    "【廣播電視媒體】國家廣播局建於1930年，1960年分為兩個獨立的廣播電視台RTBF及VRT，分別用法語、荷語製播電視及廣播節目。法語電視頻道有La Une、La Deux、RTL-TVI等，法語廣播電台則有VivaCité、La Première、Nostalgie及Radio Contact等；荷語電視頻道有 Één 、Canvas及VTM等；荷語廣播電台則有Radio 2、StuBru及QMusic等。 【報紙媒體】主要用荷文和法文出版，少數用德文出版。主要報紙有：《標準報》（De Standaard，荷語）、《晨報》(De Morgen，荷語)、《最新消息報》（Het Laatste Nieuws，荷語）、《時報》（De Tijd，荷語）、《晚訊報》（Le Soir，法語）、《自由比利時報》（La Libre Belgique，法語）、《迴聲報》（L’Echo，法語)及《地鐵報》（Metro，荷語、法語）。此外，比利時境內因有歐盟及歐洲議會等機構，英文媒體應運而生，如《歐洲政治報》(Politico Europe)。比利時通訊社(Belga)則提供新聞及照片等內容予比國各媒體及機構，內容涵蓋政治、經濟及社會等層面。【網路媒體】比利時各大主要電視台和報紙均設有網站。【比利時專業記者協會AGJPB】為比利時最大的記者協會，成立於1978年，總部設在布魯塞爾。該組織包括了法語區和荷蘭語區兩大專業記者協會AJP和VVJ，約有5,000名專業記者。主要任務是捍衛記者的利益，談判集體工作合同，協調與司法、警察以及新聞界的關係、促進新聞品質，關注新聞報導的自由，維護記者工作的條件。",
                "population" => "約1,177萬人(2021年)",
                "voltage" => "220V",
                "time_difference" => "-6:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/f8edfbf5-2c53-442b-a0f9-5f8848d5af6a.jpg",
                "political_system" =>
                    "自從比利時聯邦化後，政府結構更趨複雜。在聯邦政府以下根據語言族群而設立了三個文化體，即荷語區、法語區以及德語區；同時又設立了三個行政區，即瓦隆區、佛拉蒙區和布魯塞爾-首都區。語區和行政區互相覆蓋，分工明確。其中荷語區政府和佛拉蒙區政府合併為一個統一的佛拉蒙政府；瓦隆區大部分對應法語區，德語區則為於比利時東部與德國交界處。聯邦政府：負責有關國家整體利益的事務。如外交、國防、經濟、社會福利、公共安全、運輸、通訊等。文化體政府：負責語言、文化和教育。如學校、圖書館、戲院等。行政區政府：負責當地的土地與財產事務。如地域經濟、規劃、建屋、交通等，如一個在布魯塞爾的學校建築由布魯塞爾行政區政府管轄，但是學校作為一個教育機構則由荷語區政府（如果學校教授的第一語言是荷蘭語）或法語區政府（如果學校的第一語言是法語）負責。這是一個複雜但卻能被廣泛接受的措施，以確保各種文化能和平共處。",
                "history_intro" =>
                    "西元前54年，主要由凱爾特人居住的這一地區被羅馬共和國將軍凱撒征服。羅馬帝國崩潰後，日耳曼人於5世紀大舉入侵，其中的一支法蘭克人隨後建立了墨洛溫王朝，其領土包括了現在的比利時。墨洛溫王朝之後由卡洛林王朝取代。860年，法國國王任命杜伯安一世為法蘭德斯伯爵。979年，布魯塞爾正式建立。1302年，佛拉蒙人在「金馬刺之戰」中擊敗了法國騎兵。1328年，法國人在卡塞勒之役後，確立了對法蘭德斯的統治。1425年，魯汶大學建立。1468年，勃艮第公爵兼併列日。比利時後來幾經轉手，各個地區曾由荷蘭、勃艮地、西班牙、奧地利等國統治。拿破崙時期，比利時為法國的一部分，拿破崙一世戰敗後，比利時併入荷蘭。1830年，比利時爆發比利時獨立運動，從荷蘭統治下獨立，成為世襲君主立憲王國，並選擇了一位德國貴族，薩克森-科堡-哥達公國的王子利奧波德作為比利時的第一任國王。比利時立國後奉行中立政策，但在兩次世界大戰中都被德國佔領。二戰以後，比利時放棄中立原則，參加了北約，後來又參加了歐洲經濟共同體。",
                "parliament" =>
                    "比利時聯邦議會是比利時兩院制的立法機關，包含有眾議院和參議院",
                "cabinet" => "總理Alexander De Croo",
                "judiciary" => "司法部",
                "headman" =>
                    "國王：菲利普(King Philippe)(2013年7月21日登基)；總理：德克歐(Alexander De Croo)(2020年10月就任)。",
                "fa_minister" => "拉碧（Hadja Lahbib) (2022年7月就任)。",
                "major_political_parties" =>
                    "主要政黨有新佛拉蒙連線黨、荷語基督教民主黨、荷語自由黨、荷語社會黨、佛拉蒙利益黨、法語改革運動黨、法語社會黨、法語參與黨、荷語綠黨、法語綠黨等。",
                "financial_incoming" =>
                    "收入2,508億129萬歐元，支出2,787億444萬歐元(2022年)",
                "export_value" => "6,043億8,031萬歐元(2022年)",
                "import_value" => "5,924億7,065萬歐元(2022年)",
                "export_item" =>
                    "3002血液、疫苗、血清、2711石油氣 、2710石油或提煉自瀝青礦物之油類，原油除外、3004醫藥製劑、8703小客車、7102鑽石、8708機動車輛零附件、3901乙烯之聚合物、3826生物柴油、2716電力能源(2022年)",
                "import_item" =>
                    "2711石油氣 、3002血液、疫苗、血清、2710石油或提煉自瀝青礦物之油類，原油除外、8703小客車、3004醫藥製劑、2709石油原油、7102鑽石、8708機動車輛零附件、3826生物柴油、2934核酸及其鹽類(2022年)",
                "main_export_countries" =>
                    "德國、荷蘭、法國、美國、英國、義大利、西班牙、波蘭、日本、瑞典(臺灣排名第41)(2022年)",
                "main_import_countries" =>
                    "荷蘭、德國、法國、中國、美國、義大利、英國、愛爾蘭、西班牙、義大利、挪威(臺灣排名第23)(2022年)",
                "export_to" => "27億4,665萬美元(2022年)",
                "import_from" => "9億3,307萬美元(2022年)",
                "foreign_relationship" => "大致良好",
                "foreign_policy" =>
                    "比國為歐盟創始會員國之一，遵循歐盟之共同外交暨安全政策，並秉持和平解決國際爭端之原則處理對外關係。",
                "time_range" =>
                    "歐洲中部時間 （UTC+1）夏令時間（4月至10月）比台灣慢 6 小時，非夏令時間比台灣慢 7 小時",
                "resident" =>
                    "駐歐盟兼駐比利時代表處(Taipei Representative Office in the EU and Belgium)",
                "national_flag" =>
                    "黑、黃、紅三色旗，取自比利時傳統獅子徽章而來，即黑底上有隻吐著紅色舌頭的黃色獅子。",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            108 => [
                "name" => "汶萊和平之國",
                "name_in_en" => "Brunei Darussalam",
                "short_name" => "汶萊",
                "short_name_in_en" => "Brunei",
                "capital" => "斯里巴加灣市  (Bandar Seri Begawan)",
                "capital_in_en" => "Bandar Seri Begawan",
                "national_day" => "2月23日",
                "join_un_day" => "1984年9月21日",
                "area_size" => "汶萊面積5,765平方公里，約為台灣的1/6。",
                "geographic" =>
                    "汶萊位於婆羅洲島（Borneo)西北角，西北濱臨南中國海，其餘全被馬來西亞砂勞越州（Sarawak）包圍，國土並被砂勞越州林夢省（Limbang）分隔為大小不相連的兩塊土地。",
                "religion" => "伊斯蘭教（俗稱：回教）。",
                "bilaterial_relations" => "無邦交",
                "main_bounds" =>
                    "汶萊與新加坡簽有協議，汶幣與新加坡幣等值並且可在兩國境內通用。汶幣兌台幣匯率，目前約為汶幣1元兌台幣20至21元之間。",
                "exchange_rate" =>
                    "汶萊與新加坡簽有協議，汶幣與新加坡幣等值並且可在兩國境內通用。汶幣兌台幣匯率，目前為汶幣1元兌台幣20至21元之間。詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/1f6cbf18-f157-4ecf-9a88-f2905cb2eb1b.gif",
                "is_diplomatic" => 0,
                "language" =>
                    "官方語言為馬來語，其他主要語言為英語及華語（含閩南語、客語）。",
                "main_media" =>
                    "汶萊新聞社是汶國唯一官方新聞機構，創立於1959年。主要報紙有英文日報 Borneo Bulletin（婆羅洲公報）、另有馬來語報 Media Permata。汶萊廣播電視台 (Radio Television Brunei) 創立於1957年5月，是汶萊唯一的廣播電視台。廣播電台擁有兩個廣播網，一個用馬來語，一個用英語、華語和廓爾克語（尼泊爾語）廣播。電視台從1975年起開設彩色電視頻道，播放馬來語和英語節目。",
                "population" => "447,785人 (截至2022年12月止)。",
                "voltage" => "電壓為220至240伏特。",
                "time_difference" => "+0:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/875c5d3a-71dd-4fd2-960e-c9a4467e0bcf.JPG",
                "political_system" =>
                    "汶萊政體為馬來回教蘇丹王國，現任蘇丹哈山納波嘉陛下（His Majesty Sultan Haji Hassanal Bolkiah Muizzaddin Waddaulah, Sultan and Yang Di-Pertuan of Negara Brunei Darussalam）為第29任蘇丹，於1967年10月5日即位，1968年8月1日加冕，以國家元首兼任內閣總理、外交部長、國防部長、財政部長等身分，主導國內一切政治、經濟、社會、文化及宗教事務，握有極大權力。",
                "history_intro" =>
                    "汶萊立國於14世紀，到16世紀時，統有砂勞越、沙巴及菲律賓南部地區，後因內部爭戰、海盜及歐洲殖民列強侵略—特別是英國，致1984 年獨立時國土面積只剩下5,765平方公里，約為台灣本島的1/6。1888年汶萊成為英國屬地，1941年至1945年被日本佔領；1959年英、汶簽訂協定，汶萊成立自治政府並頒布憲法，但外交及國防仍由英國負責。直到 1984 年 1 月 1 日結束與英國的保護關係，汶萊才成為獨立國家。",
                "parliament" =>
                    "汶萊國會稱為「立法議會」（Legislative Council），1984年起停止開會，直到20年後，蘇丹於2004年9月25日指派21名（包括蘇丹本人）皇親政要及社會賢達為議員，並恢復開議，嗣立法議會始每年定期於3月召開。2005年議員人數增為29名，2011年6月增至33名，目前議員人數為36人。立法議會於2023年3月2日至28日召開第19屆國會，通過2023/2024政府財政預算汶幣59.6億元。",
                "cabinet" =>
                    "汶萊中央政府設有總理府、財政暨經濟、國防、外交（以上三部均設第二部長）、內政、宗教、主要資源暨觀光、教育、交通暨資通訊、衛生、發展及文化青年暨體育共11部會，及能源局（由總理府指派專職副部長負責）負責全國行政事務。現今第29任蘇丹哈山納波嘉（His Majesty Sultan Haji Hassanal Bolkiah）以國家元首兼任總理、財政部長、國防部長、外交部長、警察總長，總攬人事任免及升遷大權，主導政治、經濟、社會、文化及宗教等事務，握有實權。",
                "judiciary" =>
                    "汶萊總理辦公室設有法務局掌管法律行政。法院分地方法院、高等法院及上訴法院。另有歸屬宗教部之宗教法庭，依據回教律法審理回教徒訴訟。",
                "headman" =>
                    "蘇丹哈山納波嘉（His Majesty Sultan Haji Hassanal Bolkiah Mu’izzaddin Waddaulah ibni Al-Marhum Sultan Haji Omar Ali Saifuddien Sa’adul Khairi Waddien）",
                "fa_minister" =>
                    "蘇丹哈山納波嘉 (第二部長拿督爾旺,Dato Erywan Yusof)",
                "major_political_parties" =>
                    "汶萊目前有3個政黨：National Development Party Brunei、Brunei National Solidarity Party、Brunei People’s Awareness Party。汶萊中央及各縣政府官員均由蘇丹任命，除偏遠地區村長由當地耆老推選外，並無實質選舉，故汶萊實際上並無政黨活動。",
                "financial_incoming" =>
                    "長期以來，汶萊政府財政收支多能保持盈餘，惟自2015/16財政年度以來，受國際原油價格波動影響，財政支出雖多維持在50至60億汶幣之間，然財政收入則未見提振，近五年來均呈財政赤字。2020/21年度財政支出為58.6億汶幣，財政收入為40.5億汶幣，財政赤字達18.1億汶幣；2021/22年財政支出維持在58.6億汶幣，財政收入則僅26.1億汶幣，赤字劇增至32.5億汶幣。2023/2024政府財政預算汶幣59.6億元。  汶近期受油價下跌影響甚鉅。",
                "export_value" => 'US$87.6億美元(2021年10月)',
                "import_value" => 'US$68.4億美元(2021年10月)',
                "export_item" => "原油、液化天然氣、化學品 。",
                "import_item" => "機械及運輸設備、製成品、食品及燃油。",
                "main_export_countries" => "中國、澳洲、新加坡、日本、印度。",
                "main_import_countries" => "澳洲、日本、俄羅斯、挪威、巴紐。",
                "export_to" => "0.05億美元 (2022年)",
                "import_from" => "0.06億美元 (2022年)",
                "foreign_relationship" =>
                    "汶萊目前與170國建有正式外交關係，惟僅在東協、中東多數回教國家及英國、美國、日本、韓國、中國大陸、法國、德國、加拿大、印度、巴基斯坦、澳洲等44國設有大使館，而在汶萊設立常駐大使之國家包括中共在內共有38國。汶萊主張透過東協求取區域之和平與繁榮，基本上採取東協集體路線，與東協之新加坡、馬來西亞、泰國、印尼及菲律賓關係密切。汶萊藉參與國際組織擴大與其他國家之聯繫，目前為聯合國暨所屬專門機構、東協、亞太經濟合作、世界貿易組織、世界衛生組織、國際貨幣基金、世界銀行及回教會議組織等國際組織成員；亦為跨太平洋夥伴全面及進步協定（CPTPP）及區域全面經濟夥伴協定（RCEP）創始成員國。",
                "foreign_policy" =>
                    "汶萊王國因小國寡民，藉積極參與國際活動，以確保其作為國際社會成員之地位，但儘量不涉入國際爭端，以避免引起爭議。國王蘇丹於1984年1月1日發布之獨立文告中保證在相互尊重、獨立、主權、平等及領土完整原則下與各國保持友好關係。",
                "time_range" => "汶萊與台灣無時差。",
                "resident" =>
                    "駐汶萊台北經濟文化辦事處(Taipei Economic & Cultural Office in Brunei Darussalam)",
                "national_flag" =>
                    "汶萊國旗以黃色為背景，加上一個黑色及白色的平行四邊形，在兩個平行四邊形上有一個國徽，國徽中有一支小旗、一個華蓋、一雙手、一棵棕櫚樹、一對翅膀、一個紅色的上弦月和一句阿拉伯語標語「在神的指引下永遠服務」，兩者都顯示出汶萊主要的宗教信仰為伊斯蘭教。黃色為該國傳統的顏色；黑色和白色的平行四邊形是為了紀念汶萊歷史上兩位維塞爾（即大臣，原有四個維塞爾，但是其中兩個維塞爾在啟用國旗前去世）共政的事；小旗與華蓋是王權的標誌；一對紅色翅膀守護著國家的正義、寧靜、繁榮及和平；上弦月的左右方有一雙手，象徵政府提升人民生活繁榮的保證；而於新月下方的捲紋上則為「汶萊和平之國」的字樣。",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            109 => [
                "name" => "沙烏地阿拉伯王國",
                "name_in_en" => "Kingdom of Saudi Arabia",
                "short_name" => "沙烏地阿拉伯、沙烏地",
                "short_name_in_en" => "Saudi Arabia",
                "capital" => "利雅德Riyadh",
                "capital_in_en" => "Riyadh",
                "national_day" => "9月23日",
                "join_un_day" => "1945年10月24日",
                "area_size" => "面積225萬平方公里",
                "geographic" =>
                    "東臨波斯灣(或稱阿拉伯灣)，西濱紅海，海岸線長2,640公里。南與葉門及阿曼為鄰，東與阿拉伯聯合大公國及卡達接壤，隔海與巴林相望，北與科威特、伊拉克及約旦接界，陸地邊界長4,415公里。",
                "religion" => "奉行伊斯蘭教瓦哈比教義",
                "bilaterial_relations" => "{{--br /--}}",
                "main_bounds" => "沙烏地里亞爾(Riyal，貨幣編號SAR)",
                "exchange_rate" =>
                    "1美元約兌換3.7452里亞爾，1里亞爾約兌換新臺幣8.16元（2023年3月），詳細匯率資訊建議至臺灣銀行（https://rate.bot.com.tw/xrt）、兆豐銀行（https://www.megabank.com.tw/personal/foreign-service/forex）或OANDA（https://www1.oanda.com/currency/converter/）網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/c9e5edf2-588e-46b8-9f2e-5a1d48e8c574.GIF",
                "is_diplomatic" => 0,
                "language" => "阿拉伯語",
                "main_media" =>
                    "Saudi News Agency, Arab News, Saudi Gazette, Riyadh Daily, Asharq Alawsat Al-Riyadh, Al-Madina, Al-Nadwa, Al-Bilad, Al-youm",
                "population" =>
                    "約3,594萬人(2022年8月)，其中包括來自埃及、蘇丹、黎巴嫩、敘利亞、約旦、印度、巴基斯坦、孟加拉及菲律賓等國人民。",
                "voltage" =>
                    "沙國住宅電力供應110或220電壓不一，且標示不清，故必須先做檢測確定，以免燒壞電器，電費採累進計費。",
                "time_difference" => "-5:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/b1ed9a50-bd71-4b99-8c62-6b1142b889da.jpg",
                "political_system" => "君主制",
                "history_intro" =>
                    "18世紀下葉，中部地區之紹德(Saud)家族與瓦哈比(Wahhabism)宗教改革運動結合，將勢力擴張至西部。1818年土埃聯軍擊敗瓦哈比信徒，紹德家族改在利雅德(Riyadh)建立新都與北部哈伊勒(Hail)之拉希德(Al-Rashid)家族發生衝突，最後被迫流亡科威特(Kuwait)。1902年1月在阿布都阿齊茲(Abdul Aziz Al-Saud)帶領下收復利雅德，開始了沙烏地阿拉伯統一運動。1921年自立為內志(Najd)蘇丹(Sultan)，將國家命名為內志蘇丹國(Sultanate of Najd)。1926年征服漢志(Al-Hijaz)後，自立為內志與漢志國王，將國家更名為內志與漢志王國(Mamlakat al-Hijaz wa-Najd)。1932年平息伊赫萬叛亂(Ikhwan Revolt)後，沙烏地阿拉伯王國正式建立。",
                "parliament" =>
                    "無專司立法之議會組織，僅設立諮議會，國王為諮議會主席，諮議員150人由國王任命，對國事提出諮詢及建議，以供決策參考。",
                "cabinet" =>
                    "1. 沙國內閣由總理、副總理、各部部長、國務委員及國王顧問組成，負責草擬及監督有關內政、外交、財政、經濟、教育及國防等政策，以及全國事務之執行，每週一舉行會議，由國王主持。 2. 2015年1月23日薩爾曼國王(Salman bin Abdulaziz Al Saud)登基，沙國王儲穆罕默德親王(Mohammad bin Salman Al Saud)在2022年9月27日出任總理。",
                "judiciary" => "司法部﹐最高法院委員會﹐各地法院",
                "headman" => "薩爾曼國王(King Salman bin Abdulaziz Al Saud)",
                "fa_minister" => "費瑟˙本˙法漢親王(Faisal bin Farhan Al Saud)",
                "major_political_parties" => "無組黨結社制度",
                "financial_incoming" =>
                    "預算收入: 約2,260億美元(2021年)，預算支出: 約2,636億美元(2021年)",
                "export_value" => "約2,862億美元 (2021年）",
                "import_value" => "約2,130億美元（2021年）",
                "export_item" =>
                    "原油、化學原料(乙烯、丙烯、乙醚及氨等)、金屬(鋁及黃金)、礦產品或化學肥料",
                "import_item" =>
                    "汽車及其零配件、資通訊產品、金屬、藥品、大麥、肉品、空調設備",
                "main_export_countries" =>
                    "中國大陸、日本、美國、印度、南韓、阿拉伯聯合大公國、新加坡、臺灣、巴林、比利時",
                "main_import_countries" =>
                    "美國、中國大陸、德國、阿拉伯聯合大公國、日本、南韓、印度、法國、義大利、英國",
                "export_to" =>
                    "2022年我對沙國出口總額將近10.47億美元，以汽車零件、電子產品、聚對苯二甲酸乙烯酯、照明設備、螺釘、無線電航行輔助器具等為主。",
                "import_from" =>
                    "2022年我對沙國進口總額約115.23億美元，以石油產品、銅廢料、聚碳酸樹脂、鋁合金、精煉鉛等為主。",
                "foreign_relationship" =>
                    "1. 2011年2-3月間，反政府民主運動席捲中東阿拉伯國家，沙國鄰國巴林(Bahrain)發生嚴重示威抗議事件，沙國與阿拉伯聯合大公國(United Arab Emirates)派遣安全部隊進入巴林，協助平息動亂。2. 2015年葉門(Yemen)境內胡希武裝組織(Houthi)壯大，阿拉伯海灣國家合作理事會(Gulf Cooperation Council,GCC)應葉門總統哈迪(Abdrabbuh Mansur Hadi)之請，由沙國領導阿拉伯聯軍進行干預葉門行動。",
                "foreign_policy" =>
                    "沙國致力伊斯蘭教國家間團結及加強與各國之政、經、社會等各方面合作，反猶太主義，主張和平解決國際爭端。",
                "time_range" => "單一時區，通稱為「麥加時區」，較臺灣晚5個小時",
                "resident" => "駐沙烏地阿拉伯代表處",
                "national_flag" =>
                    "沙國國旗為綠色，上有白色阿拉伯文古蘭經教諭(لا إله إلا الله محمد رسول الله意即萬物非主，唯有真主，穆罕默德，真主的使者)及阿拉伯彎刀。綠色係伊斯蘭教中神聖的顏色，綠色旗面表示沙國係伊斯蘭教國家，旗幟上古蘭經教諭突現伊斯蘭教在沙國的特殊地位。",
                "area_name" => "亞西地區",
                "area_name_in_en" => "West Asia",
            ],
            110 => [
                "name" => "法蘭西共和國",
                "name_in_en" => "French Republic",
                "short_name" => "法國",
                "short_name_in_en" => "France",
                "capital" => "巴黎",
                "capital_in_en" => "Paris",
                "national_day" => "7月 14日",
                "join_un_day" => "1945年",
                "area_size" =>
                    "551,500平方公里（包括海外省分共為643,801平方公里）",
                "geographic" =>
                    "法國本土面積約551,500平方公里（包括海外省分共為643,801平方公里），佔全歐盟總面積約五分之一，為西歐地區幅員最大之國家，領海廣闊，專屬海洋經濟區達1千1百萬平方公里。法國地理條件良好，平原約佔全國總面積三分之二，主要山脈有阿爾卑斯山脈—最高峰白朗峰海拔4,807公尺，為歐洲第一高峰，國土四面臨海，濱鄰北海、英吉利海峽、大西洋及地中海，海岸線長達3,427公里。",
                "religion" => "以天主教為主要信仰",
                "bilaterial_relations" => null,
                "main_bounds" => "歐元",
                "exchange_rate" =>
                    "近期歐元幣值有趨貶，以2021年09月計算，1美元約折合0.8352歐元，1歐元約可兌換32.62新台幣。詳細匯率資訊建議至臺灣銀行（https://rate.bot.com.tw/xrt?Lang=zh-TW）或兆豐商銀（https://www.megabank.com.tw/personal/foreign-service/forex）網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/9e3b1d35-3d4f-4563-98a5-c9d02b8a7f0f.GIF",
                "is_diplomatic" => 0,
                "language" => "法語",
                "main_media" =>
                    'Le Monde(世界報)、Le Figaro(費加洛報)、Les Echos (迴聲報)、Le Point (觀點週刊)、L\'Obs (新觀察家週刊)、L\'Express(快訊週刊)',
                "population" =>
                    "法國含海外屬地總人口約有6,740萬人(2021年1月)，本土人口約有6,523萬人，平均人口密度為每平方公里118.28人。居民最多之前五大都市依序為巴黎、馬賽、里昂、土魯斯、尼斯(2021)。",
                "voltage" => "220V，使用圓型、兩孔插座。",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/b4be26e2-0e09-487d-b67e-ea508de3f73d.jpg",
                "political_system" => "民主共和",
                "history_intro" =>
                    "一、西元四八一年克洛維稱王，建立法蘭克王國。10世紀時，法蘭克王國分裂；根據843年「凡爾登條約」，法蘭克王國東部形成現在的德國，西部則逐漸成為現在的法國。歷經與英國交戰116年之百年戰爭後，法國於15世紀末逐漸成為中央集權及君主專制政體之國家。 二、1789年7月14日爆發法國大革命，法國民眾及軍隊攻陷巴士底獄，推翻封建制度及君主體制，並逐步建立共和制並推向民主制 ；1792年法蘭西第一共和國成立，至1804年拿破崙成為法國皇帝並建立第一帝國，短暫之共和國歲月為之結束。 三、法國於1848年推翻帝制建立法蘭西第二共和國，由拿破崙三世擔任總統，至1852年拿破崙三世發動政變建立法蘭西第二帝國，帝制再次恢復。1870年普法戰爭結束後，法國再次恢復共和制（第三共和），並一度於1871年3月18日至5月28日建立史上第一個無產階級之共產政權「巴黎公社」，但隨即被推翻及血腥鎮壓。法國於1875年正式頒佈共和國憲法。 四、二次世界大戰期間，第三共和於1940年被納粹德國所瓦解，戴高樂將軍於英國建立流亡政府，繼續與納粹德國之附庸政體「維琪法國」抗衡。二次大戰後，戴高樂將軍建立法蘭西第四共和，卻未能改變小黨林立的局面，總計12年之間更換25個政府。1958年阿爾及利亞戰爭爆發，戴高樂將軍宣佈結束舊憲法，推行新憲法（亦即現今法國憲法），第四共和結束，法蘭西第五共和成立，即為現今之法蘭西共和國。",
                "parliament" => "參議院及國民議會兩院制",
                "cabinet" => "雙首長制",
                "judiciary" => "司法法院及行政法院",
                "headman" => "馬克洪(Emmanuel Macron)",
                "fa_minister" => "柯羅娜(Catherine Colonna)",
                "major_political_parties" =>
                    "右派：共和人黨(LR)；中間派：復興黨(Renaissance)、民主運動黨(MoDem)、民主獨立聯盟(UDI)；極右派：國民聯盟(RN)；左派：社會黨(PS)、歐洲生態綠黨(EELV)；極左派：以法國共產黨(PCF)為主之左派陣線(Le Front de gauche)、不屈法國(FI)",
                "financial_incoming" =>
                    "2021年財政赤字約為1,609億歐元，占GDP的6.5%。",
                "export_value" => "5,009億歐元 (2021年)",
                "import_value" => "5,856億歐元 (2021年)",
                "export_item" =>
                    "化學產品、金屬類、其他能源、食品、紡織成衣、機械類、資訊及電子類、汽車、電氣設備、香水",
                "import_item" =>
                    "碳氫化合物、金屬類、化學產品、精煉石油、機械類、資訊及電子類、汽車、橡膠塑料、其他與製造業產品、電氣設備",
                "main_export_countries" =>
                    "德國、比利時、義大利、西班牙、美國、英國、荷蘭、中國、瑞士、波蘭",
                "main_import_countries" =>
                    "德國、中國、義大利、比利時、西班牙、美國、荷蘭、英國、瑞士、波蘭",
                "export_to" => "15億8,505萬美元 (2021年)",
                "import_from" => "35億1,382萬美元 (2021年)",
                "foreign_relationship" =>
                    "法國在外交上仍具強烈企圖心，以聯合國安理會常任理事國身分參與並協調重要國際事務，惟已意識到面對全球各範疇變化，外交手段必須進行調整，以適應新局，故一方面捍衛傳統價值觀，但作為歐盟一員，在全球治理方面必須務求歐盟內和諧，共同對外，並繼續發揚法國為普世價值先驅，加強海外文化宣傳工作。在英國決定脫歐後，法國將繼續與德國密切合作。不過法國外交政策基本格局有其一貫與延續性，不至因政黨輪替或政府更迭出現重大改變。",
                "foreign_policy" => "奉行獨立自主之外交政策",
                "time_range" =>
                    "較台灣慢7小時(3月底至10月底日光節約時間較台灣慢6小時)",
                "resident" => "駐法國代表處",
                "national_flag" => "藍、白、紅",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            111 => [
                "name" => "波士尼亞與赫塞哥維納",
                "name_in_en" => "Bosnia and Herzegovina",
                "short_name" => "波士尼亞",
                "short_name_in_en" => "Bosnia and Herzegovina",
                "capital" => "塞拉耶佛",
                "capital_in_en" => "Sarajevo",
                "national_day" => "11月 25日",
                "join_un_day" => "1992年5月22日",
                "area_size" => "51,197平方公里",
                "geographic" =>
                    "波士尼亞與赫塞哥維納位於西巴爾幹半島，左鄰克羅埃西亞（Croatia），右鄰塞爾維亞（Serbia），其西南角接亞德里亞海（Adriatic Sea）",
                "religion" => "伊斯蘭教、東正教、天主教",
                "bilaterial_relations" => null,
                "main_bounds" => "波赫馬克Bosnian Convertible Mark (BAM)",
                "exchange_rate" =>
                    "1美元折合約1.85BAM（2022年6月資料，本匯率僅供參考，不代表實際交易匯率)「詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。」",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/0c58e74e-87f7-4840-b36f-d5468d71f14e.GIF",
                "is_diplomatic" => 0,
                "language" => "波士尼亞語、克羅埃西亞語、塞爾維亞語",
                "main_media" =>
                    "「每日之聲」(Dnevni Avaz)、「解放報」(Oslobodjenje], Glas Srpski報, Dnevne Nezavisne Novine報",
                "population" => "約325萬人(2022年資料)",
                "voltage" => "220伏特，雙圓插頭。",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/4b01b9dd-2cf6-4be2-b69c-3a818be01f63.jpg",
                "political_system" => "聯邦共和制",
                "history_intro" =>
                    "波士尼與赫塞哥維納(Bosnia and Herzegovina 簡稱波赫)早在西元一世紀時曾為羅馬帝國領土，先後歷經匈牙利王國、奧圖曼土耳其帝國及奧匈帝國等異族統治，第一次世界大戰後成為南斯拉夫一部分，主要係由波士尼亞(Bosniak，佔48%)、塞爾維亞(Serb，佔37%)及克羅埃西亞(Croat，佔14%)等三個民族所組成。1989年歐洲共黨政權紛紛瓦解，波赫於1992年2月舉行公民投票決定脫離南斯拉夫獨立，同年4月獲歐美主要國家承認，並於同年5月加入聯合國。 波赫境內塞爾維亞族盼續留南斯拉夫，在鄰國塞爾維亞支持下企圖以武力分裂國土，以創造一個「大塞爾維亞」（Greater Serbia），不同族裔間展開三年激烈之內戰，造成約20萬人喪生。",
                "parliament" =>
                    "兩院制：由42名議員組成之眾議院（House of Representatives），眾議員議員由波赫聯邦選出28席及塞爾維亞共和邦選出14席及由15席議員組成之民族院（House of Peoples），民族院議員由波赫境內之三大族裔各佔五席。上述兩院議員任期均為4年。",
                "cabinet" =>
                    "部長委員會主席（相當於總理）為最高行政首長，由總統委員會提名，並須經國會眾議院同意，部長委員會主席有權任命部長。現任主席為克里絲朵 (Borjana Krišto)，2023年1月25日就任。",
                "judiciary" =>
                    "憲法法院：由9位法官組成，其中4位由波赫聯邦選出、2位由塞爾維亞共和邦選出，另3位由國際人權法院主席指定非波士泥亞裔人士出任。國家法院：由44名波赫本國籍法官及7名國際法官組成。",
                "headman" =>
                    "總統由三大族裔（波士尼亞裔、克羅埃西亞裔、塞爾維亞裔）人民直接選出各1名總統委員會成員，任期4年，委員輪流擔任主席，每次任期為8個月。",
                "fa_minister" =>
                    "柯納柯維奇(Elmedin KONAKOVI) 2023年1月26日就任。",
                "major_political_parties" =>
                    "主要有波赫社會民主黨（Social Democratic Party, SDP BiH）、塞裔民主黨（Serb Democratic Party, SDS）、波赫克裔民主聯盟（Croatian Democratic Union of Bosnia and Herzegovina, HDZ-BiH）、1990克裔民主聯盟(Croatian Democratic Union 1990 - HDZ 1990)、波裔民主行動黨（Party for Democratic Action, SDA）、波士尼亞與赫塞哥維納黨（Party for Bosnia and Herzegovina, SBH）及民主進步黨（Party of Democratic Progress, PDP）",
                "financial_incoming" =>
                    "波赫經濟高度依賴國內之金屬出口、旅外僑匯及國際社會援助。依據世界銀行數據，波赫經濟成長率約為7.5%（2021第4季預估），國內生產毛額約193 億歐元（2021，預估值），平均國民所得約為5,040歐元。",
                "export_value" => "72億3,200萬歐元（2021年）",
                "import_value" => "109億8,600萬歐元（2021年）",
                "export_item" =>
                    "基礎金屬、機械設備、礦產品、化學品、木製品、鞋靴、紡織品",
                "import_item" =>
                    "基礎金屬、機械設備、礦產品、化學品、食品、橡塑膠",
                "main_export_countries" => "歐盟、塞爾維亞、蒙特內哥羅、土耳其",
                "main_import_countries" =>
                    "歐盟、塞爾維亞、中國、土耳其、俄羅斯",
                "export_to" => "約473萬美元  ( 2022年)",
                "import_from" => "約258 萬美元(2022年)",
                "foreign_relationship" =>
                    "重視與美國及歐盟之關係，因境內波士尼亞裔居民信奉伊蘭斯教，與伊蘭斯教國家關係頗密切。",
                "foreign_policy" =>
                    "波赫為聯合國、國際貨幣基金、世界銀行及歐洲安全合作組織（Organization for Security and Cooperation in Europe）等國際組織成員，並為世界貿易組織觀察員。 波赫於2008年12月在芬蘭首都赫爾辛基簽署「亞德里亞憲章」(Adriatic Charter)，成為北約（NATO）候選國。 2010年1月波赫擔任2010-11年聯合國安理會非常任理事國。 2016年正式提出申請加入歐盟。",
                "time_range" =>
                    "較台灣慢7小時（3月至10月日光節約時間較台灣慢6小時）",
                "resident" => "無（由駐匈牙利代表處兼轄）",
                "national_flag" =>
                    "波赫國旗是藍色旗面，圖案為金黃色大三角形，沿三角形的一條邊還有一排白色星星。金色是太陽光輝，象徵希望；藍底和白色星星代表歐洲，標誌著波赫是歐洲的一部分。大三角形的三條邊象徵組成波士尼亞與赫塞哥維納三個主要民族：穆斯林族、塞爾維亞族和克羅埃西亞族。",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            112 => [
                "name" => "波札那共和國",
                "name_in_en" => "Republic of Botswana",
                "short_name" => "波札那",
                "short_name_in_en" => "Botswana",
                "capital" => "嘉伯隆里",
                "capital_in_en" => "嘉伯隆里",
                "national_day" => "9月 30日",
                "join_un_day" => "1966年10月17日",
                "area_size" => "600,370平方公里",
                "geographic" =>
                    "位於南部非洲心臟地帶係一內陸國，東南部及南部毗連南非，東北鄰辛巴威，西部與北部與那米比亞接壤。",
                "religion" =>
                    "基督教( 57.9%)、無宗教信仰(11.1%) (2011年政府最後公布資訊)",
                "bilaterial_relations" => null,
                "main_bounds" => "pula (BWP)",
                "exchange_rate" => '1 US$≒10.43 Pula (2019/04)',
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/6e35c88e-4085-4a48-a362-7dd13ed96387.GIF",
                "is_diplomatic" => 0,
                "language" => "英語",
                "main_media" =>
                    "每日新聞(Daily News)、通訊報(Mmegi/The Reporter)、波札那衛報(Botswana Guardian)、波札那國營電視台(Botswana TV)及波札那國營廣播電台(Radio Botswana)。",
                "population" => "2,338,851人 (2019/04)",
                "voltage" => "220V",
                "time_difference" => "-6:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/d1454b3f-1f29-4dec-bf1f-dced33519264.JPG",
                "political_system" => "共和制",
                "history_intro" =>
                    "茲瓦那（Tswana）族共有8個主要部落，約於11世紀起定居於水源充沛、土壤肥沃之南非林波波省西南部及豪登省一帶，從事農耕活動。 19世紀初始定居於現今之波札那。當時波札那為英國向非洲內陸發展之要衝。 1885年9月30日英國宣布波國為其保護國。 1948年因南非與英國對非洲之立場不一，因此轉而支持波札那獨立，於1963年7月1日舉行波札那制憲會議，先成立自治政府，1966年9月30日正式宣布獨立。 波國獨立後實行民主政治，積極的社會政策與豐富礦藏（鑽石礦佔該國輸出利潤8成）使波國擁有非洲大部分地區難得一見的開發水準。波國擁有良好的金融管理紀錄，在2016年被國際透明組織全球排名第35名，為全非洲最廉潔的國家。此外，波札那在致力發展經濟的同時，不忘保護生態，豐富的自然生態景觀，使該國觀光業逐漸興盛。",
                "parliament" =>
                    "兩院制，酋長議會（House of Chiefs）具諮詢地位，共35席。國民議會共63席，其中57席由人民直選，4席由國會多數黨指派，另2席則由總統及檢察總長擔任。",
                "cabinet" =>
                    "總統為全國最高行政首長，並為國防軍統帥。另設副總統及內閣，皆由總統任命組成內閣，內閣對國會負責。",
                "judiciary" =>
                    "在洛巴集（Lobatse）設一高等法院，以首席大法官掌理全國司法審理工作。在每一行政區設有地方法院，另設一上訴法院。",
                "headman" => "馬西西 (Mokgweetsi Masisi)",
                "fa_minister" => "Unity Dow",
                "major_political_parties" =>
                    '波國為多黨制國家，主要政黨包括波札那民主黨（Botswana Democratic Party, BDP）、波札那民族陣線（Botswana National Front, BNF）、波札那國會黨（Botswana Congress Party, BCP）、波札那人民黨（Botswana People\'s Party, BPP）及波札那同盟運動（Botswana Alliance Movement, BAM）等。波札那民主黨自波國1966年獨立以來執政迄今，Ian Khama自2008年4月接替Festus Mogae擔任總統，並於2009年及2014年兩度連任，於2018年3月31日任滿，由副總統馬西西 (Mokgweetsi Masisi)接任總統。',
                "financial_incoming" =>
                    "2019年政府財政收入379.57億美元，支出518.13億美元",
                "export_value" => 'US$46.81億(2020)',
                "import_value" => 'US$69.38億(2020)',
                "export_item" => "鑽石，銅，鎳，純鹼，肉類，紡織品",
                "import_item" =>
                    "食品、機器、電子產品、交通設備、木材及紙類製品、紡織品、燃料、金屬製品",
                "main_export_countries" =>
                    "比利時、印度、阿拉伯聯合大公國、南非、新加坡、以色列、香港、納米比亞",
                "main_import_countries" => "南非、加拿大、以色列",
                "export_to" => 'US$107萬(2021)',
                "import_from" => 'US$16萬(2021)',
                "foreign_relationship" =>
                    "為大英國協、非洲聯盟(AU)、南部非洲發展共同體(SADC)等會員國。",
                "foreign_policy" => "不結盟路線，立場溫和。",
                "time_range" => "較台灣慢6小時",
                "resident" => "目前由駐南非代表處兼轄。",
                "national_flag" =>
                    "波札那國旗由兩條位於最上方以及最下方的淺藍色橫條、一條位於中間的黑色橫條和兩條位於黑色橫條上方以及下方的薄白色條紋組成。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            113 => [
                "name" => "波蘭共和國",
                "name_in_en" => "Republic of Poland",
                "short_name" => "波蘭",
                "short_name_in_en" => "Poland",
                "capital" => "華沙",
                "capital_in_en" => "華沙(Warsaw)",
                "national_day" => "5月3日 (憲法日)",
                "join_un_day" => "1945年10月24日",
                "area_size" => "312,679平方公里",
                "geographic" =>
                    "波蘭位居中歐，陸地與7個國家接鄰，邊界總長3,496公里，北濱波羅的海，海岸線長439.74公里。東北與俄羅斯加里寧格勒州及立陶宛接壤，東與白俄羅斯及烏克蘭相鄰，南以蘇臺德山及喀爾巴阡山與捷克、斯洛伐克相隔，西與德國以河為界。波蘭目前領土疆界係第二次世界大戰後所界定。",
                "religion" => "天主教",
                "bilaterial_relations" => null,
                "main_bounds" => "波幣Zlote(PLN)",
                "exchange_rate" =>
                    "即時匯率可至波蘭國家銀行(Narodowy Bank Polski)網站查詢：https://www.nbp.pl/homen.aspx?f=/srodeken.htm詳細臺幣匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀 (https://www.megabank.com.tw/personal/foreign-service/forex) 網站查詢",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/4c3fb46a-f393-4e02-8f36-f4463c303795.GIF",
                "is_diplomatic" => 0,
                "language" => "波蘭語(英語逐漸普及)",
                "main_media" =>
                    "選舉日報(Gazeta Wyborcza)、共和日報(Rzeczpospolita)、波蘭日報(Gazeta Polska Codziennie)、每日新聞報(Dziennik Gazeta Prawna)、直接(Wprost)週刊、政治(Polityka)週刊、新聞周刊(Newsweek Polska)、Super Express、24小時新聞台(TVN 24)、波蘭公共電台(Polskie Radio)、波蘭公共電視台(TVP)",
                "population" => "38,162,000 (2021年6月)",
                "voltage" => "220V(伏特)",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/3572b766-dc79-45ed-af98-1307235bd871.jpg",
                "political_system" => "民主共和",
                "history_intro" =>
                    "波蘭係由數個斯拉夫族部落移居組成，皮亞士王朝(10-14世紀)於西元966年改奉西方拉丁禮儀基督教。亞傑榮王朝(Jagiellonia)(1386-1572年)於1569年與立陶宛結盟成立波蘭-立陶宛聯邦(Commonwealth)；1648年貴族政治導致國家衰退混亂，1764-1795年雖力圖改革未果；1792年首遭普魯士、奧匈帝國及俄國3強瓜分，1792年俄國入侵波蘭，抵抗無效，領土第2次遭瓜分；1793年領土又為普魯士及俄國瓜分，1795年波蘭-立陶宛聯邦遭3強瓜分亡國。1795-1864年期間波蘭人民多次起義未果。一次大戰後，於1918年成立第二共和。1939年9月，德國納粹與俄國分別入侵瓜分佔領波蘭，政府流亡英國倫敦。二次大戰後之「雅爾達密約」影響波蘭之政治體制、領土及國際環境。1952年波蘭人民共和國(Polska Rzeczpospolita Ludowa)成立。1970年政府調漲物價引發普遍不滿，1978年10月克拉科夫總教區樞機主教Karol Jozef Wojtyla獲選為教宗若望保祿二世。1980年代經濟惡化，由華勒沙領導之團結工聯與政府進行談判，1981年政府宣布戒嚴。1989年2月政府與團結工聯進行「圓桌會議」，達成國會改選及予獨立工會合法化協議，俟1990年舉行全民選舉，華勒沙當選總統，終結共黨40年統治。",
                "parliament" => "眾議院(Sejm)460席、參議院(Senate)100席",
                "cabinet" =>
                    "內閣(Council of Ministers)由總理及14位部長組成(目前其中4人兼副總理)。現任總理為莫拉維茨基(Mateusz Morawiecki)(2019年10月13日就任)",
                "judiciary" =>
                    "除一般三級制法院外，尚有憲法法庭（Constitutional Tribunal）及國家法庭（State Tribunal）",
                "headman" => "總統:杜達(Andrzej Duda)於2020年8月6日就任",
                "fa_minister" => "饒兀(Zbigniew Rau)於2020年8月26日就任",
                "major_political_parties" =>
                    '法律與正義黨(Prawo i Sprawiedliwość, PiS)、公民論壇黨(Platforma Obywatelska, PO)、左派聯盟(Left)、酷奇黨(Kukiz\'15)、波蘭農民黨(Polskie Stronnictwo Ludowe, PSL)、獨立波蘭聯盟(Konfederacja)等。',
                "financial_incoming" => "財政赤字 4,819.5萬 PLN (2021年)",
                "export_value" => "3,392.73億USD(2021年)",
                "import_value" => "3,397.03億USD(2021年)",
                "export_item" =>
                    "機動車輛零件及附件、小客車零件、電視接收器具、船舶、家具、醫藥製劑等",
                "import_item" =>
                    "石油原油、機動車輛零組件、小客車、醫藥製劑、船舶、電話器具等",
                "main_export_countries" => "德國、捷克、法國、英國、義大利",
                "main_import_countries" =>
                    "德國、中國大陸、荷蘭、俄羅斯、義大利",
                "export_to" => "我對該國輸出12億4,174萬USD(2021年)",
                "import_from" => "4億1,207萬USD(2021年)",
                "foreign_relationship" =>
                    "波蘭於1996年成為經濟合作暨發展組織（OECD）成員，1997年加入北約（NATO），2004年加入歐盟，2008年3月底成為申根公約會員國。積極參與聯合國維和行動與推廣人權，2018-2019年擔任聯合國安理會非常任理事國。自1989年起波蘭外交政策便以與北大西洋兩岸國家合作為基礎，近年則與美國積極發展關係。波蘭因國家規模及經濟發展快速，在歐盟重要性日增，前任歐盟理事會主席圖斯克（Donald Tusk）為波蘭前總理，歐洲議會則有52名波籍議員。波蘭在中歐區域關係上，1991年與匈牙利、捷克、斯洛伐克組成Visegrád集團（簡稱V4）。",
                "foreign_policy" =>
                    "波蘭對外政策主要以北約及歐盟架構確保其國家安全及促進經濟、社會發展。政府2017-2021年之外交政策綱領臚列外交要務如下：（一）在多變的國際環境下確保波蘭國家安全。（二）保持有利波蘭社會和經濟發展的國際環境。（三）鞏固歐盟在全球事務的地位。（四）確保波蘭鄰國的穩定。（五）利用全球化、城市化、人口變化等重大文明改變，促進經濟增長及文明進步。",
                "time_range" =>
                    "波蘭屬中歐時區(Central European Time)；日光節約時間為UTC+2(每年3月最後一個星期日至10月最後一個星期日)，較我國時間慢6小時；其他月份為UTC+1，較我國慢7小時",
                "resident" => "駐波蘭代表處",
                "national_flag" => null,
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            114 => [
                "name" => "泰王國",
                "name_in_en" => "Kingdom of Thailand",
                "short_name" => "泰國",
                "short_name_in_en" => "Thailand",
                "capital" => "曼谷",
                "capital_in_en" => "Bangkok",
                "national_day" => "12月 5日 (已故之拉瑪九世皇生日)",
                "join_un_day" => "1946年12月16日",
                "area_size" => "約51萬3,120平方公里",
                "geographic" =>
                    "泰國舊名暹邏（Siam），位居中南半島之心臟地帶，東部及東南部與柬埔寨交界，南接馬來西亞，西鄰緬甸，東北及北部與寮國接壤，南臨暹邏灣，西南面印度洋，地處戰略要衝。地形上寬下窄，西北部及南部為山脈和高原，東北部為高原，中部為平原。",
                "religion" => "逾9成人民信仰佛教",
                "bilaterial_relations" => null,
                "main_bounds" => "泰銖(THB)",
                "exchange_rate" =>
                    "詳細匯率資訊，建議至：臺灣銀行（https://rate.bot.com.tw/xrt?Lang=zh-TW）或兆豐銀行（https://www.megabank.com.tw/personal/foreign-service/forex）網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/6d8e7b24-a15d-4950-b570-20be646f7a32.gif",
                "is_diplomatic" => 0,
                "language" => "主要語言為泰語",
                "main_media" =>
                    "一、英文報：曼谷郵報（Bangkok Post）。二、泰文報：泰叻報、民意報、經理日報、每日新聞報及新新聞報等。三、中文報：世界日報、中華日報、亞洲日報、星暹日報、京華中原聯合日報及新中原報等。四、無線電視台：主要有第3台、第5台、第7台、第9台及ThaiPBS等。五、廣播：主要為泰國國家廣播電台及MCOT電台等。",
                "population" => "約7,100萬人（2022年）",
                "voltage" => "220伏特",
                "time_difference" => "-1:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/0b87a8d7-4c36-4134-92bd-29e88dc91fab.JPG",
                "political_system" =>
                    "君主立憲制。總理為前泰國陸軍總司令巴育上將(Gen. Prayut Chan-ocha)，渠自2014年5月22日政變接管政府後擔任臨時政府總理；2019年3月24日泰國會大選後，渠經國會參眾議院投票獲選再度出任總理，任期4年（至2023年）。",
                "history_intro" =>
                    "1370年建國，現節基王朝始於1782年，1932年改制施行君主立憲，以泰王為國家元首，1939年定國名為泰王國（Kingdom of Thailand）。現任泰王為拉瑪十世瑪哈瓦吉拉隆功。",
                "parliament" =>
                    "泰國於2019年3月24日舉行國會大選，新國會包括參議院250席、眾議院500席。參議院議員由軍政府進行遴選，眾議院由人民選出，公民力量黨獲民主黨及泰自豪黨等15個政黨支持，取得參眾兩院500票過半，推舉巴育擔任總理。",
                "cabinet" =>
                    "泰國政府採內閣制，最高行政機關為總理府，總理由國會眾議院提名獲通過後，再由國會議長奏請泰王任命。共設有：1.總理府2.國防部3.財政部4.外交部5.工業部6.教育部7.衛生部8.農業部9.交通部10.高等教育、科學研究暨創新部11.勞工部12.商業部13.內政部14.司法部15.能源部16.數位經濟暨社會部17.文化部18.自然資源暨環境部19.觀光暨體育部20.社會發展暨人類安全部等20個部會，全體閣員包括總理人數依憲法規定不得超過36人，任期4年。泰國國會參眾兩議院於2019年6月5日共同選出巴育擔任泰國第30屆總理。下次大選預定於2023年5月7日以前辦理。",
                "judiciary" => "司法部、法院、憲法法庭及軍事法庭",
                "headman" =>
                    "瓦吉拉隆功(King Maha Vajiralongkorn Bodindradebayavarangkun)",
                "fa_minister" => "敦（Don Pramudwinai）",
                "major_political_parties" =>
                    "泰國現主要政黨包括為泰黨、公民力量黨、民主黨、長遠進步黨及泰自豪黨。",
                "financial_incoming" =>
                    "依據泰國政府發布之新聞資料， 2022 財政年度預算共3.1兆泰銖，主要側重於減緩疫情衝擊及相關振興措施。預算分為經常性支出2.36兆泰銖、償還國庫準備金5.96億泰銖、償還準備金200億泰銖、投資支出6240億泰銖、償還貸款1000億泰銖。國庫收入預測為 2.4兆泰銖，預算赤字為 7000 億泰銖。教育部將佔預算最高比例，其次是內政部、財政部、國防部及交通部等。",
                "export_value" => "2021年為2,696億美元。",
                "import_value" => "2021年為2,296億美元。",
                "export_item" =>
                    "電腦及其週邊零組件、小客車及機動車輛、積體電路、汽車及其零組件、載貨用機動車輛、石油煉製品、天然橡膠、黃金、稻米、空氣調節器等。",
                "import_item" =>
                    "石油、積體電路、黃金、電話機、汽車零組件、石油及提自瀝青礦物之油類、石油氣、鋼鐵製品、電腦及其週邊零組件、航空器。",
                "main_export_countries" =>
                    "美國、中國大陸、日本、越南、馬來西亞、香港、澳洲、新加坡、印尼、印度（臺灣名列第16位）。",
                "main_import_countries" =>
                    "中國大陸、日本、美國、馬來西亞、臺灣（名列第5位）、韓國、阿拉伯聯合大公國、印尼、新加坡、越南。",
                "export_to" => "2021年為70.24億美元。",
                "import_from" => "2021年為59.6億美元。",
                "foreign_relationship" =>
                    "泰國目前與全球179個國家有正式外交關係，有29個國際組織常設在曼谷。",
                "foreign_policy" =>
                    "泰國外交政策向採「中立外交」，與世界各國及周邊鄰國均維持友好關係，另亦積極參與東協組織（ASEAN）及聯合國（UN）之相關會議及活動。",
                "time_range" => "較臺灣慢1小時",
                "resident" => "駐泰國臺北經濟文化辦事處",
                "national_flag" => null,
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            115 => [
                "name" => "海地共和國",
                "name_in_en" => "Republic of Haiti",
                "short_name" => "海地",
                "short_name_in_en" => "Haiti",
                "capital" => "太子港",
                "capital_in_en" => "Port-au-Prince",
                "national_day" => "1月 1日",
                "join_un_day" => "1945年10月24日",
                "area_size" => "27,750平方公里",
                "geographic" =>
                    "位於加勒比海Hispaniola島西部，東與多明尼加接壤，西與古巴隔海相望。",
                "religion" => "天主教、基督教、伏都教(Voodoo)",
                "bilaterial_relations" => null,
                "main_bounds" => "古德（Gourde, HTG）",
                "exchange_rate" =>
                    "1美元兌換153古德 (2023年3月，但匯率變動大，建議隨時上網查詢)",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/03557d4a-9214-494d-92b8-5dad33bfd277.png",
                "is_diplomatic" => 1,
                "language" =>
                    "海地官方語言為克雷奧語(Créole)與法語併行，全國90%人口使用克雷奧語；廣播及電視以克雷奧語為主、法語節目較少；駐海地外交官員以使用法語、英語及西班牙語三種語文為主。",
                "main_media" =>
                    "Le Nouvelliste(日報)、Le National (電子報)、Haiti en Marche(週報。Juno7(網路新聞)、VantbefInfo(網路新聞)、HaitiLibre(網路新聞)、Haiti 24(網路新聞)、HPN(網路新聞)、Rezonodwes(網路新聞)、RFM(廣播網路新聞)。Radio Télévision Nationale d’Haiti(廣播電視)、Radio Télé Ginen(廣播電視)、Radio Télévision Métropole(廣播電視)、Radio Télévision Caraïbe(廣播電視)、Radio Télé Pacific (廣播電視)、 Magik 9（廣播）、Télé20（電視）等。",
                "population" => "1,190萬(2021年預估)。",
                "voltage" =>
                    "海地電壓為110伏特，插座型式與臺灣相同；海地電力公司供電不定且電壓不穩定，容易造成電器損壞。",
                "time_difference" => "-12:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/0dd33cbb-3f79-40f4-8956-cb87efc96a6e.jpg",
                "political_system" => "共和國",
                "history_intro" =>
                    "海地位於加勒比海Haiti（或稱Hispaniola）島西部，1502年該島正式成為西班牙殖民地。1697年西班牙將該島西部割讓予法國，海地成為法國殖民地。1804年1月1日海地脫離法國獨立。",
                "parliament" =>
                    "國會分為參議院與眾議院。參議院共有30席，參議員任期6年，每2年改選1/3，眾議院共有119席，眾議員任期4年。參議院議長任期1年兼任國會議長，眾議院議長任期1年兼任國會副議長。兩院議長由議員互選產生。自2020年1月13日起參議院部分議員及眾議院全部議員之任期屆滿，海地國會目前無法正常運作，尚待海政府舉辦選舉補實。最後三分之一參議員原應於2022年1月10日任期屆滿，經協議後同意延長一年至2023年1月9日。目前海地因治安問題無法舉辦選舉，因此目前政壇已無民意代表監督當前政府。",
                "cabinet" =>
                    "內閣閣員區分為Ministre(部長)及Secrétaire d’Etat(國務秘書)。",
                "judiciary" =>
                    "分最高法院、上訴法院及預審法院三級制；最高法院院長兼任司法最高委員會主席，係司法機關首長。",
                "headman" =>
                    "總統摩依士(Jovenel MOÏSE )( 2021年7月7日遇害身亡)。目前由昂利（Ariel HENRY）總理主持部長會議處理國事。",
                "fa_minister" => "吉內瑜(Jean Victor GÉNÉUS)",
                "major_political_parties" =>
                    "海地政黨林立，主要政黨有：光頭黨(PHTK)、沖洗家庭(FANMI LAVALAS, FL)、真理黨(VERITE)、KID黨、AAA黨、團結聯盟(INITE)、OPL黨、海地進步解放新盟(LAPEH)、FUSION黨、BOUCLIER黨、PITIT DESALIN黨、CONSORTIUM黨、En Avant黨、人民民主運動（Secteur Démocratique et Populaire, SDP）、Mouvement pour la Transformation et la Valorisation d’Haïti（MTVAYITI）等。",
                "financial_incoming" =>
                    "2020-2021年會計年度(2020年10月1日起至2021年9月30日止)政府歲出預算約1,930億古德(約19億美元)。",
                "export_value" => "14.9億美元 ( 2021年)",
                "import_value" => "62.7億美元(2021年)",
                "export_item" => "成衣、精油、回收資源、可可、芒果、鰻苗、龍蝦",
                "import_item" =>
                    "糧食、礦油、工業製品、機械及運輸設備、化工製品、食用油",
                "main_export_countries" =>
                    "美國(84%)、多明尼加(3.2%)、加拿大(3%)及墨西哥(2.1%)",
                "main_import_countries" =>
                    "美國(20.7%)、中國(18.8%)、荷屬安地列斯(15.7%)及印尼(8.5%)",
                "export_to" => "5,110萬美元(2021年)",
                "import_from" => "400萬美元(2021年)",
                "foreign_relationship" =>
                    "海地與大部分國家建交，其中如中華民國、教廷、多明尼加、美國、法國、加拿大、德國、墨西哥、委內瑞拉、古巴、巴西、阿根廷、西班牙、瑞士、巴拿馬、智利、巴哈馬、英國、日本等19國在海地設有大使館；歐盟在海地設有代表團，聯合國於海地設有聯合國海地整合辦公室（BINUH）。",
                "foreign_policy" => "奉行獨立自主之外交政策。",
                "time_range" =>
                    "海地位於格林威治(GMT)-5時區，較臺灣慢13小時。3至11月實施夏令日光節約時間，較臺灣慢12小時。",
                "resident" => "我國在海地首都太子港設有大使館",
                "national_flag" => "由上藍、下紅、中間為國徽所組成的旗幟。",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            116 => [
                "name" => "澳大利亞聯邦",
                "name_in_en" => "Commonwealth of Australia",
                "short_name" => "澳大利亞、澳洲",
                "short_name_in_en" => "Australia",
                "capital" => "坎培拉",
                "capital_in_en" => "Canberra",
                "national_day" => "1月 26日",
                "join_un_day" => "1945年10月24日",
                "area_size" => "7,692,024平方公里(台灣之213.78倍）",
                "geographic" =>
                    "位於太平洋西南方，介於南緯10度41分至43度39分；東經113度9分至153度39分之間。",
                "religion" => "基督教、天主教及英國國教",
                "bilaterial_relations" => null,
                "main_bounds" => '澳元（Australian Dollar, A$)',
                "exchange_rate" =>
                    "約為1澳元兌換21.5元新台幣，惟須視匯率浮動情況而定，詳細匯率資訊建議至臺灣銀行(https://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/e3555bf4-9ea9-42ec-b915-2cea24f6a357.gif",
                "is_diplomatic" => 0,
                "language" =>
                    "澳洲並無法定的官方語言，但依據通用習慣，英語為全國性的語言。「澳式英語」（Aussie English）大致與其他英語並無顯著分別，但部分特殊單字、詞彙的發音語調，以及口語、俚語、片語，為澳洲所獨有。例如：打招呼用”G’day mate”，”Ta”代表「謝謝」，「再見」可說成”See ya”，最常聽到澳洲人琅琅上口的口語則是”No worries”，意指「不客氣、別擔心、沒關係、當然」。",
                "main_media" =>
                    "報紙：全國性報紙有「澳洲人報」(The Australian)及「澳洲金融評論報」(The Australian Financial Review)、「雪梨晨鋒報」(Sydney Morning Herald)；地方重要報紙則有「坎培拉時報」(The Canberra Times)及墨爾本之「時代報」(The Age)、「西澳人報」(The West Australian)等。 廣播及電視台：公共電視台包括澳洲廣播公司(ABC)、特別服務廣播電視台(SBS)及原住民電視台(National Indigenous Television)；商業電視台主要為「第七頻道」(Seven Network)、「第九頻道」(Nine Network)及「第十頻道」(Network Ten)；其它尚有WIN TV、Prime TV、The Golden West Network、NBN Television等地區電視台。",
                "population" => "約2,500萬人",
                "voltage" => "220-240伏特、插頭為八字型。",
                "time_difference" => "+3:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/2a1c8b60-0a6d-41d7-aea8-f5a7cc643a83.jpg",
                "political_system" =>
                    "設有參、眾兩院之責任內閣制，中央設聯邦政府，地方則有新南威爾斯州（首府：雪梨）、昆士蘭州（首府：布里斯本）、維多利亞州（首府：墨爾本）、南澳州（首府：阿德雷得）、西澳州（首府：柏斯）、塔斯馬尼亞州（首府：霍巴）等6州，以及北領地(Northern Territory)、澳州首都特區(Australian Capital Territory)等2特別區",
                "history_intro" =>
                    "澳洲於17世紀中葉為荷蘭人發現，1788年英國海軍菲利浦（Arthur Phillip）船長率領艦隊正式以英王喬治三世之名登陸澳洲，並將之納入英國殖民地版圖。19世紀澳洲劃分成6個殖民地並分別成立自治政府，1901年該6個自治政府組成澳大利亞聯邦後宣布獨立並制定聯邦憲法，賦予聯邦政府最高行政權力，但奉英王為國家元首，英王所任命之總督(Governor-General)為英王代表，在名義上仍享有最高之權力，實際掌權之政府最高首長則為擔任總理之國會多數黨領袖，澳洲現為大英國協之一員。",
                "parliament" =>
                    "國會制度及國會議員人數：澳洲聯邦國會參議員共76人，參照美國憲政規範，訂定各州不論人口多寡，應具有相同數目之參議員，由政黨提名人選名單(類似我不分區立委選制)；聯邦6州每州各有12 位參議員，任期6 年，惟首都領地坎培拉及北領地各有2 位參議員，任期3 年；參院每3年改選一半議席。聯邦眾議員共151人，任期3年，依據澳洲各地人口數目訂出選區及應選議席數目。",
                "cabinet" =>
                    "澳洲憲政規範，聯邦政府係由眾議院多數黨組閣。2022年5月21日澳洲舉行聯邦國會大選，工黨在聯邦眾議院贏得77席勝選，並組成多數政府，工黨領袖 Anthony Albanese眾議員成為澳洲第31任總理。Anthony Albanese政府主要內閣閣員：副總理兼國防部長Richard Marles眾議員、外交部長Penny Wong參議員、財政部長Jim Chalmers眾議員、金融部長Katy Gallagher參議員、貿易暨旅遊部長Don Farrell參議員，與氣候變遷暨能源部長Chris Bowen眾議員等。",
                "judiciary" =>
                    "澳洲司法為英美法體系，聯邦法院體系採三審制：澳洲高等法院（High Court of Australia）為最高法院；聯邦首席大法官（the Chief Justice）及其他六位大法官由聯邦政府提名並由總督指派。各州法院採三審制：最高法院（Supreme Court）為各州最高法院；惟坎培拉及北領地採二審制。",
                "headman" =>
                    "澳洲為大英國協成員，奉英國國王查爾斯三世為元首，英王代表之聯邦總督則由總理建請英國國王同意任命，現任總督為David Hurley。",
                "fa_minister" => "Senator Penny Wong (2022年5月23日上任）",
                "major_political_parties" =>
                    "工黨(Australian Labor Party)、自由黨(Liberal Party of Australia)、國家黨(The Nationals)、綠黨(Australian Greens)",
                "financial_incoming" =>
                    "2022-23會計年度預估(預算案)財政赤字為780億澳元",
                "export_value" =>
                    "3,435億9,477萬美元 (2021，Global Trade Atlas資料)",
                "import_value" =>
                    "2,475億7,105萬美元(2021，Global Trade Atlas資料)",
                "export_item" =>
                    "鐵礦砂、煤、石油氣及其他烴類氣、黃金、石油原油、小麥及混合麥、人造剛玉、銅礦砂及其精礦、冷凍牛肉、未鍛軋鋁(2021，Global Trade Atlas資料)",
                "import_item" =>
                    "石油製品、轎客車、貨運車、電腦及零組件(自動數據處理設備及其部件等)、電話機、藥劑、石油原油、黃金、抗血清/疫苗等、醫療器具 (2021，Global Trade Atlas資料)",
                "main_export_countries" =>
                    "中國大陸、日本、韓國、印度、美國、台灣、新加坡、紐西蘭、印尼、越南(2021，Global Trade Atlas資料)",
                "main_import_countries" =>
                    "中國大陸、美國、日本、泰國、德國、馬來西亞、新加坡、韓國、印度、義大利(2021，Global Trade Atlas資料) (台灣位居第14名)",
                "export_to" => "48億5,573萬美元 (2021，Global Trade Atlas資料)",
                "import_from" =>
                    "121億2,418萬美元 (2021，Global Trade Atlas資料)",
                "foreign_relationship" =>
                    "澳洲為聯合國創始會員國，恪遵自由、民主、人權之普世價值，積極參與聯合國在世界各地之維和任務，其與歐洲、美國及鄰邦紐西蘭間之傳統邦誼及軍事、經貿、文化交流合作關係頗為緊密，亦積極開拓亞太地區國家之雙邊及建立與「東南亞國協(ASEAN)」之多邊合作往來。澳洲另頗為關注其週邊南太平洋國家之政經發展，顯以區域和平穩定之主導角色自居。",
                "foreign_policy" =>
                    "一、	Anthony Albanese政府的三大外交支柱為「澳美同盟」、「強化及深化與區域國家關係」，與「支持多邊體制」；此外，亦承諾持續堅定支持「四方安全對話」（QUAD）及「澳-英-美安全夥伴」（AUKUS）。二、	Albanese政府關注「氣候行動」，認為「氣候行動」是提升澳洲在太平洋島國影響力與國際地位的關鍵。三、	積極經營太平洋島國與東南亞關係為Albanese政府外交要務。澳洲加大投資太平洋島國，致力成為島國的首要安全、經貿與發展夥伴。在東南亞部分，澳洲秉持「以東協為中心」，持續提升與東協的整體關係，並重視與東南亞各國的交往，承諾增加對東南亞的援助發展經費，及派任東南亞特使。",
                "time_range" =>
                    "「東部時間」：4-9月間較台灣快2小時，10月第一個週日凌晨至隔年4月第一個週日凌晨部分地區則實施日光節約時間較台灣快3小時。「中部時區」：4至9月間較台灣快1.5小時，10月第一個週日凌晨至隔年4月第一個週日凌晨部分地區則調整日光節約時間較台灣快2.5小時。「西部時區」：與我國之時區相同，並無時差。",
                "resident" =>
                    "我國駐澳代表機構： 駐澳大利亞代表處； 駐雪梨辦事處； 駐墨爾本辦事處； 駐布里斯本辦事處；澳洲駐我國代表機構：澳洲辦事處(Australian Office)",
                "national_flag" =>
                    "http://www.pmc.gov.au/government/australian-national-flag",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            117 => [
                "name" => "烏克蘭",
                "name_in_en" => "Ukraine",
                "short_name" => "烏克蘭",
                "short_name_in_en" => "Ukraine",
                "capital" => "基輔",
                "capital_in_en" => "Kyiv",
                "national_day" => "8月24日",
                "join_un_day" => "1945年10月24日",
                "area_size" => "603,550 平方公里",
                "geographic" =>
                    "烏克蘭位於東歐平原西端：東臨俄羅斯，西臨波蘭及斯洛伐克，西南與匈牙利、羅馬尼亞及摩爾多瓦接壤，南臨亞速海及黑海，西北部與白俄羅斯接壤。",
                "religion" => "東正教及天主教",
                "bilaterial_relations" => null,
                "main_bounds" => "荷林夫納（Ukarainian Hryvnia; UAH）",
                "exchange_rate" =>
                    "1美元約兌換36.56荷林夫納（UAH）（2022年10月）「詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢」",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/customfile/sites/flagurllink/0d0c0967-8d50-447e-b546-9cf5c3ae6254.jpg",
                "is_diplomatic" => 0,
                "language" => "烏克蘭語",
                "main_media" =>
                    "主要媒體有Ukraine Today、Ukrainian Weekly、Kyiv Post",
                "population" => "約4,773萬（2022年1月）",
                "voltage" => "220Ｖ",
                "time_difference" => "-5:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/f2fba679-903a-4cb3-adce-778be6253c0b.JPG",
                "political_system" => "內閣總統制",
                "history_intro" =>
                    "烏克蘭於1240年被蒙古人征服，13至16世紀受波蘭統治，1654年併入俄羅斯，1918年脫離俄國獨立，1922年成為前蘇聯加盟共和國，蘇聯解體後於1991年獨立。",
                "parliament" =>
                    "國會名為Verkhovna Rada，屬單一制國會，共計450席，每屆任期5年，採用混合選舉制：225席由得票率超過5%進入議會的政黨按得票比例分配，另外225席由225個選區選出。本(9)屆議會為2019年7月21日改選產生。現任總統澤倫斯基領導政黨「人民公僕黨(Servant of the People)」、親俄勢力「反對平台-為了生活黨(Opposition Platform-For Life)」、前總統波洛申科領導政黨「歐洲團結黨(European Solidarity)」、前總理季莫申科領導政黨「祖國黨(Fatherland)」及搖滾歌手瓦卡楚克領導的「聲音黨(Voice)」分別以43.9%、11.5%、8.9%、7.6%及6.3%之得票率進入本屆國會。",
                "cabinet" =>
                    "烏克蘭總理是政府最高首長，現任總理為什米加爾(Denys Shmyhal)，於2020年3月4日上任。",
                "judiciary" => "設有憲法法院、最高法院、上訴法院及各地方法院",
                "headman" =>
                    "澤倫斯基(Volodymyr Zelensky) (2019年5月20日就職）",
                "fa_minister" => "Dmytro Kuleba (自2020年3月5日)",
                "major_political_parties" =>
                    "「人民公僕黨(Servant of the People)」、「反對平台-為了生活黨(Opposition Platform-For Life)」、「歐洲團結黨(European Solidarity)」、「祖國黨(Fatherland)」、「聲音黨(Voice)」等。",
                "financial_incoming" =>
                    "GDP: 1950億美元（2021年）；平均國民所得:3,370美元（2021年）",
                "export_value" => "約677億美元（2021年）",
                "import_value" => "約728億美元（2021年）",
                "export_item" =>
                    "含鐵金屬、燃料、石化產品、化學產品、機械設備、運輸工具、食品類",
                "import_item" => "石油及天然氣、機械設備、化學產品",
                "main_export_countries" => "俄羅斯、土耳其、義大利、美國",
                "main_import_countries" => "俄羅斯、德國、波蘭、中國",
                "export_to" => "1億6,140萬美元(2021年)",
                "import_from" => "1億6,694萬美元 (2021年)",
                "foreign_relationship" =>
                    "烏國自1991年獨立之初，即與俄羅斯就克里米亞半島及黑海艦隊管轄權歸屬問題發生爭議。自北約決定東擴後，就積極謀求加入該組織，在北約與俄羅斯之間搖擺不定。俄羅斯是烏克蘭最大貿易夥伴和主要能源供應國，儘管近年來歐盟比重有所上升，但烏克蘭經濟仍離不開俄羅斯，天然氣價格之波動也是影響烏克蘭經濟發展的一個重要指標。在國家安全方面，烏克蘭積極強化與美國及北約國家之軍事合作，除多次參與共同軍事演習外，烏克蘭和美國於2020年10月簽署烏美戰略夥伴憲章。近年美國、歐盟及北約持續給予烏國經濟及軍事上之援助。2022年2月24日俄國入侵烏克蘭，烏克蘭該(24)日宣布與俄羅斯斷交。",
                "foreign_policy" =>
                    "烏克蘭獨立後積極向西方靠攏，在經濟發展及對外政策上也主動靠向歐盟，一向是北約爭取進入前蘇聯地區之碉堡，但為國內經濟現實，烏克蘭也盼加強與俄羅斯、獨立國協及各鄰國之友好關係，在東西方之間尋求平衡。2014年9月16日烏國國會正式批准與歐盟簽署的聯繫國協議，同年12月23日，議會以絕對多數通過放棄不結盟地位法案，決定加強與北約合作，克里米亞被俄兼併及烏克蘭東部領土分裂問題，烏俄關係降至歷史低點。2019年澤倫斯基總統上台後，為消弭烏東內戰，不斷斡旋於歐美各國及俄羅斯之間。2019年2月將加入歐盟及北約作為國家基本方針寫入憲法。惟烏國加入北約之訴求引發俄國強烈不滿，俄國多次要求西方國家禁止烏克蘭加入，並進一步成為2022年2月24日俄國入侵烏克蘭之導火線。2022年6月23日歐洲議會向烏克蘭授予歐盟候選國身分，烏克蘭目前積極爭取歐美西方陣營之財政及軍事奧援以對抗俄國之入侵。",
                "time_range" => "夏季慢5小時；冬季慢6小時。",
                "resident" =>
                    "我國在烏克蘭未設館處，該國家/地區由我國駐波蘭代表處 (駐波蘭臺北代表處)兼轄。",
                "national_flag" => null,
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            118 => [
                "name" => "烏干達共和國",
                "name_in_en" => "Republic of Uganda",
                "short_name" => "烏干達",
                "short_name_in_en" => "Uganda",
                "capital" => "康培拉 (Kampala)",
                "capital_in_en" => "Kampala",
                "national_day" => "10月 9日",
                "join_un_day" => "1962年10月25日",
                "area_size" => "241,038平方公里",
                "geographic" => "非洲東部之內陸國",
                "religion" => "基督教(45.1%)、天主教(39.3%)、伊斯蘭教(13.7%)",
                "bilaterial_relations" => null,
                "main_bounds" => "Uganda Shillings (UGX)",
                "exchange_rate" => '1 US$≒3,688 UGX (2022/12)',
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/cf07e694-d62a-491c-8119-e058bb1eb189.png",
                "is_diplomatic" => 0,
                "language" => "英語",
                "main_media" =>
                    "New Vision官方日報、The Monitor 民營日報、UBC TV 烏干達國家電視台、UBC Radio 烏干達國家廣播台。",
                "population" => "4,843萬人(2022年)",
                "voltage" => "220伏特",
                "time_difference" => "-5:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/3a899719-585d-43c9-aedc-31b4b6e71b45.JPG",
                "political_system" => "總統制",
                "history_intro" =>
                    "英國勢力於1860年代開始進入烏干達，1888年此一地區由英王室授權英國東非公司接管，1894年英國宣布此地區之Buganda、Bunyoro、Toro、Ankole等地為其保護地。1956年烏國民主黨（Democratic Party, DP）成立，該黨以建立統一、獨立之烏干達為目標，惟布干達（Buganda）族人則希望仍能於獨立後維持其王國體制。繼DP之後成立之政黨有UNC、UPC等。DP、UPC及布干達議會（Buganda Council）為60年代烏國三大政治勢力。1961年烏干達舉行大選，由DP黨魁Benedicto Kiwanuka暫時出任總理（1961-1962年4月），惟渠不受布干達族歡迎，1962年4月舉行之國會選舉UPC贏得多數，由UPC與代表布干達議會利益之Kabaka Yekka黨（簡稱KY）組聯合政府。1962年10月9日烏干達正式獨立，由UPC黨魁Milton Obote擔任第一任總理。其憲法規定烏干達為布干達（Buganda）、Ankole、Bunyora及Toro等4個自治區所組成之聯邦。1963年烏干達改為單一共和國由布干達王Edward MutesaⅡ擔任虛位元首。1966總統權力越來越大，陸軍參謀長伊迪‧阿敏（Idi Amin）於1971年發動軍事政變奪取政權，在他9年獨裁統治下約有30萬烏干達人喪生。1979坦尚尼亞入侵結束阿敏政權，但彌爾頓‧奧伯托（Milton Obote）當政下的人權迫害同樣導致10萬人喪生，在1985年被趕下台。1986年憲法，總統成為具實權的國家元首，5年一任。現任總統穆塞維尼（Yoweri Museveni）自1986年開始執政，其治理下政經情勢相對穩定。穆氏於1996、2001、2006年、2011年、2016年及2021年多次連任總統。",
                "parliament" =>
                    "一院制，共427席，其中290席由全民直選，112席婦女，25席由法律保障之特殊團體提名（軍隊10名，身心障礙人士5名，青年5名，勞工5名)，另前政府官員可由總統提名。任期5年。",
                "cabinet" => "內閣閣員由總統任命。",
                "judiciary" => "設有上訴法院及高等法院。",
                "headman" =>
                    "穆塞維尼(Yoweri Kaguta Museveni)總統，由人民直選，任期5年",
                "fa_minister" => "奧東戈(Jeje Odongo)",
                "major_political_parties" =>
                    "執政黨為全國抵抗陣線（National Resistance Movement, NRM），占國會多數席次。民主改革論壇黨（Forum for Democratic Change, FDC）是主要在野黨。",
                "financial_incoming" =>
                    "2019年政府財政收入16.16兆美元，支出17.8兆美元",
                "export_value" => 'US$60.48億 (2020)',
                "import_value" => 'US$ 78.66億 (2020)',
                "export_item" => "咖啡、漁產品、茶葉、棉花、花卉、園藝產品",
                "import_item" => "資本設備、汽車、石油、醫療品、穀類",
                "main_export_countries" =>
                    "肯亞、阿拉伯聯合大公國、剛果民主共和國、盧安達、剛果、義大利  (2020)",
                "main_import_countries" =>
                    "中國大陸、印度、阿拉伯聯合大公國、肯亞、日本、沙烏地阿拉伯、印尼、南非(2020)",
                "export_to" => "307萬美元(2022)",
                "import_from" => "90萬美元  (2022)",
                "foreign_relationship" =>
                    "1962年10月25日加入聯合國。為非洲聯盟（AU）、大英國協、七七集團、不結盟運動組織會員國。1972年阿敏總統驅逐5萬亞洲人，被驅逐者嗣為美、英等國接受。烏國與鄰近國家肯亞、尼日、蘇丹及盧安達等國均有邊界糾紛及難民問題。烏國在穆塞維尼政府主導下，逐漸邁向多黨政治及自由主義經濟，並鼓勵外人投資。目前於烏國首都設有大使館之國家有美、俄、中國大陸、韓國、英國等國。東非共同體（East African Community, EAC）由肯亞、坦尚尼亞和烏干達、於2000年重新組織成立，三國成立關稅同盟，至2007年6月另加入蒲隆地與盧安達兩會員國。",
                "foreign_policy" =>
                    "採取睦鄰政策，致力改善與鄰國關係；加強與先進國家關係，以獲得優惠的貿易政策、經濟援助及外人投資。",
                "time_range" => "較台灣慢5小時",
                "resident" => "駐南非代表處",
                "national_flag" =>
                    "烏干達國旗由六道橫向寬條垂直排列，從上到下分別為黑色、黃色、紅色、黑色、黃色、紅色；第3、4道寬條中間有一白色圓形包圍著烏干達國鳥──灰冠鶴的圖案，面向國旗懸掛的方向。黑、黃、紅三色承襲自烏干達人民大會黨，分別代表非洲人、非洲的陽光和非洲人民的團結。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            119 => [
                "name" => "烏拉圭共和國",
                "name_in_en" => "Oriental Republic of Uruguay",
                "short_name" => "烏拉圭",
                "short_name_in_en" => "Uruguay",
                "capital" => "蒙特維多市(Montevideo)",
                "capital_in_en" => "Montevideo",
                "national_day" => "8月 25日",
                "join_un_day" => "於1945年12月18日加入。",
                "area_size" => "面積為176,215平方公里，約台灣5倍大。",
                "geographic" =>
                    "烏拉圭位於南美洲東南端，西南與阿根廷以烏拉圭河及銀河為界，東北與巴西比鄰，東南濱大西洋，人口約為354萬人，面積為176,215平方公里，約台灣5倍大，人均國內生產總值約為17,819美元(2020年)。烏國地勢多屬丘陵地形，無高山峻嶺，最高山名Cerro Catedral，海拔僅513公尺，亦無原始森林、沙漠地區或廣漠平原，農牧業發達，自銀河（Río de la Plata）河口至巴西邊境綿延達500公里之沿岸沙灘係烏國發展觀光事業最主要的天然資源。",
                "religion" => "天主教",
                "bilaterial_relations" => null,
                "main_bounds" => "披索( PESO)",
                "exchange_rate" => '美金與PESO之匯率為US$1＝39.679(2023年3月)',
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/7f1dc848-8ce1-444a-8733-37596cc23f1f.GIF",
                "is_diplomatic" => 0,
                "language" => "西班牙語",
                "main_media" =>
                    "烏拉圭廣播事業頗為發達，均以西班牙語播出。烏國電視系統為PAL-N ，國內攜來之NTSC系統電視機僅能以黑白畫面收視。烏京重要日報有：「國家報」（EL PAIS）、「觀察家報」（El OBSERVADOR）、「共和報」（LA REPUBLICA）。",
                "population" => "354萬人",
                "voltage" =>
                    "電壓為220V之電源，主要插座規格AC 50Hz 1.3phase 220volt 2.3Wires，為單排三孔型，可預先自國內購妥萬用插頭多只備用。電視系統為PAL-N System。",
                "time_difference" => "-11:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/e313a716-5f82-4949-8f87-48059f9d92b9.jpg",
                "political_system" =>
                    "烏國為總統制民主國家，採三權分立，立法權屬於國會(參議院及眾議院)、行政權屬於總統與內閣、司法權屬於各級法院。1、採行總統制之民主共和體制，行政、立法、司法三權分立。2、國會採兩院制（參、眾兩議院），參議院30席，眾議院99席，均由人民直選，任期5年。",
                "history_intro" =>
                    "1、16世紀以前，烏境原屬驍勇善戰、強悍不馴之印第安民族居地，1516年西班牙探險家迪亞斯( Juan Díaz de Solís)首抵烏境，惟因貴重金屬礦產貧乏而未受其重視，至1776年被西班牙人吞併後歸屬西班牙駐銀河總督轄區。2、1811年烏國國父阿爾提格斯( José J. Artigas )領導革命，旋因巴西葡萄牙人南侵，革命軍內部傾軋，阿氏被迫逃亡巴拉圭，幽居該國30年後病逝。3、嗣該地區醞釀獨立運動，由拉法耶哈 (Juan Antonio Lavalleja) 率領33位追隨者繼續鼓吹革命，終於1825年8月25日宣佈獨立並訂為國慶日。",
                "parliament" =>
                    "國會採兩院制（參、眾兩議院），參議院30席，眾議院99席，均由人民直選，任期5年。",
                "cabinet" => "閣員由總統任命，經國會同意後選出。",
                "judiciary" =>
                    "司法權獨立，設有最高法院及行政訴訟法院，各有法官5人。",
                "headman" =>
                    "拉卡耶波 (Luis Lacalle Pou) (2020年3月1日就職，任期5年）。",
                "fa_minister" => "布斯提優(Francisco Bustillo)",
                "major_political_parties" =>
                    "烏國政黨林立，重要者計有：廣泛陣線聯盟(Frente Amplio)、國家黨(白黨)(Partido Nacional)、紅黨(Partido Colorado)、人民黨(Partido de La Gente)。",
                "financial_incoming" =>
                    "國內生產毛額：712億美元(2022預估)；平均國民所得：20,019美元 (2022預估)。",
                "export_value" => "115億9,400萬美元(2022年)",
                "import_value" => "109億1,700萬美元(2022年)",
                "export_item" =>
                    "牛肉、大豆、木材、乳製品、稻米、牛雜碎、電力、車輛、塑膠製品及麥芽等。",
                "import_item" =>
                    "客車、電話機、礦物或化學氮肥、貨車、殺蟲劑、汽車零配件、礦物或化學肥料、醫藥製劑、曳引車及聚縮醛等。",
                "main_export_countries" =>
                    "中國大陸、巴西、阿根廷、美國、荷蘭。",
                "main_import_countries" =>
                    "巴西、中國大陸、阿根廷、美國、德國。",
                "export_to" => "6,076萬美元(2022年)",
                "import_from" => "1,173萬美元(2022年)",
                "foreign_relationship" =>
                    "烏拉圭與世界各國原則均維持友好關係，惟烏國為追求市場開放，力圖推動南方共同市場(Mercosur)放寬對外談判機制，與阿根廷立場嚴重分歧並產生摩擦，造成Mercosur內部緊張。",
                "foreign_policy" =>
                    "烏拉圭政府除維持與美國、歐盟、中國及「南方共同市場」(MERCOSUR)等主要貿易對象之良好關係，亦擬開拓卡達等中東新興市場。",
                "time_range" => "較台灣慢11小時",
                "resident" => "無，由我國駐阿根廷代表處兼轄。",
                "national_flag" =>
                    "烏拉圭國旗 旗地為九條等距、藍白相間的橫條，白色左上角繪有五月太陽，太陽有十六道三角形和波浪形的光芒。",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            120 => [
                "name" => "烏茲別克共和國",
                "name_in_en" => "Republic of Uzbekistan",
                "short_name" => "烏茲別克",
                "short_name_in_en" => "Uzbekistan",
                "capital" => "塔什干(Tashkent)",
                "capital_in_en" => "Tashkent",
                "national_day" => "9月1日",
                "join_un_day" => "1992年3月2日",
                "area_size" => "448,900平方公里",
                "geographic" =>
                    "位於中亞地區中部，北鄰鹹海與哈薩克，東接吉爾吉斯與塔吉克，西與土庫曼、南與阿富汗接壤，為雙內陸國(即自身無出海口，5個鄰國也均為內陸國)，東西寬1,425公里，南北長930公里。",
                "religion" => "伊斯蘭教",
                "bilaterial_relations" => "{{--br /--}}",
                "main_bounds" => '索姆(Uzbekistani So\'m；UZS)',
                "exchange_rate" =>
                    "1美元約兌換11276索姆(Uzbekistani Sums,UZS)(2022年12月)「詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢」",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/b43bda3d-e9c9-4bac-965c-43b1759ea7ca.GIF",
                "is_diplomatic" => 0,
                "language" => "烏茲別克語",
                "main_media" =>
                    "報紙：Norodnoye Slovo、Pravda Vostoka； 廣播電視：烏茲別克國營電視台、MTRK、Bagdad-TV、Muloqot。",
                "population" => "約3,084萬人(2022年)",
                "voltage" => "220V",
                "time_difference" => "-3:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/0ee3ee7a-825b-49e3-b518-9d3b2b3354c6.jpg",
                "political_system" => "總統制",
                "history_intro" =>
                    "1991年8月莫斯科發生「8人小組」政變失敗後，烏茲別克於8月31日經公民投票通過，脫離蘇聯獨立建國。1992年通過憲法，規定烏國為民主共和國，並採行總統制。同年3月2日加入聯合國，並與歐盟簽署諒解協議。烏茲別克第一任總統卡里莫夫（Islam Karimov）在位長達25年，直到2016年9月去世，同年由前總理米爾濟約耶夫（Shavkat MIRZIYOYEV）以約近90%得票率繼任總統，米氏上任後改善與鄰國關係，進行廣泛的經濟、司法和社會改革。2021年10月烏茲別克總統大選，米爾濟約耶夫競選連任成功。",
                "parliament" =>
                    "國會稱最高議會(Oliy Majlis)，分為上、下兩院：上院有100席，其中84席由各州議會選出，任期5年，16席由總統指派具聲望且在科學、藝術、文學及商業等專業領域有豐富經歷者擔任；下院150席，由人民直選選出，任期5年，現有4個黨團，分別為「烏茲別克自由民主黨」(53席)、「烏茲別克民族復興民主黨」(36席)、「烏茲別克人民民主黨」(22席)、「正義社會民主黨」(24席)、「烏茲別克生態環境黨」(15席)。",
                "cabinet" =>
                    "內閣係烏國最高行政機關，現任總理為阿里波夫(Abdulla Aripov，自2016年12月14日起)。根據憲法規定，總理由總統提名，經國會同意後任命。",
                "judiciary" =>
                    "為最高法院與地方法院兩級。另有最高檢察官署，主管犯罪偵查。",
                "headman" =>
                    "米爾濟約耶夫(Shavkat Mirziyoyev；第一任:2016年12月至2021年11月6日，第二任:自2021年11月6日迄今)",
                "fa_minister" => "Bakhtiyor Saidov(代理部長)",
                "major_political_parties" =>
                    "烏茲別克自由民主黨(LDPU)，人民民主黨(NDP，前身為共產黨)，國家民主黨(Fidokolar)，民族復興民主黨(MTP)，公正社會民主黨(Adolat)。",
                "financial_incoming" =>
                    "國內生產毛額(GDP)804億美元(2022年)；平均國民所得2,255美元（2022年）",
                "export_value" => "193.1 億美元（2022年）",
                "import_value" => "306.7 億美元（2022年）",
                "export_item" =>
                    "貴金屬、礦石、燃料、其他礦產品、紡織品、蔬菜和運輸設備等",
                "import_item" =>
                    "石油、天然氣、機械、設備、化學製品、食品、燃料和其他礦產品、運輸設備、機械、化學製品、食品、酒精和非酒精飲料、醋和煙草、非貴金屬和紡織品",
                "main_export_countries" =>
                    "俄羅斯、烏克蘭、中國、哈薩克、土耳其、孟加拉",
                "main_import_countries" =>
                    "中國、俄羅斯、南韓、德國、土耳其、哈薩克",
                "export_to" => "2,641萬美元萬美元(2022年)",
                "import_from" => "93萬美元 (2022年)",
                "foreign_relationship" =>
                    "與俄羅斯在政治、經濟、安全等各領域有傳統關係，合作密切，十分重視對俄關係。與中亞鄰國關係總體穩定，但也因邊界、領土、水資源等問題時有摩擦。",
                "foreign_policy" =>
                    "烏茲別克獨立建國初期，為避免前蘇聯各共和國間政經關係瓦解，其外交政策係以維繫獨立國協為主要目的，然因獨協各成員國間彼此缺乏互信，致使烏國的外交政策受挫。美國曾於2001年在阿富汗反恐戰爭時在烏國設立空軍基地，2005年在烏國要求下撤出，2012年烏茲別克提出「外交政策構想」，規定烏茲別克不參加任何軍事政治集團，不允許在本國領土上設立外國軍事基地和設施。",
                "time_range" => "較台灣慢3小時",
                "resident" => "無駐館，相關業務由駐俄羅斯代表處兼轄",
                "national_flag" => null,
                "area_name" => "亞西地區",
                "area_name_in_en" => "West Asia",
            ],
            121 => [
                "name" => "牙買加",
                "name_in_en" => "Jamaica",
                "short_name" => "牙買加",
                "short_name_in_en" => "Jamaica",
                "capital" => "京斯敦",
                "capital_in_en" => "Kingston",
                "national_day" => "8月6日",
                "join_un_day" => "1962年9月18日",
                "area_size" => "10,991平方公里",
                "geographic" =>
                    "位於加勒比海中央偏西地區，為加勒比海地區第三大島，北距古巴145公里，東距海地161公里。",
                "religion" => "62.5%基督教、2.6%天主教",
                "bilaterial_relations" => null,
                "main_bounds" => "牙買加幣(JMD)",
                "exchange_rate" => "1美元約兌155牙買加幣 (2021年7月)",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/290f89e7-7be0-4ee8-bd07-72ffe5615d4f.GIF",
                "is_diplomatic" => 0,
                "language" => "英語",
                "main_media" =>
                    "牙買加新聞署：1962年成立。是政府新聞機構。牙買加通訊社：1979年成立。是官方通訊社，隸屬新聞署。新聞出版：主要報刊有《新聞集錦日報》、《明星晚報》，為《新聞集錦日報》的晚報、日報《牙買加紀事報》、《牙買加之聲》周刊、雙周刊《旭日報》。廣播電台和電視台主要有：1959年政府撥款建立的牙買加廣播公司，由政府任命董事會領導。設有廣播電台和電視台。廣播電台一台及二台全天播音。電視台為商業性，每星期播出140小時。1950年建立的牙買加電台，由21個團體合資開辦，全天播音。",
                "population" => "2,816,602人 (2021年)",
                "voltage" => "110V",
                "time_difference" => "-13:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/bff93c0c-94e3-4904-a52a-250c4decaf89.jpg",
                "political_system" =>
                    "牙買加政府採議會政治，分眾議院及參議院。眾院議員直接民選，眾議院領袖由總督任命為總理。參議員則由總理及反對黨領袖共同提名並經總督任命。英國國王為國家元首，英國國王代理人為總督。總督由總理及內閣提名並經英國國王任命。",
                "history_intro" =>
                    "此島原住民為Taino印地安人。1494年，由哥倫布發現。西班牙人於16世紀初期開始移居當地。英國於1655年取得此島，開始種植咖啡、可可及甘蔗等作物。1958年，成為西印度聯邦之一員。1962年，成為獨立國家。",
                "parliament" =>
                    "牙買加國會分參、眾兩院：參議院 (Senate) 議員共21人，由總督依總理及反對黨領袖提名 (分別為13名及8名) 任命之；眾議院 (House of Representatives) 議員現有63名，以直接民選產生，任期5年。在2020年9月國會大選中，勞工黨在眾議院獲得49席，為執政黨，人民民族黨獲得14席，為主要在野黨；因此勞工黨在參議院獲得13席，人民民族黨獲得8席。",
                "cabinet" =>
                    "由總理及各部會首長所組成，負責執行全國行政事務，集體向國會負責，總理由國會多數黨領袖擔任。",
                "judiciary" => "採英美法，分最高法院，上訴法院及地方法院",
                "headman" =>
                    "總督：派屈克·艾倫(Sir Patrick Linton Allen)總理：安德魯·霍尼斯(Andrew Holness)",
                "fa_minister" => "史密絲 (Kamina Johnson Smith)",
                "major_political_parties" =>
                    '人民民族黨(People\'s National Party)、牙買加勞工黨、國家民主運動黨',
                "financial_incoming" => "國內生產毛額139.5億美元 (2020年，IMF)",
                "export_value" => "51.37億美元 (2019年5月-2020年4月，IMF)",
                "import_value" => "12.69億美元 (2019年5月-2020年4月，IMF)",
                "export_item" => "鋁礬土、氧化鋁、蔗糖、咖啡和香蕉等。",
                "import_item" => "石油、食品、機械產品等。",
                "main_export_countries" => "美國、荷蘭、加拿大。",
                "main_import_countries" =>
                    "美國、哥倫比亞、千里達、中國大陸、日本",
                "export_to" => "849.7萬美元 (2020年，國貿局)",
                "import_from" => "583.1萬美元 (2020年，國貿局)",
                "foreign_relationship" => null,
                "foreign_policy" =>
                    "極大化其國際影響力以促進其國家發展，達成「願景2030年國家發展計畫」(Vision 2030 Jamaica National Development Plan)。",
                "time_range" => "較台灣晚13小時",
                "resident" => "無，由我國駐聖克里斯多福及尼維斯大使館兼轄",
                "national_flag" =>
                    "牙買加國旗啓用于1962年8月6日，即牙買加的獨立日。國旗呈長方形，長寬之比為2：1。旗面上有兩道交叉的黃色對角寬頻，把旗面分成四個三角形，上下為綠色，左右為黑色。黃色代表該國的自然資源和陽光，黑色象征人民的創意和力量，綠色象徵未來的希望和國家豐富的農業資源。",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            122 => [
                "name" => "獅子山共和國",
                "name_in_en" => "Republic of Sierra Leone",
                "short_name" => "獅子山",
                "short_name_in_en" => "Sierra Leone",
                "capital" => "自由城",
                "capital_in_en" => "Freetown",
                "national_day" => "4月 27日",
                "join_un_day" => "1961年9月27日",
                "area_size" => "71,740平方公里",
                "geographic" =>
                    "獅國西南瀕大西洋，北部鄰接幾內亞，東部與賴比瑞亞為界。氣候濕熱，僅12月至隔年4月旱季期間較為緩和。",
                "religion" =>
                    "回教人口約78.6%、基督教人口約20.8%、其他宗教信仰人口約0.6%",
                "bilaterial_relations" => null,
                "main_bounds" => "里歐(Sierra Leonean Leone, SLL)",
                "exchange_rate" =>
                    "詳細匯率資訊建議至臺灣銀行(https://rate.bot.com.tw/xrt?Lang=zh-TW )或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/2025dacb-2dac-453e-b5e6-81c776a7d157.GIF",
                "is_diplomatic" => 0,
                "language" =>
                    "官方語言為英語，其他主要語言包括面蝶語(南部)及天內語(北部)。",
                "main_media" =>
                    "SLBS, ABC TV, Radio Democracy 98.1 FM, Kiss FM, SKYY FM, Radio Unamsil, Awoko, The Democrat, Concord Times, Standard Time",
                "population" => "842萬人 (2021)",
                "voltage" => "220伏特",
                "time_difference" => "-8:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/4c1ce80d-449d-4c09-bde5-537f35b3b94e.JPG",
                "political_system" => "共和國/總統制",
                "history_intro" =>
                    "1787年，解放黑奴運動領袖格蘭菲爾．夏普（Granville Sharpe）決定在非洲為英國解放之黑奴建立安居地點，於是建立自由城。1808年，獅子山成為英國殖民地。1961年4月27日，獅子山正式宣布獨立，並成為大英國協之會員國。",
                "parliament" =>
                    "一院制，共146席，132席由人民直選，另14席保留予各省區之傳統部落酋長，任期5年。",
                "cabinet" => "閣員由總統提名，並經國會同意後任命。",
                "judiciary" => "設有最高法院、上訴法院、高等法院及地方法院。",
                "headman" => "總統比歐（Julius Maada Bio）",
                "fa_minister" => "David J. Francis (2021/4/30就任)",
                "major_political_parties" =>
                    '獅子山人民黨（Sierra Leone People\'s Party, SLPP）、全民議會黨（All People\'s Congress Party, APC）。',
                "financial_incoming" =>
                    "2017年政府財政收入6.843億美元，支出9.626億美元",
                "export_value" => "5.32億美元（2020）",
                "import_value" => "11.6 億美元（2020）",
                "export_item" => "鈦礦原石、原木、鑽石、鋁礦、可可豆",
                "import_item" => "米、藥品、車輛、水泥、家禽肉類",
                "main_export_countries" =>
                    "中國、比利時、荷蘭、 羅馬尼亞、阿拉伯聯合大公國",
                "main_import_countries" => "中國、印度、土耳其、美國、荷蘭",
                "export_to" => "2,246,987美元（2022）",
                "import_from" => "325,970美元（2022）",
                "foreign_relationship" =>
                    "獅國1961年9月27日加入聯合國，標榜不結盟政策，為大英國協、非洲聯盟（African Union, AU）及西非國家經濟聯盟組織（Economic Community of West African States, ECOWAS）會員國。與多哥、象牙海岸、奈及利亞等部分西非國家關係友好，並與賴比瑞亞、幾內亞成立瑪諾河聯盟（Mano River Union, MRU）以促進成員國間經濟整合，象牙海岸亦於2008年同意加入該聯盟。 根據聯合國新聞資料， UN Integrated Peacebuilding Office in Sierra Leone (UNIPSIL)於2014年3月31日結束為期15年之維和任務，將由聯合國國家團隊(UN Country Team)接續任務，協助獅國進行憲法審查工作，以及推動獅子山繁榮議程－2013至2018年社經發展策略（Sierra Leone’s Agenda for Prosperity, a social and economic development strategy for 2013-2018）。美國提供獅國在促進民主、良治、人權及糧食安全等方面的援助。獅國請歐盟(European Union )提供2018年3月總統大選相關援助，並邀請歐盟屆時派遣觀選團。",
                "foreign_policy" =>
                    "著重於西非經濟共同體及獅國內戰戰後重建議題，並盼能於2030年前成為中等收入國家。",
                "time_range" => "較臺灣時間慢8小時",
                "resident" =>
                    "我在獅子山未設處，相關事務由我駐奈及利亞代表處及駐英國代表處兼理。",
                "national_flag" =>
                    "綠色象徵農業、高山及天然資源，白色代表團結與正義，藍色代表海洋與自由城港。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            123 => [
                "name" => "玻利維亞",
                "name_in_en" => "Plurinational State of Bolivia",
                "short_name" => "玻利維亞",
                "short_name_in_en" => "Bolivia",
                "capital" =>
                    "憲法首都為蘇克瑞；行政首都為拉巴斯(La Paz)，依玻國憲法規定，首都為Sucre，現僅司法院位於該市。中央政府及國會所在地La Paz則為國內政治、經濟、文化及交通中心，  治安良好，是玻國「事實上的首都」，海拔 3,800 公尺，亦為世界最高首都。La Paz建於 1548 年，人口約百萬人，四週被雪山環抱，景色幽美。",
                "capital_in_en" => "LA PAZ",
                "national_day" => "8月6日",
                "join_un_day" => "1945年11月14日，為聯合國創始會員國。",
                "area_size" => "全國總面積 109 萬 8,581 平方公里。",
                "geographic" =>
                    "南美洲中部之內陸國，國土與秘魯、智利、阿根廷、巴拉圭及巴西接壤",
                "religion" => "天主教",
                "bilaterial_relations" => null,
                "main_bounds" => "玻利比亞諾 ( Boliviano)",
                "exchange_rate" => '1 US$= 6.86 Boliviano(2022年3月)',
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/42960818-39ee-48a2-8667-94260b4c6190.GIF",
                "is_diplomatic" => 0,
                "language" => "西班牙語",
                "main_media" =>
                    "當地報紙雜誌及期刊資料：玻國全國各大城市，均有當地報紙，玻京La Paz有El Diario，La Razon，La Prensa，Ultima Hora等日報。另外，週報有Contratapa，Asunto Financiero及Critica等，政經月刊有Epoca，Asuntos Economicos，Inversion y Desarrollo 及Esto等，亦可在超級市場或街上書報攤購得Bolivian Times，Time，Newsweek等英文雜誌及報紙。La Paz共有14個電視台，國產節目很少，電影事業不發達，一般均為拉丁美洲其他各國如巴西、智利、阿根廷、委內瑞拉、墨西哥等國之節目；另外亦可裝設電視 (如CNN及其他美國有線電視台)。玻國共有 183 個廣播電台，La Paz行政區約有 20 個廣播電台，以西班牙文、Aymara及Quechua等語言廣播，部份擁有 24 小時之廣播電台，一般演播時間至晚間 10 時、11 時或 12 時。由於La Paz海拔近 4,000 公尺，收聽外國短波電台效果良好，可購買備有短波波段之收音機 (至少需有 8 波段)，此地可清楚收到西班牙國外短波電台 (Radio Exterior de Espana廿四小時)，BBC (中、西、英)、美國之音 (西文)、自由中國之聲 (中文、台語、廣東語、西文)、德國之音 (德文及中文)、荷蘭之音 (西、英文)、莫斯科之音 (西文) 及鄰近國家之短波節目。",
                "population" => "11,677,406人(2020年)",
                "voltage" => "110及220伏特兩種（主要為220伏特）",
                "time_difference" => "-12:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/01355010-32b9-47de-9861-02c2b1594033.jpg",
                "political_system" =>
                    "多民族共同體，採總統制，總統由公民每5年選舉產生。依玻國憲法規定，首都為Sucre，現僅司法院位於該市。中央政府及國會所在地La Paz則為國內政治、經濟、文化及交通中心，治安良好，是玻國「事實上的首都」，海拔 3,800 公尺，亦為世界最高首都。La Paz建於 1548 年，人口約百萬，四週被雪山環抱，景色幽美。 2009年後除原有之行政、立法和司法三權外，另創立了「多民族選   舉機構」使玻國成為四權分立之政治體制。",
                "history_intro" =>
                    "自第六世紀至第九世紀期間，居住於玻利維亞西部一帶之Collas族人已有相當高度文化，十世紀初Quechua人自秘魯庫茲科（Cuzco）入侵並占有其地，至此玻境之原住民即受印加（Inca）帝國統治。1538年西班牙人消滅印加帝國後，玻境淪為西班牙殖民地，稱為上秘魯 (Alto Perú)。1545年西班牙人在玻多錫 (Potosi) 發現銀礦，不顧傳統農業發展而強迫原住民改從事礦採工作。十七世紀中葉，原住民開始反抗，曾於1809年5月及7月兩度宣告獨立，惟均遭西班牙人鎮壓。1824年12月9日南美獨立運動領袖玻利華(Simón Bolívar)麾下大將蘇克瑞(Antonio José de Sucre)在阿亞古秋(Ayacucho)大敗西軍，玻利維亞之獨立始成定局。1825年8月6日玻國正式宣布獨立，以玻利維亞 (Bolivia) 為國名，玻利華親手制訂憲法並獲選為第一任總統。秘魯於1836年至1839年曾受玻利維亞執政者聖泰克魯斯( Andrés de Santa Cruz) 所謂「秘玻聯邦」之統治。1879年玻秘兩國反對智利謀取各該國濱臨太平洋岸之硝礦產，爰聯盟對智利宣戰（即南美史上之太平洋戰爭），惟該聯盟於1884年戰敗，玻國因而喪失其濱海之安托法加斯大省（Antofagasta)，成為內陸國家，秘魯則喪失包括亞瑞加港(Arica) 之達拉帕卡省 (Tarapacá)。",
                "parliament" =>
                    "國會分參、眾兩院，皆由人民直選；參院由36名議員、眾院由130名議員組成，任期同為5年。參議院議長Andrónico Rodríguez、眾議院議長Freddy Mamani Laura",
                "cabinet" =>
                    "現任內閣部長20名，由總統任命，計有外交部長、總統府部長、內政部長、國防部長、財政部長、經濟部長、教育部長、勞工部長、農業部長、永續發展規劃部長、礦業部長、碳氫資源部長（石油、天然氣）、衛生及體育部長、公共工程部長、司法部長及水資源部長、國家法權維護部長、文化部長、地方自治部長及機構透明暨反貪污部長。",
                "judiciary" => "司法機關分為地方法院、高等法院及最高法院三級。",
                "headman" => "總統Luis Arce(2020年11月8日就職)",
                "fa_minister" => "Rogelio Mayta Mayta",
                "major_political_parties" =>
                    "玻國各政黨林立，主要有社會主義運動黨（MAS)、社會民主力量陣線[PODEMOS，包括國家民主行動黨（ADN)]、國家團結黨(UN)、國民革命運動黨（MNR）、左派革命運動黨（MIR）、新共和勢力黨（NFR）等。",
                "financial_incoming" => "2020年度財政總支出約129.8億美元",
                "export_value" => "110億美元(2021年)",
                "import_value" => "95.6億美元(2021年)",
                "export_item" =>
                    "天然氣、銀、鋅、金、鍚、黃豆及黃豆製品、原油等",
                "import_item" => "石油、汽車、鋼鐵、塑膠、麵粉等",
                "main_export_countries" =>
                    "巴西、阿根廷、美國、印度、哥倫比亞、美國、中國大陸、荷蘭、日本、秘魯及韓國",
                "main_import_countries" =>
                    "巴西、阿根廷、中國大陸、美國、日本、委內瑞拉、秘魯、墨西哥",
                "export_to" => "642萬美元(2021年)",
                "import_from" => "468萬美元（2021年）",
                "foreign_relationship" =>
                    "1. 參與區域整合，尋求外援2. 爭取出海口，以利產品出口外銷3. 吸引外資開發天然資源（天然氣蘊藏量於南美洲僅次於委內瑞拉，鐵及鎂占世界 7 成）4. 推動改善基礎建設之投資計畫5. 推動提高農村生產計畫",
                "foreign_policy" =>
                    "獨立自主及加強與其他拉美印地安族群交流合作協商。致力收復出海口，並加強與「南方共同市場」及「安地諾集團」之經濟整合，聯合安地諾集團與歐盟談判貿易協定。",
                "time_range" =>
                    "玻國時間較台灣晚 12 小時，如玻國6月1日晚上 7 點，台灣則為6月2日清晨 7 點。",
                "resident" => "無，由我國駐秘魯代表處兼轄",
                "national_flag" =>
                    "玻利維亞國旗是代表南美洲內陸國家玻利維亞多民族國政府的旗幟。此面旗幟正式制定於1888年。由紅黃綠三色橫條組成。政府旗與軍旗在黃條的正中央還鑲有著玻利維亞的國徽。旗面上的紅色象徵著人民作戰時的英勇氣概；黃色象徵著玻利維亞境內豐富的礦產資源；綠色象徵著玻利維亞的經濟重點---農業。",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            124 => [
                "name" => "瑞典王國",
                "name_in_en" => "Kingdom of Sweden",
                "short_name" => "瑞典",
                "short_name_in_en" => "Sweden",
                "capital" => "斯德哥爾摩",
                "capital_in_en" => "Stockholm",
                "national_day" => "6月6日",
                "join_un_day" => "1946年11月19日",
                "area_size" => "面積為 449,964平方公里",
                "geographic" =>
                    "瑞典位於北歐斯堪地那維亞半島，西和西北部與挪威交接、東北與芬蘭交接，東臨波斯尼亞灣（Gulf of Bothnia）及波羅的海",
                "religion" => "以基督教路德教派為主(約佔總人口超過8成)",
                "bilaterial_relations" => "{{--br /--}}",
                "main_bounds" => "瑞典克朗",
                "exchange_rate" =>
                    "目前一美元約折合瑞幣9克朗；1瑞典克朗約折合台幣3元。另瑞典多以刷卡方式付費(包括路邊報攤、計程車等)，已甚少使用現金。除了少數觀光區商店外，一般商店更不接受外幣，僅收瑞典克朗。(2021年12月資料) 詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/331fd3a0-40f4-439d-bce1-ccb54618c1bb.GIF",
                "is_diplomatic" => 0,
                "language" => "瑞典語",
                "main_media" =>
                    "電視：主要之電視瑞典台SVT1、SVT2、SVT4等頻道，另有有線電視台。電台：「瑞典廣播公司」目前有4個頻道P1、P2、P3及P4及25個地方電台。報紙及雜誌有DAGENS NYHETER「每日新聞報」、SVENSKA DAGBLADET「瑞典日報」、EXPRESSEN「快訊晚報」、AFTONBALDET「瑞京晚報」、「The Local」（http://www.thelocal.se）地方新聞網站、STOCKHOLM CITY等。",
                "population" =>
                    "瑞典地廣人稀，人口1,0508,669人(2022年9月)，約90%集中在中南部城市。",
                "voltage" => "220伏特",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/e6f2daad-99fc-47d2-9f02-baaa13737af7.jpg",
                "political_system" =>
                    "國體為「君主立憲制」，國王為虛位元首，現任國王為卡爾十六世(Carl XVI Gustaf)，現行憲法於1975年1月1日生效。",
                "history_intro" =>
                    "瑞典為古王國，西元1523年正式成為獨立王國，1809年頒佈憲法，實行君主立憲制度，將政權分隸於國王及國會，其後逐漸演進至1917年之內閣制。兩次世界大戰中，瑞典均得以保持中立而未受戰爭之破壞，其政經建設亦得以繼續發展，成為社會福利制度極為完善之國家。",
                "parliament" =>
                    "瑞典國會Riksdag（http://www.riksdagen.se）為國家最高立法機關，採一院制，349名議員經比例選舉直接產生，任期4年。",
                "cabinet" =>
                    "內閣由總理及各部首長組成，主掌行政權，向國會負責，且內閣之政策需經國會議長簽署，新政府之產生程序係由國會議長主導，首先提出總理人選，經國會討論，若未超過半數國會議員反對，即由國會議長任命。內閣閣員則由總理提請國會同意後任命。最近一次大選於2022年9月舉行，現內閣由溫和黨(Moderate Party)、基督教民主黨(Christian Democrats)及自由黨(Liberal Party)組成。",
                "judiciary" => "採三級制，分地方法院、上訴法院及最高法院。",
                "headman" =>
                    "現任國王為卡爾十六世(Carl XVI Gustaf)」，國王為虛位元首。國會多數黨主席擔任總理組閣，現任總理為「溫和黨」(Moderate Party)黨主席克里斯特森(Ulf Kristersson)。",
                "fa_minister" => "Tobias Billström",
                "major_political_parties" =>
                    "社民黨、綠黨、瑞典民主黨、溫和黨、中央黨、自由黨及基民黨",
                "financial_incoming" =>
                    "2021年歲入約11,910億瑞典克朗，2021年歲出約12,160億瑞典克朗。",
                "export_value" => "2021年出口總值為1,721億4,121萬美元。",
                "import_value" => "2021年進口總值為1,696億5,178萬美元。",
                "export_item" =>
                    "交通工具(含轎車、卡車、巴士、聯結車及其零配件) 、醫藥製品、原油石化相關產品、資通訊電子產品、木製品、漁產品、鐵礦石、紙製品、疫苗和微生物培養物等產品、機械設備",
                "import_item" =>
                    "交通工具(含轎車、卡車、巴士、聯結車及其零配件) 、資通訊電子產品、原油石化相關產品、資料處理設備、漁產品、疫苗和微生物培養物等產品、電器用品、家具、電線電纜、醫療材料及設備",
                "main_export_countries" => "依序為挪威、德國、美國、丹麥及芬蘭",
                "main_import_countries" => "依序為德國、荷蘭、挪威、丹麥及中國",
                "export_to" => "2021年臺灣對瑞典出口總額為7億6,979萬美元",
                "import_from" => "2021年臺灣對瑞典進口總額為8億2,469萬美元",
                "foreign_relationship" =>
                    "瑞典以重視及積極從事國際援助為著，向為聯合國難民署(VNHCR)最重要捐助國之一，2021年計投入國民所得毛額(Gross National Income)之1%於國際援助。此外，瑞典支持聯合國改革、重視國際合作對抗氣候變遷與節能減碳、加強國際反恐合作、防止核擴散，並呼籲國際共同打擊人口販運、毒品及武器走私、海盜等跨國犯罪行為。",
                "foreign_policy" =>
                    "外交政策以歐盟為依歸，瑞典加入歐盟後，採行歐盟共同外交與安全政策。對歐盟間合作，採取開放態度，並支持歐盟繼續擴大。瑞典加入歐盟後已實際放棄中立政策。2022年2月底俄羅斯入侵烏克蘭後，瑞典國內支持加入北約(NATO)之民意高漲，瑞典前政府於同年6月底偕芬蘭與土耳其(唯一北約成員國不支持瑞、芬兩國加入者)達成協議後，正式申請加入NATO，俟NATO所有成員國批准後將正式成為會員國。此外，瑞典透過積極參與各個次區域機制(例如北歐理事會、波羅的海理事會等)，協調北歐國家在共同關切事項之立場，深化與其他北歐國家及波羅的海國家關係，並支持歐盟相關政策。",
                "time_range" =>
                    "夏令時間（三月底至十月底）較台北慢六小時；冬天（十月底至三月底）較台北慢七小時。",
                "resident" => "駐瑞典台北代表團(Taipei Mission in Sweden)",
                "national_flag" =>
                    "藍底黃十字國旗  瑞典國旗的歷史可追溯至16世紀， 為藍底黃色十字，著名的IKEA藍黃招牌，即是來自瑞典國旗的顏色。",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            125 => [
                "name" => "瑞士聯邦",
                "name_in_en" => "Swiss Confederation",
                "short_name" => "瑞士",
                "short_name_in_en" => "Switzerland",
                "capital" => "伯恩",
                "capital_in_en" => "Bern",
                "national_day" => "8月1日",
                "join_un_day" => "2002年9月10日(2002年3月3日全民公投通過)",
                "area_size" => "41284平方公里",
                "geographic" =>
                    "瑞士位於中歐阿爾卑斯山高峰中段，北鄰德國，南毗義大利，西壤法國",
                "religion" => "天主教、新教",
                "bilaterial_relations" => null,
                "main_bounds" => "瑞士法郎(CHF)",
                "exchange_rate" =>
                    "約為1瑞郎兌換33.62元新台幣，惟須視匯率浮動情況而定。詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/customfile/sites/flagurllink/58955dc9-30ba-49ad-8a7f-e94b2346bef0.png",
                "is_diplomatic" => 0,
                "language" => "德、法、義語及羅曼語",
                "main_media" =>
                    "新蘇黎世報(Neue Zürcher Zeitung)、時代報(Le Temps)、每日廣訊報（Tages Anzeiger）",
                "population" => "873萬6500人 (至2021年底，瑞士聯邦統計局資料)",
                "voltage" => "220伏特",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/9c8f7efe-46f1-490b-a774-dcc71445b109.jpg",
                "political_system" => "聯邦制",
                "history_intro" =>
                    "西元1291年現今瑞士中部3邦Unterwalden、Uri及Schwyz為對抗神聖羅馬帝國哈布斯堡王朝組成聯盟，係瑞士邦聯之肇始；1513年聯邦擴大為13個邦；1648年西發里亞條約承認瑞士之獨立地位；1798年為拿破崙所率之法軍佔領並建立瑞士共和國；1848年成為聯邦體制國家後，以新拉丁語的「Confoederatio Helvetica」(赫爾維蒂邦聯)作為正式國名全稱，此為瑞士簡稱為CH之緣由；1848年制定憲法，奠定政府組織、人民基本權利、各邦權限和宗教、語言、文化等問題，瑞士終於形成生命共同體，戮力建設；1874年瑞人受普奧及普法戰爭的刺激，瞭解中央集權之利益，乃修憲法，擴大聯邦權力；1898年聯邦政府編撰民法及刑法，瑞士法典遂告統一。",
                "parliament" =>
                    "瑞士聯邦國會為2院制，分下議院及上議院，各設有1位議長及2位副議長，任期1年，不連任。",
                "cabinet" =>
                    "聯邦委員會為聯邦最高行政機關，共設聯邦委員7人分掌7部，聯邦委員由國會議員選舉，任期4年。",
                "judiciary" =>
                    "聯邦法院為最高司法機關，由聯邦國會選舉38名全職聯邦法官及19名替補法官組成。",
                "headman" =>
                    "聯邦總統、副總統為國家正、副元首，任期1年，每年由聯邦國會推選聯邦委員輪流擔任；2022年聯邦總統及副總統分別為瑞士聯邦外交部長Ignazio Cassis及聯邦內政部長Alain Berset。2022年12月7日瑞士聯邦國會上、下兩院聯席會議選出瑞士聯邦內政部長Alain Berset及瑞士聯邦國防、民防暨體育部長Viola Amherd擔任2023年聯邦總統及副總統。",
                "fa_minister" => "Ignazio Cassis",
                "major_political_parties" =>
                    "瑞士聯邦國會目前共有11個政黨，較為重要者為：瑞士人民黨、社會黨、自由民主黨、中間黨、綠黨、自由綠黨及福音教人民黨。",
                "financial_incoming" =>
                    "聯邦政府歲入約745.5億瑞郎，歲出約759.5億瑞郎 (2021年)。",
                "export_value" => "2021年1至12月輸出總值約3,477億瑞郎。",
                "import_value" => "2021年1至12月輸入總值約2,965億瑞郎。",
                "export_item" =>
                    "化學及製藥產品、機械及電子產品、鐘錶產品、精密儀器、金屬製品、珠寶及首飾、食品香料及飲品、運輸工具、紡織類品、能源類產品。(2021)",
                "import_item" =>
                    "化學及製藥產品、機械及電子產品、運輸工具、金屬製品、紡織類品、食品香料及飲品、能源類產品、精密儀器、珠寶及首飾、塑膠類產品。(2021)",
                "main_export_countries" =>
                    "美國、德國、中國大陸、印度、義大利、法國、英國、西班牙、奧地利、香港。(2021)",
                "main_import_countries" =>
                    "德國、英國、美國、義大利、中國大陸、法國、奧地利、西班牙、阿拉伯聯合大公國、荷蘭。(2021)",
                "export_to" => "16億瑞郎(依據瑞士海關總署統計)",
                "import_from" => "24億瑞郎(依據瑞士海關總署統計)",
                "foreign_relationship" =>
                    "瑞士為永久中立國，第一次世界大戰後雖參加國際聯盟，但不參加國際制裁行動；第二次世界大戰後，瑞士未加入聯合國，但有常駐觀察員，並加入聯合國世界勞工組織、世界衛生組織、WTO、糧農組織等非政治性機構。瑞士因恐陷孤立，爰於 2002年全民公投通過加入聯合國，正式成為聯合國第190個會員國；2005年瑞士舉行公投通過加入申根/都柏林公約，並於2008年12月12日正式生效；瑞士為聯合國及其週邊組織之會員國，參與之其他重要國際組織有「歐洲安全合作組織」(OSCE)、「經濟合作暨發展組織」(OECD)、「歐洲自由貿易區」(EFTA)等。2022年6月9日瑞士獲選為聯合國安全理事會2023及2024年非常任理事國。",
                "foreign_policy" =>
                    "瑞士2020-2023外交政策策略:接續既有的外交政策，更有彈性地因應世局變化。四大優先主題:(一)和平與安全:面對多變的國際情勢，瑞士致力成為維護世界和平與安全的橋樑締造者，以促進生活無憂懼、人權保護及經濟繁榮。優先目標為競選聯合國安全理事會成員國，並於2023-2024年獲選為安理會非常任理事國。(二)繁榮:致力維護世界經濟秩序、保持財政體系運作良好。保持瑞士在教育、研究與創新的領先地位。優先目標為強化並持續發展與歐盟的雙邊關係。(三)永續:在2030議程架構下，致力促進環保、經濟與社會三方面均衡永續發展。重點為將2030議程及全球氣候與環境保護目標付諸實施。(四)數位化:強化數位政府形象。持續發展數位外交政策，強化日內瓦世界數位科技平台領先地位。以創造依據國際法且滿足人類需求的開放、安全的數位環境。瑞士要銳化其在國際數位治理之外交形象，及強化日內瓦之全球領先樞紐地位。放眼世界、著重歐洲是瑞士外交政策的策略目標。",
                "time_range" =>
                    "較台灣慢7小時(3月至9月日光節約時間較台灣慢6小時)。 2023年日光節約時間自3月26日起。",
                "resident" => "駐瑞士代表處、駐日內瓦辦事處、常駐WTO代表團",
                "national_flag" => "紅色正方形旗面，正中一個白色十字",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            126 => [
                "name" => "瓜地馬拉共和國",
                "name_in_en" => "Republic of Guatemala",
                "short_name" => "瓜地馬拉",
                "short_name_in_en" => "Guatemala",
                "capital" => "瓜地馬拉市，面積228平方公里，人口約103萬人。",
                "capital_in_en" => "瓜地馬拉市 (Ciudad de Guatemala)",
                "national_day" => "9 月 15 日",
                "join_un_day" => "1945年11月21日",
                "area_size" => "108,889平方公里",
                "geographic" =>
                    "位處中美洲北部，西北接墨西哥，東臨貝里斯及濱加勒比海，東南與宏都拉斯及薩爾瓦多接壤，南臨太平洋。",
                "religion" => "天主教、基督教",
                "bilaterial_relations" => null,
                "main_bounds" => "格查爾(Quetzal)，Quetzal亦為瓜國國鳥。",
                "exchange_rate" => 'US$1.00=Q7.57 (2022年)',
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/bdeda553-2b4c-412f-8b68-90f27d1bb612.GIF",
                "is_diplomatic" => 1,
                "language" => "西班牙語",
                "main_media" =>
                    "瓜國主要新聞媒體均設立於瓜京，官方媒體包含瓜地馬拉新聞社(AGN, AGENCIA GUATEMALTECA DE NOTICIAS)及中美洲日報(DIARIO DE CENTRO AMERICA)；民營主流媒體包括:自由新聞報(PRENSA LIBRE)、報紙日報(ELPERIODICO)、大眾日報(NUESTRO DIARIO)、時報晚報(LA HORA)、公眾新聞報(PUBLINEWS)、我是國碼502日報(Soy 502)、金錢週報(MONEDA)、言論週報(LA PALABRA) 、新時代月刊(NUEVO TIEMPO)等。電子媒體計有第3、7、11、13等四家無線電視台；有線電視台超過50家，均屬地區性電視台，例如Huehuetenango、San Marcos、Petén等。主要有線系統業者為Converge、Communications International、 Cybercable、Intercentro、Multicable及Mayacable Comtech等。瓜國最大之衛星電視為展望衛星電視台(GUATEVISION)，透過衛星直播，收視戶遍及中美洲宏、薩、尼三國及美國地區。瓜國重要廣播電台有「聯合廣播公司」(EMISORAS UNIDAS)、「全國廣播公司」、「阿里歐斯集團電台」(RADIO GRUPO ALIUS)及「聖卡洛斯大學電台」(RADIO UNIVERSIDAD)等。",
                "population" => "1,736萬人(2023年2月)，旅居海外僑民約300萬人。",
                "voltage" => "110 V (伏特)",
                "time_difference" => "-14:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/7946768c-4a65-4e03-bc2a-84f63708f60d.jpg",
                "political_system" =>
                    "共和國/總統制，總統為最高行政首長，任期4年，終身不得再選。",
                "history_intro" =>
                    "哥倫布發現新大陸後，墨西哥征服者科德斯(Hernán Cortés)在1524年派阿瓦拉多(Pedro de Alvarado)率騎兵、步兵各100名，藉卡啟蓋人(Cakchiquel)之助，征服馬雅各族成立瓜地馬拉王國，為西班牙殖民地，範圍包括今日墨西哥南部與中美洲各國。瓜地馬拉王國首先建都於安地瓜(Antigua)，1773年大地震，安地瓜城震毀，始遷都至現今之瓜地馬拉城。19世紀初，西班牙在中南美洲之殖民地紛紛獨立。1821年9月15日瓜地馬拉王國宣布獨立，惟仍屬墨西哥帝國一部分，兩年後脫離墨西哥，1846年正式分裂成中美洲五國。進入20世紀後，瓜國歷經數度軍事政變，政權更迭不斷，至1985年5月瓜國完成制定新憲法，1986年 Vinicio Cerezo當選總統，開啟文人政府民主制度。",
                "parliament" =>
                    "國會採一院制，議員直接民選，任期4年，得連選連任。目前國會有160席，38個委員會，國會議長任期1年，得連選連任。現任國會議長為李薇拉(Shirley RIVERA)，任期至2024年1月。重要政黨：國家希望聯盟黨(UNE) 52席、奮起黨(VAMOS) 17席、國家改變聯盟黨 (UCN) 12席、價值黨( VALOR) 9席、國家聚合陣線黨(FCN)與國家福利黨(BIEN)各8席、種子運動黨(SEMILLA)、全民黨(TODOS)及願景與價值黨(VIVA)各7席、人道主義黨( HUMANISTA)與承諾革新秩序黨(CREO)各6席，另有其他8政黨合計佔21席。",
                "cabinet" =>
                    "瓜國屬共和國/總統制，總統為最高行政首長，任期4年，終身不得再選，下轄內政部、外交部、國防部、財政部、交通暨公共工程部、教育部、農牧暨糧食部、經濟部、衛生部、勞工部、能源暨礦業部、文化體育部、法務部、環境及天然資源部等內閣部會。瓜國法務部為獨立機關，不設部長，由檢察總長指揮。",
                "judiciary" =>
                    "設有地方、高等及最高法院，負責審理民、刑事案件。另有憲法法院，其功能與我國大法官會議相似，主要係解釋憲法、法律與命令是否違憲等，地位崇高。",
                "headman" =>
                    "賈麥岱(Alejandro Giammattei)，任期至2024年1月14日",
                "fa_minister" => "步卡羅(Mario BÚCARO)，自2022年2月1日起",
                "major_political_parties" =>
                    "國家希望聯盟黨(UNE)、奮起黨(VAMOS)、國家改變聯盟黨(UCN)、價值黨( VALOR)、國家聚合陣線黨(FCN)、國家福利黨(BIEN)、種子運動黨( SEMILLA)、全民黨(TODOS)、願景與價值黨(VIVA)、人道主義黨( HUMANISTA)、承諾革新秩序黨(CREO)、政治運動黨(WINAQ)、勝利黨(VICTORIA)、團結黨(UNIONISTA)、公民繁榮黨( PC)、瓜國革命團結黨(URNG)",
                "financial_incoming" =>
                    "經濟成長率：4%(2022年)、外債：約109.8億美元(2022年)",
                "export_value" => "144億2,915萬美元(2022年)",
                "import_value" => "297億286萬美元(2022年)",
                "export_item" => "成衣、咖啡、食用油、香蕉、糖(2022年)",
                "import_item" => "電子機械、汽車、汽油、柴油、塑膠製品(2022年)",
                "main_export_countries" =>
                    "中美洲、美國、墨西哥、荷蘭及中國(2022年)",
                "main_import_countries" =>
                    "美國、中國、中美洲、墨西哥及巴西(2022年)",
                "export_to" =>
                    "2億6,722萬美元(2022年)主要進口產品：柴油、混合烷基苯、聚苯乙烯、聚丙烯、噴射機燃油等(2022年)",
                "import_from" =>
                    "1億4,507萬美元(2022年) 主要出口產品：蔗糖、咖啡、鋼鐵廢料、白蝦、菸草等(2022年)",
                "foreign_relationship" =>
                    "瓜國與各國友好，基於歷史淵源主張對貝里斯擁有主權。1991年9月瓜國正式承認貝里斯，兩國互派大使交往，關係漸趨穩定友好；惟兩國迄今對於國界仍有爭議未決，針對領土爭議，兩國陸續完成公投，協議將本案送交國際法庭(ICJ)裁決。",
                "foreign_policy" =>
                    "瓜國係聯合國創始會員國，2011年10月21日獲選聯合國非常任理事國，任期兩年(自2012年起至2013年止)，與158國有外交關係，其中在41個國家設有大使館，另在聯合國、美洲國家組織及世界貿易組織等共設有四個代表機構。各國在瓜京設大使館者有包括我國、美國、德國及西班牙等38國，駐瓜各使領館均辦理簽證業務，另若干國家在瓜設有名譽總領事或名譽領事，亦受理簽證業務。",
                "time_range" => "與臺灣之時差：比臺灣慢 14 小時。",
                "resident" => "我國在瓜地馬拉首都瓜地馬拉市設有大使館。",
                "national_flag" =>
                    "瓜地馬拉國旗為一面由天藍-白-天藍三條直條組成的旗幟，象徵瓜地馬拉位於太平洋與大西洋之間，白色代表純潔，中間為國徽。藍-白-藍的條狀旗幟歷史上也是中美洲聯合省旗幟的顏色。現行旗幟採用於1968年9月15日。",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            127 => [
                "name" => "甘比亞共和國",
                "name_in_en" => "Republic of The Gambia",
                "short_name" => "甘比亞",
                "short_name_in_en" => "Gambia",
                "capital" => "班竹市",
                "capital_in_en" => "Banjul",
                "national_day" => "2月18日",
                "join_un_day" => "1965年9月 21日",
                "area_size" => "11,300平方公里",
                "geographic" => "甘比亞位於非洲西海岸",
                "religion" => "95.7%人民信奉回教， 4.2%人民信奉基督教。",
                "bilaterial_relations" => null,
                "main_bounds" => "達拉西(Dalasi)",
                "exchange_rate" =>
                    "詳細匯率資訊建議至臺灣銀行(https://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/6a860152-c6f4-4627-aff1-fda93b1a5e48.GIF",
                "is_diplomatic" => 0,
                "language" => "為英語系國家",
                "main_media" =>
                    "Gambia Television、Premium TV Network、Radio Gambia、Radio 1 FM、West Coast Radio、Sud FM, City Limits Radio、The Daily Observer、The Gambia Daily、The point、FOROYAA、The Gambia Daily等。",
                "population" => "2,639,916 (2021)",
                "voltage" => "220伏特",
                "time_difference" => "-8:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/4251bd24-06f3-455a-aed0-ceb534d92e1b.JPG",
                "political_system" => "總統制",
                "history_intro" =>
                    "1661年英國宣布占有甘比亞河流域並移民，隨後在1672年成立「皇家非洲公司」負責在甘比亞之貿易。1723年英皇家非洲公司接管甘比亞政務，1894年英國將甘比亞列為英國之保護區。1965年2月18日甘比亞正式獨立，當時仍為大英國協之一員。1970年舉行公民投票，通過共和憲法，改制共和。1994年賈梅（Yahya Jammeh）發動不流血政變並掌權，1996年賈梅總統當選甘國第二共和首任總統，直到2016年12月大選落選。在野聯盟提名之巴羅（Adama Barrow）當選總統，巴羅總統嗣於2017年1月就職，2021年12月總統大選，巴羅總統獲選連任。",
                "parliament" =>
                    "單一國會，共有58席，其中53席由人民選出，5席由總統任命，任期5年。",
                "cabinet" => "閣員由總統任命。",
                "judiciary" =>
                    "設有最高法院、上訴法院、高等法院、特別刑事法院及地方法院。",
                "headman" => "總統巴羅( Adama Barrow )",
                "fa_minister" => "Mamadou Tangara",
                "major_political_parties" =>
                    '2016聯盟（2016 Coalition）、愛國導正建設聯盟（Alliance for Patriotic Reorientation and Construction,APRC）、甘比亞民主議會(Gambia Democratic Congress,GDC)、國家和解黨（National Reconciliation Party, NRP）、甘比亞道德議會（Gambia Moral Congress,GMC）、獨立社會主義人民民主組織（People\'s Democratic Organisation for Independence and Socialism, PDOIS）、甘比亞民主進步黨(Gambia Party for Democracy and Progress, GPDP)、人民進步黨(People\'s Progressive Party；PPP）等。',
                "financial_incoming" =>
                    "2020年政府財政收入4.71 億美元，支出5.48億美元。",
                "export_value" => "3.57 億美元（2020）",
                "import_value" => "16.9 億美元（2020）",
                "export_item" =>
                    "金、腰果等堅果、冷凍魚、加工木材、建築用大型車輛",
                "import_item" => "棉織物、米、糖、客運與貨運船、精煉石油",
                "main_export_countries" =>
                    "烏干達、印度、塞內加爾、中國、智利(2020)",
                "main_import_countries" =>
                    "中國、塞內加爾、印度、巴西、土耳其 (2020)",
                "export_to" => "499,838美元（2022）",
                "import_from" => "6,458,418美元（2022）",
                "foreign_relationship" =>
                    "甘比亞為聯合國、西非經濟共同體、非洲聯盟等國際組織之會員國。於2006年7月2日接任「非洲聯盟」輪值主席，並於甘京舉辦第七屆非洲聯盟高峰會議，為甘國建國以來之創舉。甘國北東南三面被塞內加爾所環繞，兩國因相互指責包庇異議份子而有齟齬，惟兩國在經濟上相互依賴。 甘國另與美國、英國及歐盟因人權議題時有歧見。2013年10月2日，甘國無預警發表聲明退出大英國協。甘國各項發展計畫常獲多國資助，主要來源包括世界銀行、伊斯蘭開發銀行、阿拉伯非洲經濟開發銀行、歐盟、土耳其、沙烏地阿拉伯、科威特。",
                "foreign_policy" =>
                    "甘國於2017年3月與塞內加爾簽署促進貿易、漁業及和平與安全協定。甘國於2017年9月向大英國協秘書處表達欲重返大英國協。甘國於2017年10月表示欲與奈及利亞加強教育、衛生及法律等方面的合作。",
                "time_range" => "較台灣慢8小時",
                "resident" => "駐奈及利亞代表處兼轄。",
                "national_flag" =>
                    "國旗中的紅色代表太陽與大草原，藍色代表甘比亞河，綠色代表森林與農業，白色條紋代表團結與和平。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            128 => [
                "name" => "白俄羅斯共和國",
                "name_in_en" => "Republic of Belarus",
                "short_name" => "白俄羅斯",
                "short_name_in_en" => "Belarus",
                "capital" => "明斯克",
                "capital_in_en" => "Minsk",
                "national_day" => "7月3日",
                "join_un_day" => "1945年加入聯合國為創始會員國之一",
                "area_size" => "207,600平方公里",
                "geographic" =>
                    "位於東歐，波蘭以東。國界共計3,098公里：拉脫維亞141公里、立陶宛502公里、波蘭605公里、俄羅斯959公里、烏克蘭891公里",
                "religion" => "東正教",
                "bilaterial_relations" => null,
                "main_bounds" => "白俄羅斯盧布(Belarusian ruble; BYN)",
                "exchange_rate" =>
                    "1美元約兌換2.52白俄羅斯盧布（BYN）（2023年3月）「詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢」",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/5061e8de-ec59-4ebd-b1f4-23e8dc4893c0.jpg",
                "is_diplomatic" => 0,
                "language" => "白俄羅斯語、俄語",
                "main_media" =>
                    "主要電視台：國家廣播電視公司：直屬總統管轄，公司主席、副主席由總統任免。 主要報刊：蘇維埃白俄羅斯報、共和國報、人民報、為了祖國的榮譽報、青年旗幟報等。 主要通訊社：白俄羅斯通訊社（白通社）及獨立通訊社。",
                "population" => "約953萬（2022年）",
                "voltage" => "220V",
                "time_difference" => "-5:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/92fa5f69-26a9-4627-a474-f0bdd0c1ecb8.JPG",
                "political_system" => "總統制",
                "history_intro" =>
                    "白俄羅斯人是東斯拉夫族的一支，曾經在很長一段時期內處於立陶宛、波蘭及俄國的影響及爭奪之下。公元9世紀至11世紀，其大部分領土屬於基輔羅斯。12世紀建立了封建公國。從14世紀起幾度被立陶宛大公國和俄羅斯吞併。18世紀末淪為俄國的殖民地。20世紀初，資本主義開始發展。1919年白俄羅斯蘇維埃社會主義共和國成立；1922年成為蘇聯15個加盟共和國之一。二戰期間被德國佔領，國民經濟遭遇重大打擊，但是戰後發展迅速並於1991年8月25日自蘇聯獨立，隨後白俄羅斯亦和俄羅斯、烏克蘭等12國成立獨立國協（CIS）。白俄羅斯與俄羅斯更進一步於1999年12月簽署俄白聯盟協議，2014年5月白俄羅斯、俄羅斯與哈薩克簽署約定成立歐亞經濟聯盟，加深彼此的經濟聯繫。",
                "parliament" =>
                    "兩院制，國家議會(National Assembly or Natsionalnoye Sobranie)分為上下兩院，上院為「共和會議」(Council of the Republic)，合計64席，下院為「眾議院」(House of Representatives 或r Palata Predstaviteley)，由110名議員所組成，每屆任期4年。2019年11月白俄羅斯舉行第7屆下院選舉，親政府政黨囊括所有席次，反對黨並未拿下任何席次。",
                "cabinet" =>
                    "政府又稱「部長會議」，設有部長會議主席團，下設25部及其他有關機構。部長會議主席（總理）為Roman Golovchenko (2020年7月起)",
                "judiciary" =>
                    "設最高法院、憲法法院、最高經濟法院和檢察院。最高法院法官由總統指定、憲法法庭半數法官由總統指定，另一半由下院指定。",
                "headman" =>
                    "盧卡申科(Alexander Grigoryevich Lukashenko‎‎)，1994年任總統迄今。白俄羅斯憲法規定，總統可連選連任，無任期限制，每任任期5年。",
                "fa_minister" => "阿列伊尼克（Sergei ALEINIK）",
                "major_political_parties" =>
                    "白俄羅斯國會選舉依選區原則分配名額，現有15個合法註冊之政黨，其中較大的有─親政府政黨：白俄羅斯共產黨(Belarusian Communist Party，KPB)、白俄羅斯愛國黨(Belarusian Patriotic Party)、勞工正義黨(Party of Labor and Justice)、白俄羅斯自由民主黨(Liberal Democratic Party of Belarus)等。反對黨：10+聯盟(10 Plus Coalition)，包括白俄羅斯人民陣線(Belarusian Popular Front)、綠黨(Green Party)、聯合公民黨(United Civic Party)及女性政黨─希望黨(Nadezhda)等。",
                "financial_incoming" =>
                    "國內生產毛額：約657億美元(2021年)。平均國民所得： 7,032美元(2021年)",
                "export_value" => "約282億美元(2021年)",
                "import_value" => "約313億美元(2021年)",
                "export_item" =>
                    "礦產、機械設備及交通設施、化工產品、農產及食品。",
                "import_item" => "礦產、機械設備、化學原料、金屬及糧食。",
                "main_export_countries" =>
                    "俄羅斯、荷蘭、烏克蘭、拉脫維亞、波蘭、英國、中國。",
                "main_import_countries" => "俄羅斯、中國、波蘭、德國、烏克蘭。",
                "export_to" => "約1,115萬美元（2022年）",
                "import_from" => "約3,334萬美元（2022年）。",
                "foreign_relationship" =>
                    "白俄羅斯2020年8月9日總統大選爆發爭議，引起社會抗爭運動後，歐美各國紛紛對白俄實行制裁，目前白俄羅斯之外交政策注重發展與俄羅斯、獨立國協國家、中國及印度等國關係，白俄羅斯繼續加強與俄戰略同盟關係，並參與獨立國協內集體安全條約組織活動和籌建六國統一經濟空間的工作。白俄羅斯與俄羅斯於1997年簽署「建立俄羅斯與白俄羅斯聯盟國家條約」，2021年9月9日俄白兩國總統普丁與盧卡申科會議宣佈，兩國就28項聯盟整合計劃達成協議，未來俄白兩國將執行共同之宏觀經濟政策，協調貨幣信貸政策，整合金融支付系統並深化關稅與稅務合作。白俄羅斯與俄羅斯及哈薩克2014年5月簽署成立「歐亞經濟聯盟(Eurasian Economic Union)」條約已正式於2015年1月1日生效，三國將承擔確保商品、服務、資本以及勞動力自由流動義務，在能源、工業、農業及運輸四大經濟領域實施協商統一政策，並預計雙邊自由貿易中各項例外將於2025年前逐步取消。另2022年2月24日俄烏戰爭爆發前，白俄羅斯已持續與俄羅斯共同舉行聯合軍演脅迫烏克蘭外，更同意俄國軍隊長期屯軍在白俄與烏克蘭的邊境，藉此升高對烏克蘭的軍事壓力，白俄羅斯因此遭到歐美民主國家多項經濟制裁，我國亦於5月6日宣布對白俄羅斯進行經濟制裁，對其進行出口管制。2022年10月白俄羅斯總統盧卡申科承認該國參與俄國對烏克蘭的特別軍事行動，但目前該國並未派遣軍隊到前線戰區，然而烏克蘭現已集結1.5萬名軍人於兩國邊境，挑釁白俄羅斯，白俄羅斯不排除參戰的可能性。",
                "foreign_policy" =>
                    "白俄羅斯對外政策基本原則為： 一、國家資源與對外政策目標相符，此一目標需與白俄羅斯鞏固國際地位相配合； 二、在全球化條件下，提高政治、法律、對外經濟等維護白俄羅斯國家主權及國家經濟的執行效率； 三、在公認原則、國際法規的優先順序準則基礎上與外國、國際組織開展全面合作，相互維護世界社會成員之利益； 四、自願加入、參加多國組織； 五、主張國際關係中持續非軍事化的政治方針； 六、對鄰國不提出任何領土要求 ，也不接受對白俄羅斯的任何領土要求。",
                "time_range" =>
                    "UTC+3，慢臺灣 5小時(2011年9月宣布施行永久日光節約時間)",
                "resident" => "無駐館，相關業務由駐俄羅斯代表處兼轄。",
                "national_flag" => null,
                "area_name" => "亞西地區",
                "area_name_in_en" => "West Asia",
            ],
            129 => [
                "name" => "盧安達共和國",
                "name_in_en" => "Republic of Rwanda",
                "short_name" => "盧安達",
                "short_name_in_en" => "Rwanda",
                "capital" => "吉佳利 (Kigali)",
                "capital_in_en" => "Kigali (吉佳利)",
                "national_day" => "7月 1日",
                "join_un_day" => "1962年9月18日",
                "area_size" => "26,338平方公里",
                "geographic" =>
                    "盧安達位於非洲中部偏東，北臨烏干達，東界坦尚尼亞，西臨剛果民主共和國及基霧湖，南接蒲隆地，位於剛果河與尼羅河之分水嶺，地處東非高原，為一內陸國家。",
                "religion" => "天主教及基督教為主。",
                "bilaterial_relations" => null,
                "main_bounds" => "盧安達法郎Rwanda Franc (RWF)",
                "exchange_rate" =>
                    "美金兌換盧安達貨幣匯率約為1:1,080.65(2022-12月4日)詳細匯率資訊建議至相關具可信度之線上匯率網站或盧安達中央銀行(https://www.bnr.rw/index.php?id=3) 網站查詢",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/f4158052-ca4a-4987-ac4f-939176686ce8.GIF",
                "is_diplomatic" => 0,
                "language" => "法語、英語及Kinyarwanda語",
                "main_media" => "國營電台、Radio Rwanda",
                "population" => "13,246,394人（2022）",
                "voltage" => "220 伏特",
                "time_difference" => "-6:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/19a9cbeb-9551-4cb3-a309-3eba1fb61a13.JPG",
                "political_system" => "總統、共和制",
                "history_intro" =>
                    '盧安達最早為特瓦族人棲息地，16世紀初圖西族（Tutsi）人由北方入侵占領盧安達並建立封建王國，以少數民族之身分統治多數之胡圖族（Hutu）及特瓦族（Twa）。19世紀歐洲殖民帝國入侵非洲，盧安達於1890年被德國併吞納入德屬東非。第一次世界大戰德國戰敗，1919年由國際聯盟委託比利時託管並納入比屬剛果。1959年盧安達獲得自治權並舉行選舉，由胡圖族人組織臨時政府。1961年1月28日舉行國是會議，廢除君主封建王朝，建立盧安達共和國，嗣由胡圖族人組成之「胡圖人民解放黨」 （Parti du Mouvement de l\'Emancipation pour le Peuple Hutu）贏得選舉，其領導人卡益邦達（Gregoire Kayibanda）當選首任總統，並於1962年7月1日正式獨立建國。獨立後，卡益邦達總統為維持政治穩定，1963年起大規模屠殺圖西族，種族衝突不斷惡化，1994年之種族屠殺，超過百萬人遇害，其中3/4為圖西族。同年，圖西族組成之盧安達愛國陣線（Front patriotique rwandais, FPR）擊潰執政之胡圖族政府，組成臨時政府，近2百萬名胡圖族人因懼怕圖西族報復，淪為難民逃往鄰國。盧安達於2003年舉行公民投票通過憲法，嗣舉行首度總統及國會選舉，卡加美（Paul Kagame）為首任民選總統。',
                "parliament" =>
                    "兩院制。參議院（Senate）共26席，任期8年。眾議院（Chamber of Deputies）共80席，任期5年。",
                "cabinet" => "總統為國家元首，總理及內閣部長均由總統任命。",
                "judiciary" =>
                    "設有最高司法會議、最高法院、上訴法院、初審法院及縣法院。",
                "headman" => "卡加美(Paul Kagame)",
                "fa_minister" => "比魯塔 (Vincent Biruta)",
                "major_political_parties" =>
                    "盧安達愛國陣線（Rwandan Patriotic Front, RPF）、社會民主黨（Parti Social Démocrate, PSD）、民主黨（Parti Libéral, PL）。",
                "financial_incoming" =>
                    "政府財政收入約為32億美元，支出43億美元。(2022年)",
                "export_value" => "20.05億美元（2022年）",
                "import_value" => "52.88億美元（2002年）",
                "export_item" =>
                    "機械及交通運輸設備、鋼鐵、石化產品、水泥等建築材料",
                "import_item" => "食品、活體動物、石油以外原物料、礦物油",
                "main_export_countries" =>
                    "剛果共和國、阿拉伯聯合大公國、瑞士、巴基斯坦、新加坡(2020)",
                "main_import_countries" =>
                    "中國大陸、印度、阿拉伯聯合大公國、烏干達、肯亞(2020)",
                "export_to" => "286,425美元(2022年)",
                "import_from" => "512,299美元(2022年)",
                "foreign_relationship" =>
                    "1962年9月18日加入聯合國。法國指控盧國執政黨在1994年種族屠殺前夕擊落法國飛機，其後十年間，雙方衝突不曾中斷。2006年法國決定中止與盧安達之外交關係。盧國與英美關係良好，此兩國亦是盧國主要經援來源。2009年11月29日盧安達成功加入大英國協（Commonwealth），成為大英國協第54個國家，也是大英國協第2個非前英國殖民地成員國（第1個是莫三比克）。成功加入大英國協顯示盧安達正逐步向英語世界靠攏，受惠於大英國協在政治、經濟及文化上的資源，提高其國內發展。法盧兩國也在盧國加入英國聯邦後復交，務實外交將是法盧兩國外交關係之基調。另2015年4月蒲隆地因現任總統擬競選連任引爆政治危機，大批難民湧入盧安達，人數高達7萬人，導致兩國關係緊張。蒲隆地2016年2月向聯合國指控盧安達提供蒲國難民軍事訓練，危及蒲國及區域和平。另盧國追捕潛逃至剛果之叛軍，與剛果軍隊不時發生衝突，兩國關係陷入緊張。",
                "foreign_policy" => "中立政策",
                "time_range" => "較台灣慢6小時",
                "resident" =>
                    "我在該國未設處，該國事務由駐法國台北代表處兼理。",
                "national_flag" =>
                    "盧安達國旗，包含藍(代表人民必須為和平而戰方能使經濟持續成長並帶來快樂生活)、黃(代表人民必須安居樂業以促進永久的經濟發展)、綠(象徵藉由人民合理的開發達到繁榮的希望，也象徵國家的資源)三色，以及右上方有一太陽標誌，24道光芒指引著全國人民，也表示團結一致、純真透明，與對抗無知的奮鬥。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            130 => [
                "name" => "盧森堡大公國",
                "name_in_en" => "Grand Duchy of Luxembourg",
                "short_name" => "盧森堡",
                "short_name_in_en" => "Luxembourg",
                "capital" => "盧森堡市",
                "capital_in_en" => "Luxembourg City",
                "national_day" => "6月23日",
                "join_un_day" => "1945年",
                "area_size" => "2,586平方公里",
                "geographic" =>
                    "盧森堡位於西歐內陸，地勢北高南低，東鄰德國，南接法國，北部和西部同比利時接壤。",
                "religion" =>
                    "多數信奉天主教，亦有部分信奉其他宗教（包含基督新教和猶太教）",
                "bilaterial_relations" => null,
                "main_bounds" => "歐元",
                "exchange_rate" =>
                    "詳細匯率資訊建議至臺灣銀行 (https://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex) 網站查詢",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/8beb5c18-df20-47a3-a56c-3123589e03ff.GIF",
                "is_diplomatic" => 0,
                "language" => "盧森堡語、德語、法語",
                "main_media" =>
                    "盧森堡言報(Luxemburger Wort，德文、法文、葡萄牙文)、日報 (Tageblatt，德文)、每日報 (Le Quotidien，法文)、盧森堡時報(Luxembourg Times，英文)",
                "population" => "約64萬人(2022年)",
                "voltage" => "220V",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/dcd8f46d-8004-4390-8e20-e41a17c7ffd6.jpg",
                "political_system" =>
                    "盧森堡實行君主立憲制。國家元首為盧森堡大公，也是目前歐洲唯一的一個大公國。而行政權則由內閣行使。國會共有60個席位，議員任期為5年。",
                "history_intro" =>
                    "盧森堡歷史由在中世紀時盧森堡城堡的修建開始。城堡建成之後，附近開始逐漸發展，成為城鎮。盧森堡位於戰略地點，法國、德國和荷蘭都非常重視，盧森堡經常轉手不同國家。19世紀，盧森堡開始成為獨立自主的國家。雖然盧森堡聲明中立原則，但在20世紀期間被德國數次入侵。第二次世界大戰期間，擁有數十個步騎兵的盧森堡遭到德國侵略，被迫作為同盟國參戰，並且在德國的進攻下瞬間投降，成為二戰中唯一一個零傷亡的參戰國。第二次世界大戰之後，盧森堡不再中立，成為北約和歐盟的創始會員國之一。",
                "parliament" => "國會共有60個席位，議員任期為5年。",
                "cabinet" => "責任內閣制",
                "judiciary" =>
                    "治安法院、行政區法院、高等法院、行政法庭、行政法院以及憲法法院",
                "headman" =>
                    "亨利大公（Grand-Duc Henri）（2000年10月登基）；總理貝德爾(Xavier Bettel)（2013年12月就任，2018年12月續任）",
                "fa_minister" =>
                    "阿塞本(Jean Asselborn)（2013年12月就任，2018年12月續任）",
                "major_political_parties" =>
                    "基督社會人民黨（CSV）、民主黨（DP）、社會黨（LSAP）、綠黨（déi gréng）、輪替民主改革黨（ADR）",
                "financial_incoming" =>
                    "收入315.80億歐元，支出310.06億歐元(2021年)",
                "export_value" => "164億0,521萬歐元(2022年)",
                "import_value" => "251億8,646萬歐元(2022年)",
                "export_item" =>
                    "7216鐵或非合金鋼製角及形、8703小客車、4011新橡膠氣胎、7301鋼板樁、4811平板紙及紙板、3919塑膠製自黏性板、片、薄膜等、7601未鍛造鋁、5603不織布、3923塑膠包裝材料、0406乾酪及凝乳(2022年)",
                "import_item" =>
                    "8703小客車、2710石油或提煉自瀝青礦物之油類，原油除外、7204鐵屬廢料及碎屑、3004醫藥製劑、0406乾酪及凝乳、7602 鋁廢料和廢料、4011 新的橡膠充氣輪胎、3920非泡沫塑料板、片、膜、8411渦輪噴氣發動機、箔和帶、8517 電話機，包括用於小型網絡或其他無線網絡的電話(2022年)",
                "main_export_countries" =>
                    "德國、法國、比利時、荷蘭、義大利、美國、西班牙、波蘭、英國、奧地利(臺灣排名第35)(2022年)",
                "main_import_countries" =>
                    "比利時、德國、法國、荷蘭、義大利、美國、波蘭、日本、英國、中國(臺灣排名第28)(2022年)",
                "export_to" => "2,300萬美元(2022年)",
                "import_from" => "4,084萬美元(2022年)",
                "foreign_relationship" => "大致良好",
                "foreign_policy" =>
                    "盧森堡在對外關係方面採開放政策，與世界各國建立外交關係，積極參與區域性及國際性事務。盧森堡對於援助第三世界國家不遺餘力，在歐洲國家當中，與瑞典、丹麥、挪威及荷蘭同為對外援助預算比例最高之國家。",
                "time_range" =>
                    "歐洲中部時間 （UTC+1） 夏令時間（4月至10月）比台灣慢 6 小時，非夏令時間比台灣慢 7 小時",
                "resident" =>
                    "駐歐盟兼駐比利時代表處(Taipei Representative Office in the EU and Belgium)",
                "national_flag" =>
                    "盧森堡國旗是一面三色旗，由紅、白、藍三橫條組成。採用於1972年6月23日 （紅、白、藍的樣式在1845年已經出現）。",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            131 => [
                "name" => "科威特",
                "name_in_en" => "State of Kuwait",
                "short_name" => "科威特",
                "short_name_in_en" => "Kuwait",
                "capital" => "科威特市",
                "capital_in_en" => "科威特城（KUWAIT CITY）",
                "national_day" => "2月25日",
                "join_un_day" => "1963年5月14日，科威特加入聯合國",
                "area_size" => "17,818平方公里",
                "geographic" =>
                    "科威特位於阿拉伯灣(亦稱波斯灣)之西北角，南鄰沙烏地阿拉伯，西北接伊拉克，東濱阿拉伯灣，並與伊朗遙對。",
                "religion" =>
                    "伊斯蘭教為國教，居民中76.7％信奉伊斯蘭教，其中約70％屬遜尼派，30％屬什葉派。",
                "bilaterial_relations" => null,
                "main_bounds" => "科威特幣(Kuwait Dinar)",
                "exchange_rate" =>
                    "1 Kuwait Dinar = 3.251USD (2023.03) 詳細匯率資訊建議至臺灣銀行(https://rate.bot.com.tw/cr?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。科國通用之貨幣為科鎊KUWAIT DINAR（簡稱KD）及FILS（一科鎊等於1,000 FILS），科鎊係全球幣值最高的貨幣（紙幣有等值四分之一、二分之一、一、五、十及廿科鎊等面額，硬幣有等值5、10、20、50及100FILS），各大銀行與民間錢莊均可兌換美元、歐元、英鎊、日圓等外幣，甚為方便。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/afffabb1-a884-4ccf-84da-7bf964b3bebe.GIF",
                "is_diplomatic" => 0,
                "language" => "阿拉伯語為官方語言，英語亦通用。",
                "main_media" =>
                    "科威特全國主要有8家日報，其中阿拉伯文報6家：消息報、政治報、輿論報、火炬報、每日報以及新聞報；英文報2家：科威特時報及阿拉伯時報。",
                "population" =>
                    "目前科威特人口約446萬人，其中包括外國人約296萬人，外籍居民主要係埃及、黎巴嫩、印度、伊朗、菲律賓、巴基斯坦、孟加拉、及斯里蘭卡等國。",
                "voltage" =>
                    "科國電壓為220V至240V(伏特)，電壓高，應小心使用；插座為三孔式，如攜入國內110V(伏特)之電器，須先注意變壓後使用。",
                "time_difference" => "-5:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/91f1e4f1-c70e-4146-bfbe-4c134fbe9496.jpg",
                "political_system" =>
                    "科威特採君主立憲政體，科威特元首兼全國最高行政長官。",
                "history_intro" =>
                    "科威特位於阿拉伯灣(亦稱波斯灣)之西北角的君主制國家，歷史上曾是英國殖民地。1961年6月19日宣布獨立，同年成為阿拉伯聯盟和聯合國成員國。1990年8月2日遭伊拉克入侵，1991年2月26日復國。",
                "parliament" =>
                    "1963年1月選出第一屆國會議員，近期國會大選是2022年9月29日，第17屆國會選出50位國會議員，其中包含兩位女性議員，國會議長由Ahmad Al-Saadoun出任。科威特憲法法院2023年3月19日裁定2022年國會選舉結果無效，須恢復上屆(2020年)國會。(4月16日更新)",
                "cabinet" =>
                    "科威特元首納瓦夫(Sheikh Nawaf Al-Sabah)於2022年7月24日任命Ahmad Al-Nawaf Al-Sabah親王為新總理並由總理組內閣，負責執行國家政策。2023年3月5日科國總理Ahmad Al-Sabah獲重新任命組閣，並於4月9日宣布新內閣。(2023年4月16日更新)",
                "judiciary" =>
                    "科威特司法機構隸屬於司法部。最高法院院長及總檢察長由元首任命，法院以元首名義依憲法行使司法權。",
                "headman" =>
                    "科威特元首納瓦夫（Sheikh Nawaf Al-Sabah），2020年9月29日登基，為科第16任元首。",
                "fa_minister" => "Sheikh Salem Abdullah Al-Jaber Al-Sabah",
                "major_political_parties" =>
                    "科威特禁止成立政黨，惟允許政治派系存在。目前科威特主要政治派系包括：1、伊斯蘭憲章運動；2、伊斯蘭聯盟；3、憲章聯盟；4、民主論壇；5、自由獨立派。",
                "financial_incoming" =>
                    "由於科威特2020年受到國際油價下滑影響預算緊縮，前元首薩巴赫率先縮減王室開支，並呼籲政府及國人共體時艱，共同面對國家財政困難。政府亦研議徵收營業稅、提高一般關稅與行政規費等措施。另內閣已決議於2017年9月1日起取消對燃油補貼。2022年起國際油價上漲使石油收入增加，暫時緩解龐大預算赤字(2020/21年度預算赤字達460億美元)，惟財政管理成效及經濟多元化程度不足仍亟待改善。",
                "export_value" =>
                    "2021年科國對外貿易出口總值約631.8億美元。(WTO統計)",
                "import_value" =>
                    "2021年科國對外貿易進口總值約318.8億美元。(WTO統計)",
                "export_item" => "石油、石化產品、工具機、肥料、銅鐵鋁廢料 。",
                "import_item" =>
                    "車輛及其零件、建築材料、食品藥品、通訊器材、成衣及紡織品。",
                "main_export_countries" => "中國、南韓、印度、日本、美國。",
                "main_import_countries" =>
                    "中國、阿拉伯聯合大公國、沙烏地阿拉伯、日本、印度 。",
                "export_to" =>
                    "我國對科威特2022年出口總額為1億4,887萬美元，主要產品車輛及零件、塑膠製品、電機設備、通信器材、鋼鐵製品及紡織品。",
                "import_from" =>
                    "我國與科威特間主要經貿仍以原油採購為主，2022年臺科雙邊貿易總額約71億4,837萬美元，為我第19大貿易夥伴。2022年我自科國進口總額為69億9,950萬美元，主要進口產品為原油及石化原料等。",
                "foreign_relationship" =>
                    "科威特曾受伊拉克入侵，其對外政策遵行溫和之外交政策，主張和平共處與各國發展關係，並致力於維護科威特獨立、主權及領土之完整，與歐美國家維持密切關係。科威特積極維護阿拉伯國家團結，與海灣國家在政治、經濟、軍事等領域共同協調及合作，協調海灣地區的安全與穩定。另在國際事務中，科威特主張建立公正、合理之國際新秩序，反對侵略擴張，認為聯合國應為維護世界之安全與和平發揮作用。科威特於2018-2019年擔任聯合國安全理事會非常任理事國，亦為阿拉伯聯盟、海灣合作理事國等國際和地區組織之成員國，並與全球110個國家建立外交關係。",
                "foreign_policy" =>
                    "科威特曾於1990年因伊拉克入侵亡國，深刻瞭解科威特需要國際社會之支持，多年來均尋求各國之支持及建立友好關係，同時進行人道援助，以及獲聯合國安全理事會成員國之支持。",
                "time_range" =>
                    "與臺灣相差5小時(即臺灣時間減5小時為科國時間，如臺灣為下午3時，則科國為上午10時)。",
                "resident" => "駐科威特台北商務代表處",
                "national_flag" =>
                    "科威特國旗係由黑 （在左，為梯形）、綠、白、紅 （三者在右成橫條）四色組成的旗幟，是泛阿拉伯色彩旗幟。國旗上顏色意為:白色是科威特人對和平期望綠色是科威特人民的大地紅色是科威特人民的鮮血黑色代表科威特歷史上數次戰爭",
                "area_name" => "亞西地區",
                "area_name_in_en" => "West Asia",
            ],
            132 => [
                "name" => "科索沃共和國",
                "name_in_en" => "Republic of Kosovo",
                "short_name" => "科索沃",
                "short_name_in_en" => "Kosovo",
                "capital" => "普里斯汀納",
                "capital_in_en" => "Pristina",
                "national_day" => "2月17日",
                "join_un_day" => "尚未加入",
                "area_size" => "10,887平方公里",
                "geographic" =>
                    "位於巴爾幹半島，西鄰蒙特內哥羅，北部及東部與塞爾維亞交接，東南鄰北馬其頓，西南鄰阿爾巴尼亞。",
                "religion" => "伊斯蘭教、東正教、天主教",
                "bilaterial_relations" => null,
                "main_bounds" => "歐元",
                "exchange_rate" =>
                    "歐元為國際主要貨幣之一，「詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。」",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/56a2a1b3-7d23-46f2-ab7f-5e565b7b37c1.GIF",
                "is_diplomatic" => 0,
                "language" => "阿爾巴尼亞語、塞爾維亞語",
                "main_media" =>
                    "「每日新聞」(Koha Ditore)、「公共廣播電視台」(Radio Television of Kosovo)",
                "population" => "177萬人",
                "voltage" => "220V",
                "time_difference" => "-6:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/9f6749fa-e871-402b-8267-61a98412ad4d.jpg",
                "political_system" => "議會民主制",
                "history_intro" =>
                    "科索沃原為前南斯拉夫聯邦之自治省，南國解體後，科省續為塞爾維亞一部分。1990年阿爾巴尼亞裔居民（占科索沃人口之93%）展開和平分離運動，並逕自成立國會宣布獨立，當時未經任何國家或政府承認。自1995年起，科索沃境內阿爾巴尼亞裔與塞爾維亞裔居民暴力衝突不斷升高，塞國部隊介入殺戮阿裔，並摧毀其文化資產。 北約組織於1999年進行軍事干預，促使交戰雙方停火，同年聯合國通過第1244號決議案，原則界定科索沃為塞爾維亞之自治省，實際運作則獨立於塞國，並由聯合國駐科索沃代表團（UNMIK）負責監督管理，其安全事務則由北約所領導之多國部隊（KFOR）維持。相關各造在聯合國之主導下，自2005年起就科索沃地位展開多次談判，經過2年多談判周旋，科索沃於2008年2月17日逕自宣布獨立，塞爾維亞則仍宣稱擁有科索沃主權。在歐盟主導下，科索沃與塞爾維亞於2013年4月19日就關係正常化達成「布魯塞爾」協議，然而多年來仍無法和解。美國雖另於2020年9月4日促成前總理Avdullah Hoti與塞國總統Aleksander Vucic在華府簽署經濟關係正常化協議，但政治爭端依舊難解。2022年下半年，科政府要求境內塞裔公民須改懸掛科國車牌，與塞國緊張局勢加劇，經歐盟調解平息。歐盟以兩國須達成關係正常化作為加入歐盟的前提，2023年起續依據新提倡的「法—德提議」，與美國共同斡旋，力促兩國儘速達成關係正常化。",
                "parliament" =>
                    "一院制，共120席，任期4年。其中100席由得票率超過5%門檻之政黨分配席次，20席為少數族裔保留席。",
                "cabinet" =>
                    "總理由國會選出，為最高行政首長，現任總理為Albin Kurti。",
                "judiciary" =>
                    "分為最高法院、區域法院、地方法院及輕罪法院等四級。",
                "headman" =>
                    "總統為國家元首，由國會選出，任期5年，連選得連任1次。現任總統為Vjosa Osmani，2021年4月4日就職。",
                "fa_minister" => "Donika Gërvalla-Schwarz （副總理兼任）",
                "major_political_parties" =>
                    "自決黨（Vetevendosje, LVV）、科索沃民主聯盟( Democratic League of Kosovo, LDK)、科索沃民主黨(Democratic Party of Kosovo, PDK)、科索沃未來同盟（the Alliance for the Future of Kosovo, AAK）、科索沃利益黨（NISMA）",
                "financial_incoming" =>
                    "歲入預算20.43億歐元；歲出預算25億歐元（2021）",
                "export_value" => "7億4900萬歐元（2021）",
                "import_value" => "46.43億歐元（2021）",
                "export_item" =>
                    "基本金屬、橡膠塑膠製品、食品飲料及菸、礦產品、蔬菜產品、機械設備、紡織品、石料、皮製品",
                "import_item" =>
                    "礦產品、機械設備、食品飲料及菸、基本金屬、運輸設備、化學品、橡膠塑膠製品。",
                "main_export_countries" =>
                    "歐盟(31.4%)、美國(16.3%)、阿爾巴尼亞、北馬其頓、瑞士、塞爾維亞、蒙特內哥羅、土耳其、波士尼亞、哈薩克",
                "main_import_countries" =>
                    "歐盟(44.3%)、土耳其(12.6%)、中國(9.7%)、塞爾維亞、阿爾巴尼亞、北馬其頓、美國、沙烏地阿拉伯、波士尼亞、俄羅斯。",
                "export_to" => "44.3萬美元 (2022)",
                "import_from" => "3,189美元(2022)",
                "foreign_relationship" => null,
                "foreign_policy" =>
                    "科索沃自2008年2月宣布獨立迄今，已獲百餘國承認，除俄羅斯、中國及塞爾維亞反對其國家地位外，目前歐盟國家中羅馬尼亞、斯洛伐克、西班牙、希臘與塞普勒斯等五國仍未給予科國正式承認。科索沃已是世界銀行、國際貨幣基金會、歐洲復興開發銀行（EBRD）等國際組織會員國，對外政策持續以爭取成為聯合國、歐盟、北約、歐洲理事會等國際組織為主要目標。科國於2022年5月12日申請加入歐洲理事會，同年12月14日申請加入歐盟。科國多年致力爭取公民入境申根地區免簽證待遇，歐洲議會與歐盟理事會於2022年月14日達成共識並發布聲明，自2024年元月1日起，持科國護照者至歐盟國家得以免簽證入境。該共識待歐洲議會投票及經歐盟理事會確認實施。",
                "time_range" =>
                    "夏季日光節約時間(4月至10月)較台灣慢6小時、其他季節慢7小時。",
                "resident" => "無（由駐匈牙利代表處兼轄）",
                "national_flag" =>
                    "2008年2月17日採用，國旗藍色背景內金黃色部分是科索沃的地圖形狀，上面6顆白色五角星星，代表組成國家的6個主要民族。",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            133 => [
                "name" => "秘魯共和國",
                "name_in_en" => "Republic of Peru",
                "short_name" => "秘魯",
                "short_name_in_en" => "Peru",
                "capital" => "利馬(Lima)",
                "capital_in_en" => "LIMA",
                "national_day" => "7月 28日",
                "join_un_day" => "1945年10月31日",
                "area_size" => "128萬5,215平方公里",
                "geographic" =>
                    "位於南美洲西北部，西濱太平洋，北接厄瓜多，東南靠玻利維亞，南鄰智利，東與哥倫比亞、巴西為界、海岸線長達2,250公里。",
                "religion" => "天主教",
                "bilaterial_relations" => null,
                "main_bounds" =>
                    "新索爾(NUEVO SOL)匯率：索爾(Sol)」目前1美元兌換約3.9索爾(2022年9月 29日)，有200、100、50、20及10元紙幣與5元、2元、 1元、5角、2角及1角等硬幣，可在機場、銀行、錢莊自由兌換，惟須注意假鈔。",
                "exchange_rate" =>
                    "索爾(Sol)」目前1美元兌換約3.71索爾(2022年5月11日)，有200、100、50、20及10元紙幣與5元、2元、1元、5角、2角及1角等硬幣，可在機場、銀行、錢莊自由兌換，惟須注意假鈔。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/a2903f39-3fde-4805-a816-40bb02506b42.GIF",
                "is_diplomatic" => 0,
                "language" => "西班牙文",
                "main_media" =>
                    "共和報(La República)、快報(El Expreso)、秘魯人報(El Peruano)、商報(El Comercio)、綜合報(El Sintesis)、經營報(La Gestión)、秘魯21報(Perú 21)。",
                "population" => "3,303萬人(2021)",
                "voltage" => "220V",
                "time_difference" => "-13:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/0502f5f9-44f2-4cdb-aecd-e4d46bb66d9e.jpg",
                "political_system" =>
                    "共和國，採總統制 (任期5年，不得連任，惟現任總統可於卸任後隔任再次參選)",
                "history_intro" =>
                    "秘魯為南美古國，即昔之印加帝國，在印加帝國時期，版圖曾包括今之秘魯、玻利維亞、厄瓜多、智利北部及阿根廷西北部，甚至伸展至今日之巴西。此一帝國延續四百年，卒因末期帝王兄弟內鬨，國力日衰，竟被入侵之百餘名西班牙武士擊潰而亡國。 19世紀初聖馬丁將軍（José de San Martín) 率領一支強有力之革命軍，自阿根廷倡導獨立運動，初征服智利之西班牙統治政權，再北上秘魯。在其勇敢堅決之信念下，屢敗屢戰，百折不撓，終於完成南美數國之英雄事業。秘魯為聖馬丁攻佔後，於1821年7月28日在利馬宣告獨立。2021年7月28日系秘魯獨立200週年紀念。 秘魯於1836年至1839年曾受到玻利維亞執政者聖泰克魯斯所謂「秘玻聯邦」之統治，1879年秘魯與玻利維亞聯盟對智利作戰，此即南美歷史上著名之「太平洋戰爭」，起因為秘玻兩國反對智利攫取各該國濱臨太平洋岸之硝礦產品。 玻秘兩國於1884年戰敗，玻國喪失其濱海之安托法加斯大省（Antofagasta)，成為一內陸國家。秘魯亦因此喪失包括亞瑞加港(Arica) 之達拉帕卡省 (Tarapaca)。",
                "parliament" => "採一院制，議員130人，任期5年。",
                "cabinet" =>
                    "由總統任命內閣總理及各部部長，經國會信任投票組成，行使行政權，對國會負責。 現任內閣總理為Luis Alberto Otárola。",
                "judiciary" => "司法權屬各級法院",
                "headman" =>
                    "總統卡斯迪優(Pedro Castillo)於2021年7月28日宣誓就職。2022年12月7日經國會罷免，由副總統柏狄娜(Dina Boluarte)接任。",
                "fa_minister" => "Ana Cecilia Gervasi Díaz",
                "major_political_parties" =>
                    "人民力量黨 (Fuerza Popular)、自由秘魯黨(Perú Libre)、人民行動黨 (Acción Popular)、教師黨團(Bloque Magiserial)、人民革新黨(Renovación Popular)、進步聯盟黨(Alianza para el Progreso)、國家前進黨(Avanza País)、民主秘魯(Peru Democrático)、民主改變 (Cambio Democrático)、我們是秘魯黨(Somos Perú)、秘魯我們可以黨(Podemos Perú)等。",
                "financial_incoming" =>
                    "國民年均所得6,678美元（2021）、國內生產毛額2,246.65億美元(2021)、外匯存底 780億美元(2021)",
                "export_value" => "562億4,100萬美元 (2021)",
                "import_value" => "464億3,800萬美元(2021)",
                "export_item" =>
                    "銅礦石及精砂、其他未鍛造黃金、陰極及陰極形精煉銅、鋅礦石及精砂、魚粉、鐵礦石及其精砂、葡萄、鋅礦石及精砂、鮮藍莓。",
                "import_item" =>
                    "煤油、蜂巢式網路或其他無線網路電話、石油原油及自瀝青質提煉出之原油、飼料用玉蜀黍、攜帶式自動資料處理機、其他石化油類。",
                "main_export_countries" =>
                    "中國大陸、美國、南韓、加拿大、印度、日本、瑞士、荷蘭、智利。",
                "main_import_countries" =>
                    "美國、中國大陸、西班牙、瑞士、香港、烏拉圭、巴西、南韓、新加坡、德國、巴拿馬。",
                "export_to" => "3億7,047萬美元(2021)",
                "import_from" => "2億7,349萬美元(2021)",
                "foreign_relationship" => "良好",
                "foreign_policy" => "遵守聯合國憲章，維護世界和平。",
                "time_range" => "晚臺灣13 小時。",
                "resident" => "我國在秘魯首都利馬設有代表處",
                "national_flag" =>
                    "秘魯國旗由三條垂直的紅、白、紅縱條組成。由何塞·德·聖馬丁設計，1825年啟用。6月7日為國旗日。",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            134 => [
                "name" => "突尼西亞共和國",
                "name_in_en" => "Republic of Tunisia",
                "short_name" => "突尼西亞",
                "short_name_in_en" => "Tunisia",
                "capital" => "突尼斯",
                "capital_in_en" => "Tunis",
                "national_day" => "3月20日",
                "join_un_day" => "1956年11月12日",
                "area_size" => "163,610平方公里",
                "geographic" => "北臨地中海，與阿爾及利亞及利比亞為鄰。",
                "religion" =>
                    "伊斯蘭教遜尼派(99%)、其他(包含基督教、猶太教、伊斯蘭教什葉派等)(1%)",
                "bilaterial_relations" => null,
                "main_bounds" => "Tunisian Dinar(TND)",
                "exchange_rate" =>
                    "1美元兌換2.94突尼西亞第納爾（2022年3月）。詳細匯率資訊建議至臺灣銀行（https://rate.bot.com.tw/xrt?Lang=zh-TW）或兆豐商銀（https://www.megabank.com.tw/personal/foreign-service/forex）網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/e324f1ae-64b1-4deb-ab92-64493fbb16f9.GIF",
                "is_diplomatic" => 0,
                "language" => "阿拉伯語（官方語言）、法語、柏柏爾語",
                "main_media" =>
                    "報紙：La Presse、Al-Horria、Nouvelles de Tunisie等。電視：國營突尼西亞廣播及電視公司(Tunisian Radio and Television Establishmentm, ERTT) 、Hannibal TV(突國第一家民營電視公司)。廣播：Tunisian Radio 國營廣播台。另有國營的突尼斯非洲通訊社(Tunis Afrique Presse)",
                "population" => "11,811,335 (2021年)",
                "voltage" => "220V",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/593712d2-33c3-4216-ba44-686d10268bc5.jpg",
                "political_system" => "民主共和國／總統制",
                "history_intro" =>
                    "突尼西亞曾經是古迦太基國發源地。西元前8世紀，腓尼基人在北非建立迦太基城，當時迦太基城還只是腓尼基城邦泰爾的海外殖民地。西元前650年 ，脫離泰爾獨立，建立城市國家古迦太基。古迦太基強盛時，勢力涵蓋今日北非沿岸、西班牙中部、柯西嘉島、薩丁尼亞島、西西里島和馬爾他島， 首都迦太基富極一時，成為當時地中海地區最有活力的經濟強國。古迦太基與羅馬共和國發生三次布匿戰爭均戰敗，並於西元前146年滅亡。迦太基被征服並成為羅馬共和國阿非利加行省，人口達60萬，為當時僅次於羅馬的第二大城。羅馬皇帝哈德良還修建巨大的馬加蓄水池和著名的安東尼浴場。在4世紀時，西羅馬帝國逐漸崩潰 ，西元439年汪達爾人乘機入侵迦太基，並佔領了非洲北部沿海大片土地，成立了汪達爾-阿蘭王國。西元698年，阿拉伯人入侵迦太基城，該城被嚴重破壞。1217年-1221年，第五次十字軍東征橫掃過迦太基之後，這座歷經滄桑的古城幾乎損壞殆盡，終於完全消失在歷史中。突尼西亞曾受鄂圖曼帝國長期統治(1574-1705)，後自立王朝(les Husseinites)雖向鄂圖曼帝國稱臣，卻實際統治突國。在1881年時，隨著法國對殖民地的開拓，轉而成為法國保護國。1956年3月20日，在殖民地獨立風潮之際，突尼西亞贏得了獨立，正式改名為突尼西亞王國，初期採君主立憲制，由Lamine Bey成為首任統治者。1957年7月25日，共和國宣告成立，民族主義領袖Habib Bourguiba就任首屆總統，建立嚴格一黨制國家，統治長達31年之久，直至1987年11月被罷黜，改由發動政變之Zine el Abidine Ben Ali取而代之。",
                "parliament" =>
                    "「茉莉花革命」後，突國於2011年10月23日舉行首次民主選舉，計110個政黨參選，選出217位制憲議會（Constituent Assembly）成員，任期5年，該議會係臨時立法機構，已於2012年2月起草新憲，2014年1月通過新憲，2014年12月突國依新憲選舉國會議員，2019年10月舉行國會選舉，選出217名議員，「伊斯蘭復興運動黨」(Ennahdha)及「突國之心黨」(Qalb Tounès)現為國會前兩大政黨，下屆選舉預計將於2024年舉行。",
                "cabinet" =>
                    "總理由總統任命，現任總理為Najla Bouden(2021年10月11日就任)。",
                "judiciary" =>
                    "設有最高司法委員會、最高法院、上訴法院、一審法庭及地方法庭。",
                "headman" => "Kaïs Saïed (2019年10月23日就任)",
                "fa_minister" => "Othman Jerandi",
                "major_political_parties" =>
                    "伊斯蘭復興運動 (Ennahdha)、突尼西亞呼聲黨(Nidaa Tounes)、自由愛國聯盟(Union patriotique lbire)、人民陣線(Front populaire)、突國前景黨(Afek Tounes)、共和國大會黨(Congrès pour la République)等。",
                "financial_incoming" =>
                    "歲入約102.6億美元，歲出約132.03億美元 (2021年)",
                "export_value" => "194.4億美元 (2021年)",
                "import_value" => "237.8億美元 (2021年)",
                "export_item" =>
                    "服飾、紡織品及半成品、農業品、機械產品、化工產品、電器設備",
                "import_item" => "紡織原料、機械設備、農產品、化工原料、食品",
                "main_export_countries" => "法國、義大利、德國、利比亞",
                "main_import_countries" =>
                    "義大利、法國、中國、德國、土耳其、阿爾及利亞、西班牙",
                "export_to" => "46,137,821美元 (2021年)",
                "import_from" => "15,177,651 美元 (2021年)",
                "foreign_relationship" =>
                    "1956年11月12日加入聯合國，為不結盟運動、非洲團結組織、阿盟之會員國。對以色列問題持溫和立場。與美國、俄羅斯關係皆良好。與歐盟（特別是法國）維持良好關係，加強與美國經貿合作以降低對歐盟的依賴。突國與敘利亞及葡萄牙的雙邊合作廣泛，遍及農業、能源、石油、礦業、教育、財政等。",
                "foreign_policy" =>
                    "與重點國家(法國、歐盟、美國及鄰近國家)維持友善關係。目前致力於加強與中國、敘利亞及葡萄牙的雙邊關係。",
                "time_range" => "比臺灣慢7小時(夏令時間慢6小時)",
                "resident" =>
                    "臺灣駐的黎波里商務代表兼轄(目前該館暫停館務運作，現由我駐法國代表處代管)",
                "national_flag" => "紅色的旗幟。中間新月抱星的圖案",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            135 => [
                "name" => "立陶宛共和國",
                "name_in_en" => "Republic of Lithuania",
                "short_name" => "立陶宛",
                "short_name_in_en" => "Lithuania",
                "capital" => "維爾紐斯",
                "capital_in_en" => "維爾紐斯(Vilnius)",
                "national_day" => "2月16日",
                "join_un_day" => "1991年09月17日",
                "area_size" => "65,286平方公里",
                "geographic" =>
                    "立陶宛位於北緯53.9度至56.3度，東經21度至26.8度。西濱波羅的海，北鄰拉脫維亞，東為白俄羅斯，南接波蘭，西南則與俄羅斯之卡列寧格勒接壤，西與瑞典隔海相望。",
                "religion" => "羅馬天主教為主，亦有東正教等少數宗教。",
                "bilaterial_relations" => "{{--br /--}}",
                "main_bounds" => "2015年1月起採用歐元",
                "exchange_rate" => "目前歐元與台幣匯率約為34.4台幣兌換1歐元",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/45116125-29c2-49f9-8606-0c9d6ea4b2ca.GIF",
                "is_diplomatic" => 0,
                "language" => "立陶宛語",
                "main_media" =>
                    "LRT立陶宛國家廣播及電視台、DELFI（網路新聞）、15min（15分鐘）、Lietuvos Rytas（立陶宛晨報）, Verslo Zinios(經濟日報], BNS Lithuania(波海新聞社立陶宛分社], ELTA(立陶宛新聞社], LNK(電視台],",
                "population" => "約279萬",
                "voltage" => "220 Volts AC, 50Hz, 插頭為歐洲雙圓柱型插頭。",
                "time_difference" => "-6:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/dc81d392-7b7f-4e2c-973e-23fe1de71cbf.jpg",
                "political_system" => "民主共和體制／議會內閣制。",
                "history_intro" =>
                    "1009年史書首次提及立陶宛，1240年成立統一的立陶宛大公國。1385年後立陶宛曾與波蘭聯合為邦聯，維陶塔斯大公執政期間(1392-1430年)是鼎盛時期，領土涵蓋波蘭、白俄羅斯、烏克蘭西部等。1795年後立陶宛逐步被沙俄吞併，第一次世界大戰期間又被德國佔領，直到1918年2月16日宣佈獨立建立共和國。1939年8月，蘇聯和德國簽訂秘密條約，被劃入蘇聯勢力範圍，次年初被蘇聯佔領。1941年蘇德戰爭開始後，立刻被德國佔領。1944年蘇聯軍隊進入立陶宛，成立立陶宛蘇維埃社會主義共和國並加入蘇聯。1990年3月11日通過獨立宣言，1991年9月6日，蘇聯承認立陶宛獨立。",
                "parliament" =>
                    "國會採一院制，稱為Seimas，國會選舉採區域候選人與政黨提名兩票制， 141席中71席由單一席次選區直接選出，另70席由政黨得票比例產生。若第一輪投票最高得票候選人之得票比率未超出50%，其選區應再舉行第二輪投票。國會議員任期4年，國會選舉時機是在該屆議員任期屆滿當年10月之第二個星期日。",
                "cabinet" =>
                    "總理為最高行政首長，由總統提名，經國會同意後任命並向國會負責。",
                "judiciary" =>
                    "立國司法制度屬大陸法系國家，法院共分三級，另設憲法法院掌理憲法解釋及爭議審理。",
                "headman" =>
                    "總統Gitanas Nausėda (國會議長Viktorija Čmilytė-Nielsen為備位元首)",
                "fa_minister" => "Gabrielius Landsbergis",
                "major_political_parties" =>
                    "祖國聯盟-基督教民主黨、自由黨、農民及綠色聯盟、社民黨、自由運動黨、勞工黨、立陶宛地區黨、為立陶宛民主黨。",
                "financial_incoming" =>
                    "2021年預估歲入112.5億歐元，預估歲出158.4億歐元",
                "export_value" => "345.8億歐元(2021年)",
                "import_value" => "377.7億歐元(2021年)",
                "export_item" => "汽油、機械工具、化學、家具、紡織及穀物",
                "import_item" =>
                    "原油、瓦斯、交通機具設備、化學、紡織及金屬機具",
                "main_export_countries" =>
                    "歐盟、俄羅斯、拉脫維亞、波蘭、德國等",
                "main_import_countries" =>
                    "歐盟、俄羅斯、德國、波蘭、拉脫維亞等",
                "export_to" => "1 億 3,177 萬美元 (2021年)",
                "import_from" => "4,296 萬美元 (2021年)",
                "foreign_relationship" =>
                    "努力加強波海三國間之合作關係同時積極融入西方國家陣營。",
                "foreign_policy" =>
                    "立國係聯合國、北大西洋公約組織、歐洲聯盟、歐洲安全合作組織、北大西洋合作理事會、歐洲理事會及世界貿易組織會員國。立陶宛之安全依賴北約及美國甚深，外交上優先發展與歐盟及美國，亦致力加強與東歐及北歐國家間之合作關係。2014年俄羅斯兼併克里米亞，立國外交上更積極聯合美國等西方國家，支持東歐及巴爾幹半島之前蘇聯共和國民主化，以對抗俄羅斯影響力。近年有鑒於中國勢力進入東歐及巴爾幹半島地區造成之不良影響，立國更採取具體政策對抗中國不當影響力，現已成為東歐地區對抗極權勢力之外交政策領導者。",
                "time_range" => "比台灣慢6小時，夏令時間較台灣慢5小時",
                "resident" =>
                    "駐立陶宛台灣代表處（The Taiwanese Representative Office in Lithuania）",
                "national_flag" =>
                    "立陶宛國旗是一面黃、綠、紅橫向三色旗幟，由立陶宛於1989年3月20日從前蘇聯獨立時採納為國旗。之前，於1918年至1940年期間，這面旗幟亦是當時仍然保持獨立國家地位的立陶宛國旗。1940年被蘇聯吞併，直至1989年為止。蘇聯佔領期間，立陶宛採用另一面旗幟，為紅底左上角有黃色五角星及鐮刀、鐵錘圖案的泛蘇聯旗幟，之後旗幟下方加上白色窄條和綠色寬條。立陶宛現國旗的長寬比例本來是1:2，2004年改為3:5。",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            136 => [
                "name" => "約旦哈希米王國",
                "name_in_en" => "Hashemite Kingdom of Jordan",
                "short_name" => "約旦",
                "short_name_in_en" => "Jordan",
                "capital" => "安曼",
                "capital_in_en" => "Amman",
                "national_day" => "5月25日(May 25)",
                "join_un_day" => "1955年12月14日(December 14, 1955)",
                "area_size" => "約旦面積 89,342 平方公里。",
                "geographic" =>
                    "北鄰敘利亞、東毗伊拉克，南接沙烏地阿拉伯，西與以色列 (約人稱之為巴勒斯坦) 為鄰。",
                "religion" => "絕大多數信奉伊斯蘭教占97.2%，2.2％為基督徒；",
                "bilaterial_relations" => null,
                "main_bounds" => "Jordanian Dinar(JOD)",
                "exchange_rate" =>
                    "1美元固定兌0.708約幣。(詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。)",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/2bacb171-e6c9-45d8-8a2d-953172bf25eb.GIF",
                "is_diplomatic" => 0,
                "language" => "官方語文為阿拉伯文，英文亦甚為普及。",
                "main_media" =>
                    '三大阿拉伯日報：輿論報(Al Rai)、憲政報(Ad-Doustour)、明日報(Al Ghad)英文日報：約旦時報(The Jordan Times)、約旦新聞報(Jordan News)三大電視台：Jordan TV、Ro\'ya TV、Al Mamlakah TV。',
                "population" =>
                    "約1,099萬(2022年)，由於1948、1967年兩次以阿戰爭，逃難至約旦之巴勒斯坦裔人口占約旦總人口比例相當高，目前多已獲約旦國籍，除少數擔任公職外，其餘多經營工商業及技術性之工作，另2011年敘利亞內戰爆發後敘國逾130萬難民湧入約境，據聯合國難民署統計目前約境容納近70萬敘國難民，並設有Zaa’tari與Azraq兩座敘利亞難民營。",
                "voltage" => "220 V",
                "time_difference" => "-6:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/eec49d7c-52b7-47bf-be5f-ee0aec8126a5.jpg",
                "political_system" => "君主立憲。",
                "history_intro" =>
                    "約旦早有人類活動遺跡，曾先後歷經不同文明洗禮，迦南人城鎮、那巴提人廢墟、古羅馬劇場、回教寺院以及十字軍東征時所建城堡，所留遺跡保存至今。",
                "parliament" =>
                    "分參、眾兩議院: 眾議院共130席，由民選選出，參議院65席，由國王指派。",
                "cabinet" =>
                    "共29位閣員，目前總理兼國防部長為Dr. Bisher Al Khasawneh。",
                "judiciary" =>
                    "分三類:民事、宗教和特別法庭。民事法庭：包括裁判法院、初審法院、上訴法院、高級行政法院和最高法院。宗教法庭：包括伊斯蘭法律（伊斯蘭法）和其他宗教團體的法庭，即基督教少數民族的法庭。宗教法院設有初級和上級法院，僅處理涉及婚姻，離婚，繼承和子女監護等個人法律的事務。特別法庭：戒嚴期的嚴格軍事法院已被廢除，並由一名由軍人和民事法官組成的國家安全法院取而代之。該法院審判軍事和平民，其管轄權包括違反國家內部和國家安全以及與毒品有關的其他罪行。",
                "headman" =>
                    "國王阿布都拉二世（Abdullah Ⅱ Bin El Hussein），2009年7月2日阿布都拉國王立其長子胡生（Hussein）為王儲。",
                "fa_minister" => "Ayman Safadi(副總理兼任)",
                "major_political_parties" =>
                    "國家憲政黨、伊斯蘭行動陣線黨、約旦阿拉伯社會復興黨、約旦共產黨、約旦人民民主黨、阿拉伯進步復興黨、約旦人民統一黨、民族行動黨、阿拉伯民主伊斯蘭運動黨、約旦阿拉伯救援黨、約旦進步黨、約旦民族黨、約旦和平黨、阿拉伯土地黨、約旦工黨。另國會議員亦組成不同政團問政。",
                "financial_incoming" =>
                    "收入125.69億美元；支出：150.25億美元（2022年）。",
                "export_value" => "124.15億美元（2022年）",
                "import_value" => "273.66億美元（2022年）",
                "export_item" => "紡織，化肥，鉀肥，磷酸鹽，蔬菜，藥品等。",
                "import_item" => "原油，成品油，機械，運輸設備，鐵，穀物等。",
                "main_export_countries" =>
                    "美國、沙烏地阿拉伯、伊拉克、印度、阿拉伯聯合大公國、科威特。",
                "main_import_countries" =>
                    "沙烏地阿拉伯、中國大陸、美國、德國、阿拉伯聯合大公國。",
                "export_to" => "3.0億美元（2022年）為我國對外出口排名第51位。",
                "import_from" =>
                    "8,500萬美元（2022年）為外國進口我國排名第78位。",
                "foreign_relationship" =>
                    "約旦對外廣結善緣，不輕言樹敵；1994年與以色列簽署和平協議結束「戰爭狀態」，與其他各國均能維持良好關係。",
                "foreign_policy" => "採取睦誼外交政策。",
                "time_range" => "較臺灣慢5小時",
                "resident" => "駐約旦代表處。",
                "national_flag" =>
                    "由泛阿拉伯顏色：紅 、綠 、黑 、白 組成。紅色為一三角形在左方，其餘三色呈橫條，自上而下為黑、白、綠。",
                "area_name" => "亞西地區",
                "area_name_in_en" => "West Asia",
            ],
            137 => [
                "name" => "納米比亞共和國",
                "name_in_en" => "Republic of Namibia",
                "short_name" => "納米比亞",
                "short_name_in_en" => "Namibia",
                "capital" => "溫荷克",
                "capital_in_en" => "Windhoek",
                "national_day" => "3月21日",
                "join_un_day" => "1990年4月23日",
                "area_size" => "824,292平方公里",
                "geographic" =>
                    "位於非洲南部，北鄰安哥拉及尚比亞，東與辛巴威、波札那接壤，南部毗連南非。",
                "religion" => "基督教(80%~ 90%)、原住民族信仰(10%~20%)",
                "bilaterial_relations" => null,
                "main_bounds" =>
                    "納米比亞元 (Namibia Dollar, NAD, 與南非斐鍰等值)",
                "exchange_rate" =>
                    "111年6月10日 納幣兌台幣匯率約為1:1.8672；詳細匯率資訊建議至臺灣銀行（http://rate.bot.com.tw/xrt）或兆豐商銀（https://www.megabank.com.tw/personal/foreign-service/forex）網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/ff7572ce-e2ff-47ad-a680-0338eba59b2c.GIF",
                "is_diplomatic" => 0,
                "language" =>
                    "官方語言為英語，其他包括：斐語(Afrikaans)、德語及當地土語(Oshivambo、Herero及Nama等)。",
                "main_media" =>
                    "The Namibian納米比亞民營日報、 Namibia Economist 納米比亞經濟學人日報 、Namibian Broadcasting Corporation (NBC) 納米比亞國家廣播電視台。",
                "population" => "2,746,745人 (2020)",
                "voltage" => "220伏特",
                "time_difference" => "-6:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/f139caa9-db43-4a1a-bd0a-bd31253d5cd7.JPG",
                "political_system" => "民主共和國/總統制",
                "history_intro" =>
                    "原名西南非(South West Africa)，位於南非西北方，與尚比亞、安哥拉、波札納及南非接鄰，一次大戰前曾為德國殖民地，由南非託管。1966年起親共黨之「西南非人民組織(South West Africa People’s Organization,SWAPO）進行多年獨立武裝運動，南非於1988年同意依聯合國決議進行公開選舉。納國於1990年3月21日正式獨立，SWAPO成為執政黨，黨魁Samuel NUJOMA擔任首任總統，連任三屆至2004年為止，隨後由該黨副黨魁Hifikepunye POHAMBA於選舉中勝選，自2005年3月21日接任總統職位，復於2009年連任，2014年12月納國總統大選結果，SWAPO總統候選人Hage GEINGO當選總統，並於2019年11月再度勝選連任。",
                "parliament" =>
                    "國會為二院制，分別為國民大會（National Assembly）及全國委員會（National Council）。國民大會計104席位，96席由政黨比例代表制選舉產生，另外8席由總統任命（無投票權），任期5年，其功能類似英國之下議院；全國委員會其權限為覆核國民大會所通過之法案，計42席位，由14個行政區議會間接選出，各行政區均分配3席，任期5年。",
                "cabinet" => "現任總理為Saara Kuugongelwa-Amadhula。",
                "judiciary" =>
                    "法院為三級三審，由上至下分別為：最高法院、高等法院及地方法院；另有勞動法庭及社區法庭之特別設置。",
                "headman" => "Hage Geingob",
                "fa_minister" => "Netumbo Nandi-Ndaitwah",
                "major_political_parties" =>
                    "納米比亞自獨立以來即為西南非人民組織（SWAPO）一黨獨大，擁有65席國會席次，占比達65.5%，第二大黨PDM國會席次16席，占比為16.6%。",
                "financial_incoming" =>
                    "採赤字預算政策，其2020/2021年赤字約佔GDP之12.5%，達7.9億美元。（2020）",
                "export_value" => "56億美元（2020）",
                "import_value" => "68億美元（2020）",
                "export_item" =>
                    "礦產品（鑽石及鈾礦為主）、魚產品、金屬及動物製品。",
                "import_item" =>
                    "交通設備、食品及飲料、機器設備、化學、橡膠及塑料製品、汽油製品、紡織品。",
                "main_export_countries" =>
                    "南非、英國、義大利、西班牙、安哥拉、德國。",
                "main_import_countries" =>
                    "南非、英國、義大利、西班牙、安哥拉、德國。",
                "export_to" => "出口至納米比亞的金額為314萬美元。（2020）",
                "import_from" => "自納米比亞進口的金額為709萬美元。（2020）",
                "foreign_relationship" =>
                    "因歷史因素，與北韓交好，納國總統府及國防部均由北韓援建。自2017年納國因大量使用北韓勞工及進口北韓製武器遭美國及日本凍結部分海外資產，爰公開宣布中止與北韓間之各項合作案。中國大陸於執政黨西南非洲人民組織（SWAPO）爭取獨立時大力支持納國國父Sam Nujuma，與納國執政黨各階層關係密切，而現任總統Hage Geingo則曾旅居美國，亦主張與美國加強交往。近年日本與中國大陸於非洲開始競逐資源，甫於2016年於納國正式設立大使館，與納國關係逐漸升溫。納國為小國，注重鞏固及加強與周邊國家關係，尤其注重與南非之關係。",
                "foreign_policy" =>
                    "奉行不結盟、睦鄰友好之外交政策，強調外交為經濟建設服務；支持加強非洲國家間合作，已加入非洲聯盟；主張建立國際政治經濟新秩序，加強南半球國家合作、南北半球國家對話；注重鞏固及加強與周邊國家關係，同時開拓與亞洲國家間經貿往來。",
                "time_range" =>
                    "全國時區為格林威治時間加1小時（較台北慢7小時），夏季實施日光節約時間為格林威治時間加2小時（較台北慢6小時）。",
                "resident" =>
                    "我在納米比亞未設處，該國事務由我駐開普敦辦事處兼理。",
                "national_flag" =>
                    "納米比亞國旗是一面由藍、綠兩個直角三角形和中間白、紅、白斜條組成的旗幟，於1990年3月21日起採用。旗面左上角有一個放射12道光芒的金色太陽。 納米比亞國旗其含意兩種說法：一為其用色源自西南非洲人民組織的旗幟，代表了奧文博族；而另一種說法為紅色代表了人民和英雄主義和建立機會平等的未來的決心、白色代表和平團結、綠色代表植被和農業、藍色代表天空、大西洋和雨、金色代表能量與生命。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            138 => [
                "name" => "紐埃",
                "name_in_en" => "Niue",
                "short_name" => "紐埃",
                "short_name_in_en" => "Niue",
                "capital" => "阿洛非",
                "capital_in_en" => "Alofi",
                "national_day" => "2月6日",
                "join_un_day" => null,
                "area_size" => "陸地260平方公里",
                "geographic" =>
                    "位於南半球南緯19度，西經169度，為一珊瑚礁島嶼，西距東加王國480公里，西北距薩摩亞560公里。距離紐西蘭東北2400公里。",
                "religion" => "基督教",
                "bilaterial_relations" => null,
                "main_bounds" => "紐西蘭幣",
                "exchange_rate" =>
                    "詳細匯率資訊建議至台灣銀行(https://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)查詢",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/a51ca326-3c88-496d-8c33-340df0fffdea.gif",
                "is_diplomatic" => 0,
                "language" => "紐埃語、英語",
                "main_media" =>
                    "紐埃電視台（Television Niue）、紐埃星報（the Niue Star）",
                "population" => "約1,719人(紐埃人民亦擁有紐西蘭公民權)",
                "voltage" => "220V",
                "time_difference" => "-19:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/383694c7-468e-4060-bb0b-7c6ef8db06ed.JPG",
                "political_system" => null,
                "history_intro" =>
                    "紐埃歷史可分為四個階段: 基督教前、基督教時期、殖民時期與自我執政。紐埃歷史主要利用口述代代傳承，直到紐西蘭主政後才有歷史文獻。 據信紐埃住民已有千年歷史，專家相信島民主要源自薩摩亞和東加。",
                "parliament" => null,
                "cabinet" => null,
                "judiciary" => null,
                "headman" => null,
                "fa_minister" => null,
                "major_political_parties" => null,
                "financial_incoming" => null,
                "export_value" => null,
                "import_value" => null,
                "export_item" => null,
                "import_item" => null,
                "main_export_countries" => null,
                "main_import_countries" => null,
                "export_to" => null,
                "import_from" => null,
                "foreign_relationship" => null,
                "foreign_policy" => null,
                "time_range" => "較我晚19個小時。",
                "resident" => "駐紐西蘭代表處",
                "national_flag" =>
                    "紐埃國旗自1975年開始使用。紐埃國旗左上部分為英國國旗，但在英國國旗內增加了五顆黃色五角星。其餘部分為黃色，代表的是紐埃與紐西蘭之間的溫暖和友誼。 https://commons.wikimedia.org/wiki/File:Flag_of_Niue.svg#/media/File:Flag_of_Niue.svg",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            139 => [
                "name" => "紐西蘭",
                "name_in_en" => "New Zealand",
                "short_name" => "紐西蘭",
                "short_name_in_en" => "New Zealand",
                "capital" => "威靈頓",
                "capital_in_en" => "Wellington",
                "national_day" => "2月6日(懷當義條約日)",
                "join_un_day" => "1945年",
                "area_size" => "269,652平方公里",
                "geographic" =>
                    "紐西蘭位於南太平洋，於南緯34度至47度之間，由兩座主要大島(南島與北島)及若干小島組成。",
                "religion" => "基督教(37.3%) (2018年人口普查資料)",
                "bilaterial_relations" => null,
                "main_bounds" => "紐西蘭幣",
                "exchange_rate" =>
                    "詳細匯率資訊建議至台灣銀行(https://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)查詢",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/cf8056df-60f3-40ab-ad0a-3c0e459d4158.gif",
                "is_diplomatic" => 0,
                "language" => "英語、毛利語、手語",
                "main_media" =>
                    "電視媒體：TVNZ報紙媒體：New Zealand Herald (奧克蘭)、The Dominion Post (威靈頓)、The Press(基督城)、Otago Daily Times(但尼丁)、Sunday StarTimes 電台：Radio New Zealand及NZME Radio與MediaWorks New Zealand旗下共約27個電台群。",
                "population" => "5,127,200 (2021年12月31日估計)",
                "voltage" =>
                    "全紐西蘭的電壓都是230/240伏特(50赫茲)， 旅館和汽車旅館可能備有110伏特交流插座(20瓦特級)供電鬍刀使用。 其他電器用品則需要另外準備變壓器/轉接頭， 除非該電器本身即有多段電壓功能。插頭只能插三端或二端的扁平頭（八字型），依地線頭是否符合而定。",
                "time_difference" => "+4:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/587cde9b-0fd8-4ff5-8af7-008b2cf62a03.jpg",
                "political_system" =>
                    "國體為君主立憲，以英國國王為國家元首，總督為其代表。政體為責任內閣制，國會採單院制，選舉制度為「混合比例代表制」。 原則上國會由120名議員組成，惟因前述混合比例代表制，有時會因選票比例加總關係而會多出1至2席，本（第53）屆為120席。每屆國會大選，由在國會中獲多數議席或相對多數支持之政黨籌組政府。",
                "history_intro" =>
                    "毛利人祖先自南太平洋島嶼遷徙來紐西蘭(毛利語稱為Aotearoa，長條白雲的故鄉)定居，1642年荷蘭東印度公司之航海家塔斯曼(Abel Tasman)發現此地及命名為Nova Zeelandia。 1769至1777年，英國皇家海軍船長庫克(James Cook)先後5次造訪紐西蘭，建立據點，改以英文稱為New Zealand。 1840年2月6日，英國與紐西蘭各地毛利部族族長在北島懷當義(Waitangi)簽訂條約，稱為懷當義條約(Treaty of Waitangi)，紐西蘭成為英國殖民地。1852年英國國會通過紐西蘭憲政法(New Zealand Constitution Act)，允許紐西蘭自治。1907年紐西蘭成為英國自治領土(Dominion)，1945年加入聯合國，1947年紐西蘭成為主權國家，為大英國協成員。",
                "parliament" =>
                    "國會採單院制，目前有120席，議員民選，任期3年。",
                "cabinet" =>
                    "國會多數黨或相對多數支持之政黨黨魁為總理組成內閣，內閣閣員向國會負責。",
                "judiciary" =>
                    "地方法院(District Court)、高等法院(High Court)、上訴法院(Court of Appeal)、最高法院(Supreme Court)。",
                "headman" => "英國國王查爾斯三世（King Charles III）",
                "fa_minister" => "Nanaia Mahuta",
                "major_political_parties" =>
                    "Labour Party(工黨)、National Party(國家黨)、Green Party(綠黨)、ACT（行動黨）、毛利黨(Maori Party)2020年10月17日舉行國會大選執政工黨在Jacinda Ardern總理領導下壓倒性勝選，席次過半單獨執政。目前國會席次分佈為工黨64席、國家黨33席、綠黨10席、行動黨10席、毛利黨2席，無黨派1席。",
                "financial_incoming" => "-129億紐元",
                "export_value" => "633億紐元",
                "import_value" => "701億紐元",
                "export_item" =>
                    "乳製品、肉類及食用雜碎、原木及製品、食用水果、飲料與酒類、機器及機械、魚類、穀物調理食品、光學醫療及測量儀器。",
                "import_item" =>
                    "車輛及零件、機器及機械、石油類產品、電機及設備、紡織及製品、塑膠、光學及醫療測量儀器、鋼鐵製品、醫藥品、家具。",
                "main_export_countries" => "中國大陸、澳洲、美國。",
                "main_import_countries" => "中國大陸、澳洲、美國。",
                "export_to" => "11.8億元紐幣(2021年)",
                "import_from" => "13.6億元紐元 (2021年)",
                "foreign_relationship" =>
                    "紐西蘭在各國際組織中均非常活躍，2015-2016年曾擔任聯合國相關組織非常任理事國，並積極與世界各國簽訂雙邊或多邊貿易協議。",
                "foreign_policy" =>
                    "紐西蘭政府對外政策著重貿易，追求極致發展紐西蘭在聯合國安理會之效益、增進外銷市場通路、地區經濟結合、改善紐西蘭企業在國際間的表現、讓紐西蘭成為亞太地區重要與受信任的夥伴、促進太平洋島國地區國家與人民之繁榮與穩定、推動國際社會解決氣候變遷、天然資源、環境保護等議題、保護紐西蘭安全、藉由國際組織合作更加強同步國際互動。",
                "time_range" =>
                    "紐西蘭是全世界最早進入新的一天的國家之一， 比格林威治標準時間(Greenwich Mean Time)快十二小時。夏季日光節約時間(每年9月最後一個星期日至4月第一個星期日)與台灣時差5小時，其餘時段時差為4小時。",
                "resident" =>
                    "駐紐西蘭代表處 (駐紐西蘭台北經濟文化辦事處)、駐奧克蘭辦事處 (駐奧克蘭台北經濟文化辦事處)",
                "national_flag" =>
                    "https://mch.govt.nz/nz-identity-heritage/flags",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            140 => [
                "name" => "索羅門群島",
                "name_in_en" => "Solomon Islands",
                "short_name" => "索羅門",
                "short_name_in_en" => "Solomon Islands",
                "capital" => "荷尼阿拉 (Honiara)",
                "capital_in_en" => "Honiara",
                "national_day" => "1978年7月7日",
                "join_un_day" => "1978年9月19日",
                "area_size" => "28,450平方公里",
                "geographic" =>
                    "索羅門群島為南太平洋地區第三大島國，位於澳洲昆士蘭州東北方約1,800公里，北與巴布亞紐幾內亞為鄰，南瀕萬那杜。在東經155度-168度、南緯5度-12度之間，處於地震帶，地形包括平原、高山、森林及珊瑚礁等。陸地面積約28,000平方公里，90％以上為熱帶雨林所覆蓋，包括992個島嶼，林產豐富，亦富藏金、鎳、銅、鈷、鋁土等礦產；另外專屬經濟海域廣達134萬平方公里，為南太平洋重要漁場。索國行政區劃分為9省1市：瓜達卡納爾省(Guadalcanal)、西省(Western)、馬來塔省(Malaita)、馬基拉省(Makira)、丘亦色省(Choiseul)、伊莎貝爾省(Isabel)、中央省(Central)、提摩度省(Temotu)、雷納暨貝羅納省(Rennell &amp; Bellona)及首都荷尼阿拉市(Honiara，位於瓜省)。",
                "religion" =>
                    "索國人民信仰深受西方影響，96％為基督教徒，其中20％為天主教(Roman Catholic)，35％英國國教(Anglican)，18％南海福音教(Evangelical)，11％浸信會(Methodist)，10％耶穌七日復活教派(Seventh Day Adventist)等。",
                "bilaterial_relations" => null,
                "main_bounds" => "索羅門幣（Solomon Islands Dollar）",
                "exchange_rate" =>
                    "美金與索幣（Solomon Islands Dollar）比約1:8，惟須視匯率浮動情形而定。詳細匯率資訊建議至OANDA網站(https://www1.oanda.com/lang/cns/currency/converter)查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/a97db0bc-05b4-4763-a064-3d49794a7f17.gif",
                "is_diplomatic" => 0,
                "language" =>
                    "全國九省各區之間因有海洋隔絕，風俗各異，地方意識強烈，方言多達87餘種，共通語言為洋涇濱英語(Solomon Pijin)，官方語言為英語。",
                "main_media" =>
                    "索國國家廣播電台(SIBC)、Solomon Star(索羅門星報)、Island Sun(島嶼太陽報)、Sunday Star(週日版星報)、Sunday Isle(週日島嶼報)",
                "population" => "約69萬人 (2020年世界銀行統計資料)",
                "voltage" => "240V/50HZ",
                "time_difference" => "+3:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/2fe8587e-f759-44ff-9c2e-075dc192e4c4.JPG",
                "political_system" =>
                    "索國採英國責任內閣制，為民主憲政國家，以英國國王查爾斯三世（King Charles III）為其國家元首，總督為英國國王代表。現任總督David Vunagi。索羅門群島國會為一院制，議員以普選產生，初為38人，1993年增為47人，1997年增至法定上限50人，任期4年。國會議長由議員票選社會賢達出任，不具議員身分，另置副議長一人，由議員互選產生。現任國會議長為 Patteson Oti。總理為行政首長，由國會議員推舉，內閣部長由總理報請總督任命，均須具議員身分，目前計有閣員24人。國會每年至少集會2次。現任總理為蘇嘉瓦瑞(Manasseh Damukana Sogavare)，外長為馬內列(Jeremiah Manele)。索國分為十個行政區，計有九個省及一個首都特區荷尼阿拉市，各省設有省議會及省長治理；首都特區荷尼阿拉市，則設有市議會及市長。索國司法機關採取英國制，全國共分四區設置初級法院、高等法院，以大法官為首，1982年成立索羅門上訴法庭。此外為襄助初級法院，各主要島嶼均設有地方法庭，其上並設有專司世襲部落土地爭議更審事宜之土地上訴法院(Land Appeal Court)。索國為內閣制度國家，每四年進行國會選舉，惟自獨立建國以來，其政府皆為聯合政權，未曾有一黨執政情事，由於政府部會首長亦皆由議員擔任，然議員政黨忠誠度普遍不足，致使政府經常發生不信任投票案。",
                "history_intro" =>
                    "（一）西元1942年以前約6000年前新石器時代時期，第一批來自東南亞的Melanesian開始在索羅門群島定居，部落型社會以打獵和栽種穀物維生。西元前2000年一批Lapitan人帶進陶瓷製品。西元1500年，玻里尼西亞人（Polynesian）開始殖民統治，融入當地人種，當時已出現祭拜祖先、族群衝突情形及食人之習俗。索羅門群島於西元1568年首為西班牙人Spaniard Alvaro de Mendaña為淘金所發現，1606年，淘金熱結束，一直到19世界中葉，幾乎與外界沒有往來。北索羅門群島於十九世紀末成為德、英兩國保護地，隨後德國放棄保護權，整個地區遂改為英屬索羅門群島保護地，而底定現有疆域。1893年，英國開始在此殖民統治，帶進政治、法律、司法制度及基督教。（二）第二次世界大戰1942年，日本佔領索羅門群島，帶進韓籍工人建造機場跑道、收集衣物、財產、穀物和其他食物等。美軍於1942年8月在瓜島登陸，與日軍展開系列海陸戰，戰役共造成7,000名美軍及39,000名日軍陣亡（包括15,000名葬身大海，2,400名死於戰役，8,000名死於饑餓及疾病等）。部份索羅門人於大戰中協助盟軍擔任沿海斥侯，戰後獲得榮譽勳章。二次大戰期間之沈船、砲彈及飛機殘骸被保存下來成為觀光景點，我國海軍敦睦支隊每次來訪均援例舉行憑弔二戰期間海上陣亡將士之儀式。（三）西元1945年以後新首府設於Honiara，新機場設於瓜島的Henderson。英國人有鑑於索羅門自主運動漸起，開始尊重索羅門人民，自1952年開始設立自治地方政府，發展經濟、健康及教育。1976年1月頒行憲法，成立自治政府。1978年7月7日，索羅門群島獨立，成為大英國協第37個會員國，法律及國會議事程序仍依循英國的模式。1978年9月19日加入聯合國。",
                "parliament" =>
                    "索羅門群島國會為一院制，議員以普選產生，初為38人，1993年增為47人，1997年增至法定上限50人，任期4年。國會議長由議員票選社會賢達出任，不具議員身分，另置副議長一人，由議員互選產生。現任國會議長為 Patteson Oti。",
                "cabinet" =>
                    "總理為行政首長，由國會議員推舉，內閣部長由總理報請總督任命，均須具議員身分，目前計有閣員24人。國會每年至少集會1次。現任總理為蘇嘉瓦瑞(Manasseh Damukana Sogavare))，外長為馬內列(Jeremiah Manele)。",
                "judiciary" =>
                    "索國司法機關採取英國制，全國共分四區設置初級法院、高等法院，以大法官為首，1982年成立索羅門上訴法庭。此外為襄助初級法院，各主要島嶼均設有地方法庭，其上並設有專司世襲部落土地爭議更審事宜之土地上訴法院(Land Appeal Court)。",
                "headman" =>
                    "索國為民主憲政國家，採內閣制，奉英國國王為國家元首，惟由總督代表，行政權實際上係由總理掌握。現任總督為Ｄavid Vunagi，現任總理為Manasseh Sogavare。",
                "fa_minister" => "外長為馬內列(Jeremiah Manele)",
                "major_political_parties" =>
                    "主要政黨計有聯合民主黨(United Democratic Party, UDP)、人民聯盟黨(People’s Alliance Party, PAP)、鄉村黨(Kadere Party)、民主聯盟黨(Democratic Alliance Party, DAP)、鄉村發展黨(Solomon Islands Party for Rural Advancement, SIPRA)、以及人民至上黨(Solomon Islands People First Party, SIPFP)等。索國雖採行政黨政治，惟因部落意識強烈，社會流動性低，生活型態原始，故政黨意識甚為模糊，故立國以來，歷任政府均係聯合政府。",
                "financial_incoming" =>
                    "依據索羅門群島中央銀行(CBSI)預估，2021年政府收入37.76億索幣，支出40.98索幣。赤字約3.22億索幣。",
                "export_value" => "2019年出口額4.4億美元。",
                "import_value" => "2019年進口額5.4億美元。",
                "export_item" => "木材、海產、棕櫚油、鋁礦石等",
                "import_item" => "石油製品、米、船舶、工程機械等",
                "main_export_countries" => "中國大陸、澳洲、泰國、義大利等",
                "main_import_countries" => "新加坡、澳洲、中國大陸、紐西蘭等",
                "export_to" =>
                    "根據我國財政部2020年統計，我國對索國輸出金額為1,195.8萬美元。",
                "import_from" =>
                    "根據我國財政部2020年統計，我國對索國進口金額為802.2萬美元。",
                "foreign_relationship" =>
                    "在索京設置大使館或高專署國家主要為英國、澳洲、紐西蘭、日本、歐盟及巴布亞紐幾內亞，美國則派常駐領事代理人。索國在坎培拉、雅加達、莫士比港、布魯塞爾及紐約聯合國總部設有使館。",
                "foreign_policy" =>
                    "索國係大英國協之成員，自1978年獨立建國後，對外政策向以大英國協為主要依據，且積極加入聯合國等國際組織。索國所參與之主要國際組織除聯合國外，另有美拉尼西亞先鋒集團（Melanesia Spearhead Group, MSG）、太平洋島國論壇（Pacific Islands Forum, PIF）、太平洋島國發展論壇（Pacific Islands Development Forum, PIDF）、Coral Triangle Initiative on Coral Reefs以及Fishery and Food Security。",
                "time_range" =>
                    "索羅門群島位處GMT+11時區，較台灣時間快3個小時。台灣時間上午9時，即索國時間中午12時。",
                "resident" => null,
                "national_flag" =>
                    "索國國旗由藍、黃、綠三色組成，分別象徵藍天、太陽及綠地。五芒星象徵組成索國的各省份。索國國旗設計於1977年。",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            141 => [
                "name" => "索馬利亞聯邦共和國",
                "name_in_en" => "Federal Republic of Somalia",
                "short_name" => "索馬利亞",
                "short_name_in_en" => "Somalia",
                "capital" => "摩加迪休",
                "capital_in_en" => "Mogadishu",
                "national_day" => "7月1日",
                "join_un_day" => "1960年9月20日",
                "area_size" => "637,657平方公里",
                "geographic" =>
                    "位於非洲東北海岸，北臨亞丁灣，西北與吉布地相臨，東南瀕印度洋，南接肯亞，西臨衣索比亞。",
                "religion" => "伊斯蘭教（遜尼派佔多數）",
                "bilaterial_relations" => null,
                "main_bounds" => "先令 (Somali Shilling,SOS)。",
                "exchange_rate" =>
                    "1 USD≒584.01809 SOS(2022/3) （詳細匯率資訊建議至臺灣銀行(https://rate.bot.com.tw/xrt)或兆豐商銀網站(https://www.megabank.com.tw/personal/foreign-service/forex)查詢）",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/d6d20ca6-fc0b-4504-b28b-e0c304f4b884.GIF",
                "is_diplomatic" => 0,
                "language" =>
                    "索馬利亞語（官方語言）、阿拉伯語（官方語言）、義大利語、英語",
                "main_media" =>
                    "Jamhuuriya報、Mandeeq報、Somaliland Times(英語週報)、Somali Telemedia Network(STN)索馬利亞電視台。自由之家(Freedom House)指出，索國新聞工作環境十分險惡，除受安全單位威嚇外，極端伊斯蘭好戰團體青年黨(Al Shabab)更涉及甚多謀害媒體人案件。索國廣播為最主要傳媒，約有20個廣播電台，但無全國性電台；索國人民習於收聽總部設在國外，如BBC索語台等索語廣播節目。",
                "population" => "1,239萬人（2022年）",
                "voltage" => "220V",
                "time_difference" => "-5:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/fa60229d-24a9-45d0-9bb7-1e04c49db616.jpg",
                "political_system" => "聯邦共和/總統制",
                "history_intro" =>
                    "索馬利人（Somali）約於西元750年開始遷入索國西北角之Zeila地區，逐漸擴張版圖。西元10世紀初期，阿拉伯人自北侵入沿海地區，索國深受阿拉伯文化影響，索人改奉伊斯蘭教。16世紀時，索馬利人勢力已達摩加迪休與Juba河之間地帶，並於1885年擊敗衣索比亞東部之Galla族，1902年遠征至肯亞Tana河，逐出原居民Masai族，控制整個非洲之角。19世紀中期，歐洲勢力進入索國。1884年至1886年英國與索馬利亞各族領袖簽訂條約，使北索馬利亞成為英保護地，1889年至1905年間義大利取得索馬利亞南部之保護權，1896年法屬索馬利蘭（Somali-Land）邊界畫定，同時衣索比亞又強占奧加登（Ogaden）地區，肯亞西北之索馬利亦淪為英國統治，索馬利亞自此分為5部分。索國國旗之五角星即象徵此5部分。1960年7月1日義屬索馬利蘭與北方之英屬索馬利蘭合併，成立索馬利亞民主共和國。1991年索馬利亞爆發內戰，全國進入無政府狀態。2000年8月，索馬利亞全國和會在吉布地（Djibouti）舉行，和會通過過渡憲章，選出內戰以來首任總統，並組成索馬利亞過渡政府，但遭到各派軍閥聯合抵制。2004年8月及12月索馬利亞過渡全國議會及索馬利亞過渡政府分別在肯亞成立。2005年6月，過渡政府遷回國內，但是由於實力不足，只能在南部城市拜多阿（Baidoa）辦公。2006年6月5日伊斯蘭法庭聯盟（Union of Islamic Court）控制了索馬利亞首府摩加迪休。2006年12月28日索馬利亞過渡政府部隊擊退伊斯蘭法庭聯盟進駐摩加迪休。2007年2月20日聯合國安理會通過第1744號決議，授權非洲聯盟(AU)在索馬利亞部署維和部隊，以穩定局勢。2007年3月12日索馬利亞過渡議會批准過渡政府從拜多阿波遷回首都摩加迪休。2008年12月索馬利亞過渡政府倒台。2012年7月1日索馬利亞改行聯邦制，並在國際社會支持下，局勢逐漸穩定，但仍面臨極端伊斯蘭好戰團體青年黨(Al Shabab)的挑戰；2022年5月15選出曾擔任第8屆總統之Hassan Sheikh Mohamud為第10屆總統。",
                "parliament" =>
                    "索國國會係兩院制，分別為54席的上院(Upper House)及275席的下院(Lower House)。",
                "cabinet" =>
                    "索國總統由國會選出，係國家元首暨三軍總司令，總統任命總理，為政府首長。",
                "judiciary" =>
                    "索國司法機關分為憲法法庭、聯邦法院及各邦法院共三級。",
                "headman" => "Hassan Sheikh Mohamud",
                "fa_minister" => "Abshir Omar Jama",
                "major_political_parties" =>
                    "Union for Peace and Development Party, Tayo Political Party",
                "financial_incoming" => null,
                "export_value" => "8.19億美元",
                "import_value" => "944.3億美元(2018)",
                "export_item" => "牲畜、香蕉、皮革、漁產、芝麻",
                "import_item" => "工業製品、石油產品、食品、建築材料",
                "main_export_countries" =>
                    "沙烏地阿拉伯、阿拉伯聯合大公國、印度、日本",
                "main_import_countries" =>
                    "阿拉伯聯合大公國、中國、印度、土耳其",
                "export_to" => "91.88萬美元(2020)",
                "import_from" => "69.59萬美元(2020)",
                "foreign_relationship" =>
                    "索國為聯合國、非洲聯盟、阿拉伯聯盟等國際組織成員國，並與中國、俄羅斯、日本、韓國等維持良好關係。",
                "foreign_policy" => null,
                "time_range" => "UTC+3/較台灣晚5小時",
                "resident" => "該國事務由我駐南非代表處兼理。",
                "national_flag" =>
                    "索國國旗與聯合國旗幟相似，國旗上五角星的五角分別代表索馬利亞人聚居地在殖民時期被瓜分的五個區域。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            142 => [
                "name" => "索馬利蘭共和國",
                "name_in_en" => "Republic of Somaliland",
                "short_name" => "索馬利蘭",
                "short_name_in_en" => "Somaliland",
                "capital" => "哈爾格薩 (Hargeisa)",
                "capital_in_en" => "Hargeisa",
                "national_day" => "6月26日",
                "join_un_day" => null,
                "area_size" => "177,000平方公里",
                "geographic" =>
                    "位於非洲之角（The Horn of Africa），東臨索馬利亞，西南鄰衣索比亞，北濱亞丁灣，隔海與葉門相望，西北與吉布地接壤。",
                "religion" => "伊斯蘭教",
                "bilaterial_relations" => null,
                "main_bounds" =>
                    "索馬利蘭先令 (Somaliland Shilling, SLS)，美元高度流通",
                "exchange_rate" =>
                    "1.當地幣別為先令(shilling)，只在索國流通，美金匯率比先令匯率約為1:8500；民眾日常交易亦使用美元。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/99fcd2e4-8d6d-4f59-90a9-69971ee423eb.png",
                "is_diplomatic" => 0,
                "language" => "索馬利語（官方語言）、阿拉伯語、英語",
                "main_media" =>
                    "報紙Dawan、Ogaal、Geeska Afrika、Jamhuuriya等；網路媒體Somaliland Standard、Somaliland Chronicle、Horn Diplomat、Somtribune等電視 Horn TV, SLN TV, CBA TV等",
                "population" => "約570萬人(依據2021年索國最新國情報告)",
                "voltage" => "220V",
                "time_difference" => null,
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/35a00a4a-9abc-46cf-b0f1-8fdb2eab9ab8.jpg",
                "political_system" => "總統制共和國",
                "history_intro" =>
                    "1880年代英國與索國各部落簽署協定並於1887年成立索馬利蘭保護地，1960年6月26日，索國脫離英國保護而獨立，成立「索馬利蘭國」（State of Somaliland），當時獲包括我國在內之5個安理會常任理事國等共35個國家承認，惟旋於當年7月1日在大索馬利亞（Greater Somalia）理想下與義屬索馬利蘭合併，成立「索馬利亞民主共和國」。1969年10月強人Mohamed Siad Barre上台並實施軍事獨裁，1981年4月12日索國反對勢力在倫敦成立「索馬利亞民族運動（Somalia National Movement）」，雙方爆發流血衝突，造成索國約5-10萬人傷亡，百萬人流離失所，近50萬人流亡國外（此為今日索國人遍布歐美各地主因）之慘劇，1991年1月27日Barre政權瓦解，1991年4月27日至5月15日索國召開「部落長老大會」，通過索國獨立決議，並於1991年5月18日宣布獨立為「索馬利蘭共和國（Republic of Somaliland）」，2001年5月31日舉行全民公投通過憲法，融合代議民主與傳統制度，建立三權分立體制，嗣後並於2003年、2010年及2017年3度和平舉行總統大選。",
                "parliament" =>
                    "索國國會係兩院制，分別為長老院(House of Elders，相當於上議院)，以及眾議院(House of Representative)，兩院均各82席，眾議院為直接民選。",
                "cabinet" =>
                    "索國總統為人民直選，身兼國家元首暨三軍總司令，總統並任命副總統與內閣閣員。",
                "judiciary" =>
                    "索國司法機關分為最高法院(含憲法法院功能)、區域上訴法院、區域法院及地方法院共四級。",
                "headman" => "阿布迪 (Muse Bihi Abdi)",
                "fa_minister" => "瑞格薩（Essa Kayd Mohamoud）",
                "major_political_parties" =>
                    "執政黨Kulmiye黨 、Waddani黨、UCID黨",
                "financial_incoming" =>
                    "2022年財政收入:2,729,097,215,930索馬利蘭先令 (321,070,261美元)2022年財政支出:2,497,612,595,220索馬利蘭先令 (293,836,776美元)",
                "export_value" =>
                    "1.5億美元(1.28兆索馬利蘭先令)(2022年1-6月統計數字)",
                "import_value" =>
                    "2.83億美元(2.4兆索馬利蘭先令)(2022年1-6月統計數字)",
                "export_item" => "牛、羊、駱駝等牲畜；乳香及沒藥等香料",
                "import_item" =>
                    "糖、米、麵粉、小麥、餅乾、香菸、衣物、恰特草(Khat)等消費產品、生產及交通設備、建材及燃料",
                "main_export_countries" =>
                    "沙烏地阿拉伯、阿拉伯聯合大公國、阿曼、衣索比亞、印度",
                "main_import_countries" =>
                    "衣索比亞、巴西、泰國、中國、印度、土耳其",
                "export_to" => "無資料",
                "import_from" => "無資料",
                "foreign_relationship" =>
                    "除我國外，國際間目前有數個國家及國際組織在索馬利蘭設立代表機構（英國、丹麥、衣索比亞、土耳其、吉布地、阿拉伯聯合大公國、肯亞、歐盟及聯合國）。另索馬利蘭在多個國家設有代表機構（美國、英國、加拿大、法國、比利時、瑞士、挪威、瑞典、南非及沙烏地阿拉伯等），並使用「領事館」、「外交團」、「代表處」及「辦事處」等不同名稱設立。",
                "foreign_policy" => null,
                "time_range" => "單一時區，較臺灣晚5個小時",
                "resident" => "駐索馬利蘭代表處。",
                "national_flag" =>
                    "索國國旗以伊斯蘭教國家常見之綠白紅三色為基底，最上方以阿拉伯語書寫清真言，中央的星號則象徵索國革命成功獨立。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            143 => [
                "name" => "維德角共和國",
                "name_in_en" => "Republic of Cape Verde",
                "short_name" => "維德角",
                "short_name_in_en" => "Cape Verde",
                "capital" => "普萊亞(Praia)",
                "capital_in_en" => "Praia",
                "national_day" => "7月5日",
                "join_un_day" => "1975年9月16日",
                "area_size" =>
                    "維德角是由10個島和8個小島組成的群島國家，面積約4,033平方公里。",
                "geographic" =>
                    "維德角位於西北非外海，距離非洲大陸最西端之塞內加爾約450公里。",
                "religion" => "97%為天主教，其他3%為民間信仰。",
                "bilaterial_relations" => null,
                "main_bounds" => "維國貨幣名為Escudo Cabo-Verdiano",
                "exchange_rate" =>
                    "詳細匯率資訊建議至臺灣銀行(https://rate.bot.com.tw/xrt)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/c1c92599-6daf-4803-aac1-afb522597432.GIF",
                "is_diplomatic" => 0,
                "language" => "葡萄牙語",
                "main_media" =>
                    "主要日報為Horizonte，官方媒體為每週發行2次之Novo Jornal-Cabo Verde，另每週發行1次的報紙包括A Semana, Expresso das Ilhas, Jornal Horizonte, Terra Nova, and Boletim Informativo等。",
                "population" => "549,935人 (2019)",
                "voltage" => "220V",
                "time_difference" => "-8:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/9359cf93-da06-4b0e-b740-850e659067ec.JPG",
                "political_system" => "雙首長制",
                "history_intro" =>
                    "維德角係在15世紀（1,460年）由葡萄牙及義大利水手發現的，1495年成為葡萄牙殖民地，係歐洲列強最早在赤道地區的殖民地，由於地利之便，維德角很快即成為奴隸交易買賣的集中地，吸引了各地走私販子、海盜與探險家前來此地，其中較有名的即係英國海軍中將德雷克（Francis Drake），達爾文（Charles Darwin）亦曾於1832年籌組探險隊抵達維德角。由於維德角位於歐洲、印度與澳洲的重要航線上，以及葡萄牙在此間殖民關係，使得其人口迅速成長，但維德角的繁榮在奴隸買賣政策於1876年取消後，即已不復當年榮景。",
                "parliament" =>
                    "維國主要政黨有三，分別係國會第一大黨MpD佔38席, 第二大黨PAICV佔30席及UCID黨佔國會中4席。",
                "cabinet" => "總理José Ulisses de Pina Correia e Silva",
                "judiciary" =>
                    "設憲法法院、最高法院、初審法院、行政法院、審計法院等；各法院獨立行使職權。",
                "headman" => "現任總統José Maria Neves",
                "fa_minister" => "Rui Alberto de Figueiredo Soares",
                "major_political_parties" =>
                    "執政黨為民主運動黨(Movement for Democracy，MpD)，其他政黨有維德角非洲獨立黨(African Party for Independence of Cape Verde，PAICV)、民主聚合黨(Party for Democratic Convergence，PDC)等。",
                "financial_incoming" => "逆差734百萬美元 (2019)",
                "export_value" => "62百萬美元 (2019)",
                "import_value" => "796百萬美元 (2019)",
                "export_item" => "燃料、鞋子、衣服、漁產品",
                "import_item" => "食品、工業產品、燃料、運輸設備",
                "main_export_countries" => "歐盟、美國、古拉索、台灣",
                "main_import_countries" => "歐盟、中國、巴西、塞內加爾",
                "export_to" => "21,895美元 (2020)",
                "import_from" => "235美元 (2020)",
                "foreign_relationship" =>
                    "外交政策的首要重點是與歐盟建立密切合作關係，短期目標是與歐盟建立特別夥伴關係；此構想獲得葡萄牙、西班牙及荷蘭的支持。 目前積極與中國及巴西建立經貿合作關係，積極參與西非事務，安哥拉的關係亦稱密切。",
                "foreign_policy" =>
                    "採取獨立自主外交政策，在平等互惠基礎上與各國發展關係。維德角為聯合國、世界貿易組織、葡語系國家共同體、非洲聯盟等國際組織成員，積極參與西非區域事務，並獲歐盟、葡萄牙、美國等國之援助;另透過加入「西非國家經濟體」(CEDEAO)，企圖在外交上扮演擔任非洲、歐洲及美洲橋樑的角色。",
                "time_range" => "較台灣晚9小時",
                "resident" =>
                    "我在該國未設處，該國事務由我駐葡萄牙代表處兼轄。",
                "national_flag" => null,
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            144 => [
                "name" => "緬甸聯邦共和國",
                "name_in_en" => "Republic of the Union of Myanmar",
                "short_name" => "緬甸",
                "short_name_in_en" => "Myanmar",
                "capital" => "奈比都 (Nay Pyi Taw)",
                "capital_in_en" => "Nay Pyi Taw",
                "national_day" => "1月4日",
                "join_un_day" => "1948年4月19日",
                "area_size" => "約 67 萬 6000 平方公里",
                "geographic" =>
                    "位於中南半島西部，東北與中國大陸毗鄰，西北與印度、孟加拉相接，東南與寮國、泰國交界，西南瀕臨孟加拉灣與安達曼海",
                "religion" => "89% 民眾信仰佛教，另基督教及伊斯蘭教各約佔 4%",
                "bilaterial_relations" => null,
                "main_bounds" =>
                    "緬幣 (Kyat)，但因外匯嚴格管制，銀行功能不彰，美元計價流通情形日盛。",
                "exchange_rate" =>
                    "2022年 8月之官定匯率為 1 美元兌換 2,100 緬幣 「詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢」",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/4fddd78d-eabd-4e1c-9751-4d12e3ae0ec9.gif",
                "is_diplomatic" => 0,
                "language" => "緬甸語",
                "main_media" =>
                    "全國發行之報紙有「緬甸之光」、「緬甸環球新光報」及「鏡報」。官辦廣播有「緬甸之聲」，另有「緬甸電視」及「妙瓦底電視」2個電視台。目前軍政府統治下，實施新聞管制，全國發行之報紙為「緬甸環球新光報」，廣播為「緬甸之聲」，電視台為「緬甸電視」。",
                "population" =>
                    "55,235,005人 (2022 年 9月26日Worldometers依據聯合國數據估算)",
                "voltage" =>
                    "220V，插座型式多樣（雙叉扁平、雙叉圓形、三叉扁平等均有）",
                "time_difference" => "-1:30",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/customfile/sites/mapurllink/75364284-85b1-43ac-a27a-130c7a7d1061.jpg",
                "political_system" =>
                    "聯邦總統制，兩院制議會，任期 5 年。緬甸內閣計 24 位成員，總統為內閣最高行政首長。緬甸法院及檢察院共分 4 級，最高法院及最高檢察院下有省(邦)、縣、鄉鎮區 3 級法院及檢察院",
                "history_intro" =>
                    "緬甸於 1044 年形成統一國家後，經歷 3 個封建王朝。19 世紀英國發動 3 次侵緬戰爭後佔領緬甸，並於 1886 年將緬甸劃為英屬印度之一省，1937 年緬甸脫離英屬印度，直接受英王任命之總督統治。1942 年 5 月緬甸被日本佔領，1945 年 3 月全國起義，國土光復。二次世界大戰後英國重新控制緬甸，1948 年 1 月 4 日緬甸宣布獨立。緬甸獨立後之歷史大致可分為以下時期：(1)「獨立建國」時期 (1948-1962 年)；(2)「社會主義軍事獨裁」時期 (1962-1988 年)；(3)「軍事獨裁」時期 (1988-2011 年)；(4)「改革開放」時期(2011-2016 年)；(5) 民選政府時期(2016-2021年2月) ；(6)軍方「國家行政會議」「看守政府」時期(2021年2月迄今)。",
                "parliament" =>
                    "依據2008年憲法，緬甸國會為兩院制，每5年改選，上院民族院224席，下院人民院440席，共664席，但其中四分之一席位保留由軍方委派，亦即緬甸每個省/邦在民族院各有12席，以直接選舉產生，緬甸有14個省/邦，故有168席，加上軍方56席，合計224席。緬甸330個鎮區在人民院各有一席，加上軍方110席，合計440席。緬甸總統、2位副總統由上院、下院及軍方各推舉一位候選人，以渠等在國會得票數多寡分任之。惟2021年2月起國會停擺迄今。",
                "cabinet" =>
                    "民選政府時期緬甸內閣計 24 位成員，總統為內閣最高行政首長。目前看守政府時期，為節省開銷，一位部長可能兼任2部或3部，乃至裁併，目前有31個部。",
                "judiciary" =>
                    "緬甸法院及檢察院共分4級，最高法院及最高檢察院下有省(邦)、縣、鄉鎮區3級法院及檢察院。",
                "headman" =>
                    "溫敏 (Win Myint)為民選政府總統，2021年2月，總統溫敏被捕，副總統敏瑞中將出任為代理總統，握有實權的敏昂萊(Min Aung Hlaing)一級上將為總理。",
                "fa_minister" =>
                    "翁山蘇姬為民選政府外交部長，2021年2月起，退休之溫貌倫(Wunna Maung Lwin)回鍋為外長。",
                "major_political_parties" =>
                    "2020年11月國會大選時，緬甸有90餘個政黨，具全國性規模者為「全國民主聯盟」(NLD) 及「聯邦鞏固發展黨」(USDP)。在翁山蘇姬領導下，「全國民主聯盟」於2015年11月大選取得壓倒性勝利，成為緬甸第一大黨。2020年國會大選「全國民主聯盟」再度贏得多數選票。2021年2月起，限制政黨活動，「全國民主聯盟」(NLD)被嚴格檢視，僅存軍方背景之「聯邦鞏固發展黨」(USDP)及與軍方有淵源的小黨。",
                "financial_incoming" =>
                    "財政收入約8兆9125億緬幣，財政支出約12兆5504億美元 (2016 財政年度)。緬甸會計年度於2021年10月1日由每年9月30日改回每年3月31日。依據Trading Economics網站報導，緬甸2020年政府債務佔GDP 42.4%，政府預算赤字佔GDP的5.6%。",
                "export_value" => "2021年緬甸出口總金額為151.28億美元",
                "import_value" => "2021年緬甸進口總金額為143.17億美元",
                "export_item" =>
                    "主要出口項目有天然氣、成衣、豆類、木材、礦石、漁產品、稻米和生橡膠等",
                "import_item" =>
                    "主要進口產品為機器及運輸設備、礦油、基本金屬、電子及電機產品、食用油、人工合成纖維紡織原料、塑膠製品、藥品、肥料、建材及消費品等",
                "main_export_countries" =>
                    "主要出口市場為泰國、中國大陸、日本、印度、西班牙、英國、美國、韓國、比利時和菲律賓。",
                "main_import_countries" =>
                    "主要進口來源地為中國大陸、新加坡、泰國、印尼、馬來西亞、印度、阿聯酋、韓國、日本及越南。",
                "export_to" => "2021年緬甸自我國進口金額約為1.72億美元",
                "import_from" => "2021年緬甸出口至我國金額約為6,249萬美元",
                "foreign_relationship" =>
                    "緬甸迄至 2020 年已與 121 個國家建立外交關係，並在 46 個國家設有大使館及 4 個總領事館，另在紐約 (常駐聯合國)、日內瓦 (常駐世界貿易組織) 及雅加達 (常駐東協) 設立代表團。緬甸於 2014 年擔任東協輪值主席國，成功舉辦第 24、25 屆東協高峰會、第 9 屆東亞峰會、「東協+1」、「東協+3」等系列會議。",
                "foreign_policy" =>
                    "緬甸一向標榜獨立之外交政策，NLD政府於2016年3月執政後，翁山蘇姬先後訪問寮國、泰國、中國大陸、英國及美國與各國領袖會談，並於9月21日首度以緬甸實質領袖身分在聯合國大會發表演說，大幅提升緬甸國家能見度。2021年2月後，軍政府以爭取國際承認為目標，但成果有限，不但受到歐美民主國家指責與抵制，美國並將軍政府主腦人物一一列入黑名單，聯合國安理會制裁決議雖因中國及俄羅斯反對而未獲通過，但東協則拒邀軍政府主席敏昂萊及外長溫貌倫出席年會。",
                "time_range" => "慢 1 小時 30 分（GMT +6.5）",
                "resident" => "駐緬甸臺北經濟文化辦事處",
                "national_flag" =>
                    "中心為白色五角星形，底色為黃、綠、紅三色橫幅",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            145 => [
                "name" => "羅馬尼亞",
                "name_in_en" => "Romania",
                "short_name" => "羅馬尼亞",
                "short_name_in_en" => "Romania",
                "capital" => "布加勒斯特",
                "capital_in_en" => "Bucharest",
                "national_day" => "12月 1日",
                "join_un_day" => "1955年12月14日",
                "area_size" => "238,391平方公里",
                "geographic" =>
                    "羅馬尼亞位處東南歐，西鄰匈牙利，塞爾維亞，北接烏克蘭與摩爾多瓦，南鄰保加利亞，東濱黑海。",
                "religion" => "東正教",
                "bilaterial_relations" => null,
                "main_bounds" => "羅馬尼亞幣(Romanian leu, Ron)",
                "exchange_rate" =>
                    "1USD=4.6362 Ron (2022年12月) 詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/983f522f-5264-4b89-9e21-57f49cf69809.GIF",
                "is_diplomatic" => 0,
                "language" => "羅馬尼亞語(主要外語為匈牙利語、德語)",
                "main_media" =>
                    "真理報、自由羅馬尼亞報、羅馬尼亞通訊社、羅馬尼亞國家廣播電臺、羅馬尼亞國家電視臺。",
                "population" => "20,017,497人(2022年7月)",
                "voltage" => "220V",
                "time_difference" => "-6:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/28926e21-1c6b-49c4-bba4-efdc7379be70.jpg",
                "political_system" => "民主共和，責任內閣制",
                "history_intro" =>
                    "達基亞人（Dakia）為羅馬尼亞最早之居民，於西元前70年在此建立達基亞王國。 西元106年達基亞王國被羅馬帝國征服，成為羅馬帝國一省，經與羅馬人融合、同化，形成羅馬尼亞民族。 16至19世紀間，羅馬尼亞先後屬於奧圖曼土耳其帝國、帝俄及奧匈帝國之哈布斯堡王朝統治範圍。 1878年根據柏林會議，羅國自奧圖曼帝國獲得獨立成為王國。 1941年1月羅國與德國結盟，向蘇聯宣戰，但1944年9月12日羅國與蘇聯簽署停戰協定，轉向德國開戰。 第二次大戰後，羅國共產黨在蘇聯之扶植下勢力坐大，1948年3月國會選舉，共產黨幾乎囊括所有席次，全面執政。同年4月13日制定蘇聯式憲法，宣布成立「羅馬尼亞人民共和國」。1965年羅共總書記希奧塞斯古(Nicolae Ceausescu)上台，改國號為「羅馬尼亞社會主義共和國（Republica Socialista Romania）」，並從1974年起擔任羅國總統，希奧塞斯古進行獨裁統治長達24年，直到1989年東歐鐵幕瓦解始被人民推翻。 1990年5月20日改國名為羅馬尼亞，並於1991年12月依法國第五共和模式制定憲法。羅國於2019年11月舉行總統大選，總統尤翰尼斯(Klaus Iohannis)以66.09%得票率順利連任。",
                "parliament" =>
                    "國會採兩院制，參院136席，眾議院329席，任期均為4年，兩院議員採比例代表制方式產生，政黨必須獲5％以上之選票始能在國會分配席次。",
                "cabinet" =>
                    "內閣由總理及各部部長組成，總理由執政黨提名，經國會參眾議院同意後提請總統任命。現任總理為科楚(Florin Citu)，於2021年11月就職。",
                "judiciary" =>
                    "設有憲法法院、審計法院、最高法院及總檢察院，最高法院下設地方法院。",
                "headman" =>
                    "總統為國家元首，直接民選，任期5年，得連任一次。總統尤翰尼斯(Klaus Iohannis)，於2019年11月24日連任。",
                "fa_minister" =>
                    "奧列斯古(Bogdan  Aurescu)，於2021年11月就職。",
                "major_political_parties" =>
                    "主要政黨有社會民主黨（Social Democratic Party, PSD）、國家自由黨（National Liberal Party, PNL）、拯救羅馬尼亞暨自由團結聯盟(USR-PLUS)、羅馬尼亞聯盟(AUR)、匈牙利裔民主聯盟（Democratic Union of Hungarians in Romania, UDMR）、人民運動黨(PMP)",
                "financial_incoming" =>
                    "羅國2012年與國際貨幣基金 (IMF) 達成4項協議，IMF對羅國財政穩定及政府赤字控制在預算內表示肯定，2015年並與IMF進行新一輪諮商。2020年羅國政府歲入預算為779億美元，歲出預算為1,025億美元，外債1,152億美元。2022年12月數據顯示，2022年羅國前3季公共債務增加139億歐元(至9月底達1,305億歐元)，公共債務佔GDP比例為47.6%。",
                "export_value" => "747億歐元 (2021年)",
                "import_value" => "983億歐元 (2021年)",
                "export_item" =>
                    "拖拉機零配件、車輛及運輸設備、絕緣電線及電纜、礦油及石油、板及面板",
                "import_item" =>
                    "拖拉機零配件、車輛及運輸設備、礦油及石油、藥品(除疫苗、繃帶等)、絕緣電線及電纜",
                "main_export_countries" =>
                    "德國、義大利、法國、匈牙利、波蘭、保加利亞、荷蘭、英國、土耳其、捷克",
                "main_import_countries" =>
                    "德國、義大利、匈牙利、中國、波蘭、法國、土耳其、荷蘭、俄羅斯、奧地利",
                "export_to" => "1.3億美元(2021年)",
                "import_from" => "2.91億美元 (2021年)",
                "foreign_relationship" =>
                    "羅馬尼亞和烏克蘭關係因Danube河口邊境之劃分牽涉到黑海資源開鑿權而時有爭議。 羅馬尼亞雖已於2003年7與俄羅斯簽署雙邊友好與合作關係條約，惟羅國近年來之北約會員身分以及同意讓美國建立永久軍事基地乙事，已引起莫斯科之不安並影響俄、羅關係。2014年烏克蘭危機之後，與俄國關係更受影響。 2010年2月羅國當時總統巴塞斯古表示，羅國基於國土安全考量，並提升美羅戰略夥伴關係，進一步提高羅國在美國全球安全體系之地位，該國最高國防委員會(Super Defence Council, CSAT)決議通過，同意美國在羅國部署新飛彈防禦系統，新系統使整個羅國納入其安全保護傘下，並於2015年正式啟用。",
                "foreign_policy" =>
                    "羅馬尼亞於2004年3月29日正式加入北大西洋公約組織（NATO），2007年1月1日正式成為歐盟會員國，另亦已加入歐洲安全暨合作組織（OSCE）。羅國亦已多次表示，亟盼於近期內加入申根公約及歐元區。 羅國自2004年加入北大西洋公約組織後即盼扮演積極角色，並於2008年4月主辦第20屆北約高峰會。 外交政策方面鞏固與歐盟會員國間及與美國間之雙邊關係，並重視發展在東南歐及黑海地區之睦鄰與區域合作關係，並與「東南歐合作進程」(The South-East European Cooperation Process, SEECP)合作，促進歐盟與西巴爾幹半島國家之結構性聯繫。",
                "time_range" =>
                    "較台灣慢6小時(3月至10月日光節約時間較台灣慢5小時)。",
                "resident" => "無（由駐斯洛伐克代表處兼轄）",
                "national_flag" =>
                    "羅馬尼亞國旗是一面藍、黃、紅的三色旗（象徵川西凡尼亞、瓦拉幾亞和摩爾多瓦），比例為2:3。",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            146 => [
                "name" => "美利堅合眾國",
                "name_in_en" => "United States of America",
                "short_name" => "美國",
                "short_name_in_en" => "U.S.A.、US",
                "capital" => "華盛頓哥倫比亞特區",
                "capital_in_en" => "Washington, District of Columbia (D.C.)",
                "national_day" => "7月4日獨立紀念日",
                "join_un_day" => "1945年10月24日（聯合國創始會員國之一）",
                "area_size" => "9,833,517平方公里",
                "geographic" =>
                    "美國位於北美洲中部，西臨太平洋，東濱大西洋，南鄰墨西哥及墨西哥灣，北接加拿大，另有北美洲大陸西北端之阿拉斯加州及中太平洋之夏威夷州。",
                "religion" =>
                    "以基督教及天主教為主，另有摩門教、猶太教等其他宗教。",
                "bilaterial_relations" => null,
                "main_bounds" => "美元",
                "exchange_rate" =>
                    "約為1美元兌換30元新台幣，惟須視匯率浮動情況而定。建議查詢當日台灣銀行（http://rate.bot.com.tw/xrt?Lang=zh-TW）或兆豐商銀匯率（https://www.megabank.com.tw/personal/foreign-service/forex）。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/30f2e9e6-c7d0-45d5-9b57-68c066c5fbf5.GIF",
                "is_diplomatic" => 0,
                "language" => "英語",
                "main_media" =>
                    "美國主流媒體包括：1、報紙：全美約有1千餘家報社。主要知名主流報紙（依據發行量及知名度）包括：今日美國報（USA Today）、華爾街日報（The Wall Street Journal）、紐約時報（The New York Times）、洛杉磯時報（Los Angeles Times）、華盛頓郵報（The Washington Post）、芝加哥論壇報（Chicago Tribune）、波士頓環球報（The Boston Globe）等。2、電視網：全美數千家電視台多從屬幾家大型電視網，包括：美國廣播公司（ABC）、哥倫比亞廣播公司（CBS）、全國廣播公司（NBC）、福斯廣播公司（FOX）等電視網；公共電視網（PBS）則為唯一非營利、同時接受官方補助及民間募款的電視網；有線電視新聞網（CNN）則為全美首座全天候24小時播送新聞之電視網。3、廣播電臺：全美約有1萬餘座廣播電臺。最常見的電臺類型為談話性及音樂性電臺，國家公共廣播電臺（National Public Radio）是全美最大的公共廣播網路，大多數美國電臺為私營商業電臺。4、網路媒體：隨著網路及智慧型手機之發達及普遍，網路媒體的影響力已不容小覷。知名網路報包括：賀芬頓郵報（The Huffington Post）、Buzzfeed、每日野獸報（The Daily Beast）等。",
                "population" => "332,718,475（2021年9月7日）",
                "voltage" => "美國家庭電器電壓為 110 伏特，國產電器可即適用。",
                "time_difference" => "-12:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/146a76ce-03dd-43b8-8d89-21ad8361bf78.JPG",
                "political_system" =>
                    "總統制聯邦共和國（Federal Presidential Republic），行政、立法及司法三權分立。",
                "history_intro" =>
                    "1776年，原北美13個英屬殖民地脫離英國統治成立美利堅合眾國（簡稱美國），嗣於1783年與英國簽訂和約，獨立地位獲得承認。1861年至1865年美國因黑奴解放問題爆發南北戰爭，嗣由林肯總統領導之聯邦政府北軍勝利而終止分裂。19至20世紀間，美國透過購地及戰爭等方式，逐步擴大至現今版圖。美國歷經兩次世界大戰勝利及1991年冷戰結束，成就今日超級強國之地位。",
                "parliament" =>
                    "美國立法部門採兩院制，分別為聯邦參議院（Senate）及聯邦眾議院（House of Representatives）。參院計100席，每州均選出2位聯邦參議員，任期6年，每2年改選三分之一；眾院計435席，各州聯邦眾議員人數依人口而定，任期2年，每2年全數改選。第118屆美國國會自2023年1月3日起為期兩年，參院部分由民主黨掌握多數，為民主黨48席及參與民主黨黨團運作的無黨籍3席、共和黨49席；眾院則由共和黨掌握多數，為共和黨222席，民主黨213席。",
                "cabinet" =>
                    "美國為總統制國家，由總統掌理行政權，為國家元首與最高行政首長。總統之下設有內閣（Cabinet），成員由總統提名，經聯邦參議院同意後任命。",
                "judiciary" =>
                    "美國司法制度承襲英國之不成文法，聯邦法律與各州法律並存，司法權屬各級法院，包含聯邦最高法院、聯邦上訴法院、聯邦地方法院及各州與郡法院。聯邦最高法院法官由總統提名，經聯邦參議院同意後任命，為終身職。",
                "headman" => "拜登（Joseph R. Biden Jr.）",
                "fa_minister" =>
                    "國務卿（Secretary of State）布林肯（Antony Blinken)",
                "major_political_parties" =>
                    "共和黨（Republican Party）及民主黨（Democratic Party）",
                "financial_incoming" =>
                    "美國聯邦政府2022財政年度總支出6.27兆美元",
                "export_value" => "2022年貨品出口總值為2兆858億美元",
                "import_value" => "2022年貨品進口總值3兆2,768億美元",
                "export_item" =>
                    "石油原油及其製品、藥物製劑、工業用機械設備、半導體、汽車及其零組件等（2022年統計）",
                "import_item" =>
                    "石油原油及其製品、藥物製劑、汽車及其零組件、手機及家用電器、電腦等（2022年統計）",
                "main_export_countries" =>
                    "2022年美國前10大出口國依序為加拿大、墨西哥、中國、日本、英國、德國、荷蘭、南韓、巴西、印度。",
                "main_import_countries" =>
                    "2022年美國前10大進口國依序為中國、墨西哥、加拿大、日本、德國、越南、南韓、台灣、印度、愛爾蘭。",
                "export_to" => "2022年我國商品對美出口總值為750.5億美元。",
                "import_from" => "2022年我國自美國商品進口總值為454.2億美元。",
                "foreign_relationship" =>
                    "美國為聯合國創始會員國及安理會常任理事國，經濟合作暨發展組織（OECD）創始會員國，創組北大西洋公約（NATO）及美洲國家組織（OAS），與日本訂有安保條約，與南韓、菲律賓訂有共同防禦條約，與澳、紐合組聯防公約（惟美紐雙邊軍事合作關係已於1986年8月終止）。",
                "foreign_policy" =>
                    "拜登政府對外政策強調與全球理念相近的盟友及夥伴在防疫、氣候變遷、經濟危機、對民主的威脅及族群正義等議題上合作，並共同反制敵人及競爭對手對全球安全及穩定造成的危害。",
                "time_range" =>
                    "本處轄區為美國東岸時區（Eastern Time Zone, ET），夏令時間（自每年3月第2個星期日起至該年11月第1個星期日止）與台灣時差為晚12小時，冬令時間（自每年11月第1個星期日起至翌年3月第2個星期日）時差為晚13小時。",
                "resident" =>
                    "駐美國代表處(華府)1處，駐亞特蘭大、波士頓、芝加哥、關島、檀香山、休士頓、丹佛、洛杉磯、邁阿密、紐約、舊金山及西雅圖等12個辦事處",
                "national_flag" =>
                    "參閱美國聯邦眾議院法律修訂處(Office of the Law Revision Counsel)網址：http://uscode.house.gov/download/annualhistoricalarchives/pdf/2011/2011usc04.pdf",
                "area_name" => "北美地區",
                "area_name_in_en" => "North America",
            ],
            147 => [
                "name" => "義大利共和國",
                "name_in_en" => "Italian Republic",
                "short_name" => "義大利",
                "short_name_in_en" => "Italy",
                "capital" => "羅馬",
                "capital_in_en" => "Roma",
                "national_day" => "6月2日",
                "join_un_day" => "1945年10月1日",
                "area_size" => "302,073平方公里",
                "geographic" =>
                    "義大利位於南歐，西北邊與法國接壤，北與瑞士、奧地利為鄰，東北邊與斯洛維尼亞為界，南部隔地中海與非洲大陸相望。",
                "religion" => "天主教",
                "bilaterial_relations" => null,
                "main_bounds" => "歐元",
                "exchange_rate" =>
                    "約為1歐元兌換32元新台幣，惟須視匯率浮動情況而定。建議查詢當日台灣銀行（https://rate.bot.com.tw/xrt/all/day?Lang=en-US）或兆豐商銀匯率（https://www.megabank.com.tw/personal/foreign-service/forex）。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/c7f832ad-538a-465a-a3b3-268f785e69aa.GIF",
                "is_diplomatic" => 0,
                "language" => "義大利語",
                "main_media" =>
                    "RAI(國營電視廣播公司], Mediaset(媒體集團電視公司], Corriere della Sera(晚郵報], La Repubblica(共和報], L`Espresso(快訊週刊], La Stampa(新聞報], Il Messaggero(訊使報], Panorama(視野週刊], Ansa(安莎國家通訊社)。",
                "population" => "5903萬(2022年)",
                "voltage" => "220V；歐洲規格220伏特，插座為圓型接頭。",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/63ac075f-0e43-4b50-89c7-76645d57c61a.jpg",
                "political_system" => "內閣制",
                "history_intro" =>
                    "義大利於1870年統一，實施君主立憲。1924年墨索里尼(Benito Mussolini)成立法西斯政權，於1938年10月23日與納粹德國結盟。二次大戰軸心國戰敗，法西斯政權瓦解，總理Alcide De Gasperi整合各黨派於1946年6月2日舉行公民投票，廢除君主制度改行共和，6月25日選出Enrico De Nicola為臨時總統，1947年12月22日通過現行憲法，1948年元旦正式生效，De Nicola成為戰後首任總統。",
                "parliament" =>
                    "義大利國會分參議院（Senato della Repubblica）及眾議院(Camera dei Deputati)兩院。參議院原有315席民選參議員及5席總統任命之終身參議員，眾議院原有630席眾議員，任期皆為5年；2006年4月起，義國海外僑民亦可參選參眾議員海外席次，並參與海外投票。2022年9月25日義大利提前舉行第19屆國會大選，根據2020年義大利憲法修正案，本(第19)屆眾議院及參議院席次分別由630席和315席裁減至400席和200席。本次大選由「義大利兄弟黨(Fratelli d’Italia)」黨魁梅洛妮(Giorgia Meloni)所領導的中右聯盟贏得多數席次。本屆國會參議院議長為Ignazio La Russa (義大利兄弟黨FdI)，眾議院議長為Lorenzo Fontana (聯盟黨Lega)。",
                "cabinet" =>
                    "由總理及各部部長組成。總理係總統先與各主要政黨諮商後提名，經參眾兩院同意後任命；各部部長則由總理提名後呈請總統任命。總理多由國會多數黨領袖擔任，部長多由國會議員選任。",
                "judiciary" =>
                    "法院分為一般及特別法院兩類，一般法院包括少年、執行及三級法院，負責一般民刑事訴訟；特別法院包括行政、審計、軍事及稅務法院等。義國司法超然獨立，最高機構為最高司法會議(Consiglio Superiore della Magistratura)，總統兼該會議主席，成員包括最高法院院長、檢察總長及24名選舉委員。憲法法庭則由15名大法官組成，其中主席及1/3之法官由總統任命，1/3由國會選出，餘由法院選出。",
                "headman" =>
                    "總統代表國家，團結象徵意義大於政治意涵，任期7年，由參眾兩院全體議員與全國20大行政區推出之代表共同選出，總統主要職責為任命總理及總理提名之內閣部長人選、並擔任最高司法會議主席及三軍統帥。義大利前憲法法庭法官Sergio Mattarella於2015年1月31日當選第12屆總統，並於同年2月3日宣誓就職。2022年1月24日至29日義國舉行第13屆總統選舉，由義大利國會參眾兩院議員和省地方代表組成的聯席會議選舉產生，最終由現任義大利總統Sergio Mattarella在第8輪投票中贏得759票獲得連任，並於同年2月3日宣誓就職。",
                "fa_minister" => "Antonio TAJANI(塔亞尼)(自2022年10月起)",
                "major_political_parties" =>
                    "執政之中右派政黨主要為：「義大利兄弟黨」(Fratelli d’Italia)、「聯盟黨」(Lega)及「義大利前進黨」(Forza Italia)。在野之中左派政黨為：「民主黨」(Partito Democratico)、「五星運動黨」(Movimento 5 Stelle)。另有第三勢力在野黨「行動-義大利活力黨」(Azione-Italia Viva)。",
                "financial_incoming" =>
                    "收8,329.94億歐元，支1兆07.58億歐元(2021)",
                "export_value" => "5,162億6,175萬歐元 (2021)",
                "import_value" => "4,720億7,007萬歐元 (2021)",
                "export_item" =>
                    "製藥劑、其他機器、一般機器、汽車、其他特殊機器、成衣(除皮衣外)、貴重金屬及核燃料、基本化學製品、汽車配件、塑膠產品、鞣製皮革、皮包、皮箱、其他金屬製品、飲品類、引擎、鞋類、變壓器等電機設備、其他食品類、精煉石化製品等。",
                "import_item" =>
                    "汽車、製藥劑、基本化學製品及化學肥料、貴重金屬與核燃料、原油、鋼鐵製品、成衣(除皮衣外)、一般機器、其他機器、天然氣、通訊設備、汽車配件及引擎、其他化學製品、電腦設備、發電機及變壓器等電機設備、塑膠產品、非永續農產品、其他紡織品、醫療設備與牙醫設備、精煉石油製品等。",
                "main_export_countries" =>
                    "德國、法國、美國、瑞士、西班牙、英國、比利時、波蘭、中國大陸、荷蘭(2021)",
                "main_import_countries" =>
                    "德國、法國、中國大陸、荷蘭、西班牙、比利時、美國、俄羅斯、波蘭、瑞士(2021)",
                "export_to" => "28億9,678萬美元(2022)",
                "import_from" => "33億4,363萬美元(2022)",
                "foreign_relationship" => "良好。",
                "foreign_policy" =>
                    "義大利為1951年「巴黎和約」簽約國，並為歐盟創始國。1955年加入聯合國，另為NATO、OECD、WTO、OSCE、G7、G20等國際組織重要成員，在國際社會頗為活躍。義國在聯合國、北約或歐盟架構下，曾分別派軍進駐索馬利亞、莫三鼻克、東帝汶、波士尼亞、科索沃及阿爾巴尼亞、伊拉克、黎巴嫩及阿富汗等國。對外政策以歐盟共同安全防禦及外交政策為主，為因應國際反恐及金融危機，除續維持與美國友好關係外，亦致力加強與俄羅斯、中國大陸及巴西等新興經濟強國關係。德拉吉總理於2021年2月17日在參議院就職演說中，曾闡述未來義國外交政策將關注世界上公民權利遭侵犯情形，以及關注中國對周邊亞洲國家造成之緊張情勢，日後並多次表示義國外交政策將以親歐盟主義及支持跨大西洋聯盟關係為依歸。另外，義國亦依據歐盟在2021年9月公佈之「歐盟印太合作戰略」(EU Strategy for the Indo-Pacific)，強化其與印太國家之交流合作關係。",
                "time_range" =>
                    "較臺灣慢7小時(3月底至9月底日光節約時間較臺灣慢6小時)夏令日光節約時間（3月最後一個星期日至10月最後一個星期日），較臺北慢6小時。冬令時間（10月最後一個星期日至3月最後一個星期日），較臺北慢7小時 ; 餘皆不變。",
                "resident" => "駐義大利代表處",
                "national_flag" => null,
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            148 => [
                "name" => "聖克里斯多福及尼維斯聯邦",
                "name_in_en" => "Federation of Saint Christopher and Nevis",
                "short_name" => "聖克里斯多福及尼維斯聯邦",
                "short_name_in_en" => "St. Kitts and Nevis",
                "capital" => "巴士底市(Basseterre)",
                "capital_in_en" => "Basseterre",
                "national_day" => "9月19日",
                "join_un_day" => "1983年9月23日",
                "area_size" =>
                    "土地總面積為261平方公里，其中聖啟茨島(St. Kitts)168平方公里、尼維斯島(Nevis)93平方公里。",
                "geographic" =>
                    "聖克里斯多福及尼維斯(Federation of St. Christopher and Nevis 或St. Kitts and Nevis)係由聖啟茨及尼維斯二島構成一個國家，位於西印度群島背風群島(Leeward Islands)西北部，東鄰安地卡暨巴布達(Antigua &amp; Babuda)，北接荷屬聖佑達修斯(Sint Eustatius)。",
                "religion" => "基督教、羅馬天主教及英國聖公會",
                "bilaterial_relations" =>
                    "1.1983年10月9日我與克國建交，次年8月我在克國設立大使館。【克國於1983年9月19日獨立建國，2013年為克國獨立及與我建交30週年】。2.2008年1月28日克國在華設立大使館，首任代辦哈菁絲女士（Jasmine Elise Huggins）於2010年4月升任大使。3.我國現任駐聖克里斯多福及尼維斯大使為丘高偉先生。",
                "main_bounds" =>
                    '東加勒比海幣(East Caribbean Dollar)，簡稱東加幣(EC$)。',
                "exchange_rate" =>
                    "東加幣兌換美元採固定匯率，1美元兌換2.6882東加幣， 1東加幣約折合新台幣10.4元。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/7d6b5599-03a7-427a-8f8b-bba957fe7ee3.GIF",
                "is_diplomatic" => 1,
                "language" => "官方語言為英語",
                "main_media" =>
                    "1、克國政府新聞處(SKNIS)2、電視台：ZIZ (克國國家廣電公司)3、報紙：The St. Kitts and Nevis Observer (每週五發行紙本報紙)；The Labour Spokesman (每週五發行電子報)。4、廣播：ZIZ Radio、Big Wave96、WinnFM、KYSSFM98.6、Voice of Nevis、Freedom FM、Sugar City FM、Radio St. Kitts &amp; Nevis等。",
                "population" =>
                    "克國人口為54,488人(2022年，CIA World Factbook)。",
                "voltage" => "飯店及新建房屋多採110V，部分舊建築兼採用220V",
                "time_difference" => "-12:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/665db324-aa18-467a-bee2-bae206bd11b9.JPG",
                "political_system" =>
                    "克國於1983年9月19日脫離英國獨立，並於同年加入聯合國。獨立後仍奉英國國王為元首，由伊任命總督代表之，政體採責任內閣制，行政、立法、司法三權分立，總理為最高行政首長。克國國會為單一院制，包括民選眾議員11 名（克島 8 名、尼島 3 名）及總督任命之參議員3或4名，總席次14或15席，每屆任期5年。克國獨立後即與我國建交，台克兩國邦誼深遠已逾39年，我國與克國政府一直保持密切交流。",
                "history_intro" =>
                    "聖克里斯多福及尼維斯係哥倫布於1493年航行時所發現，法國人曾一度在島嶼西端登陸，惟依1783年凡爾賽條約劃歸英國管轄。1983年9月19日克國正式脫離英國獨立，並於同月23日加入聯合國。",
                "parliament" =>
                    "克國政府體制為內閣制，國會（National Assembly）採一院制，憲法規定每5年改選乙次，國會議員包括眾議員（Representative）及參議員（Senator），11名眾議員由公民直選（聖啟茨島8名，尼維斯島3名），執政黨眾議員通常兼任內閣部長；參議員原則上為3名，由執政黨推薦2名，在野黨推薦1名，倘參議員身兼檢察總長一職，則再多增加1名參議員。總理由國會多數黨領袖擔任，並由總督任命，為實際負責行政事務之首長，內閣集體向國會負責。",
                "cabinet" =>
                    "2022年8月5日克國國會大選，「勞工黨」於11席民選國會席次中贏得6席，總理、副總理、檢察總長（參議員）3人，及部長5人（含1位參議員）。總理由國會多數黨領袖擔任，並由總督任命，為實際負責行政事務之首長。內閣集體向國會負責。",
                "judiciary" =>
                    "克國之法律有沿襲英國之普通法及由其本國制訂之成文法2種，最高司法單位為設於聖露西亞之東加勒比海最高法院，下轄上訴法院及高等法院，並派1名法官至克國主持簡易法庭，另於各地設地方法院掌理一般法律案件。",
                "headman" =>
                    "奉英國國王為元首，由其任命之總督 Marcella Liburd 為代表。現任總理為德魯 (Dr. Terrance Drew)。",
                "fa_minister" => "道格拉斯（Dr. Denzil Douglas）",
                "major_political_parties" =>
                    "「勞工黨」、「人民行動黨」、「人民勞工黨」、「關切公民黨」及「尼島改革黨」。",
                "financial_incoming" =>
                    "國內生產毛額9.59億美元 (2021年，東加勒比海央行)",
                "export_value" => "4,877萬美元 (2021年，東加勒比海央行)",
                "import_value" => "2.60億美元 (2021年，東加勒比海央行)",
                "export_item" => "機械設備、工業製品、食品、飲料及菸酒",
                "import_item" =>
                    "交通工具、機械設備、工業製品、石化產品、食品、飲料及菸酒",
                "main_export_countries" => "美國、聖露西亞、千里達、多米尼克",
                "main_import_countries" => "美國、千里達、歐盟、加拿大、日本",
                "export_to" => "265萬美元 (2021年，國貿局)",
                "import_from" => "15萬美元 (2021年，國貿局)",
                "foreign_relationship" =>
                    "原英國屬地，1983年9月獨立後即加入大英國協及聯合國。",
                "foreign_policy" => "對外採和睦政策",
                "time_range" => "較台灣晚12小時",
                "resident" =>
                    "我國在聖克里斯多福及尼維斯首都巴士底市設有大使館",
                "national_flag" =>
                    "聖克里斯多福及尼維斯國旗啟用於1983年9月19日，克國國旗由一個位於左上方的綠色三角形、一個位於右下方的紅色三角形、一條從右上方延伸到左下方的黃邊黑色斜條以及兩個位於黑色斜條的白色星星組成。綠色象徵該國擁有肥沃的土地，紅色代表在奴隸制度以及殖民主義的背景下爭取自由，黃色標誌著當地一年四季都能享有的陽光，而黑色則象徵該國人民均來自非洲。另一方面，國旗上的兩顆星星除了代表聖克里斯多福及尼維斯兩座島外，也象徵著「希望和自由」。",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            149 => [
                "name" => "聖多美普林西比民主共和國",
                "name_in_en" => "Democratic Republic of Sao Tome and Principe",
                "short_name" => "聖多美",
                "short_name_in_en" => "Sao Tome and Principe",
                "capital" => "聖多美",
                "capital_in_en" => "São Tomé",
                "national_day" => "7月12日",
                "join_un_day" => "1975年9月16日",
                "area_size" => "1,001平方公里",
                "geographic" =>
                    "聖多美普林西比位處西非幾內亞灣，係由聖多美(850平方公里)、普林西比(130平方公里)等島嶼組成，於1470年由葡萄牙探險家發現。",
                "religion" => "天主教、基督教",
                "bilaterial_relations" => null,
                "main_bounds" => "Dobra(杜布拉)",
                "exchange_rate" =>
                    "詳細匯率資訊建議至臺灣銀行(https://rate.bot.com.tw/xrt)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/9a6926c5-827c-439d-bc30-ef439d88b24e.GIF",
                "is_diplomatic" => 0,
                "language" => "葡萄牙語",
                "main_media" =>
                    "Agencia STP Press, Téla Nón, 另葡新社(LUSA)及德國之聲(DW) 均有當地特派員報導聖國新聞。",
                "population" => "217,164人 (2022 est.)",
                "voltage" => "220伏特",
                "time_difference" => "-8:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/620a8add-2bfc-4fb6-83ef-24c0f9442d8d.JPG",
                "political_system" => "半總統制",
                "history_intro" =>
                    "葡萄牙人於15世紀宣稱發現聖多美並開始殖民，當初以種植甘蔗為主，19世紀起改植咖啡及可可作為主要經濟作物。聖國自1975年7月12日獨立後，前殖民時代倡導獨立並領導革命之「聖多美普林西比解放運動」（MLSTP）成為唯一政黨，接受前蘇聯及東歐集團援助，採一黨專制體制長期執政，總書記賓多（Manuel Pinto da Costa）為聖國首任總統且於1985年再度連任（1975-1991）。 1989年柏林圍牆倒塌，國際共黨勢力式微，聖國方漸趨民主化，1989年賓多(Manuel Pinto da Costa)總統公布建立多黨政治之新憲法草案，隨即為最高立法機關「國民議會」（Assembleia Nacional）採納並於1990年8月經公民複決通過，聖國改採多黨併存之民主體制，對外則逐步加強與美國等西方國家之關係，並與歐盟會員國維持密切政經聯繫。 1991年3月聖國首度舉行多黨總統及國會大選，賓多總統放棄參選，由流亡海外多年之獨立派人士陀沃達（Miguel Trovoada）順利當選，任期5年，並於1996年7月連任。2001年7月由梅尼士（Fradique de Menezes）當選總統並於2006年7月連任。2011年7月總統選舉歷兩輪投票，由睽違20年之首任總統賓多(Manuel Pinto da Costa)再度當選。2016年聖國總統大選由執政之獨立民主行動黨（Independent Democratic Action, ADI)之卡瓦留(Evaristo Carvalho)當選並於同年9月3日就職。2021年9月由ADI黨Carlos Vila Nova當選總統，法定任期5年，連選得連任一次。",
                "parliament" =>
                    "單一國會制，國民議會共55席，由人民直選，任期為4年。",
                "cabinet" =>
                    "總理陀沃達（Patrice Trovoada），由Carlos Vila Nova總統於2022年11月10日任命，其領導之內閣於同年11月14日宣誓就職。",
                "judiciary" =>
                    "設有3級法院，由總統任命最高法院院長及檢察總長。",
                "headman" => "總統Carlos Vila Nova",
                "fa_minister" => "Alberto Neto Pereira",
                "major_political_parties" =>
                    "主要政黨為聖多美普林西比解放運動黨（Movement for the Liberation of Sao Tome and Principe, MLSTP）、獨立民主行動黨（Independent Democratic Action, ADI）。",
                "financial_incoming" => "逆差125.6百萬美元 (2020)",
                "export_value" => "12.4百萬美元 (2020)",
                "import_value" => "138百萬美元 (2020)",
                "export_item" => "可可、椰仁、咖啡及棕欖油",
                "import_item" => "機械、器材、食品、燃油",
                "main_export_countries" => "歐盟、美國、安哥拉、加拿大",
                "main_import_countries" => "歐盟、安哥拉、中國、奈及利亞",
                "export_to" => "2021年無出口紀錄",
                "import_from" => "10,825美元 (2021)",
                "foreign_relationship" =>
                    "積極參加葡語系國家共同體(CPLP)之活動，與該組織之會員國（葡萄牙、巴西、莫三比克、安哥拉、維德角及東帝汶）關係較為密切，此外與鄰國加彭、奈及利亞、象牙海岸等關係良好。聖國採取和平友好之外交政策，主張與所有國家建立和發展友好之合作關係，以便獲得外援發展聖國經濟。聖國90%發展資金依靠外援，主要援助國為葡萄牙、法國、歐盟、非洲銀行、全球基金會和國際貨幣基金會等。",
                "foreign_policy" =>
                    "聖國對外關係以爭取各國之合作，協助聖國經濟發展為主。",
                "time_range" => "慢台灣8小時",
                "resident" =>
                    "我在該國未設處，該國事務由我駐葡萄牙代表處兼理。",
                "national_flag" =>
                    "https://commons.wikimedia.org/wiki/File:Flag_of_Sao_Tome_and_Principe.svg#/media/File:Flag_of_Sao_Tome_and_Principe.svg",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            150 => [
                "name" => "聖文森及格瑞那丁",
                "name_in_en" => "Saint Vincent and the Grenadines",
                "short_name" => "聖文森國",
                "short_name_in_en" => "St. Vincent & the Grenadines",
                "capital" => "金石城（Kingstown）",
                "capital_in_en" => "Kingstown",
                "national_day" => "10月27日",
                "join_un_day" => "1980年9月16日",
                "area_size" => "389平方公里",
                "geographic" =>
                    "聖國位於東加勒比海小安地列斯群島之向風群島中部，係由主島聖文森(St. Vincent)及格瑞那丁群島(The Grenadines)32個小島或礁岩所組成。",
                "religion" =>
                    "英國國教聖公會(Anglican)、羅馬天主教(Roman Catholic)、衛理公會(Methodist) 及安息日教會(Seventh Day Adventists)。",
                "bilaterial_relations" => null,
                "main_bounds" =>
                    '東加勒比海幣（Eastern Caribbean Dollar, EC$），簡稱東加幣。',
                "exchange_rate" => "採固定匯率制，1美元等於2.6882元東加幣。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/3b0cf55b-1c04-42a0-a08d-618a47d49fb6.GIF",
                "is_diplomatic" => 1,
                "language" => "英語",
                "main_media" =>
                    "The Vincentian報、The News報、The Searchlight報、I-Witness新聞網、St. Vincent Times、SVGTV、ikTV、VC3",
                "population" => "約110,872人（2022年）",
                "voltage" => "230Ｖ",
                "time_difference" => "-12:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/bc3eab30-f291-4c84-b03c-457ead5a154e.jpg",
                "political_system" =>
                    "君主立憲制，為大英國協成員，奉英國國王為國家元首。",
                "history_intro" =>
                    "聖國原住民加勒比人稱聖文森島為「降福之地」（Hairoun），1627年英國勢力入侵，加勒比人因支持法國，遭到獲勝之英國人大批屠殺後強制遷移中美洲(宏都拉斯及貝里斯)，其後居民以非洲裔或非裔與其他種族混血為主，1979年10月27日脫離英國而獨立。",
                "parliament" =>
                    "單一國會制。國會共21席，15席由單一選區選出，6席（參議員）由政黨推薦、總督任命，任期5年。",
                "cabinet" =>
                    "設有財政、經濟計畫、社會發展、教育、國家安全、農業及勞工、交通、衛生、工程、法務、外交及觀光等部會。",
                "judiciary" => "三級三審制",
                "headman" =>
                    "元首:英國國王，總督：朵根（Susan Dougan），總理：龔薩福（Ralph E. Gonsalves)",
                "fa_minister" => "彼德絲（Keisal Peters）",
                "major_political_parties" =>
                    "聯合勞工黨（Unity Labor Party, ULP)、新民主黨（New Democratic Party, NDP）、綠黨（SVG Green Party）。",
                "financial_incoming" =>
                    "國內生產毛額為8.63億美元(2021年)；政府財政收入5.07億美元，財政支出5.07億美元(2022年)；外債7.96億美元(2022年)。",
                "export_value" => "3,472萬美元（2021年）",
                "import_value" => "3.72億美元（2021年）",
                "export_item" =>
                    "食品及活體動物、工業製成品、機械及運輸設備、飲料及菸草、其他製成品。（2021年）",
                "import_item" =>
                    "食品及活體動物、機械及運輸設備、工業製成品、化石燃料及潤滑油等原料、其他製成品。（2021年）",
                "main_export_countries" =>
                    "1. 巴貝多 2. 聖露西亞 3. 美國 4. 多米尼克 5. 安地卡及巴布達（2021年）",
                "main_import_countries" =>
                    "1. 美國 2. 千里達及托巴哥 3. 中國 4. 英國 5. 加拿大（2021年）",
                "export_to" => "999,575美元（2022年）",
                "import_from" => "19,466美元（2022年）",
                "foreign_relationship" =>
                    "聖國與各國維持友好交往。獨立後仍繼續維持與英、美、加及歐盟之關係。龔薩福總理執政後更加強與古巴、委內瑞拉及厄瓜多良好關係。聖國在臺灣、美國、英國、古巴及委內瑞拉設有大使館，聖國係聯合國等重要國際組織之會員國，積極參與各國際組織相關活動及倡議。",
                "foreign_policy" =>
                    "聖國外交之主要任務在爭取對聖國經濟發展上之協助，並與周邊國家共同防止侵略、暴動、防恐及政治不安事件，並盼透過集體力量，增加對外談判籌碼，目前所加入之最重要區域組織為「加勒比海共同體(CARICOM)」及「東加勒比海國家組織(OECS)」。",
                "time_range" => "較臺灣晚12小時",
                "resident" => "我國在聖文森及格瑞那丁首都金石城設有大使館",
                "national_flag" =>
                    "底色依序為垂直藍、黃、綠色三色，中間（黃色底）處有三綠色菱形。",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            151 => [
                "name" => "聖露西亞",
                "name_in_en" => "Saint Lucia",
                "short_name" => "聖露西亞",
                "short_name_in_en" => "St. Lucia",
                "capital" => "卡斯翠市(Castries City)",
                "capital_in_en" => "Castries",
                "national_day" => "每年12月13日",
                "join_un_day" => "1979年9月18日",
                "area_size" => "616平方公里，約為台灣面積之57分之1",
                "geographic" =>
                    "聖露西亞位於東加勒比海小安地列斯群島中向風群島之中部，在聖文森及格瑞那丁(St. Vincent &amp; the Grenadines)之北，法屬馬丁尼克(Martinique)之南。",
                "religion" =>
                    "天主教為主要宗教(61.5%)、新教(25.5%)、基督教(3.4%)、其他1.4%，無信仰佔5.9%。",
                "bilaterial_relations" => null,
                "main_bounds" =>
                    "使用東加勒比海幣（簡稱東加幣）（East Caribbean Dollar, XCD）",
                "exchange_rate" =>
                    "當地採用東加勒比海幣(東加幣)，為固定匯率制，1美元可兌換2.6882(各當地銀行兌換比率各有不同)東加幣。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/4881cf55-2297-4e3c-9508-04ea2ea9108b.GIF",
                "is_diplomatic" => 1,
                "language" => "英語",
                "main_media" =>
                    "1、平面媒體：露國僅有聲報(The Voice)1家平面媒體。 2、電子媒體：露國現有聲報(The Voice)、星報(The Star)、聖露西亞電子報(St. Lucia News Online)及聖露西亞時報 (St. Lucia Times)等電子媒體，即時更新新聞，年輕讀者眾多。 3、電視媒體：國營電視台NTN，屬露國新聞局GIS管轄，專為政府政策宣傳，係露 國民眾獲取政府資訊之主要管道之一。另有HTS、DBS、Calabash TV、 Choice、IETV(教育台)等5家民營電視台，除IETV為教育電視台外，其餘4家每日 均有電視新聞報導，惟因規模不大，設備有限，新聞素材多以露國國內為主。 4、廣播電台：露國屬多山丘陵地形，多數民眾因收入有限或居住於交通不便及公共建設基礎不足之處，爰廣播仍為露國人民接收訊息重要媒介，目前有民營電台約15家。",
                "population" => "184,559人（2021年預估數）",
                "voltage" =>
                    "電力供應正常，偶有停電情形。電壓規格為220-240伏特，50Hz。插座一般為扁型三插座，與英國相同，亦有住家及飯店或同時設有220-240伏特及110伏特之插座。另電力公司亦可提供330伏特以上供製造業使用。",
                "time_difference" => "-12:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/32a03028-394d-4b92-a76e-0a77bdd606ba.JPG",
                "political_system" =>
                    "1、聖露西亞於1979年2月22日宣布脫離英國獨立，政治制度採行英國式之責任內閣制，三權分立。2、聖露西亞為大英國協成員，遵奉英國國王為元首，以總督為其代表。總督係由總理推薦，並經英國王室任命，為名義上之國家元首。3、總理為實質上之國家元首，在2021年7月26日舉行之國會大選中，在野勞工黨(SLP)勝選，由該黨黨魁皮耶(Philip J. Pierre)於7月28日起組成新政府並出任總理，同年8月5日舉行內閣就職典禮。",
                "history_intro" =>
                    "聖露西亞在17及18世紀間曾為英法兩強相互奪佔達14次之多，1803年英國完全佔領該島，並以單獨行政單位統治之。1967年聖露西亞之內政完全自治，外交及國防由英國代掌。1979年2月22日宣佈脫離英國獨立，為大英國協會員國，奉英國國王查爾斯三世為元首，以總督為其代表。代理總督為查爾斯(Errol Charles)，總理為皮耶(Philip J. Pierre)。",
                "parliament" =>
                    "露國採行英國式責任內閣制，全國共分為17個選區各選出1名國會(眾)議員。國會分參、眾兩院：眾院由17位民選國會議員及議長(總理提請總督任命)組成，每5年改選一次。參院共11席由10位參議員及議長組成，分別由執政黨提名 6席、反對黨提名3席、總督提名2席。",
                "cabinet" =>
                    "由總理及各部部長組成，行使行政權，對國會負責。總理由國會多數黨領袖擔任，部長經總理提名並由總督任免。",
                "judiciary" =>
                    "露國司法係由東加勒比海最高法院和地方初審法院組成，司法最終審判權歸屬英國樞密院。兼採英國之習慣法及成文法，由東加勒比海最高法院、簡易裁判法院及地方法院分別執行法律。設有檢察總長，為政府之主要法律顧問。",
                "headman" =>
                    "聖露西亞於1979年2月22日宣佈脫離英國獨立，為大英國協會員國，奉英國國王查爾斯三世為元首，以總督為其代表。現任代理總督為查爾斯(Errol Charles)。",
                "fa_minister" => "包提斯(Alva R. Baptiste)。",
                "major_political_parties" =>
                    "1. 聖露西亞勞工黨(SLP)：目前係執政黨，現任黨魁為皮耶（Philip J. Pierre）總理2. 聯合工人黨（UWP）：現為反對黨，黨魁為前總理查士納(Allen Chastanet)。",
                "financial_incoming" =>
                    "2022-2023財政年度露國政府編列財政收入為10.16億東加勒比海幣，預計財政支出18.42億東加勒比海幣（資料來源:露國財政部）。",
                "export_value" =>
                    "1.56億東加勒比海幣(2021全年露國財政部公布統計數據)",
                "import_value" =>
                    "16.23億東加勒比海幣(2021全年露國財政部公布統計數據)",
                "export_item" =>
                    "香蕉、衣物、可可、酪梨、芒果、成衣、電子零組件、飲料、紙箱、柑橘加工品以及椰子加工品等，惟規模多不大，價格及產品尚未具國際競爭力。其中香蕉是最大宗出口農業作物，亦是露國賺取外匯收入之最主要商品。",
                "import_item" => "食品、機械及運輸設備、化工產品、燃油等",
                "main_export_countries" =>
                    "美國、英國、秘魯、安地卡及巴布達、多米尼克、法國、 巴貝多、千里達及格瑞那達。",
                "main_import_countries" => "美國、英國、中國、南美洲國家。",
                "export_to" =>
                    "聖露西亞係我第195大貿易出口夥伴，我對露國輸出產品包括人造纖維絲、電機與設備及其零件、鋼鐵製品、塑膠及其製品等，2022年輸出總額為302,760美元。(2022年全年度經濟部國際貿易局統計數據)",
                "import_from" =>
                    "聖露西亞係我第168大貿易進口夥伴。我自露國進口產品為鋼鐵、木漿或其他纖維素材料之紙漿及回收紙或紙板等，2022年輸入總額為355,681美元。(2022年全年度經濟部國際貿易局統計數據)",
                "foreign_relationship" =>
                    "1.露國非常重視與鄰國之關係，並於美、英、加拿大、古巴及我國均有設立大使館或領事館維持外交關係。另有包含我國在內之25國在露國設有大使館或名譽領事。目前露國所加入最重要之區域性組織分別為「東加勒比海國家組織」（OECS，秘書處在露國）、「加勒比海共同體」（CARICOM，秘書處在蓋亞那）及美洲國家組織（OAS），並刻正加速推動加入「加勒比海單一市場經濟體」（CSME）及「美洲自由貿易協定」（FTAA）。 2.聖露西亞與我國於西元2007年(民國96年)4月30日恢復全面外交關係，成為中華民國邦交國。聖露西亞並於西元2015年6月在我國設立亞洲地區第一個大使館。",
                "foreign_policy" =>
                    "強調外交為經濟服務，主張與所有國家保持和諧關係並積極推動加勒比海地區之整合，期盼透過集體之力量，增加對外談判之籌碼。",
                "time_range" => "較臺灣時間慢12小時。",
                "resident" => "我國在聖露西亞首都卡斯翠市設有大使館",
                "national_flag" =>
                    "聖露西亞國旗，藍地 （代表海洋與忠誠），中間有一黃色三角形（代表陽光與繁榮），上有一鑲白邊的黑色箭頭 （代表種族和諧，但黑人文化為主體）。而三角形也代表了當地的筆桶(Piton)山，係聖露西亞的象徵。",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            152 => [
                "name" => "聖馬利諾共和國",
                "name_in_en" => "Republic of San Marino",
                "short_name" => "聖馬利諾",
                "short_name_in_en" => "San Marino",
                "capital" => "聖馬利諾",
                "capital_in_en" => "San Marino",
                "national_day" => "9月 3日",
                "join_un_day" => "1992年3月",
                "area_size" => "60.19平方公里",
                "geographic" => "南歐、義大利境內東部",
                "religion" => "天主教",
                "bilaterial_relations" => null,
                "main_bounds" => "歐元（euro）",
                "exchange_rate" =>
                    "使用貨幣為歐元。目前約為1歐元兌換32元新台幣，惟須視匯率浮動情況而定。建議查詢當日台灣銀行（https://rate.bot.com.tw/xrt/all/day?Lang=en-US）或兆豐商銀匯率（https://www.megabank.com.tw/personal/foreign-service/forex）。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/88a365c5-b3d8-4273-a90b-2144a4c7fd4c.GIF",
                "is_diplomatic" => 0,
                "language" => "義大利語",
                "main_media" => "義大利媒體及Gazzette",
                "population" => "3萬人3千人",
                "voltage" => "220V",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/5752a2b8-f10c-4d45-ac54-d48db0df3d34.jpg",
                "political_system" => "共和國",
                "history_intro" =>
                    "聖馬利諾為歐洲最古老的共和國，於紀元二至四世紀間建國，在中世紀早期即發展為城市國家，為義大利在19世紀中葉統一前唯一存在的獨立城國，曾於1862年與義大利簽訂友好合作條約，該約於1939年重訂，1971年再度修訂。",
                "parliament" =>
                    "採單院制，議員六十人，由年滿二十一歲之公民直接選舉，任期五年",
                "cabinet" =>
                    "採國家委員會制度。每六個月在國會選出二名元首執政，另由國會推選十人分掌各部。聖國無總理制度，由外交部長兼任總理。現任二名元首（於2022年10月就任）為柏爾第（Maria Luisa BERTI）及查巴他（Manuel CIAVATTA）；外交部長為柏卡利（ Luca BECCARI）。",
                "judiciary" =>
                    "設有第一及第二審法院，並另設司法委員會，由國會選出12人組成，負責保護人民權利。",
                "headman" =>
                    "Gian Carlo Venturini 及Marco Nicolini (capitani reggenti)，於2021年4月1日就任",
                "fa_minister" => "Luca Beccari  (2020年1月8日就任)",
                "major_political_parties" =>
                    "政黨體系屬多元體系，目前執政黨由「社會民主左派」、「未來共和國」及「市民10」等政黨組成；在野黨由「基督教民主黨」、「社會黨」及「社會及民主主義黨」等政黨組成。",
                "financial_incoming" => "收2.8億歐元，支3.9億歐元(2021)",
                "export_value" => "併入義大利計算",
                "import_value" => "併入義大利計算",
                "export_item" => "併入義大利計算",
                "import_item" => "併入義大利計算",
                "main_export_countries" => "與義大利相同",
                "main_import_countries" => "與義大利相同",
                "export_to" => "145萬7,850美元(2022年)",
                "import_from" => "18萬7,949美元(2022年)",
                "foreign_relationship" =>
                    "(一)	聖國四面被義大利環繞，與義國有著最深厚之歷史、地理與經濟聯繫關係。根據與義國的友好睦鄰條約，雙方在通訊及郵務等領域要緊密的合作關係。(二)	聖國約與100個國家有外交領事關係，目前已加入聯合國教科文組織、WHO、國際勞工組織（ILO）等國際組織，並於1992年加入UN與IMF。 (三)	聖國亦為歐洲安全與合作組織 (OSCE)（1972 年加入）及歐洲委員會（1988 年加入）成員。 目前聖國正與EU、安道爾及摩納哥研議締結夥伴關係協議。",
                "foreign_policy" =>
                    "中立國。聖國大約與100個國家有外交領事關係，另該國四面被義大利環繞，與義國有著深厚歷史、地理與經濟等深厚關係。",
                "time_range" =>
                    "較台灣慢7小時(3月至10月日光節約時間較台灣慢6小時)",
                "resident" => "無(由駐義大利代表處兼轄)",
                "national_flag" => null,
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            153 => [
                "name" => "肯亞共和國",
                "name_in_en" => "Republic of Kenya",
                "short_name" => "肯亞",
                "short_name_in_en" => "Kenya",
                "capital" => "奈洛比 (Nairobi)",
                "capital_in_en" => "Nairobi",
                "national_day" => "12月 12日",
                "join_un_day" => "1963年12月16日",
                "area_size" => "580,367平方公里",
                "geographic" => "位於東非，東南方接印度洋",
                "religion" =>
                    "基督教 (85.5%)、伊斯蘭教(10.9%)、其他或未表明宗教信仰(1.8%)(2019)",
                "bilaterial_relations" => null,
                "main_bounds" => "肯亞幣(Kenyan Shilling) (KES)",
                "exchange_rate" =>
                    "美金兌換肯亞貨幣匯率約為1:122.50(2022-12月4日)詳細匯率資訊建議至相關具可信度之線上匯率網站或肯亞中央銀行(https://www.centralbank.go.ke/) 網站查詢",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/fae041bc-a0e5-414d-ab81-93018e73a0f5.GIF",
                "is_diplomatic" => 0,
                "language" => "史瓦希里語(Kiswahili)及英文",
                "main_media" =>
                    "Daily Nation 國家日報，預估佔4分之3的市場；The Standard民營日報(肯亞年代最久的報社)、East African Weekly 英語週報、Kenya Broadcasting Corporation (KBC) 肯亞國營廣播電視台。",
                "population" => "54,60萬人(2022)",
                "voltage" => "240伏特",
                "time_difference" => "-6:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/032e1cf3-8b56-48e9-a548-0e17ad8c17c9.JPG",
                "political_system" => "共和",
                "history_intro" =>
                    "1.肯亞是人類發源地之一，境內曾出土約250萬年前的人類頭蓋骨化石。西元7世紀，東南沿海地帶已形成一些商業城市，阿拉伯人開始到此經商和定居。16世紀，葡萄牙殖民者占領了沿海地帶。2.1890年英、德兩國瓜分東非，肯亞被劃歸英國，英政府宣布肯亞爲其「東非保護地」，後改爲「殖民地」。3.1963年5月舉行大選，肯亞非洲民族聯盟（簡稱肯盟）獲勝。同年6月1日成立自治政府，12月12日宣告獨立，結束了英國長達70年的殖民統治。1964年12月12日，改名肯亞共和國，仍留在大英國協內。4.2007年12月27日姆瓦伊•齊貝吉贏得總統選舉，反對派橙色民主運動（ODM）贏得了議會中的多數席位，反對黨領袖拉伊拉•奧廷加擔任總理。拉伊拉•奧廷加的支持者在許多地區發起了暴亂。2013年，烏胡魯•肯亞塔(UHURU KENYATTA)當選總統，2017年連任，任期5年。5.威廉-魯托(William Ruto)於2022年9月13日正式就職肯亞第五任總統，任期5年。",
                "parliament" => "二院制，參院67席，國民大會349席，任期5年。",
                "cabinet" => "總理及閣員均由總統任命。",
                "judiciary" =>
                    "法院分四級，即地區法院、常設法院、高等法院和上訴法院。在穆斯林人口眾多之地區另設伊斯蘭法院。",
                "headman" => "威廉-魯托(William Ruto)",
                "fa_minister" => "Alfred Mutua",
                "major_political_parties" =>
                    "目前肯亞合法政黨約40個，主要政黨有：橙色民主運動（Orange Democratic Movement）、全國彩虹聯盟（National Rainbow Coalition, NARC）、全國彩虹聯盟-肯亞黨（NARC-K）、橙色民主運動-肯亞黨（Orange Democratic Movement-Kenya）、肯亞非洲民族聯盟（Kenya African National Union）、民族聯合黨（Party of National Unity or PNU）。",
                "financial_incoming" =>
                    "政府財政收入約為20.3億美元，支出31.3億美元。(2022年)",
                "export_value" => "74.5億美元 (2022)",
                "import_value" => "195.3億美元 (2022)",
                "export_item" =>
                    "茶葉、園藝產品、咖啡、石化產品、漁業產品、水泥",
                "import_item" => "機械及運輸設備、石化產品、汽車、鋼鐵",
                "main_export_countries" =>
                    "烏干達、美國、荷蘭、巴基斯坦、 英國、阿拉伯聯合大公國、坦尚尼亞(2022)",
                "main_import_countries" =>
                    "中國大陸、阿拉伯聯合大公國、印度、沙烏地阿拉伯、日本 (2022)",
                "export_to" => "1億4,237萬美元 (2022)",
                "import_from" => "981萬美元 (2022)",
                "foreign_relationship" =>
                    "肯亞是聯合國、非洲聯盟、不結盟運動、七十七國集團成員國，洛梅協定簽字國，也是（東非）政府間發展組織（伊加特）、東部和南部非洲共同市場、東非共同體和環印度洋地區合作聯盟等次地區組織的成員。聯合國在奈洛比設有辦事處，聯合國人居署（UNHABITAT）及聯合國環境署（UNEP，聯合國環境規劃署）總部設置在肯亞首都奈洛比。國際合作社聯盟非洲辦事處設在肯亞首都奈洛比。",
                "foreign_policy" =>
                    "奉行和平不結盟的外交政策，積極參與國際及地區事務，重視發展與西方及鄰國關係，實行務實外交。",
                "time_range" => "較台灣慢5小時",
                "resident" =>
                    "我國在肯亞並未設置代表機構，國人在肯亞境內倘遇急難需要協助，請撥打:1.外貿協會奈洛比台灣貿易中心電話：+254-20-2711189。2.駐索馬利蘭代表處急難救助行動電話：+252-636-292-616。3.駐南非代表處急難救助行動電話：（+27）828-029-380。4.或撥打國際長途電話：（+886）800-085-095與「外交部緊急聯絡中心」聯繫。",
                "national_flag" =>
                    "肯亞國旗的黑色象徵人民，綠色象徵農業和資源，紅色象徵象徵為獨立所流的血，白色的邊象徵和平統一。中央的矛盾圖案表示肯亞人民為國家獨立和捍衛自由而戰鬥。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            154 => [
                "name" => "芬蘭共和國",
                "name_in_en" => "Republic of Finland",
                "short_name" => "芬蘭",
                "short_name_in_en" => "Finland",
                "capital" => "赫爾辛基",
                "capital_in_en" => "Helsinki",
                "national_day" => "12月6日",
                "join_un_day" => "1955年12月14日",
                "area_size" =>
                    "338,145平方公里，陸地面積占 303,815平方公里，水域面積占34,330平方公里。",
                "geographic" =>
                    "1.芬蘭位於北歐，介於北緯60度至70度之間，北接挪威北部，西北與瑞典、挪威為界，東臨俄羅斯，西、南濱臨波羅的海及芬蘭灣（Gulf of Finland）與波羅的海三國（愛沙尼亞、拉脫維亞、立陶宛）遙遙相對。 2.芬蘭國土南北長達1,160公里，東西最寬約540公里，最窄處為200公里；全境陸地76％屬森林覆蓋，僅約6％為可耕地。芬蘭地勢平坦，全境計有18萬8千多個湖泊、17萬9千多座島嶼，水域面積佔國土總面積約10％，此種特殊地理景觀令其素有「千湖國」之美譽。",
                "religion" => "基督教(路得教派) 66.6%希臘正教1.1%其他宗教 1.7%",
                "bilaterial_relations" => null,
                "main_bounds" =>
                    "歐元 (EURO)芬蘭於2002年加入歐元區，是為北歐唯一成員國。",
                "exchange_rate" =>
                    "芬蘭使用歐元，詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/d493f55f-e8e6-4d60-88a1-5e1374582815.GIF",
                "is_diplomatic" => 0,
                "language" =>
                    "芬蘭語86.5%及瑞典語(5.2%)等兩種語文併列官方語文，俄語人口1.6%，其他語言則約占6.7% (2021 est.)",
                "main_media" =>
                    "重要文字媒體計有發行量最大之赫爾辛基日報（Helsingin Sanomat）及各地媒體如土庫日報、中部芬蘭人日報、巨人報、商業日報及瑞典語首都日報等。重要電子媒體計有芬蘭國家廣播公司（YLE）、電視第一台、第二台及商業電視台等；另全國各地區亦有多家公、民營廣播電台蓬勃營運。",
                "population" => "5,582,726 (2023.4月)",
                "voltage" => "220V 雙圓柱",
                "time_difference" => "-6:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/c96358cd-e1d1-4c8c-897f-02935cdc27c5.jpg",
                "political_system" =>
                    "三權分立之民主共和國，採總統、總理雙首長制",
                "history_intro" =>
                    "1. 芬蘭人民之先祖來自俄羅斯東部大平原頓河－伏爾加河流域(Don-Volga River)，芬人92％以芬蘭語（屬芬烏語系Finno-Ugric）為母語，6％為瑞典語族裔，故芬蘭之民族同質性頗高。芬蘭建國歷史頗為坎坷，12世紀中期瑞典王國勢力入侵並統治芬蘭全境長達650年，故深受瑞典文物典章及風俗習慣之影響；且因接受瑞典傳入之基督教路德教派信仰，在宗教與情感上均與瑞典相近連通；瑞典統治時期之首府為位於芬蘭西部之土庫市(Turku)。 2. 嗣後俄羅斯帝國勢力崛起並於1808年入侵芬蘭而逐出瑞典勢力，1809年俄羅斯依照哈米那條約正式佔有芬蘭並改為大公國。俄沙皇亞歷山大二世對芬蘭尚稱寬和，准由芬人菁英籌組自治政府，並准予保留芬蘭自身獨特之文化及語文，且未強迫芬人改信奉東正教派。俄皇於1812年定赫爾辛基(Helsinki)為芬蘭首府後進行大規模建城工程，自此芬蘭逐漸發展出深具民族特色之文化及工商業。 3. 1917年芬蘭趁俄國發生十月革命自顧不暇之際，於12月6日宣佈獨立為民主共和國並獲新成立蘇維埃聯邦實際掌權之列寧所承認。芬蘭於1919年結束內戰後，頒佈第一部正式憲法並實施民主政治迄今。 4. 在納粹德國於1939年8月入侵波蘭而引發第二次世界大戰後，強鄰蘇聯首腦史達林旋於1939年11月30日出兵攻打芬蘭，該場史稱「冬季戰爭」(Winter War)之戰事於1940年3月結束，俄、芬兩國皆於此僵持消耗戰事中損失慘重，惟芬軍亦因英勇力抗，成功阻卻蘇軍之鐵蹄侵踏而保有主權與獨立。芬蘭於冬季戰後與俄方簽訂莫斯科條約，在史達林強索之鉅大壓力下，忍痛割讓東部卡瑞里亞(Karelia)予蘇聯，該地約20餘萬芬人被迫向芬境遷徙。5. 芬蘭在第二次世界大戰開始後，因忌憚蘇聯繼續侵襲，且志在收復失地乃轉與希特勒結交。在第二次大戰期間，芬、德兩軍自1941年起共同分擔北歐攻蘇戰事並成功收復卡瑞里亞，惟芬蘭並非完全聽命德方指揮，亦未配合攻擊近鄰之列寧格勒（聖彼得堡）及美、英補給蘇軍之莫曼斯克(Murmansk)不凍港區。芬、蘇戰事持續進行三年餘之後，史達林於1944年夏季納粹德國敗象甚明之際，又再度集結優勢兵力進襲芬蘭，史稱「續戰」(Continuation War)；芬軍雖再度力抗且未戰敗，卻在敵眾我寡之情勢下撤出卡瑞里亞。1944年芬蘭與蘇聯單獨簽署終戰條約，芬蘭不僅須償付鉅額賠款（約佔全國總生產5％），亦須割讓土地，除卡瑞里亞地區外，尚有佩薩莫(Petsamo)及鄰近北極海周邊區域等總計國土面積1/12被迫割予蘇聯。另蘇聯為便於操控芬蘭，強行租用靠近赫爾辛基之波卡拉(Porkkala)地區作為軍事基地，一直到1956年始歸還芬蘭。1947年所簽訂之二次大戰後巴黎和約將蘇、芬和約納入其中，此不啻為蘇聯取得部分芬蘭領土背書。6. 1948年4月蘇聯又迫使芬蘭簽訂芬蘇友好互助條約，芬蘭雖未如同其他淪入鐵幕之東歐國家一般，成為蘇聯附庸並加入華沙公約組織而與西方對抗，惟芬蘭亦被迫採取政治中立政策，此即國際關係所稱之「芬蘭化」(Finlandization)，並長期籠罩在蘇聯專橫之氣氛下。7. 1991年12月前蘇聯解體後，該條約及前蘇聯之長期威迫壓制終告中止。1992年元月芬蘭與俄羅斯聯邦政府重訂新友好條約，並於2001年5月再度延長五年。8. 芬蘭在1995年與瑞典、奧地利同時加入已成立之歐洲聯盟(European Union, EU)，並於2002年啟用歐元，加速融入西歐之金融、經貿體系。",
                "parliament" =>
                    '1.芬蘭國會(Parliament)採一院制，二百席次，國會議員任期四年；芬蘭在俄羅斯帝國治統時代之自治議會已於1906年通過准予婦女投票權，並將貴族院、平民院合而為一。而1917年建國後之憲政沿革則歷經五大階段：1919年首部憲法、1928年國會建制法案、1922年之內閣部長責任法案及1922年之最高法院彈劾法、1999至2000年之總理職權修正案。現行憲法係自2000年3月起實施，將國會選出總理及由總理負責歐盟事務等實質提昇國會權力界定最為清楚之憲法。 2.本(第30)屆國會於2019年4月選出，社會民主黨(Social Democratic Party)贏得40席，成為國會最大黨，並聯合中央黨（Central Party)、綠黨（Green League)、左派聯盟（Left Alliance)及瑞典人黨（Swedish People\'s Party)組閣。',
                "cabinet" =>
                    "聯合政府總理：桑娜·馬林(Sanna Marin)(2019年12月10日)。",
                "judiciary" =>
                    "司法權屬各級法院，最高司法首長為法務總長(Chancellor of Justice)。",
                "headman" =>
                    "總統：國家聯合黨之寧尼斯托(Sauli Niinistö)於2012年3月1日就職, 續於2018年連任。",
                "fa_minister" => "何貝卡(Pekka Haavisto)(2019年6月6日)。",
                "major_political_parties" =>
                    "中央黨、國家聯合黨、社會民主黨、左翼聯盟、綠黨、瑞典人民黨、基督民主黨及芬蘭人黨。",
                "financial_incoming" =>
                    "歲入730億歐元、歲出813億歐元(2023年預估值)",
                "export_value" =>
                    "668億歐元 (2022年1-10月)資料來源:芬蘭海關官網  https://tulli.fi/en/statistics/tables",
                "import_value" =>
                    "772億歐元 (2022年1-10月)資料來源:芬蘭海關官網 https://tulli.fi/en/statistics/tables",
                "export_item" =>
                    "石油及煉製品、紙漿及紙製品、通訊器材、不銹鋼、木材與合板、機械設備、載客船舶、醫療用品",
                "import_item" =>
                    "石油與原油、車輛及零配件、通訊器材、醫療用品、電腦與周邊及其零組件、石油氣、廢鐵料與礦砂",
                "main_export_countries" =>
                    "德國、瑞典、美國、荷蘭、俄羅斯、英國、中國、法國、挪威、比利時",
                "main_import_countries" =>
                    "德國、瑞典、俄羅斯、中國、荷蘭、法國、美國、丹麥、英國、愛沙尼亞",
                "export_to" =>
                    "351,384,600美元 (2022年)資料來源:財政部關務署海關進出口統計",
                "import_from" =>
                    "405,032,184美元(2022年)資料來源: 財政部關務署海關進出口統計",
                "foreign_relationship" =>
                    "1.1991年蘇聯解體，芬蘭趁勢廢除1947年巴黎和約及1948年芬蘇友好合作互助協定，另訂平等之一般性合作貿易協定。惟未向俄索還前蘇聯掠奪失土，因地緣、貿易、能源考量、芬蘭致力維持與俄羅斯平穩、友好關係。 2.因歷史因素，芬蘭與瑞典關係最為密切，外交事務例多以瑞典馬首是瞻，兩國同為EU及申根會員國，與其他北歐國家挪威、冰島、丹麥共組「北歐理事會(The Nordic Council)」，協調相關政策措施。 3.芬蘭最早支持波羅的海三國獨立，並參與「波羅的海國家理事會」，芬蘭與愛沙尼亞同一語系，關係尤為密切，兩國人民來往頻繁，芬蘭為愛國主要投資國。 4.芬蘭自1995年加入EU，也加入歐洲安全組織(OSCE)、歐洲貨幣聯盟(European Monetary Union)及歐洲太空發展計畫等，並成為北歐第一個啟用歐元(Euro)之國家（2002年1月）；芬蘭積極參與歐盟體制之運作，於1999下半年、2006下半年及2019年下半年擔任歐盟輪值主席國。 5.中國於2007年9月在芬蘭赫爾辛基大學成立孔子學院，赫爾辛基大學於2022年6月宣布關閉該孔子學院。",
                "foreign_policy" =>
                    "1.芬蘭在第二次世界大戰後，因受前蘇聯之強勢影響而採取政治中立，與冷戰期間之東、西集團各大國及四周鄰國均保持等距、友好關係。 2.俄烏戰爭於2022年2月爆發後，芬蘭與瑞典於2022年5月18日同時申請加入北大西洋公約組織(北約，NATO)，芬蘭並於2023年4月4日正式成為北約成員國。 3.芬蘭對歐盟新憲制訂及運作積極投入，芬國會並於2006年底通過批准該項憲法條約，亦支持歐盟2007年6月通過之改革條約。芬蘭也加入歐盟危機因應快速部署部隊，與瑞典、挪威、德國、荷蘭等共組兩支可供歐盟派赴海外之戰鬥部隊，並於2007年1月起擔任戰備值勤。 4.芬蘭基於尊重人權、維護國際正義之政策，歷年均撥出大量經費，積極從事國際合作與人道援助，並主動積極參與國際間維持和平與保障人權之計畫，並自1956年起參與聯合國維持和平部隊運作及參與多邊協定，以推動國際和平、急難救助、環境保護及積極援助第三世界等國際事務。前任總統艾迪碩瑞（Martti Ahtisaari）因積極斡旋印尼與亞齊省叛軍之和平協商及南斯拉夫之科索沃戰事和平解決成功，而受到國內外一致讚揚，並於2008年10月榮獲諾貝爾和平獎。",
                "time_range" =>
                    "秋冬較台灣慢 6 小時；自 3 月底至 10 月底春夏季為日光節約時間，則慢 5 小時。",
                "resident" =>
                    "駐芬蘭代表處(Taipei Representative Office in Finland)",
                "national_flag" =>
                    "芬蘭語：Siniristilippu，意為「藍十字旗」，是芬蘭的國旗，其圖案為白底上藍色的斯堪地那維亞十字，1918年5月29日被正式定為芬蘭的國家標誌。",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            155 => [
                "name" => "茅利塔尼亞伊斯蘭共和國",
                "name_in_en" => "Islamic Republic of Mauritania",
                "short_name" => "茅利塔尼亞",
                "short_name_in_en" => "Mauritania",
                "capital" => "諾克少(Nouakchott)",
                "capital_in_en" => "諾克少(Nouakchott)",
                "national_day" => "11月28日",
                "join_un_day" => "1961年10月27日",
                "area_size" => "103萬平方公里",
                "geographic" =>
                    "茅國位於撒哈拉沙漠西南部，西瀕大西洋，北部鄰接西撒哈拉及阿爾及利亞，東部與東南鄰接馬利，西南與塞內加爾為界。茅國北部及東部氣候乾燥酷熱，日夜溫差懸殊，僅西南臨塞內加爾河一帶及沿海地帶較為溫和，12 月至 2 月較為涼爽。",
                "religion" => "伊斯蘭教(國教)",
                "bilaterial_relations" => null,
                "main_bounds" => "烏吉亞 (Mauritanian ouguiya, MRO)",
                "exchange_rate" =>
                    "1美元約兌換36.42烏吉亞（2022年3月）。詳細匯率資訊建議至臺灣銀行（https://rate.bot.com.tw/xrt?Lang=zh-TW）或兆豐商銀（https://www.megabank.com.tw/personal/foreign-service/forex）網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/dc852d87-2b9d-4788-a41b-a6396bc30bad.png",
                "is_diplomatic" => 0,
                "language" =>
                    "官方語言為阿拉伯語，其他主要語言包括法語、噗拉語(Pular)、宋尼客語(Soninke)、窩洛夫語(Wolof)及哈桑語(Hassaniyya)。",
                "main_media" =>
                    'Mauritanian TV, Radio Mauritania, L\'Eveil-Hebdo, Rajoul Echaree, Le Chaab, Horizon, Le Calame',
                "population" => "約476萬人（2021年）",
                "voltage" => "220V",
                "time_difference" => "-8:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/fc67bd93-eba4-4b86-ba45-8faa8e0e6910.JPG",
                "political_system" => "共和/總統制",
                "history_intro" =>
                    "茅利塔尼亞人多數屬摩爾人，11世紀後半，摩爾人曾毀滅迦納帝國，征服摩洛哥，橫跨直布羅陀海峽，擊敗西班牙，聲威遠震伊伯利安半島。15世紀葡、西、荷人相繼前往茅利塔尼亞，法國人至19世紀始抵該地，1920年成為法國殖民地，1945年成為法國海外屬地，1960年11月28日獨立，由文人總統達達(Moctar Ould Daddah)領導，實行一黨專政。茅國於1960年獨立建國後，發生多次軍人政變，塔亞(Maaouya Ould Sid’Ahmed Taya)於1984年12月以武力取得政權，並於1991年、1992年、1997年及2003年連任總統。",
                "parliament" =>
                    "國民議會為唯一立法機關，共155席，任期5年，由直接選舉產生。",
                "cabinet" => "總理由總統任命。",
                "judiciary" => "最高法院、上訴法院、初審法院三級。",
                "headman" => "穆罕默德.瓦加祖尼(Mohamed Ould Ghazouani)",
                "fa_minister" => "Ismail Ould Cheikh Ahmed",
                "major_political_parties" =>
                    '共和聯盟(Union for the Republic, UPR)、全國改革發展聯盟(National Rally for Reform and Development, RNRD/Tewassoul)、人民進步聯盟(People\'s Alliance, APP)、民主與進步聯盟(Union for Democracy and Progress, UDP)。',
                "financial_incoming" =>
                    "政府預算歲收14.27億美元，支出16.88億美元，外債57億美元(2020年)。",
                "export_value" => "20.39億美元(2020年)",
                "import_value" => "29.23億美元 (2020年)",
                "export_item" => "鐵礦、漁產、黃金、銅礦、石油",
                "import_item" => "機械設備、石油產品、資本財、食品、生活消費品",
                "main_export_countries" =>
                    "中國、瑞士、西班牙、德國、日本、奈及利亞、俄羅斯",
                "main_import_countries" =>
                    "比利時、韓國、阿拉伯聯合大公國、美國、中國、法國、荷蘭、摩洛哥、挪威、斯洛維尼亞、西班牙",
                "export_to" => "1,437,158美元 (2020年)",
                "import_from" => "299,503美元 (2020年)",
                "foreign_relationship" =>
                    "1961年10月27日加入聯合國。政府外交政策著重於加強與阿拉伯以及撒哈拉以南國家（如塞內加爾及馬利）的關係。1992年恢復與塞內加爾之外交關係，2010年3月斷絕與以色列之外交關係。2013年3月10日至11日馬利總統Dioncounda TRAORE訪問茅國，兩國元首對法國及非洲國家派遣維和部隊至馬利之軍事行動表示讚賞。歐盟仍是茅國最重要的經濟合作夥伴，亦致力於加強與中國的經貿合作關係。茅國現為非洲聯盟（AU）、國際復興開發銀行（IBRD）、世界衛生組織（WHO）的成員。在反恐方面，2015年茅國境內之北非蓋達組織活動頻繁，由於馬利政局動盪，境內叛軍、極端主義團體及恐怖份子滲入茅國，對於西方人士之恐怖威脅升高。茅國與摩洛哥及阿爾及利亞建立密切的合作關係。迄今共與109個國家建立了外交關係。2016年3月7日美國為阻止伊斯蘭國往西非及北非地區擴張勢力，派遣美軍陸戰隊前往茅國支援當地政府軍壓制恐怖份子。2016年8月19日國際人權組織強烈抨擊茅國於同年7月25日舉行阿拉伯聯盟高峰會前，逮捕13名抗議世襲奴隸制度人士，並分別判刑3至5年囚刑之不當作法。2020年6月，茅國總統加祖瓦尼(Ghazouani)及法國馬克洪總統共同主持薩赫勒5國集團(G5 Sahel)之諾克少峰會。",
                "foreign_policy" => "採民主、開放之外交政策",
                "time_range" => "較臺灣慢8小時",
                "resident" =>
                    "我在該國未設處，該國事務由我駐法國台北代表處兼理。",
                "national_flag" =>
                    "茅國2017年8月16日啟用新國旗，在中間有新月抱星圖案的綠色旗幟上下添加紅色條紋，象徵緬懷國家從法國殖民統治下解放而犧牲的戰士們。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            156 => [
                "name" => "荷蘭王國",
                "name_in_en" => "Kingdom of the Netherlands",
                "short_name" => "荷蘭",
                "short_name_in_en" => "Netherlands",
                "capital" => "阿姆斯特丹",
                "capital_in_en" => "Amsterdam",
                "national_day" => "4月27日",
                "join_un_day" => "1945年12月10日",
                "area_size" =>
                    "面積41,543 平方公里（其中陸地面積33,893平方公里，水域面積7,650平方公里）。",
                "geographic" =>
                    "荷蘭位於西歐，東鄰德國，南接比利時，西部及北部瀕臨北海。除東南一帶山丘最高海拔 300 餘公尺外，全境地勢低窪，近三分之一低於海平面，而靠近鹿特丹的Alexander Polder地區，更低於海平面6.5公尺之多，故素有「低地國」之稱。 荷蘭位於北緯 51 至 54 度，屬海洋性氣候。東南方因歐陸氣候影響，寒暑溫差較大。每年6月至9月氣候最為溫和。1月平均氣溫為攝氏1.7度，7月份平均氣溫為17度。夏季偶有盛暑氣象，冬季漫長，陰雨天甚屬平常。",
                "religion" => "基督教、天主教",
                "bilaterial_relations" => null,
                "main_bounds" =>
                    "歐元自 2002 年 1 月起荷蘭使用歐元，無匯兌限制，美元與歐元間匯率隨市場波動，美元旅行支票流通性不佳，不建議攜帶。",
                "exchange_rate" =>
                    "使用貨幣：歐元(EUR)；詳細滙率資訊建議至臺灣銀行(https://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://megabank.com.tw/personal/foreign-service/forex)網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/484dd7e7-b98b-46b5-a02d-d031c29e4f9b.GIF",
                "is_diplomatic" => 0,
                "language" =>
                    "荷蘭語及菲仕蘭語為其官方語言，但大多數荷蘭人均通曉英語，旅行荷蘭使用英語並無溝通困難。",
                "main_media" =>
                    "電視：公共電視台：Nederland 1、Nederland 2、Nederland 3。有線電視台：RTL 4、RTL 5、SBS 6、Net 5、RTL7、RTL8、Veronica、NET5、CNN、BBC、Eurosport、Discovery、MTV、CNBC、中文台。電台： Radio 1-5（public service）、Sky Radio、Radio 538、Radio 538、BBC1-4、BNR、Q-music。報紙：De Telegraaf、De Volkskrant、NRC Handelsblad、Het Financiele Dagblad、Trouw等。雜誌： Elsevier、Vrij Nederland、VI、Quest等，種類繁多。",
                "population" => "17,710,526人（2022年7月）",
                "voltage" => "220V",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/0f49d964-8085-426a-bb7c-d41174e8ca78.jpg",
                "political_system" =>
                    "荷蘭是君主立憲制國家，現任元首是威廉-亞歷山大(Willem-Alexander)國王，國王是虛位元首，為國家的象徵代表。荷蘭是三權分立的責任內閣制，立法權屬於國會，行政權屬於國王及內閣，但實際權力在內閣。",
                "history_intro" =>
                    "荷蘭正式的國名全名是Koninkrijk der Nederlanden，翻成英文即是Kingdom of Netherlands，而其中Nederlanden在荷蘭語是表示「低地」的意思。由於地勢較低，荷蘭人與水抗爭的歷史一直是個傳奇。荷蘭境內有三分之一的土地低於海平面，而靠近鹿特丹的Alexander Polder地區，更低於海平面6.5公尺之多。為了土地與大自然抗衡，荷蘭人建造堤防，阻擋海水，並利用風車產生動力將窪地區的水抽乾，填海造地，至今你所看到的荷蘭是一望無際的平原，並孕育著無數的生命。歷史上，荷蘭一度在16、17世紀海上航權時代取得相當的優勢，成為當時歐洲北海沿岸勢力最強的代表，我們稱之為荷蘭的「黃金時代」！1602到1799年一百多年間，東印度公司(VOC)從一家貿易公司躍身為對全球第一家的跨國企業，對荷蘭的經濟發展貢獻良多，尤其對阿姆斯特丹的發展，產生了舉足輕重的影響。今天，從對阿姆斯特丹建築的風貌、運河的規劃等等，仍舊可以看出當時商業的蓬勃發展。此外，當時許多荷蘭北方、圍繞南海(Zuider Zee)的漁村，也成為東印度公司重要的港口。儘管在築完堤壩後，原本的南海早已更名為艾塞湖(Ijsselmeer)，但如珍珠項鍊般環繞湖畔的馬肯(Marken)、沃倫丹(Volendam)、荷恩(Hoorn)、烏爾克(Urk)與史帕肯堡(Spakenburg)等漁村，以及坎朋(Kampen)、斯塔佛倫(Stavoren)和恩克森等貿易城中，所遺留的傳統文化將這個地區也，形成了一個獨特且多彩多姿的區域，我們稱之為「北海黃金圈」 。現今荷蘭仍然是世界上的最有競爭力的先進國家之一也是世界上重要的出口貿易國。荷蘭首都是阿姆斯特丹，但是政府機構及各國大使館等等的行政中心則是設於海牙(Den Haag)。",
                "parliament" =>
                    "參議院前次選舉2019年5月27日眾議院前次選舉2021年3月17日 (下次選舉預定日期：2025年3月)",
                "cabinet" =>
                    "行政權屬於國王及內閣，惟實權在於內閣。內閣由總理、副總理及各部部長及國務秘書（State Secretary, 相當於我國之政務次長）組成。中央政府下設總務事務部、外交部、經濟部、內政暨王國事務部、財政部、司法暨安全部、國防部、教育文化暨科學部、衛生體育暨福利部、社會事務暨就業部、農業、自然暨食品品質部、基礎建設暨水資源管理部、氣候暨能源部、社會住宅暨空間規劃部、自然暨氮氣部、扶貧、參與暨退休金政策部。",
                "judiciary" =>
                    "司法上荷蘭有19個地方法院，5個高等法院，及1個由24名法官組成的最高法院，法官為終身職，由國王任命，但通常於70歲退休。",
                "headman" =>
                    "荷蘭為君主立憲制，現任國家元首為威廉-亞歷山大（Willem-Alexander）國王，惟君主係虛位元首，作為國家之象徵代表。荷蘭採三權分立之責任內閣制。",
                "fa_minister" => "Wopke Hoekstra (2022年1月10日就任)",
                "major_political_parties" =>
                    "執政聯盟：自民黨（VVD）、民六六黨(D66)、基民黨（CDA）、基督教聯盟（CU）；其他政黨：自由黨（PVV）、勞工黨（PvdA）、社會黨（SP）、綠色左翼黨（GL）、動物保護黨（PvdD）、自由論壇黨(FvD) 、泛歐黨(Volt)、正確答案21黨(JA21)、政治改革黨（SGP）、思考黨(DENK)、農民運動黨(BBB)、共同黨(BIJ1)。",
                "financial_incoming" =>
                    "收入3,767億歐元、支出3,991億歐元 (2021)",
                "export_value" => "5,866億400萬歐元(2021)",
                "import_value" => "5,269億5,100萬歐元(2021)",
                "export_item" =>
                    "礦物燃料(油)、機械、化學、食品、消費性電子產品、塑膠等",
                "import_item" => "礦物燃料(油)、運輸、機械、化學、食品、金屬等",
                "main_export_countries" =>
                    "德國、比利時、法國、英國、美國、義大利、西班牙、波蘭、中國、瑞典",
                "main_import_countries" =>
                    "德國、中國、比利時、美國、英國、法國、義大利、俄羅斯、愛爾蘭、波蘭",
                "export_to" => "80億7,986萬美元（2021年)",
                "import_from" => "102億1,649萬美元（2021年）",
                "foreign_relationship" =>
                    "參與主要國際經濟組織如WTO、OECD、EU、IMF、World Bank、UNCTAD、 UNESCO、UNHCR、UPU、WEU、WCO、WHO、OSCE、NATO、ITU、IOC、INTERPOL、ILO、IHO、IMO、IFC、IEA、ICC、ICAO、IAEA、IADB、FAO、OIML等",
                "foreign_policy" =>
                    "荷蘭外交政策以經濟利益及人權價值為取向，致力形塑其世界和平正義之都形象，加強歐洲整合，維持歐洲安全，積極參與歐洲聯盟、聯合國及北大西洋公約組織。",
                "time_range" => "較台灣晚 7 小時。(夏令時間較台灣晚6小時)",
                "resident" => "駐荷蘭代表處",
                "national_flag" =>
                    "荷蘭國旗呈長方形，由三條水平色帶組成，由上至下的顏色為紅、白、藍，是現在最古老的三色旗。其中紅色代表勇氣，白色代表祝福及庇佑，藍色代表對祖國的忠誠。",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            157 => [
                "name" => "莫三比克共和國",
                "name_in_en" => "Republic of Mozambique",
                "short_name" => "莫三比克",
                "short_name_in_en" => "Mozambique",
                "capital" => "馬布多",
                "capital_in_en" => "Maputo",
                "national_day" => "6月 25日",
                "join_un_day" => "1975年9月16日",
                "area_size" => "799,380平方公里",
                "geographic" =>
                    "莫三比克位於非洲東南沿海，東臨印度洋，北接坦尚尼亞，西南鄰南非，另與馬拉威、尚比亞、辛巴威、史瓦帝尼王國等國接壤。",
                "religion" => "天主教(28.4%)、伊斯蘭教(17.9%)、基督教(27.7%)",
                "bilaterial_relations" => null,
                "main_bounds" => "Mozambique Metical (MZN)",
                "exchange_rate" =>
                    "與美元、南非鍰之匯率，1美元兌63.2莫幣，1南非鍰兌3.64莫幣（2022年12月），中大型旅館及餐廳均可收美元與南非鍰，一般旅館均可兌換外幣。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/29d13dce-2cba-4b31-ad59-fada09c6e6cd.GIF",
                "is_diplomatic" => 0,
                "language" => "葡萄牙語",
                "main_media" =>
                    "當地主要之電視、電台、報紙及雜誌：＊主要電視台：國營Televisao de Mocambique (TVM)，私營Mozambique TV Channel (STV)，葡萄牙對非洲的海外電視台RTP Africa，巴西的Miramar和Mana TV。 ＊主要電台：Antena Nacional (RM], Radio Mocambique, LM Radio等，也可以收到英文的BBC World ＊主要報社：Noticias, Savana, Fim de Semana等，通訊社Agencia Informacao Mocambique (AIM], 近年也多了幾個Online-News Website,如 All Africa, Mozambique news等。",
                "population" => "3,315萬人(2022年8月)",
                "voltage" => "220伏特",
                "time_difference" => "-6:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/fc190e34-344c-4be7-8540-5e3280cf7bb3.JPG",
                "political_system" => "民主共和/總統制",
                "history_intro" =>
                    "16世紀時莫三比克為葡萄牙之殖民地，1951年成為葡國之海外省。「莫三比克解放陣線」（Frelimo）經多年與葡國之抗爭，遂於1975年6月25日宣告獨立。獨立後，由於政府軍Frelimo與叛軍「莫三比克民族抵抗運動」（Renamo）纏鬥不休內戰多年，迄1992年雙方在羅馬簽訂和平協定。",
                "parliament" =>
                    "莫國於2019年10月舉行總統及國會大選，隸屬執政黨Frelimo之總統Filipe Nyusi贏得73%選票，以壓倒性優勢贏得連任。",
                "cabinet" => "總理為Adriano Afonso Maleiane",
                "judiciary" =>
                    "最高法院、中級法院及地方法院三級制。法官由國會推薦，再經總統任命。",
                "headman" => "紐西(Filipe Nyusi)(2015年1月15日起)",
                "fa_minister" => "Verónica Nataniel Macamo Dlhovo",
                "major_political_parties" =>
                    "莫三比克解放陣線（Frelimo）是執政黨，主要在野黨是莫三比克民族抵抗運動（Renamo）以及莫三比克民主運動黨（MDM）。",
                "financial_incoming" => "財政收入43億美元 (2021)",
                "export_value" => "55.79億美元 (2021)",
                "import_value" => "78.37億美元 (2021)",
                "export_item" => "鋁、蝦、腰果、棉花、糖柑橘、木材及電力",
                "import_item" =>
                    "機械工具、車輛、燃料、化工原料、金屬品、食品、紡織等",
                "main_export_countries" => "南非、荷蘭、印度、中國、新加坡",
                "main_import_countries" =>
                    "南非、新加坡、中國大陸、阿拉伯聯合大公國、印度",
                "export_to" => "939萬美元(2021年)",
                "import_from" => "272萬美元(2021年)",
                "foreign_relationship" =>
                    "1975年9月16日加入聯合國。與世界各國多有外交關係，現為聯合國(UN)、非洲聯盟（AU）、南部非洲發展共同體（SADC）、國際原子能總署（IAEA）、世界貿易組織(WTO)、世界衛生組織(WHO)等數十個國際組織會員國。因政治穩定，經濟發展良好，在南非地區頗為活躍，與鄰國馬拉威、辛巴威、坦尚尼亞、史瓦帝尼王國關係良好。莫國與中國大陸關係密切，中國大陸在莫國有大量投資，中國大陸國家主席胡錦濤曾於2007年2月訪問莫國並簽署多項協定。莫國雖為葡語系國家組織（CPLP）會員，亦加入大英國協為會員。另英國為因應脫離歐盟之經濟衝擊，於2019年與「南部非洲關稅同盟」及莫三比克簽署經濟夥伴協定，該協定於2021年1月1日生效。",
                "foreign_policy" =>
                    "和世界各國多有外交關係,現為UN、AU、SADC、IAEA、WTO、WHO等數十個國際組織會員國。",
                "time_range" => "較臺灣慢6小時",
                "resident" =>
                    "我國於莫三比克並無設立機構，莫國事務係由我駐史瓦帝尼王國大使館兼轄。",
                "national_flag" =>
                    "國旗是一面由紅色等腰三角形和黑、黃、綠三橫條 （間以白幼橫條）組成的旗幟。三角形上有黃星、自動步槍（AK-47）、鋤頭和書本。根據《莫三比克共和國憲法》第193條，顏色和圖案的意義分別為：紅色—數百年來對殖民主義的抵抗、武裝民族解放鬥爭和對主權的捍衛；綠色—大地的豐饒；黑色—非洲大陸；黃色—國家的礦藏；白色—莫三比克人民鬥爭的正義性質與和平星—莫三比克人民的社會主義和國際主義精神自動步槍—防衛和警惕書本—教育的重要性鋤頭—農業",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            158 => [
                "name" => "菲律賓共和國",
                "name_in_en" => "Republic of the Philippines",
                "short_name" => "菲律賓",
                "short_name_in_en" => "Philippines",
                "capital" =>
                    "國家首都行政區(National Capital Region, NCR)，又稱大馬尼拉都會區(Metro Manila)，由包括馬尼拉市在內的17個城市所組成。",
                "capital_in_en" => "Manila",
                "national_day" => "6月 12日",
                "join_un_day" => "1945年10月24日",
                "area_size" => "32萬8,000平方公里",
                "geographic" =>
                    "東濱太平洋，西臨南中國海，南接西里貝斯海與蘇祿海，北為巴士海峽，由7,107島嶼組成，分為呂宋(Luzon)、未獅耶(Visayas)及民答那峨(Mindanao)三大群島，最北島嶼距台灣南端僅52.8公里。",
                "religion" => "天主教(80％)",
                "bilaterial_relations" => null,
                "main_bounds" => "披索",
                "exchange_rate" =>
                    "目前 1美元約兌55菲律賓披索（peso），惟須視匯率浮動情況而定，詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/44f8c9eb-c072-41ee-8a21-26c5a82bc96b.gif",
                "is_diplomatic" => 0,
                "language" => "英語及菲語(Tagalog)",
                "main_media" =>
                    '馬尼拉時報（The Manila Times）、馬尼拉公報（Manila Bulletin）、馬尼拉標準報（Manila Standard）、人民日報（People\'s Journal）、 菲律賓每日詢問者報（Philippine Daily Inquirer）、菲律賓星報（The Philippine Star）、商業世界(BusinessWorld)、商業鏡報（BusinessMirror)、自由商業報（Malaya Business Insight）、每日論壇報(Daily Tribune)等。',
                "population" => "逾1.1億人（2022年第四季）",
                "voltage" => "220 V",
                "time_difference" => "+0:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/6eb276a6-501d-4a85-b14a-bb05e7937a42.JPG",
                "political_system" => "總統制、三權分立",
                "history_intro" =>
                    "菲國人種基本上以馬來人為主，約係於西元前500年到1500年之間陸續移民到菲國，1521年葡萄牙人麥哲倫率西班牙遠征隊在菲律賓宿霧登陸後，西班牙國王腓力二世即以其本人名字命名為菲律賓。1565年西班牙人進據，並於1571年在菲建立殖民政府，開始其歷時330年之殖民統治。1890年代菲律賓人反西情緒高漲，迨1898年美西戰爭爆發，西班牙戰敗簽署「巴黎和約」，菲律賓改由美國統治近50年。第二次世界大戰爆發，日本佔領菲律賓。1945年光復，1946年7月4日菲律賓正式獨立，實施美國式民主憲政。",
                "parliament" =>
                    "由參眾兩院組成，參院24席，任期6年，得連選連任1次，參議員由全國普選，每3年改選半數。眾院312席，任期3年，得連任2次，其中251席由各選區選出，其餘61席則為政黨代表。",
                "cabinet" => "行政權屬於總統，內閣各部會首長由總統任命",
                "judiciary" =>
                    "由最高法院及全國各行政區地方法庭。另設有上訴法庭及特別法庭。",
                "headman" => "小馬可仕",
                "fa_minister" => "Enrique Manalo",
                "major_political_parties" =>
                    "菲律賓聯邦黨(Partido Federal ng Pilipinas)為執政黨，另有菲律賓民主黨─人民力量(PDP-LABAN)、自由黨(LP)、人民力量黨(lAKAS-UNCD)、人民改革聯盟(NPC)及菲國人民黨(PMP)等，菲國政黨僅係利益結合之代名詞，個人色彩濃厚且缺乏長期穩定存在之特性。",
                "financial_incoming" =>
                    "財政政策方面，受新冠肺炎疫情影響，2022年11月政府外債達13.64兆披索(折合約2,450億美元)，創近10年新高。儘管菲國預算赤字及政府債務比例攀升，國際信用評級機構仍然維持菲律賓2020年之主權債信評等，主因受疫情影響，其他國家亦面臨更高債務比率、甚至更高預算赤字之情況。標普全球評級(S&amp;P Global Ratings)於2022年5月維持菲律賓BBB+評級且展望穏定；穆迪投資評級(Moody’s Investors Service)於2022年3月肯定菲國主權債信Baa2評級；惠譽國際評級(Fitch Ratings)2022年4月確認菲律賓主權債信評級為BBB且前景穩定。",
                "export_value" => 'US$ 646億4,468萬 (2021年)',
                "import_value" => 'US$1,177億7,930萬 (2021年)',
                "export_item" =>
                    "電子產品、其他製成品、飛機船舶使用之點火線組、精銅之陰極及陰極截面、機械及運輸設備、金屬零件、化學品、其他礦產品、黃金，以及椰子油",
                "import_item" =>
                    "電子產品、礦物燃料、潤滑劑及相關材料、運輸設備、工業機械及設備、鋼鐵、其他食品及牲畜、通訊設備及電機、雜項製品，以及穀物及穀物製品",
                "main_export_countries" =>
                    "日本、美國、中國、香港、新加坡、泰國、韓國、德國、我國及荷蘭",
                "main_import_countries" =>
                    "中國、日本、韓國、美國、泰國、印尼、新加坡、我國、馬來西亞及香港",
                "export_to" => 'US$ 57億6,231萬 (2021年)',
                "import_from" => 'US$ 25億2,545萬 (2021年)',
                "foreign_relationship" =>
                    "菲律賓為東協成員國之一，與世界各國均維持正常緊密之交往，並參與聯合國等各國際組織。",
                "foreign_policy" =>
                    "菲國目前追求獨立外交政策，與各大國平行交往。",
                "time_range" => "與台灣無時差",
                "resident" => "駐菲律賓台北經濟文化辦事處",
                "national_flag" =>
                    "菲律賓國旗靠旗杆的一邊是一個等邊三角形，代表菲律賓人民對和平與安寧的盼望，三角形每個角都有一顆星星，總數為三個，代表菲律賓的三個島組：呂宋、未獅耶和民答那峨島。 而三角形的中央就有一個太陽，代表自由的光芒已普照整個菲律賓。 三角形的右側就是藍紅兩色，藍色代表菲律賓人民忠誠、愛國的精神，紅色代表菲律賓人民勇往直前的民族氣概。",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            159 => [
                "name" => "萬那杜共和國",
                "name_in_en" => "Republic of Vanuatu",
                "short_name" => "萬那杜",
                "short_name_in_en" => "Vanuatu",
                "capital" => "維拉港",
                "capital_in_en" => "Port Vila",
                "national_day" => "7月30日為獨立紀念日",
                "join_un_day" => "1981年9月15日",
                "area_size" =>
                    "陸地面積12,189平方公里，海洋專屬經濟區面積68萬平方公里。共有82個島嶼。",
                "geographic" =>
                    "位於南緯16度, 東經167度，太平洋西南部，屬美拉尼西亞群島，由82個島嶼（其中68個有人居住）組成。最大的桑托島（又稱聖埃斯皮里圖島）面積3947平方公里。屬熱帶海洋性氣候。",
                "religion" => "長老教會、聖公會、羅馬天主教",
                "bilaterial_relations" => null,
                "main_bounds" => "Vatu(Vt)",
                "exchange_rate" =>
                    "一美元約兌118元 萬那杜幣(Vatu)，惟須視匯率浮動情況而定。詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢」",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/7cfec683-6679-416d-9d92-a98c7a449a1a.gif",
                "is_diplomatic" => 0,
                "language" => "萬那杜語（Bislama），英、法語亦同為官方語文。",
                "main_media" =>
                    "主要報刊有：“每日郵報”（Daily Post），私營，週一至週六用英文出版，發行量約3000-5000份。“獨立報”（Independent），私營，每週六用英文，法文，比斯拉馬文及中文混編出版。萬那杜廣播電視總公司為官方新聞機構。",
                "population" => "301,695人 (2021年7月估計)",
                "voltage" => "220-240V",
                "time_difference" => "+3:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/f552e0b8-8be0-48e7-a8dc-d11cef1b7598.JPG",
                "political_system" => "民主共和國",
                "history_intro" =>
                    "數千年前萬那杜人即在此居住。 1606年被西班牙探險家發現。 1768年法國人到此。 1774年英國庫克船長到此並將該地命名為“新赫布里底”。 1906年10月，英法簽署了共管公約，該地淪為英法共管殖民地。 1963年原住民成立了第一個政黨──鄉村黨，要求收回土地和實現獨立。 1978年1月實行內部自治。 1980年7月30日宣布獨立。",
                "parliament" =>
                    "一院制、共52席，自全國18個選區(含數個複席選區)直接選舉產生，任期4年。",
                "cabinet" =>
                    "內閣又稱部長會議。現任總理須梅爾·卡爾薩考（Shmael Kalsakau）內閣成員包括：副總理兼土地部長薩托基爾曼（Sato Kilman），外交部長喬藤納帕特（Jotham Napat ），其餘有內政部長、財政部長，衛生部長，旅遊貿易部長，教育部長，農業部長，氣候變遷部長，青年暨體育部長，司法部長，基礎建設部長。",
                "judiciary" =>
                    "設上訴法院、最高法院、地方法院、島嶼法院。首席大法官係由總統諮詢總理及反對黨領袖意見後任命；現任首席大法官為盧納貝克（Vincent Lunabek、2001年迄今）。檢察總長係由總統依據司法人事委員會建議任命，現任檢察總長為婁門（Arnold Kiel Loughman、2016年迄今）。",
                "headman" => "總統 Nikenike VUROBARAVU",
                "fa_minister" => "Jotham Napat",
                "major_political_parties" =>
                    '溫和黨聯盟(Union of Moderate Parties)、萬那阿庫黨(Vanua\'aku Pati, 我的土地黨)、農村發展黨 (Rural Development Party)、土地與正義黨 (Land and Justice Party)、統一改革運動(Reunification Movement for Change)、萬那杜領導人黨 (Leaders Party of Vanuatu)、伊奧科集團 (Iauko Group)、國家統一黨(National United Party)、人民進步黨(People\'s Progressive Party )、萬那杜國家發展黨等。',
                "financial_incoming" =>
                    "2019年萬那杜歲入編列3.61億美元，支出約2.97億美元。",
                "export_value" => "0.58億美元(2019年)",
                "import_value" => "進口4億美元(2019年)",
                "export_item" => "椰乾　牛肉　可可　木材　卡瓦胡椒　咖啡",
                "import_item" => "機械　食品　燃料",
                "main_export_countries" =>
                    "歐盟、日本、澳洲、紐西蘭、巴布亞紐幾內亞等國(2019年)。",
                "main_import_countries" =>
                    "日本、澳洲、新加坡、德國、紐西蘭等國",
                "export_to" => "7,008,340美元(2022年)",
                "import_from" => "1,847,015美元(2022年)",
                "foreign_relationship" =>
                    "萬那杜與紐西蘭、澳大利亞、美國、日本與歐盟等密切合作，為主要貿易對象及發展合作夥伴。",
                "foreign_policy" =>
                    "萬那杜對外關係注重多元化，與100餘國建立外交關係，積極參與國際事務，奉行維護民族獨立之不結盟政策。萬那杜重視與美拉尼西亞先鋒集團(MSG)成員(斐濟、索羅門群島、巴布亞紐幾內亞、新喀里多尼亞Kanak之關係，該集團秘書處設於萬那杜首都維拉港。萬那杜為聯合國、不結盟組織、大英國協、法語國家共同體、太平洋島國論壇、美拉尼西亞先鋒集團、國際貨幣基金、世界銀行、亞洲開發銀行等組織成員。",
                "time_range" => "時區：UTC+11 比台灣時間早3小時",
                "resident" => "無",
                "national_flag" =>
                    "兩個相等的紅色（頂部）水平帶和一個黑色等腰三角形的綠色，由一條水平Y形狀的黑邊黃色條帶分隔開; 以三角形為中心是公豬的象牙，包圍兩個交叉的蕨葉，全部呈黃色; 紅色代表野豬和男人的血液，團結一致，綠色豐富的島嶼，黑色的萬那杜人; 反映太平洋島嶼圖案的黃色的Y形象徵著福音的光芒在島上傳播; 公豬的象牙象徵著經常作為島上挂件佩戴的繁榮; 蕨葉代表和平",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            160 => [
                "name" => "葉門共和國",
                "name_in_en" => "Republic of Yemen",
                "short_name" => "葉門",
                "short_name_in_en" => "Yemen",
                "capital" => "沙那",
                "capital_in_en" => "Sana’a",
                "national_day" => "5月22日",
                "join_un_day" => "1990年5月22日（南北葉門合併後重新申請加入）",
                "area_size" => "527,968平方公里",
                "geographic" => "阿拉伯半島西南端",
                "religion" => "伊斯蘭教",
                "bilaterial_relations" => null,
                "main_bounds" => "葉門里亞爾(Riyal，貨幣編號：YER)",
                "exchange_rate" =>
                    "1美元約兌換250.30葉門里亞爾(2023年3月8日)，詳細匯率資訊建議至臺灣銀行（https://rate.bot.com.tw/xrt）、兆豐銀行（https://www.megabank.com.tw/personal/foreign-service/forex）或OANDA（https://www1.oanda.com/currency/converter/）網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/1e4ef707-3b9d-4cc3-a342-ee4d4d0fe690.GIF",
                "is_diplomatic" => 0,
                "language" => "阿拉伯語",
                "main_media" =>
                    "Yemen Times、Yemen Online、Al-Ayyam、Al-Jumhuryah、Al-ray News、Al-Soura",
                "population" => "2,850萬人(2018年)",
                "voltage" => "110V&amp;220V",
                "time_difference" => "-5:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/46977019-79a2-4039-929f-a405a97afe33.jpg",
                "political_system" =>
                    "民主政體，總統由人民直選產生，惟自2014年9月爆發內戰後尚未曾辦理選舉。",
                "history_intro" =>
                    "1.南北葉門在歷史上本是一個民族，自兩國分別獨立後，均希望能合併為一國，兩國政府曾多次洽商合併問題。1972年南北葉門兩國元首在開羅達成協議，並在11月發佈兩國統一聯合公報。2.1979年3月北葉門總統薩利赫與南葉門主席伊斯曼在科威特正式會晤，達成實現統一的「科威特協議」並發表聯合公報。3.1990年北葉門總統與沙烏地國王舉行會談後，沙王宣佈支持南北葉門統一，同年5月22日宣佈南北葉門統一，成立葉門共和國",
                "parliament" =>
                    "2001年修憲成為兩院制，上院(Majlis Al-Shura)111席，由總統任命；下院(Majlis Al-Nuwab)301席，選舉產生，任期6年。",
                "cabinet" =>
                    "1.由總統任命， 主要由總理、副總理及各部長組成。2.現任總理Maeen Abdulmalik Saeed於2018年10月18日就職。",
                "judiciary" =>
                    "以伊斯蘭法為法源，司法部、最高法院及地方各級法院。",
                "headman" => "哈迪(Abdrabbuh Mansur Hadi)",
                "fa_minister" => "穆罕默德‧哈德拉米（Mohammad Al-Hadhrami）",
                "major_political_parties" => "人民會議黨、改革黨及社會黨",
                "financial_incoming" =>
                    "2017年歲入約28億2,100 美元，歲出44億5,800美元",
                "export_value" => "3億8,450萬美元(2017年)",
                "import_value" => "40億7,900萬美元(2017年)",
                "export_item" => "原油、咖啡、乾燥及醃製魚品、液態天然氣",
                "import_item" => "食物及活體動物、機械及設備、化學品",
                "main_export_countries" =>
                    "埃及、泰國、白俄羅斯、阿曼、阿拉伯聯合大公國",
                "main_import_countries" =>
                    "阿拉伯聯合大公國、中國大陸、土耳其、巴西、沙烏地阿拉伯",
                "export_to" => "約1,677萬美元（2019年）",
                "import_from" => "約1,076萬美元（2019年）",
                "foreign_relationship" =>
                    "葉門與沙烏地阿拉伯關係密切，惟一度於1990年海灣危機期間因支持伊拉克，與阿拉伯海灣國家交惡。戰後積極修好，與沙國於1995年2月25日簽署備忘錄奠定關係正常之基礎，並於2000年6月12日簽署畫界協定。",
                "foreign_policy" =>
                    "葉門為聯合國、阿拉伯聯盟及不結盟國家組織之會員國，在國際間標榜不結盟及中立主義、不干涉內政、和平解決衝突。",
                "time_range" => "較臺灣慢5小時",
                "resident" => "無駐館，相關業務由駐沙烏地阿拉伯代表處兼轄。",
                "national_flag" =>
                    "國旗由紅（代表殉道者的血和統一）、白（代表光明未來）、黑（代表黑暗的過去）三色橫條組成",
                "area_name" => "亞西地區",
                "area_name_in_en" => "West Asia",
            ],
            161 => [
                "name" => "葛摩聯盟",
                "name_in_en" => "Union of the Comoros",
                "short_name" => "葛摩",
                "short_name_in_en" => "Comoros",
                "capital" => "莫洛尼(Moroni)",
                "capital_in_en" => "莫洛尼(Moroni)",
                "national_day" => "7月 6日",
                "join_un_day" => "1975年11月12日",
                "area_size" => "1,862平方公里",
                "geographic" =>
                    "位於莫三比克東北外海及馬達加斯加西北向之東非外海，主要由大葛摩(Grande Comore)，安樹昂 (Anjouan)及莫愛利(Mohéli)三座火山島組成。",
                "religion" => "國教為遜尼派伊斯蘭教(99%)",
                "bilaterial_relations" => null,
                "main_bounds" => "葛摩法郎(Comoros francs, KMF)",
                "exchange_rate" => "US1＄≒470KMF(2022/06)",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/8510b3c7-7968-4aac-b6fb-7de93ca735a6.GIF",
                "is_diplomatic" => 0,
                "language" => "葛摩語、阿拉伯語、法語",
                "main_media" =>
                    'Al-Watwan、La Gazette des Comores、L\'Archipel',
                "population" => "876,437 (2022 est.)",
                "voltage" => "220 V",
                "time_difference" => "-5:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/a44dad0a-de2e-4db9-b6d5-49cb18d16779.jpg",
                "political_system" => "聯邦共和制",
                "history_intro" =>
                    "葛摩群島由大葛摩（Grande Comore）、安樹昂（Anjouan）、馬約特（Mayotte）及莫愛利（Mohéli）四島嶼組成，在19世紀成為法屬殖民地。1974年及1976年葛摩群島居民就獨立問題舉行公民投票，多數選民贊成獨立，惟馬約特島反對獨立，堅持該島仍歸屬法國。1975年7月6日葛摩地方議會通過決議獨立，推舉議長阿布達拉（Ahmed Abdallah）為國家元首，結束法國的統治。原隸屬葛國之馬約特島於2009年公民投票同意脫離並加入法國，並於2011年3月31日正式成為法國海外行省。1990年3月舉行首次民主選舉，卓哈（Said M. Djohar）獲選為總統。2019年3月大選，阿蘇馬尼(Azali Assoumani)贏得連任。",
                "parliament" =>
                    "一院制，共有33個席位，其中24席由全國人民直選產生，其餘15席則由 3島之議會間接選舉產生，任期5年。",
                "cabinet" => "總統任期5年兼任政府首長，並指派閣員。",
                "judiciary" =>
                    "設有憲法法院、最高法院、高等法院(Court of Appeals)、地方法院(Island Village Courts)等司法單位。",
                "headman" => "阿蘇馬尼(Azali Assoumani)",
                "fa_minister" => "多葛馬 (Dhoihir Dhoulkamal)",
                "major_political_parties" =>
                    "葛摩維新黨（Convention pour le Renouveau des Comores, CRC）、民主暨進步運動（Mouvement pour les Comores）、島嶼自治陣線(Camp of the Autonomous Islands (Camp des Îles Autonomes)等。",
                "financial_incoming" =>
                    "2019年政府財政收入1.65億美元，支出1.19億美元",
                "export_value" => "0.6887億美元(2020)",
                "import_value" => "3.43億美元(2020)",
                "export_item" => "香草、伊蘭伊蘭香水原料、丁香",
                "import_item" =>
                    "米等食品、消費性日常用品、石化產品、水泥、建築材料、運輸設備",
                "main_export_countries" =>
                    "法國、印度、德國、巴基斯坦、史瓦帝尼、韓國及俄羅斯",
                "main_import_countries" =>
                    "阿拉伯聯合大公國、法國、中國大陸、馬達加斯加、巴基斯坦及印度",
                "export_to" => "3萬美元(2021)",
                "import_from" => "1萬美元(2021)",
                "foreign_relationship" =>
                    "與法國關係密切，約半數葛摩人同時有法國籍；1975年獨立後積極與中國大陸維持良好關係。非洲聯盟、阿拉伯聯盟、法語圈國際組織、伊斯蘭合作組織、印度洋委員會、聯合國之會員國。",
                "foreign_policy" =>
                    "與法國積極交往，並加強與阿拉伯世界之關係。",
                "time_range" => "較台灣慢5小時",
                "resident" => "我駐南非代表處兼轄",
                "national_flag" =>
                    "葛摩國旗由一個綠色三角形、一條黃色、白色、紅色與藍色的橫條所組成，在綠色的三角形中有一個新月和四顆星，象徵了葛摩的國教為伊斯蘭教，四顆星和黃、白、紅、藍四色則代表著葛摩群島(大葛摩島、莫愛利島、安樹昂島及馬約特島)，其中馬約特島屬於法國海外領土。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            162 => [
                "name" => "葡萄牙共和國",
                "name_in_en" => "Portuguese Republic",
                "short_name" => "葡萄牙",
                "short_name_in_en" => "Portugal",
                "capital" => "里斯本",
                "capital_in_en" => "Lisbon",
                "national_day" => "6月10日",
                "join_un_day" => "1955年12月14日",
                "area_size" => "92,094.4平方公里",
                "geographic" =>
                    "葡萄牙共和國（英文Portuguese Republic、葡文República Portuguesa）位於歐洲之西南隅，與西班牙同屬伊比利半島國家，其東方及北方與西班牙接壤，兩國邊界長 1,300 公里，西臨大西洋，南隔地中海與北非相望，海岸線長 830 公里。葡國領土尚包括位於大西洋中之亞速（Açores）及馬德拉（Madeira）兩群島。",
                "religion" =>
                    "葡國民眾逾八成信奉天主教，餘為其他宗教或無宗教信仰。",
                "bilaterial_relations" => null,
                "main_bounds" => "歐元",
                "exchange_rate" =>
                    "詳細匯率資訊建議至臺灣銀行(https://rate.bot.com.tw/xrt)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/2560c1b1-9375-44ac-8804-4306814343a8.GIF",
                "is_diplomatic" => 0,
                "language" => "葡萄牙語",
                "main_media" =>
                    "主要電視台：Rádio e Televisão de Portugal (RTP)、SIC、TVI、CNN Portugal等；主要廣播電台：Rádio Observador, Rádio Renascença、Rádio Comercial、Rádio Clube Português等；主要報紙：Correio da Manhã、Expresso、Jornal de Notícias、Público及Diário de Notícias等；主要週刊：Sábado、Visão；主要電子報：Observador、葡國主流搜尋引擎(search engine)暨電子報SAPO。",
                "population" => "10,347,892人 (2021)",
                "voltage" => "220V",
                "time_difference" => "-8:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/45e1fc07-cfa9-4c8c-b48b-6311e3f9a883.jpg",
                "political_system" =>
                    "為雙首長制之民主共和國，葡萄牙總理是葡萄牙政府領導者。其政治運作之主要機構，包括總統、國會、內閣與法院四大機構。總統為國家元首，經由普選產生，任期5年，至多得連任2屆，對內閣具有提名或解散之行政權，亦具解散國會或否決國會所通過法案之權力。國會每4年選舉一次，現有230名議員。內閣由總理主持，通常係由國會最大黨黨魁擔任，部長及國務秘書（次長）等需由總理提名並經總統任命後出任，需向國會提出報告並接受質詢。各級法院之功能旨在保障民眾在憲法上的權利。各級法院依層級與功能，分為一級、二級及最高法院、行政或財稅法院、國家預算法院及憲法法院。",
                "history_intro" =>
                    "葡萄牙約在2000年前曾為羅馬帝國的成員之一，至今在葡國南部亞蘭特爵（Alentejo）地區的埃浮拉市（Évora），仍可見到羅馬列柱式神殿與浴場。西元三世紀時，葡萄牙曾被多個部族佔領居住，如塞爾特人（Celtas）與卡萊伊古人（Galaicos）等。西元八世紀時，摩爾人（Mouros）征服了大部分的伊比利亞半島，出現了較為一統的政權。葡萄牙王國始建於1139年，其統治彊界亦在1297年的阿爾卡尼塞斯條約（Tratado de Alcanizes）獲得確認，使葡萄牙成為歐洲最古老的國家之一。 葡萄牙自15世紀興起的大航海時代中扮演關鍵角色，並建立起全球歷史上第一個橫跨非洲、亞洲、大洋洲與南美洲的殖民帝國與重要的海上強權。為進一步壟斷與掌握歐洲以外地區，葡萄牙與西班牙在教皇亞歷山大六世之調解下，於1494年在西班牙卡斯提亞(Castilla)簽署了托爾德西里亞斯條約（Tratado de Tordesilhas），該條約以西經46°37’(維德角Cabo Verde附近海域）為分界線，以西歸西班牙，以東歸葡萄牙，此條分界線日後亦成為教皇子午線。葡萄牙雖係歐洲殖民歷史最久的國家，卻曾在1580年因年輕國王Sebastião死於戰場卻無子嗣，而協議交由西班牙菲利普王朝統治，後在1640年脫離西班牙統治。法國拿破崙軍隊亦曾在18世紀末入侵葡萄牙，直到1811年在英國協助下方趕走法軍。自19世紀開始，葡萄牙最重要殖民地巴西於1822年9月7日宣佈獨立後，葡萄牙國勢即快速衰落。隨著葡萄牙王室在1910年10月5日的革命被推翻後，此一歷經34個王朝統治的葡萄牙王國正式結束，開啟了葡萄牙第一共和國時代，惟之後於1933年遭軍事獨裁者薩拉撒爾(António de Oliveira Salazar)推翻，步入葡萄牙第二共和國時代，直到1974年一批由中下級軍官組成的武裝部隊運動，爆發反戰的康乃馨革命，葡萄牙才重新成為自由民主國家。",
                "parliament" =>
                    "國會每4年選舉一次，現有230名議員，主要職掌在基於政黨政治之原則及理念，對內閣所提出之政策、計畫及預算案等予以支持或反對。",
                "cabinet" =>
                    "內閣由總理主持，通常係由國會最大黨黨魁擔任，各部會部長、國務秘書（次長）等需由總理提名並經總統任命後出任，需向國會提出報告並接受質詢。",
                "judiciary" =>
                    "各級法院之功能旨在保障民眾在憲法上的權利。各級法院依層級與功能，計分為一級、二級及最高法院、行政或財稅法院、國家預算法院及憲法法院。",
                "headman" =>
                    "總統為國家元首，經由普選產生，任期5年，至多得連任2屆，對內閣具有提名或解散之行政權，其亦具解散國會或否決國會所通過法案之權力。",
                "fa_minister" => "João Gomes Cravinho",
                "major_political_parties" =>
                    "葡萄牙於2022年1月30日舉行國會選舉，已開票之226席中，執政之社會黨(PS) 一反民調預測，意外贏得絕對多數之117席，最大在野之社會民主黨(PSD)則取得76席，上屆各取得1席之「CHEGA!」黨及「自由倡議黨」(IL)則均有顯著成長，分獲得12席及8席，而前與社會黨聯合組閣之左翼陣線(BE)及共產黨(PCP-PEV)則支持驟減，僅分獲5席及6席，另動保黨(PAN)及自由黨(Livre)均贏得1席。至幾經延宕之歐洲及海外選票終於葡政府同年3月26日公報中正式公布選舉最終結果，其中，社會黨席次因囊括歐洲海外票4席中之3席，爰總席次增至120席，可謂完全執政；至社會民主黨則減少海外1席，共計77席。",
                "financial_incoming" => "逆差190億歐元 (2021)",
                "export_value" => "635億歐元 (2021)",
                "import_value" => "825億歐元 (2021)",
                "export_item" =>
                    "原油以外之石油及油類；機動車輛所用之零配件；小客車及其他車輛；鞋靴；捲筒或平板之未塗布紙及紙板；新橡膠氣胎；醫藥製劑；座物及其零件；T恤衫、汗衫等針織或鉤針織者；葡萄酒；橄欖油；絕緣電線、電纜；其他家具及其零件；金屬鑄造用模箱、模座及模型等；其他塑膠板、片、薄膜等；菸葉；無線電話、電報或無線電廣播接收機；貨車；床單、桌巾、盥洗或廚房用巾；蘇打或硫酸塩化學木槳；凝聚軟木及其製品。",
                "import_item" =>
                    "小客車；石油原油；8701-8705之機動車輛零配件；醫藥製劑；石油氣及其他氣態碳氫化合物；有線電話機；石油及提自瀝青礦物之油類、廢油；航太運輸裝備；積體電路；自動資料處理機；座物及其零件；曳引車（不包括第8709節所列者）；載貨用機動車輛；乙烯之聚合物，初級狀態；聚縮醛；熱軋鐵或非合金鋼扁軋製品；新橡膠氣胎。",
                "main_export_countries" =>
                    "西班牙、法國、德國、美國、英國、義大利等(2021)",
                "main_import_countries" =>
                    "西班牙、德國、法國、荷蘭、義大利、中國等(2021)",
                "export_to" => "520,148,067美元(2021)",
                "import_from" => "203,340,329美元(2021)",
                "foreign_relationship" =>
                    "葡萄牙係聯合國、歐盟、北大西洋公約組織等會員國。另在巴西、莫三比克、安哥拉、維德角、幾內亞比索、聖多美普林西比、東帝汶等葡萄牙語國家組成之「葡萄牙語系國家組織」(CPLP)扮演主要角色。",
                "foreign_policy" => "與歐盟立場一致",
                "time_range" =>
                    "葡萄牙時間 +8 小時=台灣時間（每年3月最後一個星期日至10月最後一個星期日為夏令日光節約時間，時差為 7 小時）。",
                "resident" =>
                    "駐葡萄牙代表處(台北經濟文化中心) Taipei Economic and Cultural Center",
                "national_flag" =>
                    "葡萄牙國旗圖案為雙直條型，靠近旗桿五分之二為綠色，尾端其餘五分之三為紅色，雙條交間處飾有小型國徽（渾儀和葡萄牙盾牌）。",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            163 => [
                "name" => "蒙古國",
                "name_in_en" => "Mongolia",
                "short_name" => "蒙古",
                "short_name_in_en" => "Mongolia",
                "capital" => "烏蘭巴托",
                "capital_in_en" => "Ulaanbaatar",
                "national_day" =>
                    "12月29日（國家自由暨獨立日，National Freedom and Independence Day）",
                "join_un_day" => "1961年10月27日",
                "area_size" => "156萬5千平方公里 (約為臺灣的43倍)",
                "geographic" =>
                    "蒙古北與俄羅斯為鄰，東、南、西三面與中國接壤，蒙中兩國邊界線長達4,630公里。蒙古地形西部、北部及中部多山地，東部為丘陵及平原，南部則為戈壁乾草原。境內主要河流為色楞格河及其支流鄂爾渾河，大小湖泊3,000餘個，總面積達1.5萬餘平方公里，係全球第二大內陸國，海拔平均為1,337公尺，屬典型大陸型氣候，四季分明，惟冬季長達半年。",
                "religion" =>
                    "以藏傳佛教(喇嘛教)為主，另有伊斯蘭教、薩滿教 (崇拜自然及祖先，相信大自然的天地、日月、山川與水火皆為神靈，並奉行許多巫術、占卜等宗教儀式)，近年來基督教徒人數亦有增加。",
                "bilaterial_relations" => "{{--br /--}}",
                "main_bounds" => "圖格里克 (簡稱「蒙圖」)。",
                "exchange_rate" =>
                    "2023年3月初，美元兌圖格里克 (簡稱「蒙圖」)匯率約為1：3,500。※ 美元兌換蒙圖詳細匯率資訊建議參考蒙古中央銀行(Bank of Mongolia)網站    (https://www.mongolbank.mn/eng/dblistofficialdailyrate.aspx)。※ 美元兌換新臺幣詳細匯率資訊建議至臺灣銀行(https://rate.bot.com.tw/xrt?Lang=zh-    TW)或兆豐銀行(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/f102bf5a-a592-4568-bbea-2979765a6ddc.png",
                "is_diplomatic" => 0,
                "language" => "蒙古語",
                "main_media" =>
                    "1. 通訊社：蒙古新聞通訊社(「蒙通社」網站為montsame.mn，有蒙、英、俄、日、中等五種語文，各不同語文網站收錄的新聞不完全相同)2. 報紙：蒙文日報包括今日報、每日新聞報、民族郵報、真理報、政治評論報等；英文報紙包括UB Post (每週一、三、五出刊)、Mongol Messenger (「蒙通社」英文週報)；中文報紙有蒙古消息報 (「蒙通社」簡體中文週報)。3. 雜誌：Mining、Mongolian Economy (內容以蒙文為主，附載少數英譯文章)、Observer (英文雙月刊)。4. 電視台：蒙古國家電視台(MNB)、烏蘭巴托電視台(UBS)、第5電視台(TV 5)、第6電視台(TV 6)、第9電視台(TV 9)、第11電視台(TV 11)、第24電視台(TV 24)、Live TV、Mongol TV、Eagle News新聞台、彭博(Bloomberg)蒙語台、(民營)中央台(Central TV)等。5. 廣播電台：蒙古廣播電台(MR)、ElgenNutag(100.1)、Shine Dolgion(107.5)等。6. 網路電子新聞媒體：news.mn(蒙、英文及傳統蒙文網站)、gogo.mn (蒙、英文網站)、ikon.mn、mminfo.mn、itoim.mn、tug.mn、erennews.mn、zindaa.mn、zarig.mn、zms.mn、ublife.mn、isee.mn、shuud.mn。",
                "population" =>
                    "截至2022年，蒙古全國總人口約322萬人，首都烏蘭巴托市之人口約160萬人(約占全國總人口48%)。",
                "voltage" => "220V歐規",
                "time_difference" => "+0:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/bfe9a5bc-76da-4df4-8040-53f4ed497c1c.JPG",
                "political_system" =>
                    "蒙古自1990年代初期成為國會-總統制之憲政民主國家，國會每四年改選一次，次年舉行總統選舉，均由全民直選。2020年憲法修訂後，總統由原來任期4年，得連任一次，改為任期6年，不得連任，且需年滿50歲之公民方可參選總統。總理由國會多數黨與總統協商後向國會提名經同意後任命，總理未必為國會議員，內閣則由總理向總統提出名單，經國會同意後組閣。",
                "history_intro" =>
                    "蒙古族為草原部落之一族，成吉思汗於西元1206年建立蒙古帝國，其後子孫征服中國宋朝，建立元朝。蒙元帝國疆域廣闊，幾囊括歐亞大部分土地。帝國勢力衰微之後，蒙人退居塞外，分散於歐亞大陸各地之蒙古汗國亦逐漸被同化或衰亡，現俄羅斯及中亞多國等地仍有蒙古人後裔。蒙古於清朝時重新納入中國版圖，並自1911年至1921年間先後三度宣布獨立，嗣於1924年成立「蒙古人民共和國」。在「蒙古人民革命黨」(昔稱「蒙共」，現多簡稱為「人革黨」)執政近70年期間，蒙古嚴格實行計畫經濟並大量接受前蘇聯援助，對外交流合作對象亦多限於「經濟互助委員會」(簡稱CMEA或COMECON)會員國，與民主世界國家鮮少互動與交往。1984年8月掌權達32年之久的澤登巴爾(Y. TSEDENBAL)下臺，繼任者巴特蒙赫(J. BATMUNKH)改採較開放政策並要求進行黨內改革；前蘇共總書記戈巴契夫於1985年上臺，於翌年在海參崴宣布自蒙古撤軍。1989年底，在前蘇聯及東歐民主化骨牌效應推動下，蒙古政治發生鉅變，於1990年7月舉行第一次自由選舉，成為亞洲共產集團中第一個同步實施民主轉型與自由經濟之國家。",
                "parliament" =>
                    "蒙古採單一國會體制，國家大呼拉爾（State Great Khural）為最高立法機關，由全民直接投票產生之76名國會議員組成，每4年改選一次，得連選連任，自2012年起採單一選區制及政黨比例代表制並行，此項混合投票制度於2016年5月改為單一選區制，惟為配合2019年11月通過之憲法修正案而進行選舉法相關修訂，2020年6月之國會選舉實行多數制(majoritarian system)，小選區合併為大選區，每個選區選出複數之議員席次；選舉結果蒙古人民黨獲得62席，民主黨獲得11席，「您與我們」聯盟（由蒙古人民革命黨、公民意志-綠黨及傳統聯合黨組成)獲得1席、「正確人選」聯盟（由國家勞動黨、蒙古社會民主黨及正確禮節黨組成)獲得1席及無黨籍人士1席。嗣蒙古人民黨與蒙古人民革命黨於2021年6月總統大選前合併，人民革命黨撤銷政黨登記。目前國會設有11個常設委員會。",
                "cabinet" =>
                    "現任總理為奧允額爾登 (L. OYUN-ERDENE)，係肯特省選出之國會議員。總理領導之內閣有16個部會(ministry)、12個監管機關(regulatory agency)及23個執行機關(implementing agency)。蒙古憲法法院2022年8月15日通過決議，廢止2019年國會通過之憲法第39條關於國會議員除總理外，兼任內閣閣員不得超過4人之規定，放寬國會議員兼任內閣閣員之名額。",
                "judiciary" =>
                    "國家最高法院及憲法法院係蒙古二大司法機關，憲法法院由9名大法官組成，其產生方式係由總統、國會議長及最高法院分別提名具有法學背景之人士各3人，經由國會同意後任命，任期為6年(得連選連任)；憲法法院院長則由9名大法官互選，一任3年，並得連選連任一次。",
                "headman" =>
                    "總統胡瑞爾蘇赫 (U. KHURELSUKH) ，2021年6月25日就任。",
                "fa_minister" => "外交部長巴特其其格 (B. BATTSETSEG)",
                "major_political_parties" =>
                    "主要政黨有蒙古人民黨(MPP)、民主黨(DP)、「正確人選聯盟」（由國家勞動黨、蒙古社會民主黨及正確禮節黨組成)、公民意志-綠黨、傳統聯合黨等。",
                "financial_incoming" =>
                    "2022年之政府總歲入約15.8兆蒙圖(相當約45.1億美元)，總支出約18.2兆蒙圖(相當約52億美元)，財政赤字約1.3兆蒙圖(約3.7億美元)。資料來源：蒙古國財政部網站https://mof.gov.mn/article/entry/2022-tusuv",
                "export_value" =>
                    "2022年：125.4億美元資料來源：蒙古國統計數據庫https://www2.1212.mn/tables.aspx?tbl_id=DT_NSO_1400_001V1&amp;GH1_select_all=0&amp;GH1SingleSelect=_2&amp;YearM_select_all=0&amp;YearMSingleSelect=&amp;YearY_select_all=0&amp;YearYSingleSelect=_2022&amp;viewtype=",
                "import_value" =>
                    "2022年：87億美元資料來源：蒙古國統計數據庫https://www2.1212.mn/tables.aspx?tbl_id=DT_NSO_1400_001V1&amp;GH1_select_all=0&amp;GH1SingleSelect=_3&amp;YearM_select_all=0&amp;YearMSingleSelect=&amp;YearY_select_all=0&amp;YearYSingleSelect=_2022&amp;viewtype=table",
                "export_item" =>
                    "銅及其製品、煤、鐵、原油、鋅、金、稀土金屬等礦產品、無機化學品，以及動植物油脂、毛織品、動物毛皮等畜牧業相關產品。",
                "import_item" =>
                    "消費性電子產品、資訊科技產品、太陽能電池等光電產品、製造業及礦業生產機具設備、糧農產品、汽車、汽油等。",
                "main_export_countries" => "中國大陸、南韓、新加坡",
                "main_import_countries" => "中國大陸 、俄羅斯、日本",
                "export_to" =>
                    "依據國國經濟部國貿局統計，2022年蒙古是台灣第152大貿易夥伴，臺蒙貿易總額830萬美元，較2021年之2,260萬美元，減少63.3％。2022年我國對蒙古出口金額約720萬美元。我國出口蒙古之主要產品包括鍋爐、機器、機械用具及其零件；電機與設備及其零件；錄放音機；電視、錄影機及上述各物之零組件；其他製成紡織品；組合品；舊衣著及舊紡織品；光學、照相、電影、計量、檢查、精密、內科或外科儀器及器具；上述物品之零組件；橡膠及其製品；醫藥品；家具；寢具、軟墊及類似充填家具；燈具及照明配件；照明標誌類產品；組合式建築物；穀類、粉、澱粉或奶之調製食品；糕餅類食品；基本金屬製工具、器具及其零件。",
                "import_from" =>
                    "2022年我國自蒙古進口金額約110萬美元。我國自蒙古進口之主要產品包括銅與銅製品、動植物油品、針/紡織品與動物皮革等畜牧業相關產品，以及其他基本金屬與貴金屬相關製品。",
                "foreign_relationship" =>
                    "蒙古位居俄羅斯、中國之間，歷屆蒙古政府均致力與俄、「中」維持友好、合作關係，並加強與「第三鄰國」開展關係。時任蒙古總理U. KHURELSUKH於2017年12月初就蒙古外交政策向國會報告時即強調，蒙古重視與俄羅斯及中國二個鄰國的關係，並強調擴大與該二國在各領域合作之重要性，而蒙古亦重視與美國、日本、歐盟、印度、韓國、土耳其與澳大利亞等「第三鄰國」之持續擴展合作。截至2021年2月底，蒙古已與193個聯合國成員國建立正式外交關係；此外，已有30個國家(含我國)及歐盟在蒙古設立使領館或代表處。",
                "foreign_policy" =>
                    "目前蒙古外交政策重點為 (一)與俄羅斯、中國保持傳統友好關係，並建立戰略夥伴關係；三國於2016年6月簽署「建設『中』蒙俄經濟走廊規劃綱要」，深化在基礎建設、口岸關務、貿易投資、能源環保、農業、教育人文及醫療等諸多領域之交流合作。(二)積極加強與美國、日本、韓國、歐盟、印度、土耳其及澳大利亞等所謂「第三鄰國」之友好合作關係。(三)以聯合國為平臺與各會員國建立正式外交關係，以及深化雙邊關係，並積極參與國際及地區多邊外交活動。",
                "time_range" =>
                    "除蒙古西北部之烏布蘇、科布多及巴彥烏爾蓋三省(比台灣慢一個小時)之外，其他省區及烏蘭巴托市與台北無時差。",
                "resident" => "駐烏蘭巴托台北貿易經濟代表處（駐蒙古代表處）",
                "national_flag" =>
                    "蒙古國旗由兩塊紅色及一塊藍色作為背景，接近旗桿處的紅色部分有一個黃色的國徽「索永布」(Soyombo)標誌，其中的火焰圖案象徵「吉祥與興旺的種子」，三條火舌代表過去、現在與未來，而太陽與月亮則是蒙古傳統信仰的象徵物。火、日、月三者結合意指國家的昌盛，中央的太極圖象徵國家的和諧，下方的兩個三角形等同於箭，表示以武力捍衛家園，太極圖上下方的兩條長方形有堅持正義和忠實之意，左右兩方的長方形代表城牆，傳達全民團結之力比城垣更加堅固的意念。此外，背景的紅色代表進步與繁榮，藍色則蘊涵「永恆的藍天」之意。",
                "area_name" => "亞西地區",
                "area_name_in_en" => "West Asia",
            ],
            164 => [
                "name" => "蒙特內哥羅",
                "name_in_en" => "Montenegro",
                "short_name" => "蒙特內哥羅",
                "short_name_in_en" => "Montenegro",
                "capital" => "波德里查",
                "capital_in_en" => "Podgorica",
                "national_day" => "7月 13日",
                "join_un_day" => "2006年6月28日",
                "area_size" => "13,812平方公里",
                "geographic" =>
                    "蒙特內哥羅位居東南歐，西與波士尼亞與赫塞哥維納及克羅埃西亞接壤，東鄰塞爾維亞與科索沃，南接阿爾巴尼亞，而西南則濱亞得里亞海，海岸線共283公里。",
                "religion" => "東正教",
                "bilaterial_relations" => null,
                "main_bounds" => "歐元",
                "exchange_rate" =>
                    "使用歐元，「詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。」",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/ce330bab-4362-4b68-aedb-00a36f09eb80.GIF",
                "is_diplomatic" => 0,
                "language" => "蒙特內哥羅語（Montenegrin）、塞爾維亞語",
                "main_media" =>
                    "「每日新聞報」(Vijesti online)、「觀察」(Monitor)週報",
                "population" => "62.2萬（2019預估值）",
                "voltage" => "220V",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/37e6cfdf-1f05-4969-a2c0-6375b105ce69.jpg",
                "political_system" => "議會民主制",
                "history_intro" =>
                    "蒙特內哥羅15世紀時為塞爾維亞境內之一公國。 第一次世界大戰後，蒙特內哥羅成為塞爾維亞/克羅埃西亞/斯洛維尼亞王國之一部分。 1945年11月29日南斯拉夫人民聯合共和國成立，1963年更名為南斯拉夫社會主義聯邦共和國，該共和國由塞爾維亞（Serbia）、蒙特內哥羅（Montenegro）、斯洛維尼亞（Slovenia）、克羅埃西亞（Croatia）、馬其頓（Macedonia）、波士尼亞與赫塞哥維納（Bosnia ＆ Herzegovina）等6個共和邦以及科索沃（Kosovo）、弗依弗丁納（Vojvodina）兩自治省組成。 1991年6月，斯洛維尼亞和克羅埃西亞宣布獨立引發內戰，歷時3年半之戰亂在1995年達頓協定（Dayton Peace Accord）簽署後結束。 自1991年6月內戰爆發後，南斯拉夫境內克、斯、馬、波赫等4共和邦陸續宣告獨立，塞、蒙兩共和邦遂於1992年4月27日另組南斯拉夫聯邦共和國（The Federal Republic of Yugoslavia）。2003年2月4日南斯拉夫聯邦議會通過「塞爾維亞與蒙特內哥羅」憲法，正式取代原南斯拉夫憲法的法律地位，並於次（3）月正式對外更改國名為「塞爾維亞與蒙特內哥羅」。2006年5月蒙國根據塞爾維亞與蒙特內哥羅憲法，舉行公民投票，通過蒙特內哥羅獨立，蒙國嗣於同年6月正式獨立並申請加入聯合國，塞爾維亞則繼承原塞爾維亞與蒙特內哥羅在聯合國之會籍。",
                "parliament" => "採一院制，共81席，任期4年",
                "cabinet" =>
                    "總理為最高行政首長，由總統提名，經國會同意後任命。現任總理Dritan Abazović於2022年4月28日就任。",
                "judiciary" =>
                    "憲法法院：五名法官組成，任期9年。最高法院：法官為終身職。",
                "headman" =>
                    "總統為國家元首，任期5年，全民普選產生。現任總統Milo Djukanović於2018年總統選舉中勝選，於5月20日就職。",
                "fa_minister" => "Ranko Krivokapić",
                "major_political_parties" =>
                    "社會主義者民主黨（Democratic Party of Socialists, DPS）、蒙特內哥羅未來黨(For the Future of Montenegro, ZBCG)、和平國家黨(Peace is our Nation, MNN)、公民聯合改革行動(Civic Movement United Reform Action, URA)、蒙特內哥羅社會民主黨（Social Democrats of Montenegro, SD）、社會民主黨(Social Democratic Party,SDP)、阿爾巴尼亞黨（Albania List, AL）及阿爾巴尼亞聯盟(Albanian Coalition, AK)等。",
                "financial_incoming" =>
                    "由於2021年夏季觀光業復甦，蒙特內哥羅財政收益較上一年提高，根據蒙特內哥羅政府公布資訊，截至2021年9月止，財政赤字降低到GDP1.4%。然而同期，蒙國外債達到GDP74.49%，國內公債達GDP8.5%。",
                "export_value" => "4.37億歐元(2021)",
                "import_value" => "25億歐元(2021)",
                "export_item" =>
                    "金屬、鋁、食品飲料、廢鐵、酒、鋼筋、礦油、工業機械、蔬菜水果",
                "import_item" =>
                    "石油、車輛、汽車零組件、藥品、食品飲料、化學產品、金屬製品",
                "main_export_countries" => "塞爾維亞、瑞士、波-赫",
                "main_import_countries" =>
                    "塞爾維亞、中國、德國、義大利、波-赫、希臘",
                "export_to" => "828.78萬美元（2021年）",
                "import_from" => "3.25萬美元（2021年）",
                "foreign_relationship" => null,
                "foreign_policy" =>
                    "前塞蒙邦聯自2003年成立後即致力於重修與國際社會之關係，並致力於取得歐盟之支持。歐盟已於2007年10月與蒙國簽署「穩定與聯合協定」（Stabilization and Association Agreement, SAA）。 蒙國於2008年12月在芬蘭首都赫爾辛基簽署「亞德里亞憲章」（Adriatic Charter），成為北約（NATO）候選國，並於2017年6月成為會員國。 2008年12月蒙國向歐盟遞交EU候選國申請書，歐盟於2010年12月同意蒙國正式成為候選國地位。 2009年12月歐盟提供蒙國進入申根國家免簽證待遇。",
                "time_range" =>
                    "夏季日光節約時間(4月至10月)較台灣慢6小時、其他季節慢7小時。",
                "resident" => "無（由駐匈牙利代表處兼轄）",
                "national_flag" => null,
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            165 => [
                "name" => "蒲隆地共和國",
                "name_in_en" => "Republic of Burundi",
                "short_name" => "蒲隆地",
                "short_name_in_en" => "Burundi",
                "capital" => "吉特加 (Gitega)",
                "capital_in_en" => "Gitega(吉特加)",
                "national_day" => "7月1日",
                "join_un_day" => "1962年9月18日",
                "area_size" => "27,830平方公里",
                "geographic" =>
                    "位於東部非洲的小型內陸國家，其北、東、西面分別為盧安達、坦尚尼亞與剛果民主共和國所包圍，其中與剛果民主共和國的邊界有超過一半是座落在著名的坦噶尼喀湖（Lake Tanganyika）湖面上",
                "religion" =>
                    "基督教及東正教（86％）及傳統信仰、伊斯蘭教等宗教。",
                "bilaterial_relations" => null,
                "main_bounds" => "蒲隆地法郎（BIF）",
                "exchange_rate" =>
                    "美金兌換蒲隆地法郎(BIF)貨幣匯率約為1:2,077.44(2022-12月4日)詳細匯率資訊建議至相關具可信度之線上匯率網站或蒲隆地中央銀行(https://www.brb.bi/) 網站查詢",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/8df575d7-14d7-41b6-b523-8c9e57684f15.GIF",
                "is_diplomatic" => 0,
                "language" =>
                    "基隆迪語（官方語言），法語（官方語言），少部分人民使用斯瓦希里語。",
                "main_media" =>
                    "Le Renouveau官方報、Arc-en-ciel民營法語報、蒲隆地國家廣播電視台 (RTNB)。",
                "population" => "12,241,065⼈（2021）",
                "voltage" => "220 V",
                "time_difference" => "-6:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/49a94cf6-d9eb-413a-9082-3d9441c70fe5.jpg",
                "political_system" => "總統、共和制",
                "history_intro" =>
                    "17世紀以前，圖西族曾在此建立封建王國。1890年成為德國的東非領土，第一次世界大戰後由國際聯盟委託比利時管理，第二次世界大戰後聯合國將其置於託管制度下，仍由比國管理。1961年獲得自治，1962年7月1日蒲隆地獨立為君主立憲國家。1966年11月發生政變，推翻王室，改制共和。1976年巴嘉薩中校（Jean-Baptiste Bagaza）政變成功，「第二共和」成立。1987年9月卜幼亞少校（Pierre Buyoya）發動政變推翻巴嘉薩，成立「第三共和」。1992年實行多黨制。1993年6月舉行總統及國會選舉，胡圖族最大黨民主陣線主席Melchior Ndadaye當選總統，惟10月發生軍事政變，Ndadaye被害身亡，蒲隆地隨後陷入長期動盪，迄至2005年6月始順利舉行總統、國會及地方選舉，由反對黨民主保衛陣線(FDD)主席顧龍希尚(Pierre Nkurunziza)當選總統。",
                "parliament" =>
                    "兩院制，分國民議會及參議院。國民議會共121席，由人民直選，任期5年。參議院共43席，任期亦為5年。",
                "cabinet" => "總統為最高行政首長，任命內閣閣員。",
                "judiciary" =>
                    "設有最高法院、憲法法院及上訴法院。司法權獨立於立法權和行政權，由各級法院、法庭依法行使。主要司法機構包括最高法院、憲法法院、特別最高法院、抗訴法院、審計院、商業法庭、勞動法庭、省級法院，及總檢察院、地方檢察院等。最高法院和憲法法院成員由總統任命。",
                "headman" => "思達伊希米(Evariste Ndayishimiye)",
                "fa_minister" => "辛吉羅(Albert Shingiro)",
                "major_political_parties" =>
                    "蒲隆地民主陣線（Burundi Democratic Front）、國家進步聯盟（Union for National Progress）、國家民主保衛委員會（National Council for the Defense of Democracy）、民主保衛陣線（Front for the Defense of Democracy）",
                "financial_incoming" =>
                    "國內生產毛額(GDP) 26.31億美元(2019年)，收入4.81億美元(2020年)，支出8.47億美元(2020年)，外債總額5.14億美元（2020年）。",
                "export_value" => "1.54億美元（2020年）",
                "import_value" => "8.64億美元（2020年）",
                "export_item" => "咖啡、茶、糖、棉花和獸皮",
                "import_item" => "資本財、石油製品、食品",
                "main_export_countries" =>
                    "剛果民主共和國、瑞士、阿拉伯聯合大公國、比利時",
                "main_import_countries" =>
                    "印度、中國、肯亞、阿拉伯聯合⼤公國、沙烏地阿拉伯、烏干達、坦尚尼亞、尚比亞",
                "export_to" => "27,023美元（2021年）",
                "import_from" => "128,245美元（2021年）",
                "foreign_relationship" =>
                    "在與周邊國家關係上，蒲隆地支持區域穩定，於2013年2月與非洲大湖區 (les Grand Lacs)附近11個國家簽署和平與合作條約，承諾各國相互尊重領土主權完整，並放棄支持鄰國武裝勢力。 歐盟原承諾於2014年-2020年間資助蒲國4.32億歐元發展國家指標計畫，現因蒲國政治危機，已暫停經援。",
                "foreign_policy" =>
                    "奉行睦鄰友好、不干涉他國內政、不結盟及國際合作的外交政策，希望通過地區合作推動本國內部問題的解決，支持非洲經濟一體化，重視同西方國家關係，呼籲國際社會關注蒲國局勢並對蒲國提供援助。",
                "time_range" => "較臺灣慢6小時",
                "resident" =>
                    "我在該國未設處，該國事務由我駐法國台北代表處兼理。",
                "national_flag" =>
                    "綠色象徵著希望和樂觀，白色的純潔與和平，以及為獨立而鬥爭的鮮血; 盤中的三顆星代表胡圖族、特瓦族、圖西族三大民族以及民族格言中的三大元素：團結，工作，進步。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            166 => [
                "name" => "蓋亞那共和國",
                "name_in_en" => "Cooperative Republic of Guyana",
                "short_name" => "蓋亞那",
                "short_name_in_en" => "Guyana",
                "capital" => "喬治城",
                "capital_in_en" => "Georgetown",
                "national_day" => "2月 23日",
                "join_un_day" => "1966年5月26日",
                "area_size" => "約214,970平方公里",
                "geographic" =>
                    "位於南美大陸北緣，北濱大西洋，東為蘇利南，南與巴西接壤，西接委內瑞拉。",
                "religion" => "基督教、印度教、伊斯蘭教",
                "bilaterial_relations" => null,
                "main_bounds" => "蓋亞那幣 Guyanese Dollar",
                "exchange_rate" => "1美元折合約200.206蓋亞那幣(2021年12月)",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/7af89c80-c66b-4eda-88b7-2f39d90f8773.GIF",
                "is_diplomatic" => 0,
                "language" => "英語",
                "main_media" =>
                    "Demerara Waves、Guyana Chronicle、Guyana Graphic、Guyana Guardian、Guyana Infoline、Guyana Observer News、Guyana Press、The Guyana Times、Kaieteur News、The Mirror及Stabroek News等",
                "population" => "79萬140人 (2020)",
                "voltage" => "220伏特",
                "time_difference" => "-12:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/5f0b8828-6e58-4137-8b11-27707102ec0d.jpg",
                "political_system" =>
                    "共和國。責任內閣制(Republic within the Commonwealth)",
                "history_intro" =>
                    '蓋亞那地區因盛傳出產黃金，西班牙人及荷蘭人相繼來此地尋寶，荷人建立喬治城""GEORGETOWN"" (今蓋亞那首都)為其據點，嗣後因連遭西班牙人侵擾，荷人乃轉向今之蘇利南發展；17世紀，英國及法國也聞訊來此地區建立殖民地，英國一度退出，但法國大革命期間，英國趁機重回該地區逐走法人，並與荷蘭瓜分全蓋亞那地區，後來法國再奪回部份地區；直到1814及1817年，荷蘭、英國、法國分訂界約，始確認各據一方。英屬蓋亞那於1961年8月改為英屬自治領地，原定1962年8月即準備獨立，嗣因當地印裔及非裔互不相容，種族糾紛迭起，衝突不斷，故延至1966年5月26日始告獨立。國名為蓋亞那，1970年2月23日改制為共和，國號也改稱「蓋亞那合作共和國」(Cooperative Republic of Guyana)，仍為大英國協會員。蓋亞那為南美大陸唯一英語系國家。',
                "parliament" =>
                    "採一院制，設議員65席，其中40席為不分區議員，由全國民選並依比例產生，另由全國10個區(Region)中選出25席，任期5年。",
                "cabinet" =>
                    "由總統任命總理及部長合計25人組成，行使行政權，向國會負責。",
                "judiciary" =>
                    "為3級3審制，由1個高等法院、1個上訴法院及法院及數個簡易法庭組成。",
                "headman" =>
                    "總統：阿里Dr. Irfaan Ali（2020年8月上任） 總理：菲利浦斯Mark Philips（2020年8月）",
                "fa_minister" => "修陶德(Hugh Todd)，2020年8月上任",
                "major_political_parties" =>
                    "人民進步黨(PPP/C)、國家聯合夥伴黨(APNU)",
                "financial_incoming" =>
                    "財政收入：2,274億（2020年） 財政支出：3,255億（2020年）",
                "export_value" => "2.587億美元(2020年)",
                "import_value" => "2.073億美元(2020年)",
                "export_item" =>
                    "原油、糖、鉛、米、鐵、礬土、蝦、蘭姆酒、木材、黃金",
                "import_item" => "機械、紡織、化學產品、民生消費品、食品",
                "main_export_countries" =>
                    "加拿大、美國、千里達及托巴哥、牙買加、歐盟",
                "main_import_countries" => "千里達、美國、古巴、中國大陸",
                "export_to" => "477.1萬美元(2021年)",
                "import_from" => "136.8 萬美元(2021年)",
                "foreign_relationship" => "與蘇利南及委內瑞拉有邊界糾紛",
                "foreign_policy" => "加強加勒比海區域合作",
                "time_range" => "較台灣時間慢12小時。",
                "resident" => "無，由我國駐聖文森國大使館兼轄",
                "national_flag" => "綠底，其上有白邊黃及黑邊紅三角形。",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            167 => [
                "name" => "薩摩亞獨立國",
                "name_in_en" => "Independent State of Samoa",
                "short_name" => "薩摩亞",
                "short_name_in_en" => "Samoa",
                "capital" => "阿庇亞",
                "capital_in_en" => "APIA",
                "national_day" => "1月 1日",
                "join_un_day" => "1997年12月15日",
                "area_size" => "2,842 平方公里",
                "geographic" =>
                    "13 35 S, 172 20 W  位於南太平洋之薩摩亞群島西部，陸地面積2944平方公里，經濟海域12.8萬平方公里。全境包括烏波魯（Upolu）、薩瓦伊（Savaii）兩大島及8小島。",
                "religion" =>
                    "98%人口信奉基督；2017年6月薩摩亞修憲，確定薩摩亞係以「三位一體」為基礎之基督國家。",
                "bilaterial_relations" => null,
                "main_bounds" => "塔拉(Tala)",
                "exchange_rate" =>
                    "USD 1= WST 2.56; 1WST=10.86 NTD惟須視匯率浮動情況而定。詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢」。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/8de7c0ba-233f-44e8-9868-2c6e267e845f.gif",
                "is_diplomatic" => 0,
                "language" => "官方語言為薩摩亞語及英語",
                "main_media" =>
                    "主要報紙有政府週報「薩瓦利」（Savali），其薩語版主要在鄉村發行，薩語暨英語混合版在首都地區發行；另有民營日報「薩摩亞觀察家報」（Samoa Observer）及「薩摩亞新聞」（Samoa News）。主要電視臺有TV1及TV3，均為民營，播放自製新聞及文教節目、宗教節目，轉播紐西蘭電視臺節目、及中國大陸CCTV NEWS等；另有基督團體經營之EFKS-TV及VBTV。主要廣播電臺有國營2AP National Radio及民營Magik FM、Samoa FM、Power FM等；另有基督團體經營之EFKS FM及Showers of Blessing Radio。",
                "population" => "201,254 (2022年8月估計）",
                "voltage" => "220V",
                "time_difference" => "+5:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/452f6891-5ac4-411a-9b62-d6d1fe5747b7.JPG",
                "political_system" =>
                    "議會民主制。1960年制定憲法，1962年1月1日生效。",
                "history_intro" =>
                    "薩摩亞在3000年前左右已有人類定居；西元1722年荷蘭航海家發現薩摩亞。19世紀中葉英、美、德國分別佔領薩摩亞；1899年3國簽訂條約，西薩摩亞劃為德國殖民地，東薩摩亞則由美國統治。第一次世界大戰爆發後，紐西蘭對德宣戰並佔領西薩摩亞；1920年國際聯盟將西薩摩亞託交紐西蘭管理。1920至1936年間西薩摩亞發生反殖民統治之「馬烏」（MAU）運動；1954年西薩摩亞獲准自治；1962年1月1日成為第一個獨立之太平洋島國，國名為「西薩摩亞獨立國」；1963年起將6月1日訂為獨立紀念日；1997年7月國名改為「薩摩亞獨立國」。",
                "parliament" =>
                    "立法議會為一院制國會，常設51席（原49席，2013年選舉因女性當選席次未達2013年修憲後所訂至少佔總席次10%之比例而遞補一名女性，遂增為50席，2019年修憲，國會議員席次51席，女性需佔總員額10%以上），由全國42選區（35選區單席、7選區雙席）產生。1991年3月採普選制度後，凡年滿21歲之薩摩亞公民均有選舉權，惟41選區仍僅有「馬他伊」(Matai、具酋長身分者)方具被選舉權，首都選區（非純薩摩亞血統者2席）不受此限；議員任期則由3年改為5年。薩國於2021年4月9日舉行大選，51席國會席次中由現任總理Fiame Naomi Mataafa領導之F.A.S.T黨獲31席國會席位，Tuilaepa Sailele Malielegaoi領導之HRPP黨獲20席位。",
                "cabinet" =>
                    "內閣由總理、副總理及11名部長組成。總理由立法議會自議員中選出，報經元首確認後組閣。內閣採西敏寺體制，由國會議員擔任閣員(Minister)。重要部會：外交部；副總理兼海關暨稅務部；農業暨漁業部；財政部；婦女與社會發展部長暨財政部；工商業暨勞動部；司法暨法院行政部；工程暨基礎設施部；衛生部；警政暨監獄部；教育、體育暨文化部；傳播、資訊暨科技部。",
                "judiciary" =>
                    "設有最高法院、上訴法院、地方法院、及地權法院。最高法院及上訴法院審案須自紐西蘭聘法官參與。首席大法官為Satiu Simativa Perese，2020年就任，係終身職。",
                "headman" =>
                    "現任元首為圖伊馬雷阿利法諾·瓦雷托阿·蘇阿勞維二世 (Tuimaleali’ifano Va’aletoa Sualauvi II、原為副元首），2017年7月21日就任，由立法議會(Legislative Assembly)選出，任期5年。",
                "fa_minister" => '總理兼外交部長 Fiamē Naomi Mata\'afa',
                "major_political_parties" =>
                    '（1）人權保護黨（Human Rights Protection Party）：執政黨。1979年成立。1982年勝選首次執政，1988年勝選重新執政迄今。領袖為杜伊拉埃帕總理，1945年4月14日生，擁有奧克蘭大學商業碩士學位。1971至1978年任職經濟局及財政部；1978至1980年任職非加太(ACP)委員會秘書處。1981年初任人權保護黨議員，1982年起歷任經濟、交通、民航、財政等職，1991起任副總理兼財政、旅遊、貿易、商業和工業部長，1998年11月出任總理，2001年、2006年、2011年、2016年連任迄今。（2）服務薩摩亞黨（Tautua Samoa Party）：反對黨。2008年成立。領袖為埃澳·培尼亞米納·雷阿瓦賽埃塔（Aeau Peniamina Leavaise’eta）。（3）信仰統一黨（FAST Party）：反對黨，成立於2020年7月，主要成員為來自11個傳統部落的議員。領袖為菲婭梅•娜歐米•馬塔阿法（Fiame Naomi Mata\'afa）。',
                "financial_incoming" =>
                    "2020至2021財務年度，財政收入7.92億塔拉，支出6.73億塔拉，財政盈餘1.18億塔拉。截至2021年底，外債累計為10.43億塔拉，約佔GDP的46.8％。",
                "export_value" => "4,730 萬美元 (2020)",
                "import_value" => "3.35億美元 (2020)",
                "export_item" =>
                    "主要出口項目為漁產品及食品42.3%、機械及運輸設備28.3%(主為車用電線)、礦物燃料及潤滑油21.5%等。",
                "import_item" =>
                    "主要進口項目為食品及生鮮動物26.2%、製造品27.0%、機械及運輸設備21.2%、礦物燃料及潤滑油13.6%等。",
                "main_export_countries" =>
                    "主要出口對象為澳洲35.9%、美屬薩摩亞25.8%、紐西蘭12.0%、美國6.7%、台灣5.3%、日本2.9%、中國0.9%。",
                "main_import_countries" =>
                    "主要進口來源為紐西蘭26.7%、新加坡14.5%、中國大陸11.9%、澳洲10.6%、美國10.3%、斐濟7.5%。",
                "export_to" =>
                    "2021年我國與薩摩亞貿易額為2,564,411美元，其中，我國出口為2,519,417美元，進口為44,994美元。",
                "import_from" =>
                    "2021年我國與薩摩亞貿易額為2,564,411美元，其中，我國出口為2,519,417美元，進口為44,994美元。",
                "foreign_relationship" =>
                    "紐西蘭：薩摩亞之宗主國。兩國間簽有「友誼條約」；2004年起定期舉行部長級雙邊諮商。2015/16年期紐西蘭向薩摩亞提供2,570萬紐元援助，重點部門為觀光、潔淨能源、教育、獄政、衛生。紐國係薩國第1大進口來源及第3大出口對象，且為薩摩亞人第1大僑居地及第1大僑匯來源國。另依據兩國「相互支援協定」，協助薩國培訓警察及巡邏海域等。2019 年 2 月，紐西蘭及薩摩亞簽署了夥伴關係聲明，闡明紐西蘭及薩摩亞將於氣候變化、安全及促進區域繁榮的項目密切合作。澳大利亞：澳洲為薩國第一大援助國，平均每年對薩援助約4370萬澳元，佔薩所獲外援之三分之一，主要用於提高政府效能、增加就業及投資、加強執法、提高教育水準及改善醫療衛生。澳洲為薩國的第一大出口市場和第二大進口來源國。2017/18年期澳洲向薩摩亞提供3,720萬澳元援助，重點部門為教育37%、有效治理29%、基礎設施暨貿易21%、衛生8%。澳洲係薩國第4大進口來源及第1大出口對象，且為薩摩亞人第2大僑居地及第2大僑匯來源國。另依據兩國「防衛合作計畫」，澳洲協助薩國巡邏專屬經濟區及培訓警察。日本：1972年起日本向薩摩亞派遣志工，2013年在薩摩亞設立大使館，2017年派任常駐大使。日本對薩摩亞援助重點為環境保護（廢棄物處理）、氣候變遷（災害預警）、基礎設施（永續維護）、衛生暨醫療（志工及整建醫院）、教育（志工及整建學校）。2015年5月薩摩亞總理杜伊拉埃帕出席第7屆日本-太平洋島國領袖會議。2017年，薩總理杜伊拉埃帕赴日本出席日本—太平洋島國外長會議。2018年5月，薩總理杜伊拉埃帕赴日本出席第八屆日本與太平洋島國領袖會議。美國：1976年起美國向薩摩亞派遣和平工作團，1988年在薩摩亞設大使館，由美國駐紐西蘭大使兼理。1976年起美國向薩摩亞派遣和平工作團隊員。美國係薩國第5大進口來源及第4大出口對象，美屬薩摩亞則為薩國第2大出口對象，其魚罐頭廠並雇有許多薩國人士。美屬薩摩亞及美國是薩國第一及第二大出口市場。2016年2月，美國助理國務卿拉塞爾訪薩國。",
                "foreign_policy" =>
                    "薩摩亞為聯合國、英國協、太平洋島國論壇、太平洋共同體、太平洋區域環境組織、世貿組織成員。太平洋區域環境組織秘書處、聯合國糧農組織、教科文組織、及開發計畫署之太平洋地區代表處均設在阿庇亞。2011年薩摩亞與東加、吐瓦魯、庫克群島等國成立「波里尼西亞領導人集團」，旨在保護及促進波里尼西亞文化、語言、及傳統，並合作達致永續經濟發展及繁榮。2012年5月，薩國加入世界貿易組織。2013年10月，南太平洋旅遊組織第23屆部長理事會在薩摩亞首都阿皮亞召開。2014年9月，第三屆聯合國小島發展中國家國際會議在薩摩亞首都阿皮亞召開。",
                "time_range" =>
                    "時區：UTC+13比台灣時間早5小時（日光節約時間期間早6小時）",
                "resident" => "無",
                "national_flag" =>
                    "紅色，上面有一個藍色矩形，上面有五個白色的五角星代表南十字星座; 紅色代表勇氣，藍色代表自由，白色代表純潔",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            168 => [
                "name" => "薩爾瓦多共和國",
                "name_in_en" => "Republic of El Salvador",
                "short_name" => "薩爾瓦多",
                "short_name_in_en" => "El Salvador",
                "capital" => "聖薩爾瓦多",
                "capital_in_en" => "San Salvador",
                "national_day" => "9月 15日",
                "join_un_day" => "1945年",
                "area_size" => "21,041平方公里",
                "geographic" =>
                    "薩國位處中美洲北部，為中美洲面積最小的國家，西北鄰接瓜地馬拉，東北與宏都拉斯交界，西面濱臨太平洋，東南鄰近馮瑟卡灣(Golfo de Fonseca)。",
                "religion" => "天主教",
                "bilaterial_relations" => null,
                "main_bounds" => "美元",
                "exchange_rate" =>
                    "薩國自2000年12月底起更改貨幣政策為美元及薩幣雙軌制，目前已全面使用美元。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/82ce195e-9d2e-4f63-aafb-05648aee5b58.png",
                "is_diplomatic" => 0,
                "language" => "西班牙語",
                "main_media" =>
                    "全國性報紙計有五家如後：LA PRENSA GRÁFICA, EL DIARIO DE HOY, EL MUNDO, MÁS, CO LATINO。電視台共8家。涵蓋薩國全境的廣播電約有50家。",
                "population" => "約654萬人(2022年)",
                "voltage" => "110V",
                "time_difference" => "-14:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/2595f041-ef44-400c-b8fb-fae981230a31.jpg",
                "political_system" => "共和國，總統制，採三權分立",
                "history_intro" =>
                    "1525年，西班牙人開始入侵薩爾瓦多，嗣先後隸屬駐瓜地馬拉及尼加拉瓜殖民總督管轄。1821年隨其鄰邦宣告獨立，次年加入墨西哥帝國。1823年7月加入中美洲聯邦；1841年薩爾瓦多成為一獨立共和國。",
                "parliament" =>
                    "採一院制，共84席。議員直接民選，任期三年，得連選連任。",
                "cabinet" =>
                    "有內政、外交、法務暨公共安全、財政、經濟、教育、國防、勞工、農牧、衛生、公共工程、環境暨自然資源及觀光等部。",
                "judiciary" =>
                    "最高法院，由15位大法官分別組成憲法庭、民事庭及行政法庭，憲法庭庭長亦為最高法院院長。",
                "headman" =>
                    "現任總統為布格磊(Nayib Bukele)，於2019年6月1日就職，任期至2024年5月31日止。",
                "fa_minister" => "迪諾柯(Alexandra Hill Tinoco)。",
                "major_political_parties" =>
                    "國家團結聯盟黨(GANA，執政黨)、新理念黨（NI）、國家共和聯盟黨（ARENA）、馬蒂民族解放陣線黨（FMLN）、國家協調黨(PCN)及基督民主黨(PDC)。",
                "financial_incoming" => "246億3,873萬美元（2020年）",
                "export_value" => "66億2,875萬美元（2021年）",
                "import_value" => "102億4,492萬美元（2021年）",
                "export_item" =>
                    "成衣、襪類物品、塑膠包裝用品、蔗糖、衛生紙、藥品、咖啡。",
                "import_item" =>
                    "石油、醫藥品、電話及手機、液化石油氣、成衣等。",
                "main_export_countries" =>
                    "美國、中美洲、墨西哥、多明尼加、南韓",
                "main_import_countries" =>
                    "美國、中國大陸、中美洲、南韓、西班牙",
                "export_to" => "7,937萬美元(2021年)",
                "import_from" => "5,273萬美元(2021年)",
                "foreign_relationship" =>
                    "與世界大部分國家均有建立官方關係，然因薩國約三分之一人口移居美國，美薩關係向為薩政府極力經營者。",
                "foreign_policy" =>
                    "與所有國家合作，爭取外國赴薩投資，促進貿易並維護薩僑權益。近來亦積極推動優質勞動人口赴美國、中東等地短期工作。",
                "time_range" =>
                    "較國內慢14小時。例如薩國時間晚間8時，國內時間為翌日上午10時。",
                "resident" => "無，由我國駐瓜地馬拉大使館兼轄。",
                "national_flag" =>
                    "法定樣式如後：長3.25公尺，寬1.89公尺，自上而下由藍白藍三個平行的長方形組成，每帶均寬0.63公尺，可依此比例調整尺寸。另如為政府機關及軍隊懸掛之國旗，其中間白色部分須放置薩國國徽，如為個人或非政府機關如學校、公共建築等懸掛之國旗，其國徽部分可以金字底之國家格言「DIOS UNION LIBERTAD」（上帝、團結、自由）替換。",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            169 => [
                "name" => "蘇丹共和國",
                "name_in_en" => "Republic of the Sudan",
                "short_name" => "蘇丹",
                "short_name_in_en" => "Sudan",
                "capital" => "喀土穆",
                "capital_in_en" => "Khartoum",
                "national_day" => "1月 1日",
                "join_un_day" => "1956年11月12日",
                "area_size" => "約188萬平方公里",
                "geographic" =>
                    "位處東北非，東瀕紅海，與埃及、利比亞、查德、中非、衣索比亞、厄利垂亞、南蘇丹為鄰。",
                "religion" => "伊斯蘭教遜尼派、基督教、傳統信仰。",
                "bilaterial_relations" => null,
                "main_bounds" => "蘇丹鎊(Pound，貨幣編號：SDG)",
                "exchange_rate" =>
                    "1USD=593.50SDG（2023年3月9日），詳細匯率資訊建議至臺灣銀行（https://rate.bot.com.tw/xrt）、兆豐銀行（https://www.megabank.com.tw/personal/foreign-service/forex）或OANDA（https://www1.oanda.com/currency/converter/）網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/43963feb-d8b3-4d2b-b74b-e5fff4958079.GIF",
                "is_diplomatic" => 0,
                "language" => "英語及阿拉伯語。",
                "main_media" =>
                    'Al-Ra\'y al-Amm 報、Al-Ayam 日報、Khartoum Monitor民營日報、Al-Khartoum民營日報、國營蘇丹國家電視公司(SNBC)、蘇丹國家廣播台Sudan National Radio Corporation。',
                "population" => "約4,556萬人（2020年）",
                "voltage" => "220伏特",
                "time_difference" => "-6:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/300e9550-fd25-41fb-9302-1e40111f31d9.jpg",
                "political_system" => "總統制。總統由民選產生，任期5年。",
                "history_intro" =>
                    "1.1898年英埃聯軍征服蘇丹，1899年英埃在開羅簽署協定共管蘇丹，實際統治權卻操在英國手裏。1922年埃及獨立，英埃簽訂20年同盟條約，重申共管蘇丹。2. 二次大戰結束後，埃及宣布廢除英埃同盟條約，要求英國交還蘇伊士運河，並由埃及國王兼任蘇丹國王，後幾經折衝，英埃兩國同意蘇丹人民自決，1955年12月19日蘇丹國會決議建立蘇丹共和國，英埃兩國同時予以承認，1956年1月1日蘇丹正式獨立。3.1989年6月30日巴希爾（Omar Hassan Ahmed al-Bashir）將軍發動政變，並成立15人組成之革命指揮委員會（RCC）治理國事。1993年10月委員會解散，巴希爾改任總統後連任至2019年4月。 4.南、北蘇丹因種族、宗教相異及經濟、政治利益之衝突，陷入長期內戰，在聯合國調解下，南、北蘇丹於2005年1月簽訂「全面和平協定」確認南蘇丹人民擁有自治權，於2011年1月9日至15日舉行南蘇丹獨立公投，高達98％民眾要求獨立。蘇丹政府於2011年7月9日正式承認南蘇丹共和國。5.蘇丹國防部長奧夫(Mohamed Ahmed ibn Auf)於2019年4月11日發動政變，推翻巴希爾總統，另組軍事過渡委員會(MTC)，由軍方執政。6.2019年8月軍方與平民簽署權力分享協議，成立「主權委員會」共同執政。7.2021年10月25日蘇丹軍事強人布爾汗（Abdel Fattah Al-Burhan）將軍於發動軍事政變，軟禁包含總理哈姆杜克（Abdalla Hamdok）在內之內閣成員，並解散政府及宣布「全國緊急狀態」，另於同年11月11日成立「過渡主權委員會」。8.2023年4月15日蘇丹爆發瀕臨內戰的動亂，交火雙方都是蘇丹軍閥，代表政府軍的總司令布爾汗將軍是蘇丹當前實質國家元首。叛軍則是武裝準軍事團體「快速支援部隊」（RSF）指揮官達加洛（Mohamed Hamdan Daglo），號稱軍閥系統的二號人物。因達加洛不滿布爾汗計劃打散快速支援部隊編制並納編於政府軍，於是爆發蘇丹軍閥的攤牌對決。",
                "parliament" =>
                    "2019年4月蘇丹軍事過渡委員會接管政權，解散議會。",
                "cabinet" =>
                    "2019年8月成立「主權委員會」形同內閣，由6名平民及5民軍官組成。哈姆杜克(Abdalla Hamdok)被該委員會任命為總理。2021年10月軍事政變解散原主權委員會，11月改成立「過渡主權委員會」由胡笙(Osman Hussein)擔任代理總理。",
                "judiciary" =>
                    "國家最高法院(National Supreme Court)為國家最高法院，下設其他國家法院、檢察法院、公共法院、地方法院等。",
                "headman" =>
                    "無。「主權委員會」主席Abdel Fattah Al-Burhan為國家實際元首。",
                "fa_minister" => "Ali al-Sadiq Ali",
                "major_political_parties" =>
                    "國家議會黨（National Congress Party, NC）、烏瑪黨(Umma Party)、民主聯盟黨（The Democratic Unionist Party, DUP）。",
                "financial_incoming" =>
                    "預算收入：約84億美元；預算支出：約133億美元 (2017年)",
                "export_value" => "約46.7億美元 (2017年)",
                "import_value" => "約99億 (2017年)",
                "export_item" =>
                    "黃金、原油、棉花、芝麻、家畜、落花生、樹膠、糖",
                "import_item" =>
                    "糧食、機械及運輸設備、藥品、化學品、紡織品、小麥",
                "main_export_countries" =>
                    "阿拉伯聯合大公國、沙烏地阿拉伯、中國、印度、埃及",
                "main_import_countries" =>
                    "中國、阿拉伯聯合大公國、印度、沙烏地拉阿伯、俄羅斯",
                "export_to" => "約1,263萬美元 (2019年)",
                "import_from" => "約114萬美元 (2019年)",
                "foreign_relationship" =>
                    "1.1956年11月12日加入聯合國，為非洲團結組織、阿盟之會員國。2.1990年代因與國際恐怖組織往來，遭聯合國禁運制裁，國際孤立多年，直至聯合國於2001年9月解除禁運。 3.1995年6月蘇丹涉嫌派員謀刺埃及總統穆巴拉克，蘇埃兩國交惡。4.蘇丹與查德自1960年代開始彼此指控支持對方境內叛軍。查德於2006年與蘇丹斷絕外交關係，2008年3月13日雙方簽訂「互不侵犯協定」（Non-aggression Agreement）以終止邊界衝突，但2008年5月11日蘇丹因達弗（Darfur）反叛軍作亂，又與查德斷絕外交關係，同年11月再復交，兩國關係至2010年查德總統Idriss Deby Itno訪蘇後始大幅改善。 5.2009年3月國際刑事法庭以蘇丹總統巴希爾觸犯戰爭罪、違反人道、謀殺、強制遷徙等罪狀發出拘票，為國際刑事法庭自2002年成立以來，拘提層級最高之官員",
                "foreign_policy" =>
                    "在寡頭統治及內戰未歇下，為求發展，積極向西方國家示好，爭取美國好感。巴希爾政權倒台後，新政權盼自美國恐怖主義名單國家中除名，以改善國內經濟。",
                "time_range" => "較台灣慢6小時",
                "resident" => "駐沙烏地阿拉伯代表處",
                "national_flag" =>
                    "由綠色三角形和紅、白、黑三條橫條組成的泛阿拉伯色彩旗幟。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            170 => [
                "name" => "蘇利南共和國",
                "name_in_en" => "Republic of Suriname",
                "short_name" => "蘇利南",
                "short_name_in_en" => "Suriname",
                "capital" => "巴拉馬利波",
                "capital_in_en" => "Paramaribo",
                "national_day" => "11月 25日",
                "join_un_day" => "1975年12月4日",
                "area_size" => "163,820平方公里",
                "geographic" =>
                    "位於南美大陸東北部，北濱大西洋，東為法屬圭亞那，西為蓋亞那合作共和國，南與巴西接壤。",
                "religion" => "印度教、伊斯蘭教、天主教",
                "bilaterial_relations" => null,
                "main_bounds" => "蘇利南元(Surinamese Dollar, SRD)",
                "exchange_rate" => "1美元兌35蘇利南元(2023年3月)",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/f8251b9c-c3ec-4e92-b8fa-41e6ba9bf956.GIF",
                "is_diplomatic" => 0,
                "language" => "以荷語為官方語文，英語亦頗為普遍。",
                "main_media" =>
                    "國營有電視台Telesur及ATV兩台及一廣播電台，另有民營電視及廣播。",
                "population" => "639,759人(2023年)",
                "voltage" => "127 volts 60hz",
                "time_difference" => "-11:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/032a9af9-48c5-401b-8d1b-60169e9c33f4.jpg",
                "political_system" => "總統制共和國。",
                "history_intro" =>
                    "蘇利南自1975年獨立以來政爭頻繁，1980年及1990年曾兩度由軍方接管政府，至1991年後政局始較為穩定。",
                "parliament" => "採一院制，國會由51名議員組成，任期5年。",
                "cabinet" =>
                    "總統掌握實權，任命內閣(CABINET OF MINISTERS)。內閣向國會負責。",
                "judiciary" =>
                    "法院採三級三審制，二審為加勒比海法院（Caribbean Court of Justice）",
                "headman" => "總統：桑多奇（Chan Santokhi）(2020年8月上任)",
                "fa_minister" => "蘭廷Albert Ramdin (2020年8月上任)",
                "major_political_parties" =>
                    "改革進步黨（VHP）與自由進步黨（ABOP）、PL黨為執政聯盟；國家民主黨（NDP）及蘇利南國民黨（NPS）為主要在野黨。",
                "financial_incoming" =>
                    "蘇國2020年財政收入為8.26億美元，財政支出則為9.397億美元。",
                "export_value" => "22.99億美元(2021年)",
                "import_value" => "18.76億美元(2021年)",
                "export_item" => "礦產、米、木材、蝦、水果、黃金、原油",
                "import_item" => "資本設備、食品、棉花、民生消費品",
                "main_export_countries" => "瑞士、阿聯、比利時、蓋亞那",
                "main_import_countries" =>
                    "美國、荷蘭、中國大陸、千里達、聖露西亞",
                "export_to" => "10,555,566美元(2022年)",
                "import_from" => "12,522,386美元(2022年)",
                "foreign_relationship" => "加強加勒比海區域合作",
                "foreign_policy" => "吸引外資",
                "time_range" => "較臺灣慢11小時 (2021年2月)",
                "resident" => "無，由我國駐聖文森國大使館兼轄",
                "national_flag" =>
                    "綠、白、紅、白、綠五條橫條，紅條中間有一黃色五角星。",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            171 => [
                "name" => "衣索比亞聯邦民主共和國",
                "name_in_en" => "Federal Democratic Republic of Ethiopia",
                "short_name" => "衣索比亞",
                "short_name_in_en" => "Ethiopia",
                "capital" => "阿迪斯阿貝巴",
                "capital_in_en" => "Addis Ababa",
                "national_day" => "9月12日",
                "join_un_day" => "1945年11月13日",
                "area_size" => "110萬平方公里",
                "geographic" =>
                    "位於東非，南接肯亞，東南臨索馬利亞，東臨吉布地、索馬利蘭，北接厄利垂亞，西部與蘇丹及南蘇丹接壤。",
                "religion" => "衣索比亞東正教、基督教、伊斯蘭教",
                "bilaterial_relations" => null,
                "main_bounds" => "衣索比亞比爾(Birr ，貨幣編號ETB)",
                "exchange_rate" =>
                    "1 美元約兌換53.6398衣索比亞比爾(2023年3月9日)，詳細匯率資訊建議至臺灣銀行（https://rate.bot.com.tw/xrt）、兆豐銀行（https://www.megabank.com.tw/personal/foreign-service/forex）或OANDA（https://www1.oanda.com/currency/converter/）網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/88b90a9a-fe2d-4096-b5e9-f07b49b486fe.GIF",
                "is_diplomatic" => 0,
                "language" => "阿姆哈拉語（Amharic語）（官方語言）",
                "main_media" =>
                    "Addis Zemen官方報、Ethiopian Herald 官方英語報、衣索比亞電視台(ETV)及衣索比亞廣播電臺。",
                "population" => "1億1,365萬人(2022年)",
                "voltage" => "220V",
                "time_difference" => "-5:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/6043717b-6645-4bdb-800e-e2c16f5240fe.JPG",
                "political_system" => "聯邦共和制",
                "history_intro" =>
                    "1.	具有3000年文明史，歷經多個王朝興衰，1889年紹阿（Shewa）國王孟尼利克二世(Menelek II)稱帝，統一全國，建都阿迪斯阿貝巴，奠定現代衣索比亞疆域。1890年義大利入侵衣索比亞，強迫衣國接受其保護，惟1896年孟尼利克二世大敗義軍後，義國承認衣國獨立。2.	之後，衣國經歷義大利再次入侵，皇帝流亡又歸國復位，以及少壯軍官發動政變、廢黜帝制，進行軍事統治等，直至1987年9月，門格斯圖(Mengistu)宣佈結束軍事統治，成立衣索比亞人民民主共和國。3.	1988年3月，爆發內戰。1991年5月28日，衣索比亞人民革命民主陣線(Ethiopian People’s Revolutionary Democratic Front)推翻門格斯圖政權，7月成立過渡政府，該陣線主席梅萊斯（Meles）擔任總統。1994年12月制憲會議通過新憲法。1995年5月舉行首次多黨選舉，同年8月22日，衣索比亞聯邦民主共和國成立。梅萊斯以人民代表院多數黨主席身份就任總理。在2000、2005、2010年三次大選中，梅萊斯均蟬聯。2012年8月，梅萊斯病逝。4.	2012年9月，原副總理兼外長海爾馬里亞姆（Hailemariam）出任衣索比亞人民革命民主陣線主席及國家總理。2015年10月，海爾馬里亞姆連任總理，2018年2月在國內反政府示威活動壓力下，請辭該政黨主席及國家總理，阿邁德（Abiy Ahmed）繼任為總理。5. 衣國於2021年6月舉行國會及地方議會選舉，該選舉原訂於2020年8月舉行，惟因疫情因素延期。阿邁德總理領導的「繁榮黨」(Prosperity Party)在此次選舉中大勝，為其贏得下個五年執政任期。",
                "parliament" => "兩院制，包括上議院及眾議院，議員任期均為5年",
                "cabinet" =>
                    "總理由國會多數黨指派，現任總理為阿邁德（Abiy Ahmed Ali）。",
                "judiciary" => "最高司法機構為聯邦最高法院。",
                "headman" => "哲吾蒂(Sahle-Work Zewde)",
                "fa_minister" => "安達嘉邱（Gedu Andargachew）",
                "major_political_parties" =>
                    "衣索比亞人民革命陣線（EPRDF）是主要政黨，另有團結民主聯盟（CUD）等多個小黨",
                "financial_incoming" =>
                    "收入110億2,000萬美元，支出135億8,000萬美元（2020年）。GDP 955.88億美元，每人國內生產毛額（購買力平價）2,656美元（2020年)",
                "export_value" => "35億美元（2020年）",
                "import_value" => "111億美元（2020年）",
                "export_item" => "咖啡、油菜子、食用蔬菜",
                "import_item" =>
                    "機械、航空器、金屬製品、電子零件、石化產品、汽車、化學品、肥料、藥品",
                "main_export_countries" =>
                    "蘇丹、瑞士、中國大陸、索馬利亞、荷蘭",
                "main_import_countries" =>
                    "中國大陸、沙烏地阿拉伯、印度、科威特、法國",
                "export_to" => "約812萬美元（2022年）",
                "import_from" => "約4,106萬美元（2022年）",
                "foreign_relationship" => null,
                "foreign_policy" => "中立不結盟",
                "time_range" => "較台灣慢5小時",
                "resident" =>
                    "駐索馬利蘭代表處兼轄，領事事務由駐沙烏地阿拉伯代表處兼轄。",
                "national_flag" =>
                    "國旗由綠、黃、紅三色條橫條組成，中間置放國徽。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            172 => [
                "name" => "西班牙王國",
                "name_in_en" => "Kingdom of Spain",
                "short_name" => "西班牙",
                "short_name_in_en" => "Spain",
                "capital" => "馬德里",
                "capital_in_en" => "Madrid",
                "national_day" => "10月12日",
                "join_un_day" => "1955年12月14日",
                "area_size" => "506,030平方公里(約我國14倍)",
                "geographic" =>
                    "西班牙位居西南歐之伊比利半島，西鄰葡萄牙，東北接法國與安道爾，北濱大西洋，南瀕地中海，另包括地中海內之Baleares群島，大西洋內之Canarias群島，以及南疆非洲大陸頂端之Melilla與Ceuta兩城與摩洛哥接壤。",
                "religion" =>
                    "主要宗教信仰為天主教，全國民眾約85%為天主教徒，有少數信仰回教，每星期日各地民眾仍維持望彌撒習俗，其他活動如受洗、結婚、葬禮等均與宗教密不可分。",
                "bilaterial_relations" => null,
                "main_bounds" => "歐元",
                "exchange_rate" =>
                    "歐元匯兌台幣約30.87(2022年4月) (詳細匯率資訊建議至臺灣銀行：　（https://rate.bot.com.tw/xrt?Lang=zh-TW）或兆豐商銀（https://www.megabank.com.tw/personal/foreign-service/forex）網站查詢)",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/23bcbac1-ade6-447f-b669-b6f6b6a00293.GIF",
                "is_diplomatic" => 0,
                "language" => "西班牙語",
                "main_media" =>
                    "當地主要之電視、電台及報紙：電視台有西班牙國營電視台（TVE-1），LA2，第五電視台(Telecinco)，馬德里電視台(Telemadrid)，第三頻道(Antena 3)，第四台（cuatro）及第六台（La Sexta）等。廣播電臺亦多，如Radio SER、Radio COPE及西班牙國家廣播電臺(RNE)等。主要報紙為國家日報(El País)、ABC日報(ABC)、先鋒報(La Vanguardia) 、世界日報(El Mundo)及道理日報(La Razón)等。",
                "population" =>
                    "人口4,732萬，首都馬德里(Madrid)市約322萬人，馬德里自治區係西班牙人口最多的自治區，達664萬人，另外國人歸化約佔總人口10.1%。西國外來移民人數484.8萬人，其中摩洛哥人為第一大移民族群(76萬9,050人)，其次為羅馬尼亞、英國及中國大陸，近年新興移民人口成長快速來源國則依序為委內瑞拉(47%)、宏都拉斯(32.4%)及哥倫比亞(25.1%)。",
                "voltage" => "220V",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/e274e713-a02e-489f-a8db-f1c84239054a.jpg",
                "political_system" => "君主立憲制",
                "history_intro" =>
                    "西班牙原為羅馬帝國之伊斯班尼亞省（Hispania），由於位居北非與歐洲大陸之橋樑，自古即為各民族紛爭之地。 1479年伊比利半島北部卡斯蒂亞（Castilla）女王伊莎貝爾一世（Isabel I）與阿拉貢（Aragón）國王費南多二世（Fernando II）聯姻，奠定了西班牙統一基業。16世紀時，國力鼎盛，係西班牙黃金時代。 17世紀後，西班牙國勢轉衰，1898年美西戰爭西班牙失去古巴及菲律賓等殖民地後國勢一蹶不振。其政治在左右兩派交替掌權下鮮少建樹，民生疾苦。 1939年佛朗哥元帥（Francisco Franco Bahamonde）贏得內戰後對西國實施36年獨裁統治至1975年11月20日逝世，同年11月22日由王儲璜卡洛斯一世（Juan Carlos I de Borbón）宣誓就任國王，並於1978年頒佈新憲法，開始實施西方之議會民主政治。",
                "parliament" =>
                    "西班牙為參、眾兩院之內閣制國家，參議院共有266席，眾議院則為350席。",
                "cabinet" =>
                    "西國於2019年4月28日及11月10日兩度舉行國會改選後，最終「社會勞工黨」桑切斯(Pedro Sánchez)與左派「眾志成城黨」組成聯合政府。桑切斯總理於2020年1月8日宣誓就任西國總理，目前由Nadia Calviño、Yolanda Diaz及Teresa Ribera等3位副總理及閣員分別管轄國家各項事務。",
                "judiciary" =>
                    "司法權由司法官獨立行使，非因正當理由，法官應受法律保障，不得被革職，停職，調任或強迫退休。",
                "headman" => "國王菲利佩六世(Felipe VI)",
                "fa_minister" =>
                    "西國現任外交、歐盟暨合作部長(Ministerio de Asuntos Exteriores, Unión Europea y Cooperación)為José Manuel Albares",
                "major_political_parties" =>
                    "社會勞工黨(PSOE)、民眾黨(PP)、聲音黨(Vox)、市民黨(Ciudadanos)及眾志成城黨(Unidos Podemos)",
                "financial_incoming" =>
                    "歲出5,271.08億歐元，歲入3,770億歐元 (2022年)",
                "export_value" => "3,976億5,230萬歐元 (2022年)",
                "import_value" => "4,573億2,120萬歐元 (2022年)",
                "export_item" =>
                    "小客車及其他車輛、石油原油、人體血清、醫藥製劑、汽車零配件、電力、豬肉、運輸車輛及船隻配件等。",
                "import_item" =>
                    "廢油、天然氣、車輛、汽車零配件、醫藥製劑、石油原油、人體血液抗毒血清、通訊設備、電腦設備及女裝等",
                "main_export_countries" =>
                    "法國、德國、義大利、葡萄牙、英國、美國、比利時、荷蘭、摩洛哥、中國",
                "main_import_countries" =>
                    "德國、中國、法國、義大利、美國、荷蘭、葡萄牙、比利時、英國、摩洛哥",
                "export_to" => "17億5,230萬美元 (2022年)",
                "import_from" => "9億4,481萬美元 (2022年)",
                "foreign_relationship" =>
                    "1977年6月西班牙制憲民主化之後，當時執政之中間民主聯盟(Unión de Centro de Democracia)即與世界多數之國家建立外交關係。惟西班牙真正融入國際社會，係於社會勞工黨1982年首次執政時，當時之社會勞工黨在民眾普遍反美之情緒下，說服民眾公投同意留在與美國關係密切之北大西洋公約組織(NATO)，並於1986年正式成為歐洲共同體一員；在地中海及拉丁美洲地區，西班牙則基於地緣政治及傳統宗主殖民關係，以提供援助及透過各項經濟合作關係來提升與各國之關係，藉以提高西國之外交影響力。 此外，西國與英國、摩洛哥及葡萄牙存在領土主權爭議問題，西國要求英國歸還位於西國南部之直布羅陀(Gibraltar)，摩洛哥聲稱擁有西國在非洲北部之西屋達(Ceuta)及美利亞(Melilla)兩自治城之主權，葡萄牙則從未承認西班牙對奧利溫薩(Olivenza，位於西葡邊界)之主權。",
                "foreign_policy" =>
                    "西班牙一向奉行歐洲主義，重視與美國關係，致力維持與拉丁美洲國家傳統邦誼，加強與地中海及非洲國家關係，積極開拓與亞洲新興國家(尤其重視中國大陸)市場。為復甦經濟，提昇就業，整合外交、經濟、文化、教育、勞工等各部門資源，打造「西班牙國家品牌」。此外，西班牙於2015-2016年擔任聯合國安全理事會非常任理事國，2018-2020年則擔任聯合國人權理事會成員國。",
                "time_range" => "10月至3月(較臺灣慢)為7小時，其他月份為6小時",
                "resident" => "駐西班牙代表處(台北經濟文化辦事處)",
                "national_flag" => null,
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            173 => [
                "name" => "諾魯共和國",
                "name_in_en" => "Republic of Nauru",
                "short_name" => "諾魯",
                "short_name_in_en" => "Nauru",
                "capital" => "雅連",
                "capital_in_en" => "Yaren",
                "national_day" => "1月31日",
                "join_un_day" => "1999年9月",
                "area_size" => "21.2平方公里",
                "geographic" =>
                    "諾魯係孤懸於中太平洋赤道以南42公里中之蕞爾小島，夏威夷在諾魯東北方約4,500公里，雪梨在其西南方約4,000公里，諾魯較台灣時間快四小時。",
                "religion" => "基督教及天主教",
                "bilaterial_relations" =>
                    "諾我無論在農技、衛生醫療、潔淨能源及教育、職訓文化交流方面均甚為密切，兩國關係穩定成長。",
                "main_bounds" => "澳幣",
                "exchange_rate" =>
                    "諾魯使用澳幣，1澳幣約兌換20-21臺幣，惟須視匯率浮動情況而定。當日詳細匯率資訊建議請至臺灣銀行(https://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/5e12f2d2-df9d-4cd4-993e-550cda6b8563.gif",
                "is_diplomatic" => 1,
                "language" => "官方語言為英語，通用語言為英語與諾魯語。",
                "main_media" =>
                    "無私人經營媒體, 境內Nauru TV、Radio Nauru、MWINEN KO 月刊均為官方媒體，另有民營Digicel公司提供斐濟區域的衛星電視節目。",
                "population" =>
                    "依據諾魯政府2019年普查，全國人口11, 550人，男性5,871人，女性5,679人。18歲以下佔總人口50%，平均壽命男性58歲，女性63歲。中國大陸僑民約200人，無臺灣僑民。",
                "voltage" => "240V 50HZ",
                "time_difference" => "+4:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/f0c810d0-56ce-474b-bc5d-cbc84b337c93.JPG",
                "political_system" =>
                    "民主共和國，由人民選出19位國會議員，再由議員間選出總統，諾魯無政黨，僅有執政派及反對派國會議員之分，加入執政派或反對派議員由議員依利益及政治傾向決定，國會議員任期3年。",
                "history_intro" =>
                    "三千年前密克羅尼西亞人與波里尼西亞人在諾魯定居，賴椰子、野果與魚為生。   1798年英國捕鯨船船長John Fearn自紐西蘭赴中國途中來到諾魯，將之命名為“快樂島“，此後30、40年捕鯨者、伐木者及海盜行經此島，並引進槍與酒，曾導致島上10年戰事。1888年德國將諾魯併入其在馬紹爾之保護領地，1914年改由澳洲佔領，1920年國聯授權澳洲、紐西蘭與英國三國共同託管，二次大戰期間為日本佔領，1947年再度成為聯合國託管地，由澳洲管理。1968年1月31日宣布獨立。諾魯兩度全國人口不及1,500人(此數目為成為一個國家之最低人口數)，一次為1919年諾魯因流行病導致民眾人數銳減，另一次為1943年1,201諾魯人被日本人送至Truk島(目前為密克羅尼西亞聯邦領土)，僅737人於1946年1月31日返回諾魯。爾後諾魯人口分別於1932年與1950年達到1,500人。於是10月26日被諾魯訂為全國人口超過1,500人紀念日(Angam Day)，放假一天。諾魯磷礦純度極高，初由British Phosphate Commissioners管理，1907年首度出口，以極低價格賣給澳洲與紐西蘭。1968年諾魯獨立後，爭取收回磷礦管理權，於1970年7月1日Nauru Phosphate Corporation接管。1973-74年石油危機，油價飛漲，石化之肥料成本大幅攀升，磷礦價格亦上漲4倍。使諾魯國民所得列名世界最高所得之一。1986年後磷礦產量驟減，經濟逐漸衰退，後僅有極微少之磷礦出口，2004年財政危機使全國進入緊急狀態，至2007年國家經濟始漸趨平穩。諾魯於2012年9月協助澳洲重啟在諾魯之難民中心，為諾魯帶來大量財源，對諾魯之政治、經濟、社會帶來重大影響。另澳洲與美國於2016年達成協議，美國同意收納一定數量諾魯難民前往美國。",
                "parliament" => "一院制",
                "cabinet" =>
                    "憲法規定內閣由總統指派部長組成，負責施政，包括總統在內共有7名閣員。",
                "judiciary" =>
                    "諾魯司法機關司法分上訴法院、最高法院、初級法院（地區法院、家事法院），目前設有首席大法官1名及法官2名。",
                "headman" => "昆洛斯（Russ Joseph Kun)",
                "fa_minister" => "昆洛斯（Russ Joseph Kun）(總統兼外長)",
                "major_political_parties" => "諾魯無政黨.僅有執政派及反對派",
                "financial_incoming" =>
                    "2020年至2021年預估財政收入2億1,048萬澳元，財政支出為2億1,044萬澳元（2021-2022 Budget and Estimates of Revenue and Expenditure, Republic of Nauru）。財政收入主要來源為澳洲在諾魯安置難民收取之簽證費、入漁執照費、薪資所得稅及營業稅收入。財政支出則包括公務人員薪支、補貼、政府官員出差旅費、房屋及土地租金、社區房屋修繕費。",
                "export_value" => "5,400萬美元（2021年，The World Bank）。",
                "import_value" => "14,158萬美元（2021年，The World Bank）。",
                "export_item" => "磷酸鈣（2019年，CIA the World Factbook）。",
                "import_item" =>
                    "精煉石油、建築用車輛、拖船、家禽肉、汽車（2019年，CIA the World Factbook）。",
                "main_export_countries" =>
                    "泰國（62.7%）、奈及利亞（13.3%）、菲律賓（8.9%）、墨西哥（5.1%）美國（2.6%）（2020年，國貿局資料）。",
                "main_import_countries" =>
                    "澳大利亞（71.6%）、日本（5.5%）、斐濟（5.0%）、中國（3.2%）、南韓（3.1%）（2020年，國貿局資料）。",
                "export_to" =>
                    "根據我國經濟部國貿局資料，2021年我對諾魯出口1,538萬5,725美元。我國主要輸出項目：石油、二極體、電晶體及類似半導體、配電板、水、電線變壓器、金屬製品、機械。",
                "import_from" =>
                    "根據我國經濟部國貿局資料，2021年我國從諾魯進口1萬1,894美元。",
                "foreign_relationship" =>
                    "諾魯為位於太平洋之小國，主要仰賴磷礦出口，在磷礦逐漸枯竭情況下，仰賴外援如澳洲、中華民國（臺灣）、紐西蘭、日本、印度、美國、歐盟、阿拉伯聯合大公國、俄國等。",
                "foreign_policy" =>
                    "諾魯在外交政策奉行國際現實主義，如諾魯曾因中共重利誘惑致在2002年7月21日與中共建交，後因中共所承諾之援助多未落實，乃於2005年5月14日再與我恢復正式外交關係。",
                "time_range" => "較我國快4小時",
                "resident" => "2005年5月14日台諾復交後，並設立大使館。",
                "national_flag" =>
                    "諾魯國旗與國徽上有一顆由12個尖角組成的白色星星，代表該國12個宗族。諾魯國徽中有一隻國鳥「Frigate-bird」，諾魯人認為此鳥為天國信差及好運的象徵，以往諾魯人馴養此幼鳥，並在其翅膀打洞作記號，以利用馴養之鳥引來同伴。",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            174 => [
                "name" => "象牙海岸共和國",
                "name_in_en" => 'Republic of Côte d\'Ivoire',
                "short_name" => "象牙海岸",
                "short_name_in_en" => 'Republic of Côte d\'Ivoire',
                "capital" =>
                    "雅穆索戈(Yamoussoukro)。惟中央政府機關、國會與外交機構等仍多位於經濟首都阿比尚(Abidjan)。",
                "capital_in_en" => "Yamoussoukro",
                "national_day" => "8月7日",
                "join_un_day" => "1960年9月20日",
                "area_size" => "322,462平方公里",
                "geographic" =>
                    "位於西非的國家，東接迦納，南臨幾內亞灣，西及賴比瑞亞和幾內亞，北鄰馬利、布吉納法索。",
                "religion" => "伊斯蘭教（38.6％）、基督教（32.8％）、傳統信仰",
                "bilaterial_relations" => null,
                "main_bounds" => "西非法郎(XOF)",
                "exchange_rate" =>
                    "詳細匯率資訊建議至臺灣銀行(https://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/dc5aed54-a6ff-4dcf-9447-605985d22cd6.GIF",
                "is_diplomatic" => 0,
                "language" => "法語(官方語言)",
                "main_media" =>
                    "廣電媒體 Radiodiffusion-Télévision Ivoirienne、RTI 1、RTI 2；報紙Fraternite Matin、Soirinfo、L’inter、Le Nouveau Reveil 、Le Patriot",
                "population" => "2,582萬（2020年1月）",
                "voltage" => "220伏特",
                "time_difference" => "-8:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/customfile/sites/mapurllink/a86b26e3-197f-4282-b7d8-575172d06a4b.jpg",
                "political_system" => "共和國、總統制",
                "history_intro" =>
                    "1893年法國人建立象牙海岸殖民地，1898年法人控制全境，1904年象牙海岸加入法屬西非聯邦，1944年伍弗布尼（Félix Houphouet-Boigny）創立非洲農民工會（Syndicat Agricole Africain）致力改善農民生活條件，該組織後來演變成象牙海岸民主黨（PDCI），持續推動象國獨立運動。1960年8月7日象牙海岸取得獨立，伍氏成為首任總統。獨立建國以來，象國享有近40年的政治穩定環境，在1960年至1975年間，每年平均經濟成長率超過6.8%，工業萌芽，現代化建設開始興建，象國自此即被視為西非的典範國家。 象國於1999年12月發生首次軍事政變，治安及經濟情況惡化，2000年10月22日舉行總統大選，象牙海岸人民陣線（Ivorian Popular Front, FPI）總統參選人巴博（Laurent Gbagbo）經選舉委員會於10月26日公布確認勝選。惟嗣因政爭引發南北分治、國土分裂、族群衝突，混亂局面長達10年之久，社會嚴重失序，經濟奄奄一息。象國於2010年11月28日舉行總統大選，反對黨領袖瓦達哈(Alassane Ouattara)獲得勝選，國際社會隨即予以承認，惟在任的總統巴博卻自行宣稱獲勝並且宣誓就職，引發嚴重內戰，死亡及失蹤人口超過3,000人。巴博於2011年4月11日被逮捕後，內戰終告結束，瓦達哈總統則在同年5月正式宣誓就職。",
                "parliament" =>
                    "國會共分參議院(Sénat)及國民議會(Assemblé Nationale)，國民議會席次為255席，由直選產生，任期5年。現任國會於2021年3月就任，任期至2025年結束。2016年通過新憲法增設參議院，共99席。於2020年實施。任期5年，1/3席次由總統任命，2/3席次間接普選產生。",
                "cabinet" =>
                    "行政部門以總理為首長。總理由總統任命。現任總理Patrick ACHI於2021年3月就職，內閣由4名國務秘書與37名部長組成。2022年4月象國內閣改組，Patrick ACHI留任總理，內閣部長由37名減少為32名。",
                "judiciary" =>
                    "最高法院下有司法法庭、審計法庭、憲法法庭及行政法庭4個分庭",
                "headman" => "瓦達哈( Alassane Ouattara)",
                "fa_minister" => "Kandia Kamissoko CAMARA 女士",
                "major_political_parties" =>
                    '自實施多黨民主制以來，現有150多個合法政黨。主要的政黨有象牙海岸民主陣線(Ivorian Popular Front, FPI)、象牙海岸民主黨(Democratic Party of Cote d\'Ivoire, PDCI)、象牙海岸民主和平聯盟(Union for Democracy and Peace in Cote d\'Ivoire, UDPCI)、共和聯盟(Rally of the Republicans, RDR)。',
                "financial_incoming" => "象國2020年歲出及歲入均約128.3億歐元。",
                "export_value" => "105億美元(2020年)",
                "import_value" => "100億美元(2020年)",
                "export_item" => "可可豆、橡膠、可可醬、金、腰果等堅果",
                "import_item" => "原油、米、冷凍魚、包裝藥品、車輛",
                "main_export_countries" => "荷蘭、瑞士、美國、法國、馬來西亞",
                "main_import_countries" => "中國、法國、奈及利亞、印度、荷蘭",
                "export_to" => "31,693,000美元（2022年）",
                "import_from" => "1,090,000美元（2022年）",
                "foreign_relationship" =>
                    "象牙海岸危機深受「西非經濟共同體」（CEDEAO）與「非洲聯盟」（UA）重視，該二組織視象國穩定為西非區域安定基石，積極推動協調活動。象國一向懷疑其鄰國布吉納法索透過資助反叛軍干涉內政，兩國嫌隙甚深，直至布國龔保雷總統以「西非經濟共同體」主席身份介入象國內部危機協調，象、布兩國始於2008年7月29日簽署友好合作協定。2015年9月底象國現任國會議長Guillaume SORO疑似涉入布國總統衛隊（RSP）軍事政變，象布友好關係蒙上陰影，布國政府於2016年4月底撤銷S議長國際通緝令，兩國關係恢復正常，2016年布、象兩國分別遭遇恐怖攻擊後，雙邊進一步加強安全、反恐合作。 象國自瓦達哈總統自上台以來，政爭危機解決，國家趨於平靜，重新在西非區域扮演重要角色。瓦達哈總統多次出訪西非國家及歐美亞各國，與各國關係良好，2016年2月象國獲美國「千禧年挑戰理事會」（Millennium Challenge Corporation, MCC）允諾提供3-3.5億美元援助。同年5月世界銀行於巴黎召開資助方大會，象國獲154億美元援款承諾，以進行2016-2020年發展計畫。聯合國宣布撤銷對象國武器禁運制裁，維和部隊亦於2017年6月撤離。美國亦於2016年9月宣布解除對象國實施10餘年的經濟制裁。 2017年6月2日象國當選為2018-2019聯合國安理會非常任理事國。",
                "foreign_policy" => "爭取外國財政援助",
                "time_range" => "較臺灣慢8小時",
                "resident" => "駐象牙海岸台北代表處",
                "national_flag" =>
                    "橙色象徵著北方肥沃的土地（熱帶草原），白色代表和平與團結，綠色代表著南方的森林和對未來的希望",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            175 => [
                "name" => "貝南共和國",
                "name_in_en" => "Republic of Benin",
                "short_name" => "貝南",
                "short_name_in_en" => "Benin",
                "capital" => "新港(Porto-Novo)",
                "capital_in_en" => "Porto-Novo",
                "national_day" => "8月1日",
                "join_un_day" => "1960年9月20日",
                "area_size" => "112,622平方公里",
                "geographic" =>
                    "位於非洲西部，南瀕幾內亞灣，東鄰奈及利亞，北與尼日接壤，西北與布吉納法索相連，西和多哥接壤。",
                "religion" =>
                    "伊斯蘭教（27.7％）、天主教(25.5%)、伏都教(11.6%)、基督教(9.5%)",
                "bilaterial_relations" => null,
                "main_bounds" => "西非法郎(XOF)",
                "exchange_rate" =>
                    "1美元兌換593.08西非法郎（2022年3月）。詳細匯率資訊建議至臺灣銀行（https://rate.bot.com.tw/xrt?Lang=zh-TW）或兆豐商銀（https://www.megabank.com.tw/personal/foreign-service/forex）網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/99435bb2-5494-45ac-a4d3-f5682daacac2.GIF",
                "is_diplomatic" => 0,
                "language" => "法語、豐語、約魯巴語",
                "main_media" =>
                    "Le Matinal民營日報 、Fraternite 民營日報、La Nation 官方日報、國營電視台(Television Nationale) 及國家廣播台(Radio Nationale)。",
                "population" => "1,212萬人(2020年)",
                "voltage" => "220伏特",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/ded892f1-aeac-479f-8acd-5f4ef28442a9.JPG",
                "political_system" =>
                    "共和國、總統制。總統由民選產生，任期5年。",
                "history_intro" =>
                    "因地形及部族因素，原名達荷美（Dahomey）的貝南在獨立前即分為西南、東南、北部三大派系，相互鬥爭。1960年獨立建國後紛爭愈烈，首任總統Mage在1963年欲藉軍方力量鎮壓反對派，自己反遭罷黜。軍人還政文人後至1972年止，先後共發生5次政變事件，政權6度易手，而在1970年所設由三地區領袖每2年輪任總統職的制度，實為各類妥協方法試用殆盡後不得已的對策，亦未收效。至1972年10月26日閣和庫(Mathieu Kérékou)中校發動政變，改弦易轍，採行馬列主義，1975年12月1日改國號為貝南人民共和國，進行軍事集權。1989年12月7日因經濟瀕臨崩潰，宣布放棄馬列主義，改採經濟自由主義。1990年3月1日再改國號為貝南共和國。閣和庫於1996年至2006年透過民主選舉當選總統，放棄先前之專權領導，實行民主政治，使貝南成為西非頗具民主盛名的國家。",
                "parliament" =>
                    "單一國會制（Assemblée Nationale）共 83席，由人民直選產生，任期4年。2019年國會選舉結果，由支持塔隆(Talon)總統之進步聯盟黨(Union Progressiste)(獲47席)及共和人團黨(Bloc Républicain)(獲36席)囊括所有席次，反對黨在國會席次為零。",
                "cabinet" =>
                    "總統為全國最高行政首長，並為三軍統帥。另設副總統及10餘名部長，皆由總統任命組成內閣，內閣對國會負責。",
                "judiciary" =>
                    "在洛巴集(Lobatse)設一高等法院，以首席大法官掌理全國司法審理工作。在每一行政區設有地方法院，另設一上訴法院。",
                "headman" => "塔隆(Patrice Talon)",
                "fa_minister" => "阿貝諾西(Aurélien Agbénonci)",
                "major_political_parties" =>
                    "貝南新興黨（FCBE）、非洲民主進步運動黨(MADEP)；團結國家黨(UN)、新民主黨(PRD)、貝南復興黨(RB)、進步聯盟黨(UP)、共和人團黨(BR)。",
                "financial_incoming" =>
                    "歲入13.50億美元，歲出16.30億美元（2020年），外債為23.30億美元(2020年)。",
                "export_value" => "12.4億美元（2020年）",
                "import_value" => "42.2億美元（2020年）",
                "export_item" =>
                    "棉花、腰果、乳油木果油、紡織品、棕櫚產品、海鮮",
                "import_item" => "食品、日常消費品、石油產品",
                "main_export_countries" =>
                    "孟加拉、印度、越南、奈及利亞、中國、烏克蘭、尼日、土耳其",
                "main_import_countries" =>
                    "法國、比利時、荷蘭、泰國、印度、多哥、中國",
                "export_to" => "2,160,017美元(2021年)",
                "import_from" => "94,772美元(2021年)",
                "foreign_relationship" =>
                    "近年貝南加強與法國及美國關係，並積極介入鄰國如賴比瑞亞、多哥及幾內亞比索之內部糾紛，擔任協調者角色。另在外交上配合聯合國，派員至海地、剛果民主共和國及馬利等國參加國際維和部隊。",
                "foreign_policy" =>
                    "自總統塔隆(Patrice Talon)上任以來，積極藉由訪問，加強與鄰近國家的經貿合作，亦致力於發展與中國大陸、印度及美國的經貿關係。",
                "time_range" => "較臺灣慢7小時",
                "resident" =>
                    "我在該國未設處，該國事務由我駐法國台北代表處兼轄。",
                "national_flag" =>
                    "綠色代表綠色大地、春天及希望，金色代表祖先的財富在陽光下閃耀、紅色則代表革命時祖先流下的鮮血。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            176 => [
                "name" => "貝里斯",
                "name_in_en" => "Belize",
                "short_name" => "貝里斯",
                "short_name_in_en" => "Belize",
                "capital" => "貝爾墨潘",
                "capital_in_en" => "Belmopan",
                "national_day" => "9月 21日",
                "join_un_day" => "1981年9月25日",
                "area_size" => "22,966平方公里",
                "geographic" =>
                    "東西寬180公里，南北長約260公里，包括450個小島。貝國位於中美洲東北部，東瀕加勒比海，北接墨西哥，西邊、南邊與瓜地馬拉為鄰。",
                "religion" => "天主教、基督教新教",
                "bilaterial_relations" => null,
                "main_bounds" => "貝里斯幣(Belizean Dollar, BZD)",
                "exchange_rate" =>
                    '使用之貨幣為貝里斯幣（Belize Dollar, BZ$），與美元之兌換率：1.00 US$=2.00 BZ$。',
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/8f453e14-6c5b-4f7c-8c56-397097768009.GIF",
                "is_diplomatic" => 1,
                "language" => "英語為官方語言，西語人口或通西語者佔46%",
                "main_media" =>
                    "Newspaper：Amandala, Reporter, Guardian, Belize Times, 華報; 電視台：Channel5, Channel7, Love TV; 廣播電台：Love FM, FM2000, KREM Radio, Wave Radio",
                "population" =>
                    "44.15萬人（2021年7月）（資料來源：貝里斯統計局/SIB）",
                "voltage" =>
                    "貝國電壓與我國相同，一般電器均為 110 伏特，冷氣機多用 220伏特。",
                "time_difference" => "-6:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/9ffe4807-6a5a-455e-b654-e175140508ee.jpg",
                "political_system" =>
                    "貝里斯屬大英國協一員，英國國王查爾斯三世為名義元首，實行內閣制之政黨政治，政局穩定。",
                "history_intro" =>
                    "馬雅(MAYA)所建立高度文明之馬雅帝國，其領土曾包括此地，10世紀後馬雅人盡離此地。目前貝里斯之馬雅人係於19世紀遷移至此。16世紀初，貝里斯與瓜地馬拉同屬西班牙殖民地，但當時尚無任何西班牙移民前往貝里斯。直至1783年，西人始將貝里斯之使用收益權讓與已居該地多年之英人，1786年英國派駐行政官，並於1862年正式宣布貝里斯為其殖民地，並改名英屬宏都拉斯。第二次世界大戰後，貝里斯人民要求獨立的呼聲日益高漲，1956年4月根據新制訂的憲法，貝里斯舉行首次大選，1964年英國同意貝里斯實行內部自治，但國防、外交及治安仍由英國負責，貝國在國父George Price的帶領下逐步爭取獨立，聯合國於1980年以壓倒多數通過決議，宣布貝里斯應於一年內獨立。1981年貝國正式獨立，為大英國協成員國。瓜國對貝里斯主權要求之根據為1821年中美洲各國宣布獨立前，該地區原由西班牙劃歸瓜地馬拉總督統管，因此瓜國認為西班牙殖民時代結束後，鄰接之貝里斯自然歸屬瓜國主權管轄，堅認英國在貝之300年實際佔領為非法。1859年英國承諾建築連接瓜國兩洋道路（太平洋至加勒比海），瓜國則同意英國在貝里斯享有一切主權。其後英國違約，遲不履行此項築路義務，瓜國遂稱英國係無理取得該地區之一切權利；自此雙方失和，爭辯不已。瓜地馬拉於1991年9月6日始承認貝里斯。貝瓜兩國於2003年10月在美洲國家組織總部就貝瓜於同年2月簽署之「過渡程序及信心機制」協議之相關措施執行情形舉行檢討會議，積極尋求以和平之方式解決爭端。瓜國已於2018年4月15日舉行公投，多數民意同意將貝瓜領土爭議送交國際法院（ICJ）審議。貝里斯政府已於2019年5月8日舉行對應公投，贊成訴諸ICJ佔總票數55.37%，反對票比例則為44.63%，公投案順利成案，貝瓜兩國嗣已依「2008年特別協定」正式提請ICJ仲裁事宜。從ICJ受理至做出裁決據評估約需數年時間。貝國為加勒比海共同體及中美洲統合體成員，2006年1月1日加勒比海單一市場（CARICOM Single Market&amp; Economy,CSME）正式成立，貝國已加入成為會員。",
                "parliament" =>
                    "分參、眾兩院。眾議院31席，均由民選，任期5年，對內閣有不信任投票權。參議院13席，其中6席由總理推薦，3席由反對黨領袖推薦，另4席由商界、教會、非政府組織與社會人士擔任，由總督任命，任期5年。最近一次大選於2020年11月11日舉行，由人民聯合黨(PUP)贏得眾議院過半之26席次重返執政，並由黨魁布里仙紐擔任總理職務。",
                "cabinet" =>
                    "由總理、副總理及各部部長組成，行使行政權，對國會負責。總理由國會多數黨領袖擔任，部長經總理提名由總督任免。",
                "judiciary" =>
                    "採三級制，分為地方法院、上訴法院與高等法院，並以加勒比海法院為終審法院。",
                "headman" =>
                    "總督：察芙拉(H.E. Froyla Tzalam)； 總理：布里仙紐(John Briceno)",
                "fa_minister" => "柯特尼（Eamon Courtenay)",
                "major_political_parties" =>
                    '人民聯合黨(People\'s United Party,簡稱PUP或藍黨)現為執政黨；聯合民主黨(United Democratic Party, 簡稱UDP或紅黨)現為反對黨。',
                "financial_incoming" =>
                    "國民生產毛額19.09億美元 （2021年）（資料來源：貝里斯統計局/SIB）",
                "export_value" =>
                    "2.19億美元（2021年）（資料來源：貝里斯統計局/SIB）",
                "import_value" =>
                    "10.61億美元（2021年）（資料來源：貝里斯統計局/SIB）",
                "export_item" => "蔗糖、香蕉、漁產、動物飼料、糖蜜",
                "import_item" =>
                    "機械、運輸用品、製造業產品、食品、燃料、化學產品",
                "main_export_countries" =>
                    "英國、美國、歐盟、加勒比海共同市場及墨西哥等國 (2021)",
                "main_import_countries" =>
                    "美國、中國、墨西哥、瓜地馬拉、歐盟及加勒比海共同市場等 (2021)",
                "export_to" =>
                    "1,114.61萬美元（2021年）（資料來源：經濟部國際貿易局）",
                "import_from" =>
                    "87.91萬美元（2021年）（資料來源：經濟部國際貿易局）",
                "foreign_relationship" =>
                    "貝國目前已與世界大部份國家建交，在貝里斯設大使館者除我國外，另有英、美、墨西哥、薩爾瓦多、委內瑞拉、宏都拉斯、瓜地馬拉、古巴、巴西及日本等。",
                "foreign_policy" => "對我友好",
                "time_range" => "較台灣時間慢14小時",
                "resident" => "我國在貝里斯首都貝爾墨潘設有大使館",
                "national_flag" => null,
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            177 => [
                "name" => "賴比瑞亞共和國",
                "name_in_en" => "Republic of Liberia",
                "short_name" => "賴比瑞亞",
                "short_name_in_en" => "Liberia",
                "capital" => "蒙羅維亞",
                "capital_in_en" => "Monrovia",
                "national_day" => "7月 26日",
                "join_un_day" => "1945年11月2日",
                "area_size" => "111,369平方公里",
                "geographic" =>
                    "賴國南部瀕大西洋，西部鄰接獅子山，北部鄰接幾內亞，東部與象牙海岸為界。氣候濕熱，僅12月至隔年2月旱季期間晝暖夜涼。",
                "religion" => "基督教( 85.6%)、回教(12.2%)、傳統宗教(0.6%)",
                "bilaterial_relations" => null,
                "main_bounds" => "賴元( Liberian Dollar, LRD )",
                "exchange_rate" =>
                    "詳細匯率資訊建議至臺灣銀行(https://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/adbfa986-b2b1-484f-a3fd-b631193a15d6.GIF",
                "is_diplomatic" => 0,
                "language" => "官方語言為英語，另有將近二十種當地方言。",
                "main_media" =>
                    "The Inquirer, Daily Times, The New National, Monrovian Guardian, The Patriot, Pepperbird, DC TV, ELBC, Star Radio, Sky FM, Kiss FM等。",
                "population" => "5,214,030人 (2020)",
                "voltage" => "110 / 220伏特（兩種並行）",
                "time_difference" => "-8:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/f20bc172-ab9c-4ee7-b9da-bf2a5ab799e0.JPG",
                "political_system" => "總統制。",
                "history_intro" =>
                    "19世紀美國為解放黑奴，乃選擇賴國為黑人遷徙地。歷經美國政府及宗教慈善機構之努力，美國殖民協會始得於1822年達成協助首批黑人遷居賴比瑞亞之願望。1847年7月26日賴比瑞亞正式宣布獨立，為非洲最早之共和國。",
                "parliament" => "參議院共30席，任期9年。眾議院73席，任期6年。",
                "cabinet" => "閣員由總統提名，經參議院同意後任命。",
                "judiciary" => "設有最高法院、巡迴法院、特別法院、地方法院。",
                "headman" => "George Weah",
                "fa_minister" => "Dee-Maxwell Saah Kemayah Sr.",
                "major_political_parties" =>
                    '團結黨(Unity Party, UP)、民主變革聯盟（Coalition for Democratic Change, CDC）、自由黨（Liberty Party, LP）、和平民主聯盟（Alliance for Peace and Democracy, APD）、國家愛國黨（National Patriotic Party, NPP）、國家民主聯盟（National Democratic Coalition,NDC)、進步變革運動(Movement for Progressive Change,MPC)、賴比瑞亞轉變黨(Liberia Transformation Party,LTP)、人民統一黨(People\'s Unification Party,PUP)、賴比瑞亞全民聯盟黨(All Liberian Coalition Party,ALCP)、民主及重建運動( Movement for Democracy and Reconstruction,MDR)、經濟權力運動( Movement for Economic Empowerment,MEE)、團結人民黨(United People\'s Party,UPP)、為改變勝利黨(Victory for Change Party,VCP)、另類選擇國家議會(Alternative National Congress, ANC)。',
                "financial_incoming" =>
                    "2017年政府財政收入5.536億美元，支出6.938億美元。",
                "export_value" => "9.37億美元（2020）",
                "import_value" => "95.6 億美元（2020）",
                "export_item" => "鐵礦、金、客貨運船舶、橡膠、可可豆",
                "import_item" =>
                    "客貨運船舶、精煉石油、船用推進器、特種船舶。.",
                "main_export_countries" =>
                    "法國、瑞士、土耳其、賽普勒斯、德國 (2020)",
                "main_import_countries" =>
                    "中國、日本、南韓、德國、賽普勒斯 (2020)",
                "export_to" => "2,046,178美元（2022）",
                "import_from" => "35美元（2022）",
                "foreign_relationship" =>
                    "賴比瑞亞為聯合國、西非經濟共同體、非洲聯盟等國際組織之會員國。賴國曾發生長達14年之內戰，造成15萬人死亡及75萬人流離，目前國內政治及安全已較穩定，惟戰後重建任務仍然相當艱鉅。賴國與美國關係密切，兩國簽署貿易及投資架構協定。另美國提供賴國鞏固民主、改善政府治理能力、透明度與負責能力、促進經濟成長，改善教育與衛生施政，及促進軍警專業水準。",
                "foreign_policy" =>
                    "賴國外交政策植基於該國自由主義、民主及資本主義之政治思想，其原則為維持領土完整及主權獨立，在不干涉內政及自由民主之基礎上促進和平與和諧。",
                "time_range" => "較台灣慢8小時。",
                "resident" => "駐奈及利亞代表處兼轄。",
                "national_flag" =>
                    "條紋象徵賴國獨立宣言的簽署者，藍色正方形代表非洲大陸，星星代表給予前奴隸的自由。依據憲法，藍色象徵自由、正義及忠誠，白色象徵純潔、清潔及誠實，紅色象徵堅定、勇敢及熱情。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            178 => [
                "name" => "賴索托王國",
                "name_in_en" => "Kingdom of Lesotho",
                "short_name" => "賴索托",
                "short_name_in_en" => "Lesotho",
                "capital" => "馬賽魯",
                "capital_in_en" => "馬賽魯（Maseru）",
                "national_day" => "10月 4日",
                "join_un_day" => "1966年10月17日",
                "area_size" => "30,355平方公里",
                "geographic" => "南非共和國境內，是全世界最大國中國",
                "religion" => "基督教(80%)、原住民信仰(20%)",
                "bilaterial_relations" => null,
                "main_bounds" => "Lesotho Loti (LSL)",
                "exchange_rate" => '1 US$≒12.0583 Lesotho Loti (2018/03)',
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/b8087544-cf5c-4162-ac67-56465845a52a.GIF",
                "is_diplomatic" => 0,
                "language" =>
                    "英語(官方語文)、席索托語(Southern Sotho)、祖魯語、科薩語",
                "main_media" =>
                    "賴索托國家廣播電臺( https://radiolesotho.com/#/video-details ) 人民的選擇調頻電臺( http://www.pcfm.co.ls ) 公眾的眼睛週報( https://www.publiceyenews.com/pages/news.html ) 賴索托政府網站( http://www.gov.ls/gov_webportal/home/index.html )",
                "population" => "2,153,998人 (2021)",
                "voltage" => "220伏特",
                "time_difference" => "-6:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/cd66e329-955b-46ef-ab03-39a3f4d8e83e.JPG",
                "political_system" => "君主立憲/內閣制",
                "history_intro" =>
                    "1818年莫修修一世（Moshoeshoe I）建立巴索托蘭（Basutoland）。1843年12月成為英國保護地。1959年9月英國女王伊莉莎白二世批准巴索托蘭自治憲法，除國防、外交、安全及公營事業外，允許巴索托蘭逐步自治。1960年1月巴索托蘭舉行首次選舉，巴索托蘭國會黨（BCP）大勝。1962年12月聯合國大會通過決議，確認巴索托蘭獨立權利。1966年10月4日巴索托蘭宣布獨立，定名賴索托王國（Kingdom of Lesotho），以國王莫修修二世（II）為元首，由巴索托蘭國民黨（BNP）黨魁喬納森（Leabua JONATHAN）出任總理。1970年1月舉行獨立後首次大選，在野黨巴索托蘭國會黨獲勝，喬納森總理拒絕交出權力，反而宣布進入緊急狀態，將在野黨人士下獄，國王則流亡荷蘭。1986年1月賴國賴侃亞少將（Justin Metsing LEKHANYA）發動政變，取代喬納森總理至2020年5月19日。Moeketsi Majoro在5月12日宣佈將出任新總理，并於5月20日獲選並宣誓就任。1991年4月，首席軍委拉麥瑪少將（Elias Phisoana RAMAEMA）逼退賴侃亞下臺，恢復政黨活動。1991年10月新王賴濟三世（Letsie III）舉行加冕典禮。1993年3月國會大選，巴索托蘭國會黨贏得全數65席後執政。1997年巴索托蘭國會黨內鬨，黨魁牟黑雷（Ntsu MOKHEHLE）另組賴索托民主議會黨（LCD），於1998年3月、2002年5月及2007年2月大選中三度勝選，莫希西利（Pakalitha MOSISILI）三度擔任總理。2012年5月大選中，有18個政黨參與競選，由塔巴內(Motsoahae Thomas THABANE)擊敗LCD，籌組聯合政府。2014年8月30日一場未遂的軍事政變迫使塔巴內逃往南非，聯合政府瓦解，莫希西利於2015年2月大選後聯合7黨恢復執政。2017年3月1日因莫希西利與所屬政黨副黨魁Monyane MOLELELI鬧翻，國會通過不信任案，莫希西利建請國王解散國會改選獲得同意。6月3日大選後Thomas Thabane當選總理。",
                "parliament" =>
                    "兩院制。參議院（Senate）33席(22席為資深酋長擔任、11席由執政黨派任)，負責審查眾議院通過之法案。眾議院(Assembly)120席(80席由單一選區直選產生、40席按政黨得票比例分配)，任期5年。",
                "cabinet" =>
                    "總理為眾議院多數黨領袖。現任總理Moeketsi Majoro於2020年5月20日就任。",
                "judiciary" => "設有上訴法院、高等法院及地方法院。",
                "headman" =>
                    "賴濟三世國王（King Letsie III、1996年2月7日登基）為虛位元首。",
                "fa_minister" => "Mpotjoane Lejone",
                "major_political_parties" =>
                    "繁榮革新黨(Revolution for Prosperity ,RFP)、民主議會黨（Democratic Congress, DC）、全巴索托會議黨（All Basotho Convention, ABC）、賴索托民主議會黨（Lesotho Congress for Democracy, LCD）、巴索托國民黨（Basotho National Party, BNP）、國家獨立黨（National Independent Party, NIP）、巴索托國會黨(Basotho Congress Party, BCP)等。",
                "financial_incoming" =>
                    "2019年政府財政收入112.41億美元，支出135.56億美元",
                "export_value" => 'US$8.83億(2020)',
                "import_value" => 'US$19.76億(2020)',
                "export_item" =>
                    "紡織品、鞋類、成衣、羊毛、家畜、電力、水、鑽石",
                "import_item" => "食品、建材、車輛、機械、藥品、石化產品",
                "main_export_countries" => "南非、美國(2020)",
                "main_import_countries" => "南非(2020)",
                "export_to" => 'US$4,759萬(2021)',
                "import_from" => 'US$64萬(2021)',
                "foreign_relationship" =>
                    "1966年10月17日加入聯合國。賴索托為非洲聯盟(AU)、南部非洲關稅同盟（SACU）、南部非洲發展共同體（SADC）等區域組織會員國。由於地理關係，政治及經濟受鄰國南非影響，近幾年來加強與歐盟、聯合國專門機構、非洲聯盟(AU)、美、中國大陸、日、韓及北歐國家的關係，致力於爭取外援、引進外資，以促進經濟發展。",
                "foreign_policy" =>
                    "賴索托奉行中立與睦鄰外交，積極參與區域事務，主張與不同政治、經濟制度的國家和平共處。",
                "time_range" => "較台灣時間晚6小時",
                "resident" => "駐南非代表處（兼轄）",
                "national_flag" =>
                    "是一面三色旗，由藍、白、綠三條橫條組成。中間有一頂黑色巴索托帽。縱橫比例2:3。藍色代表天空、雨水，白色象徵和平，綠色意為賴索托的青翠大地。該國旗啟用於2006年10月4日，以慶祝賴索托王國獨立40周年，並表達該國人民對和平的渴望。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            179 => [
                "name" => "賽普勒斯共和國",
                "name_in_en" => "Republic of Cyprus",
                "short_name" => "賽普勒斯",
                "short_name_in_en" => "Cyprus",
                "capital" => "尼柯西亞",
                "capital_in_en" => "Nicosia",
                "national_day" => "10月 1日",
                "join_un_day" => "1960年9月20日",
                "area_size" => "9,250平方公里",
                "geographic" =>
                    "地中海東北部，北與土耳其、東與敘利亞隔海相望。",
                "religion" => "希臘東正教、伊斯蘭教",
                "bilaterial_relations" => null,
                "main_bounds" => "歐元(Euro; 2008年1月1日開始使用)",
                "exchange_rate" => "1歐元兌32.37新台幣（2022年12月13日）",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/ed78be42-6d30-4600-8831-c389490dab4c.GIF",
                "is_diplomatic" => 0,
                "language" => "希臘語、土耳其語、英語",
                "main_media" =>
                    "賽普勒斯郵報(Cyprus Mail)、Financial Mirror(財政鏡報)、自由報 (Phileleftheros)、政治新聞報（Politis News）、真言報 (Alithia)、CYBC(公視)、Sigma TV、Ant1",
                "population" => "121.6萬人(2021年)",
                "voltage" => "220伏特",
                "time_difference" => "-6:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/809fc413-7cf8-43bc-8346-b61825898c9c.jpg",
                "political_system" => "共和國；總統制",
                "history_intro" =>
                    "賽普勒斯在歷史上曾先後隸屬於埃及、希臘、波斯、羅馬帝國及奧圖曼土耳其帝國。1878年為防範帝俄南侵，土耳其將賽島行政權讓與英國，1925年英土簽訂『洛桑條約』，賽島正式成為英國殖民地。1959年2月11日希臘、土耳其與英國會商並簽訂『倫敦協定』，三方同意賽普勒斯獨立。賽國獨立後不久，希裔與土裔即為其在國會之席位與權力之行使而發生流血衝突。1974年希臘曾試圖以軍力弭平衝突，惟土國亦以此為由，派軍進入賽島，迅速佔領賽島北方三分之一之區域，土裔賽人並於1983年11月宣布成立「北賽普勒斯土耳其共和國」，北賽遵循其自創之憲法，並擁有獨自運作之政府組織及民意機構，惟僅獲土耳其一國承認，且遭各國際組織排除在外。國際社會均瞭解賽島分裂之現實，在討論賽島問題時，多以南賽所代表之賽普勒斯共和國為主。2008年2月南賽總統Dimitris Christofias當選後，極力推動賽島和平方案，國際間亦全力協助並鼓勵，南北賽領導人雖於2008年9月起展開談判，惟進展有限。雙方最近談判係於2017年7月在瑞士舉行，各界咸認係數十年來最接近成功可能的一次，惟最終仍宣告失敗。",
                "parliament" =>
                    "為一院制，共有80席，任期5年，依賽國憲法規定，南賽代表56席，北賽代表24席，南賽之席位經由普選產生，北賽之24席因南北賽目前仍處分裂分治之狀態，爰並未補實。2021年5月國會大選，各黨得票率如下：民主大會（DISY）27.77%(17席)、勞動人民進步黨(AKEL)22.34%(15席)、民主黨（DIKO）11.29%(9席)、國家人民連線(ELAM) 6.78% (4席)、社會民主運動（EDEK）6.72%(4席)、民主陣線(DIPA) 6.10%(4席)、綠黨(Greens) 4.41% (3席)。",
                "cabinet" => "總統掌握實權,內閣閣員由總統任命。",
                "judiciary" =>
                    "採三級制、設有地方法院、上訴法院及最高司法院，法官由總統任命。",
                "headman" =>
                    "尼克斯．阿拿斯達夏迪斯(Nicos Anastasiades) (2013年2月迄今)",
                "fa_minister" =>
                    "優安尼斯．卡蘇里迪斯(Ioannis Kasoulides) (2022年1月11日迄今)",
                "major_political_parties" =>
                    "民主黨(DIKO)、勞動人民進步黨(AKEL)、民主大會黨(DISY)、社會民主運動黨(EDEK)。",
                "financial_incoming" =>
                    "收入98億7,520萬歐元，支出102億8,430萬歐元 (2021年)",
                "export_value" => "32億8,670萬歐元 (2021年)",
                "import_value" => "85億3,120萬歐元 (2021年)",
                "export_item" =>
                    "船舶、醫藥品、乳製品、雞蛋、蜂蜜 、電機設備、有機化學品、蔬菜、水果",
                "import_item" => "礦物燃料、油、船、機械、鍋爐、藥品",
                "main_export_countries" => "荷蘭、利比亞、希臘、英國",
                "main_import_countries" => "希臘、義大利、英國、以色列",
                "export_to" => "2,034萬美元 (2021年)",
                "import_from" => "849萬美元 (2021年)",
                "foreign_relationship" =>
                    "親西方，尤傾向西歐，與英國政經關係至為密切。1961年參加不結盟國家會議，對外採不結盟中立之立場。賽國因希、土兩裔人民之爭而分別援引希臘及土耳其介入，致其對外政策受希、土兩國影響甚深。賽國於2004年加入成為歐盟成員，惟歐盟之各項措施僅及於南賽。現為各國承認之南賽政府在對外關係上，與希臘甚為緊密，更極力爭取歐盟成員之支持，而北賽則與土耳其採一致立場。多年來國際間極盼促成南北賽和平統一，致賽國必須經常面對國際社會主要成員不同之政治壓力。",
                "foreign_policy" =>
                    "賽國因希、土兩裔人民之爭而援引希臘、土耳其介入爭端，其對外政策受希、土兩國影響至鉅。",
                "time_range" =>
                    "較台灣慢6小時(4月至10月日光節約時間較台灣慢5小時)",
                "resident" => "無(由駐希臘代表處兼轄)",
                "national_flag" => null,
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            180 => [
                "name" => "赤道幾內亞共和國",
                "name_in_en" => "Republic of Equatorial Guinea",
                "short_name" => "赤道幾內亞",
                "short_name_in_en" => "Equatorial Guinea",
                "capital" => "馬拉博 （Malabo）",
                "capital_in_en" => "Malabo",
                "national_day" => "10月12日",
                "join_un_day" => "1968年11月12日",
                "area_size" => "全國面積28,051平方公里，為非洲小國之一。",
                "geographic" =>
                    "由畢爾科島（Bioko）、非洲大陸里約慕尼（Rio Muni）及與其鄰近的島嶼所組成。北臨喀麥隆，東南與加彭為鄰，西瀕大西洋。",
                "religion" => "主要宗教信仰為天主教。",
                "bilaterial_relations" => null,
                "main_bounds" => "中非法郎 （XAF）",
                "exchange_rate" =>
                    "1 EURO = 655.957 XAF（歐元與中非法郎採固定匯率）",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/6fb4323d-a9e0-4204-9ae5-297182be851d.GIF",
                "is_diplomatic" => 0,
                "language" =>
                    "官方語言為西班牙語、法語及葡萄牙語，以西班牙語為主（67.6%）。",
                "main_media" =>
                    "西語報紙（El Tiempo、La Opinión、La Gaceta、El Ebano、La Verdad、La voz del pueblo）、收音機、電視台等。",
                "population" => "163萬人（2021年）",
                "voltage" => null,
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/077103c1-f04e-4e02-9580-c4ff2d3361f1.JPG",
                "political_system" => "共和國、總統制、多黨制",
                "history_intro" =>
                    "赤道幾內亞大陸部分的原始居民為俾格米人，他們的領地後來被班圖人占有。1471年至1472年，葡萄牙航海家斐南•德•波（Fernão do Pó）在尋找通往印度的航路過程中發現了斐南多波島，將其命名為「福爾摩薩」（Formosa）。安諾本島是在新年發現的，並由此得名。1499年，根據托爾德西里亞斯條約，位於西經50度以西的領土歸西班牙，以東的領土歸葡萄牙，葡萄牙人由此占有亞洲和非洲地區，南美洲大部分為西班牙所有。及至奴隸貿易興起，葡萄牙人便壟斷了非洲的奴隸來源和出口權。這就引起西班牙的強烈不滿，西班牙也要求在非洲得到供應奴隸的地方。1778年，葡萄牙同意讓給西班牙一些非洲沿海島嶼，以及大陸上位於歐果韋河（位於今日加彭共和國境內）和尼日河之間的領土，以此作為交換條件，葡萄牙人在西經50度以西占據的美洲地區（今日巴西的西部）的所有權得到西班牙承認。同年西班牙人在福爾摩薩登陸，將其改名為斐南多波島，以紀念其發現者。但是，由於黃熱病橫行，西班牙人在島上移民的嘗試屢次失敗，迫使其在1781年撤出該島。西班牙內戰後，西屬幾內亞得到了更多的開發。1959年，該地區被劃為斐南多波和木尼河兩個海外省。1964年1月，兩省取得內部自治地位。至1968年，在民族獨立運動和聯合國的雙重壓力下，西班牙同意給予其獨立地位。1968年10月12日，西屬幾內亞宣告獨立，改國名為赤道幾內亞共和國。",
                "parliament" =>
                    "議會（西班牙語：Parlamento）是赤道幾內亞的國家立法機關。議會實行兩院制，由參議院和眾議院組成。每屆議會任期5年。執政的民主黨及其競選聯盟在100個議席中佔99席，爭取社會民主聯盟獲1席。",
                "cabinet" => "由總統全權提名。",
                "judiciary" =>
                    "由最高法院、總檢察院、上訴法院、初審法庭、市鎮法庭以及最高軍事法庭組成。最高法院是全國最高審判機關，下轄民事、刑事、行政和習慣法四庭。總檢察院為國家法律監督機關和國務委員會的諮詢機構。",
                "headman" => "恩格瑪（Teodoro Obiang Nguema Mbasogo）",
                "fa_minister" => "Simeón Oyono Esono Angue",
                "major_political_parties" =>
                    "赤道幾內亞民主黨（Partido Democratico De Guinea Ecuatorial）、社會民主人民聯盟黨（Convergencia Social Democratica Popular）、民主社會聯盟（Union Democratica Social）等共有13個合法政黨。",
                "financial_incoming" =>
                    "2017年政府預算收入為21.14億美元，支出為25.23億萬美元。",
                "export_value" => "32.00億美元（2020年）",
                "import_value" => "17億2400萬美元（2020年）",
                "export_item" => "原油",
                "import_item" => "生活日常用品及石油採集設備",
                "main_export_countries" => "法國、中國、美國、西班牙、荷蘭等",
                "main_import_countries" => "西班牙、中國、美國、法國、喀麥隆等",
                "export_to" => "243,406美元（2021年）",
                "import_from" => "10,100,344美元（2021年）",
                "foreign_relationship" =>
                    "與其宗主國西班牙擁有正式外交關係，於首都互設有大使館。美國曾一度於1995年關閉其駐赤道幾內亞大使館，但因有眾多美國原油開發公司設立於赤道幾內亞，美國於2003年再度於該國開設大使館。",
                "foreign_policy" =>
                    "赤道幾內亞十分重視對其前宗主國西班牙之關係，並為伊比利亞美洲國家組織成員國之一。",
                "time_range" => "較國內時間慢7小時，自10月至次年3月則慢8小時。",
                "resident" => "駐奈及利亞代表處兼轄",
                "national_flag" => null,
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            181 => [
                "name" => "越南社會主義共和國",
                "name_in_en" => "Socialist Republic of Vietnam",
                "short_name" => "越南",
                "short_name_in_en" => "Vietnam",
                "capital" => "河內",
                "capital_in_en" => "Ha Noi",
                "national_day" => "9月2日",
                "join_un_day" => "1977年9月20日",
                "area_size" => "33萬1,410平方公里（約臺灣9倍大）",
                "geographic" =>
                    "位於中南半島東側，北與中國廣西壯族自治區及雲南省為界，西臨寮國及柬埔寨，東濱「東京灣」（越南稱「北部灣」）及南海（越南稱「東海」），全境狹長如Ｓ狀。境內3/4為山地森林，平原主要分佈於北部紅河三角洲及南部九龍江三角洲。主要港灣有北部之海防（Hai Phong）、中部之峴港（Da Nang）、中南部之金蘭灣（Cam Ranh）及南部之頭頓（Vung Tau）及胡志明市（Ho Chi Minh City）。主要國際機場有河內之「內排」（Noi Bai）機場及胡志明市之「新山一」（Tan Son Nhat）機場。",
                "religion" => "佛教、天主教、道教、基督教",
                "bilaterial_relations" => null,
                "main_bounds" => "Dong(盾)",
                "exchange_rate" =>
                    "約1美元（USD）兌換23,45越南盾（VND），惟實際仍須視匯率浮動情形而定，建議至臺灣銀行（https://rate.bot.com.tw/xrt?Lang=zh-TW）或兆豐商銀（https://www.megabank.com.tw/personal/foreign-service/forex）網站查詢當日匯率。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/1de47eb3-8ef7-448b-ab2b-349d9ca80d58.gif",
                "is_diplomatic" => 0,
                "language" =>
                    "越語，略通英語、華語、俄語及法語，粵語可在南部華族間溝通。",
                "main_media" =>
                    "越南中央廣播電視台、越南人民報、勞動日報、青年報、年輕人報、公安報、英文VNExpress、Vietnam News、中文西貢解放日報等",
                "population" =>
                    "約9,851萬人( 資料來源：越南統計總局 https://www.gso.gov.vn/en/homepage/ )",
                "voltage" => "220伏特",
                "time_difference" => "-1:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/70d9758e-2fa5-4503-bdd8-2086fa91177f.JPG",
                "political_system" => "社會主義共產國家",
                "history_intro" =>
                    "越南古稱文郎、安南、大瞿越，曾為中國藩屬近1,000年，後為法國統治80餘年。1954年法軍奠邊府戰役失敗，簽訂日內瓦停戰協定，分裂為南北越，北方成立越南民主共和國，南方成立越南共和國。50年代末，爆發越戰，在美蘇強權介入下，越戰持續20餘年，1975年4月30日北越攻陷西貢，全國統一，1976年7月2日，更改國名為越南社會主義共和國。",
                "parliament" =>
                    "國會任期5年，通常每年舉行兩次例會，現任國會主席為王廷惠（Vuong Dinh Hue），2021年5月26日舉行第15屆國會選舉，選出500名國會代表及各省市地方議會代表，投票率高達99.16％。",
                "cabinet" =>
                    "總理府為最高行政機關，下設22個部會及相當於部長級之機關。現任總理為范明政(Pham Minh Chinh)。",
                "judiciary" => "分地方人民法院、高等人民法院及最高人民法院。",
                "headman" => "國家主席武文賞（Vo Van Thuong）",
                "fa_minister" => "裴青山(Bui Thanh Son)",
                "major_political_parties" =>
                    "除共產黨外，尚有若干政治組織如：越南祖國陣線、胡志明共青團、越南婦女聯盟、越南農民協會、老兵協會及工團組織。",
                "financial_incoming" =>
                    "2022年越南財政收入1803.6兆越盾，為全年預算127.8%，較去年同期成長15%；財政支出1562.3兆越盾，相當全年預算87.5%，較去年同期成長8.1%。",
                "export_value" => "3,713.04億美元 (2022)",
                "import_value" => "3,589.02億美元 (2022)",
                "export_item" =>
                    "紡織品及成衣、原油、電話機及其零件、鞋類、水產品、電腦電子產品及其零件、機械設備及其零件、木製品、稻米、橡膠、咖啡",
                "import_item" =>
                    "機械及其零件、電腦電子產品及其零件、各種汽油、布料、鋼鐵、電話機及其零件、塑膠原料、紡織成衣鞋類及其附件、化學原料",
                "main_export_countries" =>
                    "美國、中國大陸、韓國、日本、香港(臺灣排第13) (2022)",
                "main_import_countries" =>
                    "中國大陸、韓國、日本、臺灣、泰國 (2022)",
                "export_to" => "226.314億美元 (2022)",
                "import_from" => "51.178億美元 (2022)",
                "foreign_relationship" =>
                    "近年來除與中共大幅強化關易外，與東協周邊國家及日本、南韓、澳洲、紐西蘭等亞太國家及美國、西歐、俄羅斯等強權國家及地區均積極往來，保持良好互動。",
                "foreign_policy" =>
                    "越南外交現正加強與不同政治、社會制度國家廣泛交往，為國家整體發展及融入全球體系服務。改善與鄰國關係向為越南外交政策第一優先，推行獨立、自主、多邊與多元外交關係(diversification and multilateralization of relations)之外交政策。越南迄有190個邦交國，外國元首、總理、部長或其他重量級人士訪越絡繹不絕，除曾舉辦法語國家高峰會議（1997年）、東協高峰會（1998年）、東協外長會議（2001年）、亞歐高峰會議（2004年）、APEC年會（2006年）、2007年加入WTO及出任聯合國安理會2008至2009非常任理事國，2010年擔任東協輪值主席國、2011年舉辦亞洲開發銀行（ADB）年會，2017年越南再次主辦APEC年會。2019年在越南舉行「川金二會」，2020年再度擔任東協輪值主席國。2019年6月高票當選(192/193)聯合國安理會，2020年至2021年非常任理事國。",
                "time_range" => "較台灣時間慢1小時",
                "resident" =>
                    "駐越南代表處（河內）https://www.roc-taiwan.org/vn/ 駐胡志明市經濟文化辦事處 https://www.roc-taiwan.org/vnsgn/",
                "national_flag" => "http://www.mofa.gov.vn/en/tt_vietnam/",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            182 => [
                "name" => "辛巴威共和國",
                "name_in_en" => "Republic of Zimbabwe",
                "short_name" => "辛巴威",
                "short_name_in_en" => "Zimbabwe",
                "capital" => "哈拉雷",
                "capital_in_en" => "Harare",
                "national_day" => "4月 18日",
                "join_un_day" => "1980年8月25日",
                "area_size" => "390,757平方公里",
                "geographic" =>
                    "非洲南部內陸國，北鄰尚比亞，東接莫三比克，西依波札那，南與南非接壤",
                "religion" =>
                    "基督教(82.7%)、天主教(6.7%)、伊斯蘭教(0.4%)、傳統信仰(1.6%)",
                "bilaterial_relations" => null,
                "main_bounds" =>
                    '辛國發行辛幣(ZWD/Z$)，辛幣與美金等外幣流通其境內。辛國儲備銀行(Reserve Bank of Zimbabwe)於2021年11月中旬公告辛幣(ZWD)走貶近況，美金兌換辛幣率於七日內由1:99.93跌至1:105.69(跌幅5.7%)，且認公告匯率與市場實際交易之匯率(約1:170)差距甚大，辛國高通膨率問題連帶影響辛幣流通，民眾使用美金現鈔交易的意願仍高。2022年2月間，相關報導敘及，當地市場對辛幣似普遍缺乏信心，致影響辛幣流通，意願甚低，且有持續貶值之虞。',
                "exchange_rate" => "市場變動性高，敬請注意動態",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/ab5d0387-aa2e-4353-b1a9-a33555ed1ad4.GIF",
                "is_diplomatic" => 0,
                "language" => "英語（官方語言）、Shona語",
                "main_media" =>
                    "辛巴威獨立報(Zimbabwe Independent)、先驅報(The Herald)、每日報(Daily News)及辛巴威廣播電視台(ZBC)等。",
                "population" => "1,486萬人（2020）",
                "voltage" => "220伏特",
                "time_difference" => "-6:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/customfile/sites/mapurllink/579b8358-ee8a-41d2-b8f9-772a280f720b.jpg",
                "political_system" => "國體：共和國。政體：總統制。",
                "history_intro" =>
                    "1965年脫離英國成立羅德西亞（Rhodesia），由白人統治，當地黑人反抗，1979年白人政權與黑人團體在英國政府安排下進行協商，雙方結束戰爭，簽訂蘭卡斯特協定（Lancaster Agreement）。1980年2月舉行大選，「辛巴威非洲民族聯盟」（Zimbabwe African National Union, ZANU）領袖穆加比（Robert Gabriel Mugabe）贏得大選。同年4月18日，羅德西亞改名為辛巴威共和國，正式獨立建國。",
                "parliament" =>
                    "二院制。參議院共80席，60席民選產生，任期5年。眾議院共270席，民選產生，任期5年。",
                "cabinet" =>
                    "內閣閣員由總統任命，對議會負責。辛巴威於2013年9月11日撤銷總理一職。",
                "judiciary" =>
                    "設有最高法院及高等法院。採德國及英美混合式司法制度。",
                "headman" =>
                    "總統: 穆南加格瓦(Emmerson Mnangagwa)                                                     副總統：Constantino Chiwenga",
                "fa_minister" => "夏瓦 (Dr Frederick Shava；2021年2月8日任命)",
                "major_political_parties" =>
                    "執政黨為辛巴威非洲民族聯盟–愛國陣線（Zimbabwe African National Union-Patriotic Front, ZANU-PF），反對黨包括公民改革聯盟（Citizens Coalition for Change, 原名MDC）等",
                "financial_incoming" =>
                    "2018年政府財政收入50.2億美元，支出76.42億美元",
                "export_value" => "62億美元(2021)",
                "import_value" => "49億美元(2021)",
                "export_item" => "金銀鎳礦(合占約75%)及農產品",
                "import_item" => "機械及運輸設備、製成品、化學品、能源、食品",
                "main_export_countries" =>
                    "南非、莫三比克、阿拉伯聯合大公國、尚比亞(2020)",
                "main_import_countries" => "南非、尚比亞(2020)",
                "export_to" => 'US$194萬(2021)',
                "import_from" => 'US$604萬(2021)',
                "foreign_relationship" =>
                    "1980年8月25日加入聯合國。1986年9月第25屆世界不結盟國家會議在辛巴威首都舉行，由穆加比任主席3年。辛巴威為非洲聯盟（African Union, AU）及南部非洲發展共同體（SADC）會員國。人權紀錄不佳的辛巴威於2005年4月當選聯合國人權委員會成員，卻廣遭各國及人權組織嚴厲抨擊。辛巴威當局因侵害人權，歐盟自2002年起對其實施制裁，禁止包括穆加比在內的160多名辛巴威官員入境、凍結其在歐盟國家的存款和財產、並暫停各項援助貸款。辛巴威的商人與公司也在2008年7月成為歐盟制裁措施的對象。2013年12月8日辛巴威宣布退出大英國協，目前已申請恢復會籍，尚未獲允。",
                "foreign_policy" =>
                    "非洲聯盟（African Union, AU）、南部非洲發展共同體（SADC）等國際組織成員。",
                "time_range" => "較台灣慢6小時",
                "resident" => "目前由駐南非代表處兼轄。",
                "national_flag" =>
                    "辛巴威國旗啟用於1980年4月18日。左為一黑邊白地三角形，中有一紅星，星上有辛巴威鳥。餘自上而下為綠-黃-紅-黑-紅-黃-綠共七條橫帶。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            183 => [
                "name" => "迦納共和國",
                "name_in_en" => "Republic of Ghana",
                "short_name" => "迦納",
                "short_name_in_en" => "Ghana",
                "capital" => "首都為阿克拉（Accra）。",
                "capital_in_en" => "Accra",
                "national_day" => "3月 6日",
                "join_un_day" => "1957年3月8日",
                "area_size" =>
                    "面積約238,537平方公里。氣候乾濕季分明，沿海平原和西南部阿散蒂高原屬熱帶雨林氣候，伏塔河谷和北部高原地區屬熱帶草原氣候，氣溫較高，降雨量由西南往東北遞減。",
                "geographic" =>
                    "迦納位於非洲西部、幾內亞灣北岸，西鄰象牙海岸，北接布吉納法索，東毗多哥，南瀕大西洋。",
                "religion" => "基督教(71.2%)、回教( 17.6%)、傳統宗教(5.2%)",
                "bilaterial_relations" => null,
                "main_bounds" => "塞地(Ghanaian New Cedi, GHC)",
                "exchange_rate" =>
                    "詳細匯率資訊建議至臺灣銀行(https://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/207aa1aa-a2d3-4b88-9a84-160873adc45d.GIF",
                "is_diplomatic" => 0,
                "language" =>
                    "官方語言為英語，其他主要通行語言為Asante 語、Ewe語、 Fante語等。",
                "main_media" =>
                    "電視：Ghana Broadcasting Corporation(GBC], Ghana TV, Metro TV, TV3。廣播：Ghana Broadcasting Corporation(GBC], Adom FM, Joy FM, Peace FM。平面媒體：The Ghanaian Chronicle, Daily Graphic, The Mirror, Ghanaian Times, The Herald等。",
                "population" => "人口：32,833,031人(2021)",
                "voltage" => "220伏特",
                "time_difference" => "-8:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/4eda2f13-e965-4289-a21e-8bdaf9aa6f5f.JPG",
                "political_system" => "共和國／總統制",
                "history_intro" =>
                    "迦納舊名黃金海岸（Gold Coast）。1471年葡萄牙人率先登陸，其後其他歐洲人陸續來到。1844年英國與方逖（Fanti）地區的酋長簽署協議，英國勢力正式入侵迦納，1874年黃金海岸成為英國屬地。1957年3月6日黃金海岸在恩克魯瑪（Kwame Nkrumah）領導下，透過立法會議投票通過獨立，並改名為迦納共和國，係非洲南沙哈拉殖民地中首先獨立之國家。 迦納在1981年羅林斯（Jerry Rawlings）將軍執政前曾歷經多次軍事政變， 1992年恢復憲政並施行多黨政治；羅林斯先後贏得1992、1996年總統大選，因憲法規定總統僅能連任一次，羅林斯即未參加2000年大選，而該年庫佛（John Kufuor）獲選為總統，並於2004年再度連任。2009年米爾斯(John E. A. Mills) 獲選為總統，惟在2012年7月間猝逝，代理總統職務之副總統馬哈瑪（John Mahama）在2012年底大選勝選擔任總統，2016年底馬哈瑪尋求連任失敗，其競爭對手阿庫佛阿多(Nana Akufo-Addo)當選總統，阿庫佛阿多總統於2017年元月就職，並於2020年12月競選連任成功。。",
                "parliament" =>
                    "單一國會(275席)，由人民直接選舉產生，任期4年。",
                "cabinet" =>
                    "內閣名稱為部長會議，閣員由總統提名，並經國會同意。",
                "judiciary" =>
                    "設有最高法院、上訴法院、高等法院、巡迴法院、地方法院。",
                "headman" => "總統阿庫佛阿多 (Nana Akufo-Addo)",
                "fa_minister" => "Shirley Ayorkor Botchwey",
                "major_political_parties" =>
                    "全民議會黨(All Peoples Congress, APC)、迦納自由黨(Ghana Freedom Party, GFP)、迦納工會運動黨(Ghana Union Movement Party, GUM)、新愛國黨（New Patriotic Party, NPP）、全民民主議會（National Democratic Congress, NDC)等。",
                "financial_incoming" => "2020年政府財政支出54.9億美元。",
                "export_value" => "131億美元（2020）",
                "import_value" => "161億美元（2020）",
                "export_item" => "金礦、原油、可可豆、可可醬、腰果等堅果。",
                "import_item" => "精煉汽油、汽車、米、貨車、冷軋鍍鐵。",
                "main_export_countries" =>
                    "瑞士、阿拉伯聯合大公國、中國、印度、荷蘭(2020)",
                "main_import_countries" =>
                    "中國、荷蘭、美國、印度、阿拉伯聯合大公國 (2020)",
                "export_to" => "30,798,066美元（2022）",
                "import_from" => "1,337,507美元（2022）",
                "foreign_relationship" =>
                    "迦納為大英國協會員國，1961年9月參加不結盟國家運動，目前亦為非洲聯盟及西非國家經濟共同體會員國。迦納前任外交部副部長Thomas Kwesi Quartey於  2017年元月30日當選非洲聯盟理事會副主席。 另迦納與奈及利亞設立「合作永久聯合理事會」。美國援助迦納改善電力、增加糧食安全、加強醫療照護及普及基礎教育。另美國提供迦納軍事、海巡合作，及教育等訓練計畫。",
                "foreign_policy" =>
                    "迦納外交政策目標為與西非國家維持友好關係，促進西非經濟整合及支持非洲聯盟。",
                "time_range" => "較臺灣時間慢8小時",
                "resident" => "駐奈及利亞代表處兼轄。",
                "national_flag" =>
                    "紅色象徵為獨立流血，黃色代表礦產，綠色代表森林與天然資源，黑星為指引非洲自由的方向。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            184 => [
                "name" => "阿富汗",
                "name_in_en" => "Afghanistan",
                "short_name" => "阿富汗",
                "short_name_in_en" => "Afghanistan",
                "capital" => "喀布爾",
                "capital_in_en" => "Kabul",
                "national_day" => "8月19日",
                "join_un_day" =>
                    "1946年11月19日，惟目前由塔利班成立之政權「阿富汗伊斯蘭大公國」(Islamic Emirate of Afghanistan) 尚未獲國際社會普遍承認。",
                "area_size" => "652,860平方公里",
                "geographic" =>
                    "中亞地區南部，北與塔吉克、烏茲別克、土庫曼為鄰，東北與中國接壤，東南接巴基斯坦，西臨伊朗，為一內陸國。屬於大陸性氣候，全年乾燥少雨，冬季寒冷，夏季炎熱。",
                "religion" => "伊斯蘭教",
                "bilaterial_relations" => null,
                "main_bounds" => "阿富汗尼(Afghani，貨幣編號AFN)",
                "exchange_rate" => "1 USD = 86.3462 AFN(2023年3月21日)",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/b65d4e11-366a-4b08-8829-4cdfc6e334d2.GIF",
                "is_diplomatic" => 0,
                "language" => "達利語(Dari，阿富汗波斯語)、普什圖語(Pashto)",
                "main_media" =>
                    "自從2021年8月15日迄今，由於財源不足、大部分媒體從業人員離開國境以及塔利班政府施加相關禁令等因素，獨立媒體的網路播放平台已大幅減少。媒體工作者僅能刊播自我約束且微幅批評塔利班政府的言論。阿富汗黎明電視台(Tolo News)引述阿富汗新聞工作者自由協會(FAAJ)的資料，指出阿富汗544家媒體機構中，有218家於2021年關閉，導致7000名媒體工作者失業。在2021年8月15日之前，前阿富汗政府擁有之傳播工具係「阿富汗廣電」(Radio Television Afghanistan, RTA)，在首都喀布爾及各省分經營一系列的廣播電台與電視台；在全國境內則估計有私營廣播電台174家和電視台83家。電視和廣播仍為最主要之傳播媒體平台。僅有5分之1的居住在城市的阿富汗人使用網路，大部分是透過智慧手機，而青年人是主要的網路使用者。",
                "population" => "約3,834萬人(2022年)",
                "voltage" => "220V",
                "time_difference" => "-3:30",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/34de2b75-3a22-4a0c-9129-1d676e0ab9db.JPG",
                "political_system" =>
                    "塔利班政權頃向政教合一，但尚未獲國際普遍承認。",
                "history_intro" =>
                    "1.阿富汗王國建立於1747年，19世紀後，國力日衰，成為英國和沙俄的權力角逐場。1919年脫離英國殖民統治獨立建國。1979年蘇聯入侵阿富汗，但遭阿富汗反抗軍不屈不撓的反抗，遂於1989年自阿富汗撤軍，蘇聯扶植的共產政權於1992年正式瓦解。之後反抗軍各派系內訌並混戰，直到起源於巴基斯坦的塔利班(神學士，Taliban)以強烈之宗教意識與不畏死的戰士為後盾，於1996年統一阿富汗大部分地區。 2.2001年發生美國911恐怖攻擊事件，主事者奧薩瑪‧賓‧拉登潛藏阿富汗，受塔利班庇護，美國爰發動反恐戰爭，進軍阿富汗，推翻塔利班政權，塔利班成員改以游擊戰方式持續進行反政府武裝活動。2004年卡札伊(Hamid Karzai)當選首任阿富汗民選總統。2005年12月國會開始運作，儘管已成立憲政政府，塔利班勢力在阿富汗東部及西部仍活躍，腐敗與毒品氾濫等問題威脅阿富汗穩定與發展。 3.2010年10月，阿富汗前總統拉巴尼(Rabbani)推動阿富汗政府與塔利班等反政府武裝勢力和談，但拉巴尼於2011年遇刺身亡，阿富汗和解進程嚴重受挫。2012年1月，阿富汗塔利班政權宣布在卡達設立和談辦公室，目的係與美國接觸以進行和談。後因發生駐阿富汗美軍焚燒古蘭經和槍殺阿富汗平民等事件，阿富汗塔利班政權宣布中止與美國接觸。2013年6月，阿富汗塔利班政權以「阿富汗伊斯蘭大公國」名義宣布在卡達首都杜哈成立塔利班辦事處。 4.2015年阿富汗塔利班政權與阿富汗政府在巴基斯坦進行首輪公開和談，後因塔利班領導人奧馬(Mohammed Omar)死訊曝光，和談一度中止。 5.2020年2月美國與塔利班在卡達杜哈簽署和平協議，共識如次：(1)塔利班承諾14個月內讓所有美國及盟國軍隊安全撤出；(2)美國允釋放5,000名塔利班士兵，交換塔利班釋放1,000名阿富汗前政府軍士兵；(3)美國承諾不再攻擊塔利班，也不再涉入阿富汗內部事務；(4)美國研議取消對塔利班之制裁，以交換塔利班不再收容恐怖主義組織，不核發恐怖分子簽證，不提供恐怖分子政治庇護。6.2021年4月美國宣布撤出阿富汗後，塔利班迅速擊潰政府軍，占領絕大多數阿富汗領土，8月15日攻入首都喀布爾後，前總統甘尼(Ashraf Ghani)出逃至阿拉伯聯合大公國。7.2021年8月19日，塔利班正式宣布重建「阿富汗伊斯蘭大公國(The Islamic Emirate of Afghanistan)」，定8月19日為國慶日，將建立政教合一的伊斯蘭大公國政府。",
                "parliament" => "尚未建立。",
                "cabinet" => "2021年8月15日塔利班成立臨時政府",
                "judiciary" =>
                    "塔利班臨時政府設有「最高法院」，由1位最高法院院長及為數不詳的法官組成；2021年8月15日以前，「最高法院」，則由1位最高法院院長及8位法官組成，並分成刑法、公安法、民法及商業法等部門。",
                "headman" => "總理-穆罕默德‧哈桑‧阿洪德(Mohammad Hasan Akhund)",
                "fa_minister" => "阿米爾‧汗‧穆塔基(Amir Khan Muttaqi)",
                "major_political_parties" => null,
                "financial_incoming" =>
                    "2017年阿富汗前政府財政收入約22億7,600萬元美元，財政支出約53億2,800萬美元。",
                "export_value" => "20萬美元(2022年)",
                "import_value" => "7萬2,257美元(2022年)",
                "export_item" => "天然氣、水果、毛毯、羊毛、棉花、皮革。",
                "import_item" => "機械、食品、紡織品、石化產品。",
                "main_export_countries" =>
                    "印度、巴基斯坦、伊朗、伊拉克、土耳其等。",
                "main_import_countries" =>
                    "中國大陸、伊朗、哈薩克、巴基斯坦、烏茲別克等。",
                "export_to" => "40萬美元(2021年)",
                "import_from" => "20萬美元(2021年)",
                "foreign_relationship" =>
                    "阿富汗伊斯蘭大公國尚未獲國際社會普遍承認。",
                "foreign_policy" => "尚未公布。",
                "time_range" => "較臺灣慢3.5小時",
                "resident" =>
                    "我國在阿富汗未設館處，該國由我駐沙烏地阿拉伯王國代表處兼轄。",
                "national_flag" => null,
                "area_name" => "亞西地區",
                "area_name_in_en" => "West Asia",
            ],
            185 => [
                "name" => "阿拉伯聯合大公國",
                "name_in_en" => "United Arab Emirates",
                "short_name" => "阿聯",
                "short_name_in_en" => "UAE",
                "capital" => "阿布達比",
                "capital_in_en" => "Abu Dhabi",
                "national_day" => "12月2日",
                "join_un_day" => "1971年12月9日",
                "area_size" => "83,600平方公里",
                "geographic" =>
                    "東與東南面接阿曼，西及西南與沙烏地阿拉伯為鄰，西北方為卡達半島，北濱阿拉伯灣（亦稱波斯灣），與伊朗隔海相望。",
                "religion" => "伊斯蘭教",
                "bilaterial_relations" => null,
                "main_bounds" => "Dirhams (Dhs)，AED",
                "exchange_rate" =>
                    "1 USD ≒ 3.6725 AED（詳細匯率資訊建議至臺灣銀行(https://rate.bot.com.tw/xrt)或兆豐商銀網站(https://www.megabank.com.tw/personal/foreign-service/forex)查詢）",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/d852dd67-583b-4656-aa50-4a0b7190b708.GIF",
                "is_diplomatic" => 0,
                "language" => "阿拉伯語、英語",
                "main_media" =>
                    "官方通訊社為 Emirates News Agency 簡稱 WAM。重要阿文日報計有聯合報(Al Ittihad)，海灣報(Al Khaleej)、今日阿聯報(Al Emarat Al Youm)、宣言報(Al Bayan)、輿論報(Al Roeya) 等；英文日報則有國家報(The National)、海灣新聞(Gulf News)、海灣時報(Khaleej Times) 及今日海灣報(The Gulf Today)等，此外亦有多種英、阿文雜誌與期刊（週刊、月刊）等。",
                "population" => "約997萬（2023年），其中外來人口約佔88%。",
                "voltage" => "220-240V，英規三孔插座",
                "time_difference" => "-4:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/966eb2f9-3401-4633-a051-7b188a10beaf.jpg",
                "political_system" => "聯邦政體、總統制。",
                "history_intro" =>
                    "阿聯境內於公元前3000年即有人類居住遺跡，自7世紀伊斯蘭教興起後，先後歷經鄂圖曼土耳其帝國、葡萄牙、荷蘭統治，17世紀後英國影響力漸增，阿國戰略位置日益重要，18世紀阿拉伯半島南部移入之部落係阿國住民之基礎。1892年此地成為英國保護領地。1968年1月，英國宣佈將於1971年底前撤退蘇伊士運河以東包括阿拉伯灣地區在內之駐軍，阿國7邦及巴林、卡達等國同年2月即在杜拜協商籌組聯邦，並擬於3月底正式宣布獨立。惟因未能達成協議，巴林及卡達乃各自於1971年8、9月間先行分別宣告獨立。7邦邦長於1971年7月18日再次集會杜拜，除拉斯海瑪邦以外之6邦簽署聯邦憲法草案，成立聯邦。同年12月3日阿拉伯聯合大公國乃宣布獨立建國。拉斯海瑪邦至1972年2月始宣布加盟成為現今由此7個邦聯合組成之阿聯大公國。",
                "parliament" =>
                    "阿聯依據憲法設有聯邦國民議會(Federal National Council )，其功能為：(一)通過、修正、駁回聯邦法律及財政法案草案；(二)審查年度總預算案及決算案；(三)討論對外條約及協定；(四)討論聯邦相關事務並提供意見。聯邦國民議會共有40個席次，議員任期4年，享言論免責權。依各邦人口比例分配席次，阿布達比及杜拜兩邦各8名，沙迦及拉斯海瑪兩邦各6名，歐姆庫溫、阿吉曼及富傑拉三邦各4名。1971年至2004年聯邦國民議會議員由各邦邦長指派，2006年時任阿聯總統Khalifa bin Zayed Al Nahyan核准聯邦國民議會通過第4號決議，40席議員中之20席仍由各邦邦長指派，餘20席由選舉人團(electoral college)投票產生。Khalifa總統指示，40席議員男女各半。選舉人團由各邦邦長遴選，選舉人團人數至少為該邦議員席次300倍以上。獲選選舉人團之成員得登記參選議員。議員須符合以下資格：(一)阿聯公民，且在所屬各邦永久居留；(二)當選時必須年滿25歲；(三)需有公民能力、行為能力、聲譽良好，未曾有不誠實行為，或已依法矯正；(四)具備良好之讀、寫能力；(五)不得同時擔任阿聯政府公職。",
                "cabinet" =>
                    "阿聯內閣由總統任命，總理由副總統兼杜拜邦長穆罕默德親王(Sheikh Mohammed bin Rashid Al Maktoum)擔任。目前內閣成員共計33人，包括總理兼國防部長、副總理兼財政部長、副總理兼內政部長、副總理兼總統事務部長、外交暨國際合作部長、寬容暨共存部長、內閣事務部長、衛生暨預防部長、能源暨基礎建設部長、工業暨先進科技部長、教育部長、文化暨青年部長、社區發展部長、經濟部長、氣候變遷暨環境部長、人力資源暨就業保障部長、司法部長、國民議會事務部長，以及15位國務部長(Minister of State)。",
                "judiciary" =>
                    "阿聯司法體系分為聯邦與地方政府兩層級，聯邦層級由阿聯司法部管轄全國審檢、指派法官、合格律師及翻譯；阿聯憲法規定各邦保有遵循聯邦法律或維持邦內自主法律體系之自由。目前阿布達比、杜拜及拉斯海瑪等3個邦仍保有自主法律系統，餘者沙迦、阿吉曼、富介拉及歐姆庫溫等邦則遵循聯邦法律體系。",
                "headman" =>
                    "穆罕默德親王 (Sheikh Mohamed bin Zayed Al Nahyan)",
                "fa_minister" =>
                    "阿布都拉親王 (Sheikh Abdullah bin Zayed Al Nahyan)",
                "major_political_parties" => null,
                "financial_incoming" =>
                    "歲入853億美元，歲出1,112億美元 (2020年)",
                "export_value" => "5,990億美元 (2022年)",
                "import_value" => "4,250億美元 (2022年)",
                "export_item" =>
                    "石油、天然氣、珍珠、貴金屬、寶石、機器設備、交通運輸工具",
                "import_item" => "珍珠、貴金屬、寶石、機器設備、交通運輸工具",
                "main_export_countries" =>
                    "日本、印度、伊朗、南韓、泰國、新加坡",
                "main_import_countries" => "印度、中國、美國、德國、日本、南韓",
                "export_to" => "14.185億美元(2022年)",
                "import_from" => "66.819億美元(2022年)",
                "foreign_relationship" =>
                    "阿聯與英國、美國、日本、中國大陸、印度等國經貿關係密切，並自印度、巴基斯坦、埃及、伊朗及南亞、東南亞等國引進大量專業人士及外勞，對阿聯基礎建設與發展極具貢獻，阿聯與提供專業經理、外勞輸出國家均維持友好關係。",
                "foreign_policy" =>
                    "採區域睦鄰政策，以不干涉他國內政及支持友邦領土完整為原則，積極參與海灣合作理事會(Gulf Cooperation Council)、阿拉伯聯盟(Arab League)及伊斯蘭合作組織(Organisation of Islamic Cooperation)等區域組織事務。2020年9月15日以色列、阿聯及巴林在美國華盛頓白宮簽署「亞伯拉罕協議」(Abraham Accords)，以阿及以巴關係正常化，2021年以色列在阿布達比大使館、在杜拜設總領事館，2021年4月6日特拉維夫及阿布達比直航開通。",
                "time_range" => "較台灣晚4小時(GMT+4)",
                "resident" => "有 (設於杜拜-杜拜辦事處，首都阿布達比無我駐館)",
                "national_flag" =>
                    "阿拉伯聯合大公國國旗中的綠色、白色、黑色及紅色，分別象徵著富饒(fertility)、中立(neutrality)、石油資源(petroleum resources)及團結(unity)，其中紅色更為阿聯成立前所有酋長國(emirates)旗子的傳統代表色。",
                "area_name" => "亞西地區",
                "area_name_in_en" => "West Asia",
            ],
            186 => [
                "name" => "阿曼王國",
                "name_in_en" => "Sultanate of Oman",
                "short_name" => "阿曼",
                "short_name_in_en" => "Oman",
                "capital" => "馬斯開特",
                "capital_in_en" => "Muscat",
                "national_day" => "11月18日",
                "join_un_day" => "1971年10月7日",
                "area_size" =>
                    "阿曼土地面積為30.9萬平方公里，15%為山地，82%為沙漠。",
                "geographic" =>
                    "阿曼位於阿拉伯半島東南端，北接阿拉伯聯合大公國，西鄰沙烏地阿拉伯，西南與葉門接壤，東北瀕阿曼灣，東南瀕阿拉伯海，海岸線長達3,165公里。",
                "religion" => "伊斯蘭教",
                "bilaterial_relations" => null,
                "main_bounds" => "Omani Riyal",
                "exchange_rate" =>
                    "Omani Riyal與臺幣匯率約為1比80。詳細匯率資訊建議至臺灣銀行(https://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/f53f3f9e-1af3-4bc6-9b41-9d8c221e7bb0.GIF",
                "is_diplomatic" => 0,
                "language" => "阿拉伯語",
                "main_media" =>
                    "阿曼國家通訊社(ONA)為官方消息來源。1.英文報:阿曼觀察家日報Oman Daily Observer馬斯開特日報Muscat Daily2.阿文報:遠景報Al Roya",
                "population" =>
                    "總人口約為542萬人(2022年12月)，其中阿曼人約佔60.3%，外籍人士佔39.7%，主要來自印度、巴基斯坦、孟加拉、菲律賓、烏干達及肯亞等國。",
                "voltage" => "240伏特",
                "time_difference" => "-4:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/b07a3bf2-0be7-478e-9165-41037139dd09.jpg",
                "political_system" => "君主制",
                "history_intro" =>
                    "阿曼的歷史可追朔至5,000年前；在西元前3世紀時於此地區建立了一個稱為Magan的帝國，即為阿曼前身，它以生產銅和乳香而聞名。在西元前560年到西元200年之間，阿曼地區曾受波斯人所統治，到西元6世紀時，一些信仰回教的部落才將波斯人逐出。到了西元7世紀中整個阿曼地區皆信奉回教。在1507年時葡萄牙人佔領了阿曼，到1650年時，Sultan bin Saif 率眾驅逐葡萄牙人；1744年在Sohar的Ahmed bin Said逐步統一個部落，建立中央政府，阿曼正式成為一個王國。多條海陸貿易路線交錯於阿曼，貿易路線曾遠達東非洲與中國。在17世紀時阿曼可說是個強國，當時統治的領土遠達東非的桑吉巴、部份的波斯和今日的巴基斯坦。前任蘇丹Sultan Qaboos於1970年即位，當時他只有30歲，因接受西方教育使他了解現代化的重要，Sultan Qaboos即位後大力改革，將阿曼建設成一個現代化國家。Sultan Qaboos於2020年1月駕崩，由Sultan Haitham繼位。",
                "parliament" =>
                    "國家議會(上院，共85席)及國民諮議會(下院，共86席)。",
                "cabinet" => "內閣部會首長共計26名，閣員均由蘇丹指派任命。",
                "judiciary" => "司法部、法務部、最高法院。",
                "headman" => "Sultan Haitham bin Tariq Al Said",
                "fa_minister" => "Badr bin Hamad bin Hamoud Al-Busaidi",
                "major_political_parties" => "禁止組織政黨",
                "financial_incoming" =>
                    "收入:109.44億阿幣，支出:126億阿幣(2021年)",
                "export_value" => "536.71億美元(2021年)",
                "import_value" => "220.88億美元(2021年)",
                "export_item" => "石油及石化相關產品",
                "import_item" => "機械、運輸器具、生活用品、牲畜及食品。",
                "main_export_countries" =>
                    "中國大陸、阿拉伯聯合大公國、南韓、沙烏地阿拉伯。",
                "main_import_countries" =>
                    "阿拉伯聯合大公國、日本、美國、中國大陸。",
                "export_to" =>
                    "主要為塑膠製品、電子、鍋爐、機械、鋼鐵、化學材料、汽車零件、水泥、大理石、橡膠製品等",
                "import_from" => "石油、天然氣、精煉銅、化學品、鋁、鐵等。",
                "foreign_relationship" => null,
                "foreign_policy" => "採行衡平外交政策",
                "time_range" => "時間較我國晚4小時",
                "resident" => "我國設有「駐阿曼王國台北經濟文化辦事處」",
                "national_flag" =>
                    "呈長方形，長與寬之比約為3:2。由紅、白、綠三色組成。紅色部分在旗面上構成橫的“Ｔ”字形圖案，右側上方為白色，下方為綠色。旗面左上角繪有黃色的阿曼國徽。紅色象徵吉祥，是阿曼人民喜愛的傳統顏色；白色象徵和平與純潔；綠色代表大地。阿曼國徽：圖案由一把阿拉伯飾刀，兩把彎刀和一條佩帶組成，表示阿曼人民保衛國家主權和獨立的決心與力量。",
                "area_name" => "亞西地區",
                "area_name_in_en" => "West Asia",
            ],
            187 => [
                "name" => "阿根廷共和國",
                "name_in_en" => "Argentine Republic",
                "short_name" => "阿根廷",
                "short_name_in_en" => "Argentina",
                "capital" => "布宜諾斯艾利斯(Buenos Aires)",
                "capital_in_en" => "Buenos Aires",
                "national_day" => "5月25日",
                "join_un_day" => "1945年10月24日，為聯合國創始國之一",
                "area_size" =>
                    "阿根廷為南美洲第二大國，面積約3,761,274平方公里(含南極洲領土約969,464平方公里)。南北長3,694公里，東西寬自399公里至1,423公里不等。全國主要分為5個地理區： 1、西北高山荒漠區：氣候乾燥，夏季酷熱；冬季溫差極大，且安地斯山區會降雪。土壤貧瘠，亟需灌溉，作物以葡萄、橄欖等為主。多礦產。 2、東北河間濕熱區：河川眾多，內河航運發達。夏季潮濕高溫，熱帶叢林密布。作物以熱帶水果、米、棉花、大豆、高粱、向日葵等為主。 3、中部潮濕肥沃區：以布宜諾省週邊及La Pampa、Cordoba、Santa Fe及Entre Rios等各省為主之彭巴草原區(La region Pampeana)草原為主。終年多雨，土壤肥沃，不需灌溉及密集耕作，適合農牧發展，係世界著名之穀倉及牛肉產地。 4、南部溫帶荒漠區：巴塔哥尼亞(Patagonia)草原幅員遼闊，惟乾燥寒冷，適合放牧綿羊，羊毛為其特產。 5、極帶區：南極終年冰雪覆蓋。設有1科學站。 阿國河流大多流入南大西洋，其中較大者為銀河(Río de la Plata)，其次為烏拉圭河，均利於航行。另有巴拉納河、科羅拉多河、黑河及楚布特河等分布境內。 阿根廷政府2016年3月28日宣布，聯合國大陸礁層界限委員會（UNCLCS）已正式批准阿根廷擴大領海範圍35%，讓阿根廷領海面積大幅增加170萬平方公里，新領海更包括福克蘭群島周邊水域。",
                "geographic" =>
                    "阿根廷位於南美大陸東南部，西、南與智利為鄰，北接玻利維亞與巴拉圭，東與巴西及烏拉圭接壤，瀕臨大西洋，",
                "religion" => "天主教",
                "bilaterial_relations" => null,
                "main_bounds" => "阿根廷貨幣名稱為披索(PESO)",
                "exchange_rate" =>
                    "2023年2月阿根廷幣披索(PESO)與美金兌換率約為197.89比1(官價)。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/952ca315-e260-4df0-aace-44a70c541617.GIF",
                "is_diplomatic" => 0,
                "language" => "西班牙語",
                "main_media" =>
                    "電視除第七號台係國營外，其餘皆民營，主要媒體集團有「號角日報」（Clarín）、「國家日報」（La Nación）及「金融圈日報」（Ámbito Financiero)等。",
                "population" =>
                    "阿根廷人口約4,733萬人，人口密度每平方公里約11人",
                "voltage" =>
                    "阿根廷電壓為220伏特，其插座為三角形狀之三孔插座。",
                "time_difference" => "-11:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/3c54c432-e766-4cdd-9996-91a0a989749d.jpg",
                "political_system" => "共和國/總統制，採三權分立。",
                "history_intro" =>
                    "1、西班牙於1526年在阿境移民設治，1810年阿根廷發生獨立運動，1816年7月9日宣布成立阿根廷共和國，1826年利華達維亞(Bernardino Rivadavia)出任阿國首任總統，1862年米特芮(Bartolomé Mitre)首任依憲法選出之總統，阿國自此逐漸邁向繁榮與進步。兩次世界大戰期間，阿國保持中立，出售穀物及肉類，賺取兩大敵對陣營之大量外匯，國勢遂益形強盛。 2、1946年貝隆(Juan Domingo Perón)崛起，厲行獨裁政治，歷時9年，至1955年被軍人推翻，嗣後軍人政府與文人政府交互執政，政經局勢動盪。 3、1982年4月阿國在與英國福克蘭之役中戰敗，阿軍政府被迫於1983年10月舉行大選並還政於民。",
                "parliament" =>
                    "國會分參、眾兩院，擁有聯邦立法權。參、眾議員均由直選產生，可連選連任。參議院共72席，每個省區各3席。參議員任期6年，每兩年改選1/3。眾議院257席，由各省區按人口比例分配。眾議員任期4年，每2年改選1/2。 憲法規定，參議長由副總統兼任。另常設臨時參議長一名，在副總統空缺或代行總統之職時，代行參議長職責，每年改選一次。眾議長每年改選一次。 2021年11月14日阿國舉行國會期中改選，改選參議院三分之一席次，眾議院二分之一席次，結果「全民陣線」贏得35席參議員及50席眾議員，「變革聯盟」贏得31席參議員及61席眾議員。「全民陣線」及「變革聯盟」兩大政團在參議院72席中分佔35席及31席，及在眾議院257席中分佔118席及116席。",
                "cabinet" => null,
                "judiciary" =>
                    "分為地方法院、高等法院及最高法院。 最高法院由5名大法官組成，院長和法官由總統提名後經參議院批准任命，院長任期3年。",
                "headman" =>
                    "總統制 現任總統Alberto Fernández, 副總統Cristina Fernández de Kirchner",
                "fa_minister" => "Santiago Cafiero",
                "major_political_parties" =>
                    "執政之「全民陣線」(Frente de Todos)主要由正義黨(Partido Justicialista，即貝隆黨)、改革陣線(Frente Renovador)、文化、教育及勞工黨(Partido por la Cultura, la Educacion y el Trabajo)、KOLINA黨(基什內爾黨)、勝利黨(基什內爾黨)及其他左派或社會主義共20個政黨組成；至於在野陣營「一起變革聯盟」(Juntos por el Cambio)主要由共和提案黨（Propuesta Repulicana, PRO）、激進黨(Unión Cívica Radical,UCR)、公民聯盟黨(Coalición Cívica,ARI )及12個政黨組成。",
                "financial_incoming" =>
                    "國內生產毛額：4,169億美元(2020年)；4,867億美元(2021年)；6,307億美元(2022年)；6,438億美元(2023年預估)平均國民所得：9,100美元(2020年)；10,620美元(2021年)；13,620美元(2022年)；13,770美元(2023年預估)",
                "export_value" =>
                    "49億美元(20231年1月)884億4,600萬美元(2022年)779億3,400萬美元(2021年)",
                "import_value" =>
                    "53億8,400萬美元(2023年1月)815億2,300萬美元(2022年)631億8,400萬美元(2021年)",
                "export_item" =>
                    "石油原油、豆渣餅、玉蜀黍、大豆油、大豆、貨車、石油及提自瀝青礦物之油類(原油除外)、冷凍牛肉、小麥、生質柴油。",
                "import_item" =>
                    "石油及提自瀝青礦物之油類(原油除外)、電力、天然氣、電話機、小客車、車輛之零附件、血清、礦物或化學肥料、自動資料處理機、醫藥製劑。",
                "main_export_countries" => "巴西、中國大陸、美國、智利、印度。",
                "main_import_countries" =>
                    "中國大陸、巴西、美國、德國、玻利維亞。",
                "export_to" =>
                    "2,605萬美元(2023年1至2月)2億4,524萬美元(2022年)2億6,756萬美元(2021年)",
                "import_from" =>
                    "4,215萬美元(2023年1至2月)6億4,827萬美元(2022年)4億5,667萬美元(2021年)",
                "foreign_relationship" =>
                    "除與英國在福克蘭群島(阿根廷稱馬爾維納斯群島, Islas Malvinas)主權上仍存爭議外，與其他國家均保持友好關係。",
                "foreign_policy" =>
                    "採獨立自主之多元化外交政策，主張多邊主義和國際關係民主化，奉行不干涉內政、保護人權及遵循國際法等原則。實行多元務實均衡之外交路線，積極修復與美歐國家傳統關係，重視發展與巴西等新興大國之互動，與古巴、委內瑞拉等激進左翼國家關係友好。",
                "time_range" => "較臺灣慢11小時",
                "resident" => "我國在阿根廷首都布宜諾斯艾利斯設有代表處。",
                "national_flag" =>
                    "為天藍、白、天藍三色平行的三色橫旗,中間五月太陽圖樣為國徽. 阿根廷國旗 阿根廷國旗的太陽—“五月太陽” 阿根廷國旗是“三橫二色”的國旗，最頂和最底也是藍色，中央部份為白色，並加上一個32道光線的太陽，其太陽（“五月太陽”）由16個波浪狀和16個直線所構成，國旗的比例為9:14。",
                "area_name" => "拉丁美洲及加勒比海地區",
                "area_name_in_en" => "Latin America and Caribbean",
            ],
            188 => [
                "name" => "阿爾及利亞人民民主共和國",
                "name_in_en" => 'People\'s Democratic Republic of Algeria',
                "short_name" => "阿爾及利亞",
                "short_name_in_en" => "Algeria",
                "capital" => "阿爾及爾",
                "capital_in_en" => "Alger",
                "national_day" => "11月1日",
                "join_un_day" => "1962年10月8日",
                "area_size" =>
                    "2,381,741平方公里。阿爾及利亞的陸地面積居非洲國家之冠、地中海國家之冠和阿拉伯國家之冠，排全球第10位。",
                "geographic" =>
                    "位於非洲北部，東鄰與突尼西亞及利比亞，南與尼日為鄰，西南與茅利塔尼亞及馬利接壤，西與摩洛哥相連。",
                "religion" => "遜尼派伊斯蘭教為國教(99%)、基督教與猶太教(1%)",
                "bilaterial_relations" => null,
                "main_bounds" => "Algerian Dinar(DZD)",
                "exchange_rate" =>
                    "1美元約兌換143,18 Algerian dinar（2022年3月）。詳細匯率資訊建議至臺灣銀行（https://rate.bot.com.tw/xrt?Lang=zh-TW）或兆豐商銀（https://www.megabank.com.tw/personal/foreign-service/forex）網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/6ea4d186-a79b-4b9e-9dec-581ee00be46f.GIF",
                "is_diplomatic" => 0,
                "language" => "阿拉伯語（官方語言）、法語、柏柏爾語",
                "main_media" =>
                    '報紙 - El Khabar 阿語民營日報 - Le Quotidien d\'Oran 法語民營日報 - El Moudjahid 國營日報 電視 - Enterprise Nationale de Television (ENTV) 國營電視公司。廣播 - Algerian Radio 國營廣播台 該國媒體多為國營，以阿拉伯語、柏柏爾語、法語播送，大部分多使用衛星播送往歐洲與阿拉伯區域。',
                "population" => "43,576,691人(2021年)",
                "voltage" => "220V",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/708cf88d-5f19-4569-a385-76a25461402b.jpg",
                "political_system" => "民主共和",
                "history_intro" =>
                    "自西元前3世紀起，阿爾及利亞一帶先後被努米迪安人、腓尼基人、迦太基人、羅馬人、汪達爾人及拜占庭人等外族占領，歷經阿拉伯帝國、柏柏爾王朝、西班牙帝國及鄂圖曼帝國之統治。16世紀至17世紀海盜橫行阿爾及利亞沿海，直至法國1830年佔領阿爾及爾，最終解決海盜猖獗問題。阿國19世紀末及20世紀初受法國殖民，1954年「民族解放陣線」(FLN)為爭取阿爾及利亞獨立，發動游擊戰，歷經近10年爭戰，阿國終於1962年獨立，7月5日定為獨立紀念日。1963年9月，Ahmed Ben Bella當選首任總統。1965年6月，Houari Boumediene發動政變，上臺後實行軍事政權統治。1991年12月「伊斯蘭救國陣線」(FIS)在首輪選舉中獲勝，但遭軍方干涉並推延第二輪選舉，以防極端主義領導之強權政府出現。阿爾及利亞內戰隨之爆發，直至2002年結束，期間約10萬人喪生。內戰過程中，曾經流亡海外的Abdelaziz Bouteflika在軍方支持下回國指揮內戰並在政壇竄起，於1999年贏得總統選舉。",
                "parliament" =>
                    '分國民大會（National People\'s Assembly，下議院）及參議院（Council of the Nations，上議院）兩院。國民大會共407席，由人民直選產生，任期5年。參議院共144席，1/3由總統提名，餘2/3由間接選舉產生，任期6年，憲法規定每3年過半數的參議員需重選。',
                "cabinet" =>
                    "總理由總統任命，現任總理為Aïmene Benabderrahmane(2021年6月30日就任)。",
                "judiciary" =>
                    "以法國民法及伊斯蘭法為基礎，設有最高法院（Supreme Court）。",
                "headman" => "Abdelmadjid Tebboune (2019年12月就任)",
                "fa_minister" => "Ramtane Lamamra (2021年7月7日就任)",
                "major_political_parties" =>
                    "民族解放陣線（Front de Liberation Nationale）、民族民主聯盟（Rassemblement National Democratique）、爭取和平社會運動（Mouvement de la Societe pour la Paix）、阿爾及利亞人民運動（Mouvement Populaire Algerien）、勞工黨（Parti des Travailleurs）、社會主義力量陣線（Front des Forces Socialistes）、文化與民主聯盟（Rassemblement pour la Culture et la Democratie）",
                "financial_incoming" =>
                    "歲入374.7億美元，歲出570.5億美元 (2021)",
                "export_value" => "420.4億美元 (2021年)",
                "import_value" => "423.8億美元 (2021年)",
                "export_item" => "石油、天然氣及石油附屬產品",
                "import_item" => "機械、食品、日用品",
                "main_export_countries" =>
                    "義大利、西班牙、法國、美國、巴西、荷蘭",
                "main_import_countries" =>
                    "中國、法國、義大利、德國、西班牙、土耳其",
                "export_to" => "54,842,040美元(2021年)",
                "import_from" => "426,556,310美元 (2021年)",
                "foreign_relationship" =>
                    "阿爾及利亞石油及天然氣係其主要出口之戰略物資。由於與法國有歷史之連結，所以維繫對法關係是其外交政策的重點。阿國與美國關係穩定，特別是在反恐及戰略位置方面。阿國因支持摩洛哥境內西撒哈拉地區獨立運動而與摩國交惡，阿國並因此封閉邊境，造成摩國經濟及觀光重大損失，摩國多次擬與阿國就兩國關係正常化展開會談，惟皆因西撒哈拉問題而難有突破。阿爾及利亞與摩洛哥於2021年8月因西撒哈拉之主權爭議而斷交。",
                "foreign_policy" => "與歐盟（特別是法國）關係為其外交重心。",
                "time_range" => "較臺灣慢7小時",
                "resident" =>
                    "我在阿爾及利亞未設處。阿爾及利亞相關事務由我駐法國代表處兼管。另中華民國對外貿易發展協會在阿爾及利亞設立阿爾及爾台灣貿易中心 (Taiwan Trade Center, Algiers)，詳情請參考貿協http://algiers.taiwantrade.com.tw/網站。",
                "national_flag" =>
                    "由豎排的綠白兩半組成，中央鑲嵌著紅色的月牙和五角星圖案",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            189 => [
                "name" => "阿爾巴尼亞共和國",
                "name_in_en" => "Republic of Albania",
                "short_name" => "阿爾巴尼亞",
                "short_name_in_en" => "Albania",
                "capital" => "地拉那",
                "capital_in_en" => "Tirana",
                "national_day" => "11月 28日",
                "join_un_day" => "1955年12月14日",
                "area_size" => "28,748平方公里",
                "geographic" =>
                    "北鄰塞爾維亞、蒙特內哥羅，東接馬其頓，東南與希臘接壤，西濱亞得里亞海與愛奧尼亞海",
                "religion" => "回教(58.8%)、東正教(24.1%)、天主教(16.8%)",
                "bilaterial_relations" =>
                    '我國與阿爾巴尼亞於1949年斷交，直至1991年阿國成為民主共和國，我方始與阿國交流往來。2009年阿國民主黨在國會大選獲勝後，阿國於2011年比照歐盟給予我國人赴阿國停留90天之免簽待遇。"" data-scaytid=""1""--}}我國與阿爾巴尼亞於1949年斷交，直至1991年阿國成為民主共和國，我方始與阿國交流往來。2009年阿國民主黨在國會大選獲勝後，阿國於2011年比照歐盟給予我國人赴阿國停留90天之免簽待遇。{{--/span--}}{{--/span--}}{{--/p--}}{{--p--}}	{{--span style=""font-size: 12px;""--}}{{--span style=""font-size: 10px;""--}}1,1,{{--span data-scayt_word=""萬美元。我國出口阿國主要項目包括"" data-scaytid=""2""--}}萬美元。我國出口阿國主要項目包括{{--/span--}}:{{--span data-scayt_word=""化學產品、單行車零件、機械零件等；我國則從阿國進口銅廢料、成衣及塑膠產品等。"" data-scaytid=""3""--}}化學產品、單行車零件、機械零件等；我國則從阿國進口銅廢料、成衣及塑膠產品等。{{--/span--}}{{--/span--}}{{--span _fck_bookmark=""1"" style=""display: none;""--}}{{--span data-scayt_word=""奧尼亞海"" data-scaytid=""4""--}}奧尼亞海{{--/span--}}{{--span _fck_bookmark=""1"" style=""display: none;""--}}{{--/span--}}{{--/span--}}{{--/span--}}{{--/p--}}',
                "main_bounds" => "列克(Lek)",
                "exchange_rate" =>
                    "使用貨幣為LEK。目前約為1美元兌換101 LEK，惟須視匯率浮動情況而定。 建議查詢 https://www1.oanda.com/lang/it/currency/converter/ 。另美元匯率可查詢台灣銀行（https://rate.bot.com.tw/xrt/all/day?Lang=en-US）或兆豐商銀匯率（https://www.megabank.com.tw/personal/foreign-service/forex）。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/cfad88dd-767b-4d82-8879-083fc9d5f2a2.GIF",
                "is_diplomatic" => 0,
                "language" => "阿爾巴尼亞語",
                "main_media" =>
                    "Albanian Daily News（新聞網站，英文﹚ Albanian Radio and TV (RTSH],Shekulli(日報)",
                "population" => "279.3萬人",
                "voltage" => "220V",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/415b5a73-7121-4270-b369-b27da04e9475.jpg",
                "political_system" => "國體為共和國，政體為內閣制",
                "history_intro" =>
                    "阿爾巴尼亞人為伊利里亞人(Illyrian)後裔，西元前1千年即居於巴爾幹半島，西元前2至4世紀間統一為獨立之王國(Kingdom of Illyria)，西元前167年後2000年來先後為羅馬帝國、拜占庭帝國、西哥德人、匈奴人、保加利亞人、塞爾維亞人及土耳其人統治。1912年11月28日宣布獨立，惟獨立2年即多次被義大利佔領，第2次世界大戰阿國一度遭納粹德國出兵掌控。期間1941年由共產黨領導之國家自由陣線(National Liberation Front)崛起抗敵，並擊敗其他非共的反抗軍組織取得領導地位，終在1944年10月德軍撤走後，控制全國。1945年11月共黨領袖霍查(Enver Hoxha) 組成臨時政府，同年12月大選，共黨獲勝，宣布成立阿爾巴尼亞人民共和國。1976年制訂新憲法，改稱為阿爾巴尼亞社會主義共和國。1991年3月舉行共黨統治瓦解後之自由選舉，於4月29日起改國號為阿爾巴尼亞共和國。",
                "parliament" =>
                    '一院制之人民大會(People\'s Assembly)係阿國最高之政權機關，共140席。其中100席為直選，另40席依政黨比例分配，任期4年。現任國會議員係於2021年4月選出。主要政黨為社會黨，計74席，佔52.8%；次要政黨為民主黨，計59席，佔42.1%。',
                "cabinet" =>
                    "總理由總統提名，經由國會同意後任命；各部部長由總理提名並經國會通過後，由總統任命。現任總理為Edi Rama(自2013年擔任)。",
                "judiciary" =>
                    "1992年4月進行司法改革，司法機構分為地方法院、上訴法院、最高法院以及憲法法院。",
                "headman" =>
                    "Ilir Meta總統(2017年7月當選，任期5年) 政府首長: Edi Rama總理(2013年9月上任)",
                "fa_minister" => "Olta Xhaçka(2021年1月4日上任)",
                "major_political_parties" =>
                    "社會黨(PS)、民主黨(PD)、社會整合運動黨(LSI)、正義整合團結黨(PDIU)、共和黨(PR)、人權聯合黨(PBDNI)、基民黨(PKDSH)。",
                "financial_incoming" => "收43.83億美元，支51.22億美元(2021年)",
                "export_value" => "31.71億美元(2021年)",
                "import_value" => "68.84億美元(2021年)",
                "export_item" =>
                    "紡織品、建材、瀝青、金屬和金屬礦石、原油、蔬菜、水果、煙草",
                "import_item" => "機械、建築材料、燃料及電力設備",
                "main_export_countries" =>
                    "義大利、科索沃、中國大陸、希臘、西班牙",
                "main_import_countries" =>
                    "義大利、希臘、中國大陸、土耳其、德國",
                "export_to" => "634萬8,405美元(2022年)",
                "import_from" => "171萬609美元(2022年)",
                "foreign_relationship" =>
                    "1990年代初期阿國結束共產黨專政後，對外以對義大利及對希臘雙邊關係最為重要，且為阿國最重要貿易夥伴，義大利另在1991年及1997年阿國社會秩序失序時兩度出兵協助阿國。此外，在蒙特內哥羅、馬其頓及科索沃境內之阿裔人士逾百萬，另義大利及希臘境內阿裔人口數目亦復可觀，加上阿國南部希裔人口，在在皆可影響雙邊關係。",
                "foreign_policy" =>
                    "加入北約及歐盟是阿國政府及所有政黨的共同目標，其中: (1)（一） 阿國於2006年6月12日順利與歐盟簽訂「穩定及合作協議」，為阿國加入歐盟跨出一大步；阿國前總理Sali Berisha於2009年4月28日正式遞交加入歐盟申請案。阿國2013年6月進行和平有序大選，廣受國際社會肯定， 2014年6月阿國成為歐盟會員候選國。 (2)（二） 阿國曾與馬其頓、克羅埃西亞及美國共同簽署「亞得里亞憲章」（Adriatic Charter），以維護阿爾幹半島之和平；另亦參加波士尼亞、阿富汗及查德等維和任務後，於2009年4月1日正式成為北約組織（NATO）成員。",
                "time_range" =>
                    "較台灣慢7小時(3月至10月日光節約時間較台灣慢6小時)",
                "resident" => "無（由駐義大利代表處兼轄）",
                "national_flag" => "暫無",
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            190 => [
                "name" => "馬來西亞",
                "name_in_en" => "Malaysia",
                "short_name" => "馬來西亞",
                "short_name_in_en" => "Malaysia",
                "capital" => "Kuala Lumpur (吉隆坡)",
                "capital_in_en" => "Kuala Lumpur (吉隆坡)",
                "national_day" => "8月31日",
                "join_un_day" => "1957年9月17日",
                "area_size" => "330,257平方公里",
                "geographic" =>
                    "其領土包括亞洲大陸最南端之馬來半島（西馬）以及婆羅洲北部（東馬之沙巴及砂拉越）。",
                "religion" => "伊斯蘭教為法律明定國教",
                "bilaterial_relations" => null,
                "main_bounds" => "Ringgit (令吉)",
                "exchange_rate" =>
                    '近期美元對馬幣兌換率：US$1=RM4.0~4.4間浮動。詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。',
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/fc2f00a5-8336-4002-83fe-842ef5e6aaf3.gif",
                "is_diplomatic" => 0,
                "language" => "馬來語為國語，英語及華語使用普遍。",
                "main_media" =>
                    "馬國主要華文報紙計有「星洲日報」、「中國報」、「南洋商報」與「東方日報」等。 英文報紙計有「The Star」(星報)、「New Straits Times」(新海峽時報) 、「The Sun」(太陽報)及「The Edge Financial Daily」(優勢財經日報)等。 馬來文報紙計有「Sinar Harian」(光芒日報)及「Berita Harian」(每日新聞報)等。 馬來西亞之國家新聞社為「Bernama」(簡稱「馬新社」)。 廣播及電視則有「馬來西亞廣播電視臺」，另有衛星收費電視臺例如「Astro」。",
                "population" => "約3,270萬人(2020年)",
                "voltage" => "220-240 V",
                "time_difference" => "+0:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/55bc7f81-bf49-4cdf-a614-4ed0af6d9eda.JPG",
                "political_system" =>
                    "馬來西亞(Federation of Malaysia)為君主立憲，採責任內閣制之聯邦。",
                "history_intro" =>
                    "1824年大英帝國-荷蘭條約將馬來亞地區分割為二，馬來亞部分屬於英國，印尼部分屬於荷蘭。1942年至1945年間日本佔領馬來亞，1956年馬來西亞制定憲法，1957年馬來西亞獨立，1963年英屬新加坡和北婆羅洲加入馬來西亞聯邦，1965年新加坡退出馬來西亞聯邦並獨立。",
                "parliament" =>
                    "馬國國會分上、下議院，上議院議員任期3年，共70席，每州選派2名，其餘由最高元首依首相建議指派。下議院議員任期屬內閣制，原則5年，共222席，由民選產生。",
                "cabinet" =>
                    "馬國採責任內閣制，三權分立，第10任（現任）首相安華(Dato’ Seri Anwar bin Ibrahim)於2022年11月24日宣誓就職。安華內閣設副首相2位，閣員於2022年12月3日宣誓就職，包括28名部長。",
                "judiciary" =>
                    "馬國之司法體系係以英國法為基礎，計有地方法院、高等法院(又分為東馬及西馬兩個高等法院)、上訴法院及聯邦法院(即馬國最高法院)。涉及穆斯林事務，則由「伊斯蘭法庭」審理，但其權力受到馬國憲法之若干限制。",
                "headman" =>
                    "最高元首為：Yang di-Pertuan Agong Malaysia, Sultan Tengku Abdullah Ahmad Shad(蘇丹阿都拉)。",
                "fa_minister" =>
                    "贊比里(Datuk Seri Dr. Zambry bin Abdul Kadir)",
                "major_political_parties" =>
                    "安華政府包括「希望聯盟」之「人民公正黨」、「民主行動黨」、「國家誠信黨」、「民統黨」、「馬來西亞民主聯合陣線」;「國民陣線」之「巫統」、「馬華」、「國大黨」、「沙巴人民團結黨」；「砂拉越政黨聯盟」、「沙盟政黨」及「沙巴人民復興黨」。反對黨包括「土著團結團」及「伊斯蘭黨」。",
                "financial_incoming" => "3,225億令吉(2021年預算案)",
                "export_value" => "2021年輸出總值1.24兆馬幣，約2,956億美元",
                "import_value" => "2021年輸入總值9,872.4億馬幣，約2,354億美元",
                "export_item" =>
                    "電子與電器產品、精煉石油產品、棕油、化學暨化學產品、橡膠製品、光學暨科學儀器、機械設備及零件、金屬製品、液化天然氣及原油",
                "import_item" =>
                    "電子與電器產品、化學暨化工製品、精煉石油產品、機械零附件、金屬製品、交通配備、鋼鐵製品、原油製品、光學暨科學儀器、加工食品",
                "main_export_countries" =>
                    "中國大陸、新加坡、美國、香港、日本、泰國、越南、印度、臺灣、印尼",
                "main_import_countries" =>
                    "中國大陸、新加坡、臺灣、美國、日本、印尼、韓國、泰國、德國、印度",
                "export_to" =>
                    "電機設備及零件、光學儀器、礦物燃料、動植物油脂、鋼鐵製品等",
                "import_from" =>
                    "電機設備及零件、礦物燃料、鋼鐵製品、橡膠製品、塑膠製品等",
                "foreign_relationship" =>
                    "馬國與全球各國友好，馬國護照亦通行於各國(但不准持往以色列)，2022年1月排名為全球第12名最強勢之護照，獲179個國家免簽證待遇。",
                "foreign_policy" =>
                    "馬國提倡「全球中庸運動」，標榜其為中庸、包容、進步之伊斯蘭國家。馬國外交之基調為：強化東協及區域國家關係，促進區域穩定和平，在多邊平台積極爭取東協、不結盟國家及伊斯蘭合作組織之領導角色。",
                "time_range" => "與我國無時差",
                "resident" =>
                    "駐馬來西亞臺北經濟文化辦事處(Taipei Economic and Cultural Office in Malaysia)",
                "national_flag" =>
                    "馬來西亞國旗又稱為輝煌條紋(Jalur Gemilang），象徵馬來西亞的國家主權。馬國國旗由14道紅白相間的橫條所組成，左上角為藍底加上黃色的新月及14芒星圖案。",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            191 => [
                "name" => "馬利共和國",
                "name_in_en" => "Republic of Mali",
                "short_name" => "馬利",
                "short_name_in_en" => "Mali",
                "capital" => "巴馬科(Bamako)",
                "capital_in_en" => "巴馬科(Bamako)",
                "national_day" => "9月22日",
                "join_un_day" => "1960年9月28日",
                "area_size" => "1,240,192平方公里",
                "geographic" =>
                    "馬利位於非洲西部，為一內陸國，一半國土為撒哈拉沙漠覆蓋。馬利北鄰阿爾及利亞，東向尼日，南邊為布吉納法索及象牙海岸，西南邊為幾內亞，西邊與塞內加爾及茅利塔尼亞接壤。",
                "religion" => "伊斯蘭教(93.9%)、基督教(2.8%)、傳統信仰(0.7%)",
                "bilaterial_relations" => null,
                "main_bounds" => "西非法郎(XOF)",
                "exchange_rate" =>
                    "1EUR=655.957XOF (1歐元固定兌換655.957西非法郎)。詳細匯率資訊建議至臺灣銀行（https://rate.bot.com.tw/xrt?Lang=zh-TW）或兆豐商銀（https://www.megabank.com.tw/personal/foreign-service/forex）網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/5138dc83-4a33-43bc-abc3-253ee03bc3bf.GIF",
                "is_diplomatic" => 0,
                "language" => "法語(官方語言)、班巴拉語(Bambara)",
                "main_media" =>
                    'L\'Aurore日報、L\'Essor國營日報、Le Republicain國營日報、馬利國家廣播電台(ORTM)等。',
                "population" => "2,030萬人(2020年)",
                "voltage" => "220伏特",
                "time_difference" => "-8:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/9cca32a1-5a54-4790-8427-5383d7cdb969.JPG",
                "political_system" => "雙首長制",
                "history_intro" =>
                    "19世紀中葉以後，始為法國所統治，改名為「法屬蘇丹」，為法國西非聯邦之一，第二次大戰後，民族自治風盛，聯邦終告瓦解，至1946年法屬蘇丹首先成立地方議會，選出代表出席法國聯邦會議。1958年成為法蘭西邦協會員國，享有全部自治權。1959年與塞內加爾合併成立馬利聯邦。1960年6月20日馬利聯邦脫離法國獨立，同年8月塞內加爾退出聯邦，9月22日馬利共和國宣布成立，由凱達(Modibo KEITA)出任首任總統。",
                "parliament" => "國民議會一院制共147席，由人民直選，任期5年。",
                "cabinet" => "總理由總統任命並組閣，現任總理為Choguel Maïga。",
                "judiciary" =>
                    "設有憲法法院、最高法院、高級法院、行政法院及各級法院",
                "headman" => "Assimi Goïta",
                "fa_minister" => "Abdoulaye Diop",
                "major_political_parties" =>
                    "馬利民主同盟(ADEMA)、馬利團結黨(RPM)、民主共和聯盟(URD)",
                "financial_incoming" =>
                    "財政總收入約31.56億美元(2021)，總支出約39.28億美元(2021)，外債約50億美元(2020)。",
                "export_value" => "約35.1億美元 (2021年)",
                "import_value" => "約54.6億美元(2021年)",
                "export_item" => "黃金、棉花、牲畜",
                "import_item" => "石油製品、食品",
                "main_export_countries" => "南非、瑞士、澳洲、布吉納法索",
                "main_import_countries" => "塞內加爾、中國、象牙海岸、法國",
                "export_to" => "729,756美元（2021年）",
                "import_from" => "111,199美元（2021年）",
                "foreign_relationship" =>
                    "為聯合國(UN)、國際復興開發銀行(IBRD)、國際貨幣基金(IMF)、世界銀行、世界貿易組織(WTO)、77國集團、非洲聯盟(UA，目前遭暫停會員國資格)、西非經濟共同體（ECOWAS，目前遭暫停會員國資格）、西非經濟貨幣聯盟(WAEMU)、G5薩赫勒(G5 Sahel)、法語系國家組織(OIF，目前遭暫停會員國資格)等組織的成員。馬利自 2000 年代中期以來，與其鄰國關係的主要核心議題為攸關國家穩定及安全的問題，例如人口販運和恐怖主義等。",
                "foreign_policy" =>
                    "區域發展、貿易及爭取援助是外交重點，主要拓展與其主要貿易夥伴南非及歐盟的關係",
                "time_range" => "較臺灣慢8小時",
                "resident" => "我在該國未設處，該國事務由我駐法國代表處兼轄。",
                "national_flag" =>
                    "綠色象徵養育眾生的田園及牧地，黃色象徵土地下所蘊藏的黃金，紅色象徵馬利烈士為爭取獨立所流下的鮮血。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            192 => [
                "name" => "馬拉威共和國",
                "name_in_en" => "Republic of Malawi",
                "short_name" => "馬拉威",
                "short_name_in_en" => "Malawi",
                "capital" => "里朗威 (Lilongwe)",
                "capital_in_en" => "Lilongwe",
                "national_day" => "7月 6日",
                "join_un_day" => "1964年12月1日",
                "area_size" => "118,484平方公里",
                "geographic" =>
                    "位居非洲東南之內陸國家，西鄰尚比亞，東北鄰坦尚尼亞，東部及南部與莫三比克接壤",
                "religion" =>
                    "基督教(68.2%)、天主教(18.4%)、伊斯蘭教(12.1%)、其他宗教(0.3%)、無宗教信仰(1%)",
                "bilaterial_relations" => null,
                "main_bounds" => "夸加(Kwacha)(MWK)",
                "exchange_rate" => "1 USD＄≒ 731.938 MWK (2019年5月)",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/a839b8aa-2c6f-4ff2-b18b-6d5a0e02ee72.GIF",
                "is_diplomatic" => 0,
                "language" => "英語(官方語言)並通用契切瓦語(Chichewa)",
                "main_media" =>
                    "廣播是最普及的大眾媒介，主要廣播電台為馬拉威國營廣播公司(Malawi Broadcasting Corporation)及 Capital Radio 民營廣播台。報紙有The Nation日報、 The Daily Times 民營報、Malawi News 民營週報、Boma Lathu月報(以 Chichewa語言為主)等。馬拉威國營電視台(TVM)是主要的電視台。",
                "population" => "約18,600,000人 (2021年馬總統府資料)",
                "voltage" => "220V",
                "time_difference" => "-6:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/1ce30eed-77e1-4723-9efd-8aa10e139997.JPG",
                "political_system" => "總統制之民主共和國",
                "history_intro" =>
                    "馬拉威原名尼亞薩蘭（Niyasaland），1859年英國探險家李文斯頓抵達尼亞薩蘭，為到達該地之第一個歐洲人。1883年英國在布蘭岱（Blantyre）設立領事館，1891年宣布尼亞薩蘭為其保護地。二次大戰後，英國於1945年成立「中非洲委員會」，推動合併尼亞薩蘭及南北兩羅德西亞，並於1953年9月3日正式將該三地合併成立「羅尼聯邦」。惟「尼亞薩蘭非洲人民議會黨」堅決反對合併，旋即展開自治運動。羅尼聯邦終於1963年解體，尼亞薩蘭於1964年宣布獨立，改國名為馬拉威，成為大英國協一員。領導獨立之班達博士(Hastrings Banda)出任首任總統。1966年7月6日改為馬拉威共和國。班達連任總統至1994年止，在位28年。1994-2004年由Bakili Muluz擔任總統，2004-2012年總統Bingu Mutharika，於任內過世，副總統班達女士(Joyce Banda)2012年繼任總統，為第一任馬國女總統。2020年6月23日舉行總統大選投票，查奎拉(Lazarus Chakwera)與現任副總統Saulos Chilima搭檔參選，查氏得票數達有效票約六成而勝選，並於6月28日與副總統宣誓就任，總統所領內閣曾於2022年1月改組。",
                "parliament" =>
                    "一院制，「國民議會」（National Assembly）共193席，由人民直選，任期5年。",
                "cabinet" =>
                    "內閣成員由總統任命，總統是最高行政首長暨三軍統帥。",
                "judiciary" => "分為地方法院、高等法院及最高法院等三個層級。",
                "headman" => "查奎拉(Lazarus Chakwera)-2020/06/28就任",
                "fa_minister" => "Nancy Tembo",
                "major_political_parties" =>
                    "馬國係多黨政治，除執政黨馬拉威國會黨(MCP)及其聯盟政黨外，主要反對黨為民主進步黨(DPP)；其他在野黨包括人民黨(PP)、人民進步運動黨(PPM)、民主聯盟黨(AFORD)及聯合民主陣線黨(UDF)等40餘個政黨。",
                "financial_incoming" =>
                    "2019年政府財政收入9867億美元，支出1.21兆美元",
                "export_value" => 'US$23.77億 (2020)',
                "import_value" => 'US$27.29億 (2020)',
                "export_item" => "菸草、禽肉、茶葉、黃豆、甘蔗",
                "import_item" =>
                    "石油類產品、紙類產品、藥品、尿素產品、二手衣服",
                "main_export_countries" =>
                    "比利時、南非、坦尚尼亞、德國、埃及(2020)",
                "main_import_countries" =>
                    "南非、中國大陸、印度、阿拉伯聯合大公國、荷蘭(2020)",
                "export_to" => 'US$44萬(2021)',
                "import_from" => 'US$ 391萬(2021)',
                "foreign_relationship" =>
                    "1964年12月1日加入聯合國。外交上主要是拓展與其主要的貿易夥伴－南非及歐盟的關係；馬國有諸多來自鄰國之難民，因此亦獲得國際組織與諸多國家之援助；與辛巴威及其他非南地區國家的政經關係密切。",
                "foreign_policy" =>
                    "1964年12月1日加入聯合國。馬拉威為非洲聯盟(AU)、南部非洲發展共同體（SADC）等區域組織會員國；SADC 第41屆峰會在馬京召開，顯現馬國政府致力提升相關國際參與。現任總統上任後，除曾訪問南非外，並指派外長訪問以色列，洽談雙邊關係提升(包括籌劃在耶路撒冷設立大使館)，並繼續爭取各國及世界銀行等國際組織之援助，期能促進經濟發展。馬國2021年8月主辦之SADC峰會順利落幕並於會中接任輪值主席國(為期一年)，馬國盼藉此圖謀引進外援並提高對區域事務之參與。",
                "time_range" => "較台灣慢6小時",
                "resident" => "由我駐南非代表處兼轄。",
                "national_flag" =>
                    "馬拉威國旗呈長方形，縱橫之比為2：3。是一面三色旗，自上而下由黑、紅、綠三個平行的橫長方形構成，旗面上方中間為一輪冉冉升起的太陽，放射31道光芒。紅色象徵為爭取自由獨立而戰鬥的烈士鮮血，黑色象徵非洲人，綠色代表該國的美麗國土和綠色大自然。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            193 => [
                "name" => "馬爾他共和國",
                "name_in_en" => "Republic of Malta",
                "short_name" => "馬爾他",
                "short_name_in_en" => "Malta",
                "capital" => "瓦勒他",
                "capital_in_en" => "Valleta",
                "national_day" => "9月 21日",
                "join_un_day" => "1964年12月1日",
                "area_size" =>
                    "316平方公里（由5個島嶼組成，其中Malta、Gozo、Comino有人居住）",
                "geographic" =>
                    "馬爾他位於義大利西西里島南端，為地中海內之小島國，南部隔地中海與非洲大陸相望。",
                "religion" => "主要宗教為天主教",
                "bilaterial_relations" => null,
                "main_bounds" => "歐元（euro）",
                "exchange_rate" =>
                    "馬爾他自2008年1月1日正式加入「歐元區」，使用共同貨幣，幣值單位為「歐元」(Euro)，約為1歐元兌換32元新台幣，惟須視匯率浮動情況而定。建議查詢當日台灣銀行（https://rate.bot.com.tw/xrt/all/day?Lang=en-US）或兆豐商銀匯率（https://www.megabank.com.tw/personal/foreign-service/forex）。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/9cc357ea-bd6c-45af-91fa-06bade37c427.GIF",
                "is_diplomatic" => 0,
                "language" => "馬爾他語與英語（通用義大利語）",
                "main_media" => "Gazzete, In-Nazzjon",
                "population" => "51萬人",
                "voltage" => "220-240V",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/99c285cd-d65d-4c52-ae3c-be08d37d6af1.jpg",
                "political_system" => "內閣制",
                "history_intro" =>
                    "西元前10世紀，腓尼基人在此定居，後被希臘、迦太基、羅馬帝國、拜占庭帝國、阿拉伯帝國統治。1523年聖護騎士團（Knights Hospitaller，最古老之天主教軍事修會組織之一，成立於1099年第一次十字軍東征後，為教廷為保護其在耶路撒冷醫護設施而設之軍事組織）移居馬爾他，改名為馬爾他騎士團。1798年，拿破崙前往埃及途中佔領馬爾他。1800年馬爾他反抗軍在英國協助下驅逐法軍後成為英國保護地，1814年淪為英國殖民地。1964年9月21日馬爾他獨立，成為大英國協一份子。1974年12月13日通過新憲法，改君主立憲為共和國。",
                "parliament" =>
                    "為單一制，稱「國民代表大會」（House of Representatives），原則65席，從13個選區各選出5名，選舉制度為比例代表制，議員任期5年，惟總統可在總理建議下提早解散國會。國會擁有調整席位不平衡之措施，目前2022年4月新國會迄今之總席位為79席，其中執政黨「馬爾他工黨」占44席，在野黨「國民黨」占35席。",
                "cabinet" =>
                    "現任聯合總理由總統提名，通常由國會多數黨（或聯盟）領袖出任，任期5年。副總理等內閣閣員由總統循總理建議後任命。在2022年3月的大選中，隸屬「馬爾他工黨」之阿貝拉（Robert ABELA）內閣因控制Covid-19疫情得宜及經濟表現良好再度勝選並續擔任為首相，另任命柏格（Ian BORG）為外交部長。",
                "judiciary" =>
                    "馬爾他法律主要承襲拿破崙法典，惟商事及海商法則採英國制。民、刑事管轄專屬於高等法院及憲法法院。",
                "headman" =>
                    "由國會選出，任期5年，可連任一次。現任總統George Vella於2019年4月4日就任。",
                "fa_minister" => "Evarist Bartolo（2020年1月就任）",
                "major_political_parties" =>
                    "馬國政壇向由中右派之「國民黨」(Nationalist Party, PN，領導人為Lawrence Gonzi)及左派之「馬爾他工黨」（Malta Labor Party, MLP）兩黨把持。歷次選舉兩黨所獲票數均相差無幾，「馬爾他工黨」現為執政黨，「國民黨」為反對黨。",
                "financial_incoming" => "收51.97億歐元，支58.16億歐元(2021年)",
                "export_value" => "35.61億歐元(2021年)",
                "import_value" => "66.35億歐元(2021年)",
                "export_item" => "原料、機械、紡織品、運輸器材",
                "import_item" => "原料、機械、運輸器材、營建器材",
                "main_export_countries" => "德國、利比亞、法國、英國",
                "main_import_countries" => "法國、義國、英國、德國、中國大陸",
                "export_to" => "7,870萬2,772美元(2022年)",
                "import_from" => "3,753萬3,124美元(2022年)",
                "foreign_relationship" =>
                    "(一)	馬爾他係於1964年12月1日加入聯UN，在1971年勞工黨政府期間改變以往親西方政策，加入「不結盟運動」組織（Non-Aligned Movement, NAM），並關閉北約基地等。1987年國民黨執政後，開始重新與美國及其他西歐國家接近，並向歐盟申請入會。(二)	馬國基本外交政策為與歐盟與歐元區國家密切合作：2000年2月開始加入歐盟談判，並於2004年5月加入歐盟，2008年1月則加入歐元區。(三)	馬國與中國於2018年簽署一帶一路瞭解備忘錄。(四)	馬國於1995 年加入北約和平夥伴關係(PFP)，但在馬爾他工黨執政期間於1996 年退出。 2008年4月，馬國於2008年4月重新加入PFP ，惟仍不屬於北約成員國。(五)	馬國關關注來自北非之非法移民：馬國認為歐盟應採取相關反制措施。 2017年上半年馬國首次擔任歐盟輪值主席國，將難民問題列為優先事項，並與突尼斯在2020年共同主持了西地中海移民問題5+5對話。",
                "foreign_policy" => null,
                "time_range" =>
                    "夏令日光節約時間（三月最後星期日起至十月最後星期六止），與台灣時差慢 6 小時。冬令時間（十月最後星期日起至三月最後星期六），與台灣時差慢 7 小時。",
                "resident" => "無(由駐義大利代表處兼轄)",
                "national_flag" => null,
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            194 => [
                "name" => "馬爾他騎士團",
                "name_in_en" => "Sovereign Military Order of Malta",
                "short_name" => "馬爾他騎士團",
                "short_name_in_en" => "Order of Malta",
                "capital" => "羅馬境內(總部所在地)",
                "capital_in_en" => null,
                "national_day" => null,
                "join_un_day" => "一九九四年成為聯合國觀察員",
                "area_size" =>
                    "在羅馬市內擁有兩棟建築，一為總部(馬爾他宮)，另為外交部門",
                "geographic" => "位於羅馬市內",
                "religion" => "天主教",
                "bilaterial_relations" => null,
                "main_bounds" => "無，使用歐元",
                "exchange_rate" =>
                    "「詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)」或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢」。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/05534c0a-aec9-4de4-93d9-0744adbd7317.png",
                "is_diplomatic" => 0,
                "language" => "義大利語、法語",
                "main_media" => "網路官方網站 https://www.orderofmalta.int/",
                "population" => "全球騎士團成員約13,500餘人",
                "voltage" => "220v",
                "time_difference" => "-7:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/3df50593-dcfd-4254-bebb-67cc468fbc68.jpg",
                "political_system" =>
                    "宗教及慈善性質之「主權實體」(Sovereign Entity)",
                "history_intro" =>
                    "「馬爾他騎士團」(Sovereign Military Order of Malta)總部設於羅馬，為地位相當特殊之國際法人，擁有主權地位(Sovereign Status)，可發行郵票，核發護照，一九九四年起成為聯合國常任觀察員。該團羅馬總部領土為一萬二千平方公尺，具政府組織並享有派遣接受使節之權。",
                "parliament" =>
                    "「大議會」(General Chapter)由各地武士代表組成，主要職責為選舉「政務會議」(Sovereign Council)成員及討論宗教及人道醫療事務。",
                "cabinet" =>
                    "「政務會議」(Sovereign Council)：由大教長、總理兼外長、衛生部長及財政部長以及「大議會」選出之成員總計十名武士組成，決定國家重大事務。",
                "judiciary" =>
                    "司法委員會(Juridical Council)隸屬於「政務會議」，提供大教長宗教法律之諮詢。",
                "headman" =>
                    '第80任大教長Fra\' Giacomo Dalla Torre del Tempio di Sanguinetto(2018年5月3日就職)',
                "fa_minister" =>
                    "總理兼外交部長：Albrecht Freiherr von Boeselager (2014年5月31日獲選出任，2016年12月8日遭撤職，2017年1月28日復職)",
                "major_political_parties" => null,
                "financial_incoming" => "無官方統計數據",
                "export_value" => "無經濟生產活動",
                "import_value" => "無經濟生產活動",
                "export_item" => null,
                "import_item" => null,
                "main_export_countries" => null,
                "main_import_countries" => null,
                "export_to" => null,
                "import_from" => null,
                "foreign_relationship" =>
                    "為一宗教性質之人道慈善性團體，利用與他國建立外交關係之機會，獲取普遍承認，除鞏固其主權地位外，並藉以開展保障其全球慈善事業。",
                "foreign_policy" =>
                    "目前「馬爾他騎士團」與全世界106個國家建有外交關係，與許多個國家及國際組織互設代表機構。一般而言，各國皆由其駐教廷大使兼任駐該團大使，其主權地位普遍為國際社會所承認。",
                "time_range" =>
                    "較台灣慢7小時(3月至9月日光節約時間較台灣慢6小時)",
                "resident" => "無，由駐教廷大使館兼轄。",
                "national_flag" => null,
                "area_name" => "歐洲地區",
                "area_name_in_en" => "Europe",
            ],
            195 => [
                "name" => "馬爾地夫共和國",
                "name_in_en" => "Republic of Maldives",
                "short_name" => "馬爾地夫",
                "short_name_in_en" => "Maldives",
                "capital" => "馬列市",
                "capital_in_en" => "Male",
                "national_day" => "7月 26日(1965年獨立)",
                "join_un_day" => "1965年9月21日",
                "area_size" => "由1,192個珊瑚礁島組成，總面積約298平方公里。",
                "geographic" =>
                    "馬爾地夫位於印度洋，距印度南端600公里，斯里蘭卡西南方650公里，由1,190個南北縱列之珊瑚礁小島組成，其中僅200個島嶼有人居住，各島平均高度不超過海拔1.8米。",
                "religion" => "遜尼派伊斯蘭教(Sunni Muslim)",
                "bilaterial_relations" => null,
                "main_bounds" => "盧菲亞(Rufiyaa)",
                "exchange_rate" =>
                    "Maldivian Rufiyaa (MVR) (Rf], 1 USD = 15.38 Rufiyaa　(2022年11月17日)（詳細匯率資訊建議至http://www.mma.gov.mv/#/statistics/exchangerates　網站查詢）",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/495dd2df-6031-45f2-a5b5-410ea303d192.gif",
                "is_diplomatic" => 0,
                "language" => "Dhivehi（與僧伽羅語接近），政府官員多使用英文",
                "main_media" =>
                    "馬爾地夫主要報紙有Haveeru Daily Online(英文)及Miadhu News(英文)；主要電視台為國營之Maldives National Brodcasting Corporation(經營MNBC One,Youth TV)，以及私人的DhiTVh與VTV；國營廣播電台為Maldives National Brodcasting Corporation(經營Raajje Radio, Radio Eke及Rajjee FM)，私人電台有Capital Radio 95.6、HFM92.6及DhiFM95.2，網路新聞有私人的Minivan News。",
                "population" => "44.1萬人",
                "voltage" => "大英國協三孔插座(電壓220V)",
                "time_difference" => "-3:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/dc149a0d-55f3-4391-bdd5-1e46edf7bf5c.jpg",
                "political_system" =>
                    '馬爾地夫共和國採總統制，全國分7個省及1個自治市(municipality)。總統同時為國家及政府元首，由國民議會（Citizens\' Majlis）提名經全國公民投票選舉產生，任期5年。總統除為最高行政首長外亦為三軍統帥及宗教保護者。',
                "history_intro" =>
                    "最早之馬爾地夫居民可能來自印度南部，西元4、5世紀起其他印歐語系人種遷入，東非及阿拉伯水手自12世紀起抵達，加以其後不同國家統治，融合而成多樣風貌之馬國文化。馬國人自12世紀中葉改信回教，成為蘇丹國(sultanate)，嚴格之宗教規範成為社會安定重要因素。馬爾地夫曾於1558年至1573年受葡萄牙統治15年，17世紀間曾隸屬於荷蘭統治下的錫蘭國之保護領(protectorate)，隨後，於1796年成為英國統治下的錫蘭國之保護領，1887至1965年為英國屬地，1965年脫離英國獨立，仍由蘇丹(Sultans)統治，1968年11月廢除蘇丹改建共和國，國名為馬爾地夫共和國(Republic of Maldives)。",
                "parliament" =>
                    '一院制，國民議會(Citizens\' Majlis)為馬爾地夫最高立法機構，係由13個常設委員會(Standing Committee)及數量不定之臨時任務編制委員會(Select Committee)以及負責行政事務的秘書處(Secretariat)共同組成，實行比例代表制，所有議員依照各島人口比例由選舉產生，任期為5年。馬爾地夫於2019年4月6日選出現任國會87位議員，國會議長為默罕默德‧納希德(Honorable Mohamed Nasheed )，及副議長為伊娃‧阿卜杜拉(Honorable Eva Abdulla )，任期至2024年。',
                "cabinet" =>
                    "（組成方式）總統為最高行政首長，有權任派內閣成員，內閣成員包括總統、各部部長及總檢察長，部長均由總統任命，共有13位部長及1位總檢察長。",
                "judiciary" =>
                    "1.司法權歸屬於最高法院、高等法院及依法設立的初審法院。2.最高法院應是馬爾地夫司法行政的最高權力機關。首席大法官應是最高法院的最高權威。由最高法院裁判的一切事宜應經法官合議並經過半數同意決定。3.任何履行公共職權的官員或任何其他人不得干涉與影響法院的職權。4.履行公共職權的人或機關，通過立法或其他途徑必須協助與保護法院，確保法院的獨立、崇高、尊嚴、公正、可及性與效率。",
                "headman" =>
                    "馬爾地夫現任總統為易卜拉欣.穆罕默德.索里(Mr. Ibrahim Mohamed Solih)，隸屬馬爾地夫民主黨(Maldivian Democratic Party, MDP)，於2018年11月17日宣誓就職馬爾地夫第7任總統，任期至2023年11月。",
                "fa_minister" => "Abdulla Shahid",
                "major_political_parties" =>
                    "Adhaalath(Justice) Party，簡稱AP(現任黨魁為Sheikh Imran Abdulla)、Maldives Development Alliance，簡稱MDA(現任黨魁為Ahmed Shiyam Mohamed)、Maldivian Democratic Party簡稱MDP(現任黨魁為Mohamed Nasheed)、Progressive Party of Maldives，簡稱PPM(現任黨魁：懸缺中)、Republican (Jumhooree) Party，簡稱JP(現任黨魁為Qasim Ibrahim)。",
                "financial_incoming" => null,
                "export_value" => "3億4千8百萬美元",
                "import_value" => "23億4千萬美元",
                "export_item" => "冷凍及未冷凍之海產",
                "import_item" =>
                    "油、工程材料、食品、蔬菜、動物製品、電器、木製品、電腦、交通工具",
                "main_export_countries" =>
                    "泰國（34.3%）、斯里蘭卡（10%）、美國(8.8%)、法國（8.8%）、德國（8.7%）",
                "main_import_countries" =>
                    "中國大陸（15%）、新加坡（10.4%）、印度（8.4%）、馬來西亞（5.4%）、阿聯（4.9%）",
                "export_to" => "4,188,193美元",
                "import_from" => "2,671,720美元",
                "foreign_relationship" =>
                    "馬國外交遵循「不結盟政策(non-aligned policy)」，且經濟仰賴觀光事業，故對各國採友善態度。",
                "foreign_policy" =>
                    "馬國外交遵循「不結盟政策(non-aligned policy)」，且經濟仰賴觀光事業，故對各國採友善態度。另由於馬國地理條件特殊，該國是「小島國家聯盟」(AOSIS)主要代表國，強調氣候變遷事關小島國家的生存權，近年積極參與全球氣候變遷議題之討論，已簽署「氣候變化和生物多樣性公約」、「京都環保議定書」、「保護海洋生物議定書」等。馬國已和162個國家建交，但僅在部分國家設有大使館、商務及旅遊機構，各國於馬國設立之駐外機構亦不多，多由駐印度或斯里蘭卡大使館兼轄。",
                "time_range" => "3小時",
                "resident" => "駐印度代表處、駐清奈辦事處",
                "national_flag" =>
                    "http://www.mofa.gov.tw/Upload/Sites/FlagUrlLink/6969580f-921c-4182-8f24-b9c269724d8d.GIF",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            196 => [
                "name" => "馬紹爾群島共和國",
                "name_in_en" => "Republic of the Marshall Islands",
                "short_name" => "馬紹爾群島",
                "short_name_in_en" => "Marshall Islands",
                "capital" => "馬久羅(Majuro)",
                "capital_in_en" => "Majuro",
                "national_day" => "5月1日",
                "join_un_day" => "1991年",
                "area_size" => "陸地181.3平方公里，海域213萬平方公里。",
                "geographic" =>
                    "位於密克羅尼西亞東部海域，北緯4度至19度，東經162至175度之間。",
                "religion" =>
                    "基督新教(54.8%)、神召會(25.8%)、天主教(8.4%)、Bukot nan Jesus教會(2.8%)、摩門教(2.1%)、其他基督教派(3.6%)、其他(1%)、無宗教信仰(1.5%)",
                "bilaterial_relations" => null,
                "main_bounds" => "美元",
                "exchange_rate" =>
                    "馬國貨幣為美元，詳細匯率資訊建議至臺灣銀行(https://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/a9db7bf9-48a8-4484-b5ea-22ffdd3eeb24.gif",
                "is_diplomatic" => 1,
                "language" => "馬紹爾語、英語",
                "main_media" => "馬紹爾週報(Marshall Islands Journal)",
                "population" => "約41,200(2021)",
                "voltage" => "與台灣同。(電壓：110V)",
                "time_difference" => "+4:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/236b8f4e-79cc-4925-8254-abb4af5305f6.JPG",
                "political_system" => "總統內閣制",
                "history_intro" =>
                    "西元1526年西班牙商船「Santa Victoria」抵達馬紹爾從事交易。1788年，由John Marshall船長率領之Scarborough號英國軍艦路經此地區並以其姓氏命名為馬紹爾群島。1857年，美國傳教士抵達馬紹爾開始傳教工作。1859年，德國商人Adolph Capelle與葡萄牙商人Jose deBrum抵達馬紹爾建立永久性貿易據點。1885年德國宣布馬紹爾為其保護地。1914年第一次世界大戰爆發，日本於同年10月佔領馬紹爾，並於1922年獲得國際聯盟（League of Nations）承認。第二次世界大戰末期，美國於1945年佔領馬紹爾並於1947年由聯合國授權託管。1979年5月1日馬紹爾自治國會通過自治憲法並成立馬紹爾自治政府而實質獨立並選舉大酋長阿瑪達卡布亞（Amata Kabua）為執政委員會主席。1986年10月21日正式宣告獨立並定國名為馬紹爾群島共和國（The Republic of the Marshall Islands），並與美國簽訂自由聯合協定 (Compact of Free Association)，國防由美國負責。",
                "parliament" =>
                    "國會33名參議員由全民普選產生，任期4年，連選得連任。另有12人之酋長會議（Council of Iroij）由各環礁酋長依固定名額輪流出任，但無實權。",
                "cabinet" =>
                    "馬國國體為總統內閣制，總統由國會(Nitijela)參議員相互推選產生，任期4年，連選得連任，10名閣員則由總統自參議員中選任並均仍兼任參議員。內閣另設秘書長(Chief Secretary)，係文官系統最高職務。",
                "judiciary" =>
                    "司法為三審制，但由於馬國本身法律人才有限，檢察官及法官多由外籍人士擔任。",
                "headman" =>
                    "總統柯布亞(David Kabua)，於2020年1月總統選舉中勝出，取得執政權。",
                "fa_minister" => "柯布雅(Kitlang Kabua)",
                "major_political_parties" =>
                    "執政黨--「人民優先黨(Amijl Mokta)」、反對黨--「你們的政府黨(Kien Eo Am)」。",
                "financial_incoming" => null,
                "export_value" => "1,315,250,000美元 (2021)",
                "import_value" => "13,938,947,000美元(2021)",
                "export_item" => "椰子油、椰乾、手工藝品、魚類及水產品",
                "import_item" => "船隻、漁業用品、機具、食品等",
                "main_export_countries" => "丹麥、南韓、波蘭、德國、賽普勒斯",
                "main_import_countries" => "新加坡、南韓、中國、日本、賽普勒斯",
                "export_to" => "88,383,615美元(2021)",
                "import_from" => "54,235美元(2021)",
                "foreign_relationship" =>
                    "與我國、美、日、斐濟等111國建立外交關係，在美、日、斐濟、我國設有大使館，另在紐約及日內瓦設有常駐聯合國代表團，在夏威夷、阿肯色州設有總領事館。我國、美國、日本及澳洲在馬設有大使館。",
                "foreign_policy" =>
                    "1. 馬國與美國外交關係密切，美國依據「自由聯合協定(Compact of Free Association)」，除提供財政援助外，並負責馬國國防及安全事務。2. 中華民國、日本、澳洲及歐盟等做為馬國之主要合作夥伴，亦與馬國維持堅實友好關係。3. 就區域關係而言，馬國與帛琉及密克羅尼西亞聯邦(FSM)同為密克羅尼西亞(Micronesia)國家，彼此關係緊密友善；此外，馬國亦積極參與「太平洋島國論壇(PIF)」等區域機制。惟2021年2月馬國認為「君子協議」未獲尊重，致馬國候選人代表密克羅尼西亞區域參選PIF秘書長未果。4. 馬國已於1991年加入聯合國成為一員，現為聯合國體系下多個國際及區域多邊機制之會員國或締約方。",
                "time_range" => "較我國快4小時",
                "resident" => "我於馬國首府馬久羅設有大使館。",
                "national_flag" => "略",
                "area_name" => "亞太地區",
                "area_name_in_en" => "East Asia and Pacific",
            ],
            197 => [
                "name" => "馬達加斯加共和國",
                "name_in_en" => "Republic of Madagascar",
                "short_name" => "馬達加斯加",
                "short_name_in_en" => "Madagascar",
                "capital" => "安塔那那利弗",
                "capital_in_en" => "Antananarivo",
                "national_day" => "6月 26日",
                "join_un_day" => "1960年9月20日",
                "area_size" => "587,040平方公里",
                "geographic" => "非洲東南外海印度洋上",
                "religion" => "基督教、傳統信仰、伊斯蘭教",
                "bilaterial_relations" => null,
                "main_bounds" => "Madagascar Ariary (MGA)",
                "exchange_rate" =>
                    '1 US$ ≒ 3,506.03 Malagasy ariary（2018/12）',
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/625790f7-9b65-42c7-94f0-60d2a1d19e2d.GIF",
                "is_diplomatic" => 0,
                "language" => "法語",
                "main_media" =>
                    "Midi Madagasikara, Les Nouvelles, L’Expressde Madagascar",
                "population" => "2,500萬人（2018）",
                "voltage" => "220 V",
                "time_difference" => "-5:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/2d328984-7c20-41f6-891a-a17c06bcc172.JPG",
                "political_system" =>
                    "共和國 / 總統制，總統民選產生，任期5年。",
                "history_intro" =>
                    "馬達加斯加住民源自婆羅洲，祖先從印尼經印度至東非遷徙而來。16世紀末，馬來人後裔梅里納人(Merina)在中部建立梅里納王國，至19世紀初統一全島，建立馬達加斯加王國。1810年西方傳教士入境設立學校，法國隨即開始移民，於1895年成為該島之保護國，翌年更推翻王朝，併吞該島為其殖民地。1946年成為法國海外領土，1958年10月該島6個省投票選擇自治，成立馬拉加西共和國，惟仍隸屬法蘭西國協。1960年6月26日完全獨立，首任總統為齊拉納（Philibert Tsiranana），1975年底外長拉齊拉卡（Didier Ratsiraka）當選總統，改採社會主義路線，並更改國號為馬達加斯加民主共和國。1992年8月19日，國號改為馬達加斯加共和國。",
                "parliament" =>
                    "兩院制，分國民議會及參議院。國民議會共151席，由人民直選產生，任期5年。參議院共33席，其中2/3由區域議員擔任，餘1/3由總統任命產生，任期亦為5年。",
                "cabinet" => "總理由總統任命並組閣。",
                "judiciary" => "設有最高法院、憲法法庭。",
                "headman" => "拉喬利納 （Andry Rajoelina）",
                "fa_minister" => "安卓恩奇多海納 （Niaina Andriantsitohaina）",
                "major_political_parties" =>
                    "馬達加斯加新生黨(New Forece for Madagascar, HVM)我愛馬達加斯加黨（Tiako-I-Madagasikara, TIM）、堅定馬達加斯加青年黨（Tanora MalaGasy Vonona, TGV）。",
                "financial_incoming" =>
                    "2019年政府財政收入5.37兆美元，支出5.17兆美元",
                "export_value" => 'US$26.2億 (2020)',
                "import_value" => 'US$81.1億 (2020)',
                "export_item" =>
                    "咖啡、香草精、帶殼海鮮、糖、棉布、鉻礦、石化產品",
                "import_item" => "石油、食品",
                "main_export_countries" =>
                    "法國、美國、中國大陸、德國、日本(2020)",
                "main_import_countries" =>
                    "中國大陸、印度、法國、南非、阿拉伯聯合大公國(2020)",
                "export_to" => 'US$2,304萬(2021)',
                "import_from" => 'US$5,616萬(2021)',
                "foreign_relationship" =>
                    "1960年9月20日加入聯合國。近年來積極發展與法、美等西方國家的關係，密切與西南印度洋島國和非洲大陸東南部國家增進雙邊關係。馬達加斯加迄今與80幾個國家建立外交關係，是非洲聯盟、東南非共同市場、印度洋委員會及不結盟運動成員國。",
                "foreign_policy" =>
                    "採民主開放政策，加強與美、法及歐盟等國之關係。",
                "time_range" => "較台灣慢5小時",
                "resident" => "駐南非代表處兼轄",
                "national_flag" =>
                    "馬達加斯加國旗 是一面由白色直條和綠紅兩色橫條的旗幟。白紅兩色是梅里納人的象徵，而綠色象徵了在獨立過程起了重要作用的農民。",
                "area_name" => "非洲地區",
                "area_name_in_en" => "Africa",
            ],
            198 => [
                "name" => "黎巴嫩共和國",
                "name_in_en" => "Republic of Lebanon",
                "short_name" => "黎巴嫩",
                "short_name_in_en" => "Lebanon",
                "capital" => "貝魯特",
                "capital_in_en" => "Beirut",
                "national_day" => "11月 22日",
                "join_un_day" => "1945年10月24日",
                "area_size" => "10,400 平方公里",
                "geographic" =>
                    "位於西亞地區，西鄰地中海，東部和北部與敘利亞接壤，南部與以色列接壤",
                "religion" => "穆斯林54％，基督教40.5％，德魯茲5.6％",
                "bilaterial_relations" => null,
                "main_bounds" => "黎巴嫩鎊(LBP)",
                "exchange_rate" =>
                    "浮動匯率，1USD約折合1500LBP(詳細匯率資訊建議至臺灣銀行(http://rate.bot.com.tw/xrt?Lang=zh-TW)或兆豐商銀(https://www.megabank.com.tw/personal/foreign-service/forex)網站查詢。)",
                "flag_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/FlagUrlLink/e07aabbc-0273-4d1e-8bcb-46d1054bbf7b.GIF",
                "is_diplomatic" => 0,
                "language" => "阿拉伯語（官方），法文，英文，亞美尼亞文",
                "main_media" =>
                    "兩大國營新聞機構:  the national news agency 以及 central news agency.",
                "population" => "5,296,000人(2022年)",
                "voltage" => "220V",
                "time_difference" => "-5:00",
                "map_url_link" =>
                    "https://ws.mofa.gov.tw/001/Upload/OldFile/Sites/MapUrlLink/a3473b52-2643-4d52-905f-94adbe14dc53.jpg",
                "political_system" => "議會共和制",
                "history_intro" =>
                    "黎巴嫩是一個歷史非常悠久的地區，早在2000多年前，腓尼基人就生活在這片土地上。由於黎巴嫩扼守亞非歐戰略要道，所以不少民族都曾經佔領過黎巴嫩。相繼受埃及、亞述、巴比倫、波斯、羅馬統治；七至十六世紀初成為阿拉伯帝國一部分。1517年被奧斯曼帝國佔領。第一次世界大戰後成為法國委任統治地。1941年6月英軍在自由法國部隊協助下佔領黎巴嫩。同年11月自由法國部隊宣布結束對黎的委任統治。1943年11月22日黎巴嫩擺脫法國委任統治宣布獨立，成立黎巴嫩共和國。1946年12月英、法軍全部撤離黎巴嫩。1975年4月，黎巴嫩基督教和伊斯蘭教兩派爆發內戰。敘利亞自1976年10月起在黎巴嫩駐軍，並扶植國內的真主黨游擊隊；而以色列亦控制過南黎巴嫩一段時期作報復。1990年，黎內戰結束。2005年4月26日，敘利亞遵照聯合國決議，自黎巴嫩撤軍，結束29年的直接干預。",
                "parliament" => "一院制，共128席，由基督教和伊斯蘭教各占半數。",
                "cabinet" =>
                    "18位部長，目前總理為米卡提Najib Azmi Mikati (2021/7/27)",
                "judiciary" =>
                    "最高法院：最高法院（組織包括8個單位，每個單位設有主審法官和2名副法官）;憲法委員會（由10名成員組成）。下級法院：上訴法院；一審法院；專門法庭；宗教法庭；軍事法庭",
                "headman" => "Michel Aoun(31 October 2016)",
                "fa_minister" => "阿布哈比博 Abdallah Abouhabib",
                "major_political_parties" =>
                    '14 March Coalition: Future Movement Bloc Kata\'ib Party Lebanese Forces Marada Movement Social Democrat Hunshaqian PartyHizballah-led bloc Amal MovementBa’th Arab Socialist Party of Lebanon Free Patriotic MovementHizballahIslamic Actions Front Marada Movement Syrian Social Nationalist PartyTashnag or Armenian Revolutionary Federation Independent: Progressive Socialist Party',
                "financial_incoming" =>
                    "收入：88.9億美元；支出：120.9億美元(2017年)",
                "export_value" => "101.47億美元（2022年）",
                "import_value" => "173.83億美元（2022年）",
                "export_item" =>
                    "珠寶，賤金屬，化學品，消費品，水果蔬菜，煙草，建築礦物，電力機械和開關設備，紡織纖維，紙",
                "import_item" =>
                    "石油產品，汽車，醫藥產品，服裝，肉類，紡織面料，煙草，電氣機械設備，化學品",
                "main_export_countries" =>
                    "瑞士、阿拉伯聯合大公國、韓國、沙烏地阿拉伯、科威特",
                "main_import_countries" =>
                    "阿拉伯聯合大公國、中國、意大利、希臘、土耳其、美國",
                "export_to" => "4,523萬美元（2022年）",
                "import_from" => "240萬美元（2022年）",
                "foreign_relationship" =>
                    "對外強調其阿拉伯國家屬性，積極發展與埃及、沙烏地阿拉伯等阿拉伯大國的關係，並重視與美國和法國等西方國家的關係。",
                "foreign_policy" =>
                    "奉行中立不結盟政策，主張建立公正、合理、平等、均衡的國際政治、經濟新秩序。",
                "time_range" =>
                    "Eastern European Summer Time/夏令時間:較我國慢5小時Eastern European Time/冬令時間:較我國慢6小時",
                "resident" =>
                    "我國目前並未設立大使館或代表處於黎巴嫩，該國相關事務由駐約旦代表處兼轄，地址:No. 18, Iritiria Street, Um Uthaina, Amman, Jordan Tel. +962-6-5544426, Fax. +962-6-5544434, 電子郵件:jor@mofa.gov.tw，緊急聯絡電話:+962-79-5552605。",
                "national_flag" =>
                    "黎巴嫩國旗旗面上下為紅色，中間為白色。白色部分中央是一棵《聖經》中提及的黎巴嫩雪松。紅色象徵自我犧牲，白色象徵和平，雪松代表挺拔強勁的力量及純潔、永存。",
                "area_name" => "亞西地區",
                "area_name_in_en" => "West Asia",
            ],
        ]);
    }
}

