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
       <form action="?mod=quanlisanpham&act=store" method="POST" role="form" enctype="multipart/form-data">
           <div class="form-group">
               <label for="">Tên sản phẩm</label>
               <input type="text" class="form-control" id="" placeholder="" name="name">
           </div>
           <div class="form-group">
               <label for="">Giá</label>
               <input type="text" class="form-control" id="" placeholder="" name="price">
           </div>
           <div class="form-group">
               <label for="">Discount</label>
               <input type="text" class="form-control" id="" placeholder="" name="discount">
           </div>
           <div class="form-group">
               <label for="">Thumbnail</label>
               <input type="text" class="form-control" id="" placeholder="" name="thumbnail_path">
           </div>
           <div class="form-group">
               <label for="">Danh mục và hãng sản xuất</label>
               <select name="category_id" id="">
                    <?php foreach($dataCategories as $r){?>
                        <option value="<?php echo $r['id']?>"><?php echo $r['name'].' - '; $obj = new quanLiSanPham; foreach($obj->getBrandById($r['parent_id']) as $r1){echo $r1['name'];};?></option>
                    <?php } ?>
               </select>
           </div>
           <button type="submit" class="btn btn-primary">Tạo</button>
       </form>
   </table>