<?php
    // Ket noi voi database
    class Benhnhan {
        // lay ta ca du lieu
        public static function all(){
            global $conn;
            $sql = "SELECT * FROM `quan_ly_benh_nhans`";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $rows = $stmt->fetchAll(); 

            $sql = "SELECT * FROM `quan_ly_benh_nhans`";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $rows = $stmt->fetchAll();
            
            if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['search'])) {
                $searchTerm = $_GET['search'];
            
                // Thực hiện truy vấn tìm kiếm
                $sql = "SELECT * FROM `quan_ly_benh_nhans` WHERE `TENBENHNHAN` LIKE :searchTerm";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
                $stmt->execute();
                $rows = $stmt->fetchAll();
            }
            // Tra ve cho Model
            return $rows;
        }

        // lay chi tiet 1 du lieu
        public static function find($id){
            global $conn;
            $sql = "SELECT * FROM `quan_ly_benh_nhans` WHERE id = $id";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $row = $stmt->fetch();
            return $row;
        }

        // Them moi du lieu
        // •	Mã bệnh nhân
        // •	Tên bệnh nhân
        // •	Phòng
        // •	Ngày nhập viện
        // •	Giới tính
        // •	Tình trạng
        // •	Thông tin của bệnh nhân 
        public static function store($data){
            global $conn;
            $TENBENHNHAN = $data['TENBENHNHAN'];
            $PHONG = $data['PHONG'];
            $NGAYNHAPVIEN = $data['NGAYNHAPVIEN'];
            $GIOITINH = $data['GIOITINH'];
            $TINHTRANG = $data['TINHTRANG'];
            $THONGTINBENHNHAN = $data['THONGTINBENHNHAN'];
        
            $sql = "INSERT INTO `quan_ly_benh_nhans` 
            ( `TENBENHNHAN`, `PHONG`,`NGAYNHAPVIEN`,`GIOITINH`,`TINHTRANG`,`THONGTINBENHNHAN`) 
            VALUES 
            ('$TENBENHNHAN','$PHONG','$NGAYNHAPVIEN','$GIOITINH','$TINHTRANG','$THONGTINBENHNHAN')";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;
        }
        
        // Cap nhat du lieu
        public static function update( $id, $data ){
            global $conn;
            $TENBENHNHAN = $data['TENBENHNHAN'];
            $PHONG = $data['PHONG'];
            $NGAYNHAPVIEN = $data['NGAYNHAPVIEN'];
            $GIOITINH = $data['GIOITINH'];
            $TINHTRANG = $data['TINHTRANG'];
            $THONGTINBENHNHAN = $data['THONGTINBENHNHAN'];
        

            $sql = "UPDATE `quan_ly_benh_nhans` SET `TENBENHNHAN` = '$TENBENHNHAN', `PHONG` = '$PHONG', `NGAYNHAPVIEN` = '$NGAYNHAPVIEN', `GIOITINH` ='$GIOITINH', `TINHTRANG` = '$TINHTRANG', `THONGTINBENHNHAN` = '$THONGTINBENHNHAN' WHERE `ID` = $id";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;

        }

        //Xoa du lieu
        public static function delete($id){
            global $conn;
            $sql = "DELETE FROM quan_ly_benh_nhans WHERE ID = $id";
            // Thuc thi SQL
            $conn->exec($sql);
            return true;
        }
    }