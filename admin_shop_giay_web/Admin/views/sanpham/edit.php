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
       <form action="?mod=quanlisanpham&act=edit&id=<?php echo $_GET['id']?>" method="POST" role="form" enctype="multipart/form-data">
           <?php foreach($data as $r){?>
                <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?php echo $r['name']?>">
            </div>
            <div class="form-group">
                <label for="">Giá</label>
                <input type="text" class="form-control" id="" placeholder="" name="price" value="<?php echo $r['price']?>">
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <img src="<?php echo $r['thumbnail_path']?>" width="300" alt="">
                <input type="text" class="form-control" id="" placeholder="" name="thumbnail_path" value="<?php echo $r['thumbnail_path']?>">
            </div>
            <div class="form-group">
                <label for="">Discount</label>
                <input type="text" class="form-control" id="" placeholder="" name="discount" value="<?php echo $r['discount']?>">
            </div>
            <div class="form-group">
                <label for="">Danh mục và hãng sản xuất</label>
                <select name="category_id" id="">
                        <?php foreach($dataCategories as $r1){?>
                            <?php if($r1['id']==$idCategoryCurrent){?>
                                <option value="<?php echo $r1['id']?>" selected><?php echo $r1['name'].' - '; $obj = new quanLiSanPham; foreach($obj->getBrandById($r1['parent_id']) as $r2){echo $r2['name'];};?></option> 
                            <?php }else{?>
                                <option value="<?php echo $r1['id']?>"><?php echo $r1['name'].' - '; $obj = new quanLiSanPham; foreach($obj->getBrandById($r1['parent_id']) as $r2){echo $r2['name'];};?></option> 
                            <?php } ?>
                        <?php }?>
                </select>
            </div>
           <?php } ?>
           <button type="submit" class="btn btn-primary">Cập nhật</button>
       </form>
   </table>