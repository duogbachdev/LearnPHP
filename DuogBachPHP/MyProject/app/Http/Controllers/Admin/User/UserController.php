<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('backend/user/listuser');
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
