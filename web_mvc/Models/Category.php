<?php
// Ket noi voi database
class Category
{
    public static function create(){
        global $conn;
        $sql = "SELECT * FROM `categories`";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();
        // Tra ve cho Model
        return $rows;
    }
    // lay ta ca du lieu
    public static function all()
    {
        // global $conn;
        // $sql = "SELECT * FROM `categories`";
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
                $conditions[] = "(categories.category_name LIKE '%$s%')";
            }

            if (!empty(trim($s1))) {
                $conditions[] = "categories.id LIKE '%$s1%'";
            }

            $conditionsString = implode(" OR ", $conditions);

            $sql = "SELECT * FROM `categories`";

            if (!empty($conditionsString)) {
                $sql .= " WHERE $conditionsString";
            }

            $sql .= " ORDER BY categories.id DESC";
        } else {
            $s = "";
            $s1 = "";
            $sql = "SELECT * FROM `categories`
                ORDER BY categories.id DESC";
        }

        $phonesPerPage = 4;
        $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $start_index = ($current_page - 1) * $phonesPerPage;

        // Thay đổi câu truy vấn đếm tổng số bản ghi phù hợp với điều kiện tìm kiếm
        $sql_count = "SELECT COUNT(*) AS total_records FROM categories";
                

        if (!empty($conditionsString)) {
            $sql_count .= " WHERE $conditionsString";
        }

        $stmt_count = $conn->query($sql_count);
        $total_records = $stmt_count->fetch(PDO::FETCH_ASSOC)['total_records'];

        $sql .= " LIMIT $start_index, $phonesPerPage";
        $stmt = $conn->query($sql);
        $categories = $stmt->fetchAll(PDO::FETCH_OBJ);

        $data = [
            'categories' => $categories,
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
        $sql = "SELECT * FROM `categories` WHERE `id` = $id";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $row = $stmt->fetch();
        return $row;
    }

    // Them moi du lieu
    public static function store($data)
    {
        global $conn;
        $LOAIHANG = $data['NAME'];
        $MOTA = $data['DESCRIPTION'];

        $sql = "INSERT INTO `categories` 
            ( `category_name`, `description`) 
            VALUES 
            ('$LOAIHANG','$MOTA')";
        //Thuc hien truy van
        $conn->exec($sql);
        return true;
    }

    // Cap nhat du lieu
    public static function update($id, $data)
    {
        global $conn;
        $LOAIHANG = $data['NAME'];
        $MOTA = $data['DESCRIPTION'];


        $sql = "UPDATE `categories` SET `category_name` = '$LOAIHANG' ,  `description` = '$MOTA'  WHERE `id` = $id";
        //Thuc hien truy van
        $conn->exec($sql);
        return true;
    }

    //Xoa du lieu
    public static function delete($id)
    {
        global $conn;
        $sql = "DELETE FROM `categories` WHERE id = $id";
        // Thuc thi SQL
        $conn->exec($sql);
        return true;
    }
}
