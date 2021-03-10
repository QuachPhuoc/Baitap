<?php
@include "connection.php";

    $query = "
        Create table if not exists `loaisanpham`
        (
            `maLoaiSanPham` int (11) AUTO_INCREMENT,
            `tenLoaiSanPham` varchar (45),
            `dienGiai` varchar (45) ,
            primary key (maLoaiSanPham)
        )
    ";
    if(mysqli_query($conn,$query)){
        echo "Tạo bảng thành công!";
        mysqli_close($conn);
    }
?>