<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->insert([[
            'name' => 'Habigonj',
            'division_id' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Moulvibazar',
            'division_id' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Sunamganj',
            'division_id' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Sylhet',
            'division_id' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Dhaka',
            'division_id' => '2',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Gazipur',
            'division_id' => '2',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Tangail',
            'division_id' => '2',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Bagerhat',
            'division_id' => '3',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Jashor',
            'division_id' => '3',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Satkhira',
            'division_id' => '3',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]]);
    }
}
