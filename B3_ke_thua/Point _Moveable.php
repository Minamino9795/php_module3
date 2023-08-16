<?php
class Point
{
    protected $x;
    protected $y;
    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getX(): float
    {
        return $this->x;
    }
    public function setX(float $x)
    {
        return $this->x = $x;
    }
    public function  getY(): float
    {
        return $this->y;
    }
    public function setY(float $y)
    {
        return $this->y = $y;
    }
    public function getXY(): array
    {
        return [$this->x, $this->y];
    }
    public function setXY(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function toString()
    {
        return "Point x= " . $this->x . " , y= " . $this->y;
    }
}


class MoveablePoint extends Point
{
    private $xSpeed;
    private $ySpeed;
    public function __construct(float $x, float $y,float $xSpeed, float $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    public function setXSpeed($xSpeed)
    {
         $this->xSpeed = $xSpeed;
    }

    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    public function setYSpeed($ySpeed)
    {
         $this->ySpeed = $ySpeed;
    }

    public function move(){
        parent::setX(parent::getX() + $this->xSpeed);
        parent::setY(parent::getY() + $this->ySpeed);
        return $this;
    }

    public function getSpeed()
    {
        return [$this->x, $this->y, $this->xSpeed , $this->ySpeed];
    }
    

    public function toString()
    {
        return "MoveablePoint x= " . $this->x . " , y= " . $this->y . " , xspeed= " . $this->xSpeed. " , yspeed= " . $this->ySpeed;
    }
}

$objPoint1 = new Point(2, 2);
echo print_r($objPoint1->getXY());
echo "<br/>Point1: " . $objPoint1->toString();


$objMovablePoint3 = new MoveablePoint(5, 10, 15, 20);
echo "<br/>MP3: " . $objMovablePoint3->toString();

