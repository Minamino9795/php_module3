<?php
require_once 'Models/Customer.php';
require_once 'Models/Order.php';

class OrderController
{
    // Hien thi danh sach records => table
    public function index()
    {
        $orders = Order::all();
        if (isset($_GET['success']) && $_GET['success'] == 1) {
            $successMessage = 'THÊM THÀNH CÔNG!';
        } else if (isset($_GET['success']) && $_GET['success'] == 2) {
            $successMessage1 = 'CẬP NHẬT THÀNH CÔNG!';
        } else if (isset($_GET['success']) && $_GET['success'] == 3) {
            $successMessage2 = 'XÓA THÀNH CÔNG!';
        }
        // Truyen data xuong view
        require_once 'Views/Orders/index.php';
    }
    // Hien thi form them moi
    public function create()
    {
        $rows = Customer::all();
        $r = Customer::create();

        require_once 'Views/Orders/create.php';
    }
    // Xu ly them moi
    public function store()
    {
        // Goi model

        Order::store($_POST);
        // Chuyen huong ve trang danh sach
        echo '<script>window.location.href = "index.php?controller=order&action=index&success=1";</script>';
    }
    // Hien thi form chinh sua
    public function edit()
    {
        $id = $_GET['id'];
        $r = Order::find($id);
        $rows = Customer::all();
        $row = Customer::create();

        // Truyen xuong view
        require_once 'Views/Orders/edit.php';
    }
    // Xu ly chinh sua
    public function update()
    {
        $id = $_GET['id'];

        Order::update($id, $_POST);
        // Chuyen huong ve trang danh sach
        echo '<script>window.location.href = "index.php?controller=order&action=index&success=2";</script>';

        require_once 'views/Orders/edit.php';
    }

    // Xoa
    public function destroy()
    {
        $id = $_GET['id'];
        Order::delete($id);
        echo '<script>window.location.href = "index.php?controller=order&action=index&success=3";</script>';
    }
    //Xem chi tiet
    public function show()
    {
        $id = $_GET['id'];
        $row = Order::find($id);

        // Truyen xuong view
        require_once 'Views/Orders/show.php';
    }
}
