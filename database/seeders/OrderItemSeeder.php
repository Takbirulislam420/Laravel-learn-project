<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;

class OrderItemSeeder extends Seeder
{
    public function run(): void
    {
        $orders = Order::all();
        $products = Product::all();

        if ($orders->isEmpty() || $products->isEmpty()) {
            return;
        }

        foreach ($orders as $order) {

            // প্রতি order এ 2টা random product যোগ করি
            $randomProducts = $products->random(
                min(2, $products->count())
            );

            foreach ($randomProducts as $product) {

                $quantity = rand(1, 5);
                $unitPrice = $product->price;
                $totalPrice = $quantity * $unitPrice;

                OrderItem::create([
                    'order_id'   => $order->id,
                    'product_id' => $product->id,
                    'quantity'   => $quantity,
                    'unit_price' => $unitPrice,
                    'total_price'=> $totalPrice,
                ]);
            }
        }
    }
}