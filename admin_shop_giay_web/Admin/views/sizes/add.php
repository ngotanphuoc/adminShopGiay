<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
       <?php if (isset($_COOKIE['msg'])) { ?>
           <div class="alert alert-warning">
               <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
           </div>
       <?php } ?>
       <?php if (isset($_COOKIE['msg1'])) { ?>
           <div class="alert alert-warning">
               <strong>Thông báo</strong> <?= $_COOKIE['msg1'] ?>
           </div>
       <?php } ?>
       <form action="?mod=quanlisize&act=store&id=<?php echo $_GET['id'] ?>" method="POST" role="form" enctype="multipart/form-data">
           <div class="form-group">
               <label for="">Size </label>
               <input type="text" class="form-control" id="" placeholder="" name="size">
           </div>
           <div class="form-group">
               <label for="">Số lượng</label>
               <input type="text" class="form-control" id="" placeholder="" name="quantity">
           </div>
           <button type="submit" class="btn btn-primary">Tạo</button>
       </form>
   </table>