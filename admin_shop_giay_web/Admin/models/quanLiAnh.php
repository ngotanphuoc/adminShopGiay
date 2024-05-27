<?php
include('model.php');
class quanLiAnh extends model{
    var $table = "images";
    var $content = "id";

    //Lấy thông tin ảnh của sản phẩm
    function getAnhByProduct($id){
        $query = "SELECT * from images where product_id = $id";
        include('result.php');
        return $data;
    }


    function deleteAnh($id,$mod,$idProduct)
    {
       
        $query = "DELETE from images where id = $id";
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

    //Lấy thông tin ảnh theo id
    function getAnhById($id){
        $query = "SELECT * from images where id = $id";
        include('result.php');
        return $data;
    }

    //cập nhật thông tin size
    function editAnh($data,$id,$mod,$idProduct=""){
        $f = "";
        foreach ($data as $key => $value) {
            $f .= "$this->table.".$key . " = '".$value."' ,";
        }
        $f = trim($f, ",");

        $query = "UPDATE images SET $f where id = $id";
      
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