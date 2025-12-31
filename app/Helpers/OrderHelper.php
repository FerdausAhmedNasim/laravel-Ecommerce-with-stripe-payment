<?php

namespace App\Helpers;

use App\Models\Order;
use Illuminate\Support\Str;

class OrderHelper
{
    public static function generateUniqueOrderCode(): string
    {
        do {
            $code = 'ORD-' . strtoupper(Str::random(8));
        } while (Order::where('order_code', $code)->exists());

        return $code;
    }
}
