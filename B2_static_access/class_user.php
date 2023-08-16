<?php
class User
{

    protected string $name;
    protected string $mail;
    public int $role;

    public function __construct($name, $mail, $role)
    {
        $this->name = $name;
        $this->mail = $mail;
        $this->role = $role;
    }
    public function  getInfo()
    {
        return "Name: " . $this->name . " , Email: " . $this->mail . " , Role: " . $this->role;
    }
    public function isAdmin()
    {

        return $this->role === 1;
    }

    public function getRoleName()
    {
        return $this->role === 1 ? "Admin" : "User";
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($mail)
    {
        $this->mail = $mail;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }
}
$user = new User("nghia", "nghia@gmail.com", 1);
echo $user->getInfo() . "\n"; 
if ($user->isAdmin()) {
    echo "Đây là admin";
} else {
    echo "Đây là người dùng thông thường";
}

