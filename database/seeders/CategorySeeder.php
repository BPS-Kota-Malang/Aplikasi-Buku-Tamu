<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubCategory;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(
            ['categories_type'     => 'Sosial dan Kependudukan']
        );
        Category::create(
            ['categories_type'     => 'Ekonomi dan Perdagangan']
        );
        Category::create(
            ['categories_type'     => 'Pertanian dan Pertambangan']
        );
        Category::create(
            ['categories_type'     => 'Umum (lain-lain)']
        );
    }
}