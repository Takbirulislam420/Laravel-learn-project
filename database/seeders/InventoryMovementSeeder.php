<?php

namespace Database\Seeders;

use App\Models\InventoryMovement;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventoryMovementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product=Product::first(); // প্রথম category ব্যবহার
        for ($i = 1; $i <= 10; $i++) {
        InventoryMovement::create([
            'product_id' => $product->id,
            'quantity' => rand(1, 100),
            'movement_type' => rand(0, 1) ? 'in' : 'out',
            'description' => 'Inventory movement for product ' . $i,
        ]);
    }
    }
}
