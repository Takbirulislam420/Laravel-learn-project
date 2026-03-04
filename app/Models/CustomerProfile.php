<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerProfile extends Model
{
    /** @use HasFactory<\Database\Factories\CustomerProfileFactory> */
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'profile_picture',
        'gender',
        'date_of_birth',
        'shipping_address',
        'billing_address',
    ];

    public function customer(){
        return $this->belongsTo(Customers::class);
    }
}
