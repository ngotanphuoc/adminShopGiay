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
<h2 style="text-align: center;">Quản lí sản phẩm</h2>
<a href="?mod=quanlisanpham&act=add" type="button" class="btn btn-primary" style="margin-bottom: 30px;">Thêm</a>
<table class="table table-bordered" id="example" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Hãng sản xuất</th>
      <th scope="col">Danh mục</th>
      <th scope="col">Giá</th>
      <th scope="col">Discount</th>
      <th scope="col">Thumbnail</th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
   <?php foreach($data as $r){?>
      <tr>
        <th scope="row"><?php echo $r['product_id']?></th>
        <td><?php echo $r['name']?></td>
        <td><?php $obj = new quanLiSanPham; foreach( $obj->getParentIdById($r['category_id']) as $r1){ $parent_id = $r1['parent_id'];} foreach( $obj->getBrandById($parent_id) as $r2){ echo $r2['name'];} ?></td>
        <td><?php foreach( $obj->getParentIdById($r['category_id']) as $r1){ echo $r1['name'];};?></td>
        <td><?php echo number_format($r['price'])?></td>
        <td><?php echo $r['discount']?></td>
        <td><img src="<?php echo $r['thumbnail_path']?>" width="300" alt=""></td>
        <td>
          <a href="?mod=quanlisize&id=<?php echo $r['product_id']?>" type="button" class="btn btn-primary">Sizes</a>
        </td>
        <td>
          <a href="?mod=quanlimota&id=<?php echo $r['product_id']?>" type="button" class="btn btn-primary">Mô Tả</a>
        </td>
        <td>
          <a href="?mod=quanlianh&id=<?php echo $r['product_id']?>" type="button" class="btn btn-primary">Ảnh</a>
        </td>
        <td>
          <a href="?mod=quanlisanpham&act=edit&id=<?php echo $r['product_id']?>" type="button" class="btn btn-warning">Sửa</a>
          <a href="?mod=quanlisanpham&act=delete&id=<?php echo $r['product_id']?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
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