<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomersSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            Customer::create([
                'name'  => fake()->name(),
                'email' => fake()->unique()->Email(),
                'phone' => fake()->phoneNumber(),
            ]);
        }
    }
}