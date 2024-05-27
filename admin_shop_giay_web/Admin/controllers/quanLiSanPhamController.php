<?php
include('models/quanLiSanPham.php');
     class quanLiSanPhamController{
        var $model;
        function __construct()
        {
            $this->model = new quanLiSanPham();
        }
    
        function list(){
            $data = $this->model->getProducts();
            include('views/index.php');
        }

        function add(){
            $dataCategories = $this->model->getCategories();
            include('views/index.php');
        }

        function store(){
            $data = array(
                'name' =>    $_POST['name'],
                'price'  =>   $_POST['price'],
                'discount'  =>   $_POST['discount'],
                'thumbnail_path'  =>   $_POST['thumbnail_path'],
            );
            $this->model->addProduct($data,$_GET['mod'],$_POST['category_id']);
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
         
                $data = $this->model->getProductById($_GET['id']);
                $idCategoryCurrent = $this->model->getCategoriesCurrentByProduct($_GET['id']);
                $dataCategories = $this->model->getCategories();
                include('views/index.php');
            }else{
            
                $data = array(
                    'name' =>    $_POST['name'],
                    'price'  =>   $_POST['price'],
                    'thumbnail_path'  =>   $_POST['thumbnail_path'],
                    'discount'  =>   $_POST['discount'],
                    'category_id'  =>   $_POST['category_id'],
                );
                $this->model->editProduct($data,$_GET['id'],$_GET['mod']);
            }
        }


    }
?>