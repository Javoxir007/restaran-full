<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::with(['category:id,name'])->orderBy('id', 'desc')->paginate(10);
        return view('admin/product/index', compact('products'));
    }

    public function create()
    {
        $category = Category::get();
        return view('admin/product/create', compact('category'));
    }

    public function store(Request $request)
    {
        $productData = $request->validate([
            'image' => 'required|file|max:5120|mimes:png,jpg,jpeg',
            'name' => 'required|min:3|max:20',
            'category_id' => 'required',
            'price' => 'required|numeric|max:9999999',
            'old_price' => 'numeric|max:9999999',
            'discount' => 'numeric|max:100',
            'on_stock' => 'required',
            'description' => 'required|string|min:3|max:300'
        ]);

        $full_path = null;
        if($uploaded = $request->file('image')){

            $uploaded = $request->file('image');
            $extension = $uploaded->getClientOriginalExtension();
            $image_name = time()."_"."_img"."$extension";
            $uploaded->move(public_path('assets/img/product'), $image_name);
            $full_path = '/assets/img/product/'.$image_name;
        }

        $productData['image'] = $full_path;

        $created = Product::create($productData);
        if($created){
            return redirect()->route('admin/product/index')->with(['success' => 'Maxsulot yaratildi']);
        }
        return redirect()->back();
    }

    public function edit($id)
    {   
        $item = Product::findOrFail($id);
        $category = Category::get();
        return view('admin/product/edit', compact('item','category'));
    }

    public function update($id, Request $request)
    {
        $product = Product::find($id);

        $productUpdateData = $request->validate([
            'image' => 'file|max:5120|mimes:png,jpg,jpeg',
            'name' => 'required|min:3|max:20',
            'category_id' => 'required',
            'price' => 'required|numeric|max:9999999',
            'old_price' => 'numeric|max:9999999',
            'discount' => 'numeric|max:100',
            'on_stock' => 'required',
            'description' => 'required|string|min:3|max:300'
        ]);

        $full_path = $product->image;
        if($uploaded = $request->file('image')){

            $uploaded = $request->file('image');
            $extension = $uploaded->getClientOriginalExtension();
            $image_name = time()."_"."_img"."$extension";
            $uploaded->move(public_path('assets/img/product'), $image_name);
            $full_path = '/assets/img/product/'.$image_name;
        }

        $productUpdateData['image'] = $full_path;

        $update = $product->update($productUpdateData);
        if($update){
            return redirect()->route('admin/product/index')->with(['success' => 'O`zgartirildi']);
        }
        return redirect()->back();
    }

    public function destroy($id)
    {
        $item = Product::find($id);
        $item->delete();
        return redirect()->route('admin/product/index')->with(['success' => 'O`chirildi']);
    }

}
