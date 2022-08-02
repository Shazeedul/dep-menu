<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate(['email'=>'test001@example.com'],
        [
            'name' => 'Syed Shazeedul',
            'email' => 'syedshazeedul@gmail.com',
            'password' => bcrypt('123456789'),
            'role' => '1',
        ]);
    }
}
