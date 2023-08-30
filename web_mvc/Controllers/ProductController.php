<?php
require_once 'Models/Category.php';
require_once 'Models/Product.php';

class ProductController {
    // Hien thi danh sach records => table
    public function index(){
        $items =Product::all();
      
        // Truyen data xuong view
        require_once 'Views/Products/index.php';
       
    }
    // Hien thi form them moi
    public function create(){
        $rows = Category::all();
        require_once 'Views/Products/create.php';
    }
    // Xu ly them moi
    public function store(){
        // Goi model
       
        Product::store($_POST);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=product&action=index");


    }
    // Hien thi form chinh sua
    public function edit(){
        $id = $_GET['id'];
        $r = Product::find($id);
        $categories = Category::all();

        // Truyen xuong view
        require_once 'Views/Products/edit.php';
    }
    // Xu ly chinh sua
    public function update(){
        $id = $_GET['id'];
       
        Product::update( $id, $_POST );
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=product&action=index");
        ;
        require_once 'views/Products/edit.php';

    }

    // Xoa
    public function destroy(){
        $id = $_GET['id'];
      Product :: delete($id);
      header("Location: index.php?controller=product&action=index");

    }
    //Xem chi tiet
    public function show(){
        $id = $_GET['id'];
        $row = Product::find($id);

        // Truyen xuong view
        require_once 'Views/Products/show.php';
    }
 
}