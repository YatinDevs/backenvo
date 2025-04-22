<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ServiceHeroSection;

class ServiceHeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
        ServiceHeroSection::insert([
            [
                'title' => 'Engineering Excellence in Every Project',
                'image_url' => 'service_hero/slide1.jpg',
                'description' => 'We provide world-class engineering solutions for sustainable infrastructure and development.',
                'brochure_url' => 'brochures/Envocare_Service_Brochure.pdf',
            ],
            [
                'title' => 'Innovative Environmental Services',
                'image_url' => 'service_hero/slide2.jpg',
                'description' => 'Revolutionizing environmental consultancy with cutting-edge solutions for a greener planet.',
                'brochure_url' => 'brochures/Envocare_Service_Brochure.pdf',
            ],
            [
                'title' => 'Sustainable Water & Energy Solutions',
                'image_url' => 'service_hero/slide3.jpg',
                'description' => 'Offering advanced water treatment and renewable energy strategies for a better tomorrow.',
                'brochure_url' => 'brochures/Envocare_Service_Brochure.pdf',
            ],
        ]);
    }
}
