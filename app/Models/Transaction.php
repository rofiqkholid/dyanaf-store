<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'customer_name',
        'service_name',
        'amount',
        'status',
        'payment_method',
        'snap_token',
        'phone',
        'metadata',
    ];

    public function cvOrder(): HasOne
    {
        return $this->hasOne(CvOrder::class);
    }
}
