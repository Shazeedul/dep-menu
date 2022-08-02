<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpazilaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('upazilas')->insert([[
            'name' => 'Ajmiriganj',
            'district_id' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Bahubal',
            'district_id' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Baniachong',
            'district_id' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Chunarughat',
            'district_id' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Barlekha',
            'district_id' => '2',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Juri',
            'district_id' => '2',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Kamolganj',
            'district_id' => '2',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Kulaura',
            'district_id' => '2',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Bishwambarpur',
            'district_id' => '3',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Chhatak',
            'district_id' => '3',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Derai',
            'district_id' => '3',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Dharmapasha',
            'district_id' => '3',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Balaganj',
            'district_id' => '4',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Beanibazar',
            'district_id' => '4',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Bishwanath',
            'district_id' => '4',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Companiganj',
            'district_id' => '4',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Dhamrai',
            'district_id' => '5',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Dohar',
            'district_id' => '5',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Keraniganj',
            'district_id' => '5',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Kapasia',
            'district_id' => '6',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Sreepur',
            'district_id' => '6',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Kaliganj',
            'district_id' => '6',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Sakhipur',
            'district_id' => '7',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Basail',
            'district_id' => '7',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Madhupur',
            'district_id' => '7',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Fakirhat',
            'district_id' => '8',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Mollahat',
            'district_id' => '8',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Rampal',
            'district_id' => '8',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Abhaynagar',
            'district_id' => '9',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Bagherpara',
            'district_id' => '9',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Chaugachha',
            'district_id' => '9',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Assasuni',
            'district_id' => '10',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Debhata',
            'district_id' => '10',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],
        [
            'name' => 'Tala',
            'district_id' => '10',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ],]);
    }
}
