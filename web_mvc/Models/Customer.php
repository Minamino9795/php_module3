<?php
// Ket noi voi database
class Customer
{
    // lay ta ca du lieu
    public static function all()
    {
        global $conn;
        $sql = "SELECT * FROM `customers`";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();
        // Tra ve cho Model
        return $rows;
    }



    //lay chi tiet 1 du lieu
    public static function find($id)
    {
        global $conn;
        $sql = "SELECT * FROM `customers` WHERE `id` = $id";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $row = $stmt->fetch();
        return $row;
    }

    // Them moi du lieu
    public static function store($data)
    {
        global $conn;
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $email = $data['email'];
        $phone_number = $data['phone_number'];
        $address = $data['address'];


        $sql = "INSERT INTO `customers` 
            ( `first_name`, `last_name`, `email`, `phone_number`, `address`) 
            VALUES 
            ('$first_name','$last_name','$email','$phone_number','$address')";
        //Thuc hien truy van
        $conn->exec($sql);
        return true;
    }

    // Cap nhat du lieu
    public static function update($id, $data)
    {
        global $conn;
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $email = $data['email'];
        $phone_number = $data['phone_number'];
        $address = $data['address'];


        $sql = "UPDATE `customers` SET `first_name` = '$first_name' ,  `last_name` = '$last_name',  `email` = '$email',  `phone_number` = '$phone_number',  `address` = '$address'  WHERE `id` = $id";
        //Thuc hien truy van
        $conn->exec($sql);
        return true;
    }

    //Xoa du lieu
    public static function delete($id)
    {
        global $conn;
        $sql = "DELETE FROM `customers` WHERE id = $id";
        // Thuc thi SQL
        $conn->exec($sql);
        return true;
    }
}
