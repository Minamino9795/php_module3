<?php
require_once 'Models/Category.php';
require_once 'Models/Product.php';

class ProductController {
    // Hien thi danh sach records => table
    public function index(){
        $products =Product::all();
        if (isset($_GET['success']) && $_GET['success'] == 1) {
            $successMessage = 'THÊM THÀNH CÔNG!';
        }
        else if (isset($_GET['success']) && $_GET['success'] == 2) {
            $successMessage1 = 'CẬP NHẬT THÀNH CÔNG!';
        }
        else if (isset($_GET['success']) && $_GET['success'] == 3) {
            $successMessage2 = 'XÓA THÀNH CÔNG!';
        }
        // Truyen data xuong view
        require_once 'Views/Products/index.php';
       
    }
    // Hien thi form them moi
    public function create(){
        $rows = Category::all();
        $r = Category::create();

        require_once 'Views/Products/create.php';
    }
    // Xu ly them moi
    public function store(){
        // Goi model
       
        Product::store($_POST);
        // Chuyen huong ve trang danh sach
        echo '<script>window.location.href = "index.php?controller=product&action=index&success=1";</script>';


    }
    // Hien thi form chinh sua
    public function edit(){
        $id = $_GET['id'];
        $r = Product::find($id);
        $rows = Category::create();


        // Truyen xuong view
        require_once 'Views/Products/edit.php';
    }
    // Xu ly chinh sua
    public function update(){
        $id = $_GET['id'];
       
        Product::update( $id, $_POST );
        // Chuyen huong ve trang danh sach
        echo '<script>window.location.href = "index.php?controller=product&action=index&success=2";</script>';

        
        require_once 'Views/Products/edit.php';

    }

    // Xoa
    public function destroy(){
        $id = $_GET['id'];
      Product :: delete($id);
      echo '<script>window.location.href = "index.php?controller=product&action=index&success=3";</script>';


    }
    //Xem chi tiet
    public function show(){
        $id = $_GET['id'];
        $row = Product::find($id);

        // Truyen xuong view
        require_once 'Views/Products/show.php';
    }
    
 
}