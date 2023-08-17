<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Slug\Slug;

class ProductController extends Controller
{
    //
    public function index()
    {
        // $products = DB::table("products")
        //     ->join("categories", "products.categories_id", "=", "categories.id")
        //     ->select("products.id as id","products.name as product_name", "price", "code", "state", "image", "categories.name as category_name")
        //     ->orderBy("products.id", "asc")
        //     ->get()
        //     ->all();
        $products = Product::orderBy("id", "asc")
            ->paginate(5);
        // ->get()
        // ->all(); 
        //or ->toArray()
        return view('backend/products/listproduct', ["products" => $products]);
    }
    public function create()
    {
        $categories = Category::all()
            ->toArray();
        return view('backend/products/addproduct', ["categories" => $categories]);
    }
    public function store(AddProductRequest $request)
    {
        // dd(Slug::getSlug($request->name));
        if ($request->hasFile("image")) {
            $slug = Slug::getSlug($request->name);
            $file = $request->image;

            // Get the file extension
            $fileExtension = $file->getClientOriginalExtension();

            // Generate the filename using the slug and extension
            $filename = $slug . "." . $fileExtension;

            // Move the uploaded file to the "uploads" directory with the generated filename
            $file->move("uploads", $filename);

            $product = new Product();
            $product->name = $request->name;
            $product->code = $request->code;
            $product->price = $request->price;
            $product->categories_id = $request->categories_id;
            $product->state = $request->state;
            $product->featured = $request->featured;
            $product->info = $request->info;
            $product->describer = $request->describer;
            $product->slug = $slug;
            $product->image = $filename;
            $product->save();

            return redirect("/admin/product")->with("alert", "Đã thêm thành công");
        }
        // return view('backend/products/addproduct');
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
