<?php

namespace Database\Seeders;

use App\Models\CtaSection;
use Illuminate\Database\Seeder;

class CtaSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // First delete any existing records to avoid duplicates
        CtaSection::truncate();

        // Create the CTA section data
        CtaSection::create([
            'title' => 'Let our experts help you.',
            'subtitle' => 'Contact us:',
            'phone_number' => '1800 4250 788',
            'phone_hours' => '(365 days, 9am – 9pm IST)',
            'image_url' => 'cta-default.jpg', // This will be replaced after upload
            'call_button_text' => 'CALL',
            'contact_button_text' => 'CONTACT US',
            'contact_button_link' => '/contactus',
            'background_color' => 'bg-blue-800',
            'text_color' => 'text-white',
            'hover_color' => 'hover:bg-white hover:text-blue-800',
        ]);

        $this->command->info('CTA Section data seeded successfully!');
    }
}