<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quizz;
use App\Models\Question;
use App\Models\Option;
use App\Models\Result;
use App\Models\User;
use App\Models\QuizAttempt;

class QuizController extends Controller
{
    public function startQuiz($quizId)
    {
        $questions = Question::where('quizz_id', $quizId)->with('options')->get();

        $formattedQuestions = $questions->map(function ($question) {
            return [
                'id' => $question->id, // Include the question ID
                'question_text' => $question->question_text,
                'options' => $question->options->map(function ($option) {
                    return [
                        'id' => $option->id, // Include the option ID
                        'option_text' => $option->option_text,
                        'correct' => $option->correct
                    ];
                })->toArray(),
                'points' => $question->points,
                'time_limit' => $question->time
            ];
        });

        return view('Question.play_quizz', [
            'id' => $quizId,
            'questions' => $formattedQuestions->toArray(),
            'totalQuestions' => $questions->count(),
        ]);
    }

    public function getOptions($questionId)
    {
        $options = Option::where('question_id', $questionId)->get();
        return response()->json($options);
    }

    public function checkAnswer(Request $request)
    {
        $request->validate([
            'question_id' => 'required|integer',
            'option_id' => 'required|integer',
            'is_correct' => 'required|boolean',
        ]);

        $option = Option::findOrFail($request->option_id);
        $isCorrect = $option->correct;

        return response()->json([
            'correct' => $isCorrect,
            'correctAnswer' => $isCorrect ? null : Option::where('question_id', $request->question_id)->where('correct', 1)->first()->option_text
        ]);
    }

    public function getNextQuestion($currentQuestionId)
    {
        $currentQuestion = Question::findOrFail($currentQuestionId);
        $nextQuestion = Question::where('quiz_id', $currentQuestion->quiz_id)
            ->where('id', '>', $currentQuestionId)
            ->first();

        if (!$nextQuestion) {
            return response()->json(null);
        }

        return response()->json($nextQuestion);
    }

    public function submitAnswer(Request $request)
    {
        // Validate incoming data
        $data = $request->validate([
            'quizz_id' => 'required|exists:quizzs,id',
            'answers' => 'required|array',
            'answers.*' => 'exists:options,id',
            'total_questions' => 'required|integer',
            'time_taken' => 'required|integer',
        ]);

        $userId = Auth::id()?? "";
        $attempts = [];

        foreach ($data['answers'] as $questionId => $selectedOptionId) {
            // Check if the selected option is correct
            $isCorrect = DB::table('options')
                ->where('id', $selectedOptionId)
                ->where('correct', 1)
                ->exists();

            // Prepare each attempt
            $attempts[] = [
                'user_id' => $userId,
                'quizz_id' => $data['quizz_id'],
                'response_data' => json_encode([
                    'quiz_id' => $data['quizz_id'], // Include quiz_id in the JSON data
                    'question_id' => $questionId,
                    'selected_option_id' => $selectedOptionId,
                    'is_correct' => $isCorrect,
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        if (($userId)) {
            QuizAttempt::insert($attempts);
        } 
        
        // Calculate results
        $correctAnswers = collect($attempts)->filter(function ($attempt) {
            $responseData = json_decode($attempt['response_data'], true);
            return $responseData['is_correct'] ?? false; // Check for correct answers
        })->count();

        $score = $correctAnswers; // Adjust based on your scoring logic if needed

        // Store quiz results in the session
        session()->put('quiz_result', [
            'user_id' => $userId,
            'quizz_id' => $data['quizz_id'],
            'total_questions' => $data['total_questions'],
            'correct_answers' => $correctAnswers,
            'score' => $score, // Adjust scoring logic as needed
            'time_taken' => $data['time_taken'],
        ]);

        return response()->json(['message' => 'Answers saved successfully.']);
    }


    public function showResults($quizId)
    {
        $result = session('quiz_result');
        if (!$result || $result['quizz_id'] != $quizId) {
            abort(404, 'Results not found or invalid quiz ID.');
        }

        $results = QuizAttempt::where('quizz_id', $quizId)
            ->where('user_id', Auth::id())
            ->get();

        $formattedResults = $results->map(function ($attempt) {
            $responseData = json_decode($attempt->response_data, true);

            return [
                'question_id' => $responseData['question_id'] ?? null,
                'selected_option_id' => $responseData['selected_option_id'] ?? null,
                'is_correct' => $responseData['is_correct'] ?? null,
            ];
        });

        // Return the view with results
        return view('Question.result', [
            'result' => $result,
            'results' => $formattedResults,
        ]);
    }




    public function handleErrors($error)
    {
        return redirect()->back()->with('error', $error);
    }
}
