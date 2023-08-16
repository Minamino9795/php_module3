<?php
// namespace Models;
class Product
{
    function __construct( private string $name = '',
                          private int $price = 0)
    {}

    function setName(string $name): void
    {
        $this->name = $name;
    }

    function getName(): string
    {
        return $this->name;
    }

    function setPrice(int $price): void
    {
        $this->price = $price;
    }

    function getPrice(): int
    {
        return $this->price;
    }
}