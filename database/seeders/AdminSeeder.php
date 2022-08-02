<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    Admin::create([
        'name'     => 'Administrator',
        'email'    => 'admin@localhost.com',
        'role'    => 'admin',
        'password' => bcrypt('password'),
    ]);

    Admin::create([
        'name'     => 'Editor',
        'email'    => 'editor@localhost.com',
        'role'    => 'editor',
        'password' => bcrypt('password'),
    ]);

    Admin::create([
        'name'     => 'Operator',
        'email'    => 'operator@localhost.com',
        'role'    => 'operator',
        'password' => bcrypt('password'),
    ]);
}
}
