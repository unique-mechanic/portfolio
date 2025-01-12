<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BlogPost;
class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogPost::create([
            'title' => 'Introduction to Laravel',
            'slug' => 'introduction-to-laravel',
            'content' => 'Laravel is a powerful web application framework...',
            'image' => 'https://via.placeholder.com/800x400',
            'tags' => 'Laravel,PHP,Framework'
        ]);
    }
}
