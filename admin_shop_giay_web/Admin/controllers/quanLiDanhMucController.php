<?php

include('models/quanLiDanhMuc.php');
     class quanlidanhmuccontroller{
       var $model;
        function __construct()
        {
            $this->model = new quanlidanhmuc();
        }
    
        function list(){
            $data = $this->model->getCategories();
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
            if(!empty($_GET['danhmuc'])){
                $this->model->delete($_GET['danhmuc'],$_GET['mod']);
            }else{
                include('views/index.php');
            }
        }

        function edit(){
            if(empty($_POST['name'])){
                
                $data1 = $this->model->getBrand();
                $data = $this->model->getBrandById($_GET['id']);
                foreach($data as $r){
                    $tendanhmuc = $r['name'];
                    $anh = $r['image_path'];
                    $parent_id = $r['parent_id'];
                }
                include('views/index.php');
            }else{
  
                $data = array(
                    'name'  =>   $_POST['name'],
                    'image_path'  =>   $_POST['image_path'],
                    'parent_id'  => $_POST['parent_id'],
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