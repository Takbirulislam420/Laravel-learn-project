<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $fillable = [
        'category_id',
        'sku',
        'name',
        'description',
        'price',
        'stock_quantity',
        'active',
    ];

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }

    public function orderItems(){
        return $this->hasMany(OrderItem::class);
    }

    public function movements(){
        return $this->hasMany(InventoryMovement::class);
    }
}
