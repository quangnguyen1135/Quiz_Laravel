<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Str;
use Exception;
use Illuminate\Support\Facades\Log;

class SocialLoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            // Lấy thông tin người dùng từ Google
            $googleUser = Socialite::driver('google')->stateless()->user();
    
            // Kiểm tra xem người dùng đã tồn tại trong DB hay chưa
            $user = User::where('email', $googleUser->getEmail())->first();
    
            // Nếu chưa tồn tại, tạo mới người dùng
            if (!$user) {
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(), // lưu Google ID
                    'password' => bcrypt(Str::random(16)), // Tạo mật khẩu ngẫu nhiên
                ]);
            }
    
            // Đăng nhập người dùng
            Auth::login($user);
    
            // Chuyển hướng đến trang chủ hoặc trang đã định
            return redirect()->intended(route('frontend.index'))->with('success', 'Logged in with Google');
        } catch (Exception $e) {
            // Ghi log thông tin chi tiết của lỗi
            Log::error('Google login error: ' . $e->getMessage());
    
            // Xử lý lỗi nếu có
            return redirect(route('login'))->with('error', 'Unable to login, try again');
        }
    }
    



    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        $facebookUser = Socialite::driver('facebook')->user();

        return $this->handleSocialUser($facebookUser);
    }

    protected function handleSocialUser($socialUser)
    {
        // Find or create a user based on the social user information
        $user = User::where('email', $socialUser->getEmail())->first();

        if (!$user) {
            $user = User::create([
                'name' => $socialUser->getName(),
                'email' => $socialUser->getEmail(),
                // You can add a password or handle it differently
                'password' => bcrypt(Str::random(10)), // Generate a random password
            ]);
        }

        // Log the user in
        Auth::login($user, true);

        // Redirect to intended route or home
        return redirect()->intended(route('frontend.index'));
    }
}
