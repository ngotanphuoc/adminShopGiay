<?php
include('models/home.php');
class homeController{
   var $home_model;
   function __construct()
   {
       $this->home_model = new home();
   }

   function list(){
        $soLuongKhachHang = $this->home_model->getAmountCustomer();
        $doanhThuThang = $this->home_model->getTurnoverMonth();
        $doanhThuNam = $this->home_model->getTurnoverYear();
        $soLuongSanPham = $this->home_model->getAmountProduct();
        $soLuongHang= $this->home_model->getAmountBrand();
        $soLuongDanhMuc= $this->home_model->getAmountCategories();
        $soLuongNhanVien = $this->home_model->getAmountStaff();
        $soLuongDonHangChuaDuyet= $this->home_model->getAmountUnapprovedOrders();
       include('views/index.php');
   }
}
?>