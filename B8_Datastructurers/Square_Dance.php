<?php
class Dancer
{
    public $name;
    public $gender;
    public function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }
}
class Nonstop
{
    private $namQueue;
    private $nuQueue;
    public function __construct()
    {
        $this->namQueue  = new SplQueue();
        $this->nuQueue  = new SplQueue();
    }


    public function addNamDancer($name)
    {
        $dancer = new Dancer($name, 'nam');
        $this->namQueue->enqueue($dancer);
    }



    public function addNuDancer($name)
    {
        $dancer = new Dancer($name, 'nu');
        $this->nuQueue->enqueue($dancer);
    }


    public function ghepDoi()
    {
        while (!$this->namQueue->isEmpty() && !$this->nuQueue->isEmpty()) {
            $namDancer = $this->namQueue->dequeue();
            $nuDancer = $this->nuQueue->dequeue();
            echo "Cặp mới: " . $namDancer->name . " và " . $nuDancer->name . "<br>";
        }

        if (!$this->namQueue->isEmpty()) {
            echo "Có " . $this->namQueue->count() . " bạn nam đang phải đợi." . "<br>";
        }

        else  {
            echo "Có " . $this->nuQueue->count() . " bạn nữ đang phải đợi." . "<br>";
        }
    }
}




$Nonstop = new Nonstop();

$Nonstop->addNamDancer('Nghĩa');
$Nonstop->addNamDancer('Phú');
$Nonstop->addNamDancer('Bảo');
$Nonstop->addNamDancer('Tâm');
$Nonstop->addNamDancer('Vũ');
$Nonstop->addNamDancer('Lãm');

$Nonstop->addNuDancer('Mỹ Tâm');
$Nonstop->addNuDancer('Hồ Ngọc Hà');
$Nonstop->addNuDancer('Fukuda Emi');
$Nonstop->addNuDancer('Ngân 98');
$Nonstop->addNuDancer('Ngọc Trinh');

$Nonstop->ghepDoi();

