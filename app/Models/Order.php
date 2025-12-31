<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // যেসব কলাম mass assign করা যাবে (fillable fields)
    protected $fillable = [
        'user_id',
        'order_code',
        'image',
        'name',
        'price',
        'quantity',
        'total',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
