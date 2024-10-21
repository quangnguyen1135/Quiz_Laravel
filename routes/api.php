<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\CourseController;
use App\Http\Controllers\frontend\LessonController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/courses', [CourseController::class, 'apiIndex']);
Route::get('/courses/{courseId}', [CourseController::class, 'apiDetail']);
Route::get('/courses/{courseId}/lessons/{chapterId}-{lessonId}', [LessonController::class, 'apiLesson']);

Route::post('/register-course', [CourseController::class, 'registerCourse'])->middleware('auth:api');
