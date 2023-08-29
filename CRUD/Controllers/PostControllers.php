<?php
require_once 'Models/Post.php';
require_once 'Models/User.php';

class PostController {
    // Hien thi danh sach records => table
    public function index(){
        $items =Post::all();
      
        // Truyen data xuong view
        require_once 'Views/Posts/index.php';
       
    }
    // Hien thi form them moi
    public function create(){
        $rows = User::all();
        require_once 'Views/Posts/create.php';
    }
    // Xu ly them moi
    public function store(){
        // Goi model
       
        Post::store($_POST);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=post&action=index");

    }
    // Hien thi form chinh sua
    public function edit(){
        $id = $_GET['id'];
        $r = Post::find($id);
        $users = User::all();

        // Truyen xuong view
        require_once 'Views/Posts/edit.php';
    }
    // Xu ly chinh sua
    public function update(){
        $id = $_GET['id'];
       
        Post::update( $id, $_POST );
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=post&action=index");
        require_once 'views/Posts/edit.php';

    }

    // Xoa
    public function destroy(){
        $id = $_GET['id'];
      Post :: delete($id);
        header("Location: index.php?controller=post&action=index");
    }
 
}