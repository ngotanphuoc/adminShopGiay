<?php
    //Khai báo sử dụng session
    session_start();
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');

    //Kết nối tới database
    include('connect_db.php');
    
    //Lấy dữ liệu nhập vào
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);
    
    
    $query = "select * from admin where username = '".$username."' and password = '".$password."'";
    $result = $conn->query($query);
    $row = $result->num_rows;
    if($row == 1)
    {
        while ($row = $result->fetch_assoc()) {
            $_SESSION['username'] = $row['username'] ;
            $_SESSION['role'] = $row['role'];
        }
        //xoa loi
            unset($_SESSION['error']);
            header('location: ../Admin/index.php');

    }else{
        $_SESSION['error'] = "khong dung tai khoan or mat khau";
        include('loginView.php');
    }
?>