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
       <form action="?mod=quanlidanhmuc&act=store" method="POST" role="form" enctype="multipart/form-data">
           <div class="form-group">
               <label for="">Tên danh mục </label>
               <input type="text" class="form-control" id="" placeholder="" name="name">
           </div>
           <div class="form-group">
               <label for="">Ảnh</label>
               <input type="text" class="form-control" id="" placeholder="" name="image_path">
           </div>
           <div class="form-group">
               <label for="">Hãng sản xuất</label>
               <select name="parent_id" id="">
                    <?php foreach($data as $r){?>
                    <option value="<?php echo $r['id']?>"><?php echo $r['name']?></option>
                    <?php } ?>
               </select>
           </div>
           <button type="submit" class="btn btn-primary">Tạo</button>
       </form>
   </table>