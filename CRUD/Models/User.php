<?php
    // Ket noi voi database
    class User {
        // lay ta ca du lieu
        public static function all(){
            global $conn;
            $sql = "SELECT * FROM `users`";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $rows = $stmt->fetchAll(); 
            // Tra ve cho Model
            return $rows;
        }
         // lay chi tiet 1 du lieu
         public static function find($id){
            global $conn;
            $sql = "SELECT * FROM `users` WHERE id = $id";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $row = $stmt->fetch();
            return $row;
        }

       
        // Them moi du lieu
        public static function store($data){
            global $conn;
            $TEN = $data['name'];
            $EMAIL = $data['email'];
            $PASSWORD = $data['password'];
           
            $PHONE = $data['phone'];
            $IMAGE = '';


        if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
            $uploadDir = ROOT_DIR . '/Public/Uploads/';
            $uploadFile = $uploadDir . basename($_FILES['image']['name']);
            if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
                $IMAGE = '/Public/Uploads/' . $_FILES['image']['name'];
            }

            $sql = "INSERT INTO `users` 
            ( `name`, `email`,`password`,`image`,`phone`) 
            VALUES 
            ('$TEN','$EMAIL','$PASSWORD','$IMAGE','$PHONE')";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;
        }}
        
        // Cap nhat du lieu
        public static function update( $id, $data ){
            global $conn;
            $TEN = $data['name'];
            $EMAIL = $data['email'];
            $PASSWORD = $data['password'];
            $PHONE = $data['phone'];
            // Kiểm tra xem đã tải lên ảnh mới hay chưa
        if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
            $uploadDir = ROOT_DIR . '/public/uploads/';

            // Xóa ảnh cũ nếu có
            $sql = "SELECT `image` FROM `users` WHERE `id` = $id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $oldImage = $stmt->fetchColumn();

            if ($oldImage && file_exists($uploadDir . $oldImage)) {
                unlink($uploadDir . $oldImage);
            }

            // Di chuyển ảnh mới vào thư mục đích
            $newImage = $uploadDir . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], $newImage);
            $image = '/public/uploads/' . $_FILES['image']['name'];
        } else {
            // Không có ảnh mới được tải lên, giữ nguyên ảnh cũ
            $sql = "SELECT `image` FROM `users` WHERE `id` = $id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $image = $stmt->fetchColumn();
        }


            $sql = "UPDATE `users` SET `name` = '$TEN', `email` = '$EMAIL', `password` = '$PASSWORD', `image` =' $image', `phone` = '$PHONE' WHERE `id` = $id";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;

        }

       // Xoa du lieu
        public static function delete($id){
            global $conn;
            $sql = "DELETE FROM users WHERE id = $id";
            // Thuc thi SQL
            $conn->exec($sql);
            return true;
        }
    }