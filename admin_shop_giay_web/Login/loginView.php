<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="loginView.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    
        <title>Form login unitop.vn</title>
    </head>
    <body>
    <form method="post" action="login.php" class="box">
            <H1>ĐĂNG NHẬP TÀI KHOẢN</H1>
            <?php if(isset($_SESSION['error'])){?>
                <h3 style="color: white;"><?php echo $_SESSION['error']?></h3>
            <?php }?>
            <input style="color: white;" type="text" name="username" required placeholder="Username">
            <input style="color: white;" type="password" name="password" required placeholder="Password">
            <input type="submit" value="ĐĂNG NHẬP">
    </form>
        
    </body>
</html>