<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quizz extends Model
{
    protected $table = 'quizzs';

    public function questions()
    {
        return $this->hasMany(Question::class, 'quizz_id');
    }

    public function level()
    {
        return $this->belongsTo(Level::class, 'level');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function options()
    {
        return $this->hasMany(Option::class, 'question_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
