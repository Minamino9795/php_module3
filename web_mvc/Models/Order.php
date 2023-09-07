<?php
// Ket noi voi database
class Order
{
    //lay ta ca du lieu
    
    public static function all()
    {
        // global $conn;
        // $sql = "SELECT customers.email, orders.*
        //     FROM customers
        //     JOIN orders ON customers.id = orders.customer_id;";
        // $stmt = $conn->query($sql);
        // $stmt->setFetchMode(PDO::FETCH_ASSOC);
        // $rows = $stmt->fetchAll();

        global $conn;

        if (isset($_GET["s"]) || isset($_GET["s1"])) {
            $s = isset($_GET["s"]) ? $_GET["s"] : "";
            $s1 = isset($_GET["s1"]) ? $_GET["s1"] : "";
            $conditions = [];

           

            $conditionsString = implode(" OR ", $conditions);

            $sql = "SELECT customers.email, orders.*
                 FROM customers
                JOIN orders ON customers.id = orders.customer_id;";

            if (!empty($conditionsString)) {
                $sql .= " WHERE $conditionsString";
            }

            $sql .= " ORDER BY products.id DESC";
        } else {
            $s = "";
            $s1 = "";
            $sql = "SELECT customers.email, orders.*
            FROM customers
           JOIN orders ON customers.id = orders.customer_id
                ORDER BY orders.id DESC";
        }

        $phonesPerPage = 4;
        $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $start_index = ($current_page - 1) * $phonesPerPage;

        // Thay đổi câu truy vấn đếm tổng số bản ghi phù hợp với điều kiện tìm kiếm
        $sql_count = "SELECT COUNT(*) AS total_records FROM products
                JOIN categories ON products.category_id = categories.id";

        if (!empty($conditionsString)) {
            $sql_count .= " WHERE $conditionsString";
        }

        $stmt_count = $conn->query($sql_count);
        $total_records = $stmt_count->fetch(PDO::FETCH_ASSOC)['total_records'];

        $sql .= " LIMIT $start_index, $phonesPerPage";
        $stmt = $conn->query($sql);
        $orders = $stmt->fetchAll(PDO::FETCH_OBJ);

        $data = [
            'orders' => $orders,
            'total_records' => $total_records,
            'current_page' => $current_page,
            'phones_per_page' => $phonesPerPage,

        ];

        // Trả về cho Model
        return $data;
    }





    // lay chi tiet 1 du lieu
    public static function find($id)
    {
        global $conn;
        $sql = "SELECT orders.*, customers.email,customers.first_name,customers.last_name 
        FROM customers
        JOIN orders ON orders.customer_id = customers.id
        WHERE orders.id = $id";

        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $row = $stmt->fetch();
        return $row;
    }


    // Them moi du lieu
    public static function store($data)
    {
        global $conn;
        $customer_id = $data['customer_id'];
        $order_date = $data['order_date'];
        $total_amount = $data['total_amount'];

        $sql = "INSERT INTO `orders` 
        ( `customer_id`, `order_date`,`total_amount`) 
        VALUES 
        ('$customer_id','$order_date','$total_amount')";
        //Thuc hien truy van
        $conn->exec($sql);
        return true;
    }

    // Cap nhat du lieu
    public static function update($id, $data)
    {
        global $conn;
        $customer_id = $data['customer_id'];
        $order_date = $data['order_date'];
        $total_amount = $data['total_amount'];

        $sql = "UPDATE `orders` SET `customer_id` = '$customer_id', `order_date` = '$order_date', `total_amount` = '$total_amount' WHERE `id` = $id";
        //Thuc hien truy van
        $conn->exec($sql);
        return true;
    }

    // Xoa du lieu
    public static function delete($id)
    {
        global $conn;
        $sql = "DELETE FROM orders WHERE id = $id";
        // Thuc thi SQL
        $conn->exec($sql);
        return true;
    }
}
