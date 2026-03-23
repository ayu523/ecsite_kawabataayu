<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\OrderService;

class OrderServiceTest extends TestCase
{
    public function test_calculate_total_price()
    {
        $service = new OrderService();

        $items = [
            ['price' => 1000, 'quantity' => 2],
            ['price' => 500, 'quantity' => 1],
        ];

        $result = $service->calculateTotalPrice($items);

        $this->assertEquals(2500, $result);
    }
}