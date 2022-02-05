<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Pages\IndexPageController;
use App\Http\Controllers\Pages\AboutPageController;
use App\Http\Controllers\Pages\BlogPageController;
use App\Http\Controllers\Pages\MenuPageController;
use App\Http\Controllers\Pages\ShopPageController;
use App\Http\Controllers\Pages\BlogFullPageController;



class PageController extends Controller
{
    
    public function index()
    {
        return IndexPageController::indexContent();
    }

    public function about()
    {
        return AboutPageController::aboutContent(); 
    }

    public function blog(Request $request)
    {
        return BlogPageController::blogContent($request);
    }

    public function blogFull($id)
    {
        return BlogFullPageController::blogFullContent($id);
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
        return MenuPageController::menuContent();
    }

    public function shopDetailes($id)
    {
        return ShopPageController::shopContent($id);
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
