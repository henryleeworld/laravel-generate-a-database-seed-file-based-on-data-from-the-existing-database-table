<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('countries')->delete();
        
        DB::table('countries')->insert([
            0 => 
            [
                'name' => 'Andorra',
                'code' => 'AD',
            ],
            1 => 
            [
                'name' => 'United Arab Emirates',
                'code' => 'AE',
            ],
            2 => 
            [
                'name' => 'Afghanistan',
                'code' => 'AF',
            ],
            3 => 
            [
                'name' => 'Antigua and Barbuda',
                'code' => 'AG',
            ],
            4 => 
            [
                'name' => 'Anguilla',
                'code' => 'AI',
            ],
            5 => 
            [
                'name' => 'Albania',
                'code' => 'AL',
            ],
            6 => 
            [
                'name' => 'Armenia',
                'code' => 'AM',
            ],
            7 => 
            [
                'name' => 'Angola',
                'code' => 'AO',
            ],
            8 => 
            [
                'name' => 'Antarctica',
                'code' => 'AQ',
            ],
            9 => 
            [
                'name' => 'Argentina',
                'code' => 'AR',
            ],
            10 => 
            [
                'name' => 'American Samoa',
                'code' => 'AS',
            ],
            11 => 
            [
                'name' => 'Austria',
                'code' => 'AT',
            ],
            12 => 
            [
                'name' => 'Australia',
                'code' => 'AU',
            ],
            13 => 
            [
                'name' => 'Aruba',
                'code' => 'AW',
            ],
            14 => 
            [
                'name' => 'Åland Islands',
                'code' => 'AX',
            ],
            15 => 
            [
                'name' => 'Azerbaijan',
                'code' => 'AZ',
            ],
            16 => 
            [
                'name' => 'Bosnia and Herzegovina',
                'code' => 'BA',
            ],
            17 => 
            [
                'name' => 'Barbados',
                'code' => 'BB',
            ],
            18 => 
            [
                'name' => 'Bangladesh',
                'code' => 'BD',
            ],
            19 => 
            [
                'name' => 'Belgium',
                'code' => 'BE',
            ],
            20 => 
            [
                'name' => 'Burkina Faso',
                'code' => 'BF',
            ],
            21 => 
            [
                'name' => 'Bulgaria',
                'code' => 'BG',
            ],
            22 => 
            [
                'name' => 'Bahrain',
                'code' => 'BH',
            ],
            23 => 
            [
                'name' => 'Burundi',
                'code' => 'BI',
            ],
            24 => 
            [
                'name' => 'Benin',
                'code' => 'BJ',
            ],
            25 => 
            [
                'name' => 'Saint Barthélemy',
                'code' => 'BL',
            ],
            26 => 
            [
                'name' => 'Bermuda',
                'code' => 'BM',
            ],
            27 => 
            [
                'name' => 'Brunei Darussalam',
                'code' => 'BN',
            ],
            28 => 
            [
                'name' => 'Bolivia, Plurinational State of',
                'code' => 'BO',
            ],
            29 => 
            [
                'name' => 'Bonaire, Sint Eustatius and Saba',
                'code' => 'BQ',
            ],
            30 => 
            [
                'name' => 'Brazil',
                'code' => 'BR',
            ],
            31 => 
            [
                'name' => 'Bahamas',
                'code' => 'BS',
            ],
            32 => 
            [
                'name' => 'Bhutan',
                'code' => 'BT',
            ],
            33 => 
            [
                'name' => 'Bouvet Island',
                'code' => 'BV',
            ],
            34 => 
            [
                'name' => 'Botswana',
                'code' => 'BW',
            ],
            35 => 
            [
                'name' => 'Belarus',
                'code' => 'BY',
            ],
            36 => 
            [
                'name' => 'Belize',
                'code' => 'BZ',
            ],
            37 => 
            [
                'name' => 'Canada',
                'code' => 'CA',
            ],
            38 => 
            [
            'name' => 'Cocos (Keeling) Islands',
                'code' => 'CC',
            ],
            39 => 
            [
                'name' => 'Congo, the Democratic Republic of the',
                'code' => 'CD',
            ],
            40 => 
            [
                'name' => 'Central African Republic',
                'code' => 'CF',
            ],
            41 => 
            [
                'name' => 'Congo',
                'code' => 'CG',
            ],
            42 => 
            [
                'name' => 'Switzerland',
                'code' => 'CH',
            ],
            43 => 
            [
                'name' => 'Côte d\'Ivoire',
                'code' => 'CI',
            ],
            44 => 
            [
                'name' => 'Cook Islands',
                'code' => 'CK',
            ],
            45 => 
            [
                'name' => 'Chile',
                'code' => 'CL',
            ],
            46 => 
            [
                'name' => 'Cameroon',
                'code' => 'CM',
            ],
            47 => 
            [
                'name' => 'China',
                'code' => 'CN',
            ],
            48 => 
            [
                'name' => 'Colombia',
                'code' => 'CO',
            ],
            49 => 
            [
                'name' => 'Costa Rica',
                'code' => 'CR',
            ],
            50 => 
            [
                'name' => 'Cuba',
                'code' => 'CU',
            ],
            51 => 
            [
                'name' => 'Cape Verde',
                'code' => 'CV',
            ],
            52 => 
            [
                'name' => 'Curaçao',
                'code' => 'CW',
            ],
            53 => 
            [
                'name' => 'Christmas Island',
                'code' => 'CX',
            ],
            54 => 
            [
                'name' => 'Cyprus',
                'code' => 'CY',
            ],
            55 => 
            [
                'name' => 'Czech Republic',
                'code' => 'CZ',
            ],
            56 => 
            [
                'name' => 'Germany',
                'code' => 'DE',
            ],
            57 => 
            [
                'name' => 'Djibouti',
                'code' => 'DJ',
            ],
            58 => 
            [
                'name' => 'Denmark',
                'code' => 'DK',
            ],
            59 => 
            [
                'name' => 'Dominica',
                'code' => 'DM',
            ],
            60 => 
            [
                'name' => 'Dominican Republic',
                'code' => 'DO',
            ],
            61 => 
            [
                'name' => 'Algeria',
                'code' => 'DZ',
            ],
            62 => 
            [
                'name' => 'Ecuador',
                'code' => 'EC',
            ],
            63 => 
            [
                'name' => 'Estonia',
                'code' => 'EE',
            ],
            64 => 
            [
                'name' => 'Egypt',
                'code' => 'EG',
            ],
            65 => 
            [
                'name' => 'Western Sahara',
                'code' => 'EH',
            ],
            66 => 
            [
                'name' => 'Eritrea',
                'code' => 'ER',
            ],
            67 => 
            [
                'name' => 'Spain',
                'code' => 'ES',
            ],
            68 => 
            [
                'name' => 'Ethiopia',
                'code' => 'ET',
            ],
            69 => 
            [
                'name' => 'Finland',
                'code' => 'FI',
            ],
            70 => 
            [
                'name' => 'Fiji',
                'code' => 'FJ',
            ],
            71 => 
            [
            'name' => 'Falkland Islands (Malvinas)',
                'code' => 'FK',
            ],
            72 => 
            [
                'name' => 'Micronesia, Federated States of',
                'code' => 'FM',
            ],
            73 => 
            [
                'name' => 'Faroe Islands',
                'code' => 'FO',
            ],
            74 => 
            [
                'name' => 'France',
                'code' => 'FR',
            ],
            75 => 
            [
                'name' => 'Gabon',
                'code' => 'GA',
            ],
            76 => 
            [
                'name' => 'United Kingdom',
                'code' => 'GB',
            ],
            77 => 
            [
                'name' => 'Grenada',
                'code' => 'GD',
            ],
            78 => 
            [
                'name' => 'Georgia',
                'code' => 'GE',
            ],
            79 => 
            [
                'name' => 'French Guiana',
                'code' => 'GF',
            ],
            80 => 
            [
                'name' => 'Guernsey',
                'code' => 'GG',
            ],
            81 => 
            [
                'name' => 'Ghana',
                'code' => 'GH',
            ],
            82 => 
            [
                'name' => 'Gibraltar',
                'code' => 'GI',
            ],
            83 => 
            [
                'name' => 'Greenland',
                'code' => 'GL',
            ],
            84 => 
            [
                'name' => 'Gambia',
                'code' => 'GM',
            ],
            85 => 
            [
                'name' => 'Guinea',
                'code' => 'GN',
            ],
            86 => 
            [
                'name' => 'Guadeloupe',
                'code' => 'GP',
            ],
            87 => 
            [
                'name' => 'Equatorial Guinea',
                'code' => 'GQ',
            ],
            88 => 
            [
                'name' => 'Greece',
                'code' => 'GR',
            ],
            89 => 
            [
                'name' => 'South Georgia and the South Sandwich Islands',
                'code' => 'GS',
            ],
            90 => 
            [
                'name' => 'Guatemala',
                'code' => 'GT',
            ],
            91 => 
            [
                'name' => 'Guam',
                'code' => 'GU',
            ],
            92 => 
            [
                'name' => 'Guinea-Bissau',
                'code' => 'GW',
            ],
            93 => 
            [
                'name' => 'Guyana',
                'code' => 'GY',
            ],
            94 => 
            [
                'name' => 'Hong Kong',
                'code' => 'HK',
            ],
            95 => 
            [
                'name' => 'Heard Island and McDonald Islands',
                'code' => 'HM',
            ],
            96 => 
            [
                'name' => 'Honduras',
                'code' => 'HN',
            ],
            97 => 
            [
                'name' => 'Croatia',
                'code' => 'HR',
            ],
            98 => 
            [
                'name' => 'Haiti',
                'code' => 'HT',
            ],
            99 => 
            [
                'name' => 'Hungary',
                'code' => 'HU',
            ],
            100 => 
            [
                'name' => 'Indonesia',
                'code' => 'ID',
            ],
            101 => 
            [
                'name' => 'Ireland',
                'code' => 'IE',
            ],
            102 => 
            [
                'name' => 'Israel',
                'code' => 'IL',
            ],
            103 => 
            [
                'name' => 'Isle of Man',
                'code' => 'IM',
            ],
            104 => 
            [
                'name' => 'India',
                'code' => 'IN',
            ],
            105 => 
            [
                'name' => 'British Indian Ocean Territory',
                'code' => 'IO',
            ],
            106 => 
            [
                'name' => 'Iraq',
                'code' => 'IQ',
            ],
            107 => 
            [
                'name' => 'Iran, Islamic Republic of',
                'code' => 'IR',
            ],
            108 => 
            [
                'name' => 'Iceland',
                'code' => 'IS',
            ],
            109 => 
            [
                'name' => 'Italy',
                'code' => 'IT',
            ],
            110 => 
            [
                'name' => 'Jersey',
                'code' => 'JE',
            ],
            111 => 
            [
                'name' => 'Jamaica',
                'code' => 'JM',
            ],
            112 => 
            [
                'name' => 'Jordan',
                'code' => 'JO',
            ],
            113 => 
            [
                'name' => 'Japan',
                'code' => 'JP',
            ],
            114 => 
            [
                'name' => 'Kenya',
                'code' => 'KE',
            ],
            115 => 
            [
                'name' => 'Kyrgyzstan',
                'code' => 'KG',
            ],
            116 => 
            [
                'name' => 'Cambodia',
                'code' => 'KH',
            ],
            117 => 
            [
                'name' => 'Kiribati',
                'code' => 'KI',
            ],
            118 => 
            [
                'name' => 'Comoros',
                'code' => 'KM',
            ],
            119 => 
            [
                'name' => 'Saint Kitts and Nevis',
                'code' => 'KN',
            ],
            120 => 
            [
                'name' => 'Korea, Democratic People\'s Republic of',
                'code' => 'KP',
            ],
            121 => 
            [
                'name' => 'Korea, Republic of',
                'code' => 'KR',
            ],
            122 => 
            [
                'name' => 'Kuwait',
                'code' => 'KW',
            ],
            123 => 
            [
                'name' => 'Cayman Islands',
                'code' => 'KY',
            ],
            124 => 
            [
                'name' => 'Kazakhstan',
                'code' => 'KZ',
            ],
            125 => 
            [
                'name' => 'Lao People\'s Democratic Republic',
                'code' => 'LA',
            ],
            126 => 
            [
                'name' => 'Lebanon',
                'code' => 'LB',
            ],
            127 => 
            [
                'name' => 'Saint Lucia',
                'code' => 'LC',
            ],
            128 => 
            [
                'name' => 'Liechtenstein',
                'code' => 'LI',
            ],
            129 => 
            [
                'name' => 'Sri Lanka',
                'code' => 'LK',
            ],
            130 => 
            [
                'name' => 'Liberia',
                'code' => 'LR',
            ],
            131 => 
            [
                'name' => 'Lesotho',
                'code' => 'LS',
            ],
            132 => 
            [
                'name' => 'Lithuania',
                'code' => 'LT',
            ],
            133 => 
            [
                'name' => 'Luxembourg',
                'code' => 'LU',
            ],
            134 => 
            [
                'name' => 'Latvia',
                'code' => 'LV',
            ],
            135 => 
            [
                'name' => 'Libya',
                'code' => 'LY',
            ],
            136 => 
            [
                'name' => 'Morocco',
                'code' => 'MA',
            ],
            137 => 
            [
                'name' => 'Monaco',
                'code' => 'MC',
            ],
            138 => 
            [
                'name' => 'Moldova, Republic of',
                'code' => 'MD',
            ],
            139 => 
            [
                'name' => 'Montenegro',
                'code' => 'ME',
            ],
            140 => 
            [
            'name' => 'Saint Martin (French part)',
                'code' => 'MF',
            ],
            141 => 
            [
                'name' => 'Madagascar',
                'code' => 'MG',
            ],
            142 => 
            [
                'name' => 'Marshall Islands',
                'code' => 'MH',
            ],
            143 => 
            [
                'name' => 'Macedonia, the Former Yugoslav Republic of',
                'code' => 'MK',
            ],
            144 => 
            [
                'name' => 'Mali',
                'code' => 'ML',
            ],
            145 => 
            [
                'name' => 'Myanmar',
                'code' => 'MM',
            ],
            146 => 
            [
                'name' => 'Mongolia',
                'code' => 'MN',
            ],
            147 => 
            [
                'name' => 'Macao',
                'code' => 'MO',
            ],
            148 => 
            [
                'name' => 'Northern Mariana Islands',
                'code' => 'MP',
            ],
            149 => 
            [
                'name' => 'Martinique',
                'code' => 'MQ',
            ],
            150 => 
            [
                'name' => 'Mauritania',
                'code' => 'MR',
            ],
            151 => 
            [
                'name' => 'Montserrat',
                'code' => 'MS',
            ],
            152 => 
            [
                'name' => 'Malta',
                'code' => 'MT',
            ],
            153 => 
            [
                'name' => 'Mauritius',
                'code' => 'MU',
            ],
            154 => 
            [
                'name' => 'Maldives',
                'code' => 'MV',
            ],
            155 => 
            [
                'name' => 'Malawi',
                'code' => 'MW',
            ],
            156 => 
            [
                'name' => 'Mexico',
                'code' => 'MX',
            ],
            157 => 
            [
                'name' => 'Malaysia',
                'code' => 'MY',
            ],
            158 => 
            [
                'name' => 'Mozambique',
                'code' => 'MZ',
            ],
            159 => 
            [
                'name' => 'Namibia',
                'code' => 'NA',
            ],
            160 => 
            [
                'name' => 'New Caledonia',
                'code' => 'NC',
            ],
            161 => 
            [
                'name' => 'Niger',
                'code' => 'NE',
            ],
            162 => 
            [
                'name' => 'Norfolk Island',
                'code' => 'NF',
            ],
            163 => 
            [
                'name' => 'Nigeria',
                'code' => 'NG',
            ],
            164 => 
            [
                'name' => 'Nicaragua',
                'code' => 'NI',
            ],
            165 => 
            [
                'name' => 'Netherlands',
                'code' => 'NL',
            ],
            166 => 
            [
                'name' => 'Norway',
                'code' => 'NO',
            ],
            167 => 
            [
                'name' => 'Nepal',
                'code' => 'NP',
            ],
            168 => 
            [
                'name' => 'Nauru',
                'code' => 'NR',
            ],
            169 => 
            [
                'name' => 'Niue',
                'code' => 'NU',
            ],
            170 => 
            [
                'name' => 'New Zealand',
                'code' => 'NZ',
            ],
            171 => 
            [
                'name' => 'Oman',
                'code' => 'OM',
            ],
            172 => 
            [
                'name' => 'Panama',
                'code' => 'PA',
            ],
            173 => 
            [
                'name' => 'Peru',
                'code' => 'PE',
            ],
            174 => 
            [
                'name' => 'French Polynesia',
                'code' => 'PF',
            ],
            175 => 
            [
                'name' => 'Papua New Guinea',
                'code' => 'PG',
            ],
            176 => 
            [
                'name' => 'Philippines',
                'code' => 'PH',
            ],
            177 => 
            [
                'name' => 'Pakistan',
                'code' => 'PK',
            ],
            178 => 
            [
                'name' => 'Poland',
                'code' => 'PL',
            ],
            179 => 
            [
                'name' => 'Saint Pierre and Miquelon',
                'code' => 'PM',
            ],
            180 => 
            [
                'name' => 'Pitcairn',
                'code' => 'PN',
            ],
            181 => 
            [
                'name' => 'Puerto Rico',
                'code' => 'PR',
            ],
            182 => 
            [
                'name' => 'Palestine, State of',
                'code' => 'PS',
            ],
            183 => 
            [
                'name' => 'Portugal',
                'code' => 'PT',
            ],
            184 => 
            [
                'name' => 'Palau',
                'code' => 'PW',
            ],
            185 => 
            [
                'name' => 'Paraguay',
                'code' => 'PY',
            ],
            186 => 
            [
                'name' => 'Qatar',
                'code' => 'QA',
            ],
            187 => 
            [
                'name' => 'Réunion',
                'code' => 'RE',
            ],
            188 => 
            [
                'name' => 'Romania',
                'code' => 'RO',
            ],
            189 => 
            [
                'name' => 'Serbia',
                'code' => 'RS',
            ],
            190 => 
            [
                'name' => 'Russian Federation',
                'code' => 'RU',
            ],
            191 => 
            [
                'name' => 'Rwanda',
                'code' => 'RW',
            ],
            192 => 
            [
                'name' => 'Saudi Arabia',
                'code' => 'SA',
            ],
            193 => 
            [
                'name' => 'Solomon Islands',
                'code' => 'SB',
            ],
            194 => 
            [
                'name' => 'Seychelles',
                'code' => 'SC',
            ],
            195 => 
            [
                'name' => 'Sudan',
                'code' => 'SD',
            ],
            196 => 
            [
                'name' => 'Sweden',
                'code' => 'SE',
            ],
            197 => 
            [
                'name' => 'Singapore',
                'code' => 'SG',
            ],
            198 => 
            [
                'name' => 'Saint Helena, Ascension and Tristan da Cunha',
                'code' => 'SH',
            ],
            199 => 
            [
                'name' => 'Slovenia',
                'code' => 'SI',
            ],
            200 => 
            [
                'name' => 'Svalbard and Jan Mayen',
                'code' => 'SJ',
            ],
            201 => 
            [
                'name' => 'Slovakia',
                'code' => 'SK',
            ],
            202 => 
            [
                'name' => 'Sierra Leone',
                'code' => 'SL',
            ],
            203 => 
            [
                'name' => 'San Marino',
                'code' => 'SM',
            ],
            204 => 
            [
                'name' => 'Senegal',
                'code' => 'SN',
            ],
            205 => 
            [
                'name' => 'Somalia',
                'code' => 'SO',
            ],
            206 => 
            [
                'name' => 'Suriname',
                'code' => 'SR',
            ],
            207 => 
            [
                'name' => 'South Sudan',
                'code' => 'SS',
            ],
            208 => 
            [
                'name' => 'Sao Tome and Principe',
                'code' => 'ST',
            ],
            209 => 
            [
                'name' => 'El Salvador',
                'code' => 'SV',
            ],
            210 => 
            [
            'name' => 'Sint Maarten (Dutch part)',
                'code' => 'SX',
            ],
            211 => 
            [
                'name' => 'Syrian Arab Republic',
                'code' => 'SY',
            ],
            212 => 
            [
                'name' => 'Swaziland',
                'code' => 'SZ',
            ],
            213 => 
            [
                'name' => 'Turks and Caicos Islands',
                'code' => 'TC',
            ],
            214 => 
            [
                'name' => 'Chad',
                'code' => 'TD',
            ],
            215 => 
            [
                'name' => 'French Southern Territories',
                'code' => 'TF',
            ],
            216 => 
            [
                'name' => 'Togo',
                'code' => 'TG',
            ],
            217 => 
            [
                'name' => 'Thailand',
                'code' => 'TH',
            ],
            218 => 
            [
                'name' => 'Tajikistan',
                'code' => 'TJ',
            ],
            219 => 
            [
                'name' => 'Tokelau',
                'code' => 'TK',
            ],
            220 => 
            [
                'name' => 'Timor-Leste',
                'code' => 'TL',
            ],
            221 => 
            [
                'name' => 'Turkmenistan',
                'code' => 'TM',
            ],
            222 => 
            [
                'name' => 'Tunisia',
                'code' => 'TN',
            ],
            223 => 
            [
                'name' => 'Tonga',
                'code' => 'TO',
            ],
            224 => 
            [
                'name' => 'Turkey',
                'code' => 'TR',
            ],
            225 => 
            [
                'name' => 'Trinidad and Tobago',
                'code' => 'TT',
            ],
            226 => 
            [
                'name' => 'Tuvalu',
                'code' => 'TV',
            ],
            227 => 
            [
                'name' => 'Taiwan',
                'code' => 'TW',
            ],
            228 => 
            [
                'name' => 'Tanzania, United Republic of',
                'code' => 'TZ',
            ],
            229 => 
            [
                'name' => 'Ukraine',
                'code' => 'UA',
            ],
            230 => 
            [
                'name' => 'Uganda',
                'code' => 'UG',
            ],
            231 => 
            [
                'name' => 'United States Minor Outlying Islands',
                'code' => 'UM',
            ],
            232 => 
            [
                'name' => 'United States',
                'code' => 'US',
            ],
            233 => 
            [
                'name' => 'Uruguay',
                'code' => 'UY',
            ],
            234 => 
            [
                'name' => 'Uzbekistan',
                'code' => 'UZ',
            ],
            235 => 
            [
            'name' => 'Holy See (Vatican City State)',
                'code' => 'VA',
            ],
            236 => 
            [
                'name' => 'Saint Vincent and the Grenadines',
                'code' => 'VC',
            ],
            237 => 
            [
                'name' => 'Venezuela, Bolivarian Republic of',
                'code' => 'VE',
            ],
            238 => 
            [
                'name' => 'Virgin Islands, British',
                'code' => 'VG',
            ],
            239 => 
            [
                'name' => 'Virgin Islands, U.S.',
                'code' => 'VI',
            ],
            240 => 
            [
                'name' => 'Viet Nam',
                'code' => 'VN',
            ],
            241 => 
            [
                'name' => 'Vanuatu',
                'code' => 'VU',
            ],
            242 => 
            [
                'name' => 'Wallis and Futuna',
                'code' => 'WF',
            ],
            243 => 
            [
                'name' => 'Samoa',
                'code' => 'WS',
            ],
            244 => 
            [
                'name' => 'Yemen',
                'code' => 'YE',
            ],
            245 => 
            [
                'name' => 'Mayotte',
                'code' => 'YT',
            ],
            246 => 
            [
                'name' => 'South Africa',
                'code' => 'ZA',
            ],
            247 => 
            [
                'name' => 'Zambia',
                'code' => 'ZM',
            ],
            248 => 
            [
                'name' => 'Zimbabwe',
                'code' => 'ZW',
            ],
        ]);   
    }
}