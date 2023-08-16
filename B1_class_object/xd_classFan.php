<?php
class Fan
{
    const SLOW = 1;
    const MEDIUM = 2;
    const  FAST  = 3;

    private $speed;
    private $on;
    private $radius;
    private $color;

    public function __contructor($speed, $on, $radius, $color)
    {
        $this->speed = self::SLOW;
        $this->on = false;
        $this->radius = 5;
        $this->color = "blue";
    }
    public function getSpeed()
    {
        return $this->speed;
    }
    public function setSpeed($speed)
    {
        return $this->speed = $speed;
    }
    public function getOn()
    {
        return $this->on;
    }
    public function setOn($on)
    {
        return $this->on = $on;
    }
    public function getRadius()
    {
        return $this->radius;
    }
    public function setRadius($radius)
    {
        return $this->radius = $radius;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setColor($color)
    {
        return $this->color = $color;
    }
    public function tostring()
    {
        if($this->on){
            return "Speed: ".$this->speed .  ",Color: ". $this->color .",Radius: ".$this->radius . " quạt đang quay tít thò lò";
        }else{
            return "Color: ". $this->color . " quạt đang tắt";
        }
    }
}
// Đối tượng Fan 1: Gán giá trị lớn nhất cho speed, radius là 10, color là yellow và quạt ở trạng thái bật.
// Đối tượng Fan 2: Gán giá trị trung bình cho speed, radius là 5, color là blue và quạt ở trạng thái tắt.

$Fan1= new Fan();
$Fan1->setSpeed(Fan::FAST);
$Fan1->setColor("yellow");
$Fan1->setRadius(10);
$Fan1->setOn(true);

$Fan2= new Fan();
$Fan2->setSpeed(Fan::MEDIUM);
$Fan2->setColor("blue");
$Fan2->setRadius(5);
$Fan2->setOn(false);

echo "Quạt 1 :" . $Fan1->toString();
echo "<br>";
echo "Quạt 2 :" . $Fan2->toString();















































//     /* Phương thức toString() trả về chuỗi chứa thông tin của quạt. Nếu quạt đang ở trạng thái on, 
//     phương thức trả về speed, color, và radius với chuỗi "fan is on". Nếu quạt không ở trạng thái on, 
//     phương thức trả về color, radius với chuỗi "fan is off". */
//     public function toString()
//     {
//         if ($this->on) {
//             return "Tốc độ quạt : " . $this->speed . ", bán kính : " . $this->radius . ", màu sắc : " . $this->color . " quạt đang chạy";
//         } else {
//             return "Màu sắc : " . $this->color . "quạt đang tắt ";
//         }
//     }
// }
// $Fan1 = new Fan();
// $Fan1->setSpeed(Fan::FAST);
// $Fan1->setRadius(10);
// $Fan1->setColor("yellow");
// $Fan1->setOn(True);

// $Fan2 = new Fan();
// $Fan2->setSpeed(Fan::MEDIUM);
// $Fan2->setRadius(5);
// $Fan2->setColor("blue ");
// $Fan2->setOn(true);

// echo "Quạt 1 :" . $Fan1->toString();
// echo "<br>";
// echo "Quạt 2 :" . $Fan2->toString();
