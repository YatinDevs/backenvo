<?php

namespace Database\Seeders;
use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
        Testimonial::create([
            'customer_name' => 'Government Project Engineer',
            'image_url' => 'https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=1160&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'rating' => 4.5,
            'feedback' => 'Suviam Infra has been a reliable partner in our irrigation projects. Their RCC pipes are of exceptional quality, and their team ensures timely project execution.',
        ]);

        Testimonial::create([
            'customer_name' => 'Infrastructure Developer',
            'image_url' => 'https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=1160&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'rating' => 4.5,
            'feedback' => 'The attention to detail and the quality of the product exceeded my expectations. Highly recommended!',
        ]);

    }
}
