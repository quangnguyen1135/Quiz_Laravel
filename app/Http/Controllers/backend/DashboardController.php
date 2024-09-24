<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quizz;
use App\Models\Question;
use App\Models\Level;
use App\Models\Option;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $quizzes = Quizz::with('user', 'category')
            ->withCount('questions')
            ->paginate(10);

        $categories = Category::all();
        $grades = Level::all();
        if ($request->ajax()) {
            return view('admin.partials.quizzes_table', compact('quizzes'))->render();
        }

        return view('admin.index', compact('quizzes', 'categories', 'grades'));
    }

    public function edit_quiz($id)
    {
        $quiz = Quizz::with('category', 'level')->findOrFail($id);
    
        $categories = Category::all();
        $grades = Level::all();
    
        return response()->json([
            'quiz' => $quiz,
            'categories' => $categories,
            'grades' => $grades
        ]);
    }
    
    public function update_quiz(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'level_id' => 'required|exists:levels,id',
            'question_type' => 'required',
            // Add any additional validation rules you need
        ]);
    
        // Find the quiz by ID
        $quiz = Quizz::findOrFail($id);
    
        // Update the quiz fields
        $quiz->title = $request->input('title');
        $quiz->category_id = $request->input('category_id');
        $quiz->level_id = $request->input('level_id');
        $quiz->language = $request->input('language');
        $quiz->status = $request->input('status'); // Assuming status is 'on' or 'off' for publish
        // Save the updated quiz
        $quiz->save();
    
        // Optionally, you can return a success message or redirect the user
        return redirect()->route('admin.quizzes.index')->with('success', 'Quiz updated successfully.');
    }
    
    public function detail_quiz($quizId)
    {
        $quiz = Quizz::find($quizId);
        if (!$quiz) {
            return redirect()->back()->withErrors('Quiz not found');
        }
        $questions = $quiz->questions;


        if (!$questions) {
            $questions = collect();
        }
        return view('admin.quizzes.list_qs', compact('quiz', 'quizId', 'questions'));
    }

    public function edit_question($quizId, $questionId)
    {
        $question = Question::with('options')->findOrFail($questionId);
        return response()->json(['question' => $question]);
    }


    public function update_question(Request $request, $questionId)
    {
        $question = Question::findOrFail($questionId);
        $question->update(['question_text' => $request->input('question_text')]);

        $options = $request->input('options');
        $correct = $request->input('correct', []);
        $optionIds = $request->input('option_ids', []);

        // Loop through each option and update or create them
        foreach ($options as $index => $optionText) {
            Option::updateOrCreate(
                ['id' => $optionIds[$index] ?? null, 'question_id' => $questionId],  // Match by option id if exists
                [
                    'option_text' => $optionText,
                    'correct' => in_array($index, array_keys($correct))  // Mark correct if the checkbox is checked
                ]
            );
        }

        // Redirect back to quiz details
        return redirect()->route('admin.quizzes.detail_quiz', $question->quizz_id)
            ->with('success', 'Question updated successfully');
    }
}
