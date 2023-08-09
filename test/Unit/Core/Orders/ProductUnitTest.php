<?php

namespace test\Core\Orders;

use Core\Orders\Product;
use PHPUnit\Framework\TestCase;

class ProductUnitTest extends TestCase
{

    public function test_get_attributes()
    {
        $product = new Product(
            id: '1',
            name: "Product 01",
            price: 10,
            total: 12
        );

        $this->assertEquals('Product 01', $product->getName());
        $this->assertEquals('10', $product->getPrice());
        $this->assertEquals('12', $product->getTotal());
        $this->assertEquals('1', $product->getId());
    }

    public function test_calc()
    {
        $product = new Product(
            id: '1',
            name: "Product 01",
            price: 10,
            total: 12
        );
        $this->assertEquals(120, $product->total());
    }

    public function test_calc_with_tax10()
    {
        $product = new Product(
            id: '1',
            name: "Product 01",
            price: 200,
            total: 2
        );
        $this->assertEquals(440, $product->totalWithTax10());
    }

}