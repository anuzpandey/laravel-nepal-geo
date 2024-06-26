<?php

declare(strict_types=1);

namespace AnuzPandey\LaravelNepalGeo\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('districts')->insert([
            0 => [
                'id' => 1,
                'name' => 'Bhojpur',
                'name_np' => 'भोजपुर',

                'state_id' => 1,
                'created_at' => '2019-09-27 11:31:20',
                'updated_at' => '2019-10-07 05:24:29',
            ],
            1 => [
                'id' => 2,
                'name' => 'Dhankuta',
                'name_np' => 'धनकुटा',

                'state_id' => 1,
                'created_at' => '2019-09-27 11:31:20',
                'updated_at' => '2019-10-07 05:25:24',
            ],
            2 => [
                'id' => 3,
                'name' => 'Ilam',
                'name_np' => 'ईलाम',

                'state_id' => 1,
                'created_at' => '2019-09-27 11:31:20',
                'updated_at' => '2019-10-07 05:25:35',
            ],
            3 => [
                'id' => 4,
                'name' => 'Jhapa',
                'name_np' => 'झापा',

                'state_id' => 1,
                'created_at' => '2019-09-27 11:31:21',
                'updated_at' => '2019-10-07 05:26:06',
            ],
            4 => [
                'id' => 5,
                'name' => 'Khotang',
                'name_np' => 'खोटाङ',

                'state_id' => 1,
                'created_at' => '2019-09-27 11:31:21',
                'updated_at' => '2019-10-07 05:26:52',
            ],
            5 => [
                'id' => 6,
                'name' => 'Morang',
                'name_np' => 'मोरङ',

                'state_id' => 1,
                'created_at' => '2019-09-27 11:31:21',
                'updated_at' => '2019-10-07 05:27:22',
            ],
            6 => [
                'id' => 7,
                'name' => 'Okhaldhunga',
                'name_np' => 'ओखलढुंगा',

                'state_id' => 1,
                'created_at' => '2019-09-27 11:31:21',
                'updated_at' => '2019-10-07 05:27:40',
            ],
            7 => [
                'id' => 8,
                'name' => 'Panchthar',
                'name_np' => 'पाँचथर',

                'state_id' => 1,
                'created_at' => '2019-09-27 11:31:21',
                'updated_at' => '2019-10-07 05:27:55',
            ],
            8 => [
                'id' => 9,
                'name' => 'Sankhuwasabha',
                'name_np' => 'संखुवासभा',

                'state_id' => 1,
                'created_at' => '2019-09-27 11:31:21',
                'updated_at' => '2019-10-07 05:29:58',
            ],
            9 => [
                'id' => 10,
                'name' => 'Solukhumbu',
                'name_np' => 'सोलुखुम्बु',

                'state_id' => 1,
                'created_at' => '2019-09-27 11:31:21',
                'updated_at' => '2019-10-07 05:28:06',
            ],
            10 => [
                'id' => 11,
                'name' => 'Sunsari',
                'name_np' => 'सुनसरी',

                'state_id' => 1,
                'created_at' => '2019-09-27 11:31:21',
                'updated_at' => '2019-10-07 05:30:11',
            ],
            11 => [
                'id' => 12,
                'name' => 'Taplejung',
                'name_np' => 'ताप्लेजुङ',

                'state_id' => 1,
                'created_at' => '2019-09-27 11:31:21',
                'updated_at' => '2019-10-07 05:30:27',
            ],
            12 => [
                'id' => 13,
                'name' => 'Terhathum',
                'name_np' => 'तेह्रथुम',

                'state_id' => 1,
                'created_at' => '2019-09-27 11:31:21',
                'updated_at' => '2019-10-07 05:30:44',
            ],
            13 => [
                'id' => 14,
                'name' => 'Udayapur',
                'name_np' => 'उदयपुर',

                'state_id' => 1,
                'created_at' => '2019-09-27 11:31:22',
                'updated_at' => '2019-10-07 05:31:16',
            ],
            14 => [
                'id' => 15,
                'name' => 'Bara',
                'name_np' => 'बारा',

                'state_id' => 2,
                'created_at' => '2019-09-27 11:31:22',
                'updated_at' => '2019-10-07 05:31:28',
            ],
            15 => [
                'id' => 16,
                'name' => 'Dhanusa',
                'name_np' => 'धनुषा',

                'state_id' => 2,
                'created_at' => '2019-09-27 11:31:22',
                'updated_at' => '2019-10-07 05:32:28',
            ],
            16 => [
                'id' => 17,
                'name' => 'Mahottari',
                'name_np' => 'महोत्तरी',

                'state_id' => 2,
                'created_at' => '2019-09-27 11:31:22',
                'updated_at' => '2019-10-07 05:32:41',
            ],
            17 => [
                'id' => 18,
                'name' => 'Parsa',
                'name_np' => 'पर्सा',

                'state_id' => 2,
                'created_at' => '2019-09-27 11:31:22',
                'updated_at' => '2019-10-07 05:33:01',
            ],
            18 => [
                'id' => 19,
                'name' => 'Rautahat',
                'name_np' => 'रौतहट',

                'state_id' => 2,
                'created_at' => '2019-09-27 11:31:22',
                'updated_at' => '2019-10-07 05:33:19',
            ],
            19 => [
                'id' => 20,
                'name' => 'Saptari',
                'name_np' => 'सप्तरी',

                'state_id' => 2,
                'created_at' => '2019-09-27 11:31:22',
                'updated_at' => '2019-10-07 05:33:32',
            ],
            20 => [
                'id' => 21,
                'name' => 'Sarlahi',
                'name_np' => 'सर्लाही',

                'state_id' => 2,
                'created_at' => '2019-09-27 11:31:22',
                'updated_at' => '2019-10-07 05:33:46',
            ],
            21 => [
                'id' => 22,
                'name' => 'Siraha',
                'name_np' => 'सिराहा',

                'state_id' => 2,
                'created_at' => '2019-09-27 11:31:23',
                'updated_at' => '2019-10-07 05:34:00',
            ],
            22 => [
                'id' => 23,
                'name' => 'Bhaktapur',
                'name_np' => 'भक्तपुर',

                'state_id' => 3,
                'created_at' => '2019-09-27 11:31:23',
                'updated_at' => '2019-10-07 05:34:30',
            ],
            23 => [
                'id' => 24,
                'name' => 'Chitwan',
                'name_np' => 'चितवन',

                'state_id' => 3,
                'created_at' => '2019-09-27 11:31:23',
                'updated_at' => '2019-10-07 05:34:40',
            ],
            24 => [
                'id' => 25,
                'name' => 'Dhading',
                'name_np' => 'धादिङ',

                'state_id' => 3,
                'created_at' => '2019-09-27 11:31:23',
                'updated_at' => '2019-10-07 05:34:53',
            ],
            25 => [
                'id' => 26,
                'name' => 'Dholkha',
                'name_np' => 'दोलखा',

                'state_id' => 3,
                'created_at' => '2019-09-27 11:31:23',
                'updated_at' => '2019-10-07 05:35:06',
            ],
            26 => [
                'id' => 27,
                'name' => 'Kathmandu',
                'name_np' => 'काठमाडौं',

                'state_id' => 3,
                'created_at' => '2019-09-27 11:31:23',
                'updated_at' => '2019-10-07 05:35:19',
            ],
            27 => [
                'id' => 28,
                'name' => 'Kavrepalanchok',
                'name_np' => 'काभ्रेपलाञ्चोक',

                'state_id' => 3,
                'created_at' => '2019-09-27 11:31:23',
                'updated_at' => '2019-10-07 05:35:47',
            ],
            28 => [
                'id' => 29,
                'name' => 'Lalitpur',
                'name_np' => 'ललितपुर',

                'state_id' => 3,
                'created_at' => '2019-09-27 11:31:23',
                'updated_at' => '2019-10-07 05:35:58',
            ],
            29 => [
                'id' => 30,
                'name' => 'Makwanpur',
                'name_np' => 'मकवानपुर',

                'state_id' => 3,
                'created_at' => '2019-09-27 11:31:24',
                'updated_at' => '2019-10-07 05:36:09',
            ],
            30 => [
                'id' => 31,
                'name' => 'Nuwakot',
                'name_np' => 'नुवाकोट',

                'state_id' => 3,
                'created_at' => '2019-09-27 11:31:24',
                'updated_at' => '2019-10-07 05:39:01',
            ],
            31 => [
                'id' => 32,
                'name' => 'Ramechhap',
                'name_np' => 'रामेछाप',

                'state_id' => 3,
                'created_at' => '2019-09-27 11:31:24',
                'updated_at' => '2019-10-07 05:39:12',
            ],
            32 => [
                'id' => 33,
                'name' => 'Rasuwa',
                'name_np' => 'रसुवा',

                'state_id' => 3,
                'created_at' => '2019-09-27 11:31:24',
                'updated_at' => '2019-10-07 05:39:30',
            ],
            33 => [
                'id' => 34,
                'name' => 'Sindhuli',
                'name_np' => 'सिन्धुली',

                'state_id' => 3,
                'created_at' => '2019-09-27 11:31:24',
                'updated_at' => '2019-10-07 05:39:47',
            ],
            34 => [
                'id' => 35,
                'name' => 'Sindhupalchok',
                'name_np' => 'सिन्धुपाल्चोक',

                'state_id' => 3,
                'created_at' => '2019-09-27 11:31:24',
                'updated_at' => '2019-10-07 05:40:01',
            ],
            35 => [
                'id' => 36,
                'name' => 'Baglung',
                'name_np' => 'बाग्लुङ',

                'state_id' => 4,
                'created_at' => '2019-09-27 11:31:24',
                'updated_at' => '2019-10-07 05:40:14',
            ],
            36 => [
                'id' => 37,
                'name' => 'Gorkha',
                'name_np' => 'गोरखा',

                'state_id' => 4,
                'created_at' => '2019-09-27 11:31:24',
                'updated_at' => '2019-10-07 05:40:30',
            ],
            37 => [
                'id' => 38,
                'name' => 'Kaski',
                'name_np' => 'कास्की',

                'state_id' => 4,
                'created_at' => '2019-09-27 11:31:24',
                'updated_at' => '2019-10-07 05:40:42',
            ],
            38 => [
                'id' => 39,
                'name' => 'Lamjung',
                'name_np' => 'लमजुङ',

                'state_id' => 4,
                'created_at' => '2019-09-27 11:31:24',
                'updated_at' => '2019-10-07 05:40:57',
            ],
            39 => [
                'id' => 40,
                'name' => 'Manang',
                'name_np' => 'मनाङ',

                'state_id' => 4,
                'created_at' => '2019-09-27 11:31:24',
                'updated_at' => '2019-10-07 05:41:54',
            ],
            40 => [
                'id' => 41,
                'name' => 'Mustang',
                'name_np' => 'मुस्ताङ',

                'state_id' => 4,
                'created_at' => '2019-09-27 11:31:24',
                'updated_at' => '2019-10-07 05:42:07',
            ],
            41 => [
                'id' => 42,
                'name' => 'Myagdi',
                'name_np' => 'म्याग्दी',

                'state_id' => 4,
                'created_at' => '2019-09-27 11:31:25',
                'updated_at' => '2019-10-07 05:42:23',
            ],
            42 => [
                'id' => 43,
                'name' => 'Nawalpur',
                'name_np' => 'नवलपुर',

                'state_id' => 4,
                'created_at' => '2019-09-27 11:31:25',
                'updated_at' => '2019-10-07 10:03:52',
            ],
            43 => [
                'id' => 44,
                'name' => 'Parbat',
                'name_np' => 'पर्बत',

                'state_id' => 4,
                'created_at' => '2019-09-27 11:31:25',
                'updated_at' => '2019-10-07 05:42:59',
            ],
            44 => [
                'id' => 45,
                'name' => 'Syangja',
                'name_np' => 'स्याङ्जा',

                'state_id' => 4,
                'created_at' => '2019-09-27 11:31:25',
                'updated_at' => '2019-10-07 05:43:10',
            ],
            45 => [
                'id' => 46,
                'name' => 'Tanahu',
                'name_np' => 'तनहुँ',

                'state_id' => 4,
                'created_at' => '2019-09-27 11:31:25',
                'updated_at' => '2019-10-07 05:43:25',
            ],
            46 => [
                'id' => 47,
                'name' => 'Arghakhanchi',
                'name_np' => 'अर्घाखाँची',

                'state_id' => 5,
                'created_at' => '2019-09-27 11:31:25',
                'updated_at' => '2019-10-07 05:45:09',
            ],
            47 => [
                'id' => 48,
                'name' => 'Banke',
                'name_np' => 'बाँके',

                'state_id' => 5,
                'created_at' => '2019-09-27 11:31:25',
                'updated_at' => '2019-10-07 05:49:23',
            ],
            48 => [
                'id' => 49,
                'name' => 'Bardiya',
                'name_np' => 'बर्दिया',

                'state_id' => 5,
                'created_at' => '2019-09-27 11:31:25',
                'updated_at' => '2019-10-07 05:49:35',
            ],
            49 => [
                'id' => 50,
                'name' => 'Dang Deukhuri',
                'name_np' => 'दाङ',

                'state_id' => 5,
                'created_at' => '2019-09-27 11:31:25',
                'updated_at' => '2019-10-07 05:49:54',
            ],
            50 => [
                'id' => 51,
                'name' => 'Gulmi',
                'name_np' => 'गुल्मी',

                'state_id' => 5,
                'created_at' => '2019-09-27 11:31:25',
                'updated_at' => '2019-10-07 05:50:05',
            ],
            51 => [
                'id' => 52,
                'name' => 'Kapilvastu',
                'name_np' => 'कपिलवस्तु',

                'state_id' => 5,
                'created_at' => '2019-09-27 11:31:26',
                'updated_at' => '2019-10-07 05:51:39',
            ],
            52 => [
                'id' => 53,
                'name' => 'Nawalparasi',
                'name_np' => 'नवलपरासी',

                'state_id' => 5,
                'created_at' => '2019-09-27 11:31:26',
                'updated_at' => '2019-10-07 05:51:50',
            ],
            53 => [
                'id' => 54,
                'name' => 'Palpa',
                'name_np' => 'पाल्पा',

                'state_id' => 5,
                'created_at' => '2019-09-27 11:31:26',
                'updated_at' => '2019-10-07 05:52:03',
            ],
            54 => [
                'id' => 55,
                'name' => 'Pyuthan',
                'name_np' => 'प्यूठान',

                'state_id' => 5,
                'created_at' => '2019-09-27 11:31:26',
                'updated_at' => '2019-10-07 05:52:16',
            ],
            55 => [
                'id' => 56,
                'name' => 'Rolpa',
                'name_np' => 'रोल्पा',

                'state_id' => 5,
                'created_at' => '2019-09-27 11:31:26',
                'updated_at' => '2019-10-07 05:52:30',
            ],
            56 => [
                'id' => 57,
                'name' => 'Rukum',
                'name_np' => 'रुकुम',

                'state_id' => 5,
                'created_at' => '2019-09-27 11:31:26',
                'updated_at' => '2019-10-07 05:52:38',
            ],
            57 => [
                'id' => 58,
                'name' => 'Rupandehi',
                'name_np' => 'रुपन्देही',

                'state_id' => 5,
                'created_at' => '2019-09-27 11:31:26',
                'updated_at' => '2019-10-07 05:52:50',
            ],
            58 => [
                'id' => 59,
                'name' => 'Dailekh',
                'name_np' => 'दैलेख',

                'state_id' => 6,
                'created_at' => '2019-09-27 11:31:26',
                'updated_at' => '2019-10-07 05:54:58',
            ],
            59 => [
                'id' => 60,
                'name' => 'Dolpa',
                'name_np' => 'डोल्पा',

                'state_id' => 6,
                'created_at' => '2019-09-27 11:31:27',
                'updated_at' => '2019-10-07 05:55:43',
            ],
            60 => [
                'id' => 61,
                'name' => 'Humla',
                'name_np' => 'हुम्ला',

                'state_id' => 6,
                'created_at' => '2019-09-27 11:31:27',
                'updated_at' => '2019-10-07 05:55:58',
            ],
            61 => [
                'id' => 62,
                'name' => 'Jajarkot',
                'name_np' => 'जाजरकोट',

                'state_id' => 6,
                'created_at' => '2019-09-27 11:31:27',
                'updated_at' => '2019-10-07 05:56:43',
            ],
            62 => [
                'id' => 63,
                'name' => 'Jumla',
                'name_np' => 'जुम्ला',

                'state_id' => 6,
                'created_at' => '2019-09-27 11:31:27',
                'updated_at' => '2019-10-07 05:56:59',
            ],
            63 => [
                'id' => 64,
                'name' => 'Kalikot',
                'name_np' => 'कालिकोट',

                'state_id' => 6,
                'created_at' => '2019-09-27 11:31:27',
                'updated_at' => '2019-10-07 05:57:10',
            ],
            64 => [
                'id' => 65,
                'name' => 'Mugu',
                'name_np' => 'मुगु',

                'state_id' => 6,
                'created_at' => '2019-09-27 11:31:27',
                'updated_at' => '2019-10-07 05:57:20',
            ],
            65 => [
                'id' => 67,
                'name' => 'Salyan',
                'name_np' => 'सल्यान',

                'state_id' => 6,
                'created_at' => '2019-09-27 11:31:27',
                'updated_at' => '2019-10-07 05:59:02',
            ],
            66 => [
                'id' => 68,
                'name' => 'Surkhet',
                'name_np' => 'सुर्खेत',

                'state_id' => 6,
                'created_at' => '2019-09-27 11:31:27',
                'updated_at' => '2019-10-07 05:59:10',
            ],
            67 => [
                'id' => 69,
                'name' => 'Achham',
                'name_np' => 'अछाम',

                'state_id' => 7,
                'created_at' => '2019-09-27 11:31:27',
                'updated_at' => '2019-10-07 06:00:47',
            ],
            68 => [
                'id' => 70,
                'name' => 'Baitadi',
                'name_np' => 'बैतडी',

                'state_id' => 7,
                'created_at' => '2019-09-27 11:31:27',
                'updated_at' => '2019-10-07 06:01:02',
            ],
            69 => [
                'id' => 71,
                'name' => 'Bajhang',
                'name_np' => 'बझाङ',

                'state_id' => 7,
                'created_at' => '2019-09-27 11:31:28',
                'updated_at' => '2019-10-07 06:01:19',
            ],
            70 => [
                'id' => 72,
                'name' => 'Bajura',
                'name_np' => 'बाजुरा',

                'state_id' => 7,
                'created_at' => '2019-09-27 11:31:28',
                'updated_at' => '2019-10-07 06:01:31',
            ],
            71 => [
                'id' => 74,
                'name' => 'Darchula',
                'name_np' => 'दार्चुला',

                'state_id' => 7,
                'created_at' => '2019-09-27 11:31:28',
                'updated_at' => '2019-10-07 06:03:59',
            ],
            72 => [
                'id' => 75,
                'name' => 'Doti',
                'name_np' => 'डोटी',

                'state_id' => 7,
                'created_at' => '2019-09-27 11:31:28',
                'updated_at' => '2019-10-07 06:04:11',
            ],
            73 => [
                'id' => 76,
                'name' => 'Kailali',
                'name_np' => 'कैलाली',

                'state_id' => 7,
                'created_at' => '2019-09-27 11:31:28',
                'updated_at' => '2019-10-11 05:42:18',
            ],
            74 => [
                'id' => 77,
                'name' => 'Kanchanpur',
                'name_np' => 'कंचनपुर',

                'state_id' => 7,
                'created_at' => '2019-09-27 11:31:28',
                'updated_at' => '2019-10-11 05:42:27',
            ],
            75 => [
                'id' => 79,
                'name' => 'Dadeldhura',
                'name_np' => 'डडेलधुरा',

                'state_id' => 7,
                'created_at' => '2019-10-11 05:57:22',
                'updated_at' => '2019-10-11 05:57:22',
            ],
            76 => [
                'id' => 80,
                'name' => 'Rukum ( Pashchim)',
                'name_np' => 'रुकुम ( पश्चिम )',

                'state_id' => 6,
                'created_at' => '2019-10-11 06:55:02',
                'updated_at' => '2019-12-26 20:44:29',
            ],
            77 => [
                'id' => 84,
                'name' => 'Nawalpur',
                'name_np' => 'नवलपुर',

                'state_id' => 5,
                'created_at' => '2019-04-04 16:10:36',
                'updated_at' => '2019-04-04 16:10:36',
            ],
            78 => [
                'id' => 85,
                'name' => 'Parasi',
                'name_np' => 'परासी',

                'state_id' => 5,
                'created_at' => '2019-04-04 16:11:15',
                'updated_at' => '2019-04-04 16:11:15',
            ],
        ]);
    }
}
