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
<h2 style="text-align: center;">Chi tiết các sản phẩm của đơn hàng có ID: <?php echo $_GET['id']?></h2>

<table class="table table-bordered" id="example" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Ảnh</th>
      <th scope="col">Giá</th>
      <th scope="col">Discount</th>
      <th scope="col">Số Lượng</th>
      <th scope="col">Size</th>
    </tr>
  </thead>
  <tbody>
   <?php foreach($data as $r){?>
      <tr>
        <th scope="row"><?php echo $r['name']?></th>
        <th scope="row"><img src="<?php echo $r['thumbnail_path']?>" width="300" alt=""></th>
        <th scope="row"><?php echo $r['price']?></th>
        <th scope="row"><?php echo $r['discount']?></th>
        <th scope="row"><?php echo $r['quantity']?></th>
        <th scope="row"><?php echo $r['size']?></th>
      </tr>
    <?php } ?>
  </tbody>
</table>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
  });
</script>