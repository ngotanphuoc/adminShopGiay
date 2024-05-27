<?php
include('models/quanLiMoTa.php');
     class quanLiMoTaController{
        var $model;
        function __construct()
        {
            $this->model = new quanLiMoTa();
        }
    
        function list(){
            $data = $this->model->getMoTaByProduct($_GET['id']);
            include('views/index.php');
        }

        function add(){
            include('views/index.php');
        }

        function edit(){
            if(empty($_POST['title'])){
                foreach($this->model->getMoTaById($_GET['id']) as $r){
                    $title = $r['title'];
                    $content = $r['content'];
                }
                include('views/index.php');
            }else{            
                $data = array(
                    'title' =>    $_POST['title'],
                    'content'  =>   $_POST['content'],
                );
                $this->model->editMoTa($data,$_GET['id'],$_GET['mod'],$_GET['idProduct']);
            }
        }
        
        function store(){
            $data = array(
                'title' =>    $_POST['title'],
                'content'  =>   $_POST['content'],
                'product_id'  =>   $_GET['id'],
            );
            $this->model->add($data,$_GET['mod'], $_GET['id']);
        }

    }
?>