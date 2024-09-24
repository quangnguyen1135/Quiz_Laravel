<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Mathematics'],
            ['name' => 'Science'],
            ['name' => 'History'],
            ['name' => 'Geography'],
            ['name' => 'Literature'],
            // Add more categories as needed
        ]);
    }
}

