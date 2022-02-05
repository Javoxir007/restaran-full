<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ShopPageController extends Controller
{
    
    public function shopContent($id)
    {
        $item = Product::find($id);
        $stock = ShopPageController::getStock($id);

        return view('pages/shop-details', compact('item','stock'));
    }

    public function getStock($id)
    {
        
        $item = Product::find($id);

        $stock = "";
        if($item->on_stock > 50){
            return $stock = "On Stock";
        }
        return $stock = "Not Stock";
     

    }


}
