<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PTD Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link href="../view/css/select2.css" rel="stylesheet"/>

  <!-- Custom styles for this template-->
  <link href="../view/css/admin.css" rel="stylesheet" type="text/css">
  <script src="../view/js/jquery-1.8.0.min.js"></script>


  <!-- summernote-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <!-- Data table -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php require_once('menu.php') ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <?php require_once('header.php') ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">
               
              </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <?php
                if($_SESSION['role']==1){
                    $mod = isset($_GET['mod']) ? $_GET['mod'] : "quanliadmin";
                    $act = isset($_GET['act']) ? $_GET['act'] : "list";
                }else if($_SESSION['role']==2){
                    $mod = isset($_GET['mod']) ? $_GET['mod'] : "quanlihang";
                    $act = isset($_GET['act']) ? $_GET['act'] : "list";
                }
                  switch ($mod) {
                    case 'quanliadmin':
                      switch ($act) {
                        case 'list':
                                require_once('admin/list.php');
                                break;
                            case 'add':
                                require_once('admin/add.php');
                                break;
                            case 'edit':
                                require_once('admin/edit.php');
                                break;
                            default:
                                require_once('admin/list.php');
                                break;
                        }
                        break;
                    case 'quanlidanhmuc':
                        switch($act){
                            case 'list':
                                require_once('danhmuc/list.php');
                                break;
                            case 'add':
                                require_once('danhmuc/add.php');
                                break;
                            case 'edit':
                                require_once('danhmuc/edit.php');
                                break;
                            default:
                                require_once('danhmuc/list.php');
                                break;
                        }
                        break;
                    case 'quanlihang':
                        switch($act){
                            case 'list':
                                require_once('hang/list.php');
                                break;
                            case 'add':
                                require_once('hang/add.php');
                                break;
                            case 'edit':
                                require_once('hang/edit.php');
                                break;
                            default:
                                require_once('hang/list.php');
                                break;
                        }
                        break;
                    case 'quanlisize':
                        switch($act){
                            case 'list':
                                require_once('sizes/list.php');
                                break;
                            case 'add':
                                require_once('sizes/add.php');
                                break;
                            case 'edit':
                                require_once('sizes/edit.php');
                                break;
                            default:
                                require_once('sizes/list.php');
                                break;
                        }
                        break;
                    case 'quanlianh':
                        switch($act){
                            case 'list':
                                require_once('anh/list.php');
                                break;
                            case 'add':
                                require_once('anh/add.php');
                                break;
                            case 'edit':
                                require_once('anh/edit.php');
                                break;
                            default:
                                require_once('anh/list.php');
                                break;
                        }
                        break;
                    case 'quanlimota':
                        switch($act){
                            case 'list':
                                require_once('mota/list.php');
                                break;
                            case 'add':
                                require_once('mota/add.php');
                                break;
                            case 'edit':
                                require_once('mota/edit.php');
                                break;
                            default:
                                require_once('mota/list.php');
                                break;
                        }
                        break;
                    case 'quanlidonhang':
                        switch($act){
                            case 'list':
                                require_once('donhang/list.php');
                                break;
                            default:
                                require_once('donhang/list.php');
                                break;
                        }
                        break;
                    case 'quanlichitietdonhang':
                        switch($act){
                            case 'list':
                                require_once('chitietdonhang/list.php');
                                break;
                            default:
                                require_once('chitietdonhang/list.php');
                                break;
                        }
                        break;
                    case 'quanlisanpham':
                        switch($act){
                            case 'list':
                                require_once('sanpham/list.php');
                                break;
                            case 'add':
                                require_once('sanpham/add.php');
                                break;
                            case 'edit':
                                require_once('sanpham/edit.php');
                                break;
                            default:
                                require_once('sanpham/list.php');
                                break;
                        }
                        break;

                  }
                
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->

      <!-- End of Main Content -->
      <?php require_once('footer.php') ?>

        <!-- Bootstrap core JavaScript-->
        <script src="../view/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../view/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../view/js/jquery-1.8.0.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        
        <script language="javascript" src="../view/js/select2.js"></script>
        <script>
          $(document).ready(function() {

            $(".states").select2({

                placeholder: "Select a State",

                allowClear: true

            });

          });
        </script>
</body>

</html>