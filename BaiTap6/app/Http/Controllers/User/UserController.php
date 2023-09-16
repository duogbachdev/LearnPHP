<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddUserRequest;
use App\Http\Requests\EditUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index(Request $request)
    {
        $search = $request->input('search');
        if ($search) {
            $users = User::where('fullname', 'like', '%' . $search . '%')
                ->orWhere('namecode', 'like', '%' . $search . '%')
                ->paginate(5);
        } else {
            $users = User::orderBy("id", "asc")
                ->paginate(5);
        }
        return view('backend/user/index', ["users" => $users]);
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
    public function edit(Request $request)
    {
        $id = $request->id;
        $user = User::find($id)->toArray();
        // dd($product);
        return view('backend/user/edituser', ["user" => $user]);
    }
    public function update(EditUserRequest $request)
    {
        $id = $request->id;
        $user = User::find($id);


        $user->namecode = $request->namecode;
        $user->fullname = $request->fullname;
        $user->datebirth = $request->datebirth;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->class = $request->class;
        $user->department = $request->department;
        $user->save();
        // dd($user);
        return redirect("/user")->with("alert", "Đã sửa thành công");
    }
    public function delete(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        $user->delete();
        return redirect("/user")->with("alert", "Đã xóa thành công");
    }
}
