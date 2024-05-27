<?php

include('models/quanLiAdmin.php');
     class quanLiAdminController{
       var $model;
        function __construct()
        {
            $this->model = new quanLiAdmin();
        }
    
        function list(){
            $data = $this->model->list();
            include('views/index.php');
        }

        function add(){
            $dataRole = $this->model->getRole();
            include('views/index.php');
        }

        function store(){
            $data = array(
                'username'  =>   $_POST['username'],
                'password'  =>   $_POST['password'],
                'role'  =>   $_POST['role'],
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
            if(empty($_POST['username'])){
                $dataRole = $this->model->getRole();
                $data = $this->model->detail($_GET['id']);
                foreach($data as $r){
                    $username = $r['username'];
                    $password = $r['password'];
                    $role = $r['role'];
                }
                include('views/index.php');
            }else{

                $data = array(
                    'username'  =>   $_POST['username'],
                    'password'  =>   $_POST['password'],
                    'role'  =>   $_POST['role'],
                );
                $this->model->edit($data,$_GET['id'],$_GET['mod']);
            }
        }
    }
?>