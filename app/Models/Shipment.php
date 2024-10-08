<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'shipping_provider_id', 'shipped_date']; // الخصائص المطلوبة

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function shippingProvider()
    {
        return $this->belongsTo(ShippingProvider::class);
    }
}
