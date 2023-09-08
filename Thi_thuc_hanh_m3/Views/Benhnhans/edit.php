<h2>CHỈNH SỬA THÔNG TIN</h2>
<form action="index.php?action=update&id=<?= $row['ID'];?>" method="post">
    Tên bệnh nhân:<input type="text" name="TENBENHNHAN" value="<?= $row['TENBENHNHAN'];?>"> <br>
    Phòng: <input type="number" name="PHONG" value="<?= $row['PHONG'];?>"> <br>
    Ngày nhập viện: <input type="date" name="NGAYNHAPVIEN" value="<?= $row['NGAYNHAPVIEN'];?>"> <br>
    Giới tính: <input type="text" name="GIOITINH" value="<?= $row['GIOITINH'];?>"> <br>
    Tình trạng: <input type="text" name="TINHTRANG" value="<?= $row['TINHTRANG'];?>"> <br>
    Thông tin bệnh nhân: <input type="text" name="THONGTINBENHNHAN" value="<?= $row['THONGTINBENHNHAN'];?>"> <br>
  
    <input type="submit" value="Cập nhật">
</form>
  <!-- •	Mã bệnh nhân
•	Tên bệnh nhân
•	Phòng
•	Ngày nhập viện
•	Giới tính
•	Tình trạng
•	Thông tin của bệnh nhân -->
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
