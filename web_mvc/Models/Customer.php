<?php
// Ket noi voi database
class Customer
{
    // lay ta ca du lieu
    public static function create(){
        global $conn;
        $sql = "SELECT * FROM `customers`";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();
        // Tra ve cho Model
        return $rows;
    }
    public static function all()
    {
        // global $conn;
        // $sql = "SELECT * FROM `customers`";
        // $stmt = $conn->query($sql);
        // $stmt->setFetchMode(PDO::FETCH_ASSOC);
        // $rows = $stmt->fetchAll();
        // // Tra ve cho Model
        // return $rows;

        global $conn;

        if (isset($_GET["s"]) || isset($_GET["s1"])) {
            $s = isset($_GET["s"]) ? $_GET["s"] : "";
            $s1 = isset($_GET["s1"]) ? $_GET["s1"] : "";
            $conditions = [];

            if (!empty(trim($s))) {
                $conditions[] = "(customers.last_name LIKE '%$s%')";
            }

            if (!empty(trim($s1))) {
                $conditions[] = "customers.id LIKE '%$s1%'";
            }

            $conditionsString = implode(" OR ", $conditions);

            $sql = "SELECT * FROM `customers`";

            if (!empty($conditionsString)) {
                $sql .= " WHERE $conditionsString";
            }

            $sql .= " ORDER BY customers.id DESC";
        } else {
            $s = "";
            $s1 = "";
            $sql = "SELECT * FROM `customers`
                ORDER BY customers.id DESC";
        }

        $phonesPerPage = 4;
        $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $start_index = ($current_page - 1) * $phonesPerPage;

        // Thay đổi câu truy vấn đếm tổng số bản ghi phù hợp với điều kiện tìm kiếm
        $sql_count = "SELECT COUNT(*) AS total_records FROM customers";
                

        if (!empty($conditionsString)) {
            $sql_count .= " WHERE $conditionsString";
        }

        $stmt_count = $conn->query($sql_count);
        $total_records = $stmt_count->fetch(PDO::FETCH_ASSOC)['total_records'];

        $sql .= " LIMIT $start_index, $phonesPerPage";
        $stmt = $conn->query($sql);
        $customers = $stmt->fetchAll(PDO::FETCH_OBJ);

        $data = [
            'customers' => $customers,
            'total_records' => $total_records,
            'current_page' => $current_page,
            'phones_per_page' => $phonesPerPage,
            'search_s' => $s, // Thêm biến search_s để giữ lại giá trị của tham số tìm kiếm s
            'search_s1' => $s1, // Thêm biến search_s1 để giữ lại giá trị của tham số tìm kiếm s1
        ];

        // Trả về cho Model
        return $data;
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
