<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'description', 'price', 'category_id', 'brand_id'];

    // علاقة "منتج إلى تصنيف" (تصنيف واحد لكل منتج)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // علاقة "منتج إلى علامة تجارية" (براند واحد لكل منتج)
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    // علاقة "منتج إلى تاجز" (علاقة متعدد إلى متعدد)
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'product_tag');
    }
      // العلاقة بين المنتج والمخزون
      public function stock()
      {
          return $this->hasOne(Stock::class);
      }
}
