<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function getLogin()
    {
        return view('backend/login');
    }
    public function postLogin(Request $request)
    {
        $rules = [
            "email" => "required|email",
            "password" => "required|min:3|max:6",
        ];
        $messages = [
            "email.required" => "Email không được để trống",
            "email.email" => "Email không hợp lệ",
            "password.required" => "Password không được để trống",
            "password.min" => "Password tối thiểu là 3 ký tự",
            "password.max" => "Password tối đa là 6 ký tự",
        ];

        $request->validate($rules, $messages);

        if ($request->email == "admin@admin.com" && $request->password == "123456") {
            $request->session()->put("email", $request->email);
            return redirect("/admin");
        } else {
            return redirect()->back()->withErrors("Tài khoản không hợp lệ");
        }
        // return view('backend/login');
    }
}
