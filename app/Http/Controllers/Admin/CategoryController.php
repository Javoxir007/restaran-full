<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with(['product:id,category_id','blog:id,author_id'])->orderBy('id', 'desc')->paginate(10);
        return view('admin/category/index', compact('categories'));
    }

    public function create()
    {
        return view('admin/category/create');
    }

    public function store(Request $request)
    {
        $categoryData = $request->validate([
            'name' => 'required|string|min:3|max:25'
        ]);

        $created = Category::create($categoryData);
        
        if($created){
            return redirect()->route('admin/category/index')->with(['success' => 'Kategoriya yaratildi']);
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $item = Category::findOrFail($id);
        return view('admin/category/edit', compact('item'));
    }

    public function update($id, Request $request)
    {
        $category = Category::find($id);

        $categoryUpdateData = $request->validate([
            'name' => 'required|string|min:3|max:25'
        ]);

        $update = $category->update($categoryUpdateData);
        
        if($update){
            return redirect()->route('admin/category/index')->with(['success' => 'O`zgartirildi']);
        }
        return redirect()->back();

    }

    public function destroy($id)
    {
        $item = Category::find($id);
        $item->delete();
        return redirect()->route('admin/category/index')->with(['success' => 'O`chirildi']);
    }
}
