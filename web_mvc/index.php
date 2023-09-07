<?php
// Ket noi voi DB
require_once 'db.php';
// Client gui yeu cau den  ProductController, toi PT index, de lay toan bo du lieu ra




// Hiển thị nội dung của trang chính ở đây
/*
index.php?controller=product&action=index
index.php?controller=product&action=create
index.php?controller=product&action=edit&id=5
index.php?controller=product&action=show&id=5

index.php?controller=customer&action=index
*/


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="<?php echo ROOT_URL ?>/Public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo ROOT_URL ?>/Public/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?php echo ROOT_URL ?>/Public/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include 'Includes/sidebar.php'
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                include 'Includes/header.php'
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <?php
                    $action = isset($_GET['action']) ? $_GET['action'] : '';
                    $controller = isset($_GET['controller']) ? $_GET['controller'] : '';
                    switch ($controller) {
                        case 'category':
                            require_once 'Controllers/CategoryController.php';
                            $objController = new CategoryController();
                            break;
                        case 'product':
                            require_once 'Controllers/ProductController.php';
                            $objController = new ProductController();
                            break;
                        case 'customer':
                            require_once 'controllers/CustomerController.php';
                            $objController = new CustomerController();
                            break;
                        case 'order':
                            require_once 'controllers/OrderController.php';
                            $objController = new OrderController();
                            break;
                        default:
                         
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
                        case 'show':
                            $objController->show();
                            break;
                        case 'destroy':
                            $objController->destroy();
                            break;

                        default:
                            // include 'login.php';
                            echo '<script>window.location.href = "http://localhost/web_mvc/login.php";</script>';
                            break;
                    }
                    ?>
                    <!-- Page Heading -->

                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <!-- <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2020</span>
                </div>
            </div>
        </footer> -->
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo ROOT_URL ?>/Public/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo ROOT_URL ?>/Public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo ROOT_URL ?>/Public/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo ROOT_URL ?>/Public/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo ROOT_URL ?>/Public/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo ROOT_URL ?>/Public/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <!-- <script src="http://localhost/web_mvc/Public/js/demo/datatables-demo.js"></script> -->

</body>

</html>