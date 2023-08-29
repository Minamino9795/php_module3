<?php
class Person {
    public $name;
    public $age;
    public $address;
    public function __construct($name,$age,$address)
    {
        $this->name=$name;
        $this->age=$age;
        $this->address=$address;
    }
}
class Model {

    public function listPerson() {
        return [
            0 => new Person(name: 'nguyen van a' , age: '23' , address: 'quang tri'),
            1 => new Person(name: 'nguyen van b' , age: '24' , address: 'hue'),
            2 => new Person(name: 'nguyen van c' , age: '25' , address: 'da nang'),
        ];
    }
}