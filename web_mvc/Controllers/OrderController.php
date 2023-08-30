<?php
require_once 'Models/Customer.php';
require_once 'Models/Order.php';

class OrderController {
    // Hien thi danh sach records => table
    public function index(){
        $items =Order::all();
      
        // Truyen data xuong view
        require_once 'Views/Orders/index.php';
       
    }
    // Hien thi form them moi
    public function create(){
        $rows = Customer::all();
        require_once 'Views/Orders/create.php';
    }
    // Xu ly them moi
    public function store(){
        // Goi model
       
        Order::store($_POST);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=order&action=index");


    }
    // Hien thi form chinh sua
    public function edit(){
        $id = $_GET['id'];
        $r = Order::find($id);
        $rows = Customer::all();

        // Truyen xuong view
        require_once 'Views/Orders/edit.php';
    }
    // Xu ly chinh sua
    public function update(){
        $id = $_GET['id'];
       
        Order::update( $id, $_POST );
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=order&action=index");
        ;
        require_once 'views/Orders/edit.php';

    }

    // Xoa
    public function destroy(){
        $id = $_GET['id'];
      Order :: delete($id);
      header("Location: index.php?controller=order&action=index");

    }
    //Xem chi tiet
    public function show(){
        $id = $_GET['id'];
        $row = Order::find($id);

        // Truyen xuong view
        require_once 'Views/Orders/show.php';
    }
 
}