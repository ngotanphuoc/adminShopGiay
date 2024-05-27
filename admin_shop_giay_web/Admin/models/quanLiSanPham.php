<?php
include('model.php');
class quanLiSanPham extends model{
    var $table = "products";
    var $content = "id";

    //Lấy thông tin danh mục theo id
    function getParentIdById($id){
        $query = "select * from categories where id = '$id'";
        include('result.php');
        return $data;
    }

    //Lấy thông tin hãng sản xuất
    function getBrandById($id){
        $query = "select * from categories where id = '$id'";
        include('result.php');
        return $data;
    }

    //Lấy thông tin sản phẩm
    function getProducts(){
        $query = "select * from products JOIN products_category on products.id = products_category.product_id";
        include('result.php');
        return $data;
    }

     //Lấy thông tin sản phẩm theo id
     function getProductById($id){
        $query = "select * from products JOIN products_category on products.id = products_category.product_id where products.id = $id";
        include('result.php');
        return $data;
    }

    //Lấy thông tin danh mục
    function getCategories(){
        $query = "select * from categories where parent_id > 1";
        include('result.php');
        return $data;
    }

    //Thêm sản phẩm mới
    function addProduct($data,$mod,$category_id){
        $f = "";
        $v = "";
        foreach ($data as $key => $value) {
            $f .= "$this->table".".".$key . ",";
            $v .= "'" . $value . "',";
        }
        $f = trim($f, ",");
        $v = trim($v, ",");

        //thêm sản phẩm mới
        $query = "Insert into ".$this->table." ($f) values ($v)";
        try 
        {
            $result = $this->conn->query($query);
            //lấy id của sản mới thêm
            $query1 = "SELECT *FROM products ORDER BY inserted_at DESC LIMIT 1";
            $data2 = array();
            $result1 = $this->conn->query($query1);
            while ($row = $result1->fetch_assoc()) {
                $data2[] = $row;
            }
            foreach($data2 as $r){
                $id_product = $r['id'];
            };
            //lấy id sản phẩm vừa thêm nối với id danh mục
            $query2 = "Insert into products_category (category_id,product_id) values ($category_id,$id_product)";
            $result1 = $this->conn->query($query2);
            setcookie('msg','Thêm thành công',time()+2,"/");
            header('Location: ?mod='.$mod);
        } 
        catch (Exception $e) 
        {    
            setcookie('msg1',$e,time()+2,"/");
            header('Location: ?mod='.$mod.'&act=add');
        }
    }
    
    //Lấy danh mục sản phẩm hiện tại của sản phẩm
    function getCategoriesCurrentByProduct($id){
        $query = "select * from products_category where product_id = $id";
        include('result.php');
        foreach($data as $r){
            return $r['category_id'];
        }
    }

    //Sửa sản phẩm
    function editProduct($data,$id,$mod){
        $f = "";
        $category_id = ""; 
        foreach ($data as $key => $value) {
            if($key == 'category_id'){
                $category_id = $value;
            }else{
                $f .= "$this->table.".$key . " = '".$value."' ,";
            }
            
        }
        $f = trim($f, ",");
  
        $query = "UPDATE $this->table SET $f where $this->table.$this->content = '".$id."'";
        
      
        try{
            $result = $this->conn->query($query);
            //cập nhật lại bảng danh mục
            $query1 = "UPDATE products_category SET category_id = $category_id WHERE product_id = $id";
            $result1 = $this->conn->query($query1);
        //Cập nhật danh mục
            setcookie('msg', 'Cập nhật thành công', time() + 2);
          
            header('Location: ?mod='.$mod);
            
        }catch(Exception $e)
        {
            setcookie('msg1', $e, time() + 2);
           
            header('Location: ?mod='.$mod.'&act=edit&id='.$id);
            
        }
    }
}   
?>