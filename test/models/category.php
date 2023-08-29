<?php
    // Ket noi voi database
    class Category {
        // lay ta ca du lieu
        public static function all(){
            global $conn;
            $sql = "SELECT * FROM `categories`";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $rows = $stmt->fetchAll(); 
            // Tra ve cho Model
            return $rows;
        }

        // // lay chi tiet 1 du lieu
        // public static function find($id){
        //     global $conn;
        //     $sql = "SELECT * FROM `categories` WHERE id = $id";
        //     $stmt = $conn->query($sql);
        //     $stmt->setFetchMode(PDO::FETCH_ASSOC);
        //     $row = $stmt->fetch();
        //     return $row;
        // }

        // Them moi du lieu
        public static function store($data){
            global $conn;
            $TENHANG = $data['name'];
            $MOTA = $data['description'];
        
            $sql = "INSERT INTO `categories` 
            ( `name`, `description`) 
            VALUES 
            ('$TENHANG','$MOTA')";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;
        }
        
        // Cap nhat du lieu
        public static function update( $id, $data ){
            global $conn;
            $TENHANG = $data['TENHANG'];
            $MOTA = $data['MOTA'];
          

            $sql = "UPDATE `phpm3` SET `name` = '$TENHANG', `description` = $MOTA WHERE `id` = $id";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;

        }

        // //Xoa du lieu
        // public static function delete($id){
        //     global $conn;
        //     $sql = "DELETE FROM c10_mat_hang WHERE MAHANG = $id";
        //     // Thuc thi SQL
        //     $conn->exec($sql);
        //     return true;
        // }
    }