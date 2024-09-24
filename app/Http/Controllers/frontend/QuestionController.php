<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Option;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Quizz;

class QuestionController extends Controller
{
    public function index($quizId)
    {
        $questions = Question::where('quiz_id', $quizId)->with('options')->get();
        return view('questions.index', compact('questions'));
    }

    public function create($quizId)
    {
        $quiz = Quizz::findOrFail($quizId);
        return view('Question.detail_question', compact('quiz'));
    }
    public function store(Request $request, $quizId)
    {
        $request->validate([
            'question_type' => 'required|in:multiple-choice,true-false',
            'selected_point' => 'required|int',
            'selected_time' => 'required|int',
            'question_text' => 'required|string',
            'option_1' => 'nullable|string',
            'option_2' => 'nullable|string',
            'option_3' => 'nullable|string',
            'option_4' => 'nullable|string',
            'correct_option' => 'required_if:question_type,multiple-choice|integer|min:1|max:4',
            'quiz_id' => 'required|exists:quizzs,id'
        ]);

        try {
            // Determine correct answer value
            $correctAnswer = $request->input('question_type') === 'true-false'
                ? ($request->input('correct_option') == 1 ? 1 : 0)
                : $request->input('correct_option');

            // Create new question
            $question = new Question([
                'quizz_id' => $quizId,
                'question_text' => $request->input('question_text'),
                'question_type' => $request->input('question_type'),
                'correct_answer' => $correctAnswer,
                'points' => $request->input('selected_point'),
                'time' => $request->input('selected_time'),
            ]);

            // Save the question to get its ID
            $question->save();

            // Create options
            foreach (range(1, 4) as $index) {
                $optionText = $request->input("option_{$index}");
                if (!empty($optionText)) {
                    $isCorrect = ($index == $correctAnswer) ? 1 : 0;

                    Option::create([
                        'question_id' => $question->id,
                        'option_text' => $optionText,
                        'correct' => $isCorrect,
                    ]);
                }
            }

            return redirect()->route('quizzes.edit', $quizId)
                ->with('success', 'Question created successfully.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->withErrors('Something went wrong');
        }
    }

    public function edit($quizId, $questionId)
    {
        $quiz = Quizz::findOrFail($quizId);
        $question = $quiz->questions()->findOrFail($questionId);
        return view('Question.edit_question', compact('quiz', 'question'));
    }


    // Update a specific question in the database
    public function update(Request $request, $quiz, $question)
    {
        $question = Question::findOrFail($question);
        dd($request);

        // Validate input
        // dd($question);
        $request->validate([
            'selected_point' => 'required|int',
            'selected_time' => 'required|int',
            'question_text' => 'required|string',
            'option_1' => 'required|string',
            'option_2' => 'nullable|string',
            'option_3' => 'nullable|string',
            'option_4' => 'nullable|string',
            'correct_option' => 'nullable|integer|in:1,2,3,4',
        ]);
        // Update question
        $question->points = $request->input('selected_point');
        $question->time = $request->input('selected_time');
        $question->question_text = $request->input('question_text');
        $question->correct_answer = $request->input('correct_option');
        // $question->save();
        $options = $question->options()->get()->keyBy('id');


        foreach (range(1, 4) as $index) {
            $optionText = $request->input("option_{$index}");

            if (!is_null($optionText)) {
                $option = $options->shift();

                if ($option) {
                    $option->option_text = $optionText;
                    $option->save();
                }
            }
        }
        return redirect()->route('quizzes.edit', $quiz)
            ->with('success', 'Question updated successfully.');
    }

    public function destroy($quizId, $questionId)
    {
        $quiz = Quizz::findOrFail($quizId);
        $question = $quiz->questions()->where('quizz_id', $quizId)->findOrFail($questionId);
        $question->options()->delete();  // Delete all options related to this question
        $question->delete();
        return redirect()->route('quizzes.edit', $quizId)
            ->with('success', 'Question and its options deleted successfully.');
    }
}
