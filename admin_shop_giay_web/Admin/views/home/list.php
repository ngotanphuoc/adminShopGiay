 <!-- Begin Page Content -->
 <div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800">Thống Kê</h1>
   </div>

   <!-- Content Row -->
   <div class="row">

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-success shadow h-100 py-2">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Danh thu tháng này</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format($doanhThuThang) ?> VNĐ</div>
             </div>
             <div class="col-auto">
               <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-success shadow h-100 py-2">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Danh thu năm nay</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format($doanhThuNam) ?> VNĐ</div>
             </div>
             <div class="col-auto">
               <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <a href="?mod=thongtinkhachhang">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Khách hàng</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $soLuongKhachHang ?></div>
              </div>
              <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </a>
      </div>
     </div>

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-primary shadow h-100 py-2">
        <a href="?mod=quanliadmin">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nhân viên</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $soLuongNhanVien ?></div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
        </a>
       </div>
     </div>


   </div>

   <div class="row">

   <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-info shadow h-100 py-2">
        <a href="?mod=quanlisanpham">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sản phẩm</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$soLuongSanPham?></div>
              </div>
              <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-info shadow h-100 py-2">
        <a href="?mod=quanlihang">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Hãng</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$soLuongHang?></div>
              </div>
              <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-info shadow h-100 py-2">
        <a href="?mod=quanlidanhmuc">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Danh mục</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$soLuongDanhMuc?></div>
              </div>
              <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    

     <!-- Pending Requests Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-warning shadow h-100 py-2">
        <a href="?mod=quanlidonhang">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Hóa đơn chưa duyệt</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $soLuongDonHangChuaDuyet ?></div>
              </div>
              <div class="col-auto">
                <i class="fas fa-comments fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </a>
       </div>
     </div>
   </div>

 </div>
 <!-- /.container-fluid -->