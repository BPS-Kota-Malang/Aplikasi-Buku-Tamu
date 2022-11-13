<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
{
    $this->call([
        AdminSeeder::class,
        PurposeSeeder::class,
        ServiceSeeder::class,
        MediaSeeder::class,
        JobSeeder::class,
        EducationSeeder::class,
        CategorySeeder::class,
        SubCategorySeeder::class
    ]);
    }
}