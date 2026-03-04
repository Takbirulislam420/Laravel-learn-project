<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryProductFactory> */
    use HasFactory;

    protected $fillable = [
        'category_id',
        'product_id',];

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }
}
