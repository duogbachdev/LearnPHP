<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $products = User::orderBy("id", "asc")
            ->paginate(5);
        return view('backend/user/index', ["users" => $products]);
    }
    public function create()
    {
        return view('backend/user/adduser');
    }
    public function store(AddUserRequest $request)
    {
        $user = new User();
        $user->namecode = $request->namecode;
        $user->fullname = $request->fullname;
        $user->datebirth = $request->datebirth;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->class = $request->class;
        $user->department = $request->department;
        $user->save();
        return redirect("/user")->with("alert", "Đã thêm thành công");
    }
    public function edit()
    {
        return view('backend/user/edituser');
    }
    public function update()
    {
        return view('backend/user/edituser');
    }
}
