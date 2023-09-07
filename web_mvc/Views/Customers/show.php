
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
    <style>
        /* Thay đổi màu nền của table và text màu trắng */
        table {
            background-color: #fff;
            color: #333;
        }

        /* Định dạng cho table header */
        table th {
            background-color: #007bff;
            color: #fff;
        }

        /* Định dạng cho table cells */
        table td {
            padding: 10px;
            text-align: center;
        }

        /* Định dạng cho ảnh */
        img {
            max-width: 100%;
            height: auto;
        }

        /* Hiệu ứng nút "Come back" */
        .btn-success {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-success:hover {
            background-color: #218838;
        }
    </style>
</head>
<h2>SEE DETAILS:</h2>

<table border="1">
    <tr>
        <th>Stt</th>
        <th>First_name</th>
        <th>Last_name</th>
        <th>Email</th>
        <th>Phone number</th>
        <th>Address</th>
    </tr>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['first_name']; ?></td>
        <td><?= $row['last_name']; ?></td>
        <td><?= $row['email']; ?></td>
        <td><?= $row['phone_number']; ?></td>
        <td><?= $row['address']; ?></td>
    </tr>


</table><br>
<form action="your_form_processing_page.php" method="post">
    <a href="http://localhost/web_mvc/index.php?controller=customer&action=index" class="btn btn-success">
        <i class="fas fa-arrow-left"></i> Come back
    </a>
</form>