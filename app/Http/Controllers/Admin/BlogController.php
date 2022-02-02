<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Author;
use App\Models\Category;

class BlogController extends Controller
{
    
    public function index()
    {
        $blogs = Blog::with(['author:id,name','category:id,name'])->orderBy('id', 'desc')->paginate(10);
        return view('admin/blogs/index', compact('blogs'));
    }

    public function create()
    {
        $category = Category::get();
        $authors = Author::get();
        return view('admin/blogs/create', compact('category','authors'));
    }

    public function store(Request $request)
    {
        $blogData = $request->validate([
            'category_id' => 'required',
            'image' => 'required|file|max:5120|mimes:png,jpg,jpeg',
            'date' => 'required',
            'author_id' => 'required',
            'food_name' => 'required|min:3|max:50',
            'short_description' => 'required|string|min:3|max:120',
            'full_description' => 'required|string|min:3|max:3000'
        ]);

        $full_path = null;
        if($uploaded = $request->file('image')){

            $uploaded = $request->file('image');
            $extension = $uploaded->getClientOriginalExtension();
            $image_name = time()."_img"."$extension";
            $uploaded->move(public_path('assets/img/blog'), $image_name);
            $full_path = '/assets/img/blog/'.$image_name;
        }

        $blogData['image'] = $full_path;

        $created = Blog::create($blogData);
        if($created){
            return redirect()->route('admin/blogs/index')->with(['success' => 'Blog Yaratildi']);
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $item = Blog::findOrFail($id);
        $category = Category::get();
        $authors = Author::get();
        return view('admin/blogs/edit', compact('item','category','authors'));
    }

    public function update($id, Request $request)
    {
        $blog = Blog::find($id);

        $blogUpdateData = $request->validate([
            'category_id' => 'required',
            'image' => 'file|max:5120|mimes:png,jpg,jpeg',
            'date' => 'required',
            'author_id' => 'required',
            'food_name' => 'required|min:3|max:50',
            'short_description' => 'required|string|min:3|max:120',
            'full_description' => 'required|string|min:3|max:3000'
        ]);

        $full_path = $blog->image;
        if($uploaded = $request->file('image')){

            $uploaded = $request->file('image');
            $extension = $uploaded->getClientOriginalExtension();
            $image_name = time()."_img"."$extension";
            $uploaded->move(public_path('assets/img/blog'), $image_name);
            $full_path = '/assets/img/blog/'.$image_name;
        }

        $blogUpdateData['image'] = $full_path;

        $update = $blog->update($blogUpdateData);
        if($update){
            return redirect()->route('admin/blogs/index')->with(['success' => 'O`zgartirildi']);
        }
        return redirect()->back();

    }

    public function destroy($id)
    {
        $item = Blog::find($id);
        $item->delete();
        return redirect()->route('admin/blogs/index')->with(['success' => 'Blog o`chirildi']);
    }

}
