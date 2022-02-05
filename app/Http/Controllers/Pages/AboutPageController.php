<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chef;
use App\Models\Blog;

class AboutPageController extends Controller
{
    
    public function aboutContent()
    {
        $chefs = AboutPageController::getAllChefs();
        $blogs = AboutPageController::getAllBlogs();

        return view('pages/about', compact('chefs','blogs'));
    }


    public function getAllChefs()
    {
        return Chef::orderBy('id', 'desc')->paginate(4);
    }


    public function getAllBlogs()
    {
        return Blog::orderBy('id', 'desc')->limit(3)->get();
    }


}
