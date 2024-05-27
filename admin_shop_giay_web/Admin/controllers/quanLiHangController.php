<?php

include('models/quanLiHang.php');
     class quanLiHangController{
       var $model;
        function __construct()
        {
            $this->model = new quanLiHang();
        }
    
        function list(){
            $data = $this->model->getBrand();
            include('views/index.php');
        }

        function add(){
            include('views/index.php');
        }

        function store(){
            $data = array(
                'name'  =>   $_POST['name'],
                'parent_id'  =>   '1',
                'image_path'  =>   $_POST['image_path'],
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

        function edit(){
            if(empty($_POST['name'])){
            
                $data = $this->model->getBrandById($_GET['id']);
                foreach($data as $r){
                    $ten = $r['name'];
                    $anh = $r['image_path'];
                }
                include('views/index.php');
            }else{

                $data = array(
                    'name'  =>   $_POST['name'],
                    'image_path'  =>   $_POST['image_path'],
                );
                $this->model->edit($data,$_GET['id'],$_GET['mod']);
            }
        }
        function logout(){
            session_destroy();
            header('location: ../');
        }


    }
?>