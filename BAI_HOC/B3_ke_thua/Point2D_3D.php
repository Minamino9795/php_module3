<?php
class Point2D
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
        return "Point2D x= " . $this->x . " , y= " . $this->y;
    }
}

class Point3D extends Point2D
{
    private $z;
    public function __construct(float $x, float $y, float $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }
    public function getZ()
    {
        return $this->z;
    }
    public function setZ($z)
    {
        return $this->z = $z;
    }
    public function setXYZ(float $x, float $y, float $z)
    {
        parent::setXY($x, $y);
        $this->z = $z;
    }
    public function getXYZ()
    {
        return [$this->x, $this->y, $this->z];
    }

    public function toString()
    {
        return "Point3D x= " . $this->x . " , y= " . $this->y . " , z= " . $this->z;
    }
}

class Test
{
    public static function main()
    {
        $point2D = new Point2D(2.5, 3.7);
        echo $point2D->toString() . "<br>";

        $point3D = new Point3D(4.1, 5.2, 6.3);
        echo $point3D->toString() . "<br>";

        $point3D->setXYZ(1.2, 2.0, 3.0);
        echo "New Point3D: " . $point3D->toString() . "\n";
    }
}
Test::main();




/*
$x:float
$y:float
$z:float
__contructor(float $x , float $x):void
getX():float
getY():float
getZ():float
setX(float $x)
setY(float $Y)
setZ(float $Z)
setXY(float $x , float $x):void
getXY():array
getXYZ():array
setXY(float $x , float $x, float $z):void
toString():string
*/