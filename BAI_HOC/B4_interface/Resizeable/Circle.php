<?php

use JetBrains\PhpStorm\Pure;

class Circle implements Resizeable {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * $this->radius * $this->radius;
    }

    public function resize($percentage) {
        $this->radius *= (1 + $percentage / 100);
    }
}