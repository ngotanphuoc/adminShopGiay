<?php if (isset($_COOKIE['msg'])) { ?>
           <div class="alert alert-success">
               <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
           </div>
       <?php } ?>
       <?php if (isset($_COOKIE['msg1'])) { ?>
           <div class="alert alert-warning">
               <strong>Thông báo</strong> <?= $_COOKIE['msg1'] ?>
           </div>
       <?php } ?>
<h2 style="text-align: center;">Thông tin khách hàng</h2>
<a href="?mod=quanliadmin&act=add" type="button" class="btn btn-primary" style="margin-bottom: 30px;">Thêm</a>
<table class="table table-bordered" id="example" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">oauth_uid</th>
      <th scope="col">name</th>
      <th scope="col">avatar</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
   <?php foreach($data as $r){?>
      <tr>
        <th scope="row"><?php echo $r['id']?></th>
        <td><?php echo $r['oauth_uid']?></td>
        <td><?php echo $r['name']?></td>
        <td><?php echo $r['avatar']?></td>
        <td><img src="<?php echo $r['name']?>" width="300" alt=""></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
  });
</script>