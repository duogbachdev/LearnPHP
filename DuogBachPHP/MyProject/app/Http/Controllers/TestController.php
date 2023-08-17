<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Test;
use App\Models\User;
use App\Models\Detail;

class TestController extends Controller
{
    //Dạng get data
    public function test(Request $request)
    {
        $user = Detail::find(2)
            // ->detail
            ->user
            ->toArray();
        dd($user);

        // $test = new Test();
        // $test->name = "New Name";
        // $test->save();

        // $test = Test::find(1);
        // $test->name = "New Name";
        // $test->save();

        // $test = Test::find(1);
        // $test->delete();

        // $test = Test::all()->toArray();
        // dd($test);

        // $test = Test::where("id", ">=", 5)
        //     ->where("id", "<=", 7)
        //     ->get()
        //     ->toArray();
        // dd($test);

        // $user = User::all()->toArray();
        // dd($user);

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
        // $request->session()->forget("pass");
        // $request->session()->forget(["email", "address"]);


        // Chạy câu lệnh truy vấn :

        // Thêm
        // DB::table("categories")->insert([
        //     "name" => "Nokia",
        //     "slug" => "nokia",
        //     "parent" => "1"
        // ]);

        // DB::table("categories")->insert([
        //     ["name" => "Sansung", "slug"=>"samsung", "parent" => "2"],
        //     ["name" => "Bphone", "slug"=>"bphone", "parent" => "1"],
        // ]);

        // Lấy ra sản phẩm
        // $products = DB::table("products")->get()->all();
        // $products = DB::table("products")->select("name","price")->get()->all();
        // $products = DB::table("products")->select("name", "price")->where("id", 17)->get()->all();
        // $products = DB::table("products")->select("id", "name", "price")->where("id", ">=", 17)->where("id", "<=", 19)->get()->all();  //Và
        // $products = DB::table("products")->select("id", "name", "price")->where("id", "<>", 17)->get()->all();  //Khác
        // $products = DB::table("products")->select("id", "name", "price")->where("id", 17)->orWhere("id", 19)->get()->all();  //or
        // $products = DB::table("products")->select("id", "name", "price")->orderBy("id", "desc")->get()->all();  //sắp xếp
        // $products = DB::table("products")->select("id", "name", "price")->inRandomOrder()->get()->all();  //sắp xếp
        // $products = DB::table("products")->select("id", "name", "price")->offset(2)->limit(3)->get()->all();  //

        // $products = DB::table("products")->select("products.name as product_name", "price", "categories.name as categories_name")->join("categories", "products.categories_id", "=", "categories.id")->get()->all();
        // dd($products);

        // DB::table("products")->insert([
        //     [
        //         "name" => "name 1",
        //         "slug" => "name-1",
        //         "code" => "code1",
        //         "info" => "info1",
        //         "describer" => "describer1",
        //         "image" => "image1",
        //         "price" => 11111,
        //         "featured" => 1,
        //         "categories_id" => 1,
        //         "state" => 1
        //     ],
        //     [
        //         "name" => "name 2",
        //         "slug" => "name-2",
        //         "code" => "code2",
        //         "info" => "info2",
        //         "describer" => "describer2",
        //         "image" => "image2",
        //         "price" => 22222,
        //         "featured" => 2,
        //         "categories_id" => 2,
        //         "state" => 2
        //     ],
        //     [
        //         "name" => "name 3",
        //         "slug" => "name-3",
        //         "code" => "code3",
        //         "info" => "info3",
        //         "describer" => "describer3",
        //         "image" => "image3",
        //         "price" => 33333,
        //         "featured" => 3,
        //         "categories_id" => 3,
        //         "state" => 3
        //     ],
        //     [
        //         "name" => "name 4",
        //         "slug" => "name-4",
        //         "code" => "code4",
        //         "info" => "info4",
        //         "describer" => "describer4",
        //         "image" => "image4",
        //         "price" => 44444,
        //         "featured" => 4,
        //         "categories_id" => 4,
        //         "state" => 4
        //     ],
        //     [
        //         "name" => "name 5",
        //         "slug" => "name-5",
        //         "code" => "code5",
        //         "info" => "info5",
        //         "describer" => "describer5",
        //         "image" => "image5",
        //         "price" => 55555,
        //         "featured" => 5,
        //         "categories_id" => 1,
        //         "state" => 1
        //     ],

        // ]);

        // Sửa
        // DB::table("categories")->where("id", 1)
        //     ->update(["name" => "Vivo", "slug" => "vivo"]);

        // Xóa
        // DB::table("categories")->where("id", 5)
        //     ->delete();
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
