<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\CustomerProfile;
use Illuminate\Database\Seeder;

class CustomerProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customer = Customer::first(); // প্রথম customer ব্যবহার
        for ($i = 1; $i <= 10; $i++) {
            CustomerProfile::create([
                'customer_id'      => $customer->id, // প্রথম customer ব্যবহার
                'profile_picture'  => null,
                'gender'           => 'Male',
                'date_of_birth'    => '1995-01-01',
                'shipping_address' => 'Dhaka',
                'billing_address'  => 'Dhaka',
            ]);
        }
    }
}
