<?php
include('models/thongTinKhachHang.php');
class thongTinKhachHangController{
   var $home_model;
   function __construct()
   {
       $this->home_model = new thongTinKhachHang();
   }

   function list(){
        $data = $this->home_model->list();
       include('views/index.php');
   }
}
?>