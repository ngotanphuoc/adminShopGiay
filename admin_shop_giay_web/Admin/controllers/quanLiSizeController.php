<?php
include('models/quanLiSize.php');
     class quanLiSizeController{
        var $model;
        function __construct()
        {
            $this->model = new quanLiSize();
        }
    
        function list(){
            $data = $this->model->getSizesByProduct($_GET['id']);
            include('views/index.php');
        }

        function add(){
            include('views/index.php');
        }

        function edit(){
            if(empty($_POST['size'])){
                foreach($this->model->getSizesById($_GET['id']) as $r){
                    $size = $r['size'];
                    $quantity = $r['quantity'];
                }
                include('views/index.php');
            }else{            
                $data = array(
                    'size' =>    $_POST['size'],
                    'quantity'  =>   $_POST['quantity'],
                );
                $this->model->editSize($data,$_GET['id'],$_GET['mod'],$_GET['idProduct']);
            }
        }
        
        function store(){
            $data = array(
                'size' =>    $_POST['size'],
                'quantity'  =>   $_POST['quantity'],
                'product_id'  =>   $_GET['id'],
            );
            $this->model->add($data,$_GET['mod'], $_GET['id']);
        }

        function delete(){
            if(!empty($_GET['id'])){
                $this->model->deleteSize($_GET['id'],$_GET['mod'],$_GET['idProduct']);
            }else{
                include('views/index.php');
            }
        }

        
    }
?>