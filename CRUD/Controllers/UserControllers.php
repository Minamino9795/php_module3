<?php
require_once 'Models/User.php';
class UserController {
    // Hien thi danh sach records => table
    public function index(){
        $items =User::all();
      
        // Truyen data xuong view
        require_once 'Views/Users/index.php';
       
    }
    // Hien thi form them moi
    public function create(){
        require_once 'Views/Users/create.php';
    }
    // Xu ly them moi
    public function store(){
        // Goi model
       
        User::store($_POST);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=user&action=index");

    }
    // Hien thi form chinh sua
    public function edit(){
        $id = $_GET['id'];
        $row = User::find($id);
        // Truyen xuong view
        require_once 'Views/Users/edit.php';
    }
    // Xu ly chinh sua
    public function update(){
        $id = $_GET['id'];
       
        User::update( $id, $_POST );
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=user&action=index");
        require_once 'views/Users/edit.php';

    }

    // Xoa
    public function destroy(){
        $id = $_GET['id'];
      User :: delete($id);
        header("Location: index.php?controller=user&action=index");
    }
 
}