<?php
include 'condb.php';
$id=$_GET['id'];
$sql="DELETE FROM `mobile` WHERE `mobile`.`id` = $id;";
echo $sql;
if(mysqli_query($conn,$sql)){
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='show_mobile.php';</script>";
} else {
    echo "Error : " . $sql . "<br>" . mysqli_error($conn);
    echo "<script>alert('ไม่สามารถลบข้อมูลเรียบร้อย');</script>";
}

mysqli_close($conn);

?>