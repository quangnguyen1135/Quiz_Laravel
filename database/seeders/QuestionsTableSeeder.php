<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('questions')->insert([
            [
                'quiz_id' => 3, // Assuming quiz with ID 1 exists
                'question_text' => 'What is 2 + 2?',
                'question_type' => 'multiple-choice',
            ],
            [
                'quiz_id' => 3, // Assuming quiz with ID 1 exists
                'question_text' => 'What is the capital of France?',
                'question_type' => 'multiple-choice',
            ],
            [
                'quiz_id' => 4, // Assuming quiz with ID 2 exists
                'question_text' => 'Who was the first president of the United States?',
                'question_type' => 'multiple-choice',
            ],
            [
                'quiz_id' => 1, // Assuming quiz with ID 1 exists
                'question_text' => 'The Earth is flat.',
                'question_type' => 'true-false',
                'correct_answer' => false, // The correct answer is false
            ],
            [
                'quiz_id' => 2, // Assuming quiz with ID 2 exists
                'question_text' => 'Water boils at 100 degrees Celsius.',
                'question_type' => 'true-false',
                'correct_answer' => true, // The correct answer is true
            ],
        ]);
    }
}
