<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('courses')->insert([
            [
                'title' => 'Introduction to Laravel',
                'description' => 'Learn the basics of Laravel, including routing, controllers, and views.',
                'image_url' => 'https://example.com/images/laravel-course.jpg',
                'category_id' => 1,
                'user_id' => 1,
                'lessons_count' => 10,
                'level' => 1,
                'duration' => 120,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Advanced Vue.js',
                'description' => 'Master Vue.js with advanced concepts and real-world examples.',
                'image_url' => 'https://example.com/images/vue-course.jpg',
                'category_id' => 2,
                'user_id' => 2,
                'lessons_count' => 15,
                'level' => 2,
                'duration' => 180,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more course entries here
        ]);
    }
}