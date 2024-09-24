<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizAttempt extends Model
{
    use HasFactory;
    protected $table = 'quiz_attempts';

    protected $fillable = [
        'user_id',
        'quizz_id',
        'question_id',
        'selected_option_id',
        'is_correct',
    ];
}
