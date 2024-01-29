<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('admin.login.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Nhập email',
            'password.required' => 'Nhập mật khẩu',
            'email.email' => 'Vui lòng nhập 1 địa chỉ email hợp lệ (@gmail.com ..v.v)',
        ]);

        if (Auth::attempt(['email' => strtolower($request->email), 'password' => $request->password])) {
            return redirect('admin/tintuc');
        } else {
            return redirect('/login')->with('error', 'Sai tài khoản mật khẩu');
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
