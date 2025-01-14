<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'Portfolio Website',
            'image' => 'portfolio.png', // Path to the image
            'tech_stack' => 'Laravel, Tailwind CSS',
            'description' => 'A personal portfolio showcasing my skills and projects.',
            'live_demo_url' => 'https://example.com',
            'github_url' => 'https://github.com/username/portfolio',
        ]);

        Project::create([
            'title' => 'E-Commerce App',
            'image' => 'ecommerce.png',
            'tech_stack' => 'Node.js, Express, MongoDB',
            'description' => 'A fully functional e-commerce application with payment integration.',
            'live_demo_url' => 'https://example-ecommerce.com',
            'github_url' => 'https://github.com/username/ecommerce',
        ]);
    }
}
