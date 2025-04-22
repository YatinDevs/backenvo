<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BlogHeroSection;

class BlogHeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        BlogHeroSection::insert([
            [
                'title' => 'Stay Updated with the Latest Insights',
                'image_url' => 'blog_hero/slide1.jpg',
                'description' => 'Explore expert opinions, industry trends, and thought-provoking articles from our team.',
            ],
            [
                'title' => 'Discover New Ideas & Innovations',
                'image_url' => 'blog_hero/slide2.jpg',
                'description' => 'Dive deep into our knowledge base and enrich your understanding with our well-researched blogs.',
            ],
            [
                'title' => 'Expand Your Horizons with Expert Content',
                'image_url' => 'blog_hero/slide3.jpg',
                'description' => 'Our writers bring you the latest in technology, business, and sustainability.',
            ],
        ]);
    }
}
