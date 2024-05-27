<?php
include('models/quanLiAnh.php');
     class quanLiAnhController{
        var $model;
        function __construct()
        {
            $this->model = new quanLiAnh();
        }
    
        function list(){
            $data = $this->model->getAnhByProduct($_GET['id']);
            include('views/index.php');
        }

        function add(){
            include('views/index.php');
        }

        function edit(){
            if(empty($_POST['image_path'])){
                foreach($this->model->getAnhById($_GET['id']) as $r){
                    $anh = $r['image_path'];
                }
                include('views/index.php');
            }else{            
                $data = array(
                    'image_path' =>  $_POST['image_path'],
                );
                $this->model->editAnh($data,$_GET['id'],$_GET['mod'],$_GET['idProduct']);
            }
        }
        
        function store(){
            $data = array(
                'image_path' =>    $_POST['image_path'],
                'product_id'  =>   $_GET['id'],
            );
            $this->model->add($data,$_GET['mod'], $_GET['id']);
        }

        function delete(){
            if(!empty($_GET['id'])){
                $this->model->deleteAnh($_GET['id'],$_GET['mod'],$_GET['idProduct']);
            }else{
                include('views/index.php');
            }
        }

        
    }
?>