<?php
@include "..\connection.php";

$query = "SELECT * FROM `loaisanpham`";
$result = mysqli_query($conn,$query);

while ($row = mysqli_fetch_array($result,MYSQLI_NUM))
{
echo " ". $row[0]." " .$row[1]." " .$row[2];
}

    ?>