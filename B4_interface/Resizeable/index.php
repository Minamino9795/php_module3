<?php
include_once('Circle.php');
include_once('Rectangle.php');
include_once('Square.php');

interface Resizeable {
    public function resize($percentage);
}
$shapes = [
    new Circle(5),
    new Rectangle(4, 6),
    new Square(3)
];

// Tăng kích thước và in ra diện tích trước và sau khi tăng kích thước
foreach ($shapes as $shape) {
    $areaBefore = $shape->getArea();
    $resizePercentage = rand(1, 100);
    $shape->resize($resizePercentage);
    $areaAfter = $shape->getArea();

    echo "Diện tích trước khi tăng kích thước: " . $areaBefore . "<br>";
    echo "Diện tích sau khi tăng kích thước ($resizePercentage%): " . $areaAfter . "<br><br>";
}