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

    public function blogFull()
    {
        return view('pages/blog-details');
    }

    public function contact()
    {
        return view('pages/contact');
    }

    public function reservation()
    {
        return view('pages/reservation');
    }

    public function menu()
    {
        return view('pages/food-menu');
    }

    public function shopDetailes()
    {
        return view('pages/shop-details');
    }

    public function cart()
    {
        return view('pages/cart');
    } 

    public function teamChefs()
    {
        return view('pages/team');
    }

    public function checkout()
    {
        return view('pages/checkout');
    }

    public function notPage()
    {
        return view('pages/404');
    }

    public function faqs()
    {
        return view('pages/faqs');
    }


}
