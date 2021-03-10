<?php
@include "..\connection.php";

$query = "
UPDATE `loaisanpham` SET `tenLoaiSanPham`='Phone' WHERE tenloaiSanPham ='Điện thoại'";
if (mysqli_query($conn, $query)) {
    echo "Cập nhật thành công!";
    mysqli_close($conn);
}
else{
    echo "Lỗi truy vấn" . mysqli_error();
}
?>