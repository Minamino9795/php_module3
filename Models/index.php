<?php
include_once "Product.php";
include_once "ProductManager.php";

// use Services\ProductManager;
// use Models\Product;

$productManager = new ProductManager();
$productManager->add(new Product("Laptop", 10000));
$productManager->add(new Product("Mobile", 3000));

$products = $productManager->getProducts();
foreach ($products as $product) {
    echo 'Name: ' . $product->getName() . " - " . $product->getPrice()  . "<br/>";
}