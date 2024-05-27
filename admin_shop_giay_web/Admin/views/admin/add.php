<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
       <?php if (isset($_COOKIE['msg'])) { ?>
           <div class="alert alert-warning">
               <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
           </div>
       <?php } ?>
       <form action="?mod=quanliadmin&act=store" method="POST" role="form" enctype="multipart/form-data">
           <div class="form-group">
               <label for="">Tài khoản</label>
               <input type="text" class="form-control" id="" placeholder="" name="username">
           </div>
           <div class="form-group">
               <label for="">Mật khẩu</label>
               <input type="text" class="form-control" id="" placeholder="" name="password">
           </div>
           <div class="form-group">
               <label for="">Vai trò</label>
               <select name="role">
                    <?php foreach($dataRole as $r){?>
                        <option value="<?php echo $r['role']?>"><?php echo $r['name']?></option>
                    <?php } ?>
               </select>
           </div>
           <button type="submit" class="btn btn-primary">Tạo</button>
       </form>
   </table>