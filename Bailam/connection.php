<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $DBname = "qlbh";

    $conn = mysqli_connect("$host", "$user", "$password","$DBname");
    if ($conn){

        mysqli_select_db($conn,$DBname);

    }
    else{
        echo "Lỗi kết nối: " . mysqli_error();
    }
    ?>