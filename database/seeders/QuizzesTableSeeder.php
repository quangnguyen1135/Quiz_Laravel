<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class QuizzesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('quizzes')->insert([
            [
                'title' => 'Math Basics',
                'description' => 'A quiz on basic mathematics.',
                'created_by' => 1, // Assuming user with ID 1 exists
                'level' => 'Grade 1',
                'play_count' => 10,
                'category_id' => 1, // Assuming category with ID 1 exists
                'correct_answer_rate' => 85.5,
            ],
            [
                'title' => 'World History',
                'description' => 'A quiz on world history.',
                'created_by' => 2, // Assuming user with ID 2 exists
                'level' => 'Grade 10',
                'play_count' => 25,
                'category_id' => 3, // Assuming category with ID 3 exists
                'correct_answer_rate' => 78.2,
            ],
            // Add more quizzes as needed
        ]);
    }
}

