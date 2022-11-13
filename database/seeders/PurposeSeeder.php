<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Purpose;

class PurposeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Purpose::create(
            ['purpose_type'     => 'Skripsi']
        );
        Purpose::create(
            ['purpose_type'     => 'Tesis']
        );
        Purpose::create(
            ['purpose_type'     => 'Disertasi']
        );
        Purpose::create(
            ['purpose_type'     => 'Penelitian']
        );
        Purpose::create(
            ['purpose_type'     => 'Umum (lain-lain)']
        );
    }
}
