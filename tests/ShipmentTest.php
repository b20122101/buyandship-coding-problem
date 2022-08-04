<?php

namespace Tests;

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;
use App\Http\Controllers\ShippingController;

class ShipmentTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_func_calculate_shipment_fee()
    {
        $shipping = new ShippingController();

        $response = $shipping->calculate_shipment_fee('rule1', 2);
        $this->assertEquals($response, 20);

        $response = $shipping->calculate_shipment_fee('rule1', 2.4);
        $this->assertEquals($response, 30);

        $response = $shipping->calculate_shipment_fee('rule2', 3);
        $this->assertEquals($response, 18);

        $response = $shipping->calculate_shipment_fee('rule3', 4);
        $this->assertEquals($response, 26);

    }
}
