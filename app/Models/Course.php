<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public function lessons()
    {
        return $this->hasMany(Lesson::class); // Adjust the class name if needed
    }
    public function chapters()
    {
        return $this->hasMany(Chapter::class); // Adjust the class name if needed
    }
}
