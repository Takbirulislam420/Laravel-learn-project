<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   $customer = Customer::first(); // প্রথম category ব্যবহার
        for ($i = 1; $i <= 10; $i++) {
        Order::create([
            'order_number' => $i,
            'customer_id' => $customer->id,
            'status' => 'pending',
            'total_amount' => rand(100, 1000),
            'tax_amount' => rand(10, 100),
            'discount_amount' => rand(5, 50),
            'grand_total' => rand(100, 1000),
            'order_date' => now()->subDays(rand(1, 30)),

        ]);
    }
    }
}
