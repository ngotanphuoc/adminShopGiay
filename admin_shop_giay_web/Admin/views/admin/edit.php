<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
       <?php if (isset($_COOKIE['msg1'])) { ?>
           <div class="alert alert-warning">
               <strong>Thông báo</strong> <?= $_COOKIE['msg1'] ?>
           </div>
       <?php } ?>
       <form action="?mod=quanliadmin&act=edit&id=<?php echo $_GET['id']?>" method="POST" role="form" enctype="multipart/form-data">

            <div class="form-group">
               <label for="">Tài khoản</label>
               <input type="text" class="form-control" id="" placeholder="" name="username" value="<?php echo $username?>">
           </div>
           <div class="form-group">
               <label for="">Mật khẩu</label>
               <input type="text" class="form-control" id="" placeholder="" name="password" value="<?php echo $password?>">
           </div>
           <div class="form-group">
               <label for="">Vai trò</label>
               <select name="role" >
                    <?php foreach($dataRole as $r){?>
                        <?php if($role == $r['role']){?>
                            <option value="<?php echo $r['role']?>" selected><?php echo $r['name']?></option>
                        <?php }else{?>
                            <option value="<?php echo $r['role']?>"><?php echo $r['name']?></option>
                        <?php } ?>
                    <?php } ?>
               </select>
           </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>

       </form>
   </table>