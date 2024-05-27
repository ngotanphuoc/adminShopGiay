<?php 
    class connection{
        var $conn;
        function __construct()
        {
            //Tao ket noi CSDL
            $conn= mysqli_connect("localhost","root","phuoc@2209");
                                mysqli_select_db($conn, "pq_store_android");
                                mysqli_query($conn, "SET names 'utf8'");
                                if(!$conn){
                                    echo "Không thể kết nối đến Database!".mysqli_connect_error($conn);
                                }
            return $conn;       
        }

    }
?>