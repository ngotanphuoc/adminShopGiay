<?php
include('model.php');
class quanlidanhmuc extends model{
    var $table = "categories";
    var $content = "id";

    //lấy danh sách danh mục sản phẩm cấp 2
    function getCategories(){
        $query = "select * from categories where parent_id > 1";
        include('result.php');
        return $data;
    }

    //lấy danh sách hãng
    function getBrand(){
        $query = "select * from categories where parent_id = 1";
        include('result.php');
        return $data;
    }
    
    //lấy tên hãng từ các danh mục con
    function getBrandById($id){
        $query = "select * from categories where id = $id";
        include('result.php');
        return $data;
    }
}   
?>