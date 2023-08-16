<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = DB::table("products")
            ->join("categories", "products.categories_id", "=", "categories.id")
            ->select("products.id as id","products.name as product_name", "price", "code", "state", "image", "categories.name as category_name")
            ->orderBy("products.id", "asc")
            ->get()
            ->all();
        return view('backend/products/listproduct', ["products" => $products]);
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
