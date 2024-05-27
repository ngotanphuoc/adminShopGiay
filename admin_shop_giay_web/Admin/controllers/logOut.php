<?php
    class logOut{
       function logOut(){
        //xóa tất cả biến trong session
            session_unset(); 
            session_destroy(); 
            header('location: ../Login/loginView.php');
       }
    }
?>