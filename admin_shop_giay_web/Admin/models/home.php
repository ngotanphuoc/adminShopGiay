<?php
include('model.php');
class home extends model{
    var $table = "admin";
    var $content = "id";

    //số lượng nhân viên
    function getAmountStaff(){
        $query = "SELECT count(id) as soluong FROM admin WHERE role = 2";
        include('result.php');
        foreach($data as $r){
            return $r['soluong'];
        }
    }

    //Số lượng hãng
    function getAmountBrand(){
        $query = "SELECT count(id) as soluong FROM categories WHERE parent_id = 1";
        include('result.php');
        foreach($data as $r){
            return $r['soluong'];
        }
    }

      //Số lượng hãng
    function getAmountCategories(){
        $query = "SELECT count(id) as soluong FROM categories WHERE parent_id > 1";
        include('result.php');
        foreach($data as $r){
            return $r['soluong'];
        }
    }

    //Số lượng khách hàng
    function getAmountCustomer(){
        $query = "SELECT count(id) as soluong FROM users";
        include('result.php');
        foreach($data as $r){
            return $r['soluong'];
        }
    }

    //Doanh thu tháng
    function getTurnoverMonth(){
        $date = getdate();
        $query = "SELECT SUM(total) as soluong from orders where order_status = 'delivering' and month(updated_at) = ".$date['mon']." and year(updated_at) = ".$date['year'];
        include('result.php');
        foreach($data as $r){
            return $r['soluong'];
        }
    }

    //Doanh thu năm
    function getTurnoverYear(){
        $date = getdate();
        $query = "SELECT SUM(total) as soluong from orders where order_status = 'delivering' and year(updated_at) = ".$date['year'];
        include('result.php');
        foreach($data as $r){
            return $r['soluong'];
        }
    }

    //Số lượng sản phẩm
    function getAmountProduct(){
        $date = getdate();
        $query = "SELECT SUM(sizes.quantity) as soluong from products join sizes on products.id = sizes.product_id";
        include('result.php');
        foreach($data as $r){
            return $r['soluong'];
        }
    }

    //Số lượng sản phẩm
    function getAmountUnapprovedOrders(){
        $date = getdate();
        $query = "select count(id) as soluong from orders where order_status = 'ordering'";
        include('result.php');
        foreach($data as $r){
            return $r['soluong'];
        }
    }

    



}
?>