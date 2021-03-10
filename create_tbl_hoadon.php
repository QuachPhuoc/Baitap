<?php
@include "connection.php";

$query = "
        Create table if not exists `hoadon`
        (
            `maHoaDon` int (11) AUTO_INCREMENT,
            `ngayLapHD` DATE,
            primary key (maHoaDon)
        )
    ";
if(mysqli_query($conn,$query)){
    echo "Tạo bảng thành công!";
    mysqli_close($conn);
}
?>