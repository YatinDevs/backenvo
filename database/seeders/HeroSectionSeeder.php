<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HeroSection;

class HeroSectionSeeder extends Seeder
{
    public function run()
    {
        HeroSection::insert([
            [
                'title' => 'Innovating a Sustainable Future',
                'image_url' => 'hero/slide1.jpg',
                'description' => 'Creating eco-friendly solutions for wastewater management and sustainable infrastructure.',
            ],
            [
                'title' => 'Revolutionizing Engineering & Environment',
                'image_url' => 'hero/slide2.jpg',
                'description' => 'Leading the way in green industry innovations and environmental sustainability.',
            ],
            [
                'title' => 'Committed to Green Energy Solutions',
                'image_url' => 'hero/slide3.jpg',
                'description' => 'Advancing renewable energy and resource efficiency for a cleaner world.',
            ],
        ]);
    }
}