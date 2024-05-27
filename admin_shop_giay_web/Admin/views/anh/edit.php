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
       <form action="?mod=quanlianh&act=edit&id=<?php echo $_GET['id']?>&idProduct=<?php echo $_GET['idProduct']?>" method="POST" role="form" enctype="multipart/form-data">
           <div class="form-group">
               <label for="">Ảnh</label>
               <img src="<?php echo $anh?> " width="300" alt="">
               <input type="text" class="form-control" id="" placeholder="" name="image_path" value="<?php echo $anh?>">
           </div>
           <button type="submit" class="btn btn-primary">Cập nhật</button>
       </form>
   </table>