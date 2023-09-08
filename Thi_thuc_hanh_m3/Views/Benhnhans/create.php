<?php
// echo '<br>'.__FILE__;
?>
  <!-- •	Mã bệnh nhân
•	Tên bệnh nhân
•	Phòng
•	Ngày nhập viện
•	Giới tính
•	Tình trạng
•	Thông tin của bệnh nhân -->
<h2>THÊM MỚI BỆNH NHÂN</h2>
<form action="index.php?action=store" method="post">
    Tên bệnh nhân:<input type="text" name="TENBENHNHAN"> <br>
   Phòng: <input type="number" name="PHONG"> <br>
   ngày nhập viện: <input type="date" name="NGAYNHAPVIEN"> <br>
   Giới Tính: <input type="text" name="GIOITINH"> <br>
   Tình trạng: <input type="text" name="TINHTRANG"> <br>
   Thông tin cá nhân: <input type="text" name="THONGTINBENHNHAN"> <br>
    
    <input type="submit" value="Thêm">
</form>
<style>
    h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    form {
        max-width: 400px;
        margin: 0 auto;
    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input[type="text"],
    input[type="number"],
    input[type="date"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>
