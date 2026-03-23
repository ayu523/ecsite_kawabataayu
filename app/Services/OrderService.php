<?php

namespace App\Services;

class OrderService
{
    public function calculateTotalPrice(array $items): int
    {
        return array_reduce($items, function ($total, $item) {
            return $total + ($item['price'] * $item['quantity']);
        }, 0);
    }
}