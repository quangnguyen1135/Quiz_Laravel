<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Giả sử bạn đã có dữ liệu trong bảng `courses`
        $courses = DB::table('courses')->pluck('id'); // Lấy tất cả các id của khóa học

        foreach ($courses as $course_id) {
            DB::table('lessons')->insert([
                [
                    'course_id' => $course_id,
                    'title' => 'Introduction to Course ' . $course_id,
                    'content' => 'This is the introduction lesson for course ' . $course_id,
                    'duration' => 20, 
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'course_id' => $course_id,
                    'title' => 'Lesson 1 for Course ' . $course_id,
                    'content' => 'This is the first lesson for course ' . $course_id,
                    'duration' => 30, // Thời lượng giả
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'course_id' => $course_id,
                    'title' => 'Lesson 2 for Course ' . $course_id,
                    'content' => 'This is the second lesson for course ' . $course_id,
                    'duration' => 45, // Thời lượng giả
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]);
        }
    }
}
