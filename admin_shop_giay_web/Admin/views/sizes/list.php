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
<h2 style="text-align: center;">Quản lí size của sản phẩm có ID: <?php echo $_GET['id']?></h2>
<a href="?mod=quanlisize&act=add&id=<?php echo $_GET['id']?>" type="button" class="btn btn-primary" style="margin-bottom: 30px;">Thêm</a>
<table class="table table-bordered" id="example" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Size</th>
      <th scope="col">Số lượng</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
   <?php foreach($data as $r){?>
      <tr>
        <th scope="row"><?php echo $r['id']?></th>
        <th scope="row"><?php echo $r['size']?></th>
        <th scope="row"><?php echo $r['quantity']?></th>
        <td>
          <a href="?mod=quanlisize&act=edit&id=<?php echo $r['id']?>&idProduct=<?php echo $r['product_id']?>" type="button" class="btn btn-warning">Sửa</a>
          <a href="?mod=quanlisize&act=delete&id=<?php echo $r['id']?>&idProduct=<?php echo $_GET['id']?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
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