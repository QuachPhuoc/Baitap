<?php
@include "connection.php";

$query = "
        Create table if not exists `sanpham`
        (
            `maSanPham` int (11) AUTO_INCREMENT,
            `tenSanPham` varchar (45),
            `dienGiai` varchar (45) ,
            `nhaSanXuat` varchar (20) ,
            `loaiSanPham_maLSP` int (11) ,
            primary key (maSanPham),
            foreign key (loaiSanPham_maLSP) references `loaisanpham`(`maLoaiSanPham`)
        )
    ";
if(mysqli_query($conn,$query)){
    echo "Tạo bảng thành công!";
    mysqli_close($conn);
}
?>