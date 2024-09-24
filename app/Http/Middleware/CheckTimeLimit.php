namespace App\Http\Middleware;

use Closure;

class CheckTimeLimit
{
    public function handle($request, Closure $next)
    {
        $quizId = $request->route('quizId');
        $startTime = session('quiz_start_time');
        if ($startTime && now()->diffInMinutes($startTime) > Quizz::find($quizId)->time_limit) {
            return redirect()->route('quiz.results')->with('error', 'Time limit exceeded');
        }

        return $next($request);
    }
}