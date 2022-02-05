<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Pages\BlogPageController;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class BlogFullPageController extends Controller
{
    

    public function blogFullContent($id)
    {
        $item = Blog::find($id);
        $last_blogs = BlogPageController::lastBlogs();
        $blogCount = BlogPageController::getBlogCount();

        return view('pages/blog-details', compact('item','last_blogs','blogCount'));
    }


}
