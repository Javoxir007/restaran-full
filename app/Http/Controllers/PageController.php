<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function index()
    {
        return view('pages/index');
    }

    public function about()
    {
        return view('pages/about');
    }

    public function blog()
    {
        return view('pages/blog-grid');
    }

    public function contact()
    {
        return view('pages/contact');
    }

}
