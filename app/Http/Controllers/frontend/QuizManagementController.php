<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Quizz;
use App\Models\Level;
use App\Models\Question;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Requests\CreateQuizRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class QuizManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function showQuizForm()
    {
        $categories = Category::all();
        $grades = Level::all();
        return view('Question.create_quizz', compact('categories', 'grades'));
    }

    public function upload(Request $request)
    {
        // Validate the uploaded image
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);
        // Check if the request contains a file
        if ($request->hasFile('image')) {
            // Store the file in the 'public/images' directory within the storage folder
            $image = $request->file('image');
            $imagePath = $image->store('images', 'public');

            // Save the path of the image into the database
            $newImage = Image::create(['path' => $imagePath]);

            // Return a JSON response with the image ID and path
            return response()->json([
                'image_id' => $newImage->id,
                'path' => asset('storage/' . $imagePath) // Return the full path
            ], 200);
        }

        // Return an error response if no image was uploaded
        return response()->json(['error' => 'No image uploaded.'], 400);
    }

    public function deleteImage(Request $request)
    {
        $imagePath = $request->input('imagePath');

        if (Storage::exists($imagePath)) {
            Storage::delete($imagePath);
            return response()->json(['success' => true]);
        }

        return response()->json(['error' => 'Image not found'], 404);
    }

    public function update(Request $request, $id)
    {
        $quiz = Quizz::findOrFail($id);
        $quiz->update($request->all());

        if ($request->has('image_id')) {
            $quiz->image_id = $request->input('image_id');
            $quiz->save();
        }

        return response()->json(['message' => 'Quiz updated successfully.'], 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|min:4|max:64',
            'category_id' => 'required|exists:categories,id',
            'grade_id' => 'required|exists:levels,id',
            'language' => 'required|string',
            'image_path' => 'nullable|url'
        ]);
        // Debug: Xem dữ liệu đã được validate
        $filePath = null;
        if ($request->hasFile('image_path')) {
            // Handle file upload
            $image = $request->file('image_path');
            $filePath = $image->store('uploads/quizzes', 'public');
        } elseif (filter_var($request->input('image_path'), FILTER_VALIDATE_URL)) {
            // Handle URL input
            $filePath = $request->input('image_path');
        }

        $quiz = new Quizz();
        $quiz->title = $validated['title'];
        $quiz->category_id = $validated['category_id'];
        $quiz->level = $validated['grade_id'];
        $quiz->language = $validated['language'];
        $quiz->image = $filePath;
        $quiz->created_by = Auth::id();

        $quiz->save();

        return redirect()->route('questions.create', ['id' => $quiz->id])
            ->with('success', 'Quiz created successfully!');
    }

    public function myQuizzes(Request $request)
    {
        if (Auth::check()) {
            // Fetch filter from the request
            $filter = $request->input('filter', 'all'); // Default filter is 'all'

            // Base query to get the user's quizzes
            $query = Quizz::where('created_by', Auth::id())
                ->withCount('questions')
                ->with('level', 'category')
                ->orderBy('created_at', 'desc');

            $publishedCount = Quizz::where('created_by', Auth::id())
                ->where('is_published', 1)
                ->count();

            $draftCount = Quizz::where('created_by', Auth::id())
                ->where('is_published', 0)
                ->count();

            // Apply filter based on publication status
            if ($filter === 'published') {
                $query->where('is_published', 1);
            } elseif ($filter === 'draft') {
                $query->where('is_published', 0);
            }

            // Get the filtered quizzes
            $quizzes = $query->get();
            // Pass quizzes and filter to the view
            return view('question.my_quizzes', compact('quizzes', 'filter', 'publishedCount', 'draftCount'));
        }

        return redirect()->route('login')->with('error', 'Please log in to view your quizzes.');
    }

    public function edit($quizId)
    {
        $quiz = Quizz::find($quizId);

        if (!$quiz) {
            return redirect()->back()->withErrors('Quiz not found');
        }

        $questions = $quiz->questions;

        if (!$questions) {
            $questions = collect();
        }
        return view('Question.list_question', compact('quiz', 'questions'));
    }

    public function publish($id)
    {
        // Find the quiz by ID
        $quiz = Quizz::findOrFail($id);

        // Set the quiz as published
        $quiz->is_published = 1;
        $quiz->save();

        // Return a success response or redirect
        return redirect()->back()->with('success', 'Quiz has been successfully published.');
    }

    public function viewQuizz($id)
    {
        $quiz = Quizz::with('level', 'category')->find($id);
        $questions = Question::where('quizz_id', $id)->with('options')->get();

        if (!$quiz) {
            return redirect()->route('frontend.index')->with('error', 'Quiz not found.');
        }
        $questionsCount = $questions->count();

        // Pass the quiz data to the view
        return view('question.view_quizz', compact('quiz', 'questions', 'questionsCount'));
    }

    public function destroy($id)
    {
        // Find the quiz by ID
        $quiz = Quizz::findOrFail($id);

        // Check if the authenticated user is the owner of the quiz
        if ($quiz->created_by != Auth::id()) {
            return redirect()->route('quizzes.my')->with('error', 'You are not authorized to delete this quiz.');
        }

        $quiz->questions()->each(function ($question) {
            $question->options()->delete(); // Delete options for each question
            $question->delete(); // Delete each question
        });

        // Delete the quiz
        $quiz->delete();

        // Redirect back to the quiz list with a success message
        return redirect()->route('quizzes.my')->with('success', 'Quiz deleted successfully.');
    }
}
