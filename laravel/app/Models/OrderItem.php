<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'order_items';

    protected $fillable = [
        'order_id', 'service_id', 'quantity', 'price'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}