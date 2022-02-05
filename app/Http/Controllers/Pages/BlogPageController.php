<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class BlogPageController extends Controller
{
    
    public function blogContent($request)
    {
        $last_blogs = BlogPageController::lastblogs();
        $blogCount = BlogPageController::getBlogCount();
        $searchBlogs = BlogPageController::searchBlogs($request);

        return view('pages/blog-grid', compact('last_blogs','blogCount','searchBlogs'));
    }


    public function searchBlogs(Request $request)
    {
        return Blog::filter($request)->paginate(6);
    }


    public function lastBlogs()
    {
        return Blog::orderBy('id', 'desc')->limit(3)->get();       
    }
    

    public function getBlogCount()
    {
        $number = [];

        $allBlogs = Category::withCount('blog')->get();

        foreach($allBlogs as $blog){
            $number[] = $blog;
        }

        return $number;
    }

       
    
}
