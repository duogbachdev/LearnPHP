<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Slug\Slug;
use App\Http\Requests\EditProductRequest;

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
    public function edit(Request $request)
    {
        $id = $request->id;
        $product = Product::find($id)->toArray();
        $categories = Category::all();
        // dd($product);
        return view('backend/products/editproduct', ["product" => $product], ["categories" => $categories]);
    }
    public function update(EditProductRequest $request)
    {
        $id = $request->id;
        $slug = Slug::getSlug($request->name);
        $product = Product::find($id);

        // Update the properties of the existing product instance
        $product->name = $request->name;
        $product->code = $request->code;
        $product->price = $request->price;
        $product->categories_id = $request->categories_id;
        $product->state = $request->state;
        $product->featured = $request->featured;
        $product->info = $request->info;
        $product->describer = $request->describer;
        $product->slug = $slug;

        if ($request->hasFile("image")) {
            $file = $request->image;

            // Get the file extension
            $fileExtension = $file->getClientOriginalExtension();

            // Generate the filename using the slug and extension
            $filename = $slug . "." . $fileExtension;

            // Move the uploaded file to the "uploads" directory with the generated filename
            $file->move("uploads", $filename);
            $product->image = $filename;
        }

        // Save the changes to the existing product instance
        $product->save();

        return redirect("/admin/product")->with("alert", "Đã sửa thành công");
        // return view('backend/products/editproduct');
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $product = Product::find($id);
        $product->delete();
        return redirect("/admin/product")->with("alert", "Đã xóa thành công");
    }
}
