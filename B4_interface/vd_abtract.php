<?php
abstract class Animal {
    protected $name;

    abstract public function makeSound(); // Phương thức abstract

    public function setName($name) {
        $this->name = $name;
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

// Không thể tạo đối tượng từ lớp abstract
// $animal = new Animal(); // Lỗi!

$dog = new Dog();
$dog->setName("Buddy");
echo $dog->makeSound(); 

$cat = new Cat();
$cat->setName("Whiskers");
echo $cat->makeSound(); 
