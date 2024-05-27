<?php
include('model.php');
class quanLiAdmin extends model{
    var $table = "admin";
    var $content = "id";

    //Lấy thông tin phân quyền
    function getRole(){
        $query = "SELECT * from role";
        include('result.php');
        return $data;
    }
}
?>