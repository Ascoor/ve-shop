<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    use HasFactory;


    protected $fillable = ['review_id', 'product_id']; // الخصائص المطلوبة

    public function review()
    {
        return $this->belongsTo(Review::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

