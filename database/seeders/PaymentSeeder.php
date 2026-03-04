<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   $order=Order::first(); // প্রথম category ব্যবহার
        for ($i = 1; $i <= 10; $i++) {
        Payment::create([
            'order_id' => $order->id,
            'payment_method' => 'credit_card',
            'amount' => rand(100, 1000),
            'status' => 'completed',
        ]);
    }
    }
}
