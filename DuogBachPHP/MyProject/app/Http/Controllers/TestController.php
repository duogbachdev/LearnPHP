<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //Dạng get data
    public function test(Request $request)
    {
        // $email = $request->query("email");
        // $password = $request->query("password");
        // dd($email . " " . $password);
        // $data = [
        //     "name" => "DuogBach",
        //     "age" => "22",
        // ];
        // return view('test', $data);


        //Thêm Sesstion
        // $request->session()->put("pass", "123456");
        // $request->session()->put([
        //     "email" => "test@example.com",
        //     "address" => "ha noi",
        // ]);
        // return view('test');
        // $request->session()->flash('status', 'Task was successful!');

        // Xóa Sesstion
        $request->session()->forget("pass");
        $request->session()->forget(["email", "address"]);
    }

    public function test1(Request $request)
    {
        // Sesstion
         dd($request->session()->all());  //Lấy ra tất cả 
        //dd($request->session()->get("pass"));   //Lấy ra giá trị cụ thể

        // Kiểm tra xem trong session có hay không
        // if ($request->session()->has("name")) {
        //     dd("Oke");
        // }

        // return view('test');
    }

    // Dạng post data
    public function testForm(Request $request)
    {
        // lấy thông tin người dùng nhập vào form
        // $email = $request->email;
        // $password = $request->password;

        // Cách lấy tất cả dữ liệu trong form, kết quả trả về là mảng : $request->all();
        //dd('Oke');  // dùng để test

        // Đặt điều kiện cho dữ liệu
        $rules = [
            "email" => "email|required|",
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

        // return redirect()->back()->withInput();  //Nếu sai hoặc lỗi thì quay lại form trước đó và dữ liệu vừa nhập sẽ hiển thị lại ô input
    }

    public function test2($data1, $data2)
    {
        return $data1 . "<br/>" . $data2 . "<br/>";
    }
}
