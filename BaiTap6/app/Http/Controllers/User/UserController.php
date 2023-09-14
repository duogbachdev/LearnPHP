<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
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
    public function store()
    {
        return view('backend/user/adduser');
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
