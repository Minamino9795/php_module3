<?php
require_once 'Models/Customer.php';
class CustomerController
{
    // Hien thi danh sach records => table
    public function index()
    {
        $customers = Customer::all();
        if (isset($_GET['success']) && $_GET['success'] == 1) {
            $successMessage = 'THÊM THÀNH CÔNG!';
        } else if (isset($_GET['success']) && $_GET['success'] == 2) {
            $successMessage1 = 'CẬP NHẬT THÀNH CÔNG!';
        } else if (isset($_GET['success']) && $_GET['success'] == 3) {
            $successMessage2 = 'XÓA THÀNH CÔNG!';
        }
        // Truyen data xuong view
        require_once 'Views/Customers/index.php';
    }


    // Hien thi form them moi
    public function create()
    {
        require_once 'Views/Customers/create.php';
    }
    // Xu ly them moi
    public function store()
    {
        // Goi model
        Customer::store($_POST);
        // Chuyen huong ve trang danh sach
        echo '<script>window.location.href = "index.php?controller=customer&action=index&success=1";</script>';
    }



    // Hien thi form chinh sua
    public function edit()
    {
        $id = $_GET['id'];
        $row = Customer::find($id);
        // Truyen xuong view
        require_once 'Views/Customers/edit.php';
    }
    // Xu ly chinh sua
    public function update()
    {
        $id = $_GET['id'];
        Customer::update($id, $_POST);
        // Chuyen huong ve trang danh sach
        echo '<script>window.location.href = "index.php?controller=customer&action=index&success=2";</script>';
    }

    // Xoa
    public function destroy()
    {
        $id = $_GET['id'];
        Customer::delete($id);
        // Chuyen huong ve trang danh sach
        echo '<script>window.location.href = "index.php?controller=customer&action=index&success=3";</script>';
    }
    //Xem chi tiet
    public function show()
    {
        $id = $_GET['id'];
        $row = Customer::find($id);

        // Truyen xuong view
        require_once 'Views/Customers/show.php';
    }
}
