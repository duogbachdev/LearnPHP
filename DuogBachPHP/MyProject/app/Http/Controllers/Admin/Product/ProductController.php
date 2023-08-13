<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        return view('backend/products/listproduct');
    }
    public function create()
    {
        return view('backend/products/addproduct');
    }
    public function store()
    {
        return view('backend/products/addproduct');
    }
    public function edit()
    {
        return view('backend/products/editproduct');
    }
    public function update()
    {
        return view('backend/products/editproduct');
    }
}
