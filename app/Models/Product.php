<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name','category_id','price','old_price','image','discount','on_stock','description'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
