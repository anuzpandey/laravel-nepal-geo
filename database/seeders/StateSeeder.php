<?php

declare(strict_types=1);

namespace AnuzPandey\LaravelNepalGeo\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('provinces')->insert([
            [
                'id' => 1,
                'name' => 'Province No. 1',
                'name_np' => 'प्रदेश नं. १',

                'created_at' => '2019-09-27 11:31:20',
                'updated_at' => '2019-10-07 05:18:23',
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'name' => 'Madhesh Pradesh (Province No. 2)',
                'name_np' => 'मधेश प्रदेश (प्रदेश नं. २)',

                'created_at' => '2019-09-27 11:31:22',
                'updated_at' => '2019-10-07 05:19:47',
                'deleted_at' => null,
            ],
            [
                'id' => 3,
                'name' => 'Bagmati (Province No. 3)',
                'name_np' => 'बागमती (प्रदेश नं. ३)',

                'created_at' => '2019-09-27 11:31:23',
                'updated_at' => '2020-11-05 00:07:22',
                'deleted_at' => null,
            ],
            [
                'id' => 4,
                'name' => 'Gandaki (Province No. 4)',
                'name_np' => 'गण्डकी (प्रदेश नं. ४)',

                'created_at' => '2019-09-27 11:31:24',
                'updated_at' => '2019-04-04 03:54:10',
                'deleted_at' => null,
            ],
            [
                'id' => 5,
                'name' => 'Lumbini (Province No. 5)',
                'name_np' => 'लुम्बिनी (प्रदेश नं. ५)',

                'created_at' => '2019-09-27 11:31:25',
                'updated_at' => '2019-10-07 05:20:24',
                'deleted_at' => null,
            ],
            [
                'id' => 6,
                'name' => 'Karnali (Province No. 6)',
                'name_np' => 'कर्णाली (प्रदेश नं. ६)',

                'created_at' => '2019-09-27 11:31:26',
                'updated_at' => '2019-04-04 03:55:09',
                'deleted_at' => null,
            ],
            [
                'id' => 7,
                'name' => 'Sudurpashchim (Province No. 7)',
                'name_np' => 'सुदुरपस्चिम (प्रदेश नं. ७)',

                'created_at' => '2019-09-27 11:31:27',
                'updated_at' => '2019-04-04 15:20:46',
                'deleted_at' => null,
            ],
        ]);
    }
}
