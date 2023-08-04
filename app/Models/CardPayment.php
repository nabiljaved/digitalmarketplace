<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'message',
        'payment_id',
        'userid',
        'service_id',
        'amount_captured',
        'service_charge',
        'coupon_charge',
        'payment_method',
        'card_brand',
        'card_country',
        'currency',
    ];

     // Define relationships
     public function user()
     {
         return $this->belongsTo(User::class, 'userid');
     }
 
}
