<?php if (isset($_COOKIE['msg'])) { ?>
           <div class="alert alert-success">
               <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
           </div>
       <?php } ?>
       <?php if (isset($_COOKIE['msg1'])) { ?>
           <div class="alert alert-success">
               <strong>Thông báo</strong> <?= $_COOKIE['msg1'] ?>
           </div>
       <?php } ?>
<h2 style="text-align: center;">Quản lí đơn hàng</h2>

<table class="table table-bordered" id="example" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tên người nhận</th>
      <th scope="col">SĐT</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">Phương thức TT</th>
      <th scope="col">Tổng tiền</th>
      <th scope="col">Trạng thái</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
   <?php foreach($data as $r){?>
      <tr>
        <th scope="row"><?php echo $r['id']?></th>
        <th scope="row"><?php echo $r['full_name']?></th>
        <th scope="row"><?php echo $r['phone_number']?></th>
        <th scope="row"><?php echo $r['address']?></th>
        <th scope="row"><?php if($r['payment_methods'] == 'CashOnDelivery'){echo "TT khi nhận";}else{echo "Thẻ tín dụng";}?></th>
        <th scope="row"><?php echo  number_format($r['total'],2)?></th>
        <th scope="row"><?php if($r['order_status'] == 'ordering'){echo "chưa duyệt";}else{echo "đã duyệt";}?></th>
        <td><a href="?mod=quanlichitietdonhang&id=<?php echo $r['id']?>" type="button" class="btn btn-primary">Chi tiết đơn hàng</a></td>
        <td>
          <?php if($r['order_status'] == 'ordering'){?>
            <a href="?mod=quanlidonhang&act=accept&id=<?php echo $r['id']?>" onclick="return confirm('Bạn có thật sự muốn duyệt ?');" type="button" class="btn btn-primary">Duyệt</a>
          <?php }?>
          <a href="?mod=quanlidonhang&act=delete&id=<?php echo $r['id']?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
  });
</script>