<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lesson;

class LessonController extends Controller
{
    public function apiLesson($courseId, $chapterId, $lessonId)
    {
        // Fetch lesson by ID associated with the given course ID and chapter ID
        $lesson = Lesson::where('id', $lessonId)
            ->whereHas('chapter', function ($query) use ($courseId, $chapterId) {
                $query->where('id', $chapterId)
                    ->where('course_id', $courseId); // Ensure it belongs to the right course
            })
            ->first();
        if (!$lesson) {
            return response()->json(['message' => 'Lesson not found'], 404);
        }

        // Return the lesson details
        return response()->json($lesson);
    }
}
