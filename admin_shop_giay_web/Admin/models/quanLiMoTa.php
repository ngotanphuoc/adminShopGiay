<?php
include('model.php');
class quanLiMoTa extends model{
    var $table = "descriptions";
    var $content = "id";

    //Lấy thông tin Mô Tả của sản phẩm
    function getMoTaByProduct($id){
        $query = "SELECT * from descriptions where product_id = $id";
        include('result.php');
        return $data;
    }

    // lấy danh sách tướng mà tài khoản game chưa có
    function listTrangPhucByIdNotHave($id){
        $query = "SELECT * from trangphuc where trangphuc.id NOT IN (select trangphucsohuu.id from trangphucsohuu where trangphucsohuu.id_tai_khoan = '$id')";
        include('result.php');
        return $data;
    }

    //Lấy thông tin mô tả theo id
    function getMoTaById($id){
        $query = "SELECT * from descriptions where id = $id";
        include('result.php');
        return $data;
    }

    //cập nhật thông tin size
    function editMoTa($data,$id,$mod,$idProduct=""){
        $f = "";
        foreach ($data as $key => $value) {
            $f .= "$this->table.".$key . " = '".$value."' ,";
        }
        $f = trim($f, ",");

        $query = "UPDATE descriptions SET $f where id = $id";
      
        try{
            $result = $this->conn->query($query);
            setcookie('msg', 'Cập nhật thành công', time() + 2);
            header('Location: ?mod='.$mod.'&id='.$idProduct);
        }catch(Exception $e)
        {
            setcookie('msg1', 'Cập nhật không thành công', time() + 2);
            header('Location: ?mod='.$mod.'&act=edit&id='.$id);
        }
    }

}
?>