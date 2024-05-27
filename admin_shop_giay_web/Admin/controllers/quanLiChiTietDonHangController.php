<?php

include('models/quanLiChiTietDonHang.php');
     class quanLiChiTietDonHangController{
       var $model;
        function __construct()
        {
            $this->model = new quanlichitietdonhang();
        }
    
        function list(){
            $data = $this->model->getOrderItemsById($_GET['id']);
            include('views/index.php');
        }

    }
?>