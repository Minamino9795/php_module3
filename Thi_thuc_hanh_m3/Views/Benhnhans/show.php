<?php
// echo "<pre>";
// echo print_r($row);
?>
<h2>XEM CHI TIẾT:</h2>

<table border="1">
    <tr>
        <th>Mã bệnh nhân</th>
        <th>Tên bệnh nhân</th>
        <th>Phòng</th>
        <th>Ngày nhập viện</th>
        <th>Giới tính</th>
        <th>Tình trạng</th>
        <th>Thông tin bệnh nhân</th>
    </tr>
    <tr>
        <td><?= $row['ID'];?></td>
        <td><?= $row['TENBENHNHAN'];?></td>
        <td><?= $row['PHONG'];?></td>
        <td><?= $row['NGAYNHAPVIEN'];?></td>
        <td><?= $row['GIOITINH'];?></td>
        <td><?= $row['TINHTRANG'];?></td>
        <td><?= $row['THONGTINBENHNHAN'];?></td>
    </tr>
    
   
</table>
 <!-- •	Mã bệnh nhân
•	Tên bệnh nhân
•	Phòng
•	Ngày nhập viện
•	Giới tính
•	Tình trạng
•	Thông tin của bệnh nhân -->
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
