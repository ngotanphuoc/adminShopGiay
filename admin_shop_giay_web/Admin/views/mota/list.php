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
<h2 style="text-align: center;">Quản lí mô tả của sản phẩm có ID: <?php echo $_GET['id']?></h2>
<?php if(empty($data) == true){?>
    <a href="?mod=quanlimota&act=add&id=<?php echo $_GET['id']?>" type="button" class="btn btn-primary" style="margin-bottom: 30px;">Thêm</a>
<?php }?>
<table class="table table-bordered" id="example" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">Tiêu đề</th>
      <th scope="col">Nội dung</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
   <?php foreach($data as $r){?>
      <tr>
        <th scope="row"><?php echo $r['title']?></th>
        <th scope="row"><?php echo $r['content']?></th>
        <td>
          <a href="?mod=quanlimota&act=edit&id=<?php echo $r['id']?>&idProduct=<?php echo $r['product_id']?>" type="button" class="btn btn-warning">Sửa</a>
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