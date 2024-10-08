<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location']; // الخصائص المطلوبة

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_warehouses');
    }
}
