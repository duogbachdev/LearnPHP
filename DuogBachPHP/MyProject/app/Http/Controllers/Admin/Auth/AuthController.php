<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function getLogin()
    {
        return view('backend/login');
    }
    public function postLogin(LoginRequest $request)
    {
        // $rules = [
        //     "email" => "required|email",
        //     "password" => "required|min:3|max:6",
        // ];
        // $messages = [
        //     "email.required" => "Email không được để trống",
        //     "email.email" => "Email không hợp lệ",
        //     "password.required" => "Password không được để trống",
        //     "password.min" => "Password tối thiểu là 3 ký tự",
        //     "password.max" => "Password tối đa là 6 ký tự",
        // ];

        // $request->validate($rules, $messages);
        // $users = DB::table("users")->where("email", $request->email)->where("password", $request->password)->get()->all();

        // if (count($users) > 0) {
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            // $request->session()->put("email", $request->email);
            return redirect("/admin");
        } else {
            return redirect()->back()->withErrors("Tài khoản không hợp lệ");
        }
        // return view('backend/login');
    }
}
