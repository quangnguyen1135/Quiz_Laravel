<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use GuzzleHttp\Client;
use Carbon\Carbon;

class AuthManager extends Controller
{
    function login()
    {
        return view('login');
    }
    function registration()
    {
        return view('registration');
    }

    public function authenticate(Request $rq)
    {
        $credentials = $rq->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $rq->session()->regenerate();
            $rq->session()->put('user_id', Auth::id());

            return redirect()->intended('/')->with("success", "Đăng nhập thành công");
        }

        return redirect()->route('login')->withInput($rq->only('email'))->withErrors(['error' => 'Đăng nhập thất bại. Email hoặc mật khẩu không chính xác.']);
    }


    public function loginPost(Request $rq)
    {
        $rq->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Check if the user is already logged in
        if (Auth::check()) {
            return redirect()->intended(route('frontend.index'))->with('success', 'Already logged in');
        }

        $credentials = $rq->only('email', 'password');

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Create a token for the user
            $tokenResult = $user->createToken('Personal Access Token');
            $token = $tokenResult->token;
            // Set expiration time for the token if needed
            if ($rq->has('remember_me')) {
                $token->expires_at = Carbon::now()->addWeeks(1);
            }
            $token->save();

            // Store user ID in session
            $rq->session()->put('user_id', $user->id);

            // Redirect to the home page
            return redirect()->intended(route('frontend.index'))->with('success', 'Login success');
        }

        // If authentication fails
        return redirect(route('login'))->with("error", "Login details are not valid");
    }




    function registrationPost(Request $rq)
    {
        // Validate the request
        $rq->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'role' => 'required',
            'password' => 'required|confirmed',
        ]);

        $data = [
            'name' => $rq->name,
            'email' => $rq->email,
            'role' => $rq->role,
            'password' => Hash::make($rq->password),
        ];

        $user = User::create($data);
        if (!$user) {
            return redirect()->route('registration')->with('error', 'Registration failed');
        }
        return redirect()->route('login')->with('success', 'Registration successful');
    }

    public function logout(Request $rq)
    {
        if ($user = $rq->user()) {
            $tokens = $user->tokens;
            if ($tokens->isNotEmpty()) {
                foreach ($tokens as $token) {
                    $token->revoke(); 
                }
        }

        Auth::logout();
        $rq->session()->invalidate();
        $rq->session()->regenerateToken();

        return redirect('/');
    }
}
}