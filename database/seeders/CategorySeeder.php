<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
    
        // 🔹 Parent Categories
        $electronics = Category::create([
            'name' => 'Electronics',
            'position' => 1,
        ]);

        $fashion = Category::create([
            'name' => 'Fashion',
            'position' => 2,
        ]);

        // 🔹 Electronics Children
        Category::create([
            'name' => 'Mobile',
            'parent_id' => $electronics->id,
            'position' => 1,
        ]);

        Category::create([
            'name' => 'Laptop',
            'parent_id' => $electronics->id,
            'position' => 2,
        ]);

        // 🔹 Fashion Children
        Category::create([
            'name' => 'Men Clothing',
            'parent_id' => $fashion->id,
            'position' => 1,
        ]);

        Category::create([
            'name' => 'Women Clothing',
            'parent_id' => $fashion->id,
            'position' => 2,
        ]);
    }
}