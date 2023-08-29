<?php
require_once 'models/category.php';
class CategoryController {
    // Hien thi danh sach records => table
    public function index(){
        $items = Category::all();
      
        // Truyen data xuong view
        require_once 'views/categories/index.php';
       
    }
    // Hien thi form them moi
    public function create(){
        require_once 'views/categories/create.php';
    }
    // Xu ly them moi
    public function store(){
        // Goi model
        Category::store($_POST);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controllers=categories&action=index");

    }
    // Hien thi form chinh sua
    public function edit(){
        $id = $_GET['id'];
        $row = Category::find($id);
        // Truyen xuong view
        require_once 'views/categories/edit.php';
    }
    // Xu ly chinh sua
    public function update(){
        $id = $_GET['id'];
        Category::update( $id, $_POST );
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controllers=categories&action=index");
    }

    // Xoa
    public function destroy(){
        $id = $_GET['id'];
        // categories::delete($id);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=categories&action=index");
    }
    // Xem chi tiet
    public function show(){
        $id = $_GET['id'];
        // $row = categories::find($id);

        // Truyen xuong view
        require_once 'views/categories/show.php';
    }
}