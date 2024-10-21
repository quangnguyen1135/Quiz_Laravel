<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\QuizManagementController;
use App\Http\Controllers\frontend\QuestionController;
use App\Http\Controllers\frontend\QuizController;
use App\Http\Controllers\frontend\CourseController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\Auth\SocialLoginController;


Route::get('/', [HomeController::class, 'index'])->name('frontend.index');
Route::get('/my-quizzes', [QuizManagementController::class, 'myQuizzes'])->name('quizzes.my');

Route::get('/admin', [AuthController::class, 'login'])->name('auth.admin');
Route::post('/admin', [AuthController::class, 'loginAdmin'])->name('auth.login_admin');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/{id}/edit', action: [DashboardController::class, 'edit_quiz'])->name('admin.quizzes.edit');
    Route::put('/{id}/edit', action: [DashboardController::class, 'update_quiz'])->name('admin.quizzes.update_quiz');
    Route::get('/{quizId}/list_qs', [DashboardController::class, 'detail_quiz'])->name('admin.quizzes.detail_quiz');
    Route::get('/quizzes/{quizId}/questions/{questionId}', [DashboardController::class, 'edit_question'])->name('admin.quizzes.edit_question');
    Route::put('/quizzes/{quizId}/questions/{questionId}', [DashboardController::class, 'update_question'])->name('admin.quizzes.update_qs');
});
/// Login 
// Route::get('/login', [AuthManager::class,'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
// Route::get('/registration', [AuthManager::class,'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');
Route::post('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::middleware(['web'])->group(function () {
    Route::get('login/google', [SocialLoginController::class, 'redirectToGoogle'])->name('login.google');
    Route::get('/auth/callback/google', [SocialLoginController::class, 'handleGoogleCallback']);
    // Thêm các route khác nếu cần
});


// quizz
Route::get('/create_quizz', [QuizManagementController::class, 'showQuizForm'])->name('frontend.create_quizz');

Route::post('/create_quizz', [QuizManagementController::class, 'store'])->name('frontend.store_quizz');
Route::post('/upload_img', [QuizManagementController::class, 'upload'])->name('upload.image');
Route::post('/delete-image', [QuizManagementController::class, 'deleteImage'])->name('delete.image');


//questionnnn
Route::get('/quizzes/{id}/questions/create', [QuestionController::class, 'create'])->name('questions.create');
Route::post('/quizzes/{id}/questions', [QuestionController::class, 'store'])->name('quizzes.questions.store');


Route::resource('quizzes.questions', QuestionController::class);

Route::get('/my-quizzes', [QuizManagementController::class, 'myQuizzes'])->name('quizzes.my');
// Routes to filter published and draft quizzes
Route::get('/my-quizzes/published', [QuizController::class, 'publishedQuizzes'])->name('quizzes.published');
Route::get('/my-quizzes/drafts', [QuizController::class, 'draftQuizzes'])->name('quizzes.drafts');
Route::delete('/quizzes/{quiz}', [QuizManagementController::class, 'destroy'])->name('quizzes.destroy');



Route::get('/my-quizzes/{quizId}/edit', [QuizManagementController::class, 'edit'])->name('quizzes.edit');
Route::delete('/my-quizzes/{quizId}/questions/{questionId}', [QuestionController::class, 'destroy'])->name('quizzes.questions.destroy');
Route::post('/quizzes/{id}/publish', [QuizManagementController::class, 'publish'])->name('quizzes.publish');


Route::get('/create_qs', [QuestionController::class, 'index'])->name('frontend.create_qs');

Route::post('quizzes/{quiz}/questions', [QuestionController::class, 'store'])->name('quizzes.questions.store');

// Route to show the edit form for a question
Route::get('/quizzes/{quiz}/questions/{question}', [QuestionController::class, 'edit'])->name('questions.edit');

// Route to update a question
Route::put('/quizzes/{quiz}/questions/{question}', [QuestionController::class, 'update'])->name('quizzes.questions.update');

Route::get('/quiz/{id}', [QuizManagementController::class, 'viewQuizz'])->name('quiz.view');

Route::prefix(prefix: 'quizzes')->group(function () {
    Route::get('{quiz}/start', [QuizController::class, 'startQuiz'])->name('quizzes.start');
    Route::get('/{quiz}/play', [QuizController::class, 'showQuizView'])->name('quizzes.play');
    Route::get('/get-options/{questionId}', [QuizController::class, 'getOptions']);

    Route::post('submit-answer', [QuizController::class, 'submitAnswer'])->name('quizzes.submitAnswer');
    Route::get('{quiz}/results', [QuizController::class, 'showResults'])->name('quizzes.results');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');



// Course 
Route::get('/courses', [CourseController::class, 'index'])->name('quizzes.view');
// Laravel web.php
Route::get('/courses/{any}', function () {
    return view('courses.index');
})->where('any', '.*');



Route::get('/test', [QuizManagementController::class, 'test'])->name('quiz.test');
