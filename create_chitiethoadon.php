<?php
@include "connection.php";

$query = "
        Create table if not exists `chitiethoadon`
        (
            `maSanPham` int (11),
            `maHoaDon` int (11),
            `SoLuong` int,
            `DonGiaBan` int,
            foreign key (maSanPham) references `sanpham`(`maSanPham`),
            foreign key (maHoaDon) references `hoadon`(`maHoaDon`)
        )
    ";
if(mysqli_query($conn,$query)){
    echo "Tạo bảng thành công!";
    mysqli_close($conn);
}
?>