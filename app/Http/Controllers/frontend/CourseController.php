<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\UserCourse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CourseController extends Controller
{
    public function index()
    {
        return view('Courses.index'); // Adjust the view path as necessary
    }

    public function apiIndex()
    {
        $courses = Course::all();
        return response()->json($courses);
    }

    public function create()
    {
        return view('courses.create');
    }

    public function apiDetail($id)
    {
        // Fetch course by ID, including chapters and their associated lessons
        $course = Course::with(['chapters.lessons'])->find($id);

        // Check if the course exists
        if (!$course) {
            return response()->json(['message' => 'Course not found'], 404);
        }

        // Return the course with chapters and lessons
        return response()->json($course);
    }


    public function showDetail($id)
    {
        $course = Course::with('lessons')->find($id); // Eager load the lessons relationship
        return response()->json($course); // Return as JSON response
    }

    public function store(Request $request)
    {
        // Xác thực dữ liệu
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'content' => 'required',
        ]);

        // Tạo khóa học
        $course = Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::id(),
            'content' => $request->input('content'), // Lấy nội dung từ TinyMCE và lưu vào đây
        ]);

        // Trả về phản hồi JSON
        return response()->json(['message' => 'Course saved successfully!']);
    }


    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $course = Course::findOrFail($id);
        $course->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('courses.index')->with('success', 'Course updated successfully');
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Course deleted successfully');
    }

    public function registerCourse(Request $request)
    {
        Log::info('Register course called with:', $request->all());

        if (Auth::check()) {
        $userId = Auth::id();
        
        if (!$userId) {
            return response()->json(['success' => false, 'message' => 'User not authenticated'], 401);
        }

        // Validate course ID
        $request->validate([
            'courseId' => 'required|exists:courses,id',
        ]);

        $courseId = $request->input('courseId');

        // Check if user is already registered
        $alreadyRegistered = UserCourse::where('user_id', $userId)
            ->where('course_id', $courseId)
            ->exists();

        if ($alreadyRegistered) {
            return response()->json(['success' => false, 'message' => 'You are already registered for this course'], 403);
        }

        // Register the user for the course
        UserCourse::create([
            'user_id' => $userId,
            'course_id' => $courseId,
        ]);

        return response()->json(['success' => true, 'message' => 'Successfully registered for the course'], 200);
        }
        return redirect()->route('login')->with('error', 'Please log in to view your quizzes.');

    }
}
