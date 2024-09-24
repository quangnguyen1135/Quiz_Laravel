<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function login()
    {
        return view('admin.login');
    }
    public function loginAdmin(Request $rq)
    {
        $credentials = $rq->only('email', 'password');
        $remember = $rq->has('remember');
    
        if (Auth::guard('admin')->attempt($credentials, $remember)) {
            return redirect()->route('dashboard.index')->with("success", "Đăng nhập thành công");
        }
    
        return redirect()->route('auth.admin')->with("error", "Đăng nhập thất bại");
    }
    
}
