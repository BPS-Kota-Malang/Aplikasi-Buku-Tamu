<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::create(
            ['job_type'     => 'ASN']
        );
        Job::create(
            ['job_type'     => 'Pelajar']
        );
        Job::create(
            ['job_type'     => 'Dosen/Guru']
        );
        Job::create(
            ['job_type'     => 'Peneliti']
        );
        Job::create(
            ['job_type'     => 'Umum (lain-lain)']
        );
    }
}
