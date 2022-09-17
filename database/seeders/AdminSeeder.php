<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'Wahyu Fajar Robyansyah',
            'email'    => 'wahyufajar3110@gmail.com',
            'role'     => 'Super Admin',
            'password' => bcrypt('goesfa3110'),
        ]);

        User::create([
            'name'     => 'Darman Saragi',
            'email'    => 'darman123@gmail.com',
            'role'     => 'Super Admin',
            'password' => bcrypt('admin1234'),
        ]);
        User::create([
            'name'     => 'Rara',
            'email'    => 'rara22@gmail.com',
            'role'     => 'Super Admin',
            'password' => bcrypt('paskibra'),

            'name'     => 'wildan',
            'email'    => 'wildan123@gmail.com',
            'role'     => 'Super Admin',
            'password' => bcrypt('admin1234'),

            'name'     => 'orin',
            'email'    => 'orin123@gmail.com',
            'role'     => 'Super Admin',
            'password' => bcrypt('admin1234'),
        ]);
    }
}
