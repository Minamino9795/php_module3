<?php
require_once 'Models/Customer.php';
class CustomerController
{
    // Hien thi danh sach records => table
    public function index()
    {
        $items = Customer::all();

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
        header("Location: index.php?Controllers=customer&action=index");
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
        Customer::update( $id, $_POST );
        // Chuyen huong ve trang danh sach
        header("Location: index.php?Controllers=customer&action=index");
    }

    // Xoa
    public function destroy()
    {
        $id = $_GET['id'];
        Customer::delete($id);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?Controllers=customer&action=index");
    }
    //Xem chi tiet
    public function show(){
        $id = $_GET['id'];
        $row = Customer::find($id);

        // Truyen xuong view
        require_once 'Views/Customers/show.php';
    }
}
