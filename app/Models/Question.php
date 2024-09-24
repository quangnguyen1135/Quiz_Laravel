<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Answer;

class Question extends Model
{
    use HasFactory;
    protected $fillable = ['quizz_id', 'question_text', 'question_type', 'correct_answer','points','time'];

    public function quizz()
    {
        return $this->belongsTo(Quizz::class, 'quizz_id');
    }

    public function options()
    {
        return $this->hasMany(Option::class, 'question_id');
    }
    public function listQuestions($quizId)
    {
        $questions = Question::where('quiz_id', $quizId)->get();

        return view('Question.list_question', compact('questions'));
    }
}
