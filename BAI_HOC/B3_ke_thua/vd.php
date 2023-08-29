<?php
// class A
// {
//     public function sayHello()
//     {
//         echo "Hello from class A!";
//     }
// }

// class B extends A
// {
//     public function sayGoodbye()
//     {
//         echo "Goodbye from class B!";
//     }
// }

// $objB = new B();
// $objB->sayHello(); // Gọi phương thức từ lớp cha A
// $objB->sayGoodbye(); // Gọi phương thức của lớp con B






class A
{
    protected $protected_A = 'Protected';
    private $private_A = 'Private';
    public $public_A = 'Public';

    private function showPrivate()
    {
        echo $this->private_A;
    }
    protected function showProtected()
    {
        echo $this->protected_A;
    }
    public function showPublic()
    { 
        echo $this->public_A;
    }
}
class B extends A
{
    public function classB()
    {
        echo $this->protected_A;
    }
}
class C extends B
{
    public function showInfo()
    {
        $this->protected_A = 'Nguyễn Văn A';
        $this->public_A = 'Nguyễn Văn B';
        // Lệnh này sai vì nó truy xuất vào thuộc tính private
        // $this->private_A = 'Lệnh sai';
    }
}
$c = new C();
//Lệnh này đúng vì nó gọi đến hàm public của lớp cha A
$c->showPublic();

// Lệnh này sai vì nó gọi hàm protected của lớp cha A
//$c->showProtected();

//Lệnh này sai vì nos gọi hàm private của lớp cha A
//$c->showPrivate();

//Lệnh này đúng vì nó truy xuất vào hàm public của lớp cha B
$c->classB();
