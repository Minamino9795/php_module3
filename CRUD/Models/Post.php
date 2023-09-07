<?php
    // Ket noi voi database
    class Post {
        // lay ta ca du lieu
        public static function all(){
            global $conn;
            $sql = "SELECT users.email, posts.*
            FROM users
            JOIN posts ON users.id = posts.user_id;";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $rows = $stmt->fetchAll(); 
            // Tra ve cho Model
            return $rows;
        }
        // lay chi tiet 1 du lieu
    public static function find($id)
    {
        global $conn;
        $sql = "SELECT posts.*, users.email AS user_email
        FROM users
        JOIN posts ON posts.user_id = users.id
        WHERE posts.id = $id";

        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $row = $stmt->fetch();
        return $row;
    }

       
        // Them moi du lieu
        public static function store($data){
            global $conn;
            $user_id = $data['user_id'];
            $title = $data['title'];
            $content= $data['content'];
           
           
            $sql = "INSERT INTO `posts` 
            ( `user_id`, `title`,`content`) 
            VALUES 
            ('$user_id','$title','$content')";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;
        }
        
        // Cap nhat du lieu
        public static function update( $id, $data ){
            global $conn;
            $user_id = $data['user_id'];
            $title = $data['title'];
            $content = $data['content'];
            
          
         


            $sql = "UPDATE `posts` SET `user_id` = '$user_id', `title` = '$title', `content` = '$content' WHERE `id` = $id";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;

        }

       // Xoa du lieu
        public static function delete($id){
            global $conn;
            $sql = "DELETE FROM posts WHERE id = $id";
            // Thuc thi SQL
            $conn->exec($sql);
            return true;
        }
    }