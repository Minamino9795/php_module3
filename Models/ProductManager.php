<?php
// namespace Services;

use Models\Product;

class ProductManager
{
    public function __construct(private array $products = [])
    {
    }

    public function add($product): void
    {
        $this->products[] = $product;
    }

    public function getProducts(): array
    {
        return $this->products;
    }
}