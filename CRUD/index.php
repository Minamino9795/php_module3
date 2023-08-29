<?php

require_once 'db.php';

$action = isset( $_GET['action'] ) ? $_GET['action'] : 'index';
$controller = isset( $_GET['controller'] ) ? $_GET['controller'] : 'post';
switch ($controller) {
    case 'post':
        require_once 'Controllers/PostControllers.php';
        $objController = new PostController();
        break;
        case 'user':
            require_once 'Controllers/userControllers.php';
            $objController = new UserController();
            break;
    default:
        # code...
        break;
}

switch ($action) {
    case 'index':
        $objController->index();
        break;
    case 'create':
        $objController->create();
        break;
    case 'store':
        $objController->store();
        break;
    case 'edit':
        $objController->edit();
        break;
    case 'update':
        $objController->update();
        break;
  
    case 'destroy':
        $objController->destroy();
        break;
    default:
        # code...
        break;
}