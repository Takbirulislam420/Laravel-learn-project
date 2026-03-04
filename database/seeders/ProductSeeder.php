<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $category = Category::first(); // প্রথম category ব্যবহার

        for ($i = 1; $i <= 10; $i++) {
            Product::create([
                'category_id'    => $category->id,
                'sku'            => 'SKU-' . $i,
                'name'           => 'Sample Product ' . $i,
                'description'    => 'This is product number ' . $i,
                'price'          => rand(100, 1000),
                'stock_quantity' => rand(10, 100),
                'active'         => true,
            ]);
        }
    }
}