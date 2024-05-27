<?php
include('model.php');
class quanlichitietdonhang extends model{
    var $table = "order_items";
    var $content = "id";

    //lấy danh sách chi tiết đơn hàng theo id
    function getOrderItemsById($id){
        $query = "SELECT * FROM order_items join products on order_items.product_id = products.id where order_items.order_id = $id";
        include('result.php');
        return $data;
    }

}   
?>