<?php
require_once 'Models/Category.php';
class CategoryController
{
    // Hien thi danh sach records => table
    public function index()
    {
        $items = Category::all();

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
        header("Location: index.php?Controllers=categories&action=index");
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
        Category::update( $id, $_POST );
        // Chuyen huong ve trang danh sach
        header("Location: index.php?Controllers=categories&action=index");
    }

    // Xoa
    public function destroy()
    {
        $id = $_GET['id'];
        Category::delete($id);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?Controllers=categories&action=index");
    }
    //Xem chi tiet
    public function show(){
        $id = $_GET['id'];
        $row = Category::find($id);

        // Truyen xuong view
        require_once 'Views/Categories/show.php';
    }
}
