<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $rq->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $rq->session()->put('user_id', Auth::id());

            return redirect()->intended(route('frontend.index'))->with("success", "Login success");
        }
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
        Auth::logout();
        $rq->session()->invalidate();
        $rq->session()->regenerateToken();
        $rq->session()->forget('user_id');

        return redirect('/');
    }
}
