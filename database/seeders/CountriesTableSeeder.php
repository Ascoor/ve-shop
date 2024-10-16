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
    public function run()
    {
        

        DB::table('countries')->delete();
        
        DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 381,
                'name' => 'Andorra',
                'code' => 'AD',
                'created_at' => '2024-10-14 17:02:58',
                'updated_at' => '2024-10-14 17:02:58',
            ),
            1 => 
            array (
                'id' => 382,
                'name' => 'United Arab Emirates',
                'code' => 'AE',
                'created_at' => '2024-10-14 17:02:59',
                'updated_at' => '2024-10-14 17:02:59',
            ),
            2 => 
            array (
                'id' => 383,
                'name' => 'Afghanistan',
                'code' => 'AF',
                'created_at' => '2024-10-14 17:02:59',
                'updated_at' => '2024-10-14 17:02:59',
            ),
            3 => 
            array (
                'id' => 384,
                'name' => 'Antigua and Barbuda',
                'code' => 'AG',
                'created_at' => '2024-10-14 17:02:59',
                'updated_at' => '2024-10-14 17:02:59',
            ),
            4 => 
            array (
                'id' => 385,
                'name' => 'Anguilla',
                'code' => 'AI',
                'created_at' => '2024-10-14 17:02:59',
                'updated_at' => '2024-10-14 17:02:59',
            ),
            5 => 
            array (
                'id' => 386,
                'name' => 'Albania',
                'code' => 'AL',
                'created_at' => '2024-10-14 17:03:00',
                'updated_at' => '2024-10-14 17:03:00',
            ),
            6 => 
            array (
                'id' => 387,
                'name' => 'Armenia',
                'code' => 'AM',
                'created_at' => '2024-10-14 17:03:00',
                'updated_at' => '2024-10-14 17:03:00',
            ),
            7 => 
            array (
                'id' => 388,
                'name' => 'Angola',
                'code' => 'AO',
                'created_at' => '2024-10-14 17:03:00',
                'updated_at' => '2024-10-14 17:03:00',
            ),
            8 => 
            array (
                'id' => 389,
                'name' => 'Antarctica',
                'code' => 'AQ',
                'created_at' => '2024-10-14 17:03:00',
                'updated_at' => '2024-10-14 17:03:00',
            ),
            9 => 
            array (
                'id' => 390,
                'name' => 'Argentina',
                'code' => 'AR',
                'created_at' => '2024-10-14 17:03:00',
                'updated_at' => '2024-10-14 17:03:00',
            ),
            10 => 
            array (
                'id' => 391,
                'name' => 'American Samoa',
                'code' => 'AS',
                'created_at' => '2024-10-14 17:03:00',
                'updated_at' => '2024-10-14 17:03:00',
            ),
            11 => 
            array (
                'id' => 392,
                'name' => 'Austria',
                'code' => 'AT',
                'created_at' => '2024-10-14 17:03:00',
                'updated_at' => '2024-10-14 17:03:00',
            ),
            12 => 
            array (
                'id' => 393,
                'name' => 'Australia',
                'code' => 'AU',
                'created_at' => '2024-10-14 17:03:01',
                'updated_at' => '2024-10-14 17:03:01',
            ),
            13 => 
            array (
                'id' => 394,
                'name' => 'Aruba',
                'code' => 'AW',
                'created_at' => '2024-10-14 17:03:01',
                'updated_at' => '2024-10-14 17:03:01',
            ),
            14 => 
            array (
                'id' => 395,
                'name' => 'Åland Islands',
                'code' => 'AX',
                'created_at' => '2024-10-14 17:03:01',
                'updated_at' => '2024-10-14 17:03:01',
            ),
            15 => 
            array (
                'id' => 396,
                'name' => 'Azerbaijan',
                'code' => 'AZ',
                'created_at' => '2024-10-14 17:03:02',
                'updated_at' => '2024-10-14 17:03:02',
            ),
            16 => 
            array (
                'id' => 397,
                'name' => 'Bosnia and Herzegovina',
                'code' => 'BA',
                'created_at' => '2024-10-14 17:03:02',
                'updated_at' => '2024-10-14 17:03:02',
            ),
            17 => 
            array (
                'id' => 398,
                'name' => 'Barbados',
                'code' => 'BB',
                'created_at' => '2024-10-14 17:03:02',
                'updated_at' => '2024-10-14 17:03:02',
            ),
            18 => 
            array (
                'id' => 399,
                'name' => 'Bangladesh',
                'code' => 'BD',
                'created_at' => '2024-10-14 17:03:02',
                'updated_at' => '2024-10-14 17:03:02',
            ),
            19 => 
            array (
                'id' => 400,
                'name' => 'Belgium',
                'code' => 'BE',
                'created_at' => '2024-10-14 17:03:03',
                'updated_at' => '2024-10-14 17:03:03',
            ),
            20 => 
            array (
                'id' => 401,
                'name' => 'Burkina Faso',
                'code' => 'BF',
                'created_at' => '2024-10-14 17:03:03',
                'updated_at' => '2024-10-14 17:03:03',
            ),
            21 => 
            array (
                'id' => 402,
                'name' => 'Bulgaria',
                'code' => 'BG',
                'created_at' => '2024-10-14 17:03:03',
                'updated_at' => '2024-10-14 17:03:03',
            ),
            22 => 
            array (
                'id' => 403,
                'name' => 'Bahrain',
                'code' => 'BH',
                'created_at' => '2024-10-14 17:03:03',
                'updated_at' => '2024-10-14 17:03:03',
            ),
            23 => 
            array (
                'id' => 404,
                'name' => 'Burundi',
                'code' => 'BI',
                'created_at' => '2024-10-14 17:03:04',
                'updated_at' => '2024-10-14 17:03:04',
            ),
            24 => 
            array (
                'id' => 405,
                'name' => 'Benin',
                'code' => 'BJ',
                'created_at' => '2024-10-14 17:03:04',
                'updated_at' => '2024-10-14 17:03:04',
            ),
            25 => 
            array (
                'id' => 406,
                'name' => 'Saint Barthélemy',
                'code' => 'BL',
                'created_at' => '2024-10-14 17:03:04',
                'updated_at' => '2024-10-14 17:03:04',
            ),
            26 => 
            array (
                'id' => 407,
                'name' => 'Bermuda',
                'code' => 'BM',
                'created_at' => '2024-10-14 17:03:04',
                'updated_at' => '2024-10-14 17:03:04',
            ),
            27 => 
            array (
                'id' => 408,
                'name' => 'Brunei',
                'code' => 'BN',
                'created_at' => '2024-10-14 17:03:04',
                'updated_at' => '2024-10-14 17:03:04',
            ),
            28 => 
            array (
                'id' => 409,
                'name' => 'Bolivia',
                'code' => 'BO',
                'created_at' => '2024-10-14 17:03:04',
                'updated_at' => '2024-10-14 17:03:04',
            ),
            29 => 
            array (
                'id' => 410,
                'name' => 'Caribbean Netherlands',
                'code' => 'BQ',
                'created_at' => '2024-10-14 17:03:04',
                'updated_at' => '2024-10-14 17:03:04',
            ),
            30 => 
            array (
                'id' => 411,
                'name' => 'Brazil',
                'code' => 'BR',
                'created_at' => '2024-10-14 17:03:05',
                'updated_at' => '2024-10-14 17:03:05',
            ),
            31 => 
            array (
                'id' => 412,
                'name' => 'Bahamas',
                'code' => 'BS',
                'created_at' => '2024-10-14 17:03:05',
                'updated_at' => '2024-10-14 17:03:05',
            ),
            32 => 
            array (
                'id' => 413,
                'name' => 'Bhutan',
                'code' => 'BT',
                'created_at' => '2024-10-14 17:03:05',
                'updated_at' => '2024-10-14 17:03:05',
            ),
            33 => 
            array (
                'id' => 414,
                'name' => 'Bouvet Island',
                'code' => 'BV',
                'created_at' => '2024-10-14 17:03:05',
                'updated_at' => '2024-10-14 17:03:05',
            ),
            34 => 
            array (
                'id' => 415,
                'name' => 'Botswana',
                'code' => 'BW',
                'created_at' => '2024-10-14 17:03:05',
                'updated_at' => '2024-10-14 17:03:05',
            ),
            35 => 
            array (
                'id' => 416,
                'name' => 'Belarus',
                'code' => 'BY',
                'created_at' => '2024-10-14 17:03:05',
                'updated_at' => '2024-10-14 17:03:05',
            ),
            36 => 
            array (
                'id' => 417,
                'name' => 'Belize',
                'code' => 'BZ',
                'created_at' => '2024-10-14 17:03:05',
                'updated_at' => '2024-10-14 17:03:05',
            ),
            37 => 
            array (
                'id' => 418,
                'name' => 'Canada',
                'code' => 'CA',
                'created_at' => '2024-10-14 17:03:06',
                'updated_at' => '2024-10-14 17:03:06',
            ),
            38 => 
            array (
                'id' => 419,
            'name' => 'Cocos (Keeling) Islands',
                'code' => 'CC',
                'created_at' => '2024-10-14 17:03:06',
                'updated_at' => '2024-10-14 17:03:06',
            ),
            39 => 
            array (
                'id' => 420,
                'name' => 'DR Congo',
                'code' => 'CD',
                'created_at' => '2024-10-14 17:03:06',
                'updated_at' => '2024-10-14 17:03:06',
            ),
            40 => 
            array (
                'id' => 421,
                'name' => 'Central African Republic',
                'code' => 'CF',
                'created_at' => '2024-10-14 17:03:06',
                'updated_at' => '2024-10-14 17:03:06',
            ),
            41 => 
            array (
                'id' => 422,
                'name' => 'Republic of the Congo',
                'code' => 'CG',
                'created_at' => '2024-10-14 17:03:07',
                'updated_at' => '2024-10-14 17:03:07',
            ),
            42 => 
            array (
                'id' => 423,
                'name' => 'Switzerland',
                'code' => 'CH',
                'created_at' => '2024-10-14 17:03:07',
                'updated_at' => '2024-10-14 17:03:07',
            ),
            43 => 
            array (
                'id' => 424,
                'name' => 'Ivory Coast',
                'code' => 'CI',
                'created_at' => '2024-10-14 17:03:07',
                'updated_at' => '2024-10-14 17:03:07',
            ),
            44 => 
            array (
                'id' => 425,
                'name' => 'Cook Islands',
                'code' => 'CK',
                'created_at' => '2024-10-14 17:03:07',
                'updated_at' => '2024-10-14 17:03:07',
            ),
            45 => 
            array (
                'id' => 426,
                'name' => 'Chile',
                'code' => 'CL',
                'created_at' => '2024-10-14 17:03:07',
                'updated_at' => '2024-10-14 17:03:07',
            ),
            46 => 
            array (
                'id' => 427,
                'name' => 'Cameroon',
                'code' => 'CM',
                'created_at' => '2024-10-14 17:03:08',
                'updated_at' => '2024-10-14 17:03:08',
            ),
            47 => 
            array (
                'id' => 428,
                'name' => 'China',
                'code' => 'CN',
                'created_at' => '2024-10-14 17:03:08',
                'updated_at' => '2024-10-14 17:03:08',
            ),
            48 => 
            array (
                'id' => 429,
                'name' => 'Colombia',
                'code' => 'CO',
                'created_at' => '2024-10-14 17:03:08',
                'updated_at' => '2024-10-14 17:03:08',
            ),
            49 => 
            array (
                'id' => 430,
                'name' => 'Costa Rica',
                'code' => 'CR',
                'created_at' => '2024-10-14 17:03:08',
                'updated_at' => '2024-10-14 17:03:08',
            ),
            50 => 
            array (
                'id' => 431,
                'name' => 'Cuba',
                'code' => 'CU',
                'created_at' => '2024-10-14 17:03:08',
                'updated_at' => '2024-10-14 17:03:08',
            ),
            51 => 
            array (
                'id' => 432,
                'name' => 'Cape Verde',
                'code' => 'CV',
                'created_at' => '2024-10-14 17:03:08',
                'updated_at' => '2024-10-14 17:03:08',
            ),
            52 => 
            array (
                'id' => 433,
                'name' => 'Curaçao',
                'code' => 'CW',
                'created_at' => '2024-10-14 17:03:09',
                'updated_at' => '2024-10-14 17:03:09',
            ),
            53 => 
            array (
                'id' => 434,
                'name' => 'Christmas Island',
                'code' => 'CX',
                'created_at' => '2024-10-14 17:03:09',
                'updated_at' => '2024-10-14 17:03:09',
            ),
            54 => 
            array (
                'id' => 435,
                'name' => 'Cyprus',
                'code' => 'CY',
                'created_at' => '2024-10-14 17:03:09',
                'updated_at' => '2024-10-14 17:03:09',
            ),
            55 => 
            array (
                'id' => 436,
                'name' => 'Czech Republic',
                'code' => 'CZ',
                'created_at' => '2024-10-14 17:03:09',
                'updated_at' => '2024-10-14 17:03:09',
            ),
            56 => 
            array (
                'id' => 437,
                'name' => 'Germany',
                'code' => 'DE',
                'created_at' => '2024-10-14 17:03:09',
                'updated_at' => '2024-10-14 17:03:09',
            ),
            57 => 
            array (
                'id' => 438,
                'name' => 'Djibouti',
                'code' => 'DJ',
                'created_at' => '2024-10-14 17:03:10',
                'updated_at' => '2024-10-14 17:03:10',
            ),
            58 => 
            array (
                'id' => 439,
                'name' => 'Denmark',
                'code' => 'DK',
                'created_at' => '2024-10-14 17:03:10',
                'updated_at' => '2024-10-14 17:03:10',
            ),
            59 => 
            array (
                'id' => 440,
                'name' => 'Dominica',
                'code' => 'DM',
                'created_at' => '2024-10-14 17:03:10',
                'updated_at' => '2024-10-14 17:03:10',
            ),
            60 => 
            array (
                'id' => 441,
                'name' => 'Dominican Republic',
                'code' => 'DO',
                'created_at' => '2024-10-14 17:03:10',
                'updated_at' => '2024-10-14 17:03:10',
            ),
            61 => 
            array (
                'id' => 442,
                'name' => 'Algeria',
                'code' => 'DZ',
                'created_at' => '2024-10-14 17:03:10',
                'updated_at' => '2024-10-14 17:03:10',
            ),
            62 => 
            array (
                'id' => 443,
                'name' => 'Ecuador',
                'code' => 'EC',
                'created_at' => '2024-10-14 17:03:11',
                'updated_at' => '2024-10-14 17:03:11',
            ),
            63 => 
            array (
                'id' => 444,
                'name' => 'Estonia',
                'code' => 'EE',
                'created_at' => '2024-10-14 17:03:11',
                'updated_at' => '2024-10-14 17:03:11',
            ),
            64 => 
            array (
                'id' => 445,
                'name' => 'Egypt',
                'code' => 'EG',
                'created_at' => '2024-10-14 17:03:11',
                'updated_at' => '2024-10-14 17:03:11',
            ),
            65 => 
            array (
                'id' => 446,
                'name' => 'Western Sahara',
                'code' => 'EH',
                'created_at' => '2024-10-14 17:03:11',
                'updated_at' => '2024-10-14 17:03:11',
            ),
            66 => 
            array (
                'id' => 447,
                'name' => 'Eritrea',
                'code' => 'ER',
                'created_at' => '2024-10-14 17:03:11',
                'updated_at' => '2024-10-14 17:03:11',
            ),
            67 => 
            array (
                'id' => 448,
                'name' => 'Spain',
                'code' => 'ES',
                'created_at' => '2024-10-14 17:03:12',
                'updated_at' => '2024-10-14 17:03:12',
            ),
            68 => 
            array (
                'id' => 449,
                'name' => 'Ethiopia',
                'code' => 'ET',
                'created_at' => '2024-10-14 17:03:12',
                'updated_at' => '2024-10-14 17:03:12',
            ),
            69 => 
            array (
                'id' => 450,
                'name' => 'Finland',
                'code' => 'FI',
                'created_at' => '2024-10-14 17:03:12',
                'updated_at' => '2024-10-14 17:03:12',
            ),
            70 => 
            array (
                'id' => 451,
                'name' => 'Fiji',
                'code' => 'FJ',
                'created_at' => '2024-10-14 17:03:12',
                'updated_at' => '2024-10-14 17:03:12',
            ),
            71 => 
            array (
                'id' => 452,
                'name' => 'Falkland Islands',
                'code' => 'FK',
                'created_at' => '2024-10-14 17:03:12',
                'updated_at' => '2024-10-14 17:03:12',
            ),
            72 => 
            array (
                'id' => 453,
                'name' => 'Micronesia',
                'code' => 'FM',
                'created_at' => '2024-10-14 17:03:12',
                'updated_at' => '2024-10-14 17:03:12',
            ),
            73 => 
            array (
                'id' => 454,
                'name' => 'Faroe Islands',
                'code' => 'FO',
                'created_at' => '2024-10-14 17:03:13',
                'updated_at' => '2024-10-14 17:03:13',
            ),
            74 => 
            array (
                'id' => 455,
                'name' => 'France',
                'code' => 'FR',
                'created_at' => '2024-10-14 17:03:13',
                'updated_at' => '2024-10-14 17:03:13',
            ),
            75 => 
            array (
                'id' => 456,
                'name' => 'Gabon',
                'code' => 'GA',
                'created_at' => '2024-10-14 17:03:13',
                'updated_at' => '2024-10-14 17:03:13',
            ),
            76 => 
            array (
                'id' => 457,
                'name' => 'United Kingdom',
                'code' => 'GB',
                'created_at' => '2024-10-14 17:03:13',
                'updated_at' => '2024-10-14 17:03:13',
            ),
            77 => 
            array (
                'id' => 458,
                'name' => 'Grenada',
                'code' => 'GD',
                'created_at' => '2024-10-14 17:03:13',
                'updated_at' => '2024-10-14 17:03:13',
            ),
            78 => 
            array (
                'id' => 459,
                'name' => 'Georgia',
                'code' => 'GE',
                'created_at' => '2024-10-14 17:03:14',
                'updated_at' => '2024-10-14 17:03:14',
            ),
            79 => 
            array (
                'id' => 460,
                'name' => 'French Guiana',
                'code' => 'GF',
                'created_at' => '2024-10-14 17:03:14',
                'updated_at' => '2024-10-14 17:03:14',
            ),
            80 => 
            array (
                'id' => 461,
                'name' => 'Guernsey',
                'code' => 'GG',
                'created_at' => '2024-10-14 17:03:14',
                'updated_at' => '2024-10-14 17:03:14',
            ),
            81 => 
            array (
                'id' => 462,
                'name' => 'Ghana',
                'code' => 'GH',
                'created_at' => '2024-10-14 17:03:14',
                'updated_at' => '2024-10-14 17:03:14',
            ),
            82 => 
            array (
                'id' => 463,
                'name' => 'Gibraltar',
                'code' => 'GI',
                'created_at' => '2024-10-14 17:03:14',
                'updated_at' => '2024-10-14 17:03:14',
            ),
            83 => 
            array (
                'id' => 464,
                'name' => 'Greenland',
                'code' => 'GL',
                'created_at' => '2024-10-14 17:03:14',
                'updated_at' => '2024-10-14 17:03:14',
            ),
            84 => 
            array (
                'id' => 465,
                'name' => 'Gambia',
                'code' => 'GM',
                'created_at' => '2024-10-14 17:03:15',
                'updated_at' => '2024-10-14 17:03:15',
            ),
            85 => 
            array (
                'id' => 466,
                'name' => 'Guinea',
                'code' => 'GN',
                'created_at' => '2024-10-14 17:03:15',
                'updated_at' => '2024-10-14 17:03:15',
            ),
            86 => 
            array (
                'id' => 467,
                'name' => 'Guadeloupe',
                'code' => 'GP',
                'created_at' => '2024-10-14 17:03:15',
                'updated_at' => '2024-10-14 17:03:15',
            ),
            87 => 
            array (
                'id' => 468,
                'name' => 'Equatorial Guinea',
                'code' => 'GQ',
                'created_at' => '2024-10-14 17:03:15',
                'updated_at' => '2024-10-14 17:03:15',
            ),
            88 => 
            array (
                'id' => 469,
                'name' => 'Greece',
                'code' => 'GR',
                'created_at' => '2024-10-14 17:03:15',
                'updated_at' => '2024-10-14 17:03:15',
            ),
            89 => 
            array (
                'id' => 470,
                'name' => 'South Georgia',
                'code' => 'GS',
                'created_at' => '2024-10-14 17:03:15',
                'updated_at' => '2024-10-14 17:03:15',
            ),
            90 => 
            array (
                'id' => 471,
                'name' => 'Guatemala',
                'code' => 'GT',
                'created_at' => '2024-10-14 17:03:15',
                'updated_at' => '2024-10-14 17:03:15',
            ),
            91 => 
            array (
                'id' => 472,
                'name' => 'Guam',
                'code' => 'GU',
                'created_at' => '2024-10-14 17:03:15',
                'updated_at' => '2024-10-14 17:03:15',
            ),
            92 => 
            array (
                'id' => 473,
                'name' => 'Guinea-Bissau',
                'code' => 'GW',
                'created_at' => '2024-10-14 17:03:16',
                'updated_at' => '2024-10-14 17:03:16',
            ),
            93 => 
            array (
                'id' => 474,
                'name' => 'Guyana',
                'code' => 'GY',
                'created_at' => '2024-10-14 17:03:16',
                'updated_at' => '2024-10-14 17:03:16',
            ),
            94 => 
            array (
                'id' => 475,
                'name' => 'Hong Kong',
                'code' => 'HK',
                'created_at' => '2024-10-14 17:03:16',
                'updated_at' => '2024-10-14 17:03:16',
            ),
            95 => 
            array (
                'id' => 476,
                'name' => 'Heard Island and McDonald Islands',
                'code' => 'HM',
                'created_at' => '2024-10-14 17:03:16',
                'updated_at' => '2024-10-14 17:03:16',
            ),
            96 => 
            array (
                'id' => 477,
                'name' => 'Honduras',
                'code' => 'HN',
                'created_at' => '2024-10-14 17:03:16',
                'updated_at' => '2024-10-14 17:03:16',
            ),
            97 => 
            array (
                'id' => 478,
                'name' => 'Croatia',
                'code' => 'HR',
                'created_at' => '2024-10-14 17:03:16',
                'updated_at' => '2024-10-14 17:03:16',
            ),
            98 => 
            array (
                'id' => 479,
                'name' => 'Haiti',
                'code' => 'HT',
                'created_at' => '2024-10-14 17:03:18',
                'updated_at' => '2024-10-14 17:03:18',
            ),
            99 => 
            array (
                'id' => 480,
                'name' => 'Hungary',
                'code' => 'HU',
                'created_at' => '2024-10-14 17:03:18',
                'updated_at' => '2024-10-14 17:03:18',
            ),
            100 => 
            array (
                'id' => 481,
                'name' => 'Indonesia',
                'code' => 'ID',
                'created_at' => '2024-10-14 17:03:18',
                'updated_at' => '2024-10-14 17:03:18',
            ),
            101 => 
            array (
                'id' => 482,
                'name' => 'Ireland',
                'code' => 'IE',
                'created_at' => '2024-10-14 17:03:18',
                'updated_at' => '2024-10-14 17:03:18',
            ),
            102 => 
            array (
                'id' => 483,
                'name' => 'Israel',
                'code' => 'IL',
                'created_at' => '2024-10-14 17:03:18',
                'updated_at' => '2024-10-14 17:03:18',
            ),
            103 => 
            array (
                'id' => 484,
                'name' => 'Isle of Man',
                'code' => 'IM',
                'created_at' => '2024-10-14 17:03:18',
                'updated_at' => '2024-10-14 17:03:18',
            ),
            104 => 
            array (
                'id' => 485,
                'name' => 'India',
                'code' => 'IN',
                'created_at' => '2024-10-14 17:03:19',
                'updated_at' => '2024-10-14 17:03:19',
            ),
            105 => 
            array (
                'id' => 486,
                'name' => 'British Indian Ocean Territory',
                'code' => 'IO',
                'created_at' => '2024-10-14 17:03:19',
                'updated_at' => '2024-10-14 17:03:19',
            ),
            106 => 
            array (
                'id' => 487,
                'name' => 'Iraq',
                'code' => 'IQ',
                'created_at' => '2024-10-14 17:03:19',
                'updated_at' => '2024-10-14 17:03:19',
            ),
            107 => 
            array (
                'id' => 488,
                'name' => 'Iran',
                'code' => 'IR',
                'created_at' => '2024-10-14 17:03:19',
                'updated_at' => '2024-10-14 17:03:19',
            ),
            108 => 
            array (
                'id' => 489,
                'name' => 'Iceland',
                'code' => 'IS',
                'created_at' => '2024-10-14 17:03:19',
                'updated_at' => '2024-10-14 17:03:19',
            ),
            109 => 
            array (
                'id' => 490,
                'name' => 'Italy',
                'code' => 'IT',
                'created_at' => '2024-10-14 17:03:20',
                'updated_at' => '2024-10-14 17:03:20',
            ),
            110 => 
            array (
                'id' => 491,
                'name' => 'Jersey',
                'code' => 'JE',
                'created_at' => '2024-10-14 17:03:20',
                'updated_at' => '2024-10-14 17:03:20',
            ),
            111 => 
            array (
                'id' => 492,
                'name' => 'Jamaica',
                'code' => 'JM',
                'created_at' => '2024-10-14 17:03:20',
                'updated_at' => '2024-10-14 17:03:20',
            ),
            112 => 
            array (
                'id' => 493,
                'name' => 'Jordan',
                'code' => 'JO',
                'created_at' => '2024-10-14 17:03:20',
                'updated_at' => '2024-10-14 17:03:20',
            ),
            113 => 
            array (
                'id' => 494,
                'name' => 'Japan',
                'code' => 'JP',
                'created_at' => '2024-10-14 17:03:21',
                'updated_at' => '2024-10-14 17:03:21',
            ),
            114 => 
            array (
                'id' => 495,
                'name' => 'Kenya',
                'code' => 'KE',
                'created_at' => '2024-10-14 17:03:21',
                'updated_at' => '2024-10-14 17:03:21',
            ),
            115 => 
            array (
                'id' => 496,
                'name' => 'Kyrgyzstan',
                'code' => 'KG',
                'created_at' => '2024-10-14 17:03:21',
                'updated_at' => '2024-10-14 17:03:21',
            ),
            116 => 
            array (
                'id' => 497,
                'name' => 'Cambodia',
                'code' => 'KH',
                'created_at' => '2024-10-14 17:03:21',
                'updated_at' => '2024-10-14 17:03:21',
            ),
            117 => 
            array (
                'id' => 498,
                'name' => 'Kiribati',
                'code' => 'KI',
                'created_at' => '2024-10-14 17:03:21',
                'updated_at' => '2024-10-14 17:03:21',
            ),
            118 => 
            array (
                'id' => 499,
                'name' => 'Comoros',
                'code' => 'KM',
                'created_at' => '2024-10-14 17:03:21',
                'updated_at' => '2024-10-14 17:03:21',
            ),
            119 => 
            array (
                'id' => 500,
                'name' => 'Saint Kitts and Nevis',
                'code' => 'KN',
                'created_at' => '2024-10-14 17:03:21',
                'updated_at' => '2024-10-14 17:03:21',
            ),
            120 => 
            array (
                'id' => 501,
                'name' => 'North Korea',
                'code' => 'KP',
                'created_at' => '2024-10-14 17:03:22',
                'updated_at' => '2024-10-14 17:03:22',
            ),
            121 => 
            array (
                'id' => 502,
                'name' => 'South Korea',
                'code' => 'KR',
                'created_at' => '2024-10-14 17:03:22',
                'updated_at' => '2024-10-14 17:03:22',
            ),
            122 => 
            array (
                'id' => 503,
                'name' => 'Kuwait',
                'code' => 'KW',
                'created_at' => '2024-10-14 17:03:22',
                'updated_at' => '2024-10-14 17:03:22',
            ),
            123 => 
            array (
                'id' => 504,
                'name' => 'Cayman Islands',
                'code' => 'KY',
                'created_at' => '2024-10-14 17:03:22',
                'updated_at' => '2024-10-14 17:03:22',
            ),
            124 => 
            array (
                'id' => 505,
                'name' => 'Kazakhstan',
                'code' => 'KZ',
                'created_at' => '2024-10-14 17:03:23',
                'updated_at' => '2024-10-14 17:03:23',
            ),
            125 => 
            array (
                'id' => 506,
                'name' => 'Laos',
                'code' => 'LA',
                'created_at' => '2024-10-14 17:03:23',
                'updated_at' => '2024-10-14 17:03:23',
            ),
            126 => 
            array (
                'id' => 507,
                'name' => 'Lebanon',
                'code' => 'LB',
                'created_at' => '2024-10-14 17:03:23',
                'updated_at' => '2024-10-14 17:03:23',
            ),
            127 => 
            array (
                'id' => 508,
                'name' => 'Saint Lucia',
                'code' => 'LC',
                'created_at' => '2024-10-14 17:03:23',
                'updated_at' => '2024-10-14 17:03:23',
            ),
            128 => 
            array (
                'id' => 509,
                'name' => 'Liechtenstein',
                'code' => 'LI',
                'created_at' => '2024-10-14 17:03:23',
                'updated_at' => '2024-10-14 17:03:23',
            ),
            129 => 
            array (
                'id' => 510,
                'name' => 'Sri Lanka',
                'code' => 'LK',
                'created_at' => '2024-10-14 17:03:24',
                'updated_at' => '2024-10-14 17:03:24',
            ),
            130 => 
            array (
                'id' => 511,
                'name' => 'Liberia',
                'code' => 'LR',
                'created_at' => '2024-10-14 17:03:24',
                'updated_at' => '2024-10-14 17:03:24',
            ),
            131 => 
            array (
                'id' => 512,
                'name' => 'Lesotho',
                'code' => 'LS',
                'created_at' => '2024-10-14 17:03:24',
                'updated_at' => '2024-10-14 17:03:24',
            ),
            132 => 
            array (
                'id' => 513,
                'name' => 'Lithuania',
                'code' => 'LT',
                'created_at' => '2024-10-14 17:03:24',
                'updated_at' => '2024-10-14 17:03:24',
            ),
            133 => 
            array (
                'id' => 514,
                'name' => 'Luxembourg',
                'code' => 'LU',
                'created_at' => '2024-10-14 17:03:24',
                'updated_at' => '2024-10-14 17:03:24',
            ),
            134 => 
            array (
                'id' => 515,
                'name' => 'Latvia',
                'code' => 'LV',
                'created_at' => '2024-10-14 17:03:24',
                'updated_at' => '2024-10-14 17:03:24',
            ),
            135 => 
            array (
                'id' => 516,
                'name' => 'Libya',
                'code' => 'LY',
                'created_at' => '2024-10-14 17:03:24',
                'updated_at' => '2024-10-14 17:03:24',
            ),
            136 => 
            array (
                'id' => 517,
                'name' => 'Morocco',
                'code' => 'MA',
                'created_at' => '2024-10-14 17:03:24',
                'updated_at' => '2024-10-14 17:03:24',
            ),
            137 => 
            array (
                'id' => 518,
                'name' => 'Monaco',
                'code' => 'MC',
                'created_at' => '2024-10-14 17:03:25',
                'updated_at' => '2024-10-14 17:03:25',
            ),
            138 => 
            array (
                'id' => 519,
                'name' => 'Moldova',
                'code' => 'MD',
                'created_at' => '2024-10-14 17:03:25',
                'updated_at' => '2024-10-14 17:03:25',
            ),
            139 => 
            array (
                'id' => 520,
                'name' => 'Montenegro',
                'code' => 'ME',
                'created_at' => '2024-10-14 17:03:25',
                'updated_at' => '2024-10-14 17:03:25',
            ),
            140 => 
            array (
                'id' => 521,
                'name' => 'Saint Martin',
                'code' => 'MF',
                'created_at' => '2024-10-14 17:03:24',
                'updated_at' => '2024-10-14 17:03:24',
            ),
            141 => 
            array (
                'id' => 522,
                'name' => 'Madagascar',
                'code' => 'MG',
                'created_at' => '2024-10-14 17:03:24',
                'updated_at' => '2024-10-14 17:03:24',
            ),
            142 => 
            array (
                'id' => 523,
                'name' => 'Marshall Islands',
                'code' => 'MH',
                'created_at' => '2024-10-14 17:03:24',
                'updated_at' => '2024-10-14 17:03:24',
            ),
            143 => 
            array (
                'id' => 524,
                'name' => 'Macedonia',
                'code' => 'MK',
                'created_at' => '2024-10-14 17:03:24',
                'updated_at' => '2024-10-14 17:03:24',
            ),
            144 => 
            array (
                'id' => 525,
                'name' => 'Mali',
                'code' => 'ML',
                'created_at' => '2024-10-14 17:03:25',
                'updated_at' => '2024-10-14 17:03:25',
            ),
            145 => 
            array (
                'id' => 526,
                'name' => 'Myanmar',
                'code' => 'MM',
                'created_at' => '2024-10-14 17:03:25',
                'updated_at' => '2024-10-14 17:03:25',
            ),
            146 => 
            array (
                'id' => 527,
                'name' => 'Mongolia',
                'code' => 'MN',
                'created_at' => '2024-10-14 17:03:25',
                'updated_at' => '2024-10-14 17:03:25',
            ),
            147 => 
            array (
                'id' => 528,
                'name' => 'Macau',
                'code' => 'MO',
                'created_at' => '2024-10-14 17:03:25',
                'updated_at' => '2024-10-14 17:03:25',
            ),
            148 => 
            array (
                'id' => 529,
                'name' => 'Northern Mariana Islands',
                'code' => 'MP',
                'created_at' => '2024-10-14 17:03:25',
                'updated_at' => '2024-10-14 17:03:25',
            ),
            149 => 
            array (
                'id' => 530,
                'name' => 'Martinique',
                'code' => 'MQ',
                'created_at' => '2024-10-14 17:03:25',
                'updated_at' => '2024-10-14 17:03:25',
            ),
            150 => 
            array (
                'id' => 531,
                'name' => 'Mauritania',
                'code' => 'MR',
                'created_at' => '2024-10-14 17:03:25',
                'updated_at' => '2024-10-14 17:03:25',
            ),
            151 => 
            array (
                'id' => 532,
                'name' => 'Montserrat',
                'code' => 'MS',
                'created_at' => '2024-10-14 17:03:26',
                'updated_at' => '2024-10-14 17:03:26',
            ),
            152 => 
            array (
                'id' => 533,
                'name' => 'Malta',
                'code' => 'MT',
                'created_at' => '2024-10-14 17:03:26',
                'updated_at' => '2024-10-14 17:03:26',
            ),
            153 => 
            array (
                'id' => 534,
                'name' => 'Mauritius',
                'code' => 'MU',
                'created_at' => '2024-10-14 17:03:26',
                'updated_at' => '2024-10-14 17:03:26',
            ),
            154 => 
            array (
                'id' => 535,
                'name' => 'Maldives',
                'code' => 'MV',
                'created_at' => '2024-10-14 17:03:26',
                'updated_at' => '2024-10-14 17:03:26',
            ),
            155 => 
            array (
                'id' => 536,
                'name' => 'Malawi',
                'code' => 'MW',
                'created_at' => '2024-10-14 17:03:26',
                'updated_at' => '2024-10-14 17:03:26',
            ),
            156 => 
            array (
                'id' => 537,
                'name' => 'Mexico',
                'code' => 'MX',
                'created_at' => '2024-10-14 17:03:27',
                'updated_at' => '2024-10-14 17:03:27',
            ),
            157 => 
            array (
                'id' => 538,
                'name' => 'Malaysia',
                'code' => 'MY',
                'created_at' => '2024-10-14 17:03:27',
                'updated_at' => '2024-10-14 17:03:27',
            ),
            158 => 
            array (
                'id' => 539,
                'name' => 'Mozambique',
                'code' => 'MZ',
                'created_at' => '2024-10-14 17:03:27',
                'updated_at' => '2024-10-14 17:03:27',
            ),
            159 => 
            array (
                'id' => 540,
                'name' => 'Namibia',
                'code' => 'NA',
                'created_at' => '2024-10-14 17:03:27',
                'updated_at' => '2024-10-14 17:03:27',
            ),
            160 => 
            array (
                'id' => 541,
                'name' => 'New Caledonia',
                'code' => 'NC',
                'created_at' => '2024-10-14 17:03:27',
                'updated_at' => '2024-10-14 17:03:27',
            ),
            161 => 
            array (
                'id' => 542,
                'name' => 'Niger',
                'code' => 'NE',
                'created_at' => '2024-10-14 17:03:27',
                'updated_at' => '2024-10-14 17:03:27',
            ),
            162 => 
            array (
                'id' => 543,
                'name' => 'Norfolk Island',
                'code' => 'NF',
                'created_at' => '2024-10-14 17:03:27',
                'updated_at' => '2024-10-14 17:03:27',
            ),
            163 => 
            array (
                'id' => 544,
                'name' => 'Nigeria',
                'code' => 'NG',
                'created_at' => '2024-10-14 17:03:28',
                'updated_at' => '2024-10-14 17:03:28',
            ),
            164 => 
            array (
                'id' => 545,
                'name' => 'Nicaragua',
                'code' => 'NI',
                'created_at' => '2024-10-14 17:03:28',
                'updated_at' => '2024-10-14 17:03:28',
            ),
            165 => 
            array (
                'id' => 546,
                'name' => 'Netherlands',
                'code' => 'NL',
                'created_at' => '2024-10-14 17:03:28',
                'updated_at' => '2024-10-14 17:03:28',
            ),
            166 => 
            array (
                'id' => 547,
                'name' => 'Norway',
                'code' => 'NO',
                'created_at' => '2024-10-14 17:03:28',
                'updated_at' => '2024-10-14 17:03:28',
            ),
            167 => 
            array (
                'id' => 548,
                'name' => 'Nepal',
                'code' => 'NP',
                'created_at' => '2024-10-14 17:03:28',
                'updated_at' => '2024-10-14 17:03:28',
            ),
            168 => 
            array (
                'id' => 549,
                'name' => 'Nauru',
                'code' => 'NR',
                'created_at' => '2024-10-14 17:03:28',
                'updated_at' => '2024-10-14 17:03:28',
            ),
            169 => 
            array (
                'id' => 550,
                'name' => 'Niue',
                'code' => 'NU',
                'created_at' => '2024-10-14 17:03:28',
                'updated_at' => '2024-10-14 17:03:28',
            ),
            170 => 
            array (
                'id' => 551,
                'name' => 'New Zealand',
                'code' => 'NZ',
                'created_at' => '2024-10-14 17:03:29',
                'updated_at' => '2024-10-14 17:03:29',
            ),
            171 => 
            array (
                'id' => 552,
                'name' => 'Oman',
                'code' => 'OM',
                'created_at' => '2024-10-14 17:03:29',
                'updated_at' => '2024-10-14 17:03:29',
            ),
            172 => 
            array (
                'id' => 553,
                'name' => 'Panama',
                'code' => 'PA',
                'created_at' => '2024-10-14 17:03:29',
                'updated_at' => '2024-10-14 17:03:29',
            ),
            173 => 
            array (
                'id' => 554,
                'name' => 'Peru',
                'code' => 'PE',
                'created_at' => '2024-10-14 17:03:30',
                'updated_at' => '2024-10-14 17:03:30',
            ),
            174 => 
            array (
                'id' => 555,
                'name' => 'French Polynesia',
                'code' => 'PF',
                'created_at' => '2024-10-14 17:03:30',
                'updated_at' => '2024-10-14 17:03:30',
            ),
            175 => 
            array (
                'id' => 556,
                'name' => 'Papua New Guinea',
                'code' => 'PG',
                'created_at' => '2024-10-14 17:03:30',
                'updated_at' => '2024-10-14 17:03:30',
            ),
            176 => 
            array (
                'id' => 557,
                'name' => 'Philippines',
                'code' => 'PH',
                'created_at' => '2024-10-14 17:03:30',
                'updated_at' => '2024-10-14 17:03:30',
            ),
            177 => 
            array (
                'id' => 558,
                'name' => 'Pakistan',
                'code' => 'PK',
                'created_at' => '2024-10-14 17:03:30',
                'updated_at' => '2024-10-14 17:03:30',
            ),
            178 => 
            array (
                'id' => 559,
                'name' => 'Poland',
                'code' => 'PL',
                'created_at' => '2024-10-14 17:03:30',
                'updated_at' => '2024-10-14 17:03:30',
            ),
            179 => 
            array (
                'id' => 560,
                'name' => 'Saint Pierre and Miquelon',
                'code' => 'PM',
                'created_at' => '2024-10-14 17:03:31',
                'updated_at' => '2024-10-14 17:03:31',
            ),
            180 => 
            array (
                'id' => 561,
                'name' => 'Pitcairn Islands',
                'code' => 'PN',
                'created_at' => '2024-10-14 17:03:31',
                'updated_at' => '2024-10-14 17:03:31',
            ),
            181 => 
            array (
                'id' => 562,
                'name' => 'Puerto Rico',
                'code' => 'PR',
                'created_at' => '2024-10-14 17:03:31',
                'updated_at' => '2024-10-14 17:03:31',
            ),
            182 => 
            array (
                'id' => 563,
                'name' => 'Palestine',
                'code' => 'PS',
                'created_at' => '2024-10-14 17:03:31',
                'updated_at' => '2024-10-14 17:03:31',
            ),
            183 => 
            array (
                'id' => 564,
                'name' => 'Portugal',
                'code' => 'PT',
                'created_at' => '2024-10-14 17:03:31',
                'updated_at' => '2024-10-14 17:03:31',
            ),
            184 => 
            array (
                'id' => 565,
                'name' => 'Palau',
                'code' => 'PW',
                'created_at' => '2024-10-14 17:03:31',
                'updated_at' => '2024-10-14 17:03:31',
            ),
            185 => 
            array (
                'id' => 566,
                'name' => 'Paraguay',
                'code' => 'PY',
                'created_at' => '2024-10-14 17:03:32',
                'updated_at' => '2024-10-14 17:03:32',
            ),
            186 => 
            array (
                'id' => 567,
                'name' => 'Qatar',
                'code' => 'QA',
                'created_at' => '2024-10-14 17:03:32',
                'updated_at' => '2024-10-14 17:03:32',
            ),
            187 => 
            array (
                'id' => 568,
                'name' => 'Réunion',
                'code' => 'RE',
                'created_at' => '2024-10-14 17:03:32',
                'updated_at' => '2024-10-14 17:03:32',
            ),
            188 => 
            array (
                'id' => 569,
                'name' => 'Romania',
                'code' => 'RO',
                'created_at' => '2024-10-14 17:03:32',
                'updated_at' => '2024-10-14 17:03:32',
            ),
            189 => 
            array (
                'id' => 570,
                'name' => 'Serbia',
                'code' => 'RS',
                'created_at' => '2024-10-14 17:03:32',
                'updated_at' => '2024-10-14 17:03:32',
            ),
            190 => 
            array (
                'id' => 571,
                'name' => 'Russia',
                'code' => 'RU',
                'created_at' => '2024-10-14 17:03:32',
                'updated_at' => '2024-10-14 17:03:32',
            ),
            191 => 
            array (
                'id' => 572,
                'name' => 'Rwanda',
                'code' => 'RW',
                'created_at' => '2024-10-14 17:03:32',
                'updated_at' => '2024-10-14 17:03:32',
            ),
            192 => 
            array (
                'id' => 573,
                'name' => 'Saudi Arabia',
                'code' => 'SA',
                'created_at' => '2024-10-14 17:03:33',
                'updated_at' => '2024-10-14 17:03:33',
            ),
            193 => 
            array (
                'id' => 574,
                'name' => 'Solomon Islands',
                'code' => 'SB',
                'created_at' => '2024-10-14 17:03:33',
                'updated_at' => '2024-10-14 17:03:33',
            ),
            194 => 
            array (
                'id' => 575,
                'name' => 'Seychelles',
                'code' => 'SC',
                'created_at' => '2024-10-14 17:03:33',
                'updated_at' => '2024-10-14 17:03:33',
            ),
            195 => 
            array (
                'id' => 576,
                'name' => 'Sudan',
                'code' => 'SD',
                'created_at' => '2024-10-14 17:03:33',
                'updated_at' => '2024-10-14 17:03:33',
            ),
            196 => 
            array (
                'id' => 577,
                'name' => 'Sweden',
                'code' => 'SE',
                'created_at' => '2024-10-14 17:03:34',
                'updated_at' => '2024-10-14 17:03:34',
            ),
            197 => 
            array (
                'id' => 578,
                'name' => 'Singapore',
                'code' => 'SG',
                'created_at' => '2024-10-14 17:03:34',
                'updated_at' => '2024-10-14 17:03:34',
            ),
            198 => 
            array (
                'id' => 579,
                'name' => 'Saint Helena',
                'code' => 'SH',
                'created_at' => '2024-10-14 17:03:34',
                'updated_at' => '2024-10-14 17:03:34',
            ),
            199 => 
            array (
                'id' => 580,
                'name' => 'Slovenia',
                'code' => 'SI',
                'created_at' => '2024-10-14 17:03:34',
                'updated_at' => '2024-10-14 17:03:34',
            ),
            200 => 
            array (
                'id' => 581,
                'name' => 'Svalbard and Jan Mayen',
                'code' => 'SJ',
                'created_at' => '2024-10-14 17:03:34',
                'updated_at' => '2024-10-14 17:03:34',
            ),
            201 => 
            array (
                'id' => 582,
                'name' => 'Slovakia',
                'code' => 'SK',
                'created_at' => '2024-10-14 17:03:34',
                'updated_at' => '2024-10-14 17:03:34',
            ),
            202 => 
            array (
                'id' => 583,
                'name' => 'Sierra Leone',
                'code' => 'SL',
                'created_at' => '2024-10-14 17:03:35',
                'updated_at' => '2024-10-14 17:03:35',
            ),
            203 => 
            array (
                'id' => 584,
                'name' => 'San Marino',
                'code' => 'SM',
                'created_at' => '2024-10-14 17:03:35',
                'updated_at' => '2024-10-14 17:03:35',
            ),
            204 => 
            array (
                'id' => 585,
                'name' => 'Senegal',
                'code' => 'SN',
                'created_at' => '2024-10-14 17:03:35',
                'updated_at' => '2024-10-14 17:03:35',
            ),
            205 => 
            array (
                'id' => 586,
                'name' => 'Somalia',
                'code' => 'SO',
                'created_at' => '2024-10-14 17:03:35',
                'updated_at' => '2024-10-14 17:03:35',
            ),
            206 => 
            array (
                'id' => 587,
                'name' => 'Suriname',
                'code' => 'SR',
                'created_at' => '2024-10-14 17:03:35',
                'updated_at' => '2024-10-14 17:03:35',
            ),
            207 => 
            array (
                'id' => 588,
                'name' => 'South Sudan',
                'code' => 'SS',
                'created_at' => '2024-10-14 17:03:35',
                'updated_at' => '2024-10-14 17:03:35',
            ),
            208 => 
            array (
                'id' => 589,
                'name' => 'São Tomé and Príncipe',
                'code' => 'ST',
                'created_at' => '2024-10-14 17:03:36',
                'updated_at' => '2024-10-14 17:03:36',
            ),
            209 => 
            array (
                'id' => 590,
                'name' => 'El Salvador',
                'code' => 'SV',
                'created_at' => '2024-10-14 17:03:36',
                'updated_at' => '2024-10-14 17:03:36',
            ),
            210 => 
            array (
                'id' => 591,
                'name' => 'Sint Maarten',
                'code' => 'SX',
                'created_at' => '2024-10-14 17:03:36',
                'updated_at' => '2024-10-14 17:03:36',
            ),
            211 => 
            array (
                'id' => 592,
                'name' => 'Syria',
                'code' => 'SY',
                'created_at' => '2024-10-14 17:03:36',
                'updated_at' => '2024-10-14 17:03:36',
            ),
            212 => 
            array (
                'id' => 593,
                'name' => 'Swaziland',
                'code' => 'SZ',
                'created_at' => '2024-10-14 17:03:36',
                'updated_at' => '2024-10-14 17:03:36',
            ),
            213 => 
            array (
                'id' => 594,
                'name' => 'Turks and Caicos Islands',
                'code' => 'TC',
                'created_at' => '2024-10-14 17:03:36',
                'updated_at' => '2024-10-14 17:03:36',
            ),
            214 => 
            array (
                'id' => 595,
                'name' => 'Chad',
                'code' => 'TD',
                'created_at' => '2024-10-14 17:03:36',
                'updated_at' => '2024-10-14 17:03:36',
            ),
            215 => 
            array (
                'id' => 596,
                'name' => 'French Southern and Antarctic Lands',
                'code' => 'TF',
                'created_at' => '2024-10-14 17:03:37',
                'updated_at' => '2024-10-14 17:03:37',
            ),
            216 => 
            array (
                'id' => 597,
                'name' => 'Togo',
                'code' => 'TG',
                'created_at' => '2024-10-14 17:03:37',
                'updated_at' => '2024-10-14 17:03:37',
            ),
            217 => 
            array (
                'id' => 598,
                'name' => 'Thailand',
                'code' => 'TH',
                'created_at' => '2024-10-14 17:03:37',
                'updated_at' => '2024-10-14 17:03:37',
            ),
            218 => 
            array (
                'id' => 599,
                'name' => 'Tajikistan',
                'code' => 'TJ',
                'created_at' => '2024-10-14 17:03:37',
                'updated_at' => '2024-10-14 17:03:37',
            ),
            219 => 
            array (
                'id' => 600,
                'name' => 'Tokelau',
                'code' => 'TK',
                'created_at' => '2024-10-14 17:03:37',
                'updated_at' => '2024-10-14 17:03:37',
            ),
            220 => 
            array (
                'id' => 601,
                'name' => 'Timor-Leste',
                'code' => 'TL',
                'created_at' => '2024-10-14 17:03:37',
                'updated_at' => '2024-10-14 17:03:37',
            ),
            221 => 
            array (
                'id' => 602,
                'name' => 'Turkmenistan',
                'code' => 'TM',
                'created_at' => '2024-10-14 17:03:38',
                'updated_at' => '2024-10-14 17:03:38',
            ),
            222 => 
            array (
                'id' => 603,
                'name' => 'Tunisia',
                'code' => 'TN',
                'created_at' => '2024-10-14 17:03:38',
                'updated_at' => '2024-10-14 17:03:38',
            ),
            223 => 
            array (
                'id' => 604,
                'name' => 'Tonga',
                'code' => 'TO',
                'created_at' => '2024-10-14 17:03:38',
                'updated_at' => '2024-10-14 17:03:38',
            ),
            224 => 
            array (
                'id' => 605,
                'name' => 'Turkey',
                'code' => 'TR',
                'created_at' => '2024-10-14 17:03:38',
                'updated_at' => '2024-10-14 17:03:38',
            ),
            225 => 
            array (
                'id' => 606,
                'name' => 'Trinidad and Tobago',
                'code' => 'TT',
                'created_at' => '2024-10-14 17:03:38',
                'updated_at' => '2024-10-14 17:03:38',
            ),
            226 => 
            array (
                'id' => 607,
                'name' => 'Tuvalu',
                'code' => 'TV',
                'created_at' => '2024-10-14 17:03:39',
                'updated_at' => '2024-10-14 17:03:39',
            ),
            227 => 
            array (
                'id' => 608,
                'name' => 'Taiwan',
                'code' => 'TW',
                'created_at' => '2024-10-14 17:03:39',
                'updated_at' => '2024-10-14 17:03:39',
            ),
            228 => 
            array (
                'id' => 609,
                'name' => 'Tanzania',
                'code' => 'TZ',
                'created_at' => '2024-10-14 17:03:39',
                'updated_at' => '2024-10-14 17:03:39',
            ),
            229 => 
            array (
                'id' => 610,
                'name' => 'Ukraine',
                'code' => 'UA',
                'created_at' => '2024-10-14 17:03:39',
                'updated_at' => '2024-10-14 17:03:39',
            ),
            230 => 
            array (
                'id' => 611,
                'name' => 'Uganda',
                'code' => 'UG',
                'created_at' => '2024-10-14 17:03:39',
                'updated_at' => '2024-10-14 17:03:39',
            ),
            231 => 
            array (
                'id' => 612,
                'name' => 'United States Minor Outlying Islands',
                'code' => 'UM',
                'created_at' => '2024-10-14 17:03:40',
                'updated_at' => '2024-10-14 17:03:40',
            ),
            232 => 
            array (
                'id' => 613,
                'name' => 'United States',
                'code' => 'US',
                'created_at' => '2024-10-14 17:03:40',
                'updated_at' => '2024-10-14 17:03:40',
            ),
            233 => 
            array (
                'id' => 614,
                'name' => 'Uruguay',
                'code' => 'UY',
                'created_at' => '2024-10-14 17:03:40',
                'updated_at' => '2024-10-14 17:03:40',
            ),
            234 => 
            array (
                'id' => 615,
                'name' => 'Uzbekistan',
                'code' => 'UZ',
                'created_at' => '2024-10-14 17:03:40',
                'updated_at' => '2024-10-14 17:03:40',
            ),
            235 => 
            array (
                'id' => 616,
                'name' => 'Vatican City',
                'code' => 'VA',
                'created_at' => '2024-10-14 17:03:40',
                'updated_at' => '2024-10-14 17:03:40',
            ),
            236 => 
            array (
                'id' => 617,
                'name' => 'Saint Vincent and the Grenadines',
                'code' => 'VC',
                'created_at' => '2024-10-14 17:03:41',
                'updated_at' => '2024-10-14 17:03:41',
            ),
            237 => 
            array (
                'id' => 618,
                'name' => 'Venezuela',
                'code' => 'VE',
                'created_at' => '2024-10-14 17:03:41',
                'updated_at' => '2024-10-14 17:03:41',
            ),
            238 => 
            array (
                'id' => 619,
                'name' => 'British Virgin Islands',
                'code' => 'VG',
                'created_at' => '2024-10-14 17:03:41',
                'updated_at' => '2024-10-14 17:03:41',
            ),
            239 => 
            array (
                'id' => 620,
                'name' => 'United States Virgin Islands',
                'code' => 'VI',
                'created_at' => '2024-10-14 17:03:41',
                'updated_at' => '2024-10-14 17:03:41',
            ),
            240 => 
            array (
                'id' => 621,
                'name' => 'Vietnam',
                'code' => 'VN',
                'created_at' => '2024-10-14 17:03:41',
                'updated_at' => '2024-10-14 17:03:41',
            ),
            241 => 
            array (
                'id' => 622,
                'name' => 'Vanuatu',
                'code' => 'VU',
                'created_at' => '2024-10-14 17:03:42',
                'updated_at' => '2024-10-14 17:03:42',
            ),
            242 => 
            array (
                'id' => 623,
                'name' => 'Wallis and Futuna',
                'code' => 'WF',
                'created_at' => '2024-10-14 17:03:42',
                'updated_at' => '2024-10-14 17:03:42',
            ),
            243 => 
            array (
                'id' => 624,
                'name' => 'Samoa',
                'code' => 'WS',
                'created_at' => '2024-10-14 17:03:42',
                'updated_at' => '2024-10-14 17:03:42',
            ),
            244 => 
            array (
                'id' => 625,
                'name' => 'Kosovo',
                'code' => 'XK',
                'created_at' => '2024-10-14 17:03:42',
                'updated_at' => '2024-10-14 17:03:42',
            ),
            245 => 
            array (
                'id' => 626,
                'name' => 'Yemen',
                'code' => 'YE',
                'created_at' => '2024-10-14 17:03:42',
                'updated_at' => '2024-10-14 17:03:42',
            ),
            246 => 
            array (
                'id' => 627,
                'name' => 'Mayotte',
                'code' => 'YT',
                'created_at' => '2024-10-14 17:03:42',
                'updated_at' => '2024-10-14 17:03:42',
            ),
            247 => 
            array (
                'id' => 628,
                'name' => 'South Africa',
                'code' => 'ZA',
                'created_at' => '2024-10-14 17:03:42',
                'updated_at' => '2024-10-14 17:03:42',
            ),
            248 => 
            array (
                'id' => 629,
                'name' => 'Zambia',
                'code' => 'ZM',
                'created_at' => '2024-10-14 17:03:43',
                'updated_at' => '2024-10-14 17:03:43',
            ),
            249 => 
            array (
                'id' => 630,
                'name' => 'Zimbabwe',
                'code' => 'ZW',
                'created_at' => '2024-10-14 17:03:43',
                'updated_at' => '2024-10-14 17:03:43',
            ),
        ));
        
        
    }
}