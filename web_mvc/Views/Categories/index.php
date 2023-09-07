<?php
// echo '<br>'.__FILE__;
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.0/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.0/dist/sweetalert2.min.js"></script>


<?php
// Kiểm tra xem có thông báo thành công hay không và hiển thị SweetAlert2
if (isset($successMessage)) {
    echo '<script>
        Swal.fire({
            title: "<h6>THÊM THÀNH CÔNG!</h6>",
            icon: "success",
            showConfirmButton: false,
            timer: 2000,
            width: "300px"
        });
    </script>';
} else if (isset($successMessage1)) {
    echo '<script>
        Swal.fire({
            title: "<h6>CẬP NHẬT THÀNH CÔNG!</h6>",
            icon: "success",
            showConfirmButton: false,
            timer: 2000,
            width: "300px"
        });
    </script>';
} else if (isset($successMessage2)) {
    echo '<script>
        Swal.fire({
            title: "<h6>XÓA THÀNH CÔNG!</h6>",
            icon: "success",
            showConfirmButton: false,
            timer: 2000,
            width: "300px"
        });
    </script>';
}
?>
<form action="index.php" method="get">
    <div class="col">
        <div class="input-group">
            <input type="text" placeholder="Enter search information" name="s">
            <!-- Thêm input ẩn cho controller và action -->
            <input type="hidden" name="controller" value="category">
            <input type="hidden" name="action" value="index">
            <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </div>
</form><br>

<div class="main-panel">
    <h2>CATEGORY VIEW</h2>
    <div class="content-wrapper">
        <a href="index.php?controller=category&action=create" class="btn btn-success">Add new</a>
        <table border="1" class="table">
            <tr>
                <th>Id</th>
                <th>Category name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            <!-- Bắt đầu lặp -->
            <?php foreach ($categories['categories'] as $r) : ?>
                <tr>
                    <td><?php echo $r->id; ?> </td>
                    <td><?php echo $r->category_name; ?> </td>
                    <td><?php echo $r->description; ?> </td>
                    <td>
                        <a href="index.php?controller=category&action=edit&id=<?php echo $r->id; ?>">
                            <button type="button" class="btn btn-primary">Edit</button>
                        </a> |
                        <a href="index.php?controller=category&action=show&id=<?php echo $r->id; ?>">
                            <button type="button" class="btn btn-success">Show</button>
                        </a> |
                        <a onclick=" return confirm('Are you sure ?'); " href="index.php?controller=category&action=destroy&id=<?php echo $r->id; ?>">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <?php if ($categories['total_records'] > $categories['phones_per_page']) : ?>
            <div class="pagination justify-content-center">
                <?php
                $total_pages = ceil($categories['total_records'] / $categories['phones_per_page']);
                $visible_pages = min($total_pages, 3);
                $start_page = max(1, $categories['current_page'] - 1);
                $end_page = min($start_page + $visible_pages - 1, $total_pages);
                ?>

                <?php if ($categories['current_page'] > 1) : ?>
                    <a class="page-link" href="http://localhost/web_mvc/index.php?controller=category&action=index&page=<?php echo $categories['current_page'] - 1; ?><?php if (!empty($categories['search_s'])) echo '&s=' . urlencode($categories['search_s']); ?><?php if (!empty($categories['search_s1'])) echo '&s1=' . urlencode($categories['search_s1']); ?>" aria-label="Trang trước">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                <?php endif; ?>

                <?php for ($i = $start_page; $i <= $end_page; $i++) : ?>
                    <?php if ($i == $categories['current_page']) : ?>
                        <a class="page-link active" href="http://localhost/web_mvc/index.php?controller=category&action=index&page=<?php echo $i; ?><?php if (!empty($categories['search_s'])) echo '&s=' . urlencode($categories['search_s']); ?><?php if (!empty($categories['search_s1'])) echo '&s1=' . urlencode($categories['search_s1']); ?>"><?php echo $i; ?></a>
                    <?php else : ?>
                        <a class="page-link" href="http://localhost/web_mvc/index.php?controller=category&action=index&page=<?php echo $i; ?><?php if (!empty($categories['search_s'])) echo '&s=' . urlencode($categories['search_s']); ?><?php if (!empty($categories['search_s1'])) echo '&s1=' . urlencode($categories['search_s1']); ?>">
                            <?php echo $i; ?>
                        </a>
                    <?php endif; ?>
                <?php endfor; ?>

                <?php if ($categories['current_page'] < $total_pages) : ?>
                    <a class="page-link" href="http://localhost/web_mvc/index.php?controller=category&action=index&page=<?php echo $categories['current_page'] + 1; ?><?php if (!empty($categories['search_s'])) echo '&s=' . urlencode($categories['search_s']); ?><?php if (!empty($categories['search_s1'])) echo '&s1=' . urlencode($categories['search_s1']); ?>" aria-label="Trang sau">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<style>
    /* Định dạng tiêu đề cột */
    .table th {
        background-color: #4e73df;
        /* Màu nền tiêu đề */
        color: #ffffff;
        /* Màu chữ tiêu đề */
        text-align: left;
        padding: 12px;
        border-bottom: 2px solid #2e59d9;
        /* Đường viền phía dưới */

    }

    /* Định dạng hàng lẻ */
    .table tr:nth-child(even) {
        background-color: #f8f9fc;
        /* Màu nền hàng lẻ */
        transition: background-color 0.2s;
        /* Hiệu ứng màu nền khi hover */
    }

    /* Định dạng hàng chẵn */
    .table tr:nth-child(odd) {
        background-color: #ffffff;
        /* Màu nền hàng chẵn */
        transition: background-color 0.2s;
        /* Hiệu ứng màu nền khi hover */
    }

    /* Định dạng các ô dữ liệu */
    .table td {
        padding: 12px;
        border-bottom: 1px solid #d3d3d3;
        /* Đường viền phía dưới */
        font-weight: bolder;
        /* Tăng độ đậm của nội dung */
    }

    /* Định dạng nút điều hướng */
    .btn-primary {
        background-color: #4e73df;
        /* Màu nền nút */
        color: #ffffff;
        /* Màu chữ nút */
        border: none;
        padding: 10px 20px;
        /* Kích thước nút */
        transition: background-color 0.3s;
        /* Hiệu ứng màu nền khi hover */
    }

    .btn-primary:hover {
        background-color: #2e59d9;
        /* Màu nền khi hover */
        transform: scale(1);
        /* Hiệu ứng phóng to khi hover */
    }

    /* Định dạng hàng khi hover chuột */
    .table tr:hover {
        background-color: #d4e9f7;
        /* Màu nền khi hover */
    }

    h2 {
        display: flex;
        justify-content: center;
        text-align: center;
        /* Căn giữa theo chiều ngang */
        margin-top: 20px;
        /* Khoảng cách từ trên xuống */
        margin-bottom: 20px;
        /* Khoảng cách từ dưới lên */
    }
</style>