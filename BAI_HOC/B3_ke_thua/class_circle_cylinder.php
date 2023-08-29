<?php
class Circle
{
    protected $radius;
    protected $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        return $this->color = $color;
    }

    public function getArea()
    {
        return pi() * $this->radius * $this->radius;
    }

    public function toString()
    {
        return "Circle [radius = {$this->radius}, color = {$this->color}]". "<br>";
    }
}

class Cylinder extends Circle
{
    private $height;

    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getVolume()
    {
        return parent::getArea() * $this->height ;
    }

    public function toString()
    {
        return "Cylinder [radius={$this->getRadius()}, color={$this->getColor()}, height={$this->height}]";
    }
}

class Test {
    public static function main() {
        $circle = new Circle(5, 'red');
        echo $circle->toString() . "\n";
        echo "Area: " . $circle->getArea() . "\n". "<br>";

        $cylinder = new Cylinder(5, 'blue', 10);
        echo $cylinder->toString() . "\n" . "<br>";
        echo "Volume: " . $cylinder->getVolume() . "\n";
    }
}

Test::main();
