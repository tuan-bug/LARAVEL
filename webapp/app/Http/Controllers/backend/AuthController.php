<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController
{
    public function __construct()
    {
    }

    public function admin(){

        if(Auth::id() > 0){
            return redirect()->intended('/admin/dashboard');
        }
        return view('backend.auth.login');
    }

//    protected function validateLogin(Request $request)
//    {
//        $request->validate([
//            'email' => 'required|email',
//            'password' => 'required|min:6',
//        ]);
//    }

    public function index_login(){
        return view('backend.auth.login');
    }

    public function login(AuthRequest $request){

        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),

        ];

        if (Auth::attempt($credentials) ) {
            echo 1;
            // Đăng nhập thành công
            return redirect()->intended('/admin/dashboard')->with('success', 'Dang nhap thanh cong');
        }
        // Đăng nhập thất bại
        return redirect()->intended('/login')->with('error','Email hoac mat khau khong dung');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->intended('/admin');
    }
}
