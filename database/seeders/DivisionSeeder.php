<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->insert([[
            'name' => 'Sylhet',
            'sortname' => 'SYL',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Dhaka',
            'sortname' => 'DHK',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Khulna',
            'sortname' => 'KHL',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]]);
    }
}
