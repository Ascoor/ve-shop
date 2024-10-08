<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingProvider extends Model
{
    use HasFactory;
    
    protected $fillable = ['name']; // الخصائص المطلوبة

    public function shipments()
    {
        return $this->hasMany(Shipment::class);
    }
}