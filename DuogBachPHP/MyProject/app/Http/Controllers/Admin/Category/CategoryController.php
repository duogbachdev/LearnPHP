<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        return view('backend/category/category');
    }
    public function create()
    {
        return view('backend/category/addcategory');
    }
    public function store()
    {
        return view('backend/category/addcategory');
    }
    public function edit()
    {
        return view('backend/category/editcategory');
    }
    public function update()
    {
        return view('backend/category/editcategory');
    }
}
