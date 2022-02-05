<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chef;
use App\Models\Product;
use App\Models\Blog;

class IndexPageController extends Controller
{

    public function indexContent()
    {
        $chefs = IndexPageController::getChefs();
        $product = IndexPageController::randProduct();
        $blogs = IndexPageController::getAllBlogs();

        return view('pages/index', compact('chefs','product','blogs'));
    }
    

    public function getChefs()
    {
        return Chef::orderBy('id', 'desc')->limit(4)->get();
    }

    
    public function randProduct()
    {
        $rand = [];

        $products = Product::get();
        foreach($products as $item){
            $rand[] = $item;
        }
        
        $rands = array_rand($rand, 7);

        $product = [];
        foreach($rands as $item){
            $product[] = $rand[$item];
        }

        return $product; 
    }


    public function getAllBlogs()
    {
        return Blog::orderBy('id', 'desc')->limit(3)->get();
    }

    

}
