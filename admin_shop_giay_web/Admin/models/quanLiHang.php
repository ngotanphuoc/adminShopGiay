<?php
include('model.php');
class quanLiHang extends model{
    var $table = "categories";
    var $content = "id";

    //lấy danh sách hãng
    function getBrand(){
        $query = "select * from categories where parent_id = 1";
        include('result.php');
        return $data;
    }

    //lấy hãng theo id
     function getBrandById($id){
        $query = "select * from categories where id = $id";
        include('result.php');
        return $data;
    }
}   
?>