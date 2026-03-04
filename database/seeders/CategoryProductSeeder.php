<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class CategoryProductSeeder extends Seeder
{
    public function run(): void
    {
        $categories = Category::all();
        $products = Product::all();

        if ($categories->isEmpty() || $products->isEmpty()) {
            return;
        }

        foreach ($categories as $category) {

            // প্রতিটি category তে 3টা random product attach করি
            $randomProducts = $products->random(
                min(3, $products->count())
            );

            foreach ($randomProducts as $product) {

                // duplicate এড়ানোর জন্য syncWithoutDetaching ব্যবহার করা ভালো
                $category->products()->syncWithoutDetaching([
                    $product->id
                ]);
            }
        }
    }
}