<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Education;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Education::create(
            ['education_type'     => 'SMP/Dibawahnya']
        );
        Education::create(
            ['education_type'     => 'SMA']
        );
        Education::create(
            ['education_type'     => 'Diploma (D1/D2/D3)']
        );
        Education::create(
            ['education_type'     => 'Sarjana (D4/S1)']
        );
        Education::create(
            ['education_type'     => 'Magister (S2)']
        );
        Education::create(
            ['education_type'     => 'Doktor (S3)']
        );
    }
}
