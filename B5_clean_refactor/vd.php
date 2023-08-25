<?php
$width = 10;
$height = 5;
$area = $width * $height;
echo "Diện tích: " . $area;


//


$width = 10;
$height = 5;
$area = calculateRectangleArea($width, $height);
echo "Diện tích: " . $area;

function calculateRectangleArea($width, $height) {
    return $width * $height;
}
