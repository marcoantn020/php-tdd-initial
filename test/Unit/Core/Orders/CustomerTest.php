<?php

namespace test\Core\Orders;

use Core\Orders\Customer;
use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{

    public function test_attributes()
    {
        $customer = new Customer(
            name: "Marco Antonio"
        );

        $customer->changeName(
            name: "new name"
        );

        $this->assertEquals("new name",$customer->getName());
    }
}