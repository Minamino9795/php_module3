<?php
// echo '<br>'.__FILE__;
?>
<form action="" method="GET" enctype="multipart/form-data">
    <label for="search">Tìm kiếm bệnh nhân:</label>
    <input type="text" name="search" id="search" placeholder="Nhập tên bệnh nhân">
    <input type="submit" value="Tìm kiếm">
</form><br>
<a href="index.php?action=create"> Thêm mới </a>
<table border="1">
    <tr>
    <!-- •	Mã bệnh nhân
•	Tên bệnh nhân
•	Phòng
•	Ngày nhập viện
•	Giới tính
•	Tình trạng
•	Thông tin của bệnh nhân -->

        <th>Mã bệnh nhân</th>
        <th>Tên bệnh nhân</th>
        <th>Phòng</th>
       
        <th>ACTION</th>
    </tr>
    <!-- Bắt đầu lặp -->
<?php
        foreach($items as $r) :
            // echo '<pre>';
            // print_r($r);
            // die();
        ?>
    <tr>
        <td><?php echo $r['ID'];?> </td>
        <td><?php echo $r['TENBENHNHAN'];?> </td>
        <td><?php echo $r['PHONG'];?> </td>
      
        <td>
            <a href="index.php?action=edit&id=<?php echo $r['ID'];?>">Sửa</a> |
            <a href="index.php?action=show&id=<?php echo $r['ID'];?>">Xem</a> |
            <a onclick=" return confirm('Are you sure ?'); " href="index.php?action=destroy&id=<?php echo $r['ID'];?>">xóa</a>
        </td>
    </tr>
    <!-- Kết thúc vòng lặp -->
    <?php endforeach; ?>
</table>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }

    h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }
</style>
