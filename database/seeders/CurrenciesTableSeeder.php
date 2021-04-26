<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->delete();
        
        DB::table('currencies')->insert([
            0 => 
            [
                'entity' => 'AFGHANISTAN',
                'currency' => 'Afghani',
                'alphabetic_code' => 'AFN',
                'numeric_code' => 971,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            1 => 
            [
                'entity' => 'ÅLAND ISLANDS',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            2 => 
            [
                'entity' => 'ALBANIA',
                'currency' => 'Lek',
                'alphabetic_code' => 'ALL',
                'numeric_code' => 8,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            3 => 
            [
                'entity' => 'ALGERIA',
                'currency' => 'Algerian Dinar',
                'alphabetic_code' => 'DZD',
                'numeric_code' => 12,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            4 => 
            [
                'entity' => 'AMERICAN SAMOA',
                'currency' => 'US Dollar',
                'alphabetic_code' => 'USD',
                'numeric_code' => 840,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            5 => 
            [
                'entity' => 'ANDORRA',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            6 => 
            [
                'entity' => 'ANGOLA',
                'currency' => 'Kwanza',
                'alphabetic_code' => 'AOA',
                'numeric_code' => 973,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            7 => 
            [
                'entity' => 'ANGUILLA',
                'currency' => 'East Caribbean Dollar',
                'alphabetic_code' => 'XCD',
                'numeric_code' => 951,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            8 => 
            [
                'entity' => 'ANTARCTICA',
                'currency' => 'No universal currency',
                'alphabetic_code' => '',
                'numeric_code' => NULL,
                'minor_unit' => '',
                'withdrawal_date' => NULL,
            ],
            9 => 
            [
                'entity' => 'ANTIGUA AND BARBUDA',
                'currency' => 'East Caribbean Dollar',
                'alphabetic_code' => 'XCD',
                'numeric_code' => 951,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            10 => 
            [
                'entity' => 'ARGENTINA',
                'currency' => 'Argentine Peso',
                'alphabetic_code' => 'ARS',
                'numeric_code' => 32,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            11 => 
            [
                'entity' => 'ARMENIA',
                'currency' => 'Armenian Dram',
                'alphabetic_code' => 'AMD',
                'numeric_code' => 51,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            12 => 
            [
                'entity' => 'ARUBA',
                'currency' => 'Aruban Florin',
                'alphabetic_code' => 'AWG',
                'numeric_code' => 533,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            13 => 
            [
                'entity' => 'AUSTRALIA',
                'currency' => 'Australian Dollar',
                'alphabetic_code' => 'AUD',
                'numeric_code' => 36,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            14 => 
            [
                'entity' => 'AUSTRIA',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            15 => 
            [
                'entity' => 'AZERBAIJAN',
                'currency' => 'Azerbaijan Manat',
                'alphabetic_code' => 'AZN',
                'numeric_code' => 944,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            16 => 
            [
            'entity' => 'BAHAMAS (THE)',
                'currency' => 'Bahamian Dollar',
                'alphabetic_code' => 'BSD',
                'numeric_code' => 44,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            17 => 
            [
                'entity' => 'BAHRAIN',
                'currency' => 'Bahraini Dinar',
                'alphabetic_code' => 'BHD',
                'numeric_code' => 48,
                'minor_unit' => '3',
                'withdrawal_date' => NULL,
            ],
            18 => 
            [
                'entity' => 'BANGLADESH',
                'currency' => 'Taka',
                'alphabetic_code' => 'BDT',
                'numeric_code' => 50,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            19 => 
            [
                'entity' => 'BARBADOS',
                'currency' => 'Barbados Dollar',
                'alphabetic_code' => 'BBD',
                'numeric_code' => 52,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            20 => 
            [
                'entity' => 'BELARUS',
                'currency' => 'Belarusian Ruble',
                'alphabetic_code' => 'BYN',
                'numeric_code' => 933,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            21 => 
            [
                'entity' => 'BELGIUM',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            22 => 
            [
                'entity' => 'BELIZE',
                'currency' => 'Belize Dollar',
                'alphabetic_code' => 'BZD',
                'numeric_code' => 84,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            23 => 
            [
                'entity' => 'BENIN',
                'currency' => 'CFA Franc BCEAO',
                'alphabetic_code' => 'XOF',
                'numeric_code' => 952,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            24 => 
            [
                'entity' => 'BERMUDA',
                'currency' => 'Bermudian Dollar',
                'alphabetic_code' => 'BMD',
                'numeric_code' => 60,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            25 => 
            [
                'entity' => 'BHUTAN',
                'currency' => 'Indian Rupee',
                'alphabetic_code' => 'INR',
                'numeric_code' => 356,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            26 => 
            [
                'entity' => 'BHUTAN',
                'currency' => 'Ngultrum',
                'alphabetic_code' => 'BTN',
                'numeric_code' => 64,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            27 => 
            [
            'entity' => 'BOLIVIA (PLURINATIONAL STATE OF)',
                'currency' => 'Boliviano',
                'alphabetic_code' => 'BOB',
                'numeric_code' => 68,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            28 => 
            [
            'entity' => 'BOLIVIA (PLURINATIONAL STATE OF)',
                'currency' => 'Mvdol',
                'alphabetic_code' => 'BOV',
                'numeric_code' => 984,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            29 => 
            [
                'entity' => 'BONAIRE, SINT EUSTATIUS AND SABA',
                'currency' => 'US Dollar',
                'alphabetic_code' => 'USD',
                'numeric_code' => 840,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            30 => 
            [
                'entity' => 'BOSNIA AND HERZEGOVINA',
                'currency' => 'Convertible Mark',
                'alphabetic_code' => 'BAM',
                'numeric_code' => 977,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            31 => 
            [
                'entity' => 'BOTSWANA',
                'currency' => 'Pula',
                'alphabetic_code' => 'BWP',
                'numeric_code' => 72,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            32 => 
            [
                'entity' => 'BOUVET ISLAND',
                'currency' => 'Norwegian Krone',
                'alphabetic_code' => 'NOK',
                'numeric_code' => 578,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            33 => 
            [
                'entity' => 'BRAZIL',
                'currency' => 'Brazilian Real',
                'alphabetic_code' => 'BRL',
                'numeric_code' => 986,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            34 => 
            [
            'entity' => 'BRITISH INDIAN OCEAN TERRITORY (THE)',
                'currency' => 'US Dollar',
                'alphabetic_code' => 'USD',
                'numeric_code' => 840,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            35 => 
            [
                'entity' => 'BRUNEI DARUSSALAM',
                'currency' => 'Brunei Dollar',
                'alphabetic_code' => 'BND',
                'numeric_code' => 96,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            36 => 
            [
                'entity' => 'BULGARIA',
                'currency' => 'Bulgarian Lev',
                'alphabetic_code' => 'BGN',
                'numeric_code' => 975,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            37 => 
            [
                'entity' => 'BURKINA FASO',
                'currency' => 'CFA Franc BCEAO',
                'alphabetic_code' => 'XOF',
                'numeric_code' => 952,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            38 => 
            [
                'entity' => 'BURUNDI',
                'currency' => 'Burundi Franc',
                'alphabetic_code' => 'BIF',
                'numeric_code' => 108,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            39 => 
            [
                'entity' => 'CABO VERDE',
                'currency' => 'Cabo Verde Escudo',
                'alphabetic_code' => 'CVE',
                'numeric_code' => 132,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            40 => 
            [
                'entity' => 'CAMBODIA',
                'currency' => 'Riel',
                'alphabetic_code' => 'KHR',
                'numeric_code' => 116,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            41 => 
            [
                'entity' => 'CAMEROON',
                'currency' => 'CFA Franc BEAC',
                'alphabetic_code' => 'XAF',
                'numeric_code' => 950,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            42 => 
            [
                'entity' => 'CANADA',
                'currency' => 'Canadian Dollar',
                'alphabetic_code' => 'CAD',
                'numeric_code' => 124,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            43 => 
            [
            'entity' => 'CAYMAN ISLANDS (THE)',
                'currency' => 'Cayman Islands Dollar',
                'alphabetic_code' => 'KYD',
                'numeric_code' => 136,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            44 => 
            [
            'entity' => 'CENTRAL AFRICAN REPUBLIC (THE)',
                'currency' => 'CFA Franc BEAC',
                'alphabetic_code' => 'XAF',
                'numeric_code' => 950,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            45 => 
            [
                'entity' => 'CHAD',
                'currency' => 'CFA Franc BEAC',
                'alphabetic_code' => 'XAF',
                'numeric_code' => 950,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            46 => 
            [
                'entity' => 'CHILE',
                'currency' => 'Chilean Peso',
                'alphabetic_code' => 'CLP',
                'numeric_code' => 152,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            47 => 
            [
                'entity' => 'CHILE',
                'currency' => 'Unidad de Fomento',
                'alphabetic_code' => 'CLF',
                'numeric_code' => 990,
                'minor_unit' => '4',
                'withdrawal_date' => NULL,
            ],
            48 => 
            [
                'entity' => 'CHINA',
                'currency' => 'Yuan Renminbi',
                'alphabetic_code' => 'CNY',
                'numeric_code' => 156,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            49 => 
            [
                'entity' => 'CHRISTMAS ISLAND',
                'currency' => 'Australian Dollar',
                'alphabetic_code' => 'AUD',
                'numeric_code' => 36,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            50 => 
            [
            'entity' => 'COCOS (KEELING) ISLANDS (THE)',
                'currency' => 'Australian Dollar',
                'alphabetic_code' => 'AUD',
                'numeric_code' => 36,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            51 => 
            [
                'entity' => 'COLOMBIA',
                'currency' => 'Colombian Peso',
                'alphabetic_code' => 'COP',
                'numeric_code' => 170,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            52 => 
            [
                'entity' => 'COLOMBIA',
                'currency' => 'Unidad de Valor Real',
                'alphabetic_code' => 'COU',
                'numeric_code' => 970,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            53 => 
            [
            'entity' => 'COMOROS (THE)',
                'currency' => 'Comorian Franc',
                'alphabetic_code' => 'KMF',
                'numeric_code' => 174,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            54 => 
            [
            'entity' => 'CONGO (THE DEMOCRATIC REPUBLIC OF THE)',
                'currency' => 'Congolese Franc',
                'alphabetic_code' => 'CDF',
                'numeric_code' => 976,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            55 => 
            [
            'entity' => 'CONGO (THE)',
                'currency' => 'CFA Franc BEAC',
                'alphabetic_code' => 'XAF',
                'numeric_code' => 950,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            56 => 
            [
            'entity' => 'COOK ISLANDS (THE)',
                'currency' => 'New Zealand Dollar',
                'alphabetic_code' => 'NZD',
                'numeric_code' => 554,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            57 => 
            [
                'entity' => 'COSTA RICA',
                'currency' => 'Costa Rican Colon',
                'alphabetic_code' => 'CRC',
                'numeric_code' => 188,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            58 => 
            [
                'entity' => 'CÔTE D\'IVOIRE',
                'currency' => 'CFA Franc BCEAO',
                'alphabetic_code' => 'XOF',
                'numeric_code' => 952,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            59 => 
            [
                'entity' => 'CROATIA',
                'currency' => 'Kuna',
                'alphabetic_code' => 'HRK',
                'numeric_code' => 191,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            60 => 
            [
                'entity' => 'CUBA',
                'currency' => 'Cuban Peso',
                'alphabetic_code' => 'CUP',
                'numeric_code' => 192,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            61 => 
            [
                'entity' => 'CUBA',
                'currency' => 'Peso Convertible',
                'alphabetic_code' => 'CUC',
                'numeric_code' => 931,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            62 => 
            [
                'entity' => 'CURAÇAO',
                'currency' => 'Netherlands Antillean Guilder',
                'alphabetic_code' => 'ANG',
                'numeric_code' => 532,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            63 => 
            [
                'entity' => 'CYPRUS',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            64 => 
            [
                'entity' => 'CZECHIA',
                'currency' => 'Czech Koruna',
                'alphabetic_code' => 'CZK',
                'numeric_code' => 203,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            65 => 
            [
                'entity' => 'DENMARK',
                'currency' => 'Danish Krone',
                'alphabetic_code' => 'DKK',
                'numeric_code' => 208,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            66 => 
            [
                'entity' => 'DJIBOUTI',
                'currency' => 'Djibouti Franc',
                'alphabetic_code' => 'DJF',
                'numeric_code' => 262,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            67 => 
            [
                'entity' => 'DOMINICA',
                'currency' => 'East Caribbean Dollar',
                'alphabetic_code' => 'XCD',
                'numeric_code' => 951,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            68 => 
            [
            'entity' => 'DOMINICAN REPUBLIC (THE)',
                'currency' => 'Dominican Peso',
                'alphabetic_code' => 'DOP',
                'numeric_code' => 214,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            69 => 
            [
                'entity' => 'ECUADOR',
                'currency' => 'US Dollar',
                'alphabetic_code' => 'USD',
                'numeric_code' => 840,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            70 => 
            [
                'entity' => 'EGYPT',
                'currency' => 'Egyptian Pound',
                'alphabetic_code' => 'EGP',
                'numeric_code' => 818,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            71 => 
            [
                'entity' => 'EL SALVADOR',
                'currency' => 'El Salvador Colon',
                'alphabetic_code' => 'SVC',
                'numeric_code' => 222,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            72 => 
            [
                'entity' => 'EL SALVADOR',
                'currency' => 'US Dollar',
                'alphabetic_code' => 'USD',
                'numeric_code' => 840,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            73 => 
            [
                'entity' => 'EQUATORIAL GUINEA',
                'currency' => 'CFA Franc BEAC',
                'alphabetic_code' => 'XAF',
                'numeric_code' => 950,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            74 => 
            [
                'entity' => 'ERITREA',
                'currency' => 'Nakfa',
                'alphabetic_code' => 'ERN',
                'numeric_code' => 232,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            75 => 
            [
                'entity' => 'ESTONIA',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            76 => 
            [
                'entity' => 'ESWATINI',
                'currency' => 'Lilangeni',
                'alphabetic_code' => 'SZL',
                'numeric_code' => 748,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            77 => 
            [
                'entity' => 'ETHIOPIA',
                'currency' => 'Ethiopian Birr',
                'alphabetic_code' => 'ETB',
                'numeric_code' => 230,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            78 => 
            [
                'entity' => 'EUROPEAN UNION',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            79 => 
            [
            'entity' => 'FALKLAND ISLANDS (THE) [MALVINAS]',
                'currency' => 'Falkland Islands Pound',
                'alphabetic_code' => 'FKP',
                'numeric_code' => 238,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            80 => 
            [
            'entity' => 'FAROE ISLANDS (THE)',
                'currency' => 'Danish Krone',
                'alphabetic_code' => 'DKK',
                'numeric_code' => 208,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            81 => 
            [
                'entity' => 'FIJI',
                'currency' => 'Fiji Dollar',
                'alphabetic_code' => 'FJD',
                'numeric_code' => 242,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            82 => 
            [
                'entity' => 'FINLAND',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            83 => 
            [
                'entity' => 'FRANCE',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            84 => 
            [
                'entity' => 'FRENCH GUIANA',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            85 => 
            [
                'entity' => 'FRENCH POLYNESIA',
                'currency' => 'CFP Franc',
                'alphabetic_code' => 'XPF',
                'numeric_code' => 953,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            86 => 
            [
            'entity' => 'FRENCH SOUTHERN TERRITORIES (THE)',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            87 => 
            [
                'entity' => 'GABON',
                'currency' => 'CFA Franc BEAC',
                'alphabetic_code' => 'XAF',
                'numeric_code' => 950,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            88 => 
            [
            'entity' => 'GAMBIA (THE)',
                'currency' => 'Dalasi',
                'alphabetic_code' => 'GMD',
                'numeric_code' => 270,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            89 => 
            [
                'entity' => 'GEORGIA',
                'currency' => 'Lari',
                'alphabetic_code' => 'GEL',
                'numeric_code' => 981,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            90 => 
            [
                'entity' => 'GERMANY',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            91 => 
            [
                'entity' => 'GHANA',
                'currency' => 'Ghana Cedi',
                'alphabetic_code' => 'GHS',
                'numeric_code' => 936,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            92 => 
            [
                'entity' => 'GIBRALTAR',
                'currency' => 'Gibraltar Pound',
                'alphabetic_code' => 'GIP',
                'numeric_code' => 292,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            93 => 
            [
                'entity' => 'GREECE',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            94 => 
            [
                'entity' => 'GREENLAND',
                'currency' => 'Danish Krone',
                'alphabetic_code' => 'DKK',
                'numeric_code' => 208,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            95 => 
            [
                'entity' => 'GRENADA',
                'currency' => 'East Caribbean Dollar',
                'alphabetic_code' => 'XCD',
                'numeric_code' => 951,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            96 => 
            [
                'entity' => 'GUADELOUPE',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            97 => 
            [
                'entity' => 'GUAM',
                'currency' => 'US Dollar',
                'alphabetic_code' => 'USD',
                'numeric_code' => 840,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            98 => 
            [
                'entity' => 'GUATEMALA',
                'currency' => 'Quetzal',
                'alphabetic_code' => 'GTQ',
                'numeric_code' => 320,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            99 => 
            [
                'entity' => 'GUERNSEY',
                'currency' => 'Pound Sterling',
                'alphabetic_code' => 'GBP',
                'numeric_code' => 826,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            100 => 
            [
                'entity' => 'GUINEA',
                'currency' => 'Guinean Franc',
                'alphabetic_code' => 'GNF',
                'numeric_code' => 324,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            101 => 
            [
                'entity' => 'GUINEA-BISSAU',
                'currency' => 'CFA Franc BCEAO',
                'alphabetic_code' => 'XOF',
                'numeric_code' => 952,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            102 => 
            [
                'entity' => 'GUYANA',
                'currency' => 'Guyana Dollar',
                'alphabetic_code' => 'GYD',
                'numeric_code' => 328,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            103 => 
            [
                'entity' => 'HAITI',
                'currency' => 'Gourde',
                'alphabetic_code' => 'HTG',
                'numeric_code' => 332,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            104 => 
            [
                'entity' => 'HAITI',
                'currency' => 'US Dollar',
                'alphabetic_code' => 'USD',
                'numeric_code' => 840,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            105 => 
            [
                'entity' => 'HEARD ISLAND AND McDONALD ISLANDS',
                'currency' => 'Australian Dollar',
                'alphabetic_code' => 'AUD',
                'numeric_code' => 36,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            106 => 
            [
            'entity' => 'HOLY SEE (THE)',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            107 => 
            [
                'entity' => 'HONDURAS',
                'currency' => 'Lempira',
                'alphabetic_code' => 'HNL',
                'numeric_code' => 340,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            108 => 
            [
                'entity' => 'HONG KONG',
                'currency' => 'Hong Kong Dollar',
                'alphabetic_code' => 'HKD',
                'numeric_code' => 344,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            109 => 
            [
                'entity' => 'HUNGARY',
                'currency' => 'Forint',
                'alphabetic_code' => 'HUF',
                'numeric_code' => 348,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            110 => 
            [
                'entity' => 'ICELAND',
                'currency' => 'Iceland Krona',
                'alphabetic_code' => 'ISK',
                'numeric_code' => 352,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            111 => 
            [
                'entity' => 'INDIA',
                'currency' => 'Indian Rupee',
                'alphabetic_code' => 'INR',
                'numeric_code' => 356,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            112 => 
            [
                'entity' => 'INDONESIA',
                'currency' => 'Rupiah',
                'alphabetic_code' => 'IDR',
                'numeric_code' => 360,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            113 => 
            [
            'entity' => 'INTERNATIONAL MONETARY FUND (IMF)',
            'currency' => 'SDR (Special Drawing Right)',
                'alphabetic_code' => 'XDR',
                'numeric_code' => 960,
                'minor_unit' => '-',
                'withdrawal_date' => NULL,
            ],
            114 => 
            [
            'entity' => 'IRAN (ISLAMIC REPUBLIC OF)',
                'currency' => 'Iranian Rial',
                'alphabetic_code' => 'IRR',
                'numeric_code' => 364,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            115 => 
            [
                'entity' => 'IRAQ',
                'currency' => 'Iraqi Dinar',
                'alphabetic_code' => 'IQD',
                'numeric_code' => 368,
                'minor_unit' => '3',
                'withdrawal_date' => NULL,
            ],
            116 => 
            [
                'entity' => 'IRELAND',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            117 => 
            [
                'entity' => 'ISLE OF MAN',
                'currency' => 'Pound Sterling',
                'alphabetic_code' => 'GBP',
                'numeric_code' => 826,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            118 => 
            [
                'entity' => 'ISRAEL',
                'currency' => 'New Israeli Sheqel',
                'alphabetic_code' => 'ILS',
                'numeric_code' => 376,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            119 => 
            [
                'entity' => 'ITALY',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            120 => 
            [
                'entity' => 'JAMAICA',
                'currency' => 'Jamaican Dollar',
                'alphabetic_code' => 'JMD',
                'numeric_code' => 388,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            121 => 
            [
                'entity' => 'JAPAN',
                'currency' => 'Yen',
                'alphabetic_code' => 'JPY',
                'numeric_code' => 392,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            122 => 
            [
                'entity' => 'JERSEY',
                'currency' => 'Pound Sterling',
                'alphabetic_code' => 'GBP',
                'numeric_code' => 826,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            123 => 
            [
                'entity' => 'JORDAN',
                'currency' => 'Jordanian Dinar',
                'alphabetic_code' => 'JOD',
                'numeric_code' => 400,
                'minor_unit' => '3',
                'withdrawal_date' => NULL,
            ],
            124 => 
            [
                'entity' => 'KAZAKHSTAN',
                'currency' => 'Tenge',
                'alphabetic_code' => 'KZT',
                'numeric_code' => 398,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            125 => 
            [
                'entity' => 'KENYA',
                'currency' => 'Kenyan Shilling',
                'alphabetic_code' => 'KES',
                'numeric_code' => 404,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            126 => 
            [
                'entity' => 'KIRIBATI',
                'currency' => 'Australian Dollar',
                'alphabetic_code' => 'AUD',
                'numeric_code' => 36,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            127 => 
            [
            'entity' => 'KOREA (THE DEMOCRATIC PEOPLE\'S REPUBLIC OF)',
                'currency' => 'North Korean Won',
                'alphabetic_code' => 'KPW',
                'numeric_code' => 408,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            128 => 
            [
            'entity' => 'KOREA (THE REPUBLIC OF)',
                'currency' => 'Won',
                'alphabetic_code' => 'KRW',
                'numeric_code' => 410,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            129 => 
            [
                'entity' => 'KUWAIT',
                'currency' => 'Kuwaiti Dinar',
                'alphabetic_code' => 'KWD',
                'numeric_code' => 414,
                'minor_unit' => '3',
                'withdrawal_date' => NULL,
            ],
            130 => 
            [
                'entity' => 'KYRGYZSTAN',
                'currency' => 'Som',
                'alphabetic_code' => 'KGS',
                'numeric_code' => 417,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            131 => 
            [
            'entity' => 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC (THE)',
                'currency' => 'Lao Kip',
                'alphabetic_code' => 'LAK',
                'numeric_code' => 418,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            132 => 
            [
                'entity' => 'LATVIA',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            133 => 
            [
                'entity' => 'LEBANON',
                'currency' => 'Lebanese Pound',
                'alphabetic_code' => 'LBP',
                'numeric_code' => 422,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            134 => 
            [
                'entity' => 'LESOTHO',
                'currency' => 'Loti',
                'alphabetic_code' => 'LSL',
                'numeric_code' => 426,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            135 => 
            [
                'entity' => 'LESOTHO',
                'currency' => 'Rand',
                'alphabetic_code' => 'ZAR',
                'numeric_code' => 710,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            136 => 
            [
                'entity' => 'LIBERIA',
                'currency' => 'Liberian Dollar',
                'alphabetic_code' => 'LRD',
                'numeric_code' => 430,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            137 => 
            [
                'entity' => 'LIBYA',
                'currency' => 'Libyan Dinar',
                'alphabetic_code' => 'LYD',
                'numeric_code' => 434,
                'minor_unit' => '3',
                'withdrawal_date' => NULL,
            ],
            138 => 
            [
                'entity' => 'LIECHTENSTEIN',
                'currency' => 'Swiss Franc',
                'alphabetic_code' => 'CHF',
                'numeric_code' => 756,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            139 => 
            [
                'entity' => 'LITHUANIA',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            140 => 
            [
                'entity' => 'LUXEMBOURG',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            141 => 
            [
                'entity' => 'MACAO',
                'currency' => 'Pataca',
                'alphabetic_code' => 'MOP',
                'numeric_code' => 446,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            142 => 
            [
                'entity' => 'NORTH MACEDONIA',
                'currency' => 'Denar',
                'alphabetic_code' => 'MKD',
                'numeric_code' => 807,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            143 => 
            [
                'entity' => 'MADAGASCAR',
                'currency' => 'Malagasy Ariary',
                'alphabetic_code' => 'MGA',
                'numeric_code' => 969,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            144 => 
            [
                'entity' => 'MALAWI',
                'currency' => 'Malawi Kwacha',
                'alphabetic_code' => 'MWK',
                'numeric_code' => 454,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            145 => 
            [
                'entity' => 'MALAYSIA',
                'currency' => 'Malaysian Ringgit',
                'alphabetic_code' => 'MYR',
                'numeric_code' => 458,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            146 => 
            [
                'entity' => 'MALDIVES',
                'currency' => 'Rufiyaa',
                'alphabetic_code' => 'MVR',
                'numeric_code' => 462,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            147 => 
            [
                'entity' => 'MALI',
                'currency' => 'CFA Franc BCEAO',
                'alphabetic_code' => 'XOF',
                'numeric_code' => 952,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            148 => 
            [
                'entity' => 'MALTA',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            149 => 
            [
            'entity' => 'MARSHALL ISLANDS (THE)',
                'currency' => 'US Dollar',
                'alphabetic_code' => 'USD',
                'numeric_code' => 840,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            150 => 
            [
                'entity' => 'MARTINIQUE',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            151 => 
            [
                'entity' => 'MAURITANIA',
                'currency' => 'Ouguiya',
                'alphabetic_code' => 'MRU',
                'numeric_code' => 929,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            152 => 
            [
                'entity' => 'MAURITIUS',
                'currency' => 'Mauritius Rupee',
                'alphabetic_code' => 'MUR',
                'numeric_code' => 480,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            153 => 
            [
                'entity' => 'MAYOTTE',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            154 => 
            [
                'entity' => 'MEMBER COUNTRIES OF THE AFRICAN DEVELOPMENT BANK GROUP',
                'currency' => 'ADB Unit of Account',
                'alphabetic_code' => 'XUA',
                'numeric_code' => 965,
                'minor_unit' => '-',
                'withdrawal_date' => NULL,
            ],
            155 => 
            [
                'entity' => 'MEXICO',
                'currency' => 'Mexican Peso',
                'alphabetic_code' => 'MXN',
                'numeric_code' => 484,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            156 => 
            [
                'entity' => 'MEXICO',
            'currency' => 'Mexican Unidad de Inversion (UDI)',
                'alphabetic_code' => 'MXV',
                'numeric_code' => 979,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            157 => 
            [
            'entity' => 'MICRONESIA (FEDERATED STATES OF)',
                'currency' => 'US Dollar',
                'alphabetic_code' => 'USD',
                'numeric_code' => 840,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            158 => 
            [
            'entity' => 'MOLDOVA (THE REPUBLIC OF)',
                'currency' => 'Moldovan Leu',
                'alphabetic_code' => 'MDL',
                'numeric_code' => 498,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            159 => 
            [
                'entity' => 'MONACO',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            160 => 
            [
                'entity' => 'MONGOLIA',
                'currency' => 'Tugrik',
                'alphabetic_code' => 'MNT',
                'numeric_code' => 496,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            161 => 
            [
                'entity' => 'MONTENEGRO',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            162 => 
            [
                'entity' => 'MONTSERRAT',
                'currency' => 'East Caribbean Dollar',
                'alphabetic_code' => 'XCD',
                'numeric_code' => 951,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            163 => 
            [
                'entity' => 'MOROCCO',
                'currency' => 'Moroccan Dirham',
                'alphabetic_code' => 'MAD',
                'numeric_code' => 504,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            164 => 
            [
                'entity' => 'MOZAMBIQUE',
                'currency' => 'Mozambique Metical',
                'alphabetic_code' => 'MZN',
                'numeric_code' => 943,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            165 => 
            [
                'entity' => 'MYANMAR',
                'currency' => 'Kyat',
                'alphabetic_code' => 'MMK',
                'numeric_code' => 104,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            166 => 
            [
                'entity' => 'NAMIBIA',
                'currency' => 'Namibia Dollar',
                'alphabetic_code' => 'NAD',
                'numeric_code' => 516,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            167 => 
            [
                'entity' => 'NAMIBIA',
                'currency' => 'Rand',
                'alphabetic_code' => 'ZAR',
                'numeric_code' => 710,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            168 => 
            [
                'entity' => 'NAURU',
                'currency' => 'Australian Dollar',
                'alphabetic_code' => 'AUD',
                'numeric_code' => 36,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            169 => 
            [
                'entity' => 'NEPAL',
                'currency' => 'Nepalese Rupee',
                'alphabetic_code' => 'NPR',
                'numeric_code' => 524,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            170 => 
            [
            'entity' => 'NETHERLANDS (THE)',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            171 => 
            [
                'entity' => 'NEW CALEDONIA',
                'currency' => 'CFP Franc',
                'alphabetic_code' => 'XPF',
                'numeric_code' => 953,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            172 => 
            [
                'entity' => 'NEW ZEALAND',
                'currency' => 'New Zealand Dollar',
                'alphabetic_code' => 'NZD',
                'numeric_code' => 554,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            173 => 
            [
                'entity' => 'NICARAGUA',
                'currency' => 'Cordoba Oro',
                'alphabetic_code' => 'NIO',
                'numeric_code' => 558,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            174 => 
            [
            'entity' => 'NIGER (THE)',
                'currency' => 'CFA Franc BCEAO',
                'alphabetic_code' => 'XOF',
                'numeric_code' => 952,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            175 => 
            [
                'entity' => 'NIGERIA',
                'currency' => 'Naira',
                'alphabetic_code' => 'NGN',
                'numeric_code' => 566,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            176 => 
            [
                'entity' => 'NIUE',
                'currency' => 'New Zealand Dollar',
                'alphabetic_code' => 'NZD',
                'numeric_code' => 554,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            177 => 
            [
                'entity' => 'NORFOLK ISLAND',
                'currency' => 'Australian Dollar',
                'alphabetic_code' => 'AUD',
                'numeric_code' => 36,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            178 => 
            [
            'entity' => 'NORTHERN MARIANA ISLANDS (THE)',
                'currency' => 'US Dollar',
                'alphabetic_code' => 'USD',
                'numeric_code' => 840,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            179 => 
            [
                'entity' => 'NORWAY',
                'currency' => 'Norwegian Krone',
                'alphabetic_code' => 'NOK',
                'numeric_code' => 578,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            180 => 
            [
                'entity' => 'OMAN',
                'currency' => 'Rial Omani',
                'alphabetic_code' => 'OMR',
                'numeric_code' => 512,
                'minor_unit' => '3',
                'withdrawal_date' => NULL,
            ],
            181 => 
            [
                'entity' => 'PAKISTAN',
                'currency' => 'Pakistan Rupee',
                'alphabetic_code' => 'PKR',
                'numeric_code' => 586,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            182 => 
            [
                'entity' => 'PALAU',
                'currency' => 'US Dollar',
                'alphabetic_code' => 'USD',
                'numeric_code' => 840,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            183 => 
            [
                'entity' => 'PALESTINE, STATE OF',
                'currency' => 'No universal currency',
                'alphabetic_code' => '',
                'numeric_code' => NULL,
                'minor_unit' => '',
                'withdrawal_date' => NULL,
            ],
            184 => 
            [
                'entity' => 'PANAMA',
                'currency' => 'Balboa',
                'alphabetic_code' => 'PAB',
                'numeric_code' => 590,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            185 => 
            [
                'entity' => 'PANAMA',
                'currency' => 'US Dollar',
                'alphabetic_code' => 'USD',
                'numeric_code' => 840,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            186 => 
            [
                'entity' => 'PAPUA NEW GUINEA',
                'currency' => 'Kina',
                'alphabetic_code' => 'PGK',
                'numeric_code' => 598,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            187 => 
            [
                'entity' => 'PARAGUAY',
                'currency' => 'Guarani',
                'alphabetic_code' => 'PYG',
                'numeric_code' => 600,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            188 => 
            [
                'entity' => 'PERU',
                'currency' => 'Sol',
                'alphabetic_code' => 'PEN',
                'numeric_code' => 604,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            189 => 
            [
            'entity' => 'PHILIPPINES (THE)',
                'currency' => 'Philippine Peso',
                'alphabetic_code' => 'PHP',
                'numeric_code' => 608,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            190 => 
            [
                'entity' => 'PITCAIRN',
                'currency' => 'New Zealand Dollar',
                'alphabetic_code' => 'NZD',
                'numeric_code' => 554,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            191 => 
            [
                'entity' => 'POLAND',
                'currency' => 'Zloty',
                'alphabetic_code' => 'PLN',
                'numeric_code' => 985,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            192 => 
            [
                'entity' => 'PORTUGAL',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            193 => 
            [
                'entity' => 'PUERTO RICO',
                'currency' => 'US Dollar',
                'alphabetic_code' => 'USD',
                'numeric_code' => 840,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            194 => 
            [
                'entity' => 'QATAR',
                'currency' => 'Qatari Rial',
                'alphabetic_code' => 'QAR',
                'numeric_code' => 634,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            195 => 
            [
                'entity' => 'RÉUNION',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            196 => 
            [
                'entity' => 'ROMANIA',
                'currency' => 'Romanian Leu',
                'alphabetic_code' => 'RON',
                'numeric_code' => 946,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            197 => 
            [
            'entity' => 'RUSSIAN FEDERATION (THE)',
                'currency' => 'Russian Ruble',
                'alphabetic_code' => 'RUB',
                'numeric_code' => 643,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            198 => 
            [
                'entity' => 'RWANDA',
                'currency' => 'Rwanda Franc',
                'alphabetic_code' => 'RWF',
                'numeric_code' => 646,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            199 => 
            [
                'entity' => 'SAINT BARTHÉLEMY',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            200 => 
            [
                'entity' => 'SAINT HELENA, ASCENSION AND TRISTAN DA CUNHA',
                'currency' => 'Saint Helena Pound',
                'alphabetic_code' => 'SHP',
                'numeric_code' => 654,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            201 => 
            [
                'entity' => 'SAINT KITTS AND NEVIS',
                'currency' => 'East Caribbean Dollar',
                'alphabetic_code' => 'XCD',
                'numeric_code' => 951,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            202 => 
            [
                'entity' => 'SAINT LUCIA',
                'currency' => 'East Caribbean Dollar',
                'alphabetic_code' => 'XCD',
                'numeric_code' => 951,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            203 => 
            [
            'entity' => 'SAINT MARTIN (FRENCH PART)',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            204 => 
            [
                'entity' => 'SAINT PIERRE AND MIQUELON',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            205 => 
            [
                'entity' => 'SAINT VINCENT AND THE GRENADINES',
                'currency' => 'East Caribbean Dollar',
                'alphabetic_code' => 'XCD',
                'numeric_code' => 951,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            206 => 
            [
                'entity' => 'SAMOA',
                'currency' => 'Tala',
                'alphabetic_code' => 'WST',
                'numeric_code' => 882,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            207 => 
            [
                'entity' => 'SAN MARINO',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            208 => 
            [
                'entity' => 'SAO TOME AND PRINCIPE',
                'currency' => 'Dobra',
                'alphabetic_code' => 'STN',
                'numeric_code' => 930,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            209 => 
            [
                'entity' => 'SAUDI ARABIA',
                'currency' => 'Saudi Riyal',
                'alphabetic_code' => 'SAR',
                'numeric_code' => 682,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            210 => 
            [
                'entity' => 'SENEGAL',
                'currency' => 'CFA Franc BCEAO',
                'alphabetic_code' => 'XOF',
                'numeric_code' => 952,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            211 => 
            [
                'entity' => 'SERBIA',
                'currency' => 'Serbian Dinar',
                'alphabetic_code' => 'RSD',
                'numeric_code' => 941,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            212 => 
            [
                'entity' => 'SEYCHELLES',
                'currency' => 'Seychelles Rupee',
                'alphabetic_code' => 'SCR',
                'numeric_code' => 690,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            213 => 
            [
                'entity' => 'SIERRA LEONE',
                'currency' => 'Leone',
                'alphabetic_code' => 'SLL',
                'numeric_code' => 694,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            214 => 
            [
                'entity' => 'SINGAPORE',
                'currency' => 'Singapore Dollar',
                'alphabetic_code' => 'SGD',
                'numeric_code' => 702,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            215 => 
            [
            'entity' => 'SINT MAARTEN (DUTCH PART)',
                'currency' => 'Netherlands Antillean Guilder',
                'alphabetic_code' => 'ANG',
                'numeric_code' => 532,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            216 => 
            [
                'entity' => 'SISTEMA UNITARIO DE COMPENSACION REGIONAL DE PAGOS "SUCRE"',
                'currency' => 'Sucre',
                'alphabetic_code' => 'XSU',
                'numeric_code' => 994,
                'minor_unit' => '-',
                'withdrawal_date' => NULL,
            ],
            217 => 
            [
                'entity' => 'SLOVAKIA',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            218 => 
            [
                'entity' => 'SLOVENIA',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            219 => 
            [
                'entity' => 'SOLOMON ISLANDS',
                'currency' => 'Solomon Islands Dollar',
                'alphabetic_code' => 'SBD',
                'numeric_code' => 90,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            220 => 
            [
                'entity' => 'SOMALIA',
                'currency' => 'Somali Shilling',
                'alphabetic_code' => 'SOS',
                'numeric_code' => 706,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            221 => 
            [
                'entity' => 'SOUTH AFRICA',
                'currency' => 'Rand',
                'alphabetic_code' => 'ZAR',
                'numeric_code' => 710,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            222 => 
            [
                'entity' => 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS',
                'currency' => 'No universal currency',
                'alphabetic_code' => '',
                'numeric_code' => NULL,
                'minor_unit' => '',
                'withdrawal_date' => NULL,
            ],
            223 => 
            [
                'entity' => 'SOUTH SUDAN',
                'currency' => 'South Sudanese Pound',
                'alphabetic_code' => 'SSP',
                'numeric_code' => 728,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            224 => 
            [
                'entity' => 'SPAIN',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            225 => 
            [
                'entity' => 'SRI LANKA',
                'currency' => 'Sri Lanka Rupee',
                'alphabetic_code' => 'LKR',
                'numeric_code' => 144,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            226 => 
            [
            'entity' => 'SUDAN (THE)',
                'currency' => 'Sudanese Pound',
                'alphabetic_code' => 'SDG',
                'numeric_code' => 938,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            227 => 
            [
                'entity' => 'SURINAME',
                'currency' => 'Surinam Dollar',
                'alphabetic_code' => 'SRD',
                'numeric_code' => 968,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            228 => 
            [
                'entity' => 'SVALBARD AND JAN MAYEN',
                'currency' => 'Norwegian Krone',
                'alphabetic_code' => 'NOK',
                'numeric_code' => 578,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            229 => 
            [
                'entity' => 'SWEDEN',
                'currency' => 'Swedish Krona',
                'alphabetic_code' => 'SEK',
                'numeric_code' => 752,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            230 => 
            [
                'entity' => 'SWITZERLAND',
                'currency' => 'Swiss Franc',
                'alphabetic_code' => 'CHF',
                'numeric_code' => 756,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            231 => 
            [
                'entity' => 'SWITZERLAND',
                'currency' => 'WIR Euro',
                'alphabetic_code' => 'CHE',
                'numeric_code' => 947,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            232 => 
            [
                'entity' => 'SWITZERLAND',
                'currency' => 'WIR Franc',
                'alphabetic_code' => 'CHW',
                'numeric_code' => 948,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            233 => 
            [
                'entity' => 'SYRIAN ARAB REPUBLIC',
                'currency' => 'Syrian Pound',
                'alphabetic_code' => 'SYP',
                'numeric_code' => 760,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            234 => 
            [
            'entity' => 'TAIWAN',
                'currency' => 'New Taiwan Dollar',
                'alphabetic_code' => 'TWD',
                'numeric_code' => 901,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            235 => 
            [
                'entity' => 'TAJIKISTAN',
                'currency' => 'Somoni',
                'alphabetic_code' => 'TJS',
                'numeric_code' => 972,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            236 => 
            [
                'entity' => 'TANZANIA, UNITED REPUBLIC OF',
                'currency' => 'Tanzanian Shilling',
                'alphabetic_code' => 'TZS',
                'numeric_code' => 834,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            237 => 
            [
                'entity' => 'THAILAND',
                'currency' => 'Baht',
                'alphabetic_code' => 'THB',
                'numeric_code' => 764,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            238 => 
            [
                'entity' => 'TIMOR-LESTE',
                'currency' => 'US Dollar',
                'alphabetic_code' => 'USD',
                'numeric_code' => 840,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            239 => 
            [
                'entity' => 'TOGO',
                'currency' => 'CFA Franc BCEAO',
                'alphabetic_code' => 'XOF',
                'numeric_code' => 952,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            240 => 
            [
                'entity' => 'TOKELAU',
                'currency' => 'New Zealand Dollar',
                'alphabetic_code' => 'NZD',
                'numeric_code' => 554,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            241 => 
            [
                'entity' => 'TONGA',
                'currency' => 'Pa\'anga',
                'alphabetic_code' => 'TOP',
                'numeric_code' => 776,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            242 => 
            [
                'entity' => 'TRINIDAD AND TOBAGO',
                'currency' => 'Trinidad and Tobago Dollar',
                'alphabetic_code' => 'TTD',
                'numeric_code' => 780,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            243 => 
            [
                'entity' => 'TUNISIA',
                'currency' => 'Tunisian Dinar',
                'alphabetic_code' => 'TND',
                'numeric_code' => 788,
                'minor_unit' => '3',
                'withdrawal_date' => NULL,
            ],
            244 => 
            [
                'entity' => 'TURKEY',
                'currency' => 'Turkish Lira',
                'alphabetic_code' => 'TRY',
                'numeric_code' => 949,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            245 => 
            [
                'entity' => 'TURKMENISTAN',
                'currency' => 'Turkmenistan New Manat',
                'alphabetic_code' => 'TMT',
                'numeric_code' => 934,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            246 => 
            [
            'entity' => 'TURKS AND CAICOS ISLANDS (THE)',
                'currency' => 'US Dollar',
                'alphabetic_code' => 'USD',
                'numeric_code' => 840,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            247 => 
            [
                'entity' => 'TUVALU',
                'currency' => 'Australian Dollar',
                'alphabetic_code' => 'AUD',
                'numeric_code' => 36,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            248 => 
            [
                'entity' => 'UGANDA',
                'currency' => 'Uganda Shilling',
                'alphabetic_code' => 'UGX',
                'numeric_code' => 800,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            249 => 
            [
                'entity' => 'UKRAINE',
                'currency' => 'Hryvnia',
                'alphabetic_code' => 'UAH',
                'numeric_code' => 980,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            250 => 
            [
            'entity' => 'UNITED ARAB EMIRATES (THE)',
                'currency' => 'UAE Dirham',
                'alphabetic_code' => 'AED',
                'numeric_code' => 784,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            251 => 
            [
            'entity' => 'UNITED KINGDOM OF GREAT BRITAIN AND NORTHERN IRELAND (THE)',
                'currency' => 'Pound Sterling',
                'alphabetic_code' => 'GBP',
                'numeric_code' => 826,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            252 => 
            [
            'entity' => 'UNITED STATES MINOR OUTLYING ISLANDS (THE)',
                'currency' => 'US Dollar',
                'alphabetic_code' => 'USD',
                'numeric_code' => 840,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            253 => 
            [
            'entity' => 'UNITED STATES OF AMERICA (THE)',
                'currency' => 'US Dollar',
                'alphabetic_code' => 'USD',
                'numeric_code' => 840,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            254 => 
            [
            'entity' => 'UNITED STATES OF AMERICA (THE)',
            'currency' => 'US Dollar (Next day)',
                'alphabetic_code' => 'USN',
                'numeric_code' => 997,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            255 => 
            [
                'entity' => 'URUGUAY',
                'currency' => 'Peso Uruguayo',
                'alphabetic_code' => 'UYU',
                'numeric_code' => 858,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            256 => 
            [
                'entity' => 'URUGUAY',
            'currency' => 'Uruguay Peso en Unidades Indexadas (UI)',
                'alphabetic_code' => 'UYI',
                'numeric_code' => 940,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            257 => 
            [
                'entity' => 'URUGUAY',
                'currency' => 'Unidad Previsional',
                'alphabetic_code' => 'UYW',
                'numeric_code' => 927,
                'minor_unit' => '4',
                'withdrawal_date' => NULL,
            ],
            258 => 
            [
                'entity' => 'UZBEKISTAN',
                'currency' => 'Uzbekistan Sum',
                'alphabetic_code' => 'UZS',
                'numeric_code' => 860,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            259 => 
            [
                'entity' => 'VANUATU',
                'currency' => 'Vatu',
                'alphabetic_code' => 'VUV',
                'numeric_code' => 548,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            260 => 
            [
            'entity' => 'VENEZUELA (BOLIVARIAN REPUBLIC OF)',
                'currency' => 'Bolívar Soberano',
                'alphabetic_code' => 'VES',
                'numeric_code' => 928,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            261 => 
            [
                'entity' => 'VIET NAM',
                'currency' => 'Dong',
                'alphabetic_code' => 'VND',
                'numeric_code' => 704,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            262 => 
            [
            'entity' => 'VIRGIN ISLANDS (BRITISH)',
                'currency' => 'US Dollar',
                'alphabetic_code' => 'USD',
                'numeric_code' => 840,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            263 => 
            [
            'entity' => 'VIRGIN ISLANDS (U.S.)',
                'currency' => 'US Dollar',
                'alphabetic_code' => 'USD',
                'numeric_code' => 840,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            264 => 
            [
                'entity' => 'WALLIS AND FUTUNA',
                'currency' => 'CFP Franc',
                'alphabetic_code' => 'XPF',
                'numeric_code' => 953,
                'minor_unit' => '0',
                'withdrawal_date' => NULL,
            ],
            265 => 
            [
                'entity' => 'WESTERN SAHARA',
                'currency' => 'Moroccan Dirham',
                'alphabetic_code' => 'MAD',
                'numeric_code' => 504,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            266 => 
            [
                'entity' => 'YEMEN',
                'currency' => 'Yemeni Rial',
                'alphabetic_code' => 'YER',
                'numeric_code' => 886,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            267 => 
            [
                'entity' => 'ZAMBIA',
                'currency' => 'Zambian Kwacha',
                'alphabetic_code' => 'ZMW',
                'numeric_code' => 967,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            268 => 
            [
                'entity' => 'ZIMBABWE',
                'currency' => 'Zimbabwe Dollar',
                'alphabetic_code' => 'ZWL',
                'numeric_code' => 932,
                'minor_unit' => '2',
                'withdrawal_date' => NULL,
            ],
            269 => 
            [
                'entity' => 'ZZ01_Bond Markets Unit European_EURCO',
            'currency' => 'Bond Markets Unit European Composite Unit (EURCO)',
                'alphabetic_code' => 'XBA',
                'numeric_code' => 955,
                'minor_unit' => '-',
                'withdrawal_date' => NULL,
            ],
            270 => 
            [
                'entity' => 'ZZ02_Bond Markets Unit European_EMU-6',
            'currency' => 'Bond Markets Unit European Monetary Unit (E.M.U.-6)',
                'alphabetic_code' => 'XBB',
                'numeric_code' => 956,
                'minor_unit' => '-',
                'withdrawal_date' => NULL,
            ],
            271 => 
            [
                'entity' => 'ZZ03_Bond Markets Unit European_EUA-9',
            'currency' => 'Bond Markets Unit European Unit of Account 9 (E.U.A.-9)',
                'alphabetic_code' => 'XBC',
                'numeric_code' => 957,
                'minor_unit' => '-',
                'withdrawal_date' => NULL,
            ],
            272 => 
            [
                'entity' => 'ZZ04_Bond Markets Unit European_EUA-17',
            'currency' => 'Bond Markets Unit European Unit of Account 17 (E.U.A.-17)',
                'alphabetic_code' => 'XBD',
                'numeric_code' => 958,
                'minor_unit' => '-',
                'withdrawal_date' => NULL,
            ],
            273 => 
            [
                'entity' => 'ZZ06_Testing_Code',
                'currency' => 'Codes specifically reserved for testing purposes',
                'alphabetic_code' => 'XTS',
                'numeric_code' => 963,
                'minor_unit' => '-',
                'withdrawal_date' => NULL,
            ],
            274 => 
            [
                'entity' => 'ZZ07_No_Currency',
                'currency' => 'The codes assigned for transactions where no currency is involved',
                'alphabetic_code' => 'XXX',
                'numeric_code' => 999,
                'minor_unit' => '-',
                'withdrawal_date' => NULL,
            ],
            275 => 
            [
                'entity' => 'ZZ08_Gold',
                'currency' => 'Gold',
                'alphabetic_code' => 'XAU',
                'numeric_code' => 959,
                'minor_unit' => '-',
                'withdrawal_date' => NULL,
            ],
            276 => 
            [
                'entity' => 'ZZ09_Palladium',
                'currency' => 'Palladium',
                'alphabetic_code' => 'XPD',
                'numeric_code' => 964,
                'minor_unit' => '-',
                'withdrawal_date' => NULL,
            ],
            277 => 
            [
                'entity' => 'ZZ10_Platinum',
                'currency' => 'Platinum',
                'alphabetic_code' => 'XPT',
                'numeric_code' => 962,
                'minor_unit' => '-',
                'withdrawal_date' => NULL,
            ],
            278 => 
            [
                'entity' => 'ZZ11_Silver',
                'currency' => 'Silver',
                'alphabetic_code' => 'XAG',
                'numeric_code' => 961,
                'minor_unit' => '-',
                'withdrawal_date' => NULL,
            ],
            279 => 
            [
                'entity' => 'AFGHANISTAN',
                'currency' => 'Afghani',
                'alphabetic_code' => 'AFA',
                'numeric_code' => 4,
                'minor_unit' => '',
                'withdrawal_date' => '2003-01',
            ],
            280 => 
            [
                'entity' => 'ÅLAND ISLANDS',
                'currency' => 'Markka',
                'alphabetic_code' => 'FIM',
                'numeric_code' => 246,
                'minor_unit' => '',
                'withdrawal_date' => '2002-03',
            ],
            281 => 
            [
                'entity' => 'ALBANIA',
                'currency' => 'Old Lek',
                'alphabetic_code' => 'ALK',
                'numeric_code' => 8,
                'minor_unit' => '',
                'withdrawal_date' => '1989-12',
            ],
            282 => 
            [
                'entity' => 'ANDORRA',
                'currency' => 'Andorran Peseta',
                'alphabetic_code' => 'ADP',
                'numeric_code' => 20,
                'minor_unit' => '',
                'withdrawal_date' => '2003-07',
            ],
            283 => 
            [
                'entity' => 'ANDORRA',
                'currency' => 'Spanish Peseta',
                'alphabetic_code' => 'ESP',
                'numeric_code' => 724,
                'minor_unit' => '',
                'withdrawal_date' => '2002-03',
            ],
            284 => 
            [
                'entity' => 'ANDORRA',
                'currency' => 'French Franc',
                'alphabetic_code' => 'FRF',
                'numeric_code' => 250,
                'minor_unit' => '',
                'withdrawal_date' => '2002-03',
            ],
            285 => 
            [
                'entity' => 'ANGOLA',
                'currency' => 'Kwanza',
                'alphabetic_code' => 'AOK',
                'numeric_code' => 24,
                'minor_unit' => '',
                'withdrawal_date' => '1991-03',
            ],
            286 => 
            [
                'entity' => 'ANGOLA',
                'currency' => 'New Kwanza',
                'alphabetic_code' => 'AON',
                'numeric_code' => 24,
                'minor_unit' => '',
                'withdrawal_date' => '2000-02',
            ],
            287 => 
            [
                'entity' => 'ANGOLA',
                'currency' => 'Kwanza Reajustado',
                'alphabetic_code' => 'AOR',
                'numeric_code' => 982,
                'minor_unit' => '',
                'withdrawal_date' => '2000-02',
            ],
            288 => 
            [
                'entity' => 'ARGENTINA',
                'currency' => 'Austral',
                'alphabetic_code' => 'ARA',
                'numeric_code' => 32,
                'minor_unit' => '',
                'withdrawal_date' => '1992-01',
            ],
            289 => 
            [
                'entity' => 'ARGENTINA',
                'currency' => 'Peso Argentino',
                'alphabetic_code' => 'ARP',
                'numeric_code' => 32,
                'minor_unit' => '',
                'withdrawal_date' => '1985-07',
            ],
            290 => 
            [
                'entity' => 'ARGENTINA',
                'currency' => 'Peso',
                'alphabetic_code' => 'ARY',
                'numeric_code' => 32,
                'minor_unit' => '',
                'withdrawal_date' => '1989 to 1990',
            ],
            291 => 
            [
                'entity' => 'ARMENIA',
                'currency' => 'Russian Ruble',
                'alphabetic_code' => 'RUR',
                'numeric_code' => 810,
                'minor_unit' => '',
                'withdrawal_date' => '1994-08',
            ],
            292 => 
            [
                'entity' => 'AUSTRIA',
                'currency' => 'Schilling',
                'alphabetic_code' => 'ATS',
                'numeric_code' => 40,
                'minor_unit' => '',
                'withdrawal_date' => '2002-03',
            ],
            293 => 
            [
                'entity' => 'AZERBAIJAN',
                'currency' => 'Azerbaijan Manat',
                'alphabetic_code' => 'AYM',
                'numeric_code' => 945,
                'minor_unit' => '',
                'withdrawal_date' => '2005-10',
            ],
            294 => 
            [
                'entity' => 'AZERBAIJAN',
                'currency' => 'Azerbaijanian Manat',
                'alphabetic_code' => 'AZM',
                'numeric_code' => 31,
                'minor_unit' => '',
                'withdrawal_date' => '2005-12',
            ],
            295 => 
            [
                'entity' => 'AZERBAIJAN',
                'currency' => 'Russian Ruble',
                'alphabetic_code' => 'RUR',
                'numeric_code' => 810,
                'minor_unit' => '',
                'withdrawal_date' => '1994-08',
            ],
            296 => 
            [
                'entity' => 'BELARUS',
                'currency' => 'Belarusian Ruble',
                'alphabetic_code' => 'BYB',
                'numeric_code' => 112,
                'minor_unit' => '',
                'withdrawal_date' => '2001-01',
            ],
            297 => 
            [
                'entity' => 'BELARUS',
                'currency' => 'Belarusian Ruble',
                'alphabetic_code' => 'BYR',
                'numeric_code' => 974,
                'minor_unit' => '',
                'withdrawal_date' => '2017-01',
            ],
            298 => 
            [
                'entity' => 'BELARUS',
                'currency' => 'Russian Ruble',
                'alphabetic_code' => 'RUR',
                'numeric_code' => 810,
                'minor_unit' => '',
                'withdrawal_date' => '1994-06',
            ],
            299 => 
            [
                'entity' => 'BELGIUM',
                'currency' => 'Convertible Franc',
                'alphabetic_code' => 'BEC',
                'numeric_code' => 993,
                'minor_unit' => '',
                'withdrawal_date' => '1990-03',
            ],
            300 => 
            [
                'entity' => 'BELGIUM',
                'currency' => 'Belgian Franc',
                'alphabetic_code' => 'BEF',
                'numeric_code' => 56,
                'minor_unit' => '',
                'withdrawal_date' => '2002-03',
            ],
            301 => 
            [
                'entity' => 'BELGIUM',
                'currency' => 'Financial Franc',
                'alphabetic_code' => 'BEL',
                'numeric_code' => 992,
                'minor_unit' => '',
                'withdrawal_date' => '1990-03',
            ],
            302 => 
            [
                'entity' => 'BOLIVIA',
                'currency' => 'Peso boliviano',
                'alphabetic_code' => 'BOP',
                'numeric_code' => 68,
                'minor_unit' => '',
                'withdrawal_date' => '1987-02',
            ],
            303 => 
            [
                'entity' => 'BOSNIA AND HERZEGOVINA',
                'currency' => 'Dinar',
                'alphabetic_code' => 'BAD',
                'numeric_code' => 70,
                'minor_unit' => '',
                'withdrawal_date' => '1998-07',
            ],
            304 => 
            [
                'entity' => 'BRAZIL',
                'currency' => 'Cruzeiro',
                'alphabetic_code' => 'BRB',
                'numeric_code' => 76,
                'minor_unit' => '',
                'withdrawal_date' => '1986-03',
            ],
            305 => 
            [
                'entity' => 'BRAZIL',
                'currency' => 'Cruzado',
                'alphabetic_code' => 'BRC',
                'numeric_code' => 76,
                'minor_unit' => '',
                'withdrawal_date' => '1989-02',
            ],
            306 => 
            [
                'entity' => 'BRAZIL',
                'currency' => 'Cruzeiro',
                'alphabetic_code' => 'BRE',
                'numeric_code' => 76,
                'minor_unit' => '',
                'withdrawal_date' => '1993-03',
            ],
            307 => 
            [
                'entity' => 'BRAZIL',
                'currency' => 'New Cruzado',
                'alphabetic_code' => 'BRN',
                'numeric_code' => 76,
                'minor_unit' => '',
                'withdrawal_date' => '1990-03',
            ],
            308 => 
            [
                'entity' => 'BRAZIL',
                'currency' => 'Cruzeiro Real',
                'alphabetic_code' => 'BRR',
                'numeric_code' => 987,
                'minor_unit' => '',
                'withdrawal_date' => '1994-07',
            ],
            309 => 
            [
                'entity' => 'BULGARIA',
                'currency' => 'Lev A/52',
                'alphabetic_code' => 'BGJ',
                'numeric_code' => 100,
                'minor_unit' => '',
                'withdrawal_date' => '1989 to 1990',
            ],
            310 => 
            [
                'entity' => 'BULGARIA',
                'currency' => 'Lev A/62',
                'alphabetic_code' => 'BGK',
                'numeric_code' => 100,
                'minor_unit' => '',
                'withdrawal_date' => '1989 to 1990',
            ],
            311 => 
            [
                'entity' => 'BULGARIA',
                'currency' => 'Lev',
                'alphabetic_code' => 'BGL',
                'numeric_code' => 100,
                'minor_unit' => '',
                'withdrawal_date' => '2003-11',
            ],
            312 => 
            [
                'entity' => 'BURMA',
                'currency' => 'Kyat',
                'alphabetic_code' => 'BUK',
                'numeric_code' => 104,
                'minor_unit' => '',
                'withdrawal_date' => '1990-02',
            ],
            313 => 
            [
                'entity' => 'CROATIA',
                'currency' => 'Croatian Dinar',
                'alphabetic_code' => 'HRD',
                'numeric_code' => 191,
                'minor_unit' => '',
                'withdrawal_date' => '1995-01',
            ],
            314 => 
            [
                'entity' => 'CROATIA',
                'currency' => 'Croatian Kuna',
                'alphabetic_code' => 'HRK',
                'numeric_code' => 191,
                'minor_unit' => '',
                'withdrawal_date' => '2015-06',
            ],
            315 => 
            [
                'entity' => 'CYPRUS',
                'currency' => 'Cyprus Pound',
                'alphabetic_code' => 'CYP',
                'numeric_code' => 196,
                'minor_unit' => '',
                'withdrawal_date' => '2008-01',
            ],
            316 => 
            [
                'entity' => 'CZECHOSLOVAKIA',
                'currency' => 'Krona A/53',
                'alphabetic_code' => 'CSJ',
                'numeric_code' => 203,
                'minor_unit' => '',
                'withdrawal_date' => '1989 to 1990',
            ],
            317 => 
            [
                'entity' => 'CZECHOSLOVAKIA',
                'currency' => 'Koruna',
                'alphabetic_code' => 'CSK',
                'numeric_code' => 200,
                'minor_unit' => '',
                'withdrawal_date' => '1993-03',
            ],
            318 => 
            [
                'entity' => 'ECUADOR',
                'currency' => 'Sucre',
                'alphabetic_code' => 'ECS',
                'numeric_code' => 218,
                'minor_unit' => '',
                'withdrawal_date' => '2000-09',
            ],
            319 => 
            [
                'entity' => 'ECUADOR',
            'currency' => 'Unidad de Valor Constante (UVC)',
                'alphabetic_code' => 'ECV',
                'numeric_code' => 983,
                'minor_unit' => '',
                'withdrawal_date' => '2000-09',
            ],
            320 => 
            [
                'entity' => 'EQUATORIAL GUINEA',
                'currency' => 'Ekwele',
                'alphabetic_code' => 'GQE',
                'numeric_code' => 226,
                'minor_unit' => '',
                'withdrawal_date' => '1986-06',
            ],
            321 => 
            [
                'entity' => 'ESTONIA',
                'currency' => 'Kroon',
                'alphabetic_code' => 'EEK',
                'numeric_code' => 233,
                'minor_unit' => '',
                'withdrawal_date' => '2011-01',
            ],
            322 => 
            [
            'entity' => 'EUROPEAN MONETARY CO-OPERATION FUND (EMCF)',
            'currency' => 'European Currency Unit (E.C.U)',
                'alphabetic_code' => 'XEU',
                'numeric_code' => 954,
                'minor_unit' => '',
                'withdrawal_date' => '1999-01',
            ],
            323 => 
            [
                'entity' => 'FINLAND',
                'currency' => 'Markka',
                'alphabetic_code' => 'FIM',
                'numeric_code' => 246,
                'minor_unit' => '',
                'withdrawal_date' => '2002-03',
            ],
            324 => 
            [
                'entity' => 'FRANCE',
                'currency' => 'French Franc',
                'alphabetic_code' => 'FRF',
                'numeric_code' => 250,
                'minor_unit' => '',
                'withdrawal_date' => '2002-03',
            ],
            325 => 
            [
                'entity' => 'FRENCH GUIANA',
                'currency' => 'French Franc',
                'alphabetic_code' => 'FRF',
                'numeric_code' => 250,
                'minor_unit' => '',
                'withdrawal_date' => '2002-03',
            ],
            326 => 
            [
                'entity' => 'FRENCH SOUTHERN TERRITORIES',
                'currency' => 'French Franc',
                'alphabetic_code' => 'FRF',
                'numeric_code' => 250,
                'minor_unit' => '',
                'withdrawal_date' => '2002-03',
            ],
            327 => 
            [
                'entity' => 'GEORGIA',
                'currency' => 'Georgian Coupon',
                'alphabetic_code' => 'GEK',
                'numeric_code' => 268,
                'minor_unit' => '',
                'withdrawal_date' => '1995-10',
            ],
            328 => 
            [
                'entity' => 'GEORGIA',
                'currency' => 'Russian Ruble',
                'alphabetic_code' => 'RUR',
                'numeric_code' => 810,
                'minor_unit' => '',
                'withdrawal_date' => '1994-04',
            ],
            329 => 
            [
                'entity' => 'GERMAN DEMOCRATIC REPUBLIC',
                'currency' => 'Mark der DDR',
                'alphabetic_code' => 'DDM',
                'numeric_code' => 278,
                'minor_unit' => '',
                'withdrawal_date' => '1990-07 to 1990-09',
            ],
            330 => 
            [
                'entity' => 'GERMANY',
                'currency' => 'Deutsche Mark',
                'alphabetic_code' => 'DEM',
                'numeric_code' => 276,
                'minor_unit' => '',
                'withdrawal_date' => '2002-03',
            ],
            331 => 
            [
                'entity' => 'GHANA',
                'currency' => 'Cedi',
                'alphabetic_code' => 'GHC',
                'numeric_code' => 288,
                'minor_unit' => '',
                'withdrawal_date' => '2008-01',
            ],
            332 => 
            [
                'entity' => 'GHANA',
                'currency' => 'Ghana Cedi',
                'alphabetic_code' => 'GHP',
                'numeric_code' => 939,
                'minor_unit' => '',
                'withdrawal_date' => '2007-06',
            ],
            333 => 
            [
                'entity' => 'GREECE',
                'currency' => 'Drachma',
                'alphabetic_code' => 'GRD',
                'numeric_code' => 300,
                'minor_unit' => '',
                'withdrawal_date' => '2002-03',
            ],
            334 => 
            [
                'entity' => 'GUADELOUPE',
                'currency' => 'French Franc',
                'alphabetic_code' => 'FRF',
                'numeric_code' => 250,
                'minor_unit' => '',
                'withdrawal_date' => '2002-03',
            ],
            335 => 
            [
                'entity' => 'GUINEA',
                'currency' => 'Syli',
                'alphabetic_code' => 'GNE',
                'numeric_code' => 324,
                'minor_unit' => '',
                'withdrawal_date' => '1989-12',
            ],
            336 => 
            [
                'entity' => 'GUINEA',
                'currency' => 'Syli',
                'alphabetic_code' => 'GNS',
                'numeric_code' => 324,
                'minor_unit' => '',
                'withdrawal_date' => '1986-02',
            ],
            337 => 
            [
                'entity' => 'GUINEA-BISSAU',
                'currency' => 'Guinea Escudo',
                'alphabetic_code' => 'GWE',
                'numeric_code' => 624,
                'minor_unit' => '',
                'withdrawal_date' => '1978 to 1981',
            ],
            338 => 
            [
                'entity' => 'GUINEA-BISSAU',
                'currency' => 'Guinea-Bissau Peso',
                'alphabetic_code' => 'GWP',
                'numeric_code' => 624,
                'minor_unit' => '',
                'withdrawal_date' => '1997-05',
            ],
            339 => 
            [
            'entity' => 'HOLY SEE (VATICAN CITY STATE)',
                'currency' => 'Italian Lira',
                'alphabetic_code' => 'ITL',
                'numeric_code' => 380,
                'minor_unit' => '',
                'withdrawal_date' => '2002-03',
            ],
            340 => 
            [
                'entity' => 'ICELAND',
                'currency' => 'Old Krona',
                'alphabetic_code' => 'ISJ',
                'numeric_code' => 352,
                'minor_unit' => '',
                'withdrawal_date' => '1989 to 1990',
            ],
            341 => 
            [
                'entity' => 'IRELAND',
                'currency' => 'Irish Pound',
                'alphabetic_code' => 'IEP',
                'numeric_code' => 372,
                'minor_unit' => '',
                'withdrawal_date' => '2002-03',
            ],
            342 => 
            [
                'entity' => 'ISRAEL',
                'currency' => 'Pound',
                'alphabetic_code' => 'ILP',
                'numeric_code' => 376,
                'minor_unit' => '',
                'withdrawal_date' => '1978 to 1981',
            ],
            343 => 
            [
                'entity' => 'ISRAEL',
                'currency' => 'Old Shekel',
                'alphabetic_code' => 'ILR',
                'numeric_code' => 376,
                'minor_unit' => '',
                'withdrawal_date' => '1989 to 1990',
            ],
            344 => 
            [
                'entity' => 'ITALY',
                'currency' => 'Italian Lira',
                'alphabetic_code' => 'ITL',
                'numeric_code' => 380,
                'minor_unit' => '',
                'withdrawal_date' => '2002-03',
            ],
            345 => 
            [
                'entity' => 'KAZAKHSTAN',
                'currency' => 'Russian Ruble',
                'alphabetic_code' => 'RUR',
                'numeric_code' => 810,
                'minor_unit' => '',
                'withdrawal_date' => '1994-05',
            ],
            346 => 
            [
                'entity' => 'KYRGYZSTAN',
                'currency' => 'Russian Ruble',
                'alphabetic_code' => 'RUR',
                'numeric_code' => 810,
                'minor_unit' => '',
                'withdrawal_date' => '1993-01',
            ],
            347 => 
            [
                'entity' => 'LAO',
                'currency' => 'Pathet Lao Kip',
                'alphabetic_code' => 'LAJ',
                'numeric_code' => 418,
                'minor_unit' => '',
                'withdrawal_date' => '1979-12',
            ],
            348 => 
            [
                'entity' => 'LATVIA',
                'currency' => 'Latvian Lats',
                'alphabetic_code' => 'LVL',
                'numeric_code' => 428,
                'minor_unit' => '',
                'withdrawal_date' => '2014-01',
            ],
            349 => 
            [
                'entity' => 'LATVIA',
                'currency' => 'Latvian Ruble',
                'alphabetic_code' => 'LVR',
                'numeric_code' => 428,
                'minor_unit' => '',
                'withdrawal_date' => '1994-12',
            ],
            350 => 
            [
                'entity' => 'LESOTHO',
                'currency' => 'Loti',
                'alphabetic_code' => 'LSM',
                'numeric_code' => 426,
                'minor_unit' => '',
                'withdrawal_date' => '1985-05',
            ],
            351 => 
            [
                'entity' => 'LESOTHO',
                'currency' => 'Financial Rand',
                'alphabetic_code' => 'ZAL',
                'numeric_code' => 991,
                'minor_unit' => '',
                'withdrawal_date' => '1995-03',
            ],
            352 => 
            [
                'entity' => 'LITHUANIA',
                'currency' => 'Lithuanian Litas',
                'alphabetic_code' => 'LTL',
                'numeric_code' => 440,
                'minor_unit' => '',
                'withdrawal_date' => '2014-12',
            ],
            353 => 
            [
                'entity' => 'LITHUANIA',
                'currency' => 'Talonas',
                'alphabetic_code' => 'LTT',
                'numeric_code' => 440,
                'minor_unit' => '',
                'withdrawal_date' => '1993-07',
            ],
            354 => 
            [
                'entity' => 'LUXEMBOURG',
                'currency' => 'Luxembourg Convertible Franc',
                'alphabetic_code' => 'LUC',
                'numeric_code' => 989,
                'minor_unit' => '',
                'withdrawal_date' => '1990-03',
            ],
            355 => 
            [
                'entity' => 'LUXEMBOURG',
                'currency' => 'Luxembourg Franc',
                'alphabetic_code' => 'LUF',
                'numeric_code' => 442,
                'minor_unit' => '',
                'withdrawal_date' => '2002-03',
            ],
            356 => 
            [
                'entity' => 'LUXEMBOURG',
                'currency' => 'Luxembourg Financial Franc',
                'alphabetic_code' => 'LUL',
                'numeric_code' => 988,
                'minor_unit' => '',
                'withdrawal_date' => '1990-03',
            ],
            357 => 
            [
                'entity' => 'MADAGASCAR',
                'currency' => 'Malagasy Franc',
                'alphabetic_code' => 'MGF',
                'numeric_code' => 450,
                'minor_unit' => '',
                'withdrawal_date' => '2004-12',
            ],
            358 => 
            [
                'entity' => 'MALAWI',
                'currency' => 'Kwacha',
                'alphabetic_code' => 'MWK',
                'numeric_code' => 454,
                'minor_unit' => '',
                'withdrawal_date' => '2016-02',
            ],
            359 => 
            [
                'entity' => 'MALDIVES',
                'currency' => 'Maldive Rupee',
                'alphabetic_code' => 'MVQ',
                'numeric_code' => 462,
                'minor_unit' => '',
                'withdrawal_date' => '1989-12',
            ],
            360 => 
            [
                'entity' => 'MALI',
                'currency' => 'Mali Franc',
                'alphabetic_code' => 'MLF',
                'numeric_code' => 466,
                'minor_unit' => '',
                'withdrawal_date' => '1984-11',
            ],
            361 => 
            [
                'entity' => 'MALTA',
                'currency' => 'Maltese Lira',
                'alphabetic_code' => 'MTL',
                'numeric_code' => 470,
                'minor_unit' => '',
                'withdrawal_date' => '2008-01',
            ],
            362 => 
            [
                'entity' => 'MALTA',
                'currency' => 'Maltese Pound',
                'alphabetic_code' => 'MTP',
                'numeric_code' => 470,
                'minor_unit' => '',
                'withdrawal_date' => '1983-06',
            ],
            363 => 
            [
                'entity' => 'MARTINIQUE',
                'currency' => 'French Franc',
                'alphabetic_code' => 'FRF',
                'numeric_code' => 250,
                'minor_unit' => '',
                'withdrawal_date' => '2002-03',
            ],
            364 => 
            [
                'entity' => 'MAURITANIA',
                'currency' => 'Ouguiya',
                'alphabetic_code' => 'MRO',
                'numeric_code' => 478,
                'minor_unit' => '',
                'withdrawal_date' => '2017-12',
            ],
            365 => 
            [
                'entity' => 'MAYOTTE',
                'currency' => 'French Franc',
                'alphabetic_code' => 'FRF',
                'numeric_code' => 250,
                'minor_unit' => '',
                'withdrawal_date' => '2002-03',
            ],
            366 => 
            [
                'entity' => 'MEXICO',
                'currency' => 'Mexican Peso',
                'alphabetic_code' => 'MXP',
                'numeric_code' => 484,
                'minor_unit' => '',
                'withdrawal_date' => '1993-01',
            ],
            367 => 
            [
                'entity' => 'MOLDOVA, REPUBLIC OF',
                'currency' => 'Russian Ruble',
                'alphabetic_code' => 'RUR',
                'numeric_code' => 810,
                'minor_unit' => '',
                'withdrawal_date' => '1993-12',
            ],
            368 => 
            [
                'entity' => 'MONACO',
                'currency' => 'French Franc',
                'alphabetic_code' => 'FRF',
                'numeric_code' => 250,
                'minor_unit' => '',
                'withdrawal_date' => '2002-03',
            ],
            369 => 
            [
                'entity' => 'MOZAMBIQUE',
                'currency' => 'Mozambique Escudo',
                'alphabetic_code' => 'MZE',
                'numeric_code' => 508,
                'minor_unit' => '',
                'withdrawal_date' => '1978 to 1981',
            ],
            370 => 
            [
                'entity' => 'MOZAMBIQUE',
                'currency' => 'Mozambique Metical',
                'alphabetic_code' => 'MZM',
                'numeric_code' => 508,
                'minor_unit' => '',
                'withdrawal_date' => '2006-06',
            ],
            371 => 
            [
                'entity' => 'NETHERLANDS',
                'currency' => 'Netherlands Guilder',
                'alphabetic_code' => 'NLG',
                'numeric_code' => 528,
                'minor_unit' => '',
                'withdrawal_date' => '2002-03',
            ],
            372 => 
            [
                'entity' => 'NETHERLANDS ANTILLES',
                'currency' => 'Netherlands Antillean Guilder',
                'alphabetic_code' => 'ANG',
                'numeric_code' => 532,
                'minor_unit' => '',
                'withdrawal_date' => '2010-10',
            ],
            373 => 
            [
                'entity' => 'NICARAGUA',
                'currency' => 'Cordoba',
                'alphabetic_code' => 'NIC',
                'numeric_code' => 558,
                'minor_unit' => '',
                'withdrawal_date' => '1990-10',
            ],
            374 => 
            [
                'entity' => 'PERU',
                'currency' => 'Sol',
                'alphabetic_code' => 'PEH',
                'numeric_code' => 604,
                'minor_unit' => '',
                'withdrawal_date' => '1989 to 1990',
            ],
            375 => 
            [
                'entity' => 'PERU',
                'currency' => 'Inti',
                'alphabetic_code' => 'PEI',
                'numeric_code' => 604,
                'minor_unit' => '',
                'withdrawal_date' => '1991-07',
            ],
            376 => 
            [
                'entity' => 'PERU',
                'currency' => 'Nuevo Sol',
                'alphabetic_code' => 'PEN',
                'numeric_code' => 604,
                'minor_unit' => '',
                'withdrawal_date' => '2015-12',
            ],
            377 => 
            [
                'entity' => 'PERU',
                'currency' => 'Sol',
                'alphabetic_code' => 'PES',
                'numeric_code' => 604,
                'minor_unit' => '',
                'withdrawal_date' => '1986-02',
            ],
            378 => 
            [
                'entity' => 'POLAND',
                'currency' => 'Zloty',
                'alphabetic_code' => 'PLZ',
                'numeric_code' => 616,
                'minor_unit' => '',
                'withdrawal_date' => '1997-01',
            ],
            379 => 
            [
                'entity' => 'PORTUGAL',
                'currency' => 'Portuguese Escudo',
                'alphabetic_code' => 'PTE',
                'numeric_code' => 620,
                'minor_unit' => '',
                'withdrawal_date' => '2002-03',
            ],
            380 => 
            [
                'entity' => 'RÉUNION',
                'currency' => 'French Franc',
                'alphabetic_code' => 'FRF',
                'numeric_code' => 250,
                'minor_unit' => '',
                'withdrawal_date' => '2002-03',
            ],
            381 => 
            [
                'entity' => 'ROMANIA',
                'currency' => 'Leu A/52',
                'alphabetic_code' => 'ROK',
                'numeric_code' => 642,
                'minor_unit' => '',
                'withdrawal_date' => '1989 to 1990',
            ],
            382 => 
            [
                'entity' => 'ROMANIA',
                'currency' => 'Old Leu',
                'alphabetic_code' => 'ROL',
                'numeric_code' => 642,
                'minor_unit' => '',
                'withdrawal_date' => '2005-06',
            ],
            383 => 
            [
                'entity' => 'ROMANIA',
                'currency' => 'New Romanian Leu',
                'alphabetic_code' => 'RON',
                'numeric_code' => 946,
                'minor_unit' => '',
                'withdrawal_date' => '2015-06',
            ],
            384 => 
            [
                'entity' => 'RUSSIAN FEDERATION',
                'currency' => 'Russian Ruble',
                'alphabetic_code' => 'RUR',
                'numeric_code' => 810,
                'minor_unit' => '',
                'withdrawal_date' => '2004-01',
            ],
            385 => 
            [
                'entity' => 'SAINT MARTIN',
                'currency' => 'French Franc',
                'alphabetic_code' => 'FRF',
                'numeric_code' => 250,
                'minor_unit' => '',
                'withdrawal_date' => '1999-01',
            ],
            386 => 
            [
                'entity' => 'SAINT PIERRE AND MIQUELON',
                'currency' => 'French Franc',
                'alphabetic_code' => 'FRF',
                'numeric_code' => 250,
                'minor_unit' => '',
                'withdrawal_date' => '2002-03',
            ],
            387 => 
            [
                'entity' => 'SAINT-BARTHÉLEMY',
                'currency' => 'French Franc',
                'alphabetic_code' => 'FRF',
                'numeric_code' => 250,
                'minor_unit' => '',
                'withdrawal_date' => '1999-01',
            ],
            388 => 
            [
                'entity' => 'SAN MARINO',
                'currency' => 'Italian Lira',
                'alphabetic_code' => 'ITL',
                'numeric_code' => 380,
                'minor_unit' => '',
                'withdrawal_date' => '2002-03',
            ],
            389 => 
            [
                'entity' => 'SAO TOME AND PRINCIPE',
                'currency' => 'Dobra',
                'alphabetic_code' => 'STD',
                'numeric_code' => 678,
                'minor_unit' => '',
                'withdrawal_date' => '2017-12',
            ],
            390 => 
            [
                'entity' => 'SERBIA AND MONTENEGRO',
                'currency' => 'Serbian Dinar',
                'alphabetic_code' => 'CSD',
                'numeric_code' => 891,
                'minor_unit' => '',
                'withdrawal_date' => '2006-10',
            ],
            391 => 
            [
                'entity' => 'SERBIA AND MONTENEGRO',
                'currency' => 'Euro',
                'alphabetic_code' => 'EUR',
                'numeric_code' => 978,
                'minor_unit' => '',
                'withdrawal_date' => '2006-10',
            ],
            392 => 
            [
                'entity' => 'SLOVAKIA',
                'currency' => 'Slovak Koruna',
                'alphabetic_code' => 'SKK',
                'numeric_code' => 703,
                'minor_unit' => '',
                'withdrawal_date' => '2009-01',
            ],
            393 => 
            [
                'entity' => 'SLOVENIA',
                'currency' => 'Tolar',
                'alphabetic_code' => 'SIT',
                'numeric_code' => 705,
                'minor_unit' => '',
                'withdrawal_date' => '2007-01',
            ],
            394 => 
            [
                'entity' => 'SOUTH AFRICA',
                'currency' => 'Financial Rand',
                'alphabetic_code' => 'ZAL',
                'numeric_code' => 991,
                'minor_unit' => '',
                'withdrawal_date' => '1995-03',
            ],
            395 => 
            [
                'entity' => 'SOUTH SUDAN',
                'currency' => 'Sudanese Pound',
                'alphabetic_code' => 'SDG',
                'numeric_code' => 938,
                'minor_unit' => '',
                'withdrawal_date' => '2012-09',
            ],
            396 => 
            [
                'entity' => 'SOUTHERN RHODESIA',
                'currency' => 'Rhodesian Dollar',
                'alphabetic_code' => 'RHD',
                'numeric_code' => 716,
                'minor_unit' => '',
                'withdrawal_date' => '1978 to 1981',
            ],
            397 => 
            [
                'entity' => 'SPAIN',
                'currency' => 'Spanish Peseta',
                'alphabetic_code' => 'ESA',
                'numeric_code' => 996,
                'minor_unit' => '',
                'withdrawal_date' => '1978 to 1981',
            ],
            398 => 
            [
                'entity' => 'SPAIN',
            'currency' => '"A" Account (convertible Peseta Account)',
                'alphabetic_code' => 'ESB',
                'numeric_code' => 995,
                'minor_unit' => '',
                'withdrawal_date' => '1994-12',
            ],
            399 => 
            [
                'entity' => 'SPAIN',
                'currency' => 'Spanish Peseta',
                'alphabetic_code' => 'ESP',
                'numeric_code' => 724,
                'minor_unit' => '',
                'withdrawal_date' => '2002-03',
            ],
            400 => 
            [
                'entity' => 'SUDAN',
                'currency' => 'Sudanese Dinar',
                'alphabetic_code' => 'SDD',
                'numeric_code' => 736,
                'minor_unit' => '',
                'withdrawal_date' => '2007-07',
            ],
            401 => 
            [
                'entity' => 'SUDAN',
                'currency' => 'Sudanese Pound',
                'alphabetic_code' => 'SDP',
                'numeric_code' => 736,
                'minor_unit' => '',
                'withdrawal_date' => '1998-06',
            ],
            402 => 
            [
                'entity' => 'SURINAME',
                'currency' => 'Surinam Guilder',
                'alphabetic_code' => 'SRG',
                'numeric_code' => 740,
                'minor_unit' => '',
                'withdrawal_date' => '2003-12',
            ],
            403 => 
            [
                'entity' => 'SWAZILAND',
                'currency' => 'Lilangeni',
                'alphabetic_code' => 'SZL',
                'numeric_code' => 748,
                'minor_unit' => '',
                'withdrawal_date' => '2018-08',
            ],
            404 => 
            [
                'entity' => 'SWITZERLAND',
            'currency' => 'WIR Franc (for electronic)',
                'alphabetic_code' => 'CHC',
                'numeric_code' => 948,
                'minor_unit' => '',
                'withdrawal_date' => '2004-11',
            ],
            405 => 
            [
                'entity' => 'TAJIKISTAN',
                'currency' => 'Russian Ruble',
                'alphabetic_code' => 'RUR',
                'numeric_code' => 810,
                'minor_unit' => '',
                'withdrawal_date' => '1995-05',
            ],
            406 => 
            [
                'entity' => 'TAJIKISTAN',
                'currency' => 'Tajik Ruble',
                'alphabetic_code' => 'TJR',
                'numeric_code' => 762,
                'minor_unit' => '',
                'withdrawal_date' => '2001-04',
            ],
            407 => 
            [
                'entity' => 'TIMOR-LESTE',
                'currency' => 'Rupiah',
                'alphabetic_code' => 'IDR',
                'numeric_code' => 360,
                'minor_unit' => '',
                'withdrawal_date' => '2002-07',
            ],
            408 => 
            [
                'entity' => 'TIMOR-LESTE',
                'currency' => 'Timor Escudo',
                'alphabetic_code' => 'TPE',
                'numeric_code' => 626,
                'minor_unit' => '',
                'withdrawal_date' => '2002-11',
            ],
            409 => 
            [
                'entity' => 'TURKEY',
                'currency' => 'Old Turkish Lira',
                'alphabetic_code' => 'TRL',
                'numeric_code' => 792,
                'minor_unit' => '',
                'withdrawal_date' => '2005-12',
            ],
            410 => 
            [
                'entity' => 'TURKEY',
                'currency' => 'New Turkish Lira',
                'alphabetic_code' => 'TRY',
                'numeric_code' => 949,
                'minor_unit' => '',
                'withdrawal_date' => '2009-01',
            ],
            411 => 
            [
                'entity' => 'TURKMENISTAN',
                'currency' => 'Russian Ruble',
                'alphabetic_code' => 'RUR',
                'numeric_code' => 810,
                'minor_unit' => '',
                'withdrawal_date' => '1993-10',
            ],
            412 => 
            [
                'entity' => 'TURKMENISTAN',
                'currency' => 'Turkmenistan Manat',
                'alphabetic_code' => 'TMM',
                'numeric_code' => 795,
                'minor_unit' => '',
                'withdrawal_date' => '2009-01',
            ],
            413 => 
            [
                'entity' => 'UGANDA',
                'currency' => 'Uganda Shilling',
                'alphabetic_code' => 'UGS',
                'numeric_code' => 800,
                'minor_unit' => '',
                'withdrawal_date' => '1987-05',
            ],
            414 => 
            [
                'entity' => 'UGANDA',
                'currency' => 'Old Shilling',
                'alphabetic_code' => 'UGW',
                'numeric_code' => 800,
                'minor_unit' => '',
                'withdrawal_date' => '1989 to 1990',
            ],
            415 => 
            [
                'entity' => 'UKRAINE',
                'currency' => 'Karbovanet',
                'alphabetic_code' => 'UAK',
                'numeric_code' => 804,
                'minor_unit' => '',
                'withdrawal_date' => '1996-09',
            ],
            416 => 
            [
                'entity' => 'UNION OF SOVIET SOCIALIST REPUBLICS',
                'currency' => 'Rouble',
                'alphabetic_code' => 'SUR',
                'numeric_code' => 810,
                'minor_unit' => '',
                'withdrawal_date' => '1990-12',
            ],
            417 => 
            [
                'entity' => 'UNITED STATES',
            'currency' => 'US Dollar (Same day)',
                'alphabetic_code' => 'USS',
                'numeric_code' => 998,
                'minor_unit' => '',
                'withdrawal_date' => '2014-03',
            ],
            418 => 
            [
                'entity' => 'URUGUAY',
                'currency' => 'Old Uruguay Peso',
                'alphabetic_code' => 'UYN',
                'numeric_code' => 858,
                'minor_unit' => '',
                'withdrawal_date' => '1989-12',
            ],
            419 => 
            [
                'entity' => 'URUGUAY',
                'currency' => 'Uruguayan Peso',
                'alphabetic_code' => 'UYP',
                'numeric_code' => 858,
                'minor_unit' => '',
                'withdrawal_date' => '1993-03',
            ],
            420 => 
            [
                'entity' => 'UZBEKISTAN',
                'currency' => 'Russian Ruble',
                'alphabetic_code' => 'RUR',
                'numeric_code' => 810,
                'minor_unit' => '',
                'withdrawal_date' => '1994-07',
            ],
            421 => 
            [
                'entity' => 'VENEZUELA',
                'currency' => 'Bolivar',
                'alphabetic_code' => 'VEB',
                'numeric_code' => 862,
                'minor_unit' => '',
                'withdrawal_date' => '2008-01',
            ],
            422 => 
            [
                'entity' => 'VENEZUELA',
                'currency' => 'Bolivar Fuerte',
                'alphabetic_code' => 'VEF',
                'numeric_code' => 937,
                'minor_unit' => '',
                'withdrawal_date' => '2011-12',
            ],
            423 => 
            [
            'entity' => 'VENEZUELA (BOLIVARIAN REPUBLIC OF)',
                'currency' => 'Bolivar',
                'alphabetic_code' => 'VEF',
                'numeric_code' => 937,
                'minor_unit' => '',
                'withdrawal_date' => '2016-02',
            ],
            424 => 
            [
            'entity' => 'VENEZUELA (BOLIVARIAN REPUBLIC OF)',
                'currency' => 'Bolívar',
                'alphabetic_code' => 'VEF',
                'numeric_code' => 937,
                'minor_unit' => '',
                'withdrawal_date' => '2018-08',
            ],
            425 => 
            [
                'entity' => 'VIETNAM',
                'currency' => 'Old Dong',
                'alphabetic_code' => 'VNC',
                'numeric_code' => 704,
                'minor_unit' => '',
                'withdrawal_date' => '1989-1990',
            ],
            426 => 
            [
                'entity' => 'YEMEN, DEMOCRATIC',
                'currency' => 'Yemeni Dinar',
                'alphabetic_code' => 'YDD',
                'numeric_code' => 720,
                'minor_unit' => '',
                'withdrawal_date' => '1991-09',
            ],
            427 => 
            [
                'entity' => 'YUGOSLAVIA',
                'currency' => 'New Yugoslavian Dinar',
                'alphabetic_code' => 'YUD',
                'numeric_code' => 890,
                'minor_unit' => '',
                'withdrawal_date' => '1990-01',
            ],
            428 => 
            [
                'entity' => 'YUGOSLAVIA',
                'currency' => 'New Dinar',
                'alphabetic_code' => 'YUM',
                'numeric_code' => 891,
                'minor_unit' => '',
                'withdrawal_date' => '2003-07',
            ],
            429 => 
            [
                'entity' => 'YUGOSLAVIA',
                'currency' => 'Yugoslavian Dinar',
                'alphabetic_code' => 'YUN',
                'numeric_code' => 890,
                'minor_unit' => '',
                'withdrawal_date' => '1995-11',
            ],
            430 => 
            [
                'entity' => 'ZAIRE',
                'currency' => 'New Zaire',
                'alphabetic_code' => 'ZRN',
                'numeric_code' => 180,
                'minor_unit' => '',
                'withdrawal_date' => '1999-06',
            ],
            431 => 
            [
                'entity' => 'ZAIRE',
                'currency' => 'Zaire',
                'alphabetic_code' => 'ZRZ',
                'numeric_code' => 180,
                'minor_unit' => '',
                'withdrawal_date' => '1994-02',
            ],
            432 => 
            [
                'entity' => 'ZAMBIA',
                'currency' => 'Zambian Kwacha',
                'alphabetic_code' => 'ZMK',
                'numeric_code' => 894,
                'minor_unit' => '',
                'withdrawal_date' => '2012-12',
            ],
            433 => 
            [
                'entity' => 'ZIMBABWE',
                'currency' => 'Rhodesian Dollar',
                'alphabetic_code' => 'ZWC',
                'numeric_code' => 716,
                'minor_unit' => '',
                'withdrawal_date' => '1989-12',
            ],
            434 => 
            [
                'entity' => 'ZIMBABWE',
            'currency' => 'Zimbabwe Dollar (old)',
                'alphabetic_code' => 'ZWD',
                'numeric_code' => 716,
                'minor_unit' => '',
                'withdrawal_date' => '2006-08',
            ],
            435 => 
            [
                'entity' => 'ZIMBABWE',
                'currency' => 'Zimbabwe Dollar',
                'alphabetic_code' => 'ZWD',
                'numeric_code' => 716,
                'minor_unit' => '',
                'withdrawal_date' => '2008-08',
            ],
            436 => 
            [
                'entity' => 'ZIMBABWE',
            'currency' => 'Zimbabwe Dollar (new)',
                'alphabetic_code' => 'ZWN',
                'numeric_code' => 942,
                'minor_unit' => '',
                'withdrawal_date' => '2006-09',
            ],
            437 => 
            [
                'entity' => 'ZIMBABWE',
                'currency' => 'Zimbabwe Dollar',
                'alphabetic_code' => 'ZWR',
                'numeric_code' => 935,
                'minor_unit' => '',
                'withdrawal_date' => '2009-06',
            ],
            438 => 
            [
                'entity' => 'ZZ01_Gold-Franc',
                'currency' => 'Gold-Franc',
                'alphabetic_code' => 'XFO',
                'numeric_code' => NULL,
                'minor_unit' => '',
                'withdrawal_date' => '2006-10',
            ],
            439 => 
            [
                'entity' => 'ZZ02_RINET Funds Code',
                'currency' => 'RINET Funds Code',
                'alphabetic_code' => 'XRE',
                'numeric_code' => NULL,
                'minor_unit' => '',
                'withdrawal_date' => '1999-11',
            ],
            440 => 
            [
                'entity' => 'ZZ05_UIC-Franc',
                'currency' => 'UIC-Franc',
                'alphabetic_code' => 'XFU',
                'numeric_code' => NULL,
                'minor_unit' => '',
                'withdrawal_date' => '2013-11',
            ],
        ]);   
    }
}