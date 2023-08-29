<?php
//VD PRIVATE:
// class Customer
// {
//     private string $name;
//     public function setName($name): void
//     {
//         $this->name = $name;
//     }
//     public function getName(): string
//     {
//         return $this->name;
//     }
// }
// $c = new Customer();
// $c->setName("nghia");

// //lỗi, không thể truy cập $name từ bên ngoài lớp 
// echo $c->name; 

// //$name chỉ có thể được truy cập từ bên trong lớp
// echo $c->getName(); 





//VD PUBLIC
// class Customer {
//     public string $name;
//     public function setName(string $name): void
//     {
//     $this->name = $name;
//     }
//     public function getName(): string
//     {
//     return $this->name;
//     }
//     }
//     $c = new Customer();
//     $c->setName("Tâm");
//     echo $c->name; // điều này sẽ hoạt động như nó là công khai.





//VD PROTECTED
// class Customer
// {
//     //Thuộc tính "name" trong lớp "Customer" được khai báo là "protected", vì vậy nó chỉ có thể truy cập từ bên trong lớp "Customer" và các lớp con của nó.
//     protected string $name;
//     public function setName(string $name): void
//     {
//         $this->name = $name;
//     }
//     public function getName(): string
//     {
//         return $this->name;
//     }
// }
// //"DiscountCustomer" là lớp con kế thừa từ "Customer", do đó nó có thể truy cập thuộc tính "name" thông qua phương thức public của lớp cha.
// class DiscountCustomer extends Customer
// {
//     private int $discount;
//     public function setData(string $name, int $discount): void
//     {
//         $this->name = $name;
//         $this->discount = $discount;
//     }
// }
// $dc = new DiscountCustomer();
// $dc->setData("Stuart Broad", 10);

// echo $dc->name; // điều này không hoạt động vì $name được bảo vệ 
//     // chỉ khả dụng trong lớp Customer và DiscountCustomer
