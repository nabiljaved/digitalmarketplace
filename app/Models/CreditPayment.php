<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditPayment extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'phone',
        'date',
        'totalPrice',
        'servicetitle',
        'user_id',
        'service_charge',
        'coupon_charge',
        'service_id',
    ];

}
