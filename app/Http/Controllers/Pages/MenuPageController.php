<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class MenuPageController extends Controller
{
    
    public function menuContent()
    {
        $product = MenuPageController::getAllProduct();

        return view('pages/food-menu', compact('product'));
    }


    public function getAllProduct()
    {
        return Product::paginate(6);
    }

}
