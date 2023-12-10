<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function orderItem(){
        return $this->belongsToMany(Order::class, 'order_item', 'product_id', 'order_id');
    }
}
