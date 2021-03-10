<?php
@include "..\connection.php";

$query = "
DELETE FROM `loaisanpham`WHERE `maLoaiSanPham`='5' ";
if (mysqli_query($conn, $query)) {
    echo "Xóa thành công!";
    mysqli_close($conn);
}
else{
    echo "Lỗi truy vấn" . mysqli_error();
}
?>