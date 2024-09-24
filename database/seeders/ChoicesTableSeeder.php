<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChoicesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('choices')->insert([
            [
                'question_id' => 13, // Assuming question with ID 1 exists
                'choice_text' => '4',
                'is_correct' => true,
            ],
            [
                'question_id' => 13, // Assuming question with ID 1 exists
                'choice_text' => '5',
                'is_correct' => false,
            ],
            [
                'question_id' => 13, // Assuming question with ID 2 exists
                'choice_text' => '7',
                'is_correct' => false,
            ],
            [
                'question_id' => 13, // Assuming question with ID 2 exists
                'choice_text' => '9',
                'is_correct' => false,
            ],
            [
                'question_id' => 14, // Assuming question with ID 2 exists
                'choice_text' => 'quang',
                'is_correct' => true,
            ],
            [
                'question_id' => 14, // Assuming question with ID 2 exists
                'choice_text' => 'pro',
                'is_correct' => false,
            ],
            [
                'question_id' => 14, // Assuming question with ID 2 exists
                'choice_text' => 'vip',
                'is_correct' => false,
            ],
            [
                'question_id' => 14, // Assuming question with ID 2 exists
                'choice_text' => 'ye yeh',
                'is_correct' => false,
            ],
            // Add more choices as needed
        ]);
    }
}
