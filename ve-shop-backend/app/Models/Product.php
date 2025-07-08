<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'brand_id',
 
        'name_en',
        'name_ar',
        'description_en',
        'description_ar',
        'price',
        'stock',
        'image_path',
    ]; 
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    } 
}
