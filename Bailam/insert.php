<?php
@include "..\connection.php";

$query = "
    INSERT INTO `loaisanpham`(`maLoaiSanPham`, `tenLoaiSanPham`, `dienGiai`)
    VALUES ('','Điện thoại','Diễn giải'),
     ('','Máy in','Diễn giải'),
     ('','Chuột','Diễn giải'),
     ('','PC','Diễn giải')
    ";
if (mysqli_query($conn, $query)) {
    echo "Thêm thành công!";
    mysqli_close($conn);
}
else{
    echo "Lỗi truy vấn" . mysqli_error();
}
?>