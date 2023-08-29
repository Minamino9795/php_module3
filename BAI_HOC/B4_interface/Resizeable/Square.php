<?php
use JetBrains\PhpStorm\Pure;
class Square implements Resizeable {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function getArea() {
        return $this->side * $this->side;
    }

    public function resize($percentage) {
        $this->side *= (1 + $percentage / 100);
    }
}