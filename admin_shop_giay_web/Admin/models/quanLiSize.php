<?php
include('model.php');
class quanLiSize extends model{
    var $table = "sizes";
    var $content = "id";

    //Lấy thông tin size của sản phẩm
    function getSizesByProduct($id){
        $query = "SELECT * from sizes where product_id = $id";
        include('result.php');
        return $data;
    }

    // lấy danh sách tướng mà tài khoản game chưa có
    function listTrangPhucByIdNotHave($id){
        $query = "SELECT * from trangphuc where trangphuc.id NOT IN (select trangphucsohuu.id from trangphucsohuu where trangphucsohuu.id_tai_khoan = '$id')";
        include('result.php');
        return $data;
    }

    function deleteSize($id,$mod,$idProduct)
    {
       
        $query = "DELETE from sizes where id = $id";
        try 
        {
            $status = $this->conn->query($query);
            if($status == true)
            {
               setcookie('msg', 'Xóa thành công', time() + 2); 
            }else{
                setcookie('msg1', 'Xóa không thành công', time() + 2);
            }
        } 
        catch (Exception $e) 
        {    
            setcookie('msg1', $e, time() + 2);
        }

        header('Location: ?mod='.$mod."&id=".$idProduct); 
    }

    //Lấy thông tin size theo id
    function getSizesById($id){
        $query = "SELECT * from sizes where id = $id";
        include('result.php');
        return $data;
    }

    //cập nhật thông tin size
    function editSize($data,$id,$mod,$idProduct=""){
        $f = "";
        foreach ($data as $key => $value) {
            $f .= "$this->table.".$key . " = '".$value."' ,";
        }
        $f = trim($f, ",");

        $query = "UPDATE sizes SET $f where id = $id";
      
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