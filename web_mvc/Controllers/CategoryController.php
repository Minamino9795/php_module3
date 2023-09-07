<?php
require_once 'Models/Category.php';
class CategoryController
{
    // Hien thi danh sach records => table
    public function index()
    {
        $categories = Category::all();
        if (isset($_GET['success']) && $_GET['success'] == 1) {
            $successMessage = 'THÊM THÀNH CÔNG!';
        } else if (isset($_GET['success']) && $_GET['success'] == 2) {
            $successMessage1 = 'CẬP NHẬT THÀNH CÔNG!';
        } else if (isset($_GET['success']) && $_GET['success'] == 3) {
            $successMessage2 = 'XÓA THÀNH CÔNG!';
        }
        // Truyen data xuong view
        require_once 'Views/Categories/index.php';
    }


    // Hien thi form them moi
    public function create()
    {
        require_once 'Views/Categories/create.php';
    }
    // Xu ly them moi
    public function store()
    {
        // Goi model
        Category::store($_POST);
        // Chuyen huong ve trang danh sach
        echo '<script>window.location.href = "index.php?controller=category&action=index&success=1";</script>';
    }



    // Hien thi form chinh sua
    public function edit()
    {
        $id = $_GET['id'];
        $row = Category::find($id);
        // Truyen xuong view
        require_once 'Views/Categories/edit.php';
    }
    // Xu ly chinh sua
    public function update()
    {
        $id = $_GET['id'];
        Category::update($id, $_POST);
        // Chuyen huong ve trang danh sach
        echo '<script>window.location.href = "index.php?controller=category&action=index&success=2";</script>';
    }

    // Xoa
    public function destroy()
    {
        $id = $_GET['id'];
        Category::delete($id);
        // Chuyen huong ve trang danh sach
        echo '<script>window.location.href = "index.php?controller=category&action=index&success=3";</script>';
    }
    //Xem chi tiet
    public function show()
    {
        $id = $_GET['id'];
        $row = Category::find($id);

        // Truyen xuong view
        require_once 'Views/Categories/show.php';
    }
}
