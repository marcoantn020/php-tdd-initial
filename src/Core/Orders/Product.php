<?php

namespace Core\Orders;

class Product
{
    public function __construct(
        protected string $id,
        protected string $name,
        protected float $price,
        protected int $total
    ){}

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getTotal(): int
    {
        return $this->total;
    }

    public function total(): float|int
    {
        return $this->total * $this->price;
    }

    public function totalWithTax10(): float|int
    {
        $total = $this->total * $this->price;
        return ($total * 0.1) + $total;
    }
}