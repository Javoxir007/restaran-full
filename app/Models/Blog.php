<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['category_id','image','date','author_id','food_name','short_description','full_description'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter($query, $request)
    {
        $search = $request->name;

        if(!empty($search)){
            $query->where('food_name', 'like', "%$search%")
                  ->orWhere('full_description', 'like', "%$search%")
                  ->orWhere('short_description', 'like', "%$search%");
        }
    }
    
    
    
}
