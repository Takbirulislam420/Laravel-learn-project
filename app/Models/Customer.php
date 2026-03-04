<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /** @use HasFactory<\Database\Factories\CustomersFactory> */
    // if use soft delete, u must add deleted_at column in ur migration file and add use soft delete in ur model
    //use HasFactory,SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
    ];

    public function profile(){
        return $this->hasOne(CustomerProfile::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
