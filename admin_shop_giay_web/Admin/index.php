<?php
session_start();
        if($_SESSION['role']==1){
            $mod = isset($_GET['mod']) ? $_GET['mod'] : "home";
            $act = isset($_GET['act']) ? $_GET['act'] : "list";
        }else if($_SESSION['role']==2){
            $mod = isset($_GET['mod']) ? $_GET['mod'] : "home";
            $act = isset($_GET['act']) ? $_GET['act'] : "list";
        }
            switch($mod){
                case 'quanliadmin':
                    require_once('controllers/quanLiAdminController.php');
                    $obj1 = new quanLiAdminController();
                    switch($act){
                        case 'list':
                            $obj1->list();
                            break;
                        case 'add':
                            $obj1->add();
                            break;
                        case 'store':
                            $obj1->store();
                            break;
                        case 'delete':
                            $obj1->delete();
                            break;
                        case 'edit':
                            $obj1->edit();
                            break;
                        default:
                            $obj1->list();
                            break;
                    }
                    break;
                case 'home':
                    require_once('controllers/homeController.php');
                    $obj1 = new homeController();
                    switch($act){
                        case 'list':
                            $obj1->list();
                            break;
                        default:
                            $obj1->list();
                            break;
                    }
                    break;
                case 'thongtinkhachhang':
                    require_once('controllers/thongTinKhachHangController.php');
                    $obj1 = new thongTinKhachHang();
                    switch($act){
                        case 'list':
                            $obj1->list();
                            break;
                        default:
                            $obj1->list();
                            break;
                    }
                    break;
                case 'quanlidanhmuc':
                    require_once('controllers/quanLiDanhMucController.php');
                    $obj1 = new quanlidanhmuccontroller();
                    switch($act){
                        case 'list':
                            $obj1->list();
                            break;
                        case 'logout':
                            $obj1->logout();
                            break;
                        case 'add':
                            $obj1->add();
                            break;
                        case 'store':
                            $obj1->store();
                            break;
                        case 'delete':
                            $obj1->delete();
                            break;
                        case 'edit':
                            $obj1->edit();
                            break;
                        default:
                            $obj1->list();
                            break;
                    }
                    break;
                case 'quanlihang':
                    require_once('controllers/quanLiHangController.php');
                    $obj1 = new quanLiHangController();
                    switch($act){
                        case 'list':
                            $obj1->list();
                            break;
                        case 'logout':
                            $obj1->logout();
                            break;
                        case 'add':
                            $obj1->add();
                            break;
                        case 'store':
                            $obj1->store();
                            break;
                        case 'delete':
                            $obj1->delete();
                            break;
                        case 'edit':
                            $obj1->edit();
                            break;
                        default:
                            $obj1->list();
                            break;
                    }
                    break;
                case 'quanlisize':
                    require_once('controllers/quanLiSizeController.php');
                    $obj1 = new quanLiSizeController();
                    switch($act){
                        case 'list':
                            $obj1->list();
                            break;
                        case 'add':
                            $obj1->add();
                            break;
                        case 'store':
                            $obj1->store();
                            break;
                        case 'delete':
                            $obj1->delete();
                            break;
                        case 'edit':
                            $obj1->edit();
                            break;
                        default:
                            $obj1->list();
                            break;
                    }
                    break;
                case 'quanlianh':
                    require_once('controllers/quanLiAnhController.php');
                    $obj1 = new quanLiAnhController();
                    switch($act){
                        case 'list':
                            $obj1->list();
                            break;
                        case 'add':
                            $obj1->add();
                            break;
                        case 'store':
                            $obj1->store();
                            break;
                        case 'delete':
                            $obj1->delete();
                            break;
                        case 'edit':
                            $obj1->edit();
                            break;
                        default:
                            $obj1->list();
                            break;
                    }
                    break;
                case 'quanlidonhang':
                    require_once('controllers/quanLiDonHangController.php');
                    $obj1 = new quanLiDonHangController();
                    switch($act){
                        case 'list':
                            $obj1->list();
                            break;
                        case 'delete':
                            $obj1->delete();
                            break;
                        case 'accept':
                            $obj1->acceptOrder();
                            break;
                        default:
                            $obj1->list();
                            break;
                    }
                    break;
                case 'quanlichitietdonhang':
                    require_once('controllers/quanLiChiTietDonHangController.php');
                    $obj1 = new quanLiChiTietDonHangController();
                    switch($act){
                        case 'list':
                            $obj1->list();
                            break;
                        default:
                            $obj1->list();
                            break;
                    }
                    break;
                case 'quanlimota':
                    require_once('controllers/quanLiMoTaController.php');
                    $obj1 = new quanLiMoTaController();
                    switch($act){
                        case 'list':
                            $obj1->list();
                            break;
                        case 'add':
                            $obj1->add();
                            break;
                        case 'store':
                            $obj1->store();
                            break;
                        case 'edit':
                            $obj1->edit();
                            break;
                        default:
                            $obj1->list();
                            break;
                    }
                    break;
                case 'quanlisanpham':
                    require_once('controllers/quanLiSanPhamController.php');
                    $obj = new quanLiSanPhamController();
                    switch($act){
                        case 'list':
                            $obj->list();
                            break;
                        case 'add':
                            $obj->add();
                            break;
                        case 'store':
                            $obj->store();
                            break;
                        case 'delete':
                            $obj->delete();
                            break;
                        case 'edit':
                            $obj->edit();
                            break;
                        default:
                            $obj->list();
                            break;
                    }
                    break;
                case 'dangxuat':
                    require_once('controllers/logOut.php');
                    $obj = new logOut();
                    switch($act){
                        case 'logout':
                            $obj->logOut();
                            break;
                        default:
                            $obj->logOut();
                            break;
                    }
                    break;
            }

?>