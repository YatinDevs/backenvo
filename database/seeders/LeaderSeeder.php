<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Leader;

class LeaderSeeder extends Seeder
{
    public function run()
    {
        Leader::create([
            'name' => 'Punam Jagdish Marathe',
            'title' => 'Director',
            'icon' => 'crown',
            'image_url' => 'leaders/user1.jpg',
            'description' => 'Punam leads Suviam with strategic vision, ensuring long-term growth and innovation.',
        ]);
    }
}