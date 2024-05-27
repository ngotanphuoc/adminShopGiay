 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3">LMHT<sup>Shop</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Chức năng
</div>

<!-- Nav Item - Pages Collapse Menu -->
<?php if($_SESSION['role'] == 1){?>
  <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link" href="?mod=quanliadmin">
      <i class="fas fa-fw fa-table"></i>
      <span>Quản lý Admin</span></a>
  </li>
<?php } ?>

<!-- Nav Item - Tables -->
<li class="nav-item">
  <a class="nav-link" href="?mod=quanlihang">
    <i class="fas fa-fw fa-table"></i>
    <span>Quản lý hãng</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="?mod=quanlidanhmuc">
    <i class="fas fa-fw fa-table"></i>
    <span>Quản lý danh mục</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="?mod=quanlisanpham">
    <i class="fas fa-fw fa-table"></i>
    <span>Quản lý sản phẩm</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="?mod=quanlidonhang">
    <i class="fas fa-fw fa-table"></i>
    <span>Quản lý đơn hàng</span></a>
</li>
<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->