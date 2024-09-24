<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quizz;

class HomeController extends Controller
{
    function index(Request $request)
    {
        // Check if category_id is provided
        $mathQuizzes = Quizz::where('category_id', 1)
            ->where('is_published', 1) 
            ->withCount('questions')
            ->get();

        $englishQuizzes = Quizz::where('category_id', 2)
            ->where('is_published', 1)
            ->withCount('questions')
            ->get();

        $query = Quizz::withCount('questions')
            ->with('level', 'category', 'image')
            ->where('is_published', 1) 
            ->orderBy('created_at', 'desc');

        $quizzes = $query->get();

        // Pass quizzes and category_id to the view
        return view('home.index', compact('quizzes', 'mathQuizzes', 'englishQuizzes'));
    }


    function question()
    {
        return view('question');
    }
}
