<?php

include('models/quanLiDonHang.php');
     class quanLiDonHangController{
       var $model;
        function __construct()
        {
            $this->model = new quanlidonhang();
        }
    
        function list(){
            $data = $this->model->list();
            include('views/index.php');
        }

        function add(){
            $data = $this->model->getBrand();
            include('views/index.php');
        }

        function store(){
        
            $data = array(
                'name' =>    $_POST['name'],
                'image_path'  =>  $_POST['image_path'],
                'parent_id'  =>   $_POST['parent_id'],
            );
           $this->model->add($data,$_GET['mod']);
        }

        function delete(){
            if(!empty($_GET['id'])){
                $this->model->delete($_GET['id'],$_GET['mod']);
            }else{
                include('views/index.php');
            }
        }

        //duyệt đơn hàng
        function acceptOrder(){
                $data = array(
                    'order_status'  =>   "delivering",
                );
                $this->model->edit($data,$_GET['id'],$_GET['mod']);
        }
        function logout(){
            session_destroy();
            header('location: ../');
        }


    }
?>