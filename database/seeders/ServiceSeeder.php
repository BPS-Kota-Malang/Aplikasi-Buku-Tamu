<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create(
            ['service_type'     => 'Permintaan Data']
        );
        Service::create(
            ['service_type'     => 'Konsultasi Data']
        );
        Service::create(
            ['service_type'     => 'Rekomendasi Data Sektoral']
        );
        Service::create(
            ['service_type'     => 'Umum (lain-lain)']
        );
    }
}
