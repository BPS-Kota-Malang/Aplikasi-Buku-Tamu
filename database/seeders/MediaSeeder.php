<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Media;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Media::create(
            ['media_type'     => 'WhatsApp']
        );
        Media::create(
            ['media_type'     => 'Email']
        );
        Media::create(
            ['media_type'     => 'Facebook']
        );
        Media::create(
            ['media_type'     => 'Instagram']
        );
        Media::create(
            ['media_type'     => 'Layanan PST']
        );
    }
}
